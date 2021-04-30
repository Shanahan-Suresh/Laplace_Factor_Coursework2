<?php
require_once('dbconnection.php');

$Actor_ID=$_POST['Actor_ID'];
$Film_ID=$_POST['Film_ID'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$Last_Update = date('Y-m-d H:i:s');

$sql = "UPDATE `film_actor` SET `film_id` = '$Film_ID', `last_update` = '$Last_Update' WHERE `film_actor`.`actor_id` = '$Actor_ID';";
		

if (mysqli_query($con, $sql)) {
	echo "<script>
	alert('Update Successful');
	window.location.href='Update Film_Actor.php';
			  </script>";
}
else{
	echo "<script>
	alert('Error Updating');
	window.location.href='Update Film_Actor.php';
	</script>";
}
?>