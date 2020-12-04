                    <!-- The Table Modal -->
                    <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">First Communion Records</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <!-- Table Structure -->
          
          <div class="row">
	                <div class="col-12">
		                <div class="card">
			                <div class="card-body">
          
                                <h5 class="card-title">  </h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <!-- <th>Sl. No</th> -->
                                                <th><b>ID</b></th>
                                                <th><b>Name</b></th>
                                                <th><b>Gender</b></th>
                                                <th><b>DOB</b></th>
                                                <th><b>Baptism Date</b></th>
                                                <th><b>Father's Name</b></th>
                                                <th><b>Mother's Name</b></th>
                                                <th><b>Select Option</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
<!-- PHP code for Table Data -->
<?php
// Establish Connection with Database

include('../includes/dbConnect.php');
// Specify the query to execute
$sql = "SELECT * FROM userinfo WHERE created_at_event = 'baptism' ";

// Execute query
$result = mysqli_query($conn,$sql);

// Loop through each records 
while($row = mysqli_fetch_array($result)){
$Id=$row['user_id'];
$Name=$row['first_name'];
$Lname =$row['last_name'];
$Gender=$row['gender_id'];
$DOB =$row['dob'];
$fname=$row['father_name'];
$fsurname =$row['father_surname'];
$mname=$row['mother_name'];
$msurname =$row['mother_surname'];


// Getting Baptism Date from eventbaptism Table
$sql_eventbaptism="SELECT bapt_date FROM eventbaptism where user_id=$Id";
$result_sql_eventbaptism = mysqli_query($conn, $sql_eventbaptism);
if(mysqli_num_rows($result_sql_eventbaptism)>0){
    $row = mysqli_fetch_array($result_sql_eventbaptism, MYSQLI_ASSOC);
    $baptims_date=$row['bapt_date'];
    mysqli_free_result($result_sql_eventbaptism);
}
?>

    <tr>
        <td><?php echo $Id;?></td>
        <td><a href="viewdetails.php?Id=<?php echo $Id;?>"><?php echo $Name;?>&nbsp<?php echo $Lname;?></a></td>
        <td><?php echo $Gender;?></td>
        <td><?php echo date("d-m-Y",strtotime($DOB));?></td>
        <td><?php echo date("d-m-Y",strtotime($baptims_date));?></td>
        <td><?php echo $fname;?>&nbsp<?php echo $fsurname;?></td>
        <td><?php echo $mname;?>&nbsp<?php echo $msurname;?></td>
        <td><a href="viewdetails.php?Id=<?php echo $Id;?>">View</a>&nbsp / <a href="print_baptism.php?Id=<?php echo $Id;?>">Download</a></td>
    </tr>

<?php
}
// Close the connection
mysqli_close($conn);
?> 