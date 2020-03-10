<?php
/*
 * Extras Section
*/
$this->sections[] = array(
	'title'  =>  esc_html__('Extras', 'flipmart'),
	'icon'   => 'el-icon-cogs'
);

require_once( get_template_directory().'/theme/theme-options/yog-page-404.php' );
require_once( get_template_directory().'/theme/theme-options/yog-page-translation.php' );
require_once( get_template_directory().'/theme/theme-options/yog-search.php' );