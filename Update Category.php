<html>
<head>

	<title>Delete Category Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
require_once('dbconnection.php');

print "<table id='myTable' border= '1' width='475' height='200' align='center'>";
print "<tr>";
print"<th><font size='4'>Name</th>";
print"<th><font size='4'>ID</th>";
print"<th><font size='4'>Last Updated</th>";
print"<th><font size='4' color = '#542ad1' >Action</th>";
print"</tr>";

$hasil = mysqli_query($con,"SELECT * FROM category");

while($row = mysqli_fetch_array($hasil))
	{
    $Category_ID = $row['category_id'];
	$Name = $row['name'];
	$Last_Update = $row['last_update'];

		$link = "<a href = 'Update Category Form.php?Category_ID=$Category_ID'>Update</a>";
		print "<tr>";
		print"<th><font size='4'>".$Category_ID."</th>";
        print"<th><font size='4''>".$Name."</th>";
		print"<th><font size='4'>".$Last_Update."</th>";
		print"<td><font size='4' color = '#ea9400'>".$link."</td>";

        print"</tr>";
	}
	print"</table>";
?>
<button type="button" onclick="location.href = 'Index.html'">Back</button>
</body>
</html>