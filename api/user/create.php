<?php
$requestMethod = $_SERVER["REQUEST_METHOD"];
include('../class/Rest.php');
$api = new Rest();
switch($requestMethod) {
	case 'POST':	
		$api->insertUser($_POST);
		break;
	default:
	header("HTTP/1.0 405 Method Not Allowed");
	break;
}
?>