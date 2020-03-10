<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Seo Services
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 */
/*-------------------------------------------------------------------------------
|				Flipmart: Seo Blog Module / Element Map				    |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Seo Blog Posts', 'yog'),
      'base'        => 'yog_seo_blog_posts',
      'class'       => 'icon_yog_seo_blog_posts',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Seo', 'yog'),
      'description' => esc_html__( 'Insert Blog Posts', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_content',
            ),
                    
            array(
                'heading'     => esc_html__('Columns', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_column',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('Default Column', 'yog') => '',
    				esc_html__('Two Column', 'yog')     => '2',
    				esc_html__('Three Column', 'yog')   => '3',
                    esc_html__('Four Column', 'yog')    => '4',
    			),
    			'description' => esc_html__('Select Number Of Column', 'yog'),
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
|				Flipmart:  Seo Clients Logo Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Seo Clients Logo', 'yog'),
      'base'        => 'yog_seo_clients',
      'class'       => 'icon_yog_seo_clients',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Seo', 'yog'),
      'description' => esc_html__( 'Insert Clients Logo', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_seo_client',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Logo Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_img',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Link','yog'),
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
|				Flipmart: Seo Icon Teaser Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Seo Icon Teaser', 'yog'),
      'base'        => 'yog_seo_icon_teasers',
      'class'       => 'icon_yog_seo_icon_teasers',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Seo', 'yog'),
      'description' => esc_html__( 'Insert Icon Teaser', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__('Columns', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_column',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('Default Column', 'yog') => '',
    				esc_html__('Two Column', 'yog')     => '2',
    				esc_html__('Three Column', 'yog')   => '3',
                    esc_html__('Four Column', 'yog')    => '4',
    			),
    			'description' => esc_html__('Select Number Of Column', 'yog'),
    	    ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_seo_icon_teaser',
                'params'     => array(
                   
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'admin_label' => true,
                        'param_name'  => 'yog_heading',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Content','yog'),
                        'type'        => 'textarea',
                        'value'       => '',
                        'param_name'  => 'yog_content',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_img',
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
|				Flipmart: Seo Marketing Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Seo Marketing', 'yog'),
      'base'        => 'yog_seo_marketing',
      'class'       => 'icon_yog_seo_marketing',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Seo', 'yog'),
      'description' => esc_html__( 'Insert Marketing Services', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_content',
            ),
                    
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_seo_marketing_list',
                'params'     => array(
                   
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'admin_label' => true,
                        'param_name'  => 'yog_heading',
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
                'heading'     => esc_html__( 'Button','yog'),
                'type'        => 'vc_link',
                'value'       => '',
                'param_name'  => 'yog_link',
             ),
             
             array(
                'heading'     => esc_html__( 'Background Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_bg',
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
|				Flipmart:  Seo News Letter Module / Element Map				            |						
--------------------------------------------------------------------------------*/
    
    vc_map( array(
      'name'        => esc_html__('Seo News Letter', 'yog'),
      'base'        => 'yog_seo_newsletter',
      'class'       => 'icon_yog_seo_newsletter',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Seo', 'yog'),
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
                'heading'     => esc_html__( 'Background Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_bg',
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
|				Flipmart: Seo Pricing Table Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Seo Pricing Table', 'yog'),
      'base'        => 'yog_seo_pricing',
      'class'       => 'icon_yog_seo_pricing',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Seo', 'yog'),
      'description' => esc_html__( 'Insert Pricing Table', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_content',
            ),
            
            array(
                'heading'     => esc_html__('Columns', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_column',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('Default Column', 'yog') => '',
    				esc_html__('Two Column', 'yog')     => '2',
    				esc_html__('Three Column', 'yog')   => '3',
                    esc_html__('Four Column', 'yog')    => '4',
    			),
    			'description' => esc_html__('Select Number Of Column', 'yog'),
    	    ),
                    
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_seo_pricing_list',
                'params'     => array(
                   
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
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
                        'heading'     => esc_html__( 'Price','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_price',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Currency','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_currency',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Duration','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_duration',
                    ),
                    
                    array(
                        'type'       => 'param_group',
                        'value'      => '',
                        'param_name' => 'yog_features',
                        'params'     => array(
                            
                            array(
                                'heading'     => esc_html__( 'Feature','yog'),
                                'type'        => 'textfield',
                                'value'       => '',
                                'param_name'  => 'yog_feature',
                            )
                            
                        )
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
|				Flipmart: Seo Services Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Seo Services', 'yog'),
      'base'        => 'yog_seo_services',
      'class'       => 'icon_yog_seo_services',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Seo', 'yog'),
      'description' => esc_html__( 'Insert Services', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_content',
            ),
                    
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_seo_service_left',
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
                        'heading'     => esc_html__( 'Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_img',
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
                'heading'     => esc_html__( 'Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_img',
             ),
             
             array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_seo_service_right',
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
                        'heading'     => esc_html__( 'Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_img',
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
|				Flipmart:  Seo Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Seo Slider', 'yog'),
      'base'        => 'yog_seo_sliders',
      'class'       => 'icon_yog_seo_sliders',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Seo', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_seo_slider',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Title','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_title',
                    ),
                    
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
                        'heading'     => esc_html__( 'Content','yog'),
                        'type'        => 'textarea',
                        'value'       => '',
                        'param_name'  => 'yog_content',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_img',
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
|				Flipmart :  Seo Testimonial CPT Module / Elements Shortcode			|						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Seo Testimonial', 'yog'),
      'base'        => 'yog_seo_testimonial',
      'class'       => 'icon_yog_seo_testimonial',
      'icon'	    => 'icon_yog_seo_testimonial',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Seo', 'yog'),
      'description' => esc_html__( 'Insert User Testimonial', 'yog' ),
      'params'      => array(
          
          array(
             'heading'     => esc_html__( 'Heading','yog'),
             'type'        => 'textfield',
             'value'       => '',
             'admin_label' => true,
             'param_name'  => 'yog_heading',
          ),
                       
          array(
             'heading'    => esc_html__( 'Number Of Testimonials','yog'),
             'type'       => 'textfield',
             'value'      => '',
             'param_name' => 'yog_limit',
          ),
          
          array(
            'heading'     => esc_html__( 'Background Image','yog'),
            'type'        => 'attach_image',
            'value'       => '',
            'param_name'  => 'yog_bg',
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
|				Flipmart: Seo Blog Post / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_seo_blog_posts($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'    => '',
            'yog_content'    => '',
            'yog_column'     => '3',
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
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'blog-posts', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php 
                    $yog_heading_content = '';
            
                    //Heading
                    if( $yog_heading ){
                      $yog_heading_content .= '<h2>'. $yog_heading .'</h2>';
                    } 
                   
                    //Content
                    if( $yog_content ){
                      $yog_heading_content .= '<p>'. $yog_content .'</p><img src="'. YOG_CORE_DIR .'/assets/images/seo-divider.jpg" alt="heading_border" />';
                    }
                    
                    //Heading Display
                    if( $yog_heading_content ){
                      echo '<div class="heading-content">'. $yog_heading_content .'</div>';
                    }
                    
                    $yog_counter = 0;
                    while ( $yog_post_query->have_posts() ) {
                        $yog_post_query->the_post();
                        
                        //Counter Incerements
                        $yog_counter++;
                        
                        //Wrapper Start
                        if( $yog_counter == 1 ){
                            echo '<div class="row" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
                            $yog_close = true;
                        }
                        ?>
                        <div class="col-sm-4 <?php echo yog_get_column( $yog_column ); ?>">
                          <div class="blog-content">
                             <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?>
                              <div class="blog-icon">
                                 <span><i class="fa fa-pencil"></i></span>
                              </div>
                              <div class="blog-des">
                                 <h6><?php echo get_the_date( 'd F Y' ); ?></h6>
                                 <?php printf( '<p><span>Poste by</span> %s</p>', esc_html__( 'Poste by', 'yog' ), get_the_author() ); ?>
                                 <div class="blog-bg-border"></div>
                                 <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
                 ?>
            </div>
            <?php
            
            //Reset Loop Query
            wp_reset_postdata();
        }
            
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_seo_blog_posts', 'yog_seo_blog_posts' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Seo Clients Logo / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_seo_clients($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_seo_client' => '',
            'yog_animation'  => '',
            'yog_delay'      => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_seo_client );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'clients', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div class="clients-content">
                  <ul>
                     <?php 
                        foreach( $yog_items as $yog_item ){
                            
                            //Link
                            $yog_befor_tag = $yog_after_tag = '';
                            $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                            if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                            
                                $attributes   = array();
                                $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                            	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                            	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                $attributes   = implode( ' ', $attributes );
                               
                                $yog_befor_tag = '<a ' . $attributes . '>';
                                $yog_after_tag = '</a>';
                                
                            }
                            
                            //Content
                            printf( '<li>%s<img src="%s" alt="%s">%s</li>', $yog_befor_tag, wp_get_attachment_url( $yog_item['yog_img'] ), esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ), $yog_after_tag );
                        }
                     ?>
                  </ul>
              </div>
            </div>
            <?php
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_seo_clients', 'yog_seo_clients' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Seo Icon Teaser  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_seo_icon_teasers($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_column'          => '3',
            'yog_seo_icon_teaser' => '',
            'yog_animation'       => '',
            'yog_delay'           => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_seo_icon_teaser );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'features', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <ul>
                    <?php
                        //Classes
                        $yog_classes = array( '', ' branding-goal', ' digital-goal' ); $yog_counter = 0;
                        foreach( $yog_items as $yog_item ){
                            ?>
                            <li>
                                <?php 
                                    //Image
                                    if( isset( $yog_item['yog_img'] ) ){
                                       echo '<div class="features-icon'. $yog_classes[$yog_counter] .'"><img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt="" class="img-responsive"></div>';
                                    }
                                    
                                    //Heading
                                    if( isset( $yog_item['yog_heading'] ) ){
                                        echo '<div class="features-heading"><h4>'. $yog_item['yog_heading'] .'</h4></div>';
                                    }
                                    
                                    //Content
                                    if( isset( $yog_item['yog_content'] ) ){
                                        echo '<div class="features-description"><p>'. $yog_item['yog_content'] .'</p></div>';
                                    }
                                    
                                    //Button
                                    $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                    if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                    
                                        $attributes   = array();
                                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                        $attributes   = implode( ' ', $attributes );
                                       
                                        echo '<a ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
                                        
                                    }
                                ?>
                            </li>
                            <?php
                            
                            //Counter
                            if( $yog_counter == 2 ){
                                $yog_counter = 0;
                            }else{
                                $yog_counter++;
                            }
                        }
                    ?>
                </ul>
            </div>
            <?php
            
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_seo_icon_teasers', 'yog_seo_icon_teasers' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Seo Marketing  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_seo_marketing($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'           => '',
            'yog_content'           => '',    
            'yog_seo_marketing_list'=> '',
            'yog_link'              => '',
            'yog_bg'                => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        //Background
        $yog_bg = ( isset( $yog_bg ) )? 'background-image: url('. wp_get_attachment_url( $yog_bg ) .');' : '';
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'marketing-services', 'style' => $yog_bg, 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <div class="marketing-services-description">
               <div class="marketing-description-text">
                  <?php 
                       //Heading
                       if( $yog_heading ){
                          echo '<h1>'. $yog_heading .'</h1>';
                       } 
                       
                       //Content
                       if( $yog_content ){
                          echo '<p>'. $yog_content .'</p>';
                       }
                       
                       //Elements Items
                       $yog_items  = (array) vc_param_group_parse_atts( $yog_seo_marketing_list );
                       
                       //Lists
                       if( $yog_items ){
                          
                          foreach( $yog_items as $yog_item ){
                             
                             printf( '<h4><span><img src="%s" alt="%s"></span>%s</h4>', wp_get_attachment_url( $yog_item['yog_img'] ), esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ), $yog_item['yog_heading'] );
                             
                          }
                          
                       }
                       
                       //Button
                       $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                       if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                        
                            $attributes   = array();
                            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                            $attributes   = implode( ' ', $attributes );
                           
                            echo '<a ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
                            
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
   
   add_shortcode( 'yog_seo_marketing', 'yog_seo_marketing' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Seo News Letter  / Element Shortcode			         |						
--------------------------------------------------------------------------------*/

	function yog_seo_newsletter($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_form_id'     => '',
            'yog_bg'          => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        if( $yog_form_id ):
        
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            //Background
            $yog_bg = ( isset( $yog_bg ) )? 'background-image: url('. wp_get_attachment_url( $yog_bg ) .');background-position: center top;' : '';
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'news-letter', 'style' => $yog_bg, 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <div class="news-letter-content">
               <div class="news-letter-text">
                  <?php 
                      //Heading
                      if( $yog_heading ){
                        echo '<h1>'. $yog_heading .'</h1>';
                      }
                      
                      //Shortcode
                      if( $yog_form_id ){
                         echo '<div class="news-letter-form">'. do_shortcode( '[mc4wp_form id="'. $yog_form_id .'"]' ) .'</div>';  
                      }
                        
                      //Heading
                      if( $yog_sub_heading ){
                        echo '<p>'. $yog_sub_heading .'</p>';
                      }  
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
   
   add_shortcode( 'yog_seo_newsletter', 'yog_seo_newsletter' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Seo Pricing Table  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_seo_pricing($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'           => '',
            'yog_content'           => '', 
            'yog_column'            => '3',   
            'yog_seo_pricing_list'  => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'pricing-table', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <?php
                $yog_heading_content = '';
            
                //Heading
                if( $yog_heading ){
                  $yog_heading_content .= '<h2>'. $yog_heading .'</h2>';
                } 
               
                //Content
                if( $yog_content ){
                  $yog_heading_content .= '<p>'. $yog_content .'</p><img src="'. YOG_CORE_DIR .'/assets/images/seo-divider.jpg" alt="heading_border" />';
                }
                
                //Heading Display
                if( $yog_heading_content ){
                  echo '<div class="heading-content">'. $yog_heading_content .'</div>';
                }
                
                //Elements Items
                $yog_items  = (array) vc_param_group_parse_atts( $yog_seo_pricing_list );
               
                //Lists
                if( $yog_items ){
                    
                    $yog_counter = 0;
                    foreach( $yog_items as $yog_item ){
                        
                        //Counter Increments
                        $yog_counter++;
                        
                        //Wrapper Start
                        if( $yog_counter == 1 ){
                            echo '<div class="row">';
                            $yog_close = true;
                        }
                        ?>
                        <div class="col-sm-4 <?php echo yog_get_column( $yog_column ); ?>">
                           <div class="pricing-content">
                              <div class="pricing-heading">
                                 <?php 
                                      //Heading
                                      if( $yog_item['yog_heading'] ){
                                         echo '<h4>'. $yog_item['yog_heading'] .'</h4>';
                                      }
                                      
                                      //Heading
                                      if( $yog_item['yog_sub_heading'] ){
                                         echo '<p>'. $yog_item['yog_sub_heading'] .'</p>';
                                      }
                                  ?>
                              </div>
                              <div class="pricing">
                                 <?php printf( '<h1><sup>%s</sup>%s<sub>/%s</sub></h1>', $yog_item['yog_currency'], $yog_item['yog_price'], $yog_item['yog_duration'] ); ?> 
                              </div>
                              <?php 
                                   //Elements Items
                                   $yog_features  = (array) vc_param_group_parse_atts( $yog_item['yog_features'] );
                                       
                                   echo '<div class="features-lists"><ul>';
                                      
                                      if( $yog_features ){  
                                        
                                          foreach( $yog_features as $yog_feature ){
                                                
                                                echo '<li>'. $yog_feature['yog_feature'] .'</li>';
                                                
                                          }
                                          
                                      }
                                      
                                      //Button
                                      $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                      if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                        
                                         $attributes   = array();
                                         $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                    	 $attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                    	 $attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                         $attributes   = implode( ' ', $attributes );
                                       
                                         echo '<a ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
                                        
                                      }
                                    
                                  echo '</ul></div>';
                               ?>
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
                }
            ?>
        </div>
            
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_seo_pricing', 'yog_seo_pricing' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Seo Services  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_seo_services($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'           => '',
            'yog_content'           => '',    
            'yog_seo_service_left'  => '',
            'yog_img'               => '',
            'yog_seo_service_right' => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_left_items  = (array) vc_param_group_parse_atts( $yog_seo_service_left );
        $yog_right_items = (array) vc_param_group_parse_atts( $yog_seo_service_right );
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <?php 
                $yog_heading_content = '';
                
                //Heading
                if( $yog_heading ){
                  $yog_heading_content .= '<h2>'. $yog_heading .'</h2>';
                } 
               
                //Content
                if( $yog_content ){
                  $yog_heading_content .= '<p>'. $yog_content .'</p><img src="'. YOG_CORE_DIR .'/assets/images/seo-divider.jpg" alt="heading_border" />';
                }
                
                //Heading Display
                if( $yog_heading_content ){
                  echo '<div class="heading-content">'. $yog_heading_content .'</div>';
                }
                   
                //Left Section
                if( $yog_left_items ){
                    
                    $yog_left_content = '';
                    foreach( $yog_left_items as $yog_left_item ){
                        
                        ob_start();
                            
                            ?>
                            <li>
                                 <div class="service-description">
                                    <?php 
                                        //Heading
                                        if( $yog_left_item['yog_heading'] ){
                                           echo '<h3>'. $yog_left_item['yog_heading'] .'</h3>';
                                        } 
                                       
                                        //Content
                                        if( $yog_left_item['yog_content'] ){
                                           echo '<p>'. $yog_left_item['yog_content'] .'</p>';
                                        }
                                        
                                        //Button
                                        $yog_link = isset( $yog_left_item['yog_link'] )? vc_build_link( $yog_left_item['yog_link'] ) : '';
                                        if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                        
                                            $attributes   = array();
                                            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                            $attributes   = implode( ' ', $attributes );
                                           
                                            echo '<a ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
                                            
                                        }
                                    ?>
                                 </div>
                                 <?php 
                                    //Image
                                    if( isset( $yog_left_item['yog_img'] ) ){
                                       echo '<div class="service-img"><img src="'. wp_get_attachment_url( $yog_left_item['yog_img'] ) .'" alt="'. esc_attr( get_post_meta( $yog_left_item['yog_img'], '_wp_attachment_image_alt', true) ) .'" /></div>';
                                    } 
                                 ?>
                              </li>
                            <?php
                             
                            $yog_left_content .= ob_get_contents();
                            ob_end_clean();
                        }
                ?>
                    <div class="service-area">
                        <ul>
                            <?php echo $yog_left_content; ?>
                        </ul>
                    </div>
                    <div class="service-area responsive-service">
                        <ul>
                            <?php echo $yog_left_content; ?>
                        </ul>
                    </div>
                <?php } ?>
                
                <div class="service-area-middle">
                   <?php 
                        //Image
                        if( isset( $yog_img ) ){
                           echo '<img src="'. wp_get_attachment_url( $yog_img ) .'" alt="" />';
                        } 
                   ?>
                </div>
                
                <?php 
                    if( $yog_right_items ){ 
                        
                        $yog_right_content = '';
                        foreach( $yog_right_items as $yog_right_item ){
                            
                            ob_start();
                            
                            ?>
                            <li>
                                <?php 
                                    //Image
                                    if( isset( $yog_right_item['yog_img'] ) ){
                                       echo '<div class="service-right-img"><img src="'. wp_get_attachment_url( $yog_right_item['yog_img'] ) .'" alt="'. esc_attr( get_post_meta( $yog_right_item['yog_img'], '_wp_attachment_image_alt', true) ) .'"></div>';
                                    } 
                                 ?>
                                 <div class="service-right-content">
                                    <?php 
                                        //Heading
                                        if( $yog_right_item['yog_heading'] ){
                                           echo '<h3>'. $yog_right_item['yog_heading'] .'</h3>';
                                        } 
                                       
                                        //Content
                                        if( $yog_right_item['yog_content'] ){
                                           echo '<p>'. $yog_right_item['yog_content'] .'</p>';
                                        }
                                        
                                        //Button
                                        $yog_link = isset( $yog_right_item['yog_link'] )? vc_build_link( $yog_right_item['yog_link'] ) : '';
                                        if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                        
                                            $attributes   = array();
                                            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                            $attributes   = implode( ' ', $attributes );
                                           
                                            echo '<a ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
                                            
                                        }
                                    ?>
                                 </div>
                              </li>
                            <?php
                             
                            $yog_right_content .= ob_get_contents();
                            ob_end_clean();
                        }
                    ?>
                    <div class="service-area-right">
                        <ul>
                            <?php echo $yog_right_content; ?>
                        </ul>
                    </div>
                <?php } ?>
                
            </div>
        </div>    
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_seo_services', 'yog_seo_services' );

/*--------------------------------------------------------------------------------
|				Flipmart: Seo Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_seo_sliders($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_seo_slider' => '',
            'yog_animation'     => '',
            'yog_delay'         => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_seo_slider );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div class="body-content seo-slider" id="top-banner-and-menu" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                 <?php
                    $yog_counter = 1; 
                    foreach( $yog_items as $yog_item ){
                        
                        //Background
                        $yog_bg = ( isset( $yog_item['yog_bg'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_item['yog_bg'] ) .');"' : '';
                        ?>
                        <div class="item" <?php echo $yog_bg; ?>>
                          <div class="container-fluid">
                             <div class="container">
                                <div class="caption bg-color vertical-center text-left">
                                   <?php 
                                       //Title
                                       if( isset( $yog_item['yog_title'] ) ){
                                         echo '<div class="big-text fadeInDown-1 white white-bold">'. $yog_item['yog_title'] .'</div>';
                                       }
                                       
                                       //Heading
                                       if( isset( $yog_item['yog_heading'] ) ){
                                         echo '<div class="big-text fadeInDown-1 white white-websites">'. $yog_item['yog_heading'] .'</div>';
                                       }
                                      
                                       //Sub Heading
                                       if( isset( $yog_item['yog_sub_heading'] ) ){
                                         echo '<div class="big-subtext fadeInDown-1 black black-tab">'. $yog_item['yog_sub_heading'] .'</div>';
                                       }
                                       
                                       //Content
                                       if( isset( $yog_item['yog_content'] ) ){
                                         echo '<div class="big-subtext fadeInDown-1 black black-tab-last">'. $yog_item['yog_content'] .'</div>';
                                       } 
                                       
                                       //Button
                                       $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                       if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                        
                                            $attributes   = array();
                                            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                            $attributes   = implode( ' ', $attributes );
                                           
                                            echo '<div class="slider-header fadeInDown-1 slider-btn"><a ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a></div>';
                                            
                                       }
                                   ?> 
                                </div>
                                <?php 
                                    //Image
                                    if( isset( $yog_item['yog_img'] ) ){
                                       $yog_class = ( $yog_counter == 1 )? 'ssc-one' : 'seo-slider-caption';    
                                       echo '<div class="'. $yog_class .'"><img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt="" class="img-responsive"></div>';
                                    }
                                ?>
                             </div>
                          </div>
                        </div>
                      <?php
                      
                      //Counter Increments
                      $yog_counter++;
                    }
                 ?>
              </div>
              <div class="slider-bottom-images">
                 <img src="<?php echo YOG_CORE_DIR; ?>/assets/images/seo-slider-bottom.png" alt="slider_bottom" class="img-responsive"/>
              </div>
            </div>
            <?php
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_seo_sliders', 'yog_seo_sliders' );
   
/*--------------------------------------------------------------------------------
|				Flipmart:  Seo Testimonial CPT Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_seo_testimonial($atts, $content = null ){

		$yog_output  = '';
        
		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'   => '',
            'yog_limit'     => '',
            'yog_bg'        => '',  
            'yog_animation' => '',
            'yog_delay'     => ''
		), $atts));

		ob_start();
        
        //Get Post Date.
        $yog_post_query = yog_post_query( array( 'post_type' => 'testimonial', 'posts_per_page' => $yog_limit ) );

        if( $yog_post_query->have_posts() ):
        
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            //Background
            $yog_bg = ( isset( $yog_bg ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_bg ) .');"' : '';
            
            $yog_content = $yog_nav = ''; $yog_counter = 0;
            while ( $yog_post_query->have_posts() ) {
                $yog_post_query->the_post();
                
                //Active Class
                $yog_class = ( $yog_counter == 0 )? ' active' : '';
                $yog_nav_class = ( $yog_counter == 0 )? 'class="active"' : '';
                
                //Navigation Content
                $yog_nav .= '<li data-target="#quote-carousel" data-slide-to="'. $yog_counter .'" '. $yog_nav_class .'></li>';
                
                //Content 
                $yog_content .=
                '<div class="item'. $yog_class .'">
                  <blockquote>
                     <div class="row">
                        <div class="col-sm-12 text-center">
                            '. get_the_post_thumbnail( get_the_ID(), array( 100, 100 ), array( 'class' => 'img-circle' ) ) .'
                        </div>
                        <div class="col-sm-12 text-center">
                           <p>'. get_post_meta( get_the_ID(), 'testimonial-content', true ) .'</p>
                           <h4>'. get_the_title() .'</h4>
                           <h6>'. get_post_meta( get_the_ID(), 'testimonial-company', true ) .'</h6>
                        </div>
                     </div>
                  </blockquote>
                 </div>';
                 
                 
                //Counter Increments
                $yog_counter++;
            }
            ?>
            <section <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div class="testimonial" <?php echo $yog_bg; ?>>
                <div class="container">
                   <?php if( $yog_heading ){ ?> 
                       <div class="row">
                          <div class='col-md-offset-2 col-md-8 text-center'>
                             <h2><?php echo $yog_heading; ?></h2>
                          </div>
                       </div>
                   <?php } ?>
                   <div class="row">
                      <div class="col-md-offset-2 col-md-8">
                         <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <ol class="carousel-indicators">
                                <?php echo $yog_nav; ?>
                            </ol>
                            <div class="carousel-inner">
                                <?php echo $yog_content; ?>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
              </div>
            </section>
            <?php
            
        endif;
                
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_seo_testimonial', 'yog_seo_testimonial' );