<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>INTI College Penang</title>
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
                
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="aboutus.php">About us</a></li>
                                <li><a href="busdriver.php">Bus Drivers</a></li>
                                <li><a href="studentbook.php">Book Bus Schedule</a></li>
                                 <li><a href="bookinghistory.php">Booking History</a></li>                  
                                <li><a href="contactus.php">Contact Us</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                ';
                }else if(isset($_SESSION['bus'])){
                    echo '
                                    
                                <li class="active"><a href="busdriver/busdriver1home.php">Driver 1</a></li>
                                <li><a href="busschedule.php">Your Schedule</a></li>
                                <li><a href="logout.php">Log out</a></li>
                    
                                ';
                }else if(isset($_SESSION['bus2'])){
                    echo '
                                    
                                  <li class="active"><a href="busdriver/busdriver2home.php">Driver 2</a></li>
                                  <li><a href="busschedule.php">Your Schedule</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                ';
                } else if(isset($_SESSION['bus3'])){
                    echo '
                                
                                  <li class="active"><a href="busdriver/busdriver3home.php">Driver 3</a></li>
                                  <li><a href="busschedule.php">Your Schedule</a></li>
                                <li><a href="logout.php">Log out</a></li>
                                ';
                }else{
                    echo '
                                    
                                 <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="aboutus.php">About us</a></li>
                                <li><a href="busdriver.php">Bus Drivers</a></li>
                                <li><a href="visitorschedule.php">Bus Schedule</a></li>                                      
                                <li><a href="contactus.php">Contact Us</a></li>
                                <li><a href="login.php">Sign In</a></li>
                                <li><a href="signup.php">Sign Up</a></li>
                                <li><a href="resetpassword.php">Forget Password</a></li>
                                ';
                }?>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
<br><br>
<main id="main">

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Bus Driver</h2>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="busdriver/iPortfolio/assets/img/profile-img.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Mr. Tan Chee Keong</h4>
                            <span>Contact No. :0147089221</span>
                            <span>Routes : Elit Avenue <> Inti College Penang</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="busdriver/iPortfolio/assets/img/profile3.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Mr. Kelvin Lim</h4>
                            <span>Contact No. :0183459212</span>
                            <span>Routes : Penang Chinese Girls' High School <> Inti College Penang</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="busdriver/iPortfolio/assets/img/profile4.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Mr. Nicky Leong</h4>
                            <span>Contact No. :0193428667</span>
                            <span>Routes : Isle of Life <> Inti College Penang</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id="location" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Location</h2>
                <p>INTI COLLEGE PENANG</p>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?q=INTI%20College%20Penang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>1-Z, Lebuh Bukit Jambul, Bukit Jambul, 11900 Bayan Lepas, Pulau Pinang.</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>_iicp.adco@newinti.edu.my</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>04-6310138</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

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


