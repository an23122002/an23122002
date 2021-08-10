<html>
<head>
<style>

body {
  background-image: url("white.jpg");
}
div {
	width: 325px;
	height: 250px;
	
	
	position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 500;
  	
	margin: auto;
}

table {
	
	font-weight: bold;
	width: 100%;
	height: 150px;
	 border-bottom: 5px solid #ddd;
	border: 3px solid black;
	color: blue
	font-family: monospace;
	font-size: 20px;
	text-align: left;
}

th{
	border: 3px solid black;
	border-collapse: collapse;
	font-family: monospace;
	font-size: 25px;
	text-align: center;
	font-weight: bold;
	background-color: red;
	color: white;
}
tr{
	border-collapse: collapse;
	border: 9px solid black;
}
tr:nth-child(even) {background-color: #ededed
border: 3px solid black;}
</style>
</head>
<body>
<table>
<tr> 
<div  class="center" align="center">
<th>Name</th>
<th>Address</th>
<th>Phone Number</th>
<th>Donation Amount</th>
<th>Note</th>
</div>
</tr>


<?php 
$conn = mysqli_connect('localhost', 'root', '');
$database = mysqli_select_db($conn, 'donate');
$sql = "SELECT * FROM donate";
$result = $conn -> query($sql);

if ($result->num_rows >0){
	while ($row = $result-> fetch_assoc()){
		echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Address"] . "</td><td>"
. $row["Phonenumber"]. "</td><td>" . $row["DonateAmount"]. "</td><td>" . $row["Note"]. "</td></tr>";
}
}
else {
echo"No";}

?> 
</table>
</body>
</html>