<?php
session_start();


 ?>
<!DOCTYPE html>
<html>
    <head>
              <link rel="stylesheet" type="text/css" href="reset.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />
      <title>Education- Mohammed Afjal Hussain</title>
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
      <div class="EducationContainer">
                <h1>Education</h1>
      <br>
      <div class="educationContent">
        <table class="education-table">
          <thead>
            <tr>
              <th>Study Period</th>
              <th>Place of Institution</th>
              <th>Grades</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2013-2018</td>
              <td><img src="images/icknield.png"> </td>
              <td>English:7&7<br> Maths:7<br> Science:7&8<br> Geography:6<br> History:7<br> Graphics:4<br> Computer Science:7 </td>
            </tr>

            <tr>
              <td>2018-2020</td>
              <td><img src="images/sixthform.png"></td>
              <td>Computer Science:A<br> Media Studies:A<br> Maths:B<br></td>
            </tr>

            <tr>
              <td>2020-Current</td>
              <td><img src="images/uni.png"></td>
              <td>TBA</td>
            </tr>
          </tbody>
        </table>
        <br>
                <h1>Experience</h1>
                <div class="Experience">
                  <table class="Experience-table">
                    <thead>
                      <tr>
                        <th>Period</th>
                        <th>Job</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>2018-2018</td>
                        <td>Luton Sixth Form: Volunteering</td>
                        <td>I was teaching students about computer science and the content, and skills that would be required to do the subject </td>
                      </tr>

                      <tr>
                        <td>2019-2020</td>
                        <td>Video editing and Photography</td>
                        <td>I participated in freelancing for video editing and Photography. It ranged from weddings to product shoots</td>
                      </tr>

                      <tr>
                        <td>2020-Current</td>
                        <td>Music Producing</td>
                        <td>Started creating musical compositions for clients which ranged from music for video game soundtracks to beat production</td>
                      </tr>
                    </tbody>
                  </table>





                <br><br></div><br><br><br><br><br><br><br><br>



      </div>
    </div>
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
