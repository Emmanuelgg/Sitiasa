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
<div class="woocommerce-billing-fields panel panel-default checkout-step-0">
    <div class="panel-heading">
       <h4 class="unicase-checkout-title">
        <a data-toggle="collapse" class="collapsed" data-parent="#accordion-content" href="#collapseCoupons">
        	<span>C</span> <?php echo esc_html__( 'Have a coupon?', 'flipmart' ); ?>
        </a>
      </h4>
    </div>
    
    <div id="collapseCoupons" class="panel-collapse collapse">
		<div class="shipping_address panel-body"> 
            
            <p><?php esc_html_e( 'If you have a coupon code, please apply it below.', 'flipmart' ); ?></p>
            
            <form class="" method="post">
    
            	<p class="form-row form-row-first">
            		<input type="text" name="coupon_code" class="input-text form-control unicase-form-control text-input" placeholder="<?php esc_attr_e( 'Coupon code', 'flipmart' ); ?>" id="coupon_code" value="" />
            	</p>
            
            	<p class="form-row form-row-last">
            		<input type="submit" class="btn btn-upper btn-primary pull-right outer-right-xs" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'flipmart' ); ?>" />
            	</p>
            
            	<div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
