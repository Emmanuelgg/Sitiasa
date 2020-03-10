<?php
/**
* Theme Framework
* The Yog_Admin_Dashboard base class
*/

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Yog_Admin_Dashboard extends Yog_Admin_Page {

	/**
	 * [__construct description]
	 * @method __construct
	 */
	public function __construct() {
        if (class_exists('Yog_Addons')) {
            $this->id = 'yog';    
        }else{
            $this->id = 'yog-dashboard.php';
        }    
		$this->page_title = 'CKThemes';
		$this->menu_title = 'CKThemes';
		$this->position = '50';

		parent::__construct();
	}

	/**
	 * [display description]
	 * @method display
	 * @return [type]  [description]
	 */
	public function display() {
	    require_once( get_template_directory().'/yog/admin/views/yog-dashboard.php' );
	}

	/**
	 * [save description]
	 * @method save
	 * @return [type] [description]
	 */
	public function save() {

	}
}
new Yog_Admin_Dashboard;
