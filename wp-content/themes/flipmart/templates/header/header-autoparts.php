<header id="header" class="header autoparts">

    <?php if( yog_helper()->get_option( 'header-top' ) ){  ?>
        <div class="top-header bg-dark py-15">
            <div class="container">
                <div class="row">
    
                    <div class="col-sm-6">
                        <?php 
                            //Top Bar Menu
                            if( yog_helper()->get_option( 'header-top-sec-menu' ) ){ 
                                
                                if( has_nav_menu( 'top-bar' ) ){
                                    //Menu Arguments    
                                    wp_nav_menu( array(
                                        'container'       => 'div',
                                        'container_class' => 'top-navbar-left',
                                        'menu_class'      => 'list-inline ml-0 mb-0',
                                        'menu_id'         => '',
                                        'theme_location'  => 'top-bar',
                                        'walker'          => new Yog_Walker_Nav_Menu
                                    ));
                                }    
                            }
                        ?>
                    </div>
    
                    <div class="col-sm-6">
                        <div class="top-navbar-right text-right">
                            <ul class="list-inline ml-0 mb-0">
                                <?php if ( yog_helper()->get_option( 'header-top-currency' ) && shortcode_exists( 'woocs' ) ) {  ?>
                                    <li class="list-inline-item">
                                        <div class="currency-block">
                                            <label for="" class="mb-0"><?php _e( 'CURRENCY', 'flipmart' ); ?></label>
                                            <?php 
                                                //Currecy
                                                echo do_shortcode("[woocs width='70px' show_flags=0 ]");
                                                
                                            ?> 
                                        </div>
                                    </li>
                                <?php 
                                    } 
                                    
                                    //User Login
                                    if( is_user_logged_in() ):
                                        echo '<li class="list-inline-item"><a href="'. wp_logout_url( get_permalink() ) .'"><i class="fa fa-lock"></i> '. esc_html__( 'Logout', 'flipmart' ) .'</a></li>';
                                    else:
                                        echo '<li class="list-inline-item"><a href="'. site_url('/wp-login.php?action=register&redirect_to=' . get_permalink()) .'"><i class="fa fa-user"></i> '. esc_html__( 'Sign | Register', 'flipmart' ) .'</a></li>';
                                    endif;
                                ?>
                            </ul>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="main-header py-30">
        <div class="container">
            <div class="row">

                <div class="col-sm-3">
                    <?php echo yog_get_logo();  //Site Logo ?>
                </div>

                <div class="col-sm-5 col-md-6">
                    <?php if( yog_helper()->get_option( 'header-search-area' ) ){ ?> 
                        <form method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <div class="input-group">
                                <input type="search" name="s" class="form-control" placeholder="<?php echo esc_attr( yog_get_translation( 'tr-blog-search' ) ); ?>" />
                                <div class="input-group-addon"><button type="submit" class="btn search_btn"><i class="fa fa-search"></i></button></div>
                            </div>
                        </form>
                    <?php } ?>
                </div>

                <div class="col-sm-4 col-md-3">
                    <?php if( yog_helper()->get_option( 'header-add-cart' ) && class_exists('Woocommerce') ): ?>
                    <ul class="cart-nav text-right list-inline ml-0 mb-0">
                        <li class="list-inline-item button-dropdown cart-dropdown">
                            <a href="<?php echo esc_url( wc_get_cart_url() );?>" class="dropdown-toggle">
                                <i class="fa fa-shopping-cart"></i><span class="count bg-primary"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                <?php printf ( '<p class="mb-0">%s <span class="c-price">%s</soan></p>',esc_html__( 'Shopping Cart', 'flipmart' ), WC()->cart->get_cart_total() ); ?>
                            </a>
                        </li>
                    </ul>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>

    <div class="header-menu bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                  <div class="header-nav animate-dropdown" id="navbar">
                      <div class="yamm navbar navbar-default" role="navigation">
                          <?php if( has_nav_menu( 'primary' ) ){ ?>
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
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <?php 
                        $yog_cat_args = array(
                          'taxonomy'     => 'product_cat', //woocommerce
                          'orderby'      => 'name',
                          'empty'        => 0
                        );
                        
                        $yog_categories = get_categories( $yog_cat_args );
                        
                        if( $yog_categories && ! is_wp_error( $yog_categories ) && yog_helper()->get_option( 'header-category-filter' ) ):
                            
                            //Wrapper Start
                            echo '<div class="category-block">
                                    <select name="product-cat" class="product-cat">
                                        <option value="">'. esc_html__( 'Shop by Category', 'flipmart' ) .'</option>';
                                            
                                            //Options
                                            foreach ( $yog_categories as $yog_cat ) {
                                                echo '<option value="' . get_term_link( $yog_cat->slug, 'product_cat' ) . '">' . $yog_cat->name . '</option>';
                                            } 
                             
                            //Wrapper End.                
                            echo '</select>
                            </div>';
                            
                        endif;
                    ?> 
                </div>
            </div>
        </div>
    </div>
</header>