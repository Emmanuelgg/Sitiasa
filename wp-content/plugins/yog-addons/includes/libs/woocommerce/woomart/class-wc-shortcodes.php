<?php
/**
 * Yog_WC_Shortcodes class
 *
 * @package Yog Core
 * @category Core
 * @author YOGThemes
 * @class Yog_WC_Shortcodes
 * @version	1.6
 */
class Yog_WC_Shortcodes {
	/**
	 * Init shortcodes.
	 */
	public function __construct() {
	   
		$shortcodes = array(
			'yog_product'                    => __CLASS__ . '::yog_product',
            'yog_products'                   => __CLASS__ . '::yog_products',
            'yog_product_category'           => __CLASS__ . '::yog_product_category',
			'yog_product_categories'         => __CLASS__ . '::yog_product_categories',
			'yog_recent_products'            => __CLASS__ . '::yog_recent_products',
			'yog_sale_products'              => __CLASS__ . '::yog_sale_products',
			'yog_best_selling_products'      => __CLASS__ . '::yog_best_selling_products',
			'yog_featured_products'          => __CLASS__ . '::yog_featured_products',
			'yog_top_rated_products'         => __CLASS__ . '::yog_top_rated_products',
			'yog_related_products'           => __CLASS__ . '::yog_related_products',
		);

		foreach ( $shortcodes as $shortcode => $function ) {
			add_shortcode($shortcode, $function );
		}
    
	}
	/**
	 * Shortcode Wrapper.
	 *
	 * @param string[] $function Callback function.
	 * @param array    $atts     Attributes. Default to empty array.
	 * @param array    $wrapper  Customer wrapper data.
	 *
	 * @return string
	 */
	public static function shortcode_wrapper(
		$function,
		$atts = array(),
		$wrapper = array(
			'class'  => 'woocommerce',
			'before' => null,
			'after'  => null,
		)
	) {
		ob_start();
		// @codingStandardsIgnoreStart
		echo empty( $wrapper['before'] ) ? '<div class="' . esc_attr( $wrapper['class'] ) . '">' : $wrapper['before'];
		call_user_func( $function, $atts );
		echo empty( $wrapper['after'] ) ? '</div>' : $wrapper['after'];
		// @codingStandardsIgnoreEnd
		return ob_get_clean();
	}

	/**
	 * List all (or limited) product categories.
	 *
	 * @param array $atts Attributes.
	 * @return string
	 */
	public static function yog_product_categories( $atts ) {
		if ( isset( $atts['number'] ) ) {
			$atts['limit'] = $atts['number'];
		}

		$atts = shortcode_atts( array(
			'limit'      => '-1',
			'orderby'    => 'name',
			'order'      => 'ASC',
			'columns'    => '4',
			'hide_empty' => 1,
			'parent'     => '',
			'ids'        => '',
		), $atts, 'product_categories' );

		$ids        = array_filter( array_map( 'trim', explode( ',', $atts['ids'] ) ) );
		$hide_empty = ( true === $atts['hide_empty'] || 'true' === $atts['hide_empty'] || 1 === $atts['hide_empty'] || '1' === $atts['hide_empty'] ) ? 1 : 0;

		// Get terms and workaround WP bug with parents/pad counts.
		$args = array(
			'orderby'    => $atts['orderby'],
			'order'      => $atts['order'],
			'hide_empty' => $hide_empty,
			'include'    => $ids,
			'pad_counts' => true,
			'child_of'   => $atts['parent'],
		);

		$product_categories = get_terms( 'product_cat', $args );

		if ( '' !== $atts['parent'] ) {
			$product_categories = wp_list_filter( $product_categories, array(
				'parent' => $atts['parent'],
			) );
		}

		if ( $hide_empty ) {
			foreach ( $product_categories as $key => $category ) {
				if ( 0 === $category->count ) {
					unset( $product_categories[ $key ] );
				}
			}
		}

		$atts['limit'] = '-1' === $atts['limit'] ? null : intval( $atts['limit'] );
		if ( $atts['limit'] ) {
			$product_categories = array_slice( $product_categories, 0, $atts['limit'] );
		}

		$columns = absint( $atts['columns'] );

		wc_set_loop_prop( 'columns', $columns );

		ob_start();

		if ( $product_categories ) {
			echo '<div class="CollectionGrid-container"><div class="CollectionGrid">';

			foreach ( $product_categories as $category ) {
				wc_get_template( 'content-product_cat.php', array(
					'category' => $category,
				) );
			}

			echo '</div></div>';
		}

		woocommerce_reset_loop();

		return ob_get_clean();
	}
	/**
	 * List products in a category shortcode.
	 *
	 * @param array $atts Attributes.
	 * @return string
	 */
	public static function yog_product_category( $atts ) {
		if ( empty( $atts['category'] ) ) {
			return '';
		}
        if ( isset( $atts['per_page'] ) ) {
			$atts['limit'] = $atts['per_page'];
		}
		$atts = array_merge( array(
            'style'         => 'one',
            'limit'         => '12',
			'columns'       => '4',
			'orderby'       => 'menu_order title',
			'order'         => 'ASC',
			'category'      => '',
			'cat_operator'  => 'IN',
            'paginate'      => '',
            'yog_animation' => '',
            'yog_delay'     => ''
		), (array) $atts );
        
		$shortcode = new Yog_WC_Shortcode_Products( $atts, 'product_category' );
        
		return $shortcode->get_content();
	}
	/**
	 * Recent Products shortcode.
	 *
	 * @param array $atts Attributes.
	 * @return string
	 */
	public static function yog_recent_products( $atts ) {
	   
		if ( isset( $atts['per_page'] ) ) {
			$atts['limit'] = $atts['per_page'];
		}
        
        $atts = array_merge( array(
            'style'        => 'one',
            'heading'      => '',
			'limit'        => '12',
			'columns'      => '4',
			'orderby'      => 'date',
			'order'        => 'DESC',
			'category'     => '',
			'cat_operator' => 'IN',
            'paginate'     => false,
            'yog_animation'=> '',
            'yog_delay'    => ''
		), (array) $atts );
        
        $shortcode = new Yog_WC_Shortcode_Products( $atts, 'recent_products' );
		
        return $shortcode->get_content();
	}
	/**
	 * List multiple products shortcode.
	 *
	 * @param array $atts Attributes.
	 * @return string
	 */
	public static function yog_products( $atts ) {
	   
        $atts = array_merge( array(
            'style'        => 'one',
            'heading'      => '',
			'columns'      => '4',
			'yog_animation'=> '',
            'yog_delay'    => ''
		), (array) $atts );
		$type = 'products';
        
		// Allow list product based on specific cases.
		if ( isset( $atts['on_sale'] ) && wc_string_to_bool( $atts['on_sale'] ) ) {
			$type = 'sale_products';
		} elseif ( isset( $atts['best_selling'] ) && wc_string_to_bool( $atts['best_selling'] ) ) {
			$type = 'best_selling_products';
		} elseif ( isset( $atts['top_rated'] ) && wc_string_to_bool( $atts['top_rated'] ) ) {
			$type = 'top_rated_products';
		}
        
		$shortcode = new Yog_WC_Shortcode_Products( $atts, $type );
        
		return $shortcode->get_content();
	}
	/**
	 * Display a single product.
	 *
	 * @param array $atts Attributes.
	 * @return string
	 */
	public static function yog_product( $atts ) {
		if ( empty( $atts ) ) {
			return '';
		}
		$atts['skus']  = isset( $atts['sku'] ) ? $atts['sku'] : '';
		$atts['ids']   = isset( $atts['id'] ) ? $atts['id'] : '';
		$atts['limit'] = '1';
        
		$shortcode     = new Yog_WC_Shortcode_Products( (array) $atts, 'product' );
		return $shortcode->get_content();
	}
	/**
	 * List all products on sale.
	 *
	 * @param array $atts Attributes.
	 * @return string
	 */
	public static function yog_sale_products( $atts ) {
	   
	    if ( isset( $atts['per_page'] ) ) {
			$atts['limit'] = $atts['per_page'];
		}   
        
		$atts = array_merge( array(
            'style'        => 'one',
            'heading'      => '',
			'limit'        => '12',
			'columns'      => '4',
			'orderby'      => 'title',
			'order'        => 'ASC',
			'category'     => '',
			'cat_operator' => 'IN',
            'paginate'     => false,
            'yog_animation'=> '',
            'yog_delay'    => '' 
		), (array) $atts );
        
		$shortcode = new Yog_WC_Shortcode_Products( $atts, 'sale_products' );
        
		return $shortcode->get_content();
	}
	/**
	 * List best selling products on sale.
	 *
	 * @param array $atts Attributes.
	 * @return string
	 */
	public static function yog_best_selling_products( $atts ) {
	   
	    if ( isset( $atts['per_page'] ) ) {
			$atts['limit'] = $atts['per_page'];
		}
        
		$atts = array_merge( array(
            'style'        => 'one',
			'limit'        => '12',
			'columns'      => '4',
			'category'     => '',
			'cat_operator' => 'IN',
            'paginate'     => false,
            'yog_animation'=> '',
            'yog_delay'    => '' 
		), (array) $atts );
        
		$shortcode = new Yog_WC_Shortcode_Products( $atts, 'best_selling_products' );
        
		return $shortcode->get_content();
	}
	/**
	 * List top rated products on sale.
	 *
	 * @param array $atts Attributes.
	 * @return string
	 */
	public static function yog_top_rated_products( $atts ) {
	   
	    if ( isset( $atts['per_page'] ) ) {
			$atts['limit'] = $atts['per_page'];
		}
        
		$atts = array_merge( array(
            'style'        => 'one',
            'heading'      => '',
			'limit'        => '12',
			'columns'      => '4',
			'orderby'      => 'title',
			'order'        => 'ASC',
			'category'     => '',
			'cat_operator' => 'IN',
            'paginate'     => false, 
            'yog_animation'=> '',
            'yog_delay'    => ''
		), (array) $atts );
        
		$shortcode = new Yog_WC_Shortcode_Products( $atts, 'top_rated_products' );
        
		return $shortcode->get_content();
	}
	/**
	 * Output featured products.
	 *
	 * @param array $atts Attributes.
	 * @return string
	 */
	public static function yog_featured_products( $atts ) {
	   
	    if ( isset( $atts['per_page'] ) ) {
			$atts['limit'] = $atts['per_page'];
		}  
         
		$atts = array_merge( array(
            'style'        => 'one', 
			'limit'        => '12',
			'columns'      => '4',
			'orderby'      => 'date',
			'order'        => 'DESC',
			'category'     => '',
			'cat_operator' => 'IN',
            'paginate'     => false,
            'yog_animation'=> '',
            'yog_delay'    => '' 
		), (array) $atts );
        
		$atts['visibility'] = 'featured';
        
        $shortcode = new Yog_WC_Shortcode_Products( $atts, 'featured_products' );
        
		return $shortcode->get_content();
	}      
	
}
new Yog_WC_Shortcodes();