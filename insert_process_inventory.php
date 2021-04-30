<?php
$dbcon = mysqli_connect("localhost","root","","entertainment");
if($dbcon === false){
	die("Error connecting" . mysqli_connect_error());
}
	
$inventory_id = mysqli_real_escape_string($dbcon, $_REQUEST['inventory_id']);
$film_id = mysqli_real_escape_string($dbcon, $_REQUEST['film_id']);
$store_id = mysqli_real_escape_string($dbcon, $_REQUEST['store_id']);
date_default_timezone_set('Asia/Kuala_Lumpur');
$last_update = date('Y-m-d H:i:s');
//$last_update = mysqli_real_escape_string($dbcon, $_REQUEST['last_update']);
	
$insertcode = "INSERT INTO inventory VALUES ('$inventory_id','$film_id','$store_id','$last_update')";
if($dbcon->query($insertcode)==TRUE){
	echo "<script>
	alert('Insert Successful');
	window.location.href='insert_inventory.php';
	</script>";
}
else{
	echo "<script>
	alert('Insert Not Successful');
	window.location.href='insert_inventory.php';
	</script>";
}
?>