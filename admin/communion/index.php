<?php 
ob_start();
#Sessions start
session_start();
if (isset($_SESSION["username"])){
	$logid=$_SESSION["username"];
}else{
	header("location:../../index.php");
} 
include('../includes/dbConnect.php');
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
    <title>First_Communion_Live Church</title>
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
<?php include('../includes/frontend/inc-upscript.php');?>
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
        <?php include('../includes/frontend/inc-header.php')?>
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
                                <li class="sidebar-item"><a href="/admin/communion/index.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Search Existing Baptism Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/communion/formcomm.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Create Communion Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/communion/detailcomm.php" class="sidebar-link"><i class="mdi mdi-relative-scale"></i><span class="hide-menu"> Display Communion Record </span></a></li>
        
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
                                <li class="sidebar-item"><a href="/admin/burial/form_death.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Create Burial Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/burial/edit_death.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Edit Burial Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/burial/search_death.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Search Record </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-relative-scale">
                        </i><span class="hide-menu">Download / Print</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/admin/baptism/search_baptism.php" class="sidebar-link"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Search Baptism Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/communion/search_communion.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Search 1st Communion Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/confirmation/search_confirmation.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Search Confirmation Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/marriage/search_marriage.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Search Marriage Record </span></a></li>
                                <li class="sidebar-item"><a href="/admin/burial/search_death.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Search Burial Record </span></a></li>
                            </ul>
                        </li>
                       <!-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Addons </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-2 </span></a></li>
                                <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Gallery </span></a></li>
                                <li class="sidebar-item"><a href="pages-calendar.html" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar </span></a></li>
                                <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice </span></a></li>
                                <li class="sidebar-item"><a href="pages-chat.html" class="sidebar-link"><i class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Option </span></a></li>
                            </ul>
                        </li>-->
                       <!-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Authentication </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="authentication-login.html" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Login </span></a></li>
                                <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register </span></a></li>
                            </ul>
                        </li>-->
                        <!--<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span class="hide-menu">Errors </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 403 </span></a></li>
                                <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404 </span></a></li>
                                <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405 </span></a></li>
                                <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500 </span></a></li>
                            </ul>
                        </li>-->
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
                        <h4 class="page-title">First Communion Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Communion</li>
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
                <?php include('comn-includes/operations-tab.php'); ?>
                <div class="row">
	                <div class="col-12">
		                <div class="card">
			                <div class="card-body">
			                  
			                  <h5 class="card-title">Search Baptism Record and Click to add 1st Communion</h5>
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
        <td><a href="viewdetails.php?Id=<?php echo $Id;?>">View</a></td>
    </tr>

