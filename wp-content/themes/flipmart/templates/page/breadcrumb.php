<?php
    //Get Post Meta Value.
    $yog_breadcrumb_enable_page   = yog_helper()->get_option( 'page-breadcrumb-enable', 'raw', false, 'post' );
    $yog_breadcrumb_enable_option = yog_helper()->get_option( 'breadcrumb-enable' ); 
    if( 1 != $yog_breadcrumb_enable_page && is_page() ){
        if( yog_helper()->yog_check_layout( 'cosmetic' ) ){
            return;
        }
        //echo '<div class="outer-top-xs"></div><div class="clearfix"></div>';
        return;
    }elseif( 1 != $yog_breadcrumb_enable_option && 1 != $yog_breadcrumb_enable_page ){
        if( yog_helper()->yog_check_layout( 'cosmetic' ) ){
            return;
        }
        echo '<div class="outer-top-xs"></div><div class="clearfix"></div>';
        return;
    }
    
    if( 'woomart' == yog_helper()->yog_get_layout( 'version' ) ){
?>

    <div class="page-heading">
        <div class="container">
           <div class="row">
             <div class="col-xs-12">
                <div class="page-title">
                   <h2>
                      <?php
                        if( is_404() ){
                            _e( '404 Page', 'flipmart' );
                        }else{
                            echo single_post_title();
                        } 
                      ?>
                   </h2>
                </div>
             </div>
           </div>
        </div>
    </div>

<?php }else{ ?>

    <div class="breadcrumb">
    	<div class="container">
    		<div class="breadcrumb-inner">
    			<ul class="list-inline list-unstyled">
    				<?php 
                        if( isset( $_GET['category'] ) && !empty( $_GET['category'] ) ){
                            echo '<li><a href="'. home_url( '/' ) .'">'. get_bloginfo('name') .'</a></li>';
                            if( isset( $_GET['category'] ) && !empty( $_GET['category'] ) && isset( $_GET['s'] ) && !empty( $_GET['s'] ) ){
                                printf( '<li>%s %s %s %s</li>', esc_html__( 'Search Category:', 'flipmart' ), $_GET['category'], esc_html__( '& Keyword:', 'flipmart' ), $_GET['s'] );
                            }else{
                                printf( '<li>%s %s</li>', esc_html__( 'Search Category:', 'flipmart' ), $_GET['category'] );
                            }
                            
                        }elseif(function_exists('bcn_display')) {
                            bcn_display_list();
                        }  
                    ?>
    			</ul>
    		</div>
    	</div>
    </div>
    
<?php }