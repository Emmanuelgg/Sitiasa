<?php 
/**
 * The template for displaying the footer furniture version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
?>
<footer <?php yog_helper()->attr( 'footer', array( 'class' => 'furniture-footer' ) ); ?>>
   <?php if( is_active_sidebar( 'footer' ) ): ?>
       <div class="container">
          <div class="furniture-footer-widgets">
             <?php dynamic_sidebar( 'footer' ); ?>
          </div>
       </div>
   <?php endif; ?>
   <div class="furniture-copyright">
      <div class="container">
         <p><?php echo yog_helper()->get_option( 'furniture-footer-copyright' ); ?></p>
      </div>
   </div>
</footer>