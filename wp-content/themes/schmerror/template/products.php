<?php 

/* Template Name: products
*/ 
get_header();
?>
 <?php
		$args = array('post_type' => 'books',
		'posts_per_page' => -1);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
?>
		<div><?php the_title();?></div>
		<div><?php the_post_thumbnail();?></div>
		<div>Price<?php the_field('price',$post->ID);?></div>
		<div><?php //the_field('pdf_book',$loop->ID);?></div>
		<input type="hidden" value="<?php the_field('price',$post->ID);?>" class="price_section">
		<button class="view-thesis-btn" id="demo_<?php echo $post->ID; ?>" onclick="show_check(this.id);" >Buy Now</button>
<?php
		endwhile;
?>
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
                    Form
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
                  </div>
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
                      <button type="submit" class="btn btn-default">Sign in</button>
                    </div>
                  </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
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
			success: function(data)
			{
				//alert(data);
				var post_id_final = jQuery(".selected_product").val();
				if(post_id_final==61)
				{
					jQuery("input[name='business']").val("ramit@imarkinfotech.com");
					var price = jQuery("#demo_"+post_id_final).siblings("input[type='hidden']").val();
					//alert (price);
					jQuery("input[name='amount']").val(price);
					jQuery("#final_click").click();
				}
				else
				{
					jQuery("input[name='business']").val("pankaj95.paypal@gmail.com");
					var price = jQuery("#demo_"+post_id_final).siblings("input[type='hidden']").val();
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

					

<?php
get_footer();
?>