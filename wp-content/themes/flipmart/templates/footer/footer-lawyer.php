<?php 
/**
 * The template for displaying the footer lawyer version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
?>
<footer id="footer" <?php yog_helper()->attr( 'footer', array( 'class' => 'footer-section' ) ); ?>>
 <div class="footer-top">
    <div class="container">
       <?php    
            //Logo
            if( $yog_logo = yog_helper()->get_option( 'lawyer-footer-logo' ) ): 
                echo yog_get_logo( array( 'yog_container_class' => 'footer-logo', 'yog_link_class' => false, 'yog_logo' => $yog_logo ) );  //Site Logoss
            endif;
       ?>
       <div class="row">
          <div class="contact-section">
             <?php 
                //Phone Number
                if( $yog_phone = yog_helper()->get_option( 'lawyer-footer-phone' ) ):
                    printf( '<div class="contact"><h1><i class="fa fa-phone"></i>%s %s</h1></div>', esc_html__( 'Phone:', 'flipmart' ), $yog_phone );
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
                    
                    echo '<div class="social-icon"><ul>';
                    
                        foreach( $yog_social_links['network'] as $yog_social_icon ){
                            echo '<li><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                            $yog_counter++;
                        }
                        
                    echo '</ul></div>';
                
                 endif;
                 
                //Email
                if( $yog_email = yog_helper()->get_option( 'lawyer-footer-email' ) ):
                    printf( '<div class="contact"><h1><i class="fa fa-envelope"></i>%s %s</h1></div>', esc_html__( 'Email:', 'flipmart' ), $yog_email );
                endif;
             ?> 
          </div>
          <?php 
              //Widget Area 
              if( is_active_sidebar( 'footer' ) ): 
                  dynamic_sidebar( 'footer' );
              endif;
          ?>
       </div>
    </div>
 </div>
 <div class="footer-bottom">
   <div class="container">
      <div class="col-xs-12 no-padding social">
         <p><?php echo yog_helper()->get_option( 'lawyer-footer-copyright' ); ?></p>
      </div>
   </div>
 </div>
</footer>