<!DOCTYPE html>
<html>
<head>

	<title>Delete Payment Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>



<table id='myTable'>
	<tr>
	<th>Payment_Id</th>
	<th>Customer_Id</th>
	<th>Staff_Id</th>
	<th>Rental_Id</th>
	<th>Amount</th>
	<th>Payment_Date</th>
	<th>Last_Update</th>
	<th><font size='4' color = '#542ad1'>Action</th>
	</tr>
	<?php
	include_once 'dbconnection.php';
	$sql = "SELECT * FROM payment";
	$result = mysqli_query($con,$sql);


		
	while($row = mysqli_fetch_array($result))
	{
		
		echo "<tr>";
		echo "<td>".$row['payment_id']."</td>";
		echo "<td>".$row['customer_id']."</td>";
		echo "<td>".$row['staff_id']."</td>";
		echo "<td>".$row['rental_id']."</td>";
		echo "<td>".$row['amount']."</td>";
		echo "<td>".$row['payment_date']."</td>";
		echo "<td>".$row['last_update']."</td>";
		echo "<td><font size='4' color = '#ea9400'><a href=Delete-payment-process.php?payment_id=".$row['payment_id'].">Delete</a></td>";
		
	}
	?>

</table>
<button onclick="location.href = 'Index.html'" align="center">Back</button>
</body>
</html>