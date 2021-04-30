<?php require_once('dbconnection.php'); ?>
<?php
$test_sql =  "SELECT * FROM customer";
		 
$result = mysqli_query($con,$test_sql);

echo "<table id='myTable'>";
echo "<tr><th>customer_id</th><th>store_id</th><th>first_name</th><th>last_name</th>
	  <th>email</th><th>address_id</th><th>active</th><th>create_date</th><th>last_update</th></tr>";

while ($row = mysqli_fetch_array($result))
{
    $Customer_Id = $row['customer_id'];
	$Store_ID = $row['store_id'];
	$First_Name = $row['first_name'];
    $Last_Name = $row['last_name'];
	$Email = $row['email'];
	$Address_ID = $row['address_id'];
	$Active = $row['active'];
	$Create_Date = $row['create_date'];
	$Last_Update = $row['last_update'];
	//Select rows to be printed
	
    echo "<tr>";
    echo "<td>".$Customer_Id."</td>";
	echo "<td>".$Store_ID."</td>";
	echo "<td>".$First_Name."</td>";
    echo "<td>".$Last_Name."</td>";
	echo "<td>".$Email."</td>";
	echo "<td>".$Address_ID."</td>";
	echo "<td>".$Active."</td>";
	echo "<td>".$Create_Date."</td>";
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
	<title>Customer Table</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<button onclick="location.href = 'Index.html'" align="center">Back</button>
</head>
</html>