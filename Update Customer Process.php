<?php
require_once('dbconnection.php');

$Customer_ID=$_POST['Customer_ID'];
$Store_ID=$_POST['Store_ID'];
$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$Email =$_POST['Email'];
$Address_ID=$_POST['Address_ID'];
$Active=$_POST['Active'];
$Create_Date=$_POST['Create_Date'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$Last_Update = date('Y-m-d H:i:s');

$sql = "UPDATE `customer` 
		SET `Customer_id` = '$Customer_ID',
		`Store_ID` = '$Store_ID',
		`First_Name` = '$First_Name',
		`Last_Name` = '$Last_Name',
		`Email` = '$Email',
		`Address_ID` = '$Address_ID',
		`Active` = '$Active',
		`create_date` = '$Create_Date',
		`last_update` = '$Last_Update'	WHERE `customer`.`Customer_ID` = '$Customer_ID';";


if (mysqli_query($con, $sql)) {
	echo "<script>
	alert('Update Successful');
	window.location.href='Update Customer.php';
			  </script>";
}
else{
	echo "<script>
	alert('Error Updating');
	window.location.href='Update Customer.php';
	</script>";
}
?>