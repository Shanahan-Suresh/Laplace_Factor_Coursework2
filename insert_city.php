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
<title>city insert query</title>
<link rel="stylesheet" href="style.css">
</head>	
<body>
<h2>Insert City Table</h2>
<form id="insertform" action="insert_process_city.php" method="post">
	<label for="cityID">City ID: </label>
	<input type="number" name="city_id" id="city_id"/><br />
	<label for="city">City: </label>
	<select  name="city" id="city"/>
	<?php
	require_once('dbconnection.php');
	$result = mysqli_query($con,"SELECT * FROM country"); 
	while ($row = mysqli_fetch_array($result)){
    $country_id = $row['country_id'];
	$country = $row['country'];
    echo "<option value ='$country_id'>$country</option>";}
	?>
	</select><br />
	<label for="countryID">Country ID: </label>
	<input type="number" name="country_id" id="country_id"/><br />
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