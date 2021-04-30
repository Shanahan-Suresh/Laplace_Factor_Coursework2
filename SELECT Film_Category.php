<?php require_once('dbconnection.php'); ?>

<?php
$test_sql = "SELECT * from film_category";
$result = mysqli_query($con,test_sql);

echo "<table>";
echo "<tr><th>film_id</th><th>category_id</th><th>last_update</th></tr>";

while($row = mysqli_fetch_array($result)){
	
	$Film_Id = $row['film_id'];
	$Category_Id = $row['category_id'];
	$Last_Update = $row['last_update'];

	echo "<tr>";
	echo "<td><font size='4' color = '#ea5a00'>".$Film_Id."</td>";
	echo "<td><font size='4' color = '#ea5a00'>".$Category_Id."</td>";
	echo "<td><font size='4' color = '#ea5a00'>".$Last_Update."</td>";
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
	<title>View Film Category Table</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
</html>