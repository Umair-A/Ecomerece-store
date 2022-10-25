<?php
$active="cart";
include("includes/header.php");
?>

 <div id="content"> <!-- content start -->
   <div class="container"><!-- container start -->
     <div class="col-md-12"><!-- col-md-12 start -->
       <ul class="breadcrumb"><!-- breadcrumb start -->
         <li>
           <a href="index.php">Home</a>
         </li>
         <li>Cart</li>
       </ul><!-- breadcrumb end -->
     </div><!-- col-md-12 end -->

  <div id="cart" class="col-md-9"><!-- col-md-9 start -->
       <div class="box"><!-- box start -->
         <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form start -->
           <h1>Shoppping Cart</h1>
           <p class="text-muted">You currently <?php item();?> item(s) in your cart</p>
           <div class="table-responsive"><!-- table-responsive start -->
             <table class="table"><!-- table start -->
               <thead><!-- thead start -->
                 <tr>
                   <th colspan="2">Product</th>
                   <th>Quantity</th>
                   <th>Unit Price</th>
                   <th>Size</th>
                   <th colspan="1">Delete</th>
                   <th colspan="2">Sub-Total</th>
                 </tr>
               </thead><!-- thead end -->
               <tbody><!-- body start -->
               <?php cartpro(); ?>
               </tbody><!-- body end -->
               <tfoot> <!-- tfoot start -->
                 <tr>
                   <th colspan="6">Total</th>
                   <th colspan="2"><?php price(); ?></th>
                 </tr>
               </tfoot> <!-- tfoot end -->
             </table><!-- table end -->
           </div><!-- table-responsive end -->
           <div class="box-footer"><!-- box-footer start -->
             <div class="pull-left"><!-- pull-left start -->
               <a href="index.php" class="btn btn-default">
                 <i class="fa fa-chevron-left"></i>Continue Shopping
               </a>
             </div><!-- pull-left end -->
             <div class="pull-right"><!-- pull-right start -->
               <button type="submit" name="update" value="Update Cart" href="index.php" class="btn btn-default">
                 <i class="fa fa-refresh"></i> Update Cart
               </button>
               <a href="checkout.php" class="btn btn-primary">Proceed to Checkout <i class="fa fa-chevron-right"></i></a>
             </div><!-- pull-right end -->

           </div><!-- box-footer end -->
         </form><!-- form end -->
       </div> <!-- box end -->
       <?php @$up_cart=updatecart(); ?>
       <hr> 
        <div id="row same-height-row"><!--row same-height-row start -->
          <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 start -->
          <div class="box same-height headline"><!-- box same-height headline start -->
            <h3 class="text-center">Product May Your Like</h3>
          </div><!-- box same-height headline end -->
         </div><!-- col-md-3 col-sm-6 end -->
         <?php getdetailpro(); ?>
            
 
       </div><!--row same-height-row end -->
      </div><!-- col-md-9 end -->
      <div class="col-md-3"><!-- col-md-3 start -->
        <div id="order-summary" class="box"><!-- order-summery start -->
          <div class="box-header"><!-- box-header start -->
            <h3 class="text-center">Order Summary</h3>
          </div><!-- box-header end -->
          <p class="text-muted text-center">
          Shipping and additonal costs are calculate based on vlaues you have entered.
          </p>
          <div class="table-responsive"><!-- table-responsive start -->
            <table class="table"><!-- table start -->
              <tbody><!-- body start -->
                <tr>
                  <td>Order sub-total</td>
                  <th><?php price(); ?></th>
                </tr>
                <tr>
                  <td>Shipping and Handling</td>
                  <th>$0</th>
                </tr>
                <tr>
                  <td>Tax</td>
                  <th>$3</th>
                </tr>
                <tr>
                  <td class="total">Total</td>
                  <th><?php total_price(); ?></th>
                </tr>
              </tbody><!-- body end -->
            </table><!-- table end -->
          </div><!-- table-responsive end -->
        </div><!-- order-summery end -->
      </div><!-- col-md-3 end -->

    </div><!-- container end -->
 </div><!-- content end -->




    <?php
    include("includes/footer.php");
    ?>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>