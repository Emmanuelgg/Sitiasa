<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
 
 get_header(); 
    
    //Breadcrumb
    get_template_part('templates/page/breadcrumb');
    
    //Search Layout.  
    $yog_sidebar = yog_helper()->get_option( 'blog-search-enable-global', 'raw', false, 'options' ); 
    $yog_layout  = yog_helper()->get_option( 'search-sidebar-position', 'raw', 'right', 'options' );
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
                                if( is_active_sidebar( yog_helper()->get_option( 'blog-search-sidebar', 'raw', 'primary', 'options' ) ) ):
                                    dynamic_sidebar( yog_helper()->get_option( 'blog-search-sidebar', 'raw', 'primary', 'options' ) ); 
                                endif;
                            ?>
                        </div>
                    </div>
                <?php } ?>
            
                <div class="col-main <?php echo esc_attr( $yog_class[$yog_layout] ); ?>">
                    <div id="main" class="blog-wrapper">
                        <div id="primary" class="site-content">
                            <div id="content" role="main">
                                <?php
                                    if ( have_posts() ) :
                                        
                                        woocommerce_product_loop_start();
                                        
                                        // Start the loop.
                                		while ( have_posts() ) : the_post();
                                            
                                            wc_get_template_part( 'content', 'product' );
                                
                                		// End the loop.
                                		endwhile;
                                        
                                        woocommerce_product_loop_end();
                                        
                                	// If no content, include the "No posts found" template.
                                	else :
                                		get_template_part( 'templates/page/content', 'none' );
                                
                                	endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            
                <?php if( 'right' == $yog_layout && isset( $yog_sidebar ) && !empty( $yog_sidebar ) ){ ?>
                    <div class="col-right sidebar col-sm-3 blog-side">
                        <div id="secondary" class="widget_wrapper13" role="complementary">
                            <?php 
                                if( is_active_sidebar( yog_helper()->get_option( 'blog-search-sidebar', 'raw', 'primary', 'options' ) ) ):
                                    dynamic_sidebar( yog_helper()->get_option( 'blog-search-sidebar', 'raw', 'primary', 'options' ) ); 
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
        <div class="container">
           <div class="blog-page">
             <div class="row">
             
                <?php if( 'left' == $yog_layout && isset( $yog_sidebar ) && !empty( $yog_sidebar ) ){ ?>
                    <div class="col-md-3 sidebar">
                        <div class="sidebar-module-container">
                            <?php 
                                if( is_active_sidebar( yog_helper()->get_option( 'blog-search-sidebar', 'raw', 'primary', 'options' ) ) ):
                                    dynamic_sidebar( yog_helper()->get_option( 'blog-search-sidebar', 'raw', 'primary', 'options' ) ); 
                                endif;
                            ?>
                        </div>
                    </div>
                <?php } ?>
            
                <div class="<?php echo esc_attr( $yog_class[$yog_layout] ); ?>">
                    <?php
                        if ( have_posts() ) :
                            
                            woocommerce_product_loop_start();
                            
                            global $product, $woocommerce_loop;
                            
                            $yog_counter = 1; $yog_column = apply_filters( 'loop_shop_columns', 4 );
                            // Start the loop.
                    		while ( have_posts() ) : the_post();
                                
                                if( $yog_counter == 1 ):
                                    echo '<div class="row">';
                                    $yog_close = true;
                                endif;
                                
                                $classes[] = yog_get_column( $woocommerce_loop['columns'] );
                                $classes[] = 'col-sm-6 grid-products'; 
       
                                wc_get_template( 'woocommerce/content-product-grid.php' , array( 'classes' => $classes ) ); 
                                
                                if( $yog_counter == $yog_column ):
                                    echo '</div>';
                                    $yog_counter = 1;
                                    $yog_close = false;
                                else:
                                    $yog_counter++;
                                endif;
                    
                    		// End the loop.
                    		endwhile;
                            
                            if( $yog_close ):
                                echo '</div>';
                            endif;
                            
                            woocommerce_product_loop_end();
                            
                    	// If no content, include the "No posts found" template.
                    	else :
                    		get_template_part( 'templates/page/content', 'none' );
                    
                    	endif;
                    ?>
                </div>
            
                <?php if( 'right' == $yog_layout && isset( $yog_sidebar ) && !empty( $yog_sidebar ) ){ ?>
                    <div class="col-md-3 sidebar sidebar-left">
                        <div class="sidebar-module-container">
                            <?php 
                                if( is_active_sidebar( yog_helper()->get_option( 'blog-search-sidebar', 'raw', 'primary', 'options' ) ) ):
                                    dynamic_sidebar( yog_helper()->get_option( 'blog-search-sidebar', 'raw', 'primary', 'options' ) ); 
                                endif;
                            ?>
                        </div>
                    </div>
                <?php } ?>
                
               </div>
            </div>
        </div>
        <?php
    }
 get_footer(); 
