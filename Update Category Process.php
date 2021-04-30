<?php
require_once('dbconnection.php');

$Name=$_POST['Name'];
$Category_ID=$_POST['category_id'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$Last_Update = date('Y-m-d H:i:s');

$sql = "UPDATE `category` SET `name` = '$Name', `last_update` = '$Last_Update'	WHERE `category`.`category_id` = '$Category_ID';";
		

if (mysqli_query($con, $sql)) {
	echo "<script>
	alert('Update Successful');
	window.location.href='Update Category.php';
			  </script>";
}
else{
	echo "<script>
	alert('Error Updating');
	window.location.href='Update Category.php';
	</script>";
}

?>