<?php
/**
 * Override WooCommerce default widgets for the markup
 */

//check plugin activation. 
if(!class_exists('Woocommerce')) return;

if( 'book' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
    
    class Yog_WC_Widget_Top_Rated_Products extends WC_Widget_Top_Rated_Products {

    	/**
    	 * Output widget.
    	 *
    	 * @see WP_Widget
    	 * @param array $args     Arguments.
    	 * @param array $instance Widget instance.
    	 */
    	public function widget( $args, $instance ) {
    
    		if ( $this->get_cached_widget( $args ) ) {
    			return;
    		}
    
    		ob_start();
    
    		$number = ! empty( $instance['number'] ) ? absint( $instance['number'] ) : $this->settings['number']['std'];
    
    		$query_args = array(
    			'posts_per_page' => $number,
    			'no_found_rows'  => 1,
    			'post_status'    => 'publish',
    			'post_type'      => 'product',
    			'meta_key'       => '_wc_average_rating',
    			'orderby'        => 'meta_value_num',
    			'order'          => 'DESC',
    			'meta_query'     => WC()->query->get_meta_query(),
    			'tax_query'      => WC()->query->get_tax_query(),
    		); // WPCS: slow query ok.
    
    		$r = new WP_Query( $query_args );
    
    		if ( $r->have_posts() ) {
    
    			$this->widget_start( $args, $instance );
    
    			echo wp_kses_post( apply_filters( 'woocommerce_before_widget_product_list', '<div class="book-new-products"><div class="sale-off best-deal-tab"><div id="product-tabs-slider"><div class="tab-pane in active" id="all"><div class="product-slider"><div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="1">' ) );
    
                $counter = 0; $column = 4;
                
    			while ( $r->have_posts() ) {
    				$r->the_post();
                    
                    $counter++;
                    
                    //Wrapper
                    if ( $counter == 1 ) {
                        echo '<div class="item item-carousel">';
                        $counter_close = true;
                    }
                    
    				wc_get_template( 'content-widget-product.php', array( 'show_rating' => true ) );
                    
                    //Wrapper Container Close.
                    if ( $counter == $column ) {
                        $counter = 0;
                        echo '</div>';
                        $counter_close = false;
                    }
                    
    			}
                
                // close last unclosed row
                if ( $counter_close ) {
                    echo '</div>';
                }
                
    			echo wp_kses_post( apply_filters( 'woocommerce_after_widget_product_list', '</div></div></div></div></div></div>' ) );
    
    			$this->widget_end( $args );
    		}
    
    		wp_reset_postdata();
    
    		$content = ob_get_clean();
    
    		echo $content; // WPCS: XSS ok.
    
    		$this->cache_widget( $args, $content );
    	}
        
    }
    register_widget( 'Yog_WC_Widget_Top_Rated_Products' );
    
    class Yog_Widget_Products extends WC_Widget_Products {

        /**
    	 * Output widget.
    	 *
    	 * @see WP_Widget
    	 *
    	 * @param array $args
    	 * @param array $instance
    	 */
        public function widget( $args, $instance ) {
    		if ( $this->get_cached_widget( $args ) ) {
    			return;
    		}
    
    		ob_start();
    
    		$products = $this->get_products( $args, $instance );
    		if ( $products && $products->have_posts() ) {
    			$this->widget_start( $args, $instance );
    
    			echo apply_filters( 'woocommerce_before_widget_product_list', '<div class="book-new-products"><div class="sale-off best-deal-tab"><div id="product-tabs-slider"><div class="tab-pane in active" id="all"><div class="product-slider"><div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="1">' );
                
    			$counter = 0; $column = 4;
                
    			while ( $products->have_posts() ) {
    				$products->the_post();
                    
                    $counter++;
                    
                    //Wrapper
                    if ( $counter == 1 ) {
                        echo '<div class="item item-carousel">';
                        $counter_close = true;
                    }
                    
    				wc_get_template( 'content-widget-product.php', array( 'show_rating' => true ) );
                    
                    //Wrapper Container Close.
                    if ( $counter == $column ) {
                        $counter = 0;
                        echo '</div>';
                        $counter_close = false;
                    }
                    
    			}
                
                // close last unclosed row
                if ( $counter_close ) {
                    echo '</div>';
                }
    
    			echo apply_filters( 'woocommerce_after_widget_product_list', '</div></div></div></div></div></div>' );
    
    			$this->widget_end( $args );
    		}
    
    		wp_reset_postdata();
    
    		echo $this->cache_widget( $args, ob_get_clean() ); // WPCS: XSS ok.
    	}
    }
    register_widget( 'Yog_Widget_Products' );
    
    class Yog_WC_Widget_Recently_Viewed extends WC_Widget_Recently_Viewed {
        
        /**
    	 * Output widget.
    	 *
    	 * @see WP_Widget
    	 * @param array $args     Arguments.
    	 * @param array $instance Widget instance.
    	 */
    	public function widget( $args, $instance ) {
    		$viewed_products = ! empty( $_COOKIE['woocommerce_recently_viewed'] ) ? (array) explode( '|', wp_unslash( $_COOKIE['woocommerce_recently_viewed'] ) ) : array(); // @codingStandardsIgnoreLine
    		$viewed_products = array_reverse( array_filter( array_map( 'absint', $viewed_products ) ) );
    
    		if ( empty( $viewed_products ) ) {
    			return;
    		}
    
    		ob_start();
    
    		$number = ! empty( $instance['number'] ) ? absint( $instance['number'] ) : $this->settings['number']['std'];
    
    		$query_args = array(
    			'posts_per_page' => $number,
    			'no_found_rows'  => 1,
    			'post_status'    => 'publish',
    			'post_type'      => 'product',
    			'post__in'       => $viewed_products,
    			'orderby'        => 'post__in',
    		);
    
    		if ( 'yes' === get_option( 'woocommerce_hide_out_of_stock_items' ) ) {
    			$query_args['tax_query'] = array(
    				array(
    					'taxonomy' => 'product_visibility',
    					'field'    => 'name',
    					'terms'    => 'outofstock',
    					'operator' => 'NOT IN',
    				),
    			); // WPCS: slow query ok.
    		}
    
    		$r = new WP_Query( apply_filters( 'woocommerce_recently_viewed_products_widget_query_args', $query_args ) );
    
    		if ( $r->have_posts() ) {
    
    			$this->widget_start( $args, $instance );
    
    			echo apply_filters( 'woocommerce_before_widget_product_list', '<div class="book-new-products"><div class="sale-off best-deal-tab"><div id="product-tabs-slider"><div class="tab-pane in active" id="all"><div class="product-slider"><div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="1">' );
                
                $counter = 0; $column = 4;
                
    			while ( $r->have_posts() ) {
    				$r->the_post();
                    
    				$counter++;
                    
                    //Wrapper
                    if ( $counter == 1 ) {
                        echo '<div class="item item-carousel">';
                        $counter_close = true;
                    }
                    
    				wc_get_template( 'content-widget-product.php' );
                    
                    //Wrapper Container Close.
                    if ( $counter == $column ) {
                        $counter = 0;
                        echo '</div>';
                        $counter_close = false;
                    }
    			}
                
                // close last unclosed row
                if ( $counter_close ) {
                    echo '</div>';
                }
    
    			echo apply_filters( 'woocommerce_after_widget_product_list', '</div></div></div></div></div></div>' );
    
    			$this->widget_end( $args );
    		}
    
    		wp_reset_postdata();
    
    		$content = ob_get_clean();
    
    		echo $content; // WPCS: XSS ok.
    	}
    }
    register_widget( 'Yog_WC_Widget_Recently_Viewed' );
    
    class Yog_WC_Widget_Recent_Reviews extends WC_Widget_Recent_Reviews {
        
        /**
    	 * Output widget.
    	 *
    	 * @see WP_Widget
    	 * @param array $args     Arguments.
    	 * @param array $instance Widget instance.
    	 */
    	public function widget( $args, $instance ) {
    		global $comments, $comment;
    
    		if ( $this->get_cached_widget( $args ) ) {
    			return;
    		}
    
    		ob_start();
    
    		$number   = ! empty( $instance['number'] ) ? absint( $instance['number'] ) : $this->settings['number']['std'];
    		$comments = get_comments(
    			array(
    				'number'      => $number,
    				'status'      => 'approve',
    				'post_status' => 'publish',
    				'post_type'   => 'product',
    				'parent'      => 0,
    			)
    		); // WPCS: override ok.
    
    		if ( $comments ) {
    			$this->widget_start( $args, $instance );
                
                echo wp_kses_post( apply_filters( 'woocommerce_before_widget_product_review_list', '<div class="book-new-products"><div class="sale-off best-deal-tab"><div id="product-tabs-slider"><div class="tab-pane in active" id="all"><div class="product-slider"><div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="1">' ) );
                
                $counter = 0; $column = 4;
                
    			foreach ( (array) $comments as $comment ) {
    			     
                    $counter++; 
    			 
                    //Wrapper
                    if ( $counter == 1 ) {
                        echo '<div class="item item-carousel">';
                        $counter_close = true;
                    }
    
    				$_product = wc_get_product( $comment->comment_post_ID );
    
    				$rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );
    
    				$rating_html = wc_get_rating_html( $rating );
                    
                    ?>
                    <div class="products">
                        <div class="product book-best-deal">
                            <div class="product-image">
                              <div class="image"> 
                              	<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><?php echo $_product->get_image( array( 118, 118 ) ); ?> </a>
                               </div>
                            </div>
                            <div class="sale-product book-shop-price">
                                <h4> <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><?php echo $_product->get_name(); ?> </a></h4>
                                <?php echo $rating_html; ?>
                                <p><?php printf( '<small class="reviewer">' . _x( 'by %1$s', 'by comment author', 'flipmart' ) . '</small>', get_comment_author() ); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    
                    //Wrapper Container Close.
                    if ( $counter == $column ) {
                        $counter = 0;
                        echo '</div>';
                        $counter_close = false;
                    }
    
    			}
                
                // close last unclosed row
                if ( $counter_close ) {
                    echo '</div>';
                }
            
    			echo wp_kses_post( apply_filters( 'woocommerce_after_widget_product_review_list', '</div></div></div></div></div></div>' ) );
                
    			$this->widget_end( $args );
    
    		}
    
    		$content = ob_get_clean();
    
    		echo $content; // WPCS: XSS ok.
    
    		$this->cache_widget( $args, $content );
    	}
        
    }
    register_widget( 'Yog_WC_Widget_Recent_Reviews' );

