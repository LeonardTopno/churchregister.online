<?php
/* Database connection start */
$servername = "localhost";
$username = "develope_root";
$password = "Migids120#";
$dbname = "develope_universe";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>