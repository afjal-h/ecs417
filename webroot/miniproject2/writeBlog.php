<?php
session_start();
if (!isset($_SESSION['User'])){
  header("location:login.html");

}


 ?>
<!DOCTYPE html>
<html>
    <head>
              <link rel="stylesheet" type="text/css" href="reset.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />
      <title>New Blog- Mohammed Afjal Hussain</title>
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
      <div class="newBlogContainer">
          <h1>New Blog</h1>
        <br><br>
        <div class="newBlogbox">
          <form id="field"action="addPost.php" method="POST">
          <div class="inputs">
          <div class="inputbox">
          <input type="text" id="inputbox" placeholder="Title" name="title">
          </div>
          <div class="inputbox2">
            <textarea type="text" id="blog_input_text" name ="content" placeholder="Please Enter your text here"></textarea>
          </div>
          <button class="buttn" id="submit" name="submit" type="submit" onclick="checkempty()" value="Post">Post</button>
          <input class="buttn"type="button" onclick="myFunction()"value="Clear">
          </div>
        </form>
        <script>
        function myFunction(){
          var input = confirm("Are you sure you want to clear all fields?");
          if (input == true) {
            document.getElementById("field").reset();
          }
        }
        function checkempty()
        {
          var form = document.getElementById('field');
          form.addEventListener("submit", (ye) => {
              if(form.inputbox.value === "" && form.blog_input_text.value === "")
              {
                  ye.preventDefault();
                  document.getElementById('inputbox').setAttribute("style", "box-shadow: 0 0 10px red;");
                  document.getElementById('blog_input_text').setAttribute("style", "box-shadow: 0 0 10px red;");
              }
              else if (form.inputbox.value === "") {
                ye.preventDefault();
                document.getElementById('inputbox').setAttribute("style", "box-shadow: 0 0 10px red;");
              }
              else if(form.blog_input_text.value === ""){
                ye.preventDefault();
                document.getElementById('blog_input_text').setAttribute("style", "box-shadow: 0 0 10px red;");
              }
          });
        }
        </script>

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
