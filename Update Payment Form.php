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
$Payment_ID = $_GET ['Payment_ID'];
require_once('dbconnection.php');

$sql = "SELECT * FROM payment WHERE payment_id = '".$Payment_ID."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$Payment_ID = $row['payment_id'];
$Customer_ID = $row['customer_id'];
$Staff_ID = $row['staff_id'];
$Rental_ID = $row['rental_id'];
$Amount = $row['amount'];
$Payment_Date = $row['payment_date'];
?>

<form id="insertform" action="Update Payment Process.php" method="POST">
<label>Payment ID : <b><?php print $Payment_ID;?></b></label>
<input type = "hidden" name ="Payment_ID" value ='<?php print $Payment_ID;?>'><br>
<label>Customer ID :</label>
<select name ="Customer_ID">
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
<label>Staff ID :</label>
<select name="Staff_ID">
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
<label>Rental ID :</label>
<select name="Rental_ID">
<?php
require_once('dbconnection.php');
$result = mysqli_query($con,"SELECT * FROM rental");
while ($row = mysqli_fetch_array($result)){
	$rental_id = $row['rental_id'];
    $First_Name = $row['rental_date'];
    $Last_Name = $row['return_date'];
	if ($rental_id == $Rental_ID) {
    echo "<option value ='$rental_id' selected>ID:$Rental_ID, Rental Date:$First_Name, Return Date:$Last_Name</option>";
	}
	else{
	echo "<option value ='$rental_id'>ID:$rental_id, Rental Date:$First_Name, Return Date:$Last_Name</option>";
	}
}
?>
</select><br>
<label>Amount :</label>
<input type = "number" name ="Amount" value ='<?php print $Amount;?>'><br>
<label>Payment Date :</label>
<input type = "datetime-local" name ="Payment_Date"><br>
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