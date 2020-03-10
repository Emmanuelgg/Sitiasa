<?php
/**
 * Visual Composer Default Modules Shortcode
 *
 * @category VC extend
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js_composer
 *
 */
/*--------------------------------------------------------------------------------
|				Flipmart: Heading Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_heading($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading_style' => 'one',
            'yog_heading'       => '',
            'yog_sub_heading'   => ''
		), $atts));

        ob_start(); 
        
        if( $yog_heading_style == 'one' ){
                
            //Heading
            if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                echo '<h2 class="heading-title">'. esc_html( $yog_heading ) .'</h2>';
            }
            
            //Sub Heading
            if( isset( $yog_sub_heading ) && !empty( $yog_sub_heading ) ){
                echo '<span class="title-tag">'. esc_html( $yog_sub_heading ) .'</span>';
            }
            
        }else{
            
            //Heading
            if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                echo '<div class="terms-conditions"><h3>'. esc_html( $yog_heading ) .'</h3></div>';
            }
            
        }
        
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_heading', 'yog_heading' );
  
/*--------------------------------------------------------------------------------
|				Flipmart: Lists Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_lists($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_list' => ''
		), $atts));

        ob_start(); 
        
        //List Items
        $yog_lists = (array) vc_param_group_parse_atts( $yog_list );
        
        if( $yog_lists ):
            
            echo '<div class="terms-conditions"><ol>';
            
            foreach( $yog_lists as $yog_list ){
                
                echo '<li>'. esc_html( $yog_list['yog_list_item'] ) .'</li>'; 
            
            }
            
            echo '</ol></div>';
            
        endif; 
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_lists', 'yog_lists' );
  
/*--------------------------------------------------------------------------------
|				Flipmart: Accordion Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_accordions($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_accordion' => ''
		), $atts));

        ob_start(); 
        
        //Accodion Items
        $yog_accordion = (array) vc_param_group_parse_atts( $yog_accordion );
        
        if( $yog_accordion ):
            
            echo '<div class="panel-group checkout-steps" id="accordion">';
            
                global $yog_counter;
                foreach( $yog_accordion as $yog_item ){
                    //Increment.
                    $yog_counter++;
                    
                    //Content
                    $yog_content = rawurldecode( base64_decode( strip_tags( $yog_item['yog_content'] ) ) );
                    
                    //Active Class
                    $yog_active_cls = ( isset( $yog_item['enable_active'] ) && !empty( $yog_item['enable_active'] ) )? ' in' : '';
                    
                    //Content
                    echo '
                    <div class="panel panel-default checkout-step-'. esc_attr( $yog_counter ) .'">
                    	
                        <div class="panel-heading">
                        	<h4 class="unicase-checkout-title">
                    	        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne'. $yog_counter .'">
                    	          <span>'. esc_html( $yog_counter ) .'</span>'. $yog_item['yog_heading'] .'
                    	        </a>
                    	     </h4>
                        </div>
                      
                    	<div id="collapseOne'. esc_attr( $yog_counter ) .'" class="panel-collapse collapse'. esc_attr( $yog_active_cls ) .'">
                    	    <div class="panel-body">
                    	    	'. $yog_content .'			
                    		</div>
                    	</div>
                        
                    </div>';
                }
            
            echo '</div>';
                    
        endif;
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_accordions', 'yog_accordions' );
  
/*--------------------------------------------------------------------------------
|				Flipmart:  Google Map / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_google_maps($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_lat'          => '',
            'yog_long'         => '',
            'yog_marker_image' => ''
		), $atts));

	    ob_start(); 

        //Google Map
        if( $yog_lat && $yog_long ){
            
            //Enqueue Js Script File
            wp_enqueue_script( 'yog-googleapis' );
            ?>

            <div class="contact-map outer-bottom-vs">
				<div id="map-canvas" class="map-canvas" data-lat="<?php echo esc_attr( $yog_lat ); ?>" data-lng="<?php echo esc_attr( $yog_long ); ?>" data-marker="<?php echo esc_url( wp_get_attachment_url( $yog_marker_image ) ); ?>"></div>
			</div>

            <?php

        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;

	}

	add_shortcode( 'yog_google_maps', 'yog_google_maps' );
    
/*--------------------------------------------------------------------------------
|				Flipmart:  Contact Information / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_contact_info($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'      => '',
            'yog_address'      => '',
            'yog_phone_number' => '',
            'yog_email'        => ''
		), $atts));

	    ob_start(); 

        //Contact
        ?>
        
        <div class="contact-info">
        
            <?php 
                //Heading
                if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                    
                    echo '<div class="contact-title">
                    		<h4>'. esc_html( $yog_heading ) .'</h4>
                    	 </div>';
                         
                }
                
                //Address
                if( isset( $yog_address ) && !empty( $yog_address ) ){
                    
                    echo '<div class="clearfix address">
                            <span class="contact-i"><i class="fa fa-map-marker"></i></span>
                    		<span class="contact-span">'. esc_html( $yog_address ) .'</span>
                    	 </div>';
                         
                }
                
                //Phone Number
                if( isset( $yog_phone_number ) && !empty( $yog_phone_number ) ){
                    
                    echo '<div class="clearfix phone-no">
                            <span class="contact-i"><i class="fa fa-mobile"></i></span>
                    		<span class="contact-span">'. wp_kses( $yog_phone_number, array( 'br' => array() ) ) .'</span>
                    	 </div>';
                         
                }
                
                //Email
                if( isset( $yog_email ) && !empty( $yog_email ) ){
                    
                    echo '<div class="clearfix email">
                            <span class="contact-i"><i class="fa fa-envelope"></i></span>
                    		<span class="contact-span"><a href="mailtto:'. $yog_email .'">'. esc_html( $yog_email ) .'</a></span>
                    	 </div>';
                         
                }
            ?>
            
        </div>	

        <?php
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;

	}

	add_shortcode( 'yog_contact_info', 'yog_contact_info' );
    
/*--------------------------------------------------------------------------------
|				Flipmart: Client Logs Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_client_logos($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_animation'   => '', 
            'yog_delay'       => '', 
            'yog_client_logo' => ''
		), $atts));

        ob_start(); 
        
        //Logos Items
        $yog_client_logos = (array) vc_param_group_parse_atts( $yog_client_logo );
        
        if( $yog_client_logos ):
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'logo-slider', 'id' => 'brands-carousel', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <?php 
                            foreach( $yog_client_logos as $yog_item ){
                                
                                  //Link  
                                  $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
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
                                <div class="item m-t-15">
                					<?php echo $yog_before_tag; ?>
                						<img data-echo="<?php echo esc_url( wp_get_attachment_url( $yog_item['yog_logo'] ) ); ?>" src="<?php echo esc_url( wp_get_attachment_url( $yog_item['yog_logo'] ) ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_item['yog_logo'], '_wp_attachment_image_alt', true) ); ?>" />
                					<?php echo $yog_after_tag; ?>	
                				</div>
                                <?php
                            }
                        ?>
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
  
  add_shortcode( 'yog_client_logos', 'yog_client_logos' );
  
/*--------------------------------------------------------------------------------
|				Flipmart: Hero Section Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_hero_sections($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_hero_section' => ''
		), $atts));

        ob_start(); 
        
        //Hero Sections Items
        $yog_hero_sections = (array) vc_param_group_parse_atts( $yog_hero_section );
        
        if( $yog_hero_sections ):
            
           ?>
            
            <div id="hero">
                <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                
                    <?php 
                        foreach( $yog_hero_sections as $yog_item ){
                            ?>
                            <div class="item" style="background-image: url(<?php echo esc_url( wp_get_attachment_url( $yog_item['yog_bg'] ) ); ?>);">
                              <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                  <?php 
                                    //Heading
                                    if( isset( $yog_item['yog_heading'] ) && !empty( $yog_item['yog_heading'] ) ){
                                        echo '<div class="slider-header fadeInDown-1">'. $yog_item['yog_heading'] .'</div>';
                                    }
                                    
                                    //Sub Heading
                                    if( isset( $yog_item['yog_sub_heading'] ) && !empty( $yog_item['yog_sub_heading'] ) ){
                                        echo '<div class="big-text fadeInDown-1">'. $yog_item['yog_sub_heading'] .'</div>';
                                    }
                                    
                                    //Content
                                    if( isset( $yog_item['yog_content'] ) && !empty( $yog_item['yog_content'] ) ){
                                        echo '<div class="excerpt fadeInDown-2 hidden-xs"> <span>'.  $yog_item['yog_content'] .'</span></div>';
                                    }
                                    
                                    //Link
                                    $yog_link = isset( $yog_item['yog_link'] )? vc_build_link( $yog_item['yog_link'] ) : '';
                                    if ( isset( $yog_link['url'] ) && strlen( $yog_link['url'] ) > 0  ) {
                                
                                        $attributes   = array();
                                        $attributes[] = 'href="' . esc_url( trim( $yog_link['url'] ) ) . '"';
                                    	$attributes[] = 'title="' . esc_attr( trim( $yog_link['title'] ) ) . '"';
                                    	$attributes[] = 'target="' . esc_attr( trim( strlen( $yog_link['target'] ) > 0 ? $yog_link['target'] : '_self' ) ) . '"';
                                        $attributes   = implode( ' ', $attributes );
                                       
                                        echo '<div class="button-holder fadeInDown-3" ><a ' . $attributes . ' class="btn-lg btn btn-uppercase btn-primary shop-now-button">'. esc_html( trim( $yog_link['title'] ) ) .'</a></div>';
                                        
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
               
        endif;
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_hero_sections', 'yog_hero_sections' );
  
/*--------------------------------------------------------------------------------
|				Flipmart: Info Box Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_info_boxes($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_column'    => '3',
            'yog_info_boxe' => '',
            'yog_animation' => '',
            'yog_delay'     => ''
		), $atts));

        ob_start(); 
        
        //Info Box Items
        $yog_info_boxes = (array) vc_param_group_parse_atts( $yog_info_boxe );
        
        if( $yog_info_boxes ):
            
            //Animation
            $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
            $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
            
            ?>
            <div class="info-boxes" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="info-boxes-inner">
                    <div class="row">
                
                        <?php 
                            $yog_counter = 1;
                            foreach( $yog_info_boxes as $yog_item ){
                                //Class
                                $yog_cls = ( $yog_counter == 2 )? 'hidden-md col-lg-4' : yog_get_column( $yog_column );
                                ?>
                                <div class="<?php echo esc_attr( $yog_cls ); ?> col-sm-4">
                                    <div class="info-box">
                                        <?php 
                                            if( isset( $yog_item['yog_icon'] ) && !empty( $yog_item['yog_icon'] ) ){
                                                echo '<div class="icon"><i class="'. esc_attr( $yog_item['yog_icon'] ) .'" aria-hidden="true"></i></div>';
                                            }
                                            
                                            //Heading
                                            if( isset( $yog_item['yog_heading'] ) && !empty( $yog_item['yog_heading'] ) ){
                                                echo '<div class="row"><div class="col-xs-12"><h4 class="info-box-heading green">'. esc_html( $yog_item['yog_heading'] ) .'</h4></div></div>';
                                            }
                                            
                                            //Sub Heading
                                            if( isset( $yog_item['yog_sub_heading'] ) && !empty( $yog_item['yog_sub_heading'] ) ){
                                                echo '<h6 class="text">'. $yog_item['yog_sub_heading'] .'</h6>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <?php
                                
                                //Counter Increments
                                $yog_counter++;
                            }
                        ?>
                        
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
  
  add_shortcode( 'yog_info_boxes', 'yog_info_boxes' );
  
/*--------------------------------------------------------------------------------
|				Flipmart: Image Banner Module / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_image_banner($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_style'       => 'image',
            'yog_banner'      => '',
            'yog_heading'     => '',
            'yog_sub_heading' => '',
            'yog_content'     => '',
            'yog_label'       => '',
            'yog_btn_text'    => '',
            'yog_btn_link'    => '',
            'yog_animation'   => '',
            'yog_delay'       => ''
		), $atts));

        ob_start(); 
        
        //Animation
        $yog_animation = ( isset( $yog_animation ) && !empty( $yog_animation ) )? $yog_animation : '';
        $yog_delay     = ( isset( $yog_delay ) && !empty( $yog_delay ) )? $yog_delay : '';
        
        //Link Tag
        $yog_link_star = ( isset( $yog_btn_link ) && !empty( $yog_btn_link ) )? '<a href="'. esc_url( $yog_btn_link ) .'">' : '';
        $yog_link_end  = ( isset( $yog_btn_link ) && !empty( $yog_btn_link ) )? '</a>' : '';
        
        if( $yog_style == 'image' && isset( $yog_banner ) && !empty( $yog_banner ) ){
            ?>
            <div class="wide-banner cnt-strip" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="image"> 
                    <?php echo $yog_link_star; ?>
                        <img src="<?php echo esc_url( wp_get_attachment_url( $yog_banner ) ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ); ?>"  class="img-responsive"/>     
                    <?php echo $yog_link_end; ?>
                </div>
              </div>
            <?php
            
        }elseif( isset( $yog_banner ) && !empty( $yog_banner ) && $yog_style == 'image-text' ){
            
            ?>
            <div class="wide-banners outer-bottom-xs" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div class="row">
                <div class="col-md-12">
                  <div class="wide-banner cnt-strip">
                    <?php echo $yog_link_star; ?>
                        <div class="image"> 
                            <img src="<?php echo esc_url( wp_get_attachment_url( $yog_banner ) ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ); ?>"  class="img-responsive"/>
                        </div>
                    
                        <div class="strip strip-text">
                          <div class="strip-inner">
                            <h2 class="text-right">
                                <?php 
                                    //Heading
                                    if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                                        echo esc_html( $yog_heading );
                                    }
                                    
                                    //Sub Heading
                                    if( isset( $yog_sub_heading ) && !empty( $yog_sub_heading ) ){
                                        echo '<br><span class="shopping-needs">'. esc_html( $yog_sub_heading ) .'</span>';
                                    }
                                ?>
                            </h2>
                          </div>
                        </div>
                    
                        <?php 
                            //Heading
                            if( isset( $yog_label ) && !empty( $yog_label ) ){
                                echo '<div class="new-label"><div class="text">'. esc_html( $yog_label ) .'</div></div>';
                            }
                        
                        echo $yog_link_end;
                      ?>  
                  </div>
                </div>
              </div>
            </div>
            <?php
            
        }elseif( isset( $yog_banner ) && !empty( $yog_banner ) && $yog_style == 'image-text-two' ){
            
            ?>
            <div id="category" class="category-carousel hidden-xs" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
              <div class="item">
                
                <?php echo $yog_link_star; if( isset( $yog_banner ) && !empty( $yog_banner ) ){ ?>
                
                    <div class="image"> 
                        <img src="<?php echo esc_url( wp_get_attachment_url( $yog_banner ) ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ); ?>"  class="img-responsive"/> 
                    </div>
                    
                <?php } ?>
                
                    <div class="container-fluid">
                      <div class="caption vertical-top text-left">
                      
                        <?php 
                            //Heading
                            if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                                echo '<div class="big-text">'. esc_html( $yog_heading ) .'</div>';
                            }
                            
                            //Sub Heading
                            if( isset( $yog_sub_heading ) && !empty( $yog_sub_heading ) ){
                                echo '<div class="excerpt hidden-sm hidden-md">'. esc_html( $yog_sub_heading ) .'</div>';
                            }
                            
                            //Content
                            if( isset( $yog_content ) && !empty( $yog_content ) ){
                                echo '<div class="excerpt-normal hidden-sm hidden-md">'. esc_html( $yog_content ) .'</div>';
                            }
                         ?>
                        
                      </div>
                    </div>
                <?php echo $yog_link_end; ?>
              </div>
            </div>
            <?php
            
        }elseif( isset( $yog_banner ) && !empty( $yog_banner ) && $yog_style == 'image-text-three' ){
            
            ?>
            <div class="product-cate" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php if( isset( $yog_banner ) && !empty( $yog_banner ) ){ ?>
                    <img src="<?php echo esc_url( wp_get_attachment_url( $yog_banner ) ); ?>" alt="<?php echo esc_attr( get_post_meta( $yog_banner, '_wp_attachment_image_alt', true) ); ?>"/>
                <?php } ?>
            	<div class="category-title-detail">
                    <?php 
                        //Heading
                        if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                            echo '<h3>'. esc_html( $yog_heading ) .'</h3>';
                        }
                        
                        //Sub Heading
                        if( isset( $yog_btn_link ) && !empty( $yog_btn_link ) ){
                            echo '<a class="shop-btn" href="'. esc_url( $yog_btn_link ) .'">'. $yog_btn_text .'</a>';
                        }
                    ?>
                </div>
            </div>
            <?php
            
        }elseif( isset( $yog_banner ) && !empty( $yog_banner ) && $yog_style == 'image-text-four' ){
            //Background Image
            $yog_bg = 'style="background: url('. wp_get_attachment_url( $yog_banner ) .') no-repeat;"'; 
            ?>
            <div class="discount-section" <?php echo $yog_bg; ?> <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="container">
                    <?php 
                        //Heading
                        if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                            echo '<h1>'. esc_html( $yog_heading ) .'</h1>';
                        }
                        
                        //Heading
                        if( isset( $yog_sub_heading ) && !empty( $yog_sub_heading ) ){
                            echo '<p>'. $yog_sub_heading .'</p>';
                        }
                        
                        //Sub Heading
                        if( isset( $yog_btn_link ) && !empty( $yog_btn_link ) ){
                            echo '<a class="shop-btn" href="'. esc_url( $yog_btn_link ) .'">'. $yog_btn_text .'</a>';
                        }
                    ?>
                </div>
            </div>
            <?php
            
        }
        
        //Return Output Content.
		$yog_output = ob_get_contents();
		ob_end_clean();
		return $yog_output;
         
  }
  
  add_shortcode( 'yog_image_banner', 'yog_image_banner' );
  
/*--------------------------------------------------------------------------------
|				Flipmart: Blog Post / Element Shortcode			|						
--------------------------------------------------------------------------------*/

	function yog_blog_posts($atts, $content = null ){

		$yog_output  = '';

		//extract arguments	
		extract(shortcode_atts(array(
            'yog_heading'    => '',
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
            
            echo '<section class="section latest-blog outer-bottom-vs" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
            
                //Heading
                if( isset( $yog_heading ) && !empty( $yog_heading ) ){
                    echo '<h3 class="section-title">'. esc_html( $yog_heading ) .'</h3>';
                }
                
                //Wrapper Start
                echo '<div class="blog-slider-container outer-top-xs"><div class="owl-carousel blog-slider custom-carousel">';
                
                    while ( $yog_post_query->have_posts() ) {
                        $yog_post_query->the_post();
                    
                        ?>
                        <div class="item">
                            <div class="blog-post">
                            
                                <?php if( has_post_thumbnail() ): ?>
                                   <div class="blog-post-image"> 
                                      <div class="image">   
                                    	   <a href="<?php the_permalink(); ?>">
                                                <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?>
                                            </a>
                                        </div>
                                    </div>    
                                <?php endif; ?> 
                                
                                <div class="blog-post-info text-left">
                                    <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <?php printf( '<span class="info">%s %s &nbsp;|&nbsp; %s </span>', esc_html__( 'By', 'yog' ), get_the_author(), get_the_date( 'd F Y' ) )?>
                                    <?php echo yog_get_excerpt( array( 'yog_length' => 20, 'yog_before_text' => '<p class="text">', 'yog_after_text' => '</p>', 'yog_class' => 'lnk btn btn-primary' ) ); ?> 
                                </div>
                              
                            </div> 
                        </div>
                        <?php       
                        
                  }  
                  
                echo '</div></div>';
            
            echo '</section>';
                
            //Rest WP Query
            wp_reset_postdata();
        }
        
        $yog_output = ob_get_contents();
        ob_end_clean();
		return $yog_output;
        
   }
   
   add_shortcode( 'yog_blog_posts', 'yog_blog_posts' );