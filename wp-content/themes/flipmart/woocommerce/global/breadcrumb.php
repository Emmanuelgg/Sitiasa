<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
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
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//Get Post Meta Value.
$yog_breadcrumb_enable_page   = yog_helper()->get_option( 'page-breadcrumb-enable', 'raw', false, 'post' );
$yog_breadcrumb_enable_option = yog_helper()->get_option( 'breadcrumb-enable' ); 
if( 1 != $yog_breadcrumb_enable_page && is_page() ){ 
    echo '<div class="outer-top-xs"></div><div class="clearfix"></div>';
    return;
}elseif( 1 != $yog_breadcrumb_enable_option && 1 != $yog_breadcrumb_enable_page ){
    echo '<div class="outer-top-xs"></div><div class="clearfix"></div>';
    return;
}

echo $wrap_before;

?>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><?php                    
                    foreach ( $breadcrumb as $key => $crumb ) {

                		echo $before;
                
                		if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {
                			echo '<a href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a>';
                		} else {
                			echo esc_html( $crumb[0] );
                		}
                
                		echo $after;
                
                		if ( sizeof( $breadcrumb ) !== $key + 1 ) {
                			echo $delimiter;
                		}
                	} 
                ?></li>
			</ul>
		</div>
	</div>
</div>
<?php

echo $wrap_after;


