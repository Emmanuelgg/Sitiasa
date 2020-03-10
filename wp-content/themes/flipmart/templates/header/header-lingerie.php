<header class="header-style-1">
 <?php if( yog_helper()->get_option( 'header-lingerie-top' ) ){  ?>
     <div class="top-bar animate-dropdown">
        <div class="container">
          <div class="cnt-block">
             <ul class="list-unstyled list-inline">
                <?php 
                   //Phone Number
                   if( $yog_phone = yog_helper()->get_option( 'header-lingerie-phone' ) ){
                      echo '<li class="hotline"><span><i class="fa fa-phone"></i></span><a href="mailto:'. $yog_phone .'">'. $yog_phone .'</a></li>';
                   } 
                   
                   //Email Address
                   if( $yog_email = yog_helper()->get_option( 'header-lingerie-email' ) ){
                      echo '<li class="hotline"><span><i class="fa fa-envelope-o"></i></span><a href="mailto:'. $yog_email .'">'. $yog_email .'</a></li>';
                   }
                ?>
             </ul>
          </div>
          <?php 
               //Top Menu
               if( has_nav_menu( 'top-bar' ) ){ 
                
                //Primary Menu
                wp_nav_menu( array(
                    'container'       => 'div',
                    'container_class' => 'cnt-account',
                    'menu_class'      => 'list-unstyled',
                    'menu_id'         => '',
                    'theme_location'  => 'top-bar',
                    'walker'          => new Yog_Walker_Nav_Menu
                ));
                
               }
          ?> 
       </div>
     </div>
 <?php } ?>
 <div class="header-nav animate-dropdown">
    <div class="container">
       <?php echo yog_get_logo( array( 'yog_link_class' => false, 'yog_container_class' => 'logo lingerie-logo' ) );  //Site Logo ?> 
       <div class="lingerie-header-nav">
            <div class="col-sm-8">
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
          <div class="col-sm-4">
             <?php if( yog_helper()->get_option( 'header-lingerie-search' ) ): ?>    
                 <div class="lingerie-nav-search">
                    <form method="get" action="<?php echo home_url( '/' ); ?>">
                       <input name="s" type="text" id="product-keyword" placeholder="<?php echo esc_attr( yog_get_translation( 'tr-blog-search' ) ); ?>" />
                       <input type="hidden" name="post_type" value="products" />
                       <button type="submit" value=""><i class="fa fa-search"></i></button>
                    </form>
                    <span id="product-search-result"><img src="<?php echo get_template_directory_uri();?>/assets/images/ajax.gif" alt="" id="loader" style="display: none;"/></span>
                 </div>
             <?php 
                 endif; 
                   
                 //Cart
                 if( yog_helper()->get_option( 'header-lingerie-cart' ) && class_exists('Woocommerce') ): 
                      printf( '<div class="lingerie-nav-cart"><a href="%s"><i class="fa fa-shopping-cart"></i><span>%s %s</span></a></div>', esc_url( wc_get_cart_url() ), esc_html__( 'Cart', 'flipmart' ), WC()->cart->get_cart_contents_count()  );
                 endif; 
              ?>
          </div>
       </div>
    </div>
 </div>
</header>