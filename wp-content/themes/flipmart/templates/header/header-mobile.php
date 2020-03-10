<header class="header-style-1">
 <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="cnt-block">
         <ul class="list-unstyled list-inline">
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
                    
                    
                    foreach( $yog_social_links['network'] as $yog_social_icon ){
                        echo '<li><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                        $yog_counter++;
                    }
                
                endif; 
                
                //App Link
                if ( $yog_link = yog_helper()->get_option( 'header-mobile-link' ) ){
                   echo '<li class="app-btn"><a href="'. esc_url( $yog_link ) .'"><i class="fa fa-download"></i> '. esc_html__( 'Get App', 'flipmart' ) .'</a></li>';
                }
            ?>
         </ul>
      </div>
      <div class="mobileapp-logo">
         <?php
            //Logo 
            echo yog_get_logo( array( 'yog_container' => false, 'yog_link_class' => false ) );
         ?>
         <div class="logo-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-bg.png" alt="" />
         </div>
      </div>
      <?php if( has_nav_menu( 'primary' ) ): ?>
          <div class="cnt-account">
             <div class="header-nav animate-dropdown">
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
             </div>
          </div>
          <div class="clearfix"></div>
      <?php endif; ?>
    </div>
 </div>
</header>