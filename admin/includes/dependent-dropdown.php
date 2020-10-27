<?php
include('dbConnect.php');

// Fetching state list
$country_id=!empty($_POST['country_id'])?$_POST['country_id']:'';
if(!empty($country_id)){
    $contryData="SELECT id, name from states WHERE country_id=$country_id";
    $result=mysqli_query($conn, $contryData);
    
    if(mysqli_num_rows($result)>0){
        echo "<option value='' selected='' disabled=''>select state</option>";
        while($arr=mysqli_fetch_assoc($result)){
            echo "<option value='".$arr['id']."'>".$arr['name']."</option><br>";
        }
    }  
}

// Fetching city list

$state_id=!empty($_POST['state_id'])?$_POST['state_id']:'';
if(!empty($state_id)){
    $cityData="SELECT city_id, name from cities WHERE state_id=$state_id";
    $result=mysqli_query($conn, $cityData);
    if(mysqli_num_rows($result)>0){
        echo "<option value=''selected='' disabled=''>select city</option>";
        while($arr=mysqli_fetch_assoc($result)){
            echo "<option value='".$arr['id']."'>".$arr['name']."</option><br>";
        }
    }  
}

//=====================

// Fetching province list on selection of country_id

$country_id=!empty($_POST['country_id'])?$_POST['country_id']:'';
if(!empty($country_id)){
    $provinceData="SELECT province_id, name from province WHERE country_id=$country_id";
    $result=mysqli_query($conn, $provinceData);
    
    if(mysqli_num_rows($result)>0){
        echo "<option value='' selected='' disabled=''>select province</option>";
        while($arr=mysqli_fetch_assoc($result)){
            echo "<option value='".$arr['province_id']."'>".$arr['name']."</option><br>";
        }
    }  
}

?>