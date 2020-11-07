<?php
include('../includes/dbConnect.php');

#extract($_POST);


$first_name=!empty($_POST['firstname'])?$_POST['firstname']:'';
$last_name="Topno";
if(!empty($first_name)){
    $sql = "INSERT INTO userinfo (first_name, middle_name) VALUES ('".$first_name."', '".$last_name."')";

    #$sql = "INSERT INTO userinfo (first_name, middle_name,last_name, gender_id, dob, permanent_address, current_address, father_name, father_surname, domicile_id, father_occupation, mother_name, mother_surname, mother_occupation, mobile, email, home_parish_id)
	#VALUES ('".$FName."','".$MName."','".$LName."','".$Gender."','".$DOB."','".$Padd."','".$Cadd."','".$Fathername."','".$Fathersname."','".$Domicile_ID."','".$Foccupation."','".$Mothername."','".$Mothersname."','".$Moccupation."','".$Mobile."','".$Email."','".$HomeParishId."')";
    $insert_userinfo = mysqli_query($conn, $sql) or die (mysqli_error($conn));
}

?>