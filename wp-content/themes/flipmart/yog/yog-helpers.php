<?php
/**
 * The Helper
 * Contains all the helping functions
 *
 *
 * Table of Content
 *
 * 1. WordPress Helpers
 * 2. Markup Helpers
 * 3. Theme Options/Meta Helpers
 * 4. Array opperations
 */

/**
 * Main helper functions.
 *
 * @class Yog_Helper
*/
class Yog_Helper {

	/**
	 * Hold an instance of Yog_Helper class.
	 * @var Yog_Helper
	 */
	protected static $instance = null;

	/**
	 * Main Yog_Helper instance.
	 *
	 * @return Yog_Helper - Main instance.
	 */
	public static function instance() {

		if(null == self::$instance) {
			self::$instance = new Yog_Helper();
		}

		return self::$instance;
	}

	// 1. WordPress Helpers -----------------------------------------------
	/**
	 * [get_template_part description]
	 * @method get_template_part
	 * @param  [type]            $template [description]
	 * @param  [type]            $args     [description]
	 * @return [type]                      [description]
	 */
	public function get_template_part( $template, $args = null ) {

		if ( $args && is_array( $args ) ) {
			extract( $args );
		}

		$located = locate_template( $template . '.php' );

		if ( ! file_exists( $located ) ) {
			_doing_it_wrong( __FUNCTION__, sprintf(  esc_html__( '<code>%s</code> does not exist.', 'flipmart' ), $located ), null );
			return;
		}

		include $located;
	}
    
    /**
     * Uglify String
     */
    public function yog_uglify( $str ) {
        $blanks = array( ':', '&', ';', '#' );
        $underscores = array( ' ', '.', '/' );
        $str = strtolower( str_replace( $blanks, '', str_replace( $underscores, '_', $str ) ) );
        return $str;
    }
    
    /**
     * Validate the options by type before saving
     */
    public function yog_validate_setting( $value, $type, $field_id, $section ) {
    
        // check for null
        if ( ! $value || ! $type || ! $field_id ) return $value;
    
        
        // type = colorpicker
        if( 'colorpicker' == $type ) {
            $value = stripslashes( sanitize_text_field( $value ) );
            $value = str_replace( '#', '', $value );
    
            if( !$this->is_str_starts_with( 'rgb', $value ) )
                $value = '#' . $value;
        }
        
        return $value;
    }
    
    /**
     * Checks whether string begins with given string.
     */
    public function is_str_starts_with( $search, $string ) {
        return ( strncmp( $string, $search, strlen( $search ) ) == 0 );
    }

	/**
	 * [get_theme_name description]
	 * @method get_theme_name
	 * @return [type]         [description]
	 */
	public function get_current_theme() {
		$current_theme = wp_get_theme();
		if( $current_theme->parent_theme ) {
			$template_dir  = basename( get_template_directory() );
			$current_theme = wp_get_theme( $template_dir );
		}

		return $current_theme;
	}

	/**
	 * Generate plugin action link
	 * @return html
	 */
	public function tgmpa_plugin_action( $plugin, $status ) {

		$btn_class = $btn_text = $nonce_url = '';
		$page = admin_url( 'admin.php?page=' . $_GET['page'] );

		switch( $status ) {
			case 'not-installed':
				$btn_class = 'white';
				$btn_text = esc_html_x( 'Install', 'Yog plugin installation page.', 'flipmart' );

				$nonce_url = wp_nonce_url(
					add_query_arg(
						array(
							'plugin' => urlencode( $plugin['slug'] ),
							'tgmpa-install' => 'install-plugin',
							'return_url' => $_GET['page']
						),
						TGM_Plugin_Activation::$instance->get_tgmpa_url()
					),
					'tgmpa-install',
					'tgmpa-nonce'
				);
				break;

			case 'installed':
				$btn_class = 'success';
				$btn_text = esc_html_x( 'Activate', 'Yog plugin installation page.', 'flipmart' );

				$nonce_url = wp_nonce_url(
					add_query_arg(
						array(
							'plugin' => urlencode( $plugin['slug'] ),
							'yog-activate' => 'activate-plugin'
						),
						$page
					),
					'yog-activate',
					'yog-activate-nonce'
				);
				break;

			case 'active':
				$btn_class = 'danger';
				$btn_text = esc_html_x( 'Deactivate', 'Yog plugin installation page.', 'flipmart' );

				$nonce_url = wp_nonce_url(
					add_query_arg(
						array(
							'plugin' => urlencode( $plugin['slug'] ),
							'yog-deactivate' => 'deactivate-plugin'
						),
						$page
					),
					'yog-deactivate',
					'yog-deactivate-nonce'
				);
				break;
		}

		printf(
			'<a class="yog-button" href="%4$s" title="%2$s %1$s"><span>%2$s</span> <i class="fa fa-angle-right"></i></a>',
			$plugin['name'], $btn_text, $btn_class, esc_url( $nonce_url )
		);
	}

