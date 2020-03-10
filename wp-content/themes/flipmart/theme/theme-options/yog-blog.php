<?php
/*
 * Blog
 */

$this->sections[] = array(
	'title'  =>   esc_html__('Blog', 'flipmart'),
	'icon'   => 'el-icon-file-edit'
);

$this->sections[] = array(
	'title'      => esc_html__('General', 'flipmart'),
	'subsection' => true,
	'fields'     => array(
    
        array(
            'title'       => esc_html__('Animation', 'flipmart'),
			'type'        => 'select',
			'id'          => 'blog-animation',
			'options'     => array_flip( yog_get_theme_animations() ),
			'description' => esc_html__('Choose Animation from the drop down list.', 'flipmart'),
		 ), 
         
         array(
            'title'       => esc_html__( 'Delay','flipmart'),
            'type'        => 'text',
            'id'          => 'blog-delay',
         )
	)
);

// Blog Single Post
$this->sections[] = array(
	'title'      =>   esc_html__('Single Post', 'flipmart'),
	'subsection' => true,
	'fields'     => array(
        
        array(
			'id'         => 'info-blog-social-share',
			'type'       => 'info',
			'desc'       =>  esc_html__('Blog Post Social Share Links', 'flipmart')
		), 
        
        array(
			'id'         => 'post-social-share',
			'type'	     => 'switch',
			'title'      => esc_html__('Social Share', 'flipmart'),
			'subtitle'   => esc_html__( 'Did You Like This Post? Please Share on', 'flipmart' ),
			'default'    => true,
            'on'         => esc_html__('Yes', 'flipmart'),
            'off'        => esc_html__('No', 'flipmart')
		), 
        
        array(
			'id'         => 'info-blog-author',
			'type'       => 'info',
			'desc'       =>  esc_html__('Blog Author Bio', 'flipmart')
		),  
        
        array(
			'id'         => 'blog-author-box',
			'type'	     => 'switch',
			'title'      => esc_html__('Author Info Box', 'flipmart'),
			'subtitle'   => esc_html__('Turn on to display the author info box below posts.', 'flipmart'),
			'default'    => true,
            'on'         => esc_html__('Yes', 'flipmart'),
            'off'        => esc_html__('No', 'flipmart')
		),           
         
        array(
			'id'         => 'info-single-animation',
			'type'       => 'info',
			'desc'       => esc_html__('Blog Single Animation', 'flipmart')
		),  
                  
        array(
            'title'       => esc_html__('Animation', 'flipmart'),
			'type'        => 'select',
			'id'          => 'blog-single-animation',
			'options'     => array_flip( yog_get_theme_animations() ),
			'description' => esc_html__('Choose Animation from the drop down list.', 'flipmart'),
		 ), 
         
         array(
            'title'       => esc_html__( 'Delay','flipmart'),
            'type'        => 'text',
            'id'          => 'blog-single-delay',
         )
	)
);

// Blog Excerpt Setting   
$this->sections[] = array(
    'title'      => esc_html__('Blog Post Excerpt', 'flipmart'),
    'subsection' => true,
    'fields'     => array( 
    
        array(
			'id'        => 'info_blog_exc_keys',
			'type'      => 'info',
			'desc'      => esc_html__('Excerpt Settings', 'flipmart')
		),
        
        array(
            'id'        => 'excerpt-by',
            'type'      => 'select',
            'title'     => esc_html__('Length by', 'flipmart'),
            'options'   => array(
                ''      => '',
                'words' => esc_html__( 'Words', 'flipmart' ),
                'chars' => esc_html__( 'Character', 'flipmart' ),
            ),
            'default'   => 'words'
        ),
        
        array(
            'id'        => 'excerpt-length',
            'type'      => 'slider',
            'title'     => esc_html__('Excerpt Length', 'flipmart'),
            'subtitle'  => esc_html__('Choose Excerpt Length of portfolio posts on archive portfolio page.', 'flipmart'),
            'desc'      => esc_html__('Slider description. Min: 1, max: 200, step: 1, default value: 120', 'flipmart'),
            'default'   => 30,
            'min'       => 1,
            'step'      => 1,
            'max'       => 200
        ),
        
        array(
    		'title'     => esc_html__( 'Ellipsis', 'flipmart' ),
    		'type'      => 'text',
            'id'        => 'excerpt-ellipsis',
            'default'   => esc_html__( '&hellip;', 'flipmart' ),
    	),
        
        array(
    		'title'     => esc_html__( 'Before Text', 'flipmart' ),
    		'type'      => 'text',
            'subtitle'  => esc_html__('Additional information appear before read more link', 'flipmart'),
            'id'        => 'excerpt-before',
            'default'   => '<p>',
    	),
        
        array(
    		'title'     => esc_html__( 'After Text', 'flipmart' ),
    		'type'      => 'text',
            'subtitle'  => esc_html__('Additional information appear after read more link', 'flipmart'),
            'id'        => 'excerpt-after',
            'default'   => '</p>',
    	),
        
        array(
            'title'     => esc_html__('Show Read More', 'flipmart'),
            'id'        => 'excerpt-readmore',
            'type'      => 'switch',
            'subtitle'  => esc_html__('If yes, will be show the Read More Link.', 'flipmart'),
            'default'   => true,
            'on'        => esc_html__('Yes', 'flipmart'),
            'off'       => esc_html__('No', 'flipmart'),
        ),
        
        array(
    		'title'     => esc_html__( 'Link Text', 'flipmart' ),
    		'type'      => 'text',
            'default'   => esc_html__( 'Read More', 'flipmart' ),
            'id'        => 'excerpt-readmore-txt',
            'subtitle'  => esc_html__('Insert text fo ream more link.', 'flipmart'),
    	)
    )
);
