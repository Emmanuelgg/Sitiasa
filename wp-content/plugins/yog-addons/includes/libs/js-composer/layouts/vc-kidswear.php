<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Kidswear
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 *
 */
/*-------------------------------------------------------------------------------
|				Flipmart:  Kidswear Heading Section Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Kidswear Heading', 'yog'),
      'base'        => 'yog_kidswear_heading',
      'class'       => 'icon_yog_kidswear_heading',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Kidswear', 'yog'),
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
|				Flipmart:  Kidswear Image Banner Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Kidswear Image Banner', 'yog'),
      'base'        => 'yog_kidswear_image_banner',
      'class'       => 'icon_yog_kidswear_image_banner',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Kidswear', 'yog'),
      'description' => esc_html__( 'Insert Image Banner', 'yog' ),
      'params'      => array(
               
            array(
                'heading'     => esc_html__( 'Banner Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_banner',
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
|				Flipmart:  Kidswear Products Slider Section Module / Element Map		     |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Kidswear Products', 'yog'),
      'base'        => 'yog_kidswear_products',
      'class'       => 'icon_yog_kidswear_products',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Kidswear', 'yog'),
      'description' => esc_html__( 'Insert Products Slider', 'yog' ),
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
                'heading'     => esc_html__('Banner Position', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_kidswear_position',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('Left Side', 'yog')  => 'left',
    				esc_html__('Right Side', 'yog') => 'right'
    			),
    			'description' => esc_html__('Select Banner Position', 'yog'),
    	    ),
            
            array(
                'heading'     => esc_html__( 'Banner Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_kidswear_heading'
            ),
            
            array(
                'heading'     => esc_html__( 'Banner Content','yog'),
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_kidswear_content'
            ),
            
            array(
                'heading'     => esc_html__( 'Banner Button','yog'),
                'type'        => 'vc_link',
                'value'       => '',
                'param_name'  => 'yog_kidswear_link'
            ),
            
            array(
                'heading'     => esc_html__( 'Banner Background','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_kidswear_bg',
            ),
                    
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_kidswear_product',
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
|				Flipmart:  Kidswear Shiping Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Kidswear Shiping', 'yog'),
      'base'        => 'yog_kidswear_shiping_lists',
      'class'       => 'icon_yog_kidswear_shiping_lists',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Kidswear', 'yog'),
      'description' => esc_html__( 'Insert Shiping Method', 'yog' ),
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
                'param_name' => 'yog_kidswear_shiping_list',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_heading',
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
|				Flipmart:  Kidswear Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Kidswear Slider', 'yog'),
      'base'        => 'yog_kidswear_sliders',
      'class'       => 'icon_yog_kidswear_sliders',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Kidswear', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_kidswear_slider',
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
|				Flipmart: Kidswear Heading Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_kidswear_heading($atts, $content = null ){

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
        <div <?php yog_helper()->attr( false, array( 'class' => 'heading-content', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <div class="divider-img">
                <img src="<?php echo YOG_CORE_DIR; ?>/assets/images/kids-divider.png" alt="Image Not Found" />
            </div>
            <?php 
                //Heading
                if( $yog_heading ){
                    echo '<h2>'. $yog_heading .'</h2>';
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
   
   add_shortcode( 'yog_kidswear_heading', 'yog_kidswear_heading' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Kidswear Image Banner  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_kidswear_image_banner($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_styles'    => 'one',
            'yog_banner'    => '',
            'yog_link'      => '',
            'yog_animation' => '',
            'yog_delay'     => ''
		), $atts));
        
        if( $content ){
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'kids-banner', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
               <?php 
                   //Image
                   if( $yog_banner ){
                    echo '<div class="kids-banner-img"><img src="'. wp_get_attachment_url( $yog_banner ) .'" alt="'. esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ) .'" /></div>';
                   } 
               ?>
               <div class="col-sm-6">
                  <div class="kids-banner-content">
                     <div class="divider-img divider-img-banner">
                        <img src="<?php echo YOG_CORE_DIR; ?>/assets/images/kids-divider.png" alt="Image Not Found" />
                     </div>
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
        }
            
        ob_start();
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_kidswear_image_banner', 'yog_kidswear_image_banner' ); 
   
/*--------------------------------------------------------------------------------
|				Flipmart: Kidswear Products Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_kidswear_products($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'          => '',
            'yog_content'          => '',
            'yog_kidswear_position'=> 'left',
            'yog_kidswear_heading' => '', 
            'yog_kidswear_content' => '',
            'yog_kidswear_bg'      => '',   
            'yog_kidswear_link'    => '',                        
            'yog_kidswear_product' => '',
            'yog_animation'        => '',
            'yog_delay'            => ''
		), $atts));

        ob_start(); 
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_kidswear_product );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            //Link
            $yog_before_tag = $yog_after_tag = $yog_tag = '';
            $yog_link = isset( $yog_kidswear_link )? vc_build_link( $yog_kidswear_link ) : '';
            if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
        
                $attributes   = array();
                $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
            	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
            	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                $attributes   = implode( ' ', $attributes );
                $yog_tag        = '<a ' . $attributes . '>'. esc_html( trim( $yog_link['title'] ) ) .'</a>';
                $yog_before_tag = '<a ' . $attributes . '>'; $yog_after_tag = '</a>';
                
            }
            
            $yog_products = '';
            foreach( $yog_items as $yog_item ){
                global $product;
                
                //Product
                $product = wc_get_product( $yog_item['id'] );
                
                //Feature Image
                $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $yog_item['id'] ), 'single-post-thumbnail' ); 
                $postdate 		= get_the_time( 'Y-m-d' );			// Post date
                $postdatestamp 	= strtotime( $postdate );			// Timestamped post date
                $newness 		= get_option( 'wc_nb_newness' ); 	// Newness in days as defined by option
                $yog_flash = '';
                if ( $product->is_on_sale() ) :
                    $yog_flash = '<span>'. esc_html__( 'Sale!', 'flipmart' ) .'</span>';
                elseif( ( time() - ( 60 * 60 * 24 * $newness ) ) < $postdatestamp ):
                    $yog_flash = '<span>'. esc_html__( 'New', 'flipmart' ) .'</span>';
                elseif( yog_helper()->get_option( 'product-hot-flash', 'raw', false, 'post' ) ):
                    $yog_flash = '<span>'. esc_html__( 'Hot', 'flipmart' ) .'</span>';
                endif;
                
                //Products
                $yog_products .= 
                '<div class="kids-products-inner">
                  <div class="kids-products-inner-img">
                     <a href="'. get_permalink( $yog_item['id'] ) .'">
                        <img src="'. $image_url[0] .'" alt="'. $image_url[1] .'">
                     </a>   
                     '. $yog_flash .'
                  </div>
                  <div class="kids-products-inner-text">
                     <h3>'. $product->get_title() .'</h3>
                     <p>'. $product->get_price_html() .'</p>
                     '. apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                        	sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
                        		esc_url( $product->add_to_cart_url() ),
                        		esc_attr( 1 ),
                        		'button',
                        		'',
                                esc_html__( 'Add to cart', 'yog' )
                        	),
                        $product ) 
                     .'
                  </div>
                </div>';
            }
            ?>
            <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'kids-product', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php 
                    //Heading
                    $yog_heading_content = '';
                    if( $yog_heading ){
                        $yog_heading_content .= '<h2>'. $yog_heading .'</h2>';
                    }
                    
                    //Content
                    if( $yog_content ){
                        $yog_heading_content .= '<p>'. $yog_content .'</p>';
                    }
                    
                    //Heading Content
                    if( $yog_heading_content ){
                        printf( '<div class="heading-content"><div class="divider-img"><img src="'. YOG_CORE_DIR .'/assets/images/kids-divider.png" alt="Image Not Found" /></div>%s</div>', $yog_heading_content );
                    }
                ?>
                <ul>
                    <li>
                    
                        <?php if( $yog_kidswear_position == 'left' ): ?>
                            <div class="kids-product-content">
                                <?php 
                                   //Background Image
                                   if( $yog_kidswear_bg ){
                                       echo  $yog_after_tag . '<img src="'. wp_get_attachment_url( $yog_kidswear_bg ) .'" alt="'. esc_attr( get_post_meta( $yog_kidswear_bg, '_wp_attachment_image_alt', true) ) .'">' . $yog_after_tag;
                                   } 
                                ?>
                                <div class="kids-product-inner">
                                    <?php 
                                        //Heading
                                        if( $yog_kidswear_heading ){
                                            echo '<h2>'. $yog_kidswear_heading .'</h2>';
                                        } 
                                        
                                        //Content
                                        if( $yog_kidswear_content ){
                                            echo '<p>'. $yog_kidswear_content .'</p>';
                                        }
                                        
                                        //Button
                                        echo $yog_tag;
                                     ?>
                                 </div>
                             </div>
                         <?php endif; ?> 
                         
                         <div class="kids-products">
                            <?php echo $yog_products; ?> 
                         </div>   
                            
                         <?php if( $yog_kidswear_position == 'right' ): ?>
                            <div class="kids-product-content">
                                <?php 
                                   //Background Image
                                   if( $yog_kidswear_bg ){
                                       echo  $yog_after_tag . '<img src="'. wp_get_attachment_url( $yog_kidswear_bg ) .'" alt="'. esc_attr( get_post_meta( $yog_kidswear_bg, '_wp_attachment_image_alt', true) ) .'">' . $yog_after_tag;
                                   } 
                                ?>
                                <div class="kids-product-inner">
                                    <?php 
                                        //Heading
                                        if( $yog_kidswear_heading ){
                                            echo '<h2>'. $yog_kidswear_heading .'</h2>';
                                        } 
                                        
                                        //Content
                                        if( $yog_kidswear_content ){
                                            echo '<p>'. $yog_kidswear_content .'</p>';
                                        }
                                        
                                        //Button
                                        echo $yog_tag;
                                     ?>
                                 </div>
                             </div>
                         <?php endif; ?>
                         
                    </li>
                </ul>
            </div>
            <?php
        }
            
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_kidswear_products', 'yog_kidswear_products' );

/*--------------------------------------------------------------------------------
|				Flipmart: Kidswear Shiping Lists  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_kidswear_shiping_lists($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_column'                => '3', 
            'yog_kidswear_shiping_list' => '',
            'yog_animation'             => '',
            'yog_delay'                 => ''
		), $atts));

        ob_start();
        
        //Element Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_kidswear_shiping_list );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'shiping', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php 
                    $yog_counter = 0;
                    foreach( $yog_items as $yog_item ){
                        
                        //Counter Increments
                        $yog_counter++;
                        
                        //Wrapper
                        if( $yog_counter == 1 ){
                            echo '<div class="row">';
                            $yog_close = true;
                        }
                        ?>
                        <div class="col-sm-4 <?php echo yog_get_column( $yog_column ); ?>">
                             <div class="shiping-content">
                                 <?php 
                                    //Image
                                    if( $yog_item['yog_img'] ){
                                        echo '<img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt="'. esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ) .'" />';
                                    }
                                    
                                    //Heading
                                    if( $yog_item['yog_heading'] ){
                                        echo '<h3>'. $yog_item['yog_heading'] .'</h3>';
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
                        $yog_close = false; 
                    }
                ?>
            </div>
            <?php
        }
            
        ob_start();
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_kidswear_shiping_lists', 'yog_kidswear_shiping_lists' ); 
               
     
/*--------------------------------------------------------------------------------
|				Flipmart: Kidswear Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_kidswear_sliders($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_kidswear_slider' => '',
            'yog_animation'       => '',
            'yog_delay'           => ''
		), $atts));

        ob_start();
        
        //Element Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_kidswear_slider );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div class="body-content kidswear-slider" id="top-banner-and-menu" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
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
                                   <div class="caption bg-color vertical-center text-left tp-color">
                                     <?php  
                                          //Heading
                                          if( isset( $yog_item['yog_heading'] ) ){
                                             echo '<div class="big-text fadeInDown-1 white">'. $yog_item['yog_heading'] .'</div>';
                                          }
                                          
                                          echo '<div class="big-subtext fadeInDown-1 black">';
                                          
                                              //Sub Heading
                                              if( isset( $yog_item['yog_sub_heading'] ) ){
                                                 echo '<h1>'. $yog_item['yog_sub_heading'] .'</h1>';
                                              }
                                              
                                              //Content
                                              if( isset( $yog_item['yog_content'] ) ){
                                                 echo '<h3>'. $yog_item['yog_content'] .'</h3>';
                                              }
                                          
                                          echo '</div>';
                                          
                                          //Link
                                          $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                          if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                    
                                            $attributes   = array();
                                            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                            $attributes   = implode( ' ', $attributes );
                                           
                                            echo '<div class="button-holder fadeInDown-3"><a ' . $attributes . ' class="btn-lg btn btn-uppercase btn-primary shop-now-button">'. esc_html( trim( $yog_link['title'] ) ) .'</a></div>';
                                            
                                          }  
                                     ?>
                                  </div>   
                                  <?php 
                                      //Image
                                      if( $yog_item['yog_img'] ){
                                        echo '<div class="slider-img"><img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt="'. esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ) .'" /></div>';
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
   
   add_shortcode( 'yog_kidswear_sliders', 'yog_kidswear_sliders' );