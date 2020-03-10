<?php
/*
 * Testimonial Section
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
	'post_types' => array('testimonial'),
	'title'      => esc_html__('Testimonial Information', 'flipmart'),
	'icon'       => 'el-icon-adjust-alt',
	'fields'     => array(
    
        array(
			'id'       => 'testimonial-content',
			'type'     => 'textarea',
			'title'    => esc_html__( 'Testimonial Content', 'flipmart' )
		),
        
        array(
			'id'       => 'testimonial-company',
			'type'     => 'text',
			'title'    => esc_html__( 'Company Name', 'flipmart' )
		)
	)
);