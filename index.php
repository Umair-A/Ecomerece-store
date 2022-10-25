<?php
$active="home";
include("includes\header.php");

?>
   
   <div class="container" id="slider"><!-- container Begin -->
       
       <div class="col-md-12"><!-- col-md-12 Begin -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
               
               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol><!-- carousel-indicators Finish -->
               
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                  <?php
                   $slides="SELECT * FROM slider LIMIT 0,1";
                   $run=mysqli_query($con,$slides);
                   while ($row=mysqli_fetch_array($run)) 
                   {
                    $slide_name=$row['slide_name'];
                    $slide_img=$row['slide_image'];
                    echo "
                    <div class='item active'>
                       
                       <img src='admin_area/slides_images/$slide_img' alt='Slider Image 1'>
                       
                   </div>
                   ";
                   }
                   $slides="SELECT * FROM slider LIMIT 1,3";
                   $run=mysqli_query($con,$slides);
                   while ($row=mysqli_fetch_array($run)) 
                   {
                    $slide_name=$row['slide_name'];
                    $slide_img=$row['slide_image'];
                    echo "
                    <div class='item'>
                       
                       <img src='admin_area/slides_images/$slide_img' alt='Slider Image 1'>
                       
                   </div>
                   ";
                   }
                  ?>
                   
                    
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
           
       </div><!-- col-md-12 Finish -->
       
   </div><!-- container Finish -->
   <div id="advantage"> <!-- advantage start -->
      <div class="container"> <!-- container start -->
         <div class="same-height-row"> <!-- same-height-row start -->
           <div class="col-sm-4"> <!-- col-sm-4 start -->
             <div class="box same-height"> <!-- box-same-height start -->
               <div class="icon"> <!-- icon start -->
                 <i class="fa fa-heart"></i>
               </div> <!-- icon end -->
               <h3><a href="#">Best offer</a><h3>
                <p style="line-height: 2;">We Provide Best Offers all around the World.
                 </p>
             </div> <!-- box-same-height end -->
           </div> <!-- col-sm-4 end -->
           <div class="col-sm-4"> <!-- col-sm-4 start -->
             <div class="box same-height"> <!-- box-same-height start -->
               <div class="icon"> <!-- icon start -->
                 <i class="fa fa-tag"></i>
               </div> <!-- icon end -->
               <h3><a href="#">Best Price</a><h3>
                <p style="line-height: 2;"> Our Price is affordable for Customer.
                 </p>
             </div> <!-- box-same-height end -->
           </div> <!-- col-sm-4 end -->
           <div class="col-sm-4"> <!-- col-sm-4 start -->
             <div class="box same-height"> <!-- box-same-height start -->
               <div class="icon"> <!-- icon start -->
                 <i class="fa fa-thumbs-up"></i>
               </div> <!-- icon end -->
               <h3><a href="#">100 % Original</a><h3>
                <p style="line-height: 2;">Our Products are 100% Original.
                </p>
             </div> <!-- box-same-height end -->
           </div> <!-- col-sm-4 end -->
         </div> <!-- same-height-row end -->
      </div> <!-- container end -->
   </div> <!-- advantage finish -->
   <div id="hot"> <!-- hot start -->
     <div class="box"> <!-- box start  -->
       <div class="container"> <!-- container start -->
         <div class="col-md-12"> <!-- col-md-12 start -->
           <h2>Our Latest Products</h2>
         </div> <!-- col-md-12 end -->
       </div> <!-- container end -->
     </div> <!-- box end -->
   </div> <!-- hot end -->
   <div class="container" id="content"> <!-- container start -->
     <div class="row"> <!-- row start -->
        <?php
        getpro();
        ?>

     </div> <!-- row end -->
   </div> <!-- container end -->
   <?php
    include("includes/footer.php");
    ?>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>