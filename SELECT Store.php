<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Store Table</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php

$dbcon = mysqli_connect("localhost","root","");
mysqli_select_db($dbcon,"entertainment");
$sqlget = "SELECT * from store";
$sqldata = mysqli_query($dbcon, $sqlget) or die('error getting data');

echo "<table id='myTable'>";
echo "<tr><th>store_id</th><th>manager_staff_id</th><th>address_id</th><th>last_update</th></tr>";
	
while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
	echo "<tr><td>";
    echo $row['store_id'];
    echo "</td><td>";
    echo $row['manager_staff_id'];
    echo "</td><td>";
    echo $row['address_id'];
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
<button onclick="location.href = 'Index.html'" align="center">Back</button>;
</body>
</html>