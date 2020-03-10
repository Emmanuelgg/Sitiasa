<?php 
/**
 * The template for displaying the footer drink version
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */
?>
<footer class="drink-footer">
	<div class="container">
    	<div class="row">
        	<?php 
                //Footer Menu
                if( yog_helper()->get_option( 'drink-footer-menu' ) && has_nav_menu( 'footer' ) ): 
                
                    //Menu Arguments    
                    wp_nav_menu( array(
                        'container'       => 'div',
                        'container_class' => 'col-sm-6',
                        'menu_class'      => 'drink-footer-links',
                        'menu_id'         => '',
                        'theme_location'  => 'footer',
                        'walker'          => new Yog_Walker_Nav_Menu
                    ));
                
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
                    
                    //Content                            
                    echo '<div class="col-sm-6"><ul class="drink-footer-links drink-social-links">';
                    
                        foreach( $yog_social_links['network'] as $yog_social_icon ){
                            echo '<li><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><span><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></span></a></li>';
                            $yog_counter++;
                        }
                    
                    echo '</ul></div>';
                    
                endif; 
            
            ?>
        </div>
    </div>
    
    <div class="container">
      <div class="drink-copyright">
    	<div class="row">
                <div class="col-sm-6">
                    <?php echo yog_helper()->get_option( 'drink-footer-copyright' ); ?>
                </div>
                <div class="col-sm-6">
                    <?php 
                        //Get Payment Mathod
                        $yog_payments_methods = yog_helper()->get_option( 'drink-payments-method' );
                        
                        //Check & Print
                        if( isset( $yog_payments_methods ) && !empty( $yog_payments_methods ) ):
                           
                            echo '<ul class="drink-footer-links drink-social-links">';
                                
                                //Link
                                $yog_payment_link = array();
                                foreach( $yog_payments_methods['drink-payment-method-link'] as $yog_payments_method ){
                                    $yog_payment_link[] = $yog_payments_method;
                                }
                                
                                $yog_counter = 0;
                                foreach( $yog_payments_methods['drink-payment-method-logo'] as $yog_payments_logo ){
                                    
                                    if( isset( $yog_payments_logo['url'] ) && !empty( $yog_payments_logo['url'] ) ){
                                        echo '<li><a href="'. esc_url( $yog_payment_link[$yog_counter] ) .'"><img src="'. esc_url( $yog_payments_logo['url'] ) .'" alt="'. esc_attr( get_post_meta( $yog_payments_logo['id'], '_wp_attachment_image_alt', true) ) .'"></a></li>';    
                                    }
                                    
                                    //Counter Increments
                                    $yog_counter++;
                                    
                                }
                            
                            echo '</ul>';
                            
                        endif; 
                    ?>
                </div>
           </div>     
        </div>
    </div>
</footer>