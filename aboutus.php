
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {box-sizing: border-box}
        body {font-family: "Lato", sans-serif;}

        /* Style the tab */
        .tab {
            float: left;
            border: 1px solid #ccc;
            padding-top: 50px;
            background-color: #f1f1f1;
            width: 30%;
            height: 500px;
        }

        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            background-color: #FFFFFF ;
            float: left;
            border: 1px solid #ccc;
            width: 70%;
            border-left: none;
            height: 500px ;
            padding-top: 50px;
        }
    </style>
</head>
<body>

<?php
require 'header.php';
?>
<h1 style="text-align:center" >INTI College Penang</h1>
<div class="tab">
    <button class="tablinks" onclick="openElement(event, 'Mission')" id="defaultOpen">Mission</button>
    <button class="tablinks" onclick="openElement(event, 'Course')">Course</button>
    <button class="tablinks" onclick="openElement(event, 'Location')">Location</button>
</div>

<div id="Mission" class="tabcontent">
    <h3>Our Mission :</h3>
    <p style="color: #131c21">We will provide the most international, innovative and individualised education.</p>
</div>

<div id="Course" class="tabcontent">
    <h3>Course Offered :</h3>
    <p style="color: #131c21"> - Business Administration  - Business Management </p>
    <p style="color: #131c21"> - Accounting - Finance - American Degree Transfer Program</p>
    <p style="color: #131c21"> - Hospitality - Law - Mass Communication</p>
    <p style="color: #131c21"> - Information Technology - Computer Science - Computing </p>
</div>

<div id="Location" class="tabcontent">
    <h3>Location :</h3>
    <p style="color: #131c21">1-Z, Lebuh Bukit Jambul, Bukit Jambul, 11900 Bayan Lepas, Pulau Pinang.</p>
</div>

<script>
    function openElement(evt, elementName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(elementName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

</body>
</html>

<body style="background: #5c6bc0"></body>


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