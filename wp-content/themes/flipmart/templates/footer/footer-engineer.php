<?php 
/**
 * The template for displaying the footer engineer version
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
           <?php if( yog_helper()->get_option( 'engineer-footer-contact' ) ): ?> 
               <div class="our-phone-content">
                  <?php 
                    //Contact Image
                    $yog_img = yog_helper()->get_option( 'engineer-foter-img' );
                    if( isset( $yog_img['url'] ) && !empty( $yog_img['url'] ) ){
                        printf( '<div class="our-phone-image"><img src="%s" alt="%s"></div>', $yog_img['url'], $yog_img['alt'] );
                    }
                    //Footer Phone
                    if( $yog_phone = yog_helper()->get_option( 'engineer-footer-phone' ) ){
                        printf( '<h1>%s <span>%s</span></h1>',esc_html__( 'Here\'s our Phone Number :', 'flipmart' ), $yog_phone );
                    }
                  ?>
               </div>
           <?php endif; ?>
           <?php if( is_active_sidebar( 'footer' ) ): ?>  
              <div class="row">
                 <?php dynamic_sidebar( 'footer' ); ?>
              </div>
           <?php endif; ?>
         </div>
     </div>
     <div class="copyright-bar">
       <div class="container">
          <div class="col-xs-12 no-padding">
             <p><?php echo yog_helper()->get_option( 'engineer-footer-copyright' ); ?></p>
          </div>
       </div>
     </div>
</footer>