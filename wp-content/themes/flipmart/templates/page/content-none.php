<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.3
 */
?>

<div class="notfound body-content">
	
    <div class="faq-page">
        <h2 class="heading-title"><?php esc_html_e( 'Nothing Found', 'flipmart' ); ?></h2>
	
    	<div class="page-content">
    
    		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
    
    			<p><?php printf( '%1$s %2$s.', esc_html__( 'Ready to publish your first post?', 'flipmart' ), '<a href="'. esc_url( admin_url( 'post-new.php' ) ) .'">'. esc_html__( 'Get started here', 'flipmart' ) .'</a>' ); ?></p>
    
    		<?php elseif ( is_search() ) : ?>
    
    			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'flipmart' ); ?></p>
    			<form method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>" class="outer-top-vs outer-bottom-xs">
                    <input placeholder="<?php echo yog_helper()->get_option( 'error-404-search-title', 'raw', esc_html__( 'Search', 'flipmart' ), 'options' ); ?>" type="text" name="s" />
                    <button class="btn-default le-button" type="submit"><?php echo yog_helper()->get_option( 'page-404-search-btn', 'raw', esc_html__( 'Go', 'flipmart' ), 'options' ); ?></button>
                </form>
    
    		<?php else : ?>
    
    			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'flipmart' ); ?></p>
    			<form method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>" class="outer-top-vs outer-bottom-xs">
                    <input placeholder="<?php echo yog_helper()->get_option( 'error-404-search-title', 'raw', esc_html__( 'Search', 'flipmart' ), 'options' ); ?>" type="text" name="s" />
                    <button class="btn-default le-button" type="submit"><?php echo yog_helper()->get_option( 'page-404-search-btn', 'raw', esc_html__( 'Go', 'flipmart' ), 'options' ); ?></button>
                </form>
    
    		<?php endif; ?>
        </div>

	</div><!-- .page-content -->
</div><!-- .no-results -->
