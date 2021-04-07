<?php
require_once('connection.php');
session_start();
$name= $_SESSION['User'];
$content= $_POST['content'];
$id= $_POST['postId'];

$query= "INSERT INTO comments (post_id,name,content) VALUES('$id','$name','$content')";
mysqli_query($connect, $query);
header("location:blog.php");






 ?>
