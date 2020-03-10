<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
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

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_edit_account_form' ); ?>

<div class="main-container col1-layout">
    <div  class="main">
        <div class="multiple-checkout">
            <div class="table-responsive">
                <form class="woocommerce-EditAccountForm edit-account register-form outer-top-xs" action="" method="post">
            
                	<?php do_action( 'woocommerce_edit_account_form_start' ); ?>
                    
                    <div class="page-title_multi">
                      <h2><?php _e( 'Account Details', 'flipmart' ); ?></h2>
                    </div>
                    
                    <div class="addresses">
                        <fieldset class="group-select">
                            <div class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first form-group">
                                <label for="account_first_name" class="info-title"><?php _e( 'First name', 'flipmart' ); ?> <span class="required">*</span></label>
                        		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text input-text" name="account_first_name" id="account_first_name" value="<?php echo esc_attr( $user->first_name ); ?>" />
                        	</div>
                        	<div class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last form-group">
                        		<label for="account_last_name" class="info-title"><?php _e( 'Last name', 'flipmart' ); ?> <span class="required">*</span></label>
                        		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text input-text" name="account_last_name" id="account_last_name" value="<?php echo esc_attr( $user->last_name ); ?>" />
                        	</div>
                        	<div class="clear"></div>
                        
                        	<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-group">
                        		<label for="account_email" class="info-title"><?php _e( 'Email address', 'flipmart' ); ?> <span class="required">*</span></label>
                        		<input type="email" class="woocommerce-Input woocommerce-Input--email input-text input-text" name="account_email" id="account_email" value="<?php echo esc_attr( $user->user_email ); ?>" />
                        	</div>
                            
                            <div class="page-title_multi">
                              <h2><?php _e( 'Password change', 'flipmart' ); ?></h2>
                            </div>   
                            <div class="clearfix"></div>
                    		<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-group">
                    			<label for="password_current" class="info-title"><?php _e( 'Current password (leave blank to leave unchanged)', 'flipmart' ); ?></label>
                    			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text input-text" name="password_current" id="password_current" />
                    		</div>
                    		<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-group">
                    			<label for="password_1" class="info-title"><?php _e( 'New password (leave blank to leave unchanged)', 'flipmart' ); ?></label>
                    			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text input-text" name="password_1" id="password_1" />
                    		</div>
                    		<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-group">
                    			<label for="password_2" class="info-title"><?php _e( 'Confirm new password', 'flipmart' ); ?></label>
                    			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text input-text" name="password_2" id="password_2" />
                    		</div>
                        </fieldset>
                    </div>
                	
                	
                	<div class="clearfix"></div>
                
                	<?php do_action( 'woocommerce_edit_account_form' ); ?>
                
                	<div class="buttons-set">
                		<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
                		<button type="submit" class="woocommerce-Button button" name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'flipmart' ); ?>"><?php esc_html_e( 'Save changes', 'flipmart' ); ?></button>
                        <input type="hidden" name="action" value="save_account_details" />
                	</div>
                
                	<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<?php do_action( 'woocommerce_after_edit_account_form' ); ?>
