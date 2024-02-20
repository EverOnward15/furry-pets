<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Furry_Pets
 */

get_header();
?>

	<main id="primary" class="site-main">
       
		<section class="container pt-md-5 pt-4">
			<div id="carouselExampleIndicators" class="carousel slide overflow-hidden rounded-3">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
					<img src="<?php echo get_template_directory_uri();?>/pics/carousel/slide-1@2x.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri();?>/pics/carousel/slide-2@2x.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>

		<section class="container">
			<h1 class="text-center pt-5">Popular Products</h1>
			<p class="text-center">We offer a number of high quality toys to keep <br> your pets healthy and spoiled!</p>
			<div class="pt-5 pb-5">
				<?php echo do_shortcode( '[products recent_products columns=4 limit=4]'); ?>
			</div>
		</section>

		<section class="categories pt-5 pb-5">
			<div class="container">
				<h1 class="text-center pt-5">Categories</h1>
				<p class="text-center">We offer a number of high quality toys to keep <br> your pets healthy and spoiled!</p>
				<div class="row pt-5">
					<div class="categories__col col-md-4 col-12 mb-3">
						<a href="https://furrypets.great-site.net//toys/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">̵
							<img class="position-absolute bottom-0 top-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/pics/categories/toys.jpg" alt="..." loading="lazy">
							<h2 class="category-heading position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center text-white">Toys</h2>
						</a>
					</div>
					<div class="categories__col col-md-4 col-12 mb-3">
						<a href="https://furrypets.great-site.net//food/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<img class="position-absolute bottom-0 top-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/pics/categories/food.jpg" alt="..." loading="lazy">
							<h2 class="category-heading position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center text-white">Food</h2>
						</a>
					</div>
					<div class="categories__col col-md-4 col-12 mb-3">
						<a href="https://furrypets.great-site.net//toys-2/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<img class="position-absolute bottom-0 top-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/pics/categories/care.jpg" alt="..." loading="lazy">
							<h2 class="category-heading position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center text-white">Care</h2>
						</a>
					</div>
				</div>
				<div class="row mb-3">
					<div class="categories__col col-md-4 col-12 mb-3">
						<a href="https://furrypets.great-site.net//accessories/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<img class="position-absolute bottom-0 top-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/pics/categories/accessories.jpg" alt="..." loading="lazy">
							<h2 class="category-heading position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center text-white">Accessories</h2>
						</a>
					</div>
					<div class="categories__col col-md-8 col-12 mb-3">
						<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<div class="position-absolute bottom-0 top-0 end-0 start-0 z-1 special-offers-background"></div>
							<img class="special-offers-picture position-absolute bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/pics/categories/special-offers.jpg" alt="..." loading="lazy">
							<h2 class="special-offers position-absolute text-center start-0 end-0 text-white">Special Offers</h2>
							<p class="special-offers-text position-absolute text-center start-0 end-0 text-white">UP TO 40% OFF</p>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="container">
			<h1 class="text-center pt-5">Special Offers</h1>
			<p class="text-center">We offer a number of high quality toys to keep <br> your pets healthy and spoiled!</p>
			<div class="pt-5 pb-5">
				<?php echo do_shortcode( '[sale_products columns=4 limit=4]'); ?>
			</div>
		</section>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
