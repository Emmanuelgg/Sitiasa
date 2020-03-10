<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
 
 get_header(); 
    
    get_template_part('templates/page/breadcrumb');
    
    //Single Layout.  
    if ( ! class_exists( 'ReduxFramework' ) ):
        $yog_sidebar = yog_helper()->get_option( 'blog-single-enable-global', 'raw', true, 'options' ); 
    else:
        $yog_sidebar = yog_helper()->get_option( 'blog-single-enable-global', 'raw', false, 'options' ); 
    endif;
    $yog_layout  = yog_helper()->get_option( 'blog-single-sidebar-position', 'raw', 'right', 'options' );
    $yog_layout  = ( isset( $yog_sidebar ) && !empty( $yog_sidebar ) )? $yog_layout : 'full';
    $yog_class   = array( 'full' => 'col-md-12', 'left' => 'col-md-9 col-sm-9', 'right' => 'col-md-9 col-sm-9' );
    
    if( yog_helper()->yog_get_layout( 'version' ) == 'woomart' ){
    ?>
    
    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                
                <?php if( 'left' == $yog_layout && isset( $yog_sidebar ) && !empty( $yog_sidebar ) ){ ?>
                    <div class="col-left sidebar col-sm-3 blog-side">
                        <div id="secondary" class="widget_wrapper13" role="complementary">
                            <?php 
                                if( is_dynamic_sidebar( yog_helper()->get_option( 'blog-single-sidebar', 'raw', 'primary', 'options' ) ) ):
                                    dynamic_sidebar( yog_helper()->get_option( 'blog-single-sidebar', 'raw', 'primary', 'options' ) ); 
                                endif;
                            ?>
                        </div>
                    </div>
                <?php } ?>
            
                <div class="col-main <?php echo esc_attr( $yog_class[$yog_layout] ); ?>">
                    <?php
                        if ( have_posts() ) :
                    
                            // Start the loop.
                    		while ( have_posts() ) : the_post();
                            
                                //Animation
                                $yog_animation = ( yog_helper()->get_option( 'blog-single-animation', 'raw', false, 'options' ) )? yog_helper()->get_option( 'blog-single-animation', 'raw', false, 'options' ) : '';
                                $yog_delay     = ( yog_helper()->get_option( 'blog-single-delay', 'raw', false, 'options' ) )? yog_helper()->get_option( 'blog-single-delay', 'raw', false, 'options' ) : '';
                                
                                ?>
                                <div id="main" <?php yog_helper()->attr( 'post', array( 'class' => 'blog-wrapper', 'data-animation' => $yog_animation, 'data-animation-delay' => $yog_delay ) ); ?>>
                                    <div id="content" role="main">
                                        <article id="post-<?php echo get_the_ID(); ?>" class="blog_entry clearfix" style="padding-top:0px">
                                            <header class="blog_entry-header clearfix">
                                                <div class="blog_entry-header-inner">
                						            <h2 class="blog_entry-title"><?php the_title(); ?></h2>
                                                </div>
                        					</header>
                                            
                                            <div class="entry-content">
                                                <div class="featured-thumb"><?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?></div>
                                                <div class="entry-content">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <?php 
                                        //Author Bio
                                        get_template_part( 'author', 'bio' ); 
                                        
                                        // If comments are open or we have at least one comment, load up the comment template.
                         			    if ( comments_open(get_queried_object_id()) || get_comments_number() ) :
                            				comments_template();
                         			    endif;
                                    ?>
                                </div>
                                <?php 
                                
                    
                    		// End the loop.
                    		endwhile;
                            
                            //Pagination
                            yog_wp_paginate( array( 'before' => '<div class="pager" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'><div class="pages">', 'after' => '</div></div>', 'class' => 'pagination', 'title' => false, 'nextpage' => '<i class="fa fa-angle-right"></i>', 'previouspage' => '<i class="fa fa-angle-left"></i>' ) ); 
                    
                    	// If no content, include the "No posts found" template.
                    	else :
                    		get_template_part( 'templates/blog/content', 'none' );
                    
                    	endif;
                    ?>
                </div>
            
                <?php if( 'right' == $yog_layout && isset( $yog_sidebar ) && !empty( $yog_sidebar ) ){ ?>
                    <div class="col-left sidebar col-sm-3 blog-side">
                        <div id="secondary" class="widget_wrapper13" role="complementary">
                            <?php 
                                if( is_dynamic_sidebar( yog_helper()->get_option( 'blog-single-sidebar', 'raw', 'primary', 'options' ) ) ):
                                    dynamic_sidebar( yog_helper()->get_option( 'blog-single-sidebar', 'raw', 'primary', 'options' ) ); 
                                endif;
                            ?>
                        </div>
                    </div>
                <?php } ?>
                    
            </div>
        </div>
    </div> 
      
    <?php    
    }else{
    ?>
    
    <div class="body-content">
        <div class="container">
            <div class="blog-page">
                <div class="row">
                
                    <?php if( 'left' == $yog_layout && isset( $yog_sidebar ) && !empty( $yog_sidebar ) ){ ?>
                        <div class="col-md-3 sidebar">
                            <div class="sidebar-module-container">
                                <?php 
                                    if( is_dynamic_sidebar( yog_helper()->get_option( 'blog-single-sidebar', 'raw', 'primary', 'options' ) ) ):
                                        dynamic_sidebar( yog_helper()->get_option( 'blog-single-sidebar', 'raw', 'primary', 'options' ) ); 
                                    endif;
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                
                    <div class="<?php echo esc_attr( $yog_class[$yog_layout] ); ?>">
                        <?php
                            if ( have_posts() ) :
                        
                                // Start the loop.
                        		while ( have_posts() ) : the_post();
                                
                                    //Animation
                                    $yog_animation = ( yog_helper()->get_option( 'blog-single-animation', 'raw', false, 'options' ) )? yog_helper()->get_option( 'blog-single-animation', 'raw', false, 'options' ) : '';
                                    $yog_delay     = ( yog_helper()->get_option( 'blog-single-delay', 'raw', false, 'options' ) )? yog_helper()->get_option( 'blog-single-delay', 'raw', false, 'options' ) : '';
                                    
                                    ?>
                                    <div <?php yog_helper()->attr( 'post', array( 'class' => 'blog-post', 'data-animation' => $yog_animation, 'data-animation-delay' => $yog_delay ) ); ?>>
                                        
                                        <?php
                                            //Feature Image 
                                            echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); 
                                            
                                            //Title
                                            the_title( '<h1 class="post-title">', '</h1>' );
                                        ?>
                                    	<span class="author"><?php the_author(); ?></span>
                                    	<span class="review">
                                            <?php 
                                                //Comments
                                                $yog_num_comments = get_comments_number(); 
                                                if( $yog_num_comments != 1 ){
                                                    printf( '%1$s %2$s', yog_get_translation( 'tr-blog-comments' ), number_format_i18n( $yog_num_comments ) );
                                                }else{
                                                    printf( '%1$s %2$s', yog_get_translation( 'tr-blog-comment' ), number_format_i18n( $yog_num_comments ) );
                                                }
                                            ?>
                                        </span>
                                    	<span class="date-time"><?php echo get_the_time( get_option( 'date_format' ) ); ?></span>
                                    	
                                        <?php
                                            //Tag 
                                            the_tags( '<span '. yog_helper()->get_attr( 'entry-terms', array( 'taxonomy' => 'post_tag' ) ) .'><i class="fa fa-tag"></i> ', ', ', '</span>' ); 
                                            
                                            //Category
                                            the_terms( get_the_ID(), 'category', '<span '. yog_helper()->get_attr( 'entry-terms', array( 'taxonomy' => 'post_tag' ) ) .'><i class="fa fa-tags"></i> ', ', ', '</span>' );
                                        
                                            //Content
                                            the_content( sprintf(
                                    			esc_html__( 'Continue reading "%s"', 'flipmart' ),
                                    			get_the_title()
                                    		) ); 
                                        ?>
                                        <div class="clearfix"></div>
                                        <?php 
                                            //Page Pagination
                                            wp_link_pages( array(
                                				'before'           => '<div class="clearfix blog-pagination filters-container"><div class="text-right"><div class="pagination-container"><ul class="list-inline list-unstyled"><li>',
                                				'after'            => '</li></ul></div></div></div>',
                                				'link_before'      => '',
                                                'link_after'       => '',
                                                'next_or_number'   => 'number',
                                                'separator'        => '</li><li>',
                                                'nextpagelink'     =>   esc_html__( 'Next', 'flipmart' ),
                                                'previouspagelink' =>   esc_html__( 'Previous', 'flipmart' ),
                                                'pagelink'         => '%',
                                			) );
                                        ?>
                                        <?php if( yog_helper()->get_option( 'post-social-share', 'raw', false, 'options' ) ): ?>
                                            <div class="social-media">
                                        		<span><?php echo esc_html__( 'share post:', 'flipmart' ); ?></span>
                                                <?php 
                                                    $yog_post_url   = urlencode( esc_url( get_permalink() ) );
                                            	    $yog_post_title = urlencode( get_the_title() );
                                                ?>
                                        		<a href="<?php printf( 'https://www.facebook.com/sharer/sharer.php?u=%1$s&t=%2$s', $yog_post_url, $yog_post_title ); ?>"><i class="fa fa-facebook"></i></a>
                                        		<a href="<?php printf( 'https://twitter.com/intent/tweet?text=%2$s&url=%1$s', $yog_post_url, $yog_post_title )?>"><i class="fa fa-twitter"></i></a>
                                        		<a href="<?php printf( 'https://plus.google.com/share?url=%1$s', $yog_post_url ); ?>"><i class="fa fa-google"></i></a>
                                        		
                                        	</div>
                                        <?php endif; ?>
                                        
                                    </div>
                                        
                                    <?php 
                                    
                                    //Author Bio
                                    get_template_part( 'author', 'bio' ); 
                                    
                                    // If comments are open or we have at least one comment, load up the comment template.
                     			    if ( comments_open(get_queried_object_id()) || get_comments_number() ) :
                        				comments_template();
                     			    endif;
                                        
                        
                        		// End the loop.
                        		endwhile;
                                
                                //Pagination
                                yog_wp_paginate( array( 'before' => '<div class="col-md-12 text-center">', 'after' => '</div>', 'class' => 'pagination pagination-lg', 'title' => false, 'nextpage' => '<i class="fa fa-angle-right"></i>', 'previouspage' => '<i class="fa fa-angle-left"></i>' ) );        
                        
                        	// If no content, include the "No posts found" template.
                        	else :
                        		get_template_part( 'templates/blog/content', 'none' );
                        
                        	endif;
                        ?>
                    </div>
                
                    <?php if( 'right' == $yog_layout && isset( $yog_sidebar ) && !empty( $yog_sidebar ) ){ ?>
                        <div class="col-md-3 sidebar sidebar-left">
                            <div class="sidebar-module-container">
                                <?php 
                                    if( is_dynamic_sidebar( yog_helper()->get_option( 'blog-single-sidebar', 'raw', 'primary', 'options' ) ) ):
                                        dynamic_sidebar( yog_helper()->get_option( 'blog-single-sidebar', 'raw', 'primary', 'options' ) ); 
                                    endif;
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
     </div>
       
    <?php
    }
 get_footer(); 