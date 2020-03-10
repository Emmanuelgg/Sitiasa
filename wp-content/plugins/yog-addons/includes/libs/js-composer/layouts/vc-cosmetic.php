<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Cosemetic
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 *
 */
/*-------------------------------------------------------------------------------
|				Flipmart: Cosmetic Blog Module / Element Map				    |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Cosmetic Blog Posts', 'yog'),
      'base'        => 'yog_cosmetic_blog_posts',
      'class'       => 'icon_yog_cosmetic_blog_posts',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Cosmetic', 'yog'),
      'description' => esc_html__( 'Insert Blog Posts', 'yog' ),
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
                'param_name'  => 'yog_sub_heading'
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
|				Flipmart: Cosmetic Call Action Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
    	  'name'        => esc_html__('Cosmetic Call Action', 'yog'),
    	  'base'        => 'yog_cosmetic_cta',
    	  'class'       => 'icon_yog_cosmetic_cta',
    	  'icon'	    => 'icon-wpb-ui-separator',
    	  'weight'      => 101,
    	  'category'    => esc_html__('Flipmart Cosmetic', 'yog'),
    	  'description' => esc_html__( 'Insert Call Action', 'yog' ),
    	  'params'      => array(
            
            array(
                'heading'     => esc_html__( 'Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_img',
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
                'heading'     => esc_html__( 'Description','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_description'
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
|				Flipmart:  Cosmetic Heading Module / Element Map				|						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Cosmetic Heading', 'yog'),
      'base'        => 'yog_cosmetic_heading',
      'class'       => 'icon_yog_cosmetic_heading',
      'icon'	    => 'icon-wpb-ui-custom_heading',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Cosmetic', 'yog'),
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
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_sub_heading'
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
|				Flipmart:  Cosmetic Image Banner Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Cosmetic Image Banner', 'yog'),
      'base'        => 'yog_cosmetic_image_banner',
      'class'       => 'icon_yog_cosmetic_image_banner',
      'icon'	    => 'icon-wpb-ui-separator',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Cosmetic', 'yog'),
      'description' => esc_html__( 'Insert Image Banner', 'yog' ),
      'params'      => array(
            
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
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_content'
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
|				Flipmart:  Cosmetic Product Module / Element Map		     |						
--------------------------------------------------------------------------------*/

    vc_map( array(
    	  'name'        => esc_html__('Cosmetic Products', 'yog'),
    	  'base'        => 'yog_cosmetic_heros',
    	  'class'       => 'icon_yog_cosmetic_heros',
    	  'icon'	    => 'icon-wpb-ui-accordion',
    	  'weight'      => 101,
    	  'category'    => esc_html__('Flipmart Cosmetic', 'yog'),
    	  'description' => esc_html__( 'Insert Products', 'yog' ),
    	  'params'      => array(
            
            array(
                'heading'     => esc_html__('Style', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_style',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('Hero Section', 'yog')    => 'one',
    				esc_html__('Product Section', 'yog') => 'two'
    			)
    	    ),
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading',
                'dependency' => array( 'element' => 'yog_style', 'value' => array( 'two' ) ),
            ),
            
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
                'dependency' => array( 'element' => 'yog_style', 'value' => array( 'two' ) ),
            ),
            
            array(
    			'type'        => 'autocomplete',
    			'heading'     => esc_html__( 'Select identificator', 'yog' ),
    			'param_name'  => 'id',
    			'description' => esc_html__( 'Input product ID or product SKU or product title to see suggestions', 'yog' ),
                'dependency' => array( 'element' => 'yog_style', 'value' => array( 'two' ) ),
    		),
            
            array(
                'heading'     => esc_html__( 'Background Image','yog'),
                'type'        => 'attach_image',
                'dependency' => array( 'element' => 'yog_style', 'value' => array( 'two' ) ),
                'value'       => '',
                'param_name'  => 'yog_bg',
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_cosmetic_hero',
                'dependency' => array( 'element' => 'yog_style', 'value' => array( 'one' ) ),
                'params'     => array(
                    
                     array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
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

/*-------------------------------------------------------------------------------
|				Flipmart:  Cosmetic Services Module / Element Map		     |						
--------------------------------------------------------------------------------*/

    vc_map( array(
    	  'name'        => esc_html__('Cosmetic Services', 'yog'),
    	  'base'        => 'yog_cosmetic_services',
    	  'class'       => 'icon_yog_cosmetic_services',
    	  'icon'	    => 'icon-wpb-ui-accordion',
    	  'weight'      => 101,
    	  'category'    => esc_html__('Flipmart Cosmetic', 'yog'),
    	  'description' => esc_html__( 'Insert Services', 'yog' ),
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
                'param_name'  => 'yog_sub_heading'
            ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_cosmetic_service',
                'params'     => array(
                    
                     array(
                        'heading'     => esc_html__( 'Service','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_service'
                     ),
                    
                     array(
                        'type'       => 'param_group',
                        'value'      => '',
                        'param_name' => 'yog_cosmetic_items',
                        'params'     => array(
                            
                            array(
                                'heading'     => esc_html__( 'Service Image','yog'),
                                'type'        => 'attach_image',
                                'value'       => '',
                                'param_name'  => 'yog_img'
                             ),
                             
                             array(
                                'heading'     => esc_html__( 'Service Link','yog'),
                                'type'        => 'vc_link',
                                'value'       => '',
                                'param_name'  => 'yog_link'
                             )
                        )
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
|				Flipmart: Cosmetic Blog Post / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_cosmetic_blog_posts($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_column'      => '2',
            'yog_limit'       => '-1',
            'taxonomie'       => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start(); 
        
        //Get Post Date.
        $yog_post_query = yog_post_query( array( 'post_type' => 'post', 'posts_per_page' => $yog_limit ), $taxonomie );
        
        //Check and Print Posts
        if( $yog_post_query->have_posts() ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'cosmetic-blog', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
                    
                    //Heading
                    if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                        echo '<h2>'. esc_html( $yog_heading ) .'</h2>';
                    }
                        
                    //Sub Heading
                    if( isset( $yog_sub_heading ) && !empty( $yog_sub_heading ) ){
                        echo '<h1>'. esc_html( $yog_sub_heading ) .'</h1>';
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
                            <div class="cosmetic-blog-content">
                            	<?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?>
                                <div class="cos-blog-des">
                                	<p class="cos-date"><?php echo get_the_date( 'd / F / Y' ); ?></p>
                                    <h4><?php the_title(); ?></h4>
                                    <?php echo yog_get_excerpt( array( 'yog_length' => 20, 'yog_class' => false ) ); ?> 
                                </div>
                            </div>
                        </div>
                        <?php 
                        
                        //Wrapper Close
                        if( $yog_counter == $yog_column ){
                            echo '</div>';
                            $yog_close = false;
                            $yog_counter = 0;
                        }     
                    }
                    
                    //Wrapper Close
                    if( $yog_close ){
                        echo '</div>';
                    }
                
            echo '</div>';
        
        }
            
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_cosmetic_blog_posts', 'yog_cosmetic_blog_posts' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Cosmetic Call Action Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_cosmetic_cta($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_img'           => '',
            'yog_heading'       => '',
            'yog_sub_heading'   => '',
            'yog_description'   => '',
            'yog_link'          => '',
            'yog_animation'     => '',
            'yog_delay'         => ''
		), $atts));

        ob_start(); 
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php echo yog_helper()->get_attr( false, array( 'class' => 'cosmetic-cta', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
    		<div class="row">
            	<div class="col-sm-12">
            		<div class="col-sm-6">
                        <?php if( $yog_img ): ?>
                    	    <img src="<?php echo esc_url( wp_get_attachment_url( $yog_img ) ); ?>" alt="<?php echo get_post_meta( $yog_img, '_wp_attachment_image_alt', true); ?>" class="img-responsive"/>
                        <?php endif; ?>
                    </div>
					<div class="col-sm-6 cosmetic-cta-top">
                        <?php 
                            //Heading
                            if( $yog_heading ){
                               echo '<h3>'. $yog_heading .'</h3>'; 
                            }
                            
                            //Sub Heading
                            if( $yog_sub_heading ){
                               echo '<h1>'. $yog_sub_heading .'</h1>'; 
                            }
                            
                            //Description
                            if( $yog_description ){
                               echo '<p>'. $yog_description .'</p>'; 
                            }
                            
                            //Link  
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
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_cosmetic_cta', 'yog_cosmetic_cta' );
  
/*--------------------------------------------------------------------------------
|				Flipmart: Cosmetic Heading Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_cosmetic_heading($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        echo '<div '. yog_helper()->attr( false, array( 'class' => 'cosmetic-heading', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
                
            //Heading
            if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                echo '<h2>'. esc_html( $yog_heading ) .'</h2>';
            }
            
            //Sub Heading
            if( isset( $yog_sub_heading ) && !empty( $yog_sub_heading ) ){
                echo '<h1>'. esc_html( $yog_sub_heading ) .'</h1>';
            }
        
        echo '</div>';
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_cosmetic_heading', 'yog_cosmetic_heading' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Cosmetic Products Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_cosmetic_heros($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_style'         => 'one',
            'yog_heading'       => '',
            'yog_sub_heading'   => '',
            'id'                => '',
            'yog_bg'            => '',
            'yog_cosmetic_hero' => '',
            'yog_animation'     => '',
            'yog_delay'         => ''
		), $atts));

        ob_start(); 
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        
        if( $yog_style == 'one' ):
            
            //Hero Sections Items
            $yog_cosmetic_heros = (array) vc_param_group_parse_atts( $yog_cosmetic_hero );
            
            if( $yog_cosmetic_heros ):
                
                echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'cosmetic-slider', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'><div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm cosmetic-slider-a">';
                
                    foreach( $yog_cosmetic_heros as $yog_cosmetic_hero ){
                        
                        //Background
                        $yog_bg = ( isset( $yog_cosmetic_hero['yog_bg'] ) )? 'style="background-image: url('. wp_get_attachment_url( $yog_cosmetic_hero['yog_bg'] ) .');"' : '';
                        
                        //Product
                        $product = wc_get_product( $yog_cosmetic_hero['id'] );
                        ?>
                        <div class="item" <?php echo $yog_bg; ?>>
                           <div class="container-fluid">
                              <div class="container">
                                 <div class="caption bg-color vertical-center text-left">
                                    <div class="big-text fadeInDown-1 white r-big-text">
                                       <?php 
                                          //Heading
                                          if( isset( $yog_cosmetic_hero['yog_heading'] ) ){
                                             echo '<h2>'. $yog_cosmetic_hero['yog_heading'] .'</h2>';
                                          }
                                          
                                          //Product Heading
                                          echo '<h1>'. $product->get_title() .'</h1>';
                                          
                                          //Price
                                          printf( '<h3>%s <span>%s</span></h3>', esc_html__( 'just for', 'yog' ), $product->get_price_html() );
                                       ?> 
                                    </div>
                                    <div class="button-holder fadeInDown-3">
                                        <?php 
                                            echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                                            	sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
                                            		esc_url( $product->add_to_cart_url() ),
                                            		esc_attr( 1 ),
                                            		esc_attr( 'button' ),
                                            		'',
                                                    esc_html__( 'ADD TO CART', 'yog' )
                                            	),
                                            $product );
                                        ?>
                                    </div>
                                    <?php
                                        //Product Image 
                                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $yog_cosmetic_hero['id'] ), 'single-post-thumbnail' ); 
                                        if( isset( $image_url[0] ) && !empty( $image_url[0] ) ){
                                            echo '<div class="cos-img"><img src="'. $image_url[0] .'" alt="'. $image_url[1] .'"></div>';
                                        }
                                    ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php
                    }
                
                echo '</div></div>';
              
            endif;
            
        else:
            
            //Background
            $yog_bg = ( isset( $yog_bg ) )? 'background-image: url('. wp_get_attachment_url( $yog_bg ) .');' : '';
            
            //Product
            $product = wc_get_product( $id );            
            ?>
            <div <?php echo yog_helper()->attr( false, array( 'style' => $yog_bg, 'class' => 'cosmetic-item', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="row">
                    <div class="col-sm-6">
                    	<div class="cosmetic-item-price">
                        	<?php
                                //Price
                                echo '<h5>'. $product->get_price_html() .'</h5>';
                                 
                                //Heading
                                if( isset( $yog_heading ) ){
                                   echo '<h4>'. $yog_heading .'</h4>';
                                }
                                
                                //Sub Heading
                                if( isset( $yog_sub_heading ) ){
                                   echo '<h1>'. $yog_sub_heading .'</h1>';
                                }
                                
                                //Product Title
                                echo '<h3>'. $product->get_title() .'</h3>';
                                
                                //Product Description
                                echo '<p>'. $product->get_description() .'</p>';
                                
                                //Button
                                echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                                	sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
                                		esc_url( $product->add_to_cart_url() ),
                                		esc_attr( 1 ),
                                		esc_attr( 'button' ),
                                		'',
                                        esc_html__( 'Purchase Now', 'yog' )
                                	),
                                $product );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            
        endif; 
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_cosmetic_heros', 'yog_cosmetic_heros' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Cosmetic Image Banner Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_cosmetic_image_banner($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_banner'      => '',
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_content'     => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start(); 
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div class="firsttab cosmetic-products">
            <div class="sale-off" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            	<?php if( isset( $yog_banner ) && !empty( $yog_banner ) ){ ?>
                    <img src="<?php echo esc_url( wp_get_attachment_url( $yog_banner ) ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ); ?>" class="img-responsive"/>
                <?php } ?>
                <div class="sale-product cos-sale-products">
                    <?php 
                        //Heading
                        if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                            echo '<h2>'. esc_html( $yog_heading ) .'</h2>';
                        }
                        
                        //Heading
                        if( isset( $yog_sub_heading ) && !empty( $yog_sub_heading ) ){
                            echo '<h1>'. $yog_sub_heading .'</h1>';
                        }
                        
                        //Content
                        if( isset( $yog_content ) && !empty( $yog_content ) ){
                            echo '<p>'. esc_html( $yog_content ) .'</p>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_cosmetic_image_banner', 'yog_cosmetic_image_banner' );
  
/*--------------------------------------------------------------------------------
|				Flipmart: Cosmetic Services Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_cosmetic_services($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'          => '',
            'yog_sub_heading'      => '',
            'yog_cosmetic_service' => '',
            'yog_animation'        => '',
            'yog_delay'            => ''
		), $atts));

        ob_start(); 
        
        //Service Sections Items
        $yog_cosmetic_services = (array) vc_param_group_parse_atts( $yog_cosmetic_service );
        
        if( $yog_cosmetic_services ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            $yog_service = $yog_content = ''; $yog_counter = 1;
            foreach( $yog_cosmetic_services as $yog_cosmetic_items ){
                
                $yog_items = '';
                
                //Heading
                $yog_service .= '<li><a data-toggle="tab" href="#tab-'. $yog_counter .'">'. $yog_cosmetic_items['yog_service'] .'</a></li>';
                
                //Service Items
                $yog_cosmetic_items = (array) vc_param_group_parse_atts( $yog_cosmetic_items['yog_cosmetic_items'] );
                
                foreach( $yog_cosmetic_items as $yog_cosmetic_item ){
                    
                    //Link  
                    $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                    $yog_before_tag = $yog_after_tag = '';
                  
                    if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                    
                        $attributes   = array();
                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                        $attributes   = implode( ' ', $attributes );
                       
                        $yog_before_tag = '<a ' . $attributes . '>';
                        $yog_after_tag  = '</a>';
                    
                    } 
                                  
                    $yog_items .= '<li>'. $yog_before_tag .'<img src="'. esc_url( wp_get_attachment_url( $yog_cosmetic_item['yog_img'] ) ) .'" alt="'. esc_attr( get_post_meta( $yog_cosmetic_item['yog_img'], '_wp_attachment_image_alt', true) ) .'">'. $yog_after_tag .'</li>';
                }
                
                //Active Class
                $yog_active = ( $yog_counter == 1 )? ' in active' : '';
                
                $yog_content .= '<div id="tab-'. $yog_counter .'" class="tab-pane fade'. $yog_active .'"><div class="col-sm-12 cosmetic-services"><ul>'. $yog_items .'</ul></div></div>';
                
                //Increments
                $yog_counter++;
            }
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'cosmetic-all-products', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="container">
                    <?php 
                        //Heading
                        if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                            echo '<h2>'. esc_html( $yog_heading ) .'</h2>';
                        }
                            
                        //Sub Heading
                        if( isset( $yog_sub_heading ) && !empty( $yog_sub_heading ) ){
                            echo '<h1>'. esc_html( $yog_sub_heading ) .'</h1>';
                        }
                    ?>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#all"><?php echo esc_html__( 'All', 'yog' ); ?></a></li>
                        <?php echo $yog_service; ?>
                    </ul>
                    <div class="tab-content">
                        <?php echo $yog_content; ?>
                    </div>
                </div>
            </div>
            <?php
        }
            
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_cosmetic_services', 'yog_cosmetic_services' );