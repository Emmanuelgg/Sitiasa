<li <?php yog_helper()->attr( 'comment' ); ?>>

	<div class="author-details outer-bottom-xs col-md-12">
        
            <cite <?php yog_helper()->attr( 'comment-author' ); ?>><?php comment_author_link(); ?></cite>
            <time <?php yog_helper()->attr( 'comment-published' ); ?>><?php printf( esc_html__( '%s ago', 'flipmart' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) ); ?></time>

    		<a <?php yog_helper()->attr( 'comment-permalink' ); ?>><?php esc_html_e( 'Permalink', 'flipmart' ); ?></a>
    
    		<?php edit_comment_link(); ?>
        <div class="clearfix"></div>
	</div><!-- .comment-meta -->

<?php // No closing </li> is needed.  WordPress will know where to add it. ?>
