<html>

	<head>
		<title>Information Gathered</title>
		<style>
body {
  background-image: url("background.jpg");
}


</style>
<style>
div {
	width: 450px;
	height: 350px;
	
	
	position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
  	
	margin: auto;
}
.p {
  font-fantasy:"Impact"
</style>
	</head>
	
	<body style="font-size:2.5vw;">
		
	<div class="center" align="center">
		

		<?php

			echo "<p>Thank for donating!!</p>";
			$name = $_POST['name'];
			$address = $_POST['address'];
			$phonenumber = $_POST['phonenum'];
			$Donationamount = $_POST['money'];
			$Note = $_POST['note'];
			
			echo 'Your Information:<br> Name: ';
			echo $name.'<br> Address: ';
			echo $address.'<br> Phone Number: ';
			echo $phonenumber.'<br>Donation Amount: ';
			echo $Donationamount. ' VND <br>';
		

$conn = mysqli_connect('localhost', 'root', '');
$database = mysqli_select_db($conn, 'donate');
$sql = "INSERT INTO	donate(Name,Address,Phonenumber,DonateAmount,Note) VALUES('$name','$address','$phonenumber','$Donationamount','$Note')";	
	
	if( mysqli_query($conn, $sql)){
		echo '-----';
	}
	
	else{
		echo 'query error: ' . mysqli_error($conn);
	}
	
		?>
	</div>	
	</body>
	
</html>