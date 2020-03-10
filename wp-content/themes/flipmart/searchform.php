<?php
/**
 * The template for displaying search form.
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
?>
<div class="sidebar-module-container">
    <div class="search-area">
        <form method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>">
            <div class="control-group">
                <input type="text" name="s" class="search-field" placeholder="<?php echo esc_attr( yog_get_translation( 'tr-blog-search' ) ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" />
                <span class="search-button"></span>
            </div>
        </form>
    </div>
</div>