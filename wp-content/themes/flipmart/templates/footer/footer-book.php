<?php 
/**
 * The template for displaying the footer book version
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
         <div class="row">
            <?php if( yog_helper()->get_option( 'book-footer-menu' ) && has_nav_menu( 'footer' ) ): ?>
                <div class="footer-section-menu">
                    <?php 
                        //Menu Arguments    
                        wp_nav_menu( array(
                            'container'       => 'div',
                            'container_class' => 'col-sm-12',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'depth'           => 1,  
                            'theme_location'  => 'footer',
                            'walker'          => new Yog_Walker_Nav_Menu
                        ));
                    ?>
                </div>
            <?php endif; ?>
            
            <?php 
                if( is_active_sidebar( 'footer' ) ){
                    dynamic_sidebar( 'footer' );
                }
            ?>
         </div>
      </div>
   </div>
   <div class="copyright-bar">
      <div class="container">
         <div class="col-xs-12 col-sm-6 no-padding">
            <?php echo yog_helper()->get_option( 'book-footer-copyright' ); ?>
         </div>
         <div class="col-xs-12 col-sm-6 no-padding">
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
                    
                    //Content                            
                    echo '<div class="clearfix social-media"><ul>';
                    
                        foreach( $yog_social_links['network'] as $yog_social_icon ){
                            echo '<li><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><span><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></span></a></li>';
                            $yog_counter++;
                        }
                    
                    echo '</ul></div>';
                    
                endif; 
            ?>
            </div> 
         </div>
      </div>
   </div>
</footer>