<?php
/*
 * Page 404
*/

if( 'woomart' == yog_helper()->yog_get_layout( 'version' ) ){
    $this->sections[] = array (
    	'title'      => esc_html__( '404 Page', 'flipmart' ),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
    			'id'        => 'page-404-logo',
    			'type'      => 'media',
    			'url'       => true,
    			'title'     => esc_html__('404 Image', 'flipmart'),
    			'subtitle'  => esc_html__('Select an image file for your 404 page image.', 'flipmart'),
    		),
            
            array(
                'id'       => 'page-404-body',
                'type'     => 'textarea',
                'title'    => esc_html__('Content', 'flipmart'),
                'default'  => esc_html__( 'Oops! The Page you requested was not found!', 'flipmart' )
            ),
    
            array(
    			'id'       => 'page-404-back-btn',
    			'type'     => 'text',
    			'title'    => esc_html__( 'Back To Home Button', 'flipmart' ),
    			'default'  => 'Go To Homepage'
    		)
    	)
    );
}else{
    $this->sections[] = array (
    	'title'      => esc_html__( '404 Page', 'flipmart' ),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
                'id'       => 'page-404-title',
                'type'     => 'text',
                'title'    => esc_html__('Page Title', 'flipmart'),
                'default'  => esc_html__( '404', 'flipmart' )
            ),
            
            array(
                'id'       => 'page-404-subtitle',
                'type'     => 'text',
                'title'    => esc_html__('Sub Title', 'flipmart'),
                'default'  => esc_html__( 'Oops! the page you were looking for, couldn\'t be found.', 'flipmart' )
            ),
            
            array(
                'id'       => 'page-404-body',
                'type'     => 'textarea',
                'title'    => esc_html__('Content', 'flipmart'),
                'default'  => esc_html__( 'Try the search below to find matching pages:', 'flipmart' )
            ),
    
    		array(
    			'id'       => 'error-404-enable-search',
    			'type'	   => 'button_set',
    			'title'    => esc_html__('Enable Search', 'flipmart'),
    			'subtitle' => esc_html__('If on, the search module will be displayed.', 'flipmart'),
    			'options'  => array(
    				'on'   => 'On',
    				'off'  => 'Off'
    			),
    			'default' => 'on'
    		),
    
    		array(
    			'id'       => 'error-404-search-title',
    			'type'     => 'text',
    			'title'    => esc_html__( 'Search Title', 'flipmart' ),
    			'subtitle' => '',
    			'default'  => 'Search..',
    			'required' => array(
    				'error-404-enable-search',
    				'equals',
    				'on'
    			)
    		),
            
            array(
    			'id'       => 'page-404-search-btn',
    			'type'     => 'text',
    			'title'    => esc_html__( 'Search Form Button', 'flipmart' ),
    			'default'  => 'Go',
    			'required' => array(
    				'error-404-enable-search',
    				'equals',
    				'on'
    			)
    		),
            
            array(
    			'id'       => 'page-404-back-btn',
    			'type'     => 'text',
    			'title'    => esc_html__( 'Back To Home Button', 'flipmart' ),
    			'default'  => 'Go To Homepage'
    		)
    	)
    );
}