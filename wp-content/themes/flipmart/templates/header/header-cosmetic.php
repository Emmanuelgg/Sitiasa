<header class="header-style-1" id="top-banner-and-menu">
  <div class="header-nav animate-dropdown">
    <div class="container cosmetic-top-header">
       <div class="col-sm-4 cosmetic-contact">
          <ul class="top-info">
            <?php
                //Top Bar Menu
                if( yog_helper()->get_option( 'header-cosmetic-sec-menu' ) ){ 
                    
                    if( has_nav_menu( 'top-bar' ) ){
                        
                        echo '<li class="dropdown my-account-log">';
                        
                        //Menu Arguments    
                        wp_nav_menu( array(
                            'container'       => false,
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'theme_location'  => 'top-bar',
                            'walker'          => new Primary_Walker_Nav_Menu
                        ));
                        
                        echo '</li>';
                    }    
                }
          
                //Phone Number
                if( $yog_phone = yog_helper()->get_option( 'header-cosmetic-phone' ) ){
                    echo '<li> <a href="phoneto:'. $yog_phone .'">Phone: '. $yog_phone .'</a> </li>';
                }
             ?>
          </ul>
       </div>
       <div class="col-sm-4 cosmetic-logo">
          <?php echo yog_get_logo( array( 'yog_container' => false, 'yog_link_class' => false ) );  //Site Logo ?>
       </div>
       <div class="col-sm-4 cosmetic-content">
          <ul> 
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
                        $yog_title[] = $yog_social_title;
                    }                                                        
                
                    foreach( $yog_social_links['network'] as $yog_social_icon ){
                        echo '<li class="social-icons"><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                        $yog_counter++;
                    }
                    
                endif; 
                
                //Cart
                get_template_part( 'templates/header/shopping-cart', 'v3' );
                
                //Primary Menu
                if( has_nav_menu( 'primary' ) ){
                    
                    echo '<li class="dropdown menu-tp"><a href="javascript:void(0)" class="dropdown-toggle cosmetic-drop-menu" data-toggle="dropdown"><i class="fa fa-bars"></i> Menu</a>';
                    //Menu Arguments    
                    wp_nav_menu( array(
                        'container'       => false,
                        'menu_class'      => 'dropdown-menu cos-res-menu',
                        'menu_id'         => '',
                        'theme_location'  => 'primary',
                        'walker'          => new Primary_Walker_Nav_Menu
                    ));
                    
                    echo '</li>';
                }
          ?> 
          </ul>
       </div>
    </div>
  </div>
</header>