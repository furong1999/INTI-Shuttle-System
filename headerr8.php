<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>INTI Sakura Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="homedesign/major/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="homedesign/major/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="homedesign/major/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="homedesign/major/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="homedesign/major/plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="homedesign/major/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="homedesign/major/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="homedesign/flipcard/style.css">


    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v15/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v15/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v15/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v15/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v15/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v15/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v15/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v15/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v15/css/util.css">
    <link rel="stylesheet" type="text/css" href="Login_v15/css/main.css">
    <!--===============================================================================================-->

    <link rel="stylesheet" href="colorlib-regform-8/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="colorlib-regform-8/css/style.css"


</head>
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
                                <li><a href="">About us</a></li>
                                <li><a href="busdrivercontact.php">Bus Drivers</a></li>
                                <li><a href="#">Book Bus Schedule</a></li>
                                 <li><a href="#">Booking History</a></li>                  
                                <li><a href="contactus.php">Contact Us</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                ';
                                } else if(isset($_SESSION['bus'])){
                                    echo '
                                    
                                  <li class="active"><a href="index.php">Bus</a></li>
                                <li><a href="">Your Schedule</a></li>
                                <li><a href="">Update Contact Details</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                ';
                                }else if(isset($_SESSION['bus2'])){
                                    echo '
                                    
                                  <li class="active"><a href="index.php">Bus</a></li>
                                <li><a href="">Your Schedule</a></li>
                                <li><a href="">Update Contact Details</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                ';
                                }else if(isset($_SESSION['bus3'])){
                                    echo '
                                    
                                  <li class="active"><a href="index.php">Bus</a></li>
                                <li><a href="">Your Schedule</a></li>
                                <li><a href="">Update Contact Details</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                ';
                                }else{
                                    echo '
                                    
                                  <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="">About us</a></li>
                                <li><a href="busdrivercontact.php">Bus Drivers</a></li>
                                <li><a href="#">Bus Schedule</a></li>                                               
                                <li><a href="contactus.php">Contact Us</a></li>
                                <li><a href="login.php">Sign In</a></li>
                                <li><a href="signup.php">Sign Up</a></li>
                                
                                ';
                                }?>

                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </header>




