<?php require_once('dbconnection.php'); ?>
<?php
$test_sql =  "SELECT * FROM film";
		 
$result = mysqli_query($con,$test_sql);

echo "<table id='myTable'>";
echo "<tr><th>film_id</th><th>category_id</th><th>title</th><th>description</th> <th>release_year</th>
	  <th>language_id</th><th>original_language_id</th><th>rental_duration</th><th>rental_rate</th>
	  <th>lenght</th><th>replacement_cost</th><th>rating</th><th>special_features</th><th>last_update</th></tr>";

while ($row = mysqli_fetch_array($result))
{
    $Film_Id = $row['film_id'];
	$Category_ID = $row['category_id'];
	$Title = $row['title'];
    $Description = $row['description'];
	$Release_Year = $row['release_year'];
	$Language_ID = $row['language_id'];
	$Original_Language_Id = $row['original_language_id'];
	$Rental_Duration = $row['rental_duration'];
	$Rental_Rate = $row['rental_rate'];
	$Lenght = $row['lenght'];
	$Rental_Duration = $row['rental_duration'];
	$Replacement_Cost = $row['replacement_cost'];
	$Rating = $row['rating'];
	$Special_Features = $row['special_features'];
	$Last_Update = $row['last_update'];
	//Select rows to be printed
	
    echo "<tr>";
    echo "<td>".$Film_Id."</td>";
	echo "<td>".$Category_ID."</td>";
	echo "<td>".$Title."</td>";
    echo "<td>".$Description."</td>";
	echo "<td>".$Release_Year."</td>";
	echo "<td>".$Language_ID."</td>";
	echo "<td>".$Original_Language_Id."</td>";
	echo "<td>".$Rental_Duration."</td>";
	echo "<td>".$Rental_Rate."</td>";
	echo "<td>".$Lenght."</td>";
	echo "<td>".$Replacement_Cost."</td>";
	echo "<td>".$Rating."</td>";
	echo "<td>".$Special_Features."</td>";
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
	<title>Film Table</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<button onclick="location.href = 'Index.html'" align="center">Back</button>
</head>
</html>