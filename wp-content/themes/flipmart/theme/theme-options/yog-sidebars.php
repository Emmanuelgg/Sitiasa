<?php
/*
 * Sidebar Section
*/
$this->sections[] = array(
	'title'  => esc_html__('Sidebars', 'flipmart'),
	'icon'   => 'el-icon-photo'
);

// Page Sidebar
$this->sections[] = array(
	'title'      => esc_html__('Page', 'flipmart'),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'       => 'page-opt-enable-global',
			'type'	   => 'switch',
			'title'    => esc_html__('Activate Global Sidebar For Pages', 'flipmart'),
			'subtitle' => esc_html__('Turn on if you want to use the same sidebars on all pages. This option overrides the page options.', 'flipmart'),
			'default'   => true,
            'on'        => esc_html__('Yes', 'flipmart'),
            'off'       => esc_html__('No', 'flipmart'),
		),

		array(
 			'id'       => 'page-opt-sidebar',
 			'type'     => 'select',
            'required' =>  array('page-opt-enable-global','equals',true),
 			'title'    => esc_html__('Global Page Sidebar', 'flipmart'),
 			'subtitle' => esc_html__('Select sidebar that will display on all pages.', 'flipmart'),
			'data'     => 'sidebars'
		),

		array(
 			'id'       => 'page-opt-sidebar-position',
 			'type'     => 'button_set',
            'required' =>  array('page-opt-sidebar','not',''),
 			'title'    => esc_html__('Global Page Sidebar Position', 'flipmart'),
 			'subtitle' => esc_html__('Controls the position of sidebar 1 for all pages.', 'flipmart'),
			'options'  => array(
				'left'  => esc_html__( 'Left', 'flipmart' ),
				'right' => esc_html__( 'Right', 'flipmart' )
			),
			'default'  => 'right'
		)
	)
);

// Blog Posts Sidebar
$this->sections[] = array(
	'title'      => esc_html__('Blog Posts', 'flipmart'),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'       => 'blog-enable-global',
			'type'	   => 'switch',
			'title'    => esc_html__('Activate Global Sidebar For Blog Posts', 'flipmart'),
			'subtitle' => esc_html__('Turn on if you want to use the sidebars on all blog posts.', 'flipmart'),
			'default'   => true,
            'on'        => esc_html__('Yes', 'flipmart'),
            'off'       => esc_html__('No', 'flipmart'),
		),

		array(
 			'id'       => 'blog-sidebar',
 			'type'     => 'select',
            'required' =>  array('blog-enable-global','equals',true),
 			'title'    => esc_html__('Global Blog Posts Sidebar', 'flipmart'),
 			'subtitle' => esc_html__('Select sidebar that will display on all blog posts.', 'flipmart'),
			'data'     => 'sidebars'
		),

		array(
 			'id'       => 'blog-sidebar-position',
 			'type'     => 'button_set',
 			'title'    => esc_html__('Global Blog Sidebar Position', 'flipmart'),
 			'subtitle' => esc_html__('Controls the position of sidebar for all blog posts.', 'flipmart'),
			'options'  => array(
				'left'  => esc_html__( 'Left', 'flipmart' ),
				'right' => esc_html__( 'Right', 'flipmart' )
			),
			'default'  => 'right',
            'required' =>  array('blog-sidebar','not',''),
		)
	)
);

// Blog Posts Sidebar
$this->sections[] = array(
	'title'      => esc_html__('Blog Single', 'flipmart'),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'       => 'blog-single-enable-global',
			'type'	   => 'switch',
			'title'    => esc_html__('Activate Global Sidebar For Blog Single Post', 'flipmart'),
			'subtitle' => esc_html__('Turn on if you want to use the sidebars on blog single post.', 'flipmart'),
			'default'   => true,
            'on'        => esc_html__('Yes', 'flipmart'),
            'off'       => esc_html__('No', 'flipmart'),
		),

		array(
 			'id'       => 'blog-single-sidebar',
 			'type'     => 'select',
            'required' =>  array('blog-single-enable-global','equals',true),
 			'title'    => esc_html__('Global Blog Single Post Sidebar', 'flipmart'),
 			'subtitle' => esc_html__('Select sidebar that will display on blog single post.', 'flipmart'),
			'data'     => 'sidebars'
		),

		array(
 			'id'       => 'blog-single-sidebar-position',
 			'type'     => 'button_set',
 			'title'    => esc_html__('Global Blog Single Sidebar Position', 'flipmart'),
 			'subtitle' => esc_html__('Controls the position of sidebar for blog single post.', 'flipmart'),
			'options'  => array(
				'left'  => esc_html__( 'Left', 'flipmart' ),
				'right' => esc_html__( 'Right', 'flipmart' )
			),
			'default'  => 'right',
            'required' =>  array('blog-single-sidebar','not',''),
		)
	)
);

