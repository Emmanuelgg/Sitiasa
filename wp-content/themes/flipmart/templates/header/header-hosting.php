<header class="header-style-2">
    <?php if( yog_helper()->get_option( 'header-hosting-top' ) ){  ?>
        <div class="top-bar animate-dropdown topheader">
           <div class="container">
              <div class="header-top-inner">
                 <div class="cnt-account">
                    <ul class="list-unstyled">
                       <?php 
                           //User Links
                           if ( yog_helper()->get_option( 'header-hosting-link' ) ) { 
                               if( !is_user_logged_in() ): 
                                    echo '<li><a href="'. wp_login_url() .'">'. esc_html__( 'Sign In', 'flipmart' ) .'</a></li>';
                               else:
                                    echo '<li><a href="'. wp_logout_url() .'">'. esc_html__( 'Sign Out', 'flipmart' ) .'</a></li>';
                               endif;
                           } 
                       ?> 
                    </ul>
                 </div>
                 <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                       <?php 
                           //Phone Number
                           if( $yog_phone = yog_helper()->get_option( 'header-hosting-phone' ) ){
                              echo '<li class="phone"><a href="mailto:'. $yog_phone .'"><i class="fa fa-phone"></i> '. $yog_phone .'</a></li>';
                           } 
                           
                           //Email Address
                           if( $yog_email = yog_helper()->get_option( 'header-hosting-email' ) ){
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
    <div class="main-header">
       <div class="container">
          <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                <?php echo yog_get_logo( array( 'yog_link_class' => false, 'yog_container_class' => 'logo' ) );  //Site Logo ?>
             </div>
             <?php if( has_nav_menu( 'primary' ) ){  ?> 
                 <div class="header-nav animate-dropdown">
                    <div class="container">
                       <div class="row">
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
                    </div>
                 </div> 
             <?php } ?>
          </div>
       </div>
    </div>
 </header>