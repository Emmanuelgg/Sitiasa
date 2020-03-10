<?php
/**
 * Theme Widget ( Contact Information )
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
class Yog_Contact_Info_Widget extends WP_Widget {

    function __construct() {

        $yog_widget_ops  = array( 'classname' => 'contact-info', 'description' => esc_html__('Add contact information.', 'flipmart' ) );

        $yog_control_ops = array( 'id_base' => 'contact-info-widget' );

        parent::__construct( 'contact-info-widget', esc_html__( 'Flipmart: Contact Info', 'flipmart' ), $yog_widget_ops, $yog_control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $yog_title   = apply_filters('widget_title', $instance['yog_title']);
        $yog_logo    = ( isset( $instance['yog_logo'] ) )? $instance['yog_logo'] : '';
        $yog_address = ( isset( $instance['yog_address'] ) )? $instance['yog_address'] : '';
        $yog_des     = ( isset( $instance['yog_description'] ) )? $instance['yog_description'] : '';
        $yog_phone   = ( isset( $instance['yog_phone'] ) )? $instance['yog_phone'] : '';
        $yog_email   = ( isset( $instance['yog_email'] ) )? $instance['yog_email'] : '';

        echo $before_widget;
            
            //Title
            if ( $yog_title ) {
                echo $before_title . esc_html( $yog_title ) . $after_title;
            }
            
            //Logo
            if( $yog_logo && ( 'engineer' != yog_helper()->yog_get_layout( 'modify' )  && 'autoparts' != yog_helper()->yog_get_layout( 'modify' ) && 'furniture' != yog_helper()->yog_get_layout( 'modify' ) && 'finances' != yog_helper()->yog_get_layout( 'modify' ) ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
                echo '<a href="'. esc_url( home_url( '/' ) ) .'"><img src="'. esc_url( $yog_logo ) .'" class="img-responsive" alt=""/></a>';
            }
            
            //Content
            if( 'book' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
                ?>
                <ul class="book-address">
                
                    <?php if ( $yog_address ) : ?>
        			     <li>
                            <div class="book-footer-left">
                            	<i class="fa fa-map-marker"></i>
                            </div>
                            <div class="book-footer-right">
                            	<?php echo esc_html( $yog_address ); ?>
                            </div>
                         </li> 
                     <?php endif;  if ( $yog_phone ) : ?>
        			     <li>
                            <div class="book-footer-left">
                            	<i class="fa fa-phone"></i>
                            </div>
                            <div class="book-footer-right">
                            	<a href="tel:<?php echo $yog_phone; ?>"><span><?php echo wp_kses( $yog_phone, array( 'br' => array() ) ); ?></span></a>
                            </div>
                         </li>  
                      <?php endif;  if ( $yog_email ) : ?>
        			     <li>
                            <div class="book-footer-left">
                            	<i class="fa fa-envelope"></i>
                            </div>
                            <div class="book-footer-right">
                            	<a href="mailto:<?php echo $yog_email; ?>"><span><?php echo esc_html( $yog_email ); ?></span></a>
                            </div>
                         </li>     
                    <?php  endif; ?> 
                    
                 </ul>
                 <div class="clearfix"></div>
                 <?php
                 
            elseif( 'shoes' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
                
                //Description
                if( $yog_des ){
                    echo '<p>'. $yog_des .'</p>';
                }
                ?>
                <div class="contact-details">
                    <ul>
                    
                        <?php if ( $yog_address ) : ?>
            			     <li>
                                <p><i class="fa fa-map-marker"></i> <?php echo esc_html( $yog_address ); ?></p>
                             </li> 
                         <?php endif;  if ( $yog_phone ) : ?>
            			     <li>
                                <p><i class="fa fa-phone"></i> <a href="tel:<?php echo $yog_phone; ?>"><?php echo wp_kses( $yog_phone, array( 'br' => array() ) ); ?></a></p>
                             </li>  
                          <?php endif;  if ( $yog_email ) : ?>
            			     <li>
                                <p><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $yog_email; ?>"><?php echo esc_html( $yog_email ); ?></a></p>
                             </li>     
                        <?php  endif; ?> 
                        
                     </ul>
                 </div>
                 <?php
                
            elseif( 'finances' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
            
                ?>
                <div class="footer-logo">
                    <?php
                        //Logo 
                        if( $yog_logo ){
                            echo '<a href="'. esc_url( home_url( '/' ) ) .'"><img src="'. esc_url( $yog_logo ) .'" class="img-responsive" alt=""/></a>';
                        }
            
                        //Description
                        if( $yog_des ){
                            echo '<p>'. $yog_des .'</p>';
                        }
                    ?> 
                    <div class="footer-contact">
                     
                         <?php if ( $yog_address ) : ?>
                            
                   	        <p><i class="fa fa-map-marker"></i>&nbsp; <?php echo $yog_address; ?></p>
                            
                         <?php endif;  if ( $yog_phone ) : ?>
            			     
                   	        <a href="tel:<?php echo $yog_phone; ?>"><i class="fa fa-phone"></i>&nbsp; <?php echo wp_kses( $yog_phone, array( 'br' => array() ) ); ?></a>
                            
                          <?php endif;  if ( $yog_email ) : ?>
            			     
                             <a href="mailto:<?php echo $yog_email; ?>"><i class="fa fa-envelope"></i>&nbsp; <?php echo esc_html( $yog_email ); ?></a>
                        
                        <?php  endif; ?> 
                    
                    </div>
                 
                     <?php 
                        //Get Social Icons
                        $yog_social_links = yog_helper()->get_option( 'social-identities' );
                    
                        //Check & Print
                        if( yog_helper()->get_option( 'social-icon-enable' ) && $yog_social_links ):
                        
                            $yog_link = $yog_title = array(); $yog_counter = 0;
                            
                            //Link
                            foreach( $yog_social_links['url'] as $yog_social_link ){
                                $yog_link[] = $yog_social_link;
                            }
                            
                            //Title                            
                            foreach( $yog_social_links['title'] as $yog_social_title ){
                                $yog_title[] = $yog_social_link;
                            }                                                        
                            
                            echo '<div class="finance-social">';
                            
                                foreach( $yog_social_links['network'] as $yog_social_icon ){
                                    echo '<a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a>';
                                    $yog_counter++;
                                }
                            
                            echo '</div>';
                        
                        endif;
                     ?>
                 </div>
                 <?php
                
            elseif( 'furniture' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
            
                ?>
                <div class="furniture-contacts">
                      <?php
                         //Logo 
                         if( $yog_logo ){
                            echo '<a href="'. esc_url( home_url( '/' ) ) .'"><img src="'. esc_url( $yog_logo ) .'" class="img-responsive" alt=""/></a>';
                         }
            
                         //Description
                         if( $yog_des ){
                            echo '<p>'. $yog_des .'</p>';
                         
                         
                            //Get Social Icons
                            $yog_social_links = yog_helper()->get_option( 'social-identities' );
                        
                            //Check & Print
                            if( yog_helper()->get_option( 'social-icon-enable' ) && $yog_social_links ):
                            
                                $yog_link = $yog_title = array(); $yog_counter = 0;
                                
                                //Link
                                foreach( $yog_social_links['url'] as $yog_social_link ){
                                    $yog_link[] = $yog_social_link;
                                }
                                
                                //Title                            
                                foreach( $yog_social_links['title'] as $yog_social_title ){
                                    $yog_title[] = $yog_social_link;
                                } 
                                
                                echo '<div class="furniture-social">';
                                
                                    foreach( $yog_social_links['network'] as $yog_social_icon ){
                                        echo '<a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a>';
                                        $yog_counter++;
                                    }
                                
                                echo '</div>';
                            
                            endif;
                        }
                      ?>
                 </div>
                     
                 <?php if ( $yog_address ) : ?>
                    
           	        <p><span><i class="fa fa-map-marker"></i></span> <?php echo $yog_address; ?></p>
                    
                 <?php endif;  if ( $yog_phone ) : ?>
    			     
           	        <p><span><i class="fa fa-phone"></i></span> <a href="tel:<?php echo $yog_phone; ?>"><?php echo wp_kses( $yog_phone, array( 'br' => array() ) ); ?></a></p>
                    
                  <?php endif;  if ( $yog_email ) : ?>
    			     
                     <p><span><i class="fa fa-envelope"></i></span> <a href="mailto:<?php echo $yog_email; ?>"><?php echo esc_html( $yog_email ); ?></a></p>
                
                <?php  endif; 
                
            elseif( 'engineer' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
            
                ?>
                
                <div class="footerlogo">
                    <?php
                        //Logo 
                        if( $yog_logo ){
                            echo '<a href="'. esc_url( home_url( '/' ) ) .'"><img src="'. esc_url( $yog_logo ) .'" class="img-responsive" alt=""/></a>';
                        }
            
                        //Description
                        if( $yog_des ){
                            echo '<p>'. $yog_des .'</p>';
                        }
                    ?>
                    <div class="footericon">
                       <ul>
                          <?php 
                            //Address
                            if ( $yog_address ) : 
                                
                                printf( '<li><p><i class="fa fa-map-marker"></i> %s</p></li>', $yog_address );
                                
                            endif;
                            
                            //Phone
                            if ( $yog_phone ) :
                                
                                printf( '<li><p><i class="fa fa-phone"></i> %s</p></li>', $yog_phone );
                                
                            endif;
                            
                            //Phone
                            if ( $yog_email ) :
                                
                                printf( '<li><p><i class="fa fa-envelope"></i> %s</p></li>', $yog_email );
                                
                            endif;
                         ?>
                       </ul>
                    </div>
                </div>
                <?php
                
            elseif( 'cosmetic' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
            
                ?>
                <ul class="cosmetic-address">
                
                    <?php 
                        //Address
                        if ( $yog_address ) : 
                            
                            printf( '<li><h5>%s</h5> %s</li>', esc_html__( 'Address: ', 'flipmart' ), $yog_address );
                            
                        endif;
                        
                        //Phone
                        if ( $yog_phone ) :
                            
                            printf( '<li><h5>%s</h5> <a href="telto:%s">%s</a></li>', esc_html__( 'Phone: ', 'flipmart' ), $yog_phone, $yog_phone );
                            
                        endif;
                        
                        //Phone
                        if ( $yog_email ) :
                            
                            printf( '<li><h5>%s</h5> <a href="mailto:%s">%s</a></li>', esc_html__( 'Email: ', 'flipmart' ), $yog_email, $yog_email );
                            
                        endif;
                    ?>
                    
                 </ul>
                <?php
                
            elseif( 'electro' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
                
                //Address
                if ( $yog_address ) : 
                    echo '<p>'. $yog_address .'</p>';
                endif;
                
                echo '<ul>';
                        
                    //Phone
                    if ( $yog_phone ) :
                        
                        printf( '<li>%s <a href="telto:%s">%s</a>', esc_html__( 'Call Us: ', 'flipmart' ), $yog_phone, $yog_phone );
                        
                    endif;
                    
                    //Phone
                    if ( $yog_email ) :
                        
                        printf( '<li>%s <a href="mailto:%s">%s</a>', esc_html__( 'Email: ', 'flipmart' ), $yog_email, $yog_email );
                        
                    endif;
                 
                 echo '</ul>';
            
            elseif( 'hosting' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
                
                ?>
                <ul class="toggle-footer contact-details">
                
                    <?php if ( $yog_address ) : ?>
        			     <li class="media">
                            <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                            <div class="media-body">
                              <p><?php echo esc_html( $yog_address ); ?></p>
                            </div>
                         </li> 
                     <?php endif;  if ( $yog_phone ) : ?>
        			     <li class="media">
                            <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                            <div class="media-body">
                              <p><?php echo wp_kses( $yog_phone, array( 'br' => array() ) ); ?></p>
                            </div>
                         </li>  
                      <?php endif;  if ( $yog_email ) : ?>
        			     <li class="media">
                            <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>  </span> </div>
                            <div class="media-body">
                              <a href="mailto:<?php echo $yog_email; ?>"><?php echo esc_html( $yog_email ); ?></a>
                            </div>
                         </li>     
                    <?php  endif; ?> 
                    
                 </ul>
                <?php
                
                //Get Social Icons
                $yog_social_links = yog_helper()->get_option( 'social-identities' );
            
                //Check & Print
                if( yog_helper()->get_option( 'social-icon-enable' ) && $yog_social_links ):
                
                    $yog_link = $yog_title = array(); $yog_counter = 0;
                    
                    //Link
                    foreach( $yog_social_links['url'] as $yog_social_link ){
                        $yog_link[] = $yog_social_link;
                    }
                    
                    //Title                            
                    foreach( $yog_social_links['title'] as $yog_social_title ){
                        $yog_title[] = $yog_social_link;
                    } 
                    
                    echo '<div class="follow"><h1>'. esc_html__( 'FOLLOW US ON:', 'flipmart' ) .'</h1><ul>';
                    
                        foreach( $yog_social_links['network'] as $yog_social_icon ){
                            echo '<li><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                            $yog_counter++;
                        }
                    
                    echo '</ul></div>';
                
                endif;
                
            elseif( 'jewellery' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
                 ?>
                 <div class="jewellery-contact-info">
                    <ul>
                       <?php if ( $yog_address ) : ?> 
                       <li>
                          <div class="jewellery-contact-icon">
                             <i class="fa fa-map-marker"></i>
                          </div>
                          <div class="jewellery-contact-content">
                             <p><?php echo esc_html( $yog_address ); ?></p>
                          </div>
                       </li>
                       <?php endif;  if ( $yog_phone ) : ?>
                       <li>
                          <div class="jewellery-contact-icon">
                             <i class="fa fa-phone"></i>
                          </div>
                          <div class="jewellery-contact-content">
                             <p><?php echo esc_html( $yog_phone ); ?></p>
                          </div>
                       </li>
                       <?php endif;  if ( $yog_email ) : ?>
                       <li>
                          <div class="jewellery-contact-icon">
                             <i class="fa fa-envelope"></i>
                          </div>
                          <div class="jewellery-contact-content">
                             <p><?php echo esc_html( $yog_email ); ?></p>
                          </div>
                       </li>
                       <?php  endif; if ( $yog_des ) : ?> 
                       <li>
                          <div class="jewellery-contact-icon">
                             <i class="fa fa-clock-o"></i>
                          </div>
                          <div class="jewellery-contact-content">
                             <?php echo $yog_des; ?>
                          </div>
                       </li>
                       <?php endif; ?>
                    </ul>
                 </div>
                <?php
                
            elseif( 'lawyer' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
            
                ?>
                <div class="lower-fa-icon">
                    <ul class='list-unstyled'>
                        <?php 
                            //Description
                            if( $yog_des ){
                                echo '<li>'. $yog_des .'</li>';
                            }
                            
                            if ( $yog_address ) :
                        ?>
            			     <li><i class="fa fa-map-marker"></i><?php echo esc_html( $yog_address ); ?></li> 
                         <?php endif;  if ( $yog_phone ) : ?>
            			     <li><i class="fa fa-phone"></i><?php echo esc_html( $yog_phone ); ?></li>  
                          <?php endif;  if ( $yog_email ) : ?>
            			     <li><i class="fa fa-envelope-o"></i><?php echo esc_html( $yog_email ); ?></li>     
                        <?php  endif; ?>
                     </ul>
                </div>
                
                <?php
                
                elseif( 'autoparts' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
            
                ?>
                
                
                    <?php
                        //Logo 
                        if( $yog_logo ){
                            echo '<div class="f-logo"><a href="'. esc_url( home_url( '/' ) ) .'"><img src="'. esc_url( $yog_logo ) .'" class="img-responsive" alt=""/></a></div>';
                        }
            
                        //Description
                        if( $yog_des ){
                            echo '<p>'. $yog_des .'</p>';
                        }
                    ?>
                    <ul class="list-unstyled m-0 footer_addr_list">
                      <?php 
                        //Address
                        if ( $yog_address ) : 
                            
                            printf( '<li><span class="icon"><i class="fa fa-map-marker"></i></span> %s</li>', $yog_address );
                            
                        endif;
                        
                        //Phone
                        if ( $yog_phone ) :
                            
                            printf( '<li><span class="icon"><i class="fa fa-phone"></i></span> <a href="phoneto:%s">%s</a></li>', $yog_phone, $yog_phone );
                            
                        endif;
                        
                        //Phone
                        if ( $yog_email ) :
                            
                            printf( '<li><span class="icon"><i class="fa fa-envelope"></i></span> <a href="mailto:%s">%s</a></li>', $yog_email, $yog_email );
                            
                        endif;
                     ?>
                   </ul>
                <?php
                                     
            else:
            
                ?>
                <ul class="toggle-footer">
                
                    <?php if ( $yog_address ) : ?>
        			     <li class="media">
                            <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                            <div class="media-body">
                              <p><?php echo esc_html( $yog_address ); ?></p>
                            </div>
                         </li> 
                     <?php endif;  if ( $yog_phone ) : ?>
        			     <li class="media">
                            <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                            <div class="media-body">
                              <p><?php echo wp_kses( $yog_phone, array( 'br' => array() ) ); ?></p>
                            </div>
                         </li>  
                      <?php endif;  if ( $yog_email ) : ?>
        			     <li class="media">
                            <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>  </span> </div>
                            <div class="media-body">
                              <a href="mailto:<?php echo $yog_email; ?>"><?php echo esc_html( $yog_email ); ?></a>
                            </div>
                         </li>     
                    <?php  endif; ?> 
                    
                 </ul>
                <?php
            endif;
            
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog_title']      = strip_tags( $new_instance['yog_title'] );
        $instance['yog_logo']       = $new_instance['yog_logo'];
        $instance['yog_address']    = $new_instance['yog_address'];
        $instance['yog_description']= $new_instance['yog_description'];
        $instance['yog_phone']      = $new_instance['yog_phone'];
        $instance['yog_email']      = $new_instance['yog_email'];

        return $instance;
    }

    function form($instance) {
        $defaults = array( );
        $instance = wp_parse_args((array) $instance, $defaults); ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_title') ); ?>">
                <strong><?php echo esc_html__('Title', 'flipmart') ?>:</strong>
                <input type="editor" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_title') ); ?>" value="<?php if ( isset( $instance['yog_title'] ) ) echo esc_attr( $instance['yog_title'] ); ?>" />
            </label>
        </p>
        
        <?php
            //Enqueue Media Lib.
            if(function_exists( 'wp_enqueue_media' )){
                wp_enqueue_media();
            }else{
                wp_enqueue_style('thickbox');
                wp_enqueue_script('media-upload');
                wp_enqueue_script('thickbox');
            }
        ?>
        <p class="yog-logo-wrapper">
            <label for="<?php echo esc_attr( $this->get_field_id('yog_logo') ); ?>">
                <strong><?php echo esc_html__('Logo Image', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" value="<?php if ( isset( $instance['yog_logo'] ) ): echo $instance['yog_logo']; endif; ?>" placeholder="No file selected" name="<?php echo esc_attr( $this->get_field_name('yog_logo') ); ?>" />
		        <button class="yog-logo-setter button"><?php echo esc_html_e( 'Choose File', 'flipmart' ); ?></button> 
            </label>
        </p>
        
        <?php if( ( 'engineer' == yog_helper()->yog_get_layout( 'modify' ) || 'shoes' == yog_helper()->yog_get_layout( 'modify' ) || 'lawyer' == yog_helper()->yog_get_layout( 'modify' ) || 'jewellery' == yog_helper()->yog_get_layout( 'modify' ) || 'furniture' == yog_helper()->yog_get_layout( 'modify' ) || 'finances' == yog_helper()->yog_get_layout( 'modify' ) ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ): ?>
            
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('yog_description') ); ?>">
                    <strong><?php echo esc_html__('Description', 'flipmart') ?>:</strong>
                    <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_description') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_description') ); ?>" ><?php if ( isset( $instance['yog_description'] ) ) echo esc_attr( $instance['yog_description'] ); ?></textarea>
                </label>
            </p>
            
        <?php endif; ?>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_address') ); ?>">
                <strong><?php echo esc_html__('Address', 'flipmart') ?>:</strong>
                <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_address') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_address') ); ?>" ><?php if ( isset( $instance['yog_address'] ) ) echo esc_attr( $instance['yog_address'] ); ?></textarea>
            </label>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_phone') ); ?>">
                <strong><?php echo esc_html__('Phone Number', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_phone') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_phone') ); ?>" value="<?php if ( isset( $instance['yog_phone'] ) ) echo esc_attr( $instance['yog_phone'] ); ?>" />
            </label>
        </p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_email') ); ?>">
                <strong><?php echo esc_html__('Email', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_email') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_email') ); ?>" value="<?php if ( isset( $instance['yog_email'] ) ) echo esc_attr( $instance['yog_email'] ); ?>" />
            </label>
        </p>
        
    <?php
    }
}

add_action('widgets_init', 'yog_contact_info_load_widget');

function yog_contact_info_load_widget() {
    register_widget('Yog_Contact_Info_Widget');
}
?>