<header class="header-style-1 glasses-header">
 <?php if( yog_helper()->get_option( 'header-glasses-top' ) ):  ?>
     <div class="top-bar animate-dropdown">
        <div class="container">
           <div class="header-top-inner">
              <div class="cnt-block">
                 <ul class="list-unstyled list-inline">
                    <?php 
                        //Currency
                        if ( yog_helper()->get_option( 'header-glasses-top-currency' ) && shortcode_exists( 'woocs' ) ):     
                            echo '<li class="dropdown dropdown-small">'. do_shortcode("[woocs width='70px' show_flags=0 ]") .'</li>';
                        endif;
                        
                        //Phone Number
                        if ( $yog_phone = yog_helper()->get_option( 'header-glasses-phone' ) ):     
                            printf( '<li><span>%s</span>%s</li>', esc_html__( 'CALL US', 'flipmart' ), $yog_phone );
                        endif;
                    ?>
                 </ul>
              </div>
              <div class="cnt-account">
                 <ul class="list-unstyled">
                    <?php
                        if( yog_helper()->get_option( 'header-glasses-link' ) ):
                            if( !is_user_logged_in() ): 
                                printf( '<li><a href="%s">%s</a></li>', wp_login_url(), esc_html__( 'Sign In or Create an account', 'flipmart' ) );
                           else:
                                printf( '<li><a href="%s">%s</a></li>', wp_logout_url(), esc_html__( 'Sign Out or Log Out', 'flipmart' ) );
                           endif;
                            
                        endif;
                         
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
                        if( yog_helper()->get_option( 'header-glasses-add-cart' ) && class_exists('Woocommerce') ):
                            echo '<li><a href="'. esc_url( wc_get_cart_url() ) .'"><i class="fa fa-shopping-bag"></i></a></li>';
                        endif;
                    ?>
                 </ul>
              </div>
              <div class="clearfix"></div>
           </div>
        </div>
     </div>
 <?php endif; ?>
<div class="header-nav animate-dropdown glasses-navbar">
  <div class="container">
     <?php echo yog_get_logo( array( 'yog_container_class' => 'logo glasses-logo', 'yog_link_class' => false  ) );  //Site Logo ?>   
     <div class="glasses-header-nav">
        <div class="col-sm-8 glasses-header-nav-left">
           <?php if( has_nav_menu( 'primary' ) ): ?>  
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
           <?php endif; ?>
        </div>
        <div class="col-sm-4 glasses-header-nav-right">
           <?php if( yog_helper()->get_option( 'header-glasses-search-area' ) ): ?>  
               <div class="glasses-nav-search">
                  <form method="get" action="<?php echo home_url( '/' ); ?>">
                     <input name="s" type="text" id="product-keyword" placeholder="<?php echo esc_attr( yog_get_translation( 'tr-blog-search' ) ); ?>" />
                     <input type="hidden" name="post_type" value="products" />
                     <button type="submit" value=""><i class="fa fa-search"></i></button>
                  </form>
                  <span id="product-search-result"><img src="<?php echo get_template_directory_uri();?>/assets/images/ajax.gif" alt="" id="loader" style="display: none;"/></span>
               </div>
           <?php endif; ?>
        </div>
     </div>
  </div> 
</div>
</header>