<header class="header-style-1">
    <?php if( yog_helper()->get_option( 'header-engineer-top' ) ){ ?>
       <div class="top-bar animate-dropdown">
          <div class="container">
             <div class="header-top-inner">
                <div class="cnt-block">
                   <ul class="list-unstyled list-inline">
                      <?php 
                           //User Links
                           if ( yog_helper()->get_option( 'header-engineer-link' ) ) { 
                               if( !is_user_logged_in() ): 
                                    echo '<li><a href="'. wp_login_url() .'"><i class="fa fa-user"></i> '. esc_html__( 'Sign In', 'flipmart' ) .'</a></li>';
                               else:
                                    echo '<li><a href="'. wp_logout_url() .'"><i class="fa fa-unlock-alt"></i> '. esc_html__( 'Sign Out', 'flipmart' ) .'</a></li>';
                               endif;
                           }
                     
                           //Currency
                           if ( yog_helper()->get_option( 'header-engineer-currency' ) && shortcode_exists( 'woocs' ) ) {    
                               echo '<li class="dropdown dropdown-small">'. do_shortcode("[woocs width='70px' show_flags=0 ]") .'</li>';
                           }
                            
                           //Phone Number
                           if( $yog_phone = yog_helper()->get_option( 'header-engineer-phone' ) ){
                                echo '<li> <a href="phoneto:'. $yog_phone .'"><i class="fa fa-phone"></i> '. $yog_phone .'</a></li>';
                           }
                      ?>
                   </ul>
                </div>
                <?php 
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
                        
                        echo '<div class="cnt-account"><ul class="list-unstyled">';
                        
                            foreach( $yog_social_links['network'] as $yog_social_icon ){
                                echo '<li><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                                $yog_counter++;
                            }
                        
                        echo '</ul></div>';
                    
                    endif;
                ?>
                <div class="clearfix"></div>
             </div>
          </div>
       </div>
       <div class="clearfix"></div>
   <?php } ?>
   <div class="header-nav animate-dropdown engineer-navbar">
      <div class="container">
         <?php echo yog_get_logo( array( 'yog_link_class' => false, 'yog_container_class' => 'logo engineer-logo' ) );  //Site Logo ?>
         <div class="engineer-header-nav">
            <div class="col-sm-8 engineer-header-nav-left">
               <?php if( has_nav_menu( 'primary' ) ){  ?> 
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
               <?php } ?>
            </div>
            <div class="col-sm-4 engineer-header-nav-right">
               <?php if( yog_helper()->get_option( 'header-engineer-search-area' ) ){ ?> 
                    <div class="engineer-nav-search">
                        <form method="get" action="<?php echo home_url( '/' ); ?>">
                    	    <input name="s" type="text" id="product-keyword" placeholder="<?php echo esc_attr( yog_get_translation( 'tr-blog-search' ) ); ?>" />
                            <input type="hidden" name="post_type" value="products" />
                            <button type="submit" value=""><i class="fa fa-search"></i></button>
                        </form>
                        <span id="product-search-result"><img src="<?php echo get_template_directory_uri();?>/assets/images/ajax.gif" alt="" id="loader" style="display: none;"/></span>
                    </div>
                <?php } ?> 
            </div>
         </div>
      </div>
   </div>
</header>