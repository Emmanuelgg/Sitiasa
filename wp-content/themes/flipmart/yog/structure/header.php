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
 * 3. Template Tags
 */

// 1. Hooks ------------------------------------------------------
//

/**
 * [at_meta_mobile_app description]
 * @method at_meta_mobile_app
 * @return [type]             [description]
 */
add_action( 'wp_head', 'yog_meta_mobile_app', 0 );
function yog_meta_mobile_app() {

	echo '<meta name="mobile-web-app-capable" content="yes">' . "\n";
	echo '<meta name="apple-mobile-web-app-capable" content="yes">' . "\n";
	printf( '<meta name="apple-mobile-web-app-title" content="%s - %s">' . "\n", esc_html( get_bloginfo('name') ), esc_html( get_bloginfo('description') ) );
}

/**
 * [yog_meta_name_url description]
 * @method yog_meta_name_url
 * @return [type]          [description]
 */
add_action( 'wp_head', 'yog_meta_name_url', 1 );
function yog_meta_name_url() {

	if ( ! is_front_page() ) {
		return;
	}

	printf( '<meta itemprop="name" content="%s" />' . "\n", get_bloginfo( 'name' ) );
	printf( '<meta itemprop="url" content="%s" />' . "\n", trailingslashit( home_url() ) );
}

/**
 * [yog_meta_pingback description]
 * @method yog_meta_pingback
 * @return [type]              [description]
 */
add_action( 'wp_head', 'yog_meta_pingback', 0 );
function yog_meta_pingback() {

	if ( 'open' === get_option( 'default_ping_status' ) ) {
		echo '<link rel="pingback" href="' . get_bloginfo( 'pingback_url' ) . '" />' . "\n";
	}
}

/**
 * [yog_load_favicon description]
 * @method yog_load_favicon
 * @return [type]             [description]
 */
add_action( 'wp_head', 'yog_load_favicon' );
function yog_load_favicon() {
    if ( function_exists( 'wp_site_icon' ) ) {
        $icon = yog_helper()->get_option( 'favicon' );
        $icon = ( isset( $icon['url'] ) && !empty( $icon['url'] ) )? : get_template_directory_uri() . '/assets/images/favicon.ico';
?>      
	<link rel="shortcut icon" href="<?php echo $icon; ?>" />
	<?php
	if ( $icon = yog_helper()->get_option( 'iphone_icon' ) ) : ?>
		<!-- For iPhone -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo $icon['url'] ?>">
	<?php endif;

	if ( $icon = yog_helper()->get_option( 'iphone_icon_retina' ) ) : ?>
		<!-- For iPhone 4 Retina display -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $icon['url'] ?>">
	<?php endif;

	if ( $icon = yog_helper()->get_option( 'ipad_icon' ) ) : ?>
		<!-- For iPad -->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $icon['url'] ?>">
	<?php endif;

	if ( $icon = yog_helper()->get_option( 'ipad_icon_retina' ) ) : ?>
		<!-- For iPad Retina display -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $icon['url'] ?>">
	<?php endif;
    }
}

/**
 * [yog_output_advance_code description]
 * @method yog_output_advance_code
 * @return [type]                  [description]
 */
add_action( 'wp_head', 'yog_output_advance_code', 999 );
function yog_output_advance_code() {

	echo yog_helper()->get_theme_option( 'google_analytics' );

	echo yog_helper()->get_theme_option( 'space_head' );
}

/**
 * [yog_attributes_header description]
 * @method yog_attributes_header
 * @param  [type]                  $attributes [description]
 * @return [type]                              [description]
 */
add_filter( 'yog_attr_header', 'yog_attributes_header' );
function yog_attributes_header( $attributes ) {

	if( !isset( $attributes['id'] ) || empty( $attributes['id'] ) ) {
		$attributes['id'] = 'header';
	}

	$attributes['class'] = !empty( $attributes['class'] ) ? 'header site-header ' . $attributes['class'] : 'header site-header';
	$attributes['role'] = 'banner';
	$attributes['itemscope'] = 'itemscope';
	$attributes['itemtype']  = 'http://schema.org/WPHeader';

	return $attributes;

}

