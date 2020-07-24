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

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                <h1>About Us</h1>
                <h2>Inti College Penang</h2>
            </div>
        </div>

        <div class="row icon-boxes">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="ri-stack-line"></i></div>
                    <h4 class="title"><a href="#mission">Mission</a></h4>

                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="ri-palette-line"></i></div>
                    <h4 class="title"><a href="#about-video">Why INTI?</a></h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
                <div class="icon-box">
                    <div class="icon"><i class="ri-command-line"></i></div>
                    <h4 class="title"><a href="#course">Course</a></h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
                <div class="icon-box">
                    <div class="icon"><i class="ri-fingerprint-line"></i></div>
                    <h4 class="title"><a href="#location">Location</a></h4>
                </div>
            </div>

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Mission Section ======= -->
    <section id="mission" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Mission</h2>
                <p>INTI College Penang </p>
            </div>

            <div class="row content">

                <ul>
                    <li><i class="ri-check-double-line"></i>We will provide the most international, innovative and individualised education.</li>
                </ul>
            </div>
        </div>

        </div>
    </section><!-- End Mission Section -->


    <!-- ======= About Video Section ======= -->
    <section id="about-video" class="about-video">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
                    <img src="OnePage/assets/img/about-video.jpg" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=SrI4Le-rt98" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                    <h3>Why INTI?</h3>
                    <ul>
                        <li><i class="bx bx-check-double"></i> Gain the best quality education with world class facilities and resources, regardless of your field of studies.</li>
                        <li><i class="bx bx-check-double"></i> Experience quality education that prepares you to face the challenges in the global market..</li>
                        <li><i class="bx bx-check-double"></i> 99% of INTI graduates get jobs within 6 months</li>
                        <li><i class="bx bx-check-double"></i> 91% of INTI graduates get paid higher than the market minimum average.</li>
                    </ul>
                </div>

            </div>

        </div>
    </section><!-- End About Video Section -->


    <!-- ======= Course Section ======= -->
    <section id="course" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Course Offered</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                            <i class="bx bxl-dribbble"></i>
                        </div>
                        <h4><a href="">Business</a></h4>
                        <ul>
                            <li> Business Management</li>
                            <li> Accounting & Finance</li>
                            <li> Marketing</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                            </svg>
                            <i class="bx bx-file"></i>
                        </div>
                        <h4><a href="">Law</a></h4>
                        <ul>
                            <li> UK Degree Transfer Programme</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                            </svg>
                            <i class="bx bx-tachometer"></i>
                        </div>
                        <h4><a href="">Engineering</a></h4>
                        <ul>
                            <li> Civil Engineering</li>
                            <li> Electrical & Electronic Engineering</li>
                            <li> Mechanical Engineering</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-yellow">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                            </svg>
                            <i class="bx bx-layer"></i>
                        </div>
                        <h4><a href="">American Transfer Degree</a></h4>
                        <ul>
                            <li> Communication</li>
                            <li> Psychology</li>
                            <li> Bio Science</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h4><a href="">Computer Science</a></h4>
                        <ul>
                            <li> Information Technology</li>
                            <li> Computer Science</li>
                            <li> Computing</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-teal">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                            </svg>
                            <i class="bx bx-arch"></i>
                        </div>
                        <h4><a href="">Hospitality & Culinary Arts</a></h4>
                        <ul>
                            <li> Hotel Management</li>
                            <li> Tourism</li>
                            <li> Culinary Art</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Course Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Gallery</h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="150">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="OnePage/assets/img/intiimg0.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Inti Logo</h4>
                            <div class="portfolio-links">
                                <a href="OnePage/assets/img/intiimg0.jpg" data-gall="portfolioGallery" class="venobox" title="logo1"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="OnePage/assets/img/intiimg.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Inti Campus</h4>
                            <div class="portfolio-links">
                                <a href="OnePage/assets/img/intiimg.jpg" data-gall="portfolioGallery" class="venobox" title="Inti Campus"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="OnePage/assets/img/intiimg2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Inti Campus 2</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="OnePage/assets/img/intiimg2.jpg" data-gall="portfolioGallery" class="venobox" title="Inti Campus 2"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="OnePage/assets/img/intiimg3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Inti Event</h4>
                            <div class="portfolio-links">
                                <a href="OnePage/assets/img/intiimg3.jpg" data-gall="portfolioGallery" class="venobox" title="Inti Event"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Section -->

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
