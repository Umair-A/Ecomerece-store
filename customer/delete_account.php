<center><!-- center start -->
	<h1>Do You Realy Want to Delete Your Account ?</h1>
	<form action="" method="post"><!-- form start -->
		<input type="submit" name="yes" value="Yes, I Want to Delete. " class="btn btn-danger">
		<br><br>
		<input type="submit" name="no" value="No, I Don't Want to Delete." class="btn btn-primary"><br><br>
	</form><!-- center end -->
</center><!-- center end -->
<?php
if (isset($_POST['yes'])) 
{
	$customer_email=$_SESSION['customer_email'];
	$delete_customer="DELETE FROM customer WHERE customer_email='$customer_email'";
	$run_delete_customer=mysqli_query($con,$delete_customer);
	if ($run_delete_customer) 
	{
		session_destroy();
		echo "<script>alert('Your Account has been Deleted.')</script>";
		echo "<script>window.open('../index.php','_self')</script>";
 	}
 	if (isset($_POST['no'])) 
 	{
 		echo "<script>window.open('my_account.php?my_orders','_self')</script>";
  	}
}

?>