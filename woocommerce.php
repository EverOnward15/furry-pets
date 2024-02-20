<?php get_header(); ?>

<main class="container pt-5">
    <?php if ( is_singular( 'product' ) ) {
     woocommerce_content();
  }else{
   //For ANY product archive.
   //Product taxonomy, product search or /shop landing
    woocommerce_get_template( 'archive-product.php' );
  }
 ?>
</main>

<?php get_footer(); ?>