<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="checkout woocommerce-checkout checkout-box">
    <div class="row">
    	<div class="col-md-12">
    		 <div class="panel-group checkout-steps" id="accordion-content">
                <?php 
                    do_action( 'woocommerce_before_checkout_form', $checkout );
    
                    // If checkout registration is disabled and not logged in, the user cannot checkout
                    if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
                    	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'flipmart' ) );
                    	return;
                    }
                ?>
              </div>  
                
              <form name="checkout" method="post" class="checkout woocommerce-checkout checkout-box" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
                
                <div class="panel-group checkout-steps" id="accordion">
                    <?php if ( $checkout->get_checkout_fields() ) : ?>
                    
                        <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
                        
            				<?php do_action( 'woocommerce_checkout_billing' ); ?>
            			
            				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
                            
                            <div class="woocommerce-billing-fields panel panel-default checkout-step-04">
                                <div class="panel-heading">
                                  <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour">
                                    	<span>4</span><?php echo esc_html__( 'Order Review', 'flipmart' )?>
                                    </a>
                                  </h4>
                                </div>
                                
                                <div id="collapseFour" class="panel-collapse collapse">
                            		<div class="shipping_address panel-body"> 
                                        <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
                        	
                                    		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
                                    
                                    	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
                                    </div>
                                </div>
                            </div>
                            
                         <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
            
            	     <?php endif; ?>
                </div>
             </form>
        </div>
    </div>
</div>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
