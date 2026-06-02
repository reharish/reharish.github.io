---
title: "The /proc File System and LFI Vulnerabilities"
description: "How the virtual /proc filesystem in Linux can be used to leak process commands and source code via Local File Inclusion (LFI) vulnerabilities."
pubDate: "2026-05-20"
author: "Harishbabu Rengaraj"
tags: ["Linux", "Cybersecurity", "LFI", "Pentesting"]
---

During security assessments or CTFs (like HTB's Bagel machine), you might encounter **Local File Inclusion (LFI)** vulnerabilities. LFI allows an attacker to trick a web application into reading files on the host system.

When auditing Linux-based web servers, one of the most powerful targets to query is the virtual `/proc` filesystem. In this note, we will look at how process structures inside `/proc` can be enumerated to find source code, configuration paths, and running environments.

---

## 1. What is the `/proc` File System?

The `/proc` directory is a virtual, pseudo-filesystem in Linux. The files inside it do not occupy physical space on disk; instead, they are generated dynamically by the kernel on the fly to expose system status and process telemetry.

Every running process on a Linux host gets assigned a folder named after its Process ID (PID) under `/proc/[PID]/`.

---

## 2. Exploiting LFI with `/proc`

If a web server is vulnerable to LFI via a query parameter (e.g., `http://target.htb:8000/?page=../../../../etc/passwd`), we can read files outside the web root. However, reading standard configurations might not reveal the application code itself. This is where `/proc` comes in.

### A. Grabbing the Current Process: `/proc/self/`
Instead of guessing the PID of the web server, we can query `/proc/self/`, which symlinks to the process ID currently accessing the filesystem (i.e. the web server process itself).

- **`/proc/self/cmdline`**: Contains the command parameters used to start the current process (fields are separated by null bytes `\x00`).
  * *Example output*: `python3app.py`
  This instantly tells us that the backend is running a Python script named `app.py` in the current working directory! We can now fetch `app.py` directly using LFI to read its source code.

- **`/proc/self/environ`**: Lists all environment variables exported for the process. This frequently leaks API tokens, database passwords, or setup parameters.

---

## 3. Enumerating Backends and WebSockets

Once the source code is read, we can find hidden endpoints. For example, auditing the leaked `app.py` might reveal internal routes:

```python
@app.route('/orders')
def order():
    try:
        ws = websocket.WebSocket()    
        ws.connect("ws://127.0.0.1:5000/") # connect to internal order app
        order = {"ReadOrder": "orders.txt"}
        ws.send(json.dumps(order))
        return json.loads(ws.recv())['ReadOrder']
    except:
        return "Unable to connect"
```

This tells us:
1. There is an internal WebSocket application running on port `5000`.
2. It interacts with local files (like `orders.txt`) via a JSON payload.
3. We can target this internal application to escalate privileges.

---

## 4. Reading Custom PIDs

If we need to find other applications (like a database engine or a Jenkins instance running on another port), we can enumerate Process IDs:

* **`/proc/[PID]/cmdline`**: Loop through numbers (PIDs 1, 2, 3, etc.) to list all active system commands.
* Useful kernel descriptors:
  * `/proc/cmdline`: Lists kernel boot flags.
  * `/proc/version`: Discloses kernel version and compilation parameters.
  * `/proc/net/tcp`: Lists all active TCP listening sockets in Hex format, allowing us to scan local ports from the inside.

---

## 5. Mitigation
To prevent LFI vulnerability exposures:
- **Sanitize inputs**: Ensure parameters are strictly matched against a whitelist of expected page names.
- **Never allow relative path traversals**: Filter out `../` and `./` sequences from input parameters.
- **Run in sandboxes**: Use containers (Docker, lxc) or run processes with minimal permissions so they cannot traverse host system directories like `/proc`.
