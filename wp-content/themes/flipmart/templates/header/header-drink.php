<header class="header-style-1">
   <div class="top-bar animate-dropdown">
      <div class="container">
         <div class="header-top-inner">
            <div class="cnt-block">
               <ul class="list-unstyled list-inline">
                  <?php 
                        //Top Bar Menu
                        if( yog_helper()->get_option( 'header-drink-sec-menu' ) ){ 
                            
                            if( has_nav_menu( 'top-bar' ) ){
                                
                                echo '<li class="dropdown dropdown-small">';
                                
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
                        
                        //Currency
                        if ( yog_helper()->get_option( 'header-drink-currency' ) && shortcode_exists( 'woocs' ) ) {    
                           echo '<li class="dropdown dropdown-small">'. do_shortcode("[woocs width='70px' show_flags=0 ]") .'</li>';
                        }
                        
                        //Phone Number
                        if( $yog_phone = yog_helper()->get_option( 'header-drink-phone' ) ){
                            echo '<li> <p><a href="phoneto:'. $yog_phone .'">CALL US: '. $yog_phone .'</a></p> </li>';
                        }
                  ?>
               </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 animate-dropdown top-cart-row">
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
                                $yog_title[] = $yog_social_link;
                            }                                                        
                        
                            foreach( $yog_social_links['network'] as $yog_social_icon ){
                                echo '<li><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                                $yog_counter++;
                            }
                        
                        endif;
                        
                        //Cart
                        get_template_part( 'templates/header/shopping-cart', 'v4' );
                  ?>
               </ul>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
   
   <div class="header-nav animate-dropdown">
      <div class="container">
         <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
               <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
               <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'flipmart' ); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="nav-bg-class">
               <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                  <?php 
                       //Primary Menu
                       if( has_nav_menu( 'primary' ) ){
                            
                            //Menu Arguments    
                            wp_nav_menu( array(
                                'container'       => 'div',
                                'container_class' => 'nav-outer',
                                'menu_class'      => 'nav navbar-nav',
                                'menu_id'         => '',
                                'theme_location'  => 'primary',
                                'walker'          => new Primary_Walker_Nav_Menu
                            ));
                            
                       } 
                  ?>
               </div> 
            </div>
         </div>
         <div class="dirk-logo">
            <?php echo yog_get_logo( array( 'yog_container' => false, 'yog_link_class' => false ) );  //Site Logo ?>
         </div>
      </div>
   </div>
</header>