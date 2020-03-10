<?php
/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
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
<div class="woocommerce-billing-fields panel checkout-step-01 section allow active">

    <div class="step-title">
        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
        
            <?php if ( wc_ship_to_billing_address_only() && WC()->cart->needs_shipping() ) : ?>
            
                <span class="number">1</span>
        		<h3 class="one_page_heading"><?php _e( 'Billing &amp; Shipping', 'flipmart' ); ?></h3>
        
        	<?php else : ?>
            
                <span class="number">1</span>
        		<h3 class="one_page_heading"><?php _e( 'Billing details', 'flipmart' ); ?></h3>
        
        	<?php endif; ?>
            
        </a>
    </div>
    
    <div id="collapseOne" class="panel-collapse collapse in">
    
    	<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>
        
        	<div class="woocommerce-billing-fields__field-wrapper group-select panel-body">
        		<?php
        			$fields = $checkout->get_checkout_fields( 'billing' );
        
        			foreach ( $fields as $key => $field ) {
        				woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
        			}
        		?>
        	</div>
    
    	<?php do_action( 'woocommerce_after_checkout_billing_form', $checkout ); ?>
        
        <?php if ( ! is_user_logged_in() && $checkout->is_registration_enabled() ) : ?>
        
        	<div class="woocommerce-account-fields">
            
        		<?php if ( ! $checkout->is_registration_required() ) : ?>
        
        			<p class="form-row form-row-wide create-account radio radio-checkout-unicase">
        				<input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" <?php checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true ); ?> type="checkbox" name="createaccount" value="1" />
        				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox radio-button guest-check"><?php _e( 'Create an account?', 'flipmart' ); ?></label>
        			</p>
        
        		<?php endif; ?>
        
        		<?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>
        
        		<?php if ( $checkout->get_checkout_fields( 'account' ) ) : ?>
        
        			<div class="create-account group-select">
        				<?php foreach ( $checkout->get_checkout_fields( 'account' ) as $key => $field ) : ?>
        					<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
        				<?php endforeach; ?>
        				<div class="clearfix"></div>
        			</div>
        
        		<?php endif; ?>
        
        		<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>
                
        	</div>
        <?php endif; ?>
    </div>
</div>