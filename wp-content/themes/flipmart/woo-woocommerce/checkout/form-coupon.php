<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.4
 */

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}

?>
<div class="woocommerce-billing-fields panel checkout-step-0">
    <div class="step-title">
        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseCoupons">
            <span class="number">C</span>
            <h3 class="one_page_heading"><?php echo __( 'Have a coupon?', 'flipmart' ); ?></h3>
        </a>
    </div>
    
    <div id="collapseCoupons" class="panel-collapse collapse">
		<div class="shipping_address panel-body"> 
            <form class="" method="post">
    
            	<p class="form-row form-row-first form-group">
            		<input type="text" name="coupon_code" class="input-text" placeholder="<?php esc_attr_e( 'Coupon code', 'flipmart' ); ?>" id="coupon_code" value="" />
            	</p>
            
            	<p class="form-row form-row-last buttons-set11">
            		<input type="submit" class="button pull-right" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'flipmart' ); ?>" />
            	</p>
            
            	<div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
