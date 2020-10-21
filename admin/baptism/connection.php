<?php

// Establish Connection with Database
$con=mysqli_connect("localhost","develope_root","Migids@123","develope_universe");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

?>