<html>
<head>

	<title>Update City Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
require_once('dbconnection.php');

print "<table id='myTable' border= '1' width='875' height='200' align='center'>";
print "<tr>";
print"<th><font size='4'>City ID</th>";
print"<th><font size='4'>Name</th>";
print"<th><font size='4'>Country ID</th>";
print"<th><font size='4'>Last Updated</th>";
print"<th><font size='4' color = '#542ad1'>Action</th>";
print"</tr>";

$hasil = mysqli_query($con,"SELECT * FROM city");

while($row = mysqli_fetch_array($hasil))
	{
    $City_ID = $row['city_id'];
	$Name = $row['city'];
	$Country_ID = $row['country_id'];
	$Last_Update = $row['last_update'];

		$link = "<a href = 'Update City Form.php?City_ID=$City_ID'>Update</a>";
		print "<tr>";
		print"<th><font size='4'>".$City_ID."</th>";
        print"<th><font size='4'>".$Name."</th>";
		print"<th><font size='4'>".$Country_ID."</th>";
		print"<th><font size='4'>".$Last_Update."</th>";
		print"<td><font size='4' color = '#ea9400'>".$link."</td>";

        print"</tr>";
	}
	print"</table>";
?>
<button type="button" onclick="location.href = 'Index.html'">Back</button>
</body>
</html>