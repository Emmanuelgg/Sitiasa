<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Restaurant
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 */
/*-------------------------------------------------------------------------------
|				Flipmart:  Restaurant About Us Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Restaurant About Us', 'yog'),
      'base'        => 'yog_restaurant_abouts',
      'class'       => 'icon_yog_restaurant_abouts',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Restaurant', 'yog'),
      'description' => esc_html__( 'Insert About Us Content', 'yog' ),
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
                'type'        => 'textarea_html',
                'value'       => '',
                'param_name'  => 'content',
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
|				Flipmart: Restaurant Blog Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Restaurant Blog', 'yog'),
      'base'        => 'yog_restaurant_blog',
      'class'       => 'icon_yog_restaurant_blog',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Restaurant', 'yog'),
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
|				Flipmart:  Restaurant Call Action Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Restaurant Call Action', 'yog'),
      'base'        => 'yog_restaurant_cta',
      'class'       => 'icon_yog_restaurant_cta',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Restaurant', 'yog'),
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
|				Flipmart:  Restaurant Contact Info Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Restaurant Contact Info', 'yog'),
      'base'        => 'yog_restaurant_contact_info',
      'class'       => 'icon_yog_restaurant_contact_info',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Restaurant', 'yog'),
      'description' => esc_html__( 'Insert Contact Information', 'yog' ),
      'params'      => array(
            
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
                'param_name'  => 'yog_desc',
            ),
            
            array(
                'heading'     => esc_html__( 'Phone','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_phone',
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
|				Flipmart:  Restaurant Contact Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Restaurant Contact', 'yog'),
      'base'        => 'yog_restaurant_contact',
      'class'       => 'icon_yog_restaurant_contact',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Restaurant', 'yog'),
      'description' => esc_html__( 'Insert Contact', 'yog' ),
      'params'      => array(
            
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
                'param_name'  => 'yog_desc',
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea_html',
                'value'       => '',
                'param_name'  => 'content',
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
|				Flipmart:  Restaurant Package Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Restaurant Package', 'yog'),
      'base'        => 'yog_restaurant_packages',
      'class'       => 'icon_yog_restaurant_packages',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Restaurant', 'yog'),
      'description' => esc_html__( 'Insert Package', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Package','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_package',
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
|				Flipmart :  Restaurant Testimonial CPT Module / Elements Shortcode			|						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Restaurant Testimonial', 'yog'),
      'base'        => 'yog_restaurant_testimonial',
      'class'       => 'icon_yog_restaurant_testimonial',
      'icon'	    => 'icon_yog_restaurant_testimonial',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Restaurant', 'yog'),
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

/*-------------------------------------------------------------------------------
|				Flipmart:  Restaurant Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Restaurant Slider', 'yog'),
      'base'        => 'yog_restaurant_sliders',
      'class'       => 'icon_yog_restaurant_sliders',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Restaurant', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_restaurant_slider',
                'params'     => array(
                   
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
                        'heading'     => esc_html__( 'Button One','yog'),
                        'type'        => 'vc_link',
                        'value'       => '',
                        'param_name'  => 'yog_btn_one',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Button Two','yog'),
                        'type'        => 'vc_link',
                        'value'       => '',
                        'param_name'  => 'yog_btn_two',
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
|				Flipmart: Restaurant About Us  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_restaurant_abouts($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'   => '',
            'yog_link'      => '',
            'yog_img'       => '',
            'yog_animation' => '',
            'yog_delay'     => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'about-us', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <div class="row">
               <div class="col-sm-6">
                  <?php 
                       //Heading
                       if( $yog_heading ){
                          echo '<h2>'. $yog_heading .'<span><img src="'. YOG_CORE_DIR .'/assets/images/restaurant-divider.png" alt="Image Not Found"></span></h2>';
                       } 
                       
                       //Content
                       echo $content;
                       
                       //Button
                       $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                       if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                    
                            $attributes   = array();
                            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                            $attributes   = implode( ' ', $attributes );
                           
                            echo '<a ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
                            
                       }
                  ?>
               </div>
               <div class="col-sm-6 about-us-img">
                  <?php 
                      //Image
                      if( isset( $yog_img ) ){
                          echo '<img src="'. wp_get_attachment_url( $yog_img ) .'" alt="'. esc_attr( get_post_meta( $yog_img, '_wp_attachment_image_alt', true) ) .'">';
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
   
   add_shortcode( 'yog_restaurant_abouts', 'yog_restaurant_abouts' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Restaurant Blog Post / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_restaurant_blog($atts, $content = null ){

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
                            
            //Wrapper Start
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'blog-posts', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
            
                //Heading
                if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                    echo '<h2>'. esc_html( $yog_heading ) .' <span><img src="'. YOG_CORE_DIR .'/assets/images/restaurant-divider.png" alt="Image Not Found"></span></h2>';
                }
                
                //Loop
                $yog_counter = 0;
                while ( $yog_post_query->have_posts() ) {
                    $yog_post_query->the_post();
                    
                    //Counter Incremenst
                    $yog_counter++;
                    
                    //Wrapper Start
                    if( $yog_counter == 1 ){
                        echo '<div class="row">';
                        $yog_close = true;
                    }
                    ?>
                    <div class="col-sm-4 <?php echo yog_get_column( $yog_column ); ?> posts-columns">
                        <?php 
                            //Feature Image
                            if( has_post_thumbnail() ): 
                                echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); 
                            endif; 
                        ?> 
                        <div class="blog-content">
                            <?php
                                //Title
                                the_title( '<h3><a href="'. get_permalink() .'">', '</a></h3><div class="blog-divider"></div>' );
                                
                                //Excerpt 
                                echo yog_get_excerpt( array( 'yog_length' => 20, 'yog_link_to_post' => false ) ); 
                                
                                //Date & Comment
                                printf( '<h4>%s - %s %s</h4>', get_the_date( 'd F, Y' ), get_comments_number(), esc_html__( 'Comments', 'yog' ) );
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
   
   add_shortcode( 'yog_restaurant_blog', 'yog_restaurant_blog' );

/*--------------------------------------------------------------------------------
|				Flipmart: Restaurant Call Action  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_restaurant_cta($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
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
        <div <?php yog_helper()->attr( false, array( 'class' => 'call-action', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
             <?php 
                 //Heading
                 if( $yog_heading ){
                    echo '<h2>'. $yog_heading .'</h2>';
                 }
                 
                 //Content
                 if( $yog_content ){
                    echo '<h5>'. $yog_content .'</h5>';
                 } 
                 
                 //Button
                 $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                 if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                
                    $attributes   = array();
                    $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                    $attributes   = implode( ' ', $attributes );
                   
                    echo '<a ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
                        
                 }
              ?>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_restaurant_cta', 'yog_restaurant_cta' );
      
/*--------------------------------------------------------------------------------
|				Flipmart: Restaurant Contact  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_restaurant_contact($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_desc'        => '',
            'yog_img'         => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'contact-form', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <?php 
                   //Heading
                   if( $yog_heading ){
                      echo '<h2>'. $yog_heading .'<span><img src="'. YOG_CORE_DIR .'/assets/images/restaurant-divider.png" alt="Image Not Found"></span></h2>';
                   } 
              ?>  
              <div class="row">
                 <div class="col-sm-6">
                     <?php 
                          //Description
                          if( $yog_desc ){
                             echo '<p>'. $yog_desc .'</p>';
                          } 
                          
                          //Content
                          echo do_shortcode( $content ); 
                     ?>
                  </div>
                  <div class="col-sm-6">
                     <?php 
                        //Image
                        if( $yog_img ){
                            echo '<img src="'. wp_get_attachment_url( $yog_img ) .'" alt="'. esc_attr( get_post_meta( $yog_img, '_wp_attachment_image_alt', true) ) .'">';
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
   
   add_shortcode( 'yog_restaurant_contact', 'yog_restaurant_contact' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Restaurant Contact Info  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_restaurant_contact_info($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_desc'        => '',
            'yog_phone'       => '',
            'yog_img'         => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div  class="contact-us" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
           <div class="contact-us-back row">
              <div class="col-sm-1">
                 <img src="<?php echo YOG_CORE_DIR; ?>/assets/images/restaurant-ph-icon.jpg" alt="Image Not Found" />
              </div>
              <div class="col-sm-3">
                 <?php 
                    //Heading
                    if( $yog_heading ){
                       echo '<h4>'. $yog_heading .'</h4>'; 
                    }
                    
                    //Description
                    if( $yog_desc ){
                       echo '<p>'. $yog_desc .'</p>'; 
                    }
                 ?>
              </div>
              <div class="col-sm-5">
                 <?php 
                    //Phone
                    if( $yog_phone ){
                       echo '<h1>'. $yog_phone .'</h1>'; 
                    }
                 ?>
              </div>
              <div class="contact-chif">
                 <?php 
                    //Image
                    if( $yog_img ){
                        echo '<img src="'. wp_get_attachment_url( $yog_img ) .'" alt="'. esc_attr( get_post_meta( $yog_img, '_wp_attachment_image_alt', true) ) .'">';
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
   
   add_shortcode( 'yog_restaurant_contact_info', 'yog_restaurant_contact_info' );
         
/*--------------------------------------------------------------------------------
|				Flipmart: Restaurant Package  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_restaurant_packages($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_package'     => '',
            'yog_sub_heading' => '',
            'yog_content'     => '',
            'yog_link'        => '',
            'yog_img'         => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'special-package', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
           <?php 
               //Heading
               if( $yog_heading ){
                  echo '<h2>'. $yog_heading .'<span><img src="'. YOG_CORE_DIR .'/assets/images/restaurant-divider.png" alt="Image Not Found"></span></h2>';
               }
           ?>  
           <div class="row">
              <div class="col-sm-6">
                 <?php 
                    //Image
                    if( $yog_img ){
                      echo '<img src="'. wp_get_attachment_url( $yog_img ) .'" alt="'. esc_attr( get_post_meta( $yog_img, '_wp_attachment_image_alt', true) ) .'">';
                    }
                 ?> 
              </div>
              <div class="col-sm-6">
                 <div class="special-package-content">
                    <?php 
                        //Heading
                        if( $yog_package ){
                           echo '<h3>'. $yog_package .'</h3>'; 
                        }
                        
                        //Sub Heading
                        if( $yog_sub_heading ){
                           echo '<h4>'. $yog_sub_heading .'</h4>'; 
                        }
                        
                        //Content
                        if( $yog_content ){
                           echo '<p>'. $yog_content .'</p>'; 
                        }
                        
                        //Button
                        $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                        if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                    
                            $attributes   = array();
                            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                            $attributes   = implode( ' ', $attributes );
                           
                            echo '<a ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
                            
                       }
                    ?>
                 </div>
              </div> 
           </div>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_restaurant_packages', 'yog_restaurant_packages' );

/*--------------------------------------------------------------------------------
|				Flipmart:  Restaurant Testimonial CPT Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_restaurant_testimonial($atts, $content = null ){

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
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'testimonial-slider', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div id="tcb-testimonial-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php 
                            $yog_counter = 1; $yog_columns = 1;
                            while ( $yog_post_query->have_posts() ) {
                                $yog_post_query->the_post();
                                
                                //Class
                                $yog_class = ( $yog_columns == 1 )? ' active' : '';
                                
                                //Wrapper Start.
                                if( $yog_counter == 1 ){
                                    echo '<div class="item'. $yog_class .'"><div class="row">';
                                    $yog_close = true;
                                }
                                
                                //Content
                                ?>
                                <div class="col-xs-6 testimonial">
                                   <figure class="clearfix">
                                      <div class="col-md-5 col-sm-5 col-xs-12 slide-img">
                                         <?php 
                                            //Image
                                            echo get_the_post_thumbnail( get_the_ID(), array( 100, 100 ) );
                                            
                                            //Title
                                            the_title( '<p>', '</p>' );
                                         ?>
                                      </div>
                                      <div class="col-md-7 col-sm-7 col-xs-12 testimonial-des">
                                         <figcaption class="caption">
                                            <p><?php echo get_post_meta( get_the_ID(), 'testimonial-content', true ); ?></p>
                                            <p><?php echo get_post_meta( get_the_ID(), 'testimonial-company', true ); ?></p>
                                         </figcaption>
                                      </div>
                                   </figure>
                                </div>
                                <?php
                                
                                //Wrapper Close
                                if( $yog_counter == 2 ){
                                    echo '</div></div>';
                                    $yog_close = false;
                                    $yog_counter = 1;
                                }else{
                                    $yog_counter++;
                                }
                                
                                //Counter Increments
                                $yog_columns++;
                            }
                            
                            //Close
                            if( $yog_close ){
                                echo '</div></div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php
            
        endif;
                
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_restaurant_testimonial', 'yog_restaurant_testimonial' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Restaurant Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_restaurant_sliders($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_restaurant_slider' => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //Elements Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_restaurant_slider );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            
            <div class="body-content rasturant-header" id="top-banner-and-menu" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm restaurant-slider owl-theme">
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
                                       //Image
                                       if( isset( $yog_item['yog_img'] ) ){
                                          echo '<div class="slider-header fadeInDown-1 slider-btn slider-logo"><span><img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt=""></span></div>';
                                       }
                                 
                                       //Heading
                                       if( isset( $yog_item['yog_heading'] ) ){
                                         echo '<div class="big-text fadeInDown-1 white r-big-text">'. $yog_item['yog_heading'] .'</div>';
                                       }
                                      
                                       //Content
                                       if( isset( $yog_item['yog_content'] ) ){
                                         echo '<div class="big-subtext fadeInDown-1 black r-big-small">'. $yog_item['yog_content'] .'</div>';
                                       } 
                                       
                                       //Button
                                       echo '<div class="button-holder fadeInDown-3">';
                                       
                                           $yog_link = isset( $yog_item['yog_btn_one'] )? vc_build_link( $yog_item['yog_btn_one'] ) : '';
                                           if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                        
                                                $attributes   = array();
                                                $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                            	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                            	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                                $attributes   = implode( ' ', $attributes );
                                               
                                                echo '<a ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
                                                
                                           }
                                           
                                           $yog_link = isset( $yog_item['yog_btn_two'] )? vc_build_link( $yog_item['yog_btn_two'] ) : '';
                                           if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                        
                                                $attributes   = array();
                                                $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                            	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                            	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                                $attributes   = implode( ' ', $attributes );
                                               
                                                echo '<a ' . $attributes . '>'. trim( $yog_link['title'] ) .'</a>';
                                                
                                           }
                                       
                                       echo '</div>';
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
   
   add_shortcode( 'yog_restaurant_sliders', 'yog_restaurant_sliders' );