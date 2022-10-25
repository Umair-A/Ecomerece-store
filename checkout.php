<?php
$active="my-acount";
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
     <?php
     if (!isset($_SESSION['customer_email'])) 
     {
       include("customer/login.php");
     }
     else
     {
      include("payment_options.php");
     }


     ?>

 

      </div><!-- container end -->
 </div><!-- content end -->




    <?php
    include("includes/footer.php");
    ?>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
 
