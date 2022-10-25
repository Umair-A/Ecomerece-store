<?php
$con=mysqli_connect("localhost","root","","ecom_store");
// get ip address
function getRealIpUser()
{
	switch (true) { 
		case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP']; 
		case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP']; 
		case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR']; 

		default: return $_SERVER['REMOTE_ADDR'];
	}
}

//INSERT INTO CART
function add_cart()
{
	global $con;
    if (isset($_GET['add_cart'])) 
    {
	    $ip_add=getRealIpUser();
	    $p_id=$_GET['add_cart'];
	    $product_qty=$_POST['product_qty'];      	
	    $product_size=$_POST['product_size'];  
	    $check_product="SELECT * FROM cart WHERE ip_add='$ip_add' AND p_id='$p_id'";
	    $run_check=mysqli_query($con,$check_product);
	    if(mysqli_num_rows($run_check)>0) 
	    {
	       echo "<script>alert('This Product Has Already in the Cart')</script>";
	       echo "<script>window.open('details.php?pro_id=$p_id ','_self')</script>";
	    }
	    else
	    {
	    	$insert_cart="INSERT INTO cart (p_id,ip_add,qty,size) VALUES ('$p_id','$ip_add','$product_qty','$product_size') ";
	    	$fire_insert=mysqli_query($con,$insert_cart);
	    	 
	    	echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
	    }    	
     }
}

// fetching products
function getpro()
{
	global $con;
	$get_pro="SELECT * FROM products order by 1 DESC LIMIT 0,8";
	$fire=mysqli_query($con,$get_pro);
	while ($row=mysqli_fetch_array($fire)) 
	{
		$product_id=$row['product_id'];
		$pro_title=$row['product_tilte'];
		$product_price=$row['product_price'];
		$product_img=$row['product_img1'];
		echo " 

       <div class='col-sm-4 col-sm-6 single'<!-- col-sm-4 col-sm-6 single start -->
         <div class='product'><!-- product start -->
           <a href='details.php?pro_id=$product_id'>
             <img class='img-responsive' src='admin_area/product_images/$product_img' alt='product 1'>
           </a>
           <div class='text'><!-- text start -->
             <h3>
               <a href='details.php?pro_id=$product_id'>
                  $pro_title
               </a>
             </h3>
             <p class='price'>$product_price</p> 
             <p class='button'>
               <a href='details.php?pro_id=$product_id' class='btn btn-default'>View detail</a>
               <a href='details.php?pro_id=$product_id' class='btn btn-primary'>
                 <i class='fa fa-shopping-cart'>Add to cart</i>
               </a>
             </p>
           </div> <!-- text end -->
         </div><!-- product end -->
       </div><!-- col-sm-4 col-sm-6 single end -->
		";

	}
}
// fetching products catagories
function get_pro_cat()
{
	global $con;
	$cat="SELECT * FROM product_catagories";
	$run_cat=mysqli_query($con,$cat);
	while ($row_cat=mysqli_fetch_array($run_cat)) 
	{
		$p_cat_id=$row_cat['p_cat_id'];
		$p_cat_title=$row_cat['p_cat_title'];
		echo " 
        <li><a href='shop.php?p_id=$p_cat_id'>$p_cat_title</a></li>
		";
	}
}
// fetching catagories
function get_cat()
{
	global $con;
	$pro_cat="SELECT  * FROM catagories";
	$run=mysqli_query($con,$pro_cat);
	
	while ($row=mysqli_fetch_array($run)) 
	{
		$cat_id=$row['cat_id'];
		$cat_title=$row['cat_title'];
		echo " 
		<li><a href='shop.php?c_id=$cat_id'>$cat_title</a></li>
		";
	}

}

