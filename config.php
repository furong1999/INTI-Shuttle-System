<?php
$host = 'localhost';
$db = 'seat';
$user = 'root';
$pswd = '';

// Create connection
$conn = new mysqli($host, $user, $pswd);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db($conn,$db);
//echo "Connected successfully";
?>