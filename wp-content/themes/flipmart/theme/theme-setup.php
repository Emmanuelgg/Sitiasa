<?php
/**
 * Theme Framework
 * The Yog_Theme initiate the theme engine
 */

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//Theme support
function yog_theme_support() {
    
    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );
    
    //Theme Support
    add_theme_support( 'custom-header', array() );
    add_theme_support( 'custom-background', array() );
    
    // Custom Post Type Supports
    add_theme_support( 'team' );
    add_theme_support( 'testimonial' );
    
    // Custom Extensions
    add_theme_support( 'yog-extension', array(
    	'mega-menu',
        'pagination'
    ) );

    //Woocommerce
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );  
}
add_action( 'after_setup_theme', 'yog_theme_support' );

// Set theme options
yog()->set_option_name( 'flipmart' );

//Set Theme Options
add_theme_support( 'yog-theme-options', array(
	'general',
	'header',
	'logo',
	'footer',
	'sidebars',
	'typography',
	'blog',
    'woocommerce',
    'extras',
	'advanced',
	'custom-code',
	'export'
));

if( yog_helper()->yog_check_layout( 'drink' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    //Set available metaboxes
    add_theme_support( 'yog-metaboxes', array(
    	'page',
        'post-formate',
    	'testimonial',
        'woocommerce',
    )); 
    
    //See http://codex.wordpress.org/Post_Formats
    add_theme_support( 'post-formats', array(
    	'image', 'gallery'
    ) );
    
}else{
    
   //Set available metaboxes
    add_theme_support( 'yog-metaboxes', array(
    	'page',
    	'testimonial',
        'woocommerce',
    )); 
    
}

if( ( yog_helper()->yog_check_layout( 'drink' ) || yog_helper()->yog_check_layout( 'book' ) || yog_helper()->yog_check_layout( 'gym' ) || yog_helper()->yog_check_layout( 'restaurant' ) ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    register_nav_menus( array(
       'primary'     => esc_html__( 'Primary Menu', 'flipmart' ),
       'footer' => esc_html__( 'Footer Menu', 'flipmart' )
    ));
    
}elseif( ( yog_helper()->yog_check_layout( 'cosmetic' ) || yog_helper()->yog_check_layout( 'shoes' ) || yog_helper()->yog_check_layout( 'seo' ) || yog_helper()->yog_check_layout( 'mobile' ) || yog_helper()->yog_check_layout( 'lawyer' ) || yog_helper()->yog_check_layout( 'hosting' ) || yog_helper()->yog_check_layout( 'jewellery' ) || yog_helper()->yog_check_layout( 'engineer' ) || yog_helper()->yog_check_layout( 'finances' ) || yog_helper()->yog_check_layout( 'furniture' ) || yog_helper()->yog_check_layout( 'glasses' ) || yog_helper()->yog_check_layout( 'bw' ) || yog_helper()->yog_check_layout( 'ray' ) ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    register_nav_menus( array(
       'primary'     => esc_html__( 'Primary Menu', 'flipmart' )
    ));
    
}else{
    
    register_nav_menus( array(
       'primary'  => esc_html__( 'Primary Menu', 'flipmart' ),
       'top-bar'  => esc_html__( 'Top Bar Menu', 'flipmart' )
    ));
    
}

// Tell the TinyMCE editor to use a custom stylesheet
add_editor_style( get_template_directory_uri().'/assets/css/editor-style.css' );

// Register Widgets Area.
function yog_widgets_init() {
    
    $yog_sidebars = $yog_args = array();
    $yog_footer_sidebars = 4;
    
    if( 'woomart' == yog_helper()->yog_get_layout( 'version' ) ){
        
        //Primary Sidebar
        register_sidebar( array(
    		'name'          => esc_html__( 'Default Sidebar Widget Area', 'flipmart' ),
    		'id'            => 'primary',
    		'description'   => esc_html__( 'Appears in primary sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="sidebar-widget outer-bottom-small clearfix %2$s">',
    		'after_widget'  => '</div></div>',
    		'before_title'  => '<h2 class="widget-title">',
    		'after_title'   => '</h2><div class="content">',
    	) );
        
    }else{
        
        //Primary Sidebar
        register_sidebar( array(
    		'name'          => esc_html__( 'Default Sidebar Widget Area', 'flipmart' ),
    		'id'            => 'primary',
    		'description'   => esc_html__( 'Appears in primary sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="sidebar-widget outer-bottom-small clearfix %2$s">',
    		'after_widget'  => '</div><div class="clearfix"></div>',
    		'before_title'  => '<h3 class="section-title">',
    		'after_title'   => '</h3>',
    	) );
        
    }
    
    
    //Woocommerce Sidebar
    register_sidebar( array(
		'name'          => esc_html__( 'Woocommerce Widget Area', 'flipmart' ),
		'id'            => 'woocommerce',
		'description'   => esc_html__( 'Appears in woocommerce sidebar area.', 'flipmart' ),
		'before_widget' => '<div id="%1$s" class="sidebar-widget outer-bottom-small %2$s">',
		'after_widget'  => '</div><div class="clearfix"></div>',
		'before_title'  => '<h3 class="section-title">',
		'after_title'   => '</h3>',
	 ) );
         
    //Footer Sidebar
    if( yog_helper()->yog_check_layout( 'fashion' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){        
        
         //Footer
         for ( $i = 0; $i < $yog_footer_sidebars; $i++ ){
            $yog_sidebars['footer-' . ( $i + 1 )] = array(
                'name'          => esc_html__( 'Footer ', 'flipmart' ) . ( $i + 1 ),
                'description'   => esc_html__( 'A widget area loaded in the footer of the site.', 'flipmart' ),
                'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        		'after_widget'  => '</div>',
        		'before_title'  => '<h4>',
        		'after_title'   => '</h4>',
            );
        } 
           
    }elseif( yog_helper()->yog_check_layout( 'flower' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){     
        
        //Footer
         for ( $i = 0; $i < $yog_footer_sidebars; $i++ ){
            $yog_sidebars['footer-' . ( $i + 1 )] = array(
                'name'          => esc_html__( 'Footer ', 'flipmart' ) . ( $i + 1 ),
                'description'   => esc_html__( 'A widget area loaded in the footer of the site.', 'flipmart' ),
                'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        		'after_widget'  => '</div>',
        		'before_title'  => '<h3 class="mb-3 f-title">',
        		'after_title'   => '</h3>',
            );
        } 
        
    }elseif( yog_helper()->yog_check_layout( 'autoparts' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){     
        
        //Footer
         for ( $i = 0; $i < $yog_footer_sidebars; $i++ ){
            $yog_sidebars['footer-' . ( $i + 1 )] = array(
                'name'          => esc_html__( 'Footer ', 'flipmart' ) . ( $i + 1 ),
                'description'   => esc_html__( 'A widget area loaded in the footer of the site.', 'flipmart' ),
                'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        		'after_widget'  => '</div>',
        		'before_title'  => '<h6 class="f-title font-weight-medium text-uppercase">',
        		'after_title'   => '</h6>',
            );
        } 
        
    }elseif( yog_helper()->yog_check_layout( 'book' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
         
         //Footer
         register_sidebar( array(
    		'name'          => esc_html__( 'Footer Widget Area', 'flipmart' ),
    		'id'            => 'footer',
    		'description'   => esc_html__( 'Appears in footer sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="footer-widget col-xs-12 col-sm-6 col-md-3 clearfix %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>',
    	 ) );
         
    }elseif( yog_helper()->yog_check_layout( 'cosmetic' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
        
         //Footer
         register_sidebar( array(
    		'name'          => esc_html__( 'Footer Widget Area', 'flipmart' ),
    		'id'            => 'footer',
    		'description'   => esc_html__( 'Appears in footer sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="footer-widget col-sm-3 %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>',
    	 ) );
        
    }elseif( yog_helper()->yog_check_layout( 'electro' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
         
         //Footer
         register_sidebar( array(
    		'name'          => esc_html__( 'Footer Widget Area', 'flipmart' ),
    		'id'            => 'footer',
    		'description'   => esc_html__( 'Appears in footer sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="footer-widget col-xs-12 col-sm-6 col-md-3 %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>',
    	 ) );
        
    }elseif( yog_helper()->yog_check_layout( 'engineer' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
         
         //Footer
         register_sidebar( array(
    		'name'          => esc_html__( 'Footer Widget Area', 'flipmart' ),
    		'id'            => 'footer',
    		'description'   => esc_html__( 'Appears in footer sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="col-xs-12 col-sm-6 col-md-4 footer-widget-area %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4 class="header-widget">',
    		'after_title'   => '</h4>',
    	 ) );
        
    }elseif( yog_helper()->yog_check_layout( 'furniture' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
        
         //Footer
         register_sidebar( array(
    		'name'          => esc_html__( 'Footer Widget Area', 'flipmart' ),
    		'id'            => 'footer',
    		'description'   => esc_html__( 'Appears in footer sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="col-sm-3 footer-widget-area %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3><div class="furniture-footer-line"></div>',
    	 ) );
        
    }elseif( yog_helper()->yog_check_layout( 'finances' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
        
         //Footer
         for ( $i = 0; $i < $yog_footer_sidebars; $i++ ){
            $yog_sidebars['footer-' . ( $i + 1 )] = array(
                'name'          => esc_html__( 'Footer ', 'flipmart' ) . ( $i + 1 ),
                'description'   => esc_html__( 'A widget area loaded in the footer of the site.', 'flipmart' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
        		'after_widget'  => '</div>',
        		'before_title'  => '<h3>',
        		'after_title'   => '</h3><div class="footer-border"></div>',
            );
         }
        
    }elseif( yog_helper()->yog_check_layout( 'glasses' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
        
         //Footer
         register_sidebar( array(
    		'name'          => esc_html__( 'Footer Widget Area', 'flipmart' ),
    		'id'            => 'footer',
    		'description'   => esc_html__( 'Appears in footer sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="col-xs-12 col-sm-6 col-md-3 footer-widget-area %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>',
    	 ) );
        
    }elseif( yog_helper()->yog_check_layout( 'gym' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
        
         //Footer
         register_sidebar( array(
    		'name'          => esc_html__( 'Footer Widget Area', 'flipmart' ),
    		'id'            => 'footer',
    		'description'   => esc_html__( 'Appears in footer sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="col-sm-3 footer-widget-area %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>',
    	 ) );
        
    }elseif( yog_helper()->yog_check_layout( 'hosting' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
        
         //Footer
         register_sidebar( array(
    		'name'          => esc_html__( 'Footer Widget Area', 'flipmart' ),
    		'id'            => 'footer',
    		'description'   => esc_html__( 'Appears in footer sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="col-xs-12 col-sm-6 col-md-3 footer-widget-area %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4><div class="divider"></div>',
    	 ) );
        
    }elseif( yog_helper()->yog_check_layout( 'kidswear' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
        
         //Footer
         register_sidebar( array(
    		'name'          => esc_html__( 'Footer Widget Area', 'flipmart' ),
    		'id'            => 'footer',
    		'description'   => esc_html__( 'Appears in footer sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="col-xs-12 col-sm-6 col-md-3 footer-widget-area %2$s">',
    		'after_widget'  => '</div></div>',
    		'before_title'  => '<div class="footer-nav"><h3>',
    		'after_title'   => '</h3>',
    	 ) );
        
    }elseif( yog_helper()->yog_check_layout( 'jewellery' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
        
         //Footer
         register_sidebar( array(
    		'name'          => esc_html__( 'Footer Widget Area', 'flipmart' ),
    		'id'            => 'footer',
    		'description'   => esc_html__( 'Appears in footer sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="col-sm-3 footer-widget-area %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>',
    	 ) );
        
    }elseif( yog_helper()->yog_check_layout( 'lawyer' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
        
         //Footer
         register_sidebar( array(
    		'name'          => esc_html__( 'Footer Widget Area', 'flipmart' ),
    		'id'            => 'footer',
    		'description'   => esc_html__( 'Appears in footer sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 footer-widget-area %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>',
    	 ) );
        
    }elseif( yog_helper()->yog_check_layout( 'lingerie' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
        
         //Footer
         register_sidebar( array(
    		'name'          => esc_html__( 'Footer Widget Area', 'flipmart' ),
    		'id'            => 'footer',
    		'description'   => esc_html__( 'Appears in footer sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="col-xs-12 col-sm-6 col-md-3 footer-widget-area %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>',
    	 ) );
        
    }elseif( yog_helper()->yog_check_layout( 'mobile' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
        
         //Footer
         register_sidebar( array(
    		'name'          => esc_html__( 'Footer Widget Area', 'flipmart' ),
    		'id'            => 'footer',
    		'description'   => esc_html__( 'Appears in footer sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="col-sm-4 footer-widget-area %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>',
    	 ) );
         
      }elseif( yog_helper()->yog_check_layout( 'seo' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
        
         //Footer
         register_sidebar( array(
    		'name'          => esc_html__( 'Footer Widget Area', 'flipmart' ),
    		'id'            => 'footer',
    		'description'   => esc_html__( 'Appears in footer sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="col-sm-4 footer-widget-area %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3><div class="seo-footer-border"></div>',
    	 ) );
         
      }elseif( yog_helper()->yog_check_layout( 'shoes' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
        
         //Footer
         register_sidebar( array(
    		'name'          => esc_html__( 'Footer Widget Area', 'flipmart' ),
    		'id'            => 'footer',
    		'description'   => esc_html__( 'Appears in footer sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="col-xs-12 col-sm-6 col-md-4 footer-widget-area %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>',
    	 ) );
         
      }elseif( 'woomart' == yog_helper()->yog_get_layout( 'version' ) ){
        
        //Footer One Sidebar
        register_sidebar( array(
    		'name'          => esc_html__( 'Footer One Widget Area', 'flipmart' ),
    		'id'            => 'footer-1',
    		'description'   => esc_html__( 'Appears in footer one sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="footer widget clearfix %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>',
    	) );
        
        //Footer Two Sidebar
        register_sidebar( array(
    		'name'          => esc_html__( 'Footer Two Widget Area', 'flipmart' ),
    		'id'            => 'footer-2',
    		'description'   => esc_html__( 'Appears in footer two sidebar area.', 'flipmart' ),
    		'before_widget' => '<div id="%1$s" class="footer-column clearfix %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>',
    	) );
    
      }elseif( 'default' == yog_helper()->yog_get_layout( 'version' ) ){
         
         //Footer
         for ( $i = 0; $i < $yog_footer_sidebars; $i++ ){
            $yog_sidebars['footer-' . ( $i + 1 )] = array(
                'name'          => esc_html__( 'Footer ', 'flipmart' ) . ( $i + 1 ),
                'description'   => esc_html__( 'A widget area loaded in the footer of the site.', 'flipmart' ),
                'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        		'after_widget'  => '</div></div>',
        		'before_title'  => '<div class="module-heading"><h4 class="module-title">',
        		'after_title'   => '</h4></div><div class="module-body">',
            );
        }
        
    }
    
    
    //Footer Sidebar.
    if( isset( $yog_sidebars ) && !empty( $yog_sidebars ) ){
        foreach( $yog_sidebars as $yog_id => $yog_arg ){
            $yog_args = $yog_arg;
            $yog_args['id'] = ( isset( $yog_arg[$yog_id] ) ? sanitize_key( $yog_arg[$yog_id] ) : sanitize_key( $yog_id ) );
            
            // Register the sidebar.
            register_sidebar( $yog_args );
        } 
    }
}
add_action( 'widgets_init', 'yog_widgets_init' );

function yog_get_column( $column = '' ) {
    
    //Check
    if( empty( $column ) ){
        return;
    }
    
    //Create Column class array.
    $yog_columns = array(
        '1' => 'col-md-12',
        '2' => 'col-md-6',
        '3' => 'col-md-4',
        '4' => 'col-md-3',
        '6' => 'col-md-2',
    );
    
    return $yog_columns[$column];
}

function yog_column( $columns = ''  ){
    echo yog_get_column( $columns );
}

posts_nav_link();
paginate_links();
the_posts_pagination();
the_posts_navigation();
next_posts_link();
previous_posts_link();
get_post_format();