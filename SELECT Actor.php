<?php require_once('dbconnection.php'); ?>
<?php

$test_sql =  "SELECT * FROM actor";
$result = mysqli_query($con,$test_sql);

echo "<table id='myTable'>";
echo "<tr><th>actor_id</th><th>first_name</th><th>last_name</th><th>last_update</th></tr>";

while($row = mysqli_fetch_array($result)){

	$Actor_ID = $row['actor_id'];
	$First_Name = $row['first_name'];
	$Last_Name = $row['last_name'];
	$Last_Update = $row['last_update'];

	echo "<tr>";
	echo "<td>".$Actor_ID."</td>";
	echo "<td>".$First_Name."</td>";
	echo "<td>".$Last_Name."</td>";
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
	<title>Actor Table</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<button onclick="location.href = 'Index.html'" align="center">Back</button>
</head>
</html>