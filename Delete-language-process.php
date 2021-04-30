<?php
include_once 'dbconnection.php';
$sql = "DELETE FROM language WHERE language_id='$_GET[language_id]'";
if (mysqli_query($con, $sql)) {
    echo "<script> 
	alert('Record deleted successfully');
	window.location.href='Delete language.php';
	</script>";
} else {
    echo "<script>
	alert('Error deleting record, please make sure the record is not a foreign key in another table');
	window.location.href='Delete language.php';
	</script>";
}
mysqli_close($con);
?>