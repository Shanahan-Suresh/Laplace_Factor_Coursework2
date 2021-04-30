<!DOCTYPE html>
<html>
<head>
<style>
	label{
		display: inline-block;
		margin: 5px;
		width: 120px;
	}
</style>
<title>store insert query</title>
<link rel="stylesheet" href="style.css">
</head>	
<body>
<h2>Insert Store Table</h2>
<form id="insertform" action="insert_process_store.php" method="post">
	<label for="storeID">Store ID: </label>
	<input type="number" name="store_id" id="store_id"/><br/>
	<label for="managerStaffID">Manager Staff ID: </label>
	<input type="number" name="manager_staff_id" id="manager_staff_id"/><br/>
	<label for="addressID">Address ID: </label>
	<select  name="address_id" id="address_id"/>
	<?php
	require_once('dbconnection.php');
	$result = mysqli_query($con,"SELECT * FROM address"); 
	while ($row = mysqli_fetch_array($result)){
    $address_id = $row['address_id'];
	$address = $row['address'];
    echo "<option value ='$address_id'>$address_id, $address</option>";}
	?>
	</select><br />
	<label for="lastUpdate">Last Update: </label>
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
	</script>
	<p type="datetime" name="last_update" id="demo"></p>
	<input id="submit" type="submit" value="Submit" /> <button id="button" type="button" onclick="location.href = 'Index.html'">Back</button>
</form>
</body>
</html>