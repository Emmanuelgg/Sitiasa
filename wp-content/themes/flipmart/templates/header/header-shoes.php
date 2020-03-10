<header class="header-style-2">
    <?php if( yog_helper()->get_option( 'header-shoes-top' ) ){  ?>
        <div class="top-bar animate-dropdown">
           <div class="container">
              <div class="header-top-inner">
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
                        
                        echo '<div class="cnt-account"><ul class="list-unstyled">';
                        
                            foreach( $yog_social_links['network'] as $yog_social_icon ){
                                echo '<li><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                                $yog_counter++;
                            }
                        
                        echo '</ul></div>';
                    
                     endif;
                 ?>
                 <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                       <?php 
                            //Phone Number
                            if( $yog_phone = yog_helper()->get_option( 'header-shoes-phone' ) ){
                              echo '<li class="phone"><a href="mailto:'. $yog_phone .'"><i class="fa fa-phone"></i> '. $yog_phone .'</a></li>';
                            } 
                           
                            //Email Address
                            if( $yog_email = yog_helper()->get_option( 'header-shoes-email' ) ){
                              echo '<li class="email"><a href="mailto:'. $yog_email .'"><i class="fa fa-envelope-o"></i> '. $yog_email .'</a></li>';
                            }
                       ?>
                    </ul>
                 </div>
                 <div class="clearfix"></div>
              </div>
           </div>
        </div>
    <?php } ?>
    <div class="yamm sticky-wrapper">
       <div class="sticky-header main-bar-wraper">
          <div class="main-bar">
             <div class="container">
                <?php echo yog_get_logo( array( 'yog_container_class' => 'logo-header mostion header-skew', 'yog_link_class' => false ) );  //Site Logo ?> 
                <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                    <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'flipmart' ); ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php 
                    //Cart
                    if( yog_helper()->get_option( 'header-shoes-cart' ) && class_exists('Woocommerce') ): 
                        printf( '<div class="shop-cart-img"><a href="%s"><img src="'. get_template_directory_uri() .'/assets/images/shoes-bag.png"><span>%s</span></a></div>', esc_url( wc_get_cart_url() ), WC()->cart->get_cart_contents_count()  );
                    endif;
                    
                    //Primary Menu
                    wp_nav_menu( array(
                        'container'       => 'div',
                        'container_class' => 'header-nav navbar-collapse collapse',
                        'menu_class'      => 'nav navbar-nav',
                        'menu_id'         => '',
                        'theme_location'  => 'primary',
                        'walker'          => new Yog_Walker_Nav_Menu
                    )); 
                ?>
             </div>
          </div>
       </div>
    </div>
</header>