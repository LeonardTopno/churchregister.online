<?php
include('dbConnect.php');

// Fetching state list
$country_id=!empty($_POST['country_id'])?$_POST['country_id']:'';
if(!empty($country_id)){
    $contryData="SELECT id, name from states WHERE country_id=$country_id";
    $result=mysqli_query($conn, $contryData);
    
    if(mysqli_num_rows($result)>0){
        echo "<option value='' selected='' disabled=''>Select State 1</option>";
        while($arr=mysqli_fetch_assoc($result)){
            echo "<option value='".$arr['id']."'>".$arr['name']."</option><br>";
        }
    }  
}

// Fetching city list

$state_id=!empty($_POST['state_id'])?$_POST['state_id']:'';
if(!empty($state_id)){
    $cityData="SELECT id, name from cities WHERE state_id=$state_id";
    $result=mysqli_query($conn, $cityData);
    if(mysqli_num_rows($result)>0){
        echo "<option value=''selected='' disabled=''>ssSelect City</option>";
        while($arr=mysqli_fetch_assoc($result)){
            echo "<option value='".$arr['id']."'>".$arr['name']."</option><br>";
        }
    }  
}

?>