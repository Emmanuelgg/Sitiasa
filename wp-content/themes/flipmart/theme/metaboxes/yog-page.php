<?php
/*
 * General Page Section
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
	'post_types' => array( 'page' ),
	'title'      => esc_html__('Page', 'flipmart'),
	'icon'       => 'el-icon-adjust-alt',
	'fields'     => array(
		
        array(
 			'id'        => 'page-layout',
 			'type'      => 'select',
 			'title'     => esc_html__('Page Layout', 'flipmart'),
 			'subtitle'  => esc_html__('Select which layout displays on this page.', 'flipmart'),
 			'options'   => array(
                'default' => esc_html__( 'Default', 'flipmart' ),
                'page'    => esc_html__( 'Full Width', 'flipmart' ),
                'sidebar' => esc_html__( 'Sidebar', 'flipmart' )                                   
            )
		),
        
        array(
 			'id'        => 'page-custom-sidebar',
 			'type'      => 'select',
 			'title'     => esc_html__('Page Sidebar', 'flipmart'),
 			'subtitle'  => esc_html__('Select sidebar that will display on this page.', 'flipmart'),
			'data'      => 'sidebars',
            'required'  => array('page-layout','equals','sidebar'),
		),

		array(
 			'id'        => 'page-custom-sidebar-position',
 			'type'      => 'button_set',
            'required'  => array('page-custom-sidebar','not',''),
 			'title'     => esc_html__('Global Page Sidebar Position', 'flipmart'),
 			'subtitle'  => esc_html__('Controls the position of sidebar 1 for all pages.', 'flipmart'),
			'options'   => array(
				'left'  => esc_html__( 'Left', 'flipmart' ),
				'right' => esc_html__( 'Right', 'flipmart' )
			),
			'default'   => 'right'
		)
	)
);

$sections[] = array(
	'post_types' => array( 'page' ),
	'title'      => esc_html__('Breadcrumb', 'flipmart'),
	'icon'       => 'el-icon-cog',
	'fields'     => array(

		array(
			'id'       => 'page-breadcrumb-enable',
			'type'	   => 'switch',
			'title'    => esc_html__('Breadcrumb', 'flipmart'),
			'subtitle' => esc_html__('Choose No if want to hide breadcrumb on this page.', 'flipmart'),
			'on'       => esc_html__('Yes', 'flipmart'),
            'off'      => esc_html__('No', 'flipmart'),
		)
        
	) 
);

if ( class_exists( 'RevSlider' ) ) {
    $yog_slider = new RevSlider();
    $yog_arrSliders = $yog_slider->getArrSlidersShort();
    $sections[] = array(
    	'post_types' => array( 'page' ),
    	'title'      => esc_html__('Revolution Slider', 'flipmart'),
    	'icon'       => 'el-icon-adjust-alt',
    	'fields'     => array(

    		array(
     			'id'       => 'rev_slider',
     			'type'     => 'select',
     			'title'    => esc_html__('Revolution Slider', 'flipmart'),
     			'subtitle' => esc_html__('Select a slider for site page.', 'flipmart'),
     			'options'  => $yog_arrSliders
    		)
        )
	);
}