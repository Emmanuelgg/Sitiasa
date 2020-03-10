<?php
/**
 * Checkout login form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

if ( is_user_logged_in() || 'no' === get_option( 'woocommerce_enable_checkout_login_reminder' ) ) {
	return;
}

?>
<div class="woocommerce-billing-fields panel checkout-step-1">
    <div class="step-title">
        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseLogin">
            <span class="number">L</span>
            <h3 class="one_page_heading"><?php echo __( 'Returning customer? Click here to login', 'flipmart' ); ?></h3>
        </a>
    </div>
    
    <div id="collapseLogin" class="panel-collapse collapse">
		<div class="shipping_address panel-body"> 
            <?php 
                woocommerce_login_form(
                	array(
                		'message'  => esc_html__( 'If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing section.', 'flipmart' ),
                		'redirect' => wc_get_checkout_url(),
                		'hidden'   => true,
                	)
                );
            ?>
        </div>
    </div>
</div>