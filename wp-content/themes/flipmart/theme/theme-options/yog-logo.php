<?php
/*
 * General Logo Section
*/

$this->sections[] = array(
	'title'  => esc_html__('Logo', 'flipmart'),
	'icon'   => 'el-icon-plus-sign'
);

// Body
$this->sections[] = array(
	'title'      => esc_html__('Logo', 'flipmart'),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'        => 'opt-logo',
			'type'      => 'media',
			'url'       => true,
			'title'     => esc_html__('Default Logo', 'flipmart'),
			'subtitle'  => esc_html__('Select an image file for your logo.', 'flipmart'),
		)
	)
);

// Headers
$this->sections[] = array(
	'title'      => esc_html__('Favicon', 'flipmart'),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'          => 'favicon',
			'type'        => 'media',
			'title'       => esc_html__( 'Favicon', 'flipmart' ),
			'subtitle'    => esc_html__( 'Favicon for your website at 16px x 16px.', 'flipmart' )
		),

		array(
			'id'          => 'iphone_icon',
			'type'        => 'media',
			'title'       => esc_html__( 'Apple iPhone Icon Upload', 'flipmart' ),
			'subtitle'    => esc_html__( 'Favicon for Apple iPhone at 57px x 57px.', 'flipmart' )
		),

		array(
			'id'          => 'iphone_icon_retina',
			'type'        => 'media',
			'title'       => esc_html__( 'Apple iPhone Retina Icon Upload', 'flipmart' ),
			'subtitle'    => esc_html__( 'Favicon for Apple iPhone Retina Version at 114px x 114px.', 'flipmart' ),
			'required'    => array(
				array( 'iphone_icon', '!=', '' ),
				array( 'iphone_icon', '!=', array( 'url'  => '' ) )
			)
		),

		array(
			'id'          => 'ipad_icon',
			'type'        => 'media',
			'title'       => esc_html__( 'Apple iPad Icon Upload', 'flipmart' ),
			'subtitle'    => esc_html__( 'Favicon for Apple iPad at 72px x 72px.', 'flipmart' )
		),

		array(
			'id'          => 'ipad_icon_retina',
			'type'        => 'media',
			'title'       => esc_html__( 'Apple iPad Retina Icon Upload', 'flipmart' ),
			'subtitle'    => esc_html__( 'Favicon for Apple iPad Retina Version at 144px x 144px.', 'flipmart' ),
			'required'    => array(
				array( 'ipad_icon', '!=', '' ),
				array( 'ipad_icon', '!=', array( 'url'  => '' ) )
			)
		)
	)
);
