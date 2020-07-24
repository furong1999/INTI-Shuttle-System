<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>INTI Shuttle System</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="OnePage/assets/img/favicon.png" rel="icon">
    <link href="OnePage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="OnePage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="OnePage/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="OnePage/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="OnePage/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="OnePage/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="OnePage/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="OnePage/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="OnePage/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: OnePage - v2.1.0
    * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="index.php">INTI Shuttle System</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <?php
                if(isset($_SESSION['user'])){
                    echo'
                
                                <li class="active"><a href="../index.php">Home</a></li>
                                <li><a href="../aboutus.php">About us</a></li>
                                <li><a href="../busdriver.php">Bus Drivers</a></li>
                                <li><a href="../studentbook.php">Book Bus Schedule</a></li>
                                 <li><a href="../bookinghistory.php">Booking History</a></li>                  
                                <li><a href="../contactus.php">Contact Us</a></li>
                                <li><a href="../logout.php">Log out</a></li>
                                ';
                }else if(isset($_SESSION['bus'])){
                    echo '
                                    
                                <li class="active"><a href="busdriver1home.php">Driver 1</a></li>
                                <li><a href="busschedule.php">Your Schedule</a></li>
                                <li><a href="../logout.php">Log out</a></li>
                    
                                ';
                }else if(isset($_SESSION['bus2'])){
                    echo '
                                    
                                  <li class="active"><a href="busdriver2home.php">Driver 2</a></li>
                                  <li><a href="busschedule.php">Your Schedule</a></li>
                                <li><a href="../logout.php">Log out</a></li>
                                ';
                } else if(isset($_SESSION['bus3'])){
                    echo '
                                
                                  <li class="active"><a href="busdriver3home.php">Driver 3</a></li>
                                  <li><a href="busschedule.php">Your Schedule</a></li>
                                <li><a href="../logout.php">Log out</a></li>
                                ';
                }else{
                    echo '
                                    
                                 <li class="active"><a href="../index.php">Home</a></li>
                                <li><a href="../aboutus.php">About us</a></li>
                                <li><a href="../busdriver.php">Bus Drivers</a></li>
                                <li><a href="../visitorschedule.php">Bus Schedule</a></li>                                      
                                <li><a href="../contactus.php">Contact Us</a></li>
                                <li><a href="../login.php">Sign In</a></li>
                                <li><a href="../signup.php">Sign Up</a></li>
                                <li><a href="../resetpassword.php">Forget Password</a></li>
                                ';
                }?>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->





<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="OnePage/assets/vendor/jquery/jquery.min.js"></script>
<script src="OnePage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="OnePage/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="OnePage/assets/vendor/php-email-form/validate.js"></script>
<script src="OnePage/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="OnePage/assets/vendor/counterup/counterup.min.js"></script>
<script src="OnePage/assets/vendor/venobox/venobox.min.js"></script>
<script src="OnePage/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="OnePage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="OnePage/assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="OnePage/assets/js/main.js"></script>

</body>

</html>








<!-- Vendor JS Files -->
<script src="OnePage/assets/vendor/jquery/jquery.min.js"></script>
<script src="OnePage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="OnePage/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="OnePage/assets/vendor/php-email-form/validate.js"></script>
<script src="OnePage/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="OnePage/assets/vendor/counterup/counterup.min.js"></script>
<script src="OnePage/assets/vendor/venobox/venobox.min.js"></script>
<script src="OnePage/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="OnePage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="OnePage/assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="OnePage/assets/js/main.js"></script>
