<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Lingerie
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 *
 */
/*-------------------------------------------------------------------------------
|				Flipmart:  Lingerie Heading Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Lingerie Heading', 'yog'),
      'base'        => 'yog_lingerie_heading',
      'class'       => 'icon_yog_lingerie_heading',
      'icon'	    => 'icon-wpb-ui-custom_heading',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Lingerie', 'yog'),
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
|				Flipmart:  Lingerie Image Banner Module / Element Map		    |						
--------------------------------------------------------------------------------*/
    
    vc_map( array(
      'name'        => esc_html__('Lingerie Image Banner', 'yog'),
      'base'        => 'yog_lingerie_image_banner',
      'class'       => 'icon_yog_lingerie_image_banner',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Lingerie', 'yog'),
      'description' => esc_html__( 'Insert Image Banner', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__('Style', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_style',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('Style One', 'yog')   => 'one',
                    esc_html__('Style Two', 'yog')   => 'two',
                    esc_html__('Style Three', 'yog') => 'three',
                    esc_html__('Style Four', 'yog')  => 'four'
    			),
    			'description' => esc_html__('Select banner style', 'yog'),
    	    ),
            
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
                'dependency'  => array( 'element' => 'yog_style', 'value'   => array( 'three', 'four' ) )
            ),
            
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
                'dependency'  => array( 'element' => 'yog_style', 'value'   => array( 'three', 'four' ) )
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_content',
                'dependency'  => array( 'element' => 'yog_style', 'value'   => array( 'three', 'four' ) )
            ),
            
            array(
                'heading'     => esc_html__( 'Link','yog'),
                'type'        => 'vc_link',
                'value'       => '',
                'param_name'  => 'yog_link'
            ),
            
            array(
                'heading'     => esc_html__( 'Image Left','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_img_left',
                'dependency'  => array( 'element' => 'yog_style', 'value'   => array( 'four' ) )
            ),
            
            array(
                'heading'     => esc_html__( 'Image Right','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_img_right',
                'dependency'  => array( 'element' => 'yog_style', 'value'   => array( 'four' ) )
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
|				Flipmart:  Lingerie News Letter Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Lingerie News Letter', 'yog'),
      'base'        => 'yog_lingerie_newsletter',
      'class'       => 'icon_yog_lingerie_newsletter',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Lingerie', 'yog'),
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
|				Flipmart:  Lingerie Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Lingerie Slider', 'yog'),
      'base'        => 'yog_lingerie_sliders',
      'class'       => 'icon_yog_lingerie_sliders',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Lingerie', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_lingerie_slider',
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

/*--------------------------------------------------------------------------------
|				Flipmart: Lingerie Heading / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_lingerie_heading($atts, $content = null ){

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
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'lingerie-heading clearfix', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
           <?php 
                //Heading
                if( $yog_heading ){
                    echo '<h2>'. $yog_heading .'</h2>';
                }
                
                //Sub Heading
                if( $yog_sub_heading ){
                    echo '<p>'. $yog_sub_heading .'</p>';
                }
            ?>
            <img src="<?php echo YOG_CORE_DIR; ?>/assets/images/lingerie-heading-icon.jpg" alt="Image Not Found" />
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_lingerie_heading', 'yog_lingerie_heading' );

/*--------------------------------------------------------------------------------
|				Flipmart: Lingerie Banner  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_lingerie_image_banner($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_style'       => 'one',
            'yog_banner'      => '',
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_price'       => '',
            'yog_content'     => '',
            'yog_link'        => '',
            'yog_img_left'    => '',
            'yog_img_right'   => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        //Link  
        $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
        $yog_before_tag = $yog_after_tag = $yog_tag = '';
      
        if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
        
            $attributes   = array();
            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
            $attributes   = implode( ' ', $attributes );
           
            $yog_before_tag = '<a ' . $attributes . '>';
            $yog_after_tag  = '</a>';
            
            $yog_tag = '<a ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
        
        }
            
        if( $yog_style == 'one' ){
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'lingerie-banner', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
               <?php 
                    printf( '<div class="add-left">%s<img src="%s" alt="%s">%s</div>', $yog_before_tag, esc_url( wp_get_attachment_url( $yog_banner ) ), esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ), $yog_after_tag );
               ?>
            </div>
            <?php
            
        }elseif( $yog_style == 'two' ){
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'lingerie-banner', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
               <?php 
                    printf( '<div class="add-right">%s<img src="%s" alt="%s">%s</div>', $yog_before_tag, esc_url( wp_get_attachment_url( $yog_banner ) ), esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ), $yog_after_tag );
               ?>
            </div>
            <?php
            
        }elseif( $yog_style == 'three' ){
            
            //Background
            $yog_bg = ( $yog_banner )? 'background-image: url('. wp_get_attachment_url( $yog_banner ) .');background-size: cover;' : '';
            ?>
            <div <?php yog_helper()->attr( false, array( 'style' => $yog_bg, 'class' => 'call-action', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
               <?php 
                  //Heading
                  if( $yog_heading ){
                    echo '<h1>'. $yog_heading .'</h1>';
                  }
                
                  //Sub Heading
                  if( $yog_sub_heading ){
                    echo '<h1>'. $yog_sub_heading .'</h1>';
                  }
                
                  //Content
                  if( $yog_content ){
                    echo '<p>'. $yog_content .'</p>';
                  }
                  
                  //Button
                  echo $yog_tag;
               ?> 
            </div>
            <?php
            
        }elseif( $yog_style == 'four' ){
            
            //Background
            $yog_bg = ( $yog_banner )? 'background-image: url('. wp_get_attachment_url( $yog_banner ) .');background-size: cover;' : '';
            ?>
            <div <?php yog_helper()->attr( false, array( 'style' => $yog_bg, 'class' => 'container-fluid lingerie-elegaint', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                   <div class="col-sm-7 lingerie-elegaint-text">
                      <?php 
                          //Heading
                          if( $yog_heading ){
                            echo '<h2>'. $yog_heading .'</h2>';
                          }
                        
                          //Sub Heading
                          if( $yog_sub_heading ){
                            echo '<h1>'. $yog_sub_heading .'</h1>';
                          }
                        
                          //Content
                          if( $yog_content ){
                            echo '<p>'. $yog_content .'</p>';
                          }
                          
                          //Image Left
                          if( $yog_img_left ){
                             echo '<div class="lingerie-left-img"><img src="'. wp_get_attachment_url( $yog_img_left ) .'" alt="'. esc_attr( get_post_meta( $yog_img_left, '_wp_attachment_image_alt', true) ) .'"><div class="lingerie-img-cover"></div></div>';
                          }
                      ?>
                   </div>
                   <?php 
                        //Image Right
                        if( $yog_img_right ){
                            echo '<div class="lingerie-right-img"><img src="'. wp_get_attachment_url( $yog_img_right ) .'" alt="'. esc_attr( get_post_meta( $yog_img_right, '_wp_attachment_image_alt', true) ) .'"></div>';
                        }
                   ?>
                </div>
              </div>
            </div>
            <?php
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_lingerie_image_banner', 'yog_lingerie_image_banner' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Lingerie News Letter  / Element Shortcode			         |						
--------------------------------------------------------------------------------*/

	function yog_lingerie_newsletter($atts, $content = null ){

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
        <div <?php yog_helper()->attr( false, array( 'class' => 'lingerie-newsletter', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <div class="row">
               <div class="col-sm-5">
                  <?php 
                      //Heading
                      if( $yog_heading ){
                        echo '<h3>'. $yog_heading .'</h3>';
                      }
                
                      //Sub Heading
                      if( $yog_sub_heading ){
                        echo '<p>'. $yog_sub_heading .'</p>';
                      }
                  ?>
               </div>
               <div class="col-sm-7">
                  <div class="lingerie-newsletter-form">
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
   
   add_shortcode( 'yog_lingerie_newsletter', 'yog_lingerie_newsletter' );

/*--------------------------------------------------------------------------------
|				Flipmart: Lingerie Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_lingerie_sliders($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_lingerie_slider' => '',
            'yog_animation'       => '',
            'yog_delay'           => ''
		), $atts));

        ob_start();
        
        //Slider Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_lingerie_slider );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div class="body-content lingerie-slider" id="top-banner-and-menu" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
             <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                 <?php 
                    foreach( $yog_items as $yog_item ){
                        
                        //Background
                        $yog_bg = ( isset( $yog_item['yog_bg'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_item['yog_bg'] ) .');"' : '';
                        ?>
                        <div class="item" <?php echo $yog_bg; ?>>
                          <div class="container-fluid">
                             <div class="container">
                                <div class="caption bg-color vertical-center text-left">
                                   <?php 
                                      //Heading
                                      if( isset( $yog_item['yog_heading'] ) ){
                                         echo '<div class="slider-header fadeInDown-1 slider-btn">'. $yog_item['yog_heading'] .'</div>';
                                      }
                                      
                                      //Sub Heading
                                      if( isset( $yog_item['yog_sub_heading'] ) ){
                                         echo '<div class="big-text fadeInDown-1 white">'. yog_highlight_it( $yog_item['yog_sub_heading'] ) .'</div>';
                                      }
                                      
                                      //Content
                                      if( isset( $yog_item['yog_content'] ) ){
                                         echo '<div class="big-subtext fadeInDown-1 black">'. $yog_item['yog_content'] .'</div>';
                                      }
                                      
                                      //Link
                                      $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                      if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                
                                        $attributes   = array();
                                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                        $attributes   = implode( ' ', $attributes );
                                       
                                        echo '<div class="button-holder fadeInDown-3"><a ' . $attributes . '>'. esc_html( trim( $yog_link['title'] ) ) .'</a></div>';
                                        
                                      }
                                   ?>
                                </div>
                                <?php 
                                    //Image
                                    if( isset( $yog_item['yog_img'] ) ){
                                        echo '<div class="lingerie-slider-img"><img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt=""></div>';
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
   
   add_shortcode( 'yog_lingerie_sliders', 'yog_lingerie_sliders' );