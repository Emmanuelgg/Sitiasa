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

<div class="shopping-cart">
    <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
    	<div class="shopping-cart-table ">
            <div class="table-responsive">
                <?php do_action( 'woocommerce_before_cart_table' ); ?>
            	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents table">
            		<thead>
            			<tr>
            				<th class="cart-romove item"><?php _e( 'Remove', 'flipmart' ); ?></th>
            				<th class="cart-description item"><?php _e( 'Image', 'flipmart' ); ?></th>
            				<th class="cart-product-name item"><?php _e( 'Product', 'flipmart' ); ?></th>
            				<th class="cart-sub-total item"><?php _e( 'Price', 'flipmart' ); ?></th>
            				<th class="cart-qty item"><?php _e( 'Quantity', 'flipmart' ); ?></th>
            				<th class="cart-total last-item"><?php _e( 'Total', 'flipmart' ); ?></th>
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
            
            						<td class="romove-item">
                                        <?php
            								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            									'woocommerce_cart_item_remove_link',
            									sprintf(
            										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fa fa-trash-o"></i></a>',
            										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
            										esc_html__( 'Remove this item', 'flipmart' ),
            										esc_attr( $product_id ),
            										esc_attr( $_product->get_sku() )
            									),
            									$cart_item_key
            								);
            							?>
            						</td>
            
            						<td class="cart-image">
                                        <?php
                						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(array( 100, 100 )), $cart_item, $cart_item_key );
                
                						if ( ! $product_permalink ) {
                							echo $thumbnail; // PHPCS: XSS ok.
                						} else {
                							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                						}
                						?>
            						</td>
            
            						<td class="cart-product-name-info" data-title="<?php esc_attr_e( 'Product', 'flipmart' ); ?>">
            							<h4 class='cart-product-description'>
                                            <?php 
                                                if ( ! $product_permalink ) {
                        							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                        						} else {
                        							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                        						}
                                            ?>
                                        </h4>
                                        <?php 
                                            $rating_count = $_product->get_rating_count();
                                            $review_count = $_product->get_review_count();
                                            $average      = $_product->get_average_rating();
                                            if ( $rating_count > 0 ) :
                                                echo '<div class="rating-reviews">'. wc_get_rating_html( $average, $rating_count ) .'</div>';
                                            endif;
                                        
                                            // Meta data
            								echo '<div class="cart-product-info">' . wc_get_formatted_cart_item_data( $cart_item ) .'</div>';
                                            
                                            // Backorder notification.
                    						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                    							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'flipmart' ) . '</p>', $product_id ) );
                    						}
                                        ?>
            						</td>
            
            						<td class="cart-product-sub-total" data-title="<?php esc_attr_e( 'Price', 'flipmart' ); ?>">
            							<?php
            								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
            							?>
            						</td>
            
            						<td class="cart-product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'flipmart' ); ?>">
            							<div class="quant-input">
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
                                        </div>
            						</td>
            
            						<td class="cart-product-grand-total" data-title="<?php esc_attr_e( 'Total', 'flipmart' ); ?>">
            							<?php
            								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
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
            			<tr>
            				<td colspan="6" class="actions">
                                <div class="shopping-cart-btn">
        							<span class="">
                                        <a href="<?php echo esc_url( wc_get_checkout_url() );?>" class="btn btn-upper btn-primary outer-left-xs">
                                        	<?php esc_html_e( 'Proceed to checkout', 'flipmart' ); ?>
                                        </a>
                                        <button type="submit" class="btn btn-upper btn-primary pull-right outer-right-xs" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'flipmart' ); ?>"><?php esc_html_e( 'Update cart', 'flipmart' ); ?></button>
        							</span>
        						</div><!-- /.shopping-cart-btn -->
                                
            					<?php do_action( 'woocommerce_cart_actions' ); ?>
            
            					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
            				</td>
            			</tr>
                    </tfoot>
                    
        			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
                    
            	</table>
                <?php do_action( 'woocommerce_after_cart_table' ); ?>
             </div>
        </div>
    </form>
    
    
    <div class="col-md-4 col-sm-12 estimate-ship-tax">
        <?php woocommerce_shipping_calculator(); ?>
    </div>
    
    <div class="col-md-4 col-sm-12 estimate-ship-tax">
        <?php if ( wc_coupons_enabled() ) { ?>
            <?php do_action( 'woocommerce_cart_contents' ); ?>
            	<form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
                    <table class="table">
                		<thead>
                			<tr>
                				<th>
                					<span class="estimate-title"><?php echo esc_html__( 'Discount Code', 'flipmart' ); ?></span>
                					<p><?php echo esc_html__( 'Enter your coupon code if you have one..', 'flipmart' ); ?></p>
                				</th>
                			</tr>
                		</thead>
                		<tbody>
            				<tr>
            					<td>
            						<div class="form-group">
                                        <input type="text" name="coupon_code" class="form-control unicase-form-control text-input" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'flipmart' ); ?>" /> 
            						</div>
            						<div class="clearfix pull-right">
                                        <input type="submit" class="btn-upper btn btn-primary" name="apply_coupon" value="<?php esc_attr_e( 'Apply Coupon', 'flipmart' ); ?>" />
            						</div>
            					</td>
            				</tr>
                		</tbody>
                	</table>
                    <?php do_action( 'woocommerce_cart_actions' ); ?>
                    <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                </form>
            <?php do_action( 'woocommerce_after_cart_contents' ); ?>
        <?php } ?>
    </div>
    
    <div class="col-md-4 col-sm-12 cart-shopping-total">
        <?php do_action( 'woocommerce_cart_collaterals' ); ?>
    </div>
    <div class="clearfix"></div>
</div>
<?php do_action( 'woocommerce_after_cart' ); ?>

