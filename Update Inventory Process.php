<?php
require_once('dbconnection.php');

$Inventory_ID=$_POST['Inventory_ID'];
$Store_ID=$_POST['Store_ID'];
$Film_ID=$_POST['Film_ID'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$Last_Update = date('Y-m-d H:i:s');

$sql = "UPDATE `inventory` 
		SET `store_id` = '$Store_ID',
		`film_id` = '$Film_ID',
		`last_update` = '$Last_Update'	WHERE `inventory`.`inventory_id` = '$Inventory_ID';";
		

if (mysqli_query($con, $sql)) {
	echo "<script>
	alert('Update Successful');
	window.location.href='Update Inventory.php';
			  </script>";
}
else{
	echo "<script>
	alert('Error Updating');
	window.location.href='Update Inventory.php';
	</script>";
}
?>