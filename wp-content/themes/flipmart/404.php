<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */

 get_header(); 
 
    //Breadcrumb
    get_template_part('templates/page/breadcrumb');
    
    if( yog_helper()->yog_get_layout( 'version' ) == 'woomart' ){
    ?>
    <section class="content-wrapper">
      <div class="container">
        <div class="std">
          <div class="page-not-found">
            <br />
            <?php 
                $yog_img  = yog_helper()->get_option( 'page-404-logo' );
                if( isset( $yog_img['url'] ) ){
                    echo '<div><img src="'. esc_url( $yog_img['url'] ) .'" alt="error image"></div>';
                }
            ?>
            <h3><?php echo yog_helper()->get_option( 'page-404-body', 'html', esc_html__( 'Oops! The Page you requested was not found!', 'flipmart' ), 'options' ); ?></h3>
            <div><a href="<?php echo esc_url( home_url( '/' ) ) ?>" class="btn-home"><span><?php echo yog_helper()->get_option( 'page-404-back-btn', 'raw', esc_html__( 'Go To Homepage', 'flipmart' ), 'options' ); ?></span></a></div>
          </div>
        </div>
      </div>
    </section>    
    <?php    
    }else{
    ?>  
    <div class="body-content outer-top-bd">
    	<div class="container">
    		<div class="x-page inner-bottom-sm">
    			<div class="row">
    				<div class="col-md-12 x-text text-center">
                    
    					<h1><?php echo yog_helper()->get_option( 'page-404-title', 'html', esc_html__( '404', 'flipmart' ), 'options' ); ?></h1>
    					<p><?php echo yog_helper()->get_option( 'page-404-subtitle', 'html', esc_html__( 'We are sorry, the page you\'ve requested is not available.', 'flipmart' ), 'options' ); ?> </p>
    					
                        <?php if(  'on' == yog_helper()->get_option( 'error-404-enable-search', 'raw', false, 'options' ) ): ?>
                            <form method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>" class="outer-top-vs outer-bottom-xs">
                                <input placeholder="<?php echo yog_helper()->get_option( 'error-404-search-title', 'raw', esc_html__( 'Search', 'flipmart' ), 'options' ); ?>" type="text" name="s" />
                                <button class="btn-default le-button" type="submit"><?php echo yog_helper()->get_option( 'page-404-search-btn', 'raw', esc_html__( 'Go', 'flipmart' ), 'options' ); ?></button>
                            </form>
                        <?php endif; ?>
                        
    					<a href="<?php echo esc_url( home_url( '/' ) ) ?>"><i class="fa fa-home"></i> <?php echo yog_helper()->get_option( 'page-404-back-btn', 'raw', esc_html__( 'Go To Homepage', 'flipmart' ), 'options' ); ?></a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <?php 
    }
    
get_footer();