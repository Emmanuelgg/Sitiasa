<?php 
/**
 * The template for displaying the footer lingerie version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
?>
<footer id="footer" <?php yog_helper()->attr( 'footer', array( 'class' => 'footer-section' ) ); ?>>
    <?php if( is_active_sidebar( 'footer' ) ):  ?>   
        <div class="footer-top">
            <div class="container">
               <div class="row">
                  <?php dynamic_sidebar( 'footer' ); ?> 
               </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="lingerie-copyright">
        <div class="footer-divider">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-icon.png" alt="" />
        </div>
        <div class="container">
           <div class="col-xs-12 col-sm-12 no-padding social">
              <p><?php echo yog_helper()->get_option( 'lawyer-footer-copyright' ); ?></p>
           </div>
        </div>
    </div>
</footer>