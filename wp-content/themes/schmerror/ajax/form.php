<?php
include('../../../../wp-config.php');
?>
<?php

$name    = $_GET['name'];
$email   = $_GET['email'];
$post_id = $_GET['post_id'];
$phone   = $_GET['phone'];
$address = $_GET['address'];
$country = $_GET['country'];
$state   = $_GET['state'];
$city    = $_GET['city'];
$pin     = $_GET['pin'];
$price   = get_field('price',$post_id);
//echo $price;
$date = date("Y-m-d");
global $wpdb;
$table = $wpdb->prefix."formdata";
$wpdb->insert( $table, 
    array( 
        'name'      => $name, 
        'post_id'   => $post_id, 
        'email'  	=> $email,
        'phone'     => $phone,
		'address'   => $address,
        'country'   => $country,
		 'state'    => $state,
		 'city'     => $city,
		 'amount'   => $price,
		 'state'    => $state,
		 'orderdate'=> $date,
		 'status'   => 0,
		 'pin'      => $pin
    )
  );
$query = 'SELECT id FROM im_formdata';
$rows = $wpdb -> get_results($query);
foreach ($rows as $key=> $value) {
	$id = $value->id;
	//echo $id;
}
// $_SESSION['post_id']=$id;
// $usersession=$_SESSION['post_id'];
// echo $usersession;
?>