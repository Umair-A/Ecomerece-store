<?php
$active="home";
include("includes/header.php");
?>

 <div id="content"> <!-- content start -->
   <div class="container"><!-- container start -->
     <div class="col-md-12"><!-- col-md-12 start -->
       <ul class="breadcrumb"><!-- breadcrumb start -->
         <li>
           <a href="index.php">Home</a>
         </li>
         <li>Shop</li>
         <li><a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $cat_title; ?></a></li>
         <li><?php echo $product_title ?></li>

       </ul><!-- breadcrumb end -->
     </div><!-- col-md-12 end -->
     <div class="col-md-3"><!-- col-md-3 start -->
       <?php
       include("includes/sidebar.php");
       ?>
     </div><!-- col-md-3 end -->
      <div class="col-md-9"><!-- col-md-9 start -->
        
        <div id="productMain" class="row"><!-- row start -->
          <div class="col-sm-6"><!-- col-sm-6 start -->
            <div id="mainImage"><!-- mainImage start -->
              <div id="myCarousel" class="carousel slide" date-ride="carousel"><!-- carousel slide start -->
                <ol class="carousel-indicators"><!-- carousel-indicators start -->
                  <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol><!-- carousel-indicators end -->
                <div class="carousel-inner"><!-- carousel-inner start -->
                  <div class="item active"><!-- item start -->
                    <center>
                      <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1 ?>" alt="product 3-a">
                    </center>
                  </div><!-- item end -->
                  <div class="item"><!-- item start -->
                    <center>
                      <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img2 ?>" alt="product 3-a">
                    </center>
                  </div><!-- item end -->
                  <div class="item"><!-- item start -->
                    <center>
                      <img class="img-responsive" src=" admin_area/product_images/<?php echo $product_img3 ?>" alt="product 3-a">
                    </center>
                  </div><!-- item end -->
                </div><!-- carousel-inner end -->

                <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control start -->
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a><!-- left carousel-control end -->
                <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control start -->
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a><!-- right carousel-control end -->
                </div><!-- carousel slide end -->
            </div><!-- mainImage end -->
          </div><!-- col-sm-6 end -->
          <div class="col-sm-6"><!-- col-sm-6 start -->
            <div class="box"><!-- box start -->
              <h1 class="text-center"><?php echo "$product_title" ?></h1>
              
              <form action="details.php?add_cart=<?php echo $pro_id; ?>" method="post" class="form-horizontal"><!-- form-horizontal start -->
                <div class="form-group"><!-- form-group start -->
                  <lable for="" class="col-md-5 control-lable">Products Quantity</lable>
                  <div class="col-md-7"><!-- col-md-7 start -->
                    <select name="product_qty" id="" class="form-control">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div><!-- col-md-7 end -->
                </div><!-- form-group end -->
                <div class="form-group"><!-- form-group start -->
                  <label class="col-md-5 control-lable">Product Size</label>
                  <div class="col-md-7"><!-- col-md-7 start -->
                    <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must Pick Size For the Product')"> 
                      <option disabled selected>Select Size</option>
                      <option>Large</option>
                      <option>Medium</option>
                      <option>Small</option>
                     </select>
                  </div><!-- col-md-7 end -->
                </div><!-- form-group end -->
                <p class="price"><?php echo "$product_price" ?></p>
                <p class="text-center button"><button name="add_cart" class=" btn btn-primary i fa fa-shopping-cart">Add to Cart</button></p>
              </form><!-- form-horizontal end -->
              <?php add_cart(); ?>
            </div><!-- box end -->
            <div id="thumbs" class="row"><!-- row start -->
              <div class="col-xs-4"><!-- col-xs-4 start -->
                <a href="" class="thumb"><!-- thumb strar -->
                  <img class="img-responsive" data-target="#myCarousel" data-slide-to="0" src="<?php echo "admin_area/product_images/$product_img1" ?>" alt="product 3-a">
                </a><!-- thumb end -->
              </div><!-- col-xs-4 end -->
              <div class="col-xs-4"><!-- col-xs-4 start -->
                <a href="" class="thumb"><!-- thumb strar -->
                  <img class="img-responsive" data-target="#myCarousel" data-slide-to="1" src="<?php echo "admin_area/product_images/$product_img2" ?>" alt="product 3-a">
                </a><!-- thumb end -->
              </div><!-- col-xs-4 end -->
              <div class="col-xs-4"><!-- col-xs-4 start -->
                <a href="" class="thumb"><!-- thumb strar -->
                  <img class="img-responsive" data-target="#myCarousel" data-slide-to="2" src="<?php echo "admin_area/product_images/$product_img3" ?>" alt="product 3-a">
                </a><!-- thumb end -->
              </div><!-- col-xs-4 end -->
            </div><!-- row end -->
          </div><!-- col-sm-6-end -->
        </div><!-- row end -->
      <div id="detail" class="box"><!-- box start -->
        <h4>Product Detail</h4>
        <p><?php echo $product_desc;  ?></p>
         <h4>Size</h4>
         <ul>
           <li>Small</li>
           <li>Medium</li>
           <li>Large</li>
         </ul>
         <hr> 
      </div><!-- box end --> 
      <div id="row same-height-row"><!--row same-height-row start -->

        <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 start -->
          <div class="box same-height headline"><!-- box same-height headline start -->
            <h3 class="text-center">Product May Your Like</h3>
          </div><!-- box same-height headline end -->
         </div><!-- col-md-3 col-sm-6 end -->
          
            <?php getdetailpro();
            ?>
          
      </div><!--row same-height-row end -->       
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
 
