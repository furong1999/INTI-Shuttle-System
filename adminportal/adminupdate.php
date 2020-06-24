<?php
include "header.php";
require('dbconnect.php');
?>

<!doctype html>
    <!-- #form -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Update Schedule</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $fetchQuery = mysqli_query($conn,"SELECT * FROM schedule");
    ?>
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-50">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Schedule</strong>
                        </div>
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Time</th>
                                    <th>Capacity</th>
                                    <th>Route</th>
                                    <th>Select</th>
                                    <th>Update</th>
                                </tr>
                                </thead>
                                <?php
                                $sr = 1;
                                while($row=mysqli_fetch_array($fetchQuery)){
                                    ?>
                                    <tr>
                                        <form action="update.php?id=<?php echo $row['BusID'];?>" method="post" role="form">
                                            <td><?php echo $sr;?></td>
                                            <td><?php echo $row['DriverName'];?></td>
                                            <td><?php echo $row['StartTime'];?></td>
                                            <td><?php echo $row['Capacity'];?></td>
                                            <td><?php echo $row['Route'];?></td>
                                            <td>
                                                <input type="checkbox" name="keyToUpdate" value="<?php echo $row['BusID'];?>" required>
                                            </td>
                                            <td>
                                                <a href="update.php?id=<?php echo $row['BusID']; ?>" class = "btn btn-info">Update</a>
                                            </td>
                                        </form>
                                    </tr>

                                    <?php $sr++; }
                                ?>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>