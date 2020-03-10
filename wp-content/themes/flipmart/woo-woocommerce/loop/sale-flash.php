<?php
/**
 * Product loop sale flash
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/sale-flash.php.
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
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

if( !$product->is_in_stock() && yog_helper()->get_option( 'stock-tag' ) ):

    //Get Stock Theme Options Text
    $yog_stock = ( yog_helper()->get_option( 'stock-tag-text' ) )? yog_helper()->get_option( 'stock-tag-text' ) : esc_html__( 'Out Of Stock', 'flipmart' );
    
    //Display Stock Tag 
    echo '<div class="tag out-stock">'. esc_html( $yog_stock ) .'</div>';
    
else:
    
    //Hot Product Tag
    if( yog_helper()->get_option( 'product-hot-flash', 'raw', false, 'post' ) && yog_helper()->get_option( 'hot-tag' ) ):
         
         //Get Hot Theme Options Text
         $yog_hot = ( yog_helper()->get_option( 'hot-tag-text' ) )? yog_helper()->get_option( 'hot-tag-text' ) : esc_html__( 'Hot', 'flipmart' );
         
         echo '<div class="tag hot"><span>' . $yog_hot . '</span></div>'; 
    
    //Sale Product Tag
    elseif ( $product->is_on_sale() && yog_helper()->get_option( 'sale-tag' ) ) :
    
         //Get Sale Theme Options Text
         $yog_sale = ( yog_helper()->get_option( 'sale-tag-text' ) )? yog_helper()->get_option( 'sale-tag-text' ) : esc_html__( 'Sale', 'flipmart' );
         
         echo apply_filters( 'woocommerce_sale_flash', '<div class="tag sale"><span>' . $yog_sale . '</span></div>', $post, $product ); 
         
    endif;
    
    
    
endif;
