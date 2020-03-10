<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Engineer
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 *
 */
/*-------------------------------------------------------------------------------
|				Flipmart:  Engineer About Us Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Engineer About Us', 'yog'),
      'base'        => 'yog_engineer_about',
      'class'       => 'icon_yog_engineer_about',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Engineer', 'yog'),
      'description' => esc_html__( 'Insert About Us', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__('Style', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_style',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('About Us', 'yog')     => 'about',
    				esc_html__('Power Tools', 'yog')  => 'power'
    			),
    			'description' => esc_html__('Select Style', 'yog'),
    	    ),
            
            array(
                'heading'     => esc_html__( 'Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_img',
                'dependency'  => array( 'element' => 'yog_style', 'value'   => array( 'about' ) ),
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
                'param_name'  => 'yog_sub_heading',
                'dependency'  => array( 'element' => 'yog_style', 'value'   => array( 'about' ) ),
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
                'param_name' => 'yog_engineer_gallery',
                'dependency'  => array( 'element' => 'yog_style', 'value'   => array( 'power' ) ),
                'params'     => array(
                
                    array(
                        'heading'     => esc_html__( 'Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_img'
                    )
                    
                )
            ),
            
            array(
                'heading'     => esc_html__( 'Link','yog'),
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
|				Flipmart:  Engineer Heading Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Engineer Heading', 'yog'),
      'base'        => 'yog_engineer_heading',
      'class'       => 'icon_yog_engineer_heading',
      'icon'	    => 'icon-wpb-ui-custom_heading',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Engineer', 'yog'),
      'description' => esc_html__( 'Insert Heading', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__('Style', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_style',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('Light', 'yog') => 'light',
    				esc_html__('Dark', 'yog')  => 'dark'
    			),
    			'description' => esc_html__('Select Style', 'yog'),
    	    ),
            
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
                'holder'      => 'div',
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
|				Flipmart:  Engineer Image Banner Module / Element Map				    |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Engineer Image Banner', 'yog'),
      'base'        => 'yog_engineer_image_banner',
      'class'       => 'icon_yog_engineer_image_banner',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Engineer', 'yog'),
      'description' => esc_html__( 'Insert Image Banner', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Banner Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_banner',
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
                'param_name'  => 'yog_sub_heading'
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_content'
            ),
            
            array(
                'heading'     => esc_html__( 'Link','yog'),
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
|				Flipmart:  Engineer News Letter Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Engineer News Letter', 'yog'),
      'base'        => 'yog_engineer_newsletter',
      'class'       => 'icon_yog_engineer_newsletter',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Engineer', 'yog'),
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
|				Flipmart:  Engineer Slider Module / Element Map				    |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Engineer Slider', 'yog'),
      'base'        => 'yog_engineer_hero_sections',
      'class'       => 'icon_yog_engineer_hero_section',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Engineer', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__('Slider Type', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_slider',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('Hero Slider', 'yog')    => 'hero',
    				esc_html__('Simple Slider', 'yog')  => 'simple'
    			),
    			'description' => esc_html__('Select Hero Section', 'yog'),
    	    ),
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_slider_heading',
                'dependency'  => array( 'element' => 'yog_slider', 'value'   => array( 'simple' ) ),
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_engineer_hero_section',
                'dependency' => array( 'element' => 'yog_slider', 'value'   => array( 'hero' ) ),
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
                        'heading'     => esc_html__( 'Link','yog'),
                        'type'        => 'vc_link',
                        'value'       => '',
                        'param_name'  => 'yog_link',
                    )
                )
             ),
             
             array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_engineer_simple_section',
                'dependency' => array( 'element' => 'yog_slider', 'value'   => array( 'simple' ) ),
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
             )
          )
       )
    );
    
/*-------------------------------------------------------------------------------
|				Flipmart :  Engineer Testimonial CPT Module / Elements Shortcode			|						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Engineer Testimonial', 'yog'),
      'base'        => 'yog_testimonial',
      'class'       => 'icon_yog_testimonial',
      'icon'	    => 'icon_yog_testimonial',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Engineer', 'yog'),
      'description' => esc_html__( 'Insert User Testimonial', 'yog' ),
      'params'      => array(
              
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
|				Flipmart: Engineer About Us Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_engineer_about($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_style'            => 'about',
            'yog_img'              => '',
            'yog_heading'          => '',
            'yog_sub_heading'      => '',
            'yog_content'          => '',
            'yog_engineer_gallery' => '',
            'yog_link'             => '',
            'yog_animation'        => '',
            'yog_delay'            => ''
		), $atts));

        ob_start(); 
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        if( $yog_style == 'about' ): 
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'about-section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
           <div class="row">
              <div class="col-sm-6 about-content">
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
                     
                     //Link
                     $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                     if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                
                        $attributes   = array();
                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                        $attributes   = implode( ' ', $attributes );
                       
                        echo '<button><a ' . $attributes . '>'. esc_html( trim( $yog_link['title'] ) ) .'</a></button>';
                        
                     } 
                  ?>
              </div>
              <div class="col-sm-6 about-img">
                 <?php if( isset( $yog_img ) ): ?>
                    <img src="<?php echo wp_get_attachment_url( $yog_img ); ?>" alt="<?php echo get_post_meta( $yog_img, '_wp_attachment_image_alt', true); ?>" />
                 <?php endif; ?>
              </div>
           </div>
        </div>
        <?php
        else:
            //Image Gallery
            $yog_engineer_gallery = (array) vc_param_group_parse_atts( $yog_engineer_gallery );
            ?>
            <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'power-tools', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div class="power-content">
                 <?php 
                     //Heading
                     if( $yog_heading ){
                        echo '<h1>'. $yog_heading .'</h1>';
                     }
                     
                     //Content
                     if( $yog_content ){
                        echo '<p>'. $yog_content .'</p>';
                     }
                     
                     //Link
                     $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                     if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                
                        $attributes   = array();
                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                        $attributes   = implode( ' ', $attributes );
                       
                        echo '<button><a ' . $attributes . '>'. esc_html( trim( $yog_link['title'] ) ) .'</a></button>';
                        
                     } 
                  ?>
              </div>
              <?php if( $yog_engineer_gallery ): ?>
                  <div class="power-tools-second">
                     <ul>
                        <?php 
                            foreach( $yog_engineer_gallery as $yog_item ){
                                echo '<li><img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt="'. get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) .'" /></li>';
                            }
                        ?>
                     </ul>
                  </div>
              <?php endif; ?>
            </div>
            <?php
        endif;
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_engineer_about', 'yog_engineer_about' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Engineer Slider Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_engineer_hero_sections($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_slider'                  => 'hero', 
            'yog_engineer_hero_section'   => '',
            'yog_engineer_simple_section' => '', 
            'yog_slider_heading'          => '',
            'yog_animation'               => '',
            'yog_delay'                   => ''
		), $atts));

        ob_start(); 
        
        //Hero Sections Items
        $yog_engineer_hero_section = (array) vc_param_group_parse_atts( $yog_engineer_hero_section );
        $yog_engineer_simple_section = (array) vc_param_group_parse_atts( $yog_engineer_simple_section );
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        if( $yog_engineer_hero_section ):
            
            ?>
            <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'engineer-slider', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                 <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                      <?php 
                         foreach( $yog_engineer_hero_section as $yog_item ){
                            ?>
                            <div class="item" style="background-image: url(<?php echo esc_url( wp_get_attachment_url( $yog_item['yog_bg'] ) ); ?>);">
                             <div class="container-fluid">
                                <div class="container">
                                   <div class="caption bg-color vertical-center text-left">
                                      <div class="slider-content">
                                         <?php 
                                             //Heading
                                             if( isset( $yog_item['yog_heading'] ) && !empty( $yog_item['yog_heading'] ) ){
                                                echo '<div class="slider-header fadeInDown-1 slider-btn">'. $yog_item['yog_heading'] .'</div>';
                                             }
                                             
                                             //Sub Heading
                                             if( isset( $yog_item['yog_sub_heading'] ) && !empty( $yog_item['yog_sub_heading'] ) ){
                                                echo '<div class="big-text fadeInDown-1 white">'. $yog_item['yog_sub_heading'] .'</div>';
                                             }
                                             
                                             //Content
                                             if( isset( $yog_item['yog_content'] ) && !empty( $yog_item['yog_content'] ) ){
                                                echo '<div class="big-subtext fadeInDown-1 black">'. esc_html( $yog_item['yog_content'] ) .'</div>';
                                             }
                                         ?>
                                      </div>
                                      <div class="lower-bg">
                                         <div class="square-white"></div>
                                         <div class="square-yellow"></div>
                                         <?php if( isset( $yog_item['yog_img'] ) ): ?>
                                             <div class="engineer-slider-img">
                                                <img src="<?php echo wp_get_attachment_url( $yog_item['yog_img'] ); ?>" alt="<?php echo get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true); ?>" />
                                             </div>
                                         <?php 
                                            endif; 
                                            //Link
                                            $yog_link_bottom = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                            if ( isset( $yog_link_bottom['url'] ) && strlen( $yog_link_bottom['url'] ) > 0  ) {
                                        
                                                $attributes   = array();
                                                $attributes[] = 'href="' . esc_url( trim( $yog_link_bottom['url'] ) ) . '"';
                                            	$attributes[] = 'title="' . esc_attr( trim( $yog_link_bottom['title'] ) ) . '"';
                                            	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link_bottom['target'] ) > 0 ? $yog_link_bottom['target'] : '_self' ) ) . '"';
                                                $attributes   = implode( ' ', $attributes );
                                               
                                                echo '<div class="slider-button fadeInDown-3"><a ' . $attributes . '>'. esc_html( trim( $yog_link_bottom['title'] ) ) .'</a></div>';
                                                
                                            } 
                                         ?>
                                      </div>
                                   </div>
                                </div> 
                             </div> 
                          </div>
                         <?php
                        }
                    ?>
                 </div>
             </div>
            <?php
        
        elseif( $yog_engineer_simple_section ):
        
            ?>
            <div class="engineer-slider-second" <?php echo yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="engineer-slider-second-section">
                    <?php if( $yog_slider_heading ): ?>
                        <div class="engineer-slider-second-heading">
                           <h1><?php echo $yog_slider_heading; ?></h1>
                        </div>
                    <?php endif; ?>
                    <div class="container">
                       <div id="myCarousel" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">  
                              <?php 
                                 $yog_counter = 1;   
                                 foreach( $yog_engineer_simple_section as $yog_item ){
                                    
                                    //Class
                                    $yog_class = ( $yog_counter == 1 )? ' active' : '';
                                    ?>
                                    <div class="item<?php echo $yog_class; ?>">
                                    
                                        <?php if( isset( $yog_item['yog_img'] ) ): ?>
                                             <div class="engineer-slider-second-image">
                                                <div class="image"><img src="<?php echo wp_get_attachment_url( $yog_item['yog_img'] ); ?>" alt="<?php echo get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true); ?>" /></div>
                                             </div>
                                         <?php endif; ?>
                                         
                                        <div class="engineer-slider-second-content">
                                           <?php 
                                                 //Heading
                                                 if( isset( $yog_item['yog_heading'] ) && !empty( $yog_item['yog_heading'] ) ){
                                                    echo '<h1>'. $yog_item['yog_heading'] .'</h1>';
                                                 }
                                                 
                                                 //Sub Heading
                                                 if( isset( $yog_item['yog_sub_heading'] ) && !empty( $yog_item['yog_sub_heading'] ) ){
                                                    echo '<h2>'. $yog_item['yog_sub_heading'] .'</h2>';
                                                 }
                                                 
                                                 //Content
                                                 if( isset( $yog_item['yog_content'] ) && !empty( $yog_item['yog_content'] ) ){
                                                    echo '<h3>'. $yog_item['yog_content'] .'</h3>';
                                                 }
                                           ?> 
                                        </div>
                                    </div>
                                 <?php
                                 //Counter Increments
                                 $yog_counter++;
                                }
                            ?>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
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
   
   add_shortcode( 'yog_engineer_hero_sections', 'yog_engineer_hero_sections' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Engineer Heading Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_engineer_heading($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_style'       => 'light',
            'yog_heading'     => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start(); 
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        $yog_class     = ( $yog_style == 'dark' )? 'heading-section-dark' : 'heading-section-light';
        
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => $yog_class, 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <?php 
                //Heading
                if( $yog_heading ){
                    echo '<h1>'. $yog_heading .'</h1>';
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
   
   add_shortcode( 'yog_engineer_heading', 'yog_engineer_heading' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Engineer Image Banner Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_engineer_image_banner($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_banner'      => '',
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_content'     => '',
            'yog_link'        => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start(); 
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        if( $yog_banner ):
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'banner-image', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <img src="<?php echo esc_url( wp_get_attachment_url( $yog_banner ) ); ?>" alt="<?php echo get_post_meta( $yog_banner, '_wp_attachment_image_alt', true); ?>" />
            <div class="banner-image-content">
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
                     echo $yog_content;
                     
                     //Link
                     $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                     if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                
                        $attributes   = array();
                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                        $attributes   = implode( ' ', $attributes );
                       
                        echo '<a ' . $attributes . '>'. esc_html( trim( $yog_link['title'] ) ) .'</a>';
                        
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
   
   add_shortcode( 'yog_engineer_image_banner', 'yog_engineer_image_banner' );
   
/*--------------------------------------------------------------------------------
|				Flipmart:  Engineer Testimonial CPT Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_testimonial($atts, $content = null ){

		$yog_output  = '';
        
		//extract arguments	
		extract(shortcode_atts(array(
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
            
            $yog_ind = $yog_content = ''; $yog_counter = 0;
            while ( $yog_post_query->have_posts() ) {
                $yog_post_query->the_post();
                
                if( $yog_counter == 0 ){
                    
                    //Navigation
                    $yog_ind .= 
                    '<li data-target="#fade-quote-carousel" data-slide-to="'. $yog_counter .'" class="active"></li>';
                    
                    //Content
                    $yog_content .=
                    '<div class="item active">
                      <div class="profile-circle">
                         '. get_the_post_thumbnail( get_the_ID(), array( 100, 100 ) ) .'
                      </div>
                      <blockquote>
                         <p>'. get_post_meta( get_the_ID(), 'testimonial-content', true ) .'</p>
                         <p>-'. get_the_title() .'</p>
                      </blockquote>
                    </div>';
                    
                }else{
                    
                    //Navigation
                    $yog_ind .= 
                    '<li data-target="#fade-quote-carousel" data-slide-to="'. $yog_counter .'"></li>';
                    
                    //Content
                    $yog_content .=
                    '<div class="item">
                      <div class="profile-circle">
                         '. get_the_post_thumbnail( get_the_ID(), array( 100, 100 ) ) .'
                      </div>
                      <blockquote>
                         <p>'. get_post_meta( get_the_ID(), 'testimonial-content', true ) .'</p>
                         <p>-'. get_the_title() .'</p>
                      </blockquote>
                    </div>';
                    
                }
                
                
                //Counter Increments
                $yog_counter++;
            }
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'testimonial', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
             <div id="carousel">
                <div class="container">
                   <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                         <div class="testimonial-quote"><i class="fa fa-quote-left fa-4x"></i></div>
                         <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                            <ol class="carousel-indicators">
                               <?php echo $yog_ind; ?>
                            </ol>
                            <div class="carousel-inner">
                               <?php echo $yog_content; ?>
                            </div>
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
   
   add_shortcode( 'yog_testimonial', 'yog_testimonial' );
   
/*--------------------------------------------------------------------------------
|				Flipmart:  Engineer News Letter Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_engineer_newsletter($atts, $content = null ){

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
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'news-letter', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
           <div class="row">
              <div class=" col-sm-6 news-letter-content">
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
              </div >
              <div class=" col-sm-6 news-letter-form">
                 <?php echo do_shortcode( '[mc4wp_form id="'. $yog_form_id .'"]' ); ?>    
              </div>
           </div>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_engineer_newsletter', 'yog_engineer_newsletter' );