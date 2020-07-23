<!DOCTYPE html>
<?php include("config2.php");?>
<html>
<head>
	<title>INTI Bus System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
		th{
			font-weight: normal;
		}
		.jumbotron{margin-bottom: 0!important;}
	</style>
</head>
<header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>INTI Bus Booking</strong>
          </a>
        </div>
      </div>
    </header>

<main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <!--h1 class="jumbotron-heading">Welcome to XYZ Booking</h1-->
          <p class="lead text-muted">Book Your seats Today! Please select the seat to book bus from INTI Penang</p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
              <div class="col-12">
              <p class="lead text-muted">Please select the seat to book bus from INTI Penang</p>
              </div>
            </div>
            <div class="row">
            
              <div class="col-6 pt-5">
                  <span style="background-color:red; width: 30px;">&nbsp;&nbsp;&nbsp;</span> Booked &nbsp;&nbsp;&nbsp;
                  <span style="background-color:green; width: 30px;">&nbsp;&nbsp;&nbsp;</span> Available
              <?php
                $divide = 4;
                $inside = 2;
                echo "<table border='1' style='margin-left:auto;margin-right:auto;'>";

                for($i = 1; $i <= 20; $i++){
                    $sql = $conn->query("select * from booking where seat_no= $i");
                    $res = $sql->num_rows;

                    if($i % $divide == 1){
                        echo "<tr>";
                    }
                    if($res == 0)
                        echo "<td align='center' style='background-color:green;'><a style='color:#000;'' href='javascript:' class='seatbook' data-id='$i'>".$i."</a></td>";
                    else
                        echo "<td align='center' style='background-color:red;'>".$i."</td>";

                    if($i % $inside == 0 && $i % $divide != 0){
                        echo "<td width='40%'>&nbsp;</td>";
                    }
                    if($i % $divide == 0){
                        echo "</tr>";
                    }
                }
                /*echo "<tr>";
                for ($i = 41; $i <= 40; $i++) {
                    echo "<td width='15%' align='center'>".$i."</td>";
                }
                echo "</tr>";*/

                echo "</table>";

                ?>
                </div>
                <div class="col-6">
                    <img src="img/bus.png" alt='Bus Booking' width="100%"/>
                </div>
          </div>
        </div>
      </div>

    </main>
    <footer class="text-muted">
          <div class="container">
            <p class="float-right">
              <a href="#">Back to top</a>
            </p>
            <p>Copyright @ 2020</p>
            
          </div>
        </footer>
<script type="text/javascript">
    $('.seatbook').click(function() {
        var id =  $(this).attr("data-id");
        
        var r = confirm("Please confirm that you would like to book?");
    
            if (r == true) {
                $.ajax({
                        type:'GET',
                        url:'seatbook2.php',
                        data:{id:id},
                        success:function(data){
                            if(data!="fail"){
                                alert('Seat Book successfully');
                            }else{
                                alert('Seat Book failed! please try again alter');
                            }
                            location.reload();
                        }
                });
                return true;
            } 
    });
    
</script>    
</body>
</html>