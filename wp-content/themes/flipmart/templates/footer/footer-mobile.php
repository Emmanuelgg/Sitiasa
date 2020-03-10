<?php 
/**
 * The template for displaying the footer mobile app version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
?>
<footer <?php yog_helper()->attr( 'footer', array( 'class' => 'footer-content' ) ); ?>>
 <div class="container">
    <?php 
      //Widget Area 
      if( is_active_sidebar( 'footer' ) ):
          
          echo '<div class="row">';
            dynamic_sidebar( 'footer' );
          echo '</div>';
          
      endif;
      
      //Get Social Icons
      $yog_social_links = yog_helper()->get_option( 'social-identities' );
    
      //Check & Print
      if( yog_helper()->get_option( 'social-icon-enable' ) && $yog_social_links ):
    
        $yog_link = $yog_title = array(); $yog_counter = 0;
        
        //Link
        foreach( $yog_social_links['url'] as $yog_social_link ){
            $yog_link[] = $yog_social_link;
        }
        
        //Title                            
        foreach( $yog_social_links['title'] as $yog_social_title ){
            $yog_title[] = $yog_social_link;
        } 
        
        echo '<div class="row"><div class="col-sm-12 social-media">';
        
            foreach( $yog_social_links['network'] as $yog_social_icon ){
                echo '<a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a>';
                $yog_counter++;
            }
            
        echo '</div></div>';
    
       endif;
    ?>
 </div>
 <div class="copyright">
    <div class="row">
       <div class="container">
          <div class="col-sm-12">
             <p><?php echo yog_helper()->get_option( 'mobile-footer-copyright' ); ?></p>
          </div>
       </div>
    </div>
 </div>
</footer>