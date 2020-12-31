<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175251335-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-175251335-1');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HarishBabu Rengaraj</title>
	<link rel="shortcut icon" href="thumb.png" type="image/x-icon">
	<link rel="icon" href="thumb.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link href="StyleSheets/bootstrap.min.css" rel="stylesheet">
    <link href="StyleSheets/styles.css" rel="stylesheet">
</head>

<body>
    <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <!-- End #mobile-menu-toggle -->
    <header>
        <div id="mobile-menu-close">
            <span>Close</span> <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <ul id="menu" class="shadow">
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#experience">Experience</a>
            </li>
            <li>
                <a href="#education">Education</a>
            </li>
            <li>
                <a href="#projects">Projects</a>
            </li>
            <li>
                <a href="#skills">Skills</a>
            </li>
            <li>
                <a href="#Achievments">Achievments</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </header>
    <!-- End header -->

    <div id="lead">
        <div id="lead-content">
            <h1>HarishBabu Rengaraj</h1>
            <h2>Engineer</h2>
            <a href="#" class="btn-rounded-white"><i class="fa fa-download" aria-hidden="true"></i> Download Resume</a>
            <a href="https://linkedin.com/in/harishbabu-rengaraj" target="_blank" class="btn-rounded-white"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a>
        </div>
        <!-- End #lead-content -->

        <div id="lead-overlay"></div>

        <div id="lead-down">
            <span>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </span>
        </div>
        <!-- End #lead-down -->
    </div>
    <!-- End #lead -->

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="heading">About Me</h2>
                    <br>
                </div>
                <div class="col-md-8">
                    <p>
                        <b>I'm HarishBabu rengaraj from Pattukkottai and I'm <?php include "about.php"; ?> years old IT employee. As a Beginner in the IT field, while making a  positive  contribution, I would like to build a career, making the best use of my analytical, creative, and logical skills to perform the job efficiently.</b>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End #about -->

    <div id="experience" class="background-alt">
        <h2 class="heading">Experience</h2>
        <div id="experience-timeline">
            <div data-date="May 2019 - till now">
                <h3><a href="http://satvatinfosol.com/" target="_blank" style="text-decoration:none;" rel="noreferrer"> Satvat Infosol Pvt Ltd.</a></h3>
                <h4>Technical Support Trainee</h4>
                <p>
                  <b>As a trainee, I had room for developing myself as an IT employee. I had lots of training sessions on Networking Basics, Linux Basics, and Server Configurations.</b>
                </p>
            </div>
        </div>
    </div>
    <!-- End #experience -->

    <div id="education">
        <h2 class="heading">Education</h2>
        <div class="education-block">
            <h3>Kings College Of Engineering (Anna University)</h3>
            <span class="education-date">Aug 2015 - April 2019</span>
            <h4>Bachelor of Engineering</h4>
            <p>
              I have a <b>Bachelor's degree</b> in Electricals and Electronics Engineering with 6.59 CGPA and <b>FIRST CLASS</b>
            </p>
        </div>
        <!-- End .education-block -->

        <div class="education-block">
            <h3>Higher Secondary School (State Board)</h3>
            <span class="education-date">Jun 2013 - April 2015</span>
            <h4>Computer Science and Mathematics</h4>
            <ul>
                <li>
                  Higher Secondary Schooling at <b>Arunodhaya Higher Secondary School</b>, Pattukkottai with <b>80.2%</b>.
                </li>

            </ul>
        </div>
        <!-- End .education-block -->
    </div>
    <!-- End #education -->

    <div id="projects" class="background-alt">
        <h2 class="heading">Projects</h2>
        <div class="container">
            <div class="row">
                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="Assets/images/project-BS.png" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>Battery-Guard for Linux</h3>
                        <p>
                          Lithium-ion or lithium polymer batteries have certain life-cycles (i.e.,300 times 0% to 100% and 100% to 0%) by maintaining a battery between 15% to 90% leads to good battery life.<br><br>Battery guard is a simple Shell script which protects laptop battery and gives long battery life by notifying user frequently about battery state while charging continuously for a prolonged period.
                        </p>
                        <a href="https://github.com/reharish/Battery-guard" style="text-decoration:none;" target="_blank">Git Link</a>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->

                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="Assets/images/timebuster.jpg" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3><a href="https://reharish.github.io/web" style="text-decoration:none;" target="_blank">TimeBuster</a></h3>
                        <p>
                          A Simple site written HTML, CSS, and JavaScript Contains time busting good old games such as Chess, tic-tac-toe, and etc.. developed by Open Source programmers at Sololearn Community.
                        </p>
                        <a href="https://reharish.github.io/web" style="text-decoration:none;" target="_blank">Site Link</a>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->
            </div>
        </div>
    </div>
    <!-- End #projects -->

    <div id="skills">
        <h2 class="heading">Skills</h2>
        <ul>
            <!-- <li>JavaScript</li> -->

            <!-- <li>Ruby</li>
            <li>Go</li>
            <li>Node.js</li>
            <li>AngularJs</li>
            <li>React</li>
            <li>Elixir</li>
            <li>Java</li>
            <li>C</li>
            <li>C#</li>
            <li>C++</li> -->
            <!-- <li>Ruby on Rails</li>
            <li>JavaScript</li>
            <li>Python</li>
            <li>Ruby</li>
            <li>Go</li>
            <li>Node.js</li>
            <li>AngularJs</li>
            <li>React</li> -->
            <li>#Linux</li>
            <li>#Shell Script</li>
            <li>#Python</li>
            <li>#Php</li>
            <li>#MySQL</li>
            <li>#Java</li>
        </ul>
    </div>
    <!-- End #skills -->

    <!-- <div id="contact">
    <h2>Get in Touch</h2>
    <div id="contact-form">
        <form method="POST" action="https://formspree.io/email@email.com">
            <input type="hidden" name="_subject" value="Contact request from personal website" />
            <input type="email" name="_replyto" placeholder="Your email" required>
            <textarea name="message" placeholder="Your message" required></textarea>
            <button type="submit">Send</button>
        </form>
    </div> -->


        <!-- End #contact-form -->
        <!-- Achievments  -->
    <div class="optional-section background-alt" id="Achievments">
    <h2 class="heading">Achievments</h2>

    <div class="optional-section-block">
        <h3></h3>
        <p>
        <b>You can! When your hobby is learning</b>
        </p>
        <ul>
          <li> Certified in <b>NSE 2</b> Network Security Associate by FORTINET NSE Institude.</li>
          <li> Completed <b>Fundamentals in Cybersecurity</b> course by Cisco Networking Academy®.</li>
          <li> Completed <b>Linux Essentials</b> course by Cisco Networking Academy®.</li>
          <li> Completed IN-PLANT TRAINING Internship program on IOT applications using <b>Raspberry Pi and Aurdino</b> .</li>
          <li> Certified in <b>Python3</b> Fundamentals by Sololearn, inc.</li>
          <li> Cerified in <b>PCAP:Programming Essentials</b> in Python from OpenEDG Python Institude.</li>
          <br>
          <a href="https://drive.google.com/drive/folders/14AizA7DAC95vqPzkvZq5JfXg1uVk8F7d?usp=sharing" style="text-decoration:none;" target="_blank">Certificates</a>
        </ul>

    </div>
    <!-- End .optional-section-block -->

