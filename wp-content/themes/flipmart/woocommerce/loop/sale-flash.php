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

//Stock Product Tag
if( !$product->is_in_stock() && yog_helper()->get_option( 'stock-tag' ) ):
    
    //Get Stock Theme Options Text
    $yog_stock = ( yog_helper()->get_option( 'stock-tag-text' ) )? yog_helper()->get_option( 'stock-tag-text' ) : esc_html__( 'Out Of Stock', 'flipmart' );
    
    //Display Stock Tag 
    echo '<div class="tag out-stock">'. esc_html( $yog_stock ) .'</div>';

else:
    
    $newness   = get_option( 'wc_nb_newness' );
    $new_tag   = yog_helper()->get_option( 'new-tag' );
    
    //Hot Product Tag
    if( yog_helper()->get_option( 'product-hot-flash', 'raw', false, 'post' ) && yog_helper()->get_option( 'hot-tag' ) ):
         
         //Get Hot Theme Options Text
         $yog_hot = ( yog_helper()->get_option( 'hot-tag-text' ) )? yog_helper()->get_option( 'hot-tag-text' ) : esc_html__( 'Hot', 'flipmart' );
         
         //Site Version 
         if( isset( $GLOBALS['flipmart']['site-version'] ) && $GLOBALS['flipmart']['site-version'] == 'modify' &&  $GLOBALS['flipmart']['site-version-modify'] == 'fashion' ): 
             echo '<div class="hot">' . $yog_hot . '</div>'; 
         elseif( isset( $GLOBALS['flipmart']['site-version'] ) && $GLOBALS['flipmart']['site-version'] == 'modify' &&  $GLOBALS['flipmart']['site-version-modify'] == 'cosmetic' ):
             echo '<div class="tag-cosmetic"><span>' . $yog_hot . '</span></div>'; 
         elseif( isset( $GLOBALS['flipmart']['site-version'] ) && $GLOBALS['flipmart']['site-version'] == 'modify' &&  $GLOBALS['flipmart']['site-version-modify'] == 'kidswear' ): 
             echo '<span class="tag hot">' . $yog_hot . '</span>'; 
         else:
             echo '<div class="tag hot"><span>' . $yog_hot . '</span></div>'; 
         endif;
         
    //New Product Tag
    elseif ( $product->is_on_sale() && yog_helper()->get_option( 'sale-tag' ) ) : 
         
         //Get Sale Theme Options Text
         $yog_sale = ( yog_helper()->get_option( 'sale-tag-text' ) )? yog_helper()->get_option( 'sale-tag-text' ) : esc_html__( 'Sale', 'flipmart' );
         
         //Site Version 
         if( isset( $GLOBALS['flipmart']['site-version'] ) && $GLOBALS['flipmart']['site-version'] == 'modify' &&  $GLOBALS['flipmart']['site-version-modify'] == 'fashion' ): 
             echo apply_filters( 'woocommerce_sale_flash', '<div class="sale">' . $yog_sale . '</div>', $post, $product ); 
         elseif( isset( $GLOBALS['flipmart']['site-version'] ) && $GLOBALS['flipmart']['site-version'] == 'modify' &&  $GLOBALS['flipmart']['site-version-modify'] == 'cosmetic' ): 
             echo apply_filters( 'woocommerce_sale_flash', '<div class="tag-cosmetic"><span>' . $yog_sale . '</span></div>', $post, $product );  
         elseif( isset( $GLOBALS['flipmart']['site-version'] ) && $GLOBALS['flipmart']['site-version'] == 'modify' &&  $GLOBALS['flipmart']['site-version-modify'] == 'kidswear' ): 
             echo apply_filters( 'woocommerce_sale_flash', '<span class="tag">' . $yog_sale . '</span>', $post, $product );  
         else:
             echo apply_filters( 'woocommerce_sale_flash', '<div class="tag sale"><span>' . $yog_sale . '</span></div>', $post, $product ); 
         endif;   
    
    //Sale Product Tag
    elseif( isset( $newness ) && !empty( $newness ) && $new_tag ):
    
        $postdate 		= get_the_time( 'Y-m-d' );			// Post date
        $postdatestamp 	= strtotime( $postdate );			// Timestamped post date
         	// Newness in days as defined by option
        if ( ( time() - ( 60 * 60 * 24 * $newness ) ) < $postdatestamp ) : // If the product was published within the newness time frame display the new badge
        	 
             //Get New Theme Options Text
             $yog_new = ( yog_helper()->get_option( 'new-tag-text' ) )? yog_helper()->get_option( 'new-tag-text' ) : esc_html__( 'New', 'flipmart' );
         
             //Site Version 
             if( isset( $GLOBALS['flipmart']['site-version'] ) && $GLOBALS['flipmart']['site-version'] == 'modify' &&  $GLOBALS['flipmart']['site-version-modify'] == 'fashion' ): 
                 echo '<div class="new">' . $yog_new . '</div>'; 
             elseif( isset( $GLOBALS['flipmart']['site-version'] ) && $GLOBALS['flipmart']['site-version'] == 'modify' &&  $GLOBALS['flipmart']['site-version-modify'] == 'cosmetic' ): 
                 echo '<div class="tag-cosmetic new"><span>' . $yog_new . '</span></div>'; 
             elseif( isset( $GLOBALS['flipmart']['site-version'] ) && $GLOBALS['flipmart']['site-version'] == 'modify' &&  $GLOBALS['flipmart']['site-version-modify'] == 'kidswear' ): 
                 echo '<span class="tag new">' . $yog_new . '</span>'; 
             else:
                 echo '<div class="tag new"><span>' . $yog_new . '</span></div>'; 
             endif;
            
        endif; 
         
    endif;
    
endif;