<?php
/**
 * Theme Meta Box Fields Options Init
 *
 * @class Yog_Theme_Options
 */

class Yog_Meta_Boxes extends Yog_Base {

	/**
	 * Construct
	 */
	public function __construct() {

		if ( is_admin() && yog()->get_option_name() ) {
			$this->add_action( 'redux/metaboxes/'.yog()->get_option_name().'/boxes', 'add_metaboxes' );
		}
	}

	/**
	 * Add Metaboxes
	 * @method setSections
	 */
	public function add_metaboxes() {
		$available_sections = get_theme_support( 'yog-metaboxes' );
		$available_sections = isset( $available_sections[0] ) ? $available_sections[0] : false;

		if( ! $available_sections ) {
			return;
		}

		$path = get_template_directory() . '/theme/';
		foreach( $available_sections as $section ) {
			$file = "metaboxes/yog-{$section}.php";
			include_once $path . $file;
		}

		return $this->process_sections($sections);
	}

	/**
	 * Process sections
	 * @param  array $sections array of sections
	 * @return array processed sections
	 */
	protected function process_sections($sections) {

		if (!is_array($sections)) {
			return false;
		}

		$metaboxes = array();

		//Create metaboxes first
		foreach ( $sections as $section ) {

			if ( !isset( $section['post_types'] ) || !is_array( $section['post_types'] ) ) {
				continue;
			}

			foreach ( $section['post_types'] as $post_type ) {

				if ( isset( $section['separate_box'] ) && $section['separate_box'] === true ) {
					$metabox_id = 'yog-'.$post_type.'-'.sanitize_key($section['box_title']).'-options';
					$box_title = $section['box_title'];
				} else {
					$metabox_id = 'yog-'.$post_type.'-options';
					$box_title = sprintf(   esc_html__('%s Options', 'flipmart'), ucwords(str_replace( array('_','-'), ' ', $post_type ) ) );
				}

				if ( !isset($metaboxes[ $metabox_id ]) || ( isset( $section['separate_box'] ) && $section['separate_box'] === true ) ) {

					$metaboxes[ $metabox_id ] = array(
						'id' => $metabox_id,
						'title' => $box_title,
						'post_types' => array($post_type),
						'position' => 'normal', // normal, advanced, side
						'priority' => 'high', // high, core, default, low
						'sections' => array($section)
					);

					if( !empty( $section['post_format'] ) ) {
						$metaboxes[ $metabox_id ]['post_format'] = $section['post_format'];
					}
					if( !empty( $section['position'] ) ) {
						$metaboxes[ $metabox_id ]['position'] = $section['position'];
					}
					if( !empty( $section['priority'] ) ) {
						$metaboxes[ $metabox_id ]['priority'] = $section['priority'];
					}
					if( !empty( $section['show_on'] ) ) {
						$metaboxes[ $metabox_id ]['show_on'] = $section['show_on'];
					}
				} else {
					$metaboxes[ $metabox_id ]['sections'][] = $section;
				}
			}
		}

		return $metaboxes;
	}
}
