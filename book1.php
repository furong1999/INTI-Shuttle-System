<?php
if (isset($_POST['next-button'])){
    require 'logincredentials.php';
    $name = $_POST['username'];
    $contact = $_POST['contact'];
    $date = $_POST['date'];

    $sql = "INSERT INTO booking (UserName,Contact,DateChosen) VALUES('$name', '$contact', '$date')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Booking done!');</script>";
        echo "<script>location.href=\"studentbook.php\"</script>";
        exit();
    }
}
?>
