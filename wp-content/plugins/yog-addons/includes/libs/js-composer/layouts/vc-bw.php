<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Black & White
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 */
//Page Menus.
$yog_menus = wp_get_nav_menus();
$yog_menu_options = array( "Choose Menu" => "" );
if ( isset( $yog_menus ) && count( $yog_menus ) > 0 ) {
    foreach ( $yog_menus as $yog_menu ) {
       $yog_menu_options[$yog_menu->name] = $yog_menu->term_id;
    }
}
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
    			"type"       => "dropdown",
    			"heading"    => __( "Row Menu", "black-white" ),
    			"param_name" => "yog_menu_id",
                "value"      => $yog_menu_options
            ),
            
            array(
    			"type"        => "textfield",
    			"heading"     => __( "Menu Label", "black-white" ),
    			"param_name"  => "yog_menu_label",
    			"description" => sprintf( __( "Enter row ID (Note: make sure it is unique and valid according to <a href=\"%s\" target=\"_blank\">w3c specification</a>).", "black-white" ), "http://www.w3schools.com/tags/att_global_id.asp" ),
    		),
            
            array(
            	'type'       => 'dropdown',
            	'heading'    =>  esc_html__( 'Row', 'yog' ),
            	'param_name' => 'full_width',
            	'value'      => array(
            		esc_html__( 'Default', 'yog' )       => '',
                    esc_html__( 'Fullwidth Row', 'yog' ) => 'stretch_row',
            		esc_html__( 'Fluid Row', 'yog' )     => 'stretch_row_fluid',
                    esc_html__( 'Stretch Row', 'yog' )   => 'stretch_row_sp',
                    esc_html__( 'Row Special', 'yog' )   => 'stretch_row_special',
                    esc_html__( 'Row Overlay', 'yog' )   => 'stretch_row_over',
            	)
            ),
            
            array(
                'heading'     =>  esc_html__( 'Row Skin', 'yog' ),
            	'type'        => 'dropdown',
            	'param_name'  => 'yog_skin',
            	'value'       => $yog_skin,
            	'description' =>  esc_html__( 'Select Row Container Class.', 'yog' )
            ),
            
            array(
                'heading'     => __( 'Background Image', 'yog' ),
    			'type'        => 'attach_image',
    			'param_name'  => 'yog_parallax_image',
    			'value'       => '',
    			'description' => __( 'Select image from media library.', 'yog' ),
    		),
            
            array(
        		'type'       => 'colorpicker',
        		'heading'    => __( 'Background Color', 'js_composer' ),
        		'param_name' => 'yog_bg_color',
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
|				Flipmart:  BW Blog Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('BW Blog Posts', 'yog'),
      'base'        => 'yog_bw_blog_posts',
      'class'       => 'icon_yog_bw_blog_posts',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart BW', 'yog'),
      'description' => esc_html__( 'Insert Blog Posts', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'description' => yog_pattren_description_bw(),
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_content',
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
                'heading'     => esc_html__( 'Button','yog'),
                'type'        => 'vc_link',
                'value'       => '',
                'param_name'  => 'yog_button',
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
|				Flipmart:  BW Client Logs Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('BW Client Logs', 'yog'),
      'base'        => 'yog_bw_client_logos',
      'class'       => 'icon_yog_bw_client_logos',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart BW', 'yog'),
      'description' => esc_html__( 'Insert Client Logs', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'description' => yog_pattren_description_bw(),
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
                'param_name' => 'yog_bw_client_logo',
                'params'     => array(
                
                    array(
                        'heading'    => esc_html__( 'Logo','yog'),
                        'type'       => 'attach_image',
                        'value'      => '',
                        'param_name' => 'yog_logo',
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
                'heading'    => esc_html__( 'Delay','yog'),
                'type'       => 'textfield',
                'param_name' => 'yog_delay',
            )
          )
       )
    );

/*-------------------------------------------------------------------------------
|				Flipmart:  BW Contact Info Module / Element Map		|						
--------------------------------------------------------------------------------*/   

    vc_map( array(
         'name'        => esc_html__('BW Contact Info', 'yog'),
    	 'base'        => 'yog_bw_contact_info',
    	 'class'       => 'icon_yog_bw_contact_info',
    	 'icon'	       => 'icon_yog_bw_contact_info',
    	 'weight'      => 101,
    	 'category'    => esc_html__('Flipmart BW', 'yog'),
    	 'description' => esc_html__( 'Show Contact Information', 'yog' ),
    	 'params'      => array( 
         
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'description' => yog_pattren_description_bw(),
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_sub_heading'
            ),
            
            array(
                'heading'     => esc_html__( 'Address Title','yog'),
                'type'        => 'textfield',
                'default'     => 'Adress:',
                'param_name'  => 'yog_address_title'
            ),
            
            array(
                'heading'     => esc_html__( 'Address','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_address'
            ),
            
            array(
                'heading'     => esc_html__( 'Phone Title','yog'),
                'type'        => 'textfield',
                'default'     => 'Main phone:',
                'param_name'  => 'yog_phone_title'
            ),
            
            array(
                'heading'     => esc_html__( 'Phone','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_phone'
            ),
            
            array(
                'heading'     => esc_html__( 'Email Title','yog'),
                'type'        => 'textfield',
                'default'     => 'Email:',
                'param_name'  => 'yog_email_title'
            ),
            
            array(
                'heading'     => esc_html__( 'E-mail','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_mail'
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea',
                'param_name'  => 'yog_content'
            )
          )
       )
    );

/*-------------------------------------------------------------------------------
|				Flipmart:  BW Counter Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('BW Counter', 'yog'),
      'base'        => 'yog_bw_counters',
      'class'       => 'icon_yog_bw_counters',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart BW', 'yog'),
      'description' => esc_html__( 'Insert Counter', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'description' => yog_pattren_description_bw(),
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
                'param_name' => 'yog_bw_counter',
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
                        'heading'     => esc_html__( 'Counter','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_counters',
                    ),
                    
                    array(
            			'type'        => 'iconpicker',
            			'heading'     => esc_html__( 'Icon', 'yog' ),
            			'param_name'  => 'yog_icon',
            			'value'       => 'fa fa-info-circle',
                        'settings'    => array(
            				'emptyIcon'    => false, // default true, display an 'EMPTY' icon?
            				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
                            'type'         => 'bwicons',
            			),
            			'description' => esc_html__( 'Select icon from library.', 'yog' ),
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
|				Flipmart:  BW Heading Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('BW Heading', 'yog'),
      'base'        => 'yog_bw_heading',
      'class'       => 'icon_yog_bw_heading',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart BW', 'yog'),
      'description' => esc_html__( 'Insert Heading', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'description' => yog_pattren_description_bw(),
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_content',
            ),
            
            array(
                'heading'     => esc_html__('Position', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_position',
    			'value'       => array(
                    esc_html__( 'Center', 'flipmart' ) => 'row center',
                    esc_html__( 'Left', 'flipmart' )   => 'row left',
                    esc_html__( 'Right', 'flipmart' )  => 'row right',
                ),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
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
|				Flipmart:  BW Services Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('BW Services', 'yog'),
      'base'        => 'yog_bw_services',
      'class'       => 'icon_yog_bw_services',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart BW', 'yog'),
      'description' => esc_html__( 'Insert Services', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'description' => yog_pattren_description_bw(),
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
                'param_name' => 'yog_bw_service',
                'params'     => array(
                    
                    array(
            			'type'        => 'iconpicker',
            			'heading'     => esc_html__( 'Social Icon', 'yog' ),
            			'param_name'  => 'yog_icon',
            			'value'       => 'fa fa-info-circle',
                        'settings'    => array(
            				'emptyIcon'    => false, // default true, display an 'EMPTY' icon?
            				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
                            'type'         => 'bwicons',
            			),
            			'description' => esc_html__( 'Select icon from library.', 'yog' ),
            		),
                    
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
|				Flipmart:  BW Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('BW Slider', 'yog'),
      'base'        => 'yog_bw_sliders',
      'class'       => 'icon_yog_bw_sliders',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart BW', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_bw_slider',
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
|				Flipmart:  BW Pricing Table Module / Element Map				             |						
--------------------------------------------------------------------------------*/

    vc_map( array(
        'name'        => esc_html__( 'BW Pricing Table', 'yog' ),
        'base'        => 'yog_bw_pricing_tables',
        'class'       => 'icon_yog_bw_pricing_tables',
        'icon'	      => 'icon-wpb-application-icon-large',
        'weight'      => 101,
        'category'    => esc_html__('Flipmart BW', 'yog'),
        'description' => esc_html__( 'Insert Pricing Table', 'yog' ),
        'params'      => array(
                
                array(
                    'heading'     => esc_html__( 'Heading','yog'),
                    'type'        => 'textfield',
                    'admin_label' => true,
                    'value'       => '',
                    'description' => yog_pattren_description_bw(),
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
                    'type'        => 'param_group',
                    'value'       => '',
                    'param_name'  => 'yog_bw_pricing_table',
                    'params'      => array(
                        
                        array(
                        	'type'        => 'checkbox',
                        	'heading'     => esc_html__( 'Enable Popular', 'yog' ),
                        	'param_name'  => 'popular', // Inner param name.
                        	'description' => esc_html__( 'If checked the pricing table will highlight.', 'yog' ),
                        	'value'       => array( esc_html__( 'Yes', 'yog' ) => 'yes' ),
                        ),
                
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
                            'param_name' => 'yog_currency'
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
                            'param_name' => 'yog_table_duration'
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
                                    'description' => yog_pattren_description_bw(),
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
                )
            )
        )
    );

/*-------------------------------------------------------------------------------
|				Flipmart:  BW Row Divider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('BW Row Divider', 'yog'),
      'base'        => 'yog_bw_divider',
      'class'       => 'icon_yog_bw_divider',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart BW', 'yog'),
      'description' => esc_html__( 'Insert Row Divider', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__('Divider', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_divider',
    			'value'       => array(
                    esc_html__( 'Top Left', 'flipmart' )     => 'top-left-separator hidden-xs',
                    esc_html__( 'Top Right', 'flipmart' )    => 'top-right-separator hidden-xs',
                    esc_html__( 'Top', 'flipmart' )          => 'top-separator hidden-xs',
                    esc_html__( 'Bottom Left Grey', 'flipmart' )  => 'bottom-left-separator grey hidden-xs',
                    esc_html__( 'Bottom Right Grey', 'flipmart' ) => 'bottom-right-separator grey hidden-xs',
                    esc_html__( 'Bottom Left', 'flipmart' )  => 'bottom-left-separator hidden-xs',
                    esc_html__( 'Bottom Right', 'flipmart' ) => 'bottom-right-separator hidden-xs',
                    esc_html__( 'Bottom', 'flipmart' )       => 'bottom-separator hidden-xs',
                    esc_html__( 'Bottom Two', 'flipmart' )       => 'bottom-separator two hidden-xs'
                ),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
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
|				Flipmart:  BW Team Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('BW Team', 'yog'),
      'base'        => 'yog_bw_teams',
      'class'       => 'icon_yog_bw_teams',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart BW', 'yog'),
      'description' => esc_html__( 'Insert Team', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'description' => yog_pattren_description_bw(),
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
                'param_name' => 'yog_bw_team',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Name','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'admin_label' => true,
                        'param_name'  => 'yog_name',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Designation','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_designation',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Display Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_dp',
                    ),
                    
                    array(
                        'type'       => 'param_group',
                        'value'      => '',
                        'param_name' => 'yog_socials',
                        'params'     => array(
                            
                            array(
                    			'type'        => 'iconpicker',
                    			'heading'     => esc_html__( 'Social Icon', 'yog' ),
                    			'param_name'  => 'yog_icon',
                    			'value'       => 'fa fa-info-circle',
                                'settings'    => array(
                    				'emptyIcon'    => false, // default true, display an 'EMPTY' icon?
                    				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
                                    'type'         => 'bwicons',
                    			),
                    			'description' => esc_html__( 'Select icon from library.', 'yog' ),
                    		),
                            
                            array(
                                'heading'     => esc_html__( 'Network Link','yog'),
                                'type'        => 'textfield',
                                'value'       => '',
                                'param_name'  => 'yog_link',
                            )
                            
                        )
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
|				Flipmart :  BW Testimonial CPT Module / Elements Shortcode			|						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('BW Testimonial', 'yog'),
      'base'        => 'yog_bw_testimonial',
      'class'       => 'icon_yog_bw_testimonial',
      'icon'	    => 'icon_yog_bw_testimonial',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart BW', 'yog'),
      'description' => esc_html__( 'Insert User Testimonial.', 'yog' ),
      'params'      => array(
          
          array(
            'heading'     => esc_html__( 'Heading','yog'),
            'type'        => 'textfield',
            'admin_label' => true,
            'value'       => '',
            'description' => yog_pattren_description_bw(),
            'param_name'  => 'yog_heading',
          ),
        
          array(
            'heading'     => esc_html__( 'Content','yog'),
            'type'        => 'textarea',
            'value'       => '',
            'param_name'  => 'yog_content',
          ),
                       
          array(
             'heading'    => esc_html__( 'Number Of Testimonials','yog'),
             'type'       => 'textfield',
             'value'      => '',
             'param_name' => 'yog_limit',
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
|				Flipmart: BW Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_bw_sliders($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_bw_slider' => '',
            'yog_animation'    => '',
            'yog_delay'        => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_bw_slider );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <ul class="slides" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php 
                    foreach( $yog_items as $yog_item ){
                        
                        //Background
                        $yog_bg      = ( isset( $yog_item['yog_bg'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_item['yog_bg'] ) .');"' : '';
                        ?>
                        <li>
        					<div class="slide" <?php echo $yog_bg; ?>></div>
        					<div class="top-outer">
        						<div class="caption">
        							<div class="container">
        								<div class="row">
        									<div class="col-lg-12 left">
                                                <?php 
                                                  //Heading
                                                  if( $yog_item['yog_heading'] ){
                                                     echo '<h1>'. $yog_item['yog_heading'] .'</h1>';
                                                  }
                                                  
                                                  //Content
                                                  if( $yog_item['yog_content'] ){
                                                     echo '<h3>'. $yog_item['yog_content'] .'</h3>';
                                                  }
                                                  
                                                  //Link
                                                  $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                                  if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                            
                                                    $attributes   = array();
                                                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                                	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                                	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                                    $attributes   = implode( ' ', $attributes );
                                                   
                                                    echo '<a ' . $attributes . ' class="btn color1">'. esc_html( trim( $yog_link['title'] ) ) .'</a>';
                                                    
                                                  } 
                                              ?>
        									</div>
        								</div>
        							</div>
        						</div>
        					</div>
        				</li>
                        <?php
                    
                    }
                ?>
            </ul>
            <!-- Scroll down icon -->
			<a class="scroll-down" href="#about">
				<span class="ico-mouse61"></span>
			</a>            
            <?php
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_bw_sliders', 'yog_bw_sliders' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: BW Heading  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_bw_heading($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'   => '',
            'yog_content'   => '',
            'yog_position'  => 'row center',
            'yog_animation' => '',
            'yog_delay'     => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => $yog_position, 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
			<div class="col-lg-12">
				<?php 
                    //Heading
                    if( $yog_heading ){
                       echo '<h3 class="heading">'. yog_bw_highlight_it( $yog_heading ) .'</h3>';
                    }
                  
                    //Content
                    if( $yog_content ){
                       echo '<p class="heading-text">'. $yog_content .'</p>';
                    }
                ?>
			</div>
		</div>
        <?php
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_bw_heading', 'yog_bw_heading' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: BW Counter  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_bw_counters($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'    => '',
            'yog_content'    => '',
            'yog_column'     => '4',
            'yog_bw_counter' => '',
            'yog_animation'  => '',
            'yog_delay'      => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_bw_counter );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'counters-box clearfix center', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
               <?php 
                    if( $yog_heading ||  $yog_content ):
                
                        echo '<div class="row center">';
                    
                            //Heading
                            if( $yog_heading ){
                               echo '<h3 class="heading">'. yog_bw_highlight_it( $yog_heading ) .'</h3>';
                            }
                          
                            //Content
                            if( $yog_content ){
                               echo '<p class="heading-text">'. $yog_content .'</p>';
                            }
                        
                        echo '</div><div class="clearfix"></div>';
                        
                    endif;
                    
                    $yog_counter = 1;
                    foreach( $yog_items as $yog_item ){
                        
                        //Wrapper Start
                        if( $yog_counter == 1 ){
                            echo '<div class="row">';
                            $yog_class = true; 
                        }
                        ?>
                        <div class="count-box <?php echo yog_get_column( $yog_column ); ?>">
                            <?php 
                                //Icons
                                if( isset( $yog_item['yog_icon'] ) && !empty( $yog_item['yog_icon'] ) ):
                                    echo '<div class="ico-box"><span class="'. $yog_item['yog_icon'] .'"></span></div>';
                                endif;
                                
                                //Counter
                                if( isset( $yog_item['yog_counters'] ) && !empty( $yog_item['yog_counters'] ) ):
                                    echo '<span class="counter" data-from="0" data-to="'. $yog_item['yog_counters'] .'" data-speed="3000" data-refresh-interval="50"></span>';
                                endif;
                                
                                echo '<p>';
                                
                                    //Heading
                                    if( isset( $yog_item['yog_heading'] ) && !empty( $yog_item['yog_heading'] ) ):
                                        echo '<span class="bolder colored">'. $yog_item['yog_heading'] .'</span> ';
                                    endif;
                                    
                                    //Content
                                    if( isset( $yog_item['yog_content'] ) && !empty( $yog_item['yog_content'] ) ):
                                        echo $yog_item['yog_content'];
                                    endif;
                                
                                echo '</p>';
                            ?>
        				</div>
                        <?php
                        
                        //Wrapper End
                        if( $yog_counter == $yog_column ){
                            echo '</div>';
                            $yog_class = false; 
                            $yog_counter = 1;
                        }else{
                            $yog_counter++;
                        }
                    }
                    
                    //Wrapper End
                    if( $$yog_class ){
                        echo '</div>';
                    }
                ?>
            </div>
            <?php
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_bw_counters', 'yog_bw_counters' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: BW Team  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_bw_teams($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'    => '',
            'yog_content'    => '',
            'yog_bw_team'    => '',
            'yog_animation'  => '',
            'yog_delay'      => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_bw_team );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'row-fluid clearfix team', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
                
                if( $yog_heading ||  $yog_content ):
                
                    echo '<div class="row center">';
                
                        //Heading
                        if( $yog_heading ){
                           echo '<h3 class="heading">'. yog_bw_highlight_it( $yog_heading ) .'</h3>';
                        }
                      
                        //Content
                        if( $yog_content ){
                           echo '<p class="heading-text">'. $yog_content .'</p>';
                        }
                    
                    echo '</div><div class="clearfix"></div>';
                    
                endif;
                
                foreach( $yog_items as $yog_item ){
                    
                    //Background
                    $yog_bg = ( isset( $yog_item['yog_dp'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_item['yog_dp'] ) .');"' : '';
                    ?>
                    <div class="col-lg-6 col-xs-12">
    					<div class="member-pic" <?php echo $yog_bg; ?>>
    						<div class="member-item-outer">
    							<div class="member-item-inner">
    								<div class="member-caption center">
    									<div class="member-info">
                                            <?php 
                                                printf( '<h4>%s / <span class="smaller">%s</span></h4>', $yog_item['yog_name'], $yog_item['yog_designation'] );
                                            
                                                //Elements Items
                                                $yog_socials = (array) vc_param_group_parse_atts( $yog_item['yog_socials'] );
                                                if( $yog_socials ):
                                                    foreach( $yog_socials as $yog_social ){
                                                        echo '<a href="'. $yog_social['yog_link'] .'" class="ico-soc"><span class="'. $yog_social['yog_icon'] .'"></span></a>';
                                                    }
                                                endif;
                                            ?>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
                    <?php
                    
                }
            
            echo '</div>';
        
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_bw_teams', 'yog_bw_teams' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: BW Services  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_bw_services($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'    => '',
            'yog_content'    => '',
            'yog_bw_service' => '',
            'yog_animation'  => '',
            'yog_delay'      => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_bw_service );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'service', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
            
                if( $yog_heading ||  $yog_content ):
                
                    echo '<div class="row center">';
                
                        //Heading
                        if( $yog_heading ){
                           echo '<h3 class="heading">'. yog_bw_highlight_it( $yog_heading ) .'</h3>';
                        }
                      
                        //Content
                        if( $yog_content ){
                           echo '<p class="heading-text">'. $yog_content .'</p>';
                        }
                    
                    echo '</div><div class="clearfix"></div>';
                    
                endif;
                
                $yog_counter = 1; $yog_columns = 2;
                foreach( $yog_items as $yog_item ){
                    
                    //Wrapper
                    if( $yog_counter == 1 ){
                        echo '<div class="row">';
                        $yog_close = true;
                    }
                    
                    //Class
                    $yog_class = ( $yog_counter == 1 )? ' right col-full right-0': ' left col-full left-0';
                    ?>
                    <div class="s-item">
    					<div class="col-lg-6<?php echo $yog_class; ?>">
                            <?php 
                                //Icons
                                if( isset( $yog_item['yog_icon'] ) && !empty( $yog_item['yog_icon'] ) ):
                                    echo '<div class="ico-box"><span class="'. $yog_item['yog_icon'] .'"></span></div>';
                                endif;
                                
                                //Heading
                                if( isset( $yog_item['yog_heading'] ) && !empty( $yog_item['yog_heading'] ) ):
                                    echo '<h6>'. $yog_item['yog_heading'] .'</h6> ';
                                endif;
                                
                                //Content
                                if( isset( $yog_item['yog_content'] ) && !empty( $yog_item['yog_content'] ) ):
                                    echo '<p class="colored3">'. $yog_item['yog_content'] .'</p>';
                                endif;
                            ?>
    					</div>
    				</div>
                    <?php
                    
                    //Wrapper End
                    if( $yog_counter == $yog_columns ){
                        echo '</div>';
                        $yog_close   = false;
                        $yog_counter = 1;
                    }else{
                        $yog_counter++;
                    }
                }
            
                //Wrapper End
                if( $yog_close ){
                    echo '</div>';
                }
            
            echo '</div>';
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_bw_services', 'yog_bw_services' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: BW Pricing Table  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_bw_pricing_tables($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'           => '',
            'yog_content'           => '',
            'yog_bw_pricing_table'  => '',
            'yog_columns'           => '3',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_bw_pricing_table );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'pricing', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
            
                if( $yog_heading ||  $yog_content ):
                
                    echo '<div class="row center">';
                
                        //Heading
                        if( $yog_heading ){
                           echo '<h3 class="heading">'. yog_bw_highlight_it( $yog_heading ) .'</h3>';
                        }
                      
                        //Content
                        if( $yog_content ){
                           echo '<p class="heading-text">'. $yog_content .'</p>';
                        }
                    
                    echo '</div><div class="clearfix"></div>';
                    
                endif;
                
                $yog_counter = 1;
                foreach( $yog_items as $yog_item ){
                    
                    //Wrapper Start
                    if( $yog_counter == 1 ){
                        echo '<div class="row center">';
                        $yog_close = true;
                    }
                    
                    $yog_class = ( isset( $yog_item['popular'] ) && !empty( $yog_item['popular'] ) )? ' popular' : '';
                    ?>
                    <div class="<?php echo esc_attr( yog_get_column( $yog_columns ) ); ?> col-xs-12">
    					<div class="table-item<?php echo $yog_class; ?>">
                            <?php 
                                //Heading
                                if( isset( $yog_item['yog_table_heading'] ) && !empty( $yog_item['yog_table_heading'] ) ){
                                   echo '<h4>'. esc_html( $yog_item['yog_table_heading'] ) .'</h4>'; 
                                }
                                
                                //Price
                                printf( '<div class="price">%s%s / <span class="smaller no-italic">%s</span></div>', $yog_item['yog_currency'], $yog_item['yog_table_amount'], $yog_item['yog_table_duration'] );
                            
                                //Feature Lists
                                $yog_table_features = (array) vc_param_group_parse_atts( $yog_item['table_features_list'] ); 
                                if( isset( $yog_table_features ) && !empty( $yog_table_features ) ){
                                    echo '<ul>';
                                        foreach( $yog_table_features as $yog_table_feature ){
                                            echo '<li>'. yog_bw_highlight_it( $yog_table_feature['table_list_heading'] ) .'</li>';
                                        }
                                    echo '</ul>';
                                }
                                
                                //Button
                                $yog_link = vc_build_link( $yog_item['yog_link'] );
                                if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                    
                                    $attributes   = array();
                                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                    $attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                    $attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                    $attributes = implode( ' ', $attributes );
                                    
                                    //text
                                    echo '<a ' . $attributes . ' class="btn color2">'. esc_html( $yog_link['title'] ) .'</a>';
                                
                                }
                            ?>
    					</div>
    				</div>
                    <?php
                    
                    //Wrapper End
                    if( $yog_counter == $yog_columns ){
                        echo '</div>';
                        $yog_close = false;
                        $yog_counter = 1;
                    }else{
                        $yog_counter++;
                    }
                    
                }
                
                if( $yog_close ){
                    echo '</div>';
                }
            
            echo '</div>';
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_bw_pricing_tables', 'yog_bw_pricing_tables' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: BW Blog Post  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_bw_blog_posts($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'   => '',
            'yog_content'   => '',
            'yog_limit'     => '-1',
            'taxonomie'     => '',
            'yog_button'    => '',
            'yog_animation' => '',
            'yog_delay'     => ''
		), $atts));

        ob_start();
        
        //Get Post Date.
        $yog_post_query = yog_post_query( array( 'post_type' => 'post', 'posts_per_page' => $yog_limit ), $taxonomie );
        
        //Check and Print Posts
        if( $yog_post_query->have_posts() ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'row blog', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
            
                if( $yog_heading ||  $yog_content ):
                
                    echo '<div class="row center">';
                
                        //Heading
                        if( $yog_heading ){
                           echo '<h3 class="heading">'. yog_bw_highlight_it( $yog_heading ) .'</h3>';
                        }
                      
                        //Content
                        if( $yog_content ){
                           echo '<p class="heading-text">'. $yog_content .'</p>';
                        }
                    
                    echo '</div><div class="clearfix"></div>';
                    
                endif;
                    
                $yog_counter = 1;
                while ( $yog_post_query->have_posts() ) {
                    $yog_post_query->the_post();
                    
                    //Post Tags.
                    $yog_terms = get_the_terms( get_the_ID(), 'post_tag' );
                    $yog_tags = '';
                    if ( !is_wp_error( $yog_terms ) && !empty( $yog_terms ) ) {
                        $yog_tags_name = array();
                        foreach ( $yog_terms as $yog_term ) {
                            $yog_tags_name[] = '<a href="'. get_tag_link( $yog_term->term_id ) .'">'. $yog_term->name .'</a>';
                        }
                        
                        $yog_tags = '<div class="tags-entry"><span class="ico-tag27"></span> '. join( ', ', $yog_tags_name ) .'</div>';
                    }
                        
                    if( $yog_counter == 1 ):
                    ?>
                    <div class="news-item col-lg-6 col-xs-12">
    					<a href="<?php the_permalink(); ?>" class="img-caption">
    						<?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?>
    						<div class="date">
    							<h4><span class="bolder"><?php echo get_the_date( 'd' ); ?></span> <?php echo get_the_date( 'F' ); ?></h4>
    							<span class="smaller"><?php printf('%s %s', esc_html__( 'by', 'yog' ), get_the_author() ); ?></span>
    						</div>
    					</a>
    					<div class="news-info negative-top">
    						<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
    						<?php echo yog_get_excerpt( array( 'yog_link_to_post' => false ) ); ?>
                            <div class="post-meta">
    							<?php
                                    //Tags 
                                    echo $yog_tags; 
                                    
                                ?>
    							<div class="comments-entry">
    								<span class="ico-chat26"></span> <a href="<?php the_permalink(); ?>"><?php printf( __( '%s comments', 'yog' ), get_comments_number( get_the_ID() ) ); ?></a>
    							</div>
    						</div>
    						<a class="post-meta-a" href="<?php the_permalink(); ?>"><?php _e( 'Read more &rarr;', 'yog' ); ?></a>
    					</div>
    				</div>
                    <?php
                    else:
                    ?>
                    <div class="news-item n-item-b col-lg-6 col-xs-12">
    					<div class="news-info negative-bottom">
    						<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
    						<?php echo yog_get_excerpt( array( 'yog_link_to_post' => false ) ); ?>
                            <div class="post-meta">
    							<?php
                                    //Tags 
                                    echo $yog_tags; 
                                    
                                ?>
    							<div class="comments-entry">
    								<span class="ico-chat26"></span> <a href="<?php the_permalink(); ?>"><?php printf( __( '%s comments', 'yog' ), get_comments_number( get_the_ID() ) ); ?></a>
    							</div>
    						</div>
    						<a class="post-meta-a" href="<?php the_permalink(); ?>"><?php _e( 'Read more &rarr;', 'yog' ); ?></a>
    					</div>
    					<a href="<?php the_permalink(); ?>" class="img-caption">
    						<?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?>
    						<div class="date">
    							<h4><span class="bolder"><?php echo get_the_date( 'd' ); ?></span> <?php echo get_the_date( 'F' ); ?></h4>
    							<span class="smaller"><?php printf('%s %s', esc_html__( 'by', 'yog' ), get_the_author() ); ?></span>
    						</div>
    					</a>
    				</div>
                    <?php
                    endif;
                    
                    //Counter
                    if( $yog_counter == 2 ):
                        $yog_counter = 1;
                    else:
                        $yog_counter++;
                    endif;
                
                }
                
                //Link
                $yog_link = isset( $yog_button )? vc_build_link( $yog_button ) : '';
                if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
            
                    $attributes   = array();
                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                    $attributes   = implode( ' ', $attributes );
                   
                    echo '<div class="row center"><div class="col-lg-12"><a ' . $attributes . ' class="btn color2">'. esc_html( trim( $yog_link['title'] ) ) .'</a></div></div>';
                    
                } 
            
            echo '</div>';
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_bw_blog_posts', 'yog_bw_blog_posts' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: BW Divider Post  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_bw_divider($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_divider'   => 'top-left-separator hidden-xs',
            'yog_animation' => '',
            'yog_delay'     => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        if( $yog_divider == 'bottom-separator two hidden-xs' ):
            echo '<div class="separator-wrap">';
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => $yog_divider, 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'></div>';
            echo '<div class="btn-show open"></div>';
            echo '</div>';
        else:
            echo '<div class="separator-wrap">';
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => $yog_divider, 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'></div>';
            echo '</div>';
        endif; 
            
            
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_bw_divider', 'yog_bw_divider' );
   
/*--------------------------------------------------------------------------------
|				Flipmart:  BW Testimonial CPT Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_bw_testimonial($atts, $content = null ){

		$yog_output  = '';
        
		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'   => '',
            'yog_content'   => '',
            'yog_limit'     => '',
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
            
            //Outer Wrapper
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'testimonials-content', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
            
                if( $yog_heading ||  $yog_content ):
                    
                    echo '<div class="row center">';
                
                        //Heading
                        if( $yog_heading ){
                           echo '<h3 class="heading">'. yog_bw_highlight_it( $yog_heading ) .'</h3>';
                        }
                      
                        //Content
                        if( $yog_content ){
                           echo '<p class="heading-text">'. $yog_content .'</p>';
                        }
                    
                    echo '</div><div class="clearfix"></div>';
                    
                endif;
                    
                //Wrapper Start
                echo '<div class="row center"><div id="testi" class="owl-carousel">';
            
                    while ( $yog_post_query->have_posts() ) {
                        $yog_post_query->the_post();
                    }
                    ?>
                    <div class="item gray">
        				<?php 
                            //Testimonials
                            echo '<p>'. get_post_meta( get_the_ID(), 'testimonial-content', true ) .'</p>';
                            
                            //Image
                            if( has_post_thumbnail() ):
                                echo '<div class="avatar round">'. get_the_post_thumbnail( get_the_ID(), array( 100, 100 ), array( 'class' => 'img-circle' ) ) .'</div>';
                            endif;
                            
                            //Meta Info
                            printf( '<div class="u-title">- %s / %s</div>', get_the_title(), get_post_meta( get_the_ID(), 'testimonial-company', true ) );
                        ?>
        			</div>
                    <?php
                
                //Wrapper End
                echo '</div></div>';
                
           //Outer Wrapper End
           echo '</div>';
            
        endif;
        
        
                
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_bw_testimonial', 'yog_bw_testimonial' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Bw Client Logs Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_bw_client_logos($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'        => '',
            'yog_content'        => '',
            'yog_bw_client_logo' => '',
            'yog_animation'      => '', 
            'yog_delay'          => '', 
		), $atts));

        ob_start(); 
        
        //Logos Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_bw_client_logo );
        
        if( $yog_items ):
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'clients', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
                
                //Heading Content    
                if( $yog_heading ||  $yog_content ):
                    
                    echo '<div class="row center">';
                
                        //Heading
                        if( $yog_heading ){
                           echo '<h3 class="heading">'. yog_bw_highlight_it( $yog_heading ) .'</h3>';
                        }
                      
                        //Content
                        if( $yog_content ){
                           echo '<p class="heading-text">'. $yog_content .'</p>';
                        }
                    
                    echo '</div><div class="clearfix"></div>';
                    
                endif;
                
                //Wrapper Start
                echo '<div class="row center"><div id="brands" class="owl-carousel">';
                    
                    foreach( $yog_items as $yog_item ){
                        
                        //Link  
                        $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                        $yog_before_tag = $yog_after_tag = '';
                          
                        if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                            
                            $attributes   = array();
                            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                            $attributes   = implode( ' ', $attributes );
                           
                            $yog_before_tag = '<a ' . $attributes . ' class="image">';
                            $yog_after_tag  = '</a>';
                            
                        } 
                        ?>
                        <div class="item m-t-15">
        					<?php echo $yog_before_tag; ?>
        						<img src="<?php echo esc_url( wp_get_attachment_url( $yog_item['yog_logo'] ) ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_item['yog_logo'], '_wp_attachment_image_alt', true) ); ?>" />
        					<?php echo $yog_after_tag; ?>	
        				</div>
                        <?php 
                    }
                
                //Wrapper End    
                echo '</div></div>';
            
            //Wrapper End    
            echo '</div>';
            
        endif;
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_bw_client_logos', 'yog_bw_client_logos' );
  
/*--------------------------------------------------------------------------------
|				Flipmart:  Bw Contact Info / Element Shortcode			|						
--------------------------------------------------------------------------------*/
    function yog_bw_contact_info($atts, $content = null ){
		$yog_output  = '';
        
		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'       => '',
            'yog_sub_heading'   => '',
            'yog_address_title' => 'Adress:',
            'yog_address'       => '',
            'yog_phone_title'   => 'Main phone:',
            'yog_phone'         => '',
            'yog_email_title'   => 'Email:',
            'yog_mail'          => '',
            'yog_content'       => ''
		), $atts));
	
		ob_start(); 
            
        //Heading & Sub Heading.
    	echo '<h4>'. yog_bw_highlight_it( $yog_heading ) .' / <span class="smaller">'. $yog_sub_heading .'</span></h4>';
		
        echo '<ul class="contacts-info">';
            
            //Address.
            if( $yog_address ){
                printf( '<li>%s %s</li>', $yog_address_title, $yog_address );
            }
            
            //Phone
            if( $yog_phone ){
                printf( '<li>%s %s</li>', $yog_phone_title, $yog_phone );
            }
            
            //Email
            if( $yog_mail ){
                printf( '<li>%1$s <a href="mailto:%2$s">%2$s</a></li>', $yog_email_title, $yog_mail );
            }
            
		echo '</ul>';
        
        //Content
        if( $yog_content ){
            echo '<div class="contacts-text">'. $yog_content .'</div>';
        }
			
                            
        $yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
	}
    
	add_shortcode( 'yog_bw_contact_info', 'yog_bw_contact_info' );
    
/*--------------------------------------------------------------------------------
|				Flipmart:  BW Google Map / Element Shortcode			|						
--------------------------------------------------------------------------------*/
    function yog_bw_map($atts, $content = null ){
		$yog_output  = '';
        
		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'      => '',
            'yog_content'      => '',
            'yog_lat'          => '',
            'yog_long'         => '',
            'yog_marker_image' => ''
		), $atts));
	
		ob_start(); 
        
        //Google Map
        if( $yog_lat && $yog_long ):
            
            //Enqueue Js Script File
            wp_enqueue_script( 'yog-googleapis' );
               
            echo '<div id="map" class="gmap" data-lat="'. $yog_lat .'" data-long="'. $yog_long .'" data-heading="'. $yog_heading .'" data-content="'. $yog_content .'" data-marker="'. esc_url( wp_get_attachment_url( $yog_marker_image ) ) .'"></div>';    
            
        endif;
                        
        $yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
	}
    
	add_shortcode( 'yog_bw_map', 'yog_bw_map' );            