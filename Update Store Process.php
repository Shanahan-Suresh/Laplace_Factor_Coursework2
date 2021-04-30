<?php
require_once('dbconnection.php');

$Store_ID=$_POST['Store_ID'];
$Manager_Staff_ID=$_POST['Manager_Staff_ID'];
$Address_ID=$_POST['Address_ID'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$Last_Update = date('Y-m-d H:i:s');

$sql = "UPDATE `store` 
		SET `manager_staff_id` = '$Manager_Staff_ID',
		`address_id` = '$Address_ID',
		`last_update` = '$Last_Update'	WHERE `store`.`store_id` = '$Store_ID';";


if (mysqli_query($con, $sql)) {
	echo "<script>
	alert('Update Successful');
	window.location.href='Update Store.php';
			  </script>";
}
else{
	echo "<script>
	alert('Error Updating');
	window.location.href='Update Store.php';
	</script>";
}
?>