<?php


require_once('connection.php');


if (isset($_REQUEST['id'])){

  $search="SELECT * FROM comments where post_id= '".$_REQUEST['id']."' ";
  $result=mysqli_query($connect,$search);
}


 ?>
