<?php 
/**
 * The template for displaying the footer flower version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */

 //Enqueue Js Files 
 wp_enqueue_script( 'yog-flower-scripts' ); 
 
 //Animation
 $yog_footer_animation = yog_helper()->get_option( 'footer-animation' );
 $yog_footer_delay     = yog_helper()->get_option( 'footer-delay' );
 
 $yog_footer_sidebar_animation = yog_helper()->get_option( 'footer-sidebar-animation' );
 $yog_footer_sidebar_delay     = yog_helper()->get_option( 'footer-sidebar-delay' );
 
 $yog_footer_payment_animation = yog_helper()->get_option( 'footer-payment-animation' );
 $yog_footer_payment_delay     = yog_helper()->get_option( 'footer-payment-delay' );
 
 $yog_footer_copyright_animation = yog_helper()->get_option( 'footer-copyright-animation' );
 $yog_footer_copyright_delay     = yog_helper()->get_option( 'footer-copyright-delay' );
?>
<footer <?php yog_helper()->attr( 'footer', array( 'data-animation' => $yog_footer_animation, 'data-animation-delay' => $yog_footer_delay, 'class' => 'footer position-relative flower_section pt-5 bg-dark overflow-hidden' ) ); ?>>
   <div class="f-before-bg-theme left-top-bg position-absolute">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower-top-left-bg.png" alt="footer-top-left-bg-theme" />
   </div>
   <div class="container">
      <?php if( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' )  || is_active_sidebar( 'footer-4' )  ): ?>  
          <div class="footer-top-wrap border-bottom pb-4">
             <div class="row">
                <div <?php yog_helper()->attr( false, array( 'data-animation' => $yog_footer_sidebar_animation, 'data-animation-delay' => $yog_footer_sidebar_delay, 'class' => 'col-md-3 col-12 pb-4' ) ); ?>>
                   <?php 
                        if( is_active_sidebar( 'footer-1' ) ){
                            dynamic_sidebar( 'footer-1' );
                        }
                    ?>
                </div>
                <div <?php yog_helper()->attr( false, array( 'data-animation' => $yog_footer_sidebar_animation, 'data-animation-delay' => $yog_footer_sidebar_delay, 'class' => 'col-md-3 col-12 pb-4' ) ); ?>>
                   <?php 
                        if( is_active_sidebar( 'footer-2' ) ){
                            dynamic_sidebar( 'footer-2' );
                        }
                    ?>
                </div>
                <div <?php yog_helper()->attr( false, array( 'data-animation' => $yog_footer_sidebar_animation, 'data-animation-delay' => $yog_footer_sidebar_delay, 'class' => 'col-md-3 col-12 pb-4' ) ); ?>>
                   <?php 
                        if( is_active_sidebar( 'footer-3' ) ){
                            dynamic_sidebar( 'footer-3' );
                        }
                    ?>
                </div>
                <div <?php yog_helper()->attr( false, array( 'data-animation' => $yog_footer_sidebar_animation, 'data-animation-delay' => $yog_footer_sidebar_delay, 'class' => 'col-md-3 col-12 pb-4' ) ); ?>>
                   <?php 
                        if( is_active_sidebar( 'footer-4' ) ){
                            dynamic_sidebar( 'footer-4' );
                        }
                    ?>
                </div>
             </div>
          </div>
      <?php endif; ?>
      <div class="footer-bottom-wrap py-3">
         <div class="row align-items-center">
            <div <?php yog_helper()->attr( false, array( 'data-animation' => $yog_footer_copyright_animation, 'data-animation-delay' => $yog_footer_copyright_delay, 'class' => 'col-md-6 col-12 py-1 text-center text-md-left' ) ); ?>>
               <div class="m-0 copyright-text"><?php echo yog_helper()->get_option( 'flower-footer-copyright' ); ?></div>
            </div>
            <div <?php yog_helper()->attr( false, array( 'data-animation' => $yog_footer_payment_animation, 'data-animation-delay' => $yog_footer_payment_delay, 'class' => 'col-md-6 col-12 py-1 d-flex justify-content-center justify-content-md-end' ) ); ?>>
                <?php 
                    //Get Payment Mathod
                    $yog_payments_methods = yog_helper()->get_option( 'flower-payments-method' );
                    
                    //Check & Print
                    if( isset( $yog_payments_methods ) && !empty( $yog_payments_methods ) ):
                       
                        echo '<ul class="list-inline m-0">';
                            
                            //Link
                            $yog_payment_link = array();
                            foreach( $yog_payments_methods['flower-payment-method-link'] as $yog_payments_method ){
                                
                                $yog_payment_link[] = $yog_payments_method;
                                
                            }
                            
                            $yog_counter = 0;
                            foreach( $yog_payments_methods['flower-payment-method-logo'] as $yog_payments_logo ){
                                
                                if( isset( $yog_payments_logo['url'] ) && !empty( $yog_payments_logo['url'] ) ){
                                    echo '<li class="list-inline-item"><a href="'. esc_url( $yog_payment_link[$yog_counter] ) .'"><img src="'. esc_url( $yog_payments_logo['url'] ) .'" alt="'. esc_attr( get_post_meta( $yog_payments_logo['id'], '_wp_attachment_image_alt', true) ) .'"></a></li>';    
                                }
                                
                            }
                        
                        echo '</ul>';
                        
                    endif;  
                ?>
            </div>
         </div>
      </div>
   </div>
   <div class="f-before-bg-theme right-bottom-bg position-absolute">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower-bottom-right-bg.png" alt="footer-bottom-right-bg-theme" />
   </div>
</footer>