else:

    class Yog_WC_Widget_Top_Rated_Products extends WC_Widget_Top_Rated_Products {
        
        /**
    	 * Output widget.
    	 *
    	 * @see WP_Widget
    	 * @param array $args     Arguments.
    	 * @param array $instance Widget instance.
    	 */
    	public function widget( $args, $instance ) {
    
    		if ( $this->get_cached_widget( $args ) ) {
    			return;
    		}
    
    		ob_start();
    
    		$number = ! empty( $instance['number'] ) ? absint( $instance['number'] ) : $this->settings['number']['std'];
    
    		$query_args = array(
    			'posts_per_page' => $number,
    			'no_found_rows'  => 1,
    			'post_status'    => 'publish',
    			'post_type'      => 'product',
    			'meta_key'       => '_wc_average_rating',
    			'orderby'        => 'meta_value_num',
    			'order'          => 'DESC',
    			'meta_query'     => WC()->query->get_meta_query(),
    			'tax_query'      => WC()->query->get_tax_query(),
    		); // WPCS: slow query ok.
    
    		$r = new WP_Query( $query_args );
    
    		if ( $r->have_posts() ) {
    
    			$this->widget_start( $args, $instance );
    
    			echo apply_filters( 'woocommerce_before_widget_product_list', '<div class="sidebar-widget-body outer-top-xs"><div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">' );
                
                $counter = 0; $column = 3;
                
    			while ( $r->have_posts() ) {
    				$r->the_post();
                    
                    $counter++;
                    
                    //Wrapper
                    if ( $counter == 1 ) {
                        echo '<div class="item"><div class="products special-product">';
                        $counter_close = true;
                    }
                    
    				wc_get_template( 'content-widget-product.php', array( 'show_rating' => true ) );
                    
                    //Wrapper Container Close.
                    if ( $counter == $column ) {
                        $counter = 0;
                        echo '</div></div>';
                        $counter_close = false;
                    }
                    
    			}
                
                // close last unclosed row
                if ( $counter_close ) {
                    echo '</div></div>';
                }
    
    			echo apply_filters( 'woocommerce_after_widget_product_list', '</div></div>' );
    
    			$this->widget_end( $args );
    		}
    
    		wp_reset_postdata();
    
    		$content = ob_get_clean();
    
    		echo $content; // WPCS: XSS ok.
    
    		$this->cache_widget( $args, $content );
    	}
        
    }
    register_widget( 'Yog_WC_Widget_Top_Rated_Products' );
    
    class Yog_Widget_Products extends WC_Widget_Products {
        
        /**
    	 * Output widget.
    	 *
    	 * @param array $args     Arguments.
    	 * @param array $instance Widget instance.
    	 *
    	 * @see WP_Widget
    	 */
    	public function widget( $args, $instance ) {
    		if ( $this->get_cached_widget( $args ) ) {
    			return;
    		}
    
    		ob_start();
    
    		$products = $this->get_products( $args, $instance );
    		if ( $products && $products->have_posts() ) {
    			$this->widget_start( $args, $instance );
    
    			echo apply_filters( 'woocommerce_before_widget_product_list', '<div class="sidebar-widget-body outer-top-xs book-best-deal book-new-products"><div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">' );
    
    			$counter = 0; $column = 3;
                
    			while ( $products->have_posts() ) {
    				$products->the_post();
                    
                    $counter++;
                    
                    //Wrapper
                    if ( $counter == 1 ) {
                        echo '<div class="item"><div class="products special-product">';
                        $counter_close = true;
                    }
                    
    				wc_get_template( 'content-widget-product.php' );
                    
                    //Wrapper Container Close.
                    if ( $counter == $column ) {
                        $counter = 0;
                        echo '</div></div>';
                        $counter_close = false;
                    }
    			}
                
                // close last unclosed row
                if ( $counter_close ) {
                    echo '</div></div>';
                }
    
    			echo apply_filters( 'woocommerce_after_widget_product_list', '</div></div>' );
    
    			$this->widget_end( $args );
    		}
    
    		wp_reset_postdata();
    
    		echo $this->cache_widget( $args, ob_get_clean() ); // WPCS: XSS ok.
    	}
        
    }
    register_widget( 'Yog_Widget_Products' );
    
    class Yog_WC_Widget_Recently_Viewed extends WC_Widget_Recently_Viewed {
        
        /**
    	 * Output widget.
    	 *
    	 * @see WP_Widget
    	 * @param array $args     Arguments.
    	 * @param array $instance Widget instance.
    	 */
    	public function widget( $args, $instance ) {
    		$viewed_products = ! empty( $_COOKIE['woocommerce_recently_viewed'] ) ? (array) explode( '|', wp_unslash( $_COOKIE['woocommerce_recently_viewed'] ) ) : array(); // @codingStandardsIgnoreLine
    		$viewed_products = array_reverse( array_filter( array_map( 'absint', $viewed_products ) ) );
    
    		if ( empty( $viewed_products ) ) {
    			return;
    		}
    
    		ob_start();
    
    		$number = ! empty( $instance['number'] ) ? absint( $instance['number'] ) : $this->settings['number']['std'];
    
    		$query_args = array(
    			'posts_per_page' => $number,
    			'no_found_rows'  => 1,
    			'post_status'    => 'publish',
    			'post_type'      => 'product',
    			'post__in'       => $viewed_products,
    			'orderby'        => 'post__in',
    		);
    
    		if ( 'yes' === get_option( 'woocommerce_hide_out_of_stock_items' ) ) {
    			$query_args['tax_query'] = array(
    				array(
    					'taxonomy' => 'product_visibility',
    					'field'    => 'name',
    					'terms'    => 'outofstock',
    					'operator' => 'NOT IN',
    				),
    			); // WPCS: slow query ok.
    		}
    
    		$r = new WP_Query( apply_filters( 'woocommerce_recently_viewed_products_widget_query_args', $query_args ) );
    
    		if ( $r->have_posts() ) {
    
    			$this->widget_start( $args, $instance );
    
    			echo apply_filters( 'woocommerce_before_widget_product_list', '<div class="sidebar-widget-body outer-top-xs"><div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">' );
                
                $counter = 0; $column = 4;
                
    			while ( $r->have_posts() ) {
    				$r->the_post();
                    
    				$counter++;
                    
                    //Wrapper
                    if ( $counter == 1 ) {
                        echo '<div class="item"><div class="products special-product">';
                        $counter_close = true;
                    }
                    
    				wc_get_template( 'content-widget-product.php' );
                    
                    //Wrapper Container Close.
                    if ( $counter == $column ) {
                        $counter = 0;
                        echo '</div></div>';
                        $counter_close = false;
                    }
    			}
                
                // close last unclosed row
                if ( $counter_close ) {
                    echo '</div></div>';
                }
    
    			echo apply_filters( 'woocommerce_after_widget_product_list', '</div></div>' );
    
    			$this->widget_end( $args );
    		}
    
    		wp_reset_postdata();
    
    		$content = ob_get_clean();
    
    		echo $content; // WPCS: XSS ok.
    	}
    }
    register_widget( 'Yog_WC_Widget_Recently_Viewed' );
    
    class Yog_WC_Widget_Recent_Reviews extends WC_Widget_Recent_Reviews {
        
        
        /**
    	 * Output widget.
    	 *
    	 * @see WP_Widget
    	 * @param array $args     Arguments.
    	 * @param array $instance Widget instance.
    	 */
    	public function widget( $args, $instance ) {
    		global $comments, $comment;
    
    		if ( $this->get_cached_widget( $args ) ) {
    			return;
    		}
    
    		ob_start();
    
    		$number   = ! empty( $instance['number'] ) ? absint( $instance['number'] ) : $this->settings['number']['std'];
    		$comments = get_comments(
    			array(
    				'number'      => $number,
    				'status'      => 'approve',
    				'post_status' => 'publish',
    				'post_type'   => 'product',
    				'parent'      => 0,
    			)
    		); // WPCS: override ok.
    
    		if ( $comments ) {
    			$this->widget_start( $args, $instance );
    
    			echo wp_kses_post( apply_filters( 'woocommerce_before_widget_product_review_list', '<div class="sidebar-widget-body outer-top-xs"><div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">' ) );
    
    			$counter = 0; $column = 3;
                
    			foreach ( (array) $comments as $comment ) {
    			     
                    $counter++; 
    			 
                    //Wrapper
                    if ( $counter == 1 ) {
                        echo '<div class="item"><div class="products special-product">';
                        $counter_close = true;
                    }
    
    				$_product = wc_get_product( $comment->comment_post_ID );
    
    				$rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );
    
    				$rating_html = wc_get_rating_html( $rating );
                    
                    ?>
                    <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image"> <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"> <?php echo $_product->get_image( array( 90, 90 ) ); ?> </a> </div>
                              </div>
                            </div>
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><?php echo $_product->get_name(); ?></a></h3>
                                <?php echo $rating_html; ?>
                            	<div class="product-price"> <span class="price"> <?php printf( '<small class="reviewer">' . _x( 'by %1$s', 'by comment author', 'flipmart' ) . '</small>', get_comment_author() ); ?> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div> 
                    </div><div class="clearfix"></div>
                    <?php
                    
                    //Wrapper Container Close.
                    if ( $counter == $column ) {
                        $counter = 0;
                        echo '</div></div>';
                        $counter_close = false;
                    }
                }
                
    			// close last unclosed row
                if ( $counter_close ) {
                    echo '</div></div>';
                }
                
    			echo wp_kses_post( apply_filters( 'woocommerce_after_widget_product_review_list', '</div></div>' ) );
    
    			$this->widget_end( $args );
    
    		}
    
    		$content = ob_get_clean();
    
    		echo $content; // WPCS: XSS ok.
    
    		$this->cache_widget( $args, $content );
    	}
    }
    register_widget( 'Yog_WC_Widget_Recent_Reviews' );

