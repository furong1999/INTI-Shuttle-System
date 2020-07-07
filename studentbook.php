<?php
require 'header.php';
require"./adminportal/dbconnect.php";
$fetchQuery = mysqli_query($conn,"SELECT * FROM schedule");
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
    <h3 align="left" style="margin-top:100px">Booking</h3>
    <br />
    <div class="card-body">
        <table id="booking-data" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Driver Name</th>
                <th>Time</th>
                <th>Capacity</th>
                <th>Route</th>
                <th>Action</th>
            </tr>
            </thead>
            <?php
            $sr = 1;
            while($row=mysqli_fetch_array($fetchQuery)){
                ?>
                <tr>
                    <form action="book.php?id=<?php echo $row['BusID'];?>" method="post" role="form">
                        <td><?php echo $sr;?></td>
                        <td><?php echo $row['DriverName'];?></td>
                        <td><?php echo $row['StartTime'];?></td>
                        <td><?php echo $row['Capacity'];?></td>
                        <td><?php echo $row['Route'];?></td>
                        <td>
                            <a href="book.php?id=<?php echo $row['BusID']; ?>" class = "btn btn-info">Book</a>
                        </td>
                    </form>
                </tr>

                <?php $sr++; }
            ?>
        </table>
    </div>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#booking-data').DataTable();
    });
</script>