	/**
	 * [sanitize_html_classes description]
	 * @method sanitize_html_classes
	 * @return (mixed: string / $fallback ) [description]
	 */
	public function sanitize_html_classes( $class, $fallback = null ) {

		// Explode it, if it's a string
		if ( is_string( $class ) ) {
			$class = explode( ' ', $class );
		}

		if ( is_array( $class ) && !empty( $class ) ) {
			$class = array_map( 'sanitize_html_class', $class );
			return join( ' ', $class );
		}
		else {
			return sanitize_html_class( $class, $fallback );
		}

	}

	public function get_vc_custom_css( $id ) {

		$out = '';

		if ( ! $id ) {
			return;
		}

		$post_custom_css = get_post_meta( $id, '_wpb_post_custom_css', true );
		if ( ! empty( $post_custom_css ) ) {
			$post_custom_css = strip_tags( $post_custom_css );
            yog_theme_assets()->yog_inline_css_script($post_custom_css);
		}

		$shortcodes_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true );
		if ( ! empty( $shortcodes_custom_css ) ) {
			$shortcodes_custom_css = strip_tags( $shortcodes_custom_css );
            yog_theme_assets()->yog_inline_css_script($shortcodes_custom_css);
		}

		return $out;
	}

	// 2. Markup Helpers -----------------------------------------------

	public function output_css( $styles = array() ) {

		// If empty return false
		if ( empty( $styles ) ) {
			return false;
		}

		$out = '';
		foreach ( $styles as $key => $value ) {

			if( ! $value ) {
				continue;
			}

			if( is_array( $value ) ) {

				switch( $key ) {

					case 'padding':
					case 'margin':
						$new_value = '';
						foreach( $value as $k => $v ) {

							if( '' != $v ) {
								$out .= sprintf( '%s: %s;', esc_html( $k ), $this->sanitize_unit($v) );
							}
						}
						break;

					default:
						$value = join( ';', $value );
				}
			}
			else {
				$out .= sprintf( '%s: %s;', esc_html( $key ), $value );
			}
		}

		return rtrim( $out, ';' );
	}

	public function sanitize_unit( $value ) {

		if( $this->str_contains( 'em', $value ) || $this->str_contains( 'rem', $value ) || $this->str_contains( '%', $value ) || $this->str_contains( 'px', $value ) ) {
			return $value;
		}

		return $value.'px';
	}

	/**
	 * Check if the string contains the given value.
	 *
	 * @param  string	$needle   The sub-string to search for
	 * @param  string	$haystack The string to search
	 *
	 * @return bool
	 */
    public function str_contains( $needle, $haystack ) {
        return strpos( $haystack, $needle ) !== false;
    }

	/**
	 * [str_starts_with description]
	 * @method str_starts_with
	 * @param  [type]          $needle   [description]
	 * @param  [type]          $haystack [description]
	 * @return [type]                    [description]
	 */
	public function str_starts_with( $needle, $haystack ) {
		return substr( $haystack, 0, strlen( $needle ) ) === $needle;
	}

	/**
	 * [html_attributes description]
	 *
	 * @method html_attributes
	 * @param  array           $attributes [description]
	 *
	 * @return [type]                [description]
	 */
	public function html_attributes( $attributes = array(), $prefix = '' ) {

		// If empty return false
		if ( empty( $attributes ) ) {
			return false;
		}

		$options = false;
		if( isset( $attributes['data-options'] ) ) {
			$options = $attributes['data-options'];
			unset( $attributes['data-options'] );
		}

		$out = '';
		foreach ( $attributes as $key => $value ) {

			if( ! $value ) {
				continue;
			}

			$key = $prefix . $key;
			if( true === $value ) {
				$value = 'true';
			}

			if( false === $value ) {
				$value = 'false';
			}

			if( is_array( $value ) ) {
				$out .= sprintf( ' %s=\'%s\'', esc_html( $key ), json_encode( $value ) );
			}
			else {
				$out .= sprintf( ' %s="%s"', esc_html( $key ), esc_attr( $value ) );
			}
		}

		if( $options ) {
			$out .= sprintf( ' data-options=\'%s\'', $options );
		}

		return $out;
	}

	public function attr( $context, $attributes = array() ) {
		echo $this->get_attr( $context, $attributes );
	}

	/**
	 * [get_attr description]
	 * @method get_attr
	 * @param  [type] $context    [description]
	 * @param  array  $attributes [description]
	 * @return [type]             [description]
	 */
	public function get_attr( $context, $attributes = array() ) {

		$defaults = array(
			'class' => sanitize_html_class( $context )
		);

		$attributes = wp_parse_args( $attributes, $defaults );
		$attributes = apply_filters( "yog_attr_{$context}", $attributes, $context );

		$output = $this->html_attributes( $attributes );
	    $output = apply_filters( "yog_attr_{$context}_output", $output, $attributes, $context );

	    return trim( $output );
	}
    
    /**
	 * [yog_check_layout description]
	 * @method get_attr
	 * @param  [type] $layout    [description]
	 * @return [type]             [description]
	 */
	public function yog_check_layout( $layout = 'fashion' ) {
        
		//Get Site Version
        $yog_theme_options = get_option( 'flipmart' );
        
        //Check Layout
        if( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' &&  $yog_theme_options['site-version-modify'] == $layout ){
            return true;
        }else{
            return false;
        }
        
	}
    
    /**
	 * [yog_get_layout description]
	 * @method get_attr
 	 * @param  [type] $content    [description]
	 * @return [type]             [description]
	 */
	public function yog_get_layout( $content ) {
        
		//Get Site Version
        $yog_theme_options = get_option( 'flipmart' );
        
        //Check Layout
        if( $content == 'version' && isset( $yog_theme_options['site-version'] )  ){
            return $yog_theme_options['site-version'];
        }elseif( $content == 'modify' && isset( $yog_theme_options['site-version-modify'] )  ){
            return $yog_theme_options['site-version-modify'];
        }
        
	}


	// 3. Option Helpers -----------------------------------------------
    /**
	 * [is_str_contain description]
	 * @method is_str_contain
	 * @param  [type]     $search      [description]
	 * @param  boolean    $in [description]
	 */
    function is_str_contain( $search, $in ) {
        // if in string
        if ( strpos( $in, $search ) !== false )
            return true;
        // if not in string
        return false;
    }
    
	/**
	 * [get_option description]
	 * @method get_option
	 * @param  [type]     $id      [description]
	 * @param  boolean    $default [description]
	 * @param  string     $context [description]
	 * @param  string     $esc     [description]
	 */
    public function get_option_print( $id, $esc = 'raw', $default = false, $context = 'all', $post_id = '' ) {
        echo $this->get_option( $id, $esc, $default, $context, $post_id );
    }

	/**
	 * [get_option description]
	 * @method get_option
	 * @param  [type]     $id      [description]
	 * @param  boolean    $default [description]
	 * @param  string     $context [description]
	 * @param  string     $esc     [description]
	 * @return [type]              [description]
	 */
	public function get_option( $id, $esc = 'raw', $default = '', $context = 'all', $post_id = null ) {

		$value = false;
		$keys = explode( '.', $id );
		$id = array_shift( $keys );

		// Get first value from context
		switch( $context ) {

			case 'options':
				$value = $this->get_theme_option( $id );
				break;

			case 'post':
				$value = $this->get_post_meta( $id, $post_id );
				break;

			default:
				$value = $this->get_post_meta( $id );
				$value = '' != $value ? $value : $this->get_theme_option( $id );
				break;
		}

		// parsing dot notation
		if( ! empty( $keys ) ) {
			foreach( $keys as $inner_key ) {

				if( isset( $value[$inner_key] ) ) {
					$value = $value[$inner_key];
				}
				else {
					break;
				}
			}
		}

		// Set default value if no value
		$value = ! empty( $value ) ? $value : $default;

		// Escape the value
		switch( $esc ) {

			case 'attr':
				$value = esc_attr( $value );
				break;

			case 'url':
				$value = esc_url( $value );
				break;

			case 'html':
				$value = esc_html( $value );
				break;

			case 'post':
				$value = wp_kses_post( $value );
				break;
		}

		// Return default
		return $value;
	}

	/**
	 * [get_post_meta description]
	 * @method get_post_meta
	 * @param  [type]        $id [description]
	 * @return [type]            [description]
	 */
	public function get_post_meta( $id, $post_id = null ) {

		if ( is_null( $post_id ) ) {
			$post_id = $this->get_current_page_id();
		}

		if ( ! $post_id ) {
			return;
		}

		$value = get_post_meta( $post_id, $id, true );
		if( is_array( $value ) ) {
			$value = array_filter($value);

			if( empty( $value ) ) {
				return '';
			}
		}
		return $value ? $value : '';
	}

	public function get_current_page_id() {

		global $post;
		$page_id = false;
		$object_id = is_null($post) ? get_queried_object_id() : $post->ID;

		// If we're on search page, set to false
		if( is_search() ) {
			$page_id = false;
		}
		// If we're not on a singular post, set to false
		if( ! is_singular() ) {
			$page_id = false;
		}
		// Use the $object_id if available
		if( ! is_home() && ! is_front_page() && ! is_archive() && isset( $object_id ) ) {
			$page_id = $object_id;
		}
		// if we're on front-page
		if( ! is_home() && is_front_page() && isset( $object_id ) ) {
			$page_id = $object_id;
		}
		// if we're on posts-page
		if( is_home() && ! is_front_page() ) {
			$page_id = get_option( 'page_for_posts' );
		}
        // The woocommerce shop page
		if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_tax( 'product_cat' ) || is_tax( 'product_tag' ) ) ) {
			if( $shop_page = wc_get_page_id( 'shop' ) ) {
				$page_id = $shop_page;
			}
		}
		// if in the loop
		if( in_the_loop() ) {
			$page_id = get_the_ID();
		}

		return $page_id;
	}

	/**
	 * [get_theme_option description]
	 * @method get_theme_option
	 * @param  [type]           $id [description]
	 * @return [type]               [description]
	 */
	public function get_theme_option( $id ) {

		$options = isset( $GLOBALS[yog()->get_option_name()] )? $GLOBALS[yog()->get_option_name()] : '';

		if( empty( $options ) || ! isset( $options[$id] ) ) {
			return '';
		}

		return $options[$id];
	}

	/**
	 * [dashboard_page_url description]
	 * @method dashboard_page_url
	 * @return [type]             [description]
	 */
	public function yog_dashboard_page_url() {

		if( isset( $_GET['page'] ) && 'yog' === $_GET['page'] ) {
			return '';
		}
        if ( in_array( 'yog-addons/yog-addons.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
            return admin_url( 'admin.php?page=yog' );
        }else{
            return admin_url( 'admin.php?page=yog-dashboard.php' );
        } 
	}
    

	/**
	 * [plugin_page_url description]
	 * @method plugin_page_url
	 * @return [type]          [description]
	 */
	public function yog_plugin_page_url() {
		return admin_url( 'admin.php?page=yog-plugins' );
	}
    
    /**
	 * [plugin_page_url description]
	 * @method plugin_page_url
	 * @return [type]          [description]
	 */
	public function yog_online_documentation_url() {
		return 'http://www.ckthemes.com/documentation/flipmart/';
	}
    
    /**
	 * [plugin_page_url description]
	 * @method plugin_page_url
	 * @return [type]          [description]
	 */
	public function yog_support_fourm_url() {
		return 'https://ckthemes.ticksy.com/';
	}
    
    /**
	 * [yog_check_plugin_activation description]
	 * @method yog_check_plugin_activation
	 * @return [type]          [description]
	 */
	public function yog_check_plugin_activation() {
		/**
         * Detect plugin. For use on Front End only.
         */
        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
         
        // check for plugin using plugin name
        if ( is_plugin_active( 'yog-addons/yog-addons.php' ) ) {
            return true;
        }else{
            return false;
        }
	}
}

/**
 * Main instance of yog_helper.
 *
 * Returns the main instance of yog_helper to prevent the need to use globals.
 *
 * @return yog_helper
 */
function yog_helper() {
	return Yog_Helper::instance();
}
