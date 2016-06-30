<?php 

/* Template Name: contact
*/ 
get_header();
?>
<section class="contact-us">
<div class="container">
<div class="contact-heading">
<h1>CONTACT US</h1>
</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="contact">
				<div class="contact-left">
					<form role="form" class="contact-form ">
					
						<div class="form-group has-feedback">
						<span class="fa fa-user" aria-hidden="true"></span>
							<input type="name" class="form-control" id="contact-name"  placeholder="Your Name*">
						</div>
						
							<div class="form-group has-feedback">
							<span class="fa fa-envelope" aria-hidden="true"></span>
									<input type="email" class="form-control" id="contact-email" placeholder="Email*">
							</div>
							
							<div class="form-group has-feedback">
							<span class="fa fa-mobile" aria-hidden="true"></span>
									<input type="tel" class="form-control" id="contact-tel" placeholder="Phone Number">
							</div>
							
							<div class="form-group has-feedback">
							<span class="fa fa-map-marker" aria-hidden="true"></span>
							<textarea class="form-control address" placeholder="Address"></textarea>
							</div>
							
							<div class="form-group has-feedback">
							<span class="fa fa-envelope envelop2" aria-hidden="true"></span>
							<textarea class="form-control comments" placeholder="Describe Your Request"></textarea>
							</div>
							
							
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">

									</div>
								</div>
					</form>	
					
				</div>
			
			
				<div class="contact-right">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/about-right-img.png">
				</div>
			</div>
				<button type="submit" class="submit-contact-btn">SUBMIT</button>
		</div>
	</div>
	</div>
</section>

<?php
get_footer();?>