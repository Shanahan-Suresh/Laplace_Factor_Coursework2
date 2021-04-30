<?php
require_once('dbconnection.php');

$Film_ID=$_POST['Film_ID'];
$Category_ID=$_POST['Category_ID'];
$Title=$_POST['Title'];
$Description=$_POST['Description'];
$Release_Year =$_POST['Release_Year'];
$Language_ID=$_POST['Language_ID'];
$Original_Language_ID=$_POST['Original_Language_ID'];
$Rental_Duration=$_POST['Rental_Duration'];
$Rental_Rate=$_POST['Rental_Rate'];
$Length=$_POST['Length'];
$Replacement_Cost = $_POST['Replacement_Cost'];
$Rating = $_POST['Rating'];
$Special_Features = $_POST['Special_Features'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$Last_Update = date('Y-m-d H:i:s');

$sql = "UPDATE `film` 
		SET `category_id` = '$Category_ID',
		`title` = '$Title',
		`description` = '$Description',
		`release_year` = '$Release_Year',
		`language_id` = '$Language_ID',
		`original_language_id` = '$Original_Language_ID',
		`rental_duration` = '$Rental_Duration',
		`rental_rate` = '$Rental_Rate',
		`lenght` = '$Length',
		`replacement_cost` = '$Replacement_Cost',
		`rating` = '$Rating',
		`special_features` = '$Special_Features',
		`last_update` = '$Last_Update'	WHERE `film`.`film_id` = '$Film_ID';";
		

if (mysqli_query($con, $sql)) {
	echo "<script>
	alert('Update Successful');
	window.location.href='Update Film.php';
			  </script>";
}
else{
	echo "<script>
	alert('Error Updating');
	window.location.href='Update Film.php';
	</script>";
}
?>