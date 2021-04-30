<html>
<head>

	<title>Delete Payment Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
require_once('dbconnection.php');

print "<table id='myTable' border= '1' width='1775' height='200' align='center'>";
print "<tr>";
print"<th><font size='4'>Payment ID</th>";
print"<th><font size='4'>Customer ID</th>";
print"<th><font size='4'>Staff ID</th>";
print"<th><font size='4'>Rental ID</th>";
print"<th><font size='4'>Amount</th>";
print"<th><font size='4'>Payment Date</th>";
print"<th><font size='4'>Last Update</th>";
print"<th><font size='4' color = '#542ad1'>Action</th>";
print"</tr>";

$hasil = mysqli_query($con,"SELECT * FROM payment");

while($row = mysqli_fetch_array($hasil))
	{
	$Payment_ID = $row['payment_id'];
	$Customer_ID = $row['customer_id'];
	$Staff_ID = $row['staff_id'];
	$Rental_ID = $row['rental_id'];
	$Amount = $row['amount'];
	$Payment_Date = $row['payment_date'];
	$Last_Update = $row['last_update'];

		$link = "<a href = 'Update Payment Form.php?Payment_ID=$Payment_ID'>Update</a>";
		print "<tr>";
		print"<th><font size='4'>".$Payment_ID."</th>";
        print"<th><font size='4'>".$Customer_ID."</th>";
		print"<th><font size='4'>".$Staff_ID."</th>";
		print"<th><font size='4'>".$Rental_ID."</th>";
		print"<th><font size='4'>".$Amount."</th>";
		print"<th><font size='4'>".$Payment_Date."</th>";
		print"<th><font size='4'>".$Last_Update."</th>";
		print"<td><font size='4' color = '#ea9400'>".$link."</td>";

        print"</tr>";
	}
	print"</table>";
?>
<button type="button" onclick="location.href = 'Index.html'">Back</button>
</body>
</html>