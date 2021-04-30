<!DOCTYPE html>
<html>
<head>

	<title>Delete Customer Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>



<table id='myTable'>
	<tr>
	<th>Customer_Id</th>
	<th>Store_Id</th>
	<th>First_Name</th>
	<th>Last_Name</th>
	<th>Email</th>
	<th>Address_Id</th>
	<th>Active</th>
	<th>Create_Date</th>
	<th>Last_Update</th>
	<th><font size='4' color = '#542ad1'>Action</th>
	</tr>
	<?php
	include_once 'dbconnection.php';
	$sql = "SELECT * FROM customer";
	$result = mysqli_query($con,$sql);


		
	while($row = mysqli_fetch_array($result))
	{
		
		echo "<tr>";
		echo "<td>".$row['customer_id']."</td>";
		echo "<td>".$row['store_id']."</td>";
		echo "<td>".$row['first_name']."</td>";
		echo "<td>".$row['last_name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['address_id']."</td>";
		echo "<td>".$row['active']."</td>";
		echo "<td>".$row['create_date']."</td>";
		echo "<td>".$row['last_update']."</td>";
		echo "<td><font size='4' color = '#ea9400'><a href=Delete-customer-process.php?customer_id=".$row['customer_id'].">Delete</a></td>";
		
	}
	?>

</table>
<button onclick="location.href = 'Index.html'" align="center">Back</button>
</body>
</html>