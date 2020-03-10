<?php

/**
 * Format of the $css array:
 * $css['media-query']['element']['property'] = value
 *
 * If no media query is required then set it to 'global'
 *
 * If we want to add multiple values for the same property then we have to make it an array like this:
 * $css[media-query][element]['property'][] = value1
 * $css[media-query][element]['property'][] = value2
 *
 * Multiple values defined as an array above will be parsed separately.
 */
function yog_dynamic_css_array() {

	$css = array();

	$body_typography_elements = yog_get_body_typography_elements();
	$h1_typography_elements = yog_get_h1_typography_elements();
	$h2_typography_elements = yog_get_h2_typography_elements();
	$h3_typography_elements = yog_get_h3_typography_elements();
	$h4_typography_elements = yog_get_h4_typography_elements();
	$h5_typography_elements = yog_get_h5_typography_elements();
	$h6_typography_elements = yog_get_h6_typography_elements();


	$body_typography = yog_helper()->get_option( 'body_typography' );
	if ( isset ( $body_typography_elements['family'] ) ) {
		$css['global'][ yog_implode( $body_typography_elements['family'] ) ] = array(
			'font-family' => wp_strip_all_tags( $body_typography['font-family'] ),
			'font-weight' => intval( $body_typography['font-weight'] ),
			'letter-spacing' => round( $body_typography['letter-spacing'] ) . 'px',
			'font-style' => ! empty( $body_typography['font-style'] ) ? esc_attr( $body_typography['font-style'] ) : ''
		);
	}
	if ( isset ( $body_typography_elements['line-height'] ) ) {
		$css['global'][ yog_implode( $body_typography_elements['line-height'] ) ]['line-height']    = $body_typography['line-height'];
	}
	if ( isset ( $body_typography_elements['size'] ) ) {
		$css['global'][ yog_implode( $body_typography_elements['size'] ) ]['font-size']      = $body_typography['font-size'];
	}
	if ( isset ( $body_typography_elements['color'] ) ) {
		$css['global'][ yog_implode( $body_typography_elements['color'] ) ]['color']          = $body_typography['color'];
	}

	/**
	 * Headings
	 */

	// H1
	$h1_typography = yog_helper()->get_option( 'h1_typography' );
	if ( isset ( $h1_typography_elements['family'] ) ) {
		$css['global'][ yog_implode( $h1_typography_elements['family'] ) ] = array(
			'font-family' => wp_strip_all_tags( $h1_typography['font-family'] ),
			'font-weight' => intval( $h1_typography['font-weight'] ),
			'line-height' => $h1_typography['line-height'],
			'letter-spacing' => round( $h1_typography['letter-spacing'] ) . 'px',
			'font-style' => ! empty( $h1_typography['font-style'] ) ? esc_attr( $h1_typography['font-style'] ) : ''
		);
	}

	if ( isset ( $h1_typography_elements['size'] ) ) {
		$css['global'][ yog_implode( $h1_typography_elements['size'] ) ]['font-size'] = $h1_typography['font-size'];
	}
	if ( isset ( $h1_typography_elements['color'] ) ) {
		$css['global'][ yog_implode( $h1_typography_elements['color'] ) ]['color'] = $h1_typography['color'];
	}

	// H2
	$h2_typography = yog_helper()->get_option( 'h2_typography' );
	if ( isset ( $h2_typography_elements['family'] ) ) {
		$css['global'][ yog_implode( $h2_typography_elements['family'] ) ] = array(
			'font-family' => wp_strip_all_tags( $h2_typography['font-family'] ),
			'font-weight' => intval( $h2_typography['font-weight'] ),
			'line-height' => $h2_typography['line-height'],
			'letter-spacing' => round( $h2_typography['letter-spacing'] ) . 'px',
			'font-style' => ! empty( $h2_typography['font-style'] ) ? esc_attr( $h2_typography['font-style'] ) : ''
		);
	}

	if ( isset ( $h2_typography_elements['size'] ) ) {
		$css['global'][ yog_implode( $h2_typography_elements['size'] ) ]['font-size'] = $h2_typography['font-size'];
	}
	if ( isset ( $h2_typography_elements['color'] ) ) {
		$css['global'][ yog_implode( $h2_typography_elements['color'] ) ]['color'] = $h2_typography['color'];
	}

	// H3
	$h3_typography = yog_helper()->get_option( 'h3_typography' );
	if ( isset ( $h3_typography_elements['family'] ) ) {
		$css['global'][ yog_implode( $h3_typography_elements['family'] ) ] = array(
			'font-family' => wp_strip_all_tags( $h3_typography['font-family'] ),
			'font-weight' => intval( $h3_typography['font-weight'] ),
			'line-height' => $h3_typography['line-height'],
			'letter-spacing' => round( $h3_typography['letter-spacing'] ) . 'px',
			'font-style' => ! empty( $h3_typography['font-style'] ) ? esc_attr( $h3_typography['font-style'] ) : ''
		);
	}

	if ( isset ( $h3_typography_elements['size'] ) ) {
		$css['global'][ yog_implode( $h3_typography_elements['size'] ) ]['font-size'] = $h3_typography['font-size'];
	}
	if ( isset ( $h3_typography_elements['color'] ) ) {
		$css['global'][ yog_implode( $h3_typography_elements['color'] ) ]['color'] = $h3_typography['color'];
	}

	// H4
	$h4_typography = yog_helper()->get_option( 'h4_typography' );
	if ( isset ( $h4_typography_elements['family'] ) ) {
		$css['global'][ yog_implode( $h4_typography_elements['family'] ) ] = array(
			'font-family' => wp_strip_all_tags( $h4_typography['font-family'] ),
			'font-weight' => intval( $h4_typography['font-weight'] ),
			'line-height' => $h4_typography['line-height'],
			'letter-spacing' => round( $h4_typography['letter-spacing'] ) . 'px',
			'font-style' => ! empty( $h4_typography['font-style'] ) ? esc_attr( $h4_typography['font-style'] ) : ''
		);
	}

	if ( isset ( $h4_typography_elements['size'] ) ) {
		$css['global'][ yog_implode( $h4_typography_elements['size'] ) ]['font-size'] = $h4_typography['font-size'];
	}
	if ( isset ( $h4_typography_elements['color'] ) ) {
		$css['global'][ yog_implode( $h4_typography_elements['color'] ) ]['color'] = $h4_typography['color'];
	}

	// H5
	$h5_typography = yog_helper()->get_option( 'h5_typography' );
	if ( isset ( $h5_typography_elements['family'] ) ) {
		$css['global'][ yog_implode( $h5_typography_elements['family'] ) ] = array(
			'font-family' => wp_strip_all_tags( $h5_typography['font-family'] ),
			'font-weight' => intval( $h5_typography['font-weight'] ),
			'line-height' => $h5_typography['line-height'],
			'letter-spacing' => round( $h5_typography['letter-spacing'] ) . 'px',
			'font-style' => ! empty( $h5_typography['font-style'] ) ? esc_attr( $h5_typography['font-style'] ) : ''
		);
	}

	if ( isset ( $h5_typography_elements['size'] ) ) {
		$css['global'][ yog_implode( $h5_typography_elements['size'] ) ]['font-size'] = $h5_typography['font-size'];
	}
	if ( isset ( $h5_typography_elements['color'] ) ) {
		$css['global'][ yog_implode( $h5_typography_elements['color'] ) ]['color'] = $h5_typography['color'];
	}

	// H6
	$h6_typography = yog_helper()->get_option( 'h6_typography' );
	if ( isset ( $h6_typography_elements['family'] ) ) {
		$css['global'][ yog_implode( $h6_typography_elements['family'] ) ] = array(
			'font-family' => wp_strip_all_tags( $h6_typography['font-family'] ),
			'font-weight' => intval( $h6_typography['font-weight'] ),
			'line-height' => $h6_typography['line-height'],
			'letter-spacing' => round( $h6_typography['letter-spacing'] ) . 'px',
			'font-style' => ! empty( $h6_typography['font-style'] ) ? esc_attr( $h6_typography['font-style'] ) : ''
		);
	}

	if ( isset ( $h6_typography_elements['size'] ) ) {
		$css['global'][ yog_implode( $h6_typography_elements['size'] ) ]['font-size'] = $h6_typography['font-size'];
	}
	if ( isset ( $h6_typography_elements['color'] ) ) {
		$css['global'][ yog_implode( $h6_typography_elements['color'] ) ]['color'] = $h6_typography['color'];
	}

	// Content Padding
	$content_padding = yog_helper()->get_option('content-padding');
	if( !empty( $content_padding ) ) {

		if( isset( $content_padding['units'] ) ) {
			unset( $content_padding['units'] );
		}
		$css['global'][ yog_implode('#content') ] = $content_padding;
	}

	return $css;
}


