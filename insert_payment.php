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
<title>payment insert query</title>
<link rel="stylesheet" href="style.css">
</head>	
<body>
<h2>Insert Payment Table</h2>
<form action="insert_process_payment.php" method="post">
	<label for="paymentID">Payment ID: </label>
	<input type="number" name="payment_id" id="payment_id"/><br/>
	<label for="customerID">Customer ID: </label>
	<select  name="customer_id" id="customer_id"/>
	<?php
	require_once('dbconnection.php');
	$result = mysqli_query($con,"SELECT * FROM customer"); 
	while ($row = mysqli_fetch_array($result)){
    $customer_id = $row['customer_id'];
	$first_name = $row['first_name'];
	$last_name= $row['last_name'];
    echo "<option value ='$customer_id'>$customer_id, $first_name $last_name</option>";}
	?>
	</select><br />
	<label for="staffID">Staff ID: </label>
	<select  name="staff_id" id="staff_id"/>
	<?php
	require_once('dbconnection.php');
	$result = mysqli_query($con,"SELECT * FROM staff"); 
	while ($row = mysqli_fetch_array($result)){
    $staff_id = $row['staff_id'];
	$first_name = $row['first_name'];
	$last_name= $row['last_name'];
    echo "<option value ='$staff_id'>$staff_id, $first_name $last_name</option>";}
	?>
	</select><br />
	<label for="rentalID">Rental ID: </label>
	<select  name="rental_id" id="rental_id"/>
	<?php
	require_once('dbconnection.php');
	$result = mysqli_query($con,"SELECT * FROM rental"); 
	while ($row = mysqli_fetch_array($result)){
    $rental_id = $row['rental_id'];
    echo "<option value ='$rental_id'>$rental_id</option>";}
	?>
	</select><br />
	<label for="amount">Amount: </label>
	<input type="number" step="0.01" name="amount" id="amount"/><br/>
	<label for="paymentDate">Payment Date: </label>
	<input type="datetime-local" name="payment_date" id="payment_date"/><br/>
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
	<input type="submit" value="Submit" /> <button id="button" onclick="location.href = 'Index.html'">Back</button>
</form>
</body>
</html>