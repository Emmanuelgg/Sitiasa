<?php 
/**
 * The template for displaying the footer finances version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
?>
<footer>
    <?php
    if( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' )  || is_active_sidebar( 'footer-4' )  ): ?>  
        <div <?php yog_helper()->attr( 'footer', array( 'class' => 'footer' ) ); ?>>
            <div class="container">
                <div class="row">
                   <div class="col-sm-4">
                      <?php dynamic_sidebar( 'footer-1' ); ?>
                   </div>
                   <div class="col-sm-2">
                      <?php dynamic_sidebar( 'footer-2' ); ?>
                   </div>
                   <div class="col-sm-2">
                      <?php dynamic_sidebar( 'footer-3' ); ?>
                   </div>
                   <div class="col-sm-3 footer-flickr">
                      <?php dynamic_sidebar( 'footer-4' ); ?>
                   </div>
                </div>
            </div>
        </div>
     <?php endif; ?>
    <div class="copyright">
        <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <?php echo yog_helper()->get_option( 'finances-footer-copyright' ); ?>
               </div>
            </div>
        </div>
    </div>
</footer>