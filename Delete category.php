<!DOCTYPE html>
<html>
<head>

	<title>Delete Category Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>



<table id='myTable'>
	<tr>
	<th>Category_Id</th>
	<th>Name</th>
	<th>Last_Update</th>
	<th><font size='4' color = '#542ad1'>Action</th>
	</tr>
	<?php
	include_once 'dbconnection.php';
	$sql = "SELECT * FROM category";
	$result = mysqli_query($con,$sql);


		
	while($row = mysqli_fetch_array($result))
	{
		
		echo "<tr>";
		echo "<td>".$row['category_id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['last_update']."</td>";
		echo "<td><font size='4' color = '#ea9400'><a href=Delete-category-process.php?category_id=".$row['category_id'].">Delete</a></td>";
		
	}
	?>

</table>
<button onclick="location.href = 'Index.html'" align="center">Back</button>
</body>
</html>