<?php
ini_set('session.save_path', '/home2/churchregister/tmp');
ob_start();
session_start();

if (isset($_SESSION["username"])) {
    $logid = $_SESSION["username"];
} else {
    echo "<script>console.error('Session not set.');</script>";
    header("location:../../index.php");
    exit();
}

include_once("../../config.php"); // Injects $

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin_Baptism_Live Church</title>

    <link rel="icon" type="image/png" sizes="16x16" href="<?= $base_url ?>assets/images/favicon.png">
    <link href="<?= $base_url ?>assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link href="<?= $base_url ?>dist/css/style.min.css" rel="stylesheet">

    <?php include('../includes/frontend/inc-upscript.php'); ?>
</head>

<body oncontextmenu="return false;">
    <div class="preloader">
        <div class="lds-ripple"><div class="lds-pos"></div><div class="lds-pos"></div></div>
    </div>

    <div id="main-wrapper">
        <?php include('../includes/frontend/inc-header.php'); ?>

        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <?php include('../includes/frontend/inc-sidebar.php'); ?>
            </div>
        </aside>

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Baptism Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Baptism</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <?php include('bapt-includes/operations-tab.php'); ?>
            </div>

            <?php include('../includes/frontend/inc-footer.php'); ?>
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?= $base_url ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= $base_url ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= $base_url ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= $base_url ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= $base_url ?>assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="<?= $base_url ?>dist/js/waves.js"></script>
    <script src="<?= $base_url ?>dist/js/sidebarmenu.js"></script>
    <script src="<?= $base_url ?>dist/js/custom.min.js"></script>
    <script src="<?= $base_url ?>assets/libs/flot/excanvas.js"></script>
    <script src="<?= $base_url ?>assets/libs/flot/jquery.flot.js"></script>
    <script src="<?= $base_url ?>assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="<?= $base_url ?>assets/libs/flot/jquery.flot.time.js"></script>
    <script src="<?= $base_url ?>assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?= $base_url ?>assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?= $base_url ?>assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?= $base_url ?>dist/js/pages/chart/chart-page-init.js"></script>
</body>
</html>