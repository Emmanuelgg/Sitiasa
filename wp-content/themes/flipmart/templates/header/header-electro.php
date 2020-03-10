<header class="header-style-1">

 <?php if( yog_helper()->get_option( 'header-electro-top' ) ){  ?>
     <div class="top-bar animate-dropdown">
        <div class="container">
           <div class="header-top-inner">
              <div class="cnt-account">
                 <ul class="list-unstyled">
                    <?php 
                        //User Links
                        if( !is_user_logged_in() ): 
                            
                            echo '<li><a href="'. wp_login_url() .'"><i class="fa fa-user"></i> '. esc_html__( 'Sign In', 'flipmart' ) .'</a></li>';
                            echo '<li><a href="'. home_url('/wp-login.php?action=register&redirect_to=' . get_permalink()) .'"><i class="fa fa-user-plus"></i> '. esc_html__( 'Register', 'flipmart' ) .'</a></li>';
                            
                        else:
                            
                            echo '<li><a href="'. wp_logout_url() .'"><i class="fa fa-unlock-alt"></i> '. esc_html__( 'Sign Out', 'flipmart' ) .'</a></li>';
                            
                        endif;
                    ?> 
                 </ul>
              </div>
              <div class="cnt-block">
                 <ul class="list-unstyled list-inline">
                    <?php 
                        //Currency
                        if ( yog_helper()->get_option( 'header-electro-currency' ) && shortcode_exists( 'woocs' ) ) { 
                            echo '<li class="dropdown dropdown-small">'. do_shortcode("[woocs width='70px' show_flags=0 ]") .'</li>';
                        }
                        
                        //Phone Number
                        if ( $yog_phone = yog_helper()->get_option( 'header-electro-phone' ) ) { 
                            printf( '<li class="hotline">%s: %s</li>', esc_html__( 'Hotline', 'flipmart' ), $yog_phone );
                        }
                    ?>
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
          <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
             <?php echo yog_get_logo( array( 'yog_link_class' => false ) );  //Site Logo ?>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
             <?php if( yog_helper()->get_option( 'header-electro-search-area' ) ){ ?> 
                 <div class="search-area">
                    <form method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                    	<div class="control-group">    
                            <?php
                                if( yog_helper()->get_option( 'header-electro-category-filter' ) ){ 
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
                            <input type="hidden" name="post_type" value="products" />
                            <button type="submit" class="search-button" ></button>
                        </div>
                    </form>
                    <span id="product-search-result"><img src="<?php echo get_template_directory_uri();?>/assets/images/ajax.gif" alt="" id="loader" style="display: none;"/></span>
                 </div>
             <?php } ?>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
             <?php get_template_part( 'templates/header/shopping-cart', 'v5' ); ?>
          </div>
       </div>
    </div>
 </div>
 
 <div class="header-nav animate-dropdown">
    <div class="container">
       <div class="yamm navbar navbar-default" role="navigation">
          <div class="navbar-header">
             <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
             <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'flipmart' ); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="nav-bg-class">
             <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                <?php 
                    //Top Category Menu
                    if( has_nav_menu( 'top-bar' ) ){
                        
                        //Menu Arguments    
                        wp_nav_menu( array(
                            'container'       => 'div',
                            'container_class' => 'cnt-block',
                            'menu_class'      => 'list-unstyled list-inline',
                            'menu_id'         => '',
                            'theme_location'  => 'top-bar',
                            'walker'          => new Yog_Top_Walker_Nav_Menu
                        ));
                    } 
                    
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
</header>