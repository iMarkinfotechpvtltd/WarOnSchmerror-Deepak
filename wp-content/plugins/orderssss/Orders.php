<?php
/*
Plugin Name: Orders Details section
Description: Order Detailss
Author: Abhinav Grover
*/

if (is_admin())
{   
  function form_create_order_details() 
	 {  
	add_menu_page("Orders","Orders",1,"orders","");
	add_submenu_page("orders","Orders","Orders",8,"orders","orders");
	 }  
   add_action('admin_menu','form_create_order_details'); 
   
   
   
}
function orders()
{
include('../wp-config.php');
global $wpdb;
$plugin_url = plugin_dir_url( __FILE__ );
?>
<link rel='stylesheet' href='<?php echo $plugin_url; ?>css/style.css' type='text/css'/>
<link rel='stylesheet' href='<?php echo $plugin_url; ?>css/bootstrap.min.css' type='text/css'/>
<script src="<?php echo $plugin_url; ?>js/bootstrap.min.js"></script>
<script src="<?php echo $plugin_url; ?>js/jquery.validate.js"></script>
<script src="<?php echo $plugin_url; ?>js/form.js"></script>
<script src="<?php echo $plugin_url; ?>js/custom.js"></script>
<?php
if($_GET['req']=="view_cities")
{
include('view_cities.php'); 
}
else if($_GET['req']=="add_cities")
{	
include('add_cities.php');
}
else
{
?>
<div class="box-container">
<div class="bx-innr">
	<h1>New Orders</h1>
<table class="table table-striped">
<tr>
<th>S.no</th>
<th>Order Number</th>
<th>Name</th>
<th>Email</th>
<th>Price</th>
<th>Order Status</th>
<th>Order Details</th>
</tr>
<?php 
$i=1;
foreach( $wpdb->get_results("SELECT * FROM `im_formdata` WHERE `status` = 1 ORDER BY id DESC") as $key => $row)
	{
	?>
<tr>
<td><?php echo $i; ?></th>
<td><?php echo $row->id; ?></td>
<td><?php echo $row->name; ?></td>
<td><?php echo $row->email; ?></td>
<td>$<?php //echo $row->price; ?></td>
<td><div class="alert alert-success"><?php echo $row->order_status; ?></div></td>
<td><a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $row->id; ?>^<?php echo $row->name; ?>^<?php echo $row->email; ?>^<?php echo $row->address; ?>^<?php //echo $row->suburb; ?>^<?php echo $row->pin; ?>^<?php echo $row->phone; ?>^<?php //echo //$row->comments; ?>^<?php //echo $row->name_quantity; ?>^<?php// echo $row->price; ?>^<?php //echo $row->Transection_id; ?>^<?php //echo $row->Payment_date; ?>^<?php //echo $row->start_date; ?>^<?php //echo $row->end_date; ?>">view Order details</a></td>
</tr>
	<?php $i++; }
	?>

</table>
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
		<tr><th>Order Number</th><td class="order_name"></td></tr>
		<tr><th>Name of Person</th><td class="name"></td></tr>
		<tr><th>Email Address</th><td class="email_id"></td></tr>
		<tr><th>Address</th><td class="address"></td></tr>
		<tr><th>Suburb</th><td class="suburb"></td></tr>
		<tr><th>Postcode</th><td class="postcode"></td></tr>
		<tr><th>Phone Number</th><td class="phone"></td></tr>
		<tr><th>Comments</th><td class="comment"></td ></tr>
		<tr><th>Bins Order</th><td class="bins_order"></td></tr>
		<tr><th>Price</th><td class="Price"></td ></tr>
		<tr><th>Transection Id</th><td class="transection_id"></td ></tr>
		<tr><th>Order Date</th><td class="order_date"></td ></tr>
		<tr><th>Starting Date for Service</th><td class="start_date"></td ></tr>
		<tr><th>Ending Date for Service</th><td class="end_date"></td ></tr>
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
	jQuery('#exampleModal').on('show.bs.modal', function (event) {
  var button = jQuery(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever')
	var res=recipient.split('^') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = jQuery(this)
  modal.find('.modal-title').text('view detail of : Order Details')
  modal.find('.order_name').text(res[0])
  modal.find('.name').text(res[1])
  modal.find('.email_id').text(res[2])
  modal.find('.address').text(res[3])
  modal.find('.suburb').text(res[4])
  modal.find('.postcode').text(res[5])
  modal.find('.phone').text(res[6])
  modal.find('.comment').text(res[7])
  modal.find('.bins_order').text(res[8])
  modal.find('.Price').text("$ "+res[9])
  modal.find('.transection_id').text(res[10])
  modal.find('.order_date').text(res[11])
  modal.find('.start_date').text(res[12])
  modal.find('.end_date').text(res[13])
 
})
	</script>
<?php
  }
}