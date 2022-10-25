<?php
if (isset($_SESSION['customer_email'])) 
{
	$customer_email=$_SESSION['customer_email'];
	$get_customer="SELECT * FROM customer WHERE customer_email='$customer_email'";
	$run=mysqli_query($con,$get_customer);
	$array=mysqli_fetch_array($run);
	$customer_id=$array['customer_id'];
	$customer_name=$array['customer_name'];
	$customer_email=$array['customer_email'];
	$customer_country=$array['customer_country'];
	$customer_city=$array['customer_city'];
	$customer_address=$array['customer_address'];
	$customer_contact=$array['customer_contact'];
	$customer_image=$array['customer_image'];
	 
}
?>
 <h1 align="center"> Edit Your Account </h1>
 <form action="" method="post" enctype="multipart/form-data">
 	<div class="form-group"><!-- form-group start -->
 		<label>Name</label>
 		<input type="text" name="c_name" value="<?php echo $customer_name ?>" class="form-control" required>
 	</div><!-- form-group end -->
 	<div class="form-group"><!-- form-group start -->
 		<label>Email</label>
 		<input type="email" name="c_email" value="<?php echo $customer_email ?>" class="form-control" required>
 	</div><!-- form-group end -->
 	<div class="form-group"><!-- form-group start -->
 		<label>Country</label>
 		<input type="text" name="c_country" value="<?php echo $customer_country ?>" class="form-control" required>
 	</div><!-- form-group end -->
 	<div class="form-group"><!-- form-group start -->
 		<label>City</label>
 		<input type="text" name="c_city" value="<?php echo $customer_city ?>" class="form-control" required>
 	</div><!-- form-group end -->
 	<div class="form-group"><!-- form-group start -->
 		<label>Contact</label>
 		<input type="text" name="c_contact" value="<?php echo $customer_contact ?>" class="form-control" required>
 	</div><!-- form-group end -->
 	<div class="form-group"><!-- form-group start -->
 		<label>Address</label>
 		<input type="text" name="c_address" value="<?php echo $customer_address ?>" class="form-control" required>
 	</div><!-- form-group end -->
 	<div class="form-group"><!-- form-group start -->
 		<label>Customer Image</label>
 		<input type="file" name="c_image" class="form-control" required>
 		<img class="img-responsive" width="200px" src="customer_images/<?php echo $customer_image ?>" alt="M-Dev profile">
 	</div><!-- form-group end -->
 	<div class="text-center"><!-- text-center start -->
 		<button name="resubmit" class="btn btn-primary btn-lg">
 			<i class="fa fa-user-md"></i> Update
 		</button>
 	</div><!-- text-center end -->
 
 </form>
 <?php
if (isset($_POST['resubmit'])) 
	{
         
		$c_name=$_POST['c_name'];
		$c_email=$_POST['c_email'];
		 
		$c_country=$_POST['c_country'];
		$c_city=$_POST['c_city'];
		$c_contact=$_POST['c_contact'];
		$c_address=$_POST['c_address'];

		$c_image=$_FILES['c_image']['name'];
		$c_image_tmp=$_FILES['c_image']['tmp_name'];
		move_uploaded_file($c_image_tmp,"customer_images/$c_image");
 

		$edit_acc="UPDATE `customer` SET  `customer_name`='$c_name',`customer_email`='$c_email',`customer_country`='$c_country',`customer_city`='$c_city',`customer_contact`='$c_contact',`customer_address`='$c_address',`customer_image`='$c_image'  WHERE customer_id='$customer_id'";
		 
		$rn=mysqli_query($con,$edit_acc);
 		if ($rn) 
		{ 
	       echo "<script>alert('Your Account Has been Edit Successfully')</script>";
	      echo "<script>window.open('logout.php','_self')</script>";

		}
		 
		 
	}
?>