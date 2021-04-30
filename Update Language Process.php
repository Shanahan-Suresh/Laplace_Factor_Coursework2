<?php
require_once('dbconnection.php');

$Name=$_POST['Name'];
$Language_ID=$_POST['language_id'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$Last_Update = date('Y-m-d H:i:s');

$sql = "UPDATE `language` SET `name` = '$Name', `last_update` = '$Last_Update'	WHERE `language`.`language_id` = '$Language_ID';";
		

if (mysqli_query($con, $sql)) {
	echo "<script>
	alert('Update Successful');
	window.location.href='Update Language.php';
			  </script>";
}
else{
	echo "<script>
	alert('Error Updating');
	window.location.href='Update Language.php';
	</script>";
}
?>