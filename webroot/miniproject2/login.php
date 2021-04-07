<?php

require_once('connection.php');
session_start();
if(isset($_POST['Login'])){
  if(empty($_POST['email'])|| empty($_POST['password'])){
    echo "EMPTY VALUES";
  }

  else{
    $search="select * from users where email= '".$_POST['email']."' and password= '".$_POST['password']."'";
    $result=mysqli_query($connect,$search);
    if(mysqli_fetch_assoc($result)){
      $namefetch=mysqli_query($connect,"select Firstname from users where email= '".$_POST['email']."' ");
      $name = mysqli_fetch_array($namefetch);
      $adminfetch=mysqli_query($connect,"select admin from users where email= '".$_POST['email']."' ");
      $admin = mysqli_fetch_array($adminfetch);
      $_SESSION['Admin']= $admin['admin'];
      $_SESSION['User']=  $name[0];
      header("location:writeBlog.php");
    }

    else{
      header("location:login.html");
    }
  }
}




?>
