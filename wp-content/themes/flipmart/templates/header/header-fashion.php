<header class="header-style-1 fashion-header"> 
  <?php if( yog_helper()->get_option( 'header-fashion-top' ) ){  ?>
      <div class="top-bar animate-dropdown">
        <div class="container">
          <div class="header-top-inner">
            
            <?php 
                //Top Bar Menu
                if( yog_helper()->get_option( 'header-fashion-top-sec-menu' ) ){ 
                    
                    if( has_nav_menu( 'top-bar' ) ){
                        //Menu Arguments    
                        wp_nav_menu( array(
                            'container'       => 'div',
                            'container_class' => 'cnt-account',
                            'menu_class'      => 'list-unstyled',
                            'menu_id'         => '',
                            'theme_location'  => 'top-bar',
                            'walker'          => new Yog_Walker_Nav_Menu
                        ));
                    }    
                }
                
                if ( yog_helper()->get_option( 'header-fashion-top-currency' ) && shortcode_exists( 'woocs' ) ) {    
            ?>
            
                <div class="cnt-account">
                  <ul class="list-unstyled currency-switcher list-inline">
                    <?php 
                        //Currecy
                        echo '<li>'. do_shortcode("[woocs width='70px' show_flags=0 ]") .'</li>';
                        
                    ?>   
                  </ul>
                </div>
            <?php } ?>
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
            <?php if( !yog_helper()->get_option( 'header-fashion-add-cart' ) && !yog_helper()->get_option( 'header-fashion-login' ) ) echo '<div class="col-xs-12 col-sm-12 col-md-3"></div>'; ?>
            <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder"> 
                <?php if( yog_helper()->get_option( 'header-fashion-search-area' ) ): ?> 
                    <div class="search-area">
                        <form method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <div class="control-group">
                                <?php
                                    if( yog_helper()->get_option( 'header-fashion-category-filter' ) ){
                                        if( isset( $_GET['category'] ) && !empty( $_GET['category'] ) ){
                                            // for more information see http://codex.wordpress.org/Function_Reference/wp_dropdown_categories
                        				    $swp_cat_dropdown_args = array(
                        						'show_option_all'  => __( 'Product Category', 'flipmart' ),
                                                'taxonomy'         => 'product_cat',
                        						'name'             => 'category',
                                                'selected'         => $_GET['category'],
                                                'value_field'      => 'slug'
                        					);
                                        }else{
                                            // for more information see http://codex.wordpress.org/Function_Reference/wp_dropdown_categories
                        				    $swp_cat_dropdown_args = array(
                        						'show_option_all'  => __( 'Product Category', 'flipmart' ),
                                                'taxonomy'         => 'product_cat',
                        						'name'             => 'category',
                                                'value_field'      => 'slug'
                        					);
                                        }
                        				
                        				wp_dropdown_categories( $swp_cat_dropdown_args );
                                    }
                    			?>
                                <input name="s" id="product-keyword" class="search-field" placeholder="<?php echo esc_attr( yog_get_translation( 'tr-blog-search' ) ); ?>" />
                                <button type="submit" class="search-button"></button> 
                            </div>
                        </form>
                        <span id="product-search-result"><img src="<?php echo get_template_directory_uri();?>/assets/images/ajax.gif" alt="" id="loader" style="display: none;"/></span>
                    </div>
                <?php endif; ?>
             </div>   
             <?php if( yog_helper()->get_option( 'header-fashion-add-cart' ) || yog_helper()->get_option( 'header-fashion-login' ) ): ?> 
                 <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row"> 
                
                    <?php
                        //Cart  
                        if( yog_helper()->get_option( 'header-fashion-add-cart' ) ):
                            get_template_part( 'templates/header/shopping-cart', 'v2' );
                        endif;
                        
                        //Header Button
                        if( yog_helper()->get_option( 'header-fashion-login' ) ):
                     ?>
                        <div class="user-login">
                            <?php if (is_user_logged_in()): ?>
                                <a href="<?php echo esc_url( wp_logout_url( home_url( '/' ) ) ); ?>"><i class="fa fa-user" aria-hidden="true"></i> <?php echo esc_html__( 'Logout', 'flipmart' ); ?></a>
                            <?php else: ?>
                                <a href="<?php echo esc_url(  wp_login_url( home_url( '/' ) ) ); ?>"><i class="fa fa-user" aria-hidden="true"></i> <?php echo esc_html__( 'Login', 'flipmart' ); ?></a>
                            <?php endif; ?>
                        </div>  
                    <?php endif; ?>        
                </div>
             <?php endif; ?>    
         </div>
      </div>
  </div>
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
                <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'flipmart' ); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
            </button>
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
                  
                  //Phone Number
                  if( $yog_phone = yog_helper()->get_option( 'header-fashion-phone' ) ):  
              ?>
                <div class="phone-section">
                    <?php printf( '<a href="tel:%s" class="white"><i class="fa fa-phone" aria-hidden="true"></i><span>%s : %s</span></a>', $yog_phone, esc_html__( 'Call us', 'flipmart' ), $yog_phone  ); ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div> 
</header>