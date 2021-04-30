<!DOCTYPE html>
<html>
<head>

	<title>Delete Staff Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>



<table  id='myTable'>
	<tr>
	<th>Staff_Id</th>
	<th>First_Name</th>
	<th>Last_Name</th>
	<th>Address_Id</th>
	<th>Picture</th>
	<th>Email</th>
	<th>Store_Id</th>
	<th>Active</th>
	<th>Username</th>
	<th>Password</th>
	<th>Last_Update</th>
	<th><font size='4' color = '#542ad1'>Action</th>
	</tr>
	<?php
	include_once 'dbconnection.php';
	$sql = "SELECT * FROM staff";
	$result = mysqli_query($con,$sql);


		
	while($row = mysqli_fetch_array($result))
	{
		
		echo "<tr>";
		echo "<td>".$row['staff_id']."</td>";
		echo "<td>".$row['first_name']."</td>";
		echo "<td>".$row['last_name']."</td>";
		echo "<td>".$row['address_id']."</td>";
		echo "<td>".$row['picture']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['store_id']."</td>";
		echo "<td>".$row['active']."</td>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td>".$row['last_update']."</td>";
		echo "<td><font size='4' color = '#ea9400'><a href=Delete-staff-process.php?staff_id=".$row['staff_id'].">Delete</a></td>";
		
	}
	?>

</table>
<button onclick="location.href = 'Index.html'" align="center">Back</button>
</body>
</html>