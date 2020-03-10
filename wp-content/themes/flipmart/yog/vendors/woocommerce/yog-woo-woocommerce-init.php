<?php
/**
 * Disable WooCommerce Style
 */

if(!class_exists('Woocommerce')) return;

if ( version_compare( WOOCOMMERCE_VERSION, "2.2" ) >= 0 ) {
	// WooCommerce 2.2 or above is active
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );
} else {
	// WooCommerce is less than 2.2
	define( 'WOOCOMMERCE_USE_CSS', false );
} 

/** Remove Page Title. */
add_filter( 'woocommerce_show_page_title', '__return_false' );

/** Remove Breadcrumb */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

/** Remove Loop Result Count and Ordering */
//remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );

add_action( 'woocommerce_checkout_after_customer_details', 'woocommerce_checkout_payment' );

function yog_wc_image(){
   echo '<a href="'. get_permalink() .'">'. get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) ) .'</a>';
}
add_action( 'woocommerce_before_shop_loop_item_title', 'yog_wc_image' );

/** Add Shop Header */
function yog_wc_shop_header() {

    if( is_single() ) return;

    wc_get_template_part( 'global/shop', 'header' );   
}
add_action( 'woocommerce_before_main_content', 'yog_wc_shop_header' );

/** Remove Sidebar */
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

/** Set Products Per Page */
function yog_wc_products_per_page( $limit ) {
    
    $limit = isset( $_GET['limit'] )? $_GET['limit'] : yog_helper()->get_option( 'shop-limit', 'raw', $limit, 'options' ); 

    return $limit;
}
add_filter( 'loop_shop_per_page', 'yog_wc_products_per_page' );

/** Set Number of Columns */
function yog_wc_loop_columns( $cols ) {
    $cols = isset( $_GET['column'] )? $_GET['column'] : yog_helper()->get_option( 'shop-column', 'raw', $cols, 'options' ); 
    return $cols;
}
add_filter( 'loop_shop_columns', 'yog_wc_loop_columns' );

/** Remove and Re-position pagination */
remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );

/** Set Pagination */
function woocommerceframework_pagination() {
    if( yog_helper()->get_option( 'shop-pagination', 'raw', false, 'options' ) ){
        yog_wp_paginate( array( 'before' => '<div class="toolbar"><div class="pager"><div class="pages">', 'after' => '</div></div></div>', 'class' => 'pagination', 'title' => false, 'nextpage' => '<i class="fa fa-angle-right"></i>', 'previouspage' => '<i class="fa fa-angle-left"></i>' ) );    
    }
}
add_action( 'woocommerce_after_shop_loop', 'woocommerceframework_pagination' );
/**
 * Init Default widgets Override
 */

function yog_woocommerce_widget() {
    get_template_part( 'woocommerce/default-woocommerce', 'widgets' );
}
add_action( 'widgets_init', 'yog_woocommerce_widget', 15 );

/**
 * Single Product
 */
 /** Gallery */

/** Product Summery */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

/** Enable/Disable Features */
function yog_wc_disable_enable_features() {
    
	/** Display product tabs? */
    if ( !yog_helper()->get_option( 'product-tab', 'raw', false, 'options' ) )
        remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
    
    /** Display related products? */
    if ( !yog_helper()->get_option( 'product-related', 'raw', false, 'options' ) )
        remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
    
    /** Display cross-sell products? */
    if ( !yog_helper()->get_option( 'product-cross', 'raw', false, 'options' ) )
        remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
}
add_action( 'wp_head','yog_wc_disable_enable_features' );

/** Set limit and column on related products */
function yog_wc_related_products_args( $args ) {
    
    $args['posts_per_page'] = yog_helper()->get_option( 'product-rel-limit', 'raw', $args['posts_per_page'], 'options' );
    $args['columns'] = yog_helper()->get_option( 'product-rel-column', 'raw', $args['columns'], 'options' );
    
    return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'yog_wc_related_products_args' );


/** Remove UpSell */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );

