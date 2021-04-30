<?php
include_once 'dbconnection.php';
$sql = "DELETE FROM film WHERE film_id='$_GET[film_id]'";
if (mysqli_query($con, $sql)) {
    echo "<script> 
	alert('Record deleted successfully');
	window.location.href='Delete film.php';
	</script>";
} else {
    echo "<script>
	alert('Error deleting record, please make sure the record is not a foreign key in another table');
	window.location.href='Delete film.php';
	</script>";
}
mysqli_close($con);
?>