// fetching catagories products
function getcatpro()
{

	global $con;
	if (isset($_GET['p_id'])) 
	{
		$p_cat_id=$_GET['p_id'];
		$query="SELECT * FROM product_catagories WHERE p_cat_id=$p_cat_id";
		$run_query=mysqli_query($con,$query);
		$row=mysqli_fetch_array($run_query);
		$p_cat_title=$row['p_cat_title'];
		$p_cat_desc=$row['p_cat_desc'];
		$getpro="SELECT * FROM products  WHERE p_cat_id=$p_cat_id";
		$runpro=mysqli_query($con,$getpro);
		$count=mysqli_num_rows($runpro);

		if ($count==0) 
		{
			echo "
          <div class='box'>
	      <h1>No product found</h1>
          </div>
           ";
 		}
 		else
 		 {
 			echo " 
 		 <div class='box'>
 	       <h1>$p_cat_title</h1>
 	       <p>$p_cat_desc</p>
         </div>
         ";
 		}
 		while ($row=mysqli_fetch_array($runpro)) 
 		{
 		$product_id=$row['product_id'];
		$pro_title=$row['product_tilte'];
		$product_price=$row['product_price'];
		$product_img=$row['product_img1'];
		echo " 

       <div class='col-sm-4 col-sm-6 single center-responsive'<!-- col-sm-4 col-sm-6 single start -->
         <div class='product'><!-- product start -->
           <a href='details.php?pro_id=$product_id'>
             <img class='img-responsive' src='admin_area/product_images/$product_img' alt='product 1'>
           </a>
           <div class='text'><!-- text start -->
             <h3>
               <a href='details.php?pro_id=$product_id'>
                  $pro_title
               </a>
             </h3>
             <p class='price'>$product_price</p> 
             <p class='button'>
               <a href='details.php?pro_id=$product_id' class='btn btn-default'>View detail</a>
               <a href='details.php?pro_id=$product_id' class='btn btn-primary'>
                 <i class='fa fa-shopping-cart'>Add to cart</i>
               </a>
             </p>
           </div> <!-- text end -->
         </div><!-- product end -->
       </div><!-- col-sm-4 col-sm-6 single end -->
		";
 			
 		}
	}
}
//fetching catagories
function getcatagories()
{
	global $con;
	if (isset($_GET['c_id'])) 
	{
		$c_id=$_GET['c_id'];
		$query="SELECT * FROM catagories WHERE cat_id=$c_id";
		$run=mysqli_query($con,$query);
		$row=mysqli_fetch_array($run);
		$cat_title=$row['cat_title'];
		$cat_desc=$row['cat_desc'];
		$select_pro="SELECT * FROM products WHERE cat_id=$c_id LIMIT 0,6";
		$fire=mysqli_query($con,$select_pro);
		$count=mysqli_num_rows($fire);
		if ($count==0) 
		{
			echo "
          <div class='box'>
	      <h1>No product found</h1>
          </div>
           ";
 		}
 		else
 		{
 			echo " 
 		 <div class='box'>
 	       <h1>$cat_title</h1>
 	       <p>$cat_desc</p>
         </div>
         ";
 		}
 		while ($row=mysqli_fetch_array($fire)) 
 		{
 		$product_id=$row['product_id'];
		$pro_title=$row['product_tilte'];
		$product_price=$row['product_price'];
		$product_img=$row['product_img1'];
		echo " 

       <div class='col-sm-4 col-md-6  center-responsive'<!-- col-sm-4 col-sm-6 single start -->
         <div class='product'><!-- product start -->
           <a href='details.php?pro_id=$product_id'>
             <img class='img-responsive' src='admin_area/product_images/$product_img' alt='product 1'>
           </a>
           <div class='text'><!-- text start -->
             <h3>
               <a href='details.php?pro_id=$product_id'>
                  $pro_title
               </a>
             </h3>
             <p class='price'>$product_price</p> 
             <p class='button'>
               <a href='details.php?pro_id=$product_id' class='btn btn-default'>View detail</a>
               <a href='details.php?pro_id=$product_id' class='btn btn-primary'>
                 <i class='fa fa-shopping-cart'>Add to cart</i>
               </a>
             </p>
           </div> <!-- text end -->
         </div><!-- product end -->
       </div><!-- col-sm-4 col-sm-6 single end -->
		";
 			
	}
}
}
function getdetailpro()
{
          
          global $con;
           $select="SELECT * FROM products ORDER BY rand() LIMIT  0,3";
           $run_select=mysqli_query($con,$select);
           while ($fetch=mysqli_fetch_array($run_select)) 
           {
           	$product_id=$fetch['product_id'];
           $product_title=$fetch['product_tilte'];
           $product_price=$fetch['product_price'];
           $product_image=$fetch['product_img1'];
           echo " 
         <div class='col-md-3 col-sm-6 center-reponsive'><!-- col-md-3 col-sm-6 center-reponsive start -->
           <div class='product same-height'><!-- product same-height start -->
             <a href='details.php?pro_id=$product_id'>
               <img class='img-responsive' src='admin_area/product_images/$product_image' alt='product 4'>
             </a>
             <div class='text'><!-- text start -->
               <h3><a href='details.php?pro_id=$product_id'> $product_title  </a></h3>
               <p class='price'> $product_price  </p>
             </div><!-- text end -->
           </div><!-- product same-height end -->
         </div><!-- col-md-3 col-sm-6 center-reponsive end -->

        ";
      }
}
//total items in cart
function item()
{
	global $con;
	$ip_add=getRealIpUser();
	$qury="SELECT * FROM cart WHERE ip_add='$ip_add'";
	$run=mysqli_query($con,$qury);
	$count=mysqli_num_rows($run);
	echo $count;
}
// total price
function price()
{
	global $con;
	$total=0;
	$ip_add=getRealIpUser();
	$query="SELECT * FROM cart WHERE ip_add='$ip_add'";
	$run=mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($run)) 
	{
		$pro_id=$row['p_id'];
		$qty=$row['qty'];
		$fetch="SELECT * FROM products WHERE product_id='$pro_id'";
		$fire=mysqli_query($con,$fetch);
		while ($array=mysqli_fetch_array($fire)) 
		{
			$sub_total=$array['product_price']*$qty;
			$total+=$sub_total;
		}
	}
	echo "$". $total;
}

