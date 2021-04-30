<!DOCTYPE html>
<html>
<head>

	<title>Delete Rental Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>



<table id='myTable'>
	<tr>
	<th>Rental_Id</th>
	<th>Rental_Date</th>
	<th>Inventory_Id</th>
	<th>Customer_Id</th>
	<th>Rental_Date</th>
	<th>Staff_Id</th>
	<th>Last_Update</th>
	<th><font size='4' color = '#542ad1'>Action</th>
	</tr>
	<?php
	include_once 'dbconnection.php';
	$sql = "SELECT * FROM rental";
	$result = mysqli_query($con,$sql);


		
	while($row = mysqli_fetch_array($result))
	{
		
		echo "<tr>";
		echo "<td>".$row['rental_id']."</td>";
		echo "<td>".$row['rental_date']."</td>";
		echo "<td>".$row['inventory_id']."</td>";
		echo "<td>".$row['customer_id']."</td>";
		echo "<td>".$row['rental_date']."</td>";
		echo "<td>".$row['staff_id']."</td>";
		echo "<td>".$row['last_update']."</td>";
		echo "<td><font size='4' color = '#ea9400'><a href=Delete-rental-process.php?rental_id=".$row['rental_id'].">Delete</a></td>";
		
	}
	?>

</table>
<button onclick="location.href = 'Index.html'" align="center">Back</button>
</body>
</html>