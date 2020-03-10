<?php
/**
 * Checkout Payment Section
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.3
 */

defined( 'ABSPATH' ) || exit;

if ( ! is_ajax() ) {
	do_action( 'woocommerce_review_order_before_payment' );
}
?>
<div id="payment" class="woocommerce-checkout-payment woocommerce-billing-fields panel checkout-step-05">
    <div class="step-title">
        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFive">
            <span class="number">5</span>
        	<h3 class="one_page_heading"><?php echo esc_html__( 'Payment Information', 'flipmart' )?></h3>
        </a>
    </div>
    
    <div id="collapseFive" class="panel-collapse collapse">
		<div class="shipping_address panel-body">
            <div class="col-md-12"> 
                <?php if ( WC()->cart->needs_payment() ) : ?>
            		<ul class="wc_payment_methods payment_methods methods form-list">
            			<?php
            			if ( ! empty( $available_gateways ) ) {
            				foreach ( $available_gateways as $gateway ) {
            					wc_get_template( 'checkout/payment-method.php', array( 'gateway' => $gateway ) );
            				}
            			} else {
            				echo '<li class="woocommerce-notice woocommerce-notice--info woocommerce-info alert alert-info">' . apply_filters( 'woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? esc_html__( 'Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'flipmart' ) : esc_html__( 'Please fill in your details above to see available payment methods.', 'flipmart' ) ) . '</li>'; // @codingStandardsIgnoreLine
            			}
            			?>
            		</ul>
            	<?php endif; ?>
            	<div class="form-row place-order buttons-set11">
            		<noscript>
            			<?php _e( 'Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'flipmart' ); ?>
            			<br/><input type="submit" class="button get-quote pull-right  alt" name="woocommerce_checkout_update_totals" value="<?php esc_attr_e( 'Update totals', 'flipmart' ); ?>" />
            		</noscript>
            
            		<?php wc_get_template( 'checkout/terms.php' ); ?>
            
            		<?php do_action( 'woocommerce_review_order_before_submit' ); ?>
            
            		<?php echo apply_filters( 'woocommerce_order_button_html', '<input type="submit" class="button get-quote pull-right alt" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '" />' ); ?>
            
            		<?php do_action( 'woocommerce_review_order_after_submit' ); ?>
            
            		<?php wp_nonce_field( 'woocommerce-process_checkout', 'woocommerce-process-checkout-nonce' ); ?>
            	</div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<?php
if ( ! is_ajax() ) {
	do_action( 'woocommerce_review_order_after_payment' );
}
