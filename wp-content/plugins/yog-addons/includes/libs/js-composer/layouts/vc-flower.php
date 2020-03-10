<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Flower
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 */
/*-------------------------------------------------------------------------------
|				Flipmart:  Flower Banner Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Flower Banner', 'yog'),
      'base'        => 'yog_flower_banners',
      'class'       => 'icon_yog_flower_banners',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Flower', 'yog'),
      'description' => esc_html__( 'Insert Banner', 'yog' ),
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
                'param_name' => 'yog_flower_banner',
                'params'     => array(
                   
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                    ),
                    
                    array(
                        'heading'     => esc_html__('Animation', 'yog'),
            			'type'        => 'dropdown',
            			'param_name'  => 'yog_heading_animation',
            			'value'       => yog_get_animations(),
            			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
            		),
                     
                    array(
                        'heading'     => esc_html__( 'Delay','yog'),
                        'type'        => 'textfield',
                        'param_name'  => 'yog_heading_delay',
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
            			'param_name'  => 'yog_sub_animation',
            			'value'       => yog_get_animations(),
            			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
            		),
                     
                    array(
                        'heading'     => esc_html__( 'Delay','yog'),
                        'type'        => 'textfield',
                        'param_name'  => 'yog_sub_delay',
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
            			'param_name'  => 'yog_content_animation',
            			'value'       => yog_get_animations(),
            			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
            		),
                     
                    array(
                        'heading'     => esc_html__( 'Delay','yog'),
                        'type'        => 'textfield',
                        'param_name'  => 'yog_content_delay',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Button','yog'),
                        'type'        => 'vc_link',
                        'value'       => '',
                        'param_name'  => 'yog_btn',
                    ),
                    
                    array(
                        'heading'     => esc_html__('Animation', 'yog'),
            			'type'        => 'dropdown',
            			'param_name'  => 'yog_btn_animation',
            			'value'       => yog_get_animations(),
            			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
            		),
                     
                    array(
                        'heading'     => esc_html__( 'Delay','yog'),
                        'type'        => 'textfield',
                        'param_name'  => 'yog_btn_delay',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Background Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_bg',
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
|				Flipmart: Flower Blog Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('Flower Blog Posts', 'yog'),
	  'base'        => 'yog_flower_blog_posts',
	  'class'       => 'icon_yog_flower_blog_posts',
	  'icon'	    => 'icon-wpb-ui-separator',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart Flower', 'yog'),
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
|				Flipmart:  Flower Info Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Flower Info', 'yog'),
      'base'        => 'yog_flower_info',
      'class'       => 'icon_yog_flower_info',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Flower', 'yog'),
      'description' => esc_html__( 'Insert Info', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__('Heading Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_heading_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Heading Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_heading_delay',
            ),
            
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
            ),
            
            array(
                'heading'     => esc_html__('Sub Heading Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_sub_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Sub Heading Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_sub_delay',
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_content',
            ),
            
            array(
                'heading'     => esc_html__('Content Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_content_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Content Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_content_delay',
            ),
            
            array(
                'heading'     => esc_html__( 'Sub Content','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_sub_content',
            ),
            
            array(
                'heading'     => esc_html__('Sub Content Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_sub_content_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Sub Content Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_sub_content_delay',
            ),
             
            array(
                'heading'     => esc_html__('Module Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Module Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
          )
       )
    );

/*-------------------------------------------------------------------------------
|				Flipmart: Flower News Letter Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('Flower News Letter', 'yog'),
	  'base'        => 'yog_flower_news_letter',
	  'class'       => 'icon_yog_flower_news_letter',
	  'icon'	    => 'icon-wpb-ui-separator',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart Flower', 'yog'),
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
|				Flipmart:  Flower Sale Counter Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('Flower Sale Counter', 'yog'),
	  'base'        => 'yog_flower_sale_counter',
	  'class'       => 'icon_yog_flower_sale_counter',
	  'icon'	    => 'icon-wpb-ui-separator',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart Flower', 'yog'),
	  'description' => esc_html__( 'Insert Sale Counter', 'yog' ),
	  'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__('Heading Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_heading_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Heading Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_heading_delay',
            ),
            
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
            ),
            
            array(
                'heading'     => esc_html__('Sub Heading Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_sub_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Sub Heading Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_sub_delay',
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_content',
            ),
            
            array(
                'heading'     => esc_html__('Content Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_content_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Content Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_content_delay',
            ),
            
            array(
                'heading'     => esc_html__( 'Date','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_date',
            ),
            
            array(
                'heading'     => esc_html__('Date Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_date_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Date Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_date_delay',
            ),
            
            array(
                'heading'     => esc_html__( 'Button','yog'),
                'type'        => 'vc_link',
                'value'       => '',
                'param_name'  => 'yog_btn',
            ),
             
            array(
                'heading'     => esc_html__('Module Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Module Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
         )
       )
    );
                
/*-------------------------------------------------------------------------------
|				Flipmart:  Flower Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Flower Slider', 'yog'),
      'base'        => 'yog_flower_sliders',
      'class'       => 'icon_yog_flower_sliders',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Flower', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_flower_sliders',
                'params'     => array(
                   
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                    ),
                    
                    array(
                        'heading'     => esc_html__('Animation', 'yog'),
            			'type'        => 'dropdown',
            			'param_name'  => 'yog_heading_animation',
            			'value'       => yog_get_animations(),
            			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
            		),
                     
                    array(
                        'heading'     => esc_html__( 'Delay','yog'),
                        'type'        => 'textfield',
                        'param_name'  => 'yog_heading_delay',
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
            			'param_name'  => 'yog_sub_animation',
            			'value'       => yog_get_animations(),
            			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
            		),
                     
                    array(
                        'heading'     => esc_html__( 'Delay','yog'),
                        'type'        => 'textfield',
                        'param_name'  => 'yog_sub_delay',
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
            			'param_name'  => 'yog_content_animation',
            			'value'       => yog_get_animations(),
            			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
            		),
                     
                    array(
                        'heading'     => esc_html__( 'Delay','yog'),
                        'type'        => 'textfield',
                        'param_name'  => 'yog_content_delay',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Button','yog'),
                        'type'        => 'vc_link',
                        'value'       => '',
                        'param_name'  => 'yog_btn',
                    ),
                    
                    array(
                        'heading'     => esc_html__('Animation', 'yog'),
            			'type'        => 'dropdown',
            			'param_name'  => 'yog_btn_animation',
            			'value'       => yog_get_animations(),
            			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
            		),
                     
                    array(
                        'heading'     => esc_html__( 'Delay','yog'),
                        'type'        => 'textfield',
                        'param_name'  => 'yog_btn_delay',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Background Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_bg',
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
|				Flipmart :  Flower Testimonial CPT Module / Elements Shortcode			|						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Flower Testimonial', 'yog'),
      'base'        => 'yog_flower_testimonial',
      'class'       => 'icon_yog_flower_testimonial',
      'icon'	    => 'icon_yog_flower_testimonial',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Flower', 'yog'),
      'description' => esc_html__( 'Insert User Testimonial', 'yog' ),
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
|				Flipmart: Flower Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_flower_sliders($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_flower_sliders' => '',
            'yog_animation'     => '',
            'yog_delay'         => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_flower_sliders );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            
            <div class="owl-carousel flower_section owl-theme hero-slider bg-primary" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <?php 
                foreach( $yog_items as $yog_item ){
                    
                    //Background
                    $yog_bg = ( isset( $yog_item['yog_bg'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_item['yog_bg'] ) .');"' : '';
                    ?>
                    <div class="item bg-image" <?php echo $yog_bg; ?>>
                     <div class="container">
                      <div class="hero-slider-con d-table w-100">
                        <div class="hero-slider-con-inner d-table-cell w-100 align-middle text-center">
                          <div class="row">
                            <div class="col-12">
                              <div class="carousel_caption" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                                <?php 
                                   //Heading
                                   if( isset( $yog_item['yog_heading'] ) ){
                                    
                                     //Animation
                                     $yog_heading_animation = ( isset( $yog_item['yog_heading_animation'] ) && !empty( $yog_item['yog_heading_animation'] ) )? $yog_item['yog_heading_animation'] : '';
                                     $yog_heading_delay     = ( isset( $yog_item['yog_heading_delay'] ) && !empty( $yog_item['yog_heading_delay'] ) )? $yog_item['yog_heading_delay'] : '';
       
                                     echo '<h4 '. yog_helper()->get_attr( false, array( 'class' => 'text-primary h3 m-0', 'data-animation' => $yog_heading_animation, 'data-animation-daley' => $yog_heading_delay ) ) .'>'. $yog_item['yog_heading'] .'</h4>';
                                   }
                                   
                                   //Sub Heading
                                   if( isset( $yog_item['yog_sub_heading'] ) ){
                                    
                                     //Animation
                                     $yog_sub_animation = ( isset( $yog_item['yog_sub_animation'] ) && !empty( $yog_item['yog_sub_animation'] ) )? $yog_item['yog_sub_animation'] : '';
                                     $yog_sub_delay     = ( isset( $yog_item['yog_sub_delay'] ) && !empty( $yog_item['yog_sub_delay'] ) )? $yog_item['yog_sub_delay'] : '';
       
                                     echo '<h1 '. yog_helper()->get_attr( false, array( 'class' => 'display-2 m-0', 'data-animation' => $yog_sub_animation, 'data-animation-daley' => $yog_sub_delay ) ) .'>'. $yog_item['yog_sub_heading'] .'</h1>';
                                   }
                                  
                                   //Content
                                   if( isset( $yog_item['yog_content'] ) ){
                                     //Animation
                                     $yog_content_animation = ( isset( $yog_item['yog_content_animation'] ) && !empty( $yog_item['yog_content_animation'] ) )? $yog_item['yog_content_animation'] : '';
                                     $yog_content_delay     = ( isset( $yog_item['yog_content_delay'] ) && !empty( $yog_item['yog_content_delay'] ) )? $yog_item['yog_content_delay'] : '';
       
                                     echo '<p '. yog_helper()->get_attr( false, array( 'class' => 'lead font-weight-light mb-4', 'data-animation' => $yog_content_animation, 'data-animation-daley' => $yog_content_delay ) ) .'>'. $yog_item['yog_content'] .'</p>';
                                   } 
                                   
                                   //Button
                                   $yog_link = isset( $yog_item['yog_btn'] )? vc_build_link( $yog_item['yog_btn'] ) : '';
                                   if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                        
                                        //Animation
                                        $yog_btn_animation = ( isset( $yog_item['yog_btn_animation'] ) && !empty( $yog_item['yog_btn_animation'] ) )? $yog_item['yog_btn_animation'] : '';
                                        $yog_btn_delay     = ( isset( $yog_item['yog_btn_delay'] ) && !empty( $yog_item['yog_btn_delay'] ) )? $yog_item['yog_btn_delay'] : '';
       
                                
                                        $attributes   = array();
                                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                        $attributes   = implode( ' ', $attributes );
                                       
                                        echo '<a '. yog_helper()->get_attr( false, array( 'class' => 'btn btn-primary rounded-pill shop_now_btn', 'data-animation' => $yog_btn_animation, 'data-animation-daley' => $yog_btn_delay ) ) .' ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
                                        
                                   }
                               ?> 
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                }
             ?>
            </div>
            <?php
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_flower_sliders', 'yog_flower_sliders' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Flower Banner  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_flower_banners($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_flower_banner' => '',
            'yog_column'        => 2,
            'yog_animation'     => '',
            'yog_delay'         => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_flower_banner );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            ?>
            <section <?php yog_helper()->attr( false, array( 'class' => 'flower_section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="py-80-50 section top_collection_section">
                    <?php 
                    foreach( $yog_items as $yog_item ){
                        
                        //Background
                        $yog_bg = ( isset( $yog_item['yog_bg'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_item['yog_bg'] ) .');"' : '';
                        ?>
                        <div class="<?php echo yog_get_column( $yog_column ); ?> col-12 mb-4">
                            <div class="card top_collection_card border-0 rounded-0 bg-dark bg-image" <?php echo $yog_bg; ?>>
                              <div class="py-5 pl-4 align-middle">
                                <div class="col-xl-6 col-12">
                                  <?php 
                                       //Heading
                                       if( isset( $yog_item['yog_heading'] ) ){
                                        
                                         //Animation
                                         $yog_heading_animation = ( isset( $yog_item['yog_heading_animation'] ) && !empty( $yog_item['yog_heading_animation'] ) )? $yog_item['yog_heading_animation'] : '';
                                         $yog_heading_delay     = ( isset( $yog_item['yog_heading_delay'] ) && !empty( $yog_item['yog_heading_delay'] ) )? $yog_item['yog_heading_delay'] : '';
           
                                         echo '<p '. yog_helper()->get_attr( false, array( 'class' => 'fw-500 card-sub-title text-primary', 'data-animation' => $yog_heading_animation, 'data-animation-daley' => $yog_heading_delay ) ) .'>'. $yog_item['yog_heading'] .'</p>';
                                       }
                                       
                                       //Sub Heading
                                       if( isset( $yog_item['yog_sub_heading'] ) ){
                                        
                                         //Animation
                                         $yog_sub_animation = ( isset( $yog_item['yog_sub_animation'] ) && !empty( $yog_item['yog_sub_animation'] ) )? $yog_item['yog_sub_animation'] : '';
                                         $yog_sub_delay     = ( isset( $yog_item['yog_sub_delay'] ) && !empty( $yog_item['yog_sub_delay'] ) )? $yog_item['yog_sub_delay'] : '';
           
                                         echo '<h2 '. yog_helper()->get_attr( false, array( 'class' => 'card-title', 'data-animation' => $yog_sub_animation, 'data-animation-daley' => $yog_sub_delay ) ) .'>'. $yog_item['yog_sub_heading'] .'</h2>';
                                       }
                                      
                                       //Content
                                       if( isset( $yog_item['yog_content'] ) ){
                                         //Animation
                                         $yog_content_animation = ( isset( $yog_item['yog_content_animation'] ) && !empty( $yog_item['yog_content_animation'] ) )? $yog_item['yog_content_animation'] : '';
                                         $yog_content_delay     = ( isset( $yog_item['yog_content_delay'] ) && !empty( $yog_item['yog_content_delay'] ) )? $yog_item['yog_content_delay'] : '';
           
                                         echo '<p '. yog_helper()->get_attr( false, array( 'class' => 'card-text text-dark', 'data-animation' => $yog_content_animation, 'data-animation-daley' => $yog_content_delay ) ) .'>'. $yog_item['yog_content'] .'</p>';
                                       } 
                                       
                                       //Button
                                       $yog_link = isset( $yog_item['yog_btn'] )? vc_build_link( $yog_item['yog_btn'] ) : '';
                                       if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                            
                                            //Animation
                                            $yog_btn_animation = ( isset( $yog_item['yog_btn_animation'] ) && !empty( $yog_item['yog_btn_animation'] ) )? $yog_item['yog_btn_animation'] : '';
                                            $yog_btn_delay     = ( isset( $yog_item['yog_btn_delay'] ) && !empty( $yog_item['yog_btn_delay'] ) )? $yog_item['yog_btn_delay'] : '';
           
                                    
                                            $attributes   = array();
                                            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                            $attributes   = implode( ' ', $attributes );
                                           
                                            echo '<a '. yog_helper()->get_attr( false, array( 'class' => 'btn btn-dark rounded-pill shop_now_btn', 'data-animation' => $yog_btn_animation, 'data-animation-daley' => $yog_btn_delay ) ) .' ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
                                            
                                       }
                                   ?>
                                </div>
                              </div>
                            </div>
                        </div>
                        <?php 
                    }
                    ?>
                </div>
            </section>
            <?php   
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_flower_banners', 'yog_flower_banners' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Flower Info  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_flower_info($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'               => '',
            'yog_heading_animation'     => '',
            'yog_heading_delay'         => '',
            'yog_sub_heading'           => '',
            'yog_sub_animation'         => '',
            'yog_sub_delay'             => '',
            'yog_content'               => '',
            'yog_content_animation'     => '',
            'yog_content_delay'         => '',
            'yog_sub_content'           => '',
            'yog_sub_content_animation' => '',
            'yog_sub_content_delay'     => '',
            'yog_animation'             => '',
            'yog_delay'                 => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <section <?php yog_helper()->attr( false, array( 'class' => 'flower_section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <div class="py-80-80 section who_we_are_section bg-image">
                <div class="row">
                  <div class="col-lg-9 col-12 m-auto">
                    <div class="section-title position-relative text-center pt-2 mb-40 wow pulse">
                      <?php 
                          //Heading
                          if( $yog_heading ):
                          
                            //Animation
                            $yog_heading_animation = ( isset( $yog_heading_animation ) && !empty( $yog_heading_animation ) )? $yog_heading_animation : '';
                            $yog_heading_delay     = ( isset( $yog_heading_delay ) && !empty( $yog_heading_delay ) )? $yog_heading_delay : '';
                          
                            echo '<p '. yog_helper()->get_attr( false, array( 'class' => 'fs-18 text-primary', 'data-animation' => $yog_heading_animation, 'data-animation-daley' => $yog_heading_delay ) ) .'>'. $yog_heading .'</p>';
                          
                          endif;
                          
                          //Sub Heading
                          if( $yog_sub_heading ):
                          
                            //Animation
                            $yog_sub_animation = ( isset( $yog_sub_animation ) && !empty( $yog_sub_animation ) )? $yog_sub_animation : '';
                            $yog_sub_delay     = ( isset( $yog_sub_delay ) && !empty( $yog_sub_delay ) )? $yog_sub_delay : '';
                          
                            echo '<h2 '. yog_helper()->get_attr( false, array( 'class' => 'm-0', 'data-animation' => $yog_sub_animation, 'data-animation-daley' => $yog_sub_delay ) ) .'>'. $yog_sub_heading .'</h2>';
                          
                          endif;
                      ?>  
                      <div class="section-title-bg-icon position-absolute animation fadeInDown animation-visible">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower-title-bg.png" class="img-fluid" alt="section-title-bg">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-9 col-12 m-auto text-center who_we_are_section_content">
                    <?php 
                        //Content
                        if( $yog_content ):
                          
                            //Animation
                            $yog_content_animation = ( isset( $yog_content_animation ) && !empty( $yog_content_animation ) )? $yog_content_animation : '';
                            $yog_content_delay     = ( isset( $yog_content_delay ) && !empty( $yog_content_delay ) )? $yog_content_delay : '';
                          
                            echo '<p '. yog_helper()->get_attr( false, array( 'class' => 'fw-500 mb-4', 'data-animation' => $yog_content_animation, 'data-animation-daley' => $yog_content_delay ) ) .'>'. $yog_content .'</p>';
                          
                        endif;
                        
                        //Sub Content
                        if( $yog_sub_content ):
                          
                            //Animation
                            $yog_sub_content_animation = ( isset( $yog_sub_content_animation ) && !empty( $yog_sub_content_animation ) )? $yog_sub_content_animation : '';
                            $yog_sub_content_delay     = ( isset( $yog_sub_content_delay ) && !empty( $yog_sub_content_delay ) )? $yog_sub_content_delay : '';
                          
                            echo '<p '. yog_helper()->get_attr( false, array( 'class' => 'm-0', 'data-animation' => $yog_sub_content_animation, 'data-animation-daley' => $yog_sub_content_delay ) ) .'>'. $yog_sub_content .'</p>';
                          
                        endif;
                          
                    ?>
                   </div><!-- col-12 /  END-->
                </div>
            </div>
        </section>
        <?php
            
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_flower_info', 'yog_flower_info' );
   
/*--------------------------------------------------------------------------------
|				Flipmart:  Flower Testimonial CPT Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_flower_testimonial($atts, $content = null ){

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
            
            ?>
            <section <?php yog_helper()->attr( false, array( 'class' => 'py-80-80 flower_section section our_customers_section bg-light', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="row">
                  <div class="col-lg-9 col-12 m-auto">
                    <div class="section-title position-relative text-center pt-2 mb-40 wow pulse">
                      <?php 
                          //Heading
                          if( $yog_heading ):
                          
                            echo '<p '. yog_helper()->get_attr( false, array( 'class' => 'fs-18 text-primary', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>'. $yog_heading .'</p>';
                          
                          endif;
                          
                          //Sub Heading
                          if( $yog_sub_heading ):
                          
                            echo '<h2 '. yog_helper()->get_attr( false, array( 'class' => 'm-0', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>'. $yog_sub_heading .'</h2>';
                          
                          endif;
                      ?>  
                      <div class="section-title-bg-icon position-absolute animation fadeInDown animation-visible">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower-title-bg.png" class="img-fluid" alt="section-title-bg">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-9 col-12 m-auto text-center">
                        <div class="owl-carousel owl-theme testimonial-slider">
                            <?php 
                                while ( $yog_post_query->have_posts() ) {
                                    $yog_post_query->the_post();
                                    ?>
                                    <div class="item">
                                        <div class="customer-feedback">
                                          <div <?php yog_helper()->attr( false, array( 'class' => 'customer-theme position-relative m-auto', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                                            <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?>
                                          </div>
                                          <div class="customer-feedback-content pt-4">
                                            <p <?php yog_helper()->attr( false, array( 'class' => 'mb-3', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>><?php echo get_post_meta( get_the_ID(), 'testimonial-content', true ); ?></p>
                                            <p <?php yog_helper()->attr( false, array( 'class' => 'customer-name', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>><span>-</span><?php the_title(); ?></p>
                                          </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>
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
   
   add_shortcode( 'yog_flower_testimonial', 'yog_flower_testimonial' );
   
/*--------------------------------------------------------------------------------
|				Flipmart:  Flower Blog CPT Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_flower_blog_posts($atts, $content = null ){

		$yog_output  = '';
        
		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'    => '',
            'yog_sub_heading'=> '',
            'yog_column'     => '2',
            'yog_limit'      => '-1',
            'taxonomie'      => '',
            'yog_animation'  => '',
            'yog_delay'      => ''
		), $atts));

		ob_start();
        
        //Get Post Date.
        $yog_post_query = yog_post_query( array( 'post_type' => 'post', 'posts_per_page' => $yog_limit ), $taxonomie );

        if( $yog_post_query->have_posts() ):
        
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <section <?php yog_helper()->attr( false, array( 'class' => 'py-80-80 section flower_section latest_blog_section bg-image', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="row">
                  <div class="col-lg-9 col-12 m-auto">
                    <div class="section-title position-relative text-center pt-2 mb-40">
                      <?php 
                          //Heading
                          if( $yog_heading ):
                          
                            echo '<p '. yog_helper()->get_attr( false, array( 'class' => 'fs-18 text-primary', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>'. $yog_heading .'</p>';
                          
                          endif;
                          
                          //Sub Heading
                          if( $yog_sub_heading ):
                          
                            echo '<h2 '. yog_helper()->get_attr( false, array( 'class' => 'm-0', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>'. $yog_sub_heading .'</h2>';
                          
                          endif;
                      ?>  
                      <div class="section-title-bg-icon position-absolute animation fadeInDown animation-visible">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower-title-bg.png" class="img-fluid" alt="section-title-bg">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="owl-carousel owl-theme latest-blog-slider">
                            <?php 
                                while ( $yog_post_query->have_posts() ) {
                                    $yog_post_query->the_post();
                                    ?>
                                    <div class="item py-4">
                                        <div class="card blog-card border-0 rounded-0 shadow">
                                            <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'card-img-top' ) ); ?>  
                                            <div class="card-body">
                                                <p class="date text-light"><?php echo  get_the_date( 'F d, Y' ); ?></p>
                                                <h3 class="card-title"><?php the_title(); ?></h3>
                                                <?php echo yog_get_excerpt( array( 'yog_class' => 'text-primary read_more_btn', 'yog_before_text' => '<p class="card-text">' ) ); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>
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
   
   add_shortcode( 'yog_flower_blog_posts', 'yog_flower_blog_posts' );
   
/*--------------------------------------------------------------------------------
|				Flipmart:  Flower News Letter Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_flower_news_letter($atts, $content = null ){

		$yog_output  = '';
        
		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'    => '',
            'yog_bg'         => '',   
            'yog_animation'  => '',
            'yog_delay'      => ''
		), $atts));

		ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        //Background
        $yog_bg = ( isset( $yog_bg ) )? 'background-image: url('. wp_get_attachment_url( $yog_bg ) .');' : '';
        ?>
        <section <?php yog_helper()->attr( false, array( 'style' => $yog_bg, 'class' => 'py-80-80 section flower_section subscribe_section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            
            <?php if( $yog_heading ): ?>
                <div class="row">
                  <div class="col-lg-9 col-12 m-auto">
                    <div class="section-title text-center mb-4">
                      <h2 <?php yog_helper()->attr( false, array( 'class' => 'm-0', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>><?php echo $yog_heading; ?></h2>
                    </div>
                  </div>
                </div>
            <?php endif; ?>
            
            <div class="row">
              <div class="col-lg-6 col-12 offset-lg-3">
                <?php 
                    //News Letter Form
                    if( mc4wp_get_form() ){
                        echo '<div class="subscribe_form">'. mc4wp_get_form() .'</div>';
                    }
                ?>
              </div>
            </div>
        </section>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_flower_news_letter', 'yog_flower_news_letter' );
   
/*--------------------------------------------------------------------------------
|				Flipmart:  Flower Sale Counter Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_flower_sale_counter($atts, $content = null ){

		$yog_output  = '';
        
		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'               => '',
            'yog_heading_animation'     => '',
            'yog_heading_delay'         => '',
            'yog_sub_heading'           => '',
            'yog_sub_animation'         => '',
            'yog_sub_delay'             => '',
            'yog_content'               => '',
            'yog_content_animation'     => '',
            'yog_content_delay'         => '',
            'yog_date'                  => '',
            'yog_date_animation'        => '',
            'yog_date_delay'            => '',
            'yog_btn'                   => '',
            'yog_animation'             => '',
            'yog_delay'                 => ''
		), $atts));

		ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        ?>
        <section <?php yog_helper()->attr( false, array( 'style' => $yog_bg, 'class' => 'py-80-80 section flower_section summer_sale_section bg-image', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
          <div class="summer_sale_content">
            <div class="section-title pt-2">
               <?php 
                  //Heading
                  if( $yog_heading ):
                  
                    //Animation
                    $yog_heading_animation = ( isset( $yog_heading_animation ) && !empty( $yog_heading_animation ) )? $yog_heading_animation : '';
                    $yog_heading_delay     = ( isset( $yog_heading_delay ) && !empty( $yog_heading_delay ) )? $yog_heading_delay : '';
                  
                    echo '<p '. yog_helper()->get_attr( false, array( 'class' => 'fw-500 sub-title text-primary', 'data-animation' => $yog_heading_animation, 'data-animation-daley' => $yog_heading_delay ) ) .'>'. $yog_heading .'</p>';
                  
                  endif;
                  
                  //Sub Heading
                  if( $yog_sub_heading ):
                  
                    //Animation
                    $yog_sub_animation = ( isset( $yog_sub_animation ) && !empty( $yog_sub_animation ) )? $yog_sub_animation : '';
                    $yog_sub_delay     = ( isset( $yog_sub_delay ) && !empty( $yog_sub_delay ) )? $yog_sub_delay : '';
                  
                    echo '<h2 '. yog_helper()->get_attr( false, array( 'class' => 'm-0', 'data-animation' => $yog_sub_animation, 'data-animation-daley' => $yog_sub_delay ) ) .'>'. $yog_sub_heading .'</h2>';
                  
                  endif;
              ?>  
              <div class="row flex-wrap mt-2 mb-4 mx-n1 timer-countDown">
                <div class="col-auto px-1">
                  <div class="bg-dark text-center text-white fw-500 timer p-2">
                    <div class="timer-inner"><span class="d-block" id="days"></span><?php _e( 'Days', 'yog' ); ?></div>
                  </div>
                </div>
                <div class="col-auto px-1">
                  <div class="bg-dark text-center text-white fw-500 timer p-2">
                    <div class="timer-inner"><span class="d-block" id="hours"></span><?php _e( 'Hours', 'yog' ); ?></div>
                  </div>
                </div>
                <div class="col-auto px-1">
                  <div class="bg-dark text-center text-white fw-500 timer p-2">
                    <div class="timer-inner"><span class="d-block" id="minutes"></span><?php _e( 'Minutes', 'yog' ); ?></div>
                  </div>
                </div>
                <div class="col-auto px-1">
                  <div class="bg-dark text-center text-white fw-500 timer p-2">
                    <div class="timer-inner"><span class="d-block" id="seconds"></span><?php _e( 'Seconds', 'yog' ); ?></div>
                  </div>
                </div>
              </div>
              <?php 
                //Content
                if( $yog_content ):
                  
                    //Animation
                    $yog_content_animation = ( isset( $yog_content_animation ) && !empty( $yog_content_animation ) )? $yog_content_animation : '';
                    $yog_content_delay     = ( isset( $yog_content_delay ) && !empty( $yog_content_delay ) )? $yog_content_delay : '';
                  
                    echo '<p '. yog_helper()->get_attr( false, array( 'class' => 'mb-4 content', 'data-animation' => $yog_content_animation, 'data-animation-daley' => $yog_content_delay ) ) .'>'. $yog_content .'</p>';
                  
                endif;
                
                //Button
                $yog_link = isset( $yog_btn )? vc_build_link( $yog_btn ) : '';
                if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                    
                    //Animation
                    $yog_btn_animation = ( isset( $yog_item['yog_btn_animation'] ) && !empty( $yog_item['yog_btn_animation'] ) )? $yog_item['yog_btn_animation'] : '';
                    $yog_btn_delay     = ( isset( $yog_item['yog_btn_delay'] ) && !empty( $yog_item['yog_btn_delay'] ) )? $yog_item['yog_btn_delay'] : '';

            
                    $attributes   = array();
                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                    $attributes   = implode( ' ', $attributes );
                   
                    echo '<a '. yog_helper()->get_attr( false, array( 'class' => 'btn btn-dark rounded-pill shop_now_btn', 'data-animation' => $yog_btn_animation, 'data-animation-daley' => $yog_btn_delay ) ) .' ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
                    
                }
              ?>
            </div>
          </div>
        </section>
        <script type="text/javascript">
            // Timer Cunt Down
            const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;
        
            let countDown = new Date('<?php echo $yog_date; ?>').getTime(),
                x = setInterval(function() {
        
                    let now = new Date().getTime(),
                        distance = countDown - now;
        
                    document.getElementById('days').innerText = Math.floor(distance / (day)),
                        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
        
                }, second)
    
        </script>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_flower_sale_counter', 'yog_flower_sale_counter' );