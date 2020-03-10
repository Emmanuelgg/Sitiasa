<?php 
/**
 * The template for displaying the footer version one
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since flipmart 1.0
 */
?>

<footer <?php yog_helper()->attr( 'footer' ); ?>>
   <div class="footer-inner">
      <div class="newsletter-row">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col">
                   <?php 
                        //Get Payment Mathod
                        $yog_payments_methods = yog_helper()->get_option( 'yog-payments-method' );
                        
                        //Check & Print
                        if( isset( $yog_payments_methods ) && !empty( $yog_payments_methods ) ):
                           
                            echo '<div class="payment-accept"><div>';
                            
                                foreach( $yog_payments_methods['yog-payment-method-logo'] as $yog_payments_logo ){
                                    
                                    if( isset( $yog_payments_logo['url'] ) && !empty( $yog_payments_logo['url'] ) ){
                                        echo '<img src="'. esc_url( $yog_payments_logo['url'] ) .'" alt="'. esc_attr( get_post_meta( $yog_payments_logo['id'], '_wp_attachment_image_alt', true) ) .'">';    
                                    }
                                    
                                }
                            
                            echo '</div></div>';
                            
                        endif; 
                   ?> 
               </div>
               <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col1">
                  <?php if( $yog_newsletter = yog_helper()->get_option( 'yog-news-letter' ) ): ?>
                       <div class="newsletter-wrap">
                            <?php echo do_shortcode( $yog_newsletter ); ?>
                       </div>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
      <?php if( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) ): ?>
          <div class="container">
             <div class="row">
                <div class="col-sm-4 col-xs-12 col-lg-4">
                   <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
                <div class="col-sm-8 col-xs-12 col-lg-8">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
             </div>
          </div>
      <?php endif; ?>
   </div>
   
   <?php 
        //Get Payment Mathod
        $yog_features = yog_helper()->get_option( 'yog-features' );
        
        //Check & Print
        if( isset( $yog_features ) && !empty( $yog_features ) ):
           
            ?>
            <div class="footer-middle">
                <div class="our-features-box">
                   <div class="container">
                     <div class="row">
                        <?php 
                           $yog_icon_content = array(); $yog_counter = 0;
                           foreach( $yog_features['yog-feature-icon'] as $yog_icon ){
                               $yog_icon_content[] = '<i class="fa '. esc_attr( $yog_icon ) .'"></i>';
                           }
                           
                           foreach( $yog_features['yog-feature-heading'] as $yog_heading ){
                              
                              echo '<div class="col-md-3 col-sm-6"><div class="feature-box free-shipping">'. $yog_icon_content[$yog_counter] .'<div class="content">'. esc_html( $yog_heading ) .'</div></div></div>'; 
                            
                              //increments
                              $yog_counter++; 
                           }
                      ?>
                     </div>
                  </div>
               </div>
            </div>
            <?php
            
        endif; 
    ?>
</footer>