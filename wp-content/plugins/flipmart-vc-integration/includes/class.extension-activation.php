<?php
/**
 * Activation handler
 *
 * @package     FLIPMART\ActivationHandler
 * @since       1.0.0
 */


// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;


/**
 * FLIPMART Extension Activation Handler Class
 *
 * @since       1.0.0
 */
class FLIPMART_Extension_Activation {

    public $plugin_name, $plugin_path, $plugin_file, $has_flipmart, $flipmart_base;

    /**
     * Setup the activation class
     *
     * @access      public
     * @since       1.0.0
     * @return      void
     */
    public function __construct( $plugin_path, $plugin_file ) {
        // We need plugin.php!
        require_once( ABSPATH . 'wp-admin/includes/plugin.php' );

        $plugins = get_plugins();

        // Set plugin directory
        $plugin_path = array_filter( explode( '/', $plugin_path ) );
        $this->plugin_path = end( $plugin_path );

        // Set plugin file
        $this->plugin_file = $plugin_file;

        // Set plugin name
        if( isset( $plugins[$this->plugin_path . '/' . $this->plugin_file]['Name'] ) ) {
            $this->plugin_name = str_replace( 'Easy Digital Downloads - ', '', $plugins[$this->plugin_path . '/' . $this->plugin_file]['Name'] );
        } else {
            $this->plugin_name = __( 'Flipmart Easy Digital Downloads Visual Composer Integration plugin', 'flipmart' );
        }

        // Is FLIPMART installed?
        foreach( $plugins as $plugin_path => $plugin ) {
            if( $plugin['Name'] == 'Easy Digital Downloads' ) {
                $this->has_flipmart = true;
                $this->flipmart_base = $plugin_path;
                break;
            }
        }
    }


    /**
     * Process plugin deactivation
     *
     * @access      public
     * @since       1.0.0
     * @return      void
     */
    public function run() {
        // Display notice
        add_action( 'admin_notices', array( $this, 'missing_flipmart_notice' ) );
    }


    /**
     * Display notice if FLIPMART isn't installed
     *
     * @access      public
     * @since       1.0.0
     * @return      string The notice to display
     */
    public function missing_flipmart_notice() {
        if( $this->has_flipmart ) {
            $url  = esc_url( wp_nonce_url( admin_url( 'plugins.php?action=activate&plugin=' . $this->flipmart_base ), 'activate-plugin_' . $this->flipmart_base ) );
            $link = '<a href="' . $url . '">' . __( 'activate it', 'flipmart-extension-activation' ) . '</a>';
        } else {
            $url  = esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=easy-digital-downloads' ), 'install-plugin_easy-digital-downloads' ) );
            $link = '<a href="' . $url . '">' . __( 'install it', 'flipmart-extension-activation' ) . '</a>';
        }
        
        echo '<div class="error"><p>' . $this->plugin_name . sprintf( __( ' requires Easy Digital Downloads! Please %s to continue!', 'flipmart-extension-activation' ), $link ) . '</p></div>';
    }
}