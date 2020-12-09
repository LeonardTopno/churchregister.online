<?php  
 if(isset($_POST["id"]))  
 {  
      
      $output = '';  
      include('../includes/dbConnect.php');  
      //$query = "SELECT * FROM event_1st_communion WHERE user_id = '".$_POST["id"]."'";
      $query = "SELECT * FROM event_1st_communion WHERE user_id = 142";  
      $result = mysqli_query($conn, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Communion ID</label></td>  
                     <td width="70%">'.$row["1st_comm_id"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["fname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Communion Date</label></td>  
                     <td width="70%">'.$row["1st_comm_date"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Communion Church</label></td>  
                     <td width="70%">'.$row["comm_church"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>School</label></td>  
                     <td width="70%">'.$row["school_name"].'</td>  
                </tr>  
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>
