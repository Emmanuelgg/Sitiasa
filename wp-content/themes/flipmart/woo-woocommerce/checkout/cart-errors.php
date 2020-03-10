<?php
/**
 * Cart errors page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/cart-errors.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="shopping-cart">
    <div class="cart-shopping-total">
        <table cellspacing="0" class="table">
            <thead>
                <tr>
                    <th>
            			<div class="cart-sub-total row">
                            <div class="col-sm-12 text-center"><?php _e( 'There are some issues with the items in your cart (shown above). Please go back to the cart page and resolve these issues before checking out.', 'flipmart' ) ?></div>
            			</div>
                    </th>
                </tr>
            </thead>
            <?php do_action( 'woocommerce_cart_has_errors' ); ?>
            <tbody>
    			<tr>
    				<td>
    					<div class="cart-checkout-btn text-center">
                            <a class="btn btn-primary checkout-btn" href="<?php echo esc_url( wc_get_page_permalink( 'cart' ) ); ?>"><?php _e( 'Return to cart', 'flipmart' ) ?></a>
    					</div>
    				</td>
    			</tr>
    		</tbody>
        </table>
    </div>
</div>