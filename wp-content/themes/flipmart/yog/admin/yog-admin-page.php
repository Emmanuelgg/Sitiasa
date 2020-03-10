<?php
/**
* Theme Framework
* The Yog_Admin_Page base class
*/

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Yog_Admin_Page extends Yog_Base {

	/**
     * The slug name for the parent menu.
     * @var string
     */
    public $parent = null;

	/**
     * The capability required for this menu to be displayed to the user.
     * @var string
     */
    public $capability = 'manage_options';

	/**
     * The icon for this menu.
     *
     * @var string
     */
    public $icon = 'dashicons-art';

	/**
     * The position in the menu order this menu should appear.
     *
     * @var string
     */
    public $position;

	/**
	 * [__construct description]
	 * @method __construct
	 */
	public function __construct() {

		$priority = -1;
		if ( isset( $this->parent ) && $this->parent ) {
			$priority = intval( $this->position );
		}

		$this->add_action( 'admin_menu', 'register_page', $priority );

		if( !isset( $_GET['page'] ) || empty( $_GET['page'] ) || ! $this->id === $_GET['page'] ) {
			return;
		}

		if( method_exists( $this, 'save' ) ) {
			$this->add_action( 'admin_init', 'save' );
		}
	}

	/**
	 * [register_page description]
	 * @method register_page
	 * @return [type]        [description]
	 */
	public function register_page() {
        
        if (class_exists('Yog_Addons')) {
            if( ! $this->parent && function_exists( 'yog_admin_page_menu' ) ) {
			    yog_admin_page_menu(
    				$this->page_title,
    				$this->menu_title,
    				$this->capability,
    				$this->id,
    				array( $this, 'display' ),
    				$this->icon,
    				$this->position
    			);
    		}
    		elseif( function_exists( 'yog_admin_page_sub_menu' ) ) {
    			yog_admin_page_sub_menu(
    				$this->parent,
    				$this->page_title,
    				$this->menu_title,
    				$this->capability,
    				$this->id,
    				array( $this, 'display' )
    			);
    		}   
        }else{
            if( ! $this->parent ) {
    			add_theme_page(
    				$this->page_title,
    				$this->menu_title,
    				$this->capability,
    				$this->id,
	  			  array( $this, 'display' )
    			);
    		}
	    	else {
    			add_theme_page(
    				$this->page_title,
    				$this->menu_title,
    				$this->capability,
    				$this->id,
    				array( $this, 'display' )
    			);
    		}
        }
	}
}
