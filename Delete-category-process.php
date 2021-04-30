<?php
include_once 'dbconnection.php';
$sql = "DELETE FROM category WHERE category_id='$_GET[category_id]'";
if (mysqli_query($con, $sql)) {
    echo "<script> 
	alert('Record deleted successfully');
	window.location.href='Delete category.php';
	</script>";
} else {
    echo "<script>
	alert('Error deleting record, please make sure the record is not a foreign key in another table');
	window.location.href='Delete category.php';
	</script>";
}
mysqli_close($con);
?>