<?php
/**
 * Disbale VC front-end editor
 *
 * @category VC extend
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js_composer
 *
 */
if(function_exists('vc_disable_frontend')){
	vc_disable_frontend();
}

/**
 * Remove unnecessory elemnts
 *
 * @category VC extend
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js_composer
 *
 */
if( function_exists( 'vc_remove_element' ) ){
	
    //WooCommerce Elements
    vc_remove_element('product');
    vc_remove_element('products');
    vc_remove_element('recent_products');
    vc_remove_element('product_category');
    vc_remove_element('featured_products');
    vc_remove_element('sale_products');
    vc_remove_element('best_selling_products');
    vc_remove_element('top_rated_products');
    vc_remove_element('product_categories');
}

/**
 * Add VC new image selector field
 *
 * @category VC extend
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js_composer
 *
 */
vc_add_shortcode_param( 'image_selector', 'yog_render');
function yog_render( $settings, $value ) {
	$output = '';

	if ( empty( $settings['layouts'] ) ) {
		return '';
	}

	foreach ( $settings['layouts'] as $key => $data ) {
		$checked = checked( $value, $key, false );
		$output .= sprintf(
			'<li><input class="wpb_vc_param_value" type="radio" id="%3$s" name="%4$s" value="%5$s"%6$s><label for="%3$s"><div class="thumbnail-wrapper"><img src="%1$s"></div><span>%2$s</span></label></li>',
			$data['image'], $data['title'],
			$settings['param_name'] . '-' . $key, $settings['param_name'],
			$key, $checked
		);
	}

	return '<ul class="yog-image-selector">' . $output . '</ul>';
}

/**
 * Bucket Custom Post Type Lists
 *
 * @category VC extend
 * @author YOGThemes
 * @since  1.0
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js_composer
 */
function yog_get_bucket_list(){
    // get posts
    $yog_args = array(
        'post_type'      => 'bucket',
        'posts_per_page' => -1,
        'orderby'        => 'title',
        'order'          => 'asc'
    );
    
    $yog_buckets = array('Choose Buckets');
    $yog_posts = get_posts( $yog_args );
    if ( !empty( $yog_posts ) ) {
        foreach ( $yog_posts as $yog_item ) {
            $yog_buckets[$yog_item->post_title] = $yog_item->ID;
        }
    }
    
    return $yog_buckets;
}


/**
 * Create animation social network icons
 *
 * @category VC extend
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js_composer
 *
 */
function yog_get_animations() {
    return array( 
		esc_html__('No Animation','yog') => '',
        esc_html__('Bounce','yog') => 'bounce',
        esc_html__('Bounce In','yog') => 'bounceIn',
        esc_html__('Bounce In Up','yog') => 'bounceInUp',
        esc_html__('Bounce In Down','yog') => 'bounceInDown',
        esc_html__('Bounce In Left','yog') => 'bounceInLeft',
        esc_html__('Bounce In Right','yog') => 'bounceInRight',
        esc_html__('Fade In','yog') => 'fadeIn',
        esc_html__('Fade In Up','yog') => 'fadeInUp',
        esc_html__('Fade In Down','yog') => 'fadeInDown',
        esc_html__('Fade In Left','yog') => 'fadeInLeft',
        esc_html__('Fade In Right','yog') => 'fadeInRight',
        esc_html__('Fade In Up Big','yog') => 'fadeInUpBig',
        esc_html__('Fade In Down Big','yog') => 'fadeInDownBig',
        esc_html__('Fade In Left Big','yog') => 'fadeInLeftBig',
        esc_html__('Fade In Right Big','yog') => 'fadeInRightBig',
		esc_html__('Flash','yog') => 'flash',
        esc_html__('Flip In X','yog') => 'flipInX',
        esc_html__('Flip In Y','yog') => 'flipInY',
        esc_html__('Jello','yog') => 'jello',
        esc_html__('Pulse','yog') => 'pulse',
		esc_html__('Shake','yog') => 'shake',
		esc_html__('Swing','yog') => 'swing',
		esc_html__('Tada','yog') => 'tada',
		esc_html__('Rotate In','yog') => 'rotateIn',
        esc_html__('Rotate In Up Left','yog') => 'rotateInUpLeft',
        esc_html__('Rotate In Down Left','yog') => 'rotateInDownLeft',
        esc_html__('Rotate In Up Right','yog') => 'rotateInUpRight',
        esc_html__('Rotate In Down Right','yog') => 'rotateInDownRight',
        esc_html__('Rubber Band','yog') => 'rubberBand',
		esc_html__('Wobble','yog') => 'wobble',
		esc_html__('Wiggle','yog') => 'wiggle',
        esc_html__('Zoom In','yog') => 'zoomIn',
        esc_html__('Zoom In Up','yog') => 'zoomInUp',
        esc_html__('Zoom In Down','yog') => 'zoomInDown',
        esc_html__('Zoom In Left','yog') => 'zoomInLeft',
        esc_html__('Zoom In Right','yog') => 'zoomInRight',
        esc_html__('Zoom Out','yog') => 'zoomOut',
        esc_html__('Zoom Out Up','yog') => 'zoomOutUp',
        esc_html__('Zoom Out Down','yog') => 'zoomOutDown',
        esc_html__('Zoom Out Left','yog') => 'zoomOutLeft',
        esc_html__('Zoom Out Right','yog') => 'zoomOutRight',
    );
}

/**
 * Vc param description
 *
 * @category VC extend
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js_composer
 *
 */
if(!function_exists('yog_pattren_description')) {
	function yog_pattren_description(){
		return __(" <br>To Hightlight text insert text between: <span class='pink-color'>/highlight_start/</span>Your Text <span class='bolder'>/highlight_end/</span>", "yog");	
	}
}

/**
 * Vc param description
 *
 * @category VC extend
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js_composer
 *
 */
if(!function_exists('yog_pattren_description_bw')) {
	function yog_pattren_description_bw(){
		return __(" <br>To Hightlight text insert text between: <span class='bolder'>/highlight_start/</span>Your Text <span class='bolder'>/highlight_end/</span>", "yog");	
	}
}

/**
 * Vc param shortcode
 *
 * @category VC extend
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js_composer
 *
 */
if(!function_exists('yog_highlight_it')) {
	function yog_highlight_it( $text ){
	
		preg_match_all('#/highlight_start/(.*)/highlight_end/#', $text, $matches);
		if( isset( $matches[0][0] ) ):
			$replacement = str_replace('/highlight_end/','</span>',str_replace('/highlight_start/',
			'<span class="pink-color">', $matches[0][0] ) );
			$text = preg_replace( '#'.$matches[0][0].'#', $replacement, $text );
		endif;
		return $text; 
		

	}
}

/**
 * Vc param shortcode
 *
 * @category VC extend
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js_composer
 *
 */
if(!function_exists('yog_bw_highlight_it')) {
	function yog_bw_highlight_it( $text ){
	
		preg_match_all('#/highlight_start/(.*)/highlight_end/#', $text, $matches);
		if( isset( $matches[0][0] ) ):
			$replacement = str_replace('/highlight_end/','</span>',str_replace('/highlight_start/',
			'<span class="bolder">', $matches[0][0] ) );
			$text = preg_replace( '#'.$matches[0][0].'#', $replacement, $text );
		endif;
		return $text; 
		

	}
}
        
/**
 * Get Post object
 *
 * @category VC extend
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js_composer
 *
 */   
