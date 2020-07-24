<?php
include "header.php";
require('dbconnect.php');
if(isset($_POST['add-button'])) {
    $dname = $_POST['drivername'];
    $starttime = $_POST['time'];
    $capacity = $_POST['cap'];
    $route = $_POST['route'];

    $sql_b = "SELECT * FROM schedule WHERE DriverName='$dname'";
    $sql_t = "SELECT * FROM schedule WHERE StartTime ='$starttime'";
    $sql_r = "SELECT * FROM schedule WHERE Route ='$route'";
    $result = mysqli_query($conn, $sql_b);
    $result1 = mysqli_query($conn, $sql_t);
    $result2 = mysqli_query($conn, $sql_r);
    $b = mysqli_num_rows($result);
    $t = mysqli_num_rows($result1);
    $r = mysqli_num_rows($result2);

    if (empty($dname) || empty($starttime) || empty($capacity) || empty($route)) {
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
                $sql = "INSERT INTO schedule (DriverName,StartTime,Capacity,Route) VALUES('$dname', '$starttime', '$capacity', '$route')";
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
                $sql = "INSERT INTO schedule (DriverName,StartTime,Capacity,Route) VALUES('$dname', '$starttime', '$capacity', '$route')";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('New schedule added successfully!');</script>";
                    echo "<script>location.href=\"adminadd.php\"</script>";
                    exit();
                }
            }

        }
        else {
            $sql = "INSERT INTO schedule(DriverName,StartTime,Capacity,Route) VALUES('$dname', '$starttime', '$capacity', '$route')";
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
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Bus Driver Name</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="drivername" id="select" class="form-control">
                                        <option value="">Please select</option>
                                        <option value="Tan Chee Keong">Tan Chee Keong</option>
                                        <option value="Kelvin Lim">Kelvin Lim</option>
                                        <option value="Nicky Leong">Nicky Leong</option>
                                    </select>
                                </div>
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
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Select Capacity</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="cap" id="select" class="form-control">
                                        <option value="0">Please select</option>
                                        <option value="20">20</option>
                                        <option value="40">40</option>
                                    </select>
                                </div>
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
</html>

