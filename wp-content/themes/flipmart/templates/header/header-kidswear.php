<header class="header-style-1">
 <?php if( yog_helper()->get_option( 'header-kidswear-top' ) ){  ?>
     <div class="top-bar animate-dropdown">
        <div class="container">
           <div class="header-top-inner">
              <div class="cnt-block">
                 <ul class="list-unstyled list-inline">
                    <?php
                        //Links
                        if ( yog_helper()->get_option( 'header-kidswear-link' ) ) { 
                            if( !is_user_logged_in() ): 
                                echo '<li><a href="'. wp_login_url() .'"><i class="fa fa-lock"></i> '. esc_html__( 'Sign In', 'flipmart' ) .'</a></li>';
                            else:
                                echo '<li><a href="'. wp_logout_url() .'"><i class="fa fa-user"></i> '. esc_html__( 'Sign Out', 'flipmart' ) .'</a></li>';
                            endif;
                        }
                        
                        //Currecy
                        if ( yog_helper()->get_option( 'header-kidswear-currency' ) && shortcode_exists( 'woocs' ) ) { 
                            echo '<li class="dropdown dropdown-small">'. do_shortcode("[woocs width='70px' show_flags=0 ]") .'</li>';
                        } 
                    ?>
                 </ul>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-9 logo-holder">
                 <?php echo yog_get_logo( array( 'yog_container_class' => 'logo', 'yog_link_class' => false ) );  //Site Logo ?>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-1 animate-dropdown top-cart-row">
                 <?php get_template_part( 'templates/header/shopping-cart', 'v6' ); ?>
              </div>
              <div class="clearfix"></div>
           </div>
        </div>
     </div>
 <?php } ?>
 <div class="header-nav animate-dropdown">
    <div class="container">
       <div class="yamm navbar navbar-default kidswear-nav" role="navigation">
          <div class="navbar-header">
             <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
             <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'flipmart' ); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="nav-bg-class">
             <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                <?php if( has_nav_menu( 'top-bar' ) ): ?>
                    <div class="cnt-block">
                       <ul class="list-unstyled list-inline">
                          <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">Shop by Collections </span><b class="caret"></b></a>
                             <?php
                                //Menu Arguments    
                                wp_nav_menu( array(
                                    'container'       => false,
                                    'menu_class'      => 'dropdown-menu',
                                    'menu_id'         => '',
                                    'theme_location'  => 'top-bar',
                                    'walker'          => new Yog_Top_Walker_Nav_Menu
                                ));
                             ?>
                          </li>
                       </ul>
                    </div>
                <?php 
                    endif;
                    
                    //Primary Menu
                    if( has_nav_menu( 'primary' ) ):
                        
                        //Menu Arguments 
                        wp_nav_menu( array(
                            'container'       => 'div',
                            'container_class' => 'nav-outer',
                            'menu_class'      => 'nav navbar-nav',
                            'menu_id'         => '',
                            'theme_location'  => 'primary',
                            'walker'          => new Yog_Walker_Nav_Menu
                        ));
                        
                    endif; 
                    
                    //Search Form
                    if( yog_helper()->get_option( 'header-kidswear-search' ) ){
                ?>
                <div class="kidswear-serach-form">
                   <form method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                      <div class="kidswear-serach">
                         <input name="s" id="product-keyword" class="search-field" placeholder="<?php echo esc_attr( yog_get_translation( 'tr-blog-search' ) ); ?>" />
                         <input type="hidden" name="post_type" value="products" />
                         <button type="submit" value=""><i class="fa fa-search"></i></button>
                      </div>
                   </form>
                   <span id="product-search-result"><img src="<?php echo get_template_directory_uri();?>/assets/images/ajax.gif" alt="" id="loader" style="display: none;"/></span>
                </div>
                <?php } ?>
             </div> 
          </div>
       </div>
    </div>
 </div>
</header>