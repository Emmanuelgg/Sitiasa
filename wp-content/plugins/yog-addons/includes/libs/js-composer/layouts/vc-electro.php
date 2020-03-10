<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Electro
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 *
 */
/*-------------------------------------------------------------------------------
|				Flipmart:  Electro Client Logs Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Electro Client Logs', 'yog'),
      'base'        => 'yog_electro_client_logos',
      'class'       => 'icon_yog_electro_client_logos',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Electro', 'yog'),
      'description' => esc_html__( 'Insert Client Logs', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_electro_logo',
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
            ),
          )
       )
    );

/*-------------------------------------------------------------------------------
|				Flipmart:  Electro Image Banner Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Electro Image Banner', 'yog'),
      'base'        => 'yog_electro_image_banner',
      'class'       => 'icon_electro_yog_image_banner',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Electro', 'yog'),
      'description' => esc_html__( 'Insert Image Banner', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__('Style', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_style',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('Image Simple', 'yog')            => 'image',
                    esc_html__('Image Off', 'yog')               => 'image-off',
                    esc_html__('Image Gallery', 'yog')           => 'image-gallery',
    				esc_html__('Image With Text Button', 'yog')  => 'image-btn'
    			),
    			'description' => esc_html__('Select banner style', 'yog'),
    	    ),
            
            array(
                'heading'     => esc_html__( 'Banner Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_banner',
                'dependency'  => array(
    				'element' => 'yog_style',
                    'value'   => array( 'image', 'image-off', 'image-btn' )
    		    )
            ),
            
            array(
                'heading'     => esc_html__( 'Link','yog'),
                'type'        => 'vc_link',
                'value'       => '',
                'param_name'  => 'yog_link',
                'dependency'  => array(
    				'element' => 'yog_style',
                    'value'   => array( 'image', 'image-off', 'image-btn' )
    		    )
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_img_gallery',
                'dependency'  => array( 'element' => 'yog_style', 'value'   => array( 'image-gallery' ) ),
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Banner Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_gallery_banner'
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Link','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_gallery_btn_link'
                    )
                )
            ),
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading',
                'dependency'  => array( 'element' => 'yog_style', 'value'   => array( 'image-btn' ) ),
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_content',
                'dependency'  => array( 'element' => 'yog_style', 'value'   => array( 'image-btn' ) ),
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
|				Flipmart:  Electro Info Box Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Electro Info Box', 'yog'),
      'base'        => 'yog_electro_info_boxes',
      'class'       => 'icon_yog_info_boxes',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Electro', 'yog'),
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
                'param_name' => 'yog_info_boxe',
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
            			'type' => 'iconpicker',
            			'heading' => __( 'Icon', 'yog' ),
            			'param_name' => 'yog_icon',
            			'value' => 'fa fa-info-circle',
                        'settings' => array(
            				'emptyIcon' => false, // default true, display an "EMPTY" icon?
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
|				Flipmart:  Electro News Letter Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Electro News Letter', 'yog'),
      'base'        => 'yog_electro_newsletter',
      'class'       => 'icon_yog_electro_newsletter',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Electro', 'yog'),
      'description' => esc_html__( 'Insert News Letter', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Background Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_bg',
            ),
            
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
|				Flipmart:  Electro Slider Section Module / Element Map				    |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Electro Slider', 'yog'),
      'base'        => 'yog_electro_hero_sections',
      'class'       => 'icon_yog_electro_hero_section',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Electro', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_electro_hero_section',
                'params'     => array(
                    
                     array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
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
                        'heading'     => esc_html__( 'Background Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_bg',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Link','yog'),
                        'type'        => 'vc_link',
                        'value'       => '',
                        'param_name'  => 'yog_link_top',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Link','yog'),
                        'type'        => 'vc_link',
                        'value'       => '',
                        'param_name'  => 'yog_link_bottom',
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
|				Flipmart: Electro Client Logs Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_electro_client_logos($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_animation'    => '', 
            'yog_delay'        => '', 
            'yog_electro_logo' => ''
		), $atts));

        ob_start(); 
        
        //Logos Items
        $yog_client_logos = (array) vc_param_group_parse_atts( $yog_electro_logo );
        
        if( $yog_client_logos ):
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'clients-logo', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php 
                    foreach( $yog_client_logos as $yog_item ){
                        
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
                          
                          printf( '%s <img src="%s" alt="%s" />%s',$yog_before_tag, wp_get_attachment_url( $yog_item['yog_logo'] ), get_post_meta( $yog_item['yog_logo'], '_wp_attachment_image_alt', true), $yog_after_tag  );
                        
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
  
  add_shortcode( 'yog_electro_client_logos', 'yog_electro_client_logos' );
  
/*--------------------------------------------------------------------------------
|				Flipmart: Electro Slider Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_electro_hero_sections($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_electro_hero_section' => '',
            'yog_animation'            => '', 
            'yog_delay'                => ''
		), $atts));

        ob_start(); 
        
        //Slider Items
        $yog_electro_hero_section = (array) vc_param_group_parse_atts( $yog_electro_hero_section );
        
        if( $yog_electro_hero_section ):
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div id="e-slider" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay, 'class' => 'slider1' ) ); ?>>
                 <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                      <?php 
                         foreach( $yog_electro_hero_section as $yog_item ){
                            ?>
                            <div class="item" style="background-image: url(<?php echo esc_url( wp_get_attachment_url( $yog_item['yog_bg'] ) ); ?>);">
                              <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                  <?php
                                    //Link Top
                                    $yog_link = isset( $yog_item['yog_link_top'] )? vc_build_link( $yog_item['yog_link_top'] ) : '';
                                    if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                
                                        $attributes   = array();
                                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                        $attributes   = implode( ' ', $attributes );
                                       
                                        echo '<div class="slider-header fadeInDown-1 slider-btn"><a ' . $attributes . '>'. esc_html( trim( $yog_link['title'] ) ) .'</a></div>';
                                        
                                    } 
                                     
                                    //Heading
                                    if( isset( $yog_item['yog_heading'] ) && !empty( $yog_item['yog_heading'] ) ){
                                        echo '<div class="big-text fadeInDown-1 white">'. $yog_item['yog_heading'] .'</div>';
                                    }
                                    
                                    //Content
                                    if( isset( $yog_item['yog_content'] ) && !empty( $yog_item['yog_content'] ) ){
                                        echo '<div class="big-subtext fadeInDown-1 black">'. esc_html( $yog_item['yog_content'] ) .'</div>';
                                    }
                                    
                                    //Link
                                    $yog_link_bottom = isset( $yog_item['yog_link_bottom'] )? vc_build_link( $yog_item['yog_link_bottom'] ) : '';
                                    if ( isset( $yog_link_bottom['url'] ) && strlen( $yog_link_bottom['url'] ) > 0  ) {
                                
                                        $attributes   = array();
                                        $attributes[] = 'href="' . esc_url( trim( $yog_link_bottom['url'] ) ) . '"';
                                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link_bottom['title'] ) ) . '"';
                                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link_bottom['target'] ) > 0 ? $yog_link_bottom['target'] : '_self' ) ) . '"';
                                        $attributes   = implode( ' ', $attributes );
                                       
                                        echo '<div class="button-holder fadeInDown-3"><a ' . $attributes . ' class="btn-lg btn btn-uppercase btn-primary shop-now-button">'. esc_html( trim( $yog_link['title'] ) ) .'</a></div>';
                                        
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
            
        endif;
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_electro_hero_sections', 'yog_electro_hero_sections' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Electro Image Banner Section Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_electro_image_banner($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_style'       => 'image',
            'yog_banner'      => '',
            'yog_link'        => '',
            'yog_img_gallery' => '',
            'yog_heading'     => '',
            'yog_content'     => '',
            'yog_animation'   => '',
            'yog_delay'       => '',
		), $atts));

        ob_start(); 
        
        //Sections Items
        $yog_img_gallery = (array) vc_param_group_parse_atts( $yog_img_gallery );
        
        //Link  
        $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
        $yog_before_tag = $yog_after_tag = $yog_after_link = '';
      
        if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
            
            $attributes   = array();
            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
            $attributes   = implode( ' ', $attributes );
           
            $yog_before_tag = '<a ' . $attributes . '>';
            $yog_after_tag  = '</a>';
            
            $yog_after_link = '<a ' . $attributes . '>'. $yog_link['title'] .'</a>';
            
        } 
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        if( $yog_style == 'image' && $yog_banner ){
            
            printf( '<div class="ads-image" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>%s<img src="%s" alt="%s" class="img-responsive"/>%s</div>',$yog_before_tag, esc_url( wp_get_attachment_url( $yog_banner ) ), esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ), $yog_after_tag  );
            
        }elseif( $yog_style == 'image-off' && $yog_banner ){
            
            printf( '<div class="banner-image" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>%s<img src="%s" alt="%s"/>%s</div>',$yog_before_tag, esc_url( wp_get_attachment_url( $yog_banner ) ), esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ), $yog_after_tag  );
        
        }elseif( $yog_style == 'image-btn' ){
            
            
            echo '<div class="banner-image" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
            
                //Banner Image
                if( $yog_banner ){
                    echo '<img src="'. esc_url( wp_get_attachment_url( $yog_banner ) ) .'" alt="'. esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ) .'" class="img-responsive"/>';
                }
                
                echo '<div class="banner-image-content">';
                
                    //Heading
                    if( $yog_heading ){
                        echo '<h2>'. $yog_heading .'</h2>';
                    }
                    
                    //Content
                    if( $yog_content ){
                        echo '<p>'. $yog_content .'</p>';
                    }
                    
                    //Button
                    echo $yog_after_link;
            
            echo '</div></div>';
              
        }elseif( $yog_style == 'image-gallery' && $yog_img_gallery ){
            
            $yog_counter = 1;
            
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'image-gallery', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'><div class="row">';
            
            foreach( $yog_img_gallery as $yog_img ){
                
                //Class
                $yog_class = ( $yog_counter == 1 )? 'image-left' : 'image-right';
                
                $yog_link = isset( $yog_link )? vc_build_link( $yog_img['yog_gallery_btn_link'] ) : '';
                $yog_before_tag = $yog_after_tag = '';
                
                //Links
                if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                    
                    $attributes   = array();
                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                    $attributes   = implode( ' ', $attributes );
                   
                    $yog_before_tag = '<a ' . $attributes . '';
                    $yog_after_tag  = '</a>';
                } 
                
                //Content
                printf( '<div class="col-sm-6"><div class="%s">%s<img src="%s" alt="%s" class="img-responsive"/>%s</div></div>', $yog_class, $yog_before_tag, esc_url( wp_get_attachment_url( $yog_img['yog_gallery_banner'] ) ), esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ), $yog_after_tag  );
                
                //Increments
                if( $yog_counter == 2 ){
                    $yog_counter = 1;
                }else{
                    $yog_counter++;
                }
            }
            
            echo '</div></div>';
            
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_electro_image_banner', 'yog_electro_image_banner' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Electro Info Boxes Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_electro_info_boxes($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_column'    => '3',
            'yog_info_boxe' => '',
            'yog_animation' => '',
            'yog_delay'     => ''
		), $atts));

        ob_start(); 
        
        //Info Box Items
        $yog_info_boxes = (array) vc_param_group_parse_atts( $yog_info_boxe );
        
        if( $yog_info_boxes ):
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'service-section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="gray-bg">
            
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
                                ?>
                                <div class="service-content">
                                    <?php 
                                        //Heading
                                        if( isset( $yog_item['yog_heading'] ) && !empty( $yog_item['yog_heading'] ) ){
                                            echo '<h4>'. esc_html( $yog_item['yog_heading'] ) .'</h4>';
                                        }
                                        
                                        //Sub Heading
                                        if( isset( $yog_item['yog_sub_heading'] ) && !empty( $yog_item['yog_sub_heading'] ) ){
                                            echo '<p>'. $yog_item['yog_sub_heading'] .'</p>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <?php
                            
                            //Wrapper Start
                            if( $yog_counter == $yog_column ){
                                echo '</div>';
                                $yog_close = false;
                                $yog_counter = 0;
                            }
                        }
                        
                        //Wrapper Start
                        if( $yog_close ){
                            echo '</div>';
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
   
   add_shortcode( 'yog_electro_info_boxes', 'yog_electro_info_boxes' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Electro News Letter Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_electro_newsletter($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_bg'          => '',
            'yog_heading'     => '',
            'yog_form_id'     => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start(); 
        
        //Check Form
        if( empty( $yog_form_id ) )return;
        
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        //Background Image
        $yog_bg = ( $yog_bg )? 'background: #ffe400 url('. esc_url( wp_get_attachment_url( $yog_bg ) ) .') no-repeat;background-position: 25%;' : '';
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'style' => $yog_bg, 'class' => 'news-letter', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
        	<div class="container">
                <div class="row">
                   <div class="col-sm-6 news-letter-content">
                      <?php 
                         //Heading
                         if( $yog_heading ){
                            echo '<h1>'. $yog_heading .'</h1>';
                         }
                      ?>  
                   </div >
                   <div class="col-sm-6 news-letter-form">
                      <?php echo do_shortcode( '[mc4wp_form id="'. $yog_form_id .'"]' ); ?>    
                   </div>
                </div>
            </div>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_electro_newsletter', 'yog_electro_newsletter' );