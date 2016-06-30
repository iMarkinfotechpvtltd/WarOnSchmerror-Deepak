<?php 

/* Template Name: home
*/ 
get_header();
?>
 <section>
	<div class="about">
		<div class="container" id="container2">
			<div class="about-left">
				<h1><?php the_field('about_author_title',4)?></h1>
				
				<?php the_field('about_author_content',4)?>
				
				<button type="submit" class="about-read-button"><?php the_field('read_more_button',4)?></button>
			</div>
			
		
				<div class="about-right">
				<?php
					the_post_thumbnail();
				?>
				</div>
			
		</div>
	</div>
  </section>
  
 <section>
<div class="subscribe">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1" >
			<div class="subscribe-form">
				<h1>Subscribe to the Newsletter</h1>
		
					<form class="form-inline" role="form">
						<div class="form-group">
							<label for="Name"></label>
							<input type="name" class="form-control" id="form1" placeholder="Your First Name">
						</div>
			
						<div class="form-group" id="form2">
							<label for="email"></label>
							<input type="email" class="form-control" id="form1" placeholder="Your Email ID">
						</div>

						<button type="submit" class="submit-btn">SUBMIT</button>
					</form>
			</div>
		</div>
	</div>
</div>
</div>
	</div>
  </section>
<?php
get_footer();
?>