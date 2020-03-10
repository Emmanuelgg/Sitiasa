<?php 
/**
 * The template for displaying the footer restaurant app version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
?>
<footer <?php yog_helper()->attr( 'footer'); ?>>
 <div class="footer-container">
    <div class="container">
       <div class="row">
          <div class="col-sm-12">
             <div class="footer-top">
                <div class="r-footer-logo">
                   <?php 
                       //Logo
                       if( $yog_logo = yog_helper()->get_option( 'restaurant-footer-logo' ) ): 
                            echo yog_get_logo( array( 'yog_container' => false, 'yog_link_class' => false, 'yog_logo' => $yog_logo ) );  //Site Logoss
                       endif; 
                       
                       //Address
                       if( $yog_address = yog_helper()->get_option( 'restaurant-footer-address' ) ):
                            echo '<p class="r-footer-address">'. $yog_address .'</p>';
                       endif;
                       
                       //Phone
                       if( $yog_phone = yog_helper()->get_option( 'restaurant-footer-phone' ) ):
                            echo '<p>'. $yog_phone .'</p>';
                       endif;
                       
                       //Email
                       if( $yog_email = yog_helper()->get_option( 'restaurant-footer-email' ) ):
                            echo '<p>'. $yog_email .'</p>';
                       endif;
                       
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
                            
                            echo '<ul>';
                            
                                foreach( $yog_social_links['network'] as $yog_social_icon ){
                                    echo '<li><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                                    $yog_counter++;
                                }
                                
                            echo '</ul>';
                        
                        endif;
                   ?>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="copyright">
       <div class="container">
          <div class="row">
              <?php 
                if( has_nav_menu( 'footer' ) ):
                    
                    //Menu Arguments 
                    wp_nav_menu( array(
                        'container'       => 'div',
                        'container_class' => 'col-sm-6',
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'theme_location'  => 'footer',
                        'walker'          => new Yog_Walker_Nav_Menu
                    ));
                    
                endif;
             ?>
             <div class="col-sm-6">
                <p><?php echo yog_helper()->get_option( 'restaurant-footer-copyright' ); ?></p>
             </div>
          </div>
       </div>
    </div>
 </div>
</footer>