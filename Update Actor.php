<html>
<head>

	<title>Update Actor Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
require_once('dbconnection.php');

print "<table id='myTable' border= '1' width='875' height='200' align='center'>";
print "<tr>";
print"<th><font size='4'>ID</th>";
print"<th><font size='4'>First Name</th>";
print"<th><font size='4'>Last Name</th>";
print"<th><font size='4'>Last Updated</th>";
print"<th><font size='4' color = '#542ad1'>Action</th>";
print"</tr>";

$hasil = mysqli_query($con,"SELECT * FROM actor");

while($row = mysqli_fetch_array($hasil))
	{
    $Actor_ID = $row['actor_id'];
	$First_Name = $row['first_name'];
	$Last_Name = $row['last_name'];
	$Last_Update = $row['last_update'];

		$link = "<a href = 'Update Actor Form.php?Actor_ID=$Actor_ID'>Update</a>";
		print"<tr>";
		print"<th><font size='4'>".$Actor_ID."</th>";
        print"<th><font size='4'>".$First_Name."</th>";
		print"<th><font size='4'>".$Last_Name."</th>";
		print"<th><font size='4'>".$Last_Update."</th>";
		print"<td><font size='4' color = '#ea9400'>".$link."</td>";

        print"</tr>";
	}
	print"</table>";
?>
<button type="button" onclick="location.href = 'Index.html'">Back</button>
</body>
</html>