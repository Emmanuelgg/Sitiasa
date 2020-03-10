<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Furniture
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 *
 */
/*-------------------------------------------------------------------------------
|				Flipmart: Furniture Blog Module / Element Map				    |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Furniture Blog Posts', 'yog'),
      'base'        => 'yog_furniture_blog_posts',
      'class'       => 'icon_yog_furniture_blog_posts',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Furniture', 'yog'),
      'description' => esc_html__( 'Insert Blog Posts', 'yog' ),
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
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading'
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
|				Flipmart:  Furniture Image Banner Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Furniture Image Banner', 'yog'),
      'base'        => 'yog_furniture_image_banner',
      'class'       => 'icon_yog_furniture_image_banner',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Furniture', 'yog'),
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
                    esc_html__('Style Three', 'yog') => 'three'
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
                'param_name'  => 'yog_price',
                'dependency'  => array( 'element' => 'yog_heading_style', 'value'   => array( 'three' ) )
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_content'
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
|				Flipmart:  Furniture News Letter Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Furniture News Letter', 'yog'),
      'base'        => 'yog_furniture_newsletter',
      'class'       => 'icon_yog_furniture_newsletter',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Furniture', 'yog'),
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
|				Flipmart:  Furniture Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Furniture Slider', 'yog'),
      'base'        => 'yog_furniture_hero_sections',
      'class'       => 'icon_yog_furniture_hero_section',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Furniture', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_furniture_hero_section',
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
|				Flipmart: Furniture Banner  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_furniture_image_banner($atts, $content = null ){

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
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        if( $yog_style == 'one' ){
            
            //Link  
            $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
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
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'furniture-ad', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
               <?php echo $yog_before_tag; ?>
                  <img src="<?php echo esc_url( wp_get_attachment_url( $yog_banner ) ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ); ?>" />
                  <div class="furniture-ad-text">
                     <?php 
                        //Heading
                        if( $yog_heading ){
                            echo '<h1>'. $yog_heading .'</h1>';
                        }
                        
                        //Sub Heading
                        if( $yog_sub_heading ){
                            echo '<h3>'. $yog_sub_heading .'</h3>';
                        }
                        
                        //Content
                        if( $yog_content ){
                            echo '<h1>'. $yog_content .'</h1>';
                        }
                     ?>
                  </div>
               <?php echo $yog_after_tag; ?>
            </div>
            <?php
            
        }elseif( $yog_style == 'three' ){
            
            ?>
             <div <?php yog_helper()->attr( false, array( 'class' => 'furniture-adssec', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="col-sm-5 furniture-adssec-img">
                   <img src="<?php echo esc_url( wp_get_attachment_url( $yog_banner ) ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ); ?>" />
                </div>
                <div class="furniture-adssec-divider"></div>
                <div class="col-sm-5 furniture-adssec-content">
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
                            echo '<h3>'. $yog_price .'</h3>';
                        }
                        
                        //Content
                        if( $yog_content ){
                            echo '<p>'. $yog_content .'</p>';
                        }
                        
                        $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                        if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                        
                            $attributes   = array();
                            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                            $attributes   = implode( ' ', $attributes );
                           
                            echo '<a ' . $attributes . ' class="image">'. trim( $yog_link['title'] ) .'</a>';
                        }
                   ?>
                </div>
             </div>
            <?php
            
        }else{
            
            //Background
            $yog_bg = ( $yog_banner )? 'background-image: url('. wp_get_attachment_url( $yog_banner ) .');background-size: cover;' : '';
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'furniture-adsthird', 'style' => $yog_bg, 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div class="container">
                <div class="col-sm-7">
                   <?php 
                      //Heading
                      if( $yog_heading ){
                        echo '<h1 class="heading-color">'. $yog_heading .'</h1>';
                      }
                    
                      //Sub Heading
                      if( $yog_sub_heading ){
                        echo '<h1>'. $yog_sub_heading .'</h1>';
                      }
                    
                      //Content
                      if( $yog_content ){
                        echo '<p>'. $yog_content .'</p>';
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
   
   add_shortcode( 'yog_furniture_image_banner', 'yog_furniture_image_banner' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Furniture News Letter  / Element Shortcode			         |						
--------------------------------------------------------------------------------*/

	function yog_furniture_newsletter($atts, $content = null ){

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
        <div <?php yog_helper()->attr( false, array( 'class' => 'furniture-newsleter', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
           <div class="funiture-newsletter-content">
              <div class="funiture-newsletter-text">
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
                 <div class="furniture-newsletter-form">
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
   
   add_shortcode( 'yog_furniture_newsletter', 'yog_furniture_newsletter' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Furniture Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_furniture_hero_sections($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_furniture_hero_section' => '',
            'yog_animation'         => '',
            'yog_delay'             => ''
		), $atts));

        ob_start();
        
        //Hero Items
        $yog_hero = (array) vc_param_group_parse_atts( $yog_furniture_hero_section );
        
        if( $yog_hero ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div class="body-content furniture-slider" id="top-banner-and-menu" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                 <?php 
                    foreach( $yog_hero as $yog_item ){
                        
                        //Background
                        $yog_bg = ( isset( $yog_item['yog_bg'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_item['yog_bg'] ) .');"' : '';
                        ?>
                        <div class="item" <?php echo $yog_bg; ?>>
                          <div class="container-fluid">
                             <div class="container">
                                <div class="caption bg-color vertical-center furniture-slider-content">
                                   <?php 
                                      //Heading
                                      if( isset( $yog_item['yog_heading'] ) ){
                                         echo '<div class="big-text fadeInDown-1 white">'. $yog_item['yog_heading'] .'</div>';
                                      }
                                      
                                      //Sub Heading
                                      if( isset( $yog_item['yog_sub_heading'] ) ){
                                         echo '<div class="big-text fadeInDown-1 white white_websites">'. yog_highlight_it( $yog_item['yog_sub_heading'] ) .'</div>';
                                      }
                                      
                                      //Content
                                      if( isset( $yog_item['yog_content'] ) ){
                                         echo '<div class="big-subtext fadeInDown-1 black black-tab">'. $yog_item['yog_content'] .'</div>';
                                      }
                                      
                                      //Link
                                      $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                      if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                
                                        $attributes   = array();
                                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                        $attributes   = implode( ' ', $attributes );
                                       
                                        echo '<div class="slider-header fadeInDown-1 slider-btn"><a ' . $attributes . '>'. esc_html( trim( $yog_link['title'] ) ) .'</a></div>';
                                        
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
   
   add_shortcode( 'yog_furniture_hero_sections', 'yog_furniture_hero_sections' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Furniture Blog Post / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_furniture_blog_posts($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_column'     => '3',
            'yog_heading'    => '',
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
            
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'furniture-blog', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
                
                //Heading
                if( $yog_heading ){
                    echo '<h3>'. $yog_heading .'</h3>';
                }
                
                $yog_counter = 0;
                while ( $yog_post_query->have_posts() ) {
                    $yog_post_query->the_post();
                    
                    //Counter Increments
                    $yog_counter++;
                    
                    //Wrapper Start
                    if( $yog_counter == 1 ){
                        echo '<div class="row">';
                        $yog_close = true;
                    }
                    ?>
                    <div class="col-sm-6 <?php echo yog_get_column( $yog_column ); ?>">
                      <div class="funiture-blog-img">
                          <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?>
                          <div class="funiture-blog-content">
                             <div class="furniture-blog-date">
                                <p><?php echo get_the_date( 'd F Y' ); ?></p>
                             </div>
                             <div class="furniture-blog-name">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                             </div>
                             <div class="furniture-blog-text">
                                <?php echo yog_get_excerpt( array( 'yog_link_to_post' => false, 'yog_length' => 15 ) ); ?>
                             </div>
                          </div>
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
            
            echo '</div>';
            
            //Reset Loop Query
            wp_reset_postdata();
        }
            
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_furniture_blog_posts', 'yog_furniture_blog_posts' );