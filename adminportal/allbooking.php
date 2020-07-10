<?php
require 'header.php';
require  'logincredentials.php';


$fetchQuery = mysqli_query($conn, "SELECT * FROM booking ");
?>

<!doctype html>

<div class="content">
    <div class="animated fadeIn">

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">All booking made</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">

                                    <tr>
                                        <th>ID</th>
                                        <th>UserID</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Route</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <?php
                                    $fetchQuery = mysqli_query($conn, "SELECT * FROM booking ");

                                    $sr = 1;
                                    while($row=mysqli_fetch_array($fetchQuery)){
                                        ?>
                                        <tr>
                                            <td><?php echo $sr;?></td>
                                            <td><?php echo $row['uidUsers'];?></td>
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
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div>


</div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>