// Blog Archive Sidebar
$this->sections[] = array(
	'title'      => esc_html__('Blog Archive', 'flipmart'),
	'subsection' => true,
	'fields'     => array(
    
        array(
			'id'       => 'blog-archive-enable-global',
			'type'	   => 'switch',
			'title'    => esc_html__('Activate Global Sidebar For Archive Posts', 'flipmart'),
			'subtitle' => esc_html__('Turn on if you want to use the sidebars on all blog posts render on archive.', 'flipmart'),
			'default'   => true,
            'on'        => esc_html__('Yes', 'flipmart'),
            'off'       => esc_html__('No', 'flipmart'),
		),
        
		array(
 			'id'       => 'blog-archive-sidebar',
 			'type'     => 'select',
            'required' =>  array('blog-archive-enable-global','equals',true),
 			'title'    => esc_html__('Blog Archive Sidebar', 'flipmart'),
 			'subtitle' => esc_html__('Select sidebar that will display on the blog archive pages.', 'flipmart'),
			'data'     => 'sidebars'
		),
        
        array(
 			'id'       => 'blog-archive-sidebar-position',
 			'type'     => 'button_set',
 			'title'    => esc_html__('Archive Sidebar Position', 'flipmart'),
 			'subtitle' => esc_html__('Controls the position of sidebar for the Archive results page.', 'flipmart'),
			'options'  => array(
				'left'  => esc_html__( 'Left', 'flipmart' ),
				'right' => esc_html__( 'Right', 'flipmart' )
			),
			'default'  => 'right',
            'required' =>  array('blog-archive-sidebar','not',''),
		)
	)
);

// Search page Sidebar
$this->sections[] = array(
	'title'      => esc_html__('Search Page', 'flipmart'),
	'subsection' => true,
	'fields'     => array(
    
        array(
			'id'       => 'blog-search-enable-global',
			'type'	   => 'switch',
			'title'    => esc_html__('Activate Global Sidebar For Search Page', 'flipmart'),
			'subtitle' => esc_html__('Turn on if you want to use the sidebars on all blog posts render on search page.', 'flipmart'),
			'default'   => true,
            'on'        => esc_html__('Yes', 'flipmart'),
            'off'       => esc_html__('No', 'flipmart'),
		),
        
		array(
 			'id'       => 'search-sidebar',
 			'type'     => 'select',
            'required' =>  array('blog-search-enable-global','equals',true),
 			'title'    => esc_html__('Search Page Sidebar', 'flipmart'),
 			'subtitle' => esc_html__('Select sidebar that will display on the search results page.', 'flipmart'),
			'data'     => 'sidebars'
		),

		array(
 			'id'       => 'search-sidebar-position',
 			'type'     => 'button_set',
 			'title'    => esc_html__('Search Sidebar Position', 'flipmart'),
 			'subtitle' => esc_html__('Controls the position of sidebar for the search results page.', 'flipmart'),
			'options'  => array(
				'left'  => esc_html__( 'Left', 'flipmart' ),
				'right' => esc_html__( 'Right', 'flipmart' )
			),
			'default'  => 'right',
            'required' =>  array('search-sidebar','not',''),
		)
	)
);

// Shop Sidebar
$this->sections[] = array(
	'title'      => esc_html__('WooCommerce Shop', 'flipmart'),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'        => 'shop-enable-global',
			'type'	    => 'switch',
			'title'     => esc_html__('Activate Global Sidebar For WooCommerce Shop Page', 'flipmart'),
			'subtitle'  => esc_html__('Turn on if you want to use the sidebars on WooCommerce shop page.', 'flipmart'),
			'default'   => true,
            'on'        => esc_html__('Yes', 'flipmart'),
            'off'       => esc_html__('No', 'flipmart'),
		),

		array(
 			'id'        => 'shop-sidebar',
 			'type'      => 'select',
 			'title'     => esc_html__('Global WooCommerce Shop Page Sidebar', 'flipmart'),
 			'subtitle'  => esc_html__('Select sidebar that will display on all WooCommerce shop page.', 'flipmart'),
			'data'      => 'sidebars',
            'default'   => 'primary',
            'required'  => array('shop-enable-global','equals',true),
		),

		array(
 			'id'        => 'shop-sidebar-position',
 			'type'      => 'button_set',
 			'title'     => esc_html__('Global WooCommerce Page Sidebar Position', 'flipmart'),
 			'subtitle'  => esc_html__('Controls the position of sidebar for WooCommerce shop page.', 'flipmart'),
			'options'   => array(
				'left'  => esc_html__( 'Left', 'flipmart' ),
				'right' => esc_html__( 'Right', 'flipmart' )
			),
			'default'   => 'right',
            'required'  => array('shop-sidebar','not',''),
		)
	)
);

// Product Single Sidebar
$this->sections[] = array(
	'title'      => esc_html__('WooCommerce Single Product', 'flipmart'),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'        => 'product-enable-global',
			'type'	    => 'switch',
			'title'     => esc_html__('Activate Global Sidebar For WooCommerce Single Product', 'flipmart'),
			'subtitle'  => esc_html__('Turn on if you want to use the sidebars on WooCommerce single product.', 'flipmart'),
			'default'   => true,
            'on'        => esc_html__('Yes', 'flipmart'),
            'off'       => esc_html__('No', 'flipmart'),
		),

		array(
 			'id'        => 'product-sidebar',
 			'type'      => 'select',
 			'title'     => esc_html__('Global WooCommerce Single Product Sidebar', 'flipmart'),
 			'subtitle'  => esc_html__('Select sidebar that will display on all WooCommerce single product.', 'flipmart'),
			'data'      => 'sidebars',
            'default'   => 'primary',
            'required'  => array('product-enable-global','equals',true),
		),

		array(
 			'id'        => 'product-sidebar-position',
 			'type'      => 'button_set',
 			'title'     => esc_html__('Global WooCommerce Single Product Sidebar Position', 'flipmart'),
 			'subtitle'  => esc_html__('Controls the position of sidebar for WooCommerce single product.', 'flipmart'),
			'options'   => array(
				'left'  => esc_html__( 'Left', 'flipmart' ),
				'right' => esc_html__( 'Right', 'flipmart' )
			),
			'default'   => 'right',
            'required'  => array('product-sidebar','not',''),
		)
	)
);
