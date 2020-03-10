<header>
  <div id="header">
     <div class="header-container container">
	     
        <?php echo yog_get_logo( array( 'yog_link_class' => false ) );  //Site Logo ?>
        
        <?php if( has_nav_menu( 'primary' ) ){ ?>
            <div class="fl-nav-menu">
                <nav>
                    <div class="mm-toggle-wrap">
                      <div class="mm-toggle"><i class="fa fa-align-justify"></i><span class="mm-label"><?php echo esc_html__( 'Menu', 'flipmart' ); ?></span> </div>
                    </div>
                    <?php 
                        //Menu Arguments    
                        wp_nav_menu( array(
                            'container'       => 'div',
                            'container_class' => 'nav-inner',
                            'menu_class'      => 'hidden-xs',
                            'menu_id'         => 'nav',
                            'theme_location'  => 'primary',
                            'walker'          => new Yog_Woo_Walker_Nav_Menu
                        ));
                    ?>
                </nav>
            </div>
        <?php } ?>
         <div class="fl-header-right">
            <?php
                //Cart 
                get_template_part( 'templates/header/shopping-cart', 'woomart' ); 
                
                //Search Form
                if( yog_helper()->get_option( 'header-search-area', 'raw', false, 'options' ) ):
            ?>
                <div class="collapse navbar-collapse">
                    <form method="get" class="navbar-form" action="<?php echo home_url( '/' ); ?>">
                        <div class="input-group">
                            <input name="s" class="GlobalNavSearch js-globalSearchInput" placeholder="<?php echo esc_attr( yog_get_translation( 'tr-blog-search' ) ); ?>" />
                            <label class="GlobalNavSearch-searchIcon" for="desktopSearchInput" data-reactid=".1.0.0.1"></label>	
                            <input type="hidden" name="post_type" value="products" />
                        </div>
                    </form>
                </div>
            <?php endif; ?>
         </div>
         
      </div>
   </div>	
</header>
<?php 
if( has_nav_menu( 'primary' ) ){
    
    //Menu Arguments    
    wp_nav_menu( array(
        'container'       => 'div',
        'container_id'    => 'mobile-menu',
        'menu_class'      => 'mobile-menu',
        'theme_location'  => 'primary',
        'walker'          => new Yog_Woo_Mobile_Walker_Nav_Menu
    ));
    
}