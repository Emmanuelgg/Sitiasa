<?php
/*
 * Search Result Page
*/
$this->sections[] = array (
	'title'      => esc_html__( 'Search Result Page', 'flipmart' ),
	'subsection' => true,
	'fields'     => array(
        array(
            'id'            => 'search-result-limit',
            'type'          => 'slider',
            'title'         => esc_html__('Search Result Limit', 'flipmart'),
            'subtitle'      => esc_html__('Choose how many search result will display on search page', 'flipmart'),
            'desc'          => esc_html__('Slider description. Min: 1, max: 10, step: 1, default value: 12', 'flipmart'),
            'default'       => 12,
            'min'           => 1,
            'step'          => 1,
            'max'           => 100,
            'display_value' => 'label'
        )
    )
);