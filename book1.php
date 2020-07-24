<?php
require 'logincredentials.php';
session_start();
$usercheck = $_SESSION['user'];
$uid = mysqli_query($conn,"SELECT uidUsers FROM users WHERE uidUsers='$usercheck'");
$row = mysqli_fetch_assoc($uid);
$user = $row['uidUsers'];

    if (isset($_POST['next-button'])) {

        $name = $_POST['username'];
        $contact = $_POST['contact'];
        $date = $_POST['date'];
        $starttime = $_POST['time'];
        $route = $_POST['route'];

        if (empty($name) || empty($contact) || empty($date)) {
            echo "<script>alert('The form is not complete!');</script>";
            echo "<script>location.href=\"studentbook.php\"</script>";
            exit();
        } else {
            $sql = "INSERT INTO booking (uidUsers,UserName,Contact,DateChosen,StartTime,Route) VALUES('$user','$name', '$contact', '$date','$starttime','$route')";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Booking done!');</script>";
                echo "<script>location.href=\"studentbook.php\"</script>";
                exit();
            }
        }
    }

?>