if ( ! function_exists( 'yog_post_query' ) ) :

    function yog_post_query( $yog_args = array(), $yog_category = false ) {
        //Post Type Argument
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $yog_defaults = array(
            'post_type'		 => 'post',
            'post_status'	 => 'publish',
            'paged'          => $paged,
            'posts_per_page' => '-1',
        );
        
        $yog_args = wp_parse_args( $yog_args, $yog_defaults );
        
        //Category Filter.
        if ( isset( $yog_category ) && !empty( $yog_category ) ) {
			$vc_taxonomies_types = get_taxonomies( array( 'public' => true ) );
			$terms = get_terms( array_keys( $vc_taxonomies_types ), array(
				'hide_empty' => false,
				'include' => $yog_category,
			) );
			$yog_args['tax_query'] = array();
			$tax_queries = array(); // List of taxnonimes
			foreach ( $terms as $t ) {
				if ( ! isset( $tax_queries[ $t->taxonomy ] ) ) {
					$tax_queries[ $t->taxonomy ] = array(
						'taxonomy' => $t->taxonomy,
						'field'    => 'id',
						'terms'    => array( $t->term_id ),
						'relation' => 'IN',
					);
				} else {
					$tax_queries[ $t->taxonomy ]['terms'][] = $t->term_id;
				}
			}
			$yog_args['tax_query'] = array_values( $tax_queries );
			$yog_args['tax_query']['relation'] = 'OR';
		}
        
        //Wordpress Custom Query.
        $my_query = new WP_Query( $yog_args );
        
        //Return Post Object.
        return $my_query;
    }

endif;

/**
 * Categories Search Filter
 *
 * @category VC extend
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js_composer
 *
 */
//Default Blog 
add_filter( 'vc_autocomplete_yog_blog_posts_taxonomie_callback','vc_autocomplete_blog_taxonomie_field_search', 10, 1 );
add_filter( 'vc_autocomplete_yog_blog_posts_taxonomie_render','vc_autocomplete_blog_taxonomie_field_render', 10, 1 );

//Cosmetic Blog 
add_filter( 'vc_autocomplete_yog_cosmetic_blog_posts_taxonomie_callback','vc_autocomplete_blog_taxonomie_field_search', 10, 1 );
add_filter( 'vc_autocomplete_yog_cosmetic_blog_posts_taxonomie_render','vc_autocomplete_blog_taxonomie_field_render', 10, 1 );

//Drink Blog 
add_filter( 'vc_autocomplete_yog_drink_blog_posts_taxonomie_callback','vc_autocomplete_blog_taxonomie_field_search', 10, 1 );
add_filter( 'vc_autocomplete_yog_drink_blog_posts_taxonomie_render','vc_autocomplete_blog_taxonomie_field_render', 10, 1 );

//Finances Blog 
add_filter( 'vc_autocomplete_yog_finances_blog_posts_taxonomie_callback','vc_autocomplete_blog_taxonomie_field_search', 10, 1 );
add_filter( 'vc_autocomplete_yog_finances_blog_posts_taxonomie_render','vc_autocomplete_blog_taxonomie_field_render', 10, 1 );

//Furniture Blog 
add_filter( 'vc_autocomplete_yog_furniture_blog_posts_taxonomie_callback','vc_autocomplete_blog_taxonomie_field_search', 10, 1 );
add_filter( 'vc_autocomplete_yog_furniture_blog_posts_taxonomie_render','vc_autocomplete_blog_taxonomie_field_render', 10, 1 );

//Hosting Blog
add_filter( 'vc_autocomplete_yog_hosting_blog_posts_taxonomie_callback','vc_autocomplete_blog_taxonomie_field_search', 10, 1 );
add_filter( 'vc_autocomplete_yog_hosting_blog_posts_taxonomie_render','vc_autocomplete_blog_taxonomie_field_render', 10, 1 );

//Restaurant Blog
add_filter( 'vc_autocomplete_yog_restaurant_blog_taxonomie_callback','vc_autocomplete_blog_taxonomie_field_search', 10, 1 );
add_filter( 'vc_autocomplete_yog_restaurant_blog_taxonomie_render','vc_autocomplete_blog_taxonomie_field_render', 10, 1 );

//Seo Blog
add_filter( 'vc_autocomplete_yog_seo_blog_posts_taxonomie_callback','vc_autocomplete_blog_taxonomie_field_search', 10, 1 );
add_filter( 'vc_autocomplete_yog_seo_blog_posts_taxonomie_render','vc_autocomplete_blog_taxonomie_field_render', 10, 1 );

//Shoes Blog
add_filter( 'vc_autocomplete_yog_shoes_blog_taxonomie_callback','vc_autocomplete_blog_taxonomie_field_search', 10, 1 );
add_filter( 'vc_autocomplete_yog_shoes_blog_taxonomie_render','vc_autocomplete_blog_taxonomie_field_render', 10, 1 );

//Black & White Blog
add_filter( 'vc_autocomplete_yog_bw_blog_posts_taxonomie_callback','vc_autocomplete_blog_taxonomie_field_search', 10, 1 );
add_filter( 'vc_autocomplete_yog_bw_blog_posts_taxonomie_render','vc_autocomplete_blog_taxonomie_field_render', 10, 1 );

//Ray Blog
add_filter( 'vc_autocomplete_yog_ray_blog_posts_taxonomie_callback','vc_autocomplete_blog_taxonomie_field_search', 10, 1 );
add_filter( 'vc_autocomplete_yog_ray_blog_posts_taxonomie_render','vc_autocomplete_blog_taxonomie_field_render', 10, 1 );

//Flower Blog
add_filter( 'vc_autocomplete_yog_flower_blog_posts_taxonomie_callback','vc_autocomplete_blog_taxonomie_field_search', 10, 1 );
add_filter( 'vc_autocomplete_yog_flower_blog_posts_taxonomie_render','vc_autocomplete_blog_taxonomie_field_render', 10, 1 );

//Autoparts Blog
add_filter( 'vc_autocomplete_yog_autoparts_blog_posts_taxonomie_callback','vc_autocomplete_blog_taxonomie_field_search', 10, 1 );
add_filter( 'vc_autocomplete_yog_autoparts_blog_posts_taxonomie_render','vc_autocomplete_blog_taxonomie_field_render', 10, 1 );


/**
 * @since 4.5.2
 *
 * @param $search_string
 *
 * @return array|bool
 */
function vc_autocomplete_blog_taxonomie_field_search( $search_string ) {
    $data = array();
	$vc_filter_by = vc_post_param( 'vc_filter_by', '' );
	$vc_taxonomies_types = strlen( $vc_filter_by ) > 0 ? array( $vc_filter_by ) : array_keys( get_taxonomies( array( 'name' => 'category', 'public' => true ), 'objects' ) );
	$vc_taxonomies = get_terms( $vc_taxonomies_types, array(
		'hide_empty' => false,
		'search' => $search_string,
	) );
	if ( is_array( $vc_taxonomies ) && ! empty( $vc_taxonomies ) ) {
		foreach ( $vc_taxonomies as $t ) {
			if ( is_object( $t ) ) {
				$data[] = vc_get_term_object( $t );
			}
		}
	}

	return $data;

}

/**
 * @since 4.5.2
 *
 * @param $term
 *
 * @return array|bool
 */
function vc_autocomplete_blog_taxonomie_field_render( $term ) {
	$vc_taxonomies_types = get_taxonomies( array( 'name' => 'category', 'public' => true ), 'objects' );
	$terms = get_terms( array_keys( $vc_taxonomies_types ), array(
		'include' => array( $term['value'] ),
		'hide_empty' => false,
	) );
	$data = false;
	if ( is_array( $terms ) && 1 === count( $terms ) ) {
		$term = $terms[0];
		$data = vc_get_term_object( $term );
	}

	return $data;
}

/**
 * WooCommerce Variables
 *
 * @category VC extend
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js_composer
 *
 */
$yog_order_by_values = array(
	'',
	esc_html__( 'Date', 'yog' ) => 'date',
	esc_html__( 'ID', 'yog' ) => 'ID',
	esc_html__( 'Author', 'yog' ) => 'author',
	esc_html__( 'Title', 'yog' ) => 'title',
	esc_html__( 'Modified', 'yog' ) => 'modified',
	esc_html__( 'Random', 'yog' ) => 'rand',
	esc_html__( 'Comment count', 'yog' ) => 'comment_count',
	esc_html__( 'Menu order', 'yog' ) => 'menu_order',
);

