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
<footer <?php yog_helper()->attr( 'footer', array( 'class' => 'footer color-bg outer-top-xs' ) ); ?>>
  
  <?php if( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' )  || is_active_sidebar( 'footer-4' )  ): ?>  
      <div class="footer-bottom">
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
            <div class="row">
                <div class="col-xs-12 col-md-4 col-sm-12 social">
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
                            echo '<ul class="link">';
                            
                                foreach( $yog_social_links['network'] as $yog_social_icon ){
                                    echo '<li class="pull-left '. esc_attr( str_replace( 'fa-', '', $yog_social_icon ) ) .'"><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                                    $yog_counter++;
                                }
                            
                            echo '</ul>';
                            
                        endif; 
                    ?>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-12 copyright text-center">
                    <?php echo yog_helper()->get_option( 'footer-copyright' ); ?>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-12">
                    <?php 
                        //Get Payment Mathod
                        $yog_payments_methods = yog_helper()->get_option( 'payments-method' );
                        
                        //Check & Print
                        if( isset( $yog_payments_methods ) && !empty( $yog_payments_methods ) ):
                           
                            echo '<div class="clearfix payment-methods"><ul>';
                                
                                //Link
                                $yog_payment_link = array();
                                foreach( $yog_payments_methods['payment-method-link'] as $yog_payments_method ){
                                    
                                    $yog_payment_link[] = $yog_payments_method;
                                    
                                }
                                
                                $yog_counter = 0;
                                foreach( $yog_payments_methods['payment-method-logo'] as $yog_payments_logo ){
                                    
                                    if( isset( $yog_payments_logo['url'] ) && !empty( $yog_payments_logo['url'] ) ){
                                        echo '<li><a href="'. esc_url( $yog_payment_link[$yog_counter] ) .'"><img src="'. esc_url( $yog_payments_logo['url'] ) .'" alt="'. esc_attr( get_post_meta( $yog_payments_logo['id'], '_wp_attachment_image_alt', true) ) .'"></a></li>';    
                                    }
                                    
                                }
                            
                            echo '</ul></div>';
                            
                        endif; 
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>