<?php
/**
 * The template for displaying product content within loops in slider
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
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div <?php wc_product_class( 'item', $product ); ?>>
    <div class="item-inner">
       <div class="item-img">
          <div class="item-img-info">
             <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="product-image">
                <?php
            	/**
            	 * woocommerce_before_shop_loop_item_title hook.
            	 *
            	 * @hooked woocommerce_show_product_loop_sale_flash - 10
            	 * @hooked woocommerce_template_loop_product_thumbnail - 10
            	 */
            	do_action( 'woocommerce_before_shop_loop_item_title' ); 
                ?>
             </a>
             <div class="item-box-hover">
                <div class="box-inner">
                   <?php 
                        //Wishlist Shortcode
                        if ( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) || shortcode_exists( 'yith_compare_button' ) ) {
                            
                            //Wrapper
                            echo '<div class="actions"><span class="add-to-links">';
                                
                                //Wishlist
                                if ( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) ) {
                                    echo do_shortcode( '[yith_wcwl_add_to_wishlist]' );
                                }
                            
                            //Wrapper End
                            echo '</span></div>';
                        }
                        
                        
                        
                        //Add To Cart
                        woocommerce_template_loop_add_to_cart();
                   ?>
                </div>
             </div>
          </div>
       </div>
       <div class="item-info">
          <div class="info-inner">
             <div class="item-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> </div>
             <div class="item-content">
                <div class="row">
                    <div class="col-sm-6 text-left"><?php woocommerce_template_loop_rating(); ?></div>
                    <div class="col-sm-6" style="text-align: -webkit-right;"><?php woocommerce_show_product_loop_sale_flash(); ?></div>
                </div>
                <?php
                    //Price
                    woocommerce_template_loop_price();
                ?>
             </div>
          </div>
       </div>
    </div>
 </div>