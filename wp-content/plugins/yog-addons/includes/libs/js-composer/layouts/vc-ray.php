<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Ray
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
|				Flipmart: Ray Blog Module / Element Map				    |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Ray Blog Posts', 'yog'),
      'base'        => 'yog_ray_blog_posts',
      'class'       => 'icon_yog_ray_blog_posts',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Ray', 'yog'),
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
|				Flipmart: Ray Counter / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Ray Counter', 'yog'),
      'base'        => 'yog_ray_counter',
      'class'       => 'icon_yog_ray_counter',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Ray', 'yog'),
      'description' => esc_html__( 'Insert Counter', 'yog' ),
      'params'      => array(
    
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_counter',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'admin_label' => true,
                        'param_name'  => 'yog_heading'
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Counter','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_counter'
                    ),
                    
                    array(
            			'type'        => 'iconpicker',
            			'heading'     => esc_html__( 'Icon', 'yog' ),
            			'param_name'  => 'yog_icon',
            			'value'       => 'fa fa-info-circle',
                        'settings'    => array(
            				'emptyIcon'    => false, // default true, display an 'EMPTY' icon?
            				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
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
|				Flipmart: Ray Download / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Ray Download', 'yog'),
      'base'        => 'yog_ray_download',
      'class'       => 'icon_yog_ray_download',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Ray', 'yog'),
      'description' => esc_html__( 'Insert Download', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading'
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
|				Flipmart: Ray Intro / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Ray Intro', 'yog'),
      'base'        => 'yog_ray_intro',
      'class'       => 'icon_yog_ray_intro',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Ray', 'yog'),
      'description' => esc_html__( 'Insert Intro', 'yog' ),
      'params'      => array(
    
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading'
            ),
            
            
            array(
                'heading'    => esc_html__( 'Button','yog'),
                'type'       => 'vc_link',
                'value'      => '',
                'param_name' => 'yog_button',
            ),
            
            array(
                'heading'     => esc_html__( 'Logo Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_logo_img',
            ),
            
            array(
                'heading'     => esc_html__( 'Right Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_right_img',
            ),
            
            array(
                'heading'     => esc_html__('Right Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_right_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Right Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_right_delay',
            ),
            
            array(
                'heading'     => esc_html__( 'Background Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_bg_img',
            ),
            
            array(
                'heading'     => esc_html__('Background Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Background Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
         )
       )
    );

/*-------------------------------------------------------------------------------
|				Flipmart: Ray Innovations / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Ray Innovations', 'yog'),
      'base'        => 'yog_ray_innovations',
      'class'       => 'icon_yog_ray_innovations',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Ray', 'yog'),
      'description' => esc_html__( 'Insert Innovations', 'yog' ),
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
                'param_name'  => 'yog_description'
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
|				Flipmart: Ray Features / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Ray Features', 'yog'),
      'base'        => 'yog_ray_features',
      'class'       => 'icon_yog_ray_features',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Ray', 'yog'),
      'description' => esc_html__( 'Insert Features', 'yog' ),
      'params'      => array(
    
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading'
            ),
            
            
            array(
                'heading'    => esc_html__( 'Sub Heading','yog'),
                'type'       => 'textfield',
                'value'      => '',
                'param_name' => 'yog_sub_heading',
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_left_features',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_heading'
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Description','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_description'
                    ),
                    
                    array(
            			'type'        => 'iconpicker',
            			'heading'     => esc_html__( 'Icon', 'yog' ),
            			'param_name'  => 'yog_icon',
            			'value'       => 'fa fa-info-circle',
                        'settings'    => array(
            				'emptyIcon'    => false, // default true, display an 'EMPTY' icon?
            				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
            			),
            			'description' => esc_html__( 'Select icon from library.', 'yog' ),
            		)
                    
                )
            ),
            
            array(
                'heading'     => esc_html__('Left Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_left_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Left Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_left_delay',
            ),
            
            array(
                'heading'     => esc_html__( 'Middle Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_middle_img',
            ),
            
            array(
                'heading'     => esc_html__('Middle Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_middle_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Middle Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_middle_delay',
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_right_features',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_heading'
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Description','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_description'
                    ),
                    
                    array(
            			'type'        => 'iconpicker',
            			'heading'     => esc_html__( 'Icon', 'yog' ),
            			'param_name'  => 'yog_icon',
            			'value'       => 'fa fa-info-circle',
                        'settings'    => array(
            				'emptyIcon'    => false, // default true, display an 'EMPTY' icon?
            				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
            			),
            			'description' => esc_html__( 'Select icon from library.', 'yog' ),
            		)
                )
            ),
            
            array(
                'heading'     => esc_html__('Right Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_right_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Right Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_right_delay',
            )
         )
       )
    );

/*-------------------------------------------------------------------------------
|				Flipmart: Ray Gallery / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Ray Gallery', 'yog'),
      'base'        => 'yog_ray_gallery',
      'class'       => 'icon_yog_ray_gallery',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Ray', 'yog'),
      'description' => esc_html__( 'Insert Gallery', 'yog' ),
      'params'      => array(
    
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading'
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_gallery',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_img',
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
|				Flipmart: Ray News Letter / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Ray News Letter', 'yog'),
      'base'        => 'yog_ray_newsletter',
      'class'       => 'icon_yog_ray_newsletter',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Ray', 'yog'),
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
                'heading'     => esc_html__( 'Description','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_description'
            ),
                    
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_socials',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Social Link','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_link'
                    ),
                    
                    array(
            			'type'        => 'iconpicker',
            			'heading'     => esc_html__( 'Icon', 'yog' ),
            			'param_name'  => 'yog_icon',
            			'value'       => 'fa fa-info-circle',
                        'settings'    => array(
            				'emptyIcon'    => false, // default true, display an 'EMPTY' icon?
            				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
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
|				Flipmart: Ray Pricing / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Ray Pricing', 'yog'),
      'base'        => 'yog_ray_pricing',
      'class'       => 'icon_yog_ray_pricing',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Ray', 'yog'),
      'description' => esc_html__( 'Insert Pricing Table', 'yog' ),
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
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_description'
            ),
                    
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_pricing',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__('Style', 'yog'),
            			'type'        => 'dropdown',
            			'param_name'  => 'yog_style',
            			'value' => array(
                            esc_html__('Default Style', 'yog')   => 'v1',
            				esc_html__('Silver Style', 'yog')    => 'silver',
                            esc_html__('Gold Style', 'yog')      => 'gold',
                            esc_html__('Platinum Style', 'yog')  => 'platinum'
            			),
            			'description' => esc_html__('Select Pricing Style', 'yog'),
            	    ),
                    
                    array(
                        'heading'     => esc_html__( 'Best Offer Tag','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_offer'
                    ),
            
                    array(
                        'heading'     => esc_html__( 'Name','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_name'
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Price','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_price'
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Duration','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_duration'
                    ),
                    
                    array(
                        'type'       => 'param_group',
                        'value'      => '',
                        'param_name' => 'yog_features',
                        'params'     => array(
                            
                            array(
                                'heading'     => esc_html__('Style', 'yog'),
                    			'type'        => 'dropdown',
                    			'param_name'  => 'yog_feature_style',
                    			'value' => array(
                                    esc_html__('Active Style', 'yog')   => 'v1',
                    				esc_html__('Deactive Style', 'yog')    => 'v2',
                    			),
                    			'description' => esc_html__('Select features Style', 'yog'),
                    	    ),
                    
                            array(
                                'heading'     => esc_html__( 'Feature','yog'),
                                'type'        => 'textfield',
                                'value'       => '',
                                'param_name'  => 'yog_feature'
                            ),
                            
                        )   
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Button','yog'),
                        'type'        => 'vc_link',
                        'value'       => '',
                        'param_name'  => 'yog_btn'
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
|				Flipmart: Ray Services / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Ray Services', 'yog'),
      'base'        => 'yog_ray_services',
      'class'       => 'icon_yog_ray_services',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Ray', 'yog'),
      'description' => esc_html__( 'Insert Services', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__('Style', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_style',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('List Style', 'yog')  => 'v1',
    				esc_html__('Text Style', 'yog')  => 'v2'
    			),
    			'description' => esc_html__('Select Services Style', 'yog'),
    	    ),
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading'
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_content',
                'dependency'    => array( 'element'   => 'yog_style','value'     => array( 'v2' ) ),
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_service',
                'dependency'    => array( 'element'   => 'yog_style','value'     => array( 'v1' ) ),
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_heading'
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Description','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_description'
                    ),
                    
                    array(
            			'type'        => 'iconpicker',
            			'heading'     => esc_html__( 'Icon', 'yog' ),
            			'param_name'  => 'yog_icon',
            			'value'       => 'fa fa-info-circle',
                        'settings'    => array(
            				'emptyIcon'    => false, // default true, display an 'EMPTY' icon?
            				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
            			),
            			'description' => esc_html__( 'Select icon from library.', 'yog' ),
            		)
                )
            ),
            
            array(
                'heading'     => esc_html__( 'Above Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_above_img',
            ),
            
            array(
                'heading'     => esc_html__( 'Beyond Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_beyond_img',
            ),
            
            array(
                'heading'     => esc_html__('Beyond Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_beyond_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Beyond Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_beyond_delay',
            ),
            
            array(
                'heading'     => esc_html__('Images Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Images Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
         )
       )
    );

/*-------------------------------------------------------------------------------
|				Flipmart: Ray Video / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Ray Video', 'yog'),
      'base'        => 'yog_ray_video',
      'class'       => 'icon_yog_ray_video',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Ray', 'yog'),
      'description' => esc_html__( 'Insert Video', 'yog' ),
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
                'param_name'  => 'yog_description'
            ),
            
            array(
                'heading'     => esc_html__( 'Video','yog'),
                'type'        => 'textarea_html',
                'value'       => '',
                'holder'      => 'div',
                'param_name'  => 'content'
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
|				Flipmart :  Ray Testimonial CPT Module / Elements Shortcode			|						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Ray Testimonial', 'yog'),
      'base'        => 'yog_ray_testimonial',
      'class'       => 'icon_yog_ray_testimonial',
      'icon'	    => 'icon_yog_ray_testimonial',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Ray', 'yog'),
      'description' => esc_html__( 'Insert User Testimonial.', 'yog' ),
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
|				Flipmart: Ray Intro / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_ray_intro($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'         => '',
            'yog_button'          => '',
            'yog_logo_img'        => '',
            'yog_right_img'       => '',
            'yog_right_animation' => '',
            'yog_right_delay'     => '',
            'yog_bg_img'          => '',
            'yog_animation'    => '',
            'yog_delay'        => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        ?>
        <header class="full-intro intro-block bg-color-main" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
    		<div class="ray-line ray-vertical y-100 x-50 ray-rotate-135 laser-blink hidden-sm hidden-xs" ></div>
    		<div class="ray-line ray-horizontal y-25 x-0 ray-rotate-45 laser-blink hidden-sm hidden-xs" ></div>
    		<div class="container">
    			<div class="row">
    				<div class="col-md-8 col-sm-12">
                        <?php 
                            //Logo
                            if( $yog_logo_img ):
                                echo '<img class="logo" src="'. wp_get_attachment_url( $yog_logo_img ) .'" alt="'. get_post_meta( $yog_logo_img, '_wp_attachment_image_alt', true) .'" height="70" width="144" />';
                            endif;
                            
                            //Heading
                            if( $yog_heading ):
                                echo '<h1 class="slogan">'. $yog_heading .'</h1>';
                            endif;
                            
                            //Button
                            $yog_link = isset( $yog_button )? vc_build_link( $yog_button ) : '';
                            if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                            
                                $attributes   = array();
                                $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                            	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                            	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                $attributes   = implode( ' ', $attributes );
                               
                                echo '<a ' . $attributes . ' class="download-btn-alt ios-btn"><i class="soc-icon-apple"></i> '. trim( $yog_link['title'] ) .'</a>';
                                
                            }
                        ?>
    				</div>
    				<div class="col-md-4 hidden-sm hidden-xs">
                        <?php 
                            //Right Image
                            if( $yog_right_img ):
                                
                                //Animation
                                $yog_right_animation = ( isset( $yog_right_animation ) && !empty( $yog_right_animation ) )? $yog_right_animation : '';
                                $yog_right_delay     = ( isset( $yog_right_delay ) && !empty( $yog_right_delay ) )? $yog_right_delay : '';
                                
                                echo '<img class="intro-screen" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_right_animation, 'data-animation-daley' => $yog_right_delay ) ) .' src="'. wp_get_attachment_url( $yog_right_img ) .'" width="400" alt="'. get_post_meta( $yog_right_img, '_wp_attachment_image_alt', true) .'" />';
                            endif;
                        ?>
    				</div>
    			</div>
    		</div>
            <?php 
                //Background
                $yog_bg = ( $yog_bg_img )? 'style="background-image: url('. wp_get_attachment_url( $yog_bg_img ) .');"' : '';
                echo '<div class="block-bg" '. $yog_bg .'></div>';
            ?>
    	</header>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_ray_intro', 'yog_ray_intro' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Ray Features / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_ray_features($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'        => '',
            'yog_sub_heading'    => '',
            'yog_left_features'  => '',
            'yog_left_animation' => '',
            'yog_left_delay'     => '',
            'yog_middle_img'     => '',
            'yog_middle_animation'=> '',
            'yog_middle_delay'   => '',
            'yog_right_features' => '',
            'yog_right_animation'=> '',
            'yog_right_delay'    => '',
            'yog_animation'      => '',
            'yog_delay'          => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        //Elements Items
        $yog_left_features  = (array) vc_param_group_parse_atts( $yog_left_features );
        $yog_right_features = (array) vc_param_group_parse_atts( $yog_right_features );
        
        ?>
        <section class="img-block-3col features">
    		<div class="container">
    			<?php 
                    $yog_heading_content = '';
                    
                    //Heading
                    if( $yog_heading ):
                        $yog_heading_content = '<h2>'. $yog_heading .'</h2>';
                    endif;
                    
                    //Sub Heading
                    if( $yog_sub_heading ):
                        $yog_heading_content .= '<p>'. $yog_sub_heading .'</p>';
                    endif;
                    
                    //Heading Content
                    if( $yog_heading_content ):
                        echo '<div class="title">'. $yog_heading_content .'</div>';
                    endif;
                ?>
    			<div class="row">
                    <?php
                        //Left Section 
                        if( $yog_left_features ): 
                        
                            $yog_left_animation = ( isset( $yog_left_animation ) && !empty( $yog_left_animation ) )? $yog_left_animation : '';
                            $yog_left_delay     = ( isset( $yog_left_delay ) && !empty( $yog_left_delay ) )? $yog_left_delay : '';
                    ?>
        				<div class="col-sm-4">
        					<ul class="item-list-right item-list-big">
                                <?php 
                                    foreach( $yog_left_features as $yog_left_feature ):
                                        
                                        //Wrapper Start
                                        echo '<li '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_left_animation, 'data-animation-daley' => $yog_left_delay ) ) .'>';
                                            
                                            //Icon
                                            if( $yog_left_feature['yog_icon'] ):
                                                echo '<i class="'. $yog_left_feature['yog_icon'] .'"></i>';
                                            endif;
                                            
                                            //Heading
                                            if( $yog_left_feature['yog_heading'] ):
                                                echo '<h3>'. $yog_left_feature['yog_heading'] .'</h3>';
                                            endif;
                                            
                                            //Description
                                            if( $yog_left_feature['yog_description'] ):
                                                echo '<p>'. $yog_left_feature['yog_description'] .'</p>';
                                            endif;
                                        
                                        //Wrapper End
                                        echo '</li>';
                                        
                                    endforeach;
                                ?>
        					</ul>
        				</div>
                    <?php endif; ?>
                    <?php
                        //Right Section 
                        if( $yog_right_features ): 
                        
                            $yog_right_animation = ( isset( $yog_right_animation ) && !empty( $yog_right_animation ) )? $yog_right_animation : '';
                            $yog_right_delay     = ( isset( $yog_right_delay ) && !empty( $yog_right_delay ) )? $yog_right_delay : '';
                    ?>
        				<div class="col-sm-4 col-sm-push-4">
        					<ul class="item-list-left item-list-big">
                                <?php 
                                    foreach( $yog_right_features as $yog_right_feature ):
                                        
                                        //Wrapper Start
                                        echo '<li '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_right_animation, 'data-animation-daley' => $yog_right_delay ) ) .'>';
                                            
                                            //Icon
                                            if( $yog_right_feature['yog_icon'] ):
                                                echo '<i class="'. $yog_right_feature['yog_icon'] .'"></i>';
                                            endif;
                                            
                                            //Heading
                                            if( $yog_right_feature['yog_heading'] ):
                                                echo '<h3>'. $yog_right_feature['yog_heading'] .'</h3>';
                                            endif;
                                            
                                            //Description
                                            if( $yog_right_feature['yog_description'] ):
                                                echo '<p>'. $yog_right_feature['yog_description'] .'</p>';
                                            endif;
                                        
                                        //Wrapper End
                                        echo '</li>';
                                        
                                    endforeach;
                                ?>
        					</ul>
        				</div>
                    <?php endif; ?>
    				<div class="col-sm-4 col-sm-pull-4">
                        <?php 
                            if( $yog_middle_img ): 
                            
                                $yog_middle_animation = ( isset( $yog_middle_animation ) && !empty( $yog_middle_animation ) )? $yog_middle_animation : '';
                                $yog_middle_delay     = ( isset( $yog_middle_delay ) && !empty( $yog_middle_delay ) )? $yog_middle_delay : ''; 
                        
                            ?>
        					<div class="animation-box" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_middle_animation, 'data-animation-daley' => $yog_middle_delay ) ); ?>>
        					 	<img class="highlight-left" src="<?php echo YOG_CORE_DIR; ?>assets/images/ray-light.png" height="192" width="48" alt="" />
        						<img class="highlight-right" src="<?php echo YOG_CORE_DIR; ?>assets/images/ray-light.png" height="192" width="48" alt="" />
                                <img class="screen" src="<?php echo wp_get_attachment_url( $yog_middle_img ); ?>" alt="<?php echo get_post_meta( $yog_middle_img, '_wp_attachment_image_alt', true); ?>" height="581" width="300" />
        					</div>
                        <?php endif; ?>
    				</div>
    			</div>
    		</div>
    	</section>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_ray_features', 'yog_ray_features' );
        
/*--------------------------------------------------------------------------------
|				Flipmart: Ray Innovations / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_ray_innovations($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'      => '',
            'yog_description'  => '',
            'yog_img'          => '',
            'yog_animation'    => '',
            'yog_delay'        => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <section class="bg-color2 innovations">
    		<div class="container">
    			<?php 
                    $yog_heading_content = '';
                    
                    //Heading
                    if( $yog_heading ):
                        $yog_heading_content = '<h2>'. $yog_heading .'</h2>';
                    endif;
                    
                    //Sub Heading
                    if( $yog_sub_heading ):
                        $yog_heading_content .= '<p>'. $yog_sub_heading .'</p>';
                    endif;
                    
                    //Heading Content
                    if( $yog_heading_content ):
                        echo '<div class="title">'. $yog_heading_content .'</div>';
                    endif;
                ?>
    			<img class="screen" src="<?php echo wp_get_attachment_url( $yog_img ); ?>" alt="<?php echo get_post_meta( $yog_img, '_wp_attachment_image_alt', true); ?>" height="387" width="800" alt="" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>/>
    		</div>
    		<div id="ray1" class="ray ray-horizontal"></div>
    		<div id="ray2" class="ray ray-horizontal"></div>
    		<div id="ray3" class="ray ray-horizontal"></div>
    		<div id="ray4" class="ray ray-horizontal"></div>
    	</section>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_ray_innovations', 'yog_ray_innovations' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Ray Services / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_ray_services($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_style'            => 'v1',
            'yog_heading'          => '',
            'yog_content'          => '', 
            'yog_service'          => '',
            'yog_above_img'        => '',
            'yog_beyond_img'       => '',
            'yog_beyond_animation' => '',
            'yog_beyond_delay'     => '',
            'yog_animation'        => '',
            'yog_delay'            => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        if( $yog_style == 'v1' ):
            //Elements Items
            $yog_services  = (array) vc_param_group_parse_atts( $yog_service );
            ?>
            <section class="img-block-2col">
        		<div class="container">
        			<div class="row">
        				<div class="col-sm-6">
                            <?php 
                                //Heading
                                if( $yog_heading ):
                                    echo '<div class="title"><h2>'. $yog_heading .'</h2></div>';
                                endif;
                                
                                //Services
                                if( $yog_services ):
                                
                                    //Wrapper Start
                                    echo '<ul class="item-list-left">';
                                    
                                        foreach( $yog_services as $yog_service ):
                                            
                                            //Wrapper Start
                                            echo '<li>';
                                                
                                                //Icon
                                                if( $yog_service['yog_icon'] ):
                                                    echo '<i class="color '. $yog_service['yog_icon'] .'"></i>';
                                                endif;
                                                
                                                //Heading
                                                if( $yog_service['yog_heading'] ):
                                                    echo '<h4 class="color">'. $yog_service['yog_heading'] .'</h4>';
                                                endif;
                                                
                                                //Description
                                                if( $yog_service['yog_description'] ):
                                                    echo '<p>'. $yog_service['yog_description'] .'</p>';
                                                endif;
                                            
                                            //Wrapper End
                                            echo '</li>';
                                        
                                        endforeach;
                                        
                                    //Wrapper End
                                    echo '</ul>';
                                    
                                endif;
                            ?>
        				</div>
        				<div class="col-md-5 col-md-offset-1 col-sm-6">
        					<div class="screen-couple-right" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
        						<div class="flare">
        							<img class="base wow" src="<?php echo YOG_CORE_DIR; ?>assets/images/ray-flare_base.png" alt="" />
        							<img class="shapes wow" src="<?php echo YOG_CORE_DIR; ?>assets/images/ray-flare_shapes.png" alt="" />
        						</div>
                                <?php 
                                    //Above Image
                                    if( $yog_above_img ):
                                        echo '<img class="screen above" src="'. wp_get_attachment_url( $yog_above_img ) .'" alt="'. get_post_meta( $yog_above_img, '_wp_attachment_image_alt', true) .'" height="484" width="250" />';
                                    endif;
                                    
                                    //Beyond Image
                                    if( $yog_beyond_img ):
                                        
                                        //Animation
                                        $yog_beyond_animation = ( isset( $yog_beyond_animation ) && !empty( $yog_beyond_animation ) )? $yog_beyond_animation : '';
                                        $yog_beyond_delay     = ( isset( $yog_beyond_delay ) && !empty( $yog_beyond_delay ) )? $yog_beyond_delay : '';
            
                                        echo '<img class="screen beyond" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_beyond_animation, 'data-animation-daley' => $yog_beyond_delay ) ) .' src="'. wp_get_attachment_url( $yog_beyond_img ) .'" alt="'. get_post_meta( $yog_beyond_img, '_wp_attachment_image_alt', true) .'" height="407" width="210" />';
                                    endif;
                                ?>
        					</div>
        				</div>
        			</div>
        		</div>
        	</section>
            <?php
        else:
            ?>
            <section class="img-block-2col bg-color2 benefits2">
        		<div class="container">
        			<div class="row">
        				<div class="col-sm-6 col-sm-push-6">
                            <?php 
                                //Heading
                                if( $yog_heading ):
                                    echo '<div class="title"><h2>'. $yog_heading .'</h2></div>';
                                endif;
                                
                                //Content
                                if( $yog_content ):
                                    echo $yog_content;
                                endif;
                            ?>
                        </div>
        				<div class="col-sm-6 col-sm-pull-6">
        					<div class="screen-couple-left" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
        						<div class="fog fog-top"></div>
        						<div class="fog fog-bottom"></div>
       						    <?php 
                                    //Above Image
                                    if( $yog_above_img ):
                                        echo '<img class="screen above" src="'. wp_get_attachment_url( $yog_above_img ) .'" alt="'. get_post_meta( $yog_above_img, '_wp_attachment_image_alt', true) .'" height="484" width="250" />';
                                    endif;
                                    
                                    //Beyond Image
                                    if( $yog_beyond_img ):
                                        
                                        //Animation
                                        $yog_beyond_animation = ( isset( $yog_beyond_animation ) && !empty( $yog_beyond_animation ) )? $yog_beyond_animation : '';
                                        $yog_beyond_delay     = ( isset( $yog_beyond_delay ) && !empty( $yog_beyond_delay ) )? $yog_beyond_delay : '';
            
                                        echo '<img class="screen beyond" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_beyond_animation, 'data-animation-daley' => $yog_beyond_delay ) ) .' src="'. wp_get_attachment_url( $yog_beyond_img ) .'" alt="'. get_post_meta( $yog_beyond_img, '_wp_attachment_image_alt', true) .'" height="407" width="210" />';
                                    endif;
                                ?>
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
   
   add_shortcode( 'yog_ray_services', 'yog_ray_services' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Ray Video / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_ray_video($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'          => '',
            'yog_description'      => '', 
            'yog_animation'        => '',
            'yog_delay'            => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <section <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
    		<div class="container">
    			<?php 
                    $yog_heading_content = '';
                    
                    //Heading
                    if( $yog_heading ):
                        $yog_heading_content = '<h2>'. $yog_heading .'</h2>';
                    endif;
                    
                    //Sub Heading
                    if( $yog_sub_heading ):
                        $yog_heading_content .= '<p>'. $yog_sub_heading .'</p>';
                    endif;
                    
                    //Heading Content
                    if( $yog_heading_content ):
                        echo '<div class="title">'. $yog_heading_content .'</div>';
                    endif;
                ?>
    			<div class="video-container"> 
    				<?php echo $content; ?>
    			</div>
    		</div>
    	</section>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_ray_video', 'yog_ray_video' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Ray Gallery / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_ray_gallery($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'      => '',
            'yog_gallery'      => '', 
            'yog_animation'    => '',
            'yog_delay'        => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        //Elements Items
        $yog_items  = (array) vc_param_group_parse_atts( $yog_gallery );
        if( $yog_items ):
        ?>
        <section class="bg-color2 screenshots" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
    		<div class="container-fluid">
                <?php 
                    //Heading
                    if( $yog_heading ):
                        echo '<h2>'. $yog_heading .'</h2>';
                    endif;
                    
                    //Wrapper Start
                    echo '<div class="screenshots-slider"><div id="screenshots-slider" class="owl-carousel">';
                    
                        foreach( $yog_items as $yog_item ):
                            echo '<a class="item" href="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'"><img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt="'. get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) .'" width="250" height="444" /></a>';
                        endforeach;
                        
                    //Wrapper End
                    echo '</div></div>';
                ?>
    		</div>
    	</section>
        <?php
        endif;
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_ray_gallery', 'yog_ray_gallery' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Ray Counter / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_ray_counter($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_counter'      => '', 
            'yog_animation'    => '',
            'yog_delay'        => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        //Elements Items
        $yog_items  = (array) vc_param_group_parse_atts( $yog_counter );
        if( $yog_items ):
        ?>
        <section <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
    		<div class="container">
                <?php
                    //Wrapper Start
                    echo '<ul class="facts-list">';
                    
                        foreach( $yog_items as $yog_item ):
                                            
                                //Wrapper Start
                                echo '<li>';
                                    
                                    //Icon
                                    if( $yog_item['yog_icon'] ):
                                        echo '<i class="color '. $yog_item['yog_icon'] .'"></i>';
                                    endif;
                                    
                                    //Counter
                                    if( $yog_item['yog_counter'] ):
                                        echo '<h3 class="wow">'. $yog_item['yog_counter'] .'</h3>';
                                    endif;
                                    
                                    //Heading
                                    if( $yog_item['yog_heading'] ):
                                        echo '<h4>'. $yog_item['yog_heading'] .'</h4>';
                                    endif;
                                
                                //Wrapper End
                                echo '</li>';
                            
                            endforeach;
                        
                    //Wrapper End
                    echo '</ul>';
                ?>
    		</div>
    	</section>
        <?php
        endif;
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_ray_counter', 'yog_ray_counter' );
   
/*--------------------------------------------------------------------------------
|				Flipmart:  Ray Testimonial CPT Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_ray_testimonial($atts, $content = null ){

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
            
            $yog_content = ''; 
            while ( $yog_post_query->have_posts() ) {
                $yog_post_query->the_post();
                
                //Content 
                $yog_content .=
                '<div class="item container">
					<div class="talk">'. get_post_meta( get_the_ID(), 'testimonial-content', true ) .'</div>
                    '. get_the_post_thumbnail( get_the_ID(), array( 100, 100 ), array( 'class' => 'photo' ) ) .'
					<div class="name">'. get_the_title() .'</div>
					<div class="ocupation">'. get_post_meta( get_the_ID(), 'testimonial-company', true ) .'</div>
				</div>';
            }
            ?>
            <section class="bg-color3 testimonials" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="container-fluid">
                   <?php if( $yog_heading ){ ?> 
                       <h2><?php echo $yog_heading; ?></h2>
                   <?php } ?>
                   <div id="testimonials-slider" class="owl-carousel">
                      <?php echo $yog_content; ?>
                </div>
                <div class="block-bg" <?php echo $yog_bg; ?> data-stellar-ratio="0.5"></div>
            </section>
            <?php
            
        endif;
                
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_ray_testimonial', 'yog_ray_testimonial' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Ray Blog Post / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_ray_blog_posts($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'    => '',
            'yog_content'    => '',
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
            <section <?php yog_helper()->attr( false, array( 'class' => 'news', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="container-fluid">
                <?php 
                    $yog_heading_content = '';
            
                    //Heading
                    if( $yog_heading ){
                      $yog_heading_content .= '<h2>'. $yog_heading .'</h2>';
                    } 
                   
                    //Content
                    if( $yog_content ){
                      $yog_heading_content .= '<p>'. $yog_content .'</p>';
                    }
                    
                    //Heading Display
                    if( $yog_heading_content ){
                      echo '<div class="title">'. $yog_heading_content .'</div>';
                    }
                    
                    //Wapper Start
                    echo '<ul class="news-list">';
                    
                    while ( $yog_post_query->have_posts() ) {
                        $yog_post_query->the_post();
                        
                        ?>
                        <li <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="news-info">
                                <div class="author"><i class="icon icon-user"></i><?php echo get_the_author(); ?></div>
        						<div class="date"><i class="icon icon-clock"></i><?php echo get_the_date( 'd.F.Y' ); ?></div>
        						<div class="comments"><i class="icon icon-bubble"></i><?php printf( '%s %s', get_comments_number( get_queried_object_id() ), esc_html__( 'Comments', 'yog' ) ); ?></div>
                            </div>
                        </li>
                        <?php
                    }
                    
                    //Wrapper End
                    echo '</ul>';
                 ?>
                 <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="round-btn"><?php _e( 'Older news', 'yog' ); ?></a>
                 </div>
            </section>
            <?php
            
            //Reset Loop Query
            wp_reset_postdata();
        }
            
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_ray_blog_posts', 'yog_ray_blog_posts' );
   
/*--------------------------------------------------------------------------------
|				Flipmart:  Ray News Letter Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_ray_newsletter($atts, $content = null ){

		$yog_output  = '';
        
		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_description' => '',
            'yog_socials'     => '',  
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

		ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        ?>
        <section <?php yog_helper()->attr( false, array( 'class' => 'bg-color2', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
    		<div class="container-fluid">
            
                <?php 
                    $yog_heading_content = '';
            
                    //Heading
                    if( $yog_heading ){
                      $yog_heading_content .= '<h2>'. $yog_heading .'</h2>';
                    } 
                   
                    //Content
                    if( $yog_description ){
                      $yog_heading_content .= '<p>'. $yog_description .'</p>';
                    }
                    
                    //Heading Display
                    if( $yog_heading_content ){
                      echo '<div class="title">'. $yog_heading_content .'</div>';
                    }
                    
                    //Animation
                    $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
                    $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
                    
                    //Elements Items
                    $yog_items  = (array) vc_param_group_parse_atts( $yog_socials );
                    if( $yog_items ):
                        
                        //Warper Start
                        echo '<ul class="soc-list wow flipInX">';
                            
                            foreach( $yog_items as $yog_item ):
                                
                                echo '<li><a href="'. $yog_item['yog_link'] .'"><i class="'. $yog_item['yog_icon'] .'"></i></a></li>';
                                
                            endforeach;
                        
                        //Wrapper End
                        echo '</ul>';
                        
                    endif;
                    
                    //News Letter
                    if( mc4wp_get_form() ){
                        echo mc4wp_get_form();
                    }
                    
                ?>
    			
    		</div>
    	</section>
        <?php
                
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_ray_newsletter', 'yog_ray_newsletter' );
   
/*--------------------------------------------------------------------------------
|				Flipmart:  Ray Download Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_ray_download($atts, $content = null ){

		$yog_output  = '';
        
		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_bg'          => '', 
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

		ob_start();
        
        if( $yog_heading ):
        
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            //Background
            $yog_bg = ( isset( $yog_bg ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_bg ) .');"' : '';
        ?>
        <section class="bg-color-main download">
    		<div class="container-fluid" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
    			<a href="#wrap" class="goto">
    				<h2><i class="soc-icon-apple"></i><?php echo $yog_heading; ?></h2>
    			</a>
    		</div>
    		<div class="block-bg" data-stellar-ratio="0.5" <?php echo $yog_bg; ?>></div>
    	</section>
        <?php
        endif;
                
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_ray_download', 'yog_ray_download' );
   
/*--------------------------------------------------------------------------------
|				Flipmart:  Ray Pricing Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_ray_pricing($atts, $content = null ){

		$yog_output  = '';
        
		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_description' => '', 
            'yog_pricing'     => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

		ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        //Elements Items
        $yog_items  = (array) vc_param_group_parse_atts( $yog_pricing );
        if( $yog_items ):
        ?>
        <section <?php yog_helper()->attr( false, array( 'class' => 'bg-color-grad', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
    		<div class="container">
    			<div class="title">
                    <?php 
                        $yog_heading_content = '';
            
                        //Heading
                        if( $yog_heading ){
                          $yog_heading_content .= '<h2>'. $yog_heading .'</h2>';
                        } 
                       
                        //Content
                        if( $yog_description ){
                          $yog_heading_content .= '<p>'. $yog_description .'</p>';
                        }
                        
                        //Heading Display
                        if( $yog_heading_content ){
                          echo $yog_heading_content;
                        }
                        
                        //Wrapper Start
                        echo '<ul class="pricing-table">';
                        
                            foreach( $yog_items as $yog_item ){
                                
                                //Animation
                                $yog_animation = ( isset( $yog_item['yog_animation'] ) && !empty( $yog_item['yog_animation'] ) )? $yog_item['yog_animation'] : '';
                                $yog_delay     = ( isset( $yog_item['yog_delay'] ) && !empty( $yog_item['yog_delay'] ) )? $yog_item['yog_delay'] : '';
                                
                                //Wrapper Start
                                echo '<li '. yog_helper()->get_attr( false, array( 'class' => $yog_item['yog_style'],  'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
                                    
                                    //Offer tag
                                    if( isset( $yog_item['yog_offer'] ) && !empty( $yog_item['yog_offer'] ) ):
                                        echo '<div class="stamp"><i class="icon-trophy"></i>'. $yog_item['yog_offer'] .'</div>';
                                    endif;
                                    
                                    //Name
                                    if( isset( $yog_item['yog_name'] ) && !empty( $yog_item['yog_name'] ) ):
                                        echo '<h3>'. $yog_item['yog_name'] .'</h3>';
                                    endif;
                                    
                                    //Price
                                    printf( '<span> %s <small>%s</small> </span>', $yog_item['yog_price'], $yog_item['yog_duration'] );
                                    
                                    //Features
                                    $yog_features  = (array) vc_param_group_parse_atts( $yog_item['yog_features'] );
                                    if( $yog_features ):
                                        
                                        //Wrapper Start
                                        echo '<ul class="benefits-list">';
                                            
                                            foreach( $yog_features as $yog_feature ){
                                                //Class
                                                $class = ( isset( $yog_feature['yog_feature_style'] ) && 'v2' == $yog_feature['yog_feature_style'] )? ' class="not"' : '' ;
                                                echo '<li'. $class .'>'. $yog_feature['yog_feature'] .'</li>';
                                            }
                                            
                                        //Wrapper End
                                        echo '</ul>';
                                        
                                    endif;
                                    
                                    //Button
                                    $yog_link = isset( $yog_item['yog_btn'] )? vc_build_link( $yog_item['yog_btn'] ) : '';
                                    if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                    
                                        $attributes   = array();
                                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                        $attributes   = implode( ' ', $attributes );
                                       
                                        echo '<a ' . $attributes . ' class="buy"><i class="icon icon-basket"></i></a>';
                                        
                                    }
                                
                                //Wrapper End
                                echo '</li>';
                                
                            }
                            
                        //Wrapper End
                        echo '</ul>';
                        
                    ?>
    			</div>
    		</div>
    	</section>
        <?php
        endif;
                
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_ray_pricing', 'yog_ray_pricing' );