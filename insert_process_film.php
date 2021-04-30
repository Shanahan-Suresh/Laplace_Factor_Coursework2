<?php
$dbcon = mysqli_connect("localhost","root","","entertainment");
if($dbcon === false){
	die("Error connecting" . mysqli_connect_error());
}

$film_id = mysqli_real_escape_string($dbcon, $_REQUEST['film_id']);
$category_id = mysqli_real_escape_string($dbcon, $_REQUEST['category_id']);
$title = mysqli_real_escape_string($dbcon, $_REQUEST['title']);
$description = mysqli_real_escape_string($dbcon, $_REQUEST['description']);
$release_year = mysqli_real_escape_string($dbcon, $_REQUEST['release_year']);
$language_id = mysqli_real_escape_string($dbcon, $_REQUEST['language_id']);
$original_language_id = mysqli_real_escape_string($dbcon, $_REQUEST['original_language_id']);
$rental_duration = mysqli_real_escape_string($dbcon, $_REQUEST['rental_duration']);
$rental_rate = mysqli_real_escape_string($dbcon, $_REQUEST['rental_rate']);
$length = mysqli_real_escape_string($dbcon, $_REQUEST['length']);
$replacement_cost = mysqli_real_escape_string($dbcon, $_REQUEST['replacement_cost']);
$rating = mysqli_real_escape_string($dbcon, $_REQUEST['rating']);
$special_features = mysqli_real_escape_string($dbcon, $_REQUEST['special_features']);
date_default_timezone_set('Asia/Kuala_Lumpur');
$last_update = date('Y-m-d H:i:s');
//$last_update = mysqli_real_escape_string($dbcon, $_REQUEST['last_update']);
	
$insertcode = "INSERT INTO film VALUES ('$film_id','$category_id','$title','$description','$release_year','$language_id','$original_language_id','$rental_duration','$rental_rate','$length','$replacement_cost','$rating','$special_features','$last_update')";
if($dbcon->query($insertcode)==TRUE){
	echo "<script>
	alert('Insert Successful');
	window.location.href='insert_film.php';
	</script>";
}
else{
	echo "<script>
	alert('Insert Not Successful');
	window.location.href='insert_film.php';
	</script>";
}
?>