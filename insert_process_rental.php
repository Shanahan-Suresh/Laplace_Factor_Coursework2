<?php
$dbcon = mysqli_connect("localhost","root","","entertainment");
if($dbcon === false){
	die("Error connecting" . mysqli_connect_error());
}
	
$rental_id = mysqli_real_escape_string($dbcon, $_REQUEST['rental_id']);
$rental_date = mysqli_real_escape_string($dbcon, $_REQUEST['rental_date']);
$inventory_id = mysqli_real_escape_string($dbcon, $_REQUEST['inventory_id']);
$customer_id = mysqli_real_escape_string($dbcon, $_REQUEST['customer_id']);
$return_date = mysqli_real_escape_string($dbcon, $_REQUEST['return_date']);
$staff_id = mysqli_real_escape_string($dbcon, $_REQUEST['staff_id']);
date_default_timezone_set('Asia/Kuala_Lumpur');
$last_update = date('Y-m-d H:i:s');
//$last_update = mysqli_real_escape_string($dbcon, $_REQUEST['last_update']);
	
$insertcode = "INSERT INTO rental VALUES ('$rental_id','$rental_date','$inventory_id','$customer_id','$return_date','staff_id','$last_update')";
if($dbcon->query($insertcode)==TRUE){
	echo "<script>
	alert('Insert Successful');
	window.location.href='insert_rental.php';
	</script>";
}
else{
	echo "<script>
	alert('Insert Not Successful');
	window.location.href='insert_rental.php';
	</script>";
}
?>