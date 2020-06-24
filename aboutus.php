<?php
require 'header.php';
?>

<body style="background: #5c6bc0"></body>

        <div class="about-section">
            <h1>About Us</h1>
            <p>Some text about who we are and what we do.</p>
            <p>     </p>

        </div>


<h1 style="text-align:center" >INTI College Penang</h1>


<div class="row" style="background: #6dabe4">

    <h2 style="text-align:left">Our Mission : </h2>
</div>
    <div class="row" style="background: #6dabe4">
    <p style="color: #131c21" >>We will provide the most international, innovative and individualised education.</p>
</div>

    <div class="row" style="background: #ab8ce4 ">
        <h2 style="text-align:left">Course Offered : </h2>
    </div>
<div class="row" style="background: #ab8ce4 ">
    <p style="color: #131c21" > - Business Administration - Business Management - Accounting - Finance - American Degree Transfer Program</p>
</div>
<div class="row" style="background: #ab8ce4 ">
    <p style="color: #131c21"> - Hospitality - Information Technology - Computer Science - Computing - Law - Mass Communication </p>
</div>

<div class="row" style="background: #b1dfbb ">
    <h2 style="text-align:left">Our Location : </h2>
</div>
<div class="row" style="background: #b1dfbb ">
    <p style="color: #131c21">1-Z, Lebuh Bukit Jambul, Bukit Jambul, 11900 Bayan Lepas, Pulau Pinang</p>
</div>



<h1 style="text-align:center" >Gallery</h1>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <div class="container">

        <!-- Full-width images with number text -->
        <div class="mySlides">
            <div class="numbertext">1 / 4</div>
            <img src="homedesign/aboutus/intiimg0.jpg" style="width:100%">
        </div>
        <div class="mySlides">
            <div class="numbertext">2 / 4</div>
            <img src="homedesign/aboutus/intiimg.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 4</div>
            <img src="homedesign/aboutus/intiimg2.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 4</div>
            <img src="homedesign/aboutus/intiimg3.jpg" style="width:100%">
        </div>


        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Image text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <!-- Thumbnail images -->
        <div class="row">
            <div class="column">
                <img class="demo cursor" src="homedesign/aboutus/intiimg0.jpg " style="width:100%" style="height: 40px" onclick="currentSlide(1)" >
            </div>
            <div class="column">
                <img class="demo cursor" src="homedesign/aboutus/intiimg.jpg" style="width:100%" onclick="currentSlide(2)" >
            </div>
            <div class="column">
                <img class="demo cursor" src="homedesign/aboutus/intiimg2.jpg" style="width:100%" onclick="currentSlide(3)" >
            </div>
            <div class="column">
                <img class="demo cursor" src="homedesign/aboutus/intiimg3.jpg" style="width:100%" onclick="currentSlide(4)" >
            </div>

            </div>
    </div>
    </div>
    <script src="homedesign/aboutus/gallery.js"></script>