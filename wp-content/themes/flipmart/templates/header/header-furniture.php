<header class="header-style-1">
     <div class="furniture-header">
        <div class="container">
           <?php echo yog_get_logo( array( 'yog_container_class' => 'col-sm-6 furniture-logo', 'yog_link_class' => false  ) );  //Site Logo ?>
           <div class="col-sm-6 furniture-contact">
              <ul>
                 <?php if( $yog_phone = yog_helper()->get_option( 'header-furniture-phone' ) ): ?>
                     <li>
                        <div class="furniture-top-left">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/headphone.jpg" alt="headphone" />
                        </div>
                        <div class="furniture-top-right">
                           <p><?php echo yog_helper()->get_option( 'header-furniture-phone-title', 'raw', 'Free consultance' ); ?></p>
                           <h2><?php echo $yog_phone; ?></h2>
                        </div>
                     </li>
                 <?php endif; ?>
                 <?php if( yog_helper()->get_option( 'header-furniture-add-cart' ) && class_exists('Woocommerce') ):  ?>
                     <li>
                        <div class="furniture-top-left">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cart.jpg" alt="cart" />
                        </div>
                        <div class="furniture-top-right">
                            <?php printf( '<h2><span>%s %s -</span> %s</h2>', WC()->cart->get_cart_contents_count(), esc_html__( 'Items', 'flipmart' ), WC()->cart->get_cart_total() ); ?>
                        </div>
                     </li>
                 <?php endif; ?>
              </ul>
           </div>
        </div>
     </div>
     
     <div class="main-header">
        <div class="container">
           <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-8 furniture-menu yamm">
                 <?php if( has_nav_menu( 'primary' ) ){ ?>
                     <nav class="navbar navbar-inverse" role="navigation">
                        <div class="navbar-header">
                           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                           <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'flipmart' ); ?></span>                                                                  
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           </button>
                        </div>
                        <?php
                            //Menu Arguments    
                            wp_nav_menu( array(
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id'    => 'bs-example-navbar-collapse-1',
                                'menu_class'      => 'nav navbar-nav',
                                'menu_id'         => '',
                                'theme_location'  => 'primary',
                                'walker'          => new Yog_Walker_Nav_Menu
                            ));
                        ?>
                     </nav>
                 <?php } ?>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4">
                 <?php if( yog_helper()->get_option( 'header-furniture-search-area' ) ){ ?> 
                     <div class="furniture-search">
                        <form method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                           <input type="text" name="s" id="product-keyword"  placeholder="<?php echo esc_attr( yog_get_translation( 'tr-blog-search' ) ); ?>" />
                           <div class="furniture-search-btn">
                              <button type="submit"><i class="fa fa-search"></i></button>
                           </div>
                        </form>
                        <span id="product-search-result"><img src="<?php echo get_template_directory_uri();?>/assets/images/ajax.gif" alt="" id="loader" style="display: none;"/></span>
                     </div>
                 <?php } ?>
              </div>
           </div>
        </div>
     </div>
  </header>