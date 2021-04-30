<?php
require_once('dbconnection.php');

$Name=$_POST['Name'];
$Country_ID=$_POST['Country_ID'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$Last_Update = date('Y-m-d H:i:s');

$sql = "UPDATE `country` 
		SET `country` = '$Name',
		`last_update` = '$Last_Update'	WHERE `country`.`Country_ID` = '$Country_ID';";
		

if (mysqli_query($con, $sql)) {
	echo "<script>
	alert('Update Successful');
	window.location.href='Update Country.php';
			  </script>";
}
else{
	echo "<script>
	alert('Error Updating');
	window.location.href='Update Country.php';
	</script>";
}
?>