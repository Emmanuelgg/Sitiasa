<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $yog_skin
 * @var $css
 * @var $el_id
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Row
 */
$el_class = $full_height = $parallax_speed_bg = $parallax_speed_video = $full_width = $equal_height = $flex_row = $columns_placement = $content_placement = $parallax = $parallax_image = $css = $el_id = $video_bg = $video_bg_url = $video_bg_parallax = '';
$disable_element = '';
$output = $after_output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

wp_enqueue_script( 'wpb_composer_front_js' );
$el_class = $this->getExtraClass( $el_class );
$yog_skin = $this->getExtraClass( $yog_skin );
$css_classes = array(
	$el_class,
    $yog_skin,
	vc_shortcode_custom_css_class( $css ),
);

if ( 'yes' === $disable_element ) {
	if ( vc_is_page_editable() ) {
		$css_classes[] = 'vc_hidden-lg vc_hidden-xs vc_hidden-sm vc_hidden-md';
	} else {
		return '';
	}
}

if (vc_shortcode_custom_css_has_property( $css, array('border', 'background') ) || $video_bg || $parallax) {
	$css_classes[]='vc_row-has-fill';
}

if (!empty($atts['gap'])) {
	$css_classes[] = 'vc_column-gap-'.$atts['gap'];
}

if( $full_width == 'stretch_row_over' ){
    $css_classes[] = 'overlay-row';
}

$wrapper_attributes = array();
// build attributes for wrapper
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}

//Create Scrolling Menu
if( !empty( $yog_menu_label ) ){
     
    if(
        isset( $yog_menu_id ) && isset( $yog_menu_label ) &&
        !empty( $yog_menu_id ) && !empty( $yog_menu_label )
    ) {

        $key = sanitize_key( $yog_menu_label );
        $wrapper_attributes[]= 'id="'. $key .'"';
        $css_classes[] = 'section';
        
        $menu_link = '#HOME_URL#' . $key;
        
        $is_link = false;
        $menu_item_id = $menu_item_position = 0;

        $menu_items = wp_get_nav_menu_items( $yog_menu_id );
        if( isset( $menu_items ) && !empty( $menu_items ) ){
            foreach ( $menu_items as $menu_item ) {
                if ( $menu_item->url == $menu_link ) {
                    $menu_item_id = $menu_item->ID;
                    $menu_item_position = $menu_item->menu_order;
                    break;
                }
            }    
        }
        
       
        wp_update_nav_menu_item( $yog_menu_id, $menu_item_id, array(
            'menu-item-title'    => $yog_menu_label,
            'menu-item-classes'  => 'page-scroll internal',
            'menu-item-url'      => $menu_link,
            'menu-item-position' => $menu_item_position,
            'menu-item-status'   => 'publish'
        ) );
        
        update_option( 'menu_check', true );
    }
}

//Background Image
if( !empty( $yog_parallax_image ) ){
    $yog_image_src = wp_get_attachment_image_src( $yog_parallax_image, 'full' );
    $wrapper_attributes[] = 'style="background: url('. $yog_image_src[0] .') '. $yog_bg_color .' no-repeat top center;background-size: cover;"';
}elseif( !empty( $yog_bg_color ) ){
    $wrapper_attributes[] = 'style="background: '. $yog_bg_color .';"';
}
$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( array_unique( $css_classes ) ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';

if ( ! empty( $full_width ) && $full_width == 'stretch_row' ) {
	$output .= '<div ' . implode( ' ', $wrapper_attributes ) . '><div class="row">';
    $output .= wpb_js_remove_wpautop( $content );
    $output .= '</div></div>';
}elseif ( ! empty( $full_width ) && $full_width == 'stretch_row_fluid' ) {
	$output .= '<div class="container-fluid"><div ' . implode( ' ', $wrapper_attributes ) . '>';
    $output .= wpb_js_remove_wpautop( $content );
    $output .= '</div></div>';
}elseif ( ! empty( $full_width ) && $full_width == 'stretch_row_sp' ) {
	$output .= '<div class="container"><div ' . implode( ' ', $wrapper_attributes ) . '>';
    $output .= wpb_js_remove_wpautop( $content );
    $output .= '</div></div>';
}elseif ( ! empty( $full_width ) && $full_width == 'stretch_row_over' ) {
	$output .= '<div ' . implode( ' ', $wrapper_attributes ) . '><div class="overlay"></div><div class="container">';
    $output .= wpb_js_remove_wpautop( $content );
    $output .= '</div></div>';
}elseif( ! empty( $full_width ) && $full_width == 'stretch_row_special' ){
    $output .= wpb_js_remove_wpautop( $content );
}else{
    $output .= '<div ' . implode( ' ', $wrapper_attributes ) . '><div class="container"><div class="row">';
    $output .= wpb_js_remove_wpautop( $content );
    $output .= '</div></div></div>';
}
    
echo $output;