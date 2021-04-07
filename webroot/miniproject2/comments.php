<?php
include "getComments.php";
session_start();


 ?>

<!DOCTYPE html>
<html>
    <head>
              <link rel="stylesheet" type="text/css" href="reset.css" />

         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
          <link rel="stylesheet" type="text/css" href="style.css" />
      <title>Blog- Mohammed Afjal Hussain</title>
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
      <div class="BlogContainer">


        <div class="container mt-5">
          <div class="text-center">
            <div class="form-group">
    <h2> Comments</h2>
    <?php
    if (!isset($_SESSION['User'])){
      echo "<a href='login.html' class='btn btn-light' >Login to add comments </a>";

    }
    else{
      echo '  <form id="field"action="addComment.php" method="POST">
        <textarea class="form-control" name="content" rows="3"></textarea>
         <input type="hidden" id="Id" name="postId" value='.$_REQUEST["id"].';>
        <button type="submit" class="btn btn-dark">Submit</button>
      </form>';
    }

     ?>
  </div>

      </div>
      <div class="row">
            <?php foreach($result as $q){ ?>
                <div class="d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 100rem;">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $q['name'];?></h3>
                            <p class="card-text"><?php echo $q['content'];?></p>
                            <a href="deleteComment.php? id=<?php echo $q['id'];?>" name="delete" class="btn btn-light">Delete </a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>

    </div>
    </body>
</html>
