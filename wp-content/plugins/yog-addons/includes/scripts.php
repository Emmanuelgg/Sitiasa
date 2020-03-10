<?php
/**
 * The Asset Manager
 * Enqueue scripts and styles for the frontend
 */

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Yog_Assets {
    
    /**
	 * Hold an instance of Yog_Assets class.
	 * @var Yog_Assets
	 */
	protected static $instance = null;

	/**
	 * Main Yog_Assets instance.
	 *
	 * @return Yog_Assets - Main instance.
	 */
	public static function instance() {

		if(null == self::$instance) {
			self::$instance = new Yog_Assets();
		}

		return self::$instance;
	}
    
	/**
	 * [__construct description]
	 * @method __construct
	 */
    public function __construct() {

        // Frontend
        add_action('wp_enqueue_scripts', array( $this, 'yog_enqueue' ), 100 );
        
    }
    
    /**
     * Enqueue Scripts and Styles
     * @method enqueue
     * @return [type]  [description]
     */
    public function yog_enqueue() {
        
        //Get Theme Options
        $yog_theme_options = get_option( 'flipmart' );
        $yog_site_version = ( isset( $yog_theme_options['site-version'] ) && !empty( $yog_theme_options['site-version'] ) )? $yog_theme_options['site-version'] : 'default';
        $yog_site_layout  = ( isset( $yog_theme_options["site-version-{$yog_site_version}"] ) && !empty( $yog_theme_options["site-version-{$yog_site_version}"] ) )? $yog_theme_options["site-version-{$yog_site_version}"] : 'v1';
        
        //Rigester Elements
        wp_register_style( 'yog-buttons',$this->get_css_uri('elements/buttons.css'), false, false );
        wp_register_style( 'yog-alerts',$this->get_css_uri('elements/alerts.css'), false, false );
        wp_register_style( 'yog-boxes',$this->get_css_uri('elements/boxes.css'), false, false );
        wp_register_style( 'yog-pricing-table',$this->get_css_uri('elements/pricing-table.css'), false, false );
        wp_register_style( 'yog-tabs',$this->get_css_uri('elements/tabs.css'), false, false );
        wp_register_style( 'yog-icon-boxes',$this->get_css_uri('elements/icon-boxes.css'), false, false );
        
        //Icons
        wp_register_style( 'yog-icons',$this->get_css_uri('icons.css'), false, false );
        
        //Layout Related Css and Js Files
        if( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'woomart' ):
            
            //Css Files
            wp_enqueue_style( 'owl-theme',$this->get_css_uri('woomart/owl-theme.css'), false, false );
            wp_enqueue_style( 'jquery-bxslider',$this->get_css_uri('woomart/jquery-bxslider.css'), false, false );
            wp_enqueue_style( 'yog-style',$this->get_css_uri('woomart/style.css'), false, false );
            wp_enqueue_style( 'yog-responsive',$this->get_css_uri('woomart/responsive.css'), false, false );
            wp_enqueue_style( 'jquery-mobile-men',$this->get_css_uri('woomart/jquery-mobile-menu.css'), false, false );
            
            
            //Js Files
            wp_enqueue_script( 'bxslider-min',$this->get_js_uri('woomart/jquery-bxslider-min.js'), false, false, true );
            wp_enqueue_script( 'mobile-menu',$this->get_js_uri('woomart/jquery-mobile-menu.min.js'), false, false, true );
            
            //Main js file
		    wp_enqueue_script( 'yog-script',$this->get_js_uri('woomart/scripts.js'), false, false, true );
            
        else:
            
            //Css Files
            wp_enqueue_style( 'bootstrap.select',$this->get_css_uri('bootstrap-select-min.css'), false, false );
            wp_enqueue_style( 'wpb-wmca-style-min',$this->get_css_uri('wpb-wmca-style-min.css'), false, false );
            wp_register_style( 'icomoon-soc-icons',$this->get_css_uri('icomoon-soc-icons.css'), false, false );
            wp_register_style( 'simple-line-icons',$this->get_css_uri('simple-line-icons.css'), false, false );
            wp_register_style( 'magnific-popup',$this->get_css_uri('magnific-popup.css'), false, false );
            
            //Layout Css Files
            if( $yog_site_version == 'default' ){
                wp_enqueue_style( "yog-{$yog_site_version}",$this->get_css_uri( "layouts/{$yog_site_version}/{$yog_site_layout}.css" ), false, false );
                wp_enqueue_style( "yog-skin-{$yog_site_version}",$this->get_css_uri( "skins/skin-{$yog_site_layout}.css" ), false, false );
            }else{
                wp_enqueue_style( "yog-style",$this->get_css_uri( "layouts/modify/main.css" ), false, false );
                wp_enqueue_style( "yog-{$yog_site_version}",$this->get_css_uri( "layouts/{$yog_site_version}/{$yog_site_layout}.css" ), false, false );
            }
            
            //Js Files
            wp_enqueue_script( 'bootstrap-hover-dropdown',$this->get_js_uri('libs/bootstrap-hover-dropdown-min.js'), false, false, true );
			wp_enqueue_script( 'bootstrap-slider',$this->get_js_uri('libs/bootstrap-slider-min.js'), false, false, true );
    		wp_enqueue_script( 'bootstrap-select',$this->get_js_uri('libs/bootstrap-select-min.js'), false, false, true );
            wp_enqueue_script( 'echo-min',$this->get_js_uri('libs/echo-min.js'), false, false, true );
    		wp_enqueue_script( 'jquery-easing-min',$this->get_js_uri('libs/jquery-easing-min.js'), false, false, true );
    		wp_register_script( 'tweecool-min',$this->get_js_uri('libs/tweecool.min.js'), false, false, true );
            wp_register_script ( 'isotope-min',$this->get_js_uri('libs/isotope.pkgd.min.js'), false, false, true );
            wp_enqueue_script( 'navgoco',$this->get_js_uri('libs/jquery-navgoco-min.js'), false, false, true );
            wp_enqueue_script( 'modernizer-min',$this->get_js_uri('libs/modernizer-min.js'), false, false, true );
            wp_register_script( 'bxslider-min',$this->get_js_uri('libs/jquery.bxslider.min.js'), false, false, true );
            wp_register_script( 'countTo-min',$this->get_js_uri('libs/jquery.countTo.js'), false, false, true );
            
            //Google Map API Key
            $yog_map_key = ( isset( $yog_theme_options['google-api-key'] ) && !empty( $yog_theme_options['google-api-key'] ) )? $yog_theme_options['google-api-key'] : 'AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE';
            wp_register_script( 'yog-googleapis', ( is_ssl() )? 'https://maps.googleapis.com/maps/api/js?sensor=false' : 'https://maps.googleapis.com/maps/api/js?sensor=false', false, false, true ); 
            
            //Main js file
    		wp_enqueue_script( 'yog-script',$this->get_js_uri('scripts.js'), false, false, true );
            wp_enqueue_script( 'sliderjs',$this->get_js_uri('libs/sliderjs.js'), false, false, true );
            wp_register_script( 'yog-bw-scripts',$this->get_js_uri('bw-scripts.js'), false, false, true );
            wp_register_script( 'yog-flower-scripts',$this->get_js_uri('flower-scripts.js'), false, false, true );
            wp_register_script( 'yog-autoparts-scripts',$this->get_js_uri('autoparts-scripts.js'), false, false, true );
            wp_register_script( 'superslides',$this->get_js_uri('libs/jquery.superslides.min.js'), false, false, true );
            wp_register_script( 'magnific-popup',$this->get_js_uri('libs/jquery.magnific-popup.min.js'), false, false, true );
            wp_register_script( 'stellar',$this->get_js_uri('libs/jquery.stellar.min.js'), false, false, true );
            wp_register_script( 'nav',$this->get_js_uri('libs/jquery.nav.js'), false, false, true );
            wp_register_script( 'yog-ray-scripts',$this->get_js_uri('ray-scripts.js'), false, false, true );
            
        endif;
    }

    // Uri Helpers ---------------------------------------------------------------

    public function get_css_uri($file = '') {
        return YOG_CORE_DIR . 'assets/css/'. $file;
    }

    public function get_js_uri($file = '') {
        return YOG_CORE_DIR . 'assets/js/'. $file;
    }

    public function get_assets_uri($file = '') {
        return YOG_CORE_DIR . 'assets/'. $file;
    }
}

/**
 * Main instance of Yog_Assets.
 *
 * Returns the main instance of Yog_Assets to prevent the need to use globals.
 *
 * @return Yog_Assets
 */
function yog_assets() {
	return Yog_Assets::instance();
}
yog_assets(); // init it
