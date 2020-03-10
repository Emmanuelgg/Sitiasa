<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Mobile
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 */
/*-------------------------------------------------------------------------------
|				Flipmart:  Mobile About Us Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Mobile About Us', 'yog'),
      'base'        => 'yog_mobile_abouts',
      'class'       => 'icon_yog_mobile_abouts',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Mobile', 'yog'),
      'description' => esc_html__( 'Insert About Us', 'yog' ),
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
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea_html',
                'value'       => '',
                'param_name'  => 'content',
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_mobile_about',
                'params'     => array(
                   
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
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
|				Flipmart:  Mobile App Download Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Mobile App Download', 'yog'),
      'base'        => 'yog_mobile_app',
      'class'       => 'icon_yog_mobile_app',
      'icon'	    => 'icon-wpb-ui-custom_heading',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Mobile', 'yog'),
      'description' => esc_html__( 'Insert App Download', 'yog' ),
      'params'      => array(
              
    		array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
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
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_icons_list',
                'params'     => array(
                   
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                    ),
                    
                    array(
            			'type'        => 'iconpicker',
            			'heading'     => esc_html__( 'Icon', 'yog' ),
            			'param_name'  => 'yog_icon',
            			'value'       => 'fa fa-info-circle',
            			'settings'    => array(
            				'emptyIcon'    => false, // default true, display an "EMPTY" icon?
            				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
            			),
            			'description' => esc_html__( 'Select icon from library.', 'yog' ),
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
                'heading'     => esc_html__( 'Bottom Content','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_bottom_content',
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
|				Flipmart:  Mobile Call Action Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Mobile Call Action', 'yog'),
      'base'        => 'yog_mobile_cta',
      'class'       => 'icon_yog_mobile_cta',
      'icon'	    => 'icon-wpb-ui-custom_heading',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Mobile', 'yog'),
      'description' => esc_html__( 'Insert Call Action', 'yog' ),
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
                'type'        => 'textarea',
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
|				Flipmart:  Mobile Clients Logo Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Mobile Clients Logo', 'yog'),
      'base'        => 'yog_mobile_clients',
      'class'       => 'icon_yog_mobile_clients',
      'icon'	    => 'icon-wpb-ui-custom_heading',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Mobile', 'yog'),
      'description' => esc_html__( 'Insert Clients Logo', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_mobile_client',
                'params'     => array(
                   
                    array(
                        'heading'     => esc_html__( 'Image','yog'),
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
|				Flipmart:  Mobile Icon Teaser Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Mobile Icon Teaser', 'yog'),
      'base'        => 'yog_mobile_icon_teaser',
      'class'       => 'icon_yog_mobile_icon_teaser',
      'icon'	    => 'icon-wpb-ui-custom_heading',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Mobile', 'yog'),
      'description' => esc_html__( 'Insert Icon Teaser', 'yog' ),
      'params'      => array(
              
    		array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea_html',
                'value'       => '',
                'param_name'  => 'content',
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_icons_left',
                'params'     => array(
                   
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                    ),
                    
                    array(
            			'type'        => 'iconpicker',
            			'heading'     => esc_html__( 'Icon', 'yog' ),
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
                'param_name' => 'yog_icons_right',
                'params'     => array(
                   
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                    ),
                    
                    array(
            			'type'        => 'iconpicker',
            			'heading'     => esc_html__( 'Icon', 'yog' ),
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
|				Flipmart:  Mobile Feature List Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Mobile Feature List', 'yog'),
      'base'        => 'yog_mobile_features',
      'class'       => 'icon_yog_mobile_features',
      'icon'	    => 'icon-wpb-ui-custom_heading',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Mobile', 'yog'),
      'description' => esc_html__( 'Insert Feature Lists', 'yog' ),
      'params'      => array(
              
    		array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea_html',
                'value'       => '',
                'param_name'  => 'content',
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_mobile_feature',
                'params'     => array(
                   
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_img',
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
|				Flipmart:  Mobile Heading Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Mobile Heading', 'yog'),
      'base'        => 'yog_mobile_heading',
      'class'       => 'icon_yog_mobile_heading',
      'icon'	    => 'icon-wpb-ui-custom_heading',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Mobile', 'yog'),
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
|				Flipmart:  Mobile News Letter Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Mobile News Letter', 'yog'),
      'base'        => 'yog_mobile_newsletter',
      'class'       => 'icon_yog_mobile_newsletter',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Mobile', 'yog'),
      'description' => esc_html__( 'Insert News Letter', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading'
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea_html',
                'value'       => '',
                'param_name'  => 'content'
            ),
            
            array(
                'heading'     => esc_html__( 'Mailchimp Form ID','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_form_id'
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
|				Flipmart:  Mobile Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Mobile Slider', 'yog'),
      'base'        => 'yog_mobile_sliders',
      'class'       => 'icon_yog_mobile_sliders',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Mobile', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_mobile_slider',
                'params'     => array(
                   
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
                        'type'       => 'param_group',
                        'value'      => '',
                        'param_name' => 'yog_img_links',
                        'params'     => array(
                        
                            array(
                                'heading'     => esc_html__( 'Image','yog'),
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

/*--------------------------------------------------------------------------------
|				Flipmart: Mobile About Us / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_mobile_abouts($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_mobile_about'=> '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'row', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <div class="col-sm-6">
               <div class="about-video">
                  <?php echo $content; ?>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="about-content">
                  <?php 
                      //Heading
                      if( $yog_heading ){
                         echo '<h3>'. $yog_heading .'</h3>';
                      } 
                      
                      //Sub Heading
                      if( $yog_sub_heading ){
                         echo '<p>'. $yog_sub_heading .'</p>';
                      } 
                      
                      //Elements Items
                      $yog_items = (array) vc_param_group_parse_atts( $yog_mobile_about );
                      
                      if( $yog_items ){
                        
                        echo '<ul>';
                            
                            foreach( $yog_items as $yog_item ){
                                
                                printf( '<li><p><span><img src="%s" alt="%s"></span>%s<p></li>', wp_get_attachment_url( $yog_item['yog_img'] ), esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ),  $yog_item['yog_heading'] );
    
                            }
                            
                        echo '</ul>';
                      
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
   
   add_shortcode( 'yog_mobile_abouts', 'yog_mobile_abouts' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Mobile App Download / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_mobile_app($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'        => '',
            'yog_content'        => '',
            'yog_icons_list'     => '',
            'yog_bottom_content' => '',
            'yog_animation'      => '',
            'yog_delay'          => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'download-app', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
          <div class="overlay"></div>
            <div class="row">
               <div class="col-sm-12">
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
                      $yog_items = (array) vc_param_group_parse_atts( $yog_icons_list ); 
                      
                      if( $yog_items ){
                        
                        echo '<ul>';
                            
                            foreach( $yog_items as $yog_item ){
                                
                                //Button
                                $yog_tag_before = $yog_tag_after = '';
                                $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                            
                                    $attributes   = array();
                                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                    $attributes   = implode( ' ', $attributes );
                                   
                                    $yog_tag_before = '<a ' . $attributes . '>';
                                    $yog_tag_after  = '</a>';
                                    
                                } 
                                
                                //Print Content
                                printf( '<li>%s<i class="%s"></i> %s %s</li>', $yog_tag_before, $yog_item['yog_icon'], $yog_item['yog_heading'], $yog_tag_after );
                            
                            }
                        
                        echo '</ul>';
                        
                      }
                      
                      //Bottom Content
                      if( $yog_bottom_content ){
                        echo '<p>'. $yog_bottom_content .'</p>';
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
   
   add_shortcode( 'yog_mobile_app', 'yog_mobile_app' );
        
   
/*--------------------------------------------------------------------------------
|				Flipmart: Mobile Call Action / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_mobile_cta($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_content'     => '',
            'yog_link'        => '',
            'yog_img'         => '',
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
                 <div class="call-action-content">
                     <?php 
                           //Heading
                           if( isset( $yog_heading ) ){
                             echo '<h3>'. $yog_heading .'</h3>';
                           }
                           
                           //Sub Heading
                           if( isset( $yog_sub_heading ) ){
                             echo '<h5>'. $yog_sub_heading .'</h5>';
                           }
                          
                           //Content
                           if( isset( $yog_content ) ){
                             echo '<p>'. $yog_content .'</p>';
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
               <div class="col-sm-6">
                  <?php 
                      //Image
                      if( $yog_img ){
                         printf( '<div class="about-video"><img src="'. wp_get_attachment_url( $yog_img ) .'" alt="'. esc_attr( get_post_meta( $yog_img, '_wp_attachment_image_alt', true) ) .'" class="img-responsive"/></div>' );
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
   
   add_shortcode( 'yog_mobile_cta', 'yog_mobile_cta' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Mobile Client Logo / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_mobile_clients($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_mobile_client' => '',
            'yog_animation'     => '',
            'yog_delay'         => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        //Elements Items
        $yog_items  = (array) vc_param_group_parse_atts( $yog_mobile_client );
        
        if( $yog_items ){
           ?>
           <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'clients-logo', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <ul>
                 <?php 
                    foreach( $yog_items as $yog_item ){
                        
                        $yog_tag_before = $yog_tag_after = '';
                        $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                        if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                    
                            $attributes   = array();
                            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                            $attributes   = implode( ' ', $attributes );
                           
                            $yog_tag_before = '<a ' . $attributes . '>';
                            $yog_tag_after  = '</a>';
                            
                        } 
                        
                        //Print Content
                        printf( '<li>%s<img src="%s" alt="%s">%s</li>', $yog_tag_before, wp_get_attachment_url( $yog_item['yog_img'] ) , esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ), $yog_tag_after );
                        
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
   
   add_shortcode( 'yog_mobile_clients', 'yog_mobile_clients' );
 
/*--------------------------------------------------------------------------------
|				Flipmart: Mobile Icon Teaser / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_mobile_icon_teaser($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_icons_left'  => '',
            'yog_img'         => '',
            'yog_icons_right' => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        //Elements Items
        $yog_left_items  = (array) vc_param_group_parse_atts( $yog_icons_left );
        $yog_right_items = (array) vc_param_group_parse_atts( $yog_icons_right );
        
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'how-it-work', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <?php 
              //Heading
              $yog_heading_content = '';
              if( $yog_heading ){
                 $yog_heading_content .= '<h2>'. $yog_heading .'</h2><img src="'. YOG_CORE_DIR .'/assets/images/mobile-app-divider.png" alt="Image Not Found"/ >';
              } 
              
              //Content
              $yog_heading_content .= $content;
              
              //Heading Content
              if( $yog_heading_content ){
                printf( '<div class="heading-content">%s</div>', $yog_heading_content );
              } 
            ?>
            <div class="row">
               <div class="col-sm-4 work-list">
                  <?php 
                      if( $yog_left_items ){
                         
                         echo '<ul>';
                            foreach( $yog_left_items as $yog_left_item ){
                                
                                ?>
                                <li>
                                    <div class="work-des">
                                       <?php 
                                           //Icon
                                           if( $yog_left_item['yog_icon'] ){
                                              echo '<h1><i class="'. $yog_left_item['yog_icon'] .'"></i></h1>';
                                           } 
                                           
                                           //Heading
                                           if( $yog_left_item['yog_heading'] ){
                                              echo '<h3>'. $yog_left_item['yog_heading'] .'</h3>';
                                           }
                                           
                                           //Content
                                           if( $yog_left_item['yog_content'] ){
                                              echo '<p>'. $yog_left_item['yog_content'] .'</p>';
                                           }
                                       ?> 
                                    </div>
                                 </li>
                                <?php
                                
                            }
                         echo '</ul>';
                      }  
                  ?>
               </div>
               <div class="mobile-img">
                  <?php 
                      //Image
                      if( isset( $yog_img ) ){
                        echo '<img src="'. wp_get_attachment_url( $yog_img ) .'" alt="'. esc_attr( get_post_meta( $yog_img, '_wp_attachment_image_alt', true) ) .'">';
                      }  
                  ?> 
               </div>
               <div class="col-sm-4 work-list work-list-sec">
                  <?php 
                      if( $yog_right_items ){
                         
                         echo '<ul>';
                            foreach( $yog_right_items as $yog_right_item ){
                                
                                ?>
                                <li>
                                    <div class="work-des">
                                       <?php 
                                           //Icon
                                           if( $yog_right_item['yog_icon'] ){
                                              echo '<h1><i class="'. $yog_right_item['yog_icon'] .'"></i></h1>';
                                           } 
                                           
                                           //Heading
                                           if( $yog_right_item['yog_heading'] ){
                                              echo '<h3>'. $yog_right_item['yog_heading'] .'</h3>';
                                           }
                                           
                                           //Content
                                           if( $yog_right_item['yog_content'] ){
                                              echo '<p>'. $yog_right_item['yog_content'] .'</p>';
                                           }
                                       ?> 
                                    </div>
                                 </li>
                                <?php
                                
                            }
                         echo '</ul>';
                      }  
                  ?>
               </div>
            </div>
          </div>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_mobile_icon_teaser', 'yog_mobile_icon_teaser' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Mobile Feature List / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_mobile_features($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'        => '',
            'yog_mobile_feature' => '',
            'yog_animation'      => '',
            'yog_delay'          => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        //Elements Items
        $yog_items  = (array) vc_param_group_parse_atts( $yog_mobile_feature );
        
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'featured', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
           <div class="container">
             <div class="row"> 
               <?php 
                  //Heading
                  $yog_heading_content = '';
                  if( $yog_heading ){
                     $yog_heading_content .= '<h2>'. $yog_heading .'</h2><img src="'. YOG_CORE_DIR .'/assets/images/mobile-app-divider.png" alt="Image Not Found"/ >';
                  } 
                  
                  //Content
                  $yog_heading_content .= $content;
                  
                  //Heading Content
                  if( $yog_heading_content ){
                    printf( '<div class="heading-content">%s</div>', $yog_heading_content );
                  }
                      
                  if( $yog_items ){
                     
                     echo '<ul class="featured-list">';
                        foreach( $yog_items as $yog_item ){
                            
                            ?>
                            <li>
                                <div class="featured-list-des">
                                   <?php 
                                       //Icon
                                       if( $yog_item['yog_img'] ){
                                          echo '<h1><img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt="'. esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ) .'"></h1>';
                                       } 
                                       
                                       //Heading
                                       if( $yog_item['yog_heading'] ){
                                          echo '<h3>'. $yog_item['yog_heading'] .'</h3>';
                                       }
                                       
                                       //Content
                                       if( $yog_item['yog_content'] ){
                                          echo '<p>'. $yog_item['yog_content'] .'</p>';
                                       }
                                   ?> 
                                </div>
                             </li>
                            <?php
                            
                        }
                     echo '</ul>';
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
   
   add_shortcode( 'yog_mobile_features', 'yog_mobile_features' );

/*--------------------------------------------------------------------------------
|				Flipmart: Mobile Heading / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_mobile_heading($atts, $content = null ){

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
                    echo '<h2>'. $yog_heading .'</h2><img src="'. YOG_CORE_DIR .'/assets/images/mobile-app-divider.png" alt="Image Not Found" />';
                }
                
                //Sub Heading
                if( $yog_sub_heading ){
                    echo '<p>'. $yog_sub_heading .'</p>';
                }
            ?>
            
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_mobile_heading', 'yog_mobile_heading' );

/*--------------------------------------------------------------------------------
|				Flipmart: Mobile News Letter  / Element Shortcode			         |						
--------------------------------------------------------------------------------*/

	function yog_mobile_newsletter($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_form_id'     => '',
            'yog_img'         => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        if( $yog_form_id ):
        
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'newsletter', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
           <div class="overlay"></div>
           <div class="container">
              <div class="row">
                <div class="col-sm-12">
                   <?php 
                      //Heading
                      $yog_heading_content = '';
                      if( $yog_heading ){
                         $yog_heading_content .= '<h2>'. $yog_heading .'</h2><img src="'. YOG_CORE_DIR .'/assets/images/mobile-app-divider.png" alt="Image Not Found"/ >';
                      } 
                      
                      //Content
                      $yog_heading_content .= $content;
                      
                      //Heading Content
                      if( $yog_heading_content ){
                        printf( '<div class="heading-content">%s</div>', $yog_heading_content );
                      } 
                    ?>
                    <div class="newsletter-box">
                      <div class="newsletter-box-content">
                        <?php 
                            //Shortcode
                            echo do_shortcode( '[mc4wp_form id="'. $yog_form_id .'"]' );
                        ?>
                      </div>
                    </div>
                    <?php 
                       //Image
                       if( isset( $yog_img ) ){
                           echo '<div class="newsletter-img"><img src="'. wp_get_attachment_url( $yog_img ) .'" alt="'. esc_attr( get_post_meta( $yog_img, '_wp_attachment_image_alt', true) ) .'"></div>';
                       }  
                    ?>
                 </div>
              </div>
           </div>
        </div>
        <?php
        endif;
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_mobile_newsletter', 'yog_mobile_newsletter' );
      
/*--------------------------------------------------------------------------------
|				Flipmart: Mobile Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_mobile_sliders($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_mobile_slider' => '',
            'yog_animation'     => '',
            'yog_delay'         => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_mobile_slider );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div class="body-content mobileapp-slider" id="top-banner-and-menu" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                 <?php 
                    foreach( $yog_items as $yog_item ){
                        
                        ?>
                        <div class="item" style="background:#eee;">
                          <div class="container-fluid">
                             <div class="container">
                                <div class="caption bg-color vertical-center">
                                   <div class="slider-header fadeInDown-1">
                                       <?php 
                                           //Heading
                                           if( isset( $yog_item['yog_heading'] ) ){
                                             echo '<p><span class="slider-mobile-p"></span>'. $yog_item['yog_heading'] .'</p>';
                                           }
                                          
                                           //Sub Heading
                                           if( isset( $yog_item['yog_sub_heading'] ) ){
                                             echo '<h1>'. $yog_item['yog_sub_heading'] .'</h1>';
                                           }
                                          
                                           //Content
                                           if( isset( $yog_item['yog_content'] ) ){
                                             echo '<h1>'. $yog_item['yog_content'] .'</h1>';
                                           } 
                                       ?> 
                                   </div> 
                                   <?php
                                        //Image Links
                                        $yog_links = (array) vc_param_group_parse_atts( $yog_item['yog_img_links'] );
                                        if( $yog_links ){
                                   ?>
                                       <div class="big-subtext fadeInDown-1">
                                          <p><?php esc_html_e( 'Download Here', 'yog' ); ?></p>
                                          <div class="arrow-img">
                                             <img src="<?php echo YOG_CORE_DIR; ?>/assets/images/mobile-app-arrow.png" alt="Image Not Found" />
                                          </div> 
                                          <?php 
                                               foreach( $yog_links as $yog_link_item ){
                                                    
                                                    $yog_link = isset( $yog_link_item['yog_link'] )? vc_build_link( $yog_link_item['yog_link'] ) : '';
                                                    if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                                
                                                        $attributes   = array();
                                                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                                        $attributes   = implode( ' ', $attributes );
                                                       
                                                        echo '<a ' . $attributes . '><img src="'. wp_get_attachment_url( $yog_link_item['yog_img'] ) .'" alt="'. esc_attr( get_post_meta( $yog_link_item['yog_img'], '_wp_attachment_image_alt', true) ) .'"></a>';
                                                        
                                                    }
                                               } 
                                          ?> 
                                       </div>
                                   <?php } ?>
                                </div>
                                <?php 
                                    //Image
                                    if( isset( $yog_item['yog_img'] ) ){
                                        echo '<div class="mobile-app-img"><img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt="'. esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ) .'"></div>';
                                    }
                                ?>
                             </div>
                          </div>
                        </div>
                       <?php
                    }
                 ?>
              </div>
            </div>
            <?php
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_mobile_sliders', 'yog_mobile_sliders' );