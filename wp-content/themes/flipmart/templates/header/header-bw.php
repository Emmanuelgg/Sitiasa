<?php 
    //Enqueue Css Files
    wp_enqueue_style( 'yog-icons' );
?>
<div id="page-preloader">
	<div class="spinner">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/spinner.svg" alt="Images">
		<div class="dotted round"></div>
	</div>
</div>
<!-- Header -->
<header>
	<div class="row-fluid clearfix">
        <?php
            //Site Logo 
            echo yog_get_logo( array( 'yog_container_class' => 'logo', 'yog_logo_class' => 'default-logo' ) );   
            
            //Check Menu Location
            if( has_nav_menu( 'primary' ) ):
        ?> 
		
    		<div class="ham sb-toggle-right">
    			<div class="ham-line"></div>
    			<div class="ham-line"></div>
    			<div class="ham-line"></div>
    			<div class="ham-line"></div>
    		</div>
    		
    		<!-- Navigation -->
            <?php 
                //Primary Menu
                $yog_menu = wp_nav_menu( array(
                    'container'       => 'nav',
                    'container_class' => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'theme_location'  => 'primary',
                    'echo'            => false,
                    'walker'          => new Primary_Walker_Nav_Menu
                ));
                
                $yog_url = ( is_front_page() ) ? '#' : home_url('/#');
                echo str_replace( '#HOME_URL#', $yog_url, $yog_menu );
            ?>
    		<!-- /Navigation -->
            
		<?php endif; ?>
	</div>
</header>
<div class="clearfix"></div>