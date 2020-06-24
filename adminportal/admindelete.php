<?php
require"dbconnect.php"
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INTI Shuttle Admin</title>
    <meta name="description" content="INTI Shuttle System">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />


</head>

<body>
<!-- Left Side Navigation -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Schedules</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Manage Schedule</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="ti-plus"></i><a href="adminadd.php">Add Schedule</a></li>
                        <li><i class="ti-minus"></i><a href="admindelete.php">Remove Schedule</a></li>
                        <li><i class="ti-check"></i><a href="adminupdate.php">Update Schedule</a></li>
                    </ul>
                </li>

                <li class="menu-title">Notification</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-email"></i>Email</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-bell-o"></i><a href="">Booking Notification </a></li>

                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left side navigation -->

<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">
                <a class="navbar-brand" href="./"><img src="images/it4.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/inti2.jpg" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin1.png" alt="User Avatar">
                    </a>
                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="../login.php"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /#header -->

    <!-- #form -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Delete Schedule</h1>
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
                            <?php
                                function delete($val){
                                    $val = "<script>alert('Record Deleted!');</script>";
                                    return $val;
                                }
                                if(isset($_POST['DeleteBtn'])){
                                    $key = $_POST['keyToDelete'];
                                    $check = mysqli_query($conn,"SELECT * FROM schedule WHERE BusID ='$key'");
                                    if (mysqli_num_rows($check)>0){
                                        $queryDelete = mysqli_query($conn,"DELETE from schedule WHERE BusID = '$key'")
                                            or die ("Not Deleted".mysqli_error());
                                        echo delete($_POST['DeleteBtn']);
                                        echo "<script>location.href=\"admindelete.php\"</script>";
                                        exit();
                                        ?>

                                        <!--div class="alert alert-success">
                                            <p>record deleted!</p>
                                        </div-->
                            <?php
                                    }
                            } ?>


                            <table class="table ">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Time</th>
                                    <th>Capacity</th>
                                    <th>Route</th>
                                    <th>Select</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <?php
                                    $sr = 1;
                                    while($row=mysqli_fetch_array($fetchQuery)){
                                ?>
                                <tr>
                                    <form action="" method="post" role="form">
                                        <td><?php echo $sr;?></td>
                                        <td><?php echo $row['DriverName'];?></td>
                                        <td><?php echo $row['StartTime'];?></td>
                                        <td><?php echo $row['Capacity'];?></td>
                                        <td><?php echo $row['Route'];?></td>
                                        <td>
                                            <input type="checkbox" name="keyToDelete" value="<?php echo $row['BusID'];?>" required>
                                        </td>
                                        <td>
                                            <input type="submit" name="DeleteBtn" class="btn btn-danger" value="Delete">
                                        </td>
                                    </form>
                                </tr>

                                <?php $sr++; }
                                ?>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                </div>

                <!-- Scripts -->
                <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
                <script src="assets/js/main.js"></script>

                <!--  Chart js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

                <!--Chartist Chart-->
                <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

                <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

                <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
                <script src="assets/js/init/weather-init.js"></script>

                <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
                <script src="assets/js/init/fullcalendar-init.js"></script>



</body>
</html>