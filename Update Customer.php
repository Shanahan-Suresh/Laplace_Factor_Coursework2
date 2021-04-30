<html>
<head>

	<title>Delete Customer Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
require_once('dbconnection.php');

print "<table id='myTable' border= '1' width='1775' height='200' align='center'>";
print "<tr>";
print"<th><font size='4'>Customer ID</th>";
print"<th><font size='4'>Store ID</th>";
print"<th><font size='4'>First Name</th>";
print"<th><font size='4'>Last Name</th>";
print"<th><font size='4'>Email</th>";
print"<th><font size='4'>Address ID</th>";
print"<th><font size='4'>Active</th>";
print"<th><font size='4'>Create Date</th>";
print"<th><font size='4'>Last Updated</th>";
print"<th><font size='4' color = '#542ad1' >Action</th>";
print"</tr>";

$hasil = mysqli_query($con,"SELECT * FROM customer");

while($row = mysqli_fetch_array($hasil))
	{
    $Customer_ID = $row['customer_id'];
	$Store_ID = $row['store_id'];
	$First_Name = $row['first_name'];
	$Last_Name = $row['last_name'];
	$Email = $row['email'];
	$Address_ID = $row['address_id'];
	$Active = $row['active'];
	$Create_Date = $row['create_date'];
	$Last_Update = $row['last_update'];

		$link = "<a href = 'Update Customer Form.php?Customer_ID=$Customer_ID'>Update</a>";
		print "<tr>";
		print"<th><font size='4'>".$Customer_ID."</th>";
        print"<th><font size='4'>".$Store_ID."</th>";
		print"<th><font size='4'>".$First_Name."</th>";
		print"<th><font size='4'>".$Last_Name."</th>";
		print"<th><font size='4''>".$Email."</th>";
		print"<th><font size='4'>".$Address_ID."</th>";
		print"<th><font size='4'>".$Active."</th>";
		print"<th><font size='4'>".$Create_Date."</th>";
		print"<th><font size='4'>".$Last_Update."</th>";
		print"<td><font size='4' color = '#ea9400'>".$link."</td>";

        print"</tr>";
	}
	print"</table>";
?>
<button type="button" onclick="location.href = 'Index.html'">Back</button>
</body>
</html>