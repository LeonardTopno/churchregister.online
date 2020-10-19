<?php

    include "connection.php";
   // $con=mysqli_connect("localhost","develope_root","Migids@123","develope_universe");
    
	$FName=$_POST['fname'];
	$MName=$_POST['mname'];
	$LName=$_POST['lname'];
	$Gender=$_POST['radio-stacked'];
	$DOB=$_POST['dob'];
	$Padd=$_POST['padd'];
	$Cadd=$_POST['cadd'];
	$Fathername=$_POST['fathername'];
	$Fathersname=$_POST['fathersname'];
	$Foccupation=$_POST['foccupation'];
	$Mothername=$_POST['mothername'];
	$Mothersname=$_POST['mothersname'];
	$Moccupation=$_POST['moccupation'];
	$Mobile=$_POST['mobile'];
	$Email=$_POST['email'];
	
	// this info inserts into eventbaptism
	$DOBaptism=$_POST['dobaptism'];
	$GFname=$_POST['GFname'];
	$GFdom=$_POST['GFdomicile'];
	$GMname=$_POST['GMname'];
	$GMdom=$_POST['GMdomicile'];
	$Country=$_POST['country'];	
	$State=$_POST['states'];
	$District=$_POST['district'];
	$Diocese=$_POST['diocese'];
	$Church=$_POST['church'];
	$Clergyman=$_POST['bby'];
	
	
	$uploaddir='uploads/'; // web root dir name for photo upload
	
	$uploadfile=$uploaddir.basename($_FILES['file']['name']);
	
//	if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile))
//	{
//		echo "file is valid";
//	}
//	else
//	{
//	echo "not Valid";
//	} //photo upload ends here



	
	//Insert into userinfo table

  
    
    

   $sql = "INSERT INTO userinfo (first_name, middle_name,last_name, gender_id, dob, permanent_address, current_address, father_name, father_surname, father_occupation, mother_name, mother_surname, mother_occupation, mobile, email)
	VALUES ('".$FName."','".$MName."','".$LName."','".$Gender."','".$DOB."','".$Padd."','".$Cadd."','".$Fathername."','".$Fathersname."','".$Foccupation."','".$Mothername."','".$Mothersname."','".$Moccupation."','".$Mobile."','".$Email."')";
	
    $insert_userinfo = mysqli_query($con, $sql) or die (mysqli_error($con)); 
    
    
    //Insert into eventbaptism table
    if ($insert_userinfo){
        $last_id = mysqli_insert_id($con);
        $baptism_id=$last_id.'B';
        $baptism_id_bc=$last_id.'BC';
        
        $sql_eventbaptism = "INSERT INTO eventbaptism (baptism_id, user_id, baptism_church_id, bapt_date, godfather_name, godfather_domicile, godmother_name, godmother_domicile, country, states, district, diocese, church, clergyman) 
        VALUES ('$baptism_id', '$last_id', '$baptism_id_bc', '$DOBaptism', '$GFname', '$GFdom', '$GMname', '$GMdom', '$Country', '$State', '$District', '$Diocese', '$Church', '$Clergyman')";
        
        $insert_eventbaptism = mysqli_query($con, $sql_eventbaptism); 
    }
   
   
	
	
   
   // if($con->query($sql)===TRUE)
    if($insert_eventbaptism==1)
    {
   	echo '<script type="text/javascript">alert("Baptism Details Registered Succesfully");window.location=\'form_baptism.php\';</script>'; 
    }
    else
    {
     echo '<script type="text/javascript">alert("Baptism Detail Not Registered");window.location=\'index.php\';</script>';   
    }


?>