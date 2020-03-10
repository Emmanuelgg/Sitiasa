<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Shoes
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 */
/*-------------------------------------------------------------------------------
|				Flipmart: Shoes Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Shoes Blog', 'yog'),
      'base'        => 'yog_shoes_blog',
      'class'       => 'icon_yog_shoes_blog',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Shoes', 'yog'),
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
|				Flipmart:  Shoes Call Action Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Shoes Call Action', 'yog'),
      'base'        => 'yog_shoes_cta',
      'class'       => 'icon_yog_shoes_cta',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Shoes', 'yog'),
      'description' => esc_html__( 'Insert Call Action', 'yog' ),
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
                'heading'     => esc_html__( 'Bottom Content','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_bottom_content',
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
|				Flipmart:  Shoes Image Banner Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Shoes Image Banner', 'yog'),
      'base'        => 'yog_shoes_image_banner',
      'class'       => 'icon_yog_shoes_image_banner',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Shoes', 'yog'),
      'description' => esc_html__( 'Insert Image Banner', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__('Style', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_style',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('Style One', 'yog')   => 'one',
                    esc_html__('Style Two', 'yog')   => 'two'
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
|				Flipmart:  Shoes Info Teaser Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Shoes Info Teaser', 'yog'),
      'base'        => 'yog_shoes_info_teasers',
      'class'       => 'icon_yog_shoes_info_teasers',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Shoes', 'yog'),
      'description' => esc_html__( 'Insert Info Teaser', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_shoes_info_teaser',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'admin_label' => true,
                        'param_name'  => 'yog_heading',
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
                        'heading'     => esc_html__( 'Link','yog'),
                        'type'        => 'vc_link',
                        'value'       => '',
                        'param_name'  => 'yog_link',
                    )
                )
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
|				Flipmart:  Shoes Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Shoes Slider', 'yog'),
      'base'        => 'yog_shoes_sliders',
      'class'       => 'icon_yog_shoes_sliders',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Shoes', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_shoes_slider',
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
|				Flipmart: Shoes Blog Post / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_shoes_blog($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'    => '',
            'yog_column'     => '3',
            'yog_limit'      => '-1',
            'taxonomie'      => '',
            'yog_animation'  => '',
            'yog_delay'      => ''
		), $atts));

        ob_start(); 
        
        //Get Post Date.
        $yog_post_query = yog_post_query( array( 'post_type' => 'post', 'posts_per_page' => $yog_limit ), $taxonomie );
        
        //Check and Print Posts
        if( $yog_post_query->have_posts() ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            //Background
            $yog_bg = ( isset( $yog_bg ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_bg ) .');"' : '';
                            
            //Wrapper Start
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'blog-posts', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
            
                //Heading
                if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                    echo '<div class="blog-header"><h2>'. esc_html( $yog_heading ) .'</h2></div>';
                }
                
                //Loop
                while ( $yog_post_query->have_posts() ) {
                    $yog_post_query->the_post();
                
                    ?>
                    <div class="col-sm-6 <?php echo yog_get_column( $yog_column ); ?>">
                        <div class="blog">
                            <?php 
                                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');
                                echo '<img src="'. esc_url( $thumb[0] ) .'" alt="'. $thumb[1] .'" class="thumb-img">'; 
                            ?>
                            <div class="blog-content">
                               <?php
                                    //Title
                                    the_title( '<h1><a href="'. get_permalink() .'">', '</a></h1>' );
                                    
                                    //Date
                                    echo '<h2>'. get_the_date( 'd F' ) .'</h2>';
                                    
                                    //Excerpt 
                                    echo yog_get_excerpt( array( 'yog_length' => 20, 'yog_link_to_post' => false ) ); 
                                    
                                    //Date & Comment
                                    echo '<button type="button" class="read-more">'. esc_html__( 'READ MORE', 'yog' ) .'<img  src="'. YOG_CORE_DIR .'/assets/images/shoes-button.png"></button>';
                               ?>
                            </div>
                        </div>
                    </div>
                    <?php  
                 }  
            
            //Wrapper End      
            echo '</div>';
                
            //Rest WP Query
            wp_reset_postdata();
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_shoes_blog', 'yog_shoes_blog' );

/*--------------------------------------------------------------------------------
|				Flipmart: Shoes Call Action  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_shoes_cta($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'        => '',
            'yog_sub_heading'    => '',
            'yog_content'        => '',
            'yog_bg'             => '',
            'yog_link'           => '',
            'yog_bottom_content' => '',
            'yog_animation'      => '',
            'yog_delay'          => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'call-action', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
          <div class="call-action-content">
            <?php 
                 //Heading
                 if( $yog_heading ){
                    echo '<h1>'. $yog_heading .'</h1>';
                 }
                 
                 //Sub Heading
                 if( $yog_sub_heading ){
                    echo '<h2>'. $yog_sub_heading .'</h2><p id="demo"></p>';
                 }
                 
                 //Content
                 if( $yog_content ){
                    echo '<h4>'. $yog_content .'</h4>';
                 }
                 
                 //Link
                 $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                 if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
            
                    $attributes   = array();
                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                    $attributes   = implode( ' ', $attributes );
                   
                    echo '<a ' . $attributes . ' class="btn btn-success">'. esc_html( trim( $yog_link['title'] ) ) .' <img src="'. YOG_CORE_DIR .'/assets/images/shoes-button.png" alt=""></a>';
                    
                 }
                 
                 //Bottom Content
                 if( $yog_bottom_content ){
                    echo '<h3>'. $yog_bottom_content .'</h3>';
                 }
                  
            ?>
          </div>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_shoes_cta', 'yog_shoes_cta' );
        
        
/*--------------------------------------------------------------------------------
|				Flipmart: Shoes Banner  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_shoes_image_banner($atts, $content = null ){

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
            <div <?php yog_helper()->attr( false, array( 'class' => 'adbanner', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
               <?php 
                    printf( '%s<img src="%s" alt="%s">%s', $yog_before_tag, esc_url( wp_get_attachment_url( $yog_banner ) ), esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ), $yog_after_tag );
               ?>
            </div>
            <?php
            
        }elseif( $yog_style == 'two' ){
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'lastbanner', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
               <?php 
                    printf( '%s<img src="%s" alt="%s">%s', $yog_before_tag, esc_url( wp_get_attachment_url( $yog_banner ) ), esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ), $yog_after_tag );
               ?>
            </div>
            <?php
            
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_shoes_image_banner', 'yog_shoes_image_banner' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Shoes Info Teaser  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_shoes_info_teasers($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_shoes_info_teaser' => '',
            'yog_link'              => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_shoes_info_teaser );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'support', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="container">
                   <div class="row">
                      <div class="col-md-8 support-skew">
                         <div class="support-content">
                            <?php 
                                foreach( $yog_items as $yog_item ){
                                    
                                    //Link  
                                    $yog_links = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                    $yog_before_tag = $yog_after_tag = '';
                                  
                                    if ( isset( $yog_links['url'] ) && strlen( $yog_links['url'] ) > 0  ) {
                                    
                                        $attributes   = array();
                                        $attributes[] = 'href="' . esc_url( trim( $yog_links['url'] ) ) . '"';
                                    	$attributes[] = 'title="' . esc_attr( trim( $yog_links['title'] ) ) . '"';
                                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_links['target'] ) > 0 ? $yog_links['target'] : '_self' ) ) . '"';
                                        $attributes   = implode( ' ', $attributes );
                                       
                                        $yog_before_tag = '<a ' . $attributes . '>';
                                        $yog_after_tag  = '</a>';
                                    
                                    }
                            ?>
                                <div class="col-md-6">
                                   <div class="support-icon">
                                     <?php printf( '%s<img src="%s" alt="%s">%s', $yog_before_tag, esc_url( wp_get_attachment_url( $yog_item['yog_img'] ) ), esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ), $yog_after_tag ); ?>
                                  </div>
                                  <div class="support-text">
                                     <?php 
                                        //Heading
                                        if( $yog_item['yog_heading'] ){
                                            echo '<h5>'. $yog_item['yog_heading'] .'</h5>';
                                        }
                                          
                                        //Content
                                        if( $yog_item['yog_content'] ){
                                            echo '<p>'. $yog_item['yog_content'] .'</p>';
                                        }
                                     ?>
                                  </div>
                                </div>
                            <?php } ?>
                         </div>
                      </div>
                      <div class="col-md-3 pull-right">
                         <div class="support-contact-btn">
                            <?php 
                                //Link
                                $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                                if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                        
                                    $attributes   = array();
                                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                    $attributes   = implode( ' ', $attributes );
                                   
                                    echo '<a ' . $attributes . ' class="read-more">'. esc_html( trim( $yog_link['title'] ) ) .' <i class="fa fa-angle-double-right"></i></a>';
                                    
                                } 
                            ?>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
        <?php
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_shoes_info_teasers', 'yog_shoes_info_teasers' );
        

/*--------------------------------------------------------------------------------
|				Flipmart: Shoes Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_shoes_sliders($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_shoes_slider' => '',
            'yog_animation'    => '',
            'yog_delay'        => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_shoes_slider );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div class="body-content shoes-slider" id="top-banner-and-menu" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div class="col-xs-12 col-sm-12 col-md-12 demo-cont sliderwidth">
                 <div class="fnc-slider example-slider">
                    <div class="fnc-slider__slides">
                         <?php 
                            //Variables.
                            $yog_counter = 1; $yog_counter_ary = 0;
                            $yog_classes = array( 'green', 'dark', 'red', 'blue' ); 
                            
                            //Loop
                            foreach( $yog_items as $yog_item ){
                                
                                //Background
                                $yog_bg      = ( isset( $yog_item['yog_bg'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_item['yog_bg'] ) .');"' : '';
                                
                                //Classes
                                $yog_class   = array( 'fnc-slide' );
                                $yog_class[] = 'm--blend-'. $yog_classes[$yog_counter_ary];
                                $yog_class[] = ( $yog_counter == 1 )? 'm--active-slide' : '';
                                
                                
                                ?>
                                <div class="<?php echo join( ' ', $yog_class ); ?>">
                                    <div class="fnc-slide__inner" <?php echo $yog_bg; ?>>
                                       <div class="fnc-slide__mask">
                                          <div class="fnc-slide__mask-inner"></div>
                                       </div>
                                       <div class="fnc-slide__content slidecontent">
                                          <?php 
                                              //Heading
                                              if( $yog_item['yog_heading'] ){
                                                 echo '<h1>'. $yog_item['yog_heading'] .'</h1>';
                                              }
                                              
                                              //Sub Heading
                                              if( $yog_item['yog_sub_heading'] ){
                                                 echo '<h2>'. $yog_item['yog_sub_heading'] .'</h2>';
                                              }
                                              
                                              //Content
                                              if( $yog_item['yog_content'] ){
                                                 echo '<p>'. $yog_item['yog_content'] .'</p>';
                                              }
                                              
                                              //Link
                                              $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                              if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                        
                                                $attributes   = array();
                                                $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                            	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                            	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                                $attributes   = implode( ' ', $attributes );
                                               
                                                echo '<a ' . $attributes . '><button class="btn btn-success">'. esc_html( trim( $yog_link['title'] ) ) .' <img src="'. YOG_CORE_DIR .'/assets/images/shoes-button.png" alt=""></button></a>';
                                                
                                              } 
                                          ?>
                                       </div>
                                    </div>
                                </div>
                               <?php
                               
                               //Counter
                               if( $yog_counter_ary == 3 ){
                                   $yog_counter_ary = 0;
                               }else{
                                    $yog_counter_ary++;
                               } 
                               
                               //Increments
                               $yog_counter++;
                            }
                         ?>
                    </div>
                    <nav class="fnc-nav">
                     <div class="fnc-nav__bgs">
                        <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
                        <div class="fnc-nav__bg m--navbg-dark"></div>
                        <div class="fnc-nav__bg m--navbg-red"></div>
                        <div class="fnc-nav__bg m--navbg-blue"></div>
                     </div>
                     <div class="fnc-nav__controls">
                        <button class="fnc-nav__control">
                        <span class="fnc-nav__control-progress"></span>
                        </button>
                        <button class="fnc-nav__control">
                        <span class="fnc-nav__control-progress"></span>
                        </button>
                        <button class="fnc-nav__control">
                        <span class="fnc-nav__control-progress"></span>
                        </button>
                        <button class="fnc-nav__control">
                        <span class="fnc-nav__control-progress"></span>
                        </button>
                     </div>
                  </nav>
                 </div>
              </div>
            </div>
            <?php
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_shoes_sliders', 'yog_shoes_sliders' );