<?php

include("includes/header.php");
?>

 <div id="content"> <!-- content start -->
   <div class="container"><!-- container start -->
     <div class="col-md-12"><!-- col-md-12 start  -->
       <ul class="breadcrumb"><!-- breadcrumb start -->
         <li>
           <a href="index.php">Home</a> 
         </li>
         <li>Register</li>
       </ul><!-- breadcrumb end -->
     </div><!-- col-md-12 end -->
     
     <div class="col-md-3"><!-- col-md-3 start -->
       <?php
       include("includes/sidebar.php");
       ?>
     </div><!-- col-md-3 end -->

     <div class="col-md-9"><!-- col-md-9 start -->
       <div class="box"><!-- box start -->
         <div class="box-header"><!-- box-header start -->
           <center>
             <h2>Register a New Account</h2>
           </center>
           <form action="customer_register.php" method="post" enctype="multipart/form-data" ><!-- form start -->
             <div class="form-group"><!-- form-group start -->
               <label>Name</label>
               <input type="text" name="c_name" class="form-control" required>
             </div><!-- form-group end -->
             <div class="form-group"><!-- form-group start -->
               <label>Email</label>
               <input type="email" name="c_email" class="form-control" required>
             </div><!-- form-group end -->
             <div class="form-group"><!-- form-group start -->
               <label>Password</label>
               <input type="password" name="c_pass" class="form-control" required>
             </div><!-- form-group end -->
             <div class="form-group"><!-- form-group start -->
               <label>Country</label>
               <input type="text" name="c_country" class="form-control" required>
             </div><!-- form-group end -->
             <div class="form-group"><!-- form-group start -->
               <label>City</label>
               <input type="text" name="c_city" class="form-control" required>
             </div><!-- form-group end -->
             <div class="form-group"><!-- form-group start -->
               <label>Contact</label>
               <input type="text" name="c_contact" class="form-control" required>
             </div><!-- form-group end -->
             <div class="form-group"><!-- form-group start -->
               <label>Address</label>
               <input type="text" name="c_address" class="form-control" required>
             </div><!-- form-group end -->
             <div class="form-group"><!-- form-group start -->
               <label>Profile Picture</label>
               <input type="file" name="c_image" class="form-control" required>
             </div><!-- form-group end -->
                <div class="text-center"><!-- text-center start -->
                 <button class="btn btn-primary" type="submit" name="register">
                 <i class="fa fa-user-md"></i> Register
                 </button>
               </div><!-- text-center end -->

           </form><!-- form end -->
         </div><!-- box-header -->
       </div><!--  box end -->
     </div><!-- col-md-9 end -->

      </div><!-- container end -->
 </div><!-- content end -->




    <?php
    include("includes/footer.php");
    ?>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
<?php
c_register();
?>
