<?php session_start(); ?>
<html>
<body oncontextmenu="return false;">
<?php

// destroy the session veriable
//unset($_SESSION['username']);
$_SESSION = array();

// Removing session data
if(isset($_SESSION["username"])){
    unset($_SESSION["username"]);
}
$_SESSION = []; //empty array. 
session_write_close();
// destroy the session
session_destroy();
header("location:../index.php"); 

?>

<br><br><br>
<div style="text-align:center">Logged out successfully
<br>
Thank you for visiting, please visit again....
<br><br><a href="../index.php">CLICK TO LOGIN AGAIN</a>
<?php echo $id; ?>
<?php echo ($_SESSION["username"]); 
exit();
?>
</div>
</body>
</html>
<!-- session_start(); -->
<!-- remove all session variables -->
<!-- session_unset(); -->

<!-- destroy the session -->
<!-- session_destroy(); -->