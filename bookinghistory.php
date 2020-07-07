<?php
require 'header.php';
require 'logincredentials.php';
$usercheck = $_SESSION['user'];
$uid = mysqli_query($conn,"SELECT uidUsers FROM users WHERE uidUsers='$usercheck'");
$row = mysqli_fetch_assoc($uid);
$user = $row['uidUsers'];
if(isset($_SESSION['user'])) {
    $fetchQuery = mysqli_query($conn, "SELECT * FROM booking WHERE uidUsers = '$user'");
}
?>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</head>
<body>
<br /><br />

<div class="container">
    <h3 align="left" style="margin-top:100px">Booking History</h3>
    <br />
    <div class="card-body">
        <table id="booking-data" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Date</th>
                <th>Time</th>
                <th>Route</th>
                <th>Action</th>
            </tr>
            </thead>
            <?php
            $sr = 1;
            while($row=mysqli_fetch_array($fetchQuery)){
                ?>
                <tr>
                    <td><?php echo $sr;?></td>
                    <td><?php echo $row['UserName'];?></td>
                    <td><?php echo $row['Contact'];?></td>
                    <td><?php echo $row['DateChosen'];?></td>
                    <td><?php echo $row['StartTime'];?></td>
                    <td><?php echo $row['Route'];?></td>
                    <td><?php echo $row['BookingDate'];?></td>
                </tr>

                <?php $sr++; }
            ?>
        </table>
    </div>
</div>
</body>
</html>