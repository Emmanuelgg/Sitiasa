<?php
/**
 * Content wrappers
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/wrapper-start.php.
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
 * @version     3.3.0
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
 }

 //WooCommerce Layout.  
 if( is_singular( 'product' ) ):
     $yog_sidebar_enable  = ( isset( $_GET['sidebar'] ) && !empty( $_GET['sidebar'] ) )? $_GET['sidebar'] : yog_helper()->get_option( 'product-enable-global', 'raw', false, 'options' );  
     $yog_layout   = yog_helper()->get_option( 'product-sidebar-position', 'raw', 'right', 'options' );
     $yog_class    = array( 'left' => 'col-md-9 col-sm-12', 'right' => 'col-md-9 col-sm-12' );
     $yog_class    = ( isset( $yog_sidebar_enable ) && !empty( $yog_sidebar_enable ) )? $yog_class[$yog_layout] : 'col-md-12';
     $yog_sidebar  = yog_helper()->get_option( 'product-sidebar', 'raw', false, 'options' );  
 else:
     $yog_sidebar_enable  = ( isset( $_GET['sidebar'] ) && !empty( $_GET['sidebar'] ) )? $_GET['sidebar'] : yog_helper()->get_option( 'shop-enable-global', 'raw', false, 'options' );   
     $yog_layout   = yog_helper()->get_option( 'shop-sidebar-position', 'raw', 'right', 'options' );
     $yog_class    = array( 'left' => 'col-md-9 col-sm-12', 'right' => 'col-md-9 col-sm-12' );
     $yog_class    = ( isset( $yog_sidebar_enable ) && !empty( $yog_sidebar_enable ) )? $yog_class[$yog_layout] : 'col-md-12';
     $yog_sidebar  = yog_helper()->get_option( 'shop-sidebar', 'raw', false, 'options' );  
 endif; 
 
 woocommerce_breadcrumb();  //Include Page Breadcrumb Html.
?>
<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row">
        
            <?php if( 'left' == $yog_layout && ( isset( $yog_sidebar_enable ) && !empty( $yog_sidebar_enable ) ) ): ?>
            
                 <div class="col-md-3 sidebar">
                    <div class="sidebar-module-container">
                        <?php 
                            if( $yog_sidebar ):
                                dynamic_sidebar( $yog_sidebar ); 
                            endif;
                        ?>
                    </div>
                 </div>
                 
            <?php endif; ?>
            
            <div class="<?php echo esc_attr( $yog_class ); ?>">
                <?php if( !is_singular( 'product' ) && yog_helper()->get_option( 'shop-sale-banner', 'raw', false, 'options' ) ): ?>
                    <div id="category" class="category-carousel hidden-xs">
                      <div class="item">
                      
                        <?php 
                            //Banner Image
                            $yog_banner = yog_helper()->get_option( 'shop-banner', 'raw', false, 'options' );
                            if( isset( $yog_banner['url'] ) ){ 
                        ?>
                        
                            <div class="image"> 
                                <img src="<?php echo esc_url( $yog_banner['url'] ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ); ?>"  class="img-responsive"/> 
                            </div>
                            
                        <?php } ?>
                        
                        <div class="container-fluid">
                          <div class="caption vertical-top text-left">
                          
                            <?php 
                                //Heading
                                if( $yog_heading = yog_helper()->get_option( 'shop-banner-heading', 'raw', false, 'options' ) ){
                                    echo '<div class="big-text">'. esc_html( $yog_heading ) .'</div>';
                                }
                                
                                //Sub Heading
                                if( $yog_sub_heading = yog_helper()->get_option( 'shop-banner-sub-heading', 'raw', false, 'options' ) ){
                                    echo '<div class="excerpt hidden-sm hidden-md">'. esc_html( $yog_sub_heading ) .'</div>';
                                }
                                
                                //Content
                                if( $yog_content = yog_helper()->get_option( 'shop-banner-content', 'raw', false, 'options' ) ){
                                    echo '<div class="excerpt-normal hidden-sm hidden-md">'. esc_html( $yog_content ) .'</div>';
                                }
                             ?>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                <?php endif; ?>