<?php
/*
 * WooCommerce Section
 *
 * Available options on $section array:
 * separate_box (boolean) - separate metabox is created if true
 * box_title - title for separate metabox
 * title - section title
 * desc - section description
 * icon - section icon
 * fields - fields, @see https://docs.reduxframework.com/ for details
*/

$sections[] = array(
	'post_types' => array( 'product' ),
	'title'      => esc_html__('WooCommerce', 'flipmart'),
	'icon'       => 'el-icon-adjust-alt',
	'fields'     => array(
    
        array(
			'title'  => esc_html__( 'Hot Product', 'flipmart' ),
			'id'     => 'product-hot-flash',
			'type'   => 'switch',
            'desc'   => esc_html__( 'Display the "Hot" flash badge', 'flipmart' ),
            'on'       => esc_html__('Yes', 'flipmart'),
            'off'      => esc_html__('No', 'flipmart'),
		 ),
         
         array(
			'title'         => esc_html__( 'Hot Product Discount', 'flipmart' ),
			'id'            => 'product-hot-discount',
			'type'          => 'spinner',
            "min"           => 1,
            "step"          => 1,
            "max"           => 100,
            'required'      =>  array('product-hot-flash','equals',true),
		 ),
         
         array(
			'title'         => esc_html__( 'Time Limit', 'flipmart' ),
			'id'            => 'product-hot-time',
			'type'          => 'datetime',
            'date-format'   => 'm/d/yy',
            'rtl'           => false,
            'time-format'   => 'hh:mm:ss',
            'split'         => false,
            'separator'     => ' ', 
            'required'      =>  array('product-hot-flash','equals',true),
		 )
    )
);