<?php
$dbHost = "localhost";
$dbUsername = "develope_root";
$dbPassword = "Migids@123";
$dbName = "develope_universe";

// Establish Connection with Database [OOP Way]
$mysqli = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else {
     echo"MAst hai rey baba";
}




/*
$con=mysqli_connect("localhost","develope_root","Migids@123","develope_universe");


if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
*/

?>