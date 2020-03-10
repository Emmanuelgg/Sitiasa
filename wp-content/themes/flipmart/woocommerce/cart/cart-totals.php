<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     2.3.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">

	<?php do_action( 'woocommerce_before_cart_totals' ); ?>

	<table class="shop_table shop_table_responsive table text-left">
        <thead>
            <tr>
                <th>
        			<div class="cart-sub-total row">
                        <div class="col-sm-4"><?php _e( 'Subtotal', 'flipmart' ); ?></div>
        				<div data-title="<?php esc_attr_e( 'Subtotal', 'flipmart' ); ?>" class="col-sm-8" ><?php wc_cart_totals_subtotal_html(); ?></div>
        			</div>
                    
                    <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
            			<div class="cart-sub-total row cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                            <div class="col-sm-4"><?php wc_cart_totals_coupon_label( $coupon ); ?></div>
            				<div data-title="<?php echo esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ); ?>" class="col-sm-8"><?php wc_cart_totals_coupon_html( $coupon ); ?></div>
            			</div>
            		<?php endforeach; ?>
                    
                    <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

            			<?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>
            
            			<?php wc_cart_totals_shipping_html(); ?>
            
            			<?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>
            
            		<?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>

            			<div class="shipping cart-grand-total row">
            				<div class="col-sm-4"><?php _e( 'Shipping', 'flipmart' ); ?></div>
            				<div data-title="<?php esc_attr_e( 'Shipping', 'flipmart' ); ?>"><?php woocommerce_shipping_calculator(); ?></div>
            			</div>
            
            		<?php endif; ?>
            
            		<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
            			<div class="fee">
            				<div class="col-sm-4"><?php echo esc_html( $fee->name ); ?></div>
            				<div class="col-sm-8" data-title="<?php echo esc_attr( $fee->name ); ?>"><?php wc_cart_totals_fee_html( $fee ); ?></div>
            			</div>
            		<?php endforeach; ?>
            
            		<?php if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) :
            			$taxable_address = WC()->customer->get_taxable_address();
            			$estimated_text  = WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping()
            					? sprintf( ' <small>' . __( '(estimated for %s)', 'flipmart' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] )
            					: '';
            
            			if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
            				<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
            					<div class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
            						<div class="col-sm-4"><?php echo esc_html( $tax->label ) . $estimated_text; ?></div>
            						<div class="col-sm-8" data-title="<?php echo esc_attr( $tax->label ); ?>"><?php echo wp_kses_post( $tax->formatted_amount ); ?></div>
            					</div>
            				<?php endforeach; ?>
            			<?php else : ?>
            				<div class="tax-total">
            					<div class="col-sm-4"><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; ?></div>
            					<div class="col-sm-8" data-title="<?php echo esc_attr( WC()->countries->tax_or_vat() ); ?>"><?php wc_cart_totals_taxes_total_html(); ?></div>
            				</div>
            			<?php endif; ?>
            		<?php endif; ?>
            
            		<?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>
            
            		<div class="order-total cart-grand-total row">
                        <div class="col-sm-4"><?php _e( 'Total', 'flipmart' ); ?></div>
            			<div class="col-sm-8" data-title="<?php esc_attr_e( 'Total', 'flipmart' ); ?>"><?php wc_cart_totals_order_total_html(); ?></div>
            		</div>
                    
        		</th>
            </tr>
            
    		<?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>
        </thead>
        
        <tbody>
			<tr>
				<td>
					<div class="cart-checkout-btn pull-right">
                        <a href="<?php echo esc_url( wc_get_checkout_url() );?>" class="btn btn-primary checkout-btn">
                        	<?php esc_html_e( 'Proceed to checkout', 'flipmart' ); ?>
                        </a>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
    
	<?php do_action( 'woocommerce_after_cart_totals' ); ?>

</div>
