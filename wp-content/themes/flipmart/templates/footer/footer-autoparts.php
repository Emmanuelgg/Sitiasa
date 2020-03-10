<?php 
/**
 * The template for displaying the footer autoparts version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
 //Enqueue Js Files 
 wp_enqueue_script( 'yog-autoparts-scripts' );
 
 //Animation
 $yog_footer_animation = yog_helper()->get_option( 'autoparts-footer-animation' );
 $yog_footer_delay     = yog_helper()->get_option( 'autoparts-footer-delay' );
?>
<footer <?php yog_helper()->attr( 'footer', array( 'data-animation' => $yog_footer_animation, 'data-animation-delay' => $yog_footer_delay, 'class' => 'footer autoparts bg-dark' ) ); ?>>
  <div class="container">
  
    <?php if( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' )  || is_active_sidebar( 'footer-4' )  ): ?>  
        <div class="footer-top-wrap border-bottom pb-4">
          <div class="row">
            <div <?php yog_helper()->attr( false, array( 'data-animation' => $yog_footer_animation, 'data-animation-delay' => $yog_footer_delay, 'class' => 'col-md-3' ) ); ?>>
                <?php 
                    if( is_active_sidebar( 'footer-1' ) ){
                        dynamic_sidebar( 'footer-1' );
                    }
                ?>
            </div>
            <div <?php yog_helper()->attr( false, array( 'data-animation' => $yog_footer_animation, 'data-animation-delay' => $yog_footer_delay, 'class' => 'col-md-3' ) ); ?>>
                <?php 
                    if( is_active_sidebar( 'footer-2' ) ){
                        dynamic_sidebar( 'footer-2' );
                    }
                ?>
            </div>
            <div <?php yog_helper()->attr( false, array( 'data-animation' => $yog_footer_animation, 'data-animation-delay' => $yog_footer_delay, 'class' => 'col-md-3' ) ); ?>>
                <?php 
                    if( is_active_sidebar( 'footer-3' ) ){
                        dynamic_sidebar( 'footer-3' );
                    }
                ?>
            </div>
            <div <?php yog_helper()->attr( false, array( 'data-animation' => $yog_footer_animation, 'data-animation-delay' => $yog_footer_delay, 'class' => 'col-md-3' ) ); ?>>
                <?php 
                    if( is_active_sidebar( 'footer-4' ) ){
                        dynamic_sidebar( 'footer-4' );
                    }
                ?>
            </div>
          </div>
        </div>
    <?php endif; ?>
    
    <div class="footer-bottom-wrap py-30">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="m-0 copyright-text"><?php echo yog_helper()->get_option( 'autoparts-footer-copyright' ); ?></div>
        </div>
      </div>
    </div>
  </div>
</footer>