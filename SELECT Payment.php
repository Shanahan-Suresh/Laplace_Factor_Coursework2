<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment Table</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
$dbcon = mysqli_connect("localhost","root","");
mysqli_select_db($dbcon,"entertainment");
$sqlget = "SELECT * from payment";
$sqldata = mysqli_query($dbcon, $sqlget) or die('error getting data');

echo "<table id='myTable'>";
echo "<tr><th>payment_id</th><th>customer_id</th><th>staff_id</th><th>rental_id</th><th>amount</th><th>payment_date</th><th>last_update</th></tr>";
	
while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
	echo "<tr><td>";
	echo $row['payment_id'];
	echo "</td><td>";
	echo $row['customer_id'];
	echo "</td><td>";
	echo $row['staff_id'];
	echo "</td><td>";
	echo $row['rental_id'];
	echo "</td><td>";
	echo $row['amount'];
	echo "</td><td>";
	echo $row['payment_date'];
	echo "</td><td>";
	echo $row['last_update'];
	echo "</td></tr>";
}
echo "</table>";

$hasil = mysqli_num_rows($sqldata);

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
<button onclick="location.href = 'Index.html'" align="center">Back</button>
</body>
</html>