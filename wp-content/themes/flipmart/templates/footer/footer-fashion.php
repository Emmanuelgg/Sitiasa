<?php 
/**
 * The template for displaying the footer jewellery version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
?>
<footer id="footer" <?php yog_helper()->attr( 'footer', array( 'class' => 'footer-section' ) ); ?>>

    <?php if( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' )  || is_active_sidebar( 'footer-4' )  ): ?>
        <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                	<?php 
                        if( is_active_sidebar( 'footer-1' ) ){
                            dynamic_sidebar( 'footer-1' );
                        }
                    ?>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                	<?php 
                        if( is_active_sidebar( 'footer-2' ) ){
                            dynamic_sidebar( 'footer-2' );
                        }
                    ?>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                	<?php 
                        if( is_active_sidebar( 'footer-3' ) ){
                            dynamic_sidebar( 'footer-3' );
                        }
                    ?>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                	<?php 
                        if( is_active_sidebar( 'footer-4' ) ){
                            dynamic_sidebar( 'footer-4' );
                        }
                    ?>
                </div>
              </div>
            </div>
        </div>
    <?php endif; ?>
    
    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding social">
                <?php echo yog_helper()->get_option( 'fashion-footer-copyright' ); ?>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <?php 
                    //Get Payment Mathod
                    $yog_payments_methods = yog_helper()->get_option( 'fashion-payments-method' );
                    
                    //Check & Print
                    if( isset( $yog_payments_methods ) && !empty( $yog_payments_methods ) ):
                       
                        echo '<div class="clearfix payment-methods"><ul>';
                            
                            //Link
                            $yog_payment_link = array();
                            foreach( $yog_payments_methods['fashion-payment-method-link'] as $yog_payments_method ){
                                
                                $yog_payment_link[] = $yog_payments_method;
                                
                            }
                             
                            $yog_counter = 0;    
                            foreach( $yog_payments_methods['fashion-payment-method-logo'] as $yog_payments_logo ){
                                
                                if( isset( $yog_payments_logo['url'] ) && !empty( $yog_payments_logo['url'] ) ){
                                    echo '<li><a href="'. esc_url( $yog_payment_link[$yog_counter] ) .'"><img src="'. esc_url( $yog_payments_logo['url'] ) .'" alt="'. esc_attr( get_post_meta( $yog_payments_logo['id'], '_wp_attachment_image_alt', true) ) .'"></a></li> ';    
                                }
                                
                            }
                        
                        echo '</ul></div>';
                        
                    endif; 
                ?> 
            </div>
        </div>
    </div>
</footer>