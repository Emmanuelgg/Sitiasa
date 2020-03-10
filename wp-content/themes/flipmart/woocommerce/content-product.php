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

global $product, $woocommerce_loop;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

$classes = array();

//get shop style theme option value.
$shop_style = isset( $_GET['shop'] ) ? $_GET['shop'] : yog_helper()->get_option( 'shop-layout', 'raw', 'grid', 'options' );

if( isset( $_GET['shop'] ) && !isset( $_COOKIE['gridcookie'] )){
    
    if( $_GET['shop'] == 'grid' ){
       $classes[] = yog_get_column( $woocommerce_loop['columns'] );
       $classes[] = 'col-sm-6 grid-products'; 
       
       if( $woocommerce_loop['loop'] == 0 ){
           echo '<div class="row">';  
       }elseif( $woocommerce_loop['loop'] % $woocommerce_loop['columns'] === 0 && $woocommerce_loop['loop'] != 0 ){
           echo '</div><div class="row">';  
       }
    }
    
    wc_get_template( 'woocommerce/content-product-'. $_GET['shop']. '.php' , array( 'classes' => $classes ) );
    
}elseif( isset( $_COOKIE['gridcookie'] )&& !empty($_COOKIE['gridcookie']) ){
    
    if( $_COOKIE['gridcookie'] == 'grid' ){
       $classes[] = yog_get_column( $woocommerce_loop['columns'] );
       $classes[] = 'col-sm-6 grid-products'; 
       
       if( $woocommerce_loop['loop'] == 0 ){
           echo '<div class="row">';  
       }elseif( $woocommerce_loop['loop'] % $woocommerce_loop['columns'] === 0 && $woocommerce_loop['loop'] != 0 ){
           echo '</div><div class="row">';  
       }
    }
    
    wc_get_template( 'woocommerce/content-product-'.$_COOKIE['gridcookie'].'.php' , array( 'classes' => $classes ) );
    
}else{
    
   if( $shop_style == 'grid' ){
       $classes[] = yog_get_column( $woocommerce_loop['columns'] );
       $classes[] = 'col-sm-6 grid-products'; 
       
       if( $woocommerce_loop['loop'] % $woocommerce_loop['columns'] === 0 ){
           echo '</div><div class="row">';  
       }
   }
   
   wc_get_template( 'woocommerce/content-product-'. $shop_style .'.php' , array( 'classes' => $classes ) ); 
}