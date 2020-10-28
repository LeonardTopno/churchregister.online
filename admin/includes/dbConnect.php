<?php
$dbHost = "localhost";
$dbUsername = "develope_root";
$dbPassword = "Migids@123";
$dbName = "develope_universe";

// Establish Connection with Database [OOP Way]
$conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

// Check connection
if ($conn -> connect_errno) {
  die("Connection failed: " . $conn->connect_error); 
}

//Test connection visually on screen
/*
else {
     echo "Connection successfully established.";
}
*/
?>