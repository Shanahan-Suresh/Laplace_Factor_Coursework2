<html>
<head>

	<title>Delete Address Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
require_once('dbconnection.php');

print "<table id='myTable' border= '1' width='1775' height='200' align='center'>";
print "<tr>";
print"<th><font size='4'>Address ID</th>";
print"<th><font size='4'>Address</th>";
print"<th><font size='4'>District</th>";
print"<th><font size='4'>City ID</th>";
print"<th><font size='4'>Postal Code</th>";
print"<th><font size='4'>Phone Number</th>";
print"<th><font size='4'>Last Updated</th>";
print"<th><font size='4' color = '#542ad1' >Action</th>";
print"</tr>";

$hasil = mysqli_query($con,"SELECT * FROM address");

while($row = mysqli_fetch_array($hasil))
	{
    $Address_ID = $row['address_id'];
	$Address = $row['address'];
	$District = $row['district'];
	$City_ID = $row['city_id'];
	$Postal_Code = $row['postal_code'];
	$Phone = $row['phone'];
	$Last_Update = $row['last_update'];

		$link = "<a href = 'Update Address Form.php?Address_ID=$Address_ID'>Update</a>";
		print "<tr>";
		print"<th><font size='4'>".$Address_ID."</th>";
        print"<th><font size='4'>".$Address."</th>";
		print"<th><font size='4'>".$District."</th>";
		print"<th><font size='4'>".$City_ID."</th>";
		print"<th><font size='4'>".$Postal_Code."</th>";
		print"<th><font size='4'>".$Phone."</th>";
		print"<th><font size='4'>".$Last_Update."</th>";
		print"<td><font size='4' color = '#ea9400'>".$link."</td>";

        print"</tr>";
	}
	print"</table>";
?>
<button type="button" onclick="location.href = 'Index.html'">Back</button>
</body>
</html>