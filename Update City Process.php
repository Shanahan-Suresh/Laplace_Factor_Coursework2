<?php
require_once('dbconnection.php');

$Name=$_POST['Name'];
$City_ID=$_POST['City_ID'];
$Country_ID = $_POST['Country_ID'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$Last_Update = date('Y-m-d H:i:s');

$sql = "UPDATE `city` 
		SET `city` = '$Name',
		`country_id` = '$Country_ID',
		`last_update` = '$Last_Update'	WHERE `city`.`city_ID` = '$City_ID';";
		

if (mysqli_query($con, $sql)) {
	echo "<script>
	alert('Update Successful');
	window.location.href='Update City.php';
			  </script>";
}
else{
	echo "<script>
	alert('Error Updating');
	window.location.href='Update City.php';
	</script>";
}
?>