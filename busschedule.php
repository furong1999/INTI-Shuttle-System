<?php
require 'header.php';
require"./adminportal/dbconnect.php";
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
    <h3 align="left" style="margin-top:100px">All Routes for <?php echo date("d/m/Y");?></h3>
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
            if(isset($_SESSION['bus'])) {
                $fetchQuery = mysqli_query($conn, "SELECT * FROM schedule WHERE DriverName = 'Tan Chee Keong'");
            }
            else if(isset($_SESSION['bus2'])){
                $fetchQuery = mysqli_query($conn, "SELECT * FROM schedule WHERE DriverName = 'Kelvin Lim'");
            }
            else if(isset($_SESSION['bus3'])){
                $fetchQuery = mysqli_query($conn, "SELECT * FROM schedule WHERE DriverName = 'Nicky Leong'");
            }
            $sr = 1;
            while($row=mysqli_fetch_array($fetchQuery)){
                ?>
                <tr>
                    <td><?php echo $sr;?></td>
                    <td><?php echo $row['DriverName'];?></td>
                    <td><?php echo $row['StartTime'];?></td>
                    <td><?php echo $row['Capacity'];?></td>
                    <td><?php echo $row['Route'];?></td>
                    <td>Daily except Weekend</td>
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
