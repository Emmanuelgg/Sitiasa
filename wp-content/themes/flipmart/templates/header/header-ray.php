<!-- PRELOADER -->
<div id="preloader">
	<div class="battery inner">
		<div class="load-line"></div>
	</div>
</div>
<div id="wrap"> 

	<!-- NAVIGATION BEGIN -->
	<nav class="navbar navbar-fixed-top navbar-slide">
		<div class="container_fluid"> 
            <?php echo yog_get_logo( array( 'yog_container' => false, 'yog_link_class' => 'navbar-brand goto' ) );  //Site Logo ?> 
			<button class="navbar-toggle menu-collapse-btn collapsed" data-toggle="collapse" data-target=".navMenuCollapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<?php 
                //Check Menu Location
                if( has_nav_menu( 'primary' ) ):
                
                    //Primary Menu
                    $yog_menu =  wp_nav_menu( array(
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse navMenuCollapse',
                        'menu_class'      => 'nav',
                        'menu_id'         => '',
                        'theme_location'  => 'primary',
                        'echo'            => false,
                        'walker'          => new Yog_Walker_Nav_Menu
                    ));
                    
                    $yog_url = ( is_front_page() ) ? '#' : home_url('/#');
                    echo str_replace( '#HOME_URL#', $yog_url, $yog_menu );
                
                endif;
            ?>
		</div>
	</nav>
	<!-- NAVIGAION END -->