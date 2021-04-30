<html>
<head>

	<title>Update Film Actor Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
require_once('dbconnection.php');

print "<table id='myTable' border= '1' width='475' height='200' align='center'>";
print "<tr>";
print"<th><font size='4'>Actor ID</th>";
print"<th><font size='4'>Film ID</th>";
print"<th><font size='4'>Last Updated</th>";
print"<th><font size='4' color = '#542ad1' >Action</th>";
print"</tr>";

$hasil = mysqli_query($con,"SELECT * FROM film_actor");

while($row = mysqli_fetch_array($hasil))
	{
    $Actor_ID = $row['actor_id'];
	$Film_ID = $row['film_id'];
	$Last_Update = $row['last_update'];

		$link = "<a href = 'Update Film_Actor Form.php?Actor_ID=$Actor_ID'>Update</a>";
		print "<tr>";
		print"<th><font size='4'>".$Actor_ID."</th>";
        print"<th><font size='4'>".$Film_ID."</th>";
		print"<th><font size='4'>".$Last_Update."</th>";
		print"<td><font size='4' color = '#ea9400'>".$link."</td>";

        print"</tr>";
	}
	print"</table>";
?>
<button type="button" onclick="location.href = 'Index.html'">Back</button>
</body>
</html>