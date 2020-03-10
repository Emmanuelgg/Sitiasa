<header class="header-style-1 jewellery-header">
   <div class="container header-nav animate-dropdown">
     <div class="col-sm-4">
        <?php echo yog_get_logo( array( 'yog_container' => false, 'yog_link_class' => false ) );  //Site Logo ?>
     </div>
     <div class="col-sm-8">
        <ul class="top-info">
           <?php 
                //Currency
                if ( yog_helper()->get_option( 'header-jewellery-currency' ) && shortcode_exists( 'woocs' ) ) {    
                    echo '<li class="dropdown my-account-log">'. do_shortcode("[woocs width='70px' show_flags=0 ]") .'</li>';
                }
                
                //Email Address
                if( $yog_email = yog_helper()->get_option( 'header-jewellery-email' ) ){
                  echo '<li><a href="mailto:'. $yog_email .'"><i class="fa fa-envelope"></i> '. $yog_email .'</a></li>';
                }
                
                //Phone Number
                if( $yog_phone = yog_helper()->get_option( 'header-jewellery-phone' ) ){
                  echo '<li><a href="phoneto:'. $yog_phone .'"><i class="fa fa-phone"></i> '. $yog_phone .'</a></li>';
                } 
                
                //User Links
                if ( yog_helper()->get_option( 'header-jewellery-link' ) ) { 
                    
                     if( !is_user_logged_in() ): 
                        echo '<li class="dropdown my-account-log"><a href="'. wp_login_url() .'"><i class="fa fa-lock"></i> '. esc_html__( 'Sign In', 'flipmart' ) .'</a></li>';
                     else:
                        echo '<li class="dropdown my-account-log"><a href="'. wp_logout_url() .'"><i class="fa fa-user"></i> '. esc_html__( 'Sign Out', 'flipmart' ) .'</a></li>';
                     endif; 
                }
           ?>
        </ul>
        <div class="jewellery-top-search">
           <?php if( yog_helper()->get_option( 'header-jewellery-search' ) ){ ?>  
               <div class="col-xs-8">
                 <form method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                     <input name="s" type="text" id="product-keyword" class="search-field" placeholder="<?php echo esc_attr( yog_get_translation( 'tr-blog-search' ) ); ?>" />
                     <input type="hidden" name="post_type" value="products" />
                     <button type="submit" value=""><i class="fa fa-search"></i></button>
                  </form>
                  <span id="product-search-result"><img src="<?php echo get_template_directory_uri();?>/assets/images/ajax.gif" alt="" id="loader" style="display: none;"/></span>
               </div>
           <?php } ?>
           <div class="col-xs-3">
              <?php if( yog_helper()->get_option( 'header-jewellery-cart' ) && class_exists('Woocommerce') ){ ?>  
                  <div class="jewellery-cart">
                     <a href="<?php echo esc_url( wc_get_cart_url() );?>">   
                         <span><i class="fa fa-shopping-basket"></i>  <?php printf( '%s - %s', esc_html__( 'Cart', 'flipmart' ), WC()->cart->get_cart_total() ); ?> </span>
                         <div class="j-cart-sec">
                            <p><?php echo WC()->cart->get_cart_contents_count(); ?></p>
                         </div>
                     </a>
                  </div>
              <?php } ?>
           </div>
           <div class="col-xs-1">
              <?php if( has_nav_menu( 'primary' ) ){ ?>  
                  <div class="dropdown menu-tp">
                     <a href="javascript:void(0)" class="dropdown-toggle jewellery-drop-menu" data-toggle="dropdown">
                        <i class="fa fa-bars"></i>
                     </a>
                     <?php
                        //Menu Arguments    
                        wp_nav_menu( array(
                            'container'       => false,
                            'menu_class'      => 'dropdown-menu cos-res-menu',
                            'menu_id'         => '',
                            'theme_location'  => 'primary',
                            'walker'          => new Yog_Walker_Nav_Menu
                        ));
                     ?>
                  </div>
              <?php } ?>
           </div>
        </div>
      </div>
   </div>
</header>