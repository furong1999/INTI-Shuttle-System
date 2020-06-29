<!DOCTYPE html>
<?php include("config.php");?>
<html>
<head>
	<title>Bus Shuttle</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
		th{
			font-weight: normal;
		}
		
	</style>
</head>

<header class="w3-center w3-light-grey w3-padding-32 footer">
  <p>Bus Shuttle </p>
</footer>


<div class="w3-row w3-padding-50" id="seat">


<?php
$divide = 4;
$inside = 2;
echo "<p><tab3>Book your tickets today!!</tab3></p>"; 
echo "<table border='1' style='margin-left:auto;margin-right:auto;'>";

for($i = 1; $i <= 40; $i++){
    $sql = $conn->query("select * from booking where seat_no= $i");
    $res = $sql->num_rows;
    
    if($i % $divide == 1){
        echo "<tr>";
    }
    if($res == 0)
        echo "<td align='center'><a href='javascript:' class='seatbook' data-id='$i'>".$i."</a></td>";
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
    <br/><br/><br/>
<!--input type = "submit" value = "Book Now!"-->
</div>    
</body>
</html>
<script type="text/javascript">
    $('.seatbook').click(function() {
        var id =  $(this).attr("data-id");
        
        var r = confirm("Please confirm that you would like to book?");
    
            if (r == true) {
                $.ajax({
                        type:'GET',
                        url:'seatbook.php',
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
<?php //include("footer.php");?>