endif;

class Yog_Widget_Price_Filter extends WC_Widget_Price_Filter {
    
    /**
	 * Output widget.
	 *
	 * @see WP_Widget
	 *
	 * @param array $args     Arguments.
	 * @param array $instance Widget instance.
	 */
	public function widget( $args, $instance ) {
		global $wp;

		// Requires lookup table added in 3.6.
		if ( version_compare( get_option( 'woocommerce_db_version', null ), '3.6', '<' ) ) {
			return;
		}

		if ( ! is_shop() && ! is_product_taxonomy() ) {
			return;
		}

		// If there are not posts and we're not filtering, hide the widget.
		if ( ! WC()->query->get_main_query()->post_count && ! isset( $_GET['min_price'] ) && ! isset( $_GET['max_price'] ) ) { // WPCS: input var ok, CSRF ok.
			return;
		}

		wp_enqueue_script( 'wc-price-slider' );

		// Round values to nearest 10 by default.
		$step = max( apply_filters( 'woocommerce_price_filter_widget_step', 10 ), 1 );

		// Find min and max price in current result set.
		$prices    = $this->get_filtered_price();
		$min_price = $prices->min_price;
		$max_price = $prices->max_price;

		// Check to see if we should add taxes to the prices if store are excl tax but display incl.
		$tax_display_mode = get_option( 'woocommerce_tax_display_shop' );

		if ( wc_tax_enabled() && ! wc_prices_include_tax() && 'incl' === $tax_display_mode ) {
			$tax_class = apply_filters( 'woocommerce_price_filter_widget_tax_class', '' ); // Uses standard tax class.
			$tax_rates = WC_Tax::get_rates( $tax_class );

			if ( $tax_rates ) {
				$min_price += WC_Tax::get_tax_total( WC_Tax::calc_exclusive_tax( $min_price, $tax_rates ) );
				$max_price += WC_Tax::get_tax_total( WC_Tax::calc_exclusive_tax( $max_price, $tax_rates ) );
			}
		}

		$min_price = apply_filters( 'woocommerce_price_filter_widget_min_amount', floor( $min_price / $step ) * $step );
		$max_price = apply_filters( 'woocommerce_price_filter_widget_max_amount', ceil( $max_price / $step ) * $step );

		// If both min and max are equal, we don't need a slider.
		if ( $min_price === $max_price ) {
			return;
		}

		$current_min_price = isset( $_GET['min_price'] ) ? floor( floatval( wp_unslash( $_GET['min_price'] ) ) / $step ) * $step : $min_price; // WPCS: input var ok, CSRF ok.
		$current_max_price = isset( $_GET['max_price'] ) ? ceil( floatval( wp_unslash( $_GET['max_price'] ) ) / $step ) * $step : $max_price; // WPCS: input var ok, CSRF ok.

		$this->widget_start( $args, $instance );

		if ( '' === get_option( 'permalink_structure' ) ) {
			$form_action = remove_query_arg( array( 'page', 'paged', 'product-page' ), add_query_arg( $wp->query_string, '', home_url( $wp->request ) ) );
		} else {
			$form_action = preg_replace( '%\/page/[0-9]+%', '', home_url( trailingslashit( $wp->request ) ) );
		}

		echo '<div class="sidebar-widget-body m-t-10"><form method="get" action="' . esc_url( $form_action ) . '">
			<div class="price_slider_wrapper price-range-holder">
				<div class="price_slider price-slider" style="display:none;"></div>
                <div class="price_slider_amount" data-step="' . esc_attr( $step ) . '">
					<input type="text" id="min_price" name="min_price" value="' . esc_attr( $current_min_price ) . '" data-min="' . esc_attr( $min_price ) . '" placeholder="' . esc_attr__( 'Min price', 'flipmart' ) . '" />
					<input type="text" id="max_price" name="max_price" value="' . esc_attr( $current_max_price ) . '" data-max="' . esc_attr( $max_price ) . '" placeholder="' . esc_attr__( 'Max price', 'flipmart' ) . '" />
					<h4 class="price_label" style="display:none;">
                        <span class="min-max">
                             <span class="pull-left from"></span>
                             <span class="pull-right to"></span>
                        </span>
					</h4>
                    <div class="clearfix space30"></div>
					' . wc_query_string_form_fields( null, array( 'min_price', 'max_price', 'paged' ), '', true ) . '
					<div class="clearfix"></div>
				</div>
			</div>
            <button type="submit" class="lnk btn btn-primary">' . esc_html__( 'Filter', 'flipmart' ) . '</button>
		</form></div>'; // WPCS: XSS ok.

		$this->widget_end( $args );
	}
    
}
register_widget( 'Yog_Widget_Price_Filter' );

