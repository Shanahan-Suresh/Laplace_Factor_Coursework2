<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die('Failure to connect to database'.mysqli_connect_error());
}
mysqli_select_db($con,"entertainment"); //Connect to database
?>