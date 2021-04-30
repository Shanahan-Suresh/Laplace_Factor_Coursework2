<?php
$dbcon = mysqli_connect("localhost","root","","entertainment");
if($dbcon === false){
	die("Error connecting" . mysqli_connect_error());
}
	
$store_id = mysqli_real_escape_string($dbcon, $_REQUEST['store_id']);
$manager_staff_id = mysqli_real_escape_string($dbcon, $_REQUEST['manager_staff_id']);
$address_id = mysqli_real_escape_string($dbcon, $_REQUEST['address_id']);
date_default_timezone_set('Asia/Kuala_Lumpur');
$last_update = date('Y-m-d H:i:s');
//$last_update = mysqli_real_escape_string($dbcon, $_REQUEST['last_update']);
	
$insertcode = "INSERT INTO store VALUES ('$store_id','$manager_staff_id','$address_id','$last_update')";
if($dbcon->query($insertcode)==TRUE){
	echo "<script>
	alert('Insert Successful');
	window.location.href='insert_store.php';
	</script>";
}
else{
	echo "<script>
	alert('Insert Not Successful');
	window.location.href='insert_store.php';
	</script>";
}
?>