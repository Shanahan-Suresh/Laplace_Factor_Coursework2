<?php
require_once('dbconnection.php');

$Rental_ID=$_POST['Rental_ID'];
$Staff_ID=$_POST['Staff_ID'];
$Customer_ID=$_POST['Customer_ID'];
$Rental_Date=$_POST['Rental_Date'];
$Inventory_ID =$_POST['Inventory_ID'];
$Return_Date=$_POST['Return_Date'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$Last_Update = date('Y-m-d H:i:s');

$sql = "UPDATE `rental` 
		SET `rental_date` = '$Rental_Date',
		`customer_id` = '$Customer_ID',
		`staff_id` = '$Staff_ID',
		`inventory_id` = '$Inventory_ID',
		`return_date` = '$Return_Date',
		`last_update` = '$Last_Update'	WHERE `rental`.`rental_id` = '$Rental_ID';";
		

if (mysqli_query($con, $sql)) {
	echo "<script>
	alert('Update Successful');
	window.location.href='Update Rental.php';
			  </script>";
}
else{
	echo "<script>
	alert('Error Updating');
	window.location.href='Update Rental.php';
	</script>";
}
?>