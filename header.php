<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>INTI Shuttle System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="homedesign/major/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="homedesign/major/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="homedesign/major/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="homedesign/major/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="homedesign/major/plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="homedesign/major/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="homedesign/major/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="homedesign/flipcard/style.css">





</head>
<body>

<div class="super_container">

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo">
                            <a href="index.php">
                                <div>INTI PENANG</div>
                                <div>BUS SHUTTLE</div>
                            </a>
                        </div>
                        <nav class="main_nav">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                <?php
                                if(isset($_SESSION['user'])){
                                    echo'
                
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="aboutus.php">About us</a></li>
                                <li><a href="busdrivercontact.php">Bus Drivers</a></li>
                                <li><a href="#">Book Bus Schedule</a></li>
                                 <li><a href="#">Booking History</a></li>                  
                                <li><a href="contactus.php">Contact Us</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                ';
                                }else if(isset($_SESSION['bus'])){
                                    echo '
                                    
                                <li class="active"><a href="index.php">BusDriver1</a></li>
                                <li><a href="busdriverlogin.php">Your Schedule</a></li>
                                <li><a href="updatecontact.php">Update Contact Details</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                ';
                                }else if(isset($_SESSION['bus2'])){
                                    echo '
                                    
                                  <li class="active"><a href="index.php">BusDriver2</a></li>
                                <li><a href="">Your Schedule</a></li>
                                <li><a href="">Update Contact Details</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                ';
                                } else if(isset($_SESSION['bus3'])){
                                    echo '
                                    
                                  <li class="active"><a href="index.php">BusDriver3</a></li>
                                <li><a href="">Your Schedule</a></li>
                                <li><a href="">Update Contact Details</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                ';
                                }else{
                                    echo '
                                    
                                 <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="aboutus.php">About us</a></li>
                                <li><a href="busdrivercontact.php">Bus Drivers</a></li>
                                <li><a href="#">Bus Schedule</a></li>                                      
                                <li><a href="contactus.php">Contact Us</a></li>
                                <li><a href="login.php">Sign In</a></li>
                                <li><a href="signup.php">Sign Up</a></li>
                                <li><a href="resetpassword.php">Forget Password</a></li>
                                ';
                                }?>

                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </header>


<script src="homedesign/major/js/jquery-3.2.1.min.js"></script>
    <script src="homedesign/major/styles/bootstrap-4.1.2/popper.js"></script>
    <script src="homedesign/major/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="homedesign/major/plugins/greensock/TweenMax.min.js"></script>
    <script src="homedesign/major/plugins/greensock/TimelineMax.min.js"></script>
    <script src="homedesign/major/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="homedesign/major/plugins/greensock/animation.gsap.min.js"></script>
    <script src="homedesign/major/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="homedesign/major/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="homedesign/major/plugins/easing/easing.js"></script>
    <script src="homedesign/major/plugins/progressbar/progressbar.min.js"></script>
    <script src="homedesign/major/plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="homedesign/major/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="homedesign/major/js/custom.js"></script>