<?php
$Id = $_GET['id'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
// Establish Connection with Database
include "connection.php";
$sql = "UPDATE userinfo SET email='".$email."',mobile='".$mobile."' WHERE user_id=".$Id."";
mysqli_query($sql,$con);
mysqli_close($con);
echo '<script type="text/javascript">alert("Data Updated Succesfully");window.location=\'edit_baptism.php\';</script>';
?>