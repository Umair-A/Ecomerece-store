<center><!-- center start -->
	<h1>My Oders</h1>
	<p class="lead">Your orders on one place</p>
	<p class="text-muted"><!-- text-muted start -->
     If you have any question feel fee to<a href="../contact.php"> contact us</a>.Our customer service work <strong>24/7</strong>
     </p><!-- text-muted end -->

</center> <!-- center end -->
<hr>
<div class="table-responsive"><!-- table-responsive start -->
	<table class="table table-bordered table-hover"><!-- table-borderd table-hover start -->
		<thead>
			<tr>
              <th> No:</th>
              <th> Due Amount:</th>
              <th> Invoice No:</th>
              <th> Quantity:</th>
              <th> Size:</th>
              <th> Order Date:</th>
              <th> Paid / Unpaid:</th>
              <th> Status:</th>
 			</tr>
		</thead>
		<tbody><!-- body stART -->
			<?php
               $customer_email=$_SESSION['customer_email']; 
               $query="SELECT * FROM customer WHERE customer_email='$customer_email'";
               $run=mysqli_query($con,$query);
               $row=mysqli_fetch_array($run);
               $customer_id=$row['customer_id'];
               $get_order="SELECT * FROM customer_orders WHERE customer_id='$customer_id'";
               $fire=mysqli_query($con,$get_order);
               $i=0;
               while ($array=mysqli_fetch_array($fire)) 
               {
                 
                 $order_id=$array['order_id'];
                 $due_amount=$array['due_amount'];
                 $invoice_no=$array['invoice_no'];
                 $qty=$array['qty'];
                 $size=$array['size'];
                 $order_date=substr($array['order_date'],0,11);
                 $order_status=$array['order_status'];
                 $i++;
                 if ($order_status=='pending') 
                 {
                 	$order_status='Unpaid';
                 }
                 else
                 {
                 	$order_status='Paid';
                 }
			?>
		<tr>
			<th><?php echo $i ?></td>
			<td><?php echo $due_amount ?></td>
			<td><?php echo $invoice_no ?></td>
			<td><?php echo $qty ?></td>
			<td><?php echo $size ?></td>
			<td><?php echo $order_date ?></td>
			<td><?php echo $order_status ?></td>
			<td>
			<a href="confirm.php?order_id=<?php echo $order_id; ?>" target="_blank" class="btn btn-primary btn-sm">Confirm Paid</a>
			</td>
 		</tr>
 	<?php } ?>
		 
		</tbody><!-- body end -->
	</table><!-- table-borderd table-hover end -->
</div><!-- table-responsive end -->