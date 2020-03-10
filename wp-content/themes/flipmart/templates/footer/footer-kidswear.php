<?php 
/**
 * The template for displaying the footer kidswear version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
?>
<footer <?php yog_helper()->attr( 'footer', array( 'class' => 'footer' ) ); ?>>
    <?php if( $yog_logo = yog_helper()->get_option( 'kidswear-footer-logo' ) ): ?>   
        <div class="container">
            <div class="row">
               <div class="col-sm-12 footer-logo">
                  <?php echo yog_get_logo( array( 'yog_container' => false, 'yog_link_class' => false, 'yog_logo' => $yog_logo ) );  //Site Logo ?>
               </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if( is_active_sidebar( 'footer' ) ): ?>
        <div class="footer-menu">
            <div class="container">
               <div class="row">
                  <?php dynamic_sidebar( 'footer' ); ?>  
               </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row">
           <div class="col-sm-12">
              <div class="copyright">
                 <p><?php echo yog_helper()->get_option( 'kidswear-footer-copyright' ); ?></p>
                 <?php 
                    //Get Payment Mathod
                    $yog_socials = yog_helper()->get_option( 'kidswear-socials' );
                    
                    //Check & Print
                    if( isset( $yog_socials ) && !empty( $yog_socials ) ):
                        
                        //Link
                        $yog_social_links = array();
                        foreach( $yog_socials['kidswear-social-link'] as $yog_social_link ){
                            $yog_social_links[] = $yog_social_link;
                        }
                        
                        $yog_counter = 0;
                        foreach( $yog_socials['kidswear-social'] as $yog_social ){
                            
                            if( isset( $yog_social['url'] ) && !empty( $yog_social['url'] ) ){
                                echo '<a href="'. esc_url( $yog_social_links[$yog_counter] ) .'"><img src="'. esc_url( $yog_social['url'] ) .'" alt="'. esc_attr( $yog_social['alt'] ) .'"></a>';    
                            }
                            
                            //Counter Increments
                            $yog_counter++;
                        }
                        
                    endif; 
                 ?>
              </div>
           </div>
        </div>
    </div>
</footer>