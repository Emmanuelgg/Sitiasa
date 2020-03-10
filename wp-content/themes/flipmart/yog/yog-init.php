<?php
/**
 * Theme Framework
 * The Yog_Theme initiate the theme engine
 */

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Include base class
get_template_part( 'yog/yog-base' );

// For developers to hook.
yog_action( 'before_init' );

/**
 * Yog Theme
 */
class Yog_Theme extends Yog_Base {

	/**
	 * [$version description]
	 * @var string
	 */
	private $version = '2.6';

	/**
	 * Theme options values
	 * @var array
	 */
	protected $theme_options_values = array();

	/**
     * Hold an instance of Yog_Theme class.
     * @var Yog_Theme
     */
    protected static $instance = null;

	/**
	 * Main Yog_Theme instance.
	 *
	 * @return Yog_Theme - Main instance.
	 */
    public static function instance() {
        if(null == self::$instance) {
            self::$instance = new Yog_Theme();
        }

        return self::$instance;
    }

	/**
	 * [__construct description]
	 * @method __construct
	 */
	private function __construct() {

		$this->init_hooks();
	}

	/**
	 * [init_hooks description]
	 * @method init_hooks
	 * @return [type]     [description]
	 */
	private function init_hooks() {

		$this->add_action( 'after_setup_theme', 'includes', 2 );
		$this->add_action( 'after_setup_theme', 'setup_theme', 7 );
		$this->add_action( 'after_setup_theme', 'admin', 7 );
		$this->add_action( 'after_setup_theme', 'redux_init', 10 );
		$this->add_action( 'after_setup_theme', 'extensions', 25 );

		// For developers to hook.
		yog_action( 'loaded' );
	}

	/**
	 * [includes description]
	 * @method includes
	 * @return [type]   [description]
	 */
	public function includes() {

		// Load Core
        require_once( get_template_directory().'/yog/yog-helpers.php' );
        require_once( get_template_directory().'/yog/yog-theme-options-init.php' );
        require_once( get_template_directory().'/yog/yog-meta-boxes-init.php' );
        require_once( get_template_directory().'/yog/yog-dynamic-css.php' );
        require_once( get_template_directory().'/yog/yog-ajax.php' );
		
		// Load Structure
        require_once( get_template_directory().'/yog/structure/markup.php' );
        require_once( get_template_directory().'/yog/structure/header.php' );
        require_once( get_template_directory().'/yog/structure/footer.php' );
        require_once( get_template_directory().'/yog/structure/posts.php' );
        require_once( get_template_directory().'/yog/structure/comments.php' );
        
        //Widgets.
        if( 'woomart' == yog_helper()->yog_get_layout( 'version' ) ){
            
            require_once( get_template_directory().'/theme/widgets/yog-bucket-cpt.php' );
            require_once( get_template_directory().'/theme/widgets/yog-contact-info.php' );
            require_once( get_template_directory().'/theme/widgets/yog-recent-post.php' );
            
            // Load Woocommerce stuff
            require_once( get_template_directory().'/yog/vendors/woocommerce/yog-woo-woocommerce-init.php' );
            
        }else{
            
            require_once( get_template_directory().'/theme/widgets/yog-banner-widget.php' );
            require_once( get_template_directory().'/theme/widgets/yog-category-accordion-widget.php' );
            require_once( get_template_directory().'/theme/widgets/yog-contact-info-widget.php' );
            require_once( get_template_directory().'/theme/widgets/yog-post-tab-widget.php' );
            require_once( get_template_directory().'/theme/widgets/yog-product-hot-deals-widget.php' );
            require_once( get_template_directory().'/theme/widgets/yog-mega-menu-widget.php' );
            require_once( get_template_directory().'/theme/widgets/yog-testimonials-widget.php' );
            require_once( get_template_directory().'/theme/widgets/yog-twitter-feeds-widget.php' );
            require_once( get_template_directory().'/theme/widgets/yog-instagram-widget.php' );
            
            // Load Woocommerce stuff
            require_once( get_template_directory().'/yog/vendors/woocommerce/yog-woocommerce-init.php' );
                
        }
        
        if( ( 'book' == yog_helper()->yog_get_layout( 'modify' ) || 'kidswear' == yog_helper()->yog_get_layout( 'modify' ) || 'engineer' == yog_helper()->yog_get_layout( 'modify' ) ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
            require_once( get_template_directory().'/theme/widgets/yog-recent-posts-widget.php' );
        }
        
        if( ( 'flower' == yog_helper()->yog_get_layout( 'modify' ) || 'autoparts' == yog_helper()->yog_get_layout( 'modify' ) ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
            require_once( get_template_directory().'/theme/widgets/yog-social-icons-widget.php' );
            require_once( get_template_directory().'/theme/widgets/yog-payment-method-widget.php' );
        }
        
        if( ( 'jewellery' == yog_helper()->yog_get_layout( 'modify' ) || 'seo' == yog_helper()->yog_get_layout( 'modify' ) || 'lingerie' == yog_helper()->yog_get_layout( 'modify' ) || 'engineer' == yog_helper()->yog_get_layout( 'modify' ) ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
            require_once( get_template_directory().'/theme/widgets/yog-about-us-widget.php' );
        }
        
	}

	/**
	 * [setup_theme description]
	 * @method setup_theme
	 * @return [type]      [description]
	 */
	public function setup_theme() {

		// Set Content Width
		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 780;
		}

		// Localization
		load_theme_textdomain( 'flipmart', trailingslashit( WP_LANG_DIR ) . 'themes/' ); // From Wp-Content
        load_theme_textdomain( 'flipmart', get_stylesheet_directory()  . '/languages' ); // From Child Theme
        load_theme_textdomain( 'flipmart', get_template_directory()    . '/languages' ); // From Parent Theme

		// Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'yog-assets'
        ));

		// Theme Specific Setup
		$this->load_theme_part( 'theme-setup' );
		$this->load_theme_part( 'theme-scripts' );
		$this->load_theme_part( 'theme-hooks' );
        $this->load_theme_part( 'theme-translation' );
		$this->load_theme_part( 'theme-dynamic-css' );
	}

