<div class="col-md-9">
<div class="box">
	<?php 
     $session_email=$_SESSION['customer_email'];
     $query="SELECT * FROM customer WHERE customer_email='$session_email'";
     $run=mysqli_query($con,$query);
     $array=mysqli_fetch_array($run);
     $customer_id=$array['customer_id'];
	?>
	<h1 class="text-center">Payment Options for you</h1>
	<p class="lead text-center">
		<a href="order.php?c_id=<?php echo $customer_id ?>">Offline Payment</a>
	</p>
	<center>
	   <p class="lead text-center">
		<a href="#">Paypal Payment
           <img src="paypal.jpg" alt="paypal img">
		</a>
	   </p>
		
	</center>
</div>
</div>