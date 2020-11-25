<?php
include('../../../includes/dbConnect.php');

if($conn){

    echo"<script>console.log('Connection established')</script>";
    
}

extract($_POST);

echo"insert-backend";


$first_name=!empty($_POST['first_name'])?$_POST['first_name']:'';
$last_name=!empty($_POST['last_name'])?$_POST['last_name']:'';;

$created_at_event="1st_communion";

if(!empty($first_name)){
    $sql = "INSERT INTO userinfo (first_name, last_name, created_at_event) VALUES ('$first_name', '$last_name', '$created_at_event')";

    #$sql = "INSERT INTO userinfo (first_name, middle_name,last_name, gender_id, dob, permanent_address, current_address, father_name, father_surname, domicile_id, father_occupation, mother_name, mother_surname, mother_occupation, mobile, email, home_parish_id)
	#VALUES ('".$FName."','".$MName."','".$LName."','".$Gender."','".$DOB."','".$Padd."','".$Cadd."','".$Fathername."','".$Fathersname."','".$Domicile_ID."','".$Foccupation."','".$Mothername."','".$Mothersname."','".$Moccupation."','".$Mobile."','".$Email."','".$HomeParishId."')";
    $insert_userinfo = mysqli_query($conn, $sql) or die (mysqli_error($conn));
}

?>