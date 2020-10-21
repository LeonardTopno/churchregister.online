<?php

// Establish Connection with Database
$con=mysqli_connect("localhost","develope_root","Migids@123","develope_universe");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// selecting particular user using id 
$id=($_GET["Id"]);

// fetching from userinfo table
$sql="SELECT * from userinfo where user_id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$fname = $row['first_name'];
	$MName = $row['middle_name'];
	$LName=$row['last_name'];
	$gender=$row['gender_id'];
	$DOB=$row['dob'];
	$DOBaptism=$row['bapt_date'];
	$Padd=$row['permanent_address'];
	$Cadd=$row['current_address'];
	$Fathername=$row['father_name'];
	$Fathersname=$row['father_surname'];
	$Foccupation=$row['father_occupation'];
	$Mothername=$row['mother_name'];
	$Mothersname=$row['mother_surname'];
	$Moccupation=$row['mother_occupation'];
	$Mobile=$row['mobile'];
	$Email=$row['email'];
	
// fetching from eventbaptism table
$sql_eventbaptism = "select * from eventbaptism where user_id = $id";
$result1 = mysqli_query($con, $sql_eventbaptism);
$row = mysqli_fetch_array($result1, MYSQLI_ASSOC);
	$Country=$row['country'];
	$State=$row['states'];
	$District=$row['district'];
	$Diocese=$row['diocese'];
	$Church=$row['church'];
	$Minister=$row['clergyman'];
	$GFname=$row['godfather_name'];
	$GFdom=$row['godfather_domicile'];
	$GMname=$row['godmother_name'];
	$GMdom=$row['godmother_domicile'];
	$DOBaptism=$row['bapt_date'];
	
?>