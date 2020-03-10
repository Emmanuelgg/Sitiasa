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

    <div class="main-container col1-layout">
        <div class="main">
            <div class="multiple-checkout">
                <div class="table-responsive">
                    <form method="post" class="register-form outer-top-xs">
                        
                        <div class="page-title_multi">
                          <h2><?php echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title, $load_address ); ?></h2>
                        </div>
                		
                		<div class="addresses">
                			<?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>
                
                			<fieldset class="group-select">
                				<?php
                				foreach ( $address as $key => $field ) {
                					woocommerce_form_field( $key, $field, wc_get_post_data_by_key( $key, $field['value'] ) );
                				}
                				?>
                			</fieldset>
                
                			<?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>
                            
                            <div class="clearfix"></div>
                			<div class="buttons-set">
                				<input type="submit" class="button continue" name="save_address" value="<?php esc_attr_e( 'Save address', 'flipmart' ); ?>" />
                				<?php wp_nonce_field( 'woocommerce-edit_address', 'woocommerce-edit-address-nonce' ); ?>
        				        <input type="hidden" name="action" value="edit_address" />
                			</div>
                		</div>
                
                	</form>
                </div>
            </div>  
        </div>
    </div><div class="clearfix"></div>
    
<?php endif; ?>

<?php do_action( 'woocommerce_after_edit_account_address_form' ); ?>
