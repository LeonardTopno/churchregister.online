
<?php

    // Establish Connection with Database
    include "connection.php";

    // get id through query string
    $id = $_GET['Id']; 
    
    // delete query
    $del = mysqli_query($con,"delete from userinfo where user_id = '$id'"); 

if($del)
{
    // Close connection
    mysqli_close($con); 
   echo '<script type="text/javascript">alert("Baptism Record Deleted Succesfully");window.location=\'edit_baptism.php\';</script>'; // redirects to all records page
    exit;	
}
else
{
    // display error message if not delete
    echo "Error deleting record"; 
}
?>

