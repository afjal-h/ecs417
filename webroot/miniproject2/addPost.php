<?php
require_once('connection.php');
session_start();
$title= $_POST['title'];
$content= $_POST['content'];


$query= "INSERT INTO posts (title,content) VALUES('$title','$content')";
mysqli_query($connect, $query);
header("location: blog.php");






 ?>
