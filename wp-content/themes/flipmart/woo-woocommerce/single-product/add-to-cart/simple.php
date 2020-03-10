<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.

if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
    
    <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
        <div class="add-to-box">
           <div class="add-to-cart">
              <div class="pull-left">
                 <div class="custom pull-left">
                    <?php
            			/**
            			 * @since 2.2.0.
            			 */
            			do_action( 'woocommerce_before_add_to_cart_button' );
            
            			/**
            			 * @since 3.0.0.
            			 */
            			do_action( 'woocommerce_before_add_to_cart_quantity' );
            
            			woocommerce_quantity_input( array(
            				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
            				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
            				'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : $product->get_min_purchase_quantity(),
            			) );
            
            			/**
            			 * @since 3.0.0.
            			 */
            			do_action( 'woocommerce_after_add_to_cart_quantity' );
            		?>
                 </div>
              </div>
              <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button btn-cart alt"><span> <?php echo esc_html( $product->single_add_to_cart_text() ); ?></span></button>
           </div>
           <div class="email-addto-box">
              <p class="email-friend"><a href="mailto:?subject=<?php echo urlencode( get_the_title() )?>&amp;body=<?php echo urlencode( get_permalink() ); ?>&amp;title=<?php echo get_the_title() ?>" title="<?php esc_attr_e( 'Email to a Friend', 'flipmart' )?>"><span><?php _e( 'Email to a Friend', 'flipmart' )?></span></a></p>
              <?php if ( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) || shortcode_exists( 'yith_compare_button' ) ) { ?>
                  <ul class="add-to-links">
                     <?php 
                        //Wishlist
                        if ( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) ) {
                            echo do_shortcode( '[yith_wcwl_add_to_wishlist]' );
                        }
                     ?>
                  </ul>
              <?php } ?>
           </div>
        </div>
        <?php
 			/**
			 * @since 2.2.0.
			 */
			do_action( 'woocommerce_after_add_to_cart_button' );
		?>
	</form>
    
	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
