<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.3
 */
?>

<div <?php yog_helper()->attr( 'post' ) ?>>

	<div <?php yog_helper()->attr( 'entry-content' ) ?>>
	   <?php
            if ( have_posts() ) :
    
        		// Start the loop.
        		while ( have_posts() ) : the_post();
                    
                    //Page Contents
                     the_content(); 
                                
                     //Page Pagination
                     wp_link_pages( array(
        				'before'      => '<div class="clearfix blog-pagination filters-container"><div class="text-right"><div class="pagination-container"><ul class="list-inline list-unstyled"><li>',
        				'after'       => '</li></ul></div></div></div>',
        				'link_before'      => '',
                        'link_after'       => '',
                        'next_or_number'   => 'number',
                        'separator'        => '</li><li>',
                        'nextpagelink'     =>   esc_html__( 'Next', 'flipmart' ),
                        'previouspagelink' =>   esc_html__( 'Previous', 'flipmart' ),
                        'pagelink'         => '%',
        			 ) );
                    
                     // If comments are open or we have at least one comment, load up the comment template.
        			 if ( comments_open( get_queried_object_id() ) || get_comments_number() ) :
                        comments_template();
        			 endif;
        
        		// End the loop.
        		endwhile;
                
            // If no content, include the "No posts found" template.
        	else :
        		get_template_part( 'templates/page/content', 'none' );
        
        	endif;  
	   ?>
	</div><!-- .entry-content -->

</div><!-- #post-## -->
