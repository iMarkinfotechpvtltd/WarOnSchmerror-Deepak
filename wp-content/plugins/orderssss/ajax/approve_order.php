<?php 
include('../../../../wp-config.php');
global $wpdb;
$order_id = $_POST['order_id'];
$query="UPDATE `northsid_order` SET `admin_approved` = '1'   WHERE `order_id`= $order_id";
$query1="UPDATE `northsid_order` SET `order_status` = 'Success'   WHERE `order_id`= $order_id";
$wpdb->query($query);
$wpdb->query($query1);
echo "1";