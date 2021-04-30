<?php
require_once('dbconnection.php');

$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$Actor_ID=$_POST['actor_ID'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$Last_Update = date('Y-m-d H:i:s');

$sql = "UPDATE `actor` 
		SET `first_name` = '$First_Name',
		`last_name` = '$Last_Name',
		`last_update` = '$Last_Update'	WHERE `actor`.`actor_id` = '$Actor_ID';";
		
if (mysqli_query($con, $sql)) {
	echo "<script>
	alert('Update Successful');
	window.location.href='Update Actor.php';
			  </script>";
}
else{
	echo "<script>
	alert('Error Updating');
	window.location.href='Update Actor.php';
	</script>";
}

?>