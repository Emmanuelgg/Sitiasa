<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

?>
<div <?php wc_product_class( 'item', $product ); ?>>
    <div class="product-image flash-tag">
        <?php
    	/**
    	 * woocommerce_before_shop_loop_item_title hook.
    	 *
    	 * @hooked woocommerce_show_product_loop_sale_flash - 10
    	 * @hooked woocommerce_template_loop_product_thumbnail - 10
    	 */
         woocommerce_show_product_loop_sale_flash();
    	do_action( 'woocommerce_before_shop_loop_item_title' ); 
        ?>
    </div>
    <div class="product-shop">
      <h2 class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php woocommerce_template_loop_rating(); ?>
      <div class="desc std">
          <p><?php the_excerpt(); ?> <a class="link-learn" title="" href="<?php the_permalink(); ?>"><?php _e( 'Learn More', 'flipmart' ); ?></a> </p>
      </div>
      <div class="price-box">
            <?php woocommerce_template_loop_price(); ?>
      </div>
      <div class="actions">
        <?php 
            //Add To Cart
            echo apply_filters( 'woocommerce_loop_add_to_cart_link',
            	sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="button btn-cart ajx-cart %s"><span>%s</span></a>',
            		esc_url( $product->add_to_cart_url() ),
            		esc_attr( isset( $quantity ) ? $quantity : 1 ),
            		esc_attr( $product->get_id() ),
            		esc_attr( $product->get_sku() ),
            		esc_attr( isset( $class ) ? $class : 'button' ),
                    esc_html__( 'Add to cart', 'flipmart' )
            	),  
            $product );
            
            //Wishlist Shortcode
            if ( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) || shortcode_exists( 'yith_compare_button' ) ) {
                
                //Wrapper
                echo '<span class="add-to-links"><ul>';
                    
                    //Wishlist
                    if ( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) ) {
                        echo do_shortcode( '[yith_wcwl_add_to_wishlist]' );
                    }
                
                //Wrapper End
                echo '</ul></span>';
            }
        ?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>