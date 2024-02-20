<?php
/**
 * Furry Pets functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Furry_Pets
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function furry_pets_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Furry Pets, use a find and replace
		* to change 'furry-pets' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'furry-pets', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'furry-pets' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'furry_pets_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'furry_pets_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function furry_pets_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'furry_pets_content_width', 640 );
}
add_action( 'after_setup_theme', 'furry_pets_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function furry_pets_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'furry-pets' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'furry-pets' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'furry_pets_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function furry_pets_scripts() {
	wp_enqueue_style( 'furry-pets-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'furry-pets-main', get_template_directory_uri() . '/css/main.css' );
	
	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css' );
	wp_style_add_data( 'furry-pets-style', 'rtl', 'replace' );

	wp_enqueue_script( 'furry-pets-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-popper',  'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-script',  'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js', array('jquery') );
	wp_enqueue_script( 'furry-pets-script', get_template_directory_uri() . '/js/script.js', array('jquery'));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'furry_pets_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Custom Fonts
 */
function enqueue_custom_fonts() {
	if (!is_admin()) {
		wp_register_style('source_sans_pro', 'https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,400;0,600;0,700;1,400&display=swap');
		wp_register_style('nunito', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap');
		
		wp_enqueue_style('source_sans_pro', '');
		wp_enqueue_style('nunito', '');
		}
	}
	add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');


	/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}

// Footer Widget 1
function custom_footer_widget_one() {
	$args = array(
		"id" 			=> "footer-widget-col-one",
		"name"			=> __("Footer Column One","text_domain"),
		"description"	=> __("Column One","text_domain"),
		"before_title"	=> '<h3 class="footer-title">',
		"after_title"	=> '</h3>',
		"before_widget"	=> '<div id="%1$s" class="widget %2$s">',
		"after_widget" 	=> '</div>'
	);
	register_sidebar($args);
}
add_action('widgets_init','custom_footer_widget_one');

// Footer Widget 2
function custom_footer_widget_two() {
	$args = array(
		"id" 			=> "footer-widget-col-two",
		"name"			=> __("Footer Column Two","text_domain"),
		"description"	=> __("Column Two","text_domain"),
		"before_title"	=> '<h3 class="footer-title-2">',
		"after_title"	=> '</h3>',
		"before_widget"	=> '<div id="%1$s" class="widget %2$s">',
		"after_widget" 	=> '</div>'
	);
	register_sidebar($args);
}
add_action('widgets_init','custom_footer_widget_two');

// Footer Widget 3
function custom_footer_widget_three() {
	$args = array(
		"id" 			=> "footer-widget-col-three",
		"name"			=> __("Footer Column Three","text_domain"),
		"description"	=> __("Column Three","text_domain"),
		"before_title"	=> '<h3 class="footer-title-3">',
		"after_title"	=> '</h3>',
		"before_widget"	=> '<div id="%1$s" class="widget %2$s">',
		"after_widget" 	=> '</div>'
	);
	register_sidebar($args);
}
add_action('widgets_init','custom_footer_widget_three');

//Woocommerce theme page support 

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

//Remove Woocommerce default styling
function remove_woocommerce_styles($enqueue_styles) {
	//unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	//unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	//unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}
add_filter	('woocommerce_enqueue_styles','remove_woocommerce_styles');

//Add custom Woocommerce styling
function wp_enqueue_woocommerce_style(){
	wp_register_style( 'mytheme-woocommerce', get_template_directory_uri() . '/css/woocommerce/woocommerce.css' );
	
	if ( class_exists( 'woocommerce' ) ) {
		wp_enqueue_style( 'mytheme-woocommerce' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );