<?php
/**
 * Products shortcode
 * @package Yog Core
 * @category Core
 * @author CKthemes
 * @class Yog_WC_Shortcode_Products
 * @version	2.4
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Products shortcode class.
 */
class Yog_WC_Shortcode_Products {
	/**
	 * Shortcode type.
	 *
	 * @since 3.2.2
	 * @var   string
	 */
	protected $type = 'products';
	/**
	 * Attributes.
	 *
	 * @since 3.2.2
	 * @var   array
	 */
	protected $attributes = array();
	/**
	 * Query args.
	 *
	 * @since 3.2.2
	 * @var   array
	 */
	protected $query_args = array();
	/**
	 * Set custom visibility.
	 *
	 * @since 3.2.2
	 * @var   bool
	 */
	protected $custom_visibility = false;
	/**
	 * Initialize shortcode.
	 *
	 * @since 3.2.2
	 * @param array  $attributes Shortcode attributes.
	 * @param string $type       Shortcode type.
	 */
	public function __construct( $attributes = array(), $type = 'products' ) {
		$this->type       = $type;
		$this->attributes = $this->parse_attributes( $attributes );
		$this->query_args = $this->parse_query_args();
	}
	/**
	 * Get shortcode attributes.
	 *
	 * @since  3.2.2
	 * @return array
	 */
	public function get_attributes() {
		return $this->attributes;
	}
	/**
	 * Get query args.
	 *
	 * @since  3.2.2
	 * @return array
	 */
	public function get_query_args() {
		return $this->query_args;
	}
	/**
	 * Get shortcode type.
	 *
	 * @since  3.2.2
	 * @return array
	 */
	public function get_type() {
		return $this->type;
	}
	/**
	 * Get shortcode content.
	 *
	 * @since  3.2.2
	 * @return string
	 */
	public function get_content() {
	   	return $this->product_loop();
	}
	/**
	 * Parse attributes.
	 *
	 * @since  3.2.2
	 * @param  array $attributes Shortcode attributes.
	 * @return array
	 */
	protected function parse_attributes( $attributes ) {
		$attributes = $this->parse_legacy_attributes( $attributes );
		return shortcode_atts( array(
            'style'          => 'one',     // Style
            'heading'        => '',        // Heading
            'sub_heading'    => '',        // Sub Heading        
			'limit'          => '-1',      // Results limit.
			'columns'        => '3',       // Number of columns.
			'rows'           => '',        // Number of rows. If defined, limit will be ignored.
			'orderby'        => 'title',   // menu_order, title, date, rand, price, popularity, rating, or id.
			'order'          => 'ASC',     // ASC or DESC.
			'ids'            => '',        // Comma separated IDs.
			'skus'           => '',        // Comma separated SKUs.
			'category'       => '',        // Comma separated category slugs.
			'cat_operator'   => 'IN',      // Operator to compare categories. Possible values are 'IN', 'NOT IN', 'AND'.
			'attribute'      => '',        // Single attribute slug.
			'terms'          => '',        // Comma separated term slugs.
			'terms_operator' => 'IN',      // Operator to compare terms. Possible values are 'IN', 'NOT IN', 'AND'.
			'tag'            => '',        // Comma separated tag slugs.
			'visibility'     => 'visible', // Possible values are 'visible', 'catalog', 'search', 'hidden'.
			'class'          => '',        // HTML class.
			'page'           => 1,         // Page for pagination.
			'paginate'       => false,     // Should results be paginated.
			'cache'          => true,      // Should shortcode output be cached.
            'yog_animation'  => '',        // Animation 
            'yog_delay'      => ''         // Animation Delay
		), $attributes, $this->type );
	}
	/**
	 * Parse legacy attributes.
	 *
	 * @since  3.2.2
	 * @param  array $attributes Attributes.
	 * @return array
	 */
	protected function parse_legacy_attributes( $attributes ) {
		$mapping = array(
			'per_page' => 'limit',
			'operator' => 'cat_operator',
			'filter'   => 'terms',
		);
		foreach ( $mapping as $old => $new ) {
			if ( isset( $attributes[ $old ] ) ) {
				$attributes[ $new ] = $attributes[ $old ];
				unset( $attributes[ $old ] );
			}
		}
		return $attributes;
	}
	/**
	 * Parse query args.
	 *
	 * @since  3.2.2
	 * @return array
	 */
	protected function parse_query_args() {
		$query_args = array(
			'post_type'           => 'product',
			'post_status'         => 'publish',
			'ignore_sticky_posts' => true,
			'no_found_rows'       => false === wc_string_to_bool( $this->attributes['paginate'] ),
			'orderby'             => $this->attributes['orderby'],
			'order'               => strtoupper( $this->attributes['order'] ),
		);
		if ( wc_string_to_bool( $this->attributes['paginate'] ) ) {
			$this->attributes['page'] = get_query_var( 'product-page', 1 );
		}
		if ( ! empty( $this->attributes['rows'] ) ) {
			$this->attributes['limit'] = $this->attributes['columns'] * $this->attributes['rows'];
		}
		// @codingStandardsIgnoreStart
		$ordering_args                = WC()->query->get_catalog_ordering_args( $query_args['orderby'], $query_args['order'] );
		$query_args['orderby']        = $ordering_args['orderby'];
		$query_args['order']          = $ordering_args['order'];
		if ( $ordering_args['meta_key'] ) {
			$query_args['meta_key']       = $ordering_args['meta_key'];
		}
		$query_args['posts_per_page'] = intval( $this->attributes['limit'] );
		if ( 1 < $this->attributes['page'] ) {
			$query_args['paged']          = absint( $this->attributes['page'] );
		}
		$query_args['meta_query']     = WC()->query->get_meta_query();
		$query_args['tax_query']      = array();
		// @codingStandardsIgnoreEnd
		// Visibility.
		$this->set_visibility_query_args( $query_args );
		// SKUs.
		$this->set_skus_query_args( $query_args );
		// IDs.
		$this->set_ids_query_args( $query_args );
		// Set specific types query args.
		if ( method_exists( $this, "set_{$this->type}_query_args" ) ) {
			$this->{"set_{$this->type}_query_args"}( $query_args );
		}
		// Attributes.
		$this->set_attributes_query_args( $query_args );
		// Categories.
		$this->set_categories_query_args( $query_args );
		// Tags.
		$this->set_tags_query_args( $query_args );
		$query_args = apply_filters( 'woocommerce_shortcode_products_query', $query_args, $this->attributes, $this->type );
		// Always query only IDs.
		$query_args['fields'] = 'ids';
		return $query_args;
	}
	/**
	 * Set skus query args.
	 *
	 * @since 3.2.2
	 * @param array $query_args Query args.
	 */
	protected function set_skus_query_args( &$query_args ) {
		if ( ! empty( $this->attributes['skus'] ) ) {
			$skus                       = array_map( 'trim', explode( ',', $this->attributes['skus'] ) );
			$query_args['meta_query'][] = array(
				'key'     => '_sku',
				'value'   => 1 === count( $skus ) ? $skus[0] : $skus,
				'compare' => 1 === count( $skus ) ? '=' : 'IN',
			);
		}
	}
	/**
	 * Set ids query args.
	 *
	 * @since 3.2.2
	 * @param array $query_args Query args.
	 */
	protected function set_ids_query_args( &$query_args ) {
		if ( ! empty( $this->attributes['ids'] ) ) {
			$ids = array_map( 'trim', explode( ',', $this->attributes['ids'] ) );
			if ( 1 === count( $ids ) ) {
				$query_args['p'] = $ids[0];
			} else {
				$query_args['post__in'] = $ids;
			}
		}
	}
	/**
	 * Set attributes query args.
	 *
	 * @since 3.2.2
	 * @param array $query_args Query args.
	 */
	protected function set_attributes_query_args( &$query_args ) {
		if ( ! empty( $this->attributes['attribute'] ) || ! empty( $this->attributes['terms'] ) ) {
			$query_args['tax_query'][] = array(
				'taxonomy' => strstr( $this->attributes['attribute'], 'pa_' ) ? sanitize_title( $this->attributes['attribute'] ) : 'pa_' . sanitize_title( $this->attributes['attribute'] ),
				'terms'    => array_map( 'sanitize_title', explode( ',', $this->attributes['terms'] ) ),
				'field'    => 'slug',
				'operator' => $this->attributes['terms_operator'],
			);
		}
	}
	/**
	 * Set categories query args.
	 *
	 * @since 3.2.2
	 * @param array $query_args Query args.
	 */
	protected function set_categories_query_args( &$query_args ) {
		if ( ! empty( $this->attributes['category'] ) ) {
			$query_args['tax_query'][] = array(
				'taxonomy' => 'product_cat',
				'terms'    => array_map( 'sanitize_title', explode( ',', $this->attributes['category'] ) ),
				'field'    => 'slug',
				'operator' => $this->attributes['cat_operator'],
			);
		}
	}
	/**
	 * Set tags query args.
	 *
	 * @since 3.3.0
	 * @param array $query_args Query args.
	 */
	protected function set_tags_query_args( &$query_args ) {
		if ( ! empty( $this->attributes['tag'] ) ) {
			$query_args['tax_query'][] = array(
				'taxonomy' => 'product_tag',
				'terms'    => array_map( 'sanitize_title', explode( ',', $this->attributes['tag'] ) ),
				'field'    => 'slug',
				'operator' => 'IN',
			);
		}
	}
	/**
	 * Set sale products query args.
	 *
	 * @since 3.2.2
	 * @param array $query_args Query args.
	 */
	protected function set_sale_products_query_args( &$query_args ) {
		$query_args['post__in'] = array_merge( array( 0 ), wc_get_product_ids_on_sale() );
	}
	/**
	 * Set best selling products query args.
	 *
	 * @since 3.2.2
	 * @param array $query_args Query args.
	 */
	protected function set_best_selling_products_query_args( &$query_args ) {
		$query_args['meta_key'] = 'total_sales'; // @codingStandardsIgnoreLine
		$query_args['order']    = 'DESC';
		$query_args['orderby']  = 'meta_value_num';
	}
	/**
	 * Set visibility as hidden.
	 *
	 * @since 3.2.2
	 * @param array $query_args Query args.
	 */
	protected function set_visibility_hidden_query_args( &$query_args ) {
		$this->custom_visibility   = true;
		$query_args['tax_query'][] = array(
			'taxonomy'         => 'product_visibility',
			'terms'            => array( 'exclude-from-catalog', 'exclude-from-search' ),
			'field'            => 'name',
			'operator'         => 'AND',
			'include_children' => false,
		);
	}
	/**
	 * Set visibility as catalog.
	 *
	 * @since 3.2.2
	 * @param array $query_args Query args.
	 */
	protected function set_visibility_catalog_query_args( &$query_args ) {
		$this->custom_visibility   = true;
		$query_args['tax_query'][] = array(
			'taxonomy'         => 'product_visibility',
			'terms'            => 'exclude-from-search',
			'field'            => 'name',
			'operator'         => 'IN',
			'include_children' => false,
		);
		$query_args['tax_query'][] = array(
			'taxonomy'         => 'product_visibility',
			'terms'            => 'exclude-from-catalog',
			'field'            => 'name',
			'operator'         => 'NOT IN',
			'include_children' => false,
		);
	}
	/**
	 * Set visibility as search.
	 *
	 * @since 3.2.2
	 * @param array $query_args Query args.
	 */
	protected function set_visibility_search_query_args( &$query_args ) {
		$this->custom_visibility   = true;
		$query_args['tax_query'][] = array(
			'taxonomy'         => 'product_visibility',
			'terms'            => 'exclude-from-catalog',
			'field'            => 'name',
			'operator'         => 'IN',
			'include_children' => false,
		);
		$query_args['tax_query'][] = array(
			'taxonomy'         => 'product_visibility',
			'terms'            => 'exclude-from-search',
			'field'            => 'name',
			'operator'         => 'NOT IN',
			'include_children' => false,
		);
	}
	/**
	 * Set visibility as featured.
	 *
	 * @since 3.2.2
	 * @param array $query_args Query args.
	 */
	protected function set_visibility_featured_query_args( &$query_args ) {
		// @codingStandardsIgnoreStart
		$query_args['tax_query'] = array_merge( $query_args['tax_query'], WC()->query->get_tax_query() );
		// @codingStandardsIgnoreEnd
		$query_args['tax_query'][] = array(
			'taxonomy'         => 'product_visibility',
			'terms'            => 'featured',
			'field'            => 'name',
			'operator'         => 'IN',
			'include_children' => false,
		);
	}
	/**
	 * Set visibility query args.
	 *
	 * @since 3.2.2
	 * @param array $query_args Query args.
	 */
	protected function set_visibility_query_args( &$query_args ) {
		if ( method_exists( $this, 'set_visibility_' . $this->attributes['visibility'] . '_query_args' ) ) {
			$this->{'set_visibility_' . $this->attributes['visibility'] . '_query_args'}( $query_args );
		} else {
			// @codingStandardsIgnoreStart
			$query_args['tax_query'] = array_merge( $query_args['tax_query'], WC()->query->get_tax_query() );
			// @codingStandardsIgnoreEnd
		}
	}
	/**
	 * Set product as visible when quering for hidden products.
	 *
	 * @since  3.2.2
	 * @param  bool $visibility Product visibility.
	 * @return bool
	 */
	public function set_product_as_visible( $visibility ) {
		return $this->custom_visibility ? true : $visibility;
	}
	/**
	 * Get wrapper classes.
	 *
	 * @since  3.2.2
	 * @param  array $columns Number of columns.
	 * @return array
	 */
	protected function get_wrapper_classes( $columns ) {
		$classes = array( 'woocommerce' );
		if ( 'product' !== $this->type ) {
			$classes[] = yog_get_column( $columns );
            $classes[] = 'col-sm-6';
		}
		$classes[] = $this->attributes['class'];
		return $classes;
	}
	/**
	 * Generate and return the transient name for this shortcode based on the query args.
	 *
	 * @since 3.3.0
	 * @return string
	 */
	protected function get_transient_name() {
		$transient_name = 'wc_product_loop' . substr( md5( wp_json_encode( $this->query_args ) . $this->type ), 28 );
		if ( 'rand' === $this->query_args['orderby'] ) {
			// When using rand, we'll cache a number of random queries and pull those to avoid querying rand on each page load.
			$rand_index      = rand( 0, max( 1, absint( apply_filters( 'woocommerce_product_query_max_rand_cache_count', 5 ) ) ) );
			$transient_name .= $rand_index;
		}
		$transient_name .= WC_Cache_Helper::get_transient_version( 'product_query' );
		return $transient_name;
	}
	/**
	 * Run the query and return an array of data, including queried ids and pagination information.
	 *
	 * @since  3.3.0
	 * @return object Object with the following props; ids, per_page, found_posts, max_num_pages, current_page
	 */
	protected function yog_get_query_results() {
	    if( is_front_page() ){
	       $this->query_args['paged'] = (get_query_var('page')) ? get_query_var('page') : 1; 
		}else{
	       $this->query_args['paged'] = (get_query_var('paged')) ? get_query_var('paged') : 1; 
		}
	    $transient_name = $this->get_transient_name();
		if ( 'top_rated_products' === $this->type ) {
			add_filter( 'posts_clauses', array( __CLASS__, 'order_by_rating_post_clauses' ) );
			$query = new WP_Query( $this->query_args );
			remove_filter( 'posts_clauses', array( __CLASS__, 'order_by_rating_post_clauses' ) );
		} else {
			$query = new WP_Query( $this->query_args );
		}
		$paginated = ! $query->get( 'no_found_rows' );
		$results = (object) array(
			'ids'          => wp_parse_id_list( $query->posts ),
			'total'        => $paginated ? (int) $query->found_posts : count( $query->posts ),
			'total_pages'  => $paginated ? (int) $query->max_num_pages : 1,
			'per_page'     => (int) $query->get( 'posts_per_page' ),
			'current_page' => $paginated ? (int) max( 1, $query->get( 'paged', 1 ) ) : 1,
            'query'        => $query
		);
			
		// Remove ordering query arguments.
		if ( ! empty( $this->attributes['category'] ) ) {
			WC()->query->remove_ordering_args();
		}
        
		return $results;
	}
    /**
     * Sets up the woocommerce_loop global from the passed args or from the main query.
     *
     * @since 3.3.0
     * @param array $args Args to pass into the global.
     */
    function wc_setup_loop( $args = array() ) {
    	if ( isset( $GLOBALS['woocommerce_loop'] ) ) {
    		return; // If the loop has already been setup, bail.
    	}
    	$default_args = array(
    		'loop'         => 0,
    		'columns'      => 4,
    		'name'         => '',
    		'is_shortcode' => false,
    		'is_paginated' => true,
    		'is_search'    => false,
    		'is_filtered'  => false,
    		'total'        => 0,
    		'total_pages'  => 0,
    		'per_page'     => 0,
    		'current_page' => 1,
    	);
    	// If this is a main WC query, use global args as defaults.
    	if ( $GLOBALS['wp_query']->get( 'wc_query' ) ) {
    		$default_args = array_merge( $default_args, array(
    			'is_search'    => $GLOBALS['wp_query']->is_search(),
    			'is_filtered'  => is_filtered(),
    			'total'        => $GLOBALS['wp_query']->found_posts,
    			'total_pages'  => $GLOBALS['wp_query']->max_num_pages,
    			'per_page'     => $GLOBALS['wp_query']->get( 'posts_per_page' ),
    			'current_page' => max( 1, $GLOBALS['wp_query']->get( 'paged', 1 ) ),
    		) );
    	}
    	$GLOBALS['woocommerce_loop'] = wp_parse_args( $args, $default_args );
    }
    /**
	 * Loop over found products.
	 *
	 * @since  3.2.2
	 * @return string
	 */
	protected function product_loop() {
		$columns  = absint( $this->attributes['columns'] );
		$classes  = $this->get_wrapper_classes( $columns );
		$products = $this->yog_get_query_results();
        $yog_theme_options = get_option( 'flipmart' );
        
        ob_start();
		if ( $products && $products->ids ) {
			// Prime meta cache to reduce future queries.
			update_meta_cache( 'post', $products->ids );
			update_object_term_cache( $products->ids, 'product' );
			// Setup the loop.
			$this->wc_setup_loop( array(
				'columns'      => $columns,
				'name'         => $this->type,
				'is_shortcode' => true,
				'is_search'    => false,
				'is_paginated' => wc_string_to_bool( $this->attributes['paginate'] ),
				'total'        => $products->total,
				'total_pages'  => $products->total_pages,
				'per_page'     => $products->per_page,
				'current_page' => $products->current_page,
			) );
			
            $original_post = $GLOBALS['post'];
			$this->yog_woocommerce_product_loop_start($this->attributes);
            $yog_column_counter = 0; $yog_counter = 2;
			$yog_close = false;
            
            foreach ( $products->ids as $product_id ) {
				$GLOBALS['post'] = get_post( $product_id ); // WPCS: override ok.
				setup_postdata( $GLOBALS['post'] );
				// Set custom product visibility when quering hidden products.
				add_action( 'woocommerce_product_is_visible', array( $this, 'set_product_as_visible' ) );
                
                // Render product template.
				if( $this->attributes['style'] == 'one' || $this->attributes['style'] == 'electro-slider' ){
                    
                    wc_get_template_part( 'content-product-slider', 'v1' );
                    
                    
                }elseif( $this->attributes['style'] == 'two' ){
                    
                    //Slider Content Wrapper Start
                    $yog_column_counter++;
                    if ( $yog_column_counter == 1 ) {
                        
                        echo '<div class="item"><div class="products best-product">';
                        $yog_close = true;
                        
                    }
                    
                    wc_get_template_part( 'content-product-slider', 'v2' );
                    
                    
                    //Slider Content Wrapper End
                    if ( $yog_column_counter == $yog_counter ) {
                        $yog_column_counter = 0;
                        
                        echo '</div></div>';
                        $yog_close = false;
                    }
                    
                }elseif( $this->attributes['style'] == 'four' ){
                    
                    wc_get_template_part( 'content-product', 'list' );
                    
                }elseif( $this->attributes['style'] == 'book-slider' ){
                    
                    wc_get_template( 'woocommerce/content-product-slider-v1.php' , array( 'style' => 'book' ) );
                    
                }elseif( $this->attributes['style'] == 'book-mini-slider' ){
                    
                    //Slider Content Wrapper Start
                    $yog_column_counter++;
                    if ( $yog_column_counter == 1 ) {
                        
                        echo '<div class="item item-carousel">';
                        $yog_close = true;
                        
                    }
                    
                    wc_get_template( 'woocommerce/content-product-slider-v1.php' , array( 'style' => 'book' ) );
                    
                    //Slider Content Wrapper End
                    if ( $yog_column_counter == $yog_counter ) {
                        $yog_column_counter = 0;
                        
                        echo '</div>';
                        $yog_close = false;
                    }
                    
                }elseif( $this->attributes['style'] == 'cosmetic-slider' ){
                   
                   wc_get_template( 'woocommerce/content-product-slider-v1.php' , array( 'style' => 'cosmetic' ) );
                    
                }elseif( $this->attributes['style'] == 'drink-slider' ){
                   
                   wc_get_template( 'woocommerce/content-product-slider-v1.php' , array( 'style' => 'drink' ) );
                   
                }elseif( $this->attributes['style'] == 'engineer-grid' ){
                   
                   wc_get_template( 'woocommerce/content-product-grid.php' , array( 'classes' => $classes, 'style' => 'engineer' ) );
                    
                }elseif( $this->attributes['style'] == 'engineer-slider' ){
                   
                   wc_get_template( 'woocommerce/content-product-slider-v1.php' , array( 'style' => 'engineer' ) );
                   
                }elseif( $this->attributes['style'] == 'fashion-slider' ){
                   
                   wc_get_template( 'woocommerce/content-product-grid.php' , array( 'classes' => $classes, 'style' => 'fashion' ) );
                   
                }elseif( $this->attributes['style'] == 'furniture-grid' ){
                   
                   wc_get_template( 'woocommerce/content-product-grid.php' , array( 'classes' => $classes, 'style' => 'furniture-grid' ) );
                    
                }elseif( $this->attributes['style'] == 'furniture-slider' ){
                   
                   wc_get_template( 'woocommerce/content-product-slider-v1.php' , array( 'style' => 'furniture' ) );
                    
                }elseif( $this->attributes['style'] == 'glasses-slider' ){
                   
                   wc_get_template( 'woocommerce/content-product-slider-v1.php' , array( 'style' => 'glasses' ) );
                    
                }elseif( $this->attributes['style'] == 'glasses-list-main' ){
                   global $product;
                   
                   if( $yog_counter == 2 ):
                   ?>
                   <li class="main-list left-list-img">
					   <div class="special-image-left">
    					  <?php 
                             $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');
                             echo '<img src="'. esc_url( $thumb[0] ) .'" alt="" class="img-responsive">'; 
                          ?>
					   </div>
    				   <div class="special-right-content">
    					    <?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<h1>', '</h1>' ); ?>
        				    <?php echo wc_get_product_category_list( $product->get_id(), ', ', '<h2>', '</h2>' ); ?>
                            <?php echo yog_get_excerpt( array( 'yog_link_to_post' => false ) ); ?>
        					<ul class="special-list">
        						<li class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></li>
        						<li class="product-prices"><?php woocommerce_template_loop_price(); ?></li>
        						<li class="add-cart">
                                    <?php 
                                       //Cart
                                        echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                                        	sprintf( '<a href="%s" data-quantity="%s" class="%s" %s><i class="fa fa-shopping-bag"></i> %s</a>',
                                        		esc_url( $product->add_to_cart_url() ),
                                        		esc_attr( 1 ),
                                        		esc_attr( 'button' ),
                                        		'',
                                                esc_html__( 'Add to Cart', 'flipmart' )
                                        	),
                                        $product ); 
                                    ?>
                                </li>
        					</ul>
    				   </div>
    				</li>
                   <?php
                   else:
                   ?>
                   <li class="main-list right-list-img">
					   <div class="special-right-content">
    					    <?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<h1>', '</h1>' ); ?>
        				    <?php echo wc_get_product_category_list( $product->get_id(), ', ', '<h2>', '</h2>' ); ?>
                            <?php echo yog_get_excerpt( array( 'yog_link_to_post' => false ) ); ?>
        					<ul class="special-list">
        						<li class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></li>
        						<li class="product-prices"><?php woocommerce_template_loop_price(); ?></li>
        						<li class="add-cart">
                                    <?php 
                                       //Cart
                                        echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                                        	sprintf( '<a href="%s" data-quantity="%s" class="%s" %s><i class="fa fa-shopping-bag"></i> %s</a>',
                                        		esc_url( $product->add_to_cart_url() ),
                                        		esc_attr(  1 ),
                                        		esc_attr( 'button' ),
                                        		'',
                                                esc_html__( 'Add to Cart', 'flipmart' )
                                        	),
                                        $product ); 
                                    ?>
                                </li>
        					</ul>
    				   </div>
                       <div class="special-image-left">
    					  <?php 
                             $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');
                             echo '<img src="'. esc_url( $thumb[0] ) .'" alt="" class="img-responsive">'; 
                          ?>
					   </div>
    				</li>
                   <?php
                   endif;
                   
                   //Counter
                   if( $yog_counter == 3 ){
                      $yog_counter = 2;
                   }else{
                      $yog_counter++;
                   }
                    
                }elseif( $this->attributes['style'] == 'glasses-list' ){
                   
                   ?>
                   <li>
                        <div class="product-image">
                           <?php 
                             $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');
                             echo '<img src="'. esc_url( $thumb[0] ) .'" alt="" class="img-responsive">'; 
                           ?>
                        </div>
                        <div class="product-content">
                           <div class="product-title">
                              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h1>
                           </div>
                           <div class="product-price">
                              <?php woocommerce_template_loop_rating(); ?>  
                              <p><?php woocommerce_template_loop_price(); ?></p>
                           </div>
                        </div>
                   </li>
                   <?php
                    
                }elseif( $this->attributes['style'] == 'gym-grid' ){
                   
                   //Extra Class
                   $classes[] = 'col-sm-3 products-img';
                   
                   wc_get_template( 'woocommerce/content-product-grid.php' , array( 'classes' => $classes, 'style' => 'gym' ) );
                    
                }elseif( $this->attributes['style'] == 'jewellery-slider' ){
                   
                   wc_get_template( 'woocommerce/content-product-slider-v1.php' , array( 'classes' => $classes, 'style' => 'jewellery' ) );
                    
                }elseif( $this->attributes['style'] == 'jewellery-slider-dual' ){
                   
                   if( $yog_counter == 2 ){
                      echo '<div class="item item-carousel">';
                      $yog_close = true;
                   }
                   
                   wc_get_template( 'woocommerce/content-product-slider-v1.php' , array( 'classes' => $classes, 'style' => 'jewellery-dual' ) );
                   
                   if( $yog_counter == 3 ){
                      $yog_counter = 2;
                      echo '</div>'; 
                      $yog_close = false; 
                   }else{
                      $yog_counter++;
                   }
                    
                }elseif( $this->attributes['style'] == 'kidswear-grid' ){
                   
                   wc_get_template( 'woocommerce/content-product-grid.php' , array( 'classes' => $classes, 'style' => 'kidswear' ) );
                    
                }elseif( $this->attributes['style'] == 'lingerie-slider' ){
                   
                   wc_get_template( 'woocommerce/content-product-slider-v1.php' , array( 'style' => 'lingerie' ) );
                    
                }elseif( $this->attributes['style'] == 'mobile-slider' ){
                   
                   wc_get_template( 'woocommerce/content-product-slider-v1.php' , array( 'style' => 'mobile' ) );
                    
                }elseif( $this->attributes['style'] == 'restaurant-slider' ){
                   
                   wc_get_template( 'woocommerce/content-product-slider-v1.php' , array( 'style' => 'restaurant' ) );
                    
                }elseif( $this->attributes['style'] == 'shoes-slider' ){
                   
                   wc_get_template( 'woocommerce/content-product-slider-v1.php' , array( 'style' => 'shoes' ) );
                    
                }elseif( $this->attributes['style'] == 'flower-grid' ){
                    
                   $classes[] = 'mb-4';
                   wc_get_template( 'woocommerce/content-product-grid.php' , array( 'classes' => $classes, 'style' => 'flower' ) );
                    
                }elseif( $this->attributes['style'] == 'autoparts-grid' || $this->attributes['style'] == 'autoparts-grid' ){
                    
                   $classes[] = 'col-sm-6 pt-30';
                   wc_get_template( 'woocommerce/content-product-grid.php' , array( 'classes' => $classes, 'style' => 'autoparts' ) );
                    
                }elseif( $this->attributes['style'] == 'autoparts-grid-two' ){
                    
                   $classes[] = 'col-sm-6 py-15';
                   wc_get_template( 'woocommerce/content-product-grid.php' , array( 'classes' => $classes, 'style' => 'autoparts-two' ) );
                    
                }else{
                    
                    wc_get_template( 'woocommerce/content-product-grid.php' , array( 'classes' => $classes ) );
                
                }
                
                // Restore product visibility.
				remove_action( 'woocommerce_product_is_visible', array( $this, 'set_product_as_visible' ) );
			}
		
            //Slider Content Wrapper End
            if ( $yog_close ) {
                if( $this->attributes['style'] == 'book-mini-slider' || $this->attributes['style'] == 'jewellery-slider-dual' ){
                    echo '</div>';
                }else{
                    echo '</div></div>';
                }
            }
            
            //Wrapper End.
            if( $this->attributes['style'] == 'one' ){
                
                echo '</div></div>'; 
                
            }elseif( $this->attributes['style'] == 'two' ){
  
                 echo '</div></div></div>'; 
                   
                
            }elseif( $this->attributes['style'] == 'book-slider' || $this->attributes['style'] == 'book-mini-slider' ){
                
                echo '</div></div></div>';
                
            }elseif( $this->attributes['style'] == 'fashion-slider' ){
                
                echo '</div>'; 
                
            }elseif( $this->attributes['style'] == 'cosmetic-slider' ){
                
                echo '</div></div></div></div></div></div>';
                
            }elseif( $this->attributes['style'] == 'drink-slider' ){
                
                echo '</div></div></div></div></div></div></div></div></div>';
                
            }elseif( $this->attributes['style'] == 'electro-slider' ){
                
                echo '</div></div></div></div></div></div>';
                
            }elseif( $this->attributes['style'] == 'engineer-grid' ){
                
                echo '</ul></div>';
                
            }elseif( $this->attributes['style'] == 'engineer-slider' ){
                
                echo '</div></div></div></div></div>';
                
            }elseif( $this->attributes['style'] == 'furniture-grid' ){
                
                echo '</ul></div></div><div class="clearfix"></div></div>';
                
            }elseif( $this->attributes['style'] == 'furniture-slider' ){
                
                echo '</div></div></div></div>';
                
            }elseif( $this->attributes['style'] == 'glasses-slider' ){
                
                echo '</div></div></div></div></div>';
                
            }elseif( $this->attributes['style'] == 'glasses-list-main' ){
                
                echo '</ul><div class="clearfix"></div></div>';
                
            }elseif( $this->attributes['style'] == 'glasses-list' ){
                
                echo '</ul></div>';
                
            }elseif( $this->attributes['style'] == 'gym-grid' ){
                
                echo '</div></div>';
                
            }elseif( $this->attributes['style'] == 'jewellery-slider' || $this->attributes['style'] == 'jewellery-slider-dual' ){
                
                echo '</div></div></div></div></div></div>';
                
            }elseif( $this->attributes['style'] == 'kidswear-grid' ){
                
                echo '</div></div></div></div>';
                
            }elseif( $this->attributes['style'] == 'lingerie-slider' ){
                
                echo '</div></div><div class="clearfix"></div></div>';
                
            }elseif( $this->attributes['style'] == 'mobile-slider' ){
                
                echo '</div></div></div>';
                
            }elseif( $this->attributes['style'] == 'restaurant-slider' ){
                
                echo '</div></div><div class="clearfix"></div></div>';
                
            }elseif( $this->attributes['style'] == 'shoes-slider' ){
                
                echo '</div></div></div></div>';
                
            }elseif( $this->attributes['style'] == 'flower-grid' || $this->attributes['style'] == 'autoparts-grid' || $this->attributes['style'] == 'autoparts-grid-two' ){
                
                echo '</div></div>';
                
            }else{
                
                //Pagination
                if( $this->attributes['paginate'] ){
                    yog_wp_paginate( array( 'query' => $products->query,  'before' => '<div class="clearfix"></div><div class="text-right"><div class="pagination-container">', 'after' => '</div></div>', 'class' => 'list-inline list-unstyled', 'title' => false ) ); //Paginations
                }
                
                wc_get_template( 'loop/loop-end.php');  
            }
            
