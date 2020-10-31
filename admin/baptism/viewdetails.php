<?php 
ob_start(); 
?>
<!--  Session Starts   -->
<?php 
session_start();
if (isset($_SESSION["username"]))
{
	$logid=$_SESSION["username"];
}
else
{
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
    <title>View_Baptism_Details_Live Church</title>
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
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" />
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                             <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                            </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                             <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Event today</h5> 
                                                        <span class="mail-desc">Just a reminder that event</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Settings</h5> 
                                                        <span class="mail-desc">You can customize this template</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Pavan kumar</h5> 
                                                        <span class="mail-desc">Just see the my admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Luanch Admin</h5> 
                                                        <span class="mail-desc">Just see the my new admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <?php include "profile.php"; ?>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
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
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
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
	$DOBaptism=$row['bapt_date'];
	$Padd=$row['permanent_address'];
	$Cadd=$row['current_address'];
	$Fathername=$row['father_name'];
	$Fathersname=$row['father_surname'];
	$Foccupation=$row['father_occupation'];
	$Mothername=$row['mother_name'];
	$Mothersname=$row['mother_surname'];
	$Moccupation=$row['mother_occupation'];
	$Mobile=$row['mobile'];
	$Email=$row['email'];
	
	

// fetching from eventbaptism table
$sql_eventbaptism = "select * from eventbaptism where user_id = $id";
$result1 = mysqli_query($con, $sql_eventbaptism);
$row = mysqli_fetch_array($result1, MYSQLI_ASSOC);
	$Country_id=$row['country_id'];
	$State=$row['states'];
	$District=$row['district'];
	$Diocese=$row['diocese'];
	$Church=$row['church'];
	$Bby=$row['clergyman'];
	$GFname=$row['godfather_name'];
	$GFdom=$row['godfather_domicile_id'];
	$GMname=$row['godmother_name'];
	$GMdom=$row['godmother_domicile_id'];
    $DOBaptism=$row['bapt_date'];
    
// Fetching from countries table
$sql_countries = "SELECT * FROM countries WHERE id = $Country_id";
$result2 = mysqli_query($con, $sql_countries);
$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $Country = $row['name'];

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
                                           
                                            <?php
                                                echo 'B ' .   htmlspecialchars($id) . '';
                                            ?>
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
                                        <label for="date" class="col-sm-3 text-left control-label col-form-label">Date of Baptism</label>
                                        <div class="col-sm-9">
                                           <?php echo date("d-m-Y",strtotime($DOBaptism));?>
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
                                        <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-left control-label col-form-label">Father's Name</label>
                                        <div class="col-sm-9">
                                            <?php echo $Fathername;?> &nbsp; <?php echo $Fathersname;?>
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
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">GodFather Name</label>
                                        <div class="col-sm-9">
                                            <?php echo $GFname;?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">GodFather Domicile</label>
                                        <div class="col-sm-9">
                                            <?php echo $GFdom;?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">GodMother Name</label>
                                        <div class="col-sm-9">
                                            <?php echo $GMname;?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">GodMother Domicile</label>
                                        <div class="col-sm-9">
                                           <?php echo $GMdom;?>
                                        </div>
                                    </div>
                                    <h5 class="card-title"><b>Diocese Info</b></h5>
                                    <div class="border-top"></div><br>
                                    
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Country</label>
                                    <div class="col-sm-9">
                                      <?php echo $Country;?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">State</label>
                                    <div class="col-sm-9">
                                       <?php echo $State;?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">District</label>
                                    <div class="col-md-9">
                                      <?php echo $District;?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Diocese</label>
                                    <div class="col-md-9">
                                       <?php echo $Diocese;?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Church</label>
                                    <div class="col-md-9">
                                        <?php echo $Church;?>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                        <label for="minister" class="col-sm-3 text-left control-label col-form-label">Baptized By</label>
                                        <div class="col-sm-9">
                                          <?php echo $Bby;?>
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