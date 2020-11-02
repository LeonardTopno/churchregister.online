<?php
$dbHost = "localhost";
$dbUsername = "develope_root";
$dbPassword = "Migids@123";
$dbName = "develope_universe";

//Switching the dbhost when connecting from Macbook
//$hostname = getenv('HTTP_HOST');
//echo $hostname;
//if ($hostname == "localhost:8888")
//    {
//      echo "Got the host name";
//      $dbHost="162.222.226.11";
//    }

// Establish Connection with Database [OOP Way]
$mysqli = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}//else {
     echo"MAst hai rey baba";
//}




/*
$con=mysqli_connect("localhost","develope_root","Migids@123","develope_universe");


if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
*/

?>