<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Staff Table</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
$dbcon = mysqli_connect("localhost","root","");
mysqli_select_db($dbcon,"entertainment");
$sqlget = "SELECT * from staff";
$sqldata = mysqli_query($dbcon, $sqlget) or die('error getting data');

echo "<table id='myTable'>";
echo "<tr><th>staff_id</th><th>first_name</th><th>last_name</th><th>address_id</th><th>picture</th><th>email</th><th>store_id</th><th>active</th><th>username</th><th>password</th></tr>";
	
while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
	echo "<tr><td>";
	echo $row['staff_id'];
	echo "</td><td>";
	echo $row['first_name'];
	echo "</td><td>";
	echo $row['last_name'];
	echo "</td><td>";
	echo $row['address_id'];
	echo "</td><td>";
	echo $row['picture'];
	echo "</td><td>";
	echo $row['email'];
	echo "</td><td>";
	echo $row['store_id'];
	echo "</td><td>";
	echo $row['active'];
	echo "</td><td>";
	echo $row['username'];
	echo "</td><td>";
	echo $row['password'];
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
<button onclick="location.href = 'Index.html'" align="center">Back</button>;
</body>
</html>