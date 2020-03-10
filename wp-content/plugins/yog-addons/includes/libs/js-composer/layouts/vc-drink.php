<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Drink
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 *
 */
/*-------------------------------------------------------------------------------
|				Flipmart: Drink Blog Module / Element Map				    |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Drink Blog Posts', 'yog'),
      'base'        => 'yog_drink_blog_posts',
      'class'       => 'icon_yog_drink_blog_posts',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Drink', 'yog'),
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
|				Flipmart:  Drink Call Action Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Drink Call Action', 'yog'),
      'base'        => 'yog_drink_cta',
      'class'       => 'icon_yog_drink_cta',
      'icon'	    => 'icon-wpb-ui-custom_cta',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Drink', 'yog'),
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
                'heading'     => esc_html__( 'Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_img',
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
|				Flipmart:  Drink Heading Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Drink Heading', 'yog'),
      'base'        => 'yog_drink_heading',
      'class'       => 'icon_yog_drink_heading',
      'icon'	    => 'icon-wpb-ui-custom_heading',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Drink', 'yog'),
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
|				Flipmart:  Drink Heading Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Drink Lists', 'yog'),
      'base'        => 'yog_drink_list',
      'class'       => 'icon_yog_drink_list',
      'icon'	    => 'icon-wpb-ui-custom_heading',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Drink', 'yog'),
      'description' => esc_html__( 'Insert List Information', 'yog' ),
      'params'      => array(
            
            array(
                'heading'     => esc_html__('Style', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_style',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('Contact List', 'yog')   => 'one',
    				esc_html__('Details List', 'yog')   => 'two',
                    esc_html__('Delivery List', 'yog')  => 'three'
    			)
    	    ),
            
            array(
                'heading'     => esc_html__('Columns', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_column',
    			'value' => array(
                    esc_html__('Default Column', 'yog') => '',
    				esc_html__('Two Column', 'yog')     => '2',
    				esc_html__('Three Column', 'yog')   => '3',
                    esc_html__('Four Column', 'yog')    => '4',
    			),
    			'description' => esc_html__('Select Number Of Column', 'yog'),
                'dependency'  => array( 'element' => 'yog_style', 'value'   => array( 'three' ) ),
    	    ),
            
    		array(
                'type'       => 'param_group',
                'value'      => '',
                'dependency' => array( 'element' => 'yog_style', 'value'   => array( 'one', 'two' ) ),
                'param_name' => 'yog_drink_lists',
                'params'     => array(
                    
                     array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_heading'
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
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_drink_delivery',
                'dependency' => array( 'element' => 'yog_style', 'value'   => array( 'three' ) ),
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
                        'param_name'  => 'yog_sub_heading'
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
|				Flipmart:  Drink News Letter Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Drink News Letter', 'yog'),
      'base'        => 'yog_drink_newsletter',
      'class'       => 'icon_yog_drink_newsletter',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Drink', 'yog'),
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
                'admin_label' => true,            
                'value'       => '',
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
    |				Flipmart:  Drink Products Module / Element Map		     |						
--------------------------------------------------------------------------------*/

    vc_map( array(
    	  'name'        => esc_html__('Drink Products', 'yog'),
    	  'base'        => 'yog_drink_heros',
    	  'class'       => 'icon_yog_drink_heros',
    	  'icon'	    => 'icon-wpb-ui-accordion',
    	  'weight'      => 101,
    	  'category'    => esc_html__('Flipmart Drink', 'yog'),
    	  'description' => esc_html__( 'Insert Products', 'yog' ),
    	  'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_drink_hero',
                'params'     => array(
                    
                     array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_heading'
                    ),
                    
                    array(
        				'type'        => 'autocomplete',
        				'heading'     => esc_html__( 'Select identificator', 'yog' ),
        				'param_name'  => 'id',
        				'description' => esc_html__( 'Input product ID or product SKU or product title to see suggestions', 'yog' ),
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
|				Flipmart: Drink Blog Post / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_drink_blog_posts($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_column'     => '2',
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
            
            while ( $yog_post_query->have_posts() ) {
                $yog_post_query->the_post();
                
                //Formate
                $format = get_post_format();
                ?>
                <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'blog-posts', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                  <div class="container">
                    <div class="row">
                       <div class="col-sm-6">
                          <?php 
                              if( 'gallery' === $format && $gallery = yog_helper()->get_option( 'post-gallery' ) ) {
                                
                            		if ( is_array( $gallery ) ) {
                                        
                                        echo '<div id="slider"><a href="javascript:void(0)" class="control_next"><i class="fa fa-angle-right"></i></a><a href="javascript:void(0)" class="control_prev"><i class="fa fa-angle-left"></i></a><ul>';
                                        
                            			foreach ( $gallery as $item ) {
                            				if ( isset ( $item['attachment_id'] ) ) {
                            					printf( '<li>%s</li>', wp_get_attachment_image( $item['attachment_id'], 'large', false, array( 'alt' => esc_attr( $item['title'] ) ) ) );
                            				}
                            			}
                                        
                                        echo '</ul></div>';
                                    }
                                    
                              }elseif( has_post_thumbnail() ){
                         	      
                                  echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) );
                                  
                         	  }
                          ?>
                       </div>
                       <div class="col-sm-6">
                          <div class="heading-content heading-content-sec">
                             <div class="heading-divider"></div>
                             <h2><?php the_title(); ?></h2>
                          </div>
                          <div class="blog-posts-content">
                             <?php echo yog_get_excerpt( array( 'yog_link_to_post' => false ) ); ?>
                             <div class="blog-posts-btn">
                                <a href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Read More', 'yog' ); ?></a>
                             </div>
                          </div>
                       </div>
                    </div>
                  </div>
                </div>
                <?php
            }
        
        }
            
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_drink_blog_posts', 'yog_drink_blog_posts' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Drink Call Action Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_drink_cta($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_content'     => '',
            'yog_img'         => '',
            'yog_link'        => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start(); 
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'call-action', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
             <div class="container">
                <div class="row">
                   <div class="col-sm-6">
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
                              echo '<p>'. $yog_content .'</p>';
                           }
                           
                           //Link  
                           $yog_link = isset( $yog_link )? vc_build_link( $yog_link ) : '';
                          
                           if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                            
                                $attributes   = array();
                                $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                            	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                            	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                $attributes   = implode( ' ', $attributes );
                               
                                echo '<a ' . $attributes . ' class="image">'. $yog_link['title'] .'</a>';
                            
                           } 
                      ?>
                   </div>
                   <div class="call-action-img">
                      <?php if( $yog_img ): ?>  
                         <img src="<?php echo esc_url( wp_get_attachment_url( $yog_img ) ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_img, '_wp_attachment_image_alt', true) ); ?>" />
                      <?php endif; ?>
                   </div>
                </div>
             </div>
        </div>
        <?php
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_drink_cta', 'yog_drink_cta' );
  
