<?php
require('dbconnect.php');
if(isset($_POST['add-button'])) {
    $busid = $_POST['bid'];
    $starttime = $_POST['time'];
    $capacity = $_POST['cap'];
    $route = $_POST['route'];

    $sql_b = "SELECT * FROM schedule WHERE BusID='$busid'";
    $sql_t = "SELECT * FROM schedule WHERE StartTime ='$starttime'";
    $sql_r = "SELECT * FROM schedule WHERE Route ='$route'";
    $result = mysqli_query($conn, $sql_b);
    $result1 = mysqli_query($conn, $sql_t);
    $result2 = mysqli_query($conn, $sql_r);
    $b = mysqli_num_rows($result);
    $t = mysqli_num_rows($result1);
    $r = mysqli_num_rows($result2);

    if (empty($busid) || empty($starttime) || empty($capacity) || empty($route)) {
        echo "<script>alert('The form is not complete!');</script>";
        echo "<script>location.href=\"adminadd.php\"</script>";
        exit();
    }else{
        if ($b > 0) {
            if ($t > 0) {
                echo "<script>alert('Bus id and time already registered!');</script>";
                echo "<script>location.href=\"adminadd.php\"</script>";
                exit();
            }else {
                $sql = "INSERT INTO schedule VALUES('$busid', '$starttime', '$capacity', '$route')";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('New schedule added successfully!');</script>";
                    echo "<script>location.href=\"adminadd.php\"</script>";
                    exit();
                }
            }
        }
        elseif($t > 0){
            if($r > 0){
                echo "<script>alert('Time and route exists!');</script>";
                echo "<script>location.href=\"adminadd.php\"</script>";
                exit();
            }else {
                $sql = "INSERT INTO schedule VALUES('$busid', '$starttime', '$capacity', '$route')";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('New schedule added successfully!');</script>";
                    echo "<script>location.href=\"adminadd.php\"</script>";
                    exit();
                }
            }

        }
        else {
            $sql = "INSERT INTO schedule VALUES('$busid', '$starttime', '$capacity', '$route')";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('New schedule added successfully!');</script>";
                echo "<script>location.href=\"adminadd.php\"</script>";
                exit();
            }
        }
    }
}
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
                        <li><i class="ti-minus"></i><a href="">Remove Schedule</a></li>
                        <li><i class="ti-check"></i><a href="">Update Schedule</a></li>
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
                            <h1>Add Schedule</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Please fill in the form</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="adminadd.php" method="post" >
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bus ID</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="bid" placeholder="Eg: 1001" class="form-control"><small class="form-text text-muted">Please enter your bus ID.</small></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Select Time</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="time" id="select" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="7am">7am</option>
                                            <option value="8am">8am</option>
                                            <option value="9am">9am</option>
                                            <option value="10am">10am</option>
                                            <option value="11am">11am</option>
                                            <option value="12pm">12pm</option>
                                            <option value="1pm">1pm</option>
                                            <option value="2pm">2pm</option>
                                            <option value="3pm">3pm</option>
                                            <option value="4pm">4pm</option>
                                            <option value="5pm">5pm</option>
                                            <option value="6pm">6pm</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Capacity</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="cap" placeholder="Eg: 25" class="form-control"><small class="form-text text-muted">Please enter the bus capacity.</small></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Select Route</label></div>
                                    <div class="col col-md-9">
                                        <div class="form-check">
                                            <div class="radio">
                                                <label for="radio1" class="form-check-label ">
                                                    <input type="radio" id="radio1" name="route" value="INTI - Elit Avenue" class="form-check-input">INTI - Elit Avenue
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio2" class="form-check-label ">
                                                    <input type="radio" id="radio2" name="route" value="Elit Avenue - INTI" class="form-check-input">Elit Avenue - INTI
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio3" class="form-check-label ">
                                                    <input type="radio" id="radio3" name="route" value="PCGHS - One Stop - McD Greenlane - INTI" class="form-check-input">PCGHS - One Stop - McD Greenlane - INTI
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio4" class="form-check-label ">
                                                    <input type="radio" id="radio4" name="route" value="INTI- McD Greenlane- One Stop - PCGHS" class="form-check-input">INTI- McD Greenlane- One Stop - PCGHS
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio5" class="form-check-label ">
                                                    <input type="radio" id="radio5" name="route" value="Isle of Life - Lengkok Kenari - INTI" class="form-check-input">Isle of Life - Lengkok Kenari - INTI
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio6" class="form-check-label ">
                                                    <input type="radio" id="radio6" name="route" value="INTI - Lengkok Kenari - Isle of Life" class="form-check-input">INTI - Lengkok Kenari - Isle of Life
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio7" class="form-check-label ">
                                                    <input type="radio" id="radio7" name="route" value="Sunshine Lip Sin - Jalan Bukit Gambir - INTI" class="form-check-input">Sunshine Lip Sin - Jalan Bukit Gambir - INTI
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio8" class="form-check-label ">
                                                    <input type="radio" id="radio8" name="route" value="INTI - Jalan Bukit Gambir - Sunshine Lip Sin" class="form-check-input">INTI - Jalan Bukit Gambir - Sunshine Lip Sin
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio9" class="form-check-label ">
                                                    <input type="radio" id="radio9" name="route" value="Golden Triangle - Fairview International School - INTI" class="form-check-input">Golden Triangle - Fairview International School - INTI
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio10" class="form-check-label ">
                                                    <input type="radio" id="radio10" name="route" value="INTI - Fairview International School - Golden Triangle " class="form-check-input">INTI - Fairview International School - Golden Triangle
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <button id="add" type="submit" class="btn btn-lg btn-info btn-block" name="add-button">Add</button>
                                </div>
                            </form>
                        </div>
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

