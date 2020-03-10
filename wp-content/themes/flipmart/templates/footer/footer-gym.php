<?php 
/**
 * The template for displaying the footer Gym version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
?>
<footer id="footer" class="gym-footer">
 <div class="footer-top">
    <div class="container">
       <div class="row">
           <?php 
               //Description
               if( $yog_newsletter_content = yog_helper()->get_option( 'gym-newsletter-content' ) ){
                  echo '<h1>'. $yog_newsletter_content .'</h1>';  
               }
               
               //News Letter Form
               if( mc4wp_get_form() ){
           ?>
              <div class="col-sm-12 subscribe">
                 <?php echo mc4wp_get_form(); ?>  
              </div>
          <?php } ?>
       </div>
    </div>
    <div class="gym-footer-nav">
       <div class="container">
          <div class="row">
             <div class="col-sm-9 footer-menu">
                <?php 
                    //Footer Menu    
                    if( has_nav_menu( 'footer' ) ):
                        
                        wp_nav_menu( array(
                            'container'       => false,
                            'menu_class'      => 'list-unstyled',
                            'menu_id'         => '',
                            'theme_location'  => 'footer',
                            'walker'          => new Yog_Walker_Nav_Menu
                        ));
                        
                    endif; 
                ?>
             </div>
             <div class="col-sm-3 footer-logo">
                <?php echo yog_get_logo( array( 'yog_container' => false, 'yog_link_class' => false, 'yog_logo' => yog_helper()->get_option( 'gym-footer-logo' ) ) );  //Site Logo ?>
             </div>
          </div>
          <!-- /.col -->
       </div>
    </div>
    <div class="container">
       <div class="row">
          <div class="widget-area">
             <?php
                //Widget Area 
                if( is_active_sidebar( 'footer' ) ): 
                   dynamic_sidebar( 'footer' );
                endif;
             ?>
             <div class="footer-text-content">
                <div class="col-sm-3 last-menu">
                   <?php 
                       //Heading
                       if( $yog_heading = yog_helper()->get_option( 'gym-heading' ) ){
                          echo '<h4>'. $yog_heading .'</h4>';  
                       } 
                       
                       //Description
                       if( $yog_content = yog_helper()->get_option( 'gym-content' ) ){
                          echo '<p>'. $yog_content .'</p>';  
                       }
                   ?> 
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="gym-copyright">
    <div class="gym-copyright-content">
       <p><?php echo yog_helper()->get_option( 'gym-footer-copyright' ); ?></p>
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
            
            echo '<div class="gym-copyright-social"><ul>';
            
                foreach( $yog_social_links['network'] as $yog_social_icon ){
                    echo '<li><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                    $yog_counter++;
                }
                
            echo '</ul></div>';
        
         endif;
    ?>
 </div>
</footer>