<?php 

/* Template Name: flip book
*/
get_header();
?>
<html>
	<body>
		<object data="<?php echo get_template_directory_uri();?>/pdf/schmerror.pdf#page=1" type="application/pdf" width="100%" 	height="500px">
			<p><b>Example fallback content</b>: This browser does not support PDFs. Please download the PDF to view it: <a href		="<?php echo get_template_directory_uri();?>/pdf/schmerror.pdf">Download PDF</a>.
			</p>
		</object>
	</body>
</html>
<?php
get_footer();?>