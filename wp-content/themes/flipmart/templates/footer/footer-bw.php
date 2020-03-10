<?php
    //Enqueue Js Files 
    wp_enqueue_script( 'countTo-min' ); 
    wp_enqueue_script( 'bxslider-min' ); 
    wp_enqueue_script( 'yog-bw-scripts' ); 
?>
<footer>
	<div class="top-right-separator hidden-xs"></div>
	<div class="container">
		<div class="row center">
			<div class="col-lg-12">
                <?php 
                   //Logo
                   if( $yog_logo = yog_helper()->get_option( 'bw-footer-logo' ) ): 
                        echo yog_get_logo( array( 'yog_container' => 'div', 'yog_container_class' => 'flogo', 'yog_link_class' => false, 'yog_logo' => $yog_logo ) );  //Site Logoss
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
                        
                        echo '<div class="social"><ul>';
                        
                            foreach( $yog_social_links['network'] as $yog_social_icon ){
                                echo '<li><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                                $yog_counter++;
                            }
                            
                        echo '</ul></div>';
                    
                    endif;
                ?>
				<div class="copy">
					<?php echo yog_helper()->get_option( 'bw-footer-copyright' ); ?>
				</div>
			</div>
		</div>
	</div>
</footer>