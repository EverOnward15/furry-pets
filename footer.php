<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Furry_Pets
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="bg-primary text-white py-5 footer-container">
			<div class="container">
				<div class="row d-flex text-center">
					<div class="col-md-2 menu-footer-col">
						<?php dynamic_sidebar("footer-widget-col-one");?>
					</div>
					<div class="col-md-2 menu-footer-col">
						<?php dynamic_sidebar("footer-widget-col-two");?>
					</div>
					<div class="col-md-4 menu-footer-col ms-md-auto ">
						<?php dynamic_sidebar("footer-widget-col-three");?>
					</div>
				</div>
			</div>
		</div>
		<div class="container py-2">
			<div class="row d-flex align-items-center">
				<div class="col md-d-block">
					<p>&copy; <?php bloginfo("name");?> <?php echo date	("Y");?> / Created by <a href="https://github.com/EverOnward15" target="_blank"> Prathamesh Bhoite! </a> 
				</div>
				<div class="col h-25 d-inline-block text-end">
					<img src="<?php echo get_template_directory_uri();?>/pics/payment-methods.png" class="img-fluid" loading="lazy" alt="...">
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
