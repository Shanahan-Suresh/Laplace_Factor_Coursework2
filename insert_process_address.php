<?php
$dbcon = mysqli_connect("localhost","root","","entertainment");
if($dbcon === false){
	die("Error connecting" . mysqli_connect_error());
}

$address_id = mysqli_real_escape_string($dbcon, $_REQUEST['address_id']);
$address = mysqli_real_escape_string($dbcon, $_REQUEST['address']);
$district = mysqli_real_escape_string($dbcon, $_REQUEST['district']);
$city_id = mysqli_real_escape_string($dbcon, $_REQUEST['city_id']);
$postal_code = mysqli_real_escape_string($dbcon, $_REQUEST['postal_code']);
$phone = mysqli_real_escape_string($dbcon, $_REQUEST['phone']);
date_default_timezone_set('Asia/Kuala_Lumpur');
$last_update = date('Y-m-d H:i:s');
//$last_update = mysqli_real_escape_string($dbcon, $_REQUEST['last_update']);
	
$insertcode = "INSERT INTO address VALUES ('$address_id','$address','$district','$city_id','$postal_code','$phone','$last_update')";
if($dbcon->query($insertcode)==TRUE){
	echo "<script>
	alert('Insert Successful');
	window.location.href='insert_address.php';
	</script>";
}
else{
	echo "<script>
	alert('Insert Not Successful');
	window.location.href='insert_address.php';
	</script>";
}
?>