/** Set limit and column on upsell products */
function yog_wc_upsell_display( $args ) {
    
    $yog_limit = yog_helper()->get_option( 'product-sell-limit', 'raw', 3, 'options' );
    $yog_columns = yog_helper()->get_option( 'product-sell-column', 'raw', 4, 'options' );
    
    woocommerce_upsell_display( $yog_limit, $yog_columns );
}
add_action ( 'woocommerce_after_single_product_summary', 'yog_wc_upsell_display', 15 );

/** Remove Cross Sell */
remove_action ( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );

/** Set limit and column on cross-sell products */
function yog_wc_cross_sell_display( $args ) {
    
    $yog_limit = yog_helper()->get_option( 'product-cross-limit', 'raw', 3, 'options' );
    $yog_columns = yog_helper()->get_option( 'product-cross-column', 'raw', 4, 'options' );
    
    woocommerce_cross_sell_display( $yog_limit, $yog_columns );
}
add_action ( 'woocommerce_after_cart', 'yog_wc_cross_sell_display', 15 );


remove_action( 'woocommerce_account_content', 'woocommerce_output_all_notices', 5 );
add_action ( 'woocommerce_output_account_notices', 'woocommerce_output_all_notices', 5 );

/**
 * Checkout Page
 */
if ( ! function_exists( 'woocommerce_form_field' ) ) {
    
    /**
	 * Outputs a checkout/address form field.
	 *
	 * @param string $key Key.
	 * @param mixed  $args Arguments.
	 * @param string $value (default: null).
	 * @return string
	 */
	function woocommerce_form_field( $key, $args, $value = null ) {
		$defaults = array(
			'type'              => 'text',
			'label'             => '',
			'description'       => '',
			'placeholder'       => '',
			'maxlength'         => false,
			'required'          => false,
			'autocomplete'      => false,
			'id'                => $key,
			'class'             => array(),
			'label_class'       => array(),
			'input_class'       => array(),
			'return'            => false,
			'options'           => array(),
			'custom_attributes' => array(),
			'validate'          => array(),
			'default'           => '',
			'autofocus'         => '',
			'priority'          => '',
		);

		$args = wp_parse_args( $args, $defaults );
		$args = apply_filters( 'woocommerce_form_field_args', $args, $key, $value );

		if ( $args['required'] ) {
			$args['class'][] = 'validate-required';
			$required        = '&nbsp;<abbr class="required" title="' . esc_attr__( 'required', 'flipmart' ) . '">*</abbr>';
		} else {
			$required = '&nbsp;<span class="optional">(' . esc_html__( 'optional', 'flipmart' ) . ')</span>';
		}

		if ( is_string( $args['label_class'] ) ) {
			$args['label_class'] = array( $args['label_class'] );
		}

		if ( is_null( $value ) ) {
			$value = $args['default'];
		}

		// Custom attribute handling.
		$custom_attributes         = array();
		$args['custom_attributes'] = array_filter( (array) $args['custom_attributes'], 'strlen' );

		if ( $args['maxlength'] ) {
			$args['custom_attributes']['maxlength'] = absint( $args['maxlength'] );
		}

		if ( ! empty( $args['autocomplete'] ) ) {
			$args['custom_attributes']['autocomplete'] = $args['autocomplete'];
		}

		if ( true === $args['autofocus'] ) {
			$args['custom_attributes']['autofocus'] = 'autofocus';
		}

		if ( $args['description'] ) {
			$args['custom_attributes']['aria-describedby'] = $args['id'] . '-description';
		}

		if ( ! empty( $args['custom_attributes'] ) && is_array( $args['custom_attributes'] ) ) {
			foreach ( $args['custom_attributes'] as $attribute => $attribute_value ) {
				$custom_attributes[] = esc_attr( $attribute ) . '="' . esc_attr( $attribute_value ) . '"';
			}
		}

		if ( ! empty( $args['validate'] ) ) {
			foreach ( $args['validate'] as $validate ) {
				$args['class'][] = 'validate-' . $validate;
			}
		}

		$field           = '';
		$label_id        = $args['id'];
		$sort            = $args['priority'] ? $args['priority'] : '';
		$field_container = '<div class="form-row form-group %1$s" id="%2$s" data-priority="' . esc_attr( $sort ) . '"><div class="input-box">%3$s</div><div class="clearfix"></div></div>';

		switch ( $args['type'] ) {
			case 'country':
				$countries = 'shipping_country' === $key ? WC()->countries->get_shipping_countries() : WC()->countries->get_allowed_countries();

				if ( 1 === count( $countries ) ) {

					$field .= '<strong>' . current( array_values( $countries ) ) . '</strong>';

					$field .= '<input type="hidden" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="' . current( array_keys( $countries ) ) . '" ' . implode( ' ', $custom_attributes ) . ' class="country_to_state" readonly="readonly" />';

				} else {

					$field = '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="country_to_state country_select input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" ' . implode( ' ', $custom_attributes ) . '><option value="">' . esc_html__( 'Select a country&hellip;', 'flipmart' ) . '</option>';

					foreach ( $countries as $ckey => $cvalue ) {
						$field .= '<option value="' . esc_attr( $ckey ) . '" ' . selected( $value, $ckey, false ) . '>' . $cvalue . '</option>';
					}

					$field .= '</select>';

					$field .= '<noscript><button type="submit" name="woocommerce_checkout_update_totals" value="' . esc_attr__( 'Update country', 'flipmart' ) . '">' . esc_html__( 'Update country', 'flipmart' ) . '</button></noscript>';

				}

				break;
			case 'state':
				/* Get country this state field is representing */
				$for_country = isset( $args['country'] ) ? $args['country'] : WC()->checkout->get_value( 'billing_state' === $key ? 'billing_country' : 'shipping_country' );
				$states      = WC()->countries->get_states( $for_country );

				if ( is_array( $states ) && empty( $states ) ) {

					$field_container = '<p class="form-row form-group %1$s" id="%2$s" style="display: none"><div class="input-box col-md-12">%3$s</div></p>';

					$field .= '<input type="hidden" class="hidden" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="" ' . implode( ' ', $custom_attributes ) . ' placeholder="' . esc_attr( $args['placeholder'] ) . '" readonly="readonly" />';

				} elseif ( ! is_null( $for_country ) && is_array( $states ) ) {

					$field .= '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="state_select input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" ' . implode( ' ', $custom_attributes ) . ' data-placeholder="' . esc_attr( $args['placeholder'] ? $args['placeholder'] : esc_html__( 'Select an option&hellip;', 'flipmart' ) ) . '">
						<option value="">' . esc_html__( 'Select an option&hellip;', 'flipmart' ) . '</option>';

					foreach ( $states as $ckey => $cvalue ) {
						$field .= '<option value="' . esc_attr( $ckey ) . '" ' . selected( $value, $ckey, false ) . '>' . $cvalue . '</option>';
					}

					$field .= '</select>';

				} else {

					$field .= '<input type="text" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" value="' . esc_attr( $value ) . '"  placeholder="' . esc_attr( $args['placeholder'] ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" ' . implode( ' ', $custom_attributes ) . ' />';

				}

				break;
			case 'textarea':
				$field .= '<textarea name="' . esc_attr( $key ) . '" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '" ' . ( empty( $args['custom_attributes']['rows'] ) ? ' rows="2"' : '' ) . ( empty( $args['custom_attributes']['cols'] ) ? ' cols="5"' : '' ) . implode( ' ', $custom_attributes ) . '>' . esc_textarea( $value ) . '</textarea>';

				break;
			case 'checkbox':
				$field = '<label class="checkbox ' . implode( ' ', $args['label_class'] ) . '" ' . implode( ' ', $custom_attributes ) . '>
						<input type="' . esc_attr( $args['type'] ) . '" class="input-checkbox ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="1" ' . checked( $value, 1, false ) . ' /> ' . $args['label'] . $required . '</label>';

				break;
			case 'text':
			case 'password':
			case 'datetime':
			case 'datetime-local':
			case 'date':
			case 'month':
			case 'time':
			case 'week':
			case 'number':
			case 'email':
			case 'url':
			case 'tel':
				$field .= '<input type="' . esc_attr( $args['type'] ) . '" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '"  value="' . esc_attr( $value ) . '" ' . implode( ' ', $custom_attributes ) . ' />';

				break;
			case 'select':
				$field   = '';
				$options = '';

				if ( ! empty( $args['options'] ) ) {
					foreach ( $args['options'] as $option_key => $option_text ) {
						if ( '' === $option_key ) {
							// If we have a blank option, select2 needs a placeholder.
							if ( empty( $args['placeholder'] ) ) {
								$args['placeholder'] = $option_text ? $option_text : __( 'Choose an option', 'flipmart' );
							}
							$custom_attributes[] = 'data-allow_clear="true"';
						}
						$options .= '<option value="' . esc_attr( $option_key ) . '" ' . selected( $value, $option_key, false ) . '>' . esc_attr( $option_text ) . '</option>';
					}

					$field .= '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="select input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" ' . implode( ' ', $custom_attributes ) . ' data-placeholder="' . esc_attr( $args['placeholder'] ) . '">
							' . $options . '
						</select>';
				}

				break;
			case 'radio':
				$label_id .= '_' . current( array_keys( $args['options'] ) );

				if ( ! empty( $args['options'] ) ) {
					foreach ( $args['options'] as $option_key => $option_text ) {
						$field .= '<input type="radio" class="input-radio ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" value="' . esc_attr( $option_key ) . '" name="' . esc_attr( $key ) . '" ' . implode( ' ', $custom_attributes ) . ' id="' . esc_attr( $args['id'] ) . '_' . esc_attr( $option_key ) . '"' . checked( $value, $option_key, false ) . ' />';
						$field .= '<label for="' . esc_attr( $args['id'] ) . '_' . esc_attr( $option_key ) . '" class="radio ' . implode( ' ', $args['label_class'] ) . '">' . $option_text . '</label>';
					}
				}

				break;
		}

		if ( ! empty( $field ) ) {
			$field_html = '';

			if ( $args['label'] && 'checkbox' !== $args['type'] ) {
				$field_html .= '<label for="' . esc_attr( $label_id ) . '" class="' . esc_attr( implode( ' ', $args['label_class'] ) ) . '">' . $args['label'] . $required . '</label>';
			}

			$field_html .= '<span class="woocommerce-input-wrapper">' . $field;

			if ( $args['description'] ) {
				$field_html .= '<span class="description" id="' . esc_attr( $args['id'] ) . '-description" aria-hidden="true">' . wp_kses_post( $args['description'] ) . '</span>';
			}

			$field_html .= '</span>';

			$container_class = esc_attr( implode( ' ', $args['class'] ) );
			$container_id    = esc_attr( $args['id'] ) . '_field';
			$field           = sprintf( $field_container, $container_class, $container_id, $field_html );
		}

		/**
		 * Filter by type.
		 */
		$field = apply_filters( 'woocommerce_form_field_' . $args['type'], $field, $key, $args, $value );

		/**
		 * General filter on form fields.
		 *
		 * @since 3.4.0
		 */
		$field = apply_filters( 'woocommerce_form_field', $field, $key, $args, $value );

		if ( $args['return'] ) {
			return $field;
		} else {
			echo $field; // WPCS: XSS ok.
		}
	}
} 

/**
 * Custom Get shipping methods.
 *
 * @access public
 */
function wc_checkout_totals_shipping_html() {
	$packages = WC()->shipping->get_packages();

	foreach ( $packages as $i => $package ) {
		$chosen_method = isset( WC()->session->chosen_shipping_methods[ $i ] ) ? WC()->session->chosen_shipping_methods[ $i ] : '';
		$product_names = array();

		if ( sizeof( $packages ) > 1 ) {
			foreach ( $package['contents'] as $item_id => $values ) {
				$product_names[] = $values['data']->get_title() . ' &times;' . $values['quantity'];
			}
		}

		wc_get_template( 'checkout/cart-shipping.php', array(
			'package'              => $package,
			'available_methods'    => $package['rates'],
			'show_package_details' => sizeof( $packages ) > 1,
			'package_details'      => implode( ', ', $product_names ),
			'package_name'         => apply_filters( 'woocommerce_shipping_package_name', sprintf( _n( 'Shipping', 'Shipping %d', ( $i + 1 ), 'flipmart' ), ( $i + 1 ) ), $i, $package ),
			'index'                => $i,
			'chosen_method'        => $chosen_method
		) );
	}
}