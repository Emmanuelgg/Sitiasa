<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>
<div class="cart container">
    <div class="table-responsive shopping-cart-tbl">
        <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
        	<fieldset>
                <?php do_action( 'woocommerce_before_cart_table' ); ?>
            	<table class="data-table cart-table table-striped table-responsive" id="shopping-cart-table">
            		<thead>
            			<tr class="first last">
                            <th rowspan="1">&nbsp;</th>
                            <th rowspan="1"><span class="nobr"><?php _e( 'Product Name', 'flipmart' ); ?></span></th>
                            <th rowspan="1"></th>
                            <th class="a-center" colspan="1"><span class="nobr"><?php _e( 'Unit Price', 'flipmart' ); ?></span></th>
                            <th rowspan="1" class="a-center"><?php _e( 'Qty', 'flipmart' ); ?></th>
                            <th class="a-center" colspan="1"><?php _e( 'Subtotal', 'flipmart' ); ?></th>
                            <th rowspan="1" class="a-center">&nbsp;</th>
            			</tr>
            		</thead>
                    
            		<tbody>
            			<?php do_action( 'woocommerce_before_cart_contents' ); ?>
            
            			<?php
            			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
            				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
            
            				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
            					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
            					?>
            					<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
                                    
                                    <td class="image hidden-table">
                                        <?php
                						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(array( 75,75 )), $cart_item, $cart_item_key );
                
                						if ( ! $product_permalink ) {
                							echo $thumbnail; // PHPCS: XSS ok.
                						} else {
                							printf( '<a href="%s" class="product-image">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                						}
                						?>
            						</td>
                                    
                                    <td class="cart-product-name-info" data-title="<?php esc_attr_e( 'Product', 'flipmart' ); ?>">
            							<h2 class="product-name">
                                            <?php 
                                                if ( ! $product_permalink ) {
                        							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                        						} else {
                        							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                        						}
                                            ?>
                                        </h2>
                                        <?php 
                                            $rating_count = $_product->get_rating_count();
                                            $review_count = $_product->get_review_count();
                                            $average      = $_product->get_average_rating();
                                            if ( $rating_count > 0 ) :
                                                echo '<div class="rating-reviews">'. wc_get_rating_html( $average, $rating_count ) .'</div>';
                                            endif;
                                            
                                            do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );
                                            
                                            // Meta data
            								echo '<div class="cart-product-info">' . wc_get_formatted_cart_item_data( $cart_item ) .'</div>';
                                            
                                            // Backorder notification.
                    						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                    							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'flipmart' ) . '</p>', $product_id ) );
                    						}
                                        ?>
            						</td>
                                    
                                    <td class="a-center hidden-table">
                                       <a href="<?php echo $product_permalink; ?>" class="edit-bnt" title="Edit item parameters"></a>
                                    </td>
                                    
                                    <td class="hidden-table" data-title="<?php esc_attr_e( 'Price', 'flipmart' ); ?>">
            							<?php
            								echo '<span class="cart-price"><span class="price">'. apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ) .'</span></span>';
            							?>
            						</td>
                                    
                                    <td class="a-center movewishlist" data-title="<?php esc_attr_e( 'Quantity', 'flipmart' ); ?>">
            							<?php
                						if ( $_product->is_sold_individually() ) {
                							$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                						} else {
                							$product_quantity = woocommerce_quantity_input(
                								array(
                									'input_name'   => "cart[{$cart_item_key}][qty]",
                									'input_value'  => $cart_item['quantity'],
                									'max_value'    => $_product->get_max_purchase_quantity(),
                									'min_value'    => '0',
                									'product_name' => $_product->get_name(),
                								),
                								$_product,
                								false
                							);
                						}
                
                						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                						?>
            						</td>
                                    
                                    <td class="movewishlist" data-title="<?php esc_attr_e( 'Total', 'flipmart' ); ?>">
            							<?php
            								echo '<span class="cart-price"><span class="price">'. apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ) .'</span></span>';
            							?>
            						</td>
                                    
            						<td class="a-center last">
                                        <?php
                                           	// @codingStandardsIgnoreLine
                                            echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
            									'<a href="%s"  class="button remove-item" aria-label="%s" data-product_id="%s" data-product_sku="%s"><span><span>%s</span></span></a>',
            									esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
            									__( 'Remove this item', 'flipmart' ),
            									esc_attr( $product_id ),
            									esc_attr( $_product->get_sku() ),
                                                __( 'Remove this item', 'flipmart' )
            								), $cart_item_key );
            							?>
            						</td>
            					</tr>
            					<?php
            				}
            			}
            			?>
            		</tbody>
                    
                    <?php do_action( 'woocommerce_cart_contents' ); ?>
                    
                    <tfoot>
                         <tr class="first last">
                            <td colspan="7" class="last">
                               <a href="<?php echo esc_url( wc_get_checkout_url() );?>"><button type="button" title="<?php esc_attr_e( 'Continue Shopping', 'flipmart' ); ?>" class="button btn-continue" onClick=""><span><span><?php _e( 'Continue Shopping', 'flipmart' ); ?></span></span></button></a>
                               <button type="submit" class="button btn-update" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'flipmart' ); ?>"><span><span><?php esc_html_e( 'Update cart', 'flipmart' ); ?></span></span></button>
                               <?php do_action( 'woocommerce_cart_actions' ); ?>
                               <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                            </td>
                         </tr>
                    </tfoot>
                    
                    <?php do_action( 'woocommerce_after_cart_contents' ); ?>
                    
            	</table>
                
                <?php do_action( 'woocommerce_after_cart_table' ); ?>
                
             </fieldset>
        </form>
     </div> 
    <div class="cart-collaterals">
        <div class="row">
            <div class="col-sm-4">
                <?php woocommerce_shipping_calculator(); ?>
            </div>
            <div class="col-sm-4">
                <?php if ( wc_coupons_enabled() ) { ?>
                    <?php do_action( 'woocommerce_cart_contents' ); ?>
                    <div class="discount">
                        <h3><?php echo esc_html__( 'Discount Codes', 'flipmart' ); ?></h3>
                    	<form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post" id="discount-coupon-form" >
                            <?php if ( wc_coupons_enabled() ) { ?>
                                <label for="coupon_code"><?php echo esc_html__( 'Enter your coupon code if you have one.', 'flipmart' ); ?></label>
                                <input type="text" name="coupon_code" class="input-text fullwidth" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'flipmart' ); ?>" />
                            <?php } ?>
                            <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Update cart', 'flipmart' ); ?>"><span><?php esc_attr_e( 'Apply Coupon', 'flipmart' ); ?></span></button>
                            <?php do_action( 'woocommerce_cart_actions' ); ?>
                            <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                        </form>
                     </div>
                    <?php do_action( 'woocommerce_after_cart_contents' ); ?>
                <?php } ?>
            </div>
            <div class="col-sm-4">
                <?php
            		/**
            		 * Cart collaterals hook.
            		 *
            		 * @hooked woocommerce_cross_sell_display
            		 * @hooked woocommerce_cart_totals - 10
            		 */
            		do_action( 'woocommerce_cart_collaterals' );
            	?>
            </div>
        </div>
    </div>
    <?php do_action( 'woocommerce_after_cart' ); ?>
</div>