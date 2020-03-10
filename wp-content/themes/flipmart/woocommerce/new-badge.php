<?php
/**
 * Check if WooCommerce is active
 **/
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'woocommerce/woocommerce.php' ) || is_plugin_active_for_network( 'woocommerce/woocommerce.php' ) || is_network_only_plugin( 'woocommerce/woocommerce.php' ) ) {


    add_filter( 'woocommerce_get_sections_products', 'wcnew_add_section' );
    function wcnew_add_section( $sections ) {
    	
    	$sections['wcnew'] = __( 'New Badge', 'flipmart' );
    	return $sections;
    	
    }
    /**
     * Add settings to the specific section we created before
     */
    add_filter( 'woocommerce_get_settings_products', 'wcnew_all_settings', 10, 2 );
    function wcnew_all_settings( $settings, $current_section ) {
    	/**
    	 * Check the current section is what we want
    	 **/
    	if ( $current_section == 'wcnew' ) {
    		$settings_new = array();
    		// Add Title to the Settings
    		$settings_new[] = array( 'name' => __( 'New Badge Settings', 'flipmart' ), 'type' => 'title', 'desc' => __( 'The following options are used to configure New Badge', 'flipmart' ), 'id' => 'wcnew' );
    		// Add second text field option
    		$settings_new[] = array(
    			'name'     => __( 'Product Newness', 'flipmart' ),
    			'desc_tip' => __( 'Display the \'New\' flash for how many days?', 'flipmart' ),
    			'id'       => 'wc_nb_newness',
    			'type'     => 'number'
    		);
    		
    		$settings_new[] = array( 'type' => 'sectionend', 'id' => 'wcnew' );
    		return $settings_new;
    	
    	/**
    	 * If not, return the standard settings
    	 **/
    	} else {
    		return $settings;
    	}
    }
}