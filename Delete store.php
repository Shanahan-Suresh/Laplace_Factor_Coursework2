<!DOCTYPE html>
<html>
<head>

	<title>Delete Store Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>



<table  id='myTable'>
	<tr>
	<th>Store_Id</th>
	<th>Manager_Staff_Id</th>
	<th>Address_Id</th>
	<th>Last_Update</th>
	<th><font size='4' color = '#542ad1'>Action</th>
	</tr>
	<?php
	include_once 'dbconnection.php';
	$sql = "SELECT * FROM store";
	$result = mysqli_query($con,$sql);


		
	while($row = mysqli_fetch_array($result))
	{
		
		echo "<tr>";
		echo "<td>".$row['store_id']."</td>";
		echo "<td>".$row['manager_staff_id']."</td>";
		echo "<td>".$row['address_id']."</td>";
		echo "<td>".$row['last_update']."</td>";
		echo "<td><font size='4' color = '#ea9400'><a href=Delete-store-process.php?store_id=".$row['store_id'].">Delete</a></td>";
		
	}
	?>

</table>
<button onclick="location.href = 'Index.html'" align="center">Back</button>
</body>
</html>