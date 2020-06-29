<?php
require 'header.php';
require"dbconnect.php";
$BusID = $_GET['id'];
$query = "SELECT * FROM schedule WHERE BusID = '".$BusID."'";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result)){
    $BusID=$row['BusID'];
    $dname=$row['DriverName'];
    $starttime=$row['StartTime'];
    $capacity=$row['Capacity'];
    $route=$row['Route'];
}
?>
<!DOCTYPE html>
<body>
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title" style="margin-top: 100px" align="center">
                        <h1>Book Schedule</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn" >

        <div class="row" >
            <div class="col-lg-6" >
                <div class="card" >
                    <div class="card-header">
                        <strong class="card-title">Please check the bus details.</strong>
                    </div>
                    <div class="card-body card-block">

                        <form action="#" method="post">
                            <input type="hidden" name="BusID" value="<?php echo $BusID?>">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bus Driver Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="drivername" style="color: dimgrey" value="<?php echo $dname?>" class="form-control" disabled></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Time</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="time" style="color: dimgrey" value="<?php echo $starttime?>" class="form-control" disabled></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Capacity</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="cap" style="color: dimgrey" value="<?php echo $capacity?>" class="form-control" disabled></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Route</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="route" style="color: dimgrey" value="<?php echo $route?>" class="form-control" disabled></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="content">
    <div class="animated fadeIn" >

        <div class="row" >
            <div class="col-lg-6" >
                <div class="card" >
                    <div class="card-header">
                        <strong class="card-title">Please fill in your details</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="book.php" method="post">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="username" value="" placeholder="Eg: ABC" style="color:black" class="form-control"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Number</label></div>
                                <div class="col-12 col-md-9"><input type="tel" id="text-input" name="contact" value="" placeholder="Eg: 0123456789" style="color:black" class="form-control"></div>
                            </div>

                            <div class="row form-group"> <!-- Date input -->
                                <div class="col col-md-3"><label for="date" class=" form-control-label">Select Date</label></div>
                                <div class="col-12 col-md-9"><input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" style="color:black" type="date"/></div>
                            </div>
                            <div>
                                <button id="next"  type="submit" class="btn btn-lg btn-info btn-block" name="next-button">Next</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#form -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="assets/js/init/datatables-init.js"></script>

</body>
</html>



