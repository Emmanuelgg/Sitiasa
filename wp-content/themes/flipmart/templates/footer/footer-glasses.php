<?php 
/**
 * The template for displaying the footer glasses version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
?>
<footer id="footer" <?php yog_helper()->attr( 'footer', array( 'class' => 'footer-section glasses-footer' ) ); ?>>
 <div class="footer-top">
    <div class="container">
       <div class="row">
          <?php 
             //Footer Widget 
             if( is_active_sidebar( 'footer' ) ): 
                dynamic_sidebar( 'footer' );
             endif; 
          ?>
          <div class="footer-bottom">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 social-icon-section">
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
                        
                        //Content                            
                        echo '<div class="text-left"><ul class="social-link">';
                        
                            foreach( $yog_social_links['network'] as $yog_social_icon ){
                                echo '<li class="pull-left '. esc_attr( str_replace( 'fa-', '', $yog_social_icon ) ) .'"><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                                $yog_counter++;
                            }
                        
                        echo '</ul></div>';
                        
                    endif; 
               ?> 
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 social-icon-section">
               <?php 
                   if( $yog_payment = yog_helper()->get_option( 'glasses-payment-method-logo' ) ):
                        echo '<div class="payment_logo text-right"><img src="'. $yog_payment['url'] .'" alt=""></div>';
                   endif; 
               ?> 
            </div>
         </div>
       </div>
    </div>
 </div>
 <div class="copyright-bar glasses-copyright">
    <div class="container">
       <div class="col-xs-12 col-sm-12 no-padding social">
          <p><?php echo yog_helper()->get_option( 'glasses-footer-copyright' ); ?></p>
       </div>
    </div>
 </div>
</footer>