<?php
// Establish Connection with Database
// include "connection.php";
$con=mysqli_connect("localhost","develope_root","Migids@123","develope_universe");

$id = $_GET['Id'];

// $mobile=$_POST['mobile'];
// $email=$_POST['email'];

// Push Data into table
// $sql = "UPDATE userinfo SET mobile='$mobile', email='$email' WHERE user_id ='$id'";      
$sql = "UPDATE userinfo SET current_address='" . $_POST['Cuadd'] . "',mobile='" . $_POST['Mobile'] . "',email='" . $_POST['Email'] . "' WHERE user_id ='$id'";
$update=mysqli_query($con,$sql);

if($update)
{
    // Close connection
    mysqli_close($con); 
   echo '<script type="text/javascript">alert("Data Updated Succesfully");window.location=\'edit_baptism.php\';</script>'; // redirects to all records page
    exit;	
}
else
{
    // display error message if not delete
    echo '<script type="text/javascript">alert("Error deleting record");window.location=\'edit_baptism.php\';</script>'; 
}
?>