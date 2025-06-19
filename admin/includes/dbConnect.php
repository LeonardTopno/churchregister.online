<?php
$dbHost = "localhost";
$dbUsername = "develope_root";
$dbPassword = "Migids@123";
$dbName = "develope_universe";


// $dbHost = "localhost";
// $dbUsername = "root";
// $dbPassword = "root1";
// $dbName = "develope_universe";

//Switching the dbhost when connecting from Macbook
//$hostname = getenv('HTTP_HOST');
//echo $hostname;
//if ($hostname == "localhost:8888")
//    {
  //    echo "Got the host name";
  //    $dbHost="162.222.226.11";
  //  }


// Establish Connection with Database [OOP Way]
$conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

// Check connection
if ($conn -> connect_errno) {
  die("Connection failed: " . $conn->connect_error); 
}

//Test connection visually on screen

// else {
//      echo "Connection successfully established.";
// }

?>