<html>
<head>
<style>
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
	  width: 150%;
  height: 200px;
	border-collapse: collapse
	width: 100%;
	color: blue
	font-family: monospace;
	font-size: 25px;
	text-align: left;
}

th{
	background-color: red;
	color: white;
}
tr:nth-child(even) {background-color: #ededed}
</style>
</head>
<body>
<table>
<tr> 
<div  class="center" align="center">
<th>Name</th>
<th>Address</th>
<th>PhoneNumber</th>
<th>DonationAmount</th>
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