/**
 * [yog_get_header_view description]
 * @method yog_get_header_view
 * @return [type]             [description]
 */
add_action( 'yog_header', 'yog_get_header_view' );
function yog_get_header_view() {
    
    //Header Template  
    if( yog_helper()->yog_get_layout( 'version' ) == 'woomart' ){
        get_template_part( 'templates/header/header', 'woomart' );  
    }elseif( yog_helper()->yog_get_layout( 'version' ) == 'modify' ){
        get_template_part( 'templates/header/header', yog_helper()->yog_get_layout( 'modify' ) );
    }else{
        get_template_part( 'templates/header/header', 'default' );    
    }
	    
}

// 2. Functions ------------------------------------------------------
//

/**
 * [yog_get_custom_header_id description]
 * @method yog_get_custom_header_id
 * @return [type]                     [description]
 */
function yog_get_custom_header_id() {
	
	// which one
	$id = yog_helper()->get_option( 'header-template' );
	if( current_theme_supports( 'theme-demo' ) && !empty( $_GET['h'] ) ) {
		$id = $_GET['h'];
	}

	return $id;
}

/**
 * [yog_print_custom_header_css description]
 * @method yog_print_custom_header_css
 * @return [type]                        [description]
 */
add_action( 'wp_head', 'yog_print_custom_header_css', 1001 );
function yog_print_custom_header_css() {

	echo yog_helper()->get_vc_custom_css( yog_get_custom_header_id() );
}


/**
 * [yog_wrapper_start description]
 * @method yog_wrapper_start
 * @return [type]             [description]
 */
add_action( 'yog_before', 'yog_wrapper_start', 0 );
function yog_wrapper_start() {
    
    //Get Site Version
    $yog_site_version = yog_helper()->get_option( 'site-version', 'raw', 'v1', 'options' );
    
    //Wrapper Start.
    if( isset( $GLOBALS['flipmart']['site-version'] ) && $GLOBALS['flipmart']['site-version'] == 'modify' &&  $GLOBALS['flipmart']['site-version-modify'] == 'electro' ){
        echo '<div id="wrapper" class="site-wrapper electro">';    
    }else{
        echo '<div id="wrapper" class="site-wrapper">';
    }
    
    //Layout
    $yog_layout = yog_helper()->get_option( 'site-layout', 'raw', 'wide', 'options' );
    
    // Box Background
    if( $yog_layout == 'boxed' ){
    	$bg_img = $custom_css = '';
    	$bg_type = yog_helper()->get_option( 'site-background-type', 'raw', '', 'options' );
        $theme_color = yog_helper()->get_option( 'site-color', 'raw', '', 'options' );
        
    	if( 'solid' === $bg_type && $color = yog_helper()->get_option( 'site-bar-solid', 'raw', '', 'options' ) ) {
    		$bg_img = 'background-color: ' . $color;
    	}
    	elseif( 'gradient' === $bg_type && $gradient = yog_helper()->get_option( 'site-bar-gradient', 'raw', '', 'options' ) ) {
    		$gradient = explode( '|', $gradient );
    		$gradient[0] = 'background-image:' . $gradient[0];
    		$bg_img = join( ';', $gradient );
    	}
    	elseif( 'image' === $bg_type && $bg = yog_helper()->get_option( 'site-bar-bg', 'raw', '', 'options' ) ) {
    		$bg_img = 'background-image: url('.$bg['url'].');background-size: cover;';
    	}
        //Body Css
        if( !empty( $bg_img ) && $yog_class != 'wide'){
            $custom_css = "body{{$bg_img}}";
        }
       
        if( isset( $custom_css ) && !empty( $custom_css ) ){
            yog_theme_assets()->yog_inline_css_script( $custom_css );
        }
    }   
}

// 3. Template Tags --------------------------------------------------
//

function yog_get_custom_header( $post_id = 0 ) {

	if( ! $post_id ) {
		return;
	}
}
