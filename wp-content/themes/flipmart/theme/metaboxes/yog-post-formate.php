<?php
/*
 * Post Formate Section
 *
 * Available options on $section array:
 * separate_box (boolean) - separate metabox is created if true
 * box_title - title for separate metabox
 * title - section title
 * desc - section description
 * icon - section icon
 * fields - fields, @see https://docs.reduxframework.com/ for details
*/

// Gallery
$sections[] = array(
	'separate_box' => true,
	'box_title'    => esc_html__( 'Gallery', 'flipmart' ),
	'post_types' => array( 'post' ),
	'post_format' => array( 'gallery' ),
	'icon' => 'el-icon-screen',
	'fields' => array(

		array(
			'id'        => 'post-gallery',
			'type'      => 'slides',
			'title'     => esc_html__( 'Gallery Slider', 'flipmart' ),
			'subtitle'  => esc_html__( 'Upload images or add from media library.', 'flipmart' ),
			'placeholder'   => array(
				'title'     => esc_html__( 'Title', 'flipmart' ),
			),
			'show' => array(
				'title' => true,
				'description' => false,
				'url' => false,
			)
		)
	)
);

$sections[] = array(
	'separate_box' => true,
	'box_title'    => esc_html__( 'Video', 'flipmart' ),
	'post_types' => array( 'post' ),
	'post_format' => array( 'video' ),
	'icon' => 'el-icon-screen',
	'fields' => array(

		array(
			'id'        => 'post-video-url',
			'type'      => 'text',
            'url'       => true,
			'title'     => esc_html__( 'Video URL', 'flipmart' ),
			'desc'      => esc_html__( 'YouTube or Vimeo video URL', 'flipmart' )
		)
	)
);
