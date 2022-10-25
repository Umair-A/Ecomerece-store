<h1> Change Password </h1>
 <form action="" method="post" enctype="multipart/form-data">
 	<div class="form-group"><!-- form-group start -->
 		<label>Old Password</label>
 		<input type="password" name="old_pass" class="form-control" required>
 	</div><!-- form-group end -->
 	<div class="form-group"><!-- form-group start -->
 		<label>Enter New Password</label>
 		<input type="password" name="new_pass" class="form-control" required>
 	</div><!-- form-group end -->
 	<div class="form-group"><!-- form-group start -->
 		<label>Confirm New Password</label>
 		<input type="password" name="new_pass_again" class="form-control" required>
 	</div><!-- form-group end -->
 	<div class="text-center"><!-- text-center start -->
 		<button type="submit" name="change" class="btn btn-primary btn-lg">
 			<i class="fa fa-user-md"></i> Update Now
 		</button>
 	</div><!-- text-center end -->
 

</form>
<?php
if (isset($_POST['change'])) 
{
	$customer_email=$_SESSION['customer_email'];
	$old_pass=$_POST['old_pass'];
	$new_pass=$_POST['new_pass'];
	$new_pass_again=$_POST['new_pass_again'];

	$select_old_pass="SELECT * FROM customer WHERE customer_pass='$old_pass'";
	$run=mysqli_query($con,$select_old_pass);
	$check_old_pass=mysqli_fetch_array($run);
	if ($check_old_pass==0) 
	{
		echo "<script>alert('Your current Password in Invalid. Please Enter Valid Password')</script>";
		exit();
	}
	if ($new_pass!=$new_pass_again) 
	{
		echo "<script>alert('Your new Password did not match. Please Enter Valid Password')</script>";
		exit();
 	}
 	$update_password="UPDATE customer SET customer_pass='$new_pass'WHERE  customer_email='$customer_email'";
 	$run_update=mysqli_query($con,$update_password);
 	if ($run_update) 
 	{
		echo "<script>alert('Your new Password has been update.')</script>";
		echo "<script>window.open('my_account.php?my_orders','_self')</script>";
 		
 	}
}
?>