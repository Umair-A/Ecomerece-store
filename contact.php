<?php
$active="contact";
include("includes/header.php");
?>

 <div id="content"> <!-- content start -->
   <div class="container"><!-- container start -->
     <div class="col-md-12"><!-- col-md-12 start  -->
       <ul class="breadcrumb"><!-- breadcrumb start -->
         <li>
           <a href="index.php">Home</a>
         </li>
         <li>Contact Us</li>
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
             <h2>Feel Free to Contact Us</h2>
             <p class="text-muted"><!-- text-muted start -->
               If you have any question feel fee to contact us.Our customer service work <strong>24/7</strong>
             </p><!-- text-muted end -->
           </center>
           <form action="contact.php" method="post"><!-- form start -->
             <div class="form-group"><!-- form-group start -->
               <label>Name</label>
               <input type="text" name="name" class="form-control" required>
             </div><!-- form-group end -->
             <div class="form-group"><!-- form-group start -->
               <label>Email</label>
               <input type="email" name="email" class="form-control" required>
             </div><!-- form-group end -->
             <div class="form-group"><!-- form-group start -->
               <label>Subject</label>
               <input type="text" name="subject" class="form-control" required>
             </div><!-- form-group end -->
             <div class="form-group"><!-- form-group start -->
               <label>Message</label>
               <textarea name="message" class="form-control"></textarea>
               </div><!-- form-group end -->
               <div class="text-center"><!-- text-center start -->
                 <button class="btn btn-primary" type="submit" name="submit">
                 <i class="fa fa-user-md"></i> Send Message
                 </button>
               </div><!-- text-center end -->

           </form><!-- form end -->
           <?php sendmsg(); ?>
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