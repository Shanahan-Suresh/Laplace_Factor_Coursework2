<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Language Table</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
$dbcon = mysqli_connect("localhost","root","","entertainment");
$sqlget = "SELECT * from language";
$sqldata = mysqli_query($dbcon, $sqlget) or die('error getting data');
	
echo "<table id='myTable'>";
echo "<tr><th>language_id</th><th>name</th><th>last_update</th></tr>";
	
while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
	echo "<tr><td>";
	echo $row['language_id'];
	echo "</td><td>";
	echo $row['name'];
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