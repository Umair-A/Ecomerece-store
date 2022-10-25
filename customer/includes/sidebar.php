 <div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu start -->
 	<div class="panel-heading"><!-- panel-heading start -->
 		<?php  
 		if (isset($_SESSION['customer_email'])) 
 		{
 			$customer_email=$_SESSION['customer_email'];
 			$query = "SELECT * FROM customer WHERE customer_email='$customer_email'";
 			$run=mysqli_query($con,$query);
 			$row=mysqli_fetch_array($run);
 			$customer_name=$row['customer_name'];
 			$customer_image=$row['customer_image'];

 		echo"
 		<center>
 			<img class='img-responsive' src='customer_images/$customer_image' alt='M-Dev profile'>
 		</center>
 		<br>
 		<h3 align='center' class='panel title'><!-- panel title start -->
 			$customer_name
 		</h3><!-- panel title end -->
 		";
 		?>
 	</div><!-- panel-heading end -->
 	<div class="panel-body"><!-- panel-body start -->
 		<ul class="nav-pills nav-stacked nav"><!-- nav-pills nav-stacked nav start -->
 			<li class="<?php if(isset($_GET['my_orders'])){echo "active"; } ?>">
 				<a href="my_account.php?my_orders">
 					<i class="fa fa-list"></i> My orders
 				</a>
 			</li>
 			<li class="<?php if(isset($_GET['pay_offline'])){echo "active"; } ?>">
 				<a href="my_account.php?pay_offline">
 					<i class="fa fa-bolt"></i> Pay Offline
 				</a>
 			</li>
 			<li class="<?php if(isset($_GET['edit_account'])){echo "active"; } ?>">
 				<a href="my_account.php?edit_account">
 					<i class="fa fa-pencil"></i> Edit Account
 				</a>
 			</li>
 			<li class="<?php if(isset($_GET['change_pass'])){echo "active"; } ?>">
 				<a href="my_account.php?change_pass">
 					<i class="fa fa-user"></i> Change Password
 				</a>
 			</li>
 			<li class="<?php if(isset($_GET['delete_account'])){echo "active"; } ?>">
 				<a href="my_account.php?delete_account">
 					<i class="fa fa-trash-o"></i> Delete Account
 				</a>
 			</li>
 			<li>
 				<a href="logout.php">
 					<i class="fa fa-sign-out"></i> Logout
 				</a>
 			</li>
 		</ul><!-- nav-pills nav-stacked nav end -->
 	</div><!-- panel-body end -->
 </div><!-- panel panel-default sidebar-menu end -->
 <?php } ?>