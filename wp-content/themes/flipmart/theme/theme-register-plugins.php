<?php
/**
 * Themeyog Theme Framework
 * Include the TGM_Plugin_Activation class and register the required plugins.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 */

yog()->load_library( 'class-tgm-plugin-activation' );

/**
 * Register the required plugins for this theme.
 */
add_action( 'tgmpa_register', 'yog_register_required_plugins' );
function yog_register_required_plugins() {

	$yog_plugins = array(
    
        array(
			'name' 		      => esc_html__( 'Flipmart Addons', 'flipmart' ),
			'slug' 		      => 'yog-addons',
			'required' 	      => true,
            'source'          => 'http://yogthemes.com/plugin/flipmart/yog-addons.zip',
			'yog_author'      => esc_html__( 'CKThemes', 'flipmart' ),
			'yog_description' => esc_html__( 'Flipmart core theme plugin.', 'flipmart' )
		),
        
        array(
			'name' 		      => esc_html__( 'Flipmart Importer', 'flipmart' ),
			'slug' 		      => 'flipmart-importer',
			'required' 	      => true,
            'source'          => 'http://yogthemes.com/plugin/flipmart/flipmart-importer.zip',
			'yog_author'      => esc_html__( 'CKThemes', 'flipmart' ),
			'yog_description' => esc_html__( 'Flipmart Demo Importer plugin.', 'flipmart' )
		),
        
        array(
			'name' 		      => esc_html__( 'Flipmart EDD VC', 'flipmart' ),
			'slug' 		      => 'flipmart-vc-integration',
			'required' 	      => false,
            'source'          => 'http://yogthemes.com/plugin/flipmart/flipmart-vc-integration.zip',
			'yog_author'      => esc_html__( 'CKThemes', 'flipmart' ),
			'yog_description' => esc_html__( 'This plugin maps easy-digital-download shortcodes to WPBakery Visual Composer elements.', 'flipmart' )
		),
        
		array(
			'name' 		      => esc_html__( 'Redux Framework', 'flipmart' ),
			'slug' 		      => 'redux-framework',
			'required' 	      => true,
			'yog_author'      => esc_html__( 'Team Redux', 'flipmart' ),
			'yog_description' => esc_html__( 'Redux truly extensible options framework.', 'flipmart' )
		),
        
        array(
			'name' 		      => esc_html__( 'WPBakery Visual Composer', 'flipmart' ),
			'slug' 		      => 'js_composer',
			'required' 	      => true,
            'source'          => 'http://yogthemes.com/plugin/general/js_composer.zip',
			'yog_author'      => esc_html__( 'Michael M - WPBakery.com', 'flipmart' ),
			'yog_description' => esc_html__( 'Drag and drop page builder for WordPress.', 'flipmart' )
		),
        
        array(
			'name' 		      => esc_html__( 'Woocommerce', 'flipmart' ),
			'slug' 		      => 'woocommerce',
			'required' 	      => true,
			'yog_author'      => esc_html__( 'WooThemes','flipmart' ),
			'yog_description' => esc_html__( 'An e-commerce toolkit that helps you sell anything. Beautifully.','flipmart' )
		),
        
        array(
			'name' 		      => esc_html__( 'YITH WooCommerce Wishlist', 'flipmart' ),
			'slug' 		      => 'yith-woocommerce-wishlist',
			'required' 	      => true,
			'yog_author'      => esc_html__( 'YITHEMES','flipmart' ),
			'yog_description' => esc_html__( 'YITH WooCommerce Wishlist allows you to add Wishlist functionality in e-commerce.','flipmart' )
		),
        
        array(
			'name' 		      => esc_html__( 'YITH WooCommerce Compare', 'flipmart' ),
			'slug' 		      => 'yith-woocommerce-compare',
			'required' 	      => true,
			'yog_author'      => esc_html__( 'YITHEMES','flipmart' ),
			'yog_description' => esc_html__( 'YITH WooCommerce Compare allows you to compare products with WooCommerce plugin.','flipmart' )
		),
        
        array(
			'name' 		      => esc_html__( 'Currency Switcher', 'flipmart' ),
			'slug' 		      => 'woocommerce-currency-switcher',
			'required' 	      => true,
            'source'          => 'http://yogthemes.com/plugin/flipmart/woocommerce-currency-switcher.zip',
			'yog_author'      => esc_html__( 'realmag777','flipmart' ),
			'yog_description' => esc_html__( 'Plugin that allows customers switch currencies on woocommerce store site.','flipmart' )
		),
        
        array(
			'name' 		      => esc_html__( 'MailChimp', 'flipmart' ),
			'slug' 		      => 'mailchimp-for-wp',
			'required' 	      => true,
			'yog_author'      => esc_html__( 'ibericode', 'flipmart' ),
			'yog_description' => esc_html__( 'MailChimp for WordPress by ibericode. Adds effective sign-up methods to your site.', 'flipmart' )
		),
        
        array(
			'name' 		      => esc_html__( 'Breadcrumb NavXT', 'flipmart' ),
			'slug' 		      => 'breadcrumb-navxt',
			'required' 	      => true,
			'yog_author'      => esc_html__( 'John Havlik', 'flipmart' ),
			'yog_description' => esc_html__( 'Adds a breadcrumb navigation showing the visitor&#39;s path to their current location.', 'flipmart' )
		),
        
        array(
			'name' 		      => esc_html__( 'Revolution Slider', 'flipmart' ),
			'slug' 		      => 'revslider',
			'required' 	      => false,
            'source'          => 'http://yogthemes.com/plugin/general/revslider.zip',
			'yog_author'      => esc_html__( 'ThemePunch','flipmart' ),
			'yog_description' => esc_html__( 'Slider Revolution - Premium responsive WordPress slider.','flipmart' )
		),
        
        array(
			'name'            => esc_html__( 'Contact Form 7', 'flipmart' ),
			'slug'            => 'contact-form-7',
			'required'        => false,
			'yog_author'      => esc_html( 'Takayuki Miyoshi', 'flipmart' ),
			'yog_description' => esc_html__( 'Just another contact form plugin. Simple but flexible.', 'flipmart' )
		),
        
        array(
            'name'            => esc_html__( 'Widget Importer & Exporter','flipmart' ),
            'slug'            => 'widget-importer-exporter',
            'required'        => false,
            'yog_author'      => esc_html__( 'churchthemes.com','flipmart' ),
			'yog_description' => esc_html__( 'Widget Importer & Exporter is useful for moving widgets from one WordPress site to another.','flipmart' )
        )
	);

	$yog_config = array(
		'id'           => 'flipmart'
	);

	tgmpa( $yog_plugins, $yog_config );
}