function total_price()
{

global $con;
	$total=0;
	$ip_add=getRealIpUser();
	$query="SELECT * FROM cart WHERE ip_add='$ip_add'";
	$run=mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($run)) 
	{
		$pro_id=$row['p_id'];
		$qty=$row['qty'];
		$fetch="SELECT * FROM products WHERE product_id='$pro_id'";
		$fire=mysqli_query($con,$fetch);
		while ($array=mysqli_fetch_array($fire)) 
		{
			$sub_total=$array['product_price']*$qty;
			$total+=$sub_total;
		}
	}
	$tax=3;
	$total+=$tax;
	echo "$".$total;

} 
function cartpro()
{
	global $con;
	$total=0;
	$ip_add=getRealIpUser();
	$query="SELECT * FROM cart WHERE ip_add='$ip_add'";
	$run=mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($run)) 
	{
		$pro_id=$row['p_id'];
		$qty=$row['qty'];
		$size=$row['size'];
		$fetch="SELECT * FROM products WHERE product_id='$pro_id'";
		$fire=mysqli_query($con,$fetch);
		while ($array=mysqli_fetch_array($fire)) 
		{
			$product_id=$array['product_id'];
			$product_title=$array['product_tilte'];
			$product_price=$array['product_price'];
			$product_image=$array['product_img1'];
			$sub_total=$array['product_price']*$qty;
			$total+=$sub_total;
			echo "
			       <tr>
                   <td>
                     <img class='img-responsive' src='admin_area/product_images/$product_image ' alt='product-1'>
                   </td>
                   <td><a href='details.php?pro_id=$product_id'>$product_title</a></td>
                   <td>$qty</td>
                   <td>$product_price</td>
                   <td>$size</td>
                   <td>
                     <input type='checkbox' name='remove[]' value='$pro_id'>
                   </td>
                   <td>$ $sub_total</td>
                 </tr>
                 ";
		}
	}
	
}
// updatecart
function updatecart()
{
	global $con;
	if (isset($_POST['update'])) 
	{
		foreach ($_POST['remove'] as $remove_id) 
		{

			$delete_product="DELETE FROM cart WHERE p_id='$remove_id'";
			$run=mysqli_query($con,$delete_product);
			if ($run) 
			{
			   echo "<script>alert('Product Has been Deleted from Cart')</script>";
			   echo "<script>window.open('cart.php','_self')</script>";	
			}
		}
	}
}
// contact function
function sendmsg()
{
	global $con;
	if (isset($_POST['submit'])) {
		//admin recevie this info
		$sender_name=$_POST['name'];
		$sender_email=$_POST['email'];
		$sender_subject=$_POST['subject'];
		$sender_message=$_POST['message'];
		$receiver_email="ammarsial05@gmail.com";
		mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
		// auto reply to sender
		$email=$_POST['email'];
		$subject="Welcome to Our Website ";
		$message="Thans for sending us message.ASAP we will reply your message.";
		$from="ammarsial05@gmail.com";
		mail($email,$subject,$message,$from);
		echo "<h2 align='center'>Your Message Has Sent Successfully</h2>";


	}
}
// customer registration
function c_register()
{
	global $con;
	if (isset($_POST['register'])) 
	{
		$c_name=$_POST['c_name'];
		$c_email=$_POST['c_email'];
		$c_pass=$_POST['c_pass'];
		$c_country=$_POST['c_country'];
		$c_city=$_POST['c_city'];
		$c_contact=$_POST['c_contact'];
		$c_address=$_POST['c_address'];

		$c_image=$_FILES['c_image']['name'];
		$c_image_tmp=$_FILES['c_image']['tmp_name'];
		move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

		$c_ip=getRealIpUser();

		$inset_reg="INSERT INTO customer (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) VALUES ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
		$rn=mysqli_query($con,$inset_reg);
		$sel_cart="SELECT * FROM cart WHERE ip_add='$c_ip'";
		$run_cart=mysqli_query($con,$sel_cart);
		$check=mysqli_num_rows($run_cart);
		if ($check>0) 
		{
			$_SESSION['customer_email']=$c_email;
	       echo "<script>alert('You Have been Register Successfully')</script>";
	    	echo "<script>window.open('checkout.php','_self')</script>";

		}
		else
		{
			$_SESSION['customer_email']=$c_email;
	       echo "<script>alert('You Have been Register Successfully')</script>";
	    	echo "<script>window.open('index.php','_self')</script>";

		}
	}
}

?>