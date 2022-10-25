<?php

if(!isset($_SESSION['admin_email'])){
 	echo "<script>window.open('login.php','_self')</script>";
 }else{
?>
<?php
    if (isset($_GET['edit_product'])) {
           $edit_id = $_GET['edit_product'];
           $get_p = "select * from products where product_id='$edit_id'";
           $run_edit=mysqli_query($con,$get_p);
           $row_edit=mysqli_fetch_array($run_edit);
           $p_id=  $row_edit['product_id'];
           $p_title=$row_edit['product_tilte'];
           $p_cat=  $row_edit['p_cat_id'];
           $cat=  $row_edit['cat_id'];
           $p_image1=  $row_edit['product_img1'];
           $p_image2=  $row_edit['product_img2'];
           $p_image3=  $row_edit['product_img3'];
           $p_price=  $row_edit['product_price'];
           $p_keywords=  $row_edit['product_keywords'];
           $p_desc=  $row_edit['product_desc'];

    }
    $get_p_cat="select * from product_catagories where p_cat_id='$p_cat'";
    $run_p_cat=mysqli_query($con,$get_p_cat);
    $row_p_cat=mysqli_fetch_array($run_p_cat);
    $p_cat_title= $row_p_cat['p_cat_title'];
      $get_cat="select * from catagories where cat_id='$cat'";
    $run_cat=mysqli_query($con,$get_cat);
    $row_cat=mysqli_fetch_array($run_cat);
    $cat_title= $row_cat['cat_title'];



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Products</title>
  
 
      
</head>
<body>
	<div class="row"><!-- row start -->
		<div class="col-lg-12"><!-- col-lg-12 start -->
			<ol class="breadcrumb"><!-- breadcrum start -->
				<li class="active">
					<i class="fa fa-dashboard"></i> Dashboard / Edit Product
				</li>
			</ol><!-- breadcrum end -->
		</div><!-- col-lg-12 end -->
	</div><!-- row en -->
	<div class="row"><!-- row start -->
		<div class="col-lg-12"><!-- col-lg-12 start -->
			<div class="panel panel-default"><!-- panel panel-default start -->
				<div class="panel-heading"><!-- panel-heading start -->
					<h3 class="panel-title"><!-- panel-title start -->
						<i class="fa fa-money fa-fw"></i> Edit Product
					</h3><!-- panel-title end -->
				</div><!-- panel-heading end -->
				<div class="panel-body"><!-- panel-body start -->
					<form method="POST"  class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal start -->
						<div class="form-group"><!-- form-group start -->
							<label class="col-md-3 control-lable">Product Title</label>
							<div class="col-md-6"><!--col-md-6 start-->
								<input type="text" name="product_title" class="form-control" required value="<?php echo $p_title;?>">
							</div><!-- col-md-6 end -->
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label class="col-md-3 control-lable">Product Catagory</label>
							<div class="col-md-6"><!--col-md-6 start-->
								<select name="product_cat" class="form-control">
									<option value="<?php echo $p_cat;?>"> <?php echo $p_cat_title;?> </option>
									<?php

									 $catoo="SELECT * FROM product_catagories";
									 $run_cat=mysqli_query($con,$catoo);
									  
									 while ($row=mysqli_fetch_array($run_cat)) 
									 {
									 	$p_cat_id=$row["p_cat_id"];
									 	$p_cat_title=$row["p_cat_title"];

									 	echo "
									 	  <option value='$p_cat_id'>$p_cat_title</option>
 									 	";
									 }

									?>
								</select>
 							</div><!-- col-md-6 end -->
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label class="col-md-3 control-lable">Catagory</label>
							<div class="col-md-6"><!--col-md-6 start-->
								<select name="cat" class="form-control">
									<option value="<?php echo $cat;?>" >Select Product Category </option>
									<?php

									 $cato="SELECT * FROM catagories";
									 $run_cato=mysqli_query($con,$cato);
									  
									 while ($row=mysqli_fetch_array($run_cato)) 
									 {
									 	$cat_id=$row["cat_id"];
									 	$cat_title=$row["cat_title"];

									 	echo "
									 	  <option value='$cat_id'>$cat_title</option>
 									 	";
									 }

									?>
								</select>
 							</div><!-- col-md-6 end -->
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label class="col-md-3 control-lable">Product Image 1</label>
							<div class="col-md-6"><!--col-md-6 start-->
								<input type="file" name="product_img1" class="form-control" required>
								<br>
								<img width="70" height="70" src="product_images/<?php echo $p_image1; ?>" alt="<?php echo $p_image1; ?>">
							</div><!-- col-md-6 end -->
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label class="col-md-3 control-lable">Product Image 2</label>
							<div class="col-md-6"><!--col-md-6 start-->
								<input type="file" name="product_img2" class="form-control" required>
									<br>
								<img width="70" height="70" src="product_images/<?php echo $p_image2; ?>" alt="<?php echo $p_image2; ?>">
							</div><!-- col-md-6 end -->
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label class="col-md-3 control-lable">Product Image 3</label>
							<div class="col-md-6"><!--col-md-6 start-->
								<input type="file" name="product_img3" class="form-control" required>
								<br>
								<img width="70" height="70" src="product_images/<?php echo $p_image3; ?>" alt="<?php echo $p_image3; ?>">
							</div><!-- col-md-6 end -->
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label class="col-md-3 control-lable">Product Price</label>
							<div class="col-md-6"><!--col-md-6 start-->
								<input type="text" name="product_price" class="form-control" required value="<?php echo $p_price ?>">
							</div><!-- col-md-6 end -->
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label class="col-md-3 control-lable">Product Keywords</label>
							<div class="col-md-6"><!--col-md-6 start-->
								<input type="text" name="product_keywords" class="form-control" required value="<?php echo $p_keywords ?>">
							</div><!-- col-md-6 end -->
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label class="col-md-3 control-lable">Product desc</label>
							<div class="col-md-6"><!--col-md-6 start-->
								<textarea name="product_desc" cols="19" rows="6" class="form-control" >
									<?php echo $p_desc; ?>

								</textarea>
							</div><!-- col-md-6 end -->
						</div><!-- form-group end -->
						<div class="form-group"><!-- form-group start -->
							<label class="col-md-3 control-lable"></label>
							<div class="col-md-6"><!--col-md-6 start-->
								<input type="update" value="Update Product" name="submit" class="form-control btn btn-primary">
							</div><!-- col-md-6 end -->
						</div><!-- form-group end -->



						
					</form><!-- form-horizontal end -->
				</div><!-- panel-body end -->
			</div><!-- panel panel-default end -->
		</div><!-- col-lg-12 end -->	
	</div><!-- row en -->


    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
    
    
</body>
</html>
</body>
</html>
<?php
if (isset($_POST['update']))   
{
	$product_title=$_POST['product_title'];
 	$product_cat=$_POST['product_cat'];
 	$cat=$_POST['cat'];
	$product_price=$_POST['product_price'];
	$product_desc=$_POST['product_desc'];
	$product_keywords=$_POST['product_keywords'];
	

	$product_img1=$_FILES['product_img1']['name'];
	$product_img2=$_FILES['product_img2']['name'];
	$product_img3=$_FILES['product_img3']['name'];

	$temp_name1=$_FILES['product_img1']['tmp_name'];
	$temp_name2=$_FILES['product_img2']['tmp_name'];
	$temp_name3=$_FILES['product_img3']['tmp_name'];

	move_uploaded_file($temp_name1,"product_images/$product_img1");
	move_uploaded_file($temp_name2, "product_images/$product_img2");
	move_uploaded_file($temp_name3, "product_images/$product_img3");

	$update_product= "update products set p_cat_id='$product_cat',cat_id='$cat',date=NOW(),product_title='$product_title',
	product_img1='$product_img1',product_img2='$product_img2',product_img3='$product_img3',product_keywords='$product_keywords',
	product_desc='$product_desc',product_price='$product_price' where product_id='$p_id'";

	$run_product=mysqli_query($con,$update_product);
	if(run_product){
		echo "<script>alert('Your product has been updated successfully')</script>"; 
		echo "<script>window.open('index.php?view_products','_self')</script>";
	}

}
?>

<?php  } ?>

