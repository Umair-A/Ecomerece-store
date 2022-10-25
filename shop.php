<?php
$active="shop";
include("includes\header.php");

?>

 <div id="content"> <!-- content start -->
   <div class="container"><!-- container start -->
     <div class="col-md-12"><!-- col-md-12 start  -->
       <ul class="breadcrumb"><!-- breadcrumb start -->
         <li>
           <a href="index.php">Home</a>
         </li>
         <li>Shop</li>
       </ul><!-- breadcrumb end -->
     </div><!-- col-md-12 end -->

     
     <div class="col-md-3"><!-- col-md-3 start -->
       <?php
       include("includes/sidebar.php");
       ?>
     </div><!-- col-md-3 end -->
     <div class="col-md-9"><!-- col-md-9 start -->
      <?php if (!isset($_GET['p_id'])) {
             if (!isset($_GET['c_id'])) {
        echo "
       
       <div class='box'><!-- box start -->
         <h1>Shop</h1>
         <p>Here you can buy your favourite.</p>
       </div><!-- box end -->
       ";
        }
        }
       ?>
       <div class="row"><!-- row start -->
        <?php
             if (!isset($_GET['p_id'])) {
             if (!isset($_GET['c_id'])) {
              $per_page=6; 
              if (isset($_GET['page'])) {
                $page=$_GET['page'];
               }
                else
                 {
                  $page=1;
                  }
                
                $start_from=($page-1) * $per_page;
                $get_pro="SELECT * FROM products ORDER BY 1 DESC LIMIT $start_from,$per_page";
                $run_pro=mysqli_query($con,$get_pro);
                while ($row=mysqli_fetch_array($run_pro)) 
                {
                   $product_id=$row['product_id'];
                   $pro_title=$row['product_tilte'];
                   $product_price=$row['product_price'];
                   $product_img=$row['product_img1'];
               echo " 
          <div class='col-md-4 col-sm-6 center-responsive'><!-- col-md-4 col-sm-6 center-responsive start -->
          <div class='product'><!-- product start -->
           <a href='details.php?pro_id=$product_id'>
             <img class='img-responsive' src='admin_area/product_images/$product_img' alt='product 1'>
           </a>
           <div class='text'><!-- text start -->
             <h3>
               <a href='details.php?pro_id=$product_id'>$pro_title</a>                 
              </h3>
             <p class='price'>$product_price</p> 
             <p class='buttons'>
               <a href='details.php?pro_id=$product_id' class='btn btn-default'>View detail</a>
               <a href='details.php?pro_id=$product_id' class='btn btn-primary'>
                 <i class='fa fa-shopping-cart'>Add to cart</i>
               </a>
             </p>
           </div> <!-- text end -->
         </div><!-- product end -->
           
         </div><!-- col-md-4 col-sm-6 center-responsive end --> 
             ";
                
              }
          ?>
          </div><!-- row end -->
       <center>
         <ul class="pagination"><!-- pagination start -->
            <?php 

            $query="SELECT * FROM products";
            $fire=mysqli_query($con,$query);
            $total_rec=mysqli_num_rows($fire);
            $total_page=ceil($total_rec / $per_page);
            echo " 
                <li><a href='shop.php?page=1'>".'First Page'."</a></li>

            ";
            for ($i=1; $i<=$total_page ; $i++) 
            { 
              echo "
              <li><a href='shop.php?page=".$i."'>".$i."</a></li>
              ";
            };
            echo " 
                <li><a href='shop.php?page=$total_page'>".'Last Page'."</a></li>

            ";
              }
            }
            ?>
         </ul><!-- pagination end -->
       </center>
         <?php 
         getcatpro();
         getcatagories();  

         ?>
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