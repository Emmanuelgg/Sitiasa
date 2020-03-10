<?php
/**
 * Order tracking form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/form-tracking.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $post;
?>
<div class="track-order-page">

    <div class="row">
        <div class="col-md-12">
            <h2 class="heading-title"><?php _e( 'Track your Order', 'flipmart' ); ?></h2>
            <span class="title-tag inner-top-ss"><?php _e( 'To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.', 'flipmart' ); ?></span>
        </div>
    </div>
    
    <form action="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" method="post" class="track_order register-form outer-top-xs">
        
    	<div class="form-row form-row-first form-group">
            <label for="orderid" class="info-title"><?php _e( 'Order ID', 'flipmart' ); ?></label> 
            <input class="input-text form-control unicase-form-control text-input" type="text" name="orderid" id="orderid" value="<?php echo isset( $_REQUEST['orderid'] ) ? esc_attr( $_REQUEST['orderid'] ) : ''; ?>" placeholder="<?php esc_attr_e( 'Found in your order confirmation email.', 'flipmart' ); ?>" />
        </div>
    	<div class="form-row form-row-last form-group">
            <label for="order_email" class="info-title"><?php _e( 'Billing email', 'flipmart' ); ?></label> 
            <input class="input-text form-control unicase-form-control text-input" type="text" name="order_email" id="order_email" value="<?php echo isset( $_REQUEST['order_email'] ) ? esc_attr( $_REQUEST['order_email'] ) : ''; ?>" placeholder="<?php esc_attr_e( 'Email you used during checkout.', 'flipmart' ); ?>" />
        </div>
    	<div class="clear"></div>
    
    	<p class="form-row"><input type="submit" class="btn-upper btn btn-primary checkout-page-button" name="track" value="<?php esc_attr_e( 'Track', 'flipmart' ); ?>" /></p>
    	<?php wp_nonce_field( 'woocommerce-order_tracking', 'woocommerce-order-tracking-nonce' ); ?>
    
    </form>
</div>
