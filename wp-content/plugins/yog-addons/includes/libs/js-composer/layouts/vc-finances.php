<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Finances
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 *
 */
/*-------------------------------------------------------------------------------
|				Flipmart:  Finances About Us Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Finances About Us', 'yog'),
      'base'        => 'yog_finances_about',
      'class'       => 'icon_yog_finances_about',
      'icon'	    => 'icon-wpb-ui-custom_about',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Finances', 'yog'),
      'description' => esc_html__( 'Insert about us', 'yog' ),
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
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea_html',
                'value'       => '',
                'param_name'  => 'content',
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
|				Flipmart: Finances Blog Module / Element Map				    |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Finances Blog Posts', 'yog'),
      'base'        => 'yog_finances_blog_posts',
      'class'       => 'icon_yog_finances_blog_posts',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Finances', 'yog'),
      'description' => esc_html__( 'Insert Blog Posts', 'yog' ),
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
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_content',
            ),
          
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
|				Flipmart:  Finances Call Action Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Finances Call Action', 'yog'),
      'base'        => 'yog_finances_cta',
      'class'       => 'icon_yog_finances_cta',
      'icon'	    => 'icon-wpb-ui-custom_cta',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Finances', 'yog'),
      'description' => esc_html__( 'Insert Call Action', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_content',
            ),
            
            array(
                'heading'     => esc_html__( 'Button Link','yog'),
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
|				Flipmart:  Finances Heading Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Finances Heading', 'yog'),
      'base'        => 'yog_finances_heading',
      'class'       => 'icon_yog_finances_heading',
      'icon'	    => 'icon-wpb-ui-custom_heading',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Finances', 'yog'),
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
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_content',
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
|				Flipmart:  Progress Bar Section Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Finances Progress Bar', 'yog'),
      'base'        => 'yog_finances_progress',
      'class'       => 'icon_yog_finances_progress',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Finances', 'yog'),
      'description' => esc_html__( 'Insert Progress Bar', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_finances_progress',
                'params'     => array(
                    
                     array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_heading'
                    ),
                     
                    array(
                        'heading'     => esc_html__( 'Percentage','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_percentage',
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
|				Flipmart:  Finances News Letter Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Finances News Letter', 'yog'),
      'base'        => 'yog_finances_newsletter',
      'class'       => 'icon_yog_finances_newsletter',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Finances', 'yog'),
      'description' => esc_html__( 'Insert News Letter', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_heading'
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
|				Flipmart:  Finances Product Section Module / Element Map		     |						
--------------------------------------------------------------------------------*/

    vc_map( array(
    	  'name'        => esc_html__('Finances Products', 'yog'),
    	  'base'        => 'yog_finances_products',
    	  'class'       => 'icon_yog_finances_products',
    	  'icon'	    => 'icon-wpb-ui-accordion',
    	  'weight'      => 101,
    	  'category'    => esc_html__('Flipmart Finances', 'yog'),
    	  'description' => esc_html__( 'Insert Products', 'yog' ),
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
                    'heading'     => esc_html__( 'Content','yog'),
                    'type'        => 'textarea',
                    'value'       => '',
                    'param_name'  => 'yog_content',
                ),
            
                array(
                    'type'       => 'param_group',
                    'value'      => '',
                    'param_name' => 'yog_finances_product',
                    'params'     => array(
                        
                        array(
            				'type'        => 'autocomplete',
            				'heading'     => esc_html__( 'Select identificator', 'yog' ),
            				'param_name'  => 'id',
            				'description' => esc_html__( 'Input product ID or product SKU or product title to see suggestions', 'yog' ),
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
|				Flipmart:  Finances Slider Section Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Finances Slider', 'yog'),
      'base'        => 'yog_finances_hero_sections',
      'class'       => 'icon_yog_finances_hero_section',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Finances', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_finances_hero_section',
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
                        'heading'     => esc_html__( 'Button Light','yog'),
                        'type'        => 'vc_link',
                        'value'       => '',
                        'param_name'  => 'yog_link_light',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Button Dark','yog'),
                        'type'        => 'vc_link',
                        'value'       => '',
                        'param_name'  => 'yog_link_dark',
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
|				Flipmart:  Finances Services Module / Element Map		     |						
--------------------------------------------------------------------------------*/

    vc_map( array(
    	  'name'        => esc_html__('Finances Services', 'yog'),
    	  'base'        => 'yog_finances_services',
    	  'class'       => 'icon_yog_finances_services',
    	  'icon'	    => 'icon-wpb-ui-accordion',
    	  'weight'      => 101,
    	  'category'    => esc_html__('Flipmart Finances', 'yog'),
    	  'description' => esc_html__( 'Insert Services', 'yog' ),
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
                'param_name' => 'yog_finances_service',
                'params'     => array(
                    
                     array(
                        'heading'     => esc_html__( 'Service','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_service'
                     ),
                     
                     array(
                        'heading'     => esc_html__( 'Service Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_img'
                     ),
                     
                     array(
                        'heading'     => esc_html__( 'Description','yog'),
                        'type'        => 'textarea',
                        'value'       => '',
                        'param_name'  => 'yog_description'
                     ),
                     
                     array(
                        'heading'     => esc_html__( 'Description Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_desc_img'
                     ),
                     
                     array(
                        'heading'     => esc_html__( 'Service Link','yog'),
                        'type'        => 'vc_link',
                        'value'       => '',
                        'param_name'  => 'yog_link'
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
|				Flipmart :  Finances Testimonial CPT Module / Elements Shortcode			|						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Finances Testimonial', 'yog'),
      'base'        => 'yog_finances_testimonial',
      'class'       => 'icon_yog_finances_testimonial',
      'icon'	    => 'icon_yog_finances_testimonial',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Finances', 'yog'),
      'description' => esc_html__( 'Insert User Testimonial.', 'yog' ),
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
|				Flipmart: Finances About Us Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_finances_about($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_animation'   => '',
            'yog_delay'       => '',
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'about-us', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <?php 
                //Heading
                if( $yog_heading ){
                    echo '<p>'. $yog_heading .'</p>';
                }
                
                //Sub Heading
                if( $yog_sub_heading ){
                    echo '<h2>'. $yog_sub_heading .'</h2><div class="border-bottom"></div>';
                }
                
                //Content
                echo $content;
            ?>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_finances_about', 'yog_finances_about' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Finances Blog Post / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_finances_blog_posts($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_content'     => '',
            'yog_column'      => '3',
            'yog_limit'       => '-1',
            'taxonomie'       => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
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
            <div <?php yog_helper()->attr( false, array( 'class' => 'blog-posts', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) );  ?>>
                <div class="heading-content clearfix">
                   <?php 
                        //Heading
                        if( $yog_heading ){
                            echo '<p>'. $yog_heading .'</p>';
                        }
                        
                        //Sub Heading
                        if( $yog_sub_heading ){
                            echo '<h2>'. $yog_sub_heading .'</h2><div class="border-bottom border-bottom-middle"></div>';
                        }
                        
                        //Content
                        if( $yog_content ){
                            echo '<p>'. $yog_content .'</p>';
                        }
                    ?>
                </div>
                <?php
                    $yog_counter = 0;
                    while ( $yog_post_query->have_posts() ) {
                        $yog_post_query->the_post();
                        
                        //Counter Increments
                        $yog_counter++;
                        
                        //Wrapper Start
                        if( $yog_counter == 1 ){
                            echo '<div class="row">';
                            $yog_close = true;
                        }
                        ?>
                        <div class="col-sm-4 <?php echo yog_get_column( $yog_column ); ?>">
                          <?php if( has_post_thumbnail() ){ ?>
                              <div class="blog-row">
                                 <div class="blog-img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?>
                                    </a>    
                                 </div>
                              </div>
                          <?php } ?>
                          <div class="blog-description">
                             <?php 
                                //Date
                                printf( '<p class="date">%s <span>%s</span></p>', get_the_date( 'F' ), get_the_date( 'd, Y' ) );
                                
                                //Title
                                the_title( '<a href="'. get_permalink() .'">', '</a>' );
                                
                                //Excerpt
                                echo yog_get_excerpt( array( 'yog_link_to_post' => false ) );
                                
                             ?>
                          </div>
                        </div>
                        <?php
                        
                        //Wrapper End
                        if( $yog_counter == $yog_column ){
                            echo '</div>';
                            $yog_close = false;
                        }
                    }
                    
                    //Wrapper End
                    if( $yog_close ){
                        echo '</div>';
                    }
                    
                    //Reset Loop Query
                    wp_reset_postdata();
                ?>
            </div>
            <?php
        }
            
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_finances_blog_posts', 'yog_finances_blog_posts' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Finances Call Action / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_finances_cta($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_content'    => '',
            'yog_link'       => '',
            'yog_animation'  => '',
            'yog_delay'      => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'call-action', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
          <div class="row">
               <div class="col-sm-8">
                  <p><?php echo $yog_content; ?></p>
               </div>
               <div class="col-sm-4 call-action-btn">
                  <?php 
                      //Link  
                      $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                      if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                        
                        $attributes   = array();
                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                        $attributes   = implode( ' ', $attributes );
                       
                        echo '<a ' . $attributes . ' class="image">'. trim( $yog_link['title'] ) .' <i class="fa fa-long-arrow-right"></i></a>';
                        
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
   
   add_shortcode( 'yog_finances_cta', 'yog_finances_cta' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Finances Heading / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_finances_heading($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_content'     => '',
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
                    echo '<p>'. $yog_heading .'</p>';
                }
                
                //Sub Heading
                if( $yog_sub_heading ){
                    echo '<h2>'. $yog_sub_heading .'</h2><div class="border-bottom border-bottom-middle"></div>';
                }
                
                //Content
                if( $yog_content ){
                    echo '<p>'. $yog_content .'</p>';
                }
            ?>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_finances_heading', 'yog_finances_heading' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Finances Progress Bar / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_finances_progress($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_finances_progress' => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //Progress Items
        $yog_progress = (array) vc_param_group_parse_atts( $yog_finances_progress );
        
        if( $yog_progress ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'progress-content', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
            
                foreach( $yog_progress as $yog_item ){
                    
                    ?>
                    <h3 class="progress-title"><?php echo $yog_item['yog_heading']; ?>  <span><?php echo $yog_item['yog_percentage']; ?>%</span></h3>
                    <div class="progress">
                       <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width:<?php echo $yog_item['yog_percentage']; ?>%;"></div>
                    </div>
                    <?php
                    
                }
            
            echo '</div>';
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_finances_progress', 'yog_finances_progress' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Finances News Letter / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_finances_newsletter($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'   => '',
            'yog_form_id'   => '',
            'yog_animation' => '',
            'yog_delay'     => ''
		), $atts));

        ob_start();
        
        if( $yog_form_id ):
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'newsletter', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <div class="row">
               <div class="col-sm-5">
                  <?php 
                     //Heading
                     if( $yog_heading ){
                        echo '<h1>'. $yog_heading .'</h1>';
                     }
                  ?> 
               </div>
               <div class="col-sm-6 newsletter-email">
                  <div class="">
                     <?php 
                        //Shortcode
                        echo do_shortcode( '[mc4wp_form id="'. $yog_form_id .'"]' );
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
   
   add_shortcode( 'yog_finances_newsletter', 'yog_finances_newsletter' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Finances Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_finances_hero_sections($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_finances_hero_section' => '',
            'yog_animation'             => '',
            'yog_delay'                 => ''
		), $atts));

        ob_start();
        
        //Slider Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_finances_hero_section );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div class="body-content finance-slider" id="top-banner-and-menu" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm ">
                 <?php 
                    foreach( $yog_items as $yog_item ){
                        
                        //Background
                        $yog_bg = ( isset( $yog_item['yog_bg'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_item['yog_bg'] ) .');"' : '';
                        ?>
                        <div class="item" <?php echo $yog_bg; ?>>
                          <div class="container-fluid">
                             <div class="container">
                                <div class="caption bg-color vertical-center">
                                   <div class="slider-header fadeInDown-1">
                                      <?php 
                                          //Heading
                                          if( isset( $yog_item['yog_heading'] ) ){
                                             echo '<h1>'. $yog_item['yog_heading'] .'</h1>';
                                          }
                                          
                                          //Sub Heading
                                          if( isset( $yog_item['yog_sub_heading'] ) ){
                                             echo '<h2>'. yog_highlight_it( $yog_item['yog_sub_heading'] ) .'</h2>';
                                          }
                                          
                                      ?>
                                   </div>
                                   <div class="big-subtext fadeInDown-1">
                                      <?php 
                                        if( isset( $yog_item['yog_content'] ) ){
                                           echo '<p>'. $yog_item['yog_content'] .'</p>';
                                        }
                                      ?>
                                   </div>
                                   <div class="button-holder fadeInDown-3">
                                      <?php 
                                         //Link
                                         $yog_link = isset( $yog_item['yog_link_light'] )? vc_build_link( $yog_item['yog_link_light'] ) : '';
                                         if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                    
                                            $attributes   = array();
                                            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                            $attributes   = implode( ' ', $attributes );
                                           
                                            echo '<a ' . $attributes . ' class="btn-lg btn btn-uppercase btn-primary shop-now-button">'. esc_html( trim( $yog_link['title'] ) ) .' <i class="fa fa-long-arrow-right"></i></a> ';
                                            
                                         }
                                         
                                         //Link
                                         $yog_dark_link = isset( $yog_item['yog_link_dark'] )? vc_build_link( $yog_item['yog_link_dark'] ) : '';
                                         if ( isset( $yog_dark_link['url'] ) && strlen( $yog_dark_link['url'] ) > 0  ) {
                                    
                                            $attributes   = array();
                                            $attributes[] = 'href="' . esc_url( trim( $yog_dark_link['url'] ) ) . '"';
                                        	$attributes[] = 'title="' . esc_attr( trim( $yog_dark_link['title'] ) ) . '"';
                                        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_dark_link['target'] ) > 0 ? $yog_dark_link['target'] : '_self' ) ) . '"';
                                            $attributes   = implode( ' ', $attributes );
                                           
                                            echo '<a ' . $attributes . ' class="btn-lg btn btn-uppercase btn-primary shop-now-button">'. esc_html( trim( $yog_link['title'] ) ) .' <i class="fa fa-long-arrow-right"></i></a>';
                                            
                                         }
                                      ?>
                                   </div>
                                </div>
                                <?php if( $yog_item['yog_img'] ): ?>  
                                     <div class="slide-img-right"><img src="<?php echo esc_url( wp_get_attachment_url( $yog_item['yog_img'] ) ); ?>" alt="" /></div>
                                <?php endif; ?>
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
   
   add_shortcode( 'yog_finances_hero_sections', 'yog_finances_hero_sections' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Finances Product Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_finances_products($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'          => '',
            'yog_sub_heading'      => '',
            'yog_content'          => '',
            'yog_finances_product' => '',
            'yog_animation'        => '',
            'yog_delay'            => ''
		), $atts));

        ob_start(); 
        
        //Product Sections Items
        $yog_finances_product = (array) vc_param_group_parse_atts( $yog_finances_product );
        
        if( $yog_finances_product ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'price-table', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) );  ?>>
                <div class="heading-content clearfix">
                   <?php 
                        //Heading
                        if( $yog_heading ){
                            echo '<p>'. $yog_heading .'</p>';
                        }
                        
                        //Sub Heading
                        if( $yog_sub_heading ){
                            echo '<h2>'. $yog_sub_heading .'</h2><div class="border-bottom border-bottom-middle"></div>';
                        }
                        
                        //Content
                        if( $yog_content ){
                            echo '<p>'. $yog_content .'</p>';
                        }
                    ?>
                </div>
                <div id="product-tabs-slider" class="outer-top-xs product-slider">
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="3">
                        <?php 
                            foreach( $yog_finances_product as $yog_item ){
                    
                                //Product
                                $product = wc_get_product( $yog_item['id'] );
                                ?>
                                <div class="item item-carousel">
                                  <div class="products">
                                    <div class="price-rate">
                                        <h2><?php echo $product->get_price_html(); ?></h2>
                                    </div>
                                    <div class="product price-content">
                                      <h3><?php echo $product->get_title(); ?></h3>
                                      <p><?php echo $product->get_description(); ?></p>
                                      <div class="price-btn">
                                         <?php 
                                              echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                                                	sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
                                                		esc_url( $product->add_to_cart_url() ),
                                                		esc_attr( 1 ),
                                                		esc_attr( 'button' ),
                                                		'',
                                                        esc_html__( 'Add Cart', 'yog' )
                                                	),
                                                $product );
                                         ?>
                                      </div>
                                    </div>
                                  </div> 
                                </div>
                                <?php
                            }
                        
                            //Reset Query
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }
            
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_finances_products', 'yog_finances_products' ); 
   
/*--------------------------------------------------------------------------------
|				Flipmart: Finances Services / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_finances_services($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_column'            => '3',
            'yog_finances_service'  => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //Services Items
        $yog_finances_service = (array) vc_param_group_parse_atts( $yog_finances_service );
        
        if( $yog_finances_service ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'services', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php
                    $yog_counter = 0; 
                    foreach( $yog_finances_service as $yog_item ){
                        
                        //Counter Increments
                        $yog_counter++;
                        
                        //Wrapper Start
                        if( $yog_counter == 1 ){
                            echo '<div class="row">';
                            $yog_close = true;
                        }
                        
                        //Links
                        $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                        $yog_before = $yog_after = '';
                        if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                    
                            $attributes   = array();
                            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                            $attributes   = implode( ' ', $attributes );
                           
                            $yog_before = '<a ' . $attributes . '>';
                            $yog_after  = '</a>';
                            
                        }
                        ?>
                        <div class="col-sm-4 <?php echo yog_get_column( $yog_column ); ?>">
                          <div class="service-content">
                             <?php 
                                if( $yog_item['yog_img'] ): 
                                    printf( '%s<img src="%s" alt="%s"/>%s', $yog_before, wp_get_attachment_url( $yog_item['yog_img'] ), esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ),  $yog_after );
                                endif;
                             ?>
                             <div class="services-des">
                                <?php if( $yog_item['yog_desc_img'] ): ?>  
                                    <div class="service-img"><img src="<?php echo esc_url( wp_get_attachment_url( $yog_item['yog_desc_img'] ) ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_item['yog_desc_img'], '_wp_attachment_image_alt', true) ); ?>" /></div>
                                <?php endif; ?>
                                <div class="services-text">
                                   <?php 
                                      //Heading
                                      if( isset( $yog_item['yog_service'] ) ){
                                         echo '<h3>'. $yog_item['yog_service'] .'</h3>';
                                      }
                                      
                                      //Sub Heading
                                      if( isset( $yog_item['yog_description'] ) ){
                                         echo '<p>'. $yog_item['yog_description'] .'</p>';
                                      }
                                      
                                   ?> 
                                </div>
                             </div>
                          </div>
                       </div>
                       <?php
                       
                       //Wrapper End
                       if( $yog_counter == $yog_column ){
                            echo '</div>';
                            $yog_close = false;
                       }
                    }
                    
                    //Wrapper End
                    if( $yog_close ){
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
   
   add_shortcode( 'yog_finances_services', 'yog_finances_services' );
   
/*--------------------------------------------------------------------------------
|				Flipmart:  Finances Testimonial CPT Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_finances_testimonial($atts, $content = null ){

		$yog_output  = '';
        
		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_content'     => '',
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
            
            $yog_ind = $yog_slides = ''; $yog_counter = 0;
            while ( $yog_post_query->have_posts() ) {
                $yog_post_query->the_post();
                
                //Class
                $yog_class = ( $yog_counter == 0  )? ' active' : '';
                    
                //Content
                $yog_slides .=
                '<div class="item'. $yog_class .'">
                   <div class="row">
                      <div class="col-sm-12 text-center">
                         '. get_the_post_thumbnail( get_the_ID(), array( 100, 100 ), array( 'class' => 'img-circle' ) ) .' 
                      </div>
                      <div class="col-sm-12">
                         <div class="testimonial-content">'. get_post_meta( get_the_ID(), 'testimonial-content', true ) .'</div>
                         <h4>'. get_the_title() .'</h4>
                         <small>'. get_post_meta( get_the_ID(), 'testimonial-company', true ) .'</small>
                      </div>
                   </div>
                </div>';
                
                
                //Counter Increments
                $yog_counter++;
            }
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'testimonials-content', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
               <div class="heading-content clearfix">
                   <?php 
                        //Heading
                        if( $yog_heading ){
                            echo '<p>'. $yog_heading .'</p>';
                        }
                        
                        //Sub Heading
                        if( $yog_sub_heading ){
                            echo '<h2>'. $yog_sub_heading .'</h2><div class="border-bottom border-bottom-middle"></div>';
                        }
                        
                        //Content
                        if( $yog_content ){
                            echo '<p>'. $yog_content .'</p>';
                        }
                    ?>
                </div>
                <div class="clearfix"></div>
                <div class="testimonial">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                      <div class="carousel-inner">
                         <?php echo $yog_slides; ?>
                      </div>
                      <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                      <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                   </div>
                </div>
            </div>
            <?php
        endif;
                
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_finances_testimonial', 'yog_finances_testimonial' );
            