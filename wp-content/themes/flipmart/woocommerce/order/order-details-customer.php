<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
?>

<section class="woocommerce-customer-details">

	<div class="panel-heading">
    	<h4 class="unicase-checkout-title"><?php _e( 'Customer details', 'flipmart' ); ?></h4>
    </div>
    
    <div class="form-group">
        <table class="woocommerce-table woocommerce-table--customer-details shop_table customer_details table">
    
    		<?php if ( $order->get_customer_note() ) : ?>
    			<tr>
    				<th><?php _e( 'Note:', 'flipmart' ); ?></th>
    				<td><?php echo wptexturize( $order->get_customer_note() ); ?></td>
    			</tr>
    		<?php endif; ?>
    
    		<?php if ( $order->get_billing_email() ) : ?>
    			<tr>
    				<th><?php _e( 'Email:', 'flipmart' ); ?></th>
    				<td><?php echo esc_html( $order->get_billing_email() ); ?></td>
    			</tr>
    		<?php endif; ?>
    
    		<?php if ( $order->get_billing_phone() ) : ?>
    			<tr>
    				<th><?php _e( 'Phone:', 'flipmart' ); ?></th>
    				<td><?php echo esc_html( $order->get_billing_phone() ); ?></td>
    			</tr>
    		<?php endif; ?>
    
    		<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>
    
    	</table>
    </div>
    
	<?php if ( $show_shipping ) : ?>

	<section class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses row addresses">

		<div class="woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-md-6 col-sm-6">

			<?php endif; ?>
            
            <div class="panel-heading woocommerce-column__title">
            	<h4 class="unicase-checkout-title"><?php _e( 'Billing address', 'flipmart' ); ?></h4>
            </div>
	
			<address>
				<?php echo wp_kses_post( $order->get_formatted_billing_address( __( 'N/A', 'flipmart' ) ) ); ?>
			</address>

			<?php if ( $show_shipping ) : ?>

		</div><!-- /.col-1 -->

		<div class="woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-md-6 col-sm-6">

			<div class="panel-heading woocommerce-column__title">
            	<h4 class="unicase-checkout-title"><?php _e( 'Shipping address', 'flipmart' ); ?></h4>
            </div>
			
            <address>
				<?php echo wp_kses_post( $order->get_formatted_shipping_address( __( 'N/A', 'flipmart' ) ) ); ?>
			</address>

		</div><!-- /.col-2 -->

	</section><!-- /.col2-set -->

	<?php endif; ?>

</section>
