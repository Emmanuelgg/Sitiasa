<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Fashion
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 *
 */
 /*-------------------------------------------------------------------------------
|				Flipmart:  Fashion Heading Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Fashion Heading', 'yog'),
      'base'        => 'yog_fashion_heading',
      'class'       => 'icon_yog_fashion_heading',
      'icon'	    => 'icon-wpb-ui-custom_heading',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Fashion', 'yog'),
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
|				Flipmart:  Fashion Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Fashion Slider Section', 'yog'),
      'base'        => 'yog_fashion_hero_sections',
      'class'       => 'icon_yog_fashion_hero_section',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Fashion', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_fashion_hero_section',
                'params'     => array(
                    
                     array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                        'description' => yog_pattren_description()
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
|				Flipmart:  Info Box Module / Element Map				        |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Fashion Info Box', 'yog'),
      'base'        => 'yog_fashion_info_boxes',
      'class'       => 'icon_yog_fashion_info_boxes',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Fashion', 'yog'),
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
                'param_name' => 'yog_fashion_info_boxe',
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

/*--------------------------------------------------------------------------------
|				Flipmart: Fashion Heading Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_fashion_heading($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'       => '',
            'yog_content'       => '',
            'yog_animation'     => '',
            'yog_delay'         => ''
		), $atts));

        ob_start(); 
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
           
        echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'title-section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
        
            //Heading
            if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                echo '<h1>'. esc_html( $yog_heading ) .'</h1>';
            }
            
            //Sub Heading
            if( isset( $yog_content ) && !empty( $yog_content ) ){
                echo '<p>'. esc_html( $yog_content ) .'</p>';
            }
        
        echo '</div>';
                
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_fashion_heading', 'yog_fashion_heading' );
  
/*--------------------------------------------------------------------------------
|				Flipmart: Fashion Slider Section Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_fashion_hero_sections($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_fashion_hero_section' => '',
            'yog_animation'            => '',
            'yog_delay'                => ''
		), $atts));

        ob_start(); 
        
        //Hero Sections Items
        $yog_hero_sections = (array) vc_param_group_parse_atts( $yog_fashion_hero_section );
        
        if( $yog_hero_sections ):
        
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            ?>
            <div id="f-slider" <?php echo yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                 <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                      <?php 
                         foreach( $yog_hero_sections as $yog_item ){
                            ?>
                            <div class="item" style="background-image: url(<?php echo esc_url( wp_get_attachment_url( $yog_item['yog_bg'] ) ); ?>);">
                              <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                  <?php 
                                    //Heading
                                    if( isset( $yog_item['yog_heading'] ) && !empty( $yog_item['yog_heading'] ) ){
                                        echo '<div class="slider-header fadeInDown-1 white">'. yog_highlight_it( $yog_item['yog_heading'] ) .'</div>';
                                    }
                                    
                                    //Sub Heading
                                    if( isset( $yog_item['yog_sub_heading'] ) && !empty( $yog_item['yog_sub_heading'] ) ){
                                        echo '<div class="big-text fadeInDown-1 white">'. $yog_item['yog_sub_heading'] .'</div>';
                                    }
                                    
                                    //Content
                                    if( isset( $yog_item['yog_content'] ) && !empty( $yog_item['yog_content'] ) ){
                                        echo '<div class="excerpt fadeInDown-2 hidden-xs"> <span>'. esc_html( $yog_item['yog_content'] ) .'</span></div>';
                                    }
                                    
                                    //Link
                                    $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                    if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                
                                        $attributes   = array();
                                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                        $attributes   = implode( ' ', $attributes );
                                       
                                        echo '<div class="button-holder fadeInDown-3" ><a ' . $attributes . ' class="btn-lg btn btn-uppercase btn-primary shop-now-button">'. esc_html( trim( $yog_link['title'] ) ) .'</a></div>';
                                        
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
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_fashion_hero_sections', 'yog_fashion_hero_sections' );
  
/*--------------------------------------------------------------------------------
|				Flipmart: Fashion Info Box Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_fashion_info_boxes($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_column'            => '3',
            'yog_fashion_info_boxe' => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start(); 
        
        //Info Box Items
        $yog_info_boxes = (array) vc_param_group_parse_atts( $yog_fashion_info_boxe );
        
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
                        <div class="<?php echo esc_attr( yog_get_column( $yog_column ) ); ?> col-sm-3">
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
            <?php
            
        endif;
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_fashion_info_boxes', 'yog_fashion_info_boxes' );