<?php 
/**
 * Visual Composer Default Elements Mapping
 *
 * @category VC extend
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js_composer
 *
 */
 /*-------------------------------------------------------------------------------
|				Flipmart:  Buttons Module / Element Map				             |						
--------------------------------------------------------------------------------*/
    vc_map( array(
        'name'        => esc_html__( 'Flipmart Buttons', 'yog' ),
        'base'        => 'yog_buttons',
        'class'       => 'icon_yog_buttons',
        'icon'	      => 'icon-wpb-application-icon-large',
        'weight'      => 101,
        'category'    => esc_html__( 'Flipmart Elements', 'yog' ),
        'description' => esc_html__( 'Insert Buttons.', 'yog' ),
        'params'      => array(
               
                array(
                    'type'        => 'dropdown',
                    'heading'     => esc_html__( 'Button', 'yog' ),
                    'param_name'  => 'yog_btn_size',
                    'value'       => array(
                        esc_html__( 'Normal', 'yog' )      => 'thick',
                        esc_html__( 'Small', 'yog' )       => 'small',
                        esc_html__( 'Big', 'yog' )         => 'big',
                        esc_html__( 'Bigger', 'yog' )      => 'bigger'
                    ),
                    'save_always' => true,
                    'description' =>  esc_html__( 'Select Button Size', 'yog' ),                  
                ),
                
                array(
                    'type'        => 'dropdown',
                    'heading'     => esc_html__( 'Button Color', 'yog' ),
                    'param_name'  => 'yog_btn_color',
                    'value'       => array(
                        esc_html__( 'Normal', 'yog' )       => 'normal',
                        esc_html__( 'Grey', 'yog' )         => 'grey',
                        esc_html__( 'Base', 'yog' )         => 'base',
                        esc_html__( 'Dark', 'yog' )         => 'dark',
                        esc_html__( 'Blue', 'yog' )         => 'blue',
                        esc_html__( 'Turquoise', 'yog' )    => 'turquoise',
                        esc_html__( 'Green', 'yog' )        => 'green',
                        esc_html__( 'Lime', 'yog' )         => 'lime',
                        esc_html__( 'Yellow', 'yog' )       => 'yellow',
                        esc_html__( 'Orange', 'yog' )       => 'orange',
                        esc_html__( 'Red', 'yog' )          => 'red',
                        esc_html__( 'Purple', 'yog' )       => 'purple',
                        esc_html__( 'Brown', 'yog' )        => 'brown'
                    ),
                    'save_always' => true,
                    'description' =>  esc_html__( 'Select Button Color', 'yog' ),                  
                ),
                
                array(
                    'heading'     => esc_html__( 'Link','yog'),
                    'type'        => 'vc_link',
                    'value'       => '',
                    'param_name'  => 'yog_link',
                )
            )
        )
    );

/*-------------------------------------------------------------------------------
|				Flipmart:  Alert Module / Element Map				             |						
--------------------------------------------------------------------------------*/
    vc_map( array(
        'name'        => esc_html__( 'Flipmart Alert', 'yog' ),
        'base'        => 'yog_alerts',
        'class'       => 'icon_yog_alerts',
        'icon'	      => 'icon-wpb-application-icon-large',
        'weight'      => 101,
        'category'    => esc_html__( 'Flipmart Elements', 'yog' ),
        'description' => esc_html__( 'Insert Alert.', 'yog' ),
        'params'      => array(
            
                 array(
                    'type'        => 'dropdown',
                    'heading'     => esc_html__( 'Alert Style', 'yog' ),
                    'param_name'  => 'yog_alert_style',
                    'value'       => array(
                        esc_html__( 'Simple', 'yog' )    => 'simple',
                        esc_html__( 'Extended', 'yog' )  => 'extended',
                    ),
                    'save_always' => true,
                    'description' =>  esc_html__( 'Select Alert Style', 'yog' ),                  
                ),
                
                array(
                    'type'        => 'dropdown',
                    'heading'     => esc_html__( 'Type', 'yog' ),
                    'param_name'  => 'yog_alert_type',
                    'value' => array(
                        esc_html__( 'Note', 'yog' )    => 'note',
                        esc_html__( 'Success', 'yog' ) => 'success',
                        esc_html__( 'Info', 'yog' )    => 'info',
                        esc_html__( 'Danger', 'yog' )  => 'danger',
                        esc_html__( 'warning', 'yog' ) => 'warning'
                    ),
                    'save_always' => true,
                    'description' =>  esc_html__( 'Select Alert Type', 'yog' ),                  
                ),
                
                array(
                    'heading'     => esc_html__( 'Alert Heading','yog'),
                    'type'        => 'textfield',
                    'value'       => '',
                    'admin_label' => true,
                    'param_name'  => 'alert_heading'
                ),
                
                array(
                    'heading'     => esc_html__( 'Alert Message','yog'),
                    'type'        => 'textarea',
                    'value'       => '',
                    'param_name'  => 'alert_message',
                ),
                
                array(
                    'heading'     => esc_html__( 'Link','yog'),
                    'type'        => 'vc_link',
                    'value'       => '',
                    'param_name'  => 'yog_link'
                ),
                
                array(
                    'type'        => 'iconpicker',
                    'heading'     => esc_html__( 'Icon', 'js_composer' ),
                    'param_name'  => 'yog_icon',
                    'settings'    => array(
                        'emptyIcon'    => false, // default true, display an "EMPTY" icon?
                        'type'         => 'fontawesome',
                        'iconsPerPage' => 200, // default 100, how many icons per/page to display
                    ),
                    'description' => esc_html__( 'Select icon from library.', 'js_composer' ),
                    'dependency'  => array( 'element' => 'yog_list_icons','value' => array( 'fontawsome' ) ),
                ),
                
                array(
                	'type'        => 'checkbox',
                	'heading'     => esc_html__( 'Disable Close Icon', 'yog' ),
                	'param_name'  => 'disable_close_icon', // Inner param name.
                	'description' => esc_html__( 'If checked the alert close icon will be hide.', 'yog' ),
                	'value'       => array( esc_html__( 'Yes', 'yog' ) => 'yes' ),
                )
            )
        )
    );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Call Of Action Module / Element Map				             |						
