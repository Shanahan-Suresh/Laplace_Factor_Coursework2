<?php require_once('dbconnection.php'); ?>
<?php
$test_sql =  "SELECT * FROM film_actor";
		 
$result = mysqli_query($con,$test_sql);

echo "<table id='myTable'>";
echo "<tr><th>actor_id</th><th>film_id</th><th>last_update</th></tr>";

while ($row = mysqli_fetch_array($result))
{
    $Actor_ID = $row['actor_id'];
	$Film_Id = $row['film_id'];
	$Last_Update = $row['last_update'];
	//Select rows to be printed
	
    echo "<tr>";
	echo "<td>".$Actor_ID."</td>";
    echo "<td>".$Film_Id."</td>";
	echo "<td>".$Last_Update."</td>";
    echo "</tr>";
	//Printed rows
	
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
	<title>Film Actor Table</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<button onclick="location.href = 'Index.html'" align="center">Back</button>
</head>
</html>