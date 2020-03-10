<?php
/**
* Theme Framework
* The dashbaord class
*/

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Yog_Admin_Plugins extends Yog_Admin_Page {

	/**
	 * [__construct description]
	 * @method __construct
	 */
	public function __construct() {

		$this->id = 'yog-plugins';
		$this->page_title = 'Yog Plugins';
		$this->menu_title = 'Plugins';
		$this->parent = 'yog';

		parent::__construct();
	}

	/**
	 * [display description]
	 * @method display
	 * @return [type]  [description]
	 */
	public function display() {
	    require_once( get_template_directory().'/yog/admin/views/yog-plugins.php' );
	}

	/**
	 * [save description]
	 * @method save
	 * @return [type] [description]
	 */
	public function save() {

	}
}
new Yog_Admin_Plugins;
