<?php 
/**
 * The template for displaying the footer ray version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
 
 //Enqueue Css Files
 wp_enqueue_style( 'simple-line-icons' ); 
 wp_enqueue_style( 'icomoon-soc-icons' ); 
 wp_enqueue_style( 'magnific-popup' );
 
 //Enqueue Js Files 
 wp_enqueue_script( 'superslides' ); 
 wp_enqueue_script( 'magnific-popup' ); 
 wp_enqueue_script( 'stellar' ); 
 wp_enqueue_script( 'nav' ); 
 wp_enqueue_script( 'yog-ray-scripts' ); 
?>    
    <footer id="footer">
		<div class="container"> 
            <?php 
                //Logo
               if( $yog_logo = yog_helper()->get_option( 'ray-footer-logo' ) ): 
                    echo yog_get_logo( array( 'yog_container' => false, 'yog_link_class' => 'logo goto', 'yog_logo' => $yog_logo ) );  //Site Logoss
               endif;
               
               echo '<p class="copyright">'. yog_helper()->get_option( 'ray-footer-copyright' ) .'</p>';
            ?>
		</div>
	</footer>
</div>