            if( $this->attributes['style'] == 'one' ||  $this->attributes['style'] == 'three'){
            
                foreach ( $products->ids as $product_id ) {
                    $GLOBALS['post'] = get_post( $product_id ); // WPCS: override ok.
    				setup_postdata( $GLOBALS['post'] );
                    
    				// Set custom product visibility when quering hidden products.
    				add_action( 'woocommerce_product_is_visible', array( $this, 'set_product_as_visible' ) );
                    
                }
            }
            
            $GLOBALS['post'] = $original_post; // WPCS: override ok.
	        wp_reset_postdata();
			unset( $GLOBALS['woocommerce_loop'] );
		
        } else {
			do_action( "woocommerce_shortcode_{$this->type}_loop_no_results", $this->attributes );
		}
        
		return ob_get_clean();
	}
    /**
	 * Output the start of a product loop. By default this is a UL.
	 *
	 * @param bool $echo
	 * @return string
	 */
	function yog_woocommerce_product_loop_start( $atts = array() ) {
		ob_start();
		
        //Animation
        $yog_animation = ( isset( $atts['yog_animation'] ) && !empty( $atts['yog_animation'] ) )? $atts['yog_animation'] : '';
        $yog_delay     = ( isset( $atts['yog_delay'] ) && !empty( $atts['yog_delay'] ) )? $atts['yog_delay'] : '';
       
        if( $atts['style'] == 'one' ){
            
            ?>
            <div class="section featured-product outer-top-vs" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
                <?php 
                    //Heading
                    if ( isset( $atts['heading'] ) ) {
                        echo '<h3 class="section-title">'. esc_html( $atts['heading'] ) .'</h3>';
                    }
                ?>
            
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <?php
            
        }elseif( $atts['style'] == 'two' ){
            
            ?>
            <div class="best-deal outer-bottom-xs" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
                <?php 
                    //Heading
                    if ( isset( $atts['heading'] ) ) {
                        echo '<h3 class="section-title">'. esc_html( $atts['heading'] ) .'</h3>';
                    }
                    
                ?>
            
                <div class="sidebar-widget-body outer-top-xs">
                    <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
            
            <?php
            
        }elseif( $atts['style'] == 'four' ){ 
            
            ?>
            <div class="search-result-container" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
              <div id="myTabContent" class="tab-content category-list">
                <div class="tab-pane active " id="grid-container">
                  <div class="category-product">
            <?php
            
        }elseif( $atts['style'] == 'fashion-slider' ){
            
            echo '<div class="product-section row" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
        
        }elseif( $atts['style'] == 'book-slider' || $atts['style'] == 'book-mini-slider' ){
            
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'book-products', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
                <?php 
                    //Heading
                    if ( isset( $atts['heading'] ) ) {
                        echo '<h3>'. esc_html( $atts['heading'] ) .'</h3>';
                    }
                ?>
                <div class="product-slider">
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="<?php echo $atts['columns']; ?>">
            <?php
        }elseif( $atts['style'] == 'cosmetic-slider' ){    
            ?>
            <div class="firsttab cosmetic-products" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
                <div id="product-tabs-slider" class="outer-top-vs cosmetice-top-vs">
                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="3">
            <?php
        }elseif( $atts['style'] == 'drink-slider' ){    
            ?>
            <div class="firsttab drinks-slider">
                <div class="container">
                    <div class="row">
                       <div class="col-sm-12">
                          <div id="product-tabs-slider" class="cosmetice-top-vs" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
                             <?php 
                                //Heading
                                if ( isset( $atts['heading'] ) ) {
                                    echo '<div class="heading-content"><div class="heading-divider"></div><h2>'. esc_html( $atts['heading'] ) .'</h2></div>';
                                }
                             ?>
                             <div class="tab-content outer-top-xs">
                                <div class="tab-pane in active" id="all">
                                   <div class="product-slider">
                                      <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="3">
            <?php               
        }elseif( $atts['style'] == 'electro-slider' ){    
            ?>
            <div class="firsttab special-product">
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
                    <?php 
                        //Heading
                        if ( isset( $atts['heading'] ) ) {
                            echo '<div class="more-info-tab clearfix"><h3>'. esc_html( $atts['heading'] ) .'</h3></div>';
                        }
                    ?>
                    <div class="tab-content">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="3">
            <?php
        }elseif( $atts['style'] == 'engineer-grid' ){ 
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'product-lists', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
                <ul>
            <?php
        }elseif( $atts['style'] == 'engineer-slider' ){ 
            ?>
            <div id="product-tabs-slider" class="scroll-tabs outer-top-vs" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
                <div class="tab-content outer-top-xs">
                   <div class="tab-pane in active" id="all">
                      <div class="product-slider">
                         <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="2">
            <?php
        }elseif( $atts['style'] == 'furniture-grid' ){ 
            ?>
            <div class="furniture-grid" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
               <div id="product-tabs-slider" class="scroll-tabs">
                   <div class="product-slider">
                        <?php 
                            //Heading
                            if ( isset( $atts['heading'] ) ) {
                                echo '<h4>'. esc_html( $atts['heading'] ) .'</h4>';
                            }
                        ?>
                        <ul>
            <?php
        }elseif( $atts['style'] == 'furniture-slider' ){ 
            ?>
            <div class="furniture-slider">
                <div id="product-tabs-slider" class="scroll-tabs" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
                   <div class="product-slider">
                       <?php 
                            //Heading
                            if ( isset( $atts['heading'] ) ) {
                                echo '<h4>'. esc_html( $atts['heading'] ) .'</h4>';
                            }
                       ?>
                       <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="3">
            <?php
        }elseif( $atts['style'] == 'glasses-slider' ){ 
            ?>
            <div id="product-tabs-slider" class="scroll-tabs glasses-product-slider" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
               <?php 
                    //Heading
                    $yog_heading_content =  '';
                    if ( isset( $atts['heading'] ) ) {
                        $yog_heading_content .= '<h2>'. yog_highlight_it( $atts['heading'] ) .'</h2><div class="divider"></div>';
                    }
                    
                    //Sub Heading
                    if ( isset( $atts['sub_heading'] ) ) {
                        $yog_heading_content .= '<p>'. $atts['sub_heading'] .'</p>';
                    }
                    
                    //Heading Content
                    if( !empty( $yog_heading_content ) ){
                        printf( '<div class="glasses-heading">%s</div><div class="clearfix"></div>', $yog_heading_content );
                    }
               ?>
               <div class="outer-top-xs">
                   <div class="tab-pane in active" id="all">
                       <div class="product-slider">
                          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="3">
            <?php
        }elseif( $atts['style'] == 'glasses-list-main' ){ 
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'product-lists', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
               <?php 
                    //Heading
                    $yog_heading_content =  '';
                    if ( isset( $atts['heading'] ) ) {
                        $yog_heading_content .= '<h2>'. yog_highlight_it( $atts['heading'] ) .'</h2><div class="divider"></div>';
                    }
                    
                    //Sub Heading
                    if ( isset( $atts['sub_heading'] ) ) {
                        $yog_heading_content .= '<p>'. $atts['sub_heading'] .'</p>';
                    }
                    
                    //Heading Content
                    if( !empty( $yog_heading_content ) ){
                        printf( '<div class="glasses-heading">%s</div><div class="clearfix"></div>', $yog_heading_content );
                    }
               ?>
               <ul> 
            <?php
        }elseif( $atts['style'] == 'glasses-list' ){ 
            ?>
            <div <?php yog_helper()->attr( false, array( 'class' => 'product-list-mini', 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
               <?php 
                    //Heading
                    if ( isset( $atts['heading'] ) ) {
                        echo '<h1>'. esc_html( $atts['heading'] ) .'</h1>';
                    }
               ?>
               <ul>
             
            <?php
        }elseif( $atts['style'] == 'gym-grid' ){ 
            ?>
            <div class="gym-products-section" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
                <?php
                    //Heading
                    if ( isset( $atts['heading'] ) ) {
                        echo '<h1>'. esc_html( $atts['heading'] ) .'</h1>';
                    }
                    
                    //Sub Heading
                    if ( isset( $atts['sub_heading'] ) ) {
                        echo '<h2>'. esc_html( $atts['sub_heading'] ) .'</h2>';
                    }
                ?>
                <div class="row">
            <?php
        }elseif( $atts['style'] == 'jewellery-slider' || $atts['style'] == 'jewellery-slider-dual' ){ 
            ?>
            <div class="jewellery-product-slider">
                <div id="product-tabs-slider" class="jewellery-top-vs" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
                   <div class="jewellery-heading">
                       <?php
                            //Heading
                            if ( isset( $atts['heading'] ) ) {
                                echo '<h3>'. esc_html( $atts['heading'] ) .'</h3>';
                            }
                            
                            //Sub Heading
                            if ( isset( $atts['sub_heading'] ) ) {
                                echo '<p>'. esc_html( $atts['sub_heading'] ) .'</p>';
                            }
                        ?>
                        <img src="<?php echo YOG_CORE_DIR; ?>/assets/images/jewellery-divider.jpg" alt="" />
                   </div>
                   <div class="tab-content">
                       <div class="tab-pane in active" id="all"> 
                           <div class="product-slider">
                               <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">  
             
            <?php
        }elseif( $atts['style'] == 'kidswear-grid' ){ 
            ?>
            <div class="kids-grid-products" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
                <div class="divider-img divider-img-cat">
                    <img src="<?php echo YOG_CORE_DIR; ?>/assets/images/kids-divider.png" alt="" />
                 </div>
                 <div class="container">
                    <div class="row">
                       <div class="col-sm-12">
                          <div class="heading-content heading-content-custom">
                             <?php
                                //Heading
                                if ( isset( $atts['heading'] ) ) {
                                    echo '<h2>'. esc_html( $atts['heading'] ) .'</h2>';
                                }
                                
                                //Sub Heading
                                if ( isset( $atts['sub_heading'] ) ) {
                                    echo '<p>'. esc_html( $atts['sub_heading'] ) .'</p>';
                                }
                             ?>
                          </div>
                       </div>
                       <div class="category-row">
            <?php
        }elseif( $atts['style'] == 'lingerie-slider' ){ 
            ?>
            <div class="lingerie-products" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
               <?php
                    $you_heading_contents = '';
                    
                    //Heading
                    if ( isset( $atts['heading'] ) ) {
                        $you_heading_contents = '<h2>'. esc_html( $atts['heading'] ) .'</h2>';
                    }
                    
                    //Sub Heading
                    if ( isset( $atts['sub_heading'] ) ) {
                        $you_heading_contents .= '<p>'. esc_html( $atts['sub_heading'] ) .'</p><img src="'. YOG_CORE_DIR .'/assets/images/lingerie-heading-icon.jpg" alt="" />';
                    }
                        
                    //Heading Contents
                    if( $you_heading_contents ){
                        printf( '<div class="lingerie-heading clearfix">%s</div>', $you_heading_contents );
                    } 
                    
                ?>
               <div class="product-slider">
                   <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="3">  
            <?php
        }elseif( $atts['style'] == 'mobile-slider' ){ 
            ?>
            <div class="app-screenshot" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
               <div class="product-slider">
                   <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
            <?php    
        }elseif( $atts['style'] == 'restaurant-slider' ){ 
            ?>
            <div class="restaurant-products" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
               <?php 
                    //Heading
                    if ( isset( $atts['heading'] ) ) {
                        echo '<div class="product-heading"><h2>'. esc_html( $atts['heading'] ) .'</h2></div>';
                    }
               ?>
               <div class="product-slider">
                   <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="2">
            <?php
        }elseif( $atts['style'] == 'shoes-slider' ){ 
            ?>
            <div class="product-slider">
                <div id="product-tabs-slider" class="scroll-tabs" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
                   <?php
                        //Heading
                        if ( isset( $atts['heading'] ) ) {
                            echo '<div class="more-info-tab clearfix "><h3><img src="'. YOG_CORE_DIR .'/assets/images/shoes.png" alt="ss-logo">'. esc_html( $atts['heading'] ) .'</h3></div>';
                        }
                    ?>
                   <div class="product-slider">
                       <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
            <?php
        }elseif( $atts['style'] == 'flower-grid' ){ 
            ?>
            <div class="py-80-50 flower_section section new_arrivals_section" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <div class="row">
                  <div class="col-lg-9 col-12 m-auto">
                    <div class="section-title position-relative text-center pt-2 mb-40 wow pulse">
                      <?php 
                        //Heading
                        if ( isset( $atts['heading'] ) ) {
                            echo '<p class="fs-18 text-primary mb-1" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>'. $atts['heading'] .'</p>';
                        }
                        
                        //Heading
                        if ( isset( $atts['sub_heading'] ) ) {
                            echo '<h2 class="m-0" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>'. $atts['sub_heading'] .'</h2>';
                        }
                      ?>
                      <div class="section-title-bg-icon position-absolute animation fadeInDown animation-visible">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower-title-bg.png" alt="section-title-bg" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <?php
        }elseif( $atts['style'] == 'autoparts-grid' ){ 
            ?>
            <div class="section autoparts bestSeller_section py-80" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php if( ( isset( $atts['heading'] ) && !empty( $atts['heading'] ) ) || ( isset( $atts['sub_heading'] ) && !empty( $atts['sub_heading'] ) ) ): ?>
                    <div class="section-title text-center">
                        <?php 
                            //Heading
                            if ( isset( $atts['heading'] ) ) {
                                echo '<h2 class="text-uppercase my-0 heading" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>'. $atts['heading'] .'</h2>';
                            }
                            
                            //Heading
                            if ( isset( $atts['sub_heading'] ) ) {
                                echo '<p class="text my-10" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>'. $atts['sub_heading'] .'</p>';
                            }
                        ?>
                      </div>
                  <?php endif; ?>
                  <div class="row" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            <?php
        }elseif( $atts['style'] == 'autoparts-grid-two' ){ 
            ?>
            <div class="section autoparts product-and-advertisement_section bg-light" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
                <?php if( ( isset( $atts['heading'] ) && !empty( $atts['heading'] ) ) || ( isset( $atts['sub_heading'] ) && !empty( $atts['sub_heading'] ) ) ): ?>
                    <div class="section-title text-center">
                        <?php 
                            //Heading
                            if ( isset( $atts['heading'] ) ) {
                                echo '<h2 class="text-uppercase my-0 heading" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>'. $atts['heading'] .'</h2>';
                            }
                            
                            //Heading
                            if ( isset( $atts['sub_heading'] ) ) {
                                echo '<p class="text my-10" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>'. $atts['sub_heading'] .'</p>';
                            }
                        ?>
                    </div>
                <?php endif; ?>
                <div class="row" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ); ?>>
            
            <?php
        }else{
            ?>
            <div class="search-result-container" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
              <div id="myTabContent" class="tab-content category-list">
                <div class="tab-pane active" id="grid-container">
                  <div class="category-product">
                    <div class="row"> 
            
            
            <?php 
        }
        
		echo ob_get_clean();
	}
    
	/**
	 * Order by rating.
	 *
	 * @since  3.2.2
	 * @param  array $args Query args.
	 * @return array
	 */
	public static function order_by_rating_post_clauses( $args ) {
		global $wpdb;
		$args['where']  .= " AND $wpdb->commentmeta.meta_key = 'rating' ";
		$args['join']   .= "LEFT JOIN $wpdb->comments ON($wpdb->posts.ID = $wpdb->comments.comment_post_ID) LEFT JOIN $wpdb->commentmeta ON($wpdb->comments.comment_ID = $wpdb->commentmeta.comment_id)";
		$args['orderby'] = "$wpdb->commentmeta.meta_value DESC";
		$args['groupby'] = "$wpdb->posts.ID";
		return $args;
	}
}