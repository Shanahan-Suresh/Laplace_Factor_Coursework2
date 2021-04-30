<!DOCTYPE html>
<html>
<head>
<style>
	label{
		display: inline-block;
		margin: 5px;
		width: 100px;
	}
</style>
<link href="style.css" rel="stylesheet" type="text/css"></link>
</head>	
<body>
<?php
$Rental_ID = $_GET ['Rental_ID'];
require_once('dbconnection.php');

$sql = "SELECT * FROM rental WHERE rental_id = '".$Rental_ID."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$Staff_ID = $row['staff_id'];
$Customer_ID = $row['customer_id'];
$Rental_Date = $row['rental_date'];
$Inventory_ID = $row['inventory_id'];
$Return_Date = $row['return_date'];
?>

<form id="insertform" action="Update Rental Process.php" method="POST">
<label>Rental ID : <b><?php print $Rental_ID;?></b></label>
<input type = "hidden" name ="Rental_ID" value ='<?php print $Rental_ID;?>'><br>
<label>Rental Date:</label>
<input type = "datetime-local" name ="Rental_Date" value ='<?php print $Rental_Date;?>'><br>
<label>Inventory ID :</label>
<select name="Inventory_ID">
<?php
require_once('dbconnection.php');
$result = mysqli_query($con,"SELECT * FROM inventory");
while ($row = mysqli_fetch_array($result)){
    $inventory_id = $row['inventory_id'];
	if ($inventory_id == $Inventory_ID) {
    echo "<option value ='$inventory_id' selected>$inventory_id</option>";
	}
	else{
	echo "<option value ='$inventory_id'>$inventory_id</option>";
	}
}
?>
</select><br>
<label>Customer ID :</label>
<select name="Customer_ID">
<?php
require_once('dbconnection.php');
$result = mysqli_query($con,"SELECT * FROM customer");
while ($row = mysqli_fetch_array($result)){
    $First_Name = $row['first_name'];
    $Last_Name = $row['last_name'];
	$customer_id = $row['customer_id'];
	if ($customer_id == $Customer_ID) {
    echo "<option value ='$customer_id' selected>$First_Name $Last_Name</option>";
	}
	else{
	echo "<option value ='$customer_id'>$First_Name $Last_Name</option>";
	}
}
?></select><br>
<label>Return Date :</label>
<input type = "datetime-local" name ="Return_Date" value ='<?php print $Return_Date;?>'><br>
<label>Staff ID :</label>
<select name ="Staff_ID">
<?php
require_once('dbconnection.php');
$result = mysqli_query($con,"SELECT * FROM staff");
while ($row = mysqli_fetch_array($result)){
    $First_Name = $row['first_name'];
    $Last_Name = $row['last_name'];
	$staff_id = $row['staff_id'];
	if ($staff_id == $Staff_ID) {
    echo "<option value ='$staff_id' selected>$First_Name $Last_Name</option>";
	}
	else{
	echo "<option value ='$staff_id'>$First_Name $Last_Name</option>";
	}
}
?>
</select><br>
<label> <u>Current Time</u></label><br>
<div id="date"></div>
<div id="clock"></div>
	<script>
				function Time() {
					//Code section for clock
					var date = new Date();
					var hour = date.getHours();
					var min = date.getMinutes();
					var sec = date.getSeconds();
					hour = updateTime( hour );
					min = updateTime( min );
					sec = updateTime( sec );
					var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
					document.getElementById( "clock" ).innerText = hour + " : " + min + " : " + sec + " ( Timezone : " + timezone + " )";
					var update = setTimeout( function () {
						Time()
					}, 1000 );

					//Code section for date
					months = [ "January", "February", "March", "April", "May", "June",
						"July", "August", "September", "October", "November", "December"
					];

					days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday" ];

					var year = date.getFullYear();
					var month = date.getMonth();
					var day = date.getDay();
					var day_date = date.getDate();
					document.getElementById( "date" ).innerText = days[ day ] + " " + months[ month ] + " " + day_date + ordinal_checker( day_date ) + " " + year;
				}

				function updateTime( k ) {
					if ( k < 10 ) {
						return "0" + k;
					} else {
						return k;
					}
				}

				function ordinal_checker( day_date ) {
					switch ( day_date ) {
						case 1:
							ordinal = "st"
							return ordinal
							break;

						case 2:
							ordinal = "nd"
							return ordinal
							break;

						case 3:
							ordinal = "rd"
							return ordinal
							break;

						default:
							ordinal = "th"
							return ordinal
					}
				}
				Time();
	</script><br>
<h5><input id="submit" type = "submit" name = "edit" value = "Update">
<button id="button" type="button" onclick="location.href = 'Index.html'">Back</button></h5>
</form>

</body>
</html>