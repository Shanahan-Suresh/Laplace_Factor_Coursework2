<html>
<head>

	<title>Delete Inventory Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
require_once('dbconnection.php');

print "<table id='myTable' border= '1' width='875' height='200' align='center'>";
print "<tr>";
print"<th><font size='4'>Inventory ID</th>";
print"<th><font size='4'>Film ID</th>";
print"<th><font size='4'>Store ID</th>";
print"<th><font size='4'>Last Updated</th>";
print"<th><font size='4' color = '#542ad1' >Action</th>";
print"</tr>";

$hasil = mysqli_query($con,"SELECT * FROM inventory");

while($row = mysqli_fetch_array($hasil))
	{
    $Inventory_ID = $row['inventory_id'];
	$Film_ID = $row['film_id'];
	$Store_ID = $row['store_id'];
	$Last_Update = $row['last_update'];

		$link = "<a href = 'Update Inventory Form.php?Inventory_ID=$Inventory_ID'>Update</a>";
		print "<tr>";
		print"<th><font size='4'>".$Inventory_ID."</th>";
        print"<th><font size='4'>".$Film_ID."</th>";
		print"<th><font size='4'>".$Store_ID."</th>";
		print"<th><font size='4'>".$Last_Update."</th>";
		print"<td><font size='4' color = '#ea9400'>".$link.";</td>";

        print"</tr>";
	}
	print"</table>";
?>
<button type="button" onclick="location.href = 'Index.html'">Back</button>
</body>
</html>