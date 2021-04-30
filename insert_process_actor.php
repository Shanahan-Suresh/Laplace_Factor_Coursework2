<?php
$dbcon = mysqli_connect("localhost","root","","entertainment");
if($dbcon === false){
	die("Error connecting" . mysqli_connect_error());
}

$actor_id = mysqli_real_escape_string($dbcon, $_REQUEST['actor_id']);
$first_name = mysqli_real_escape_string($dbcon, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($dbcon, $_REQUEST['last_name']);
date_default_timezone_set('Asia/Kuala_Lumpur');
$last_update = date('Y-m-d H:i:s');
//$last_update = mysqli_real_escape_string($dbcon, $_REQUEST['last_update']);
	
$insertcode = "INSERT INTO actor VALUES ('$actor_id','$first_name','$last_name','$last_update')";
if($dbcon->query($insertcode)==TRUE){
	echo "<script>
	alert('Insert Successful');
	window.location.href='insert_actor.html';
	</script>";
}
else{
	echo "<script>
	alert('Insert Not Successful');
	window.location.href='insert_actor.html';
	</script>";
}
?>