// Helpers ---------------------------------------

/**
 * Helper function.
 * Merge and combine the CSS elements
 */
function yog_implode( $elements = array() ) {

	if ( ! is_array( $elements ) ) {
		return $elements;
	}

	// Make sure our values are unique
	$elements = array_unique( array_filter( $elements ) );
	// Sort elements alphabetically.
	// This way all duplicate items will be merged in the final CSS array.
	sort( $elements );

	// Implode items and return the value.
	return implode( ',', $elements );

}

/**
 * Maps elements from dynamic css to the selector
 */
function yog_map_selector( $elements, $selector ) {
	$array = array();

	foreach( $elements as $element ) {
		$array[] = $element . $selector;
	}

	return $array;
}


/**
 * Typography body, h1, h2, h3, h4, h5, h6
 */
// CSS classes that inherit body typography settings
function yog_get_body_typography_elements() {
	$elements = array();

	// css classes that inherit body font size
	$elements['size'] = array(
		'body'
	);
	// css classes that inherit body font color
	$elements['color'] = array(
		'body'
	);
	// css classes that inherit body font
	$elements['family'] = array(
		'body'
	);
	// css classes that inherit body font
	$elements['line-height'] = array(
		'body'
	);


	return $elements;
}

// CSS classes that inherit H1 typography settings
function yog_get_h1_typography_elements() {
	$elements = array();

	// css classes that inherit h1 size
	$elements['size'] = array(
		'h1',
		'.post-content h1'
	);
	// css classes that inherit h1 font family
	$elements['family'] = array(
		'h1',
		'.post-content h1'
	);
	// css classes that inherit h1 color
	$elements['color'] = array(
		'h1',
		'.post-content h1'
	);

	return $elements;
}

