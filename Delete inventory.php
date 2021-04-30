<!DOCTYPE html>
<html>
<head>

	<title>Delete Inventory Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>



<table id='myTable'>
	<tr>
	<th>Inventory_Id</th>
	<th>Film_Id</th>
	<th>Store_Id</th>
	<th>Last_Update</th>
	<th><font size='4' color = '#542ad1'>Action</th>
	</tr>
	<?php
	include_once 'dbconnection.php';
	$sql = "SELECT * FROM inventory";
	$result = mysqli_query($con,$sql);


		
	while($row = mysqli_fetch_array($result))
	{
		
		echo "<tr>";
		echo "<td>".$row['inventory_id']."</td>";
		echo "<td>".$row['film_id']."</td>";
		echo "<td>".$row['store_id']."</td>";
		echo "<td>".$row['last_update']."</td>";
		echo "<td><font size='4' color = '#ea9400'><a href=Delete-inventory-process.php?inventory_id=".$row['inventory_id'].">Delete</a></td>";
		
	}
	?>

</table>
<button onclick="location.href = 'Index.html'" align="center">Back</button>
</body>
</html>