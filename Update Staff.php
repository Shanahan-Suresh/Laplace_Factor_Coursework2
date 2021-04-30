<html>
<head>

	<title>Update Staff Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
require_once('dbconnection.php');

print "<table id='myTable' border= '1' width='1775' height='200' align='center'>";
print "<tr>";
print"<th><font size='4'>Staff ID</th>";
print"<th><font size='4'>First Name</th>";
print"<th><font size='4'>Last Name</th>";
print"<th><font size='4'>Address ID</th>";
print"<th><font size='4'>Picture</th>";
print"<th><font size='4'>Email</th>";
print"<th><font size='4'>Store ID</th>";
print"<th><font size='4'>Active</th>";
print"<th><font size='4'>Username</th>";
print"<th><font size='4'>Password</th>";
print"<th><font size='4'>Last Update</th>";
print"<th><font size='4' color = '#542ad1'>Action</th>";
print"</tr>";

$hasil = mysqli_query($con,"SELECT * FROM staff");

while($row = mysqli_fetch_array($hasil))
	{
    $Staff_ID = $row['staff_id'];
	$First_Name = $row['first_name'];
	$Last_Name = $row['last_name'];
	$Address_ID = $row['address_id'];
	$Picture = $row['picture'];
	$Email = $row['email'];
	$Store_ID = $row['store_id'];
	$Active = $row['active'];
	$Username = $row['username'];
	$Password = $row['password'];
	$Last_Update = $row['last_update'];

		$link = "<a href = 'Update Staff Form.php?Staff_ID=$Staff_ID'>Update</a>";
		print "<tr>";
		print"<th><font size='4'>".$Staff_ID."</th>";
        print"<th><font size='4'>".$First_Name."</th>";
		print"<th><font size='4'>".$Last_Name."</th>";
		print"<th><font size='4'>".$Address_ID."</th>";
		print"<th><font size='4'>".$Picture."</th>";
		print"<th><font size='4'>".$Email."</th>";
		print"<th><font size='4'>".$Store_ID."</th>";
		print"<th><font size='4'>".$Active."</th>";
		print"<th><font size='4'>".$Username."</th>";
		print"<th><font size='4'>".$Password."</th>";
		print"<th><font size='4'>".$Last_Update."</th>";
		print"<td><font size='4' color = '#ea9400'>".$link."</td>";

        print"</tr>";
	}
	print"</table>";
?>
<button type="button" onclick="location.href = 'Index.html'">Back</button>
</body>
</html>