--------------------------------------------------------------------------------*/
    vc_map( array(
        'name'        => esc_html__( 'Flipmart Call Of Action', 'yog' ),
        'base'        => 'yog_call_of_action',
        'class'       => 'icon_yog_call_of_action',
        'icon'	      => 'icon-wpb-application-icon-large',
        'weight'      => 101,
        'category'    => esc_html__( 'Flipmart Elements', 'yog' ),
        'description' => esc_html__( 'Insert Call Of Action.', 'yog' ),
        'params'      => array(
        
                array(
                    'type'        => 'dropdown',
                    'heading'     => esc_html__( 'Call Of Action Effect', 'yog' ),
                    'param_name'  => 'yog_action_effect',
                    'value'       => array(
                        esc_html__( 'Simple', 'yog' )                      => 'simple',
                        esc_html__( 'Gery Background', 'yog' )             => 'bg-grey',
                        esc_html__( 'Background Shadow Link', 'yog' )      => 'shadow-link',
                        esc_html__( 'Background Shadow Dual Link', 'yog' ) => 'shadow-link-dual',
                        esc_html__( 'Background Grey Shadow ', 'yog' )     => 'grey-shadow'
                    ),
                    'save_always' => true,
                    'description' => esc_html__( 'Select Call Of Action Effect', 'yog' ),                 
                ),
                
                array(
                    'heading'     => esc_html__( 'Heading','yog'),
                    'type'        => 'textfield',
                    'admin_label' => true,
                    'value'       => '',
                    'param_name'  => 'yog_heading'
                ),
              
                array(
        			'type'        => 'textarea',
        			'heading'     => esc_html__( 'Content', 'yog' ),
        			'param_name'  => 'yog_content'
        		),
               
                array(
                    'heading'     => esc_html__( 'Button 1','yog'),
                    'type'        => 'vc_link',
                    'value'       => '',
                    'param_name'  => 'yog_btn1',
                    'dependency'  => array( 'element' => 'yog_action_effect','value' => array( 'shadow-link-dual' ) ),
                ),
                
                array(
                    'heading'     => esc_html__( 'Button 2','yog'),
                    'type'        => 'vc_link',
                    'value'       => '',
                    'param_name'  => 'yog_btn2',
                    'dependency'  => array( 'element' => 'yog_action_effect','value' => array( 'shadow-link-dual' ) ),
                ),
                
                array(
                    'heading'     => esc_html__( 'Button','yog'),
                    'type'        => 'vc_link',
                    'value'       => '',
                    'param_name'  => 'yog_btn',
                    'dependency'  => array( 'element' => 'yog_action_effect','value' => array( 'shadow-link', 'grey-shadow' ) ), 
                )
            )
        )
    );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Pricing Table Module / Element Map				             |						
