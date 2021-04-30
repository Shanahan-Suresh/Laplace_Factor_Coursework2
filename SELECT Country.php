<?php require_once('dbconnection.php'); ?>
<?php

$test_sql =  "SELECT * FROM country";
$result = mysqli_query($con,$test_sql);

echo "<table id='myTable'>";
echo "<tr><th>country_id</th><th>country</th><th>last_update</th></tr>";

while($row = mysqli_fetch_array($result)){

	$Country_Id = $row['country_id'];
	$Country = $row['country'];
	$Last_Update = $row['last_update'];

	echo "<tr>";
    echo "<td>".$Country_Id."</td>";
	echo "<td>".$Country."</td>";
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
	<title>Country Table</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<button onclick="location.href = 'Index.html'" align="center">Back</button>
</head>
</html>