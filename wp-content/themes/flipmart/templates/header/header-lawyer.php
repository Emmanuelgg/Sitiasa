<header class="header-style-1">
 <?php if( yog_helper()->get_option( 'header-lawyer-top' ) ){  ?>
     <div class="top-bar animate-dropdown">
        <div class="container">
          <div class="cnt-account">
             <ul class="list-unstyled">
                <?php
                    //Links
                    if ( yog_helper()->get_option( 'header-lawyer-link' ) ) { 
                        if( !is_user_logged_in() ): 
                            echo '<li><a href="'. wp_login_url() .'"><i class="fa fa-lock"></i> '. esc_html__( 'Sign In', 'flipmart' ) .'</a></li>';
                        else:
                            echo '<li><a href="'. wp_logout_url() .'"><i class="fa fa-user"></i> '. esc_html__( 'Sign Out', 'flipmart' ) .'</a></li>';
                        endif;
                    }
                    
                    //Currecy
                    if ( yog_helper()->get_option( 'header-lawyer-currency' ) && shortcode_exists( 'woocs' ) ) { 
                        echo '<li class="dropdown dropdown-small">'. do_shortcode("[woocs width='70px' show_flags=0 ]") .'</li>';
                    } 
                ?>
             </ul>
          </div>
          <?php if( $yog_tag = yog_helper()->get_option( 'header-lawyer-tag' ) ){ ?>
              <div class="cnt-block">
                 <ul class="list-unstyled">
                    <li class="open-time"><?php echo $yog_tag; ?></li>
                 </ul>
              </div>
          <?php } ?>
       </div>
     </div>
 <?php } ?>
 <div class="main-header lawyer">
    <div class="container">
       <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 logo-holder">
             <?php echo yog_get_logo( array( 'yog_container_class' => 'col-sm-4 logo', 'yog_link_class' => false ) );  //Site Logo ?>
             <div class=" col-sm-8 contact-details">
                <?php if( $yog_email = yog_helper()->get_option( 'header-lawyer-email' ) ){ ?>
                    <div class="mail">
                       <ul>
                          <li>
                              <div class="icon"><i class="fa fa-envelope"></i></div>
                              <div class="icon-des">
                                 <h5><?php esc_html_e( 'MAIL US TODAY', 'flipmart' ); ?></h5>
                                 <p><?php echo $yog_email; ?></p>
                              </div>
                          </li> 
                       </ul>
                    </div>
                <?php } ?>
                <?php if( $yog_phone = yog_helper()->get_option( 'header-lawyer-phone' ) ){ ?>
                    <div class="call-us">
                       <ul>
                           <li>
                              <div class="icon"><i class="fa fa-phone"></i></div>
                              <div class="icon-des">
                                 <h5><?php esc_html_e( 'Call Us', 'flipmart' ); ?></h5>
                                 <p><?php echo $yog_phone; ?></p>
                              </div>
                           </li>
                       </ul>
                    </div>
                <?php } ?>
             </div>
          </div>
          <div class="header-nav animate-dropdown">
             <div class="container">
               <?php if( has_nav_menu( 'primary' ) ){ ?>   
                   <div class="yamm navbar navbar-default" role="navigation">
                      <div class="navbar-header">
                         <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
                         <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'flipmart' ); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                      </div>
                      <div class="nav-bg-class">
                         <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                            <div class="nav-outer">
                                <?php 
                                    //Menu Arguments 
                                    wp_nav_menu( array(
                                        'container'       => false,
                                        'menu_class'      => 'nav navbar-nav',
                                        'menu_id'         => '',
                                        'theme_location'  => 'primary',
                                        'walker'          => new Yog_Walker_Nav_Menu
                                    ));
                                    
                                    //Tag
                                    if( $yog_cons = yog_helper()->get_option( 'header-lawyer-cons' ) ):
                                        echo '<div class="free-consu"><h1>'. $yog_cons .'</h1></div>';
                                    endif;
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
 </div>
</header>