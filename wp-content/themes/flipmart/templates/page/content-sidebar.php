<?php 
if( 'woomart' != yog_helper()->yog_get_layout( 'version' ) ){
    
    //Page Layout.  
    $yog_enable  = yog_helper()->get_option( 'page-opt-enable-global', 'raw', false, 'options' );
    $yog_layout  = ( yog_helper()->get_option( 'page-custom-sidebar-position', 'raw', false, 'post' ) )? yog_helper()->get_option( 'page-custom-sidebar-position', 'raw', false, 'post' ) : yog_helper()->get_option( 'page-opt-sidebar-position', 'raw', 'right', 'options' );
    $yog_sidebar = ( yog_helper()->get_option( 'page-custom-sidebar', 'raw', false, 'post' ) )? yog_helper()->get_option( 'page-custom-sidebar', 'raw', false, 'post' ) : yog_helper()->get_option( 'page-opt-sidebar', 'raw', 'primary', 'options' );
    $yog_class   = array( 'left' => 'col-xs-12 col-sm-12 col-md-9 homebanner-holder', 'right' => 'col-xs-12 col-sm-12 col-md-9 homebanner-holder' );
    $yog_class   = ( isset( $yog_sidebar ) && !empty( $yog_sidebar ) )? $yog_class[$yog_layout] : 'col-md-12 no-padding';

    ?>
    <div id="top-banner-and-menu" class="body-content">
        <div class="container">
            <div class="row">
            
                <?php if( 'left' == $yog_layout && $yog_enable ): ?>
                    <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                        <div class="sidebar-module-container">
                            <?php 
                                if( is_dynamic_sidebar( $yog_sidebar ) ):
                                    dynamic_sidebar( $yog_sidebar ); 
                                endif;
                             ?>
                         </div>
                    </div>
                <?php endif; ?>
                
                <div class="<?php echo esc_attr( $yog_class ); ?>">
                    <article <?php yog_helper()->attr( 'post' ) ?> id="response">
    
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
                    
                    </article><!-- #post-## -->
                </div>
                
                <?php if( 'right' == $yog_layout && $yog_enable ): ?>
                    <div class="col-xs-12 col-sm-12 col-md-3 sidebar sidebar-left">
                        <div class="sidebar-module-container">
                            <?php 
                                if( is_dynamic_sidebar( $yog_sidebar ) ):
                                    dynamic_sidebar( $yog_sidebar ); 
                                endif;
                             ?>
                         </div>
                    </div>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
    <?php
}else{
    
    //Page Layout.  
    $yog_layout  = ( yog_helper()->get_option( 'page-custom-sidebar-position', 'raw', false, 'post' ) )? yog_helper()->get_option( 'page-custom-sidebar-position', 'raw', false, 'post' ) : yog_helper()->get_option( 'page-opt-sidebar-position', 'raw', 'right', 'options' );
    $yog_sidebar = ( yog_helper()->get_option( 'page-custom-sidebar', 'raw', false, 'post' ) )? yog_helper()->get_option( 'page-custom-sidebar', 'raw', false, 'post' ) : yog_helper()->get_option( 'page-opt-sidebar', 'raw', 'primary', 'options' );
    $yog_class   = array( 'left' => 'col-main col-sm-9', 'right' => 'col-main col-sm-9' );
    $yog_class   = ( isset( $yog_sidebar ) && !empty( $yog_sidebar ) )? $yog_class[$yog_layout] : 'col-md-12 no-padding';

    ?>
    <div class="main-container col2-right-layout">
       <div class="main container">
            <div class="row">
            
                <?php if( 'left' == $yog_layout ): ?>
                    <div class="col-left sidebar col-sm-3 blog-side">
                        <?php 
                            if( is_dynamic_sidebar( $yog_sidebar ) ):
                                dynamic_sidebar( $yog_sidebar ); 
                            endif;
                         ?>
                    </div>
                <?php endif; ?>
                
                <div class="<?php echo esc_attr( $yog_class ); ?>">
                    <article <?php yog_helper()->attr( 'post' ) ?> id="response">
    
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
                    
                    </article><!-- #post-## -->
                </div>
                
                <?php if( 'right' == $yog_layout ): ?>
                    <div class="col-left sidebar col-sm-3 blog-side">
                        <?php 
                            if( is_dynamic_sidebar( $yog_sidebar ) ):
                                dynamic_sidebar( $yog_sidebar ); 
                            endif;
                         ?>
                    </div>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
    <?php
}