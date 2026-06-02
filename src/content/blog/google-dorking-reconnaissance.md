---
title: "Google Dorking for Advanced Reconnaissance"
description: "How to refine search queries using advanced operators to locate exposed configurations and secure them via robots.txt."
pubDate: "2026-05-15"
author: "Harishbabu Rengaraj"
tags: ["Cybersecurity", "Reconnaissance", "Web"]
---

Google Dorking (also known as Google Hacking) involves using advanced search operators to find information that is difficult to locate through standard search queries. While search engines index public web pages, misconfigured servers often allow indexing of private administration panels, log files, or raw database backups.

In this note, we will look at how Google Dorks work, the operators available, and how to protect web assets from inadvertent indexing.

---

## 1. What is Google Dorking?

At its core, Google Dorking is a way of refining search queries. It is completely legal, as it only retrieves information that web crawlers (like Googlebot) have already scraped and made publicly accessible. However, malicious actors frequently use these queries during the reconnaissance phase of an attack to find "juicy" targets without scanning them directly.

---

## 2. Advanced Search Operators

Google supports special operators that query specific sections of a web page:

| Operator | Query Example | Description |
| :--- | :--- | :--- |
| `site:` | `site:github.com` | Limits results to a specific domain or host. |
| `inurl:` | `inurl:"admin"` | Shows results where the term appears in the page URL. |
| `intitle:` | `intitle:"Index of"` | Searches for pages containing the term in the HTML title. |
| `filetype:` | `filetype:sql` | Filters results by file extension (e.g., pdf, xml, log, config). |
| `intext:` | `intext:"password"` | Searches only the body text, ignoring URLs and titles. |
| `cache:` | `cache:example.com` | Shows the last cached snapshot of a page. |

You can combine these operators using logical `AND` / `OR` keywords to build highly specific filters.

---

## 3. Real-World Exposures

Here are examples of how basic misconfigurations reveal sensitive files via simple searches:

### Exposing FTP configuration files:
```bash
filetype:config inurl:web.config inurl:ftp
```
This search queries for files named `web.config` containing database passwords or connection string parameters indexed on public FTP servers.

### Locating IP Camera streams:
```bash
intitle:"LiveView / – AXIS" | inurl:view/view.shtml
```
This targets the URL schema of Axis network cameras that have been exposed to the web without authentication.

---

## 4. How to Prevent Dorking: `robots.txt`

The most effective way to prevent search engines from indexing your sensitive panels or files is by configuring a `robots.txt` file in the root folder of your website.

Think of `robots.txt` as a `.gitignore` file for search engine web crawlers. It outlines which directories crawlers are disallowed from visiting:

```http
User-Agent: *
Disallow: /search
Disallow: /wp-admin/
Disallow: /private/
Disallow: /tmp/

Sitemap: https://yourdomain.com/sitemap.xml
```

### Best Practices:
1. **Never put secrets in robots.txt**: Remember that `robots.txt` is readable by anyone. Listing a path like `Disallow: /super-secret-admin-passwords/` actually points attackers directly to your assets.
2. **Implement proper authentication**: A crawler will respect `robots.txt`, but a malicious scanner will not. Ensure all sensitive folders are blocked by password controls, not just crawler rules.
