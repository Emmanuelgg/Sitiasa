<?php
/**
 * Add to wishlist button template
 *
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Wishlist
 * @version 2.0.8
 */

if ( ! defined( 'YITH_WCWL' ) ) {
    exit;
} // Exit if accessed directly

global $product;

if( is_singular( 'product' ) ):
?>
    <li> 
        <a href="<?php echo esc_url( add_query_arg( 'add_to_wishlist', $product_id ) )?>" rel="nofollow" data-product-id="<?php echo $product_id ?>" data-product-type="<?php echo $product_type?>" class="link-wishlist" >
            <span><?php _e( 'Add to Wishlist', 'flipmart' ); ?></span>
        </a>
    </li>
    <li> 
        <span class="separator">|</span> 
        <?php 
            //Compare Button
            if ( shortcode_exists( 'yith_compare_button' ) ) {
                $result = do_shortcode('[yith_compare_button]'); 
                echo str_replace( 'button', '', $result );
            }
        ?>
    </li>
<?php else: ?>
<a href="<?php echo esc_url( add_query_arg( 'add_to_wishlist', $product_id ) )?>" rel="nofollow" data-product-id="<?php echo $product_id ?>" data-product-type="<?php echo $product_type?>" class="link-wishlist" >
    <span><?php _e( 'Add to Wishlist', 'flipmart' ); ?></span>
</a>
<?php 
    //Compare Button
    if ( shortcode_exists( 'yith_compare_button' ) ) {
        echo do_shortcode( '[yith_compare_button container="no"]' );
    }
endif;