<?php
include("config2.php");

$id = $_GET['id'] ? $_GET['id'] : '';
$date = date('Y-m-d');

$sql = "INSERT INTO booking (seat_no, created) VALUES ($id, '$date')";


if ($conn->query($sql) === TRUE) {
  echo "success";
} else {
  echo "fail";
}

?>