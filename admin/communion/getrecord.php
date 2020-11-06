   <div class="row">
                    <div class="col-12">
                        <div class="card">
                        
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Communion Details</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <!-- <th>Sl. No</th> -->
                                                <th><b>ID</b></th>
                                                <th><b>Name</b></th>
                                                <th><b>Gender</b></th>
                                                <th><b>DOB</b></th>
                                                <th><b>Father's Name</b></th>
                                                <th><b>Mother's Name</b></th>
                                                <th><b>Select Option</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                               <!-- PHP code for Table Data -->
                 <?php
// Establish Connection with Database
include "connection.php";
// Specify the query to execute
$sql = "select * from userinfo order by user_id DESC";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['user_id'];
$Name=$row['first_name'];
$Lname =$row['last_name'];
$Gender=$row['gender_id'];
$DOB =$row['dob'];
$fname=$row['father_name'];
$fsurname =$row['father_surname'];
$mname=$row['mother_name'];
$msurname =$row['mother_surname'];
//$reg_id=substr($Id,20);
?>
  <!-- End of Code -->
                                            <tr>
                                                <td><?php echo $Id;?></td>
                                                <td><a href="editdetails.php?Id=<?php echo $Id;?>"><?php echo $Name;?>&nbsp<?php echo $Lname;?></a></td>
                                                <td><?php echo $Gender;?></td>
                                                <td><?php echo date("d-m-Y",strtotime($DOB));?></td>
                                                <td><?php echo $fname;?>&nbsp<?php echo $fsurname;?></td>
                                                <td><?php echo $mname;?>&nbsp<?php echo $msurname;?></td>
                                                <th>
                                            <!--    <a href="editdetails.php?Id=<?php echo $Id;?>"><button type="button" class="far fa-edit"></button></a>-->
                                                 <a href="editdetails.php?Id=<?php echo $Id;?>"><img src="../../assets/images/edit_button.png" width="30" height="30" alt="EDIT"/></a>  
                                             <!--   <a href="deletedetails.php?Id=<?php echo $Id;?>"><button type="button" class="mdi mdi-delete"></button></a> -->
                                                 <a href="deletedetails.php?Id=<?php echo $Id;?>"><img src="../../assets/images/delete1.png"width="30" height="30" alt="DELETE"/></a>  
                                                </th>
                                            </tr>
                                            <?php
}
// Close the connection
$conn = null;
?>
                                        </tbody>
                                        
                                    </table>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                            
                <!-- ============================================================== -->
            </div>