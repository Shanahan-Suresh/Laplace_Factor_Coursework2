<?php
include_once 'dbconnection.php';
$sql = "DELETE FROM payment WHERE payment_id='$_GET[payment_id]'";
if (mysqli_query($con, $sql)) {
    echo "<script> 
	alert('Record deleted successfully');
	window.location.href='Delete payment.php';
	</script>";
} else {
    echo "<script>
	alert('Error deleting record, please make sure the record is not a foreign key in another table');
	window.location.href='Delete payment.php';
	</script>";
}
mysqli_close($con);
?>