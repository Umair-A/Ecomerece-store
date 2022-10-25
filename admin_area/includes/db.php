<?php
$con=mysqli_connect("localhost","root","","ecom_store") or die(mysqli_error($con));
if (!$con) 
{
	echo "<script>alert('db  error')</script>";
	# code...
}
?>