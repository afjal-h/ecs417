<?php
include "getBlog.php";
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
            <a href="writeBlog.php" class="btn btn-light">+ New Post</a>

      </div>
      <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 300rem;">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $q['title'];?></h3>
                            <p class="card-text"><?php echo $q['content'];?></p>
                            <p class="card-text"><?php echo substr($q['date'], 0, 50);?></p>
                            <a href="viewPost.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More </a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>

    </div>
    </body>
</html>
