<!DOCTYPE html>
<html>
<head>

	<title>Delete Country Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>



<table id='myTable'> 
	<tr>
	<th>Country_Id</th>
	<th>Country</th>
	<th>Last_Update</th>
	<th><font size='4' color = '#542ad1'>Action</th>
	</tr>
	<?php
	include_once 'dbconnection.php';
	$sql = "SELECT * FROM country";
	$result = mysqli_query($con,$sql);


		
	while($row = mysqli_fetch_array($result))
	{
		
		echo "<tr>";
		echo "<td>".$row['country_id']."</td>";
		echo "<td>".$row['country']."</td>";
		echo "<td>".$row['last_update']."</td>";
		echo "<td><font size='4' color = '#ea9400'><a href=Delete-country-process.php?country_id=".$row['country_id'].">Delete</a></td>";
		
	}
	?>

</table>
<button onclick="location.href = 'Index.html'" align="center">Back</button>
</body>
</html>