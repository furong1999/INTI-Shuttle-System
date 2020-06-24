<?php
include "header.php";
require "dbconnect.php";
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
function update($val){
    $val = "<script>alert('Updated successfully!');</script>";
    return $val;

}
if (isset($_POST['update-button'])){
    $BusID = $_GET['id'];
    $dname = $_POST['drivername'];
    $starttime = $_POST['time'];
    $capacity = $_POST['cap'];
    $route = $_POST['route'];
    $query = "UPDATE schedule SET DriverName='".$dname."',StartTime ='".$starttime."',Capacity='".$capacity."',Route='".$route."' WHERE BusID='".$BusID."'";
    $result = mysqli_query($conn,$query);
    if($result){
        echo update($_POST['update-button']);
        echo "<script>location.href=\"adminupdate.php\"</script>";
        exit();
    }else{
        echo "<script>alert('Not updated!');</script>";
        echo "<script>location.href=\"adminupdate.php\"</script>";
        exit();
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
                            <h1>Update Schedule</h1>
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
                            <strong class="card-title">Please update the form</strong>
                        </div>
                        <div class="card-body card-block">

                            <form action="update.php?id=<?php echo $BusID?>" method="post" >
                                <input type="hidden" name="BusID" value="<?php echo $BusID?>">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bus Driver Name</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="drivername" value="<?php echo $dname?>" placeholder="Eg: ABC" class="form-control"><small class="form-text text-muted">Please enter bus driver name.</small></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Select Time</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="time" id="select" class="form-control" >
                                            <option value="0">Please select</option>
                                            <option value="7am"
                                                <?php
                                                if($starttime=='7am'){
                                                    echo"selected";
                                                }
                                                ?>
                                            >7am</option>
                                            <option value="8am"
                                                <?php
                                                if($starttime=='8am'){
                                                    echo"selected";
                                                }
                                                ?>
                                            >8am</option>
                                            <option value="9am"
                                                <?php
                                                if($starttime=='9am'){
                                                    echo"selected";
                                                }
                                                ?>
                                            >9am</option>
                                            <option value="10am"<?php
                                            if($starttime=='10am'){
                                                echo"selected";
                                            }
                                            ?>
                                            >10am</option>
                                            <option value="11am"
                                                <?php
                                                if($starttime=='11am'){
                                                    echo"selected";
                                                }
                                                ?>>11am</option>
                                            <option value="12pm"
                                                <?php
                                                if($starttime=='12pm'){
                                                    echo"selected";
                                                }
                                                ?>
                                            >12pm</option>
                                            <option value="1pm"
                                                <?php
                                                if($starttime=='1pm'){
                                                    echo"selected";
                                                }
                                                ?>
                                            >1pm</option>
                                            <option value="2pm"
                                                <?php
                                                if($starttime=='2pm'){
                                                    echo"selected";
                                                }
                                                ?>>2pm</option>
                                            <option value="3pm"
                                                <?php
                                                if ($starttime=='3pm'){
                                                    echo"selected";
                                                }
                                                ?>
                                            >3pm</option>
                                            <option value="4pm"
                                                <?php
                                                if($starttime=='4pm'){
                                                    echo"selected";
                                                }
                                                ?>
                                            >4pm</option>
                                            <option value="5pm"
                                                <?php
                                                if($starttime=='5pm'){
                                                    echo"selected";
                                                }
                                                ?>
                                            >5pm</option>
                                            <option value="6pm"
                                                <?php
                                                if($starttime=='6pm'){
                                                    echo"selected";
                                                }
                                                ?>
                                            >6pm</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Select Capacity</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="cap" id="select" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="20"
                                                <?php
                                                if($capacity=='20'){
                                                    echo"selected";
                                                }
                                                ?>
                                            >20</option>
                                            <option value="40"
                                                <?php
                                                if($capacity=='40'){
                                                    echo"selected";
                                                }
                                                ?>
                                            >40</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Select Route</label></div>
                                    <div class="col col-md-9">
                                        <div class="form-check">
                                            <div class="radio">
                                                <label for="radio1" class="form-check-label ">
                                                    <input type="radio" id="radio1" name="route" value="INTI - Elit Avenue" class="form-check-input"
                                                        <?php
                                                        if($route=='INTI - Elit Avenue'){
                                                            echo"checked";
                                                        }
                                                        ?>
                                                    >INTI - Elit Avenue
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio2" class="form-check-label ">
                                                    <input type="radio" id="radio2" name="route" value="Elit Avenue - INTI" class="form-check-input"
                                                        <?php
                                                        if($route=='Elit Avenue - INTI'){
                                                            echo"checked";
                                                        }
                                                        ?>
                                                    >Elit Avenue - INTI
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio3" class="form-check-label ">
                                                    <input type="radio" id="radio3" name="route" value="PCGHS - One Stop - McD Greenlane - INTI" class="form-check-input"
                                                        <?php
                                                        if($route=='PCGHS - One Stop - McD Greenlane - INTI'){
                                                            echo"checked";
                                                        }
                                                        ?>
                                                    >PCGHS - One Stop - McD Greenlane - INTI
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio4" class="form-check-label ">
                                                    <input type="radio" id="radio4" name="route" value="INTI- McD Greenlane- One Stop - PCGHS" class="form-check-input"
                                                        <?php
                                                        if($route=='INTI- McD Greenlane- One Stop - PCGHS'){
                                                            echo"checked";
                                                        }
                                                        ?>
                                                    >INTI- McD Greenlane- One Stop - PCGHS
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio5" class="form-check-label ">
                                                    <input type="radio" id="radio5" name="route" value="Isle of Life - Lengkok Kenari - INTI" class="form-check-input"
                                                        <?php
                                                        if($route=='Isle of Life - Lengkok Kenari - INTI'){
                                                            echo"checked";
                                                        }
                                                        ?>
                                                    >Isle of Life - Lengkok Kenari - INTI
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio6" class="form-check-label ">
                                                    <input type="radio" id="radio6" name="route" value="INTI - Lengkok Kenari - Isle of Life" class="form-check-input"
                                                        <?php
                                                        if($route=='INTI - Lengkok Kenari - Isle of Life'){
                                                            echo"checked";
                                                        }
                                                        ?>
                                                    >INTI - Lengkok Kenari - Isle of Life
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio7" class="form-check-label ">
                                                    <input type="radio" id="radio7" name="route" value="Sunshine Lip Sin - Jalan Bukit Gambir - INTI" class="form-check-input"
                                                        <?php
                                                        if($route=='Sunshine Lip Sin - Jalan Bukit Gambir - INTI'){
                                                            echo"checked";
                                                        }
                                                        ?>
                                                    >Sunshine Lip Sin - Jalan Bukit Gambir - INTI
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio8" class="form-check-label ">
                                                    <input type="radio" id="radio8" name="route" value="INTI - Jalan Bukit Gambir - Sunshine Lip Sin" class="form-check-input"
                                                        <?php
                                                        if($route=='INTI - Jalan Bukit Gambir - Sunshine Lip Sin'){
                                                            echo"checked";
                                                        }
                                                        ?>
                                                    >INTI - Jalan Bukit Gambir - Sunshine Lip Sin
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio9" class="form-check-label ">
                                                    <input type="radio" id="radio9" name="route" value="Golden Triangle - Fairview International School - INTI" class="form-check-input"
                                                        <?php
                                                        if($route=='Golden Triangle - Fairview International School - INTI'){
                                                            echo"checked";
                                                        }
                                                        ?>
                                                    >Golden Triangle - Fairview International School - INTI
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio10" class="form-check-label ">
                                                    <input type="radio" id="radio10" name="route" value="INTI - Fairview International School - Golden Triangle " class="form-check-input"
                                                        <?php
                                                        if($route=='INTI - Fairview International School - Golden Triangle'){
                                                            echo"checked";
                                                        }
                                                        ?>
                                                    >INTI - Fairview International School - Golden Triangle
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>

                                    <button id="update" type="submit" class="btn btn-lg btn-info btn-block" name="update-button">Update</button>
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