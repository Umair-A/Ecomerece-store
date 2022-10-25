<div class="col-md-9">
<div class="box">
	<div class="box-header">
		<center>
			<h1>Already Have Account</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.  </p>
		</center>
	</div>
	<form action="checkout.php" method="POST" >
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="c_email" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="c_pass" class="form-control" required>
		</div>
        <div class="text-center">
        	<button class="btn btn-primary" value="login" name="login">
        		<i class="fa fa-sign-in"></i> Login
        	</button>
        </div>
	</form>
	<center>
		<h3>Do You Have Account?</h3>
		<a href="customer_register.php"><h4>Registere Here</h4></a>
	</center>
</div>
</div>
<?php
if (isset($_POST['login'])) 
{
	$customer_email=$_POST['c_email'];
	$customer_pass=$_POST['c_pass'];
	$select_customer="SELECT * FROM customer WHERE customer_email='$customer_email' AND customer_pass='$customer_pass'";
	$run=mysqli_query($con,$select_customer);
	$check_cus=mysqli_num_rows($run);
	$get_ip=getRealIpUser();
	$select_cart="SELECT * FROM cart WHERE ip_add='$get_ip'";
	$fire=mysqli_query($con,$select_cart);
	$check_cart=mysqli_num_rows($fire);
	if ($check_cus==0) 
	{
	    echo "<script>alert('Your Password or Email is incorrect')</script>";
	    exit();

	}
	if ($check_cus==1 AND $check_cart==0) 
	{
		$_SESSION['customer_email']=$customer_email;
	    echo "<script>alert('Your Loged In')</script>";
	    echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
		
	}
	else
	{
		$_SESSION['customer_email']=$customer_email;
	    echo "<script>alert('Your Loged In')</script>";
	    echo "<script>window.open('checkout.php','_self')</script>";

	}
}

?>