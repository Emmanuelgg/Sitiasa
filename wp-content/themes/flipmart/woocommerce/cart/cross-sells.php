<?php
/**
 * Cross-sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cross-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $cross_sells ) : ?>
    
    <div class="clearfix"></div>
	<section class="section featured-product">

		<h3 class="section-title"><?php _e( 'You may be interested in&hellip;', 'flipmart' ) ?></h3>
        
		<div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">

			<?php foreach ( $cross_sells as $cross_sell ) : ?>

				<?php
				 	$post_object = get_post( $cross_sell->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					wc_get_template_part( 'content-product-slider', 'v1' ); ?>

			<?php endforeach; ?>

		</div>

	</section>

<?php endif;

wp_reset_postdata();
