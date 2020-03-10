<?php
/**
 * Yog Core Custom Post Type Class
 * @package Yog Core
 * @category Core
 * @author CKthemes
 * @class Yog_Core_Testimonials
 * @version	2.4
 */
 
 if ( ! class_exists( 'Yog_Core_Testimonials' ) ) :
 
    Class Yog_Core_Testimonials{
        
        /**
    	 * Yog_Core_Testimonials Constructor.
    	 */
        function __construct() {
            
            $this->yog_core_register_post_type(); //Register Post Type
        }
        
        /**
    	 * Create Testimonial Custom Post Type.
    	 */
        public function yog_core_register_post_type(){
            /**
            * Post Type: Testimonials
            * Register Custom Post Type
            */
            $labels = array(
            	'name'                  => _x( 'Testimonials', 'Post Type General Name', 'yog' ),
            	'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'yog' ),
            	'menu_name'             => esc_html__( 'Testimonials', 'yog' ),
            	'name_admin_bar'        => esc_html__( 'Testimonial', 'yog' ),
            	'archives'              => esc_html__( 'Testimonial Archives', 'yog' ),
            	'parent_item_colon'     => esc_html__( 'Parent Item:', 'yog' ),
            	'all_items'             => esc_html__( 'All Items', 'yog' ),
            	'add_new_item'          => esc_html__( 'Add New Testimonial', 'yog' ),
            	'add_new'               => esc_html__( 'Add New', 'yog' ),
            	'new_item'              => esc_html__( 'New Testimonial', 'yog' ),
            	'edit_item'             => esc_html__( 'Edit Testimonial', 'yog' ),
            	'update_item'           => esc_html__( 'Update Testimonial', 'yog' ),
            	'view_item'             => esc_html__( 'View Testimonial', 'yog' ),
            	'search_items'          => esc_html__( 'Search Testimonials', 'yog' ),
            	'not_found'             => esc_html__( 'Not found', 'yog' ),
            	'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'yog' ),
            	'featured_image'        => esc_html__( 'Featured Image', 'yog' ),
            	'set_featured_image'    => esc_html__( 'Set featured image', 'yog' ),
            	'remove_featured_image' => esc_html__( 'Remove featured image', 'yog' ),
            	'use_featured_image'    => esc_html__( 'Use as featured image', 'yog' ),
            	'insert_into_item'      => esc_html__( 'Insert into Testimonial', 'yog' ),
            	'uploaded_to_this_item' => esc_html__( 'Uploaded to this Testimonial', 'yog' ),
            	'items_list'            => esc_html__( 'Items list', 'yog' ),
            	'items_list_navigation' => esc_html__( 'Items list navigation', 'yog' ),
            	'filter_items_list'     => esc_html__( 'Filter items list', 'yog' ),
            );
            $rewrite = array(
            	'slug'                  => 'testimonial',
            	'with_front'            => true,
            	'pages'                 => true,
            	'feeds'                 => false,
            );
            $args = array(
            	'label'                 => esc_html__( 'Testimonial', 'yog' ),
            	'labels'                => $labels,
            	'supports'              => array( 'title', 'thumbnail' ),
            	'hierarchical'          => false,
            	'public'                => true,
            	'show_ui'               => true,
            	'show_in_menu'          => true,
            	'menu_position'         => 25.3,
            	'menu_icon'             => 'dashicons-format-status',
            	'show_in_admin_bar'     => true,
            	'show_in_nav_menus'     => false,
            	'can_export'            => true,
            	'has_archive'           => 'testimonials',
            	'exclude_from_search'   => false,
            	'publicly_queryable'    => true,
            	'query_var'             => 'testimonials',
            	'rewrite'               => $rewrite,
            	'capability_type'       => 'page',
            );
            register_post_type( 'testimonial', $args );
        }
    }
    
    /**
     * Instantiates the Class
     */
    new Yog_Core_Testimonials();
 
 endif;