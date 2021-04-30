<?php require_once('dbconnection.php'); ?>
<?php

$test_sql =  "SELECT * FROM address";
$result = mysqli_query($con,$test_sql);

echo "<table id='myTable'>";
echo "<tr><th>address_id</th><th>address</th><th>district</th>
	<th>city_id</th><th>postal_code</th><th>phone</th><th>last_update</th></tr>";

while($row = mysqli_fetch_array($result)){

	$Address_Id = $row['address_id'];
	$Address = $row['address'];
    	$District = $row['district'];
	$City_Id = $row['city_id'];
	$Address_Id = $row['postal_code'];
	$Phone = $row['phone'];
	$Last_Update = $row['last_update'];

	echo "<tr>";
    echo "<td>".$Address_Id."</td>";
	echo "<td>".$Address."</td>";
    echo "<td>".$District."</td>";
	echo "<td>".$City_Id."</td>";
	echo "<td>".$Address_Id."</td>";
	echo "<td>".$Phone."</td>";
	echo "<td>".$Last_Update."</td>";
    	echo "</tr>";
}
echo "</table>";

$hasil = mysqli_num_rows($result);

         if($hasil>0)
         {
            echo "<script>
                 alert('Display Successful');
                 /*window.location.href='Menu Utama.html';*/
		         </script>";
			
         } else {
            echo "<script>
                 alert('Opps, something went wrong');
				 /*window.location.href='Login Page.html';*/
                 </script>";
         }

?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Address Table</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<button onclick="location.href = 'Index.html'" align="center">Back</button>
</head>
</html>