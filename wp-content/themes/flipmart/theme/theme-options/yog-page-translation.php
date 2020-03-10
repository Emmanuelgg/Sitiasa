<?php
/*
 * Page Translation
*/

$this->sections[] = array (
	'title'  => esc_html__( 'Translation', 'flipmart' ),
	'subsection' => true,
	'fields' => array(

		array(
            'id'       => 'enable-translation',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Theme Translation', 'flipmart'),
            'default'  => true,
            'on'       => esc_html__('Yes', 'flipmart'),
            'off'      => esc_html__('No', 'flipmart'),
        ),
        
        array(
			'id'       => 'info_tr_blog_comments',
			'type'     => 'info',
            'style'    => 'info',
			'title'    => esc_html__('Blog Comments Translation', 'flipmart')
		),
        
        array(
            'id'       => 'tr-blog-comment',
            'type'     => 'text',
            'title'    => esc_html__('Blog Comment', 'flipmart'),
            'default'  => esc_html__( 'Comment', 'flipmart' ),
            'subtitle' => esc_html__( 'Blog Comment Template Singular Comment', 'flipmart' )
        ),
        
        array(
            'id'       => 'tr-blog-comments',
            'type'     => 'text',
            'title'    => esc_html__('Blog Comments', 'flipmart'),
            'default'  => esc_html__( 'Comments', 'flipmart' ),
            'subtitle' => esc_html__( 'Blog Comment Template Comments', 'flipmart' )
        ),
        
        array(
            'id'       => 'tr-blog-comment-off',
            'type'     => 'text',
            'title'    => esc_html__('Blog Comment Off', 'flipmart'),
            'default'  => esc_html__( 'Comment Off', 'flipmart' ),
            'subtitle' => esc_html__( 'Blog Comment Template Comments Off', 'flipmart' )
        ),
        
        array(
			'id'       => 'info_tr_blog_search',
			'type'     => 'info',
            'style'    => 'info',
			'title'    => esc_html__('Blog Search Translation', 'flipmart')
		),
        
        array(
            'id'       => 'tr-blog-comment-reply',
            'type'     => 'text',
            'title'    => esc_html__('Blog Comment Reply', 'flipmart'),
            'default'  => esc_html__( 'Reply', 'flipmart' ),
            'subtitle' => esc_html__( 'Blog Comment Template Comments Reply', 'flipmart' )
        ),
        
        array(
            'id'       => 'tr-blog-search',
            'type'     => 'text',
            'title'    => esc_html__('Search Form', 'flipmart'),
            'default'  => esc_html__( 'Search..', 'flipmart' ),
            'subtitle' => esc_html__( 'Enter Search Form Placholder', 'flipmart' )
        ),
        
        array(
            'id'       => 'tr-blog-search-result',
            'type'     => 'text',
            'title'    => esc_html__('Search Form Result', 'flipmart'),
            'default'  => esc_html__( 'Search Result of %s', 'flipmart' ),
            'subtitle' => esc_html__( 'Enter Search Form Result', 'flipmart' )
        )
	)
);