// CSS classes that inherit H2 typography settings
function yog_get_h2_typography_elements() {
	$elements = array();

	// css classes that inherit h2 size
	$elements['size'] = array(
		'h2'
	);
	// css classes that inherit h2 color
	$elements['color'] = array(
		'h2',
		'.post-content h2'
	);
	// css classes that inherit h2 font family
	$elements['family'] = array(
		'h2',
		'.post-content h2'
	);

	return $elements;
}

// CSS classes that inherit H3 typography settings
function yog_get_h3_typography_elements() {
	$elements = array();

	// css classes that inherit h3 font family
	$elements['family'] = array(
		'h3'
	);
	// css classes that inherit h3 size
	$elements['size'] = array(
		'h3'
	);
	// css classes that inherit h3 color
	$elements['color'] = array(
		'h3'
	);

	return $elements;
}

// CSS classes that inherit H4 typography settings
function yog_get_h4_typography_elements() {
	$elements = array();

	// css classes that inherit h4 size
	$elements['size'] = array(
		'h4'
	);
	// css classes that inherit h4 color
	$elements['color'] = array(
		'h4'
	);
	// css classes that inherit h4 font family
	$elements['family'] = array(
		'h4'
	);

	return $elements;
}

// CSS classes that inherit H5 typography settings
function yog_get_h5_typography_elements() {
	$elements = array();

	// css classes that inherit h5 size
	$elements['size'] = array(
		'h5'
	);
	// css classes that inherit h5 color
	$elements['color'] = array(
		'h5'
	);
	// css classes that inherit h5 font family
	$elements['family'] = array(
		'h5'
	);

	return $elements;
}

// CSS classes that inherit H6 typography settings
function yog_get_h6_typography_elements() {
	$elements = array();

	// css classes that inherit h6 size
	$elements['size'] = array(
		'h6'
	);
	// css classes that inherit h6 color
	$elements['color'] = array(
		'h6'
	);
	// css classes that inherit h6 font family
	$elements['family'] = array(
		'h6'
	);

	return $elements;
}
