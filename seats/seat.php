<!DOCTYPE html>
<html>
<head>
	<title>INTI Bus Shuttle</title>
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
  <p>INTI Bus Shuttle </p>
</footer>

</body>
</html>

<?php
	//change background color
	if(isset($_COOKIE['color'])){
		echo "<script>document.body.style.backgroundColor =\"{$_COOKIE['color']}\";</script>";
	}
?>

<div class="w3-row w3-padding-64" id="seat">


<?php
$divide = 4;
$inside = 2;
echo "<table border='1' style='margin-left:auto;margin-right:auto;'>";

for($i = 1; $i <= 40; $i++){
    if($i % $divide == 1){
        echo "<tr>";
    }
    echo "<td align='center'>".$i."</td>";
    if($i % $inside == 0 && $i % $divide != 0){
        echo "<td width='40%'>&nbsp;</td>";
    }
    if($i % $divide == 0){
        echo "</tr>";
    }
}
echo "<tr>";
for ($i = 41; $i <= 45; $i++) {
    echo "<td width='15%' align='center'>".$i."</td>";
}
echo "</tr>";
echo "</table>";
echo "<br><br><br><p><tab3>Book your tickets today!!</tab3></p></br></br></br>"; 



?>

<form>
	<input type = "submit" value = "Book Now!">
</form>

<?php include("footer.php");?>