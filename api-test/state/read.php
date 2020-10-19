<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../config/database.php';
include_once '../objects/state.php';

//May be need to include:  include_once '../objects/state.php';

// instantiate database and connect 
$database = new Database();
$db = $database->getConnection();
 
// initialize state object
$state = new State($db);
 
// read state will be here

// query state
$stmt = $state->read();
//Get row count
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    //state array
    $state_arr=array();
    $state_arr["records"]=array();
 
    // retrieve our table contents
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        $state_item=array(
            "state_id" => $state_id,
            "country_id" => $country_id,
            "state_name" => $state_name
        );    
        
        // Push to "records"  - can use data as well instead of records
        array_push($state_arr["records"], $state_item);
    }
 
    // set response code - 200 OK
    http_response_code(200);
 
    // show state data in json format
	echo json_encode(array("status" => "success", "code" => 1,"message"=> "state found","document"=> $state_arr));
    
}else{
    // no state found will be here

    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user no state found
	echo json_encode(array("status" => "error", "code" => 0,"message"=> "No state found.","document"=> ""));    
}