class Yog_WC_Widget_Rating_Filter extends WC_Widget_Rating_Filter{
    
    /**
	 * Widget function.
	 *
	 * @see WP_Widget
	 * @param array $args     Arguments.
	 * @param array $instance Widget instance.
	 */
	public function widget( $args, $instance ) {
		if ( ! is_shop() && ! is_product_taxonomy() ) {
			return;
		}

		if ( ! WC()->query->get_main_query()->post_count ) {
			return;
		}

		ob_start();

		$found         = false;
		$rating_filter = isset( $_GET['rating_filter'] ) ? array_filter( array_map( 'absint', explode( ',', wp_unslash( $_GET['rating_filter'] ) ) ) ) : array(); // WPCS: input var ok, CSRF ok, sanitization ok.
		$base_link     = remove_query_arg( 'paged', $this->get_current_page_url() );

		$this->widget_start( $args, $instance );

		echo '<ul>';

		for ( $rating = 5; $rating >= 1; $rating-- ) {
			$count = $this->get_filtered_product_count( $rating );
			if ( empty( $count ) ) {
				continue;
			}
			$found = true;
			$link  = $base_link;

			if ( in_array( $rating, $rating_filter, true ) ) {
				$link_ratings = implode( ',', array_diff( $rating_filter, array( $rating ) ) );
			} else {
				$link_ratings = implode( ',', array_merge( $rating_filter, array( $rating ) ) );
			}

			$class       = in_array( $rating, $rating_filter, true ) ? 'wc-layered-nav-rating chosen' : 'wc-layered-nav-rating';
			$link        = apply_filters( 'woocommerce_rating_filter_link', $link_ratings ? add_query_arg( 'rating_filter', $link_ratings, $link ) : remove_query_arg( 'rating_filter' ) );
			$rating_html = wc_get_star_rating_html( $rating );
			$count_html  = wp_kses(
				apply_filters( 'woocommerce_rating_filter_count', "({$count})", $count, $rating ),
				array(
					'em'     => array(),
					'span'   => array(),
					'strong' => array(),
				)
			);

			printf( '<li class="%s"><a href="%s"><span class="star-rating">%s</span> <span class="pull-right">%s</span></a></li>', esc_attr( $class ), esc_url( $link ), $rating_html, $count_html ); // WPCS: XSS ok.
		}

		echo '</ul>';

		$this->widget_end( $args );

		if ( ! $found ) {
			ob_end_clean();
		} else {
			echo ob_get_clean(); // WPCS: XSS ok.
		}
	}
    
}
register_widget( 'Yog_WC_Widget_Rating_Filter' );

