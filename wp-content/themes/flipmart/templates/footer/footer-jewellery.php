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
<footer <?php yog_helper()->attr( 'footer' ); ?>>
 <div class="footer-container">
    <?php if( yog_helper()->get_option( 'jewellery-newsletter' ) ): ?> 
        <div class="container">
           <div class="row">
              <div class="col-sm-12">
                 <div class="jewellery-newsletter">
                    <div class="col-sm-1">
                       <i class="fa fa-envelope"></i>
                    </div>
                    <div class="col-sm-5 jewellery-content">
                       <?php 
                           //Content
                           echo yog_helper()->get_option( 'jewellery-newsletter-content' ) 
                       ?> 
                    </div>
                    <div class="col-sm-6 newsletter-form">
                       <?php if( mc4wp_get_form() ): ?> 
                           <div class="newsletter-text">
                              <?php echo mc4wp_get_form(); ?>  
                           </div>
                       <?php endif; ?>
                    </div>
                 </div>
              </div>
              <div class="clearfix"></div>
              <?php if( is_active_sidebar( 'footer' ) ): ?>
                  <div class="jewellery-footer-widgets">
                     <?php dynamic_sidebar( 'footer' ); ?>
                     <div class="clearfix"></div>
                  </div>
              <?php endif; ?>
           </div>
        </div>
    <?php endif; ?>
    <div class="copyright">
       <div class="container">
          <div class="row">
             <div class="col-sm-12">
                <p><?php echo yog_helper()->get_option( 'jewellery-footer-copyright' ); ?></p>
             </div>
          </div>
       </div>
    </div>
 </div>
</footer>