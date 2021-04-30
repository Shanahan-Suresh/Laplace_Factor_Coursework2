<?php
require_once('dbconnection.php');

$Address_ID=$_POST['Address_ID'];
$Address=$_POST['Address'];
$District=$_POST['District'];
$City_ID =$_POST['City_ID'];
$Postal_Code=$_POST['Postal_Code'];
$Phone=$_POST['Phone'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$Last_Update = date('Y-m-d H:i:s');

$sql = "UPDATE `address` 
		SET `address` = '$Address',
		`district` = '$District',
		`postal_code` = '$Postal_Code',
		`phone` = '$Phone',
		`city_id` = '$City_ID',
		`last_update` = '$Last_Update'	WHERE `address`.`Address_ID` = '$Address_ID';";


if (mysqli_query($con, $sql)) {
	echo "<script>
	alert('Update Successful');
	window.location.href='Update Address.php';
			  </script>";
}
else{
	echo "<script>
	alert('Error Updating');
	window.location.href='Update Address Form.php';
	</script>";
}
?>