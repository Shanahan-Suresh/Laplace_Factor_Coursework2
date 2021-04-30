<?php
$dbcon = mysqli_connect("localhost","root","","entertainment");
if($dbcon === false){
	die("Error connecting" . mysqli_connect_error());
}
	
$payment_id = mysqli_real_escape_string($dbcon, $_REQUEST['payment_id']);
$customer_id = mysqli_real_escape_string($dbcon, $_REQUEST['customer_id']);
$staff_id = mysqli_real_escape_string($dbcon, $_REQUEST['staff_id']);
$rental_id = mysqli_real_escape_string($dbcon, $_REQUEST['rental_id']);
$amount = mysqli_real_escape_string($dbcon, $_REQUEST['amount']);
$payment_date = mysqli_real_escape_string($dbcon, $_REQUEST['payment_date']);
date_default_timezone_set('Asia/Kuala_Lumpur');
$last_update = date('Y-m-d H:i:s');
//$last_update = mysqli_real_escape_string($dbcon, $_REQUEST['last_update']);
	
$insertcode = "INSERT INTO payment VALUES ('$payment_id','$customer_id','$staff_id','$rental_id','$amount','$payment_date','$last_update')";
if($dbcon->query($insertcode)==TRUE){
	echo "<script>
	alert('Insert Successful');
	window.location.href='insert_payment.php';
	</script>";
}
else{
	echo "<script>
	alert('Insert Not Successful');
	window.location.href='insert_payment.php';
	</script>";
}
?>