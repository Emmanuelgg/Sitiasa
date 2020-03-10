<header class="header-style-1"> 
  
  <?php if( yog_helper()->get_option( 'header-top' ) ){  ?>
      <div class="top-bar animate-dropdown">
        <div class="container">
          <div class="header-top-inner">
            
            <?php 
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
                
                if ( yog_helper()->get_option( 'header-top-currency' ) && shortcode_exists( 'woocs' ) ) {    
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
            <?php echo yog_get_logo();  //Site Logo ?>
          </div> 
    
          <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                <?php if( yog_helper()->get_option( 'header-search-area' ) ){ ?> 
                    <div class="search-area">
                        <form method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                    	    
                            <?php
                                if( yog_helper()->get_option( 'header-category-filter' ) ){ 
                                    if( isset( $_GET['category'] ) && !empty( $_GET['category'] ) ){
                                        // for more information see http://codex.wordpress.org/Function_Reference/wp_dropdown_categories
                    				    $yog_cat_dropdown_args = array(
                    						'show_option_all'  => __( 'Product Category', 'flipmart' ),
                                            'taxonomy'         => 'product_cat',
                    						'name'             => 'category',
                                            'selected'         => $_GET['category'],
                                            'value_field'      => 'slug'
                    					);
                                    }else{
                                        // for more information see http://codex.wordpress.org/Function_Reference/wp_dropdown_categories
                    				    $yog_cat_dropdown_args = array(
                    						'show_option_all'  => __( 'Product Category', 'flipmart' ),
                                            'taxonomy'         => 'product_cat',
                    						'name'             => 'category',
                                            'value_field'      => 'slug'
                    					);
                                    }
                    				
                    				wp_dropdown_categories( $yog_cat_dropdown_args );
                                }
                			?>
                            <input name="s" id="product-keyword" class="search-field" placeholder="<?php echo esc_attr( yog_get_translation( 'tr-blog-search' ) ); ?>" autocomplete="on"/>
                            <input type="hidden" name="post_type" value="products" />
                            <button type="submit" class="search-button" ></button>
                        </form>
                        <span id="product-search-result"><img src="<?php echo get_template_directory_uri();?>/assets/images/ajax.gif" alt="" id="loader" style="display: none;"/></span>
                    </div>
                <?php } ?>
           </div>   
             
           <?php get_template_part( 'templates/header/shopping-cart', 'v1' ); ?>
             
        </div>
     </div>
  </div>
  
  <div class="header-nav animate-dropdown" id="navbar">
    <div class="container">
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
</header>