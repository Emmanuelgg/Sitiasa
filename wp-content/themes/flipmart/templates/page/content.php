<?php 
    if( 'woomart' == yog_helper()->yog_get_layout( 'version' ) ){
        
        if( class_exists('Woocommerce') ){
            
            if( is_cart() || is_checkout() || is_account_page() ){
        
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
                
             }else{ 
                ?>
                <div class="main-container col1-layout">
                    <div class="main container">
                        <div class="std">
                            <div class="wrapper_bl" style="margin-top: 1px;">
                                <div class="form_background" id="response">
                
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
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
             }
            
        }else{
            
            ?>
            <div class="main-container col1-layout">
                <div class="main container">
                    <div class="std">
                        <div class="wrapper_bl" style="margin-top: 1px;">
                            <div class="form_background" id="response">
            
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
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        
    }else{
        
        //Page Layout.  
        $yog_enable  = yog_helper()->get_option( 'page-opt-enable-global', 'raw', true, 'options' );
        $yog_layout  = ( yog_helper()->get_option( 'page-custom-sidebar-position', 'raw', false, 'post' ) )? yog_helper()->get_option( 'page-custom-sidebar-position', 'raw', false, 'post' ) : yog_helper()->get_option( 'page-opt-sidebar-position', 'raw', 'right', 'options' );
        $yog_sidebar = ( yog_helper()->get_option( 'page-custom-sidebar', 'raw', false, 'post' ) )? yog_helper()->get_option( 'page-custom-sidebar', 'raw', false, 'post' ) : yog_helper()->get_option( 'page-opt-sidebar', 'raw', 'primary', 'options' );
        $yog_class   = array( 'left' => 'col-xs-12 col-sm-12 col-md-9 homebanner-holder', 'right' => 'col-xs-12 col-sm-12 col-md-9 homebanner-holder' );
        $yog_class   = ( isset( $yog_enable ) && !empty( $yog_enable ) )? $yog_class[$yog_layout] : 'col-md-12 no-padding'; 
       ?>
       <div id="top-banner-and-menu" class="outer-top-xs body-content">
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
                                             echo '<div class="faq-page">';
                                                
                                                echo '<h2 class="heading-title">'. get_the_title() .'</h2>';
                                                
                                                the_content(); 
                                                
                                             echo '</div>';
                                                        
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
                    
                </div>
            </div>
        </div>
       <?php 
    }
?>
