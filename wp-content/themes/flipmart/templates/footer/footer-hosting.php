<?php 
/**
 * The template for displaying the footer hosting version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
?>
<footer id="footer" <?php yog_helper()->attr( 'footer', array( 'class' => 'hosting-footer-section' ) ); ?>>
 <?php if( is_active_sidebar( 'footer' ) ): ?>
     <div class="footer-top">
        <div class="container">
           <div class="row">
              <?php dynamic_sidebar( 'footer' ); ?>
           </div>
        </div>
     </div>
 <?php endif; ?>
 <div class="footer-bottom">
   <div class="container">
      <div class="col-xs-12 col-sm-6 no-padding social">
         <p><?php echo yog_helper()->get_option( 'hosting-footer-copyright' ); ?></p>
      </div>
      <div class="col-xs-12 col-sm-6 no-padding">
         <?php 
            //Get Payment Mathod
            $yog_payments_methods = yog_helper()->get_option( 'hosting-payments-method' );
            
            //Check & Print
            if( isset( $yog_payments_methods ) && !empty( $yog_payments_methods ) ):
               
                echo '<div class="clearfix payment-methods"><ul><h1>'. esc_html__( 'WE ACCEPT:', 'flipmart' ) .'</h1>';
                    
                    //Link
                    $yog_payment_link = array();
                    foreach( $yog_payments_methods['hosting-payment-method-link'] as $yog_payments_method ){
                        
                        $yog_payment_link[] = $yog_payments_method;
                        
                    }
                    
                    $yog_counter = 0;
                    foreach( $yog_payments_methods['hosting-payment-method-logo'] as $yog_payments_logo ){
                        
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
</footer>