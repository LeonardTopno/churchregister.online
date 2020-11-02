<!-- Session Starts-->
session_start();
if (isset($_SESSION["username"])){
	$id=$_SESSION["username"];
}else{
	header("location:../../index.php");
}
$id=$_SESSION["username"];