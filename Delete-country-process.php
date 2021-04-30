<?php
include_once 'dbconnection.php';
$sql = "DELETE FROM country WHERE country_id='$_GET[country_id]'";
if (mysqli_query($con, $sql)) {
    echo "<script> 
	alert('Record deleted successfully');
	window.location.href='Delete country.php';
	</script>";
} else {
    echo "<script>
	alert('Error deleting record, please make sure the record is not a foreign key in another table');
	window.location.href='Delete country.php';
	</script>";
}
mysqli_close($con);
?>