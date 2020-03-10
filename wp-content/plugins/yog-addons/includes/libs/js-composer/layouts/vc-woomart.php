<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map WooMart
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 */
/*-------------------------------------------------------------------------------
|				Flipmart:  Row Setting / Element Map				            |						
--------------------------------------------------------------------------------*/
    
    vc_map( array(
        'name'         =>  esc_html__( 'Row', 'yog' ),
        'base'         => 'vc_row',
        'is_container' => true,
        'icon'         => 'icon-wpb-row',
        'show_settings_on_create' => false,
        'category'     =>  esc_html__( 'Content', 'yog' ),
        'description'  =>  esc_html__( 'Place content elements inside the row', 'yog' ),
        'params'       => array(
        
            array(
            	'type'       => 'dropdown',
            	'heading'    =>  esc_html__( 'Row', 'yog' ),
            	'param_name' => 'full_width',
            	'value'      => array(
            		esc_html__( 'Default', 'yog' )       => '',
                    esc_html__( 'Fullwidth Row', 'yog' ) => 'stretch_row',
            		esc_html__( 'Fluid Row', 'yog' )     => 'stretch_row_fluid',
                    esc_html__( 'Special Row', 'yog' )   => 'stretch_row_special'
            	)
            ),
            
            array(
                'heading'     =>  esc_html__( 'Row Skin', 'yog' ),
            	'type'        => 'dropdown',
            	'param_name'  => 'yog_skin',
            	'value'       => array(
            		 esc_html__( 'Default', 'yog' )      => '',
                     esc_html__( 'Section Space' )       => 'no-space'
            	),
            	'description' =>  esc_html__( 'Select Row Container Class.', 'yog' )
            ),
            
            array(
            	'type'       => 'dropdown',
            	'heading'    =>  esc_html__( 'Columns gap', 'yog' ),
            	'param_name' => 'gap',
            	'value' => array(
            		'0px'  => '0',
            		'1px'  => '1',
            		'2px'  => '2',
            		'3px'  => '3',
            		'4px'  => '4',
            		'5px'  => '5',
            		'10px' => '10',
            		'15px' => '15',
            		'20px' => '20',
            		'25px' => '25',
            		'30px' => '30',
            		'35px' => '35',
            	),
            	'std'         => '0',
            	'description' =>  esc_html__( 'Select gap between columns in row.', 'yog' ),
            ),
            
            array(
            	'type'        => 'el_id',
            	'heading'     =>  esc_html__( 'Row ID', 'yog' ),
            	'param_name'  => 'el_id',
            	'description' => sprintf(  esc_html__( 'Enter row ID (Note: make sure it is unique and valid according to <a href="%s" target="_blank">w3c specification</a>).', 'yog' ), 'http://www.w3schools.com/tags/att_global_id.asp' ),
            ),
            
            array(
            	'type'        => 'checkbox',
            	'heading'     =>  esc_html__( 'Disable row', 'yog' ),
            	'param_name'  => 'disable_element', // Inner param name.
            	'description' =>  esc_html__( 'If checked the row won\'t be visible on the public side of your website. You can switch it back any time.', 'yog' ),
            	'value'       => array(  esc_html__( 'Yes', 'yog' ) => 'yes' ),
            ),
            
            array(
            	'type'        => 'textfield',
            	'heading'     =>  esc_html__( 'Extra class name', 'yog' ),
            	'param_name'  => 'el_class',
            	'description' =>  esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'yog' ),
            ),
            
            array(
            	'type'        => 'css_editor',
            	'heading'     =>  esc_html__( 'CSS box', 'yog' ),
            	'param_name'  => 'css',
            	'group'       =>  esc_html__( 'Design Options', 'yog' ),
            )
        ),
        'js_view' => 'VcRowView',
        )
    );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Blog Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('WooMart Blog Posts', 'yog'),
	  'base'        => 'yog_blog_posts',
	  'class'       => 'icon_yog_blog_posts',
	  'icon'	    => 'icon-wpb-ui-separator',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart WooMart', 'yog'),
	  'description' => esc_html__( 'Insert Blog Posts', 'yog' ),
	  'params'      => array(

            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading'
            ),
            
            array(
                  'heading'     => esc_html__('Columns', 'yog'),
    			  'type'        => 'dropdown',
    			  'param_name'  => 'yog_column',
                  'admin_label' => true,
    			  'value'       => array(
                      __('Default Column', 'yog') => '',
                      __('Full Column', 'yog')    => '1',
    				  __('Two Column', 'yog')     => '2',
    				  __('Three Column', 'yog')   => '3',
                      __('Four Column', 'yog')    => '4',
    			  ),
    			  'description' => __('Select Number Of Column', 'yog'),
    		),
            
            array(
                'heading'     => esc_html__( 'Number Of Posts','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_limit',
            ),
            
            array(
        		'type'        => 'autocomplete',
        		'heading'     => esc_html__( 'Choose Categories', 'yog' ),
        		'param_name'  => 'taxonomie',
        		'settings'    => array(
        			'multiple'       => true,
        			'min_length'     => 1,
        			'groups'         => true,
        			'unique_values'  => true,
        			'display_inline' => true,
        			'delay'          => 500,
        			'auto_focus'     => true,
        		),
        		'param_holder_class' => 'vc_not-for-custom',
        		'description'        => esc_html__( 'Enter categories of blog posts.', 'yog' ),
        	),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
         )
       )
    );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Testimonial Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('WooMart Testimonials', 'yog'),
	  'base'        => 'yog_testimonials',
	  'class'       => 'icon_yog_testimonials',
	  'icon'	    => 'icon-wpb-ui-separator',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart WooMart', 'yog'),
	  'description' => esc_html__( 'Insert Testimonials', 'yog' ),
	  'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Number Of Posts','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_limit',
            ),
            
            array(
        		'type'        => 'autocomplete',
        		'heading'     => esc_html__( 'Choose Designation', 'yog' ),
        		'param_name'  => 'taxonomie',
        		'settings'    => array(
        			'multiple'       => true,
        			'min_length'     => 1,
        			'groups'         => true,
        			'unique_values'  => true,
        			'display_inline' => true,
        			'delay'          => 500,
        			'auto_focus'     => true,
        		),
        		'param_holder_class' => 'vc_not-for-custom',
        		'description'        => esc_html__( 'Enter Designation Of Testimonail Posts.', 'yog' ),
        	),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
         )
       )
    );
  
