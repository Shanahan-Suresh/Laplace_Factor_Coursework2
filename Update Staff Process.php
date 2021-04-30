<?php
require_once('dbconnection.php');

$Staff_ID=$_POST['Staff_ID'];
$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$Address_ID=$_POST['Address_ID'];
$Picture =$_POST['Picture'];
$Email=$_POST['Email'];
$Store_ID=$_POST['Store_ID'];
$Active=$_POST['Active'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$Last_Update = date('Y-m-d H:i:s');

$sql = "UPDATE `staff` 
		SET `staff_id` = '$Staff_ID',
		`first_name` = '$First_Name',
		`last_name` = '$Last_Name',
		`address_id` = '$Address_ID',
		`picture` = '$Picture',
		`email` = '$Email',
		`store_id` = '$Store_ID',
		`active` = '$Active',
		`username` = '$Username',
		`password` = '$Password',
		`last_update` = '$Last_Update'	WHERE `staff`.`staff_id` = '$Staff_ID';";
		

if (mysqli_query($con, $sql)) {
	echo "<script>
	alert('Update Successful');
	window.location.href='Update Staff.php';
			  </script>";
}
else{
	echo "<script>
	alert('Error Updating');
	window.location.href='Update Staff.php';
	</script>";
}
?>