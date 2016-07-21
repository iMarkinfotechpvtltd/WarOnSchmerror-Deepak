<?php 

/* Template Name: success
*/ 
get_header();
?>

<?php
session_start();
$query = 'SELECT id FROM im_formdata';
$rows = $wpdb -> get_results($query);
foreach ($rows as $key=> $value) {
	$id = $value->id;
	//echo $id;
}
$_SESSION['post_id']=$id;
$usersession=$_SESSION['post_id'];
//echo $usersession;
$sql = "SELECT * FROM im_formdata WHERE id = '$usersession'";
$result = $wpdb->get_results($sql) or die(mysql_error());
foreach($result as $results)
{
	$post_id = $results->post_id;
	$name    = $results->name;
	$email   = $results->email;
	$phone   = $results->phone;
?>
	<div><?php echo $post_id;?></div>
	<div><?php echo $name;?></div>
	<div><?php echo $email;?></div>
	<div><?php echo $phone;?></div>
	
<?php
}
$table_name = $wpdb->prefix . 'formdata';
   $wpdb->query("UPDATE $table_name SET status='1' WHERE id = '$usersession'");
if($post_id==61)
{
	$headers = 'From: My Name <myname@mydomain.com>' . "\r\n";
	$to=array($email,
	'admin@123.com'
	);
	$subject = 'The subject';
	$body = 'The email body content';
	wp_mail( $to, $subject, $headers, $body );
}
else
{
	$headers = 'From: My Name <myname@mydomain.com>' . "\r\n";
	$mail_attachment = array(WP_CONTENT_DIR . '/themes/schmerror/pdf/schmerror.pdf'); 
	$to=array($email,
	'admin@123.com'
	);
	$subject = 'The subject';
	$body = 'The email body content';
	wp_mail( $to, $subject, $body, $headers, $mail_attachment );
}
?>
<?php
get_footer();
?>