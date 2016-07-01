<?php 

/* Template Name: description
*/ 
get_header();
?>
<section class="the-war">
	<div class="container">
		<div class="the-war-heading">
			<h1><?php the_field('the_page_title',6)?></h1>
		</div>
			
			<div class="thesis">
				<div class="thesis-left">
					<?php the_post_thumbnail();?>
				
				</div>
				
				
				<div class="thesis-right">
					<div class="thesis-right-inner">
						<h2><?php the_field('the_thesis_title',6)?></h2>
						
						<p><?php the_field('thesis_content',6)?></p>
						
						<button type="submit" class="view-thesis-btn">VIEW PDF</button>
					</div>
				</div>
			</div>
	</div>
</section>	
<?php
get_footer();?>