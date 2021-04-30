<html>
<head>

	<title>Update Rental Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
require_once('dbconnection.php');

print "<table id='myTable' border= '1' width='1775' height='200' align='center'>";
print "<tr>";
print"<th><font size='4'>Rental ID</th>";
print"<th><font size='4'>Rental Date</th>";
print"<th><font size='4'>Inventory ID</th>";
print"<th><font size='4'>Customer ID</th>";
print"<th><font size='4'>Return Date</th>";
print"<th><font size='4'>Staff ID</th>";
print"<th><font size='4'>Last Update</th>";
print"<th><font size='4' color = '#542ad1'>Action</th>";
print"</tr>";

$hasil = mysqli_query($con,"SELECT * FROM rental");

while($row = mysqli_fetch_array($hasil))
	{
	$Rental_ID = $row['rental_id'];
	$Rental_Date = $row['rental_date'];
	$Inventory_ID = $row['inventory_id'];
	$Customer_ID = $row['customer_id'];
	$Return_Date = $row['return_date'];
	$Staff_ID = $row['staff_id'];
	$Last_Update = $row['last_update'];

		$link = "<a href = 'Update Rental Form.php?Rental_ID=$Rental_ID'>Update</a>";
		print "<tr>";
		print"<th><font size='4'>".$Rental_ID."</th>";
        print"<th><font size='4'>".$Rental_Date."</th>";
		print"<th><font size='4'>".$Inventory_ID."</th>";
		print"<th><font size='4'>".$Customer_ID."</th>";
		print"<th><font size='4'>".$Return_Date."</th>";
		print"<th><font size='4'>".$Staff_ID."</th>";
		print"<th><font size='4'>".$Last_Update."</th>";
		print"<td><font size='4' color = '#ea9400'>".$link."</td>";

        print"</tr>";
	}
	print"</table>";
?>
<button type="button" onclick="location.href = 'Index.html'">Back</button>
</body>
</html>