/*-------------------------------------------------------------------------------
|				Flipmart:  Banner Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('WooMart Banner', 'yog'),
	  'base'        => 'yog_banner',
	  'class'       => 'icon_yog_banner',
	  'icon'	    => 'icon-wpb-ui-separator',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart WooMart', 'yog'),
	  'description' => esc_html__( 'Insert Banner Content', 'yog' ),
	  'params'      => array(

            array(
                  'heading'     => esc_html__('Columns', 'yog'),
    			  'type'        => 'dropdown',
    			  'param_name'  => 'yog_column',
                  'admin_label' => true,
    			  'value'       => array(
                      __('Default Column', 'yog') => '',
                      __('Full Column', 'yog')    => '1',
    				  __('Two Column', 'yog')     => '2',
    				  __('Three Column', 'yog')   => '3',
                      __('Four Column', 'yog')    => '4',
    			  ),
    			  'description' => __('Select Number Of Column', 'yog'),
    		),
            
            array(
               'type' => 'param_group',
               'value' => '',
               'param_name' => 'yog_banners',
               'params' => array(
               
                    array(
                          'heading'     => esc_html__('Style', 'yog'),
            			  'type'        => 'dropdown',
            			  'param_name'  => 'yog_style',
                          'admin_label' => true,
            			  'value'       => array(
                              __('Image Banner', 'yog') => 'image',
                              __('Text Banner', 'yog')  => 'text'
            			  ),
            			  'description' => __('Select Banner Image', 'yog'),
            		),
            
                    array(
                          'heading'     => esc_html__('Banner Color', 'yog'),
            			  'type'        => 'dropdown',
            			  'param_name'  => 'yog_color',
                          'admin_label' => true,
            			  'value'       => array(
                              __('Black', 'yog')  => 'block1',
                              __('Red', 'yog')    => 'block2'
            			  ),
            			  'description' => __('Select Banner Color', 'yog'),
                           
            		),
                    
                    array(
                        'heading'     => __( 'Background Image', 'yog' ),
            			'type'        => 'attach_image',
            			'param_name'  => 'yog_image',
            			'value'       => '',
            			'description' => esc_html__( 'Select image from media library.', 'yog' ),
            		),
                    
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'admin_label' => true,
                        'param_name'  => 'yog_heading'
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Description','yog'),
                        'type'        => 'textarea',
                        'value'       => '',
                        'param_name'  => 'yog_description',
                    ),
                    
                    array(
                        'heading'    => esc_html__( 'Link','yog'),
                        'type'       => 'vc_link',
                        'value'      => '',
                        'param_name' => 'yog_link',
                    ),
                    
                    array(
                        'heading'     => esc_html__('Animation', 'yog'),
            			'type'        => 'dropdown',
            			'param_name'  => 'yog_animation',
            			'value'       => yog_get_animations(),
            			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
            		),
                     
                    array(
                        'heading'     => esc_html__( 'Delay','yog'),
                        'type'        => 'textfield',
                        'param_name'  => 'yog_delay',
                    )
               )
            )
         )
       )
    );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Product Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('WooMart Product Slider', 'yog'),
	  'base'        => 'yog_banner_slider',
	  'class'       => 'icon_yog_banner_slider',
	  'icon'	    => 'icon-wpb-ui-separator',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart WooMart', 'yog'),
	  'description' => esc_html__( 'Insert Banner Slider', 'yog' ),
	  'params'      => array(
              
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading'
            ),
            
            array(
                'heading'     => esc_html__( 'Description','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_description',
            ),
            
            array(
                'heading'     => esc_html__( 'Discount','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_discount'
            ),
            
            array(
				'type'        => 'textfield',
				'heading'     => __( 'Per page', 'js_composer' ),
				'value'       => 12,
				'save_always' => true,
				'param_name'  => 'limit',
				'description' => __( 'The "limit" shortcode determines how many products to show on the page', 'js_composer' ),
			)
         )
       )
    );
    
/**
 * Check if WooCommerce is active
 **/
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'woocommerce/woocommerce.php' ) || is_plugin_active_for_network( 'woocommerce/woocommerce.php' ) && class_exists('Woocommerce') ) {

/*-------------------------------------------------------------------------------
|				Flipmart:  Hot Product Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('Flipmart Hot Product', 'yog'),
	  'base'        => 'yog_hot_products',
	  'class'       => 'icon_yog_hot_product',
	  'icon'	    => 'icon-wpb-ui-separator',
	  'weight'      => 101,
	  'category'    => esc_html__('WooCommerce', 'yog'),
	  'description' => esc_html__( 'Insert WooCommerce Hot Product', 'yog' ),
	  'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Hot Product','yog'),
                'type'        => 'dropdown',
                'value'       => yog_get_hot_product(),
                'param_name'  => 'yog_hot_product',
            ),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
         )
       )
    );
        
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce products / Element Shortcode			|						
--------------------------------------------------------------------------------*/        
  vc_map( array(
		'name'        => esc_html__( 'Products', 'yog' ),
		'base'        => 'yog_products',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'Show multiple products by ID or SKU.', 'yog' ),
		'params'      => array(
            
            array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Style', 'yog' ),
				'param_name'    => 'style',
				'value' => array(
                    esc_html__('Style Slider', 'yog') => 'one', 
                    esc_html__('Style Grid', 'yog')   => 'three',
                    esc_html__('Style List', 'yog')   => 'two'
                ),
				'save_always'   => true,
				'description'   =>  esc_html__( 'Select how to show product', 'yog' ),
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'heading',
                'dependency'    => array( 'element'   => 'style', 'value' => array( 'one' ) ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => __( 'Columns', 'js_composer' ),
				'value'         => 4,
				'param_name'    => 'columns',
				'save_always'   => true,
                'dependency'    => array( 'element' => 'style', 'value' => array( 'three' ) ) 
			),
            
            array(
				'type'        => 'textfield',
				'heading'     => __( 'Per page', 'js_composer' ),
				'value'       => 12,
				'save_always' => true,
				'param_name'  => 'limit',
				'description' => __( 'The "limit" shortcode determines how many products to show on the page', 'js_composer' ),
			),
            
			array(
				'type'          => 'dropdown',
				'heading'       => __( 'Order by', 'js_composer' ),
				'param_name'    => 'orderby',
				'value'         => $yog_order_by_values,
				'std'           => 'title',
				'save_always'   => true,
				'description'   => sprintf( __( 'Select how to sort retrieved products. More at %s. Default by Title', 'js_composer' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'          => 'dropdown',
				'heading'       => __( 'Sort order', 'js_composer' ),
				'param_name'    => 'order',
				'value'         => $yog_order_by_values,
				'save_always'   => true,
				'description'   => sprintf( __( 'Designates the ascending or descending order. More at %s. Default by ASC', 'js_composer' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'          => 'autocomplete',
				'heading'       => __( 'Products', 'js_composer' ),
				'param_name'    => 'ids',
				'settings'      => array(
					'multiple'      => true,
					'sortable'      => true,
					'unique_values' => true,
					// In UI show results except selected. NB! You should manually check values in backend
				),
				'save_always'   => true,
				'description'   => __( 'Enter List of Products', 'js_composer' ),
			),
            
            array(
                'heading'       => esc_html__('Pagination', 'yog'),
    			'type'          => 'checkbox',
    			'param_name'    => 'paginate',
    			'description'   => esc_html__('Make checked to Enable Pagination.', 'yog'),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'two', 'three' )
   			    ) 
            ),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            ),
            
			array(
				'type'          => 'hidden',
				'param_name'    => 'skus',
			)
		)
	));
            
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce Recent products / Element Shortcode			|						
--------------------------------------------------------------------------------*/    
    
    vc_map( array(
        'name'        => esc_html__( 'Recent products', 'yog' ),
		'base'        => 'yog_recent_products',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'Lists recent products', 'yog' ),
		'params'      => array(
            
            array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Style', 'yog' ),
				'param_name'    => 'style',
				'value' => array(
                    esc_html__('Style Slider', 'yog') => 'one', 
                    esc_html__('Style Grid', 'yog')   => 'three',
                    esc_html__('Style List', 'yog')   => 'two'
                ),
				'save_always'   => true,
				'description'   =>  esc_html__( 'Select how to show product', 'yog' ),
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'heading',
                'dependency'    => array( 'element'   => 'style', 'value' => array( 'one' ) ) 
			),
            
            array(
				'type'        => 'textfield',
				'heading'     => __( 'Per page', 'js_composer' ),
				'value'       => 12,
				'save_always' => true,
				'param_name'  => 'per_page',
				'description' => __( 'The "per_page" shortcode determines how many products to show on the page', 'js_composer' ),
			),
            
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Columns', 'js_composer' ),
				'value'       => 4,
				'param_name'  => 'columns',
				'save_always' => true,
				'description' => __( 'The columns attribute controls how many columns wide the products should be before wrapping.', 'js_composer' ),
                'dependency'  => array( 'element' => 'style', 'value' => array( 'three' ) ) 
            ),
            
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Order by', 'js_composer' ),
				'param_name'  => 'orderby',
				'value'       => $yog_order_by_values,
				'save_always' => true,
				'description' => sprintf( __( 'Select how to sort retrieved products. More at %s.', 'js_composer' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Sort order', 'js_composer' ),
				'param_name'  => 'order',
				'value'       => $yog_order_by_values,
				'save_always' => true,
				'description' => sprintf( __( 'Designates the ascending or descending order. More at %s.', 'js_composer' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
            array(
                'heading'       => esc_html__('Pagination', 'yog'),
    			'type'          => 'checkbox',
    			'param_name'    => 'paginate',
    			'description'   => esc_html__('Make checked to Enable Pagination.', 'yog'),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'two', 'three' )
   			    ) 
            ),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
		)
	));
    
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce Featured products / Element Shortcode			|						
--------------------------------------------------------------------------------*/    
    
    vc_map( array(
        'name'        => esc_html__( 'Featured products', 'yog' ),
		'base'        => 'yog_featured_products',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'Display products set as featured', 'yog' ),
		'params'      => array(
            
            array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Style', 'yog' ),
				'param_name'    => 'style',
				'value' => array(
                    esc_html__('Style Slider', 'yog') => 'one', 
                    esc_html__('Style Grid', 'yog')   => 'three',
                    esc_html__('Style List', 'yog')   => 'two'
                ),
				'save_always'   => true,
				'description'   =>  esc_html__( 'Select how to show product', 'yog' ),
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'heading',
                'dependency'    => array( 'element'   => 'style', 'value' => array( 'one' ) ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Columns', 'yog' ),
				'value'         => 4,
				'save_always'   => true,
				'param_name'    => 'columns',
				'description'   => esc_html__( 'How much columns grid', 'yog' ),
                'dependency'    => array( 'element' => 'style', 'value' => array( 'three' ) ) 
			),
			
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Per page', 'yog' ),
				'value'         => 12,
				'save_always'   => true,
				'param_name'    => 'limit',
				'description'   => esc_html__( 'The "per_page" shortcode determines how many products to show on the page', 'yog' ),
			),
            
			array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Order by', 'yog' ),
				'param_name'    => 'orderby',
				'value'         => $yog_order_by_values,
				'save_always'   => true,
				'description'   => sprintf( __( 'Select how to sort retrieved products. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Sort order', 'yog' ),
				'param_name'    => 'order',
				'value'         => $yog_order_way_values,
				'save_always'   => true,
				'description'   => sprintf( __( 'Designates the ascending or descending order. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
            array(
                'heading'       => esc_html__('Pagination', 'yog'),
    			'type'          => 'checkbox',
    			'param_name'    => 'paginate',
    			'description'   => esc_html__('Make checked to Enable Pagination.', 'yog'),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'two', 'three' )
   			    ) 
            ),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
		)
	));
    
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce Sale products / Element Shortcode			|						
--------------------------------------------------------------------------------*/    
    
    vc_map( array(
        'name'        => esc_html__( 'Sale products', 'yog' ),
		'base'        => 'yog_sale_products',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'List all products on sale', 'yog' ),
		'params'      => array(
            array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Style', 'yog' ),
				'param_name'    => 'style',
				'value' => array(
                    esc_html__('Style Slider', 'yog') => 'one', 
                    esc_html__('Style Grid', 'yog')   => 'three',
                    esc_html__('Style List', 'yog')   => 'two'
                ),
				'save_always'   => true,
				'description'   =>  esc_html__( 'Select how to show product', 'yog' ),
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'heading',
                'dependency'    => array( 'element'   => 'style', 'value' => array( 'one' ) ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Columns', 'yog' ),
				'value'         => 4,
				'save_always'   => true,
				'param_name'    => 'columns',
				'description'   => esc_html__( 'How much columns grid', 'yog' ),
                'dependency'    => array( 'element' => 'style', 'value' => array( 'three' ) )  
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Per page', 'yog' ),
				'value'         => 12,
				'save_always'   => true,
				'param_name'    => 'per_page',
				'description'   => esc_html__( 'The "per_page" shortcode determines how many products to show on the page', 'yog' ),
			),
            
			array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Order by', 'yog' ),
				'param_name'    => 'orderby',
				'value'         => $yog_order_by_values,
				'save_always'   => true,
				'description'   => sprintf( __( 'Select how to sort retrieved products. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Sort order', 'yog' ),
				'param_name'    => 'order',
				'value'         => $yog_order_way_values,
				'save_always'   => true,
				'description'   => sprintf( __( 'Designates the ascending or descending order. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
            array(
                'heading'       => esc_html__('Pagination', 'yog'),
    			'type'          => 'checkbox',
    			'param_name'    => 'paginate',
    			'description'   => esc_html__('Make checked to Enable Pagination.', 'yog'),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'two', 'three' )
   			     ) 
            ),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
		)
	));
    
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce Best Selling products / Element Shortcode			|						
--------------------------------------------------------------------------------*/    
    
    vc_map( array(
        'name'        => esc_html__( 'Best Selling Products', 'yog' ),
		'base'        => 'yog_best_selling_products',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'List best selling products on sale', 'yog' ),
		'params'      => array(
            array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Style', 'yog' ),
				'param_name'    => 'style',
				'value' => array(
                    esc_html__('Style Slider', 'yog') => 'one', 
                    esc_html__('Style Grid', 'yog')   => 'three',
                    esc_html__('Style List', 'yog')   => 'two'
                ),
				'save_always'   => true,
				'description'   =>  esc_html__( 'Select how to show product', 'yog' ),
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'heading',
                'dependency'    => array( 'element'   => 'style', 'value' => array( 'one' ) ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Columns', 'yog' ),
				'value'         => 4,
				'save_always'   => true,
				'param_name'    => 'columns',
				'description'   => esc_html__( 'How much columns grid', 'yog' ),
                'dependency'    => array( 'element' => 'style', 'value' => array( 'three' ) )  
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Per page', 'yog' ),
				'value'         => 12,
				'param_name'    => 'per_page',
				'save_always'   => true,
				'description'   => esc_html__( 'How much items per page to show', 'yog' ),
			),
			
            array(
                'heading'       => esc_html__('Pagination', 'yog'),
    			'type'          => 'checkbox',
    			'param_name'    => 'paginate',
    			'description'   => esc_html__('Make checked to Enable Pagination.', 'yog'),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'two', 'three' )
   			     ) 
            ),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
		)
	));
    
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce Sale products / Element Shortcode			|						
--------------------------------------------------------------------------------*/    
    
    vc_map( array(
        'name'        => esc_html__( 'Top Rated Products', 'yog' ),
		'base'        => 'yog_top_rated_products',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'List all products on sale', 'yog' ),
		'params'      => array(
            array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Style', 'yog' ),
				'param_name'    => 'style',
				'value' => array(
                    esc_html__('Style Slider', 'yog') => 'one', 
                    esc_html__('Style Grid', 'yog')   => 'three',
                    esc_html__('Style List', 'yog')   => 'two'
                ),
				'save_always'   => true,
				'description'   =>  esc_html__( 'Select how to show product', 'yog' ),
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'heading',
                'dependency'    => array( 'element'   => 'style', 'value' => array( 'one' ) ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Columns', 'yog' ),
				'value'         => 4,
				'save_always'   => true,
				'param_name'    => 'columns',
				'description'   => esc_html__( 'How much columns grid', 'yog' ),
                'dependency'    => array( 'element' => 'style', 'value' => array( 'three' ) )  
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Per page', 'yog' ),
				'value'         => 12,
				'save_always'   => true,
				'param_name'    => 'per_page',
				'description'   => esc_html__( 'The "per_page" shortcode determines how many products to show on the page', 'yog' ),
			),

			array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Order by', 'yog' ),
				'param_name'    => 'orderby',
				'value'         => $yog_order_by_values,
				'save_always'   => true,
				'description'   => sprintf( __( 'Select how to sort retrieved products. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Sort order', 'yog' ),
				'param_name'    => 'order',
				'value'         => $yog_order_way_values,
				'save_always'   => true,
				'description'   => sprintf( __( 'Designates the ascending or descending order. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
            array(
                'heading'       => esc_html__('Pagination', 'yog'),
    			'type'          => 'checkbox',
    			'param_name'    => 'paginate',
    			'description'   => esc_html__('Make checked to Enable Pagination.', 'yog'),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'two', 'three' )
   			     ) 
            ),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
		)
	));
 
 /*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce Category / Element Shortcode			|						
--------------------------------------------------------------------------------*/   
    vc_map( array(
        'name'        => esc_html__( 'Product category', 'yog' ),
		'base'        => 'yog_product_category',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'Show multiple products in a category', 'yog' ),
		'params'      => array( 
            
            array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Style', 'yog' ),
				'param_name'    => 'style',
				'value' => array(
                    esc_html__('Style Slider', 'yog') => 'one', 
                    esc_html__('Style Grid', 'yog')   => 'three',
                    esc_html__('Style List', 'yog')   => 'two'
                ),
				'save_always'   => true,
				'description'   =>  esc_html__( 'Select how to show product', 'yog' ),
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'heading',
                'dependency'    => array( 'element'   => 'style', 'value' => array( 'one' ) ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Columns', 'yog' ),
				'value'         => 4,
				'save_always'   => true,
				'param_name'    => 'columns',
				'description'   => esc_html__( 'How much columns grid', 'yog' ),
                'dependency'    => array( 'element' => 'style', 'value' => array( 'three' ) )  
			),
            
            array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Per page', 'yog' ),
				'value'       => 12,
				'save_always' => true,
				'param_name'  => 'per_page',
				'description' => esc_html__( 'How much items per page to show', 'yog' ),
			),
            
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Order by', 'yog' ),
				'param_name'  => 'orderby',
				'value'       => $yog_order_by_values,
				'save_always' => true,
				'description' => sprintf( __( 'Select how to sort retrieved products. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Sort order', 'yog' ),
				'param_name'  => 'order',
				'value'       => $yog_order_way_values,
				'save_always' => true,
				'description' => sprintf( __( 'Designates the ascending or descending order. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Category', 'yog' ),
				'value'       => yog_get_taxonomy_dropdown('product_cat'),
				'param_name'  => 'category',
				'save_always' => true,
				'description' => esc_html__( 'Product category list', 'yog' ),
			),
            
            array(
                'heading'       => esc_html__('Pagination', 'yog'),
    			'type'          => 'checkbox',
    			'param_name'    => 'paginate',
    			'description'   => esc_html__('Make checked to Enable Pagination.', 'yog'),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'two', 'three' )
   			     ) 
            ),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
        )
	));
 
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce product Categories/ Element Shortcode			|						
--------------------------------------------------------------------------------*/    
  vc_map( array(
		'name'        => __( 'Product categories', 'yog' ),
		'base'        => 'yog_product_categories',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => __( 'WooCommerce', 'yog' ),
		'description' => __( 'Display product categories loop', 'yog' ),
		'params'      => array(
            
            array(
				'type' => 'textfield',
				'heading' => __( 'Number', 'js_composer' ),
				'param_name' => 'number',
				'description' => __( 'The `number` field is used to display the number of products.', 'js_composer' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Order by', 'js_composer' ),
				'param_name' => 'orderby',
				'value' => $yog_order_by_values,
				'save_always' => true,
				'description' => sprintf( __( 'Select how to sort retrieved products. More at %s.', 'js_composer' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Sort order', 'js_composer' ),
				'param_name' => 'order',
				'value' => $yog_order_by_values,
				'save_always' => true,
				'description' => sprintf( __( 'Designates the ascending or descending order. More at %s.', 'js_composer' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Columns', 'js_composer' ),
				'value' => 4,
				'param_name' => 'columns',
				'save_always' => true,
				'description' => __( 'How much columns grid', 'js_composer' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Number', 'js_composer' ),
				'param_name' => 'hide_empty',
				'description' => __( 'Hide empty', 'js_composer' ),
			),
			array(
				'type' => 'autocomplete',
				'heading' => __( 'Categories', 'js_composer' ),
				'param_name' => 'ids',
				'settings' => array(
					'multiple' => true,
					'sortable' => true,
				),
				'save_always' => true,
				'description' => __( 'List of product categories', 'js_composer' ),
			)
		 )
	  )
    );
}

/*--------------------------------------------------------------------------------
|				Flipmart: Blog Post / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_blog_posts($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'    => '',
            'yog_column'     => '2',
            'yog_limit'      => '-1',
            'taxonomie'      => '',
            'yog_animation'  => '',
            'yog_delay'      => ''
		), $atts));

        ob_start(); 
        
        //Get Post Date.
        $yog_post_query = yog_post_query( array( 'post_type' => 'post', 'posts_per_page' => $yog_limit ), $taxonomie );
        
        //Check and Print Posts
        if( $yog_post_query->have_posts() ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';

            echo '<div class="latest-blog " '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
                
                //Heading
                if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                    echo '<div class="new_title"><h2>'. esc_html( $yog_heading ) .'</h2></div>';
                }
                
                //Wrapper Start
                echo '<div class="blog_block"><div class="blog_block_inner">';
                
                    while ( $yog_post_query->have_posts() ) {
                        $yog_post_query->the_post();
                    
                        ?>
                        <div class="<?php echo yog_get_column( $yog_column ); ?> col-xs-12 col-sm-6 blog-post">
                           <div class="blog_inner">
                              <?php if( has_post_thumbnail() ): ?>  
                                  <div class="blog-img">
                                     <a href="<?php the_permalink(); ?>"> <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?> </a>
                                     <div class="mask"> <a class="info" href="<?php the_permalink(); ?>"><?php _e( 'Read More', 'yog' ); ?></a> </div>
                                  </div>
                              <?php endif; ?> 
                              <div class="blog-info">
                                 <div class="post-date">
                                    <time class="entry-date"><span><?php echo get_the_date( 'd' ); ?></span> <br/> <?php echo get_the_date( 'M' ); ?></time>
                                 </div>
                                 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                 <?php echo yog_get_excerpt( array( 'yog_length' => 20, 'yog_link_to_post' => false ) ); ?>
                                 <a class="readmore" href="<?php the_permalink(); ?>"><?php _e( 'Read More', 'yog' ); ?></a> 
                              </div>
                           </div>
                        </div>
                        <?php       
                    }
                
                echo '</div></div>';
            
            echo '</div>';
            
            
            //Rest WP Query
            wp_reset_postdata();
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_blog_posts', 'yog_blog_posts' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Blog Post / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_testimonials($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_limit'      => '-1',
            'taxonomie'      => '',
            'yog_animation'  => '',
            'yog_delay'      => ''
		), $atts));

        ob_start(); 
        
        //Get Post Date.
        $yog_post_query = yog_post_query( array( 'post_type' => 'testimonial', 'posts_per_page' => $yog_limit ), $taxonomie );
        
        //Check and Print Posts
        if( $yog_post_query->have_posts() ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';

            echo '<div class="testimonials-section" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'><ul class="bxslider">';
                
                
                    while ( $yog_post_query->have_posts() ) {
                        $yog_post_query->the_post();
                        
                        //Team Tags.
                        $yog_terms = get_the_terms( get_the_ID(), 'testimonial_designation' );
                        $yog_tags_designation = array();
                        if ( !is_wp_error( $yog_terms ) && !empty( $yog_terms ) ) {
                            foreach ( $yog_terms as $yog_term ) {
                                $yog_tags_designation[] = $yog_term->name;
                            }
                        }
                        
                        //Testimonail
                        $yog_content = get_post_meta( get_the_ID(), 'testimonial-content', true );
                        ?>
                        <li>
                           <?php if( has_post_thumbnail() ): ?>  
                                <div class="avatar"><?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?></div>
                           <?php endif; ?> 
                           <div class="testimonials"><em>"</em> <?php echo $yog_content; ?><em>"</em></div>
                           <div class="clients_author"><?php the_title(); ?>	<span><?php echo join( ', ', $yog_tags_designation ); ?></span>	</div>
                        </li>
                        <?php       
                    }
            
            echo '</ul></div>';
            
            
            //Rest WP Query
            wp_reset_postdata();
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_testimonials', 'yog_testimonials' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Hot Product / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_hot_products($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_hot_product' => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start(); 
        
        //Post Arguments
        $yog_args = array(
            'post_type' => 'product',
            'p'         => $yog_hot_product
        );
        
        //Custom Query
        $yog_query = new WP_Query( $yog_args );
        
        //Loop Start
        while( $yog_query->have_posts() ) {
            $yog_query->the_post();
            
            global $product;
            
            $rating_count = $product->get_rating_count();
            $review_count = $product->get_review_count();
            $average      = $product->get_average_rating();
            ?>
            <div class="offer-slider">
               <div class="left-coloum-hot">
                  <div class="deal_img">
                       <?php echo woocommerce_template_loop_product_thumbnail(); ?>
                  </div>
                  <div class="deal_info">
                     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                     <div class="starSeparator"></div>
                     <?php 
                        //Excerpt Text
                        echo yog_get_excerpt( array( 'yog_link_to_post' => false ) ); 
                     ?>
                     <div class="rating">
                       <div class="ratings">
                          <div class="rating-box">
                             <div class="rating" <?php echo 'style="width:'.( ( $average / 5 ) * 100 ) . '%"'; ?>></div>
                          </div>
                          <div class="clearfix"></div>
                       </div>
                    </div>
                  </div>
               </div>
               <?php 
                    //Date
                    $yog_product_date = yog_helper()->get_option( 'product-hot-time', 'raw', false, 'post', get_the_ID() );
                    if( !empty( $yog_product_date ) && time() <= strtotime( $yog_product_date ) ):
                    
                    //Enque Js File
                    wp_enqueue_script( 'count-min' );
               ?>
               <div class="box-timer">
                  <div class="countbox_1 timer-grid" data-date="<?php echo esc_attr( $yog_product_date ); ?>">
                    <div class="box-wrapper box-time-date">
                      <div class="box"> 
                        <span class="key days time-num time-day">120</span> <?php echo esc_html__( 'DAYS', 'flipmart' ); ?>
                      </div>
                    </div>
                    <div class="box-wrapper box-time-date">
                      <div class="box"> 
                        <span class="key hours time-num">20</span> <?php echo esc_html__( 'HRS', 'flipmart' ); ?>
                      </div>
                    </div>
                    <div class="box-wrapper box-time-date">
                      <div class="box"> 
                        <span class="key minutes time-num">36</span> <?php echo esc_html__( 'MINS', 'flipmart' ); ?>
                      </div>
                    </div>
                    <div class="box-wrapper box-time-date">
                      <div class="box"> 
                        <span class="key seconds time-num">60</span> <?php echo esc_html__( 'SEC', 'flipmart' ); ?>
                      </div>
                    </div>
                  </div>  
               </div>
               <?php endif; ?>
            </div>
            <?php
        }
        
        //Reset Post
        wp_reset_postdata();
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_hot_products', 'yog_hot_products' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Banner Image / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_banner($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_column'      => '4',
            'yog_banners'     => ''
		), $atts));

        ob_start(); 
        
        $yog_banners = (array) vc_param_group_parse_atts( $yog_banners );
        
        if( isset( $yog_banners ) && !empty( $yog_banners ) ){
            
            //Wrapper Start.
            echo '<div class="footer-banner">';
            
            foreach( $yog_banners as $yog_banner ){
                
                //Animation
                $yog_animation = ( isset( $yog_banner['yog_animation'] ) && !empty( $yog_banner['yog_animation'] ) )? $yog_banner['yog_animation'] : '';
                $yog_delay     = ( isset( $yog_banner['yog_delay'] ) && !empty( $yog_banner['yog_delay'] ) )? $yog_banner['yog_delay'] : '';
                
                //Style
                if( $yog_banner['yog_style'] == 'image' ){
            
                ?>
                <div class="col-sm-3 col-xs-12 space thumbnails <?php yog_column( $yog_column ); ?>" <?php echo yog_helper()->html_attributes( array( 'data-animation' => esc_attr( $yog_animation ) , 'data-animation-delay' => esc_attr( $yog_delay ) ) );?>>
                    <div class="thumbnail_block">
                       <img src="<?php echo esc_url( wp_get_attachment_url( $yog_banner['yog_image'] ) ); ?>" class="img-responsive" alt="<?php echo esc_attr( get_post_meta( $yog_banner['yog_image'], '_wp_attachment_image_alt', true) ); ?>" />
                       <div class="caption hovered">
                          <div class="caption-wrapper">
                             <div class="caption-inner">
                                <?php 
                                    //Heading
                                    if( $yog_banner['yog_heading'] ){
                                        echo '<h3>'. esc_html( $yog_banner['yog_heading'] ) .'</h3>';
                                    }
                                    
                                    //Description
                                    if( $yog_banner['yog_description'] ){
                                        echo '<p>'. esc_html( $yog_banner['yog_description'] ) .'</p>';
                                    }
                                    
                                    //Link  
                                    $yog_link = isset( $yog_banner['yog_link'] )? vc_build_link( $yog_banner['yog_link'] ) : '';
                                    
                                    if ( isset( $yog_link ) && !empty( $yog_link ) ) {
                                    
                                        $attributes   = array();
                                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                        $attributes   = implode( ' ', $attributes );
                                        echo '<p><a ' . $attributes . ' class="image">'. esc_html( trim( $yog_link['title'] ) ) .'</a></p>';
                                    
                                    } 
                                ?>
                             </div>
                          </div>
                       </div>
                    </div>
                </div>
                <?php
                
            }else{
                
                ?>
                <div class="col-sm-3 col-xs-12 space <?php yog_column( $yog_column ); ?>" <?php echo yog_helper()->html_attributes( array( 'data-animation' => esc_attr( $yog_animation ) , 'data-animation-delay' => esc_attr( $yog_delay ) ) );?>>
                    <div class="<?php echo esc_attr( $yog_banner['yog_color'] ); ?>">
                        <?php 
                            //Heading
                            if( $yog_banner['yog_heading'] ){
                                echo '<strong>'. esc_html( $yog_banner['yog_heading'] ) .'</strong>';
                            }
                            
                            //Description
                            if( $yog_banner['yog_description'] ){
                                echo esc_html( $yog_banner['yog_description'] );
                            }
                            
                            //Link  
                            $yog_link = isset( $yog_banner['yog_link'] )? vc_build_link( $yog_banner['yog_link'] ) : '';
                            
                            if ( isset( $yog_link ) && !empty( $yog_link ) ) {
                            
                                $attributes   = array();
                                $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                            	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                            	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                $attributes   = implode( ' ', $attributes );
                                echo '<a ' . $attributes . ' class="image">'. esc_html( trim( $yog_link['title'] ) ) .'</a>';
                            
                            } 
                        ?>
                    </div>
                </div>
                <?php
                
                }
            }
            
            //Wrapper End
            echo '</div>';
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_banner', 'yog_banner' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Banner Slider / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_banner_slider($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_description' => '',
            'yog_discount'    => '',
            'limit'           => '',
		), $atts));

        ob_start(); 
        
        //Get Post Date.
        $yog_post_query = yog_post_query( array( 'post_type' => 'product', 'posts_per_page' => $limit ) );  
		
        //Check and Print Posts
        if( $yog_post_query->have_posts() ){
            
            $yog_indicators = $yog_content = $yog_active = ''; $counter = 0;    
            while ( $yog_post_query->have_posts() ) {
                $yog_post_query->the_post();
                
                //Class Active
                $yog_active_clss = ( $counter == 0 )? ' class="active"' : '';
                $yog_active      = ( $counter == 0 )? 'active ' : '';
                
                //Discount
                $yog_dis = ( !empty( $yog_discount ) )? $yog_discount : get_the_title();
                
                //Content
                $yog_indicators .= '<li'. $yog_active_clss .' data-target="#carousel-example-generic" data-slide-to="'. $counter .'"></li>';
                $yog_content    .= 
                '<div class="item'. $yog_active .'">
                  '. get_the_post_thumbnail( get_the_ID(), 'large', array( 'class' => 'img-responsive' ) ) .'  
                  <div class="carousel-caption">
                    <h3><a title="'. get_the_title() .'" href="'. get_permalink() .'">'. $yog_dis .'</a></h3>
                    <p>'. get_the_title() .'</p>
                    <a class="link" href="'. get_permalink() .'">'. esc_html__( 'Buy Now', 'yog' ) .'</a>
                   </div>
                </div>';
                
                //Counter Incremenst
                $counter++;
            
            }
            ?>
            <div class="custom-slider">
                <div>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php echo $yog_indicators; ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php echo $yog_content; ?>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="sr-only"><?php _e( 'Previous', 'yog' ); ?></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="sr-only"><?php _e( 'Next', 'yog' ); ?></span> </a>
                    </div>
                </div>
            </div>
            <?php
            
            //Reset Query
            wp_reset_postdata();
        }
        
        ?>
        <div class="text-widget widget widget__sidebar">
            <?php 
                //Heading
                if( $yog_heading ){
                    echo '<h2 class="widget-title">'. $yog_heading .'</h2>';
                }
                
                //Description
                if( $yog_description ){
                    echo '<div class="widget-content">'. $yog_description .'</div>';
                }
            ?>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_banner_slider', 'yog_banner_slider' );