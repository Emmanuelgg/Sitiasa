<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Glasses
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 *
 */
/*-------------------------------------------------------------------------------
|				Flipmart:  Glasses Call Action Section Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Glasses Call Action', 'yog'),
      'base'        => 'yog_glasses_cta',
      'class'       => 'icon_yog_glasses_cta',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Glasses', 'yog'),
      'description' => esc_html__( 'Insert Call Action', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading',
                'description' => yog_pattren_description()
            ),
             
            array(
                'heading'     => esc_html__( 'Button','yog'),
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
|				Flipmart:  Glasses Heading Section Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Glasses Heading', 'yog'),
      'base'        => 'yog_glasses_heading',
      'class'       => 'icon_yog_glasses_heading',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Glasses', 'yog'),
      'description' => esc_html__( 'Insert Heading', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading',
                'description' => yog_pattren_description()
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
|				Flipmart:  Glasses Image Banner Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Glasses Image Banner', 'yog'),
      'base'        => 'yog_glasses_image_banner',
      'class'       => 'icon_yog_glasses_image_banner',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Glasses', 'yog'),
      'description' => esc_html__( 'Insert Image Banner', 'yog' ),
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
                'heading'     => esc_html__( 'Price','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_price'
            ),
            
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
|				Flipmart:  Glasses Info Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Glasses Info Box', 'yog'),
      'base'        => 'yog_glasses_info_boxes',
      'class'       => 'icon_yog_glasses_info_boxes',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Glasses', 'yog'),
      'description' => esc_html__( 'Insert Info Box', 'yog' ),
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
                'param_name' => 'yog_glasses_info_boxe',
                'params'     => array(
                    
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
            			'type'       => 'iconpicker',
            			'heading'    => __( 'Icon', 'yog' ),
            			'param_name' => 'yog_icon',
            			'value'      => 'fa fa-info-circle',
                        'settings'   => array(
            				'emptyIcon'    => false, // default true, display an "EMPTY" icon?
            				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
            			),
            			'description' => __( 'Select icon from library.', 'yog' ),
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
|				Flipmart:  Glasses Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Glasses Slider', 'yog'),
      'base'        => 'yog_glasses_hero_sections',
      'class'       => 'icon_yog_glasses_hero_section',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Glasses', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_glasses_hero_section',
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

/*--------------------------------------------------------------------------------
|				Flipmart: Glasses Banner  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_glasses_image_banner($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_style'       => 'one',
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_price'       => '',
            'yog_content'     => '',
            'yog_link'        => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
           
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'col-sm-6 ad-content-section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
        	<?php 
                //Heading
                if( $yog_heading ){
                    echo '<h1>'. $yog_heading .'</h1>';
                }
            
                //Sub Heading
                if( $yog_sub_heading ){
                    echo '<h2>'. $yog_sub_heading .'</h2>';
                }
                
                //Price
                if( $yog_price ){
                    echo '<h2>'. $yog_price .'</h2>';
                }
                
                //Content
                echo $content;
                
                $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                
                    $attributes   = array();
                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                    $attributes   = implode( ' ', $attributes );
                   
                    echo '<div class="clearfix"></div><a ' . $attributes . ' class="banner-btn">'. trim( $yog_link['title'] ) .'</a>';
                }
             ?> 
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_glasses_image_banner', 'yog_glasses_image_banner' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Glasses Call Action  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_glasses_cta($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_link'        => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
           
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'call-action', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <div class="call-action-content">
               <div class="call-action-text">
                  <?php 
                      //Heading
                      if( $yog_heading ){
                        echo '<h1>'. yog_highlight_it( $yog_heading ) .'</h1>';
                      }  
                  ?>
               </div>
               <div class="call-action-button">
                  <?php 
                      $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                      if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                    
                        $attributes   = array();
                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                        $attributes   = implode( ' ', $attributes );
                       
                        echo '<a ' . $attributes . ' class="btn-cta">'. trim( $yog_link['title'] ) .'</a>';
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
   
   add_shortcode( 'yog_glasses_cta', 'yog_glasses_cta' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Glasses Heading Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_glasses_heading($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'   => '',
            'yog_content'   => '',
            'yog_animation' => '',
            'yog_delay'     => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'glasses-heading', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <?php 
                //Heading
                if( $yog_heading ){
                    echo '<h2>'. yog_highlight_it( $yog_heading ) .'</h2><div class="divider"></div>';
                }
                
                echo $content;
            ?>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_glasses_heading', 'yog_glasses_heading' );

/*--------------------------------------------------------------------------------
|				Flipmart: Glasses Info Box Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_glasses_info_boxes($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_column'            => '3',
            'yog_glasses_info_boxe' => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start(); 
        
        //Info Box Items
        $yog_info_boxes = (array) vc_param_group_parse_atts( $yog_glasses_info_boxe );
        
        if( $yog_info_boxes ):
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'service-section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php 
                    $yog_counter = 0;
                    foreach( $yog_info_boxes as $yog_item ){
                        //Counter Increments
                        $yog_counter++;
                        
                        //Wrapper Start
                        if( $yog_counter == 1 ){
                            echo '<div class="row">';
                            $yog_close = true;
                        }
                        ?>
                        <div class="<?php echo esc_attr( yog_get_column( $yog_column ) ); ?> col-sm-4">
                            <?php 
                                if( isset( $yog_item['yog_icon'] ) && !empty( $yog_item['yog_icon'] ) ){
                                    echo '<div class="icon"><i class="'. esc_attr( $yog_item['yog_icon'] ) .'" aria-hidden="true"></i></div>';
                                }
                                
                                echo '<div class="service-content">';
                                
                                    //Heading
                                    if( isset( $yog_item['yog_heading'] ) && !empty( $yog_item['yog_heading'] ) ){
                                        echo '<h4>'. esc_html( $yog_item['yog_heading'] ) .'</h4>';
                                    }
                                    
                                    //Sub Heading
                                    if( isset( $yog_item['yog_sub_heading'] ) && !empty( $yog_item['yog_sub_heading'] ) ){
                                        echo '<p>'. $yog_item['yog_sub_heading'] .'</p>';
                                    }
                                
                                echo '</div>';
                            ?>
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
            
        endif;
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_glasses_info_boxes', 'yog_glasses_info_boxes' );
     
/*--------------------------------------------------------------------------------
|				Flipmart: Glasses Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_glasses_hero_sections($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_glasses_hero_section' => '',
            'yog_animation'            => '',
            'yog_delay'                => ''
		), $atts));

        ob_start();
        
        //Hero Items
        $yog_hero = (array) vc_param_group_parse_atts( $yog_glasses_hero_section );
        
        if( $yog_hero ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div class="body-content glasses-slider" id="top-banner-and-menu" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                 <?php 
                    foreach( $yog_hero as $yog_item ){
                        
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
                                       
                                        echo '<div class="slider-button fadeInDown-3"><a ' . $attributes . '>'. esc_html( trim( $yog_link['title'] ) ) .'</a></div>';
                                        
                                      }
                                   ?>
                               </div>
                               <?php if( $yog_item['yog_img'] ): ?>
                                   <div class="glasses-slider-img">
                                      <img src="<?php echo wp_get_attachment_url( $yog_item['yog_img'] ); ?>" alt="" />
                                   </div>
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
   
   add_shortcode( 'yog_glasses_hero_sections', 'yog_glasses_hero_sections' );