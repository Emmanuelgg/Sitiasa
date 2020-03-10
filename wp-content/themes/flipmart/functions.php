<?php
/**
 * The Flipmart Starter Theme
 *
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Text Domain: 'flipmart'
 * Domain Path: /languages/
 */
// Staring The Flipmart ---------------------------------------------
include( get_template_directory() . '/yog/yog-init.php');


/**
 * Override default WooCommerce templates and template parts from plugin.
 * 
 * E.g.
 * Override template 'woocommerce/loop/result-count.php' with 'my-plugin/woocommerce/loop/result-count.php'.
 * Override template part 'woocommerce/content-product.php' with 'my-plugin/woocommerce/content-product.php'.
 *
 * Note: We used folder name 'woocommerce' in plugin to override all woocommerce templates and template parts.
 * You can change it as per your requirement.
 */
// Override Template Part's.
add_filter( 'wc_get_template_part',             'yog_override_woocommerce_template_part', 10, 3 );
// Override Template's.
add_filter( 'woocommerce_locate_template',      'yog_override_woocommerce_template', 10, 3 );
/**
 * Template Part's
 *
 * @param  string $template Default template file path.
 * @param  string $slug     Template file slug.
 * @param  string $name     Template file name.
 * @return string           Return the template part from plugin.
 */
function yog_override_woocommerce_template_part( $template, $slug, $name ) {
    
    if( 'woomart' == yog_helper()->yog_get_layout( 'version' ) ){
        $template_directory = untrailingslashit( get_template_directory() ) . '/woo-woocommerce/';
    }else{
        $template_directory = untrailingslashit( get_template_directory() ) . '/woocommerce/';
    }
    
    if ( $name ) {
        $path = $template_directory . "{$slug}-{$name}.php";
    } else {
        $path = $template_directory . "{$slug}.php";
    }
    return file_exists( $path ) ? $path : $template;
}

/**
 * Template File
 *
 * @param  string $template      Default template file  path.
 * @param  string $template_name Template file name.
 * @param  string $template_path Template file directory file path.
 * @return string                Return the template file from plugin.
 */
function yog_override_woocommerce_template( $template, $template_name, $template_path ) {
    
    if( 'woomart' == yog_helper()->yog_get_layout( 'version' ) ){
        $template_directory = untrailingslashit( get_template_directory() ) . '/woo-woocommerce/';
    }else{
        $template_directory = untrailingslashit( get_template_directory() ) . '/woocommerce/';
    }
    $path = $template_directory . $template_name;
    return file_exists( $path ) ? $path : $template;
}

add_action('init', 'do_output_buffer'); 
function do_output_buffer() { 
    ob_start(); 
}