/*--------------------------------------------------------------------------------
|				Flipmart: Drink Heading Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_drink_heading($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'   => '',
            'yog_animation' => '',
            'yog_delay'     => ''
		), $atts));

        ob_start(); 
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        if( $yog_heading ){
            
            echo 
            '<div '. yog_helper()->get_attr( false, array( 'class' => 'heading-content', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>
              <div class="heading-divider"></div>
              <h2>'. $yog_heading .'</h2>
            </div>';
        }
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_drink_heading', 'yog_drink_heading' );
  
/*--------------------------------------------------------------------------------
|				Flipmart: Drink Contact Info Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_drink_list($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_style'          => 'one',
            'yog_drink_lists'    => '',
            'yog_drink_delivery' => '',
            'yog_column'         => '',
            'yog_animation'      => '',
            'yog_delay'          => ''
		), $atts));

        ob_start(); 
        
        //Contact Sections Items
        $yog_drink_lists = (array) vc_param_group_parse_atts( $yog_drink_lists );
        $yog_drink_delivery = (array) vc_param_group_parse_atts( $yog_drink_delivery );
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        if( $yog_drink_lists ){
            
            //Wrapper
            if( $yog_style == 'two' ){
                echo '<ul '. yog_helper()->get_attr( false, array( 'class' => 'icon-list', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ). '>';
            }
            
            foreach( $yog_drink_lists as $yog_drink_list ){
                
                if( $yog_style == 'one' ){
                    ?>
                    <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'details-list', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                      <?php if( $yog_drink_list['yog_img'] ){ ?>  
                          <div class="details-list-img">
                             <img src="<?php echo esc_url( wp_get_attachment_url( $yog_drink_list['yog_img'] ) ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_drink_list['yog_img'], '_wp_attachment_image_alt', true) ); ?>">
                          </div>
                      <?php } ?>
                      <div class="details-list-content">
                         <?php 
                            //Heading
                            if( $yog_drink_list['yog_heading'] ){
                                echo '<h1>'. $yog_drink_list['yog_heading'] .'</h1>';
                            }
                            
                            //Description
                            if( $yog_drink_list['yog_description']  ){
                                echo $yog_drink_list['yog_description'];
                            }
                         ?>
                      </div>
                    </div>
                    <?php
                  }else{
                    ?>
                    <li>
                         <?php if( $yog_drink_list['yog_img'] ){ ?>
                             <div class="icon-list-img">
                                <img src="<?php echo esc_url( wp_get_attachment_url( $yog_drink_list['yog_img'] ) ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_drink_list['yog_img'], '_wp_attachment_image_alt', true) ); ?>" />
                             </div>
                         <?php } ?>
                         <div class="icon-list-img-content">
                            <?php 
                                //Heading
                                if( $yog_drink_list['yog_heading'] ){
                                    echo '<h3>'. $yog_drink_list['yog_heading'] .'</h3>';
                                }
                                
                                //Description
                                if( $yog_drink_list['yog_description']  ){
                                    echo '<p>'. $yog_drink_list['yog_description'] .'</p>';
                                }
                             ?>
                         </div>
                      </li>
                    <?php
                  }
                
            }
            
            //Wrapper End
            if( $yog_style == 'two' ){
                echo '</ul>';
            }
            
        }
        
        if( $yog_drink_delivery ){
            
            $yog_counter = 0;
            foreach( $yog_drink_delivery as $yog_drink_item ){
                
                //Counter Increments
                $yog_counter++;
                
                //Wrapper Start
                if( $yog_counter == 1 ){
                    echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'row', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
                    $yog_close = true;
                }
                ?>
                <div class="col-sm-4 <?php echo esc_attr( yog_get_column( $yog_column ) ); ?>">
                   <div class="delivery">
                      <div class="delivery-img">
                         <?php 
                            //Image
                            if( $yog_drink_item['yog_img'] ){
                                echo '<img src="'. esc_url( wp_get_attachment_url( $yog_drink_item['yog_img'] ) ) .'" alt="'. esc_attr( get_post_meta( $yog_drink_item['yog_img'], '_wp_attachment_image_alt', true) ) .'">';
                            }
                            
                            //Heading
                            if( $yog_drink_item['yog_heading'] ){
                                echo '<h3>'. $yog_drink_item['yog_heading'] .'</h3>';
                            } 
                         ?>
                      </div>
                      <div class="delivery-content">
                         <?php 
                            //Heading
                            if( $yog_drink_item['yog_sub_heading'] ){
                                echo '<h3>'. $yog_drink_item['yog_sub_heading'] .'</h3>';
                            } 
                            
                            //Heading
                            if( $yog_drink_item['yog_description'] ){
                                echo '<p>'. $yog_drink_item['yog_description'] .'</p>';
                            } 
                         ?>
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
        }
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_drink_list', 'yog_drink_list' );
  
/*--------------------------------------------------------------------------------
|				Flipmart: Drink News Letter Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_drink_newsletter($atts, $content = null ){

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
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'news-letter', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
         <div class="container">
            <div class="row">
               <div class="news-letter-img">
                  <?php if( $yog_bg ): ?>  
                      <img src="<?php echo esc_url( wp_get_attachment_url( $yog_bg ) ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_bg, '_wp_attachment_image_alt', true) ); ?>" />
                  <?php endif; ?>
               </div>
               <div class="col-sm-6 news-letter-content">
                  <div class="heading-contnet">
                     <div class="heading-divider"></div>
                     <?php 
                        //Heading
                        if( $yog_heading ){
                            echo '<h2>'. $yog_heading .'</h2>';
                        }
                     ?>
                  </div>
                  <div class="news-letter-form">
                     <?php
                        //Sub Heading
                        if( $yog_sub_heading ){
                            echo '<p>'. $yog_sub_heading .'</p>';
                        }
                        
                        //Shortcode
                        echo do_shortcode( '[mc4wp_form id="'. $yog_form_id .'"]' );
                      ?>
                  </div>
               </div>
            </div>
          </div>
        </div>
        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_drink_newsletter', 'yog_drink_newsletter' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Drink Product Slider Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_drink_heros($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_drink_hero' => '',
            'yog_animation'  => '',
            'yog_delay'      => ''
		), $atts));

        ob_start(); 
        
        //Product Sections Items
        $yog_drink_heros = (array) vc_param_group_parse_atts( $yog_drink_hero );
        
        if( $yog_drink_heros ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            echo '<div class="body-content" id="top-banner-and-menu" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'><div id="e-slider"><div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">';
                
                foreach( $yog_drink_heros as $yog_drink_hero ){
                    
                    //Background
                    $yog_bg = ( isset( $yog_drink_hero['yog_bg'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_drink_hero['yog_bg'] ) .');"' : '';
                    
                    //Product
                    $product = wc_get_product( $yog_drink_hero['id'] );
                    ?>
                    <div class="item" <?php echo $yog_bg; ?>>
                      <div class="container-fluid">
                         <div class="container">
                            <div class="caption bg-color vertical-center text-left tp-color">
                                <?php 
                                  //Heading
                                  if( isset( $yog_drink_hero['yog_heading'] ) ){
                                     echo '<div class="big-text fadeInDown-1 white">'. $yog_drink_hero['yog_heading'] .'</div>';
                                  }
                                  
                                  //Product Heading
                                  echo '<div class="big-subtext fadeInDown-1 black"><h1>'. $product->get_title() .'</h1></div>';
                                  
                                  echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                                    	sprintf( '<div class="button-holder drink-btn fadeInDown-3"><a href="%s" data-quantity="%s" class="%s btn-lg btn btn-uppercase btn-primary shop-now-button" %s>%s</a></div>',
                                    		esc_url( $product->add_to_cart_url() ),
                                    		esc_attr( 1 ),
                                    		esc_attr( 'button' ),
                                    		'',
                                            esc_html__( 'SHOP NOW', 'yog' )
                                    	),
                                    $product );
                                    
                                    //Price
                                    printf( '<h3>%s <span>%s</span> %s</h3>', esc_html__( 'ONLY', 'yog' ), $product->get_price_html(), __( 'FOR A BOTTLE THE BEST<br> DEAL FOR YOU!', 'yog' ) );
                               ?> 
                            </div>
                            <?php
                                //Product Image 
                                $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $yog_drink_hero['id'] ), 'single-post-thumbnail' ); 
                                if( isset( $image_url[0] ) && !empty( $image_url[0] ) ){
                                    echo '<div class="slider-img"><img src="'. $image_url[0] .'" alt="'. $image_url[1] .'"></div>';
                                }
                            ?>
                         </div>
                      </div>
                    </div>
                    <?php
                }
            
            echo '</div></div></div>';
        }
            
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_drink_heros', 'yog_drink_heros' ); 