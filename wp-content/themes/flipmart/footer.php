<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the main containers
 *
 * @package base-theme
 */			
		yog_action( 'after_content' );

		yog_action( 'before_footer' );
		yog_action( 'footer' );
		yog_action( 'after_footer' );
        
        yog_action( 'after' );

    wp_footer();
?>
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
</body>
</html>
