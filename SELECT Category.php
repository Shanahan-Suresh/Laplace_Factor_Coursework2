<?php require_once('dbconnection.php'); ?>
<?php
$test_sql =  "SELECT * FROM category";
		 
$result = mysqli_query($con,$test_sql);

echo "<table id='myTable'>";
echo "<tr><th>category_id</th><th>name</th><th>last_update</th></tr>";

while ($row = mysqli_fetch_array($result))
{
    $Category_ID = $row['category_id'];
	$Name = $row['name'];
	$Last_Update = $row['last_update'];
	//Select rows to be printed
	
    echo "<tr>";
	echo "<td>".$Category_ID."</td>";
    echo "<td>".$Name."</td>";
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
		         </script>";
			
         } else {
            echo "<script>
                 alert('Opps, something went wrong');
                 </script>";
         }
?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Category Table</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<button onclick="location.href = 'Index.html'" align="center">Back</button>
</head>
</html>