<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>

<div class="price-container info-container m-t-20">
	<div class="row">
		
        <?php if ( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) || shortcode_exists( 'yith_compare_button' ) ) { ?>
            <div class="col-sm-6">
                <div class="price-box"><?php echo $product->get_price_html(); ?></div>
    		</div>
    
    		<div class="col-sm-6">
    			<ul class="favorite-button m-t-10">
                    <?php 
                        //Wishlist Shortcode
                        if ( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) ) {
                            echo do_shortcode( '[yith_wcwl_add_to_wishlist]' );
                        }
                        
                        //Compare Button
                        if ( shortcode_exists( 'yith_compare_button' ) ) {
                            echo '<li>'. do_shortcode( '[yith_compare_button container="no"]' ) .'</li>';
                        } 
                    ?>
    			</ul>
    		</div>
        <?php }else{ ?>
            <div class="col-sm-12">
                <div class="price-box"><?php echo $product->get_price_html(); ?></div>
    		</div>
        <?php } ?>

	</div>
</div>

