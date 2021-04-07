<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
// Creates connection
$connect = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
// Checks connection


if(!$connect){
  die('Connection failed'.mysqli_error());

}


?>
