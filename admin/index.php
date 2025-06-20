<?php
require_once '../includes/session.php';

// // Detect if running on localhost or live server
// $isLocal = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;
// // Set a custom session path only on live server
// if (!$isLocal) {
//     ini_set('session.save_path', '/home2/churchregister/tmp');
// }

// $sessionPath = session_save_path();
// $sessionFile = $sessionPath . "/sess_" . session_id();

// echo "Session Save Path: <code>$sessionPath</code><br>";
// echo "Session File: <code>$sessionFile</code><br>";

// // echo "<pre>Is app running localaly: {$isLocal}</pre>";
// // ini_set('session.save_path', '/home2/churchregister/tmp');

// session_start();

// // Get base URL early
// include_once("../config.php"); // This sets $base_url
// echo "<pre>Base Host: {$host}</pre>";
// // Debug: Show base URL on screen
// echo "<pre>Base URL: {$base_url}</pre>";
// echo "<pre>Base URL 1: {$base_url_1}</pre>";
// echo "<pre>Is app running localaly: {$isLocal}</pre>";
// if ($isLocal) {
//     $base_url = $base_url_1;
// }


// // if (!isset($_SESSION['username'])) {
// //     // header('location: ../login.php');
    
// //     exit();
    
// //session_start();
// echo "Logged in as: " . ($_SESSION['username'] ?? 'Not set');

// // $_SESSION['username'] = $username;
// // Redirect to root index.php if user is not logged in
// //$_SESSION['username'] = 'Leo';
// //echo "<script>console.error('Session set manually to Leo.');</script>";
// if (!isset($_SESSION['username'])) {
//     echo "<script>console.error('Session not set.');</script>";
//     header("Location: " . $base_url . "index.php");
//     //exit();
// }
// echo "<script>console.info('Session username set');</script>";
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


    


//include_once("../config.php"); // Provides $base_url : app.churchregister.in

// $base_url will now be something like: /app.churchregister.in/
// This works from /admin/index.php, /user/dashboard.php, etc.

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Church Register - Dashboard</title>

    <!-- Dynamic CSS -->
    <link href="<?= $base_url ?>assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link href="<?= $base_url ?>dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <!-- Main wrapper -->
    <div id="main-wrapper">
        <!-- Topbar header -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="navbar-brand" href="index.php">
                        <b class="logo-icon p-l-10">
                            <img src="<?= $base_url ?>assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span class="logo-text">
                            <img src="<?= $base_url ?>assets/images/logo-text.png" alt="homepage" class="light-logo" />
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav ml-auto d-flex align-items-center">
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="<?= $base_url ?>assets/images/users/1.jpg" alt="user-img" width="36" class="img-circle">
                                <span class="text-white font-medium"><?php echo $_SESSION['username']; ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Page wrapper -->
        <div class="page-wrapper">
            <!-- <div class="container-fluid">-->
                <h2 class="text-center p-5">Welcome to Church Register Management System </h2>
            <!-- </div>-->
        </div>

    <div class="page-wrapper">
        <div class="container-fluid">
            <h3 class="text-left"><a href="baptism/">1. Baptism Register</a></h3>
            <h3 class="text-left"><a href="communion/">2. Holy Communion Register</a></h3>
            <h3 class="text-left"><a href="confirmation/">3. Confirmation Register</a></h3>
            <h3 class="text-left"><a href="bann/">4. Bann Register</a></h3>
            <h3 class="text-left"><a href="marriage/">5. Marriage Register</a></h3>
            <h3 class="text-left"><a href="burial/">6. Burial Register</a></h3>
        </div>
    </div>


        <!-- Footer -->
        <footer class="footer text-center">
            Church Register © <?php echo date("Y"); ?>
        </footer>
    </div>

    <!-- Dynamic JS Scripts -->
    <script src="<?= $base_url ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= $base_url ?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base_url ?>dist/js/app-style-switcher.js"></script>
    <script src="<?= $base_url ?>dist/js/waves.js"></script>
    <script src="<?= $base_url ?>dist/js/sidebarmenu.js"></script>
    <script src="<?= $base_url ?>assets/libs/flot/excanvas.js"></script>
    <script src="<?= $base_url ?>assets/libs/flot/jquery.flot.js"></script>
    <script src="<?= $base_url ?>assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="<?= $base_url ?>assets/libs/flot/jquery.flot.time.js"></script>
    <script src="<?= $base_url ?>assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?= $base_url ?>assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?= $base_url ?>assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?= $base_url ?>dist/js/pages/chart/chart-page-init.js"></script>
    <script src="<?= $base_url ?>dist/js/custom.js"></script>
</body>

</html>
