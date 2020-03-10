<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Gym
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 *
 */
/*-------------------------------------------------------------------------------
|				Flipmart:  Gym Heading Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Gym Heading', 'yog'),
      'base'        => 'yog_gym_heading',
      'class'       => 'icon_yog_gym_heading',
      'icon'	    => 'icon-wpb-ui-custom_heading',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Gym', 'yog'),
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
|				Flipmart:  Gym Membership Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Gym Membership', 'yog'),
      'base'        => 'yog_gym_membership',
      'class'       => 'icon_yog_gym_membership',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Gym', 'yog'),
      'description' => esc_html__( 'Insert Membership', 'yog' ),
      'params'      => array(
            
             array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea_html',
                'value'       => '',
                'param_name'  => 'content'
             ),
            
             array(
                'heading'     => esc_html__( 'Link','yog'),
                'type'        => 'vc_link',
                'value'       => '',
                'param_name'  => 'yog_link'
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
|				Flipmart:  Gym Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Gym Slider', 'yog'),
      'base'        => 'yog_gym_hero_sections',
      'class'       => 'icon_yog_gym_hero_section',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Gym', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_gym_hero_section',
                'params'     => array(
                    
                     array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_heading'
                    ),
                     
                    array(
                        'heading'     => esc_html__( 'Sub Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_sub_heading',
                        'description' => yog_pattren_description()
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
|				Flipmart:  Gym Tab Section Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Gym Tab', 'yog'),
      'base'        => 'yog_gym_tabs',
      'class'       => 'icon_yog_gym_tabs',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Gym', 'yog'),
      'description' => esc_html__( 'Insert Tab', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading'
            ),
             
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_sub_heading'
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_gym_tab',
                'params'     => array(
                    
                     array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_heading'
                     ),
                     
                     array(
                        'type'       => 'param_group',
                        'value'      => '',
                        'param_name' => 'yog_gym_tab_list',
                        'params'     => array(
                            
                             array(
                                'heading'     => esc_html__( 'Heading','yog'),
                                'type'        => 'textfield',
                                'value'       => '',
                                'param_name'  => 'yog_heading'
                             ),
                             
                             array(
                                'heading'     => esc_html__( 'Sub Heading','yog'),
                                'type'        => 'textfield',
                                'value'       => '',
                                'param_name'  => 'yog_sub_heading'
                             ),
                             
                             array(
                                'heading'     => esc_html__( 'Time','yog'),
                                'type'        => 'textfield',
                                'value'       => '',
                                'param_name'  => 'yog_time'
                             ),
                             
                             array(
                                'heading'     => esc_html__( 'Image','yog'),
                                'type'        => 'attach_image',
                                'value'       => '',
                                'param_name'  => 'yog_img',
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
|				Flipmart :  Gym Testimonial CPT Module / Elements Shortcode			|						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Gym Testimonial', 'yog'),
      'base'        => 'yog_gym_testimonial',
      'class'       => 'icon_yog_gym_testimonial',
      'icon'	    => 'icon_yog_gym_testimonial',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Gym', 'yog'),
      'description' => esc_html__( 'Insert User Testimonial.', 'yog' ),
      'params'      => array(
          
          array(
            'heading'     => esc_html__( 'Heading','yog'),
            'type'        => 'textfield',
            'admin_label' => true,
            'value'       => '',
            'param_name'  => 'yog_heading'
          ),
         
          array(
            'heading'     => esc_html__( 'Sub Heading','yog'),
            'type'        => 'textfield',
            'value'       => '',
            'param_name'  => 'yog_sub_heading'
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

/*-------------------------------------------------------------------------------
|				Flipmart :  Gym Trainers Section Module / Elements Shortcode			|						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Gym Trainers', 'yog'),
      'base'        => 'yog_gym_trainers',
      'class'       => 'icon_yog_gym_trainers',
      'icon'	    => 'icon_yog_gym_trainers',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Gym', 'yog'),
      'description' => esc_html__( 'Show Trainers', 'yog' ),
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
            'heading'     => esc_html__( 'Image','yog'),
            'type'        => 'attach_image',
            'value'       => '',
            'param_name'  => 'yog_img',
          ),
          
          array(
            'heading'     => esc_html__( 'Left Heading','yog'),
            'type'        => 'textfield',
            'admin_label' => true,
            'value'       => '',
            'param_name'  => 'yog_left_heading'
          ),
        
          array(
            'heading'     => esc_html__( 'Left Sub Heading','yog'),
            'type'        => 'textfield',
            'value'       => '',
            'param_name'  => 'yog_left_sub_heading',
          ),
          
          array(
            'heading'     => esc_html__( 'Left Content','yog'),
            'type'        => 'textarea',
            'value'       => '',
            'param_name'  => 'yog_left_content',
          ),
          
          array(
            'heading'     => esc_html__( 'Left Button','yog'),
            'type'        => 'vc_link',
            'value'       => '',
            'param_name'  => 'yog_left_link'
          ),
          
          array(
            'heading'     => esc_html__( 'Right Heading','yog'),
            'type'        => 'textfield',
            'admin_label' => true,
            'value'       => '',
            'param_name'  => 'yog_right_heading'
          ),
        
          array(
            'heading'     => esc_html__( 'Right Sub Heading','yog'),
            'type'        => 'textfield',
            'value'       => '',
            'param_name'  => 'yog_right_sub_heading',
          ),
          
          array(
            'heading'     => esc_html__( 'Right Content','yog'),
            'type'        => 'textarea',
            'value'       => '',
            'param_name'  => 'yog_right_content',
          ),
          
          array(
            'heading'     => esc_html__( 'Right Button','yog'),
            'type'        => 'vc_link',
            'value'       => '',
            'param_name'  => 'yog_right_link'
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
|				Flipmart :  Gym Yoga Section Module / Elements Shortcode			|						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Gym Yoga Section', 'yog'),
      'base'        => 'yog_gym_yoga',
      'class'       => 'icon_yog_gym_yoga',
      'icon'	    => 'icon_yog_gym_yoga',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Gym', 'yog'),
      'description' => esc_html__( 'Show Yoga', 'yog' ),
      'params'      => array(
          
          array(
            'heading'     => esc_html__( 'Heading','yog'),
            'type'        => 'textfield',
            'admin_label' => true,
            'value'       => '',
            'param_name'  => 'yog_heading',
          ),
          
          array(
            'heading'     => esc_html__( 'Left Heading','yog'),
            'type'        => 'textfield',
            'admin_label' => true,
            'value'       => '',
            'param_name'  => 'yog_left_heading'
          ),
        
          array(
            'heading'     => esc_html__( 'Left Price','yog'),
            'type'        => 'textfield',
            'value'       => '',
            'param_name'  => 'yog_left_price',
          ),
          
          array(
            'heading'     => esc_html__( 'Left Content','yog'),
            'type'        => 'textarea',
            'value'       => '',
            'param_name'  => 'yog_left_content',
          ),
          
          array(
            'heading'     => esc_html__( 'Left Image','yog'),
            'type'        => 'attach_image',
            'value'       => '',
            'param_name'  => 'yog_left_img',
          ),
          
          array(
            'heading'     => esc_html__( 'Right Heading','yog'),
            'type'        => 'textfield',
            'admin_label' => true,
            'value'       => '',
            'param_name'  => 'yog_right_heading'
          ),
        
          array(
            'heading'     => esc_html__( 'Right Price','yog'),
            'type'        => 'textfield',
            'value'       => '',
            'param_name'  => 'yog_right_price',
          ),
          
          array(
            'heading'     => esc_html__( 'Right Content','yog'),
            'type'        => 'textarea',
            'value'       => '',
            'param_name'  => 'yog_right_content',
          ),
          
          array(
            'heading'     => esc_html__( 'Right Image','yog'),
            'type'        => 'attach_image',
            'value'       => '',
            'param_name'  => 'yog_right_img',
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
|				Flipmart:  Gym Welcome Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Gym Welcome', 'yog'),
      'base'        => 'yog_gym_welcome',
      'class'       => 'icon_yog_gym_welcome',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Gym', 'yog'),
      'description' => esc_html__( 'Insert Welcome', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading'
            ),
            
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_sub_heading'
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
                'param_name' => 'yog_gym_list',
                'params'     => array(
                    
                     array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_heading'
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
                    )
                )
             ),
             
             array(
                'heading'     => esc_html__( 'Right Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_right_img',
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
|				Flipmart: Gym Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_gym_hero_sections($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_gym_hero_section'  => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //Hero Items
        $yog_hero = (array) vc_param_group_parse_atts( $yog_gym_hero_section );
        
        if( $yog_hero ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            //Scripts
            wp_enqueue_style( 'slider' );
            wp_enqueue_scripts( 'sliderjs' );
            ?>
            <div class="body-content gymshopslider" id="top-banner-and-menu" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
               <div class="slider gs-slider">
                  <div class="demo-cont sliderwidth">
                     <div class="fnc-slider example-slider">
                        <div class="fnc-slider__slides">
                             <?php 
                                $yog_counter = 1;
                                foreach( $yog_hero as $yog_item ){
                                    
                                    //Background
                                    $yog_bg = ( isset( $yog_item['yog_bg'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_item['yog_bg'] ) .');"' : '';
                                    if( $yog_counter == 1 ):
                                    ?>
                                    <div class="fnc-slide m--blend-green m--active-slide" <?php echo $yog_bg; ?>>
                                        <div class="fnc-slide__inner">
                                           <div class="fnc-slide__mask">
                                              <div class="fnc-slide__mask-inner"></div>
                                           </div>
                                           <div class=" col-sm-6 fnc-slide__content">
                                              <?php if( $yog_item['yog_img'] ): ?>  
                                                 <h4><img src="<?php echo wp_get_attachment_url( $yog_item['yog_img'] ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ); ?>"/></h4>
                                              <?php endif; ?>
                                              <div class="header-content">
                                                 <?php 
                                                   //Heading
                                                   if( isset( $yog_item['yog_heading'] ) ){
                                                     echo '<h1>'. $yog_item['yog_heading'] .'</h1>';
                                                   }
                                                  
                                                   //Sub Heading
                                                   if( isset( $yog_item['yog_sub_heading'] ) ){
                                                     echo '<h2>'. yog_highlight_it( $yog_item['yog_sub_heading'] ) .'</h2>';
                                                   }
                                                  
                                                   //Content
                                                   if( isset( $yog_item['yog_content'] ) ){
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
                                                   
                                                    echo '<p><a ' . $attributes . '>'. esc_html( trim( $yog_link['title'] ) ) .' <i class="fa fa-long-arrow-right"></i></a></p>';
                                                    
                                                   }
                                                 ?>
                                              </div>
                                           </div>
                                        </div>
                                    </div>
                                   <?php
                                   else:
                                   ?>
                                   <div class="fnc-slide m--blend-dark" <?php echo $yog_bg; ?>>
                                       <div class="fnc-slide__inner">
                                           <div class="fnc-slide__mask">
                                              <div class="fnc-slide__mask-inner"></div>
                                           </div>
                                           <div class=" col-sm-6 fnc-slide__content">
                                              <?php if( $yog_item['yog_img'] ): ?>  
                                                 <h4><img src="<?php echo wp_get_attachment_url( $yog_item['yog_img'] ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ); ?>"/></h4>
                                              <?php endif; ?>
                                              <div class="header-content">
                                                 <?php 
                                                   //Heading
                                                   if( isset( $yog_item['yog_heading'] ) ){
                                                     echo '<h1>'. $yog_item['yog_heading'] .'</h1>';
                                                   }
                                                  
                                                   //Sub Heading
                                                   if( isset( $yog_item['yog_sub_heading'] ) ){
                                                     echo '<h2>'. yog_highlight_it( $yog_item['yog_sub_heading'] ) .'</h2>';
                                                   }
                                                  
                                                   //Content
                                                   if( isset( $yog_item['yog_content'] ) ){
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
                                                   
                                                    echo '<p><a ' . $attributes . '>'. esc_html( trim( $yog_link['title'] ) ) .' <i class="fa fa-long-arrow-right"></i></a></p>';
                                                    
                                                   }
                                                 ?>
                                              </div>
                                           </div>
                                       </div>
                                   </div>
                                   <?php
                                   endif;
                                   
                                   //Increments
                                   $yog_counter++;
                                }
                             ?>
                        </div>
                        <nav class="fnc-nav">
                            <div class="fnc-nav__bgs">
                                <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
                                <div class="fnc-nav__bg m--navbg-dark"></div>
                                <div class="fnc-nav__bg m--navbg-red"></div>
                                <div class="fnc-nav__bg m--navbg-blue"></div>
                            </div>
                            <div class="fnc-nav__controls">
                                <button class="fnc-nav__control">
                                    <i class="fa fa-linux ptPlan" aria-hidden="true"></i> 
                                    <span class="fnc-nav__control-progress"></span>
                                </button>
                                <button class="fnc-nav__control">
                                    <i class="fa fa-windows ptPlan" aria-hidden="true"></i>
                                    <span class="fnc-nav__control-progress"></span>
                                </button>
                                <button class="fnc-nav__control">
                                    <i class="fa fa-server ptPlan" aria-hidden="true"></i>
                                    <span class="fnc-nav__control-progress"></span>
                                </button>
                                <button class="fnc-nav__control">
                                    <i class="fa fa-globe ptPlan" aria-hidden="true"></i>
                                    <span class="fnc-nav__control-progress"></span>
                                </button>
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
   
   add_shortcode( 'yog_gym_hero_sections', 'yog_gym_hero_sections' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Gym Welcome  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_gym_welcome($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_content'     => '',
            'yog_gym_list'    => '',
            'yog_right_img'   => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //List Items
        $yog_lists = (array) vc_param_group_parse_atts( $yog_gym_list );
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'welcome-section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <div class="row">
                <div class="col-sm-8 main-content">
                   <?php 
                       //Heading
                       if( $yog_heading ){
                         echo '<h1>'. $yog_heading .'</h1>';
                       }
                       
                       //Sub Heading
                       if( $yog_sub_heading ){
                         echo '<h2>'. $yog_sub_heading .'</h2>';
                       }
                       
                       //Content
                       if( $yog_content ){
                         echo '<p>'. $yog_content .'</p>';
                       }
                       
                       if( $yog_lists ){
                          foreach( $yog_lists as $yog_item ){
                             ?>
                            <ul>
                                <li>
                                    <?php if( $yog_item['yog_img'] ): ?>  
                                        <div class="icon"><img src="<?php echo wp_get_attachment_url( $yog_item['yog_img'] ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ); ?>"/></div>
                                    <?php endif; ?>
                                    <div class="icon-des">
                                       <?php 
                                          //Heading
                                           if( $yog_item['yog_heading'] ){
                                             echo '<h1>'. $yog_item['yog_heading'] .'</h1>';
                                           }
                                           
                                           //Sub Heading
                                           if( $yog_item['yog_content'] ){
                                             echo '<p>'. $yog_item['yog_content'] .'</p>';
                                           }
                                       ?>
                                    </div>
                                </li>
                            </ul><div class="clearfix"></div>
                             <?php
                          }
                       }
                   ?>
                </div>
                <div class="col-sm-4 welcome-image">
                    <?php if( $yog_right_img ): ?>  
                        <img src="<?php echo wp_get_attachment_url( $yog_right_img ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_right_img, '_wp_attachment_image_alt', true) ); ?>"/>
                    <?php endif; ?>
                </div>
             </div>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_gym_welcome', 'yog_gym_welcome' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Gym Membership  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_gym_membership($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_link'      => '',
            'yog_img'       => '',
            'yog_animation' => '',
            'yog_delay'     => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'membership-section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
           <div class="container">
                <div class="row">
                  <div class="col-sm-6 membership-content-section">
                     <div class="second">
                        <?php 
                            //Content
                            echo $content;
                            
                            //Link
                            $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                            if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                    
                                $attributes   = array();
                                $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                            	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                            	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                $attributes   = implode( ' ', $attributes );
                               
                                echo '<p><a ' . $attributes . ' class="membership-btn">'. esc_html( trim( $yog_link['title'] ) ) .' <i class="fa fa-long-arrow-right"></i></a></p>';
                                
                            }
                        ?>
                     </div>
                  </div>
                  <div class="col-sm-6 membership-content-img"></div>
                  <?php if( $yog_img ): ?>  
                     <div class="demoimg"><img src="<?php echo wp_get_attachment_url( $yog_img ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_img, '_wp_attachment_image_alt', true) ); ?>"/></div>
                  <?php endif; ?>
               </div>
           </div>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_gym_membership', 'yog_gym_membership' );
   
/*--------------------------------------------------------------------------------
|				Flipmart:  Gym Testimonial CPT Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_gym_testimonial($atts, $content = null ){

		$yog_output  = '';
        
		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_limit'       => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

		ob_start();
        
        //Get Post Date.
        $yog_post_query = yog_post_query( array( 'post_type' => 'testimonial', 'posts_per_page' => $yog_limit ) );

        if( $yog_post_query->have_posts() ):
        
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            $yog_content = ''; $yog_counter = 0;
            while ( $yog_post_query->have_posts() ) {
                $yog_post_query->the_post();
                
                //Class
                $yog_class = ( $yog_counter == 0 )? ' active' : '';
                
               //Content
                $yog_content .=
                '<div class="item'. $yog_class .'">
                  <div class="profile-circle">
                     '. get_the_post_thumbnail( get_the_ID(), array( 100, 100 ), array( 'class' => 'img-circle' ) ) .'
                  </div>
                  <i class="fa fa-quote-right fa-4x"></i>
                  <blockquote>
                     <p>'. get_post_meta( get_the_ID(), 'testimonial-content', true ) .'</p>
                     <p>-'. get_the_title() .'</p>
                  </blockquote>
                </div>';
                
                //Counter Increments
                $yog_counter++;
            }
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'testimonial-section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php 
                    //Heading
                    if( $yog_heading ){
                       echo '<h1>'. $yog_heading .'</h1>'; 
                    }
                    
                    //Sub Heading
                    if( $yog_sub_heading ){
                       echo '<h2>'. $yog_sub_heading .'</h2>'; 
                    }
               ?> 
               <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div id="carousel">
                     <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="1500">
                        <div class="carousel-inner testimonial-content">
                           <?php echo $yog_content; ?>
                        </div>
                     </div>
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
   
   add_shortcode( 'yog_gym_testimonial', 'yog_gym_testimonial' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Gym Heading / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_gym_heading($atts, $content = null ){

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
                    echo '<h2>'. $yog_sub_heading .'</h2>';
                }
            ?>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_gym_heading', 'yog_gym_heading' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Gym Trainers / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_gym_trainers($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'           => '',
            'yog_sub_heading'       => '',
            'yog_left_heading'      => '',
            'yog_left_sub_heading'  => '',
            'yog_left_content'      => '',
            'yog_left_link'         => '',
            'yog_right_heading'     => '',
            'yog_right_sub_heading' => '',
            'yog_right_content'     => '',
            'yog_right_link'        => '',
            'yog_img'               => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'trainers-section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
          <div class="container">
            <div class="header-content">
                 <?php 
                    //Heading
                    if( $yog_heading ){
                       echo '<h1>'. $yog_heading .'</h1>'; 
                    }
                    
                    //Sub Heading
                    if( $yog_sub_heading ){
                       echo '<h1>'. $yog_sub_heading .'</h1>'; 
                    }
                 ?> 
              </div>
              <div class="gray-bg row">
                 <div class="col-sm-6 trainers-content">
                    <div class="trainers-content-inner">
                       <?php 
                           //Heading
                           if( $yog_left_heading ){
                              echo '<h1>'. $yog_left_heading .'</h1>'; 
                           }
                            
                           //Sub Heading
                           if( $yog_left_sub_heading ){
                              echo '<h2>'. $yog_left_sub_heading .'</h2>'; 
                           }
                           
                           //Content
                           if( $yog_left_content ){
                              echo '<p>'. $yog_left_content .'</p>'; 
                           }
                           
                           //Link
                           $yog_link = isset( $yog_left_link )? vc_build_link( $yog_left_link ) : '';
                           if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                
                                $attributes   = array();
                                $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                            	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                            	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                $attributes   = implode( ' ', $attributes );
                               
                                echo '<div class="trainers-button"><a ' . $attributes . '><button>'. esc_html( trim( $yog_link['title'] ) ) .'</button></a></div>';
                                
                           }
                       ?> 
                    </div>
                 </div>
                 <?php if( $yog_img ): ?>  
                     <div class="trainers-img"><img src="<?php echo wp_get_attachment_url( $yog_img ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_img, '_wp_attachment_image_alt', true) ); ?>"/></div>
                  <?php endif; ?>
                 <div class="col-sm-6 trainers-content trainers-left">
                    <div class="trainers-content-inner">
                       <?php 
                           //Heading
                           if( $yog_right_heading ){
                              echo '<h1>'. $yog_right_heading .'</h1>'; 
                           }
                            
                           //Sub Heading
                           if( $yog_right_sub_heading ){
                              echo '<h2>'. $yog_right_sub_heading .'</h2>'; 
                           }
                           
                           //Content
                           if( $yog_right_content ){
                              echo '<p>'. $yog_right_content .'</p>'; 
                           }
                           
                           //Link
                           $yog_link = isset( $yog_right_link )? vc_build_link( $yog_right_link ) : '';
                           if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                
                                $attributes   = array();
                                $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                            	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                            	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                $attributes   = implode( ' ', $attributes );
                               
                                echo '<div class="trainers-button-left"><a ' . $attributes . '><button>'. esc_html( trim( $yog_link['title'] ) ) .'</button></a></div>';
                                
                           }
                       ?> 
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
   
   add_shortcode( 'yog_gym_trainers', 'yog_gym_trainers' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Gym Yoga / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_gym_yoga($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'           => '',
            'yog_left_heading'      => '',
            'yog_left_sub_heading'  => '',
            'yog_left_content'      => '',
            'yog_left_price'        => '',
            'yog_left_img'          => '',
            'yog_right_heading'     => '',
            'yog_right_sub_heading' => '',
            'yog_right_content'     => '',
            'yog_right_price'       => '',
            'yog_right_img'         => '', 
            'yog_img'               => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'boxing-section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
           <div class="row">
              <div class=" col-sm-6 boxing-content-left">
                 <?php 
                   //Heading
                   if( $yog_left_heading ){
                      echo '<h1>'. $yog_left_heading .'</h1>'; 
                   }
                    
                   //Content
                   if( $yog_left_content ){
                      echo '<p>'. $yog_left_content .'</p>'; 
                   }
                   
                   //Price
                   if( $yog_left_price ){
                      echo '<h2>'. $yog_left_price .'</h2>'; 
                   }
                   
                   //Image
                   if( $yog_left_img ){
                       echo '<img src="'. wp_get_attachment_url( $yog_left_img ) .'" alt="'. esc_attr( get_post_meta( $yog_left_img, '_wp_attachment_image_alt', true) ) .'"/>'; 
                   }
                 ?> 
              </div>
              <div class="divider"></div>
              <div class=" col-sm-6 boxing-content-right">
                 <?php 
                   //Heading
                   if( $yog_right_heading ){
                      echo '<h1>'. $yog_right_heading .'</h1>'; 
                   }
                    
                   //Content
                   if( $yog_right_content ){
                      echo '<p>'. $yog_right_content .'</p>'; 
                   }
                   
                   //Price
                   if( $yog_right_price ){
                      echo '<h2>'. $yog_right_price .'</h2>'; 
                   }
                   
                   //Image
                   if( $yog_right_img ){
                       echo '<img src="'. wp_get_attachment_url( $yog_right_img ) .'" alt="'. esc_attr( get_post_meta( $yog_right_img, '_wp_attachment_image_alt', true) ) .'"/>'; 
                   }
                 ?>
              </div>
              <?php 
                  //Heading
                  if( $yog_heading ){
                    echo '<div class="mid-section"><h1>'. $yog_heading .'</h1></div>';
                  }  
              ?>
          </div>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_gym_yoga', 'yog_gym_yoga' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Gym Tab / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_gym_tabs($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'           => '',
            'yog_sub_heading'       => '',
            'yog_gym_tab'           => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //List Items
        $yog_lists = (array) vc_param_group_parse_atts( $yog_gym_tab );
        
        if( $yog_lists ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'schedule-section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <?php 
                   //Heading
                   if( $yog_heading ){
                      echo '<h1>'. $yog_heading .'</h1>';  
                   } 
                   
                   //Sub Heading
                   if( $yog_sub_heading ){
                      echo '<h2>'. $yog_sub_heading .'</h2>';  
                   }
                   
                   //Content
                   $yog_nav = $yog_content = ''; $yog_counter = 1;
                   foreach( $yog_lists as $yog_list ){
                       
                       //Class 
                       $yog_class = ( $yog_counter == 1 )? ' class="active"' : ''; 
                       
                       //Navigation
                       $yog_nav .= '<li'. $yog_class .'><a data-toggle="tab" href="#tab-'. $yog_counter .'">'. $yog_list['yog_heading'] .'</a></li> '; 
                   
                       //Content 
                       $yog_inner_lists = (array) vc_param_group_parse_atts( $yog_list['yog_gym_tab_list'] );
                       if( $yog_inner_lists ){
                           $yog_inner_content = ''; 
                           foreach( $yog_inner_lists as $yog_item ){
                            
                               $yog_inner_content .= 
                               '<li>
                                   <p><img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt="'. esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ) .'"></p>
                                   <button>'. $yog_item['yog_time'] .'</button>
                                   <h1>'. $yog_item['yog_heading'] .'</h1>
                                   <h2>'. $yog_item['yog_sub_heading'] .'</h2>
                                </li>';
                                
                           }
                           
                           //Class 
                           $yog_class = ( $yog_counter == 1 )? ' in active' : '';
                           
                           //Content
                           $yog_content .= '<div id="tab-'. $yog_counter .'" class="tab-pane fade'. $yog_class .'"><ul>'. $yog_inner_content .'</ul></div>';
                       }
                       
                       $yog_counter++;
                   }
               ?> 
               <ul class="nav nav-tabs">
                  <?php echo $yog_nav; ?>
               </ul>
               <div class="tab-content">
                  <?php echo $yog_content; ?>
               </div>
               <div class="clearfix"></div>
            </div>
            <?php
        
        }
        
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_gym_tabs', 'yog_gym_tabs' );        