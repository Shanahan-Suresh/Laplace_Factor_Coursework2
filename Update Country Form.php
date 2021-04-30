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
$Country_ID = $_GET ['Country_ID'];
require_once('dbconnection.php');

$sql = "SELECT * FROM country WHERE Country_ID = '".$Country_ID."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$Name = htmlspecialchars($row['country']);
$Country_ID = $row['country_id'];
?>

<form id="insertform" action="Update Country Process.php" method="POST">
<label>Country ID : <b><?php print $Country_ID;?></b></label>
<input type = "hidden" name ="Country_ID" value ='<?php print $Country_ID;?>'><br>
<label>Name :</label>
<input name="Name" type = "text" value ='<?php print $Name;?>'><br>
<label> <u style="text-decoration-thickness: 3px;">Current Time</u></label><br>
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