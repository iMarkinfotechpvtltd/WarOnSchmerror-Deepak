<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<footer >
<div class="container">
	<div class="copyright">
		<p>Copyrights &copy  <?php echo date("Y"); ?> by Raymond MacDonald</p>   <p class="line">I</p>    <p class="p2">All rights reserved.</p>
		
		<div class="powered-by"><p>Powered By: <a href="http://www.imarkinfotech.com/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Imark-Powered-By.svg"></a></p></div>
	</div>
	
</div>
	
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
	<?php wp_footer();?>
  </body>
</html>