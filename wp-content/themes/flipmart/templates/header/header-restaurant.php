<header class="header-style-1 rasturant-header">
   <div class="header-nav animate-dropdown">
      <div class="container header-top-header">
         <div class="col-sm-4 quick-links">
            <?php 
                //Links
                if ( yog_helper()->get_option( 'header-restaurant-link' ) ) { 
                    if( !is_user_logged_in() ): 
                        echo '<a href="'. wp_login_url() .'"><img src="'. get_template_directory_uri() .'/assets/images/restaurant-icon.png"> <span>'. esc_html__( 'Sign In', 'flipmart' ) .'</span></a>';
                    else:
                        echo '<a href="'. wp_logout_url() .'"><img src="'. get_template_directory_uri() .'/assets/images/restaurant-icon.png"> <span>'. esc_html__( 'Sign Out', 'flipmart' ) .'</span></a>';
                    endif;
                }
                    
            ?>
         </div>
         <div class="col-sm-4">
            <?php echo yog_get_logo( array( 'yog_container_class' => 'header-logo', 'yog_link_class' => false ) );  //Site Logo ?>
         </div>
         <div class="col-sm-4 social-media">
            <div class="col-xs-10">
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
                        
                        echo '<ul>';
                        
                            foreach( $yog_social_links['network'] as $yog_social_icon ){
                                echo '<li><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                                $yog_counter++;
                            }
                            
                        echo '</ul>';
                    
                    endif; 
               ?> 
            </div>
            <?php get_template_part( 'templates/header/shopping-cart', 'v7' ); ?> 
         </div>
         <div class="restaurant-header-nav">
            <div class="col-sm-12">
               <?php if( has_nav_menu( 'primary' ) ){  ?>    
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
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</header>