$yog_order_way_values = array(
	'',
	esc_html__( 'Descending', 'yog' ) => 'DESC',
	esc_html__( 'Ascending', 'yog' ) => 'ASC',
);

//For suggestion: vc_autocomplete_[shortcode_name]_[param_name]_callback
add_filter( 'vc_autocomplete_yog_cosmetic_heros_yog_cosmetic_hero_id_callback','yogProductIdAutocompleteSuggester', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_yog_cosmetic_heros_yog_cosmetic_hero_id_render','yogProductIdAutocompleteRender', 10, 1 ); // Render exact product. Must return an array (label,value)

//For suggestion: vc_autocomplete_[shortcode_name]_[param_name]_callback
add_filter( 'vc_autocomplete_yog_cosmetic_heros_id_callback','yogProductIdAutocompleteSuggester', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_yog_cosmetic_heros_id_render','yogProductIdAutocompleteRender', 10, 1 ); // Render exact product. Must return an array (label,value)

//For suggestion: vc_autocomplete_[shortcode_name]_[param_name]_callback
add_filter( 'vc_autocomplete_yog_finances_products_yog_finances_product_id_callback','yogProductIdAutocompleteSuggester', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_yog_finances_products_yog_finances_product_id_render','yogProductIdAutocompleteRender', 10, 1 ); // Render exact product. Must return an array (label,value)

//For suggestion: vc_autocomplete_[shortcode_name]_[param_name]_callback
add_filter( 'vc_autocomplete_yog_drink_heros_yog_drink_hero_id_callback','yogProductIdAutocompleteSuggester', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_yog_drink_heros_yog_drink_hero_id_render','yogProductIdAutocompleteRender', 10, 1 ); // Render exact product. Must return an array (label,value)

//For suggestion: vc_autocomplete_[shortcode_name]_[param_name]_callback
add_filter( 'vc_autocomplete_yog_kidswear_products_yog_kidswear_product_id_callback','yogProductIdAutocompleteSuggester', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_yog_kidswear_products_yog_kidswear_product_id_render','yogProductIdAutocompleteRender', 10, 1 ); // Render exact product. Must return an array (label,value)

//For suggestion: vc_autocomplete_[shortcode_name]_[param_name]_callback
add_filter( 'vc_autocomplete_yog_product_id_callback','yogProductIdAutocompleteSuggester', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_yog_product_id_render','yogProductIdAutocompleteRender', 10, 1 ); // Render exact product. Must return an array (label,value)

//For param: ID default value filter
add_filter( 'vc_form_fields_render_field_yog_product_id_param_value','yogProductIdDefaultValue', 10, 4 ); // Defines default value for param if not provided. Takes from other param value.
add_filter( 'vc_autocomplete_yog_products_ids_callback','yogProductIdAutocompleteSuggester', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_yog_products_ids_render','yogProductIdAutocompleteRender', 10, 1 ); // Render exact product. Must return an array (label,value)

//For param: ID default value filter
add_filter( 'vc_form_fields_render_field_products_ids_param_value','yogProductsIdsDefaultValue', 10, 4 ); // Defines default value for param if not provided. Takes from other param value.

//For suggestion: vc_autocomplete_[shortcode_name]_[param_name]_callback
add_filter( 'vc_autocomplete_yog_electro_product_categories_ids_callback','yogProductCategoryCategoryAutocompleteSuggester', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_yog_electro_product_categories_render','yogProductCategoryCategoryRenderByIdExact', 10, 1 ); // Render exact category by id. Must return an array (label,value)

//For suggestion: vc_autocomplete_[shortcode_name]_[param_name]_callback
add_filter( 'vc_autocomplete_yog_product_categories_ids_callback','yogProductCategoryCategoryAutocompleteSuggester', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_yog_product_categories_ids_render','yogProductCategoryCategoryRenderByIdExact', 10, 1 ); // Render exact category by id. Must return an array (label,value)

add_filter( 'vc_autocomplete_yog_recent_products_category_callback','vc_autocomplete_recent_product_taxonomie_field_search', 10, 1 );
add_filter( 'vc_autocomplete_yog_recent_products_category_render','vc_autocomplete_recent_product_taxonomie_field_render', 10, 1 );

/**
 * Suggester for autocomplete by id/name/title/sku
 * @since 4.4
 *
 * @param $query
 *
 * @return array - id's from products with title/sku.
 */
function yogProductIdAutocompleteSuggester( $query ) {
	global $wpdb;
	$product_id = (int) $query;
	$post_meta_infos = $wpdb->get_results( $wpdb->prepare( "SELECT a.ID AS id, a.post_title AS title, b.meta_value AS sku
				FROM {$wpdb->posts} AS a
				LEFT JOIN ( SELECT meta_value, post_id  FROM {$wpdb->postmeta} WHERE `meta_key` = '_sku' ) AS b ON b.post_id = a.ID
				WHERE a.post_type = 'product' AND ( a.ID = '%d' OR b.meta_value LIKE '%%%s%%' OR a.post_title LIKE '%%%s%%' )", $product_id > 0 ? $product_id : - 1, stripslashes( $query ), stripslashes( $query ) ), ARRAY_A );

	$results = array();
	if ( is_array( $post_meta_infos ) && ! empty( $post_meta_infos ) ) {
		foreach ( $post_meta_infos as $value ) {
			$data = array();
			$data['value'] = $value['id'];
			$data['label'] = __( 'Id', 'yog' ) . ': ' . $value['id'] . ( ( strlen( $value['title'] ) > 0 ) ? ' - ' . __( 'Title', 'yog' ) . ': ' . $value['title'] : '' ) . ( ( strlen( $value['sku'] ) > 0 ) ? ' - ' . __( 'Sku', 'yog' ) . ': ' . $value['sku'] : '' );
			$results[] = $data;
		}
	}

	return $results;
}

/**
 * Find product by id
 * @since 4.4
 *
 * @param $query
 *
 * @return bool|array
 */
function yogProductIdAutocompleteRender( $query ) {
	$query = trim( $query['value'] ); // get value from requested
	if ( ! empty( $query ) ) {
		// get product
		$product_object = wc_get_product( (int) $query );
		if ( is_object( $product_object ) ) {
			$product_sku = $product_object->get_sku();
			$product_title = $product_object->get_title();
			$product_id = $product_object->id;

			$product_sku_display = '';
			if ( ! empty( $product_sku ) ) {
				$product_sku_display = ' - ' . esc_html__( 'Sku', 'yog' ) . ': ' . $product_sku;
			}

			$product_title_display = '';
			if ( ! empty( $product_title ) ) {
				$product_title_display = ' - ' . esc_html__( 'Title', 'yog' ) . ': ' . $product_title;
			}

			$product_id_display = esc_html__( 'Id', 'yog' ) . ': ' . $product_id;

			$data = array();
			$data['value'] = $product_id;
			$data['label'] = $product_id_display . $product_title_display . $product_sku_display;

			return ! empty( $data ) ? $data : false;
		}

		return false;
	}

	return false;
}

/**
 * Replaces product skus to id's.
 * @since 4.4
 *
 * @param $current_value
 * @param $param_settings
 * @param $map_settings
 * @param $atts
 *
 * @return string
 */
 function yogProductsIdsDefaultValue( $current_value, $param_settings, $map_settings, $atts ) {
	$value = trim( $current_value );
	if ( strlen( trim( $value ) ) === 0 && isset( $atts['skus'] ) && strlen( $atts['skus'] ) > 0 ) {
		$data = array();
		$skus = $atts['skus'];
		$skus_array = explode( ',', $skus );
		foreach ( $skus_array as $sku ) {
			$id = $this->productIdDefaultValueFromSkuToId( trim( $sku ) );
			if ( is_numeric( $id ) ) {
				$data[] = $id;
			}
		}
		if ( ! empty( $data ) ) {
			$values = explode( ',', $value );
			$values = array_merge( $values, $data );
			$value = implode( ',', $values );
		}
	}

	return $value;
}

/**
 * Replace single product sku to id.
 * @since 4.4
 *
 * @param $current_value
 * @param $param_settings
 * @param $map_settings
 * @param $atts
 *
 * @return bool|string
 */
function yogProductIdDefaultValue( $current_value, $param_settings, $map_settings, $atts ) {
	$value = trim( $current_value );
	if ( strlen( trim( $current_value ) ) === 0 && isset( $atts['sku'] ) && strlen( $atts['sku'] ) > 0 ) {
		$value = $this->productIdDefaultValueFromSkuToId( $atts['sku'] );
	}

	return $value;
}

/**
 * Return product category value|label array
 *
 * @param $term
 *
 * @since 4.4
 * @return array|bool
 */
function histoiaProductCategoryTermOutput( $term ) {
	$term_slug = $term->slug;
	$term_title = $term->name;
	$term_id = $term->term_id;

	$term_slug_display = '';
	if ( ! empty( $term_slug ) ) {
		$term_slug_display = ' - ' . esc_html__( 'Sku', 'yog' ) . ': ' . $term_slug;
	}

	$term_title_display = '';
	if ( ! empty( $term_title ) ) {
		$term_title_display = ' - ' . esc_html__( 'Title', 'yog' ) . ': ' . $term_title;
	}

	$term_id_display = esc_html__( 'Id', 'yog' ) . ': ' . $term_id;

	$data = array();
	$data['value'] = $term_id;
	$data['label'] = $term_id_display . $term_title_display . $term_slug_display;

	return ! empty( $data ) ? $data : false;
}
    
/**
 * Autocomplete suggester to search product category by name/slug or id.
 * @since 4.4
 *
 * @param $query
 * @param bool $slug - determines what output is needed
 *      default false - return id of product category
 *      true - return slug of product category
 *
 * @return array
 */
function yogProductCategoryCategoryAutocompleteSuggester( $query, $slug = false ) {
	global $wpdb;
	$cat_id = (int) $query;
	$query = trim( $query );
	$post_meta_infos = $wpdb->get_results( $wpdb->prepare( "SELECT a.term_id AS id, b.name as name, b.slug AS slug
					FROM {$wpdb->term_taxonomy} AS a
					INNER JOIN {$wpdb->terms} AS b ON b.term_id = a.term_id
					WHERE a.taxonomy = 'product_cat' AND (a.term_id = '%d' OR b.slug LIKE '%%%s%%' OR b.name LIKE '%%%s%%' )", $cat_id > 0 ? $cat_id : - 1, stripslashes( $query ), stripslashes( $query ) ), ARRAY_A );

	$result = array();
	if ( is_array( $post_meta_infos ) && ! empty( $post_meta_infos ) ) {
		foreach ( $post_meta_infos as $value ) {
			$data = array();
			$data['value'] = $slug ? $value['slug'] : $value['id'];
			$data['label'] = esc_html__( 'Id', 'yog' ) . ': ' . $value['id'] . ( ( strlen( $value['name'] ) > 0 ) ? ' - ' . esc_html__( 'Name', 'yog' ) . ': ' . $value['name'] : '' ) . ( ( strlen( $value['slug'] ) > 0 ) ? ' - ' . __( 'Slug', 'yog' ) . ': ' . $value['slug'] : '' );
			$result[] = $data;
		}
	}

	return $result;
}

/**
 * Search product category by id
 * @since 4.4
 *
 * @param $query
 *
 * @return bool|array
 */
function yogProductCategoryCategoryRenderByIdExact( $query ) {
	$query = $query['value'];
	$cat_id = (int) $query;
	$term = get_term( $cat_id, 'product_cat' );

	return histoiaProductCategoryTermOutput( $term );
}

/**
 * Custom Taxonomies.
 *
 * @since flipmart 1.0
 */
function yog_get_taxonomy_dropdown( $yog_tax = '' ) {
    global $wpdb;
    
    //Check
    if( empty( $yog_tax ) ){
        return;
    }
    //Category Query.
    $yog_query = 'SELECT * FROM '.$wpdb->terms.' AS t INNER JOIN '.$wpdb->term_taxonomy.' AS tt ON t.term_id = tt.term_id WHERE tt.taxonomy =  "'. $yog_tax .'" AND tt.count > 0 ORDER BY  t.term_id DESC LIMIT 0 , 30';
    $yog_terms = $wpdb->get_results($yog_query, ARRAY_A);
    
    $yog_cat = array( 'Choose Category' => '' );
    if( !empty( $yog_terms ) ){
        foreach( $yog_terms as $yog_term ){
            $yog_cat[$yog_term['name']] = $yog_term['slug'];
        }
    }
    return $yog_cat;
}

/**
 * @since 4.5.2
 *
 * @param $search_string
 *
 * @return array|bool
 */
function vc_autocomplete_recent_product_taxonomie_field_search( $search_string ) {
    $data = array();
	$vc_filter_by = vc_post_param( 'vc_filter_by', '' );
	$vc_taxonomies_types = strlen( $vc_filter_by ) > 0 ? array( $vc_filter_by ) : array_keys( get_taxonomies( array( 'name' => 'product_cat', 'public' => true ), 'objects' ) );
	$vc_taxonomies = get_terms( $vc_taxonomies_types, array(
		'hide_empty' => false,
		'search' => $search_string,
	) );
	if ( is_array( $vc_taxonomies ) && ! empty( $vc_taxonomies ) ) {
		foreach ( $vc_taxonomies as $t ) {
			if ( is_object( $t ) ) {
				$data[] = vc_get_term_object( $t );
			}
		}
	}

	return $data;

}

/**
 * @since 4.5.2
 *
 * @param $term
 *
 * @return array|bool
 */
function vc_autocomplete_recent_product_taxonomie_field_render( $term ) {
	$vc_taxonomies_types = get_taxonomies( array( 'name' => 'product_cat', 'public' => true ), 'objects' );
	$terms = get_terms( array_keys( $vc_taxonomies_types ), array(
		'include' => array( $term['value'] ),
		'hide_empty' => false,
	) );
	$data = false;
	if ( is_array( $terms ) && 1 === count( $terms ) ) {
		$term = $terms[0];
		$data = vc_get_term_object( $term );
	}

	return $data;
}

/**
 * @since 4.5.2
 *
 * @param $term
 *
 * @return array|bool
 */
function yog_get_hot_product(){
    //Default Post Arguments
    $yog_args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
        'meta_key'       => 'product-hot-flash',
        'meta_value'     => true
    );
    
    //Query.
    $yog_posts = new WP_Query($yog_args);
    
    $yog_hot_products = array();
    
    if ($yog_posts->have_posts()) :
        
        while ($yog_posts->have_posts()) {
            $yog_posts->the_post();
            
            $yog_ID    = get_the_ID();
            $yog_title = get_the_title();
            
            $yog_hot_products[$yog_title] = $yog_ID;
        }
    
    endif;
    
    return $yog_hot_products;
}

// Add new custom font to Font Family selection in icon box module
function yog_add_new_icon_set_to_iconbox( ) {
	$param = WPBMap::getParam( 'vc_icon', 'type' );
	$param['value'][__( 'FlipmartIcon', 'total' )] = 'bwicons';
	vc_update_shortcode_param( 'vc_icon', $param );
}
add_filter( 'init', 'yog_add_new_icon_set_to_iconbox', 40 );

// Add font picker setting to icon box module when you select your font family from the dropdown
function yog_add_font_picker() {
	vc_add_param( 'vc_icon', array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Flipmart Icon', 'total' ),
			'param_name' => 'icon_bwicons',
			'settings' => array(
				'emptyIcon' => true,
				'type' => 'bwicons',
				'iconsPerPage' => 200,
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'bwicons',
			),
		)
	);
}
add_filter( 'vc_after_init', 'yog_add_font_picker', 40 );

// Add array of your fonts so they can be displayed in the font selector
function yog_icon_array() {
	return array(
		array( 'ico-xing4' => esc_html__( 'xing4', 'yog' ) ),
        array( 'ico-xing5' => esc_html__( 'xing5', 'yog' ) ),
        array( 'ico-instagram3' => esc_html__( 'instagram3', 'yog' ) ),
        array( 'ico-dribbble4' => esc_html__( 'dribbble4', 'yog' ) ),
        array( 'ico-facebook25' => esc_html__( 'facebook25', 'yog' ) ),
        array( 'ico-linkedin10' => esc_html__( 'linkedin10', 'yog' ) ),
        array( 'ico-pinterest13' => esc_html__( 'pinterest13', 'yog' ) ),
        array( 'ico-tumblr10' => esc_html__( 'tumblr10', 'yog' ) ),
        array( 'ico-twitter16' => esc_html__( 'twitter16', 'yog' ) ),
        array( 'ico-youtube15' => esc_html__( 'youtube15', 'yog' ) ),
        array( 'ico-back28' => esc_html__( 'back28', 'yog' ) ),
        array( 'ico-right127' => esc_html__( 'right127', 'yog' ) ),
        array( 'ico-mouse61' => esc_html__( 'mouse61', 'yog' ) ),
        array( 'ico-201' => esc_html__( '201', 'yog' ) ),
        array( 'ico-2424' => esc_html__( '2424', 'yog' ) ),
        array( 'ico-add62' => esc_html__( 'add62', 'yog' ) ),
        array( 'ico-add63' => esc_html__( 'add63', 'yog' ) ),
        array( 'ico-add64' => esc_html__( 'add64', 'yog' ) ),
        array( 'ico-address16' => esc_html__( 'address16', 'yog' ) ),
        array( 'ico-aim2' => esc_html__( 'aim2', 'yog' ) ),
        array( 'ico-alarm17' => esc_html__( 'alarm17', 'yog' ) ),
        array( 'ico-align10' => esc_html__( 'align10', 'yog' ) ),
        array( 'ico-align13' => esc_html__( 'align13', 'yog' ) ),
        array( 'ico-amex1' => esc_html__( 'amex1', 'yog' ) ),
        array( 'ico-anchor13' => esc_html__( 'anchor13', 'yog' ) ),
        array( 'ico-anchor14' => esc_html__( 'anchor14', 'yog' ) ),
        array( 'ico-arrow392' => esc_html__( 'arrow392', 'yog' ) ),
        array( 'ico-arrow393' => esc_html__( 'arrow393', 'yog' ) ),
        array( 'ico-arrow394' => esc_html__( 'arrow394', 'yog' ) ),
        array( 'ico-arrow395' => esc_html__( 'arrow395', 'yog' ) ),
        array( 'ico-arrow396' => esc_html__( 'arrow396', 'yog' ) ),
        array( 'ico-arrow397' => esc_html__( 'arrow397', 'yog' ) ),
        array( 'ico-arrow398' => esc_html__( 'arrow398', 'yog' ) ),
        array( 'ico-arrow399' => esc_html__( 'arrow399', 'yog' ) ),
        array( 'ico-arrow400' => esc_html__( 'arrow400', 'yog' ) ),
        array( 'ico-arrow401' => esc_html__( 'arrow401', 'yog' ) ),
        array( 'ico-arrow402' => esc_html__( 'arrow402', 'yog' ) ),
        array( 'ico-arrow403' => esc_html__( 'arrow403', 'yog' ) ),
        array( 'ico-arrow404' => esc_html__( 'arrow404', 'yog' ) ),
        array( 'ico-arrow405' => esc_html__( 'arrow405', 'yog' ) ),
        array( 'ico-arrow406' => esc_html__( 'arrow406', 'yog' ) ),
        array( 'ico-arrow407' => esc_html__( 'arrow407', 'yog' ) ),
        array( 'ico-arrow408' => esc_html__( 'arrow408', 'yog' ) ),
        array( 'ico-arrow409' => esc_html__( 'arrow409', 'yog' ) ),
        array( 'ico-arrow410' => esc_html__( 'arrow410', 'yog' ) ),
        array( 'ico-arrow411' => esc_html__( 'arrow411', 'yog' ) ),
        array( 'ico-arrow412' => esc_html__( 'arrow412', 'yog' ) ),
        array( 'ico-arrow413' => esc_html__( 'arrow413', 'yog' ) ),
        array( 'ico-arrow414' => esc_html__( 'arrow414', 'yog' ) ),
        array( 'ico-arrow415' => esc_html__( 'arrow415', 'yog' ) ),
        array( 'ico-arrow416' => esc_html__( 'arrow416', 'yog' ) ),
        array( 'ico-arrow417' => esc_html__( 'arrow417', 'yog' ) ),
        array( 'ico-arrow418' => esc_html__( 'arrow418', 'yog' ) ),
        array( 'ico-arrow419' => esc_html__( 'arrow419', 'yog' ) ),
        array( 'ico-arrow420' => esc_html__( 'arrow420', 'yog' ) ),
        array( 'ico-arrow421' => esc_html__( 'arrow421', 'yog' ) ),
        array( 'ico-arrow422' => esc_html__( 'arrow422', 'yog' ) ),
        array( 'ico-arrow423' => esc_html__( 'arrow423', 'yog' ) ),
        array( 'ico-arrow424' => esc_html__( 'arrow424', 'yog' ) ),
        array( 'ico-arrow425' => esc_html__( 'arrow425', 'yog' ) ),
        array( 'ico-arrow426' => esc_html__( 'arrow426', 'yog' ) ),
        array( 'ico-arrow427' => esc_html__( 'arrow427', 'yog' ) ),
        array( 'ico-arrow428' => esc_html__( 'arrow428', 'yog' ) ),
        array( 'ico-arrow429' => esc_html__( 'arrow429', 'yog' ) ),
        array( 'ico-arrow430' => esc_html__( 'arrow430', 'yog' ) ),
        array( 'ico-arrow431' => esc_html__( 'arrow431', 'yog' ) ),
        array( 'ico-arrow432' => esc_html__( 'arrow432', 'yog' ) ),
        array( 'ico-arrow433' => esc_html__( 'arrow433', 'yog' ) ),
        array( 'ico-arrows51' => esc_html__( 'arrows51', 'yog' ) ),
        array( 'ico-arrows52' => esc_html__( 'arrows52', 'yog' ) ),
        array( 'ico-arrows53' => esc_html__( 'arrows53', 'yog' ) ),
        array( 'ico-arrows54' => esc_html__( 'arrows54', 'yog' ) ),
        array( 'ico-arrows55' => esc_html__( 'arrows55', 'yog' ) ),
        array( 'ico-arrows56' => esc_html__( 'arrows56', 'yog' ) ),
        array( 'ico-attachment7' => esc_html__( 'attachment7', 'yog' ) ),
        array( 'ico-automated2' => esc_html__( 'automated2', 'yog' ) ),
        array( 'ico-backward1' => esc_html__( 'backward1', 'yog' ) ),
        array( 'ico-bars6' => esc_html__( 'bars6', 'yog' ) ),
        array( 'ico-basket9' => esc_html__( 'basket9', 'yog' ) ),
        array( 'ico-battery69' => esc_html__( 'battery69', 'yog' ) ),
        array( 'ico-battery70' => esc_html__( 'battery70', 'yog' ) ),
        array( 'ico-battery71' => esc_html__( 'battery71', 'yog' ) ),
        array( 'ico-battery72' => esc_html__( 'battery72', 'yog' ) ),
        array( 'ico-bell6' => esc_html__( 'bell6', 'yog' ) ),
        array( 'ico-black179' => esc_html__( 'black179', 'yog' ) ),
        array( 'ico-black180' => esc_html__( 'black180', 'yog' ) ),
        array( 'ico-black181' => esc_html__( 'black181', 'yog' ) ),
        array( 'ico-bluetooth8' => esc_html__( 'bluetooth8', 'yog' ) ),
        array( 'ico-book82' => esc_html__( 'book82', 'yog' ) ),
        array( 'ico-bottom4' => esc_html__( 'bottom4', 'yog' ) ),
        array( 'ico-box33' => esc_html__( 'box33', 'yog' ) ),
        array( 'ico-box34' => esc_html__( 'box34', 'yog' ) ),
        array( 'ico-brain1' => esc_html__( 'brain1', 'yog' ) ),
        array( 'ico-briefcase9' => esc_html__( 'briefcase9', 'yog' ) ),
        array( 'ico-bulb11' => esc_html__( 'bulb11', 'yog' ) ),
        array( 'ico-bullet3' => esc_html__( 'bullet3', 'yog' ) ),
        array( 'ico-bullet4' => esc_html__( 'bullet4', 'yog' ) ),
        array( 'ico-buy4' => esc_html__( 'buy4', 'yog' ) ),
        array( 'ico-calendar47' => esc_html__( 'calendar47', 'yog' ) ),
        array( 'ico-calendar48' => esc_html__( 'calendar48', 'yog' ) ),
        array( 'ico-calendar49' => esc_html__( 'calendar49', 'yog' ) ),
        array( 'ico-call10' => esc_html__( 'call10', 'yog' ) ),
        array( 'ico-call11' => esc_html__( 'call11', 'yog' ) ),
        array( 'ico-call12' => esc_html__( 'call12', 'yog' ) ),
        array( 'ico-call13' => esc_html__( 'call13', 'yog' ) ),
        array( 'ico-camcorder2' => esc_html__( 'camcorder2', 'yog' ) ),
        array( 'ico-camcorder3' => esc_html__( 'camcorder3', 'yog' ) ),
        array( 'ico-camera39' => esc_html__( 'camera39', 'yog' ) ),
        array( 'ico-camera40' => esc_html__( 'camera40', 'yog' ) ),
        array( 'ico-camera41' => esc_html__( 'camera41', 'yog' ) ),
        array( 'ico-camera42' => esc_html__( 'camera42', 'yog' ) ),
        array( 'ico-cancel9' => esc_html__( 'cancel9', 'yog' ) ),
        array( 'ico-caution2' => esc_html__( 'caution2', 'yog' ) ),
        array( 'ico-cello1' => esc_html__( 'cello1', 'yog' ) ),
        array( 'ico-cent2' => esc_html__( 'cent2', 'yog' ) ),
        array( 'ico-center3' => esc_html__( 'center3', 'yog' ) ),
        array( 'ico-cents1' => esc_html__( 'cents1', 'yog' ) ),
        array( 'ico-certificate5' => esc_html__( 'certificate5', 'yog' ) ),
        array( 'ico-charging4' => esc_html__( 'charging4', 'yog' ) ),
        array( 'ico-chat25' => esc_html__( 'chat25', 'yog' ) ),
        array( 'ico-chat26' => esc_html__( 'chat26', 'yog' ) ),
        array( 'ico-check25' => esc_html__( 'check25', 'yog' ) ),
        array( 'ico-chronometer9' => esc_html__( 'chronometer9', 'yog' ) ),
        array( 'ico-cigarette3' => esc_html__( 'cigarette3', 'yog' ) ),
        array( 'ico-clapper2' => esc_html__( 'clapper2', 'yog' ) ),
        array( 'ico-cloud79' => esc_html__( 'cloud79', 'yog' ) ),
        array( 'ico-cloud80' => esc_html__( 'cloud80', 'yog' ) ),
        array( 'ico-cloud81' => esc_html__( 'cloud81', 'yog' ) ),
        array( 'ico-cloud82' => esc_html__( 'cloud82', 'yog' ) ),
        array( 'ico-code7' => esc_html__( 'code7', 'yog' ) ),
        array( 'ico-code8' => esc_html__( 'code8', 'yog' ) ),
        array( 'ico-codings1' => esc_html__( 'codings1', 'yog' ) ),
        array( 'ico-columns1' => esc_html__( 'columns1', 'yog' ) ),
        array( 'ico-compact5' => esc_html__( 'compact5', 'yog' ) ),
        array( 'ico-computer43' => esc_html__( 'computer43', 'yog' ) ),
        array( 'ico-connecting7' => esc_html__( 'connecting7', 'yog' ) ),
        array( 'ico-converging1' => esc_html__( 'converging1', 'yog' ) ),
        array( 'ico-correct7' => esc_html__( 'correct7', 'yog' ) ),
        array( 'ico-credit20' => esc_html__( 'credit20', 'yog' ) ),
        array( 'ico-credit21' => esc_html__( 'credit21', 'yog' ) ),
        array( 'ico-crop1' => esc_html__( 'crop1', 'yog' ) ),
        array( 'ico-cross37' => esc_html__( 'cross37', 'yog' ) ),
        array( 'ico-curved6' => esc_html__( 'curved6', 'yog' ) ),
        array( 'ico-delivery6' => esc_html__( 'delivery6', 'yog' ) ),
        array( 'ico-diagonal1' => esc_html__( 'diagonal1', 'yog' ) ),
        array( 'ico-digital9' => esc_html__( 'digital9', 'yog' ) ),
        array( 'ico-document55' => esc_html__( 'document55', 'yog' ) ),
        array( 'ico-document56' => esc_html__( 'document56', 'yog' ) ),
        array( 'ico-dollar76' => esc_html__( 'dollar76', 'yog' ) ),
        array( 'ico-dollar77' => esc_html__( 'dollar77', 'yog' ) ),
        array( 'ico-dollar78' => esc_html__( 'dollar78', 'yog' ) ),
        array( 'ico-dollars17' => esc_html__( 'dollars17', 'yog' ) ),
        array( 'ico-download57' => esc_html__( 'download57', 'yog' ) ),
        array( 'ico-drums1' => esc_html__( 'drums1', 'yog' ) ),
        array( 'ico-empty19' => esc_html__( 'empty19', 'yog' ) ),
        array( 'ico-equalizer2' => esc_html__( 'equalizer2', 'yog' ) ),
        array( 'ico-eye44' => esc_html__( 'eye44', 'yog' ) ),
        array( 'ico-eye45' => esc_html__( 'eye45', 'yog' ) ),
        array( 'ico-female32' => esc_html__( 'female32', 'yog' ) ),
        array( 'ico-film21' => esc_html__( 'film21', 'yog' ) ),
        array( 'ico-film22' => esc_html__( 'film22', 'yog' ) ),
        array( 'ico-flag25' => esc_html__( 'flag25', 'yog' ) ),
        array( 'ico-flashlight5' => esc_html__( 'flashlight5', 'yog' ) ),
        array( 'ico-floppy9' => esc_html__( 'floppy9', 'yog' ) ),
        array( 'ico-flower17' => esc_html__( 'flower17', 'yog' ) ),
        array( 'ico-folder59' => esc_html__( 'folder59', 'yog' ) ),
        array( 'ico-folder60' => esc_html__( 'folder60', 'yog' ) ),
        array( 'ico-forward5' => esc_html__( 'forward5', 'yog' ) ),
        array( 'ico-frame10' => esc_html__( 'frame10', 'yog' ) ),
        array( 'ico-frame11' => esc_html__( 'frame11', 'yog' ) ),
        array( 'ico-frame12' => esc_html__( 'frame12', 'yog' ) ),
        array( 'ico-full19' => esc_html__( 'full19', 'yog' ) ),
        array( 'ico-funnel5' => esc_html__( 'funnel5', 'yog' ) ),
        array( 'ico-globe14' => esc_html__( 'globe14', 'yog' ) ),
        array( 'ico-graduates1' => esc_html__( 'graduates1', 'yog' ) ),
        array( 'ico-grocery9' => esc_html__( 'grocery9', 'yog' ) ),
        array( 'ico-harp1' => esc_html__( 'harp1', 'yog' ) ),
        array( 'ico-headphone2' => esc_html__( 'headphone2', 'yog' ) ),
        array( 'ico-headset3' => esc_html__( 'headset3', 'yog' ) ),
        array( 'ico-heart64' => esc_html__( 'heart64', 'yog' ) ),
        array( 'ico-help10' => esc_html__( 'help10', 'yog' ) ),
        array( 'ico-hierarchy4' => esc_html__( 'hierarchy4', 'yog' ) ),
        array( 'ico-high13' => esc_html__( 'high13', 'yog' ) ),
        array( 'ico-home60' => esc_html__( 'home60', 'yog' ) ),
        array( 'ico-id1' => esc_html__( 'id1', 'yog' ) ),
        array( 'ico-incoming3' => esc_html__( 'incoming3', 'yog' ) ),
        array( 'ico-incoming4' => esc_html__( 'incoming4', 'yog' ) ),
        array( 'ico-information32' => esc_html__( 'information32', 'yog' ) ),
        array( 'ico-ios16' => esc_html__( 'ios16', 'yog' ) ),
        array( 'ico-jcb2' => esc_html__( 'jcb2', 'yog' ) ),
        array( 'ico-joystick4' => esc_html__( 'joystick4', 'yog' ) ),
        array( 'ico-justify6' => esc_html__( 'justify6', 'yog' ) ),
        array( 'ico-keyboard11' => esc_html__( 'keyboard11', 'yog' ) ),
        array( 'ico-laptop15' => esc_html__( 'laptop15', 'yog' ) ),
        array( 'ico-layers4' => esc_html__( 'layers4', 'yog' ) ),
        array( 'ico-left27' => esc_html__( 'left27', 'yog' ) ),
        array( 'ico-left28' => esc_html__( 'left28', 'yog' ) ),
        array( 'ico-lens3' => esc_html__( 'lens3', 'yog' ) ),
        array( 'ico-lens4' => esc_html__( 'lens4', 'yog' ) ),
        array( 'ico-lens5' => esc_html__( 'lens5', 'yog' ) ),
        array( 'ico-list26' => esc_html__( 'list26', 'yog' ) ),
        array( 'ico-lock22' => esc_html__( 'lock22', 'yog' ) ),
        array( 'ico-lock23' => esc_html__( 'lock23', 'yog' ) ),
        array( 'ico-loud3' => esc_html__( 'loud3', 'yog' ) ),
        array( 'ico-loudness1' => esc_html__( 'loudness1', 'yog' ) ),
        array( 'ico-low16' => esc_html__( 'low16', 'yog' ) ),
        array( 'ico-magnifying27' => esc_html__( 'magnifying27', 'yog' ) ),
        array( 'ico-mail21' => esc_html__( 'mail21', 'yog' ) ),
        array( 'ico-mailbox9' => esc_html__( 'mailbox9', 'yog' ) ),
        array( 'ico-mailbox10' => esc_html__( 'mailbox10', 'yog' ) ),
        array( 'ico-male39' => esc_html__( 'male39', 'yog' ) ),
        array( 'ico-master2' => esc_html__( 'master2', 'yog' ) ),
        array( 'ico-measuring3' => esc_html__( 'measuring3', 'yog' ) ),
        array( 'ico-medium3' => esc_html__( 'medium3', 'yog' ) ),
        array( 'ico-menu18' => esc_html__( 'menu18', 'yog' ) ),
        array( 'ico-menu19' => esc_html__( 'menu19', 'yog' ) ),
        array( 'ico-mic7' => esc_html__( 'mic7', 'yog' ) ),
        array( 'ico-mic8' => esc_html__( 'mic8', 'yog' ) ),
        array( 'ico-mic9' => esc_html__( 'mic9', 'yog' ) ),
        array( 'ico-microphone25' => esc_html__( 'microphone25', 'yog' ) ),
        array( 'ico-minus16' => esc_html__( 'minus16', 'yog' ) ),
        array( 'ico-monitor24' => esc_html__( 'monitor24', 'yog' ) ),
        array( 'ico-mouse18' => esc_html__( 'mouse18', 'yog' ) ),
        array( 'ico-mouse19' => esc_html__( 'mouse19', 'yog' ) ),
        array( 'ico-move13' => esc_html__( 'move13', 'yog' ) ),
        array( 'ico-music58' => esc_html__( 'music58', 'yog' ) ),
        array( 'ico-music59' => esc_html__( 'music59', 'yog' ) ),
        array( 'ico-music60' => esc_html__( 'music60', 'yog' ) ),
        array( 'ico-mute6' => esc_html__( 'mute6', 'yog' ) ),
        array( 'ico-newspaper7' => esc_html__( 'newspaper7', 'yog' ) ),
        array( 'ico-next8' => esc_html__( 'next8', 'yog' ) ),
        array( 'ico-no15' => esc_html__( 'no15', 'yog' ) ),
        array( 'ico-not8' => esc_html__( 'not8', 'yog' ) ),
        array( 'ico-oboe1' => esc_html__( 'oboe1', 'yog' ) ),
        array( 'ico-offer1' => esc_html__( 'offer1', 'yog' ) ),
        array( 'ico-open79' => esc_html__( 'open79', 'yog' ) ),
        array( 'ico-open80' => esc_html__( 'open80', 'yog' ) ),
        array( 'ico-outcoming1' => esc_html__( 'outcoming1', 'yog' ) ),
        array( 'ico-outgoing3' => esc_html__( 'outgoing3', 'yog' ) ),
        array( 'ico-padlock17' => esc_html__( 'padlock17', 'yog' ) ),
        array( 'ico-paper41' => esc_html__( 'paper41', 'yog' ) ),
        array( 'ico-pause11' => esc_html__( 'pause11', 'yog' ) ),
        array( 'ico-photo31' => esc_html__( 'photo31', 'yog' ) ),
        array( 'ico-photo32' => esc_html__( 'photo32', 'yog' ) ),
        array( 'ico-picture9' => esc_html__( 'picture9', 'yog' ) ),
        array( 'ico-pictures1' => esc_html__( 'pictures1', 'yog' ) ),
        array( 'ico-piggy6' => esc_html__( 'piggy6', 'yog' ) ),
        array( 'ico-play33' => esc_html__( 'play33', 'yog' ) ),
        array( 'ico-play34' => esc_html__( 'play34', 'yog' ) ),
        array( 'ico-plugin1' => esc_html__( 'plugin1', 'yog' ) ),
        array( 'ico-plus23' => esc_html__( 'plus23', 'yog' ) ),
        array( 'ico-portfolio7' => esc_html__( 'portfolio7', 'yog' ) ),
        array( 'ico-previous5' => esc_html__( 'previous5', 'yog' ) ),
        array( 'ico-printer37' => esc_html__( 'printer37', 'yog' ) ),
        array( 'ico-purse1' => esc_html__( 'purse1', 'yog' ) ),
        array( 'ico-radio17' => esc_html__( 'radio17', 'yog' ) ),
        array( 'ico-rectangular22' => esc_html__( 'rectangular22', 'yog' ) ),
        array( 'ico-right24' => esc_html__( 'right24', 'yog' ) ),
        array( 'ico-right25' => esc_html__( 'right25', 'yog' ) ),
        array( 'ico-ring8' => esc_html__( 'ring8', 'yog' ) ),
        array( 'ico-round27' => esc_html__( 'round27', 'yog' ) ),
        array( 'ico-rows1' => esc_html__( 'rows1', 'yog' ) ),
        array( 'ico-ruler9' => esc_html__( 'ruler9', 'yog' ) ),
        array( 'ico-saxophone2' => esc_html__( 'saxophone2', 'yog' ) ),
        array( 'ico-scale6' => esc_html__( 'scale6', 'yog' ) ),
        array( 'ico-scale7' => esc_html__( 'scale7', 'yog' ) ),
        array( 'ico-scale8' => esc_html__( 'scale8', 'yog' ) ),
        array( 'ico-scaling1' => esc_html__( 'scaling1', 'yog' ) ),
        array( 'ico-scissors13' => esc_html__( 'scissors13', 'yog' ) ),
        array( 'ico-settings20' => esc_html__( 'settings20', 'yog' ) ),
        array( 'ico-shopping56' => esc_html__( 'shopping56', 'yog' ) ),
        array( 'ico-shopping57' => esc_html__( 'shopping57', 'yog' ) ),
        array( 'ico-shopping58' => esc_html__( 'shopping58', 'yog' ) ),
        array( 'ico-shopping59' => esc_html__( 'shopping59', 'yog' ) ),
        array( 'ico-shopping60' => esc_html__( 'shopping60', 'yog' ) ),
        array( 'ico-shutdown1' => esc_html__( 'shutdown1', 'yog' ) ),
        array( 'ico-silent1' => esc_html__( 'silent1', 'yog' ) ),
        array( 'ico-skype7' => esc_html__( 'skype7', 'yog' ) ),
        array( 'ico-slanting1' => esc_html__( 'slanting1', 'yog' ) ),
        array( 'ico-small135' => esc_html__( 'small135', 'yog' ) ),
        array( 'ico-smart1' => esc_html__( 'smart1', 'yog' ) ),
        array( 'ico-spanner3' => esc_html__( 'spanner3', 'yog' ) ),
        array( 'ico-speaker30' => esc_html__( 'speaker30', 'yog' ) ),
        array( 'ico-speaker31' => esc_html__( 'speaker31', 'yog' ) ),
        array( 'ico-special1' => esc_html__( 'special1', 'yog' ) ),
        array( 'ico-speech38' => esc_html__( 'speech38', 'yog' ) ),
        array( 'ico-speech39' => esc_html__( 'speech39', 'yog' ) ),
        array( 'ico-speech40' => esc_html__( 'speech40', 'yog' ) ),
        array( 'ico-speech41' => esc_html__( 'speech41', 'yog' ) ),
        array( 'ico-speech42' => esc_html__( 'speech42', 'yog' ) ),
        array( 'ico-speech43' => esc_html__( 'speech43', 'yog' ) ),
        array( 'ico-speech44' => esc_html__( 'speech44', 'yog' ) ),
        array( 'ico-square48' => esc_html__( 'square48', 'yog' ) ),
        array( 'ico-stack8' => esc_html__( 'stack8', 'yog' ) ),
        array( 'ico-star51' => esc_html__( 'star51', 'yog' ) ),
        array( 'ico-storage11' => esc_html__( 'storage11', 'yog' ) ),
        array( 'ico-store2' => esc_html__( 'store2', 'yog' ) ),
        array( 'ico-subtract1' => esc_html__( 'subtract1', 'yog' ) ),
        array( 'ico-synchronise1' => esc_html__( 'synchronise1', 'yog' ) ),
        array( 'ico-tab2' => esc_html__( 'tab2', 'yog' ) ),
        array( 'ico-table17' => esc_html__( 'table17', 'yog' ) ),
        array( 'ico-tablet39' => esc_html__( 'tablet39', 'yog' ) ),
        array( 'ico-tablet40' => esc_html__( 'tablet40', 'yog' ) ),
        array( 'ico-tablet41' => esc_html__( 'tablet41', 'yog' ) ),
        array( 'ico-tablet42' => esc_html__( 'tablet42', 'yog' ) ),
        array( 'ico-tag26' => esc_html__( 'tag26', 'yog' ) ),
        array( 'ico-tag27' => esc_html__( 'tag27', 'yog' ) ),
        array( 'ico-tag28' => esc_html__( 'tag28', 'yog' ) ),
        array( 'ico-tag29' => esc_html__( 'tag29', 'yog' ) ),
        array( 'ico-thermometer19' => esc_html__( 'thermometer19', 'yog' ) ),
        array( 'ico-thin16' => esc_html__( 'thin16', 'yog' ) ),
        array( 'ico-thought4' => esc_html__( 'thought4', 'yog' ) ),
        array( 'ico-three52' => esc_html__( 'three52', 'yog' ) ),
        array( 'ico-timer18' => esc_html__( 'timer18', 'yog' ) ),
        array( 'ico-treble2' => esc_html__( 'treble2', 'yog' ) ),
        array( 'ico-trombone2' => esc_html__( 'trombone2', 'yog' ) ),
        array( 'ico-trumpet3' => esc_html__( 'trumpet3', 'yog' ) ),
        array( 'ico-trumpet4' => esc_html__( 'trumpet4', 'yog' ) ),
        array( 'ico-two114' => esc_html__( 'two114', 'yog' ) ),
        array( 'ico-umbrella12' => esc_html__( 'umbrella12', 'yog' ) ),
        array( 'ico-upload35' => esc_html__( 'upload35', 'yog' ) ),
        array( 'ico-vertical4' => esc_html__( 'vertical4', 'yog' ) ),
        array( 'ico-video69' => esc_html__( 'video69', 'yog' ) ),
        array( 'ico-violin2' => esc_html__( 'violin2', 'yog' ) ),
        array( 'ico-visa2' => esc_html__( 'visa2', 'yog' ) ),
        array( 'ico-voice11' => esc_html__( 'voice11', 'yog' ) ),
        array( 'ico-volume22' => esc_html__( 'volume22', 'yog' ) ),
        array( 'ico-waste2' => esc_html__( 'waste2', 'yog' ) ),
        array( 'ico-web11' => esc_html__( 'web11', 'yog' ) ),
        array( 'ico-weighing7' => esc_html__( 'weighing7', 'yog' ) ),
        array( 'ico-weight4' => esc_html__( 'weight4', 'yog' ) ),
        array( 'ico-wifi26' => esc_html__( 'wifi26', 'yog' ) ),
        array( 'ico-window21' => esc_html__( 'window21', 'yog' ) ),
        array( 'ico-window22' => esc_html__( 'window22', 'yog' ) ),
        array( 'ico-window23' => esc_html__( 'window23', 'yog' ) ),
        array( 'ico-wrong6' => esc_html__( 'wrong6', 'yog' ) ),
        array( 'ico-zoom22' => esc_html__( 'zoom22', 'yog' ) ),
        array( 'ico-zoom23' => esc_html__( 'zoom23', 'yog' ) )
        
        
	);
}
add_filter( 'vc_iconpicker-type-bwicons', 'yog_icon_array' );

/**
 * Register Backend and Frontend CSS Styles
 */
add_action( 'vc_base_register_front_css', 'yog_vc_iconpicker_base_register_css' );
add_action( 'vc_base_register_admin_css', 'yog_vc_iconpicker_base_register_css' );
function yog_vc_iconpicker_base_register_css(){
    wp_register_style('yog-bwicons', yog_assets()->get_css_uri( 'icons.css' ) );
}

/**
 * Enqueue Backend and Frontend CSS Styles
 */
add_action( 'vc_backend_editor_enqueue_js_css', 'yog_vc_iconpicker_editor_jscss' );
add_action( 'vc_frontend_editor_enqueue_js_css', 'yog_vc_iconpicker_editor_jscss' );
function yog_vc_iconpicker_editor_jscss(){
    wp_enqueue_style( 'yog-bwicons' );
}

/**
 * Enqueue CSS in Frontend when it's used
 */
add_action('vc_enqueue_font_icon_element', 'yog_enqueue_font_bwicons');
function yog_enqueue_font_bwicons($font){
    switch ( $font ) {
        case 'bwicons': wp_enqueue_style( 'yog-bwicons' );
    }
}