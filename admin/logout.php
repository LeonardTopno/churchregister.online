<?php 
//session_start(); 
require_once '../includes/base_url.php';
require_once '../includes/session.php'; 
//Page Redirect after 3 secondds
header( "refresh:3;url=../../index.php" );
?>
<html>
    <style>
      blink {
        color: #1c87c9;
        font-size: 20px;
        font-weight: bold;
        font-family: sans-serif;
      }
    </style>
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
<!--  Text Part -->
<br><br><br>
<div style="text-align:center">Logged out successfully
<br>
Thank you for visiting, please visit again....
<br><br><a href="../index.php"></a>
<br><br>
<blink>You will be redirected to Login Page after 3 Seconds </blink>

<?php  
exit();
?>
</div>

</body>
</html>