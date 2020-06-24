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
            padding-top: 150px;
            background-color: #f1f1f1;
            width: 30%;
            height: 1000px;
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
            float: left;
            border: 1px solid #ccc;
            width: 70%;
            border-left: none;
            height: 1000px ;
            padding-top: 150px;
        }
    </style>
</head>
<body>
<?php
require 'header.php';
?>

<div class="tab">
    <button class="tablinks" onclick="openElement(event, 'Me')" id="defaultOpen">Me</button>
    <button class="tablinks" onclick="openElement(event, 'Contact')">Contact</button>
    <button class="tablinks" onclick="openElement(event, 'Routes')">Routes</button>
</div>

<div id="Me" class="tabcontent">
    <h3>Name</h3>
    <p>London is the capital city of England.</p>
</div>

<div id="Contact" class="tabcontent">
    <h3>Paris</h3>
    <p>Paris is the capital of France.</p>
</div>

<div id="Routes" class="tabcontent">
    <h3>Tokyo</h3>
    <p>Tokyo is the capital of Japan.</p>
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
