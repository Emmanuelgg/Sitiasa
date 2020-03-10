<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Hosting
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 *
 */
/*-------------------------------------------------------------------------------
|				Flipmart: Hosting Blog Module / Element Map				    |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Hosting Blog Posts', 'yog'),
      'base'        => 'yog_hosting_blog_posts',
      'class'       => 'icon_yog_hosting_blog_posts',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Hosting', 'yog'),
      'description' => esc_html__( 'Insert Blog Posts', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__('Columns', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_column',
    			'value' => array(
                    esc_html__('Default Column', 'yog') => '',
    				esc_html__('Two Column', 'yog')     => '2',
    				esc_html__('Three Column', 'yog')   => '3',
                    esc_html__('Four Column', 'yog')    => '4',
    			),
    			'description' => esc_html__('Select Number Of Column', 'yog'),
    	    ),
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
            ),
            
            array(
                'heading'    => esc_html__( 'Number Of Posts','yog'),
                'type'       => 'textfield',
                'value'      => '',
                'param_name' => 'yog_limit',
            ),
            
            array(
        		'type'       => 'autocomplete',
        		'heading'    => esc_html__( 'Choose Categories', 'yog' ),
        		'param_name' => 'taxonomie',
        		'settings'   => array(
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
|				Flipmart:  Hosting Call Action Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Hosting Call Action', 'yog'),
      'base'        => 'yog_hosting_cta',
      'class'       => 'icon_yog_hosting_cta',
      'icon'	    => 'icon-wpb-ui-cta',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Hosting', 'yog'),
      'description' => esc_html__( 'Insert Call Action.', 'yog' ),
      'params'      => array(
              
    		array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Button','yog'),
                'type'        => 'vc_link',
                'value'       => '',
                'param_name'  => 'yog_link',
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
|				Flipmart:  Hosting Call Out Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Hosting Call Out', 'yog'),
      'base'        => 'yog_hosting_cta_out',
      'class'       => 'icon_yog_hosting_cta_out',
      'icon'	    => 'icon-wpb-ui-cta-out',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Hosting', 'yog'),
      'description' => esc_html__( 'Insert Call Out', 'yog' ),
      'params'      => array(
              
    		array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Description','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_desc',
            ),
            
            array(
                'heading'     => esc_html__( 'Button','yog'),
                'type'        => 'vc_link',
                'value'       => '',
                'param_name'  => 'yog_link',
            ),
            
            array(
                'heading'     => esc_html__( 'Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_img',
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
|				Flipmart:  Hosting Domain Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Hosting Domain', 'yog'),
      'base'        => 'yog_hosting_domains',
      'class'       => 'icon_yog_hosting_domains',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Hosting', 'yog'),
      'description' => esc_html__( 'Insert Domain List', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Description','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_desc',
            ),
                    
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_hosting_domain',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Domain','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                    ),
                                    
                    array(
                        'heading'     => esc_html__( 'Price','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_price',
                    )
                )
             ),
             
             array(
                'heading'     => esc_html__( 'Form Submit','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_submit',
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
|				Flipmart:  Hosting Heading Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Hosting Heading', 'yog'),
      'base'        => 'yog_hosting_heading',
      'class'       => 'icon_yog_hosting_heading',
      'icon'	    => 'icon-wpb-ui-custom_heading',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Hosting', 'yog'),
      'description' => esc_html__( 'Insert Heading', 'yog' ),
      'params'      => array(
              
    		array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
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
|				Flipmart:  Hosting Info List Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Hosting Info List', 'yog'),
      'base'        => 'yog_hosting_info',
      'class'       => 'icon_yog_hosting_info',
      'icon'	    => 'icon-wpb-ui-info',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Hosting', 'yog'),
      'description' => esc_html__( 'Insert Information List', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__('Style', 'yog'),
                'type'        => 'dropdown',
                'param_name'  => 'yog_style',
                'value'       => array(
                    esc_html__( 'Style One', 'yog' )   => 'one',
                    esc_html__( 'Style Two', 'yog' )   => 'two'
                ),
                'description' => esc_html__( 'Select Style', 'yog' ),
            ),
              
    		array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading',
                'dependency'  => array( 'element' => 'yog_style', 'value'   => array( 'one' ) )
            ),
            
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
                'dependency'  => array( 'element' => 'yog_style', 'value'   => array( 'one' ) )
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_lists',
                'params'     => array(
                
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                    )
                    
                )
            ),
            
            array(
                'heading'     => esc_html__( 'Button','yog'),
                'type'        => 'vc_link',
                'value'       => '',
                'param_name'  => 'yog_link',
                'dependency'  => array( 'element' => 'yog_style', 'value'   => array( 'one' ) )
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
|				Flipmart:  Hosting News Letter Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Hosting News Letter', 'yog'),
      'base'        => 'yog_hosting_newsletter',
      'class'       => 'icon_yog_hosting_newsletter',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Hosting', 'yog'),
      'description' => esc_html__( 'Insert News Letter', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading'
            ),
            
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_sub_heading'
            ),
            
            array(
                'heading'     => esc_html__( 'Mailchimp Form ID','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_form_id'
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
|				Flipmart:  Hosting Pricing Table Module / Element Map				             |						
--------------------------------------------------------------------------------*/
    
    vc_map( array(
        'name'        => esc_html__( 'Hosting Pricing Table', 'yog' ),
        'base'        => 'yog_hosting_pricing_table',
        'class'       => 'icon_yog_pricing_table',
        'icon'	      => 'icon-wpb-application-icon-large',
        'weight'      => 101,
        'category'    => esc_html__('Flipmart Hosting', 'yog'),
        'description' => esc_html__( 'Insert Pricing Table', 'yog' ),
        'params'      => array(
        
                array(
                    'heading'     => esc_html__('Columns', 'yog'),
                    'type'        => 'dropdown',
                    'param_name'  => 'yog_columns',
                    'value'       => array(
                        esc_html__( 'One Column', 'yog' )   => '1',
                        esc_html__( 'Two Column', 'yog' )   => '2',
                        esc_html__( 'Three Column', 'yog' ) => '3',
                        esc_html__( 'Four Column', 'yog' )  => '4',
                    ),
                    'description' => esc_html__( 'Select Number Of Columns', 'yog' ),
                ),  
                
                array(
                    'heading'     => esc_html__( 'Heading','yog'),
                    'type'        => 'textfield',
                    'value'       => '',
                    'admin_label' => true,
                    'param_name'  => 'yog_heading'
                ),
                
                array(
                    'heading'     => esc_html__( 'Sub Heading','yog'),
                    'type'        => 'textfield',
                    'value'       => '',
                    'param_name'  => 'yog_sub_heading'
                ), 
                
                array(
                    'type'        => 'param_group',
                    'value'       => '',
                    'param_name'  => 'yog_table',
                    'params'      => array(
                    
                        array(
                            'heading'     => esc_html__( 'Heading','yog'),
                            'type'        => 'textfield',
                            'value'       => '',
                            'param_name'  => 'yog_table_heading',
                        ),
                        
                        array(
                            'heading'    => esc_html__( 'Currency','yog'),
                            'type'       => 'textfield',
                            'value'      => '',
                            'param_name' => 'yog_currency',
                            'dependency' => array( 'element' => 'table_type','value' => array( 'paid' ) ),
                        ),
                        
                        array(
                            'heading'    => esc_html__( 'Price','yog'),
                            'type'       => 'textfield',
                            'value'      => '',
                            'param_name' => 'yog_table_amount',
                        ),
                        
                        array(
                            'heading'    => esc_html__( 'Duration','yog'),
                            'type'       => 'textfield',
                            'value'      => '',
                            'param_name' => 'yog_table_duration',
                            'dependency' => array( 'element' => 'table_type','value' => array( 'paid' ) ),
                        ),
                        
                        array(
                            'heading'    => esc_html__( 'Short Description','yog'),
                            'type'       => 'textarea',
                            'value'      => '',
                            'param_name' => 'table_short_desc',
                        ),
                        
                        array(
                            'type'       => 'param_group',
                            'value'      => '',
                            'param_name' => 'table_features_list',
                            'params'     => array(
                            
                                array(
                                    'heading'     => esc_html__( 'Heading','yog'),
                                    'type'        => 'textfield',
                                    'value'       => '',
                                    'admin_label' => true,
                                    'param_name'  => 'table_list_heading',
                                )
                            )
                        ),
                        
                        array(
                            'heading'    => esc_html__( 'Link','yog'),
                            'type'       => 'vc_link',
                            'value'      => '',
                            'param_name' => 'yog_link',
                        )
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
        )
    );

/*-------------------------------------------------------------------------------
|				Flipmart:  Hosting Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Hosting Slider', 'yog'),
      'base'        => 'yog_hosting_hero_sections',
      'class'       => 'icon_yog_hosting_hero_sections',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Hosting', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_hosting_hero_section',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Navigation Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'admin_label' => true,
                        'param_name'  => 'yog_heading',
                    ),
                    
                    array(
            			'type'        => 'iconpicker',
            			'heading'     => esc_html__( 'Navigation Icon', 'yog' ),
            			'param_name'  => 'yog_icon',
            			'value'       => 'fa fa-info-circle',
            			'settings'    => array(
            				'emptyIcon'    => false, // default true, display an "EMPTY" icon?
            				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
            			),
            			'description' => esc_html__( 'Select icon from library.', 'yog' ),
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Content','yog'),
                        'type'        => 'textarea',
                        'value'       => '',
                        'param_name'  => 'yog_content',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Background Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_bg',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Button','yog'),
                        'type'        => 'vc_link',
                        'value'       => '',
                        'param_name'  => 'yog_link',
                    )
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
       )
    );

/*-------------------------------------------------------------------------------
|				Flipmart:  Hosting Services Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Hosting Services', 'yog'),
      'base'        => 'yog_hosting_services',
      'class'       => 'icon_yog_yog_hosting_services',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Hosting', 'yog'),
      'description' => esc_html__( 'Insert Services', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__('Columns', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_column',
    			'value' => array(
                    esc_html__('Default Column', 'yog') => '',
    				esc_html__('Two Column', 'yog')     => '2',
    				esc_html__('Three Column', 'yog')   => '3',
                    esc_html__('Four Column', 'yog')    => '4',
    			),
    			'description' => esc_html__('Select Number Of Column', 'yog'),
    	    ),
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
            ),
                        
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_hosting_service',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                    ),
                                    
                    array(
                        'heading'     => esc_html__( 'Content','yog'),
                        'type'        => 'textarea',
                        'value'       => '',
                        'param_name'  => 'yog_content',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Button','yog'),
                        'type'        => 'vc_link',
                        'value'       => '',
                        'param_name'  => 'yog_link',
                    ),
                    
                     array(
                        'heading'     => esc_html__( 'Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_img',
                    )
                )
             ),
             
             array(
                'heading'     => esc_html__( 'Form Submit','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_submit',
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

/*--------------------------------------------------------------------------------
|				Flipmart: Hosting Blog Post / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_hosting_blog_posts($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_column'     => '3',
            'yog_heading'    => '',
            'yog_sub_heading'=> '',
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
            
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'blog-posts', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
                
                //Heading
                $heading_content = '';
                if( $yog_heading ):
                  $heading_content .= '<h1>'. $yog_heading .'</h1>';
                endif; 
               
                //Sub Heading
                if( $yog_sub_heading ):
                  $heading_content .= '<div class="divider"></div><p>'. $yog_sub_heading .'</p>';
                endif;
                
                //Heading Content
                if( $heading_content ){
                    printf( '<div class="heading-content">%s</div>', $heading_content );
                }
                
                $yog_counter = 0;
                while ( $yog_post_query->have_posts() ) {
                    $yog_post_query->the_post();
                    
                    //Counter Incremenst
                    $yog_counter++;
                    
                    //Wrapper Start
                    if( $yog_counter == 1 ){
                        echo '<div class="row">';
                        $yog_close = true;
                    }
                    
                    ?>
                    <div class="col-sm-4 <?php echo yog_get_column( $yog_column ); ?>" <?php echo yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                      <div class="p-content">
                        <div class="newsimage">
                           <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?>
                        </div>
                        <div class="newscontent">
                           <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                           <?php echo yog_get_excerpt( array( 'yog_link_to_post' => false, 'yog_length' => 15 ) ); ?>
                           <a href="<?php the_permalink(); ?>" class="btn btn-success blog-btn"><?php esc_html_e( 'READ MORE', 'yog' ); ?></a>
                        </div>
                      </div>
                    </div>
                    <?php
                    
                    //Wrapper End
                    if( $yog_counter == $yog_column ){
                        echo '</div>';
                        $yog_close = false;
                        $yog_counter = 0;
                    }
                }
                
                //Wrapper End
                if( $yog_close ){
                    echo '</div>';
                }
            
            echo '</div>';
            
            //Reset Loop Query
            wp_reset_postdata();
        }
            
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_hosting_blog_posts', 'yog_hosting_blog_posts' );
      
/*--------------------------------------------------------------------------------
|				Flipmart: Hosting Heading / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_hosting_heading($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'heading-content clearfix', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
           <?php 
                //Heading
                if( $yog_heading ){
                    echo '<h1>'. $yog_heading .'</h1>';
                }
                
                //Sub Heading
                if( $yog_sub_heading ){
                    echo '<div class="divider"></div><p>'. $yog_sub_heading .'</p>';
                }
            ?>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_hosting_heading', 'yog_hosting_heading' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Hosting Call Action / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_hosting_cta($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_link'        => '',
            'yog_sub_heading' => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'call-action', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
           <div class="row">
              <div class="col-sm-6">
                 <?php 
                    //Heading
                    if( $yog_heading ){
                        echo '<h1>'. $yog_heading .'</h1>';
                    }
                 ?> 
              </div >
              <div class="col-sm-6">
                 <?php 
                      //Link
                      $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                      if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                
                        $attributes   = array();
                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                        $attributes   = implode( ' ', $attributes );
                       
                        echo '<a ' . $attributes . ' class="btn btn-primary">'. esc_html( trim( $yog_link['title'] ) ) .'</a>';
                        
                      }   
                 ?>
              </div>
           </div>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_hosting_cta', 'yog_hosting_cta' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Hosting Call Out / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_hosting_cta_out($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_desc'        => '',
            'yog_img'         => '',
            'yog_link'        => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'call-out', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <div class="row">
               <div class="col-sm-6">
                 <div class="call-out-content">
                    <?php 
                        //Heading
                        if( $yog_heading ){
                            echo '<h1>'. $yog_heading .'</h1>';
                        }
                        
                        //Sub Heading
                        if( $yog_sub_heading ){
                            echo '<h1>'. $yog_sub_heading .'</h1>';
                        }
                        
                        //Description
                        if( $yog_desc ){
                            echo '<p>'. $yog_desc .'</p>';
                        }
                    ?> 
                 </div>
                 <?php 
                      //Link
                      $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                      if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                
                        $attributes   = array();
                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                        $attributes   = implode( ' ', $attributes );
                       
                        echo '<a ' . $attributes . ' class="btn btn-success">'. esc_html( trim( $yog_link['title'] ) ) .'</a>';
                        
                      }   
                 ?>
              </div>
              <div class="col-sm-6">
                 <?php if( $yog_img ): ?>
                     <img src="<?php echo wp_get_attachment_url( $yog_img ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_img, '_wp_attachment_image_alt', true) ); ?>" class="img-responsive"/>
                 <?php endif; ?>
               </div>
            </div>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_hosting_cta_out', 'yog_hosting_cta_out' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Hosting Info List / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_hosting_info($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_style'         => 'one',
            'yog_heading'       => '',
            'yog_sub_heading'   => '',
            'yog_lists'         => '',
            'yog_sub_heading'   => '',
            'yog_link'          => '',
            'yog_animation'     => '',
            'yog_delay'         => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        if( $yog_style == 'one' ):
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'professional', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
           <div class="row">
              <div class=" col-sm-6 professional-content">
                 <?php 
                    //Heading
                    if( $yog_heading ){
                        echo '<h1>'. $yog_heading .'</h1><div class="divider"></div>';
                    }
                    
                    //Sub Heading
                    if( $yog_sub_heading ){
                        echo '<h2>'. $yog_sub_heading .'</h2>';
                    }
                    
                    //List Items
                    $yog_lists = (array) vc_param_group_parse_atts( $yog_lists );
                    if( $yog_lists ){
                        
                        foreach( $yog_lists as $yog_item ){
                            echo '<p><img src="'. YOG_CORE_DIR .'/assets/images/bullet.png" alt="Image Not Found">'. $yog_item['yog_heading'] .'</p>';
                        }
                        
                    }
                    
                    //Link
                    $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                    if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
            
                        $attributes   = array();
                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                        $attributes   = implode( ' ', $attributes );
                       
                        echo '<a ' . $attributes . ' class="btn btn-success">'. esc_html( trim( $yog_link['title'] ) ) .'</a>';
                    
                    }
                    
                 ?>
              </div>
           </div>
        </div>
        <?php
        else:
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'included', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <div class="included-content">
              <?php 
                  $yog_lists = (array) vc_param_group_parse_atts( $yog_lists );
                  if( $yog_lists ){
                    
                    foreach( $yog_lists as $yog_item ){
                        echo '<p><img src="'. YOG_CORE_DIR .'/assets/images/bullet.png" alt="Image Not Found">'. $yog_item['yog_heading'] .'</p>';
                    }
                    
                  }  
              ?>
            </div>
        </div>
        <?php
        endif;
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_hosting_info', 'yog_hosting_info' );

/*--------------------------------------------------------------------------------
|				Flipmart: Hosting News Letter  / Element Shortcode			         |						
--------------------------------------------------------------------------------*/

	function yog_hosting_newsletter($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_form_id'     => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        if( $yog_form_id ):
        
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'news-letter', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
           <div class="row">
              <div class="col-sm-6">
                  <?php 
                      //Heading
                      if( $yog_heading ){
                        echo '<h1>'. $yog_heading .'</h1>';
                      }
                
                      //Sub Heading
                      if( $yog_sub_heading ){
                        echo '<p>'. $yog_sub_heading .'</p>';
                      }
                 ?>  
              </div>    
              <div class="col-sm-6 news-letter-form">
                <?php 
                    //Shortcode
                    echo do_shortcode( '[mc4wp_form id="'. $yog_form_id .'"]' );
                 ?>
              </div>
           </div>
        </div>
        <?php
        endif;
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_hosting_newsletter', 'yog_hosting_newsletter' );
     
/*--------------------------------------------------------------------------------
|				Flipmart: Hosting Pricing Table / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_hosting_pricing_table($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_columns'     => '3',
            'yog_table'       => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        //Price Items
        $yog_price = (array) vc_param_group_parse_atts( $yog_table );
        
        if( $yog_price ):
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'pricing-table', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
             
             <?php 
                //Heading
                $heading_content = '';
                if( $yog_heading ):
                  $heading_content .= '<h1>'. $yog_heading .'</h1>';
                endif; 
               
                //Sub Heading
                if( $yog_sub_heading ):
                  $heading_content .= '<div class="divider"></div><p>'. $yog_sub_heading .'</p>';
                endif;
                
                //Heading Content
                if( $heading_content ){
                    printf( '<div class="heading-content">%s</div>', $heading_content );
                }
                    
                $yog_counter = 0; $yog_close = false;
                foreach( $yog_price as $yog_item ){
                    
                    //Counter Increments
                    $yog_counter++;
                    
                    //Wrapper Start
                    if( $yog_counter == 1 ){
                        echo '<div class="row">';
                        $yog_class = true;
                    }
                    ?>
                    <div class="col-sm-4 <?php echo yog_get_column( $yog_columns ); ?> pricing-content">
                        <div class="pricing-header">
                           <?php 
                                //Heading
                                if( $yog_item['table_short_desc'] ){
                                   echo '<h1>'. $yog_item['table_short_desc'] .'</h1>'; 
                                }
                           ?>     
                           <div class="divider"></div>
                           <?php 
                               // Price
                               printf( '<h2>%s%s<span>/%s</span></h2>', $yog_item['yog_currency'], $yog_item['yog_table_amount'], $yog_item['yog_table_duration'] );
                               
                               //Heading
                               if( $yog_item['yog_table_heading'] ){
                                   echo '<div class="headerbg"><h3>'. $yog_item['yog_table_heading'] .'</h3></div>'; 
                               }
                           ?>
                        </div>
                        <?php 
                            // Feature Lists
                            $yog_lists = (array) vc_param_group_parse_atts( $yog_item['table_features_list'] );
                            
                            if( $yog_lists ):
                        ?>
                          <ul>
                              <?php 
                                  foreach( $yog_lists as $yog_list ){
                                     echo '<li>'. $yog_list['table_list_heading'] .'</li>';
                                  }
                                  
                                  //Link
                                  $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                  if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                            
                                        $attributes   = array();
                                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                        $attributes   = implode( ' ', $attributes );
                                       
                                        echo '<li><a ' . $attributes . ' class="btn btn-success">'. esc_html( trim( $yog_link['title'] ) ) .'</a></li>';
                                    
                                  }  
                              ?> 
                           </ul>
                           <?php 
                                //Wrapper End
                                if( $yog_counter == $yog_columns ){
                                    echo '</div>';
                                    $yog_close = false;
                                }
                                
                            endif;
                            
                            //Wrapper End
                            if( $yog_close ){
                                echo '</div>';
                            }
                        ?>
                    </div>
                  <?php
                }
             ?>
        </div>
        <?php
        endif;
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_hosting_pricing_table', 'yog_hosting_pricing_table' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Hosting Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_hosting_hero_sections($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_hosting_hero_section' => '',
            'yog_animation'            => '',
            'yog_delay'                => ''
		), $atts));

        ob_start();
        
        //Hero Items
        $yog_hero = (array) vc_param_group_parse_atts( $yog_hosting_hero_section );
        
        if( $yog_hero ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div class="body-content" id="top-banner-and-menu" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
               <div class="slider">
                  <div class="demo-cont sliderwidth ">
                     <div class="fnc-slider example-slider">
                        <div class="fnc-slider__slides">
                             <?php 
                                //Variables.
                                $yog_counter = 1; $yog_counter_ary = 0; $yog_nav = $yog_cont = '';
                                $yog_classes = array( 'green', 'dark', 'red', 'blue' ); 
                                
                                //Loop
                                foreach( $yog_hero as $yog_item ){
                                    
                                    //Background
                                    $yog_bg      = ( isset( $yog_item['yog_bg'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_item['yog_bg'] ) .');"' : '';
                                    
                                    //Classes
                                    $yog_class   = array( 'fnc-slide' );
                                    $yog_class[] = 'm--blend-'. $yog_classes[$yog_counter_ary];
                                    $yog_class[] = ( $yog_counter == 1 )? 'm--active-slide' : '';
                                    
                                    
                                    ?>
                                    <div class="<?php echo join( ' ', $yog_class ); ?>">
                                        <div class="fnc-slide__inner" <?php echo $yog_bg; ?>>
                                           <div class="fnc-slide__mask">
                                              <div class="fnc-slide__mask-inner"></div>
                                           </div>
                                           <div class=" col-sm-6 fnc-slide__content">
                                              <?php 
                                                  //Content
                                                  echo $yog_item['yog_content']; 
                                                  
                                                  //Link
                                                  $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                                  if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                            
                                                    $attributes   = array();
                                                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                                	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                                	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                                    $attributes   = implode( ' ', $attributes );
                                                   
                                                    echo '<a ' . $attributes . ' class="btn btn-success">'. esc_html( trim( $yog_link['title'] ) ) .'</a>';
                                                    
                                                  } 
                                              ?>
                                           </div>
                                        </div>
                                    </div>
                                   <?php
                                   
                                   //Navigation
                                   if( $yog_counter == 1 ){
                                      $yog_nav  .= '<div class="fnc-nav__bg m--navbg-'. $yog_classes[$yog_counter_ary] .' m--active-nav-bg"></div>';  
                                   }else{
                                      $yog_nav  .= '<div class="fnc-nav__bg m--navbg-'. $yog_classes[$yog_counter_ary] .'"></div>';
                                   }
                                   
                                   $yog_cont .= 
                                   '<button class="fnc-nav__control">
                                        <i class="'. $yog_item['yog_icon'] .' ptPlan" aria-hidden="true"></i> '. $yog_item['yog_heading'] .'
                                        <span class="fnc-nav__control-progress"></span>
                                    </button>';
                                   
                                   //Counter
                                   if( $yog_counter_ary == 3 ){
                                       $yog_counter_ary = 0;
                                   }else{
                                        $yog_counter_ary++;
                                   } 
                                   
                                   //Increments
                                   $yog_counter++;
                                }
                             ?>
                        </div>
                        <nav class="fnc-nav">
                         <div class="fnc-nav__bgs">
                            <?php echo $yog_nav; ?>
                         </div>
                         <div class="fnc-nav__controls">
                            <?php echo $yog_cont; ?>
                         </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
            <?php
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_hosting_hero_sections', 'yog_hosting_hero_sections' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Hosting Domain  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_hosting_domains($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'        => '',
            'yog_sub_heading'    => '',
            'yog_desc'           => '',
            'yog_hosting_domain' => '',
            'yog_submit'         => '', 
            'yog_animation'      => '',
            'yog_delay'          => ''
		), $atts));

        ob_start();
        
        //Domain Items
        $yog_domain = (array) vc_param_group_parse_atts( $yog_hosting_domain );
          
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        //Domain
        $yog_domain_lists = $yog_domain_content = '';
        if( $yog_domain ){
            
            foreach( $yog_domain as $yog_item ){
                $yog_domain_lists .= '<option>'. $yog_item['yog_heading'] .'</option>';
                $yog_domain_content .= 
                '<li>
                   <h1>'. $yog_item['yog_heading'] .'</h1>
                   <p>'. $yog_item['yog_price'] .'</p>
                </li>';
            }
        }
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'hosting-domains', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
          <div class="row">
             <div class="col-sm-4">
                <div class="hosting-domains-content">
                   <?php 
                      //Heading
                      if( $yog_heading ){
                         echo '<h1>'. $yog_heading .'</h1>';
                      } 
                      
                      //Sub Heading
                      if( $yog_sub_heading ){
                         echo '<h2>'. $yog_sub_heading .'</h2>';
                      }
                      
                      //Heading
                      if( $yog_desc ){
                         echo '<p>'. $yog_desc .'</p>';
                      } 
                   ?> 
                </div>
             </div>
             <div class="col-sm-8">
                <div class="hosting-domains-form">
                   <form action="<?php echo $yog_submit; ?>">
                      <div class="control-group">
                         <input class="search-field" placeholder="<?php echo esc_attr__( 'Enter your domain', 'flipmart' ); ?>" />
                         <select>
                            <?php echo $yog_domain_lists; ?>
                         </select>
                         <input type="submit" class="search-button" value="<?php echo esc_attr__( 'Search', 'flipmart' ); ?>" />
                      </div>
                   </form>
                   <div class="clearfix"></div>
                   <div class="hosting-domains-lists">
                     <ul>
                        <?php echo $yog_domain_content; ?>
                     </ul>
                   </div>
                </div>
             </div>
          </div>
        </div>
        <?php
            
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_hosting_domains', 'yog_hosting_domains' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Hosting Services  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_hosting_services($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_column'          => '2',
            'yog_heading'         => '',
            'yog_sub_heading'     => '',
            'yog_hosting_service' => '',
            'yog_animation'       => '',
            'yog_delay'           => ''
		), $atts));

        ob_start();
        
        //Services Items
        $yog_services = (array) vc_param_group_parse_atts( $yog_hosting_service );
        
        if( $yog_services ):  
        
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'services', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
               
                <?php 
                    //Heading
                    $heading_content = '';
                    if( $yog_heading ):
                      $heading_content .= '<h1>'. $yog_heading .'</h1>';
                    endif; 
                   
                    //Sub Heading
                    if( $yog_sub_heading ):
                      $heading_content .= '<div class="divider"></div><p>'. $yog_sub_heading .'</p>';
                    endif;
                    
                    //Heading Content
                    if( $heading_content ){
                        printf( '<div class="heading-content">%s</div>', $heading_content );
                    }
                       
                    $yog_counter = 0;
                    foreach( $yog_services as $yog_item ){
                       
                       //Counter Increments
                       $yog_counter++;
                        
                       //Wrapper
                       if( $yog_counter == 1 ){
                          echo '<div class="row">';
                          $yog_close = true;
                       } 
                       ?>
                       <div class="col-sm-6 <?php echo yog_get_column( $yog_column ); ?>">
                           <div class="col-sm-2 icon">
                              <?php 
                                  //Image  
                                  if( $yog_item['yog_img'] ){
                                     echo '<img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt="'. esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ) .'">';
                                  }  
                              ?>  
                           </div>
                           <div class=" col-sm-4 service-content">
                               <?php 
                                  //Heading
                                  if( $yog_item['yog_heading'] ){
                                    echo '<h1>'. $yog_item['yog_heading'] .'</h1>';
                                  }
                                  
                                  //Content
                                  if( $yog_item['yog_content'] ){
                                    echo '<p>'. $yog_item['yog_content'] .'</p>';
                                  } 
                                  
                                  //Link
                                  $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                  if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                            
                                    $attributes   = array();
                                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                    $attributes   = implode( ' ', $attributes );
                                   
                                    echo '<a ' . $attributes . ' class="btn btn-success">'. esc_html( trim( $yog_link['title'] ) ) .'</a>';
                                    
                                  }  
                               ?> 
                           </div>
                       </div>
                       <?php 
                       
                       //Wrapper Close
                       if( $yog_counter == $yog_column ){
                          echo '</div>';
                          $yog_close = false;
                          $yog_counter = 0;
                          
                       }
                    }
                    
                    //Wrapper Close
                    if( $yog_close ){
                       echo '</div>'; 
                    }
                ?>
            </div>
            <?php
        endif;
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_hosting_services', 'yog_hosting_services' );            