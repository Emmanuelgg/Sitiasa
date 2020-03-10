<?php
/*
 * Export options
*/
$this->sections[] = array(
	'title'  => esc_html__('Import/Export', 'flipmart'),
	'desc'   => esc_html__('Import/Export Options', 'flipmart'),
	'icon'   => 'el-icon-arrow-down',
	'fields' => array(
		
		array(
			'id'         => 'opt-import-sample-data',
			'type'		 => 'raw',
			'title'      => 'Import sample data',
			'content'	 => esc_html__( 'TODO', 'flipmart' ),
		),
		
		array(
			'id'         => 'opt-import-export',
			'type'       => 'import_export',
			'title'      => esc_html__('Import Export', 'flipmart'),
			'subtitle'   => esc_html__('Save and restore your Redux options', 'flipmart'),
			'full_width' => false,
		)
	)
);