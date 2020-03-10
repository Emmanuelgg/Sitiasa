<header class="header-style-1">
 <?php if( yog_helper()->get_option( 'header-seo-top' ) ){  ?>
     <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                 <div class="cnt-block">
                     <ul class="list-unstyled list-inline">
                        <?php 
                            //Phone Number
                            if( $yog_phone = yog_helper()->get_option( 'header-seo-phone' ) ){
                              echo '<li class="hotline"><a href="mailto:'. $yog_phone .'"><span><i class="fa fa-phone"></i></span> '. $yog_phone .'</a></li>';
                            } 
                           
                            //Email Address
                            if( $yog_email = yog_helper()->get_option( 'header-seo-email' ) ){
                              echo '<li class="hotline"><a href="mailto:'. $yog_email .'"><span><i class="fa fa-envelope-o"></i></span> '. $yog_email .'</a></li>';
                            }
                        ?>
                     </ul>
                  </div>
                  <div class="cnt-account">
                     <ul class="list-unstyled">
                        <?php 
                           //Links
                           if ( yog_helper()->get_option( 'header-seo-link' ) ) { 
                                if( !is_user_logged_in() ): 
                                    echo '<li><a href="'. wp_login_url() .'">'. esc_html__( 'Sign In', 'flipmart' ) .'</a></li>';
                                else:
                                    echo '<li><a href="'. wp_logout_url() .'">'. esc_html__( 'Sign Out', 'flipmart' ) .'</a></li>';
                                endif;
                           }
                             
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
                        ?>
                     </ul>
                  </div>
                  <div class="clearfix"></div>
            </div>    
        </div>
     </div>
 <?php } ?>
 <div class="main-header">
    <div class="container">
       <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
             <?php echo yog_get_logo( array( 'yog_container_class' => 'logo', 'yog_link_class' => false ) );  //Site Logo ?> 
          </div>
          <div class="col-xs-12 col-sm-12 col-md-9 top-search-holder">
             <?php if( has_nav_menu( 'primary' ) ){ ?>
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