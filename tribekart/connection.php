<?php

// Establish Connection with Database
$con=mysqli_connect("localhost","develope_develop","Migids120#","develope_tribalshop");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

?>