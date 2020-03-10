<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
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
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<div class="sign-in-page sign-in-pages container">
    <div class="register-form">
    
        <?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

        <div class="row" id="customer_login">
        
        	<div class="col-md-6 col-sm-6 sign-in">
            
        <?php else: ?>
        
            <div class="row" id="customer_login">
            
                <div class="col-md-12 col-sm-12 sign-in">
                
        <?php endif; ?>
        
        		<h4><?php _e( 'Login', 'flipmart' ); ?></h4>
                <p class=""><?php _e( 'Hello, Welcome to your account.', 'flipmart' ); ?></p>
                
        		<form class="woocomerce-form woocommerce-form-login login register-form outer-top-xs" method="post">
        
        			<?php do_action( 'woocommerce_login_form_start' ); ?>
        
        			<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-group">
        				<label for="username" class="info-title"><?php _e( 'Username or email address', 'flipmart' ); ?> <span class="required">*</span></label>
        				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control unicase-form-control" name="username" id="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>" />
        			</div>
                    <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="forgot-password pull-right"><?php _e( 'Lost your password?', 'flipmart' ); ?></a>
        			<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-group">
        				<label for="password" class="info-title"><?php _e( 'Password', 'flipmart' ); ?> <span class="required">*</span></label>
        				<input class="woocommerce-Input woocommerce-Input--text input-text form-control unicase-form-control" type="password" name="password" id="password" />
        			</div>
        
        			<?php do_action( 'woocommerce_login_form' ); ?>
                    
                    <div class="radio outer-xs">
                        <span class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php _e( 'Remember me', 'flipmart' ); ?></span>
        				</span>
            		</div>
                    
        			<div class="form-row">
        				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                        <button type="submit" class="woocommerce-Button btn-upper btn btn-primary checkout-page-button" name="login" value="<?php esc_attr_e( 'Login', 'flipmart' ); ?>"><?php esc_html_e( 'Login', 'flipmart' ); ?></button>
        			</div>
        			
        			<?php do_action( 'woocommerce_login_form_end' ); ?>
        
        		</form>
        
        <?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
        
        	</div>
        
        	<div class="col-md-6 col-sm-6 create-new-account">
        
        		<h4><?php _e( 'Register', 'flipmart' ); ?></h4>
                <p class=""><?php _e( 'Create your new account.', 'flipmart' ); ?></p>
                
        		<form method="post" class="register">
        
        			<?php do_action( 'woocommerce_register_form_start' ); ?>
        
        			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
        
        				<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-group">
        					<label for="reg_username" class="info-title"><?php _e( 'Username', 'flipmart' ); ?> <span class="required">*</span></label>
        					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control unicase-form-control text-input" name="username" id="reg_username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>" />
        				</div>
        
        			<?php endif; ?>
        
        			<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-group">
        				<label for="reg_email" class="info-title"><?php _e( 'Email address', 'flipmart' ); ?> <span class="required">*</span></label>
        				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text form-control unicase-form-control text-input" name="email" id="reg_email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( $_POST['email'] ) : ''; ?>" />
        			</div>
        
        			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
        
        				<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-group">
        					<label for="reg_password" class="info-title"><?php _e( 'Password', 'flipmart' ); ?> <span class="required">*</span></label>
        					<input type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control unicase-form-control text-input" name="password" id="reg_password" />
        				</div>
        
        			<?php else : ?>

        				<p><?php esc_html_e( 'A password will be sent to your email address.', 'flipmart' ); ?></p>
        
        			<?php endif; ?>
        
      		  
        			<?php do_action( 'woocommerce_register_form' ); ?>
        
        			<p class="woocomerce-FormRow form-row">
        				<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
        				<button type="submit" class="woocommerce-Button btn-upper btn btn-primary checkout-page-button" name="register" value="<?php esc_attr_e( 'Register', 'flipmart' ); ?>"><?php esc_html_e( 'Register', 'flipmart' ); ?></button>
        			</p>
        
        			<?php do_action( 'woocommerce_register_form_end' ); ?>
        
        		</form>
        
        	</div>
        
        </div>
        
        <?php else: ?>
            
            </div>
        </div>
        
        <?php endif; ?>
    </div>
</div>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