	/**
	 * [admin description]
	 * @method admin
	 * @return [type] [description]
	 */
	public function admin() {

		if( is_admin() ) {
		    require_once( get_template_directory().'/yog/admin/yog-admin-init.php' );
		}

	}

	/**
	 * Init redux framework
	 * @method redux_init
	 */
	public function redux_init() {

		$this->add_action( 'redux/extensions/'. $this->get_option_name() .'/before', 'load_redux_extensions', 0 );
		$this->add_action( 'redux/'. $this->get_option_name() .'/field/class/typography', 'register_typography' );
		$this->add_action( 'redux/'. $this->get_option_name() .'/field/class/gradient', 'register_gradient' );

		new Yog_Meta_Boxes;
		new Yog_Theme_Options;
        new Yog_Dynamic_CSS;
	}

	/**
	 * [load_redux_extensions description]
	 * @method load_redux_extensions
	 * @return [type]                [description]
	 */
	public function load_redux_extensions( $redux ) {
		$path = get_template_directory() . '/yog/extensions/';
		$exts = array( 'metaboxes', 'repeater', 'datetime' );

		foreach( $exts as $ext ) {

			$extension_class = 'ReduxFramework_extension_' . $ext;
			$class_file = $path . 'redux-' . $ext . '/extension_' . $ext . '.php';
			$class_file = apply_filters( 'redux/extension/' . $redux->args['opt_name'] . '/' . $ext, $class_file );

			if( !class_exists( $extension_class ) && $class_file ) {
				require_once( $class_file );
				$extension = new $extension_class( $redux );
			}
		}
	}

	/**
	 * [register_gradient description]
	 * @method register_gradient
	 * @return [type]              [description]
	 */
	public function register_gradient() {
		return get_template_directory() . '/yog/extensions/redux-gradient/field_gradient.php';
	}

	/**
	 * [register_typography description]
	 * @method register_typography
	 * @return [type]              [description]
	 */
	public function register_typography() {
		return get_template_directory() . '/yog/extensions/redux-typography/field_typography.php';
	}

	/**
	 * [extensions description]
	 * @method extensions
	 * @return [type]     [description]
	 */
	public function extensions() {

		// check
		$extensions = get_theme_support( 'yog-extension' );
		if( empty( $extensions ) || empty( $extensions[0] ) ) {
			return;
		}

		// Load
		$extensions = $extensions[0];
		foreach( $extensions as $extension ) {
			$this->load_extension( $extension );
		}
	}

	/**
	 * [set_option_name description]
	 * @method set_option_name
	 * @param  string          $name [description]
	 */
	public function set_option_name( $name = '' ) {

		if( $name ) {
			$this->theme_options_name = $name;
		}
	}

	/**
	 * [get_option_name description]
	 * @method get_option_name
	 * @param  string          $name [description]
	 * @return [type]                [description]
	 */
	public function get_option_name( $name = '' ) {
		return $this->theme_options_name;
	}

	// Helper ----------------------------------------

	/**
	 * [get_version description]
	 * @method get_version
	 * @return [type]      [description]
	 */
	public function get_version() {
		return $this->version;
	}

	/**
	 * [load_theme_part description]
	 * @method load_theme_part
	 * @param  [type]          $slug [description]
	 * @param  [type]          $args [description]
	 * @return [type]                [description]
	 */
	public function load_theme_part( $slug, $args = null ) {
		yog_helper()->get_template_part( 'theme/' . $slug, $args );
	}

	/**
	 * [load_library description]
	 * @method load_library
	 * @param  [type]       $slug [description]
	 * @param  [type]       $args [description]
	 * @return [type]             [description]
	 */
	public function load_library( $slug, $args = null ) {
		yog_helper()->get_template_part( 'yog/libs/' . $slug, $args );
	}

	public function load_assets( $slug ) {
		return get_template_directory_uri() . '/yog/assets/' . $slug;
	}
    
    public function load_theme_assets( $slug ) {
		return get_template_directory_uri() . '/assets/' . $slug;
	}
}

/**
 * Main instance of Yog_Theme.
 *
 * Returns the main instance of Yog_Theme to prevent the need to use globals.
 *
 * @return Yog_Theme
 */
function yog() {
	return Yog_Theme::instance();
}
yog(); // init it

// For developers to hook.
yog_action( 'init' );
