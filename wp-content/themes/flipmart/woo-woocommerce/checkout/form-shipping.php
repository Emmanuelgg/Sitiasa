<?php
/**
 * Checkout shipping information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-shipping.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 * @global WC_Checkout $checkout
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="woocommerce-shipping-fields woocommerce-billing-fields panel checkout-step-02">
	<?php if ( true === WC()->cart->needs_shipping_address() ) : ?>
        
        <div class="step-title" id="ship-to-different-address">
	        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
                <span class="number">2</span>
                <h3 class="one_page_heading"><?php _e( 'Ship to a different address?', 'flipmart' ); ?></h3>
	        </a>
        </div>
        
        <div id="collapseTwo" class="panel-collapse collapse">
    		<div class="shipping_address panel-body">
            
                <div class="radio radio-checkout-unicase">
                    <input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" <?php checked( apply_filters( 'woocommerce_ship_to_different_address_checked', 'shipping' === get_option( 'woocommerce_ship_to_destination' ) ? 1 : 0 ), 1 ); ?> type="checkbox" name="ship_to_different_address" value="1" /> 
                    <label class="radio-button guest-check" for="guest"><?php _e( 'Ship to a different address?', 'flipmart' ); ?></label>
                </div>
                
    			<?php do_action( 'woocommerce_before_checkout_shipping_form', $checkout ); ?>
    
    				<?php
    					$fields = $checkout->get_checkout_fields( 'shipping' );
    
    					foreach ( $fields as $key => $field ) {
    						woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
    					}
    				?>
    
    			<?php do_action( 'woocommerce_after_checkout_shipping_form', $checkout ); ?>
    
    		</div>
        </div>
    <?php else: ?>
        <div class="step-title">
        	<a data-toggle="collapse" class="collapsed" data-parent="#accordion">
                <span class="number">2</span>
                <h3 class="one_page_heading"><?php _e( 'No shipping details', 'flipmart' ); ?></h3>
	        </a>
        </div>
	<?php endif; ?>
</div>

<div class="woocommerce-additional-fields woocommerce-billing-fields panel checkout-step-03">

	<?php do_action( 'woocommerce_before_order_notes', $checkout ); ?>

	<?php if ( apply_filters( 'woocommerce_enable_order_notes_field', 'yes' === get_option( 'woocommerce_enable_order_comments', 'yes' ) ) ) : ?>
            
        <div class="step-title">
	        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
                <span class="number">3</span>
                <h3 class="one_page_heading"><?php _e( 'Additional information', 'flipmart' ); ?></h3>
	        </a>
        </div>
        
        <div id="collapseThree" class="panel-collapse collapse">    
    		<div class="woocommerce-additional-fields__field-wrapper panel-body">
    			<?php foreach ( $checkout->get_checkout_fields( 'order' ) as $key => $field ) : ?>
    				<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
    			<?php endforeach; ?>
    		</div>
        </div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_order_notes', $checkout ); ?>
</div>
