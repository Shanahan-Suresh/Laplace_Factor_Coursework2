<?php
$dbcon = mysqli_connect("localhost","root","","entertainment");
if($dbcon === false){
	die("Error connecting" . mysqli_connect_error());
}
	
$staff_id = mysqli_real_escape_string($dbcon, $_REQUEST['staff_id']);
$first_name = mysqli_real_escape_string($dbcon, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($dbcon, $_REQUEST['last_name']);
$address_id = mysqli_real_escape_string($dbcon, $_REQUEST['address_id']);
$picture = mysqli_real_escape_string($dbcon, $_REQUEST['picture']);
$email = mysqli_real_escape_string($dbcon, $_REQUEST['email']);
$store_id = mysqli_real_escape_string($dbcon, $_REQUEST['store_id']);
$active = mysqli_real_escape_string($dbcon, $_REQUEST['active']);
$username = mysqli_real_escape_string($dbcon, $_REQUEST['username']);
$password = mysqli_real_escape_string($dbcon, $_REQUEST['password']);
date_default_timezone_set('Asia/Kuala_Lumpur');
$last_update = date('Y-m-d H:i:s');
//$last_update = mysqli_real_escape_string($dbcon, $_REQUEST['last_update']);
	
$insertcode = "INSERT INTO staff VALUES ('$staff_id','$first_name','$last_name','$address_id','$picture','$email','$store_id','$active','$username','$username','$last_update')";
if($dbcon->query($insertcode)==TRUE){
	echo "<script>
	alert('Insert Successful');
	window.location.href='insert_staff.php';
	</script>";
}
else{
	echo "<script>
	alert('Insert Not Successful');
	window.location.href='insert_staff.php';
	</script>";
}
?>