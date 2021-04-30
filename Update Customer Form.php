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
$Customer_ID = $_GET ['Customer_ID'];
require_once('dbconnection.php');

$sql = "SELECT * FROM customer WHERE customer_ID = '".$Customer_ID."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$Customer_ID = $row['customer_id'];
$Store_ID = $row['store_id'];
$First_Name = htmlspecialchars($row['first_name']);
$Last_Name = htmlspecialchars($row['last_name']);
$Email = htmlspecialchars($row['email']);
$Address_ID = $row['address_id'];
$Active = $row['active'];
$Create_Date = $row['create_date'];
$Last_Update = $row['last_update'];
?>

<form id="insertform" action="Update Customer Process.php" method="POST">
<label>Customer ID : <b><?php print $Customer_ID;?></b></label>
<input type = "hidden" name ="Customer_ID" value ='<?php print $Customer_ID;?>'><br>
<label>Store ID :</label>
<select name ="Store_ID">
<?php
require_once('dbconnection.php');
$result = mysqli_query($con,"SELECT * FROM store");
while ($row = mysqli_fetch_array($result)){
    $store_id = $row['store_id'];
	if ($store_id == $Store_ID) {
    echo "<option value ='$store_id' selected>$store_id</option>";
	}
	else{
	echo "<option value ='$store_id'>$store_id</option>";
	}
}
?>
</select><br>
<label>First Name :</label>
<input name="First_Name" type = "text" value ='<?php print $First_Name;?>'><br>
<label>Last Name :</label>
<input name="Last_Name" type = "text" value ='<?php print $Last_Name;?>'><br>
<label>Email :</label>
<input name="Email" type = "text" value ='<?php print $Email;?>'><br>
<label>Address ID :</label>
<select name ="Address_ID">
<?php
require_once('dbconnection.php');
$result = mysqli_query($con,"SELECT * FROM address");
while ($row = mysqli_fetch_array($result)){
    $address_id = $row['address_id'];
	$address = $row['address'];
	if ($address_id == $Address_ID) {
    echo "<option value ='$address_id' selected>$address</option>";
	}
	else{
	echo "<option value ='$address_id'>$address</option>";
	}
}
?>
</select><br>
<label>Active :</label>
<input name="Active" type = "text" value ='<?php print $Active;?>'><br>
<label><u>Create Date</u> <b><?php print $Create_Date;?></b></label>
<input name="Create_Date" type = "hidden" value ='<?php print $Create_Date;?>'><br>
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
	</script></label>
<h5><input id="submit" type = "submit" name = "edit" value = "Update">
<button id="button" type="button" onclick="location.href = 'Index.html'">Back</button></h5>
</form>

</body>
</html>