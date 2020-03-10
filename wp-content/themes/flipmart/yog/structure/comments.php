<?php
/**
 * Theme Framework
 */

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Table of content
 *
 * 1. Hooks
 * 2. Functions
 * 3. Template Tags
 */

// 1. Hooks ------------------------------------------------------
//


/**
 * [yog_attributes_comment description]
 * @method yog_attributes_comment
 * @param  [type]                   $attributes [description]
 * @return [type]                               [description]
 */
add_filter( 'yog_attr_comment', 'yog_attributes_comment', 5 );
function yog_attributes_comment( $attributes ) {

	$attributes['id']    = 'comment-' . get_comment_ID();
	$attributes['class'] = join( ' ', get_comment_class() );

	if ( in_array( get_comment_type(), array( '', 'comment' ) ) ) {

		$attributes['itemscope'] = 'itemscope';
		$attributes['itemtype']  = 'http://schema.org/Comment';
	}

	return $attributes;
}

/**
 * [yog_attributes_comment_author description]
 * @method yog_attributes_comment_author
 * @param  [type]                          $attributes [description]
 * @return [type]                                      [description]
 */
add_filter( 'yog_attr_comment-author', 'yog_attributes_comment_author', 5 );
function yog_attributes_comment_author( $attributes ) {

	$attributes['class']     = 'comment-author';
	$attributes['itemscope'] = 'itemscope';
	$attributes['itemtype']  = 'http://schema.org/Person';

	return $attributes;
}

/**
 * [yog_attributes_comment_published description]
 * @method yog_attributes_comment_published
 * @param  [type]                             $attributes [description]
 * @return [type]                                         [description]
 */
add_filter( 'yog_attr_comment-published', 'yog_attributes_comment_published', 5 );
function yog_attributes_comment_published( $attributes ) {

	$attributes['class']    = 'comment-published';
	$attributes['datetime'] = get_comment_time( 'Y-m-d\TH:i:sP' );

	// Translators: Comment date/time "title" attribute.
	$attributes['title']    = get_comment_time( _x( 'l, F j, Y, g:i a', 'comment time format', 'flipmart' ) );
	
	return $attributes;
}

/**
 * [yog_attributes_comment_permalink description]
 * @method yog_attributes_comment_permalink
 * @param  [type]                             $attributes [description]
 * @return [type]                                         [description]
 */
add_filter( 'yog_attr_comment-permalink', 'yog_attributes_comment_permalink', 5 );
function yog_attributes_comment_permalink( $attributes ) {

	$attributes['class']    = 'comment-permalink';
	$attributes['href']     = get_comment_link();
	
	return $attributes;
}

/**
 * [yog_attributes_comment_content description]
 * @method yog_attributes_comment_content
 * @param  [type]                           $attributes [description]
 * @return [type]                                       [description]
 */
add_filter( 'yog_attr_comment-content', 'yog_attributes_comment_content', 5 );
function yog_attributes_comment_content( $attributes ) {

	$attributes['class']    = 'comment-content';
	
	return $attributes;
}

/**
 * [yog_comment_form_before description]
 * @method yog_comment_form_before
 * @param  array                        $args [description]
 * @return [type]                             [description]
 */
add_action( 'comment_form_top', 'yog_comment_form_before' );
function yog_comment_form_before(){
    ?>
    <div class="clearfix"></div>  
    <div class="blog-write-comment outer-bottom-xs outer-top-xs">
        <div class="register-form">
    <?php
}

/**
 * [yog_comment_form_after description]
 * @method yog_comment_form_after
 * @param  array                        $args [description]
 * @return [type]                             [description]
 */
add_action( 'comment_form', 'yog_comment_form_after' );
function yog_comment_form_after(){
    ?></div></div><?php
}

// 2. Functions ------------------------------------------------------
//

/**
 * [yog_comments_callback description]
 * @method yog_comments_callback
 * @param  [type]                  $comment [description]
 * @return [type]                           [description]
 */
function yog_comments_callback( $comment ) {

	// Get the comment type of the current comment.
	$comment_type = get_comment_type( $comment->comment_ID );

	// Create an empty array if the comment template array is not set.
	if ( ! isset( yog()->comment_template ) || ! is_array( yog()->comment_template ) ) {
		yog()->comment_template = array();
	}

	// Check if a template has been provided for the specific comment type.  If not, get the template.
	if ( ! isset( yog()->comment_template[ $comment_type ] ) ) {

		// Create an array of template files to look for.
		$templates = array( "templates/comment/{$comment_type}.php" );

		// If the comment type is a 'pingback' or 'trackback', allow the use of 'comment-ping.php'.
		if ( 'pingback' == $comment_type || 'trackback' == $comment_type ) {
			$templates[] = 'templates/comment/ping.php';
		}

		// Add the fallback 'comment.php' template.
		$templates[] = 'templates/comment/comment.php';

		// Allow devs to filter the template hierarchy.
		$templates = apply_filters( 'yog_comment_template_hierarchy', $templates, $comment_type );

		// Locate the comment template.
		$template = locate_template( $templates );

		// Set the template in the comment template array.
		yog()->comment_template[ $comment_type ] = $template;
	}

	// If a template was found, load the template.
	if ( ! empty( yog()->comment_template[ $comment_type ] ) ) {
		require( yog()->comment_template[ $comment_type ] );
	}
}

// 3. Template Tags --------------------------------------------------
//

/**
 * [yog_comment_reply_link description]
 * @method yog_comment_reply_link
 * @param  array                    $args [description]
 * @return [type]                         [description]
 */
function yog_comment_reply_link( $args = array() ) {
	echo yog_get_comment_reply_link( $args );
}

/**
 * [yog_get_comment_reply_link description]
 * @method yog_get_comment_reply_link
 * @param  array                        $args [description]
 * @return [type]                             [description]
 */
function yog_get_comment_reply_link( $args = array() ) {

	if ( ! get_option( 'thread_comments' ) || in_array( get_comment_type(), array( 'pingback', 'trackback' ) ) ) {
		return '';
	}

	$args = wp_parse_args(
		$args,
		array(
			'depth'      => intval( $GLOBALS['comment_depth'] ),
            'reply_text' => esc_attr( yog_get_translation(  'tr-blog-comment-reply' ) ),
			'max_depth'  => get_option( 'thread_comments_depth' ),
		)
	);

	return get_comment_reply_link( $args );
}
