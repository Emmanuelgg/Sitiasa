<?php 
/**
 * The template for displaying the footer default version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
?>
<footer <?php yog_helper()->attr( 'footer' ); ?>>
    <div class="footer-container">
    	<div class="container">
            	<div class="cosmetic-newsletter">
                    <div class="col-sm-3 cosmetic-social">
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
                                
                                //Heading
                                if( $yog_social_heading = yog_helper()->get_option( 'cosmetic-social-heading' ) ){
                                    echo '<h3>'. $yog_social_heading .'</h3>';
                                }
                                
                                //Content 
                                foreach( $yog_social_links['network'] as $yog_social_icon ){
                                    echo '<a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a>';
                                    $yog_counter++;
                                }
                                
                            endif; 
                        ?>
                    </div>
                    <div class="col-sm-9 social-newsletter">
                        <?php 
                            //Heading News Letter
                            if( $yog_newsletter_heading = yog_helper()->get_option( 'cosmetic-newsletter-heading' ) ){
                                echo '<h3>'. $yog_newsletter_heading .'</h3>';
                            }
                            
                            //Description News Letter
                            if( $yog_newsletter_content = yog_helper()->get_option( 'cosmetic-newsletter-content' ) ){
                                echo '<p>'. $yog_newsletter_content .'</p>';
                            }
                            
                            //News Letter Form
                            if( mc4wp_get_form() ){
                        ?>
                        <div class="newsletter-text">
                        	<?php echo mc4wp_get_form(); ?>  
                        </div>
                        <?php } ?>
                    </div>
                </div>   
                 
         </div>    
         <?php if( is_active_sidebar( 'footer' ) ){ ?>
             <div class="container">
                <div class="cos-footer-links">
                    <?php dynamic_sidebar( 'footer' ); ?>
                </div>
             </div>
        <?php } ?>
        <div class="copyright">
        	<div class="container">
            	<div class="row">
                	<div class="col-sm-6">
                    	<?php echo yog_helper()->get_option( 'cosmetic-footer-copyright' );  ?>
                    </div>
                    <div class="col-sm-6">
                        <?php 
                            //Get Payment Mathod
                            $yog_payments_methods = yog_helper()->get_option( 'cosmetic-payments-method' );
                            
                            //Check & Print
                            if( isset( $yog_payments_methods ) && !empty( $yog_payments_methods ) ):
                               
                                echo '<div class="clearfix payment-methods"><ul>';
                                    
                                    //Link
                                    $yog_payment_link = array();
                                    foreach( $yog_payments_methods['cosmetic-payment-method-link'] as $yog_payments_method ){
                                        $yog_payment_link[] = $yog_payments_method;
                                    }
                                    
                                    $yog_counter = 0;
                                    foreach( $yog_payments_methods['cosmetic-payment-method-logo'] as $yog_payments_logo ){
                                        
                                        if( isset( $yog_payments_logo['url'] ) && !empty( $yog_payments_logo['url'] ) ){
                                            echo '<li><a href="'. esc_url( $yog_payment_link[$yog_counter] ) .'"><img src="'. esc_url( $yog_payments_logo['url'] ) .'" alt="'. esc_attr( get_post_meta( $yog_payments_logo['id'], '_wp_attachment_image_alt', true) ) .'"></a></li>';    
                                        }
                                        
                                        //Counter Increments
                                        $yog_counter++;
                                        
                                    }
                                
                                echo '</ul></div>';
                                
                            endif; 
                        ?>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</footer>