<!---------- Header Start ---------->
<header class="header flower_section">

   <?php if( yog_helper()->get_option( 'header-top' ) ){  ?> 
       <div class="top-header py-2 border-bottom">
          <div class="container">
             <div class="row justify-content-between align-items-center">
                <?php if( yog_helper()->get_option( 'header-search-area' ) ){ ?> 
                    <div class="col-12 col-md-3 py-2 py-md-0 d-flex align-items-center justify-content-md-start justify-content-center left-area">
                       <a href="#search" class="search_btn">
                          <i class="fa fa-search"></i>
                       </a>
                    </div>
                <?php } ?>
                <div class="col-12 col-md-6 py-2 py-md-0 d-flex justify-content-center mid-area">
                   <?php echo yog_get_logo();  //Site Logo ?>
                </div>
                <div class="col-12 col-md-3  py-2 py-md-0 d-flex justify-content-md-end justify-content-center right-area">
                   <?php
                       // Mini Cart  
                       get_template_part( 'templates/header/shopping-cart', 'v8' );
                       
                       //Currency Switcher
                       if ( yog_helper()->get_option( 'header-top-currency' ) && shortcode_exists( 'woocs' ) ) { 
                            echo do_shortcode("[woocs width='70px' show_flags=0 ]");
                       } 
                       
                       //Top Bar Menu
                       if( yog_helper()->get_option( 'header-top-sec-menu' ) ){ 
                            
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
                    ?>
                </div>
             </div>
          </div>
       </div>
   <?php } ?>
   
   <?php if( has_nav_menu( 'primary' ) ){ ?>
       <div class="main-header py-0">
          <div class="header-nav flower_section  animate-dropdown">
             <div class="container">
                <div class="yamm navbar navbar-default" role="navigation">
                   <div class="navbar-header">
                      <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
                      <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'flipmart' ); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                   </div>
                   <div class="nav-bg-class">
                      <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                         <?php
                            //Menu Arguments    
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
</header>
<?php if( yog_helper()->get_option( 'header-top' ) ){  ?> 
    <div id="search">
       <span class="close">X</span>
       <form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
          <input value="" name="s" type="search" placeholder="<?php echo esc_attr( yog_get_translation( 'tr-blog-search' ) ); ?>"/>
       </form>
    </div>
<?php } ?>
<div class="clearfix"></div>