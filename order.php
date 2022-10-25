<?php
 
include("includes/db.php");
include("functions/function.php");

?>
<?php
if (isset($_GET['c_id'])) 
{
	$customer_id=$_GET['c_id'];

}
$ip_add=getRealIpUser();
$invoice_no=mt_rand();
$status="pending";
$query="SELECT * FROM cart WHERE ip_add='$ip_add'";
$run=mysqli_query($con,$query);
while ($array=mysqli_fetch_array($run)) 
{
	$pro_id=$array['p_id'];
	$pro_qty=$array['qty'];
	$pro_size=$array['size'];
	$get_pro="SELECT * FROM products WHERE product_id='$pro_id'";
	$fire=mysqli_query($con,$get_pro);
	while ($row=mysqli_fetch_array($fire)) 
	{
		$sub_total=$row['product_price']*$pro_qty;
		$insert_order="INSERT INTO customer_orders (customer_id,due_amount,invoice_no,qty,size,order_date,order_status) VALUES ('$customer_id','$sub_total','$invoice_no','$pro_qty','$pro_size',NOW(),'$status')";
		$run_order=mysqli_query($con,$insert_order);
		$insert_pending="INSERT INTO pending_orders (customer_id, invoice_no,product_id,qty,size,order_status) VALUES ('$customer_id','$invoice_no','$pro_id','$pro_qty','$pro_size','$status')";
		$run_pending=mysqli_query($con,$insert_pending);
		$delete_cart="DELETE FROM cart WHERE ip_add='$ip_add'";
		$run_dlt=mysqli_query($con,$delete_cart);

		echo "<script>alert('Your Order has been submitted. Thanks')</script>";
		echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
	} 
}

?>