<?php
/**
 * Theme Framework
 */

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Table of content
 *
 * 1. Hooks
 * 2. Functions
 */

// 1. Hooks ------------------------------------------------------
//

/**
 * [yog_output_space_body description]
 * @method yog_output_space_body
 * @return [type]                  [description]
 */
add_action( 'wp_footer', 'yog_output_space_body', 999 );
function yog_output_space_body() {

	echo yog_helper()->get_theme_option( 'space_body' );
}

/**
 * [yog_attributes_footer description]
 * @method yog_attributes_footer
 * @param  [type]                  $attributes [description]
 * @return [type]                              [description]
 */
add_filter( 'yog_attr_footer', 'yog_attributes_footer' );
function yog_attributes_footer( $attributes ) {

	$attributes['id'] = 'footer';
	$attributes['class'] = !empty( $attributes['class'] ) ? 'footer site-footer ' . $attributes['class'] : 'site-footer';
	$attributes['itemscope'] = 'itemscope';
	$attributes['itemtype']  = 'http://schema.org/WPFooter';

	return $attributes;

}

/**
 * [yog_footer_template description]
 * @method yog_footer_template
 * @return [type]             [description]
 */
add_action( 'yog_footer', 'yog_footer_template', 0 );
function yog_footer_template() {
    
    //Footer Template    
    if( yog_helper()->yog_get_layout( 'version' ) == 'woomart' ){
        get_template_part( 'templates/footer/footer', 'woomart' );  
    }elseif( yog_helper()->yog_get_layout( 'version' ) == 'modify' ){
        get_template_part( 'templates/footer/footer', yog_helper()->yog_get_layout( 'modify' ) );
    }else{
        get_template_part( 'templates/footer/footer', 'default' );    
    }
}

/**
 * [yog_site_warrper description]
 * @method yog_site_warrper
 * @return [type]                        [description]
 */
add_action( 'yog_after', 'yog_site_warrper_close' );
function yog_site_warrper_close() {

	echo '</div>';
}

// 2. Functions ------------------------------------------------------
//

/**
 * [yog_get_custom_footer_id description]
 * @method yog_get_custom_footer_id
 * @return [type]                     [description]
 */
function yog_get_custom_footer_id() {

	// which one
	$id = yog_helper()->get_option( 'footer-template' );
	if( current_theme_supports( 'theme-demo' ) && !empty( $_GET['f'] ) ) {
		$id = $_GET['f'];
	}

	return $id;
}

/**
 * [yog_print_custom_footer_css description]
 * @method yog_print_custom_footer_css
 * @return [type]                        [description]
 */
add_action( 'wp_head', 'yog_print_custom_footer_css', 1001 );
function yog_print_custom_footer_css() {

	echo yog_helper()->get_vc_custom_css( yog_get_custom_footer_id() );
}