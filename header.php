<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Furry_Pets
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'furry-pets' ); ?></a>

	<div class="announcement-bar pt-2 pb-2">
		<div class="container">
			<div class="row">
				<div class="col-md-4 d-flex justify-content-md-start justify-content-center">
					<ul class="announcement-bar__list">
						<li>
							<i class="bi bi-telephone rounded-circle"></i>
							<a class="text-decoration-none" href="tel: 09822229818">Phone</a>
						</li>
						<li>
							<i class="bi bi-envelope rounded-circle"></i>
							<a class="text-decoration-none" href="mailto:leiste15@gmail.com">Email</a>
						</li>
					</ul>
				</div>
				<div class="col-md-8 d-flex justify-content-md-end ">
					<ul class="announcement-bar__list">
							<li>
								<i class="bi bi-truck rounded-circle"></i>FREE Shipping
							</li>
							<li>
								<i class="bi bi-clock-history rounded-circle"></i>30-Day Money Back Guarantee
							</li>
							<li>
								<i class="bi bi-person rounded-circle"></i>24/7 Customer Support
							</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<header id="masthead" class="site-header">
		<div class="container ">
			<div class="row align-items-center">
				<div class="col site-header__logo">
					<?php the_custom_logo() ?>
				</div>
				<div class="col-md-5">
					<?php aws_get_search_form( true ); ?>
				</div>
				<div class="col text-center py-2 cart d-md-flex justify-content-end align-items-center">
					<a href="<?php echo wc_get_cart_url(); ?>">	<i class="bi bi-bag-dash p-1"></i></a>
					<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
				</div>
			</div>
		</div>

	<!-- <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$furry_pets_description = get_bloginfo( 'description', 'display' );
			if ( $furry_pets_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $furry_pets_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>.site-branding -->

		<nav id="site-navigation" class="main-navigation bg-primary ">
			<div class="container d-flex justify-content-center">
				<div class="row">
					<div class="col-12 justify-content-center d-flex">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<i class="bi bi-list d-md-none"></i>
							<?php esc_html_e( 'Primary Menu', 'furry-pets' ); ?>
						</button>
					</div>
					<div class="col-12"></div>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</div>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
