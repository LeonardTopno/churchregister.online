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
	/*
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
	$Email=$row['email'];*/

	$fname = $row['first_name'];
	$MName = $row['middle_name'];
	$LName=$row['last_name'];
	$gender=$row['gender_id'];
	$DOB=$row['dob'];
	$Padd=$row['permanent_address'];
	$Cadd=$row['current_address'];
    $Fathername=$row['father_name'];
    $Domicile_id=$row['domicile_id'];
	$Fathersname=$row['father_surname'];
	$Foccupation=$row['father_occupation'];
	$Mothername=$row['mother_name'];
	$Mothersname=$row['mother_surname'];
	$Moccupation=$row['mother_occupation'];
	$Mobile=$row['mobile'];
    $Email=$row['email'];
    $HomeparishId = $row['home_parish_id'];
		

// fetching from eventbaptism table
$sql_eventbaptism = "select * from eventbaptism where user_id = $id";
$result1 = mysqli_query($con, $sql_eventbaptism);
$row = mysqli_fetch_array($result1, MYSQLI_ASSOC);
    $Baptism_id = $row['baptism_id'];
	$DOBaptism=$row['bapt_date'];
	$Baptism_Parish_Id=$row['baptism_parish_id'];
	$GFname=$row['godfather_name'];
	$GFdom=$row['godfather_domicile_id'];
	$GMname=$row['godmother_name'];
	$GMdom=$row['godmother_domicile_id'];
	$Minister=$row['clergyman'];
    
// Fetching from states table [For Domcile State]
$Country_id = 101;  //Default is India 
$sql_countries = "SELECT * FROM states WHERE country_id = $Country_id";

$sql_domicile_state_user = "SELECT * FROM states WHERE country_id = $Country_id and id=$Domicile_id";
$sql_domicile_state_Gfather = "SELECT * FROM states WHERE country_id = $Country_id and id=$GMdom";
$sql_domicile_state_Gmother = "SELECT * FROM states WHERE country_id = $Country_id and id=$GFdom";

$result2 = mysqli_query($con, $sql_domicile_state_user);
$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $domicile_state_user = $row['name'];

$result2 = mysqli_query($con, $sql_domicile_state_Gfather);
$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $domicile_state_Gfather = $row['name'];

$result2 = mysqli_query($con, $sql_domicile_state_Gmother);
$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $domicile_state_Gmother = $row['name'];



	// Fetching from churches table [For Domcile State]
$sql_church = "select * from church where church_id = $HomeparishId";
$result3 = mysqli_query($con, $sql_church);
$row = mysqli_fetch_array($result3, MYSQLI_ASSOC);
    $parish_name = $row['parish'];
    $church_name =$row['church_name'];




?>