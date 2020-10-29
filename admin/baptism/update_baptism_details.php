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
	
	
// // selecting particular user using id 
 $id= ($_POST["Id"]);
 





    
    
    $sql = "UPDATE userinfo SET father_occupation = 'besttttttttttttt' " . " WHERE user_id = 81 ";
	
	
	
    // $insert_userinfo = mysqli_query($con, $sql) or die (mysqli_error($con)); 
    
  
    
    //Insert into eventbaptism table
    // if ($insert_userinfo){
    //     $sql_eventbaptism = "UPDATE eventbaptism SET ( bapt_date, godfather_name, godfather_domicile_id, godmother_name, godmother_domicile_id, country, states, district, diocese, church, clergyman) 
    //     VALUES (  '$DOBaptism', '$GFname', '$GFdom', '$GMname', '$GMdom', '$Country', '$State', '$District', '$Diocese', '$Church', '$Clergyman') WHERE id='$id'";       
    //     $insert_eventbaptism = mysqli_query($con, $sql_eventbaptism); 
    // }
   
	
	
   
    if($con->query($sql)===TRUE)
     //if($insert_eventbaptism==1)
     { echo '<script type="text/javascript">alert("Baptism Details Updated Succesfully");window.location=\'form_baptism.php\';</script>'; } else { echo '<script type="text/javascript">alert("Baptism Detail Not Registered");window.location=\'index.php\';</script>';   
     }



?>