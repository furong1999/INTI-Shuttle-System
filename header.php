<header class="w3-center w3-light-grey w3-padding-32 footer">
  <p>&copy INTI Bus Reservation </p>
</footer>

</body>
</html>

<?php
	//change background color
	if(isset($_COOKIE['color'])){
		echo "<script>document.body.style.backgroundColor =\"{$_COOKIE['color']}\";</script>";
	}
?>