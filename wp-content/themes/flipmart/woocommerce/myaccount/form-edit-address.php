<?php
/**
 * Edit address form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-address.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

$page_title = ( 'billing' === $load_address ) ? __( 'Billing address', 'flipmart' ) : __( 'Shipping address', 'flipmart' );

do_action( 'woocommerce_before_edit_account_address_form' ); ?>

<?php if ( ! $load_address ) : ?>
	<?php wc_get_template( 'myaccount/my-address.php' ); ?>
<?php else : ?>

    <div class="sign-in-page">
        <div class="col-md-12 col-sm-12 create-new-account">        
        	<form method="post" class="register-form outer-top-xs">
        
        		<h4 class="checkout-subtitle"><?php echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title, $load_address ); ?></h4>
                
        		<div class="woocommerce-address-fields">
        			<?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>
        
        			<div class="woocommerce-address-fields__field-wrapper">
        				<?php
        					foreach ( $address as $key => $field ) {
            					if( yog_helper()->is_str_contain( 'first_name', $key ) ) {
                                    $field['return'] = true;
                                    $output = woocommerce_form_field( $key, $field, wc_get_post_data_by_key( $key, $field['value'] ) );
                                    $output = str_replace( 'col-md-12', 'col-md-6', $output );
                                    echo str_replace( '</div></div>', '</div>', $output );
                                }
                                if( yog_helper()->is_str_contain( 'last_name', $key ) ) {
                                    $field['return'] = true;
                                    $output = woocommerce_form_field( $key, $field, wc_get_post_data_by_key( $key, $field['value'] ) );
                                    $output = str_replace( 'form-group', '', $output );
                                    $output = str_replace( 'col-md-12', 'col-md-6', $output );
                                    $output = str_replace( 'form-group', '', $output );
                                    $output = str_replace( 'row', '', $output );
                                    echo str_replace( '</div></div>', '</div></div></div>', $output );
                                }else {
                                    woocommerce_form_field( $key, $field, wc_get_post_data_by_key( $key, $field['value'] ) );
                                } 
            				}
        				?>
        			</div>
        
        			<?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>
        
        			<p>
        				<input type="submit" class="btn-upper btn btn-primary checkout-page-button" name="save_address" value="<?php esc_attr_e( 'Save address', 'flipmart' ); ?>" />
        				<?php wp_nonce_field( 'woocommerce-edit_address', 'woocommerce-edit-address-nonce' ); ?>
				        <input type="hidden" name="action" value="edit_address" />
        			</p>
        		</div>
        
        	</form>
        </div>
    </div>
    
<?php endif; ?>

<?php do_action( 'woocommerce_after_edit_account_address_form' ); ?>
