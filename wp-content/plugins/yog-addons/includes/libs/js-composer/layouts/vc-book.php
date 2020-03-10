<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Book
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 *
 */
/*-------------------------------------------------------------------------------
|				Flipmart:  Book Image Banner Module / Element Map				|						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Book Image Banner', 'yog'),
      'base'        => 'yog_book_image_banner',
      'class'       => 'icon_yog_book_image_banner',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Book', 'yog'),
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
                'heading'    => esc_html__( 'Link','yog'),
                'type'       => 'vc_link',
                'value'      => '',
                'param_name' => 'yog_link',
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
|				Flipmart:  Book News Letter Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Book News Letter', 'yog'),
      'base'        => 'yog_book_newsletter',
      'class'       => 'icon_yog_book_newsletter',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Book', 'yog'),
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
|				Flipmart:  Book Slider Module / Element Map				|						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Book Slider', 'yog'),
      'base'        => 'yog_book_hero_sections',
      'class'       => 'icon_yog_book_hero_section',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Book', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_book_hero_section',
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
       )
    );

/*--------------------------------------------------------------------------------
|				Flipmart: Book Image Banner Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_book_image_banner($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_style'       => 'one',
            'yog_banner'      => '',
            'yog_link'        => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start(); 
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        //Link Tag
        $yog_link_star = $yog_link_end = '';
        $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
        if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
    
            $attributes   = array();
            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
            $attributes   = implode( ' ', $attributes );
            
            $yog_link_star = '<a ' . $attributes . '>';
            $yog_link_star = '</a>';
        } 
        
        if( $yog_banner && $yog_style == 'one' ){
            
            printf( '<div '. yog_helper()->get_attr( false, array( 'class' => 'book-shop-ad book-shop-full', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>
                      	%s
                        	<img src="%s" alt="%s">
                        %s
                     </div>', $yog_link_star, esc_url( wp_get_attachment_url( $yog_banner ) ), esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ), $yog_link_end );
            
        }elseif( $yog_banner && $yog_style == 'two' ){
             printf( '<div '. yog_helper()->get_attr( false, array( 'class' => 'book-shop-ad-tab book-shop-ad', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>
                      	%s
                        	<img src="%s" alt="%s">
                        %s
                     </div>', $yog_link_star, esc_url( wp_get_attachment_url( $yog_banner ) ), esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ), $yog_link_end );
            
        }elseif( $yog_banner && $yog_style == 'three' ){
             printf( '<div '. yog_helper()->get_attr( false, array( 'class' => 'book-shop-ad-tab mg-top book-shop-ad', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>
                      	%s
                        	<img src="%s" alt="%s">
                        %s
                     </div>', $yog_link_star, esc_url( wp_get_attachment_url( $yog_banner ) ), esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ), $yog_link_end );
            
        }else{
             printf( '<div '. yog_helper()->get_attr( false, array( 'class' => 'book-shop-ad', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>
                      	%s
                      	   <img src="%s" alt="%s">
                        %s
                     </div>', $yog_link_star, esc_url( wp_get_attachment_url( $yog_banner ) ), esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ), $yog_link_end );
            
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_book_image_banner', 'yog_book_image_banner' );

/*--------------------------------------------------------------------------------
|				Flipmart: Book News Letter Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_book_newsletter($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_bg'          => '',
            'yog_heading'     => '',
            'yog_sub_heading' => '',
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
        
        ?>
    	<div <?php echo yog_helper()->get_attr( false, array( 'class' => 'book-newsletter', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay, 'style' => $yog_bg ) ); ?>>
        	<div class="book-newsletter-content">
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
                <div class="news-letter-input">
                	<?php echo do_shortcode( '[mc4wp_form id="'. $yog_form_id .'"]' ); ?>    
                </div>
            </div>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_book_newsletter', 'yog_book_newsletter' );
     
/*--------------------------------------------------------------------------------
|				Flipmart: Book Slider Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_book_hero_sections($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_book_hero_section' => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start(); 
        
        //Element Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_book_hero_section );
        
        //Content
        if( $yog_items ):
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
            ?>
            <div <?php echo yog_helper()->get_attr( false, array( 'id' => 'top-banner-and-menu', 'class' => 'body-content book-shop-slider', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
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
                                                  if( isset( $yog_item['yog_heading'] ) && !empty( $yog_item['yog_heading'] ) ){
                                                      echo '<h1>'. yog_highlight_it( $yog_item['yog_heading'] ) .'</h1>';
                                                  }
                                                    
                                                  //Sub Heading
                                                  if( isset( $yog_item['yog_sub_heading'] ) && !empty( $yog_item['yog_sub_heading'] ) ){
                                                      echo '<h1>'. $yog_item['yog_sub_heading'] .'</h1>';
                                                  }
                                              ?>
                                           </div>
                                           <div class="big-subtext fadeInDown-1">
                                          	  <?php 
                                                //Content
                                                if( isset( $yog_item['yog_content'] ) && !empty( $yog_item['yog_content'] ) ){
                                                    echo $yog_item['yog_content'];
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
                                                   
                                                    echo '<div class="button-holder fadeInDown-3"><a ' . $attributes . ' class="btn-lg btn btn-uppercase btn-primary shop-now-button">'. esc_html( trim( $yog_link['title'] ) ) .'</a></div>';
                                                    
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
        
        endif;
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_book_hero_sections', 'yog_book_hero_sections' );