<!--This File to be renamed to get_baptism_info -->
<?php
	// Establish Connection with Database
	
	#include('../includes/dbConnect.php');
	include('../../../includes/dbConnect.php');
	// Specify the query to execute
	$sql = "SELECT * FROM userinfo WHERE created_at_event = '1st_communion' ";
	
	// Execute query
	$result = mysqli_query($conn,$sql);
	
	// Loop through each records 
	while($row = mysqli_fetch_array($result)){
		$Id=$row['user_id'];
		$Name=$row['first_name'];
		$Lname =$row['last_name'];
		$Gender=$row['gender_id'];
		$DOB =$row['dob'];
		$fname=$row['father_name'];
		$fsurname =$row['father_surname'];
		$mname=$row['mother_name'];
		$msurname =$row['mother_surname'];
	
	// Getting Baptism Date from eventbaptism Table
	$sql_eventbaptism="SELECT bapt_date FROM eventbaptism where user_id=$Id";
	$result_sql_eventbaptism = mysqli_query($conn, $sql_eventbaptism);
	if(mysqli_num_rows($result_sql_eventbaptism)>0){
		$row = mysqli_fetch_array($result_sql_eventbaptism, MYSQLI_ASSOC);
		$baptims_date=$row['bapt_date'];
		mysqli_free_result($result_sql_eventbaptism);
	}

	}
?>