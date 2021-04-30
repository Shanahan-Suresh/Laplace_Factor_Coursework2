<!DOCTYPE html>
<html>
<head>

	<title>Delete Actor Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<table id='myTable'>
	<tr>
	<th>Actor_Id</th>
	<th>First_Name</th>
	<th>Last_Name</th>
	<th>Last_Update</th>
	<th><font size='4' color = '#542ad1'>Action</th>
	</tr>
	<?php
	include_once 'dbconnection.php';
	$sql = "SELECT * FROM actor";
	$result = mysqli_query($con,$sql);


		
	while($row = mysqli_fetch_array($result))
	{
		
		echo "<tr>";
		echo "<td><font size='4'>".$row['actor_id']."</td>";
		echo "<td><font size='4'>".$row['first_name']."</td>";
		echo "<td><font size='4'>".$row['last_name']."</td>";
		echo "<td><font size='4'>".$row['last_update']."</td>";
		echo "<td><font size='4' color = '#ea9400'><a href=Delete-actor-process.php?actor_id=".$row['actor_id'].">Delete</a></td>";
		
	}
	?>

</table>
<button type="button" onclick="location.href = 'Index.html'">Back</button>
</body>
</html>