<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Autoparts
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 */ 
/*-------------------------------------------------------------------------------
|				Flipmart:  Autoparts Banner Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Autoparts Banner', 'yog'),
      'base'        => 'yog_autoparts_banners',
      'class'       => 'icon_yog_autoparts_banners',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Autoparts', 'yog'),
      'description' => esc_html__( 'Insert Banner', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__('Styles', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_styles',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('Multi Banner', 'yog')  => 'v1',
    				esc_html__('Single Banner Hor', 'yog') => 'v2',
                    esc_html__('Single Banner Ver', 'yog') => 'v3'
    			),
    			'description' => esc_html__('Select Banner Style', 'yog'),
    	    ),
            
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
                'dependency'  => array( 'element' => 'yog_styles', 'value'   => array( 'v1' ) )
    	    ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_autoparts_banner',
                'dependency'  => array( 'element' => 'yog_styles', 'value'   => array( 'v1' ) ),
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
                'heading'     => esc_html__( 'Link','yog'),
                'type'        => 'vc_link',
                'value'       => '',
                'param_name'  => 'yog_link',
                'dependency'  => array( 'element' => 'yog_styles', 'value'   => array( 'v2', 'v3' ) ),
            ),
                    
            array(
                'heading'     => esc_html__( 'Background Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_banner_img',
                'dependency'  => array( 'element' => 'yog_styles', 'value'   => array( 'v2', 'v3' ) ),
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
|				Flipmart: Autoparts Blog Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('Autoparts Blog Posts', 'yog'),
	  'base'        => 'yog_autoparts_blog_posts',
	  'class'       => 'icon_yog_autoparts_blog_posts',
	  'icon'	    => 'icon-wpb-ui-separator',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart Autoparts', 'yog'),
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
|				Flipmart:  Autoparts Info Box Module / Element Map				            |						
--------------------------------------------------------------------------------*/
    vc_map( array(
      'name'        => esc_html__('Autoparts Info Box', 'yog'),
      'base'        => 'yog_autoparts_info_boxes',
      'class'       => 'icon_yog_autoparts_info_boxes',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Autoparts', 'yog'),
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
                'param_name' => 'yog_autoparts_info_boxe',
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
|				Flipmart:  Autoparts Hot Product Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('Autoparts Hot Product', 'yog'),
	  'base'        => 'yog_autoparts_hot_products',
	  'class'       => 'icon_yog_autoparts_hot_products',
	  'icon'	    => 'icon-wpb-ui-separator',
	  'weight'      => 101,
	  'category'    => esc_html__('WooCommerce', 'yog'),
	  'description' => esc_html__( 'Insert WooCommerce Hot Product', 'yog' ),
	  'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading'
            ),
            
            array(
                'heading'     => esc_html__( 'Hot Product','yog'),
                'type'        => 'dropdown',
                'value'       => yog_get_hot_product(),
                'param_name'  => 'yog_hot_product',
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
|				Flipmart:  Autoparts Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Autoparts Slider', 'yog'),
      'base'        => 'yog_autoparts_sliders',
      'class'       => 'icon_yog_autoparts_sliders',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Autoparts', 'yog'),
      'description' => esc_html__( 'Insert Slider Section', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_autoparts_sliders',
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
           
/*--------------------------------------------------------------------------------
|				Flipmart: Autoparts Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_autoparts_sliders($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_autoparts_sliders' => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_autoparts_sliders );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            
            <div <?php yog_helper()->attr( false, array( 'class' => 'owl-carousel autoparts owl-theme hero-slider bg-dark', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <?php 
                foreach( $yog_items as $yog_item ){
                    
                    //Background
                    $yog_bg = ( isset( $yog_item['yog_bg'] ) && !empty( $yog_item['yog_bg'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_item['yog_bg'] ) .');"' : '';
                    ?>
                    <div class="item bg-img" <?php echo $yog_bg; ?>>
                     <div class="container">
                      <div class="hero-slider-con d-table w-100">
                        <div class="hero-slider-con-inner d-table-cell w-100 align-middle">
                          <div class="row">
                            <div class="col-12">
                              <div class="carousel_caption" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                                <?php 
                                   //Heading
                                   if( isset( $yog_item['yog_heading'] ) ){
                                    
                                     //Animation
                                     $yog_heading_animation = ( isset( $yog_item['yog_heading_animation'] ) && !empty( $yog_item['yog_heading_animation'] ) )? $yog_item['yog_heading_animation'] : '';
                                     $yog_heading_delay     = ( isset( $yog_item['yog_heading_delay'] ) && !empty( $yog_item['yog_heading_delay'] ) )? $yog_item['yog_heading_delay'] : '';
       
                                     echo '<h2 '. yog_helper()->get_attr( false, array( 'class' => 'text-white font-weight-normal text-uppercase h1 my-0', 'data-animation' => $yog_heading_animation, 'data-animation-daley' => $yog_heading_delay ) ) .'>'. $yog_item['yog_heading'] .'</h2>';
                                   }
                                   
                                   //Sub Heading
                                   if( isset( $yog_item['yog_sub_heading'] ) ){
                                    
                                     //Animation
                                     $yog_sub_animation = ( isset( $yog_item['yog_sub_animation'] ) && !empty( $yog_item['yog_sub_animation'] ) )? $yog_item['yog_sub_animation'] : '';
                                     $yog_sub_delay     = ( isset( $yog_item['yog_sub_delay'] ) && !empty( $yog_item['yog_sub_delay'] ) )? $yog_item['yog_sub_delay'] : '';
       
                                     echo '<h1 '. yog_helper()->get_attr( false, array( 'class' => 'text-white font-weight-bold text-uppercase my-0', 'data-animation' => $yog_sub_animation, 'data-animation-daley' => $yog_sub_delay ) ) .'>'. $yog_item['yog_sub_heading'] .'</h1>';
                                   }
                                  
                                   //Content
                                   if( isset( $yog_item['yog_content'] ) ){
                                     //Animation
                                     $yog_content_animation = ( isset( $yog_item['yog_content_animation'] ) && !empty( $yog_item['yog_content_animation'] ) )? $yog_item['yog_content_animation'] : '';
                                     $yog_content_delay     = ( isset( $yog_item['yog_content_delay'] ) && !empty( $yog_item['yog_content_delay'] ) )? $yog_item['yog_content_delay'] : '';
       
                                     echo '<p '. yog_helper()->get_attr( false, array( 'class' => 'text-white my-40', 'data-animation' => $yog_content_animation, 'data-animation-daley' => $yog_content_delay ) ) .'>'. $yog_item['yog_content'] .'</p>';
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
                                       
                                        echo '<a '. yog_helper()->get_attr( false, array( 'class' => 'btn btn-primary shop_now_btn', 'data-animation' => $yog_btn_animation, 'data-animation-daley' => $yog_btn_delay ) ) .' ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
                                        
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
   
   add_shortcode( 'yog_autoparts_sliders', 'yog_autoparts_sliders' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Autoparts Info Box Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_autoparts_info_boxes($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_column'              => '4',
            'yog_autoparts_info_boxe' => '',
            'yog_animation'           => '',
            'yog_delay'               => ''
		), $atts));

        ob_start(); 
        
        //Info Box Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_autoparts_info_boxe );
        
        if( $yog_items ):
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'section autoparts info_section py-15 bg-light', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
            
                $yog_counter = 1; $yog_close = false;
                foreach( $yog_items as $yog_item ){
                    
                    //Wrapper Start
                    if( $counter == 1 ):
                        echo '<div class="row">';
                        $yog_close = true;
                    endif;
                    ?>
                    <div class="<?php echo esc_attr( yog_get_column( $yog_column ) ); ?> col-sm-6">
                        <div class="media info-media py-15" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                            <?php 
                                if( isset( $yog_item['yog_icon'] ) && !empty( $yog_item['yog_icon'] ) ){
                                    echo '<div class="align-self-center icon"><i class="'. esc_attr( $yog_item['yog_icon'] ) .'" aria-hidden="true"></i></div>';
                                }
                                
                                //Wrapper Start
                                echo '<div class="media-body">';
                                
                                    //Heading
                                    if( isset( $yog_item['yog_heading'] ) && !empty( $yog_item['yog_heading'] ) ){
                                        echo '<h6 class="font-weight-medium text-uppercase my-0">'. esc_html( $yog_item['yog_heading'] ) .'</h6>';
                                    }
                                    
                                    //Sub Heading
                                    if( isset( $yog_item['yog_sub_heading'] ) && !empty( $yog_item['yog_sub_heading'] ) ){
                                        echo '<p class="mb-0 text-light">'. $yog_item['yog_sub_heading'] .'</p>';
                                    }
                                
                                //Wrapper End
                                echo '</div>';
                            ?>
                        </div>
                    </div>
                    <?php
                    
                    //Wrapper End
                    if( $counter == $yog_column ):
                        echo '</div>';
                        $yog_counter = 1;
                        $yog_close   = false;
                    else:
                        $yog_counter++;
                    endif;
                }
                
                //Wrapper Close
                if( $yog_close ):
                    echo '</div>';
                endif;
            
            echo '</div>';
            
        endif;
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_autoparts_info_boxes', 'yog_autoparts_info_boxes' );
  
/*--------------------------------------------------------------------------------
|				Flipmart: Autoparts Banner Module  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_autoparts_banners($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_styles'           => 'v1', 
            'yog_autoparts_banner' => '',
            'yog_column'           => 3,
            'yog_link'             => '', 
            'yog_banner_img'       => '',
            'yog_animation'        => '',
            'yog_delay'            => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
                
        if( $yog_styles == 'v1' ):
        
            //Elements Items
            $yog_items = (array) vc_param_group_parse_atts( $yog_autoparts_banner );
            
            if( $yog_items ):
                
                echo '<section '. yog_helper()->get_attr( false, array( 'class' => 'py-30 section autoparts top_collection_section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .' >';
                
                    $yog_counter = 1; $yog_close = false;
                    foreach( $yog_items as $yog_item ){
                        
                        //Wrapper Start
                        if( $yog_counter == 1 ):
                            echo '<div class="row">';
                            $yog_close = true;
                        endif;
                        
                        //Background
                        $yog_bg = ( isset( $yog_item['yog_bg'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_item['yog_bg'] ) .');"' : '';
                        ?>
                        <div class="<?php echo yog_get_column( $yog_column ); ?> col-sm-12 py-15">
                            <div class="card top_collection_card bg-dark bg-img p-30" <?php echo $yog_bg; ?>>
                              <div class="align-middle">
                                <div class="col-xl-6 col-12">
                                  <?php 
                                       //Heading
                                       if( isset( $yog_item['yog_heading'] ) ){
                                        
                                         //Animation
                                         $yog_heading_animation = ( isset( $yog_item['yog_heading_animation'] ) && !empty( $yog_item['yog_heading_animation'] ) )? $yog_item['yog_heading_animation'] : '';
                                         $yog_heading_delay     = ( isset( $yog_item['yog_heading_delay'] ) && !empty( $yog_item['yog_heading_delay'] ) )? $yog_item['yog_heading_delay'] : '';
           
                                         echo '<p '. yog_helper()->get_attr( false, array( 'class' => 'card-sub-title text-uppercase', 'data-animation' => $yog_heading_animation, 'data-animation-daley' => $yog_heading_delay ) ) .'>'. $yog_item['yog_heading'] .'</p>';
                                       }
                                       
                                       //Sub Heading
                                       if( isset( $yog_item['yog_sub_heading'] ) ){
                                        
                                         //Animation
                                         $yog_sub_animation = ( isset( $yog_item['yog_sub_animation'] ) && !empty( $yog_item['yog_sub_animation'] ) )? $yog_item['yog_sub_animation'] : '';
                                         $yog_sub_delay     = ( isset( $yog_item['yog_sub_delay'] ) && !empty( $yog_item['yog_sub_delay'] ) )? $yog_item['yog_sub_delay'] : '';
           
                                         echo '<h2 '. yog_helper()->get_attr( false, array( 'class' => 'font-weight-medium text-uppercase card-title my-0', 'data-animation' => $yog_sub_animation, 'data-animation-daley' => $yog_sub_delay ) ) .'>'. $yog_item['yog_sub_heading'] .'</h2>';
                                       }
                                      
                                       //Content
                                       if( isset( $yog_item['yog_content'] ) ){
                                         //Animation
                                         $yog_content_animation = ( isset( $yog_item['yog_content_animation'] ) && !empty( $yog_item['yog_content_animation'] ) )? $yog_item['yog_content_animation'] : '';
                                         $yog_content_delay     = ( isset( $yog_item['yog_content_delay'] ) && !empty( $yog_item['yog_content_delay'] ) )? $yog_item['yog_content_delay'] : '';
           
                                         echo '<p '. yog_helper()->get_attr( false, array( 'class' => 'card-text font-weight-medium text-uppercase', 'data-animation' => $yog_content_animation, 'data-animation-daley' => $yog_content_delay ) ) .'>'. $yog_item['yog_content'] .'</p>';
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
                                           
                                            echo '<a '. yog_helper()->get_attr( false, array( 'class' => 'btn btn-primary shop_now_btn', 'data-animation' => $yog_btn_animation, 'data-animation-daley' => $yog_btn_delay ) ) .' ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
                                            
                                       }
                                   ?>
                                </div>
                              </div>
                            </div>
                        </div>
                        <?php 
                        
                        //Wrapper Close
                        if( $yog_counter == $yog_column ):
                            echo '</div>';
                            $yog_counter = 1;
                            $yog_close   = false;
                        else:
                            $yog_counter++; 
                        endif;
                    }
                    
                    //Wrapper Close
                    if( $yog_close ):
                        echo '</div>';
                    endif;
                
                echo '</section>';
                 
            endif;
            
        elseif( $yog_styles == 'v2' && $yog_banner_img ):
            
            //Wrapper Start
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'advertisement-block py-15', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
            
                $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) :
                    
                    //Animation
                    $yog_btn_animation = ( isset( $yog_item['yog_btn_animation'] ) && !empty( $yog_item['yog_btn_animation'] ) )? $yog_item['yog_btn_animation'] : '';
                    $yog_btn_delay     = ( isset( $yog_item['yog_btn_delay'] ) && !empty( $yog_item['yog_btn_delay'] ) )? $yog_item['yog_btn_delay'] : '';
    
            
                    $attributes   = array();
                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                    $attributes   = implode( ' ', $attributes );
                   
                    echo '<a ' . $attributes . '>';
                        echo '<img src="'. wp_get_attachment_url( $yog_banner_img ) .'" alt="'. get_post_meta( $yog_banner_img, '_wp_attachment_image_alt', true) .'" />';
                    echo '</a>';
                    
                else:
                
                    echo '<img src="'. wp_get_attachment_url( $yog_banner_img ) .'" alt="'. get_post_meta( $yog_banner_img, '_wp_attachment_image_alt', true) .'" />';
                    
                endif;
            
            //Wrapper End
            echo '</div>';
        
        elseif( $yog_styles == 'v3' && $yog_banner_img ):
            
            //Wrapper Start
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'advertisement-block eq-height', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
            
                $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) :
                    
                    //Animation
                    $yog_btn_animation = ( isset( $yog_item['yog_btn_animation'] ) && !empty( $yog_item['yog_btn_animation'] ) )? $yog_item['yog_btn_animation'] : '';
                    $yog_btn_delay     = ( isset( $yog_item['yog_btn_delay'] ) && !empty( $yog_item['yog_btn_delay'] ) )? $yog_item['yog_btn_delay'] : '';
    
            
                    $attributes   = array();
                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                    $attributes   = implode( ' ', $attributes );
                   
                    echo '<a ' . $attributes . '>';
                        echo '<img src="'. wp_get_attachment_url( $yog_banner_img ) .'" alt="'. get_post_meta( $yog_banner_img, '_wp_attachment_image_alt', true) .'" class="img-responsive"/>';
                    echo '</a>';
                    
                else:
                
                    echo '<img src="'. wp_get_attachment_url( $yog_banner_img ) .'" alt="'. get_post_meta( $yog_banner_img, '_wp_attachment_image_alt', true) .'" class="img-responsive"/>';
                    
                endif;
            
            //Wrapper End
            echo '</div>';
            
        endif;
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_autoparts_banners', 'yog_autoparts_banners' );
   
/*--------------------------------------------------------------------------------
|				Flipmart:  Autoparts Blog CPT Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_autoparts_blog_posts($atts, $content = null ){

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
            <section <?php yog_helper()->attr( false, array( 'class' => 'section autoparts bestSeller_section py-80', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php
                    $yog_heading_content = ''; 
                    
                    //Heading
                    if( $yog_heading ):
                        $yog_heading_content = '<h2 '. yog_helper()->get_attr( false, array( 'class' => 'text-uppercase my-0 heading', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>'. $yog_heading .'</h2>';
                    endif;
                  
                    //Sub Heading
                    if( $yog_sub_heading ):
                        $yog_heading_content .= '<p '. yog_helper()->get_attr( false, array( 'class' => 'text my-10', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>'. $yog_sub_heading .'</p>';
                    endif;
                    
                    //Heading Content
                    if( $yog_heading_content ):
                        echo '<div class="section-title text-center">'. $yog_heading_content .'</div>';
                    endif;
                ?>
                <div class="row pt-15">
                    <div <?php yog_helper()->attr( false, array( 'class' => 'col-md-12', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                        <div class="owl-carousel owl-theme latest-blog-slider">
                            <?php 
                                while ( $yog_post_query->have_posts() ) {
                                    $yog_post_query->the_post();
                                    ?>
                                    <div class="item">
                                        <div class="card blog-card">
                                            <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'card-img-top' ) ); ?>  
                                            <div class="card-body p-30">
                                                <p class="date text-light"><?php echo  get_the_date( 'F d, Y' ); ?></p>
                                                <h4 class="card-title font-weight-medium"><?php the_title(); ?></h4>
                                                <?php echo yog_get_excerpt( array( 'yog_class' => 'btn btn-dark read_more_btn', 'yog_before_text' => '<p class="card-text">' ) ); ?>
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
   
   add_shortcode( 'yog_autoparts_blog_posts', 'yog_autoparts_blog_posts' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Autoparts Hot Product Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_autoparts_hot_products($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',  
            'yog_hot_product' => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start(); 
        
        //Post Arguments
        $yog_args = array(
            'post_type' => 'product',
            'p'         => $yog_hot_product
        );
        
        //Custom Query
        $yog_query = new WP_Query( $yog_args );
        
        if( $yog_query->have_posts() ):
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
        
            //Wrapper
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'section deal_section autoparts bg-img', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
            
                //Loop Start
                while( $yog_query->have_posts() ) {
                    $yog_query->the_post();
                    
                    global $product;
                    ?>
                    <div class="deal_wrap bg-white eq-height">
                        <?php if( $yog_heading ): ?>
                            <div class="heading">
                               <h5 class="my-0 font-weight-bold text-uppercase text-white" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>><?php echo $yog_heading; ?></h5>
                            </div>
                        <?php endif; ?>
                        <div class="row no-gutters media deal_media mt-0 p-30" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                           <div class="col-md-5 align-self-center icon">
                              <?php echo woocommerce_template_loop_product_thumbnail(); ?>
                           </div>
                           <div class="col-md-7 media-body" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                              <h4 class="font-weight-normal text-uppercase my-0"><?php the_title(); ?></h4>
                              <div class="review py-15">
                                 <?php woocommerce_template_loop_rating(); ?>
                              </div>
                              <?php
                                 //Price   
                                 woocommerce_template_loop_price(); 
                                 
                                 //Excerpt
                                 echo yog_get_excerpt( array( 'yog_link_to_post' => false, 'yog_before_text' => '<p class="text-light">' ) );
                                 
                                 //CountDown
                                 $yog_product_date = yog_helper()->get_option( 'product-hot-time', 'raw', false, 'post', get_the_ID() );
                                 if( !empty( $yog_product_date ) && time() <= strtotime( $yog_product_date ) ): 
                                 
                                   //Enque Js File
                                   wp_enqueue_script( 'count-min' );
                                   ?>
                                   <div class="flex-wrap timer-countDown countbox_1" data-date="<?php echo esc_attr( $yog_product_date ); ?>">
                                     <div class="col-auto">
                                        <div class="timer">
                                           <div class="timer-inner"><span class="d-block" id="days">5</span><?php _e( 'Days', 'yog' ); ?></div>
                                        </div>
                                     </div>
                                     <div class="col-auto">
                                        <div class="timer">
                                           <div class="timer-inner"><span class="d-block" id="hours">11</span><?php _e( 'Hrs', 'yog' ); ?></div>
                                        </div>
                                     </div>
                                     <div class="col-auto">
                                        <div class="timer">
                                           <div class="timer-inner"><span class="d-block" id="minutes">59</span><?php _e( 'Mins', 'yog' ); ?></div>
                                        </div>
                                     </div>
                                     <div class="col-auto">
                                        <div class="timer">
                                           <div class="timer-inner"><span class="d-block" id="seconds">49</span><?php _e( 'Sec', 'yog' ); ?></div>
                                        </div>
                                     </div>
                                   </div>
                              <?php endif; ?>
                              <div <?php yog_helper()->attr( false, array( 'class' => 'button_block', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                                 <?php 
                                    //Cart
                                    echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                                    	sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
                                    		esc_url( $product->add_to_cart_url() ),
                                    		esc_attr( 1 ),
                                    		esc_attr( 'btn btn-dark shop_now_btn' ),
                                    		'',
                                            esc_html__( 'ADD TO CART', 'yog' )
                                    	),
                                    $product );
                                                    
                                    //Wishlist Shortcode
                                    if ( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) ) {
                                        echo do_shortcode( '[yith_wcwl_add_to_wishlist]' );
                                    }
                                 ?>
                              </div>
                           </div>
                        </div>
                    </div>
                    <?php
                }
            
            //Wrapper End
            echo '</div>';
        
        endif;
        
        //Reset Post
        wp_reset_postdata();
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_autoparts_hot_products', 'yog_autoparts_hot_products' );