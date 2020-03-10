<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$yog_class = 'products-list';
if( isset( $_GET['shop'] ) && !isset( $_COOKIE['gridcookie'] )):
    if( $_GET['shop'] == 'grid' ){
       $yog_class = 'products-grid';
    }else{
       $yog_class = 'products-list';
    }
elseif( isset( $_COOKIE['gridcookie'] ) ):
     if( $_COOKIE['gridcookie'] == 'grid' ){
       $yog_class = 'products-grid';
    }else{
       $yog_class = 'products-list';
    }          
else:
    if( yog_helper()->get_option( 'shop-layout' ) == 'grid' ){
       $yog_class = 'products-grid';
    }else{
       $yog_class = 'products-list'; 
    }
endif;
?>
<div class="category-products">
  <div class="<?php echo $yog_class; ?>">
    <div>
         