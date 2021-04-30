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
<title>film insert query</title>
<link rel="stylesheet" href="style.css">
</head>	
<body>
<h2>Insert Film Table</h2>
<form id="insertform" action="insert_process_film.php" method="post">
	<label for="filmID">Film ID: </label>
	<input type="number" name="film_id" id="film_id"/><br/>
	<label for="categoryID">category ID: </label>
	<select  name="category_id" id="category_id"/>
	<?php
	require_once('dbconnection.php');
	$result = mysqli_query($con,"SELECT * FROM category"); 
	while ($row = mysqli_fetch_array($result)){
    $category_id = $row['category_id'];
	$name = $row['name'];
    echo "<option value ='$category_id'>$category_id, $name</option>";}
	?>
	</select><br />
	<label for="title">Title: </label>
	<input type="text" name="title" id="title"/><br/>
	<label for="description">Description: </label>
	<input type="text" name="description" id="description"/><br/>
	<label for="releaseYear">Release Year: </label>
	<input type="number" name="release_year" id="release_year"/><br/>
	<label for="languageID">Language ID: </label>
	<select  name="language_id" id="language_id"/>
	<?php
	require_once('dbconnection.php');
	$result = mysqli_query($con,"SELECT * FROM language"); 
	while ($row = mysqli_fetch_array($result)){
    $language_id = $row['language_id'];
	$name = $row['name'];
    echo "<option value ='$language_id'>$language_id, $name</option>";}
	?>
	</select><br />
	<label for="origlanguageID">Original Language ID: </label>
	<input type="number" name="original_language_id" id="original_language_id"/><br/>
	<label for="rentalDuration">Rental Duration: </label>
	<input type="number" name="rental_duration" id="rental_duration"/><br/>
	<label for="rentalRate">Rental Rate: </label>
	<input type="number" step="0.01" name="rental_rate" id="rental_rate"/><br/>
	<label for="length">Length: </label>
	<input type="number" name="length" id="legnth"/><br/>
	<label for="replacementCost">Replacement Cost: </label>
	<input type="number" step="0.01" name="replacement_cost" id="replacemen_cost"/><br/>
	<label for="rating">Rating: </label>
	<input type="text" name="rating" id="rating"/><br/>
	<label for="specialFeatures">Special Features: </label>
	<input type="text" name="special_features" id="special_features"/><br/>
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