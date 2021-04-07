<?php


require_once('connection.php');


if (isset($_REQUEST['id'])){

  $search="DELETE FROM comments where id= '".$_REQUEST['id']."' ";
  $result=mysqli_query($connect,$search);
  header("location:blog.php");
}


 ?>
