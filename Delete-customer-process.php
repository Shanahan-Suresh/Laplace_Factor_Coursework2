<?php
include_once 'dbconnection.php';
$sql = "DELETE FROM customer WHERE customer_id='$_GET[customer_id]'";
if (mysqli_query($con, $sql)) {
    echo "<script> 
	alert('Record deleted successfully');
	window.location.href='Delete customer.php';
	</script>";
} else {
    echo "<script>
	alert('Error deleting record, please make sure the record is not a foreign key in another table');
	window.location.href='Delete customer.php';
	</script>";
}
mysqli_close($con);
?>