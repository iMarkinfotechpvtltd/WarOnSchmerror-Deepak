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
$date = date('j F Y');
foreach($result as $results)
{
	$post_id = $results->post_id;
	$name    = $results->name;
	$email   = $results->email;
	$phone   = $results->phone;
	$address = $results->address;
	$city    = $results->city;
	$state   = $results->state;
	$pin     = $results->pin;
	$price   = $results->amount;
?>
	<div><?php echo $post_id;?></div>
	<div><?php echo $name;?></div>
	<div><?php echo $email;?></div>
	<div><?php echo $phone;?></div>
	
<?php
}
echo $date;
$table_name = $wpdb->prefix . 'formdata';
   $wpdb->query("UPDATE $table_name SET status='1' WHERE id = '$usersession'");
if($post_id==61)
{
	//to client
	$headers = 'From: My Name <myname@mydomain.com>' . "\r\n";
	$to=$email;
	$subject = 'The subject';
	$body = '<table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="border:1px solid">
			<tr>
				<td>
					<table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="border:0px solid #ccc; margin-top:0px;">
						<!-- -->
						<tr align="center" >
							<td style="font-family:arial;  "><strong>
							New customer details
							</strong></td>
						</tr><!-- -->
					</table>
					<table cellspacing="0" border="0" align="center" cellpadding="10" width="90%" style="border:0px solid">
						<tr>
						<td><h3>Hello, '.$name.'</h3></td>
						</tr>
						<tr>
						<td><h3>Order Details<h3></td>
						</tr>
						<tr>
							<td>
								<table cellspacing="0" border="0" cellpadding="0" width="100%">
									
									<tr>
										<td align="right" height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-top:1px solid #efefef;  border-bottom:1px solid #efefef; border-right:1px solid #efefef; border-left:1px solid #efefef;padding-top:8px;  padding-bottom:8px;  padding-left:8px;   padding-right:8px;"><strong>Order Number :</strong></td>
										<td  height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; padding:8px;">'.$post_id.'</td>
									</tr>
									<tr>
										<td align="right" height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-top:1px solid #efefef;  border-bottom:1px solid #efefef; border-right:1px solid #efefef; border-left:1px solid #efefef;padding-top:8px;  padding-bottom:8px;  padding-left:8px;   padding-right:8px;"><strong>Price :</strong></td>
										<td  height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; padding:8px;">$'.$price.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Name :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$name.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Email :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$email.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Phone Number :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'. $phone.'</td>
									</tr>
									
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> Address</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'.$address.'</td>
									</tr>
									
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> State :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;"> '.$state.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> city :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'.$city.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> Pin :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'.$pin.'</td>
									</tr>
									
								</table>
							</td>
							<td width="30"></td> 
						</tr>
					</table>
					<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%" style="border:0px solid #efefef; margin-top:20px; padding:0px;">
						<tr>
							<td align="center" style="font-family:PT Sans,sans-serif; font-size:13px; padding:15px 0; border-top:1px solid;"> 
							<b></b></strong></td> 
						</tr>
					</table>
				</td>   
			</tr>
		</table>
<style>
    td{width:100%;}

</style>';
	wp_mail( $to, $subject, $headers, $body );
	
	//to publisher
	$headers = 'From: My Name <myname@mydomain.com>' . "\r\n";
	$to='publish@gmail.com';
	$subject = 'The subject';
	$body = '<table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="border:1px solid">
			<tr>
				<td>
					<table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="border:0px solid #ccc; margin-top:0px;">
						<!-- -->
						<tr align="center" >
							<td style="font-family:arial;  "><strong>
							Thanks for your order
							</strong></td>
						</tr><!-- -->
					</table>
					<table cellspacing="0" border="0" align="center" cellpadding="10" width="90%" style="border:0px solid">
						<tr>
						<td><h3>Hello,   Admin</h3></td>
						</tr>
						<tr>
						<td><h3>Customer Details<h3></td>
						</tr>
						<tr>
							<td>
								<table cellspacing="0" border="0" cellpadding="0" width="100%">
									
									<tr>
										<td align="right" height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-top:1px solid #efefef;  border-bottom:1px solid #efefef; border-right:1px solid #efefef; border-left:1px solid #efefef;padding-top:8px;  padding-bottom:8px;  padding-left:8px;   padding-right:8px;"><strong>Order Number :</strong></td>
										<td  height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; padding:8px;">'.$post_id.' ('.$date.')</td>
									</tr>
									<tr>
										<td align="right" height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-top:1px solid #efefef;  border-bottom:1px solid #efefef; border-right:1px solid #efefef; border-left:1px solid #efefef;padding-top:8px;  padding-bottom:8px;  padding-left:8px;   padding-right:8px;"><strong>Price :</strong></td>
										<td  height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; padding:8px;">$'.$price.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Name :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$name.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Email :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$email.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Phone Number :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'. $phone.'</td>
									</tr>
									
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> Address</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'.$address.'</td>
									</tr>
									
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> State :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;"> '.$state.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> city :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'.$city.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> Pin :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'.$pin.'</td>
									</tr>
									
								</table>
							</td>
							<td width="30"></td> 
						</tr>
					</table>
					<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%" style="border:0px solid #efefef; margin-top:20px; padding:0px;">
						<tr>
							<td align="center" style="font-family:PT Sans,sans-serif; font-size:13px; padding:15px 0; border-top:1px solid;"> 
							<b></b></strong></td> 
						</tr>
					</table>
				</td>   
			</tr>
		</table>
<style>
    td{width:100%;}

</style>';
	wp_mail( $to, $subject, $headers, $body );
	
}
else
{
	// to user
	$headers = 'From: My Name <myname@mydomain.com>' . "\r\n";
	$mail_attachment = array(WP_CONTENT_DIR . '/themes/schmerror/pdf/schmerror.pdf'); 
	$to=$email;
	$subject = 'The subject';
	$body = '

<table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="border:1px solid">
			<tr>
				<td>
					<table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="border:0px solid #ccc; margin-top:0px;">
						<!-- -->
						<tr align="center" >
							<td style="font-family:arial;  "><strong>
							Thanks for your order
							</strong></td>
						</tr><!-- -->
					</table>
					<table cellspacing="0" border="0" align="center" cellpadding="10" width="90%" style="border:0px solid">
						<tr>
						<td><h3>Hello, '.$name.'</h3></td>
						</tr>
						<tr>
						<td><h3>Order Details<h3></td>
						</tr>
						<tr>
							<td>
								<table cellspacing="0" border="0" cellpadding="0" width="100%">
									
									<tr>
										<td align="right" height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-top:1px solid #efefef;  border-bottom:1px solid #efefef; border-right:1px solid #efefef; border-left:1px solid #efefef;padding-top:8px;  padding-bottom:8px;  padding-left:8px;   padding-right:8px;"><strong>Order Number :</strong></td>
										<td  height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; padding:8px;">'.$post_id.'</td>
									</tr>
									<tr>
										<td align="right" height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-top:1px solid #efefef;  border-bottom:1px solid #efefef; border-right:1px solid #efefef; border-left:1px solid #efefef;padding-top:8px;  padding-bottom:8px;  padding-left:8px;   padding-right:8px;"><strong>Price :</strong></td>
										<td  height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; padding:8px;">$'.$price.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Name :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$name.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Email :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$email.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Phone Number :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'. $phone.'</td>
									</tr>
									
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> Address</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'.$address.'</td>
									</tr>
									
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> State :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;"> '.$state.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> city :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'.$city.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> Pin :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'.$pin.'</td>
									</tr>
									
								</table>
							</td>
							<td width="30"></td> 
						</tr>
					</table>
					<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%" style="border:0px solid #efefef; margin-top:20px; padding:0px;">
						<tr>
							<td align="center" style="font-family:PT Sans,sans-serif; font-size:13px; padding:15px 0; border-top:1px solid;"> 
							<b></b></strong></td> 
						</tr>
					</table>
				</td>   
			</tr>
		</table>
<style>
    td{width:100%;}

</style>';
	wp_mail( $to, $subject, $body, $headers, $mail_attachment );
	
	//to admin
	$headers = 'From: My Name <myname@mydomain.com>' . "\r\n";
	$mail_attachment = array(WP_CONTENT_DIR . '/themes/schmerror/pdf/schmerror.pdf'); 
	$to='admin@gmail.com';
	$subject = 'The subject';
	$body = '<table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="border:1px solid">
			<tr>
				<td>
					<table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="border:0px solid #ccc; margin-top:0px;">
						<!-- -->
						<tr align="center" >
							<td style="font-family:arial;  "><strong>
							New customer details
							</strong></td>
						</tr><!-- -->
					</table>
					<table cellspacing="0" border="0" align="center" cellpadding="10" width="90%" style="border:0px solid">
						<tr>
						<td><h3>Hello, Admin</h3></td>
						</tr>
						<tr>
						<td><h3>Customer Details<h3></td>
						</tr>
						<tr>
							<td>
								<table cellspacing="0" border="0" cellpadding="0" width="100%">
									
									<tr>
										<td align="right" height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-top:1px solid #efefef;  border-bottom:1px solid #efefef; border-right:1px solid #efefef; border-left:1px solid #efefef;padding-top:8px;  padding-bottom:8px;  padding-left:8px;   padding-right:8px;"><strong>Order Number :</strong></td>
										<td  height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; padding:8px;">'.$post_id.' ('.$date.')</td>
									</tr>
									<tr>
										<td align="right" height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-top:1px solid #efefef;  border-bottom:1px solid #efefef; border-right:1px solid #efefef; border-left:1px solid #efefef;padding-top:8px;  padding-bottom:8px;  padding-left:8px;   padding-right:8px;"><strong>Price :</strong></td>
										<td  height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; padding:8px;">$'.$price.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Name :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$name.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Email :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$email.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Phone Number :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'. $phone.'</td>
									</tr>
									
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> Address</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'.$address.'</td>
									</tr>
									
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> State :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;"> '.$state.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> city :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'.$city.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> Pin :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'.$pin.'</td>
									</tr>
									
								</table>
							</td>
							<td width="30"></td> 
						</tr>
					</table>
					<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%" style="border:0px solid #efefef; margin-top:20px; padding:0px;">
						<tr>
							<td align="center" style="font-family:PT Sans,sans-serif; font-size:13px; padding:15px 0; border-top:1px solid;"> 
							<b></b></strong></td> 
						</tr>
					</table>
				</td>   
			</tr>
		</table>
<style>
    td{width:100%;}

</style>';
	wp_mail( $to, $subject, $body, $headers, $mail_attachment );
}
?>
<?php
get_footer();
?>