</div>
<!-- End .optional-section -->
<div id="contact">
<h1><font color="white">Contact</form></h1><br>
<h2>Get in Touch</h2>
<div class="optional-section-block">

  <ul>
    <li><b>Gmail :</b><a href="mailto: rengarajharish@gmail.com" style="text-decoration:none;" target="_blank"><font  style="text-decoration:none;"> rengarajharish@gmail.com</a></font></li>
    <li><b>Github :</b><a href="https://github.com/reharish"  style="text-decoration:none;" target="_blank"> reharish  </a></li>
    <li><b>Sololearn :</b><a href="https://www.sololearn.com/Profile/12834697" style="text-decoration:none;" target="_blank"><font style="text-decoration:none;"> harishbaburengaraj</a></font><br></li>
    <li><b>Linkedin :</b><a href="https://linkedin.com/in/harishbabu-rengaraj" style="text-decoration:none;" target="_blank"><font  style="text-decoration:none;"> harishbabu-rengaraj</a></font></li>
    <li><b>Instagram :</b><a href="https://www.instagram.com/_white_dot_" style="text-decoration:none;" target="_blank"><font  style="text-decoration:none;"> @_white_dot_</a></font></li>
    <li><b>Phone :</b> <a href="tel: +918940922998" style='text-decoration:none;' target="_blank">+91 89409-22998</a></li>
  </ul>
</div>
    </div>
    <!-- End #contact -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 copyright">
                    <p>
                        Copyright &copy; HarishBabu
                    </p>
                </div>
                <div class="col-sm-2 top">
                    <span id="to-top">
                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="col-sm-5 social">
                    <ul>
                        <li>
                            <a href="https://github.com/reharish" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://stackoverflow.com/" target="_blank"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/in/harishbabu-rengaraj" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <!-- <li>
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li> -->
                        <li>
                            <a href="" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.google.com/search?q=harishbabu+rengaraj" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="JavaScript/scripts.min.js"></script>
</body>

</html>
