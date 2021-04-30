<html>
<head>

	<title>Update Store Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
require_once('dbconnection.php');

print "<table id='myTable' border= '1' width='875' height='200' align='center'>";
print "<tr>";
print"<th><font size='4'>Store ID</th>";
print"<th><font size='4'>Manager Staff ID</th>";
print"<th><font size='4'>Address ID</th>";
print"<th><font size='4'>Last Updated</th>";
print"<th><font size='4' color = '#542ad1' >Action</th>";
print"</tr>";

$hasil = mysqli_query($con,"SELECT * FROM store");

while($row = mysqli_fetch_array($hasil))
	{
	$Store_ID = $row['store_id'];
	$Manager_Staff_ID = $row['manager_staff_id'];
	$Address_ID = $row['address_id'];
	$Last_Update = $row['last_update'];

		$link = "<a href = 'Update Store Form.php?Store_ID=$Store_ID'>Update</a>";
		print "<tr>";
		print"<th><font size='4'>".$Store_ID."</th>";
        print"<th><font size='4'>".$Manager_Staff_ID."</th>";
		print"<th><font size='4'>".$Address_ID."</th>";
		print"<th><font size='4'>".$Last_Update."</th>";
		print"<td><font size='4' color = '#ea9400'>".$link."</td>";

        print"</tr>";
	}
	print"</table>";
?>
<button type="button" onclick="location.href = 'Index.html'">Back</button>
</body>
</html>