<?php
/**
* Theme Framework
* The Yog_Admin initiate the theme admin
*/

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Yog_Admin extends Yog_Base {

	/**
	 * [__construct description]
	 * @method __construct
	 */
	public function __construct() {

		$this->add_action( 'init', 'init', 7 );
		$this->add_action( 'admin_init', 'save_plugins' );
		$this->add_action( 'admin_enqueue_scripts', 'enqueue', 99 );
		if (class_exists('Yog_Addons')) {
            $this->add_action( 'admin_menu', 'fix_parent_menu', 999 );
        }

		$this->add_action( 'vc_backend_editor_enqueue_js_css', 'vc_iconpicker_editor_jscss' );
		$this->add_action( 'vc_frontend_editor_enqueue_js_css', 'vc_iconpicker_editor_jscss' );
	}

	/**
	 * [init description]
	 * @method init
	 * @return [type] [description]
	 */
	public function init() {
        
        yog()->load_theme_part( 'theme-register-plugins' );
        
		require_once( get_template_directory().'/yog/admin/yog-admin-page.php' );
        require_once( get_template_directory().'/yog/admin/yog-admin-dashboard.php' );
        require_once( get_template_directory().'/yog/admin/yog-admin-plugins.php' );
	}
    
    /**
     * Enqueue google fonts
     * @method enqueue
     * @return [type]  [description]
     */
    public function admin_google_fonts_url() {
        $fonts_url = '';
         
        /* Translators: If there are characters in your language that are not
        * supported by Open Sans, translate this to 'off'. Do not translate
        * into your own language.
        */
        $open_sans = _x( 'on', 'Open Sans font: on or off', 'flipmart' );
        
        /* Translators: If there are characters in your language that are not
        * supported by Roboto, translate this to 'off'. Do not translate
        * into your own language.
        */
        $roboto = _x( 'on', 'Roboto font: on or off', 'flipmart' );
         
        if ( 'off' !== $open_sans || 'off' !== $roboto ) {
            $font_families = array();
             
            if ( 'off' !== $open_sans ) {
                $font_families[] = 'Open+Sans:400,700ss';
            }
            
            if ( 'off' !== $roboto ) {
                $font_families[] = 'Roboto:400,500,700';
            }
             
            $query_args = array(
                'family' => urlencode( implode( '|', $font_families ) ),
                'subset' => urlencode( 'latin-ext' ),
            );
             
            $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
        }
         
        return esc_url_raw( $fonts_url ); 
        
    }
    
	/**
	 * [enqueue description]
	 * @method enqueue
	 * @return [type] [description]
	 */
    public function enqueue() {
        wp_enqueue_style( 'yog-admin-google-fonts', $this->admin_google_fonts_url(), array(), null );
		wp_enqueue_style( 'yog-admin', yog()->load_assets( 'css/yog-admin-min.css' ) );
		wp_enqueue_style( 'yog-redux', yog()->load_assets( 'css/yog-redux-min.css' ) );
		wp_enqueue_style( 'font-awesome', yog()->load_theme_assets( 'css/font-awesome-min.css' ) );
		wp_enqueue_script( 'yog-admin', yog()->load_assets( 'js/yog-admin-min.js' ), array( 'jquery' ), false, true );

		// Icons
		$uri = get_template_directory_uri() . '/assets/vendors/' ;
		wp_register_style('yog-icons', $uri . 'yog-font-icon/css/yog-font-icon.css' );

		if( class_exists( 'Redux_Functions' ) && class_exists( 'ReduxFramework' ) ) {

			// Set up min files for dev_mode = false.
	        $min = Redux_Functions::isMin();

	        // Field dependent JS
	        if (!wp_script_is ( 'redux-field-color-rgba-js' )) {
	            wp_enqueue_script(
	                'redux-field-color-rgba-js',
	                ReduxFramework::$_url . 'inc/fields/color_rgba/field_color_rgba' . Redux_Functions::isMin() . '.js',
	                array('jquery', 'redux-spectrum-js'),
	                time(),
	                true
	            );
	        }

	        // Spectrum CSS
	        if (!wp_style_is ( 'redux-spectrum-css' )) {
	            wp_enqueue_style('redux-spectrum-css');
	        }
		}
    }

	public function vc_iconpicker_editor_jscss() {
		$font_icons = yog_helper()->get_theme_option( 'font-icons' );
		if( !empty( $font_icons ) ) {
			foreach( $font_icons as $handle ) {
				wp_enqueue_style($handle);
			}
		}
	}

	/**
	 * [fix_parent_menu description]
	 * @method fix_parent_menu
	 * @return [type]          [description]
	 */
	public function fix_parent_menu() {
		global $submenu;

		$submenu['yog'][0][0] = esc_html__( 'Dashboard', 'flipmart' );
	}

	/**
	 * [save_plugins description]
	 * @method save_plugins
	 * @return [type]       [description]
	 */
	public function save_plugins() {

        if ( !current_user_can( 'edit_theme_options' ) ) {
            return;
        }

		// Deactivate Plugin
        if ( isset( $_GET['yog-deactivate'] ) && 'deactivate-plugin' == $_GET['yog-deactivate'] ) {

			check_admin_referer( 'yog-deactivate', 'yog-deactivate-nonce' );

			$plugins = TGM_Plugin_Activation::$instance->plugins;

			foreach( $plugins as $plugin ) {
				if ( $plugin['slug'] == $_GET['plugin'] ) {

					deactivate_plugins( $plugin['file_path'] );

                    wp_redirect( admin_url( 'admin.php?page=' . $_GET['page'] ) );
					exit;
				}
			}
		}

		// Activate plugin
		if ( isset( $_GET['yog-activate'] ) && 'activate-plugin' == $_GET['yog-activate'] ) {

			check_admin_referer( 'yog-activate', 'yog-activate-nonce' );

			$plugins = TGM_Plugin_Activation::$instance->plugins;

			foreach( $plugins as $plugin ) {
				if ( $plugin['slug'] == $_GET['plugin'] ) {

					activate_plugin( $plugin['file_path'] );

					wp_redirect( admin_url( 'admin.php?page=' . $_GET['page'] ) );
					exit;
				}
			}
		}
    }
}
new Yog_Admin;
