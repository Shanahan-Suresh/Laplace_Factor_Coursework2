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
$Film_ID = $_GET ['Film_ID'];
require_once('dbconnection.php');

$sql = "SELECT * FROM film WHERE film_id = '".$Film_ID."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$Film_ID = $row['film_id'];
$Category_ID = $row['category_id'];
$Title = htmlspecialchars($row['title']);
$Description = htmlspecialchars($row['description']);
$Release_Year = $row['release_year'];
$Language_ID = $row['language_id'];
$Original_Language_ID = $row['original_language_id'];
$Rental_Duration = $row['rental_duration'];
$Rental_Rate = $row['rental_rate'];
$Length = $row['lenght'];
$Replacement_Cost = $row['replacement_cost'];
$Rating = $row['rating'];
$Special_Features = $row['special_features'];
$Last_Update = $row['last_update'];
?>

<form id="insertform" action="Update Film Process.php" method="POST">
<label>Film ID : <b><?php print $Film_ID;?></b></label>
<input type = "hidden" name ="Film_ID" value ='<?php print $Film_ID;?>'><br>
<label>Category ID :</label>
<select name ="Category_ID">
<?php
require_once('dbconnection.php');
$result = mysqli_query($con,"SELECT * FROM category");
while ($row = mysqli_fetch_array($result)){
    $category_id = $row['category_id'];
	$name = $row['name'];
	if ($category_id == $Category_ID) {
    echo "<option value ='$category_id' selected>$name</option>";
	}
	else{
	echo "<option value ='$category_id'>$name</option>";
	}
}
?>
</select><br>
<label>Title :</label>
<input name="Title" type = "text" value ='<?php print $Title;?>'><br>
<label>Release Year :</label>
<input name="Release_Year" type = "number" value ='<?php print $Release_Year;?>'><br>
<label>Description :</label>
<input name="Description" type = "text" value ='<?php print $Description;?>'><br>
<label>Language ID :</label>
<select name ="Language_ID">
<?php
require_once('dbconnection.php');
$result = mysqli_query($con,"SELECT * FROM language");
while ($row = mysqli_fetch_array($result)){
    $language_id = $row['language_id'];
	$name = $row['name'];
	if ($language_id == $Language_ID) {
    echo "<option value ='$language_id' selected>$name</option>";
	}
	else{
	echo "<option value ='$language_id'>$name</option>";
	}
}
?>
</select><br>
<label>Original Language ID :</label>
<input type = "number" name ="Original_Language_ID" value ='<?php print $Original_Language_ID;?>'><br>
<label>Rental Duration :</label>
<input type = "number" name ="Rental_Duration" value ='<?php print $Rental_Duration;?>'><br>
<label>Rental Rate :</label>
<input name="Rental_Rate" type = "text" value ='<?php print $Rental_Rate;?>'><br>
<label>Length :</label>
<input type = "number" name ="Length" value ='<?php print $Length;?>'><br>
<label>Replacement Cost :</label>
<input name="Replacement_Cost" type = "text" value ='<?php print $Replacement_Cost;?>'><br>
<label>Rating :</label>
<input name="Rating" type = "text" value ='<?php print $Rating;?>'><br>
<label>Special Features :</label>
<input name="Special_Features" type = "text" value ='<?php print $Special_Features;?>'><br>
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