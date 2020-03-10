<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<a class="CollectionGrid-tile hover-overlay-light" href="<?php the_permalink(); ?>">
   <div class="CollectionGrid-tileImage align-center">
      <?php
    	/**
    	 * woocommerce_before_subcategory_title hook.
    	 *
    	 * @hooked woocommerce_subcategory_thumbnail - 10
    	 */
    	do_action( 'woocommerce_before_subcategory_title', $category );
        ?>
   </div>
   <div class="CollectionGrid-tileName js-dotdotdot">
      <?php echo esc_html( $category->name ); ?>
   </div>
</a>