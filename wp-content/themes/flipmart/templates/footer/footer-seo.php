<?php 
/**
 * The template for displaying the footer seo services app version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
?>
<footer <?php yog_helper()->attr( 'footer'); ?>>
 <?php if( is_active_sidebar( 'footer' ) ):  ?>  
     <div class="seo-footer">
        <div class="container">
           <div class="row">
              <?php dynamic_sidebar( 'footer' ); ?> 
           </div>
        </div>
     </div>
 <?php endif; ?>
 <div class="seo-copyright">
    <p><?php echo yog_helper()->get_option( 'seo-footer-copyright' ); ?></p>
 </div>
</footer>