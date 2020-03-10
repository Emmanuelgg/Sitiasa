<?php
/**
 * My Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-address.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$customer_id = get_current_user_id();

if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
	$get_addresses = apply_filters( 'woocommerce_my_account_get_addresses', array(
		'billing' => __( 'Billing address', 'flipmart' ),
		'shipping' => __( 'Shipping address', 'flipmart' ),
	), $customer_id );
} else {
	$get_addresses = apply_filters( 'woocommerce_my_account_get_addresses', array(
		'billing' => __( 'Billing address', 'flipmart' ),
	), $customer_id );
}
?>

<div class="box-account">

    <div class="page-title">
      <h2><?php echo apply_filters( 'woocommerce_my_account_my_address_description', __( 'The following addresses will be used on the checkout page by default.', 'flipmart' ) ); ?></h2>
    </div>

    <div class="col2-set">
        <?php foreach ( $get_addresses as $name => $title ) : ?>
        
        	<div class="col-1">
                <div class="box">
                    <div class="box-title">
                        <h5><?php echo $title; ?></h5>
                        <a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address', $name ) ); ?>" class="edit"><?php _e( 'Edit', 'flipmart' ); ?></a>
                    </div>
                    <div class="box-content">
                        <?php
                			$address = wc_get_account_formatted_address( $name );
                			echo $address ? wp_kses_post( $address ) : esc_html_e( 'You have not set up this type of address yet.', 'flipmart' );
                		?>
                    </div>
                </div>
        	</div>
        
        <?php endforeach; ?>
    </div>
</div>
