<html>
<head>

	<title>Update Film Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
require_once('dbconnection.php');

print "<table id='myTable' border= '1' align='center'>";
print "<tr>";
print"<th><font size='4'>Film ID</th>";
print"<th><font size='4'>Category ID</th>";
print"<th><font size='4'>Title</th>";
print"<th><font size='4'>Description</th>";
print"<th><font size='4'>Release Year</th>";
print"<th><font size='4'>Language ID</th>";
print"<th><font size='4'>Original Language ID</th>";
print"<th><font size='4'>Rental Duration</th>";
print"<th><font size='4'>Rental Rate</th>";
print"<th><font size='4'>Length</th>";
print"<th><font size='4'>Replacement Cost</th>";
print"<th><font size='4'>Rating</th>";
print"<th><font size='4'>Special Features</th>";
print"<th><font size='4'>Last Update</th>";
print"<th><font size='4' color = '#542ad1'>Action</th>";
print"</tr>";

$hasil = mysqli_query($con,"SELECT * FROM film");

while($row = mysqli_fetch_array($hasil))
	{
    $Film_ID = $row['film_id'];
	$Category_ID = $row['category_id'];
	$Title = $row['title'];
	$Description = $row['description'];
	$Release_Year = $row['release_year'];
	$Language_ID = $row['language_id'];
	$Original_Language_ID = $row['original_language_id'];
	$Rental_Duration = $row['rental_duration'];
	$Rental_Rate = $row['rental_rate'];
	$Length = $row['lenght'];
	$Replacement_Cost = $row['replacement_cost'];
	$Rating = $row['rating'];
	$Special_Features = $row['special_features'];
	$Last_Update = $row['last_update'];

		$link = "<a href = 'Update Film Form.php?Film_ID=$Film_ID'>Update</a>";
		print "<tr>";
		print"<th><font size='4'>".$Film_ID."</th>";
        print"<th><font size='4'>".$Category_ID."</th>";
		print"<th><font size='4'>".$Title."</th>";
		print"<th><font size='4'>".$Description."</th>";
		print"<th><font size='4'>".$Release_Year."</th>";
		print"<th><font size='4'>".$Language_ID."</th>";
		print"<th><font size='4'>".$Original_Language_ID."</th>";
		print"<th><font size='4'>".$Rental_Duration."</th>";
		print"<th><font size='4'>".$Rental_Rate."</th>";
		print"<th><font size='4'>".$Length."</th>";
		print"<th><font size='4'>".$Replacement_Cost."</th>";
		print"<th><font size='4'>".$Rating."</th>";
		print"<th><font size='4'>".$Special_Features."</th>";
		print"<th><font size='4'>".$Last_Update."</th>";
		print"<td><font size='4' color = '#ea9400'>&emsp;".$link."&emsp;</td>";

        print"</tr>";
	}
	print"</table>";
?>
<button type="button" onclick="location.href = 'Index.html'">Back</button>
</body>
</html>