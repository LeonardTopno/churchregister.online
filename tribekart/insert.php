<?php

    include "connection.php";
   // $con=mysqli_connect("localhost","develope_root","Migids@123","develope_universe");
    
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$tribe=$_POST['tribe'];
	$address=$_POST['address'];
	$topic=$_POST['topic'];
	$description=$_POST['description'];
	


	
	//Insert into userinfo table
	$sql = "INSERT INTO userinfo (name, email,phone, tribe, address, topic, description)
	VALUES ('".$name."','".$email."','".$phone."','".$tribe."','".$address."','".$topic."', '".$description."')";
	
    $insert_userinfo = mysqli_query($con, $sql) or die (mysqli_error($con)); 
    
    
    if($insert_userinfo==1){
   	echo '<script type="text/javascript">alert("Submitted Succesfully");window.location=\'../index2.php\';</script>'; 
    }else{
     echo '<script type="text/javascript">alert("Failed to register");window.location=\'index.php\';</script>';   
    }


?>