<?php
/**
 * The Asset Manager
 * Enqueue scripts and styles for the frontend
 */

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Yog_Theme_Assets extends Yog_Base {

    /**
     * Hold data for wa_theme for frontend
     * @var array
     */
    private static $theme_json = array();
    
    /**
	 * Hold an instance of Yog_Theme_Assets class.
	 * @var Yog_Theme_Assets
	 */
	protected static $instance = null;

	/**
	 * Main Yog_Theme_Assets instance.
	 *
	 * @return Yog_Theme_Assets - Main instance.
	 */
	public static function instance() {

		if(null == self::$instance) {
			self::$instance = new Yog_Theme_Assets();
		}

		return self::$instance;
	}
    
	/**
	 * [__construct description]
	 * @method __construct
	 */
    public function __construct() {

        // Frontend
        $this->add_action( 'wp_enqueue_scripts', 'enqueue', 25 );
        $this->add_action( 'wp_footer', 'script_data' );
        
        self::add_config( 'assets', array(
            'uris'    => $this->get_assets_uri(),
            'ajax'    => admin_url('admin-ajax.php', 'relative')
        ));
    }
    
    /**
     * Enqueue google fonts
     * @method enqueue
     * @return [type]  [description]
     */
    function yog_google_fonts_url() {
        $fonts_url = '';
    	$fonts     = array();
    	$subsets   = 'latin-ext';
        
        /* translators: If there are characters in your language that are not supported by Roboto Slab, translate this to 'off'. Do not translate into your own language. */
    	if ( 'off' !== _x( 'on', 'Roboto Slab font: on or off', 'flipmart' ) ) {
    		$fonts[] = 'Roboto Slab:400,700';
    	}
        
    	/* translators: If there are characters in your language that are not supported by Roboto Slab, translate this to 'off'. Do not translate into your own language. */
    	if ( 'off' !== _x( 'on', 'Roboto Slab font: on or off', 'flipmart' ) ) {
    		$fonts[] = 'Roboto:300,400,500,700';
    	}
		
        /* translators: If there are characters in your language that are not supported by Open Sans Slab, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'flipmart' ) ) {
    		$fonts[] = 'Open Sans:400,300,400italic,600,600italic,700,700italic,800';
    	}
        
        /* translators: If there are characters in your language that are not supported by Montserrat Slab, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'flipmart' ) ) {
    		$fonts[] = 'Montserrat:400,700';
    	}
        
        /* translators: If there are characters in your language that are not supported by Lato, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Lato font: on or off', 'flipmart' ) ) {
    		$fonts[] = 'Lato:100,200,300,400,700,800,900';
    	}
        
        /* translators: If there are characters in your language that are not supported by Assistant, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Assistant font: on or off', 'flipmart' ) ) {
    		$fonts[] = 'Assistant|Josefin Sans:300|Roboto:300';
    	}
        
        /* translators: If there are characters in your language that are not supported by Rajdhani, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Rajdhani font: on or off', 'flipmart' ) ) {
    		$fonts[] = 'Rajdhani:400,500,600,700';
    	}
        
        /* translators: If there are characters in your language that are not supported by Gabriela, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Gabriela font: on or off', 'flipmart' ) ) {
    		$fonts[] = 'Gabriela|Lato:300,400,700,900';
    	}
        
        /* translators: If there are characters in your language that are not supported by Raleway, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Raleway font: on or off', 'flipmart' ) ) {
    		$fonts[] = 'Raleway:400,100,200,300,500,600,400italic,700,800,900';
    	}
        
        /* translators: If there are characters in your language that are not supported by Raleway, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'flipmart' ) ) {
    		$fonts[] = 'Open Sans:400italic,600italic,700italic,400,600,700,800';
    	}
        
        /* translators: If there are characters in your language that are not supported by Roboto, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Roboto font: on or off', 'flipmart' ) ) {
    		$fonts[] = 'Roboto:400,300,500,700&subset=latin,cyrillic';
    	}
        
    	if ( $fonts ) {
    		$fonts_url = add_query_arg( array(
    			'family' => urlencode( implode( '|', $fonts ) ),
    			'subset' => urlencode( $subsets ),
    		), 'https://fonts.googleapis.com/css' );
    	}
    
    	return $fonts_url;
    }


    /**
     * Enqueue Scripts and Styles
     * @method enqueue
     * @return [type]  [description]
     */
    public function enqueue() {
        
        // Add custom fonts, used in the main stylesheet.
    	wp_enqueue_style( 'yog-google-fonts', $this->yog_google_fonts_url(), false, null );
        
        //Theme General Css Files 
        wp_enqueue_style( 'bootstrap',$this->get_css_uri('bootstrap-min.css'), false, false );
        wp_enqueue_style( 'font-awesome-min',$this->get_css_uri('font-awesome-min.css'), false, false );
        wp_enqueue_style( 'owl-carousel-min',$this->get_css_uri('owl-carousel-min.css'), false, false );
        wp_enqueue_style( 'animate-min',$this->get_css_uri('animate-min.css'), false, false );
        
        //Theme General Js Files
        wp_enqueue_script( 'bootstrap-min',$this->get_js_uri('libs/bootstrap-min.js'), array( 'jquery' ), false, true );
        wp_enqueue_script( 'cookie-min',$this->get_js_uri('libs/jquery-cookie-min.js'), false, false, true );
        wp_enqueue_script( 'owl-carousel-min',$this->get_js_uri('libs/owl-carousel-min.js'), false, false, true );
        wp_register_script( 'count-min',$this->get_js_uri('libs/count.min.js'), false, false, true );
        wp_enqueue_script( 'appear-min',$this->get_js_uri('libs/jquery-appear-min.js'), false, false, true );
        
        //Google Map API Key
        $yog_map_key = ( yog_helper()->get_theme_option( 'google-api-key' ) )? yog_helper()->get_theme_option( 'google-api-key' ) : 'AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE';
        wp_register_script( 'yog-googleapis', ( is_ssl() )? 'https://maps.googleapis.com/maps/api/js?key=' . $yog_map_key : 'http://maps.googleapis.com/maps/api/js?key=' . $yog_map_key, false, false, true ); 
        
        
        // comment reply
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    		wp_enqueue_script( 'comment-reply' );
    	}
        
        if( !yog_helper()->yog_check_plugin_activation() ):
            
            //Css Files
            wp_enqueue_style( 'bootstrap.select',$this->get_css_uri('bootstrap-select-min.css'), false, false );
            wp_enqueue_style( 'wpb-wmca-style-min',$this->get_css_uri('wpb-wmca-style-min.css'), false, false );
            wp_enqueue_style( 'yog-main-style',$this->get_css_uri('main-style.css'), false, false );
            wp_enqueue_style( 'yog-skin',$this->get_css_uri('skin.css'), false, false );
            
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
            
            
            //Style Switcher
            if( yog_helper()->get_theme_option( 'color-switcher' ) ){
                wp_enqueue_script( 'style-switcher',$this->get_assets_uri('master/style-switcher/style.switcher.js'), false, false, true );
            }
        
            //Main js file
    		wp_enqueue_script( 'yog-script',$this->get_js_uri('scripts.js'), false, false, true );
            wp_enqueue_script( 'sliderjs',$this->get_js_uri('libs/sliderjs.js'), false, false, true );
        
        else:
            
            //Style Switcher
            if( yog_helper()->get_theme_option( 'color-switcher' ) ){
                wp_enqueue_script( 'style-switcher',$this->get_assets_uri('master/style-switcher/style.switcher.js'), false, false, true );
            }
                
        endif;
        
        //Color Css File
        $yog_theme_color = yog_helper()->get_option( 'color-skin' );
        if( !empty( $yog_theme_color ) && yog_helper()->get_theme_option( 'color-view' ) ){
            wp_enqueue_style( "yog-color-{$yog_theme_color}",$this->get_css_uri( "skins/{$yog_theme_color}.css" ), false, false );
        }
        
        wp_enqueue_style( 'style', get_stylesheet_uri(), false, wp_get_theme()->get( 'Version' ) );
		
    }
    
    
    /**
     * Localize Data Object
     * @method script_data
     * @return [type]      [description]
     */
    public function script_data() {

        wp_localize_script( 'bootstrap-min', 'yogTheme', self::$theme_json );
    }
    
    /**
     * Inline Css Script
     * @method yog_inline_css_script
     * @return [type]      [description]
     */
    public function yog_inline_css_script( $custom_css = '') {
        
        //check
        if( empty( $custom_css ) )return;
        
        wp_enqueue_style(
            'yog-custom-style',
            get_template_directory_uri() . '/assets/css/editor-style.css'
        );
        wp_add_inline_style( 'yog-custom-style', $custom_css );
        
    }

    /**
     * Add items to JSON object
     * @method add_config
     * @param  [type]     $id    [description]
     * @param  string     $value [description]
     */
    public static function add_config( $id, $value = '' ) {

        if(!$id) {
            return;
        }

        if(isset(self::$theme_json[$id])) {
            if(is_array(self::$theme_json[$id])) {
                self::$theme_json[$id] = array_merge(self::$theme_json[$id],$value);
            }
            elseif(is_string(self::$theme_json[$id])) {
                self::$theme_json[$id] = self::$theme_json[$id].$value;
            }
        }
        else {
            self::$theme_json[$id] = $value;
        }
    }

    // Uri Helpers ---------------------------------------------------------------

    public function get_theme_uri($file = '') {
        return get_template_directory_uri() . '/' . $file;
    }

    public function get_child_uri($file = '') {
        return get_stylesheet_directory_uri() . '/' . $file;
    }

    public function get_css_uri($file = '') {
        return get_template_directory_uri() . '/assets/css/'. $file;
    }

    public function get_js_uri($file = '') {
        return get_template_directory_uri() . '/assets/js/'. $file;
    }

    public function get_assets_uri($file = '') {
        return get_template_directory_uri() . '/assets/'. $file;
    }
}

/**
 * Main instance of Yog_Theme_Assets.
 *
 * Returns the main instance of Yog_Theme_Assets to prevent the need to use globals.
 *
 * @return Yog_Theme_Assets
 */
function yog_theme_assets() {
	return Yog_Theme_Assets::instance();
}
yog_theme_assets(); // init it
