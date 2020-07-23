<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>INTI Shuttle System</title>
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
                                <li><a href="index.html">About us</a></li>
                                <li><a href="driver.html">Bus Drivers</a></li>
                                <li><a href="studentbook.php">Book Bus Schedule</a></li>
                                 <li><a href="bookinghistory.php">Booking History</a></li>                  
                                <li><a href="contactus.php">Contact Us</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                ';
                                }else if(isset($_SESSION['bus'])){
                                    echo '
                                    
                                <li class="active"><a href="index.php">Tan Chee Keong</a></li>
                                <li><a href="busschedule.php">Your Schedule</a></li>
                                <li><a href="">Update Contact Details</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                ';
                                }else if(isset($_SESSION['bus2'])){
                                    echo '
                                    
                                  <li class="active"><a href="index.php">Kelvin Lim</a></li>
                                <li><a href="busschedule.php">Your Schedule</a></li>
                                <li><a href="">Update Contact Details</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                ';
                                } else if(isset($_SESSION['bus3'])){
                                    echo '
                                    
                                  <li class="active"><a href="index.php">Nicky Leong</a></li>
                                <li><a href="busschedule.php">Your Schedule</a></li>
                                <li><a href="">Update Contact Details</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                ';
                                }else{
                                    echo '
                                    
                                 <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="index.html">About us</a></li>
                                <li><a href="driver.html">Bus Drivers</a></li>
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




