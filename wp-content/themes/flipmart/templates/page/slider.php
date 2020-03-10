<?php
//Get Revolution Slider
$yog_rvslider = yog_helper()->get_option( 'rev_slider', 'raw', false, 'post' );

//Revolation Slider.
if( isset( $yog_rvslider ) && !empty( $yog_rvslider ) && class_exists( 'RevSliderOutput' )) { 
    RevSliderOutput::putSlider( $yog_rvslider, '' );
}
