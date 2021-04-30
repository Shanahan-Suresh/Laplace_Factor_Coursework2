<?php
$dbcon = mysqli_connect("localhost","root","","entertainment");
if($dbcon === false){
	die("Error connecting" . mysqli_connect_error());
}

$customer_id = mysqli_real_escape_string($dbcon, $_REQUEST['customer_id']);
$store_id = mysqli_real_escape_string($dbcon, $_REQUEST['store_id']);
$first_name = mysqli_real_escape_string($dbcon, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($dbcon, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($dbcon, $_REQUEST['email']);
$address_id = mysqli_real_escape_string($dbcon, $_REQUEST['address_id']);
$active = mysqli_real_escape_string($dbcon, $_REQUEST['active']);
$create_date = mysqli_real_escape_string($dbcon, $_REQUEST['create_date']);
date_default_timezone_set('Asia/Kuala_Lumpur');
$last_update = date('Y-m-d H:i:s');
//$last_update = mysqli_real_escape_string($dbcon, $_REQUEST['last_update']);
	
$insertcode = "INSERT INTO customer VALUES ('$customer_id','$store_id','$first_name','$last_name','$email','$address_id','$active','$create_date','$last_update')";
if($dbcon->query($insertcode)==TRUE){
	echo "<script>
	alert('Insert Successful');
	window.location.href='insert_customer.php';
	</script>";
}
else{
	echo "<script>
	alert('Insert Not Successful');
	window.location.href='insert_customer.php';
	</script>";
}
?>