<?php
}
// Close the connection
mysqli_close($conn);
?>      
                                        </tbody>
                                        
                                    </table>
                                </div>
			                    
			                </div>
			            </div>
			        </div>
			    </div>
			                 
                
                <!---------------------------- Dispaying Form   -----------------------------> 
                
			                    <!-- The Modal -->
                                <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-lg">
                                 <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title">Baptism & Communion Form</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                    <!---- Leo ---->
                                    <!--<form class="form-horizontal" method="post" action="insertform_data.php" enctype="multipart/form-data">-->
                                <form class="form-horizontal" id="1st-communion-form" method="" action="" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Baptism Details</h4>
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
                                    <label class="col-md-3">Upload Photo(Optional)</label>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" name="file" class="custom-file-input" id="validatedCustomFile" >
                                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="minister" class="col-sm-3 text-left control-label col-form-label">Clergyman Officiating</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="bby" id="bby" value="" placeholder="Minister's Name here">
                                        </div>
                                    </div>

                                    <!--Parents'  Details Section-->
                                    <h5 class="card-title"><b>Parents' and Sponsors' Details</b></h5>
                                                                    
                                    <div class="border-top"></div><br>

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
                                        <label for="fdomicile" class="col-sm-3 text-left control-label col-form-label">Father's Domicile</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" name="domicile" id="domicile" style="width: 100%; height:36px;">
                                            <option selected="" disabled=""> Select Domilcile State </option>
                                            <?php  
                                                $stateDomicileData="SELECT id, name from states where country_id=101";
                                                $result=mysqli_query($conn,$stateDomicileData);
                                                if(mysqli_num_rows($result)>0)
                                                    {
                                                        while($arr=mysqli_fetch_assoc($result))
                                                            {
                                                                ?>

                                                <option value="<?php echo $arr['id']; ?>"><?php echo $arr['name']; ?></option>
                                                <?php }} ?>
                                            </select>

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
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">1st Sponsor's Name(M)</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="GFname" id="GFname" value="" placeholder="God Father Name" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">1st Sponsor's Domicile</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" name="GFdomicile" id="GFdomicile" style="width: 100%; height:36px;">
                                            <option selected="" disabled=""> Select Domilcile State </option>
                                            <?php  
                                                $stateDomicileData="SELECT id, name from states where country_id=101";
                                                $result=mysqli_query($conn,$stateDomicileData);
                                                if(mysqli_num_rows($result)>0)
                                                    {
                                                        while($arr=mysqli_fetch_assoc($result))
                                                            {
                                                                ?>

                                                <option value="<?php echo $arr['id']; ?>"><?php echo $arr['name']; ?></option>
                                                <?php }} ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">2nd Sponsor's Name(F)</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="GMname" id="GMname" value="" placeholder="Write Here" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">2nd Sponsor's Domicile</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" name="GMdomicile" id="GMdomicile" style="width: 100%; height:36px;">
                                            <option selected="" disabled=""> Select Domilcile State </option>
                                            <?php  
                                                $stateDomicileData="SELECT id, name from states where country_id=101";
                                                $result=mysqli_query($conn,$stateDomicileData);
                                                if(mysqli_num_rows($result)>0)
                                                    {
                                                        while($arr=mysqli_fetch_assoc($result))
                                                            {
                                                                ?>

                                                <option value="<?php echo $arr['id']; ?>"><?php echo $arr['name']; ?></option>
                                                <?php }} ?>
                                            </select>
                                        </div>
                                    </div>

                                    <!--Contact Details Section-->
                                    <h5 class="card-title"><b>Contact Details</b></h5>
                                                                    
                                    <div class="border-top"></div><br>

                                    
                                    <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Permanent Address</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="padd" id="padd"  placeholder="Write Permanent Address here" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Current Address</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="cadd" id="cadd"  placeholder="Write Current Address here" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Mobile Number</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control phone-inputmask" name="mobile" id="phone-mask" value="" placeholder="10 Digit Mob. No." autocomplete="off" Maxlength="10">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">E-Mail ID</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="email" id="email" value="" placeholder="E Mail" autocomplete="off">
                                        </div>
                                    </div>

                                    <!--Home Parish Section Details Section-->
                                    <h5 class="card-title"><b>Home Parish/Diocese Details</b></h5>
                                                                    
                                    <div class="border-top"></div><br>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Country</label>
                                        <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" name="country" id="country" style="width: 100%; height:36px;">
                                            <option selected="" disabled=""> Select Country </option>
                                            <?php  
                                                $contryData="SELECT id, name from countries";
                                                $result=mysqli_query($conn,$contryData);
                                                if(mysqli_num_rows($result)>0)
                                                    {
                                                        while($arr=mysqli_fetch_assoc($result))
                                                            {
                                                                ?>

                                                <option value="<?php echo $arr['id']; ?>"><?php echo $arr['name']; ?></option>
                                                <?php }} ?>
                                        </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="province-name" class="col-sm-3 text-left control-label col-form-label">Province</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" name="province" id="province" style="width: 100%; height:36px;">
                                                <option selected="" disabled="">Select Province</option>                            
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="diocese-name" class="col-sm-3 text-left control-label col-form-label">Diocese</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" name="diocese" id="diocese" style="width: 100%; height:36px;">
                                                <option selected="" disabled="">Select Diocese</option>                            
                                            </select>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group row">
                                        <label for="parish" class="col-sm-3 text-left control-label col-form-label">Parish</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" name="parish" id="parish" style="width: 100%; height:36px;">
                                                <option selected="" disabled="">Select Parish</option>                            
                                            </select>
                                        </div>
                                    </div>
                                    <!--First Communion  Details Section-->
                                    <h5 class="card-title"><b>First Communion Details</b></h5>
                                                                    
                                    <div class="border-top"></div><br>

                                    <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-left control-label col-form-label">Communion Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" name="comndate" id="comndate" value=""  required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Communion Church</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="cchurchname" id="cchurchname"  value="" placeholder="Church Name Here.." required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">School</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="comnschool" id="comnschool" value="" placeholder="School Name Here...">
                                        </div>
                                    </div>
                                    
                                    
                        </div>
                    </div>
				</div>
			</form>
                                   

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-success" onclick="add1stCommRecord()">Submit</button> <!--data-dismiss="modal"-->
                                <button type="reset" class="btn btn-primary">Reset</button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    
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
                                        </tbody>
                                        
                                    </table>
                                </div>
          <!--  Table Structure Ends -->
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
			                
			</div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <?php include('../includes/frontend/inc-footer.php')?>
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
    <!-- Modal Display -->
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
    <script type="text/javascript">
    function add1stCommRecord(){
        var first_name = $('#fname').val();
        console.log(first_name);

        $.ajax({
            url: "insert-backend.php",
            type: 'POST',
            data : {'first_name' : first_name},

            success:function(data, status){
                console.log('Data Received',data);  
                console.log('Status:', status);
                
                $('#myModal').animate({'scrollTop':0},800);
                $("#1st-communion-form").trigger("reset");
                console.log('Successfully Inserted! and Form Reset');
            },

            error:function(errMsg){
                console.log('Error in inserting');
                colsole.log(errMsg);
            }


        });

        
    }
    </script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
   $('#zero_config').DataTable({
    "order": [0,'desc']
        });
   
 
    </script>

</body>

</html>