<?php 
/**
 * The template for displaying the footer shoes version
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
 <div class="footer-bottom">
   <div class="container">
      <div class="col-xs-12 col-sm-6 no-padding copyright">
         <p><?php echo yog_helper()->get_option( 'shoes-footer-copyright' ); ?></p>
      </div>
      <?php 
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
                
                echo '<div class="col-xs-12 col-sm-6 no-padding"><div class="clearfix social-media"><ul>';
                
                    foreach( $yog_social_links['network'] as $yog_social_icon ){
                        echo '<li><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                        $yog_counter++;
                    }
                    
                echo '</ul></div></div>';
            
            endif;  
      ?>
   </div>
 </div>
</footer>