class Yog_WC_Widget_Product_Categories extends WC_Widget_Product_Categories {
    
    /**
	 * Output widget.
	 *
	 * @see WP_Widget
	 * @param array $args     Widget arguments.
	 * @param array $instance Widget instance.
	 */
	public function widget( $args, $instance ) {
		global $wp_query, $post;

		$count              = isset( $instance['count'] ) ? $instance['count'] : $this->settings['count']['std'];
		$hierarchical       = isset( $instance['hierarchical'] ) ? $instance['hierarchical'] : $this->settings['hierarchical']['std'];
		$show_children_only = isset( $instance['show_children_only'] ) ? $instance['show_children_only'] : $this->settings['show_children_only']['std'];
		$dropdown           = isset( $instance['dropdown'] ) ? $instance['dropdown'] : $this->settings['dropdown']['std'];
		$orderby            = isset( $instance['orderby'] ) ? $instance['orderby'] : $this->settings['orderby']['std'];
		$hide_empty         = isset( $instance['hide_empty'] ) ? $instance['hide_empty'] : $this->settings['hide_empty']['std'];
		$dropdown_args      = array(
			'hide_empty' => $hide_empty,
		);
		$list_args          = array(
			'show_count'   => $count,
			'hierarchical' => $hierarchical,
			'taxonomy'     => 'product_cat',
			'hide_empty'   => $hide_empty,
		);
		$max_depth          = absint( isset( $instance['max_depth'] ) ? $instance['max_depth'] : $this->settings['max_depth']['std'] );

		$list_args['menu_order'] = false;
		$dropdown_args['depth']  = $max_depth;
		$list_args['depth']      = $max_depth;

		if ( 'order' === $orderby ) {
			$list_args['orderby']      = 'meta_value_num';
			$dropdown_args['orderby']  = 'meta_value_num';
			$list_args['meta_key']     = 'order';
			$dropdown_args['meta_key'] = 'order';
		}

		$this->current_cat   = false;
		$this->cat_ancestors = array();

		if ( is_tax( 'product_cat' ) ) {
			$this->current_cat   = $wp_query->queried_object;
			$this->cat_ancestors = get_ancestors( $this->current_cat->term_id, 'product_cat' );

		} elseif ( is_singular( 'product' ) ) {
			$terms = wc_get_product_terms(
				$post->ID,
				'product_cat',
				apply_filters(
					'woocommerce_product_categories_widget_product_terms_args',
					array(
						'orderby' => 'parent',
						'order'   => 'DESC',
					)
				)
			);

			if ( $terms ) {
				$main_term           = apply_filters( 'woocommerce_product_categories_widget_main_term', $terms[0], $terms );
				$this->current_cat   = $main_term;
				$this->cat_ancestors = get_ancestors( $main_term->term_id, 'product_cat' );
			}
		}

		// Show Siblings and Children Only.
		if ( $show_children_only && $this->current_cat ) {
			if ( $hierarchical ) {
				$include = array_merge(
					$this->cat_ancestors,
					array( $this->current_cat->term_id ),
					get_terms(
						'product_cat',
						array(
							'fields'       => 'ids',
							'parent'       => 0,
							'hierarchical' => true,
							'hide_empty'   => false,
						)
					),
					get_terms(
						'product_cat',
						array(
							'fields'       => 'ids',
							'parent'       => $this->current_cat->term_id,
							'hierarchical' => true,
							'hide_empty'   => false,
						)
					)
				);
				// Gather siblings of ancestors.
				if ( $this->cat_ancestors ) {
					foreach ( $this->cat_ancestors as $ancestor ) {
						$include = array_merge(
							$include,
							get_terms(
								'product_cat',
								array(
									'fields'       => 'ids',
									'parent'       => $ancestor,
									'hierarchical' => false,
									'hide_empty'   => false,
								)
							)
						);
					}
				}
			} else {
				// Direct children.
				$include = get_terms(
					'product_cat',
					array(
						'fields'       => 'ids',
						'parent'       => $this->current_cat->term_id,
						'hierarchical' => true,
						'hide_empty'   => false,
					)
				);
			}

			$list_args['include']     = implode( ',', $include );
			$dropdown_args['include'] = $list_args['include'];

			if ( empty( $include ) ) {
				return;
			}
		} elseif ( $show_children_only ) {
			$dropdown_args['depth']        = 1;
			$dropdown_args['child_of']     = 0;
			$dropdown_args['hierarchical'] = 1;
			$list_args['depth']            = 1;
			$list_args['child_of']         = 0;
			$list_args['hierarchical']     = 1;
		}

		$this->widget_start( $args, $instance );

		if ( $dropdown ) {
			wc_product_dropdown_categories(
				apply_filters(
					'woocommerce_product_categories_widget_dropdown_args',
					wp_parse_args(
						$dropdown_args,
						array(
							'show_count'         => $count,
							'hierarchical'       => $hierarchical,
							'show_uncategorized' => 0,
							'selected'           => $this->current_cat ? $this->current_cat->slug : '',
						)
					)
				)
			);

			wp_enqueue_script( 'selectWoo' );
			wp_enqueue_style( 'select2' );

			wc_enqueue_js(
				"
				jQuery( '.dropdown_product_cat' ).change( function() {
					if ( jQuery(this).val() != '' ) {
						var this_page = '';
						var home_url  = '" . esc_js( home_url( '/' ) ) . "';
						if ( home_url.indexOf( '?' ) > 0 ) {
							this_page = home_url + '&product_cat=' + jQuery(this).val();
						} else {
							this_page = home_url + '?product_cat=' + jQuery(this).val();
						}
						location.href = this_page;
					} else {
						location.href = '" . esc_js( wc_get_page_permalink( 'shop' ) ) . "';
					}
				});

				if ( jQuery().selectWoo ) {
					var wc_product_cat_select = function() {
						jQuery( '.dropdown_product_cat' ).selectWoo( {
							placeholder: '" . esc_js( __( 'Select a category', 'flipmart' ) ) . "',
							minimumResultsForSearch: 5,
							width: '100%',
							allowClear: true,
							language: {
								noResults: function() {
									return '" . esc_js( _x( 'No matches found', 'enhanced select', 'flipmart' ) ) . "';
								}
							}
						} );
					};
					wc_product_cat_select();
				}
			"
			);
		} else {
			include_once WC()->plugin_path() . '/includes/walkers/class-wc-product-cat-list-walker.php';

			$list_args['walker']                     = new WC_Product_Cat_List_Walker();
			$list_args['title_li']                   = '';
			$list_args['pad_counts']                 = 1;
			$list_args['show_option_none']           = __( 'No product categories exist.', 'flipmart' );
			$list_args['current_category']           = ( $this->current_cat ) ? $this->current_cat->term_id : '';
			$list_args['current_category_ancestors'] = $this->cat_ancestors;
			$list_args['max_depth']                  = $max_depth;

			echo '<ul class="widget-catagories check">';

			wp_list_categories( apply_filters( 'woocommerce_product_categories_widget_args', $list_args ) );

			echo '</ul>';
		}

		$this->widget_end( $args );
	} 
}
register_widget( 'Yog_WC_Widget_Product_Categories' );