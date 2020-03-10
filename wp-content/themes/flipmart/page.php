<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
 get_header(); 
    
    //Slider
    get_template_part( 'templates/page/slider' );
    
    //Breadcrumb
    get_template_part( 'templates/page/breadcrumb' );
?>
    <div class="clearfix"></div>
    <main <?php yog_helper()->attr( 'content', array( 'class' => 'body-content site-main' ) ); ?>>
    	<div id="primary" class="body-content">
    		<?php
    		    //Get Page Meta Data.
                $yog_page_layout = yog_helper()->get_option( 'page-layout', 'raw', false, 'post' );
                get_template_part( 'templates/page/content', $yog_page_layout );
            ?>
    	</div>
    </main>

<?php get_footer(); 