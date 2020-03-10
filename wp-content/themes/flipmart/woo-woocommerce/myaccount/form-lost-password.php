<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.2
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>
<div class="sign-in-page sign-in-pages container">
    <div class="register-form sign-in">
        <form method="post" class="woocommerce-ResetPassword lost_reset_password">
    
        	<h4><?php echo apply_filters( 'woocommerce_lost_password_message', esc_html__( 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'flipmart' ) ); ?></h4>
        
        	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first form-group">
        		<label for="user_login" class="info-title"><?php _e( 'Username or email', 'flipmart' ); ?></label>
        		<input class="woocommerce-Input woocommerce-Input--text form-control unicase-form-control text-input" type="text" name="user_login" id="user_login" />
        	</p>
        
        	<div class="clearfix"></div>
        
        	<?php do_action( 'woocommerce_lostpassword_form' ); ?>
        
        	<p class="woocommerce-form-row form-row">
        		<input type="hidden" name="wc_reset_password" value="true" />
        		<input type="submit" class="woocommerce-Button btn-upper btn btn-primary checkout-page-button" value="<?php esc_attr_e( 'Reset password', 'flipmart' ); ?>" />
        	</p>
        
        	<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>
        
        </form>
    </div>
</div>