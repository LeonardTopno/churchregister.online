<?php 
ob_start(); 
# Session Starts
session_start();
if (isset($_SESSION["username"])){
	$logid=$_SESSION["username"];
}else{
	header("location:../../index.php");
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>View Baptism Record | ParishRegister.Online</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/extra-libs/multicheck/multicheck.css">
    <link href="../../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php include "upscript.php"; ?>
</head>

<body oncontextmenu="return false;">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- Topbar header - style you can find in pages.scss -->
        <?php include "../includes/frontend/inc-header.php";?>
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <!--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="charts.html" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Charts</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="widgets.html" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Widgets</span></a></li>-->
                        <!--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Tables</span></a></li>-->
                        <!--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="grid.html" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Full Width</span></a></li>-->
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Baptism</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/admin/baptism/form_baptism.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Create Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/baptism/edit_baptism.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Edit Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/baptism/search_baptism.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Search Record </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-relative-scale">
                        </i><span class="hide-menu">1st Communion</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/admin/communion/form_communion.php" class="sidebar-link"><i class="mdi mdi-relative-scale"></i><span class="hide-menu"> Create Communion Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/communion/edit_communion.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Edit Communion Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/communion/search_communion.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Search Record </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Confirmation</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/admin/confirmation/form_confirmation.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Create Confirmation Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/confirmation/edit_confirmation.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Edit Confirmation Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/confirmation/search_confirmation.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Search Record </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-relative-scale">
                        </i><span class="hide-menu">Marriage</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/admin/marriage/form_marriage.php" class="sidebar-link"><i class="mdi mdi-relative-scale"></i><span class="hide-menu"> Create Marriage Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/marriage/edit_marriage.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Edit Marriage Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/marriage/search_marriage.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Search Record </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Burial</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/admin/death/form_death.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Create Burial Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/death/edit_death.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Edit Burial Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/death/search_death.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Search Record </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-relative-scale">
                        </i><span class="hide-menu">Download / Print</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/admin/baptism/search_baptism.php" class="sidebar-link"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Search Baptism Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/communion/search_communion.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Search 1st Communion Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/confirmation/search_confirmation.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Search Confirmation Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/marriage/search_marriage.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Search Marriage Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/death/search_death.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Search Burial Record </span></a></li>
                            </ul>
                        </li>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Detailed View</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item">Baptism</li>
                                    <li class="breadcrumb-item active" aria-current="page">Search Baptism Record</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Baptism Registers</h4>
                                <!-- Create the editor container -->
                                <div class="row">
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-4 col-xlg-3">
                                        <a href="form_baptism.php">
                                          <div class="card card-hover">
                                           
                                            <div class="box bg-cyan text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                                <h6 class="text-white">Create Baptism Record</h6>
                                            
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    
                                    <div class="col-md-6 col-lg-4 col-xlg-3">
                                       <a href="edit_baptism.php">
                                        <div class="card card-hover">
                                            <div class="box bg-warning text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                                <h6 class="text-white">Edit Baptism Record</h6>
                                            </div>
                                        </div>
										</a>
                                    </div>
                                    
                                    <div class="col-md-6 col-lg-4 col-xlg-3">
                                       <a href="search_baptism.php">
                                        <div class="card card-hover">
                                            <div class="box bg-info text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                                                <h6 class="text-white">View Baptism Record</h6>
                                            </div>
                                        </div>
										</a>
                                    </div>
                                    <!-- Column -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                
                <!-- Recent comment and chats -->
                
                <!-- PHP code for Table Data -->
<?php           
// Establish Connection with Database
include "connection.php";
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// selecting particular user using id 
$id= ($_GET["Id"]);

// fetching from userinfo table
$sql="SELECT * from userinfo where user_id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    
	$fname = $row['first_name'];
	$MName = $row['middle_name'];
	$LName=$row['last_name'];
	$gender=$row['gender_id'];
	$DOB=$row['dob'];
	$Padd=$row['permanent_address'];
	$Cadd=$row['current_address'];
    $Fathername=$row['father_name'];
    $Domicile_id=$row['domicile_id'];
	$Fathersname=$row['father_surname'];
	$Foccupation=$row['father_occupation'];
	$Mothername=$row['mother_name'];
	$Mothersname=$row['mother_surname'];
	$Moccupation=$row['mother_occupation'];
	$Mobile=$row['mobile'];
    $Email=$row['email'];
    $HomeparishId = $row['home_parish_id'];
	
	

// fetching from eventbaptism table
$sql_eventbaptism = "select * from eventbaptism where user_id = $id";
$result1 = mysqli_query($con, $sql_eventbaptism);
$row = mysqli_fetch_array($result1, MYSQLI_ASSOC);
    $Baptism_id = $row['baptism_id'];
	$Diocese=$row['diocese'];
	$Church=$row['church'];
	$Bby=$row['clergyman'];
	$GFname=$row['godfather_name'];
	$GFdom=$row['godfather_domicile_id'];
	$GMname=$row['godmother_name'];
	$GMdom=$row['godmother_domicile_id'];
    $DOBaptism=$row['bapt_date'];
    
// Fetching from states table [For Domcile State]
$Country_id = 101;  //Default is India 
$sql_countries = "SELECT * FROM states WHERE country_id = $Country_id";

$sql_domicile_state_user = "SELECT * FROM states WHERE country_id = $Country_id and id=$Domicile_id";
$sql_domicile_state_Gfather = "SELECT * FROM states WHERE country_id = $Country_id and id=$GMdom";
$sql_domicile_state_Gmother = "SELECT * FROM states WHERE country_id = $Country_id and id=$GFdom";

$result2 = mysqli_query($con, $sql_domicile_state_user);
$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $domicile_state_user = $row['name'];

$result2 = mysqli_query($con, $sql_domicile_state_Gfather);
$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $domicile_state_Gfather = $row['name'];

$result2 = mysqli_query($con, $sql_domicile_state_Gmother);
$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $domicile_state_Gmother = $row['name'];


// Fetching from churches table [For Domcile State]
$sql_church = "select * from church where church_id = $HomeparishId";
$result3 = mysqli_query($con, $sql_church);
$row = mysqli_fetch_array($result3, MYSQLI_ASSOC);
    $parish_name = $row['parish'];
    $church_name =$row['church_name'];

?> 
					<div class="row">
					<div class="col-12">
                    
                        <div class="card">
                            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Baptism Info</h4>
                                     
                                     <div class="form-group row">
                                        <label class="col-sm-3 text-left control-label col-form-label">Baptism ID :</label>
                                        <div class="col-sm-9">
                                            <?php echo $Baptism_id;?>
                                        </div>
                                        </div>
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-left control-label col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <?php echo $fname;?> &nbsp; <?php echo $MName;?> &nbsp; <?php echo $LName;?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                    <label class="col-md-3">Gender</label>
                                    <div class="col-md-9">
                                        <?php echo $gender;?>
                                    </div>
                                    </div>
                                        <div class="form-group row">
                                        <label class="col-sm-3 text-left control-label col-form-label">Date of Birth</label>
                                        <div class="col-sm-9">
                                            <?php echo date("d-m-Y",strtotime($DOB));?>                                            
                                        </div>
                                        </div>

                                        
                                        
          

                                        <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-left control-label col-form-label">Father's Name</label>
                                        <div class="col-sm-9">
                                            <?php echo $Fathername;?> &nbsp; <?php echo $Fathersname;?>
                                        </div>
                                        </div>

                                        <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Domicile</label>
                                        <div class="col-sm-9">
                                            <?php echo $domicile_state_user;?>
                                        </div>
                                        </div>

                                        <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Home Parish / Church Name</label>
                                        <div class="col-sm-9">
                                            <?php echo "$parish_name /  $church_name";?>
                                        </div>
                                        </div>


                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Father's Occupation</label>
                                        <div class="col-sm-9">
                                            <?php echo $Foccupation;?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-left control-label col-form-label">Mother's Name</label>
                                        <div class="col-sm-9">
                                            <?php echo $Mothername;?> &nbsp; <?php echo $Mothersname;?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Mother's Occupation</label>
                                        <div class="col-sm-9">
                                           <?php echo $Moccupation;?>
                                        </div>
                                    </div>
                                    
                                    <h5 class="card-title"><b>Contact Details</b></h5>
                                    <div class="border-top"></div><br>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Mobile Number</label>
                                        <div class="col-sm-9">
                                            <?php echo $Mobile;?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">E-Mail ID</label>
                                        <div class="col-sm-9">
                                          <?php echo $Email;?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Permanent Address</label>
                                        <div class="col-sm-9">
                                           <?php echo $Padd;?>
                                        </div>
                                        </div>

                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Current Address</label>
                                        <div class="col-sm-9">
                                             <?php echo $Cadd;?>
                                        </div>
                                    </div>
                                    
                                    <h5 class="card-title"><b>Baptism Details</b></h5>
                                    <div class="border-top"></div><br>

                                    <div class="form-group row">
                                        <label for="date" class="col-sm-3 text-left control-label col-form-label">Date of Baptism</label>
                                        <div class="col-sm-9">
                                           <?php echo date("d-m-Y",strtotime($DOBaptism));?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">1st Sponsor's Name(M)</label>
                                        <div class="col-sm-9">
                                            <?php echo $GFname;?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">1st Sponsor's Domicile</label>
                                        <div class="col-sm-9">
                                            <?php echo $domicile_state_Gfather;?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">2nd Sponsor's Name(F)</label>
                                        <div class="col-sm-9">
                                            <?php echo $GMname;?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">2nd Sponsor's Domicile</label>
                                        <div class="col-sm-9">
                                           <?php echo $domicile_state_Gmother;?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="minister" class="col-sm-3 text-left control-label col-form-label">Clergyman Officiating</label>
                                        <div class="col-sm-9">
                                          <?php echo $Bby;?>
                                        </div>
                                    </div>


                                    <h5 class="card-title"><b>Diocese Info</b></h5>
                                    <div class="border-top"></div><br>
                                    
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Diocese</label>
                                    <div class="col-md-9">
                                       <?php echo $Diocese;?>
                                    </div>
                                </div>
                                
                                    <div class="border-top">
                                <div class="card-body">
                                    <button  class="btn btn-success"><a href="print_baptism.php?Id=<?php echo $id; ?>"
                                    class="text-white">Generate Certificate</a></button>
                                    <!--<button type="submit" class="btn btn-danger">Cancel</button>-->
                                    <button class="btn btn-danger"><a href="search_baptism.php" class="text-white">Back to Search</a></button>
                                </div>
                            </div>
                            
                                </div>
								</div>
							</form>
							<!-- Insert Query Starts -->
							<?php

// Close the connection
$conn = null;
?>

							<!-- Query Ends -->
					</div>
				</div>
			</div>
                   
                            
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by MIGIDS Softwares LLP. Designed and Developed by <a href="http:/migids.com" target="_blank">MIGIDS Softwares</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
<!------ Top Button ------>
<?php include "buttonupscript.php"; ?>
    <!-- End -->

</body>

</html>