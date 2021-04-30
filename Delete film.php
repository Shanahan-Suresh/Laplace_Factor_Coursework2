<!DOCTYPE html>
<html>
<head>

	<title>Delete Film Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>



<table id='myTable'>
	<tr>
	<th>Film_Id</th>
	<th>Title</th>
	<th>Description</th>
	<th>Release_Year</th>
	<th>Language_Id</th>
	<th>Original_Language_Id</th>
	<th>Rental_Duration</th>
	<th>Rental_Rate</th>
	<th>Lenght</th>
	<th>Replacement_Cost</th>
	<th>Rating</th>
	<th>Special_Features</th>
	<th>Last_Update</th>
	<th><font size='4' color = '#542ad1'>Action</th>
	</tr>
	<?php
	include_once 'dbconnection.php';
	$sql = "SELECT * FROM film";
	$result = mysqli_query($con,$sql);


		
	while($row = mysqli_fetch_array($result))
	{
		
		echo "<tr>";
		echo "<td>".$row['film_id']."</td>";
		echo "<td>".$row['title']."</td>";
		echo "<td>".$row['description']."</td>";
		echo "<td>".$row['release_year']."</td>";
		echo "<td>".$row['language_id']."</td>";
		echo "<td>".$row['original_language_id']."</td>";
		echo "<td>".$row['rental_duration']."</td>";
		echo "<td>".$row['rental_rate']."</td>";
		echo "<td>".$row['lenght']."</td>";
		echo "<td>".$row['replacement_cost']."</td>";
		echo "<td>".$row['rating']."</td>";
		echo "<td>".$row['special_features']."</td>";
		echo "<td>".$row['last_update']."</td>";
		echo "<td><font size='4' color = '#ea9400'><a href=Delete-film-process.php?film_id=".$row['film_id'].">Delete</a></td>";
		
	}
	?>

</table>
<button onclick="location.href = 'Index.html'" align="center">Back</button>
</body>
</html>