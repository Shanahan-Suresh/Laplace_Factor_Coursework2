<?php
include_once 'dbconnection.php';
$sql = "DELETE FROM rental WHERE rental_id='$_GET[rental_id]'";
if (mysqli_query($con, $sql)) {
    echo "<script> 
	alert('Record deleted successfully');
	window.location.href='Delete rental.php';
	</script>";
} else {
    echo "<script>
	alert('Error deleting record, please make sure the record is not a foreign key in another table');
	window.location.href='Delete rental.php';
	</script>";
}
mysqli_close($con);
?>