<header class="header-style-1 finance-header">
 <?php if( yog_helper()->get_option( 'header-finances-top' ) ){ ?>
     <div class="top-bar animate-dropdown finance-topbar">
        <div class="container">
           <div class="header-top-inner">
              <div class="cnt-block">
                 <ul class="list-unstyled list-inline">
                    <?php 
                        //Currency
                       if ( yog_helper()->get_option( 'header-finances-currency' ) && shortcode_exists( 'woocs' ) ) {    
                           echo '<li class="dropdown dropdown-small">'. do_shortcode("[woocs width='70px' show_flags=0 ]") .'</li>';
                       }
                       
                       //Email
                       if( $yog_email = yog_helper()->get_option( 'header-finances-email' ) ){
                            echo '<li> <a href="emailto:'. $yog_email .'"><span><i class="fa fa-envelope"></i></span> '. $yog_email .'</a></li>';
                       }
                       
                       //Phone Number
                       if( $yog_phone = yog_helper()->get_option( 'header-finances-phone' ) ){
                            echo '<li> <a href="phoneto:'. $yog_phone .'"><span><i class="fa fa-phone"></i></span> '. $yog_phone .'</a></li>';
                       }
                    ?>
                 </ul>
              </div>
              <div class="cnt-account">
                 <ul class="list-unstyled">
                    <?php 
                       //User Links
                       if ( yog_helper()->get_option( 'header-finances-link' ) ) { 
                           if( !is_user_logged_in() ): 
                                echo '<li><a href="'. wp_login_url() .'"><span><i class="fa fa-sign-in"></i></span> '. esc_html__( 'Sign In', 'flipmart' ) .'</a></li>';
                           else:
                                echo '<li><a href="'. wp_logout_url() .'"><span><i class="fa fa-user"></i></span> '. esc_html__( 'Sign Out', 'flipmart' ) .'</a></li>';
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
                            
                            echo '<li class="finance-topsocial">';
                            
                                foreach( $yog_social_links['network'] as $yog_social_icon ){
                                    echo '<a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a>';
                                    $yog_counter++;
                                }
                            
                            echo '</li>';
                        
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
          <?php echo yog_get_logo( array( 'yog_link_class' => false, 'yog_container_class' => 'col-sm-3 f-logo' ) );  //Site Logo ?>
          <div class="col-xs-12 col-sm-9">
             <?php if( has_nav_menu( 'primary' ) ){  ?>    
                 <div class="header-nav animate-dropdown">
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
             <?php } ?>
          </div>
       </div>
    </div>
 </div>
</header>