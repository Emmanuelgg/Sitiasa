<?php
/**
 * Cross-sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cross-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $cross_sells ) : ?>
    
    <div class="related-pro container">
        <div class="slider-items-products">
	        <div class="new_title center"><h2><?php esc_html_e( 'You may be interested in&hellip;', 'flipmart' ); ?></h2></div>
            <div id="related-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                    <?php foreach ( $cross_sells as $cross_sell ) : ?>

        				<?php
        				 	$post_object = get_post( $cross_sell->get_id() );
        
        					setup_postdata( $GLOBALS['post'] =& $post_object );
                            
                            global $product;
   					    ?>
                        <div class="item">
                            <div class="item-inner">
                               <div class="item-img">
                                  <div class="item-img-info">
                                     <a href="<?php the_permalink(); ?>" title="Retis lapen casen" class="product-image">
                                        <?php
                                    	/**
                                    	 * woocommerce_before_shop_loop_item_title hook.
                                    	 *
                                    	 * @hooked woocommerce_show_product_loop_sale_flash - 10
                                    	 * @hooked woocommerce_template_loop_product_thumbnail - 10
                                    	 */
                                    	do_action( 'woocommerce_before_shop_loop_item_title' ); 
                                        ?>
                                     </a>
                                     <div class="item-box-hover">
                                        <div class="box-inner">
                                           <div class="product-detail-bnt"><a class="button detail-bnt"><span><?php _e( 'Quick View', 'flipmart' ); ?></span></a></div>
                                           <?php 
                                                //Wishlist Shortcode
                                                if ( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) || shortcode_exists( 'yith_compare_button' ) ) {
                                                    
                                                    //Wrapper
                                                    echo '<div class="actions"><span class="add-to-links">';
                                                        
                                                        ?>
                                                        <a href="<?php echo esc_url( add_query_arg( 'add_to_wishlist', get_the_ID() ) )?>" rel="nofollow" data-product-id="<?php echo get_the_ID() ?>" data-product-type="<?php echo $product->get_type(); ?>" class="link-wishlist" >
                                                            <span><?php _e( 'Add to Wishlist', 'flipmart' ); ?></span>
                                                        </a>
                                                        <?php 
                                                        
                                                        //Compare Button
                                                        if ( shortcode_exists( 'yith_compare_button' ) ) {
                                                            echo do_shortcode( '[yith_compare_button container="no"]' );
                                                        }
                                                    
                                                    //Wrapper End
                                                    echo '</span></div>';
                                                }
                                                
                                                
                                                
                                                //Add To Cart
                                                woocommerce_template_loop_add_to_cart();
                                           ?>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="item-info">
                                  <div class="info-inner">
                                     <div class="item-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> </div>
                                     <div class="item-content">
                                        <?php 
                                            //Rating
                                            woocommerce_template_loop_rating(); 
                                            
                                            //Price
                                            woocommerce_template_loop_price();
                                        ?>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
        			<?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

<?php endif;

wp_reset_postdata();
