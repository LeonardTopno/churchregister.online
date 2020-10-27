<?php
include('dbConnect.php');

// Fetching province list
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

// Fetching Diocese list

$province_id=!empty($_POST['province_id'])?$_POST['province_id']:'';
if(!empty($province_id)){
    $dioceseData="SELECT diocese_id, name from diocese WHERE province_id=$province_id";
    $result=mysqli_query($conn, $dioceseData);
    if(mysqli_num_rows($result)>0){
        echo "<option value=''selected='' disabled=''>select diocese</option>";
        while($arr=mysqli_fetch_assoc($result)){
            echo "<option value='".$arr['diocese_id']."'>".$arr['name']."</option><br>";
        }
    }  
}

//=====================

// Fetching Diocese list

$diocese_id=!empty($_POST['diocese_id'])?$_POST['diocese_id']:'';
if(!empty($diocese_id)){
    $parishData="SELECT church_id, parish church WHERE diocese_id=$diocese_id";
    $result=mysqli_query($conn, $parishData);
    if(mysqli_num_rows($result)>0){
        echo "<option value=''selected='' disabled=''>select parish</option>";
        while($arr=mysqli_fetch_assoc($result)){
            echo "<option value='".$arr['church_id']."'>".$arr['parish']."</option><br>";
        }
    }  
}


?>