--------------------------------------------------------------------------------*/
    vc_map( array(
        'name'        => esc_html__( 'Flipmart Pricing Table', 'yog' ),
        'base'        => 'yog_pricing_table',
        'class'       => 'icon_yog_pricing_table',
        'icon'	      => 'icon-wpb-application-icon-large',
        'weight'      => 101,
        'category'    => esc_html__('Flipmart Elements', 'yog'),
        'description' => esc_html__( 'Insert Pricing Table.', 'yog' ),
        'params'      => array(
        
                array(
                    'heading'     => esc_html__('Columns', 'yog'),
                    'type'        => 'dropdown',
                    'param_name'  => 'yog_columns',
                    'admin_label' => true,
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
                    'param_name'  => 'yog_table',
                    'params'      => array(
                    
                         array(
                            'type'       => 'dropdown',
                            'heading'    => esc_html__( 'Table Color', 'yog' ),
                            'param_name' => 'yog_table_color',
                            'value'      => array(
                                esc_html__( 'Normal', 'yog' )    =>  'normal',
                                esc_html__( 'Base', 'yog' )      =>  'base',
                                esc_html__( 'Purple', 'yog' )    =>  'purple',
                                esc_html__( 'Blue', 'yog' )      =>  'blue',
                                esc_html__( 'Turquoise', 'yog' ) =>  'turquoise',
                                esc_html__( 'green', 'yog' )     =>  'green',
                                esc_html__( 'Lime', 'yog' )      =>  'lime',
                                esc_html__( 'Orange', 'yog' )    =>  'orange',
                                esc_html__( 'Red', 'yog' )       =>  'red',
                                esc_html__( 'Brown', 'yog' )     =>  'brown',
                                esc_html__( 'Dark', 'yog' )      =>  'dark'
                            ),
                            'save_always' => true,
                            'description' =>  esc_html__( 'Select Table Color', 'yog' ),               
                        ),
                        
                        array(
                            'heading'     => esc_html__( 'Heading','yog'),
                            'type'        => 'textfield',
                            'value'       => '',
                            'admin_label' => true,
                            'param_name'  => 'yog_table_heading',
                        ),
                        
                         array(
                            'type'        => 'dropdown',
                            'heading'     => esc_html__( 'Table Type', 'yog' ),
                            'param_name'  => 'table_type',
                            'value'       => array(
                                esc_html__( 'Free', 'yog' ) => 'free',
                                esc_html__( 'Paid', 'yog' ) => 'paid'
                            ),
                            'save_always' => true,
                            'description' =>  esc_html__( 'Select Table Type', 'yog' ),                  
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
                                    'type'        => 'dropdown',
                                    'heading'     => esc_html__( 'List Type', 'yog' ),
                                    'param_name'  => 'table_list_type',
                                    'value'       => array(
                                        esc_html__( 'Strong', 'yog' )        => 'strong',
                                        esc_html__( 'Check', 'yog' )         => 'check',
                                        esc_html__( 'Description', 'yog' )   => 'description'
                                    ),
                                    'save_always' => true,
                                    'description' =>  esc_html__( 'Select Table List Type', 'yog' ),                  
                                ),
                                
                                array(
                                    'heading'     => esc_html__( 'Heading','yog'),
                                    'type'        => 'textfield',
                                    'value'       => '',
                                    'admin_label' => true,
                                    'description' => yog_pattren_description(),
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
|				Flipmart :  Tabs Module / Elements Shortcode			|						
--------------------------------------------------------------------------------*/
    vc_map( array(
        'name'        => esc_html__( 'Flipmart Tab', 'yog' ),
        'base'        => 'yog_tabs',
        'class'       => 'icon_yog_tabs',
        'icon'	      => 'icon_yog_tab',
        'weight'      => 101,
        'category'    => esc_html__( 'Flipmart Elements', 'yog' ),
        'description' => esc_html__( 'Show Content in Tab.', 'yog' ),
        'params'      => array(
        
                array(
                     'type'        => 'dropdown',
                     'heading'     => esc_html__( 'Tab Size', 'yog' ),
                     'param_name'  => 'yog_size',
                     'value' => array(
                        esc_html__( 'Small', 'yog' ) => 'small',
                        esc_html__( 'Big', 'yog' )   => 'tabs-navigation-big',
                     ),
                     'save_always' => true,
                     'description' =>  esc_html__( 'Select Tab Type', 'yog' ),                 
                ),
                
                array(
                     'type'        => 'dropdown',
                     'heading'     => esc_html__( 'Type', 'yog' ),
                     'param_name'  => 'yog_type',
                     'value'       => array(
                        esc_html__( 'Horizontal', 'yog' ) => 'horizontal',
                        esc_html__( 'Vertical', 'yog' )   => 'vertical',
                     ),
                     'save_always' => true,
                     'description' =>  esc_html__( 'Select Tab Type', 'yog' ),                 
                ),
                
                array(
                     'type'        => 'dropdown',
                     'heading'     => esc_html__( 'Variantion', 'yog' ),
                     'param_name'  => 'yog_variant',
                     'value' => array(
                        esc_html__( 'Shadow', 'yog' )                 => 'variant-1',
                        esc_html__( 'Justified', 'yog' )              => 'variant-2',
                        esc_html__( 'Transparent', 'yog' )            => 'variant-3',
                        esc_html__( 'Transparent justified', 'yog' )  => 'variant-4'
                     ),
                     'save_always' => true,
                     'description' =>  esc_html__( 'Select Tab Variantion', 'yog' ), 
                     'dependency'  => array( 'element' => 'yog_type','value' => array( 'horizontal' ) ),                
                ),
                
                array(
                     'type'        => 'dropdown',
                     'heading'     => esc_html__( 'Variantion', 'yog' ),
                     'param_name'  => 'yog_variant_vert',
                     'value' => array(
                        esc_html__( 'Shadow', 'yog' )                 => 'variant-1',
                        esc_html__( 'Transparent', 'yog' )            => 'variant-3',
                     ),
                     'save_always' => true,
                     'description' =>  esc_html__( 'Select Tab Variantion', 'yog' ), 
                     'dependency'  => array( 'element' => 'yog_type','value' => array( 'vertical' ) ),                
                ),
                
                array(
                     'type'       => 'param_group',
                     'value'      => '',
                     'param_name' => 'yog_tab',
                     'params'     => array(
                     
                        array(
                             'heading'     => esc_html__('Active', 'yog'),
                        	 'type'        => 'checkbox',
                        	 'param_name'  => 'yog_active',
                        	 'value'       => array( esc_html__( 'Tab Active', 'yog' ) => 'yes' ),
                        	 'description' => esc_html__('Make checked to make tab active.', 'yog')
                        ),
                        
                        array(
                             'heading'     => esc_html__('Icons', 'yog'),
                        	 'type'        => 'checkbox',
                        	 'param_name'  => 'yog_icon_disable',
                        	 'value'       => array( esc_html__( 'Icons Disable', 'yog' ) => 'yes' ),
                        	 'description' => esc_html__('Make checked to disable icon.', 'yog')
                        ),
                        
                        array(
                            'type'        => 'iconpicker',
                            'heading'     => esc_html__( 'Icon', 'js_composer' ),
                            'param_name'  => 'yog_icon',
                            'settings'    => array(
                                'emptyIcon'    => false, // default true, display an "EMPTY" icon?
                                'type'         => 'fontawesome',
                                'iconsPerPage' => 200, // default 100, how many icons per/page to display
                            ),
                            'description' => esc_html__( 'Select icon from library.', 'js_composer' ),
                            'dependency'  => array( 'element' => 'yog_list_icons','value' => array( 'fontawsome' ) ),
                        ),
                        
                        array(
                             'heading'    => esc_html__( 'Heading','yog'),
                             'type'       => 'textfield',
                             'value'      => '',
                             'admin_label'=> true,
                             'param_name' => 'yog_tab_heading',
                        ),
                        
                        array(
                			'type'        => 'textarea_raw_html',
                			'holder'      => 'div',
                			'heading'     => esc_html__( 'List HTML Content', 'js_composer' ),
                			'param_name'  => 'yog_content',
                			'value'       => base64_encode( '<p>I am raw html block.<br/>Click edit button to change this html</p>' ),
                			'description' => esc_html__( 'Enter your HTML content.', 'js_composer' ),
                		),
                        
                        array(
                             'heading'    => esc_html__( 'Bucket','yog'),
                             'type'       => 'dropdown',
                             'value'      => yog_get_bucket_list(),
                             'param_name' => 'yog_bucket',
                        )                                
                    )
                )
            )
        )
    );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Icon Teaser Module / Element Map				     |						
--------------------------------------------------------------------------------*/
    vc_map( array(
        'name'        => esc_html__('Flipmart Icon Teaser', 'yog'),
        'base'        => 'yog_icon_teasers',
        'class'       => 'icon_teasers',
        'icon'	      => 'icon-wpb-application-icon-large',
        'weight'      => 101,
        'category'    => esc_html__('Flipmart Elements', 'yog'),
        'description' => esc_html__( 'Insert Icon Teaser.', 'yog' ),
        'params'      => array(	
        
                array(
        			'type'        => 'dropdown',
        			'heading'     => esc_html__( 'Style', 'yog' ),
                    'admin_label' => true,
        			'param_name'  => 'teaser_style',
        			'value' => array(
                        esc_html__( 'Horizontal', 'yog' )  => 'icon-box',
                        esc_html__( 'Vertical', 'yog' )    => 'icon-box-vertical text-center',
                        esc_html__( 'Linked Icon', 'yog' ) => 'colored',
                    ),
        			'description' =>  esc_html__( 'Select icon style', 'yog' ),
  	       	     ),
                 
                 array(
        			'type'        => 'dropdown',
        			'heading'     => esc_html__( 'Type', 'yog' ),
        			'param_name'  => 'teaser_type',
        			'value' => array(
                        esc_html__( 'Small Icon', 'yog' )        => 'small',
                        esc_html__( 'Large Icon', 'yog' )        => 'icon-box-icon-big',
                        esc_html__( 'Extra Large Icon', 'yog' )  => 'icon-box-vertical-icon-bigger',
                    ),
        			'description' => esc_html__( 'Select Icon Type', 'yog' ),
                    'dependency'  => array( 'element' => 'teaser_style','value' => array( 'icon-box', 'icon-box-vertical text-center' ) ),
  	       	     ),
                 
                 array(
        			'type'        => 'dropdown',
        			'heading'     => esc_html__( 'Type', 'yog' ),
        			'param_name'  => 'colored_teaser_style',
        			'value' => array(
                        esc_html__( 'Simple', 'yog' )  => 'simple',
                        esc_html__( 'Hovered', 'yog' ) => 'icon-box-hover',
                    ),
        			'description' => esc_html__( 'Select Icon Type', 'yog' ),
                    'dependency'  => array( 'element' => 'teaser_style','value' => array( 'colored' ) ),
  	       	     ),
                 
                 array(
        			'type'        => 'dropdown',
        			'heading'     => esc_html__( 'Type', 'yog' ),
        			'param_name'  => 'colored_teaser_type',
        			'value'       => array(
                        esc_html__( 'Normal', 'yog' )      => 'normal',
                        esc_html__( 'Small Icon', 'yog' )  => 'small',
                        esc_html__( 'Large Icon', 'yog' )  => 'icon-box-icon-big',
                    ),
        			'description' => esc_html__( 'Select Icon Type', 'yog' ),
                    'dependency'  => array( 'element' => 'teaser_style','value' => array( 'colored' ) ),
  	       	     ),
                 
                 array(
        			'type'        => 'dropdown',
        			'heading'     => esc_html__( 'Skin', 'yog' ),
        			'param_name'  => 'teaser_skin',
        			'value'       => array(
                        esc_html__( 'Simple', 'yog' )    => 'simple',
                        esc_html__( 'Gray', 'yog' )      => 'gray',
                        esc_html__( 'Colored', 'yog' )   => 'icon-box-icon-base',
                        esc_html__( 'Dark', 'yog' )      => 'icon-box-icon-dark',
                    ),
        			'description' => esc_html__( 'Select Icon Skin', 'yog' ),
  	       	     ),
                 
                 array(
        			'type'        => 'dropdown',
        			'heading'     => esc_html__( 'Background', 'yog' ),
        			'param_name'  => 'teaser_bg',
        			'value'       => array(
                        esc_html__( 'Transparnt', 'yog' )  => 'transparnt',
                        esc_html__( 'Circle', 'yog' )      => 'icon-box-icon-circle',
                    ),
        			'description' => esc_html__( 'Select Icon Background Type', 'yog' ),
                    'dependency'  => array( 'element' => 'teaser_style','value' => array( 'icon-box', 'icon-box-vertical text-center' ) ),
  	       	     ),
                 
                 array(
        			'type'        => 'dropdown',
        			'heading'     => esc_html__( 'Shape', 'yog' ),
        			'param_name'  => 'teaser_shape',
        			'value'       => array(
                        esc_html__( 'None', 'yog' )     => 'none',
                        esc_html__( 'Circle', 'yog' )   => 'circle',
                        esc_html__( 'Square', 'yog' )   => 'square',
                    ),
        			'description' => esc_html__( 'Select Shape', 'yog' ),
                    'dependency'  => array( 'element' => 'teaser_style','value' => array( 'colored' ) )
  	       	     ),
                 
                 array(
        			'type'        => 'dropdown',
        			'heading'     => esc_html__( 'Column', 'yog' ),
        			'param_name'  => 'teaser_column',
        			'value'       => array(
                        esc_html__( 'One', 'yog' )   => '1',
                        esc_html__( 'Two', 'yog' )   => '2',
                        esc_html__( 'Three', 'yog' ) => '3',
                        esc_html__( 'Four', 'yog' )  => '4',
                    ),
        			'description' => esc_html__( 'Select Column', 'yog' ),
  	       	     ),
                 
                 array(
                    'type'        => 'param_group',
                    'value'       => '',
                    'param_name'  => 'yog_icon_teaser',
                    'dependency'  => array( 'element' => 'teaser_style','value' => array( 'icon-box', 'icon-box-vertical text-center' ) ),
                    'params'      => array(
                    
                        array(
                            'type'        => 'iconpicker',
                            'heading'     => esc_html__( 'Icon', 'js_composer' ),
                            'param_name'  => 'yog_teaser_icon',
                            'settings'    => array(
                                'emptyIcon'    => false, // default true, display an "EMPTY" icon?
                                'type'         => 'fontawesome',
                                'iconsPerPage' => 200, // default 100, how many icons per/page to display
                            ),
                            'description' => esc_html__( 'Select icon from library.', 'js_composer' ),
                        ),
                        
                        array(
                            'heading'     => esc_html__( 'Heading','yog'),
                            'type'        => 'textfield',
                            'value'       => '',
                            'admin_label' => true,
                            'param_name'  => 'yog_teaser_heading',
                        ),
                        
                        array(
                            'heading'     => esc_html__( 'Content','yog'),
                            'type'        => 'textarea',
                            'value'       => '',
                            'param_name'  => 'yog_teaser_content',
                        ),
                        
                        array(
                        	'type'        => 'dropdown',
                        	'heading'     => esc_html__( 'Animation', 'yog' ),
                        	'param_name'  => 'yog_animation',
                        	'value'       => yog_get_animations(),
                        	'save_always' => true,
                        	'description' => esc_html__( 'Select Columns', 'yog' ),
                         ),
                        
                        array(
                            'heading'     => esc_html__( 'Delay','yog'),
                            'type'        => 'textfield',
                            'value'       => '',
                            'param_name'  => 'yog_delay',
                        )
                    )
                ),
                
                array(
                    'type'       => 'param_group',
                    'value'      => '',
                    'param_name' => 'yog_colored_icon',
                    'dependency' => array( 'element' => 'teaser_style','value' => array( 'colored' ) ),
                    'params'     => array(
                    
                        array(
                            'type'        => 'iconpicker',
                            'heading'     => esc_html__( 'Icon', 'js_composer' ),
                            'param_name'  => 'yog_teaser_icon',
                            'settings'    => array(
                                'emptyIcon'    => false, // default true, display an "EMPTY" icon?
                                'type'         => 'fontawesome',
                                'iconsPerPage' => 200, // default 100, how many icons per/page to display
                            ),
                            'description' => esc_html__( 'Select icon from library.', 'js_composer' ),
                        ),
                        
                        array(
                    		'type'        => 'colorpicker',
                    		'heading'     => esc_html__( 'Image Icon Color', 'js_composer' ),
                    		'param_name'  => 'yog_icon_color',
                    		'description' => esc_html__( 'Select image icon color.', 'js_composer' ),
                    	),
                        
                        array(
                            'heading'     => esc_html__( 'Heading With Link','yog'),
                            'type'        => 'vc_link',
                            'value'       => '',
                            'param_name'  => 'yog_heading_link',
                        ),
                        
                        array(
                            'heading'     => esc_html__( 'Content','yog'),
                            'type'        => 'textarea',
                            'value'       => '',
                            'param_name'  => 'yog_teaser_content',
                        ),
                        
                        array(
                            'heading'     => esc_html__( 'Link','yog'),
                            'type'        => 'vc_link',
                            'value'       => '',
                            'param_name'  => 'yog_link',
                        ),
                        
                        array(
                        	'type'        => 'dropdown',
                        	'heading'     => esc_html__( 'Animation', 'yog' ),
                        	'param_name'  => 'yog_animation',
                        	'value'       => yog_get_animations(),
                        	'save_always' => true,
                        	'description' => esc_html__( 'Select Columns', 'yog' ),
                         ),
                        
                        array(
                            'heading'     => esc_html__( 'Delay','yog'),
                            'type'        => 'textfield',
                            'value'       => '',
                            'param_name'  => 'yog_delay',
                        )
                    )
                )
            )
        )
    );
        
/*-------------------------------------------------------------------------------
|				Flipmart:  Buttons Module / Element Map				                 |						
--------------------------------------------------------------------------------*/
    function yog_buttons($atts, $content = null ){
        $yog_output  = '';
    
        //extract arguments	
        extract(shortcode_atts(array(
            'yog_btn_size'    => '',
            'yog_btn_color'   => '',
            'yog_link'        => ''
           
        ), $atts));
        
        ob_start();
        
        
        //link
        $yog_link = vc_build_link( $yog_link );
            
        if( isset( $yog_link ) && !empty( $yog_link ) ){
            
            //Enque Css File
            wp_enqueue_style( 'yog-buttons' );
                    
            //Button Class Array
            $yog_btn_class = array('btn');    
             
            //Button Size Class
            if( isset( $yog_btn_size ) && !empty( $yog_btn_size ) ){
                $yog_btn_class[] = 'btn-'. $yog_btn_size; 
            }
            
            //Button Color Class
            if( isset( $yog_btn_color ) && !empty( $yog_btn_color ) && $yog_btn_color != 'normal' ){
                $yog_btn_class[] = 'btn-'. $yog_btn_color; 
            }
            
            //Print Link.
            if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                $attributes   = array();
                $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                $attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                $attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                $attributes = implode( ' ', $attributes );
                
                //button
                echo '<p><a ' . $attributes . ' class="' . esc_attr( join( ' ', $yog_btn_class ) ) . '">'. esc_html( trim( $yog_link['title'] ) ) .'</a></p>';  
                          
           }
        }
        
        //Return Output Content.
        $yog_output = ob_get_contents();
        ob_end_clean();
        return $yog_output;  
    }
  
    add_shortcode( 'yog_buttons', 'yog_buttons' );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Alert Module / Element Map				             |						
--------------------------------------------------------------------------------*/
    function yog_alerts($atts, $content = null ){
        $yog_output  = '';
    
        //extract arguments	
        extract(shortcode_atts(array(
            'yog_alert_style'      => 'simple',
            'yog_alert_type'       => 'success',
            'alert_heading'        => '',
            'alert_message'        => '',
            'yog_link'             => '',
            'yog_icon'             => '',
            'disable_close_icon'   => false
           
        ), $atts));
        
        ob_start();
        
        //Enque Css File
        wp_enqueue_style( 'yog-alerts' );
            
        if( $yog_alert_style == 'simple' && !empty( $yog_alert_style ) ){
            
           	echo '<div class="alert-'. esc_attr( $yog_alert_type ) .' fade in">';
            
                //Close Icon
                if( empty( $disable_close_icon ) ){
                    ?>
                    <button type="button" class="close" data-dismiss="alert">
    				    <i class="fa fa-times"></i>
    				</button>
                    <?php
                }
                
                //link
                $yog_link = vc_build_link( $yog_link );
                
                //Print Link.
                $yog_link_content = '';
                if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                    $attributes   = array();
                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                    $attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                    $attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                    $yog_link_content = '<a ' . implode( ' ', $attributes ) . '> '. esc_html( trim( $yog_link['title'] ) ) .'</a>';
                    
                }
                
                //Heading
                $alert_heading_content = '';
                if( $alert_heading ){
                    $alert_heading_content = '<strong>'. esc_html( $alert_heading ) .'</strong>';
                }
                
                //Print Alert Content.
                printf( '<p>%s %s %s</p>', $alert_heading_content, $alert_message, $yog_link_content );
                
			echo '</div>';
            
        }else{
            
            echo '<div class="alert-'. esc_attr( $yog_alert_type ) .' alert-with-icon fade in">';
                
                //Icon
                if( isset( $yog_icon ) && !empty( $yog_icon ) ){
                     echo '<i class="alert-icon '. esc_attr( $yog_icon ) .'"></i>';    
                }
                
                //Close Icon
                if( empty( $disable_close_icon ) ){
                    ?>
                    <button type="button" class="close" data-dismiss="alert">
    				    <i class="fa fa-times"></i>
    				</button>
                    <?php
                }
                
                //Heading
                if( $alert_heading ){
                    echo '<h4>'. esc_html( $alert_heading ) .'</h4>';
                }
                
                //Message
                if( $alert_message ){
                    echo '<p class="margin-bottom-15">'. esc_html( $alert_message ) .'</p>';
                }
                
				//link
                $yog_link = vc_build_link( $yog_link );
                
                //Print Link.
                if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                    $attributes   = array();
                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                    $attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                    $attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                    $yog_class = array( 'note' => 'btn', 'success' => 'btn-green', 'info' => 'btn-base', 'danger' => 'btn-red', 'warning' => 'btn-yellow'  ); 
                    echo'<p><a ' . implode( ' ', $attributes ) . ' class="btn '. esc_attr( $yog_class[$yog_alert_type] ) .'">' . esc_html( trim( $yog_link['title'] ) ) . '</a></p>';
               }
               
			echo '</div>';
            
        }
        
        //Return Output Content.
        $yog_output = ob_get_contents();
        ob_end_clean();
        return $yog_output; 
    }
  
    add_shortcode( 'yog_alerts', 'yog_alerts' );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Call Of Action Module / Element Map				                 |						
--------------------------------------------------------------------------------*/
    function yog_call_of_action($atts, $content = null ){
        $yog_output  = '';
    
        //extract arguments	
        extract(shortcode_atts(array(
            'yog_action_effect' => 'simple',
            'yog_heading'       => '',
            'yog_content'       => '',
            'yog_btn1'          => '',
            'yog_btn2'          => '',
            'yog_btn'           => ''
           
        ), $atts));
        
        ob_start();
        
        //Enque Css File
        wp_enqueue_style( 'yog-boxes' );
        
        if( $yog_action_effect == 'bg-grey' ):
            
            
            echo '<div class="section-grey"><div class="box box-slave">';
                
                //Heading
                if( $yog_heading ):
                    echo '<h5 class="heading">'. $yog_heading .'</h5>';
                endif;
                
                //Content
                echo '<p>'. $yog_content .'</p>';
                
            echo '</div></div>';
            
        elseif( $yog_action_effect == 'shadow-link' ):
        
            echo '<div class="section-white"><div class="shadow-effect7"><div class="box border round border-top">';
                
                //Heading
                if( $yog_heading ):
                    echo '<h4 class="heading">'. $yog_heading .'</h4>';
                endif;
                
                //Content
                echo '<p>'. $yog_content .'</p>';
                
                //Button
                $yog_btn = vc_build_link( $yog_btn ); 
                if ( isset( $yog_btn['url'] ) && strlen( $yog_btn['url'] ) > 0  ) {
                    $attributes   = array();
                    $attributes[] = 'href="' . esc_url( trim( $yog_btn['url'] ) ) . '"';
                    $attributes[] = 'title="' . esc_attr( trim( $yog_btn['title'] ) ) . '"';
                    $attributes[] = 'target="' . esc_attr( trim( strlen( $yog_btn['target'] ) > 0 ? $yog_btn['target'] : '_self' ) ) . '"';
                    $attributes = implode( ' ', $attributes );
                    echo '<p><a ' . $attributes . ' class="btn btn-base" style="margin-right: 10px;">'. esc_attr( trim( $yog_btn['title'] ) ) .'</a></p>';
                }
                
            echo '</div></div></div>';
        
        elseif( $yog_action_effect == 'shadow-link-dual' ):
            
            echo '<div class="section-white"><div class="shadow-effect7"><div class="box border round border-top text-center">';
                
                //Heading
                if( $yog_heading ):
                    echo '<h4 class="heading">'. $yog_heading .'</h4>';
                endif;
                
                //Content
                echo '<p>'. $yog_content .'</p>';
                
                //Button One
                $yog_btn1 = vc_build_link( $yog_btn1 ); 
                if ( isset( $yog_btn1['url'] ) && strlen( $yog_btn1['url'] ) > 0  ) {
                    $attributes   = array();
                    $attributes[] = 'href="' . esc_url( trim( $yog_btn1['url'] ) ) . '"';
                    $attributes[] = 'title="' . esc_attr( trim( $yog_btn1['title'] ) ) . '"';
                    $attributes[] = 'target="' . esc_attr( trim( strlen( $yog_btn1['target'] ) > 0 ? $yog_btn1['target'] : '_self' ) ) . '"';
                    $attributes = implode( ' ', $attributes );
                    echo '<a ' . $attributes . ' class="btn btn-base" style="margin-right: 10px;">'. esc_attr( trim( $yog_btn1['title'] ) ) .'</a>';
                }
                
                //Button Two
                $yog_btn2 = vc_build_link( $yog_btn2 ); 
                if ( isset( $yog_btn2['url'] ) && strlen( $yog_btn2['url'] ) > 0  ) {
                    $attributes   = array();
                    $attributes[] = 'href="' . esc_url( trim( $yog_btn2['url'] ) ) . '"';
                    $attributes[] = 'title="' . esc_attr( trim( $yog_btn2['title'] ) ) . '"';
                    $attributes[] = 'target="' . esc_attr( trim( strlen( $yog_btn2['target'] ) > 0 ? $yog_btn2['target'] : '_self' ) ) . '"';
                    $attributes = implode( ' ', $attributes );
                    echo '<a ' . $attributes . ' class="btn btn">'. esc_attr( trim( $yog_btn2['title'] ) ) .'</a>';
                }
                
            echo '</div></div></div>';
        
        elseif( $yog_action_effect == 'grey-shadow' ):
            
            echo '<div class="section-white"><div class="shadow-effect7"><div class="box box-slave border round border-left">';
                
                //Button
                $yog_btn = vc_build_link( $yog_btn ); 
                if ( isset( $yog_btn['url'] ) && strlen( $yog_btn['url'] ) > 0  ) {
                    $attributes   = array();
                    $attributes[] = 'href="' . esc_url( trim( $yog_btn['url'] ) ) . '"';
                    $attributes[] = 'title="' . esc_attr( trim( $yog_btn['title'] ) ) . '"';
                    $attributes[] = 'target="' . esc_attr( trim( strlen( $yog_btn['target'] ) > 0 ? $yog_btn['target'] : '_self' ) ) . '"';
                    $attributes = implode( ' ', $attributes );
                    echo '<p><a ' . $attributes . ' class="btn btn-base btn-big btn-promo pull-right">'. esc_attr( trim( $yog_btn['title'] ) ) .'</a></p>';
                }
                
                //Heading
                if( $yog_heading ):
                    echo '<h4 class="heading">'. $yog_heading .'</h4>';
                endif;
                
                //Content
                echo '<p>'. $yog_content .'</p>';
                
            echo '</div></div></div>';
            
        else:
            
            echo '<div class="section-white"><div class="box border round shadow">';
                
                //Heading
                if( $yog_heading ):
                    echo '<h5 class="heading">'. $yog_heading .'</h5>';
                endif;
                
                //Content
                echo $yog_content;
                
            echo '</div></div>';
            
        endif;
        
        //Return Output Content.
        $yog_output = ob_get_contents();
        ob_end_clean();
        return $yog_output;  
    }
  
    add_shortcode( 'yog_call_of_action', 'yog_call_of_action' );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Pricing Table Module / Element Map				         |						
--------------------------------------------------------------------------------*/
    function yog_pricing_table($atts, $content = null ){
        $yog_output  = '';
    
        //extract arguments	
        extract(shortcode_atts(array(
            'yog_columns'     => '4',
            'yog_table'       => '',
           
        ), $atts));
        
        ob_start();
        
        //Status Table Items
        $yog_pricing_table = (array) vc_param_group_parse_atts( $yog_table );
        
        if( isset( $yog_pricing_table ) && !empty( $yog_pricing_table ) ):
            
            //Enque Css File
            wp_enqueue_style( 'yog-pricing-table' );
            wp_enqueue_style( 'yog-buttons' );
        
            //Wrapper Start.
            echo '<div class="row section-white">';
            
            foreach( $yog_pricing_table as $yog_table ){
                
                //Table Color Class
                $yog_color = ( isset( $yog_table['yog_table_color'] ) && !empty( $yog_table['yog_table_color'] ) )? 'pricing-head-'. $yog_table['yog_table_color'] : '';
                
                ?>
    			<div class="col-xs-6 <?php echo esc_attr( yog_get_column( $yog_columns ) ); ?>">
    				<table class="pricing">
    					<thead>
        					<tr>
                                <td class="text-center <?php echo esc_attr( $yog_color ); ?>">
                                    <?php 
                                        //Heading
                                        if( isset( $yog_table['yog_table_heading'] ) && !empty( $yog_table['yog_table_heading'] ) ){
                                           echo '<span class="pricing-title">'. esc_html( $yog_table['yog_table_heading'] ) .'</span>'; 
                                        }
                                    ?>
        							<div class="pricing-price">
                                        <?php
                                        if( $yog_table['table_type'] == 'free' && isset( $yog_table['yog_table_amount'] ) && !empty( $yog_table['yog_table_amount'] ) ){
                                            echo '<span class="pricing-amount">'. esc_html( $yog_table['yog_table_amount'] ) .'</span>';
                                        }else{
                                            
                                            //Currency
                                            if( isset( $yog_table['yog_currency'] ) && !empty( $yog_table['yog_currency'] ) ){
                                               echo '<span class="pricing-currency">'. esc_html( $yog_table['yog_currency'] ) .'</span>'; 
                                            }
                                            
                                            //Price
                                            if( isset( $yog_table['yog_table_amount'] ) && !empty( $yog_table['yog_table_amount'] ) ){
                                               echo '<span class="pricing-amount">'. esc_html( $yog_table['yog_table_amount'] ) .'</span>'; 
                                            }
                                            
                                            //Duration
                                            if( isset( $yog_table['yog_table_duration'] ) && !empty( $yog_table['yog_table_duration'] ) ){
                                               echo '<span class="pricing-period">/'. esc_html( $yog_table['yog_table_duration'] ) .'</span>'; 
                                            }            								
                                        }
                                        ?>
        							</div>
                                    <?php  
                                        //Description
                                        if( isset( $yog_table['table_short_desc'] ) && !empty( $yog_table['table_short_desc'] ) ){
                                           echo '<p class="italic">'. esc_html( $yog_table['table_short_desc'] ) .'</p>'; 
                                        } 
                                    ?>
        						</td>
        					</tr>
    					</thead>
                        <?php 
                            //Features List
                            $yog_table_features = (array) vc_param_group_parse_atts( $yog_table['table_features_list'] ); 
                            if( isset( $yog_table_features ) && !empty( $yog_table_features ) ){
                                
                                //Wrapper Start
                                echo '<tbody>';
                                
                                    foreach( $yog_table_features as $table_features_list ){
        						
                                        if( $table_features_list['table_list_type'] == 'strong' && !empty( $table_features_list['table_list_heading'] ) ){
                                            echo '<tr><td><strong>'. yog_highlight_it( $table_features_list['table_list_heading'] ) .'</strong></td></tr>';
                                        }elseif( $table_features_list['table_list_type'] == 'check' && !empty( $table_features_list['table_list_heading'] ) ){
                						  echo '<tr><td><i class="icon-check text-green icon-left"></i>'. yog_highlight_it( $table_features_list['table_list_heading'] ) .'</td></tr>';
                                        }elseif( $table_features_list['table_list_type'] == 'description' && !empty( $table_features_list['table_list_heading'] ) ){
                                            ?>
                                            <tr>                                            
                                                <td class="pricing-description">
                        							<p class="smaller-text">
                        								<strong>*</strong><?php echo yog_highlight_it( $table_features_list['table_list_heading'] ); ?>
                        							</p>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        
                                    }
                                    
                                //Wrapper End
                                echo '</tbody>';
                            }
                            
                            //Button
                            $yog_link = vc_build_link( $yog_table['yog_link'] );
                            if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                
                                //Table Color Class
                                $yog_btn_color = ( $yog_table['yog_table_color'] == 'normal' || $yog_table['yog_table_color'] == 'dark' )? 'base' : $yog_table['yog_table_color'];
                
                                //Wrapper Start
                                echo '<tfoot><tr>';
                                
                                    $attributes   = array();
                                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                    $attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                    $attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                    $attributes = implode( ' ', $attributes );
                                    
                                    //text
                                    echo '<td><p><a ' . $attributes . ' class="btn btn-'. esc_attr( $yog_btn_color ) .' btn-wide">'. esc_html( $yog_link['title'] ) .'</a></p></td>';
                                
                                //Wrapper End
                                echo '</tr></tfoot>';
                            }
                            
                        ?>
    				</table>
    			</div>
            <?php    
            }
            
            //Wrapper End.
            echo '</div>';
            
        endif;
        
        //Return Output Content.
        $yog_output = ob_get_contents();
        ob_end_clean();
        return $yog_output;
         
    }
  
    add_shortcode( 'yog_pricing_table', 'yog_pricing_table' );
    
/*--------------------------------------------------------------------------------
|				yog: Tab / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_tabs($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_size'         => 'small',
            'yog_type'         => 'horizontal',
            'yog_variant'      => 'variant-1',
            'yog_variant_vert' => 'variant-1',
            'yog_tab'          => ''
		), $atts));

        ob_start(); 
        
        $yog_tabs = (array) vc_param_group_parse_atts( $yog_tab );
        
        if( isset( $yog_tabs ) && !empty( $yog_tabs ) ){
            
            //Enque Css File
            wp_enqueue_style( 'yog-tabs' );
            wp_enqueue_style( 'yog-buttons' );
            
            //Variable Declearation
            $yog_tab_heading = $yog_tab_content = $yog_content = ''; global $yog_counter;
            
            //Tab Content Loop
            foreach( $yog_tabs as $yog_tab ){
                
                
                //Counter Increment.
                $yog_counter++;
                
                //Class Active.
                $yog_active = ( isset( $yog_tab['yog_active'] ) && !empty( $yog_tab['yog_active'] ) )? 'class="active"' : '';
                $yog_active_cls = ( isset( $yog_tab['yog_active'] ) && !empty( $yog_tab['yog_active'] ) )? ' active' : '';
                
                //Content.
                if( isset( $yog_tab['yog_content'] ) && !empty( $yog_tab['yog_content'] ) ){
                    $yog_content = rawurldecode( base64_decode( strip_tags( $yog_tab['yog_content'] ) ) );
                }elseif( isset( $yog_tab['yog_bucket'] ) && !empty( $yog_tab['yog_bucket'] ) ){
                    $yog_tab['yog_bucket'];
                    $yog_args = array(
                        'post_type' => 'bucket',
                        'p' => $yog_tab['yog_bucket']
                    );
                    $yog_query = new WP_Query( $yog_args );
                    if( $yog_query->have_posts() ){
                        
                        ob_start();
                        while( $yog_query->have_posts() ) {
        
                            $yog_query->the_post();
                            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'engines' ) );
                            
                        }
                        
                        $yog_content = ob_get_contents();
                        ob_end_clean();
                        
                        //Reset Query
                        wp_reset_postdata();
                        
                    }
                    
                }
                
                //Icons
                $yog_icon = '';
                if( !isset( $yog_tab['yog_icon_disable'] ) && empty( $yog_tab['yog_icon_disable'] ) ){
                    if( isset( $yog_tab['yog_icon'] ) && !empty( $yog_tab['yog_icon'] ) ){
                        $yog_icon = '<i class="'. esc_attr( $yog_tab['yog_icon'] ) .'"></i>';
                    }
                }
                
                //Content.
                $yog_tab_heading .= '<li '. $yog_active .'><a data-toggle="tab" href="#tab_'. esc_attr( $yog_counter ) .'">'. $yog_icon . esc_html( $yog_tab['yog_tab_heading'] ) .'</a></li>';
                $yog_tab_content .= '<div class="tab-pane '. esc_attr( $yog_active_cls ) .'" id="tab_'. esc_attr( $yog_counter ) .'">'. $yog_content .'</div>';
                
            }
            
            //Class Variation
            $yog_tab_classes = array(
                'variant-1' => '',
                'variant-2' => 'tabs-navigation-justified',
                'variant-3' => 'tabs-navigation-transparent',
                'variant-4' => 'tabs-navigation-justified tabs-navigation-transparent',
            );
            $yog_content_classes = array(
                'variant-1' => 'tabs-content-shadow',
                'variant-2' => 'tabs-content-shadow',
                'variant-3' => 'tabs-content-transparent',
                'variant-4' => 'tabs-content-transparent',
            );
            
            //Class
            $yog_tab_class = $yog_tab_classes[$yog_variant];
            $yog_content_class = $yog_content_classes[$yog_variant];
            
            //Wrapper Div Start
            if( $yog_type == 'vertical' ){
                echo '<div class="tabs-vertical responsive-sm">';
                
                $yog_tab_class = $yog_tab_classes[$yog_variant_vert];
                $yog_content_class = $yog_content_classes[$yog_variant_vert];
            }
            
            ?>
            <div class="section-white">
                <ul class="tabs-navigation <?php echo esc_attr( $yog_tab_class ).' '.$yog_size;?>">
                    <?php echo $yog_tab_heading; ?>
                </ul>
                <div class="tabs-content <?php echo esc_attr( $yog_content_class ); ?>">
                    <?php echo $yog_tab_content; ?>
                </div>
            </div>
            <?php
            
            //Wrapper Div End
            if( $yog_type == 'vertical' ){
                echo '</div>';
            }
        }
        
         //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_tabs', 'yog_tabs' );
  
/*--------------------------------------------------------------------------------
|				yog:  Icon Teaser Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/
    function yog_icon_teasers($atts, $content = null ){
        $yog_output  = '';
    
        //extract arguments	
        extract(shortcode_atts(array(
            'teaser_style'         => 'icon-box',
            'teaser_type'          => 'small',
            'teaser_skin'          => 'simple',
            'teaser_bg'            => 'transparnt',
            'teaser_column'        => '3',
            'teaser_shape'         => 'none',
            'colored_teaser_style' => 'simple',
            'colored_teaser_type'  => 'normal',
            'yog_icon_teaser'      => '',
            'yog_colored_icon'     => '',
            
        ), $atts));
        
        ob_start();
        
        //Icon Teaser Items
        $yog_icon_teasers = (array) vc_param_group_parse_atts( $yog_icon_teaser ); 
        $yog_colored_icons = (array) vc_param_group_parse_atts( $yog_colored_icon ); 
        
        //Enque Css File
        wp_enqueue_style( 'yog-icon-boxes' );
            
        //Print Version Html Content
        if( isset( $yog_icon_teasers ) && !empty( $yog_icon_teasers ) ):
           ?>
           <div class="row">
              <?php 
                 foreach( $yog_icon_teasers as $yog_icon_teaser ){
                    //Class
                    $teaser_style_class  = $teaser_style;
                    if( $teaser_type == 'icon-box-vertical-icon-bigger' ){
                        $teaser_style_class = 'icon-box-vertical icon-box-vertical-icon-bigger text-center';
                    }else{
                       $teaser_style_class .= ( $teaser_type != 'small' && $teaser_style != 'icon-box' )?  ' icon-box-vertical-icon-big' : ' '. $teaser_type; 
                    }
                    
                    //Animation
                    $yog_animation = ( isset( $yog_icon_teaser['yog_animation'] ) && !empty( $yog_icon_teaser['yog_animation'] ) )? $yog_icon_teaser['yog_animation'] : ''; 
                    $yog_dealy     = ( isset( $yog_icon_teaser['yog_delay'] ) && !empty( $yog_icon_teaser['yog_delay'] ) )? $yog_icon_teaser['yog_delay'] : ''; 
                    
                    ?>
                    <div class="col-xs-6 <?php echo esc_attr( yog_get_column( $teaser_column ) ); ?>">
        				<div class="icon-box-hover <?php echo esc_attr( $teaser_style_class ); ?>" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-dealy' => $yog_dealy ) ); ?>>
        				    
                            <?php 
                                //Extra Classes
                                $yog_classes = array();
                                
                                //Skin Class
                                if( !empty( $teaser_skin ) ){
                                    $yog_classes[] = $teaser_skin;
                                }
                                
                                //Background Class
                                if( !empty( $teaser_bg ) ){
                                    $yog_classes[] = $teaser_bg;
                                }
                                
                                //Icon
                                if( isset( $yog_icon_teaser['yog_teaser_icon'] ) && !empty( $yog_icon_teaser['yog_teaser_icon'] ) ){
                                    echo '<div class="icon-box-icon '. join( ' ', $yog_classes ) .'"><i class="'. esc_attr( $yog_icon_teaser['yog_teaser_icon'] ) .'"></i></div>';
                                }
                                
                                //Class
                                $arua_class = ( $teaser_bg == 'transparnt' )? 'icon-box-content' : 'icon-box-content-2';
                            
                                if( $teaser_style == 'icon-box' ):
                            ?>
        					
        					<div class="<?php echo esc_attr( $arua_class ); ?>">
                                <?php 
                                    //Heading
                                    if( isset( $yog_icon_teaser['yog_teaser_heading'] ) && !empty( $yog_icon_teaser['yog_teaser_heading'] )){
                                        echo '<h4>'. esc_attr( $yog_icon_teaser['yog_teaser_heading'] ) .'</h4>';
                                    }
                                    
                                    //Content
                                    if( isset( $yog_icon_teaser['yog_teaser_content'] ) && !empty( $yog_icon_teaser['yog_teaser_content'] )){
                                        echo '<p>'. esc_attr( $yog_icon_teaser['yog_teaser_content'] ) .'</p>';
                                    }
                                    
                                    //Link
                                    if( isset( $yog_icon_teaser['yog_link'] ) && !empty( $yog_icon_teaser['yog_link'] ) ){
                                        
                                        $yog_links = vc_build_link( $yog_icon_teaser['yog_link'] );
                                        if ( isset( $yog_links['url'] ) && strlen( $yog_links['url'] ) > 0  ) {
                                            $attributes   = array();
                                            $attributes[] = 'href="' . esc_url( trim( $yog_links['url'] ) ) . '"';
                                            $attributes[] = 'title="' . esc_attr( trim( $yog_links['title'] ) ) . '"';
                                            $attributes[] = 'target="' . esc_attr( trim( strlen( $yog_links['target'] ) > 0 ? $yog_links['target'] : '_self' ) ) . '"';
                                            echo '<p><a '. implode( ' ', $attributes ) .'>' . esc_html( trim( $yog_links['title'] ) ) . ' <i class="icon-right-open-mini icon-right"></i></a></p>';
                                        }
                                    }
                                    
                                ?>
        					</div>
                            <?php 
                                else:  
                                    //Heading
                                    if( isset( $yog_icon_teaser['yog_teaser_heading'] ) && !empty( $yog_icon_teaser['yog_teaser_heading'] )){
                                        echo '<h4>'. esc_attr( $yog_icon_teaser['yog_teaser_heading'] ) .'</h4>';
                                    }
                                    
                                    //Content
                                    if( isset( $yog_icon_teaser['yog_teaser_content'] ) && !empty( $yog_icon_teaser['yog_teaser_content'] )){
                                        echo '<p>'. esc_attr( $yog_icon_teaser['yog_teaser_content'] ) .'</p>';
                                    }
                                endif; 
                            ?>
        				</div>
        			</div>
                    <?php
                 }
              ?>
           </div>
           <?php
        endif;
        
        //Print Version Html Content
        if( isset( $yog_colored_icons ) && !empty( $yog_colored_icons ) ):
        
            ?>
            <div class="row padding-bottom-20">
                <?php 
                    foreach( $yog_colored_icons as $yog_colored_icon ){
                        
                        //Extra Classes
                        $colored_classes = array();
                        
                        //Skin Class
                        if( !empty( $colored_teaser_style ) ){
                            $colored_classes[] = $colored_teaser_style;
                        }
                        
                        //Background Class
                        if( !empty( $colored_teaser_type ) ){
                            $colored_classes[] = $colored_teaser_type;
                        }
                        
                        //Animation
                        $yog_animation = ( isset( $yog_colored_icon['yog_animation'] ) && !empty( $yog_colored_icon['yog_animation'] ) )? $yog_colored_icon['yog_animation'] : ''; 
                        $yog_dealy     = ( isset( $yog_colored_icon['yog_delay'] ) && !empty( $yog_colored_icon['yog_delay'] ) )? $yog_colored_icon['yog_delay'] : ''; 
                        
                        //Color Class
                        $yog_color     = ( isset( $yog_colored_icon['yog_icon_color'] ) && !empty( $yog_colored_icon['yog_icon_color'] ) )? 'style="background: '. $yog_colored_icon['yog_icon_color'] .';"' : '';
                    
                    ?>
                    <div class="col-xs-6 <?php echo esc_attr( yog_get_column( $teaser_column ) ); ?> padding-bottom-20" <?php yog_helper()->attr( false, array( 'animation' => $yog_animation, 'animation-dealy' => $yog_dealy ) ); ?>>
        			     <div class="icon-box <?php echo esc_attr( join( ' ', $colored_classes ) ); ?>">	    
                            
                            <?php 
                                //Icon
                                if( isset( $yog_colored_icon['yog_teaser_icon'] ) && !empty( $yog_colored_icon['yog_teaser_icon'] ) ){
                                    echo '<div class="icon-box-icon '.  $teaser_skin .' icon-box-icon-'. $teaser_shape .'" '. $yog_color .'><i class="'. esc_attr( $yog_colored_icon['yog_teaser_icon'] ) .'"></i></div>';
                                }
                            ?>
                            
                            <div class="icon-box-content-2">
                                <?php 
                                    //Heading Link
                                    $yog_heading_link = vc_build_link( $yog_colored_icon['yog_heading_link'] );
                                    if ( isset( $yog_heading_link['url'] ) && strlen( $yog_heading_link['url'] ) > 0  ) {
                                        $attributes   = array();
                                        $attributes[] = 'href="' . esc_url( trim( $yog_heading_link['url'] ) ) . '"';
                                        $attributes[] = 'title="' . esc_attr( trim( $yog_heading_link['title'] ) ) . '"';
                                        $attributes[] = 'target="' . esc_attr( trim( strlen( $yog_heading_link['target'] ) > 0 ? $yog_heading_link['target'] : '_self' ) ) . '"';
                                        echo '<h4><a '. implode( ' ', $attributes ) .' class="link-dark">' . esc_html( trim( $yog_heading_link['title'] ) ) . '</a></h4>';
                                    }
                                    
                                    //Colored Icon Content
                                    if( isset( $yog_colored_icon['yog_teaser_content'] ) && !empty( $yog_colored_icon['yog_teaser_content'] ) ){
                                        echo '<p class="margin-bottom-10">'. esc_html( $yog_colored_icon['yog_teaser_content'] ) .'</p>';
                                    }
                                    
                                    //Link
                                    if( isset( $yog_colored_icon['yog_link'] ) && !empty( $yog_colored_icon['yog_link'] ) ){
                                        $yog_links = vc_build_link( $yog_colored_icon['yog_link'] );
                                        if ( isset( $yog_links['url'] ) && strlen( $yog_links['url'] ) > 0  ) {
                                            $attributes   = array();
                                            $attributes[] = 'href="' . esc_url( trim( $yog_links['url'] ) ) . '"';
                                            $attributes[] = 'title="' . esc_attr( trim( $yog_links['title'] ) ) . '"';
                                            $attributes[] = 'target="' . esc_attr( trim( strlen( $yog_links['target'] ) > 0 ? $yog_links['target'] : '_self' ) ) . '"';
                                            echo '<p><a '. implode( ' ', $attributes ) .'>' . esc_html( trim( $yog_links['title'] ) ) . ' <i class="icon-right-open-mini icon-right"></i></a></p>';
                                        }
                                    }
                                    
                                ?>
                            </div>
                            
                         </div>  
        			</div>
                    <?php
                    }
                ?>
            </div>
            <?php 
        
        endif;
        
        //Return Output Content.
        $yog_output = ob_get_contents();
        ob_end_clean();
        return $yog_output;
         
    }
  
    add_shortcode( 'yog_icon_teasers', 'yog_icon_teasers' );