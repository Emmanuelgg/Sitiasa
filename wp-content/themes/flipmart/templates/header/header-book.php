<header class="header-style-1 book-header">
   <?php if( yog_helper()->get_option( 'header-book-top' ) ){  ?>
       <div class="top-bar animate-dropdown">
          <div class="container">
             <div class="header-top-inner">
                <div class="cnt-block">
                   <ul class="list-unstyled list-inline">
                      <?php 
                          //Phone Number
                          if( $yog_phone = yog_helper()->get_option( 'header-book-phone' ) ){
                            echo '<li><a href="telto:'. $yog_phone .'"><span><i class="fa fa-phone"></i></span> '. $yog_phone .'</a></li>';
                          }
                          
                          //Email
                          if( $yog_email = yog_helper()->get_option( 'header-book-email' ) ){
                            echo '<li><a href="mailto:'. $yog_email .'"><span><i class="fa fa-envelope-o"></i></span> '. $yog_email .'</a></li>';
                          }
                      ?>
                   </ul>
                </div>
                <div class="cnt-account">
                   <ul class="list-unstyled">
                      <?php 
                         //Cart
                         if( yog_helper()->get_option( 'header-book-add-cart' ) && class_exists('Woocommerce') ){
                            printf( '<li><a href="%s"><span><i class="fa fa-shopping-basket"></i></span> %s <span>%s</span></a></li>',esc_url( wc_get_cart_url() ), esc_html__( 'Your Cart', 'flipmart' ), WC()->cart->get_cart_subtotal() );
                         }
                        
                      ?>  
                      <?php if (is_user_logged_in()): ?>
                        <li class="active"><a href="<?php echo esc_url( wp_logout_url( home_url( '/' ) ) ); ?>"><span><i class="fa fa-user"></i></span> <?php echo esc_html__( 'Logout', 'flipmart' ); ?></a></li>
                      <?php else: ?>
                        <li class="active"><a href="<?php echo esc_url(  wp_login_url( home_url( '/' ) ) ); ?>"><span><i class="fa fa-lock"></i></span> <?php echo esc_html__( 'Login', 'flipmart' ); ?></a></li>
                      <?php endif; ?>
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
            <div class="col-xs-12 col-sm-12">
               <?php echo yog_get_logo( array( 'yog_container_class' => 'book-responsive-logo', 'yog_link_class' => false ) );  //Site Logo ?>   
               <div class="header-nav animate-dropdown">
                  <div class="yamm navbar navbar-default" role="navigation">
                     <div class="navbar-header">
                        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
                        <span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'flipmart' ); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
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
                                        'walker'          => new Yog_Walker_Nav_Menu
                                     ));
                                } 
                            ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> 
      </div>
   </div>
</header>