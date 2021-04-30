<?php
require_once('dbconnection.php');

$Payment_ID=$_POST['Payment_ID'];
$Customer_ID=$_POST['Customer_ID'];
$Staff_ID=$_POST['Staff_ID'];
$Rental_ID=$_POST['Rental_ID'];
$Amount =$_POST['Amount'];
$Payment_Date=$_POST['Payment_Date'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$Last_Update = date('Y-m-d H:i:s');

$sql = "UPDATE `payment` 
		SET `payment_id` = '$Payment_ID',
		`customer_id` = '$Customer_ID',
		`staff_id` = '$Staff_ID',
		`rental_id` = '$Rental_ID',
		`amount` = '$Amount',
		`payment_date` = '$Payment_Date',
		`last_update` = '$Last_Update'	WHERE `payment`.`payment_id` = '$Payment_ID';";
		

if (mysqli_query($con, $sql)) {
	echo "<script>
	alert('Update Successful');
	window.location.href='Update Payment.php';
			  </script>";
}
else{
	echo "<script>
	alert('Error Updating');
	window.location.href='Update Payment.php';
	</script>";
}
?>