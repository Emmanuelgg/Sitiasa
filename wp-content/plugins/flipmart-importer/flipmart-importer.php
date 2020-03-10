<?php
/**
 * Plugin Name: Flipmart Importer
 * Plugin URI: http://www.ckthemes.com/
 * Description: A part of Flipmart Theme to Imports demo layouts
 * Version: 1.1
 * Author: CKthemes
 * Author URI: http://www.ckthemes.com/
 * Requires at least: 4.1
 * Tested up to: 4.9.4
 *
 * Text Domain: flipmart
 * Domain Path: /i18n/languages/
 *
 * @package Flipmart Importer
 * @category Core
 * @author CKthemes
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

define( 'Flipmart_Importer_URL', trailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'Flipmart_Importer_CORE_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

if ( ! class_exists( 'Flipmart_Importer' ) ) :
/**
 * Main Flipmart Importer Core Class
 *
 * @class Flipmart_Importer
 * @version	1.0
 */
final class Flipmart_Importer {
    
    /**
     * Hold an version of Flipmart_Importer class.
     * @var Flipmart_Importer
     */
	public $version = '1.0';
    
    /**
     * Hold an instance of Flipmart_Importer class.
     * @var Flipmart_Importer
     */
    protected static $instance = null;
    
    /**
	 * Main Flipmart_Importer instance.
	 *
	 * @return Flipmart_Importer - Main instance.
	 */
    public static function instance() {

		if(null == self::$instance) {
            self::$instance = new Flipmart_Importer();
        }

        return self::$instance;
    }
    
    /**
	 * Flipmart_Importer Constructor.
	 */
	public function __construct() {
	   
		add_action( 'yog_init', array( $this, 'flipmart_importer_includes' ), 0 );
        add_action( 'admin_notices', array( $this, 'flipmart_importer_activate_theme_notice' ), 0 );
        
        // Set up localisation.
		$this->flipmart_importer_load_plugin_textdomain();
	}
    
    /**
	 * Load Localisation files.
	 *
	 * Note: the first-loaded translation file overrides any following ones if the same translation is present.
	 *
	 * Locales found in:
	 *      - WP_LANG_DIR/flipmart-importer-addons/flipmart-importer-LOCALE.mo
	 *      - WP_LANG_DIR/plugins/flipmart-importer-LOCALE.mo
	 */
	public function flipmart_importer_load_plugin_textdomain() {
		$locale = is_admin() && function_exists( 'get_user_locale' ) ? get_user_locale() : get_locale();
		$locale = apply_filters( 'plugin_locale', $locale, 'flipmart-importer' );

		load_textdomain( 'flipmart-importer', WP_LANG_DIR . '/flipmart-importer-addons/flipmart-importer-'. $locale .'.mo' );
		load_plugin_textdomain( 'flipmart-importer', false, plugin_basename( dirname( __FILE__ ) ) . '/i18n/languages' );
	} 
    
    
    /**
	 * Include required core files used in admin and on the frontend.
	 */
	public function flipmart_importer_includes() {
	    
        
        if ( file_exists( dirname( __FILE__ ) . '/merlin/class-tgm-plugin-activation.php' ) ) {
            require_once dirname( __FILE__ ) . '/merlin/class-tgm-plugin-activation.php';
        }
        
        if ( file_exists( dirname( __FILE__ ) . '/merlin/class-merlin.php' ) ) {
            require_once dirname( __FILE__ ) . '/merlin/class-merlin.php';
        }
        
        if ( file_exists( dirname( __FILE__ ) . '/merlin/vendor/autoload.php' ) ) {
            require_once dirname( __FILE__ ) . '/merlin/vendor/autoload.php';
        }
        
        if ( file_exists( dirname( __FILE__ ) . '/merlin/merlin-config.php' ) ) {
            require_once dirname( __FILE__ ) . '/merlin/merlin-config.php';
        }
        
        if ( file_exists( dirname( __FILE__ ) . '/merlin/filters-sample.php' ) ) {
            require_once dirname( __FILE__ ) . '/merlin/filters-sample.php';
        }
        
    }
    
    public function flipmart_importer_activate_theme_notice() {

		if( did_action( 'yog_init' ) > 0 ) {
			return;
		}
	?>
		<div class="updated not-h2">
			<p><strong><?php esc_html_e( 'Please activate the Flipmart theme to use Flipmart Importer plugin.', 'flipmart-importer'); ?></strong></p>
			<?php
				$screen = get_current_screen();
				if ($screen -> base != 'themes'):
			?>
				<p><a href="<?php echo esc_url( admin_url( 'themes.php' ) ); ?>"><?php esc_html_e( 'Activate theme', 'flipmart-importer' ); ?></a></p>
			<?php endif; ?>
		</div>
	<?php
	}
    
    /**
	 * Plugin activation
	 */
	public static function activate() {
		flush_rewrite_rules();
	}

	/**
	 * Plugin deactivation
	 */
	public static function deactivate() {
		flush_rewrite_rules();
	}
 
}

/**
 * Main instance of Flipmart_Importer.
 *
 * Returns the main instance of Flipmart_Importer to prevent the need to use globals.
 *
 * @return Flipmart_Importer
 */
function flipmart_importer() {
	return Flipmart_Importer::instance();
}
flipmart_importer(); // init Flipmart_Importer Class

endif;