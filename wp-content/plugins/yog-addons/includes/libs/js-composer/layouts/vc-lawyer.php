<?php 
/**
 * Add Visual Composer Elements Mapping and shortcode Codes.
 *
 * @category VC Map Lawyer
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js-composer
 *
 */
/*-------------------------------------------------------------------------------
|				Flipmart:  Lawyer Counter Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Lawyer Counter', 'yog'),
      'base'        => 'yog_lawyer_counters',
      'class'       => 'icon_yog_lawyer_counters',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Lawyer', 'yog'),
      'description' => esc_html__( 'Insert Counter', 'yog' ),
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
                'param_name' => 'yog_lawyer_counter',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Counter','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_counter',
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
|				Flipmart:  Lawyer Contact Form Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Lawyer Contact Form', 'yog'),
      'base'        => 'yog_lawyer_contact_form',
      'class'       => 'icon_yog_lawyer_contact_form',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Lawyer', 'yog'),
      'description' => esc_html__( 'Insert Contact Form', 'yog' ),
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
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textarea_html',
                'value'       => '',
                'param_name'  => 'content',
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
|				Flipmart:  Lawyer Contact Info Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Lawyer Contact Info', 'yog'),
      'base'        => 'yog_lawyer_contact_info',
      'class'       => 'icon_yog_lawyer_contact_info',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Lawyer', 'yog'),
      'description' => esc_html__( 'Insert Contact Info', 'yog' ),
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
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
            ),
            
            array(
                'heading'     => esc_html__( 'Contact Number','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_contact',
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
|				Flipmart:  Lawyer Info Section Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Lawyer Info', 'yog'),
      'base'        => 'yog_lawyer_info',
      'class'       => 'icon_yog_lawyer_info',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Lawyer', 'yog'),
      'description' => esc_html__( 'Insert Information Content', 'yog' ),
      'params'      => array(
            
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
|				Flipmart:  Lawyer Team Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Lawyer Team', 'yog'),
      'base'        => 'yog_lawyer_teams',
      'class'       => 'icon_yog_lawyer_teams',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Lawyer', 'yog'),
      'description' => esc_html__( 'Insert Team', 'yog' ),
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
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
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
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_lawyer_team',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Name','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_name',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Designation','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_designation',
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
|				Flipmart:  Lawyer Slider Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Lawyer Slider', 'yog'),
      'base'        => 'yog_lawyer_sliders',
      'class'       => 'icon_yog_lawyer_sliders',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Lawyer', 'yog'),
      'description' => esc_html__( 'Insert Slider', 'yog' ),
      'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_lawyer_slider',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Navigation Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_nav_heading',
                    ),
                    
                    array(
            			'type'        => 'iconpicker',
            			'heading'     => esc_html__( 'Navigation Icon', 'yog' ),
            			'param_name'  => 'yog_icon',
            			'value'       => 'fa fa-info-circle',
            			'settings'    => array(
            				'emptyIcon'    => false, // default true, display an "EMPTY" icon?
            				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
            			),
            			'description' => esc_html__( 'Select icon from library.', 'yog' ),
                    ),
                    
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
|				Flipmart:  Lawyer Services Module / Element Map				            |						
--------------------------------------------------------------------------------*/

    vc_map( array(
      'name'        => esc_html__('Lawyer Services', 'yog'),
      'base'        => 'yog_lawyer_services',
      'class'       => 'icon_yog_lawyer_services',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Lawyer', 'yog'),
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
                'type'        => 'textarea',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
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
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_lawyer_service',
                'params'     => array(
                    
                    array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
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
                        'heading'     => esc_html__( 'Description','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_description',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Price','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_price',
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
|				Flipmart: Lawyer Counter Section  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_lawyer_counters($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_column'          => '4',  
            'yog_lawyer_counter'  => '',
            'yog_animation'       => '',
            'yog_delay'           => ''
		), $atts));

        ob_start();
        
        //Element Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_lawyer_counter );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            //Enqueue Js Script
            wp_enqueue_script ( 'count-min' );
        ?>
        <div <?php yog_helper()->attr(  false, array( 'class' => 'counter-section', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <?php 
                $yog_counter = 0;
                foreach( $yog_items as $yog_item ){
                    
                    //Counter Incremenst
                    $yog_counter++;
                    
                    //Wrapper Start
                    if( $yog_counter == 1 ){
                        echo '<div class="row">';
                        $yog_close = true;
                    }
                    ?>
                    <div class="col-sm-6 <?php echo yog_get_column( $yog_column ); ?>">
                      <div class="counter-box">
                         <img src="<?php echo YOG_CORE_DIR; ?>/assets/images/lawyer-counter.png" alt="Image Not Found" />
                         <div id="counter">
                            <div class="counter-value" data-count="<?php echo $yog_item['yog_counter']; ?>">0</div>
                         </div>
                         <p><?php echo $yog_item['yog_heading']; ?></p>
                         <div class="divider"></div>
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
            ?>
        </div>
        <?php
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_lawyer_counters', 'yog_lawyer_counters' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Lawyer Contact Form Section  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_lawyer_contact_form($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',  
            'yog_sub_heading' => '', 
            'yog_bg'          => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
        //Baclground
        $yog_bg = ( $yog_bg )? 'style="background: url('. wp_get_attachment_url( $yog_bg ) .') no-repeat; background-size: cover;"' : '';
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'consultation', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
          <div class="col-xs-12 col-sm-12 col-md-12 consultation-section" <?php echo $yog_bg; ?>>
            <div class="container"> 
               <div class="consultation-content">
                  <?php 
                      //Heading
                      if( $yog_heading ){
                        echo '<h1><span><img src="'. YOG_CORE_DIR .'/assets/images/lawyer-g-latter.png" alt="Image Not Found"></span>'. $yog_heading .'</h1>';
                      }
                      
                      //Sub Heading
                      if( $yog_sub_heading ){
                        echo '<p>'. $yog_sub_heading .'</p>';
                      } 
                      
                      if( $content ){ 
                        echo '<div class="contact-form">'. do_shortcode( $content ) .'</div><div class="clearfix"></div>';
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
   
   add_shortcode( 'yog_lawyer_contact_form', 'yog_lawyer_contact_form' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Lawyer Contact Info Section  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_lawyer_contact_info($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',  
            'yog_sub_heading' => '', 
            'yog_contact'     => '', 
            'yog_bg'          => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        ?>
        <div <?php yog_helper()->attr( false, array( 'class' => 'contacts', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
         <div class="col-xs-12 col-sm-12 col-md-12 contacts-section">
            <div class="container">
               <div class="contacts-content">
                  <div class="contacts-content-inner">
                      <?php 
                          //Heading
                          if( $yog_heading ){
                            echo '<h1>'. $yog_heading .'</h1>';
                          }
                          
                          //Sub Heading
                          if( $yog_sub_heading ){
                            echo '<h2>'. $yog_sub_heading .'</h2>';
                          } 
                          
                          echo '<img src="'. YOG_CORE_DIR .'/assets/images/lawyer-contact-icon.png" alt="Image Not Found" />';
                          
                          //Contact
                          if( $yog_contact ){
                            echo '<h3>'. $yog_contact .'</h3>';
                          }
                       ?>
                   </div>  
               </div>
               <div class="contacts-img">
                  <?php 
                      //Image
                      if( $yog_bg ){
                        echo '<img src="'. wp_get_attachment_url( $yog_bg ) .'" alt="'. esc_attr( get_post_meta( $yog_bg, '_wp_attachment_image_alt', true) ) .'" class="img-responsive">';
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
   
   add_shortcode( 'yog_lawyer_contact_info', 'yog_lawyer_contact_info' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Lawyer Info Section  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_lawyer_info($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
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
        <div <?php yog_helper()->attr( false, array( 'class' => 'lawyer-group', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
          <div class="row">
             <div class="col-sm-6 lawyer-group-content">
                 <?php 
                       //Heading
                       if( isset( $yog_heading ) ){
                         echo '<h1><span><img src="'. YOG_CORE_DIR .'/assets/images/lawyer-i-latter.png" alt="Image Not Found"></span> '. $yog_heading .'</h1>';
                       }
                      
                       //Sub Heading
                       if( isset( $yog_sub_heading ) ){
                         echo '<h2>'. $yog_sub_heading .'</h2>';
                       }
                      
                       //Content
                       if( isset( $yog_content ) ){
                         echo '<p>'. $yog_content .'</p>';
                       }
                      
                       //Link
                       $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                       if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                
                            $attributes   = array();
                            $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                        	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                        	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                            $attributes   = implode( ' ', $attributes );
                           
                            echo '<a ' . $attributes . '><button>'. esc_html( trim( $yog_link['title'] ) ) .'</button></a>';
                            
                       } 
                 ?>
              </div>
              <div class="col-sm-6 lawyer-group-img">
                 <?php 
                     //Image
                     if( isset( $yog_img ) ){
                        echo '<img src="'. wp_get_attachment_url( $yog_img ) .'" alt="'. esc_attr( get_post_meta( $yog_img, '_wp_attachment_image_alt', true) ) .'" class="img-responsive"/>';
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
   
   add_shortcode( 'yog_lawyer_info', 'yog_lawyer_info' );

/*--------------------------------------------------------------------------------
|				Flipmart: Lawyer Team  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_lawyer_teams($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_column'      => '4',  
            'yog_lawyer_team' => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start();
        
        //Element Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_lawyer_team );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'attorneys', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="attorneys-section">
                    <?php
                        //Heading
                        if( $yog_heading ){
                            echo '<h1><span><img src="'. YOG_CORE_DIR .'/assets/images/lawyer-o-latter.png" alt="Image Not Found"></span>'. $yog_heading .'</h1>';
                        }
                        
                        //Sub Heading
                        if( $yog_sub_heading ){
                            echo '<p>'. $yog_sub_heading .'</p>';
                        }
                        
                        $yog_counter = 0;
                        foreach( $yog_items as $yog_item ){
                            
                            //Counter Increments
                            $yog_counter++;
                            
                            //Wrapper Start
                            if( $yog_counter == 1 ){
                                echo '<div class="row">';
                                $yog_close = true;
                            }
                            ?>
                            <div class="col-sm-3 <?php echo yog_get_column( $yog_column ); ?>">
                              <div class="attorneys-content">
                                 <?php 
                                    //Image
                                    if( $yog_item['yog_img'] ){
                                        echo '<div class="attorneys-img"><img src="'. wp_get_attachment_url( $yog_item['yog_img'] ) .'" alt="'. esc_attr( get_post_meta( $yog_item['yog_img'], '_wp_attachment_image_alt', true) ) .'" /></div>';
                                    }
                                 ?>
                                 <div class="attorneys-text">
                                    <?php 
                                        //Name
                                        if( $yog_item['yog_name'] ){
                                          echo '<h1>'. $yog_item['yog_name'] .'</h1>';  
                                        } 
                                        
                                        //Designation
                                        if( $yog_item['yog_designation'] ){
                                          echo '<h2>'. $yog_item['yog_designation'] .'</h2>';  
                                        }   
                                    ?>
                                 </div>
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
                    ?>
                </div>
            </div>
            <?php
        }
            
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_lawyer_teams', 'yog_lawyer_teams' );
            
/*--------------------------------------------------------------------------------
|				Flipmart: Lawyer Slider  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_lawyer_sliders($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_lawyer_slider' => '',
            'yog_animation'       => '',
            'yog_delay'           => ''
		), $atts));

        ob_start();
        
        //Element Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_lawyer_slider );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            //Scripts
            wp_enqueue_scripts( 'sliderjs' );
            ?>
            <div class="body-content outer-top-xs lawyerslider" id="top-banner-and-menu" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
               <div class="slider">
                  <div class="demo-cont sliderwidth">
                     <div class="fnc-slider example-slider">
                        <div class="fnc-slider__slides">
                             <?php 
                                //Variables.
                                $yog_counter = 1; $yog_counter_ary = 0; $yog_nav = $yog_cont = '';
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
                                           <div class=" col-sm-6 fnc-slide__content">
                                              <?php 
                                                   //Heading
                                                   if( isset( $yog_item['yog_heading'] ) ){
                                                     echo '<h1>'. $yog_item['yog_heading'] .'</h1>';
                                                   }
                                                  
                                                   //Sub Heading
                                                   if( isset( $yog_item['yog_sub_heading'] ) ){
                                                     echo '<h2>'. yog_highlight_it( $yog_item['yog_sub_heading'] ) .'</h2>';
                                                   }
                                                  
                                                   //Content
                                                   if( isset( $yog_item['yog_content'] ) ){
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
                                                       
                                                        echo '<a ' . $attributes . '><button>'. esc_html( trim( $yog_link['title'] ) ) .'</button></a>';
                                                        
                                                  } 
                                              ?>
                                           </div>
                                        </div>
                                    </div>
                                   <?php
                                   
                                   //Navigation
                                   if( $yog_counter == 1 ){
                                      $yog_nav  .= '<div class="fnc-nav__bg m--navbg-'. $yog_classes[$yog_counter_ary] .' m--active-nav-bg"></div>';  
                                   }else{
                                      $yog_nav  .= '<div class="fnc-nav__bg m--navbg-'. $yog_classes[$yog_counter_ary] .'"></div>';
                                   }
                                   
                                   $yog_cont .= 
                                   '<button class="fnc-nav__control">
                                        <i class="'. $yog_item['yog_icon'] .' ptPlan" aria-hidden="true"></i> '. $yog_item['yog_nav_heading'] .'
                                        <span class="fnc-nav__control-progress"></span>
                                    </button>';
                                   
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
                            <?php echo $yog_nav; ?>
                         </div>
                         <div class="fnc-nav__controls">
                            <?php echo $yog_cont; ?>
                         </div>
                        </nav>
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
   
   add_shortcode( 'yog_lawyer_sliders', 'yog_lawyer_sliders' );
   
/*--------------------------------------------------------------------------------
|				Flipmart: Lawyer Services  / Element Shortcode			                 |						
--------------------------------------------------------------------------------*/

	function yog_lawyer_services($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'         => '',
            'yog_sub_heading'     => '',
            'yog_column'          => '3',
            'yog_lawyer_service'  => '',
            'yog_animation'       => '',
            'yog_delay'           => ''
		), $atts));

        ob_start();
        
        //Element Items
        $yog_items = (array) vc_param_group_parse_atts( $yog_lawyer_service );
        
        if( $yog_items ){
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'services', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
               <?php 
                   //Heading
                   if( $yog_heading ){
                      echo '<h1><span><img src="'. YOG_CORE_DIR .'/assets/images/lawyer-o-latter.png" alt="Image Not Found"></span>'. $yog_heading .'</h1>';
                   } 
                   
                   //Sub Heading
                   if( $yog_sub_heading ){
                      echo '<h2>'. $yog_sub_heading .'</h2>';
                   }
                   
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
                             <div class="services-content">
                               <?php
                                   //Heading
                                   if( isset( $yog_item['yog_heading'] ) ){
                                     echo '<h1>'. $yog_item['yog_heading'] .'</h1>';
                                   }
                                  
                                   //Sub Heading
                                   if( isset( $yog_item['yog_sub_heading'] ) ){
                                     echo '<h2>'. yog_highlight_it( $yog_item['yog_sub_heading'] ) .'</h2>';
                                   }
                                  
                                   //Content
                                   if( isset( $yog_item['yog_description'] ) ){
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
                                       
                                        echo '<a ' . $attributes . '><button>'. esc_html( trim( $yog_link['title'] ) ) .'</button></a>';
                                        
                                   }   
                                  
                               ?>
                             </div>
                             <?php 
                                //Price
                                if( $yog_item['yog_price'] ){
                                    echo '<h3>'. $yog_item['yog_price'] .'</h3>';
                                }
                             ?>
                         </div>
                         <?php
                         
                     //Wrapper End
                     if( $yog_counter == $yog_column ){
                        $yog_counter = 0;
                        $yog_close = false;
                        echo '</div>';
                     }
               } 
               
               //Wrapper End
               if( $yog_close ){
                  echo '</div>';
               } 
            
            echo '</div>';
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_lawyer_services', 'yog_lawyer_services' );
            