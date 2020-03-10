<header class="header-style-2 gym-header">
  <div class="container gym-main-top-header">
     <div class="row">
        <div class="col-sm-4 logo-holder">
            <?php echo yog_get_logo( array( 'yog_container_class' => 'logo', 'yog_link_class' => false ) );  //Site Logo ?>
        </div>
        <div class="col-sm-8 logo-holder">
           <?php if( yog_helper()->get_option( 'header-gym-top' ) ):  ?> 
               <div class="top-bar animate-dropdown topheader">
                  <div class="header-top-inner">
                     <div class="cnt-account">
                        <ul class="list-unstyled">
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
                                    
                                    foreach( $yog_social_links['network'] as $yog_social_icon ){
                                        echo '<li><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                                        $yog_counter++;
                                    }
                                
                                endif;
                                
                                //Cart
                                if( yog_helper()->get_option( 'header-gym-add-cart' ) && class_exists('Woocommerce') ):
                                    echo '<li class="shopping-basket"><a href="'. esc_url( wc_get_cart_url() ) .'"><i class="fa fa-shopping-basket"></i></a></li>';
                                endif; 
                           ?>
                        </ul>
                     </div>
                     <?php 
                        //Phone Number
                        if ( $yog_phone = yog_helper()->get_option( 'header-gym-phone' ) ):     
                            printf( '<div class="cnt-block"><ul class="list-unstyled list-inline"><li class="phone"><a href="%s">%s - <span>%s</span></a></li></ul></div><div class="clearfix"></div>', $yog_phone, esc_html__( 'CALL US NOW', 'flipmart' ), $yog_phone );
                        endif;
                     ?>
                  </div> 
               </div>
           <?php endif; ?>
           <?php if( has_nav_menu( 'primary' ) ): ?>
               <div class="header-nav animate-dropdown gym-navigation-bar">
                  <div class="yamm navbar navbar-default" role="navigation">
                     <div class="navbar-header">
                        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
                        <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'flipmart' ); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                     </div>
                     <div class="nav-bg-class">
                        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                           <?php 
                                //Primary Menu
                                wp_nav_menu( array(
                                    'container'       => 'div',
                                    'container_class' => 'nav-outer',
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
           <?php endif; ?>
        </div>
     </div>
  </div>
</header>