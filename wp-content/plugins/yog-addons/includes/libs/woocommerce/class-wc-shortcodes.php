<?php
/**
 * Yog_WC_Shortcodes class
 *
 * @package Yog Core
 * @category Core
 * @author CKthemes
 * @class Yog_WC_Shortcodes
 * @version	2.4
 */
class Yog_WC_Shortcodes {
	/**
	 * Init shortcodes.
	 */
	public function __construct() {
	   
		$shortcodes = array(
			'yog_product'                    => __CLASS__ . '::yog_product',
            'yog_products'                   => __CLASS__ . '::yog_products',
			'yog_recent_products'            => __CLASS__ . '::yog_recent_products',
            'yog_product_category'           => __CLASS__ . '::yog_product_category',
            'yog_product_categories'         => __CLASS__ . '::yog_product_categories',
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
            'heading'       => '',
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
	 * List all (or limited) product categories.
	 *
	 * @param array $atts Attributes.
	 * @return string
	 */
	public static function yog_product_categories( $atts ) {
		if ( isset( $atts['per_page'] ) ) {
			$atts['limit'] = $atts['per_page'];
		}

		$atts = shortcode_atts( array(
            'style'         => 'one',
            'heading'       => '',
            'sub_heading'   => '',
			'limit'         => '-1',
			'orderby'       => 'name',
			'order'         => 'ASC',
			'columns'       => '4',
			'hide_empty'    => 1,
			'parent'        => '',
			'ids'           => '',
            'yog_banner'    => '',
            'yog_animation' => '',
            'yog_delay'     => ''
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
        
        $yog_cats = array();           
		foreach ( $product_categories as $category ) {
		    
            $yog_cats[] = $category->slug;
		}
            
		$columns = absint( $atts['columns'] );

		wc_set_loop_prop( 'columns', $columns );
        
        //Enqueue Js File
        wp_enqueue_script( 'isotope-min' );

        if( $atts['style'] == 'four' && $product_categories ){
            
            // Default ordering args
    		$query_args    = array(
    			'post_type'           => 'product',
    			'post_status'         => 'publish',
    			'ignore_sticky_posts' => 1,
    			'orderby'             => $atts['orderby'],
    			'order'               => $atts['order'],
    			'posts_per_page'      => $atts['limit'],
                'tax_query'             => array(
                    array(
                        'taxonomy'      => 'product_cat',
                        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
                        'terms'         => $yog_cats,
                        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                    )
                )
    		);
            
            $products = yog_post_query( $query_args, $ids );
            
            ob_start();
            
            if( $products ):
                        
                echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'firsttab', 'data-animation' => $atts['yog_animation'], 'data-animation-daley' => $atts['yog_delay'] ) ) .'><div class="scroll-tabs outer-top-vs">';
                    
                        
                        $yog_cats_lists = '';
                        foreach ( $product_categories as $category ) {
            			    $yog_cats_lists .= '<li data-filter=".product_cat-'. esc_attr( $category->slug ) .'">'. esc_html( $category->name ) .'</li>';
                        }
                
                        //Filter
                        echo '<div class="filters filter-button-group more-info-tab clearfix">';
                            
                            //Heading
                            if ( isset( $atts['heading'] ) && !empty( $atts['heading'] ) ) {
                                echo '<h3 class="pull-left">'. esc_html( $atts['heading'] ) .'</h3>';
                                
                                echo '<ul class="nav nav-tabs nav-tab-line pull-right">
                                        <li class="active" data-filter="*">'. esc_html__( 'All', 'yog' ) .'</li>
                                        '. $yog_cats_lists .'
                                    </ul>';
                            }else{
                                echo '<ul class="nav nav-tabs nav-tab-line">
                                        <li class="active" data-filter="*">'. esc_html__( 'All', 'yog' ) .'</li>
                                        '. $yog_cats_lists .'
                                    </ul>';
                            }
                        
                        echo '</div><div class="clearfix"></div>';
                        
                            
                        echo '<ul class="grid">';
                            
                            while ( $products->have_posts() ) : $products->the_post(); 
                                global $product, $post;
                                
                                $classes[] = 'mf-item';
                                $classes[] = yog_get_column( $columns );
                                
                                //Content
                                ?>
                                <li <?php post_class( $classes ); ?>>
                                  <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <?php
                                            woocommerce_show_product_loop_sale_flash();
                                        	/**
                                        	 * woocommerce_before_shop_loop_item_title hook.
                                        	 *
                                        	 * @hooked woocommerce_show_product_loop_sale_flash - 10
                                        	 * @hooked woocommerce_template_loop_product_thumbnail - 10
                                        	 */
                                        	do_action( 'woocommerce_before_shop_loop_item_title' ); 
                                            ?>
                                        </div>
                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <?php
                                        	/**
                                        	 * woocommerce_after_shop_loop_item_title hook.
                                        	 *
                                        	 * @hooked woocommerce_template_loop_rating - 5
                                        	 * @hooked woocommerce_template_loop_price - 10
                                        	 */
                                        	do_action( 'woocommerce_after_shop_loop_item_title' );
                                        	?>
                                        </div>
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                              <ul class="list-unstyled">
                                                 <?php if ( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) || shortcode_exists( 'yith_compare_button' ) ) { ?>
                                                    <li class="add-cart-button btn-group"><?php woocommerce_template_loop_add_to_cart(); ?></li>
                                                 <?php }else{ ?>
                                                    <li class="add-cart-button btn-group cart-extra"><?php woocommerce_template_loop_add_to_cart(); ?></li>
                                                 <?php
                                                    }
                                                    
                                                    if( yog_helper()->get_option( 'shop-quick-view' ) ){
                                                    ?>
                                                    <li class="yith-wcwl-add-to-wishlist lnk wishlist add-to-wishlist-131">
                        		                        <button type="button" data-product="<?php echo get_the_ID(); ?>" class="quick-view" data-toggle="modal" data-target="#myModal<?php echo get_the_ID(); ?>"><i class="icon fa fa-search"></i></button>
                                                    </li>
                                                    <?php
                                                    }
                                                    
                                                    //Wishlist Shortcode
                                                    if ( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) ) {
                                                        echo do_shortcode( '[yith_wcwl_add_to_wishlist]' );
                                                    }
                                                    
                                                    
                                                    //Compare Button
                                                    if ( shortcode_exists( 'yith_compare_button' ) ) {
                                                        echo '<li class="lnk">'. do_shortcode( '[yith_compare_button container="no"]' ) .'</li> ';
                                                    } 
                                                 ?>
                                              </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </li>
                                <?php
                                
                            endwhile;
                            
                            //Reset Post
                            wp_reset_postdata();
                            
                        echo '</ul>';
                        
                echo '</div></div>';
            
            endif;
            
	        return ob_get_clean();
                
        }elseif( $atts['style'] == 'five' && $product_categories ){
            
            // Default ordering args
    		$query_args    = array(
    			'post_type'           => 'product',
    			'post_status'         => 'publish',
    			'ignore_sticky_posts' => 1,
    			'orderby'             => $atts['orderby'],
    			'order'               => $atts['order'],
    			'posts_per_page'      => $atts['limit'],
                'tax_query'             => array(
                    array(
                        'taxonomy'      => 'product_cat',
                        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
                        'terms'         => $yog_cats,
                        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                    )
                )
    		);
            
            $products = yog_post_query( $query_args, $ids );
            
            ob_start();
            
            if( $products ):
                        
                echo '<div '. yog_helper()->get_attr( false, array( 'class' => 'furniture-tabs', 'data-animation' => $atts['yog_animation'], 'data-animation-daley' => $atts['yog_delay'] ) ) .'>';
                    
                        $you_heading_contents = '';
                        
                        //Heading
                        if ( isset( $atts['heading'] ) ) {
                            echo '<h3>'. esc_html( $atts['heading'] ) .'</h3>';
                        }
                        
                        $yog_cats_lists = '';
                        foreach ( $product_categories as $category ) {
            			    $yog_cats_lists .= '<li data-filter=".product_cat-'. esc_attr( $category->slug ) .'">'. esc_html( $category->name ) .'</li>';
                        }
                
                        //Filter
                        echo 
                        '<div class="filters filter-button-group">
                            <ul class="nav nav-tabs">
                                <li class="active" data-filter="*">'. esc_html__( 'All', 'yog' ) .'</li>
                                '. $yog_cats_lists .'
                            </ul>
                        </div>'; 
                            
                        echo '<ul class="grid">';
                            
                            while ( $products->have_posts() ) : $products->the_post(); 
                                global $product, $post;
                                
                                $classes[] = 'mf-item';
                                $classes[] = yog_get_column( $columns );
                                
                                //Content
                                ?>
                                <li <?php wc_product_class( $classes ); ?>>
                                    <div class="furniture-products">
                                       <div class="product-image">
                                          <div class="image">
                                              <a href="<?php the_permalink(); ?>">    
                                                  <?php 
                                                     $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');
                                                     echo '<img src="'. esc_url( $thumb[0] ) .'" alt="" class="img-responsive">'; 
                                                  ?> 
                                              </a> 
                                          </div>
                                          <?php woocommerce_show_product_loop_sale_flash(); ?>
                                       </div>
                                       <div class="product-info text-left">
                                          <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                                          <?php
                                    	    //Price
                                            woocommerce_template_loop_price(); 
                                            
                                            //Cart
                                            echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                                            	sprintf( '<a href="%s" data-quantity="%s" class="btn btn-primary icon %s" %s>%s</a>',
                                            		esc_url( $product->add_to_cart_url() ),
                                            		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
                                            		esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
                                            		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
                                                    esc_html__( 'Buy', 'flipmart' )
                                            	),
                                            $product, $args );
                                    	  ?>
                                       </div>
                                    </div>
                                </li>
                                <?php
                                
                            endwhile;
                            
                            //Reset Post
                            wp_reset_postdata();
                            
                        echo '</ul>';
                        
                echo '</div>';
            
            endif;
            
	        return ob_get_clean();
                
        }elseif( $atts['style'] == 'seven' && $product_categories ){
            
            // Default ordering args
    		$query_args    = array(
    			'post_type'           => 'product',
    			'post_status'         => 'publish',
    			'ignore_sticky_posts' => 1,
    			'orderby'             => $atts['orderby'],
    			'order'               => $atts['order'],
    			'posts_per_page'      => $atts['limit'],
                'tax_query'             => array(
                    array(
                        'taxonomy'      => 'product_cat',
                        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
                        'terms'         => $yog_cats,
                        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                    )
                )
    		);
            
            $products = yog_post_query( $query_args, $ids );
            
            ob_start();
            
            if( $products ):
                        
                echo '<div class="lingerie-products-tab lingerie-products" '. yog_helper()->get_attr( false, array( 'data-animation' => $atts['yog_animation'], 'data-animation-daley' => $atts['yog_delay'] ) ) .'>';
                    
                        $you_heading_contents = '';
                        
                        //Heading
                        if ( isset( $atts['heading'] ) ) {
                            $you_heading_contents .= '<h2>'. esc_html( $atts['heading'] ) .'</h2>';
                        }
                        
                        //Sub Heading
                        if ( isset( $atts['sub_heading'] ) ) {
                            $you_heading_contents .= '<p>'. esc_html( $atts['sub_heading'] ) .'</p><img src="'. get_template_directory_uri() .'/assets/images/lingerie-heading-icon.jpg" alt="" />';
                        }
                            
                        //Heading Contents
                        if( $you_heading_contents ){
                            printf( '<div class="lingerie-heading clearfix">%s</div>', $you_heading_contents );
                        }
                        
                        $yog_cats_lists = '';     
            			foreach ( $product_categories as $category ) {
            			    $yog_cats_lists .= '<li data-filter=".product_cat-'. esc_attr( $category->slug ) .'">'. esc_html( $category->name ) .'</li>';
                        }
                
                        //Filter
                        echo 
                        '<div class="filters filter-button-group">
                            <ul class="nav nav-tabs">
                                <li class="active" data-filter="*">'. esc_html__( 'All', 'yog' ) .'</li>
                                '. $yog_cats_lists .'
                            </ul>
                        </div>'; 
                            
                        echo '<ul class="grid">';
                            
                            while ( $products->have_posts() ) : $products->the_post(); 
                                
                                $classes[] = 'mf-item col-sm-3';
                                $classes[] = yog_get_column( $columns );
                                
                                //Content
                                wc_get_template( 'woocommerce/content-product-grid.php' , array( 'classes' => $classes, 'style' => 'lingerie' ) );
                                
                            endwhile;
                            
                            //Reset Post
                            wp_reset_postdata();
                            
                        echo '</ul><div class="clearfix"></div>';
                        
                echo '</div>';
            
            endif;
            
	        return ob_get_clean();
                
        }elseif( $atts['style'] == 'eight' && $product_categories ){
            
            // Default ordering args
    		$query_args    = array(
    			'post_type'           => 'product',
    			'post_status'         => 'publish',
    			'ignore_sticky_posts' => 1,
    			'orderby'             => $atts['orderby'],
    			'order'               => $atts['order'],
    			'posts_per_page'      => $atts['limit'],
                'tax_query'             => array(
                    array(
                        'taxonomy'      => 'product_cat',
                        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
                        'terms'         => $yog_cats,
                        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                    )
                )
    		);
            
            $products = yog_post_query( $query_args, $ids );
            
            ob_start();
            
            if( $products ):
                        
                echo '<div class="food-menu" '. yog_helper()->get_attr( false, array( 'data-animation' => $atts['yog_animation'], 'data-animation-daley' => $atts['yog_delay'] ) ) .'>';
                    
                        //Heading
                        if ( isset( $atts['heading'] ) ) {
                            echo '<h2>'. esc_html( $atts['heading'] ) .' <img src="'. get_template_directory_uri() .'/assets/images/restaurant-divider.png" alt="" /></h2>';
                        }
                        
                        $yog_cats_lists = '';         
            			foreach ( $product_categories as $category ) {
                            $yog_cats_lists .= '<li data-filter=".product_cat-'. esc_attr( $category->slug ) .'">'. esc_html( $category->name ) .'</li>';
            			}
                        
                        //Filter
                        echo 
                        '<div class="filters filter-button-group">
                            <ul class="nav nav-tabs">
                                <li class="active" data-filter="*">'. esc_html__( 'All', 'yog' ) .'</li>
                                '. $yog_cats_lists .'
                            </ul>
                        </div>
                        <div class="menu-list">
                        <ul class="grid">';
                        
                            while ( $products->have_posts() ) : $products->the_post(); 
                                global $product, $post;
                                
                                //Class
                                $classes[] = 'mf-item col-sm-6';
                                
                                ?>
                                <li <?php wc_product_class( $classes ); ?>>
                                  
                                    <div class="menu-img">
                                      <a href="<?php the_permalink(); ?>">    
                                          <?php 
                                             $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');
                                             echo '<img src="'. esc_url( $thumb[0] ) .'" alt="">'; 
                                          ?> 
                                      </a>
                                    </div>
                                    <div class="menu-content">
                                      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a> <?php woocommerce_template_loop_price(); ?></h4>
                                      <?php
                                        echo apply_filters( 'woocommerce_short_description', $post->post_excerpt );
                                        
                                        //Cart
                                        echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                                        	sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
                                        		esc_url( $product->add_to_cart_url() ),
                                        		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
                                        		esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
                                        		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
                                                esc_html__( 'Add to cart', 'flipmart' )
                                        	),
                                        $product, $args );
                                      ?>
                                   </div> 
                                   <div class="clearfix"></div>
                                </li>
                                <?php
                                
                            endwhile;
                            
                            //Reset Post
                            wp_reset_postdata();
                           
                            
                echo '</ul></div></div>';
                
            endif;
                
            return ob_get_clean();
                
        }elseif( $atts['style'] == 'nine' && $product_categories ){
            
            // Default ordering args
    		$query_args    = array(
    			'post_type'           => 'product',
    			'post_status'         => 'publish',
    			'ignore_sticky_posts' => 1,
    			'orderby'             => $atts['orderby'],
    			'order'               => $atts['order'],
    			'posts_per_page'      => $atts['limit'],
                'tax_query'             => array(
                    array(
                        'taxonomy'      => 'product_cat',
                        'field'         => 'slug', //This is optional, as it defaults to 'term_id'
                        'terms'         => $yog_cats,
                        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                    )
                )
    		);
            
            $products = yog_post_query( $query_args, $ids );
            
            ob_start();
            
            if( $products ):
                        
                echo '<div class="product-tabs" '. yog_helper()->get_attr( false, array( 'data-animation' => $atts['yog_animation'], 'data-animation-daley' => $atts['yog_delay'] ) ) .'>';
                    
                        //Heading
                        if ( isset( $atts['heading'] ) ) {
                            echo '<div class="product-heading"><h3><img src="'. get_template_directory_uri() .'/assets/images/shoes.png" alt="ss-logo"> '. esc_html( $atts['heading'] ) .'</h3></div>';
                        }
                        
                        $yog_cats_lists = '';         
            			foreach ( $product_categories as $category ) {
                           $yog_cats_lists .= '<li data-filter=".product_cat-'. esc_attr( $category->slug ) .'">'. esc_html( $category->name ) .'</li>';
            			}
                        
                        $yog_img = '';
                        if( $atts['yog_banner'] ){
                           $yog_img .= '<div class="productbg"><img src="'. wp_get_attachment_url( $atts['yog_banner'] ) .'"></div>'; 
                        }
                        
                        //Filter
                        echo 
                        '<div class="col-sm-3 products-list no-padding">
                            <div class="filters filter-button-group">
                                <ul class="nav nav-tabs nav-tab-line" id="new-products-1">
                                    <li class="active" data-filter="*">'. esc_html__( 'All', 'yog' ) .'</li>
                                    '. $yog_cats_lists .'
                                </ul>
                                '. $yog_img .'
                            </div>
                        </div>
                        <div class="col-sm-9 no-padding">
                            <ul class="grid">';
                        
                            while ( $products->have_posts() ) : $products->the_post(); 
                                global $product, $post;
                                
                                //Class
                                $classes[] = 'mf-item col-sm-6';
                                $classes[] = yog_get_column( $columns );
                                
                                ?>
                                <li <?php wc_product_class( $classes ); ?>>
                                    
                                    <div class="products">
                                       <div class="product">
                                           <div class="product-image">
                                              <div class="image">
                                                <a href="<?php the_permalink(); ?>">    
                                                  <?php 
                                                     $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');
                                                     echo '<img src="'. esc_url( $thumb[0] ) .'" alt="">'; 
                                                  ?> 
                                                </a>
                                              </div>
                                           </div>
                                           <div class="product-info text-left">
                                              <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                                              <?php woocommerce_template_loop_rating(); ?>
                                              <div class="description"></div>
                                              <div class="product-price"><?php woocommerce_template_loop_price(); ?></div>
                                           </div>
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <?php
                                
                            endwhile;
                            
                            //Reset Post
                            wp_reset_postdata();
                           
                            
                echo '</ul><div class="clearfix"></div></div></div>';
                
            endif;
                
            return ob_get_clean();
                
        }elseif( $atts['style'] == 'ten' && $product_categories ){
            
            ob_start();
			
            //Animation
            $yog_animation = ( isset( $atts['yog_animation'] ) && !empty( $atts['yog_animation'] ) )? $atts['yog_animation'] : '';
            $yog_delay     = ( isset( $atts['yog_delay'] ) && !empty( $atts['yog_delay'] ) )? $atts['yog_delay'] : '';
            
            ?>
            <section class="section autoparts categories_section py-30" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
                <div class="section-title text-center">
                    <?php 
                        //Heading
                        if ( isset( $atts['heading'] ) ) {
                            echo '<h2 class="text-uppercase my-0 heading">'. esc_html( $atts['heading'] ) .'</h2>';
                        }
                        
                        //Sub Heading
                        if( $atts['sub_heading'] ){
                           echo '<p class="text my-10">'. $atts['sub_heading'] .'</p>'; 
                        }
                    ?>
                  </div>
                  <div class="row pt-15 pb-30">
                     <?php 
                        foreach( $product_categories as $prod_cat ):
                        
                            $yog_image        = wp_get_attachment_url( $prod_cat->term_id );
                            $yog_cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
                            $yog_image        = wp_get_attachment_thumb_url( $yog_cat_thumb_id );
                            $yog_term_link    = get_term_link( $prod_cat, 'product_cat' );
                            $yog_child_cats   = get_term_children( $prod_cat->term_id, 'product_cat' );
                            ?>
                            <div class="<?php echo yog_get_column( $columns ); ?> col-sm-6 py-15">
                              <div class="media categorie-media p-30 wow bounceIn">
                                <div class="media-body">
                                  <h6 class="font-weight-medium text-uppercase my-0"><a href="<?php echo esc_url( $yog_term_link ); ?>"><?php echo $prod_cat->name; ?></a></h6>
                                  <?php 
                                    //Child Categories
                                    if ( $yog_child_cats && ! is_wp_error( $yog_child_cats ) ) :
                                        //Wrapper Start
                                        echo '<ul class="list-unstyled categorie_list_item">';
                                            
                                            foreach( $yog_child_cats as $yog_child_cat ):
                                                $yog_term = get_term_by( 'id', $yog_child_cat, 'product_cat' );
                                                echo '<li>'. $yog_term->name .'</li>';
                                            endforeach;
                                            
                                        //Wrapper End
                                        echo '</ul>';
                                    endif;
                                  ?>
                                  <a href="<?php echo esc_url( $yog_term_link ); ?>"><?php _e( 'More', 'flipmart' ); ?> <i class="fa fa-chevron-right"></i></a>
                                </div>
                                <?php if( $yog_image ): ?>
                                    <div class="align-self-center icon">
                                      <img src="<?php echo $yog_image; ?>" alt="<?php  echo $prod_cat->name; ?>" />
                                    </div>
                                <?php endif; ?>
                              </div>
                            </div>
                            <?php
                        endforeach;
                     ?>
                  </div>
            </section>
            <?php
            
            return ob_get_clean();
    
        }elseif ( $product_categories ) {
            
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
            }elseif( $atts['style'] == 'six' ){
                ?>
                <div class="product-categories">
                    <div class="divider-img divider-img-cat">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kids-divider.png" alt="" />
                     </div>
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="heading-content heading-content-custom">
                                 <?php 
                                    //Heading
                                    if( $atts['heading'] ){
                                       echo '<h2>'. $atts['heading'] .'</h2>'; 
                                    }
                                    
                                    //Sub Heading
                                    if( $atts['sub_heading'] ){
                                       echo '<p>'. $atts['sub_heading'] .'</p>'; 
                                    }
                                 ?>
                              </div>
                           </div>
                           <div class="category-row">
                <?php
            }else{
                //Site Version Fashion Slider 
                if( isset( $GLOBALS['flipmart']['site-version'] ) && $GLOBALS['flipmart']['site-version'] == 'modify' &&  $GLOBALS['flipmart']['site-version-modify'] == 'fashion' ){
                   echo '<div class="product-section row" '. yog_helper()->get_attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) .'>';
                }else{    
                ?>
                <div class="search-result-container" <?php yog_helper()->attr( false, array( 'data-animation' => $yog_animation, 'data-animation-daley' => $yog_delay ) ) ?>>
                  <div id="myTabContent" class="tab-content category-list">
                    <div class="tab-pane active" id="grid-container">
                      <div class="category-product">
                        <div class="row"> 
                
                <?php 
                } 
            }
            
            $yog_column_counter = 0; $yog_counter = 2; $yog_close = false; $yog_heading = $yog_content = '';
			foreach ( $product_categories as $category ) {
			     
                // Render product template.
				if( $atts['style'] == 'one' ){
				   
                    wc_get_template( 'content-product_cat_slider.php', array(
    					'category' => $category, 'style' => 'full'
    				) );  
                    
                }elseif( $atts['style'] == 'two' ){
                    
                    //Slider Content Wrapper Start
                    $yog_column_counter++;
                    if ( $yog_column_counter == 1 ) {
                        
                        echo '<div class="item"><div class="products best-product">';
                        $yog_close = true;
                        
                    }
                    
                    wc_get_template( 'content-product_cat_slider.php', array(
    					'category' => $category
    				) );
                    
                    //Slider Content Wrapper End
                    if ( $yog_column_counter == $yog_counter ) {
                        $yog_column_counter = 0;
                        echo '</div></div>';
                        $yog_close = false;
                    }
                    
                }elseif( $atts['style'] == 'four' ){
                    
                    $yog_heading .= '<li><a data-transition-type="backSlide" href="#tab-'. $category->term_id .'" data-toggle="tab">'. $category->name .'</a></li>';
                    
                    ob_start();
                    $yog_class = ( $yog_column_counter == 0 )? ' in active' : '';
                    ?>
                    <div class="tab-pane<?php echo $yog_class; ?>" id="tab-<?php echo $category->term_id; ?>">
                        <div class="product-slider">
                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="3">
                                <?php 
                                    wc_get_template( 'content-product_cat_slider.php', array(
                    					'category' => $category, 'style' => 'full'
                    				) );
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    
                    $yog_content = ob_get_contents();
                    ob_end_clean();
                    
                    $yog_column_counter++;
                    
                }elseif( $atts['style'] == 'six' ){
                    
                    wc_get_template( 'content-product_cat.php', array(
    					'category' => $category, 'column' => $columns, 'style' => 'kidswear'
    				) );
                    
                }else{
                    
                    wc_get_template( 'content-product_cat.php', array(
    					'category' => $category, 'column' => $columns
    				) );
                    
                }
			}

			//Slider Content Wrapper End
            if ( $yog_close && $atts['style'] == 'two'  ) {
                 echo '</div></div>';
            }
            
            //Wrapper End.
            if( $atts['style'] == 'one' ){
                
                echo '</div></div>';
                
            }elseif( $atts['style'] == 'two' ){
                
                //Wrapper Close
                echo '</div></div></div>';
                
            }elseif( $atts['style'] == 'six' ){
                
                //Wrapper Close
                echo '</div></div></div></div>';
                
            }else{
                
                wc_get_template( 'loop/loop-end.php');  
            }
		}

		woocommerce_reset_loop();

		return ob_get_clean();
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
            'sub_heading'  => '',
			'limit'        => '12',
			'columns'      => '4',
			'orderby'      => 'date',
			'order'        => 'DESC',
			'category'     => '',
			'cat_operator' => 'IN',
            'paginate'   => false,
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
	   	if ( isset( $atts['per_page'] ) ) {
	        $atts['limit'] = $atts['per_page'];
		}
        $atts = array_merge( array(
            'style'        => 'one',
            'heading'      => '',
            'sub_heading'  => '',
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
            'sub_heading'  => '',
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
            'heading'      => '',
            'sub_heading'  => '',
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
            'sub_heading'  => '',
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
            'heading'      => '',
            'sub_heading'  => '', 
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
    
    /**
	 * Adds a tax_query index to the query to filter by category.
	 *
	 * @param array $args
	 * @param string $category
	 * @param string $operator
	 * @return array;
	 * @access private
	 */
	 private static function _maybe_add_categories_args( $args, $category, $operator ) {
		if ( ! empty( $category ) ) {
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'product_cat',
					'terms'    => $category,
					'field'    => 'slug',
					'operator' => $operator
				)
			);
		}

		return $args;
	 } 
     
     private static function yog_get_the_category( $id = false, $tcat = 'category' ) {
        $categories = get_the_terms( $id, $tcat );
        if ( ! $categories )
            $categories = array();
    
        $categories = array_values( $categories );
    
        foreach ( array_keys( $categories ) as $key ) {
            _make_cat_compat( $categories[$key] );
        }
    
        // Filter name is plural because we return alot of categories (possibly more than #13237) not just one
        return apply_filters( 'get_the_categories', $categories );
    }    
	
}
new Yog_WC_Shortcodes();