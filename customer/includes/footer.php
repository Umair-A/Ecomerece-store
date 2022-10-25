 <div id="footer"><!-- footer start -->
 	<div class="container"><!-- container start -->
 		<div class="row"><!-- row start -->
 			<div class="col-sm-6 col-sm-3"><!-- col-sm-6 col-sm-3 start -->
 				<h4>Pages</h4>
 				<ul><!-- ul begin -->
 					<li><a href="../cart.php">Shopping Cart</a></li>
 					<li><a href="../shop.php">Shop</a></li>
 					<li><a href="../contact.php">Contact Us</a></li>
 					<li><a href="my_account.php">My Account</a></li>
 				</ul><!-- ul end -->
 				<hr>
 				<h4>User Section</h4>
 				<ul><!-- ul start -->
 					<?php
                           if (!isset($_SESSION['customer_email'])) 
                           {
                             echo"<a href='../checkout.php'>Login</a>";
                           }
                           else
                           {
                             echo "<a href='my_account.php?my_orders'>My Account</a>";
                           }
                            

                           ?>
 					<li><a href="customer_register.php">Registration</a></li>
 				</ul><!-- ul end -->
 				<hr class="hidden-md hidden-lg hidden-sm">

 			</div><!-- col-sm-6 col-sm-3 end -->
 			<div class="col-md-6 col-md-3"><!-- col-md-6 col-md-3 start -->
 				<h4>Top Products Catagories</h4>
 				<ul><!-- ul begin -->
 					<?php
                     get_pro_cat();
 					?>
 				</ul><!-- ul end -->
 				<hr class="hidden-md hidden-lg"> 

 			</div><!-- col-md-6 col-md-3 end -->
 			<div class="col-md-6 col-md-3"><!-- col-md-6 col-md-3 start -->
 				<h4>Find Us</h4>
 				<p><!-- p start -->
 					<strong>M-Dev Media inc.</strong>
 					<br>Cibubur
 					<br>Ciracas
 					<br>9818-0683-3157
 					<br>mughianto4th@gmail.com
 					<br><strong>MrGhie</strong>


 				</p><!-- p end -->
 				<a href="../contact.php">Check Our Contact Page</a>
 				<hr class="hidden-md hidden-lg"> 
 			</div><!-- col-md-6 col-md-3 end -->
 			<div class="col-md-6 col-md-3"><!-- col-md-6 col-md-3 start -->
 				<h4>Get the News</h4>
 				<p class="text-muted">
 					Don't miss our latest updates. 
 				</p>
 				<form action="" method="POST"><!-- form begin -->
 					<div class="input-group"><!-- input-group begin -->
 						<input type="email" name="email" class="form-control">
 						<span>
 							<input type="submit" value="subscribe" class="btn btn-default" >
 						</span>
 					</div><!-- input-group end -->
 				</form><!-- form end -->
 				<hr>
 				<h4>Keep in Touch</h4>
 				<p class="social">
 					<a href="#" class="fa fa-facebook"></a>
 					<a href="#" class="fa fa-twitter"></a>
 					<a href="#" class="fa fa-instagram"></a>
 					<a href="#" class="fa fa-google-plus"></a>
 					<a href="#" class="fa fa-envelope"></a>

 				</p>
 			</div><!-- col-md-6 col-md-3 end -->

 		</div><!-- row end -->
 	</div><!-- container end -->
 </div><!-- footer end -->
 <div id="copyright"><!-- copyright start -->
 	<div class="container"><!-- container start -->
 		<div class="col-md-6"><!-- col-md-6 start -->
 			<p class="pull-right">&copy;2020 M-Dev Store All Rights Reserved</p>
 		</div><!-- col-md-6 end -->
 		<div class="col-md-6"><!-- col-md-6 start -->
 			<p class="pull-left">Theme by: <a href="#">MrGhie</a></p>
 		</div><!-- col-md-6 end -->
 	</div><!-- container end -->
 </div><!-- copyright end -->