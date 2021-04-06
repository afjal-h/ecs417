<?php
session_start();


 ?>

<!DOCTYPE html>
<html>
    <head>
              <link rel="stylesheet" type="text/css" href="reset.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />

      <title>About Me- Mohammed Afjal Hussain</title>
    </head>
    <body>
        <div class="box">
          <header>
            <div class="navwrapper">
              <div class="logoplacement">
                <a href="index.php"><img src="images/logo2.png" class="Logo" alt="LOGO"></a>
              </div>
          <nav>
            <a href="about.php">About Me</a>
            <a href="education.php">Qualifications</a>
            <a href="projects.php">Projects</a>
            <a href="blog.php">Blog</a>
            <?php

            if (isset($_SESSION['User'])){
              echo "<a href='logout.php?logout'>Logout</a>";

            }
            else{
              echo "<a href='login.html'>Login</a>";

            }
            ?>
          </nav>
        </div>
      </header>
      <div class="AboutContainer">
          <h1>About Me</h1>
        <br><br><br>
        <div class="aboutContent">
          <figure>
                  <img src="images/portrait.png" class="picture" alt="Me">
        </figure>
          <div class="aboutText">
            <br><br><br><br>
            <h2>Mohammed Afjal Hussain</h2>
            <figcaption>Aspiring Video Game Developer.</figcaption>
            <br><br>
            <article>
          <p> I am currently a student at Queen Mary University of London studying Computer science.
            I aim to be in the field of video game development. With this degree, i will have a deeper understanding of important concepts that will aid me in achieving my spot in my chosen field.
            I am proficient with languages such as Visual Basic, Java and Python and have created projects that demonstrate my proficiency with them.</p>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
          </article>
                        </div>

      </div><br><br><br>
          <h1>Skills</h1>
            <br><br><br>
    <div class="Skills">


      <div class="skillbar">
        <p> Java</p>
        <div class="skill-container">
          <div class="skill java">80%</div>
          </div>

          <br>
          <p>HTML</p>
          <div class="skill-container">
            <div class="skill html">75%</div>
            </div>
            <br>
            <p>CSS</p>
            <div class="skill-container">
              <div class="skill css">60%</div>
              </div>
              <br>

              <p>Python</p>
              <div class="skill-container">
                <div class="skill python">65%</div>
                </div>

    </div>
    </div><br><br><br></div><br><br><br><br><br>

    <footer>
      <div class ="footercontent">
      <ul>
        <li><a href="about.html">About Me</a></li>
        <li><a href="education.html">Education</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="login.html">Login</a></li>
      </ul>
      <div class="footer-bottom">
      <p> © Copyright Mohammed Afjal Hussain 2020</p>
    </div>
  </div>
    </footer>
    </body>
</html>
