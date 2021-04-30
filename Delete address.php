<!DOCTYPE html>
<html>
<head>

	<title>Delete Address Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>



<table id='myTable'>
	<tr>
	<th>Address_Id</th>
	<th>Address</th>
	<th>District</th>
	<th>City_Id</th>
	<th>Postal_Code</th>
	<th>Phone</th>
	<th>Last_Update</th>
	<th><font size='4' color = '#542ad1'>Action</th>
	</tr>
	<?php
	include_once 'dbconnection.php';
	$sql = "SELECT * FROM address";
	$result = mysqli_query($con,$sql);


		
	while($row = mysqli_fetch_array($result))
	{
		
		echo "<tr>";
		echo "<td>".$row['address_id']."</td>";
		echo "<td>".$row['address']."</td>";
		echo "<td>".$row['district']."</td>";
		echo "<td>".$row['city_id']."</td>";
		echo "<td>".$row['postal_code']."</td>";
		echo "<td>".$row['phone']."</td>";
		echo "<td>".$row['last_update']."</td>";
		echo "<td><font size='4' color = '#ea9400'><a href=Delete-address-process.php?address_id=".$row['address_id'].">Delete</a></td>";
		
	}
	?>

</table>
<button onclick="location.href = 'Index.html'" align="center">Back</button>
</body>
</html>