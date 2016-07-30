<?php 

/* Template Name: products
*/ 
get_header();
?>
<div class="products">
<div class="container">
	<div class="row">
 <?php
		$args = array('post_type' => 'books',
		'posts_per_page' => -1);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
?>

		<div class="col-lg-6 col-md-6 col-sm-6">
            <div class="product-item">
				<?php $id = get_the_ID();?>
		<div class="title"><?php if($id==63){
		?><img class="img-responsive pdf" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pdf.png"><?php } else {?>
		<img class="img-responsive book" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/book.png"><?php }?><?php the_title();?></div>
		<div class="product-images"><?php the_post_thumbnail();?></div>
		<div class="price"><p>Price $ <?php the_field('price',$post->ID);?></p></div>
		<div><?php //the_field('pdf_book',$loop->ID);?></div>
        <div class="product-btn">
		<input type="hidden" value="<?php the_field('price',$post->ID);?>" class="price_section">
		<button class="view-thesis-btn demo_<?php echo $post->ID; ?>" id="demo_<?php echo $post->ID; ?>" onclick="show_check(this.id);" >Buy Now</button></div></div>
		</div> 

<?php
		endwhile;
?>
	</div>
</div>
    </div>
<!-- Button trigger modal -->
<!-- Modal -->
<form id="final_payment_paypal" name="final_payment_paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="business" value="pankaj95.paypal@gmail.com">
	<input type="hidden" name="cmd" value="_xclick">
	<input type="hidden" name="item_name" value="paypal item">
	<input type="hidden" name="amount" value="90">
	<input type="hidden" name="no_shipping" value="1">
	<input type="hidden" name="handling" value="0">
	<input type="hidden" name="currency_code" value="USD">
	<input type="hidden" name="email_paypal" value="">
	<input type="hidden" name="name_paypal" value="">
	<input type="hidden" name="delivery_paypal" value="">
	<input type="hidden" name="pickup_paypal" value="">
	<input type="hidden" name="address_paypal" value="">
	<input type="hidden" name="selected_suburb_paypal" value="">
	<input type="hidden" name="phoneee_paypal" value="">
	<input type="hidden" name="zip_paypal" value="">
	<input type="hidden" name="cancel_return" value="http://schmerror.stagingdevsite.com/dev/cancel/">
	<input type="hidden" name="return" value="http://schmerror.stagingdevsite.com/dev/success/">
	<input type="submit" name="submit" id="final_click" class="newBtn" value="Continue with paypal" style="display:none;">
</form>
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form id="signupForm" class="form-horizontal" role="form">
				 <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Name</label>
                    <div class="col-sm-10">
					<input type="hidden" class="selected_product" value="" name="post_id">
                        <input type="text" class="form-control" 
                        id="name" name="name" placeholder="Name"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" 
                        id="email" name="email"  placeholder="Email"/>
                    </div>
                  </div>
				  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        id="phone" name="phone"  placeholder="Phone"/>
                    </div>
                  </div>
				   <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        id="address" name="address" placeholder="Address"/>
                    </div>
                  </div>
			 <div class="form-group">
				 <label  class="col-sm-2 control-label"
								  for="inputEmail3">Country</label>
				<div class="col-sm-10">
					<select name="country" class="countries" id="country">
						<option value="">Select Country</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				 <label  class="col-sm-2 control-label"
								  for="inputEmail3">State</label>
				<div class="col-sm-10">
					<select name="state" class="states" id="state">
						<option value="">Select State</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				 <label  class="col-sm-2 control-label"
								  for="inputEmail3">City</label>
				<div class="col-sm-10">
					<select name="city" class="cities" id="city">
						<option value="">Select City</option>
					</select>
				</div>
			</div>

                  <!--<div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Country</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            id="country" name="country" placeholder="Country"/>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >State</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            id="state" name="state" placeholder="State"/>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >City</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            id="city" name="city" placeholder="City"/>
                    </div>
                  </div>-->
				  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Pin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            id="pin" name="pin" placeholder="Pin Code"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">PAY NOW</button>
                    </div>
                  </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
         
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->

<script>
// jQuery(document).ready(function(){
		// var prc = jQuery('.price_section').val();
		// alert(prc);
// });
function show_check(event)
{
	var string_try = event.split('demo_');
	var post_id = string_try[1];
	jQuery(".selected_product").val(post_id);
	jQuery("#myModalHorizontal").modal('show');
	
}
jQuery(function($) { 
	 jQuery('#signupForm').validate({
		 
			rules: {
				name: {
					required: true
				},
			   email: {
					required: true,
					email: true
				},
				phone: {
					required: true,
				    maxlength: 20	
				},
				address: {
					required: true
				},
                country: {
					required: true
				},
				state: {
					required: true
				},
				city: {
					required: true
				},
				pin: {
					required: true
				},
			},
		messages: {
				
				name: "Please enter a name",
				email: "Please enter email",
				phone: "Please enter correct phone number",
				country: "Please enter country",
				state: "Please enter state",
				city: "Please enter city",
				pin: "Please enter pin",
			},
	submitHandler: function(form) {
		jQuery(form).ajaxSubmit({
			type:"GET",
			url:"<?php bloginfo('template_url'); ?>/ajax/form.php",
			data:jQuery(form).serialize(),
			//price:price,
			success: function(data)
			{
				//alert(data);
				var post_id_final = jQuery(".selected_product").val();
				//alert(post_id_final);
				if(post_id_final==61)
				{
					//alert("aaaaaaaaaaaaaaaaaaa");
					jQuery("input[name='business']").val("<?php the_field('paypal_account_email_publisher',70)?>");
					var price = jQuery(".demo_"+post_id_final).siblings("input[type='hidden']").val();
					//alert (price);
					jQuery("input[name='amount']").val(price);
					 jQuery("#final_click").click();
				}
				else
				{
					//alert("bbbbbbbbbbbbbbbb");
					jQuery("input[name='business']").val("<?php the_field('paypal_account_email_vendor',70)?>");
					var price = jQuery(".demo_"+post_id_final).siblings("input[type='hidden']").val();
					//alert (price);
					jQuery("input[name='amount']").val(price);
					 jQuery("#final_click").click();
				}
			}
	 });
	}
	});
	});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://lab.iamrohit.in/js/location.js"></script>
					

<?php
get_footer();
?>