<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//Animation
$yog_animation = yog_helper()->get_option( 'product-related-animation', 'raw', false, 'options' );
$yog_delay     = yog_helper()->get_option( 'product-related-delay', 'raw', false, 'options' );
$yog_output  = '';
if ( $related_products ) : ?>

	<section <?php yog_helper()->attr( 'post', array( 'class' => 'section featured-product', 'data-animation' => $yog_animation, 'data-animation-delay' => $yog_delay, 'id' => false ) ); ?>>

		<h3 class="section-title"><?php esc_html_e( 'Related products', 'flipmart' ); ?></h3>

		<div class="owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">

			<?php foreach ( $related_products as $related_product ) : ?>

				<?php
				 	$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					wc_get_template_part( 'content-product-slider', 'v1' ); 

			 endforeach; ?>

		</div>
        
	</section>
<?php endif;

wp_reset_postdata();
