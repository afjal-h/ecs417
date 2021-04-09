<?php
session_start();
if (!isset($_SESSION['User'])){
  header("location:login.html");

}


 ?>
<!DOCTYPE html>
<html>
    <head>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
          <input class="buttn"type="button" onclick="preview()"value="Preview">
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
        function preview(){
          document.getElementById('title').innerHTML = document.getElementById('inputbox').value;
          document.getElementById('content').innerHTML = document.getElementById('blog_input_text').value;
        }
        </script>

      </div>
      </div>
      <div class="d-flex justify-content-center">
          <div class="card text-white bg-dark mt-5" style="width: 50rem;">
              <div class="card-body">
                  <h2 class="card-title" id="title"></h2>
                  <p class="card-text" id="content"></p>
                  <p class="card-text" id="date"></p>
                  <button class="btn btn-light">Read Comments </button>
              </div>
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
