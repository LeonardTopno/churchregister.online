<?php 
ob_start(); 
?>
<!--  Session Starts   -->
<?php 
session_start();
if (isset($_SESSION["username"]))
{
	$id=$_SESSION["username"];
}
else
{
	header("location:../../index.php");
}
$id=$_SESSION["username"];
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
    <title>Baptism Form</title>
    <!-- Custom CSS -->
    <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body oncontextmenu="return false;">
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>    
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper">
        <?php include('../includes/frontend/inc-header.php')?>
        
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
    
        <?php include('../includes/frontend/inc-sidebar.php')?>
        
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        
        <!-- Page wrapper  -->
        
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Baptism Form</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item">Baptism</li>
                                    <li class="breadcrumb-item active" aria-current="page">Baptism Form</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                 
                <?php include('bapt-includes/modal.php'); ?>
                <!-- Recent comment and chats -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <form class="form-horizontal" method="post" action="insertform_data.php" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Baptism Info</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-left control-label col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="" name="fname" id="fname" placeholder="First Name Here" autofocus required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Middle Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="mname" id="mname" value="" placeholder="Middle Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="lname" id="lname" value="" placeholder="Last Name Here" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-md-3">Gender</label>
                                    <div class="col-md-9">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" value="Male" required>
                                            <label class="custom-control-label" for="customControlValidation1">Male</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" value="Female" required>
                                            <label class="custom-control-label" for="customControlValidation2">Female</label>
                                        </div>
                                    </div>
                                    </div>
                                    <div>
                                        <div class="form-group row">
                                        <label for="date" class="col-sm-3 text-left control-label col-form-label">Date of Birth</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control mydatepicker" id="dob" name="dob" max="2020-09-31">
                                            
                                        </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group row">
                                        <label for="date" class="col-sm-3 text-left control-label col-form-label">Date of Baptism</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control mydatepicker" id="dobaptism" name="dobaptism">
                                            
                                        </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                    <label class="col-md-3">Upload Photo</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" name="file" class="custom-file-input" id="validatedCustomFile" >
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                    </div>
                                        <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Permanent Address</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="padd" id="padd"  required></textarea>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Current Address</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="cadd" id="cadd"  required></textarea>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-left control-label col-form-label">Father's Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="fathername" id="fathername" value="" placeholder="Father's Name Here" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Father's Surname</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="fathersname" id="fathersname"  value="" placeholder="Father's Surname Here" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Father's Occupation</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="foccupation" id="foccupation" value="" placeholder="Occupation">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-left control-label col-form-label">Mother's Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="mothername" id="mothername"  value="" placeholder="Mother's Name Here" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Mother's Surname</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="mothersname" id="mothersname"  value="" placeholder="Mother's Surname Here" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Mother's Occupation</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="moccupation" id="moccupation" value="" placeholder="Occupation">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Mobile Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="mobile" id="mobile" value="" placeholder="Mobile Number" autocomplete="off" Maxlength="10" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">E-Mail ID</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="email" id="email" value="" placeholder="E Mail" autocomplete="off" required>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">God Father's Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="GFname" id="GFname" value="" placeholder="God Father Name" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">God Father's Domicile</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="GFdomicile" id="GFdomicile" value="" placeholder="God Father Domicile" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">God Mother's Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="GMname" id="GMname" value="" placeholder="Write Here" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">God Mother's Domicile</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="GMdomicile" id="GMdomicile" value="" placeholder="Write Here" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <h5 class="card-title"><b>Parish/Diocese Info</b></h5>
                                    <div class="border-top"></div><br>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Country</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="country" id="country" value="" placeholder="Write Here" autocomplete="off" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">State</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="states" id="states" value="" placeholder="Write Here" autocomplete="off" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">District</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="district" id="district" value="" placeholder="Write Here" autocomplete="off" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Diocese</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="diocese" id="diocese" value="" placeholder="Write Here" autocomplete="off" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Church</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="church" id="church" value="" placeholder="Write Here" autocomplete="off" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="minister" class="col-sm-3 text-left control-label col-form-label">Minister: </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="bby" id="bby" value="" placeholder="Father/Priest Name">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <button type="reset" class="btn btn-primary">Reset</button>
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </div>
                            </div>
                                </div>
                                </div>
								</div>
							</form>
							<!-- Insert Query Starts -->
							

							<!-- Query Ends -->
					</div>
				</div>
			</div>
            </div>
            <!-- End Container fluid  -->
        <?php include('../includes/frontend/inc-footer.php')?>
        
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
   
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../../assets/libs/flot/excanvas.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../dist/js/pages/chart/chart-page-init.js"></script>
    <!---->
    <script src="../../asset_code/js/jquery-3.5.1.min.js"></script>

</body>

</html>