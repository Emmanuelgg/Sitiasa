<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Jewellery
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 *
 */
/*-------------------------------------------------------------------------------
|				Flipmart:  Jewellery Clients Logo Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Jewellery Clients Logo', 'yog'),
      'base'        => 'yog_jewellery_clients',
      'class'       => 'icon_yyog_jewellery_clients',
      'icon'	    => 'icon-wpb-ui-info',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Jewellery', 'yog'),
      'description' => esc_html__( 'Insert Clients Logo', 'yog' ),
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
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_content',
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_jewellery_client',
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
|				Flipmart:  Jewellery Heading Section Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Jewellery Heading', 'yog'),
      'base'        => 'yog_jewellery_heading',
      'class'       => 'icon_yog_jewellery_heading',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Jewellery', 'yog'),
      'description' => esc_html__( 'Insert Heading', 'yog' ),
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
|				Flipmart:  Jewellery Image Banner Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Jewellery Image Banner', 'yog'),
      'base'        => 'yog_jewellery_image_banner',
      'class'       => 'icon_yog_jewellery_image_banner',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Jewellery', 'yog'),
      'description' => esc_html__( 'Insert Image Banner', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__('Style', 'yog'),
                'type'        => 'dropdown',
                'param_name'  => 'yog_styles',
                'admin_label' => true,
                'value'       => array(
                    esc_html__( 'Style One', 'yog' )   => 'one',
                    esc_html__( 'Style Two', 'yog' )   => 'two'
                ),
                'description' => esc_html__( 'Select Style', 'yog' ),
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
|				Flipmart:  Jewellery Info List Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Jewellery Info List', 'yog'),
      'base'        => 'yog_jewellery_info',
      'class'       => 'icon_yog_jewellery_info',
      'icon'	    => 'icon-wpb-ui-info',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Jewellery', 'yog'),
      'description' => esc_html__( 'Insert Information List.', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_lists',
                'params'     => array(
                
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Description','yog'),
                        'type'        => 'textarea',
                        'value'       => '',
                        'param_name'  => 'yog_description',
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

/*-------------------------------------------------------------------------------
|				Flipmart:  Jewellery Image Box Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Jewellery Image Box', 'yog'),
      'base'        => 'yog_jewellery_image_boxs',
      'class'       => 'icon_yog_jewellery_image_boxs',
      'icon'	    => 'icon-wpb-ui-info',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Jewellery', 'yog'),
      'description' => esc_html__( 'Insert Image Box.', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_jewellery_image_box',
                'params'     => array(
                
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Description','yog'),
                        'type'        => 'textarea',
                        'value'       => '',
                        'param_name'  => 'yog_description',
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
|				Flipmart:  Jewellery Gallery Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Jewellery Gallery', 'yog'),
      'base'        => 'yog_jewellery_galleries',
      'class'       => 'icon_yog_jewellery_galleries',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Jewellery', 'yog'),
      'description' => esc_html__( 'Insert Gallery Images', 'yog' ),
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
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_content',
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_jewellery_gallery',
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
|				Flipmart:  Jewellery Services List Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Jewellery Services List', 'yog'),
      'base'        => 'yog_jewellery_services',
      'class'       => 'icon_yog_jewellery_services',
      'icon'	    => 'icon-wpb-ui-info',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Jewellery', 'yog'),
      'description' => esc_html__( 'Insert Services List.', 'yog' ),
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
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_content',
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_jewellery_service',
                'params'     => array(
                
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Description','yog'),
                        'type'        => 'textarea',
                        'value'       => '',
                        'param_name'  => 'yog_description',
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
|				Flipmart:  Jewellery Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Jewellery Slider', 'yog'),
      'base'        => 'yog_jewellery_sliders',
      'class'       => 'icon_yog_jewellery_slider',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Jewellery', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_jewellery_slider',
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
|				Flipmart: Jewellery Clients Logo Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_jewellery_clients($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'          => '',
            'yog_content'          => '',
            'yog_jewellery_client' => '',
            'yog_animation'        => '',
            'yog_delay'            => ''
		), $atts));

        ob_start();
        
        //Element Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_jewellery_client );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array('class' => 'popular-brand', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php 
                    //Heading
                    $heading_content = '';
                    if( $yog_heading ){
                        $heading_content .= '<h3>'. $yog_heading .'</h3>';
                    }
                    
                    //Content
                    if( $yog_content ){
                        $heading_content .= '<p>'. $yog_content .'</p>';
                    }
                    
                    //Heading Content
                    if( $heading_content ){
                        printf( '<div class="jewellery-heading">%s<img src="'. YOG_CORE_DIR .'/assets/images/jewellery-divider.jpg" alt="Image Not Found" /></div>', $heading_content );
                    }
                ?>
                <ul>
                    <?php 
                        foreach( $yog_items as $yog_item ){
                            
                            if( $yog_item['yog_img'] ){
                                
                               //Link
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
                               
                               //Content
                               printf( '<li>%s<img src="%s" alt="%s">%s</li>', $yog_tag_before, wp_get_attachment_url( $yog_item['yog_img'] ), esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ), $yog_tag_after );
                        
                            }
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
   
   add_shortcode( 'yog_jewellery_clients', 'yog_jewellery_clients' );

/*--------------------------------------------------------------------------------
|				Flipmart: Jewellery Heading Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_jewellery_heading($atts, $content = null ){

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
        <div <?php yog_helper()->attr( false, array('class' => 'jewellery-heading', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <?php 
                //Heading
                if( $yog_heading ){
                    echo '<h3>'. $yog_heading .'</h3>';
                }
                
                //Content
                if( $yog_content ){
                    echo '<p>'. $yog_content .'</p>';
                }
                
            ?>
            <img src="<?php echo YOG_CORE_DIR; ?>/assets/images/jewellery-divider.jpg" alt="Image Not Found" />
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_jewellery_heading', 'yog_jewellery_heading' );

/*--------------------------------------------------------------------------------
|				Flipmart: Jewellery Image Banner  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_jewellery_image_banner($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_styles'    => 'one',
            'yog_link'      => '',
            'yog_animation' => '',
            'yog_delay'     => ''
		), $atts));
        
        if( $content ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            if( $yog_styles == 'one' ){
            ?>
            <div <?php yog_helper()->attr( false, array('class' => 'banner', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
               <div class="col-sm-6">
                  <div class="banner-content">
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
                           
                            echo '<a ' . $attributes . '>'. esc_html( trim( $yog_link['title'] ) ) .'</a>';
                            
                        }
                    ?>
                  </div>
               </div>
            </div>
            <?php
            }else{
            ?>
            <div <?php yog_helper()->attr( false, array('class' => 'banner-sec', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div class="banner-sec-content">
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
                       
                        echo '<a ' . $attributes . '>'. esc_html( trim( $yog_link['title'] ) ) .'</a>';
                        
                    }
                 ?>
              </div>
            </div>
            <?php    
            }
        }

        ob_start();
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_jewellery_image_banner', 'yog_jewellery_image_banner' );
         
/*--------------------------------------------------------------------------------
|				Flipmart: Jewellery Info  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_jewellery_info($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_lists'     => '',
            'yog_animation' => '',
            'yog_delay'     => ''
		), $atts));

        ob_start();
        
        //Element Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_lists );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'about-policy', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php 
                    $yog_counter = 1; 
                    foreach( $yog_items as $yog_item ){
                        
                        //Background
                        $yog_bg = ( isset( $yog_item['yog_bg'] ) && !empty( $yog_item['yog_bg'] ) )? 'style="background: url('. wp_get_attachment_url( $yog_item['yog_bg'] ) .') no-repeat top center;background-size: cover;"' : '';
                            
                        if( $yog_counter == 1 ){
                            
                            ?>
                            <div class="col-sm-4 secure-payment" <?php echo $yog_bg; ?>>
                                <?php 
                                    //Heading
                                    if( $yog_item['yog_heading'] ){
                                        echo '<h2>'. $yog_item['yog_heading'] .'</h2>';
                                    }
                                    
                                    //Content
                                    if( $yog_item['yog_description'] ){
                                        echo '<h3>'. $yog_item['yog_description'] .'</h3>';
                                    }
                                    
                                    //Image
                                    if( $yog_item['yog_img'] ){
                                        echo '<img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt="'. esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ) .'">';
                                    }
                                ?>
                             </div>
                            <?php
                        
                        }elseif( $yog_counter == 2 ){
                            
                            ?>
                            <div class="free-delivery" <?php echo $yog_bg; ?>>
                                <?php 
                                    //Heading
                                    if( $yog_item['yog_heading'] ){
                                        echo '<h2>'. $yog_item['yog_heading'] .'</h2>';
                                    }
                                    
                                    //Content
                                    if( $yog_item['yog_description'] ){
                                        echo '<h3>'. $yog_item['yog_description'] .'</h3>';
                                    }
                                    
                                    //Image
                                    if( $yog_item['yog_img'] ){
                                        echo '<img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt="'. esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ) .'">';
                                    }
                                ?>
                             </div>
                            <?php
                            
                        }elseif( $yog_counter == 3 ){
                            
                            ?>
                            <div class="col-sm-4 money-back" <?php echo $yog_bg; ?>>
                                <?php 
                                    //Heading
                                    if( $yog_item['yog_heading'] ){
                                        echo '<h2>'. $yog_item['yog_heading'] .'</h2>';
                                    }
                                    
                                    //Content
                                    if( $yog_item['yog_description'] ){
                                        echo '<h3>'. $yog_item['yog_description'] .'</h3>';
                                    }
                                    
                                    //Image
                                    if( $yog_item['yog_img'] ){
                                        echo '<img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt="'. esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ) .'">';
                                    }
                                ?>
                             </div>
                            <?php
                        
                        }
                        
                        //Counter
                        if( $yog_counter == 3 ){
                            $yog_counter = 1;
                        }else{
                            $yog_counter++;
                        }
                    }
                ?>
            </div>
            <?php
        }
            
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_jewellery_info', 'yog_jewellery_info' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Jewellery Image Boxs / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_jewellery_image_boxs($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_jewellery_image_box'  => '',
            'yog_animation'            => '',
            'yog_delay'                => ''
		), $atts));

        ob_start();
        
        //Element Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_jewellery_image_box );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'image-box', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <ul>
                    <?php 
                        foreach( $yog_items as $yog_item ){
                            
                            ?>
                            <li>
                                <?php 
                                    //Image
                                    if( $yog_item['yog_img'] ){
                                        echo '<img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt="'. esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ) .'" class="img-responsive"/>';
                                    } 
                                ?>
                                <div class="image-box-content">
                                   <?php 
                                       //Heading
                                       if( $yog_item['yog_heading'] ){
                                          echo '<h3>'. $yog_item['yog_heading'] .'</h3>';
                                       } 
                                       
                                       //Description
                                       if( $yog_item['yog_description'] ){
                                          echo '<p>'. $yog_item['yog_description'] .'</p>';
                                       }
                                       
                                       //Link
                                       $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
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
                             </li>
                            <?php
                        }
                    ?>
                </ul>
                <div class="clearfix"></div>
            </div>
            <?php
            
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_jewellery_image_boxs', 'yog_jewellery_image_boxs' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Jewellery Gallery Images  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_jewellery_galleries($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'           => '',
            'yog_content'           => '',
            'yog_jewellery_gallery' => '',
            'yog_img'               => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //Element Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_jewellery_gallery );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'gallery-items', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php 
                    //Heading
                    $heading_content = '';
                    if( $yog_heading ){
                        $heading_content .= '<h3>'. $yog_heading .'</h3>';
                    }
                    
                    //Content
                    if( $yog_content ){
                        $heading_content .= '<p>'. $yog_content .'</p>';
                    }
                    
                    //Heading Content
                    if( $heading_content ){
                        printf( '<div class="jewellery-heading">%s<img src="'. YOG_CORE_DIR .'/assets/images/jewellery-divider.jpg" alt="Image Not Found" /></div>', $heading_content );
                    }
                ?>
                <ul>
                    <?php 
                        foreach( $yog_items as $yog_item ){
                            
                            if( $yog_item['yog_img'] ){
                                
                               //Link
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
                               
                               //Content
                               printf( '<li>%s<img src="%s" alt="%s" class="img-responsive">%s</li>', $yog_tag_before, wp_get_attachment_url( $yog_item['yog_img'] ), esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ), $yog_tag_after );
                        
                            }
                        }
                    ?>
                </ul>
                <div class="clearfix"></div>
            </div>
            <?php
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_jewellery_galleries', 'yog_jewellery_galleries' );

/*--------------------------------------------------------------------------------
|				Flipmart: Jewellery Services List  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_jewellery_services($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'           => '',
            'yog_content'           => '',
            'yog_jewellery_service' => '',
            'yog_img'               => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //Element Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_jewellery_service );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'jewellery-service', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php 
                    //Heading
                    $heading_content = '';
                    if( $yog_heading ){
                        $heading_content .= '<h3>'. $yog_heading .'</h3>';
                    }
                    
                    //Content
                    if( $yog_content ){
                        $heading_content .= '<p>'. $yog_content .'</p>';
                    }
                    
                    //Heading Content
                    if( $heading_content ){
                        printf( '<div class="jewellery-heading">%s<img src="'. YOG_CORE_DIR .'/assets/images/jewellery-divider.jpg" alt="Image Not Found" /></div>', $heading_content );
                    }
                ?>
                <div class="row">
                    <div class="col-sm-6">
                      <?php 
                          //Image
                          if( $yog_img ){
                            echo '<img src="'. wp_get_attachment_url( $yog_img ) .'" alt="'. esc_attr( get_post_meta( $yog_img, '_wp_attachment_image_alt', true) ) .'" class="img-responsive"/>';
                          }  
                      ?>
                   </div>
                   <div class="col-sm-6">
                      <ul>
                          <?php 
                              foreach( $yog_items as $yog_item ){
                                 ?>
                                 <li>
                                    <?php if( $yog_item['yog_img'] ){ ?>
                                        <div class="jewellery-service-icon">
                                           <img src="<?php echo wp_get_attachment_url( $yog_item['yog_img'] ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ); ?>" />
                                           <div class="jewellery-service-border"></div>
                                        </div>
                                    <?php } ?>
                                    <div class="jewellery-service-des">
                                       <?php 
                                           //Heading
                                           if( $yog_item['yog_heading'] ){
                                              echo '<h4>'. $yog_item['yog_heading'] .'</h4>';
                                           } 
                                           
                                           //Description
                                           if( $yog_item['yog_description'] ){
                                              echo '<p>'. $yog_item['yog_description'] .'</p>';
                                           }
                                       ?> 
                                    </div>
                                 </li>
                                 <?php   
                              } 
                          ?> 
                      </ul> 
                   </div>
                </div>
            </div>
            <?php
         }
            
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_jewellery_services', 'yog_jewellery_services' );    
            
/*--------------------------------------------------------------------------------
|				Flipmart: Jewellery Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_jewellery_sliders($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_jewellery_slider' => '',
            'yog_animation'            => '',
            'yog_delay'                => ''
		), $atts));

        ob_start();
        
        //Element Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_jewellery_slider );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div class="body-content jewellery-slider" id="top-banner-and-menu" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                 <?php 
                    //Loop
                    foreach( $yog_items as $yog_item ){
                        
                        //Background
                        $yog_bg  = ( isset( $yog_item['yog_bg'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_item['yog_bg'] ) .');background-size: cover;"' : '';
                        ?>
                        <div class="item" <?php echo $yog_bg; ?>>
                             <div class="container-fluid">
                                <div class="container">
                                   <div class="caption bg-color vertical-center text-left">
                                      <div class="big-text fadeInDown-1 white r-big-text">
                                         <?php  
                                              //Heading
                                              if( isset( $yog_item['yog_heading'] ) ){
                                                 echo '<h2>'. $yog_item['yog_heading'] .'</h2>';
                                              }
                                              
                                              //Sub Heading
                                              if( isset( $yog_item['yog_sub_heading'] ) ){
                                                 echo '<h1>'. $yog_item['yog_sub_heading'] .'</h1>';
                                              }
                                              
                                              //Content
                                              if( isset( $yog_item['yog_content'] ) ){
                                                 echo '<h3>'. $yog_item['yog_content'] .'</h3>';
                                              }
                                         ?>
                                      </div>
                                      <?php 
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
   
   add_shortcode( 'yog_jewellery_sliders', 'yog_jewellery_sliders' );