<?php
/**
 * Plugin Name: Flipmart Easy Digital Downloads Visual Composer Integration
 * Description: This plugin maps easy-digital-download shortcodes to WPBakery Visual Composer elements.
 * Version:     1.0.0
 * Author:      CKThemes
 * Author URI:  https://ckthemes.com
 * Text Domain: flipmart-vc-integration
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
        require __DIR__ . '/vendor/autoload.php';
}

if( !class_exists( 'FLIPMART_VC_Integration' ) ) {

/**
 * Main FLIPMART_VC_Integration class
 *
 * @since 1.0.0
 */
class FLIPMART_VC_Integration {

    /**
     * @since 1.0.0
     * @var   string Text domain used for translations
     */
    CONST TEXT_DOMAIN = 'flipmart-vc-integration';

    /**
     * @var FLIPMART_VC_Integration $instance The one true FLIPMART_VC_Integration
     * @since       1.0.0
     */
    private static $instance;

    /**
     * Get active instance
     *
     * @access      public
     * @since       1.0.0
     * @return      object self::$instance The one true FLIPMART_VC_Integration
     */
    public static function instance() {
        if( !self::$instance ) {
            self::$instance = new FLIPMART_VC_Integration();
            self::$instance->setup_constants();
            self::$instance->load_textdomain();
            self::$instance->flipmart_shortcode();
            self::$instance->hooks();
        }
        return self::$instance;
    }

    /**
     * Setup plugin constants
     *
     * @access      private
     * @since       1.0.0
     * @return      void
     */
    private function setup_constants() {
        // Plugin version
        define( 'FLIPMART_VC_INTEGRATION_VER', '1.0.0' );
        // Plugin path
        define( 'FLIPMART_VC_INTEGRATION_DIR', plugin_dir_path( __FILE__ ) );
        // Plugin URL
        define( 'FLIPMART_VC_INTEGRATION_URL', plugin_dir_url( __FILE__ ) );
    }

    /**
     * Run action and filter hooks
     *
     * @access      private
     * @since       1.0.0
     * @return      void
     */
    private function hooks() {
       
        // map shortcodes
        if( function_exists( 'vc_map' ) ) { 
            add_action( 'vc_before_init', array( $this, 'vcMap' ) );
        }
    }

    /**
     * Internationalization
     *
     * @access      public
     * @since       1.0.0
     * @return      void
     */
    public function load_textdomain() {
        // Set filter for language directory
        $lang_dir = FLIPMART_VC_INTEGRATION_DIR . '/languages/';
        $lang_dir = apply_filters( 'flipmart_vc_integration_languages_directory', $lang_dir );
        // Traditional WordPress plugin locale filter
        $locale = apply_filters( 'plugin_locale', get_locale(), self::TEXT_DOMAIN );
        $mofile = sprintf( '%1$s-%2$s.mo', self::TEXT_DOMAIN, $locale );
        // Setup paths to current locale file
        $mofile_local   = $lang_dir . $mofile;
        $mofile_global  = WP_LANG_DIR . '/' . self::TEXT_DOMAIN . '/' . $mofile;
        if( file_exists( $mofile_global ) ) {
            // Look in global /wp-content/languages/flipmart-vc-integration/ folder
            load_textdomain( self::TEXT_DOMAIN, $mofile_global );
        } elseif( file_exists( $mofile_local ) ) {
            // Look in local /wp-content/plugins/flipmart-vc-integration/languages/ folder
            load_textdomain( self::TEXT_DOMAIN, $mofile_local );
        } else {
            // Load the default language files
            load_plugin_textdomain( self::TEXT_DOMAIN, false, 'flipmart-vc-integration/languages' );
        }
    }

    /**
     * map easy-digital-downloads shortcodes to visual composer elements
     * http://docs.easydigitaldownloads.com/category/219-short-codes
     *
     * @access      public since it is registered as an action
     * @since       1.0.0
     * @return      void
     */
    public function vcMap() {
        // https://wpbakery.atlassian.net/wiki/pages/viewpage.action?pageId=524332
        // http://docs.easydigitaldownloads.com/article/224-downloads
        vc_map( array(
            'name' => __( 'Downloads', self::TEXT_DOMAIN ),
            'base' => 'downloads',
            'description' => __( 'Output a list or grid of downloadable products.', self::TEXT_DOMAIN ),
            'icon' => 'dashicons dashicons-download',
            'category' => 'Flipmart EDD',
            'params' => array(
                self::categoryParam(),
                self::tagParam(),
                self::excludeCategoryParam(),
                self::excludeTagParam(),
                self::relationParam(),
                self::numberParam(),
                self::priceParam(),
                self::fullContentParam(),
                self::excerptParam(),
                self::buyButtonParam(),
                self::columnsParam(),
                self::thumbnailsParam(),
                self::orderbyParam(),
                self::orderParam(),
                self::idsParam(),
            ),
        ) );
        
        vc_map( array(
            'name' => __( 'Flipmart Downloads', self::TEXT_DOMAIN ),
            'base' => 'flipmart_downloads',
            'description' => __( 'Output a list or grid of downloadable products.', self::TEXT_DOMAIN ),
            'icon' => 'dashicons dashicons-download',
            'category' => 'Flipmart EDD',
            'params' => array(
                self::layoutsParam(),
                self::headingParam(),
                self::categoryParam(),
                self::tagParam(),
                self::excludeCategoryParam(),
                self::excludeTagParam(),
                self::relationParam(),
                self::numberParam(),
                self::priceParam(),
                self::fullContentParam(),
                self::excerptParam(),
                self::buyButtonParam(),
                self::columnsParam(),
                self::thumbnailsParam(),
                self::orderbyParam(),
                self::orderParam(),
                self::idsParam(),
                self::paginationParam(),
                self::animationParam(),
            ),
        ) );

        // http://docs.easydigitaldownloads.com/article/1194-purchasecollection-shortcode
        $purchase_collection_params = array();
        $purchase_collection_params[] = array(
            'param_name' => 'taxonomy',
            'heading' => __( 'Taxonomy', self::TEXT_DOMAIN ),
            'description' => 'Category or Tag.',
            'type' => 'dropdown',
            'value' => array( __( 'Category', self::TEXT_DOMAIN ) => 'download_category', __( 'Tag', self::TEXT_DOMAIN ) => 'download_tag',),
            'save_always' => true,
            'admin_label' => true,
            'group' => 'Data',
        );
        $purchase_collection_category_param = self::categoryParam();
        $purchase_collection_category_param['dependency'] = array(
            'element' => 'taxonomy',
            'value' => 'download_category',
        );
        $purchase_collection_params[] = $purchase_collection_category_param;
        $purchase_collection_tag_param = self::tagParam();
        $purchase_collection_tag_param['dependency'] = array(
            'element' => 'taxonomy',
            'value' => 'download_tag',
        );
        $purchase_collection_params[] = $purchase_collection_tag_param;
        $purchase_collection_params[] = self::textParam();
        $purchase_collection_params[] = self::styleParam();
        $purchase_collection_params[] = self::colorParam();

        vc_map( array(
            'name' => __( 'Purchase Collection', self::TEXT_DOMAIN ),
            'base' => 'purchase_collection',
            'description' => __( 'Make a unique category-based collection of products to be sold as a package.', self::TEXT_DOMAIN ),
            'category' => 'Flipmart EDD',
            'params' => $purchase_collection_params,
        ) );

        // http://docs.easydigitaldownloads.com/article/223-downloaddiscounts
        vc_map( array(
            'name' => __( 'Discounts', self::TEXT_DOMAIN ),
            'base' => 'download_discounts',
            'description' => __( 'Display a list of all active discounts in an unordered list of discount code and amount.', self::TEXT_DOMAIN ),
            'category' => 'Flipmart EDD',
        ) );

        // http://docs.easydigitaldownloads.com/article/220-downloadhistory
        vc_map( array(
            'name' => __( 'History', self::TEXT_DOMAIN ),
            'base' => 'download_history',
            'description' => __( 'The user’s download history with product names and all associated download links.', self::TEXT_DOMAIN ),
            'category' => 'Flipmart EDD',
        ) );

        // http://docs.easydigitaldownloads.com/article/228-purchasehistory
        vc_map( array(
            'name' => __( 'Purchase History', self::TEXT_DOMAIN ),
            'base' => 'purchase_history',
            'description' => __( 'The user’s purchase history with date, amount of each purchase, email and download links.', self::TEXT_DOMAIN ),
            'category' => 'Flipmart EDD',
        ) );

        // http://docs.easydigitaldownloads.com/article/227-downloadcheckout
        vc_map( array(
            'name' => __( 'Checkout', self::TEXT_DOMAIN ),
            'base' => 'download_checkout',
            'description' => __( 'Display the checkout form.', self::TEXT_DOMAIN ),
            'category' => 'Flipmart EDD',
        ) );

        // http://docs.easydigitaldownloads.com/article/229-purchaselink
        $purchase_links_params = array();
        $purchase_links_params[] = self::idParam();
        if ( edd_use_skus()) {
            $purchase_links_params[] = self::skuParam();
        }
        $purchase_links_params[] = self::priceParam();
        $purchase_links_params[] = self::textParam();
        $purchase_links_params[] = self::styleParam();
        $purchase_links_params[] = self::colorParam();
        $purchase_links_params[] = self::classParam();
        $purchase_links_params[] = self::priceIdParam();
        $purchase_links_params[] = self::directParam();

        vc_map( array(
            'name' => __( 'Purchase Link', self::TEXT_DOMAIN ),
            'base' => 'purchase_link',
            'description' => __( 'Display a purchase button for any download.', self::TEXT_DOMAIN ),
            'category' => 'Flipmart EDD',
            'params' => $purchase_links_params,
        ) );

        // http://docs.easydigitaldownloads.com/article/226-downloadcart-shortcode
        vc_map( array(
            'name' => __( 'Cart', self::TEXT_DOMAIN ),
            'base' => 'download_cart',
            'description' => __( 'Display the cart.', self::TEXT_DOMAIN ),
            'category' => 'Flipmart EDD',
        ) );

        // http://docs.easydigitaldownloads.com/article/233-flipmartprofileeditor
        vc_map( array(
            'name' => __( 'Profile Editor', self::TEXT_DOMAIN ),
            'base' => 'flipmart_profile_editor',
            'description' => __( 'Profile editor for logged-in customer.', self::TEXT_DOMAIN ),
            'category' => 'Flipmart EDD',
        ) );

        // http://docs.easydigitaldownloads.com/article/222-flipmartlogin
        vc_map( array(
            'name' => __( 'Login', self::TEXT_DOMAIN ),
            'base' => 'flipmart_login',
            'description' => __( 'Login Form.', self::TEXT_DOMAIN ),
            'category' => 'Flipmart EDD',
            'params' => array(
                self::redirectParam(),
            ),
        ) );

        // http://docs.easydigitaldownloads.com/article/889-register-form
        vc_map( array(
            'name' => __( 'Register', self::TEXT_DOMAIN ),
            'base' => 'flipmart_register',
            'description' => __( 'Account Registration Form.', self::TEXT_DOMAIN ),
            'category' => 'Flipmart EDD',
            'params' => array(
                self::redirectParam(),
            ),
        ) );

        // http://docs.easydigitaldownloads.com/article/1193-flipmartprice-shortcode
        vc_map( array(
            'name' => __( 'Price', self::TEXT_DOMAIN ),
            'base' => 'flipmart_price',
            'description' => __( 'Show price of a download.', self::TEXT_DOMAIN ),
            'category' => 'Flipmart EDD',
            'params' => array(
                self::idParam(),
                self::priceIdParam(),
            ),
        ) );

        // http://docs.easydigitaldownloads.com/article/221-flipmartreceipt
        vc_map( array(
            'name' => __( 'Receipt', self::TEXT_DOMAIN ),
            'base' => 'flipmart_receipt',
            'description' => __( 'Detailed breakdown of the purchased items.', self::TEXT_DOMAIN ),
            'category' => 'Flipmart EDD',
            'params' => array(
                array(
                    'param_name' => 'error',
                    'heading' => __( 'Error message', self::TEXT_DOMAIN ),
                    'description' => __( 'Change the default error message, if an error occurs.', self::TEXT_DOMAIN ),
                    'type' => 'textfield',
                    'admin_label' => true,
                    'group' => 'Layout',
                ),
                self::PriceParam(),
                array(
                    'param_name' => 'discount',
                    'heading' => __( 'Discount', self::TEXT_DOMAIN ),
                    'description' => __( 'Display the discount codes used.', self::TEXT_DOMAIN ),
                    'type' => 'checkbox',
                    'value' => array( __( 'Yes', self::TEXT_DOMAIN ) => 'yes' ),
                    'save_always' => true,
                    'admin_label' => true,
                    'group' => 'Layout',
                ),
                array(
                    'param_name' => 'products',
                    'heading' => __( 'Products', self::TEXT_DOMAIN ),
                    'description' => __( 'Display the products purchased.', self::TEXT_DOMAIN ),
                    'type' => 'checkbox',
                    'value' => array( __( 'Yes', self::TEXT_DOMAIN ) => 'yes' ),
                    'save_always' => true,
                    'admin_label' => true,
                    'group' => 'Layout',
                ),
                array(
                    'param_name' => 'date',
                    'heading' => __( 'Date', self::TEXT_DOMAIN ),
                    'description' => __( 'Display the date of the purchase.', self::TEXT_DOMAIN ),
                    'type' => 'checkbox',
                    'value' => array( __( 'Yes', self::TEXT_DOMAIN ) => 'yes' ),
                    'save_always' => true,
                    'admin_label' => true,
                    'group' => 'Layout',
                ),
                array(
                    'param_name' => 'payment_key',
                    'heading' => __( 'Purchase Identifier', self::TEXT_DOMAIN ),
                    'description' => __( 'Display the unique identifier for the order.', self::TEXT_DOMAIN ),
                    'type' => 'checkbox',
                    'value' => array( __( 'Yes', self::TEXT_DOMAIN ) => 'yes' ),
                    'save_always' => true,
                    'admin_label' => true,
                    'group' => 'Layout',
                ),
                array(
                    'param_name' => 'payment_method',
                    'heading' => __( 'Payment method', self::TEXT_DOMAIN ),
                    'description' => __( 'Display the method of payment for the order.', self::TEXT_DOMAIN ),
                    'type' => 'checkbox',
                    'value' => array( __( 'Yes', self::TEXT_DOMAIN ) => 'yes' ),
                    'save_always' => true,
                    'admin_label' => true,
                    'group' => 'Layout',
                ),
                array(
                    'param_name' => 'payment_id',
                    'heading' => __( 'Payment Number', self::TEXT_DOMAIN ),
                    'description' => __( 'Display the payment number of the order.', self::TEXT_DOMAIN ),
                    'type' => 'checkbox',
                    'value' => array( __( 'Yes', self::TEXT_DOMAIN ) => 'yes' ),
                    'save_always' => true,
                    'admin_label' => true,
                    'group' => 'Layout',
                ),
            ),
        ) );
    }
    
    public function flipmart_shortcode(){
        
        /**
         * Downloads Shortcode
         *
         * This shortcodes uses the WordPress Query API to get downloads with the
         * arguments specified when using the shortcode. A list of the arguments
         * can be found from the EDD Documentation. The shortcode will take all the
         * parameters and display the downloads queried in a valid HTML <div> tags.
         *
         * @since 1.0.6
         * @internal Incomplete shortcode
         * @param array $atts Shortcode attributes
         * @param string $content
         * @return string $display Output generated from the downloads queried
         */
        function flipmart_downloads_query( $atts, $content = null ) {
        	$atts = shortcode_atts( array(
        		'category'         => '',
        		'exclude_category' => '',
        		'tags'             => '',
        		'exclude_tags'     => '',
        		'author'           => false,
        		'relation'         => 'OR',
        		'number'           => 9,
        		'price'            => 'no',
        		'excerpt'          => 'yes',
        		'full_content'     => 'no',
        		'buy_button'       => 'yes',
        		'columns'          => 3,
        		'thumbnails'       => 'true',
        		'orderby'          => 'post_date',
        		'order'            => 'DESC',
        		'ids'              => '',
        		'class'            => '',
        		'pagination'       => 'true',
                'layout'           => 'grid',
                'heading'          => '',
                'animation'        => '' 
        	), $atts, 'downloads' );
        
        	$query = array(
        		'post_type'      => 'download',
        		'orderby'        => $atts['orderby'],
        		'order'          => $atts['order']
        	);
        
        	if ( filter_var( $atts['pagination'], FILTER_VALIDATE_BOOLEAN ) || ( ! filter_var( $atts['pagination'], FILTER_VALIDATE_BOOLEAN ) && $atts[ 'number' ] ) ) {
        
        		$query['posts_per_page'] = (int) $atts['number'];
        
        		if ( $query['posts_per_page'] < 0 ) {
        			$query['posts_per_page'] = abs( $query['posts_per_page'] );
        		}
        	} else {
        		$query['nopaging'] = true;
        	}
        
        	if( 'random' == $atts['orderby'] ) {
        		$atts['pagination'] = false;
        	}
        
        	switch ( $atts['orderby'] ) {
        		case 'price':
        			$atts['orderby']   = 'meta_value';
        			$query['meta_key'] = 'edd_price';
        			$query['orderby']  = 'meta_value_num';
        		break;
        
        		case 'sales':
        			$atts['orderby']   = 'meta_value';
        			$query['meta_key'] = '_edd_download_sales';
        			$query['orderby']  = 'meta_value_num';
        		break;
        
        		case 'earnings':
        			$atts['orderby']   = 'meta_value';
        			$query['meta_key'] = '_edd_download_earnings';
        			$query['orderby']  = 'meta_value_num';
        		break;
        
        		case 'title':
        			$query['orderby'] = 'title';
        		break;
        
        		case 'id':
        			$query['orderby'] = 'ID';
        		break;
        
        		case 'random':
        			$query['orderby'] = 'rand';
        		break;
        
        		case 'post__in':
        			$query['orderby'] = 'post__in';
        		break;
        
        		default:
        			$query['orderby'] = 'post_date';
        		break;
        	}
        
        	if ( $atts['tags'] || $atts['category'] || $atts['exclude_category'] || $atts['exclude_tags'] ) {
        
        		$query['tax_query'] = array(
        			'relation' => $atts['relation']
        		);
        
        		if ( $atts['tags'] ) {
        
        			$tag_list = explode( ',', $atts['tags'] );
        
        			foreach( $tag_list as $tag ) {
        
        				$t_id  = (int) $tag;
        				$is_id = is_int( $t_id ) && ! empty( $t_id );
        
        				if( $is_id ) {
        
        					$term_id = $tag;
        
        				} else {
        
        					$term = get_term_by( 'slug', $tag, 'download_tag' );
        
        					if( ! $term ) {
        						continue;
        					}
        
        					$term_id = $term->term_id;
        				}
        
        				$query['tax_query'][] = array(
        					'taxonomy' => 'download_tag',
        					'field'    => 'term_id',
        					'terms'    => $term_id
        				);
        			}
        
        		}
        
        		if ( $atts['category'] ) {
        
        			$categories = explode( ',', $atts['category'] );
        
        			foreach( $categories as $category ) {
        
        				$t_id  = (int) $category;
        				$is_id = is_int( $t_id ) && ! empty( $t_id );
        
        				if( $is_id ) {
        
        					$term_id = $category;
        
        				} else {
        
        					$term = get_term_by( 'slug', $category, 'download_category' );
        
        					if( ! $term ) {
        						continue;
        					}
        
        					$term_id = $term->term_id;
        
        				}
        
        				$query['tax_query'][] = array(
        					'taxonomy' => 'download_category',
        					'field'    => 'term_id',
        					'terms'    => $term_id,
        				);
        
        			}
        
        		}
        
        		if ( $atts['exclude_category'] ) {
        
        			$categories = explode( ',', $atts['exclude_category'] );
        
        			foreach( $categories as $category ) {
        
        				$t_id  = (int) $category;
        				$is_id = is_int( $t_id ) && ! empty( $t_id );
        
        				if( $is_id ) {
        
        					$term_id = $category;
        
        				} else {
        
        					$term = get_term_by( 'slug', $category, 'download_category' );
        
        					if( ! $term ) {
        						continue;
        					}
        
        					$term_id = $term->term_id;
        				}
        
        				$query['tax_query'][] = array(
        					'taxonomy' => 'download_category',
        					'field'    => 'term_id',
        					'terms'    => $term_id,
        					'operator' => 'NOT IN'
        				);
        			}
        
        		}
        
        		if ( $atts['exclude_tags'] ) {
        
        			$tag_list = explode( ',', $atts['exclude_tags'] );
        
        			foreach( $tag_list as $tag ) {
        
        				$t_id  = (int) $tag;
        				$is_id = is_int( $t_id ) && ! empty( $t_id );
        
        				if( $is_id ) {
        
        					$term_id = $tag;
        
        				} else {
        
        					$term = get_term_by( 'slug', $tag, 'download_tag' );
        
        					if( ! $term ) {
        						continue;
        					}
        
        					$term_id = $term->term_id;
        				}
        
        				$query['tax_query'][] = array(
        					'taxonomy' => 'download_tag',
        					'field'    => 'term_id',
        					'terms'    => $term_id,
        					'operator' => 'NOT IN'
        				);
        
        			}
        
        		}
        	}
        
        	if ( $atts['exclude_tags'] || $atts['exclude_category'] ) {
        		$query['tax_query']['relation'] = 'AND';
        	}
        
        	if ( $atts['author'] ) {
        		$authors = explode( ',', $atts['author'] );
        		if ( ! empty( $authors ) ) {
        			$author_ids = array();
        			$author_names = array();
        
        			foreach ( $authors as $author ) {
        				if ( is_numeric( $author ) ) {
        					$author_ids[] = $author;
        				} else {
        					$user = get_user_by( 'login', $author );
        					if ( $user ) {
        						$author_ids[] = $user->ID;
        					}
        				}
        			}
        
        			if ( ! empty( $author_ids ) ) {
        				$author_ids      = array_unique( array_map( 'absint', $author_ids ) );
        				$query['author'] = implode( ',', $author_ids );
        			}
        		}
        	}
        
        	if( ! empty( $atts['ids'] ) )
        		$query['post__in'] = explode( ',', $atts['ids'] );
        
        	if ( get_query_var( 'paged' ) )
        		$query['paged'] = get_query_var('paged');
        	else if ( get_query_var( 'page' ) )
        		$query['paged'] = get_query_var( 'page' );
        	else
        		$query['paged'] = 1;
        
        	// Allow the query to be manipulated by other plugins
        	$query = apply_filters( 'edd_downloads_query', $query, $atts );
        
        	$downloads = new WP_Query( $query );
        
        	do_action( 'edd_downloads_list_before', $atts );
        
        	ob_start();
        
        	if ( $downloads->have_posts() ) :
        		$i = 1;
        		$columns_class   = array( 'edd_download_columns_' . $atts['columns'] );
        		$custom_classes  = array_filter( explode( ',', $atts['class'] ) );
        		$wrapper_classes = array_unique( array_merge( $columns_class, $custom_classes ) );
        		$wrapper_classes = implode( ' ', $wrapper_classes );
                $animation       = ( isset( $atts['animation'] ) && !empty( $atts['animation'] ) )? $atts['animation'] : '';
                
                $theme_options = get_option( 'flipmart' );
                if( isset( $theme_options['site-version'] ) && $theme_options['site-version'] == 'woomart' ):
                   
                    //Slider Layout.
                    if( $atts['layout'] == 'slider' ):
                        
                        ?>
                        <div class="best-pro slider-items-products" data-animation="<?php echo esc_attr( $animation ); ?>">
                            
                            <?php 
                                //Heading
                                if ( isset( $atts['heading'] ) ) {
                                    echo '<div class="new_title"><h2>'. esc_html( $atts['heading'] ) .'</h2></div>';
                                }
                            ?>
                        
                            <div id="best-seller" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col4 products-grid">
                                    
                                    <?php do_action( 'edd_downloads_list_top', $atts, $downloads ); ?>
        
                        			<?php
                                        $i; 
                                        while ( $downloads->have_posts() ) : $downloads->the_post(); 
                                            global $edd_download_shortcode_item_i;
                                            $schema = edd_add_schema_microdata() ? 'itemscope itemtype="http://schema.org/Product" ' : '';
                                    ?>
                                        <div class="item" id="edd_download_<?php the_ID(); ?>" <?php echo $schema; ?>>
                            				<div class="item-inner">
                                               <?php do_action( 'edd_download_before' ); ?>
                                               <div class="item-img">
                                                  <div class="item-img-info">
                                                     <?php 
                                                        if ( $atts['thumbnails'] ) :
                                            				if ( function_exists( 'has_post_thumbnail' ) && has_post_thumbnail( get_the_ID() ) ) :
                                                                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                                                ?>
                                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="product-image">
                                                                    <img src="<?php echo $featured_img_url; ?>" alt="" class="img-responsive"/>
                                                                </a>
                                                                <?php
                                                            endif;
                                            				do_action( 'edd_download_after_thumbnail' );
                                            			endif;
                                                     ?>
                                                  </div>
                                               </div>
                                               <div class="item-info">
                                                  <div class="info-inner">
                                                     <div class="item-title">
                                                        <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="name"' : ''; ?>
                                                        <a itemprop="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                     </div>
                                                     <div class="item-content">
                                                        <?php
                                                            if ( 'yes' === $atts['excerpt'] && 'yes' !== $atts['full_content'] ) :
                                                				?>
                                                                <?php $excerpt_length = apply_filters( 'excerpt_length', 30 ); ?>
                                                                <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="description"' : ''; ?>
                                                                <?php if ( has_excerpt() ) : ?>
                                                                	<div<?php echo $item_prop; ?> class="edd_download_excerpt">
                                                                		<?php echo apply_filters( 'edd_downloads_excerpt', wp_trim_words( get_post_field( 'post_excerpt', get_the_ID() ), $excerpt_length ) ); ?>
                                                                	</div>
                                                                <?php elseif ( get_the_content() ) : ?>
                                                                	<div<?php echo $item_prop; ?> class="edd_download_excerpt">
                                                                		<?php echo apply_filters( 'edd_downloads_excerpt', wp_trim_words( get_post_field( 'post_content', get_the_ID() ), $excerpt_length ) ); ?>
                                                                	</div>
                                                                <?php endif; ?>
                                                                <?php
                                                				do_action( 'edd_download_after_content' );
                                                			elseif ( 'yes' === $atts['full_content'] ) :
                                                				?>
                                                                <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="description"' : ''; ?>
                                                                <div<?php echo $item_prop; ?> class="edd_download_full_content">
                                                                	<?php echo apply_filters( 'edd_downloads_content', get_post_field( 'post_content', get_the_ID() ) ); ?>
                                                                </div>
                                                                <?php
                                                				do_action( 'edd_download_after_content' );
                                                			endif;
                                                            
                                                            if ( 'yes' === $atts['price'] ) :
                                                				edd_get_template_part( 'shortcode', 'content-price' );
                                                				do_action( 'edd_download_after_price' );
                                                			endif;
                                                            
                                                            if ( 'yes' === $atts['buy_button'] ) :
                                                                ?>
                                                                <div class="edd_download_buy_button">
                                                                	<?php echo edd_get_purchase_link( array( 'download_id' => get_the_ID() ) ); ?>
                                                                </div>
                                                                <?php
                                                            endif;
                                                        ?>
                                                     </div>
                                                  </div>
                                               </div>
                                               <?php do_action( 'edd_download_after' ); ?>
                                            </div>
                                        </div>
                                        
                        			<?php $i++; endwhile; ?>
                        
                        			<?php wp_reset_postdata(); ?>
                        
                        			<?php do_action( 'edd_downloads_list_bottom', $atts ); ?>
                                    
                                </div>
                            </div>
                        </div>
                        <?php
                    
                    elseif( $atts['layout'] == 'grid' ): //Grid Style
                    
                        ?>
                        <div class="category-products" data-animation="<?php echo esc_attr( $animation ); ?>">
                          <div class="products-grid">
                             <div>
                                <?php do_action( 'edd_downloads_list_top', $atts, $downloads ); ?>
            
                    			<?php
                                    $i; $class = array( '1' => 'col-md-12', '2' => 'col-md-6', '3' => 'col-md-4', '4' => 'col-md-3' ); 
                                    while ( $downloads->have_posts() ) : $downloads->the_post(); 
                                        global $edd_download_shortcode_item_i;
                                        $schema  = edd_add_schema_microdata() ? 'itemscope itemtype="http://schema.org/Product" ' : '';
                                ?>
                                    <div class="item col-sm-6 <?php echo esc_attr( $class[$atts['columns']] ); ?>" id="edd_download_<?php the_ID(); ?>" <?php echo $schema; ?>>
                        				<div class="item-inner">
                                           <?php do_action( 'edd_download_before' ); ?>
                                           <div class="item-img">
                                              <div class="item-img-info">
                                                 <?php 
                                                    if ( $atts['thumbnails'] ) :
                                        				if ( function_exists( 'has_post_thumbnail' ) && has_post_thumbnail( get_the_ID() ) ) :
                                                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                                            ?>
                                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="product-image">
                                                                <img src="<?php echo $featured_img_url; ?>" alt="" class="img-responsive"/>
                                                            </a>
                                                            <?php
                                                        endif;
                                        				do_action( 'edd_download_after_thumbnail' );
                                        			endif;
                                                 ?>
                                              </div>
                                           </div>
                                           <div class="item-info">
                                              <div class="info-inner">
                                                 <div class="item-title">
                                                    <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="name"' : ''; ?>
                                                    <a itemprop="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                 </div>
                                                 <div class="item-content">
                                                    <?php
                                                        if ( 'yes' === $atts['excerpt'] && 'yes' !== $atts['full_content'] ) :
                                            				?>
                                                            <?php $excerpt_length = apply_filters( 'excerpt_length', 30 ); ?>
                                                            <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="description"' : ''; ?>
                                                            <?php if ( has_excerpt() ) : ?>
                                                            	<div<?php echo $item_prop; ?> class="edd_download_excerpt">
                                                            		<?php echo apply_filters( 'edd_downloads_excerpt', wp_trim_words( get_post_field( 'post_excerpt', get_the_ID() ), $excerpt_length ) ); ?>
                                                            	</div>
                                                            <?php elseif ( get_the_content() ) : ?>
                                                            	<div<?php echo $item_prop; ?> class="edd_download_excerpt">
                                                            		<?php echo apply_filters( 'edd_downloads_excerpt', wp_trim_words( get_post_field( 'post_content', get_the_ID() ), $excerpt_length ) ); ?>
                                                            	</div>
                                                            <?php endif; ?>
                                                            <?php
                                            				do_action( 'edd_download_after_content' );
                                            			elseif ( 'yes' === $atts['full_content'] ) :
                                            				?>
                                                            <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="description"' : ''; ?>
                                                            <div<?php echo $item_prop; ?> class="edd_download_full_content">
                                                            	<?php echo apply_filters( 'edd_downloads_content', get_post_field( 'post_content', get_the_ID() ) ); ?>
                                                            </div>
                                                            <?php
                                            				do_action( 'edd_download_after_content' );
                                            			endif;
                                                        
                                                        if ( 'yes' === $atts['price'] ) :
                                            				edd_get_template_part( 'shortcode', 'content-price' );
                                            				do_action( 'edd_download_after_price' );
                                            			endif;
                                                        
                                                        if ( 'yes' === $atts['buy_button'] ) :
                                                            ?>
                                                            <div class="edd_download_buy_button">
                                                            	<?php echo edd_get_purchase_link( array( 'download_id' => get_the_ID() ) ); ?>
                                                            </div>
                                                            <?php
                                                        endif;
                                                    ?>
                                                 </div>
                                              </div>
                                           </div>
                                           <?php do_action( 'edd_download_after' ); ?>
                                        </div>
                                    </div>
                                    
                    			<?php $i++; endwhile; ?>
                    
                    			<?php wp_reset_postdata(); ?>
                    
                    			<?php do_action( 'edd_downloads_list_bottom', $atts ); ?>
                             
                             </div>
                          </div>
                        </div>
                        <?php
                        
                    elseif( $atts['layout'] == 'list' ): //List Style
                        
                        ?>
                        <div class="category-products" data-animation="<?php echo esc_attr( $animation ); ?>">
                          <div class="products-list">
                             <div>
                                <?php do_action( 'edd_downloads_list_top', $atts, $downloads ); ?>
            
                    			<?php
                                    $i; 
                                    while ( $downloads->have_posts() ) : $downloads->the_post(); 
                                        global $edd_download_shortcode_item_i;
                                        $schema  = edd_add_schema_microdata() ? 'itemscope itemtype="http://schema.org/Product" ' : '';
                                ?>
                                    <div class="item" id="edd_download_<?php the_ID(); ?>" <?php echo $schema; ?>>
                    				   <?php do_action( 'edd_download_before' ); ?>
                                         <?php 
                                            if ( $atts['thumbnails'] ) :
                                				if ( function_exists( 'has_post_thumbnail' ) && has_post_thumbnail( get_the_ID() ) ) :
                                                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'large');
                                                    ?>
                                                    <div class="product-image flash-tag">
                                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                            <img src="<?php echo $featured_img_url; ?>" alt="" class="img-responsive"/>
                                                        </a>
                                                    </div>
                                                    <?php
                                                endif;
                                				do_action( 'edd_download_after_thumbnail' );
                                			endif;
                                         ?>
                                         <div class="product-shop">
                                            <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="name"' : ''; ?>
                                            <h2 class="product-name"><a itemprop="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <div class="desc std">
                                                <?php 
                                                    if ( 'yes' === $atts['excerpt'] && 'yes' !== $atts['full_content'] ) :
                                        				?>
                                                        <?php $excerpt_length = apply_filters( 'excerpt_length', 30 ); ?>
                                                        <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="description"' : ''; ?>
                                                        <?php if ( has_excerpt() ) : ?>
                                                        	<div<?php echo $item_prop; ?> class="edd_download_excerpt">
                                                        		<?php echo apply_filters( 'edd_downloads_excerpt', wp_trim_words( get_post_field( 'post_excerpt', get_the_ID() ), $excerpt_length ) ); ?>
                                                        	</div>
                                                        <?php elseif ( get_the_content() ) : ?>
                                                        	<div<?php echo $item_prop; ?> class="edd_download_excerpt">
                                                        		<?php echo apply_filters( 'edd_downloads_excerpt', wp_trim_words( get_post_field( 'post_content', get_the_ID() ), $excerpt_length ) ); ?>
                                                        	</div>
                                                        <?php endif; ?>
                                                        <?php
                                        				do_action( 'edd_download_after_content' );
                                        			elseif ( 'yes' === $atts['full_content'] ) :
                                        				?>
                                                        <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="description"' : ''; ?>
                                                        <div<?php echo $item_prop; ?> class="edd_download_full_content">
                                                        	<?php echo apply_filters( 'edd_downloads_content', get_post_field( 'post_content', get_the_ID() ) ); ?>
                                                        </div>
                                                        <?php
                                        				do_action( 'edd_download_after_content' );
                                        			endif;
                                                ?>
                                            </div>
                                            <?php 
                                                if ( 'yes' === $atts['price'] ) :
                                                    echo '<div class="price-box">';
                                    				edd_get_template_part( 'shortcode', 'content-price' );
                                                    echo '</div>';
                                    				do_action( 'edd_download_after_price' );
                                    			endif;
                                                
                                                if ( 'yes' === $atts['buy_button'] ) :
                                                    ?>
                                                    <div class="actions">
                                                        <div class="edd_download_buy_button">
                                                        	<?php echo edd_get_purchase_link( array( 'download_id' => get_the_ID() ) ); ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                endif;
                                            ?>
                                         </div>
                                       <?php do_action( 'edd_download_after' ); ?>
                                    </div>
                                    
                    			<?php $i++; endwhile; ?>
                    
                    			<?php wp_reset_postdata(); ?>
                    
                    			<?php do_action( 'edd_downloads_list_bottom', $atts ); ?>
                             
                             </div>
                          </div>
                        </div>
                        <?php
                        
                    endif;
                    
                    //Pagination
                    if( $atts['pagination'] && function_exists( 'yog_wp_paginate' ) ):
                        yog_wp_paginate( array( 'query' => $downloads, 'before' => '<div class="toolbar"><div class="pager"><div class="pages">', 'after' => '</div></div></div>', 'class' => 'pagination', 'title' => false, 'nextpage' => '<i class="fa fa-angle-right"></i>', 'previouspage' => '<i class="fa fa-angle-left"></i>' ) );
                    endif;
                
                else:
                    
                    //Slider Layout.
                    if( $atts['layout'] == 'slider' ):
                        
                        ?>
                        <div class="section featured-product outer-top-vs" data-animation="<?php echo $animation; ?>">
                            
                            <?php 
                                //Heading
                                if ( isset( $atts['heading'] ) ) {
                                    echo '<h3 class="section-title">'. esc_html( $atts['heading'] ) .'</h3>';
                                }
                            ?>
                        
                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                                    
                                <?php do_action( 'edd_downloads_list_top', $atts, $downloads ); ?>
        
                    			<?php
                                    $i; 
                                    while ( $downloads->have_posts() ) : $downloads->the_post(); 
                                        global $edd_download_shortcode_item_i;
                                        $schema  = edd_add_schema_microdata() ? 'itemscope itemtype="http://schema.org/Product" ' : '';
                                ?>
                                <?php do_action( 'edd_download_before' ); ?>
                                <div class="item item-carousel" id="edd_download_<?php the_ID(); ?>" <?php echo $schema; ?>>
                                    <div class="products">
                                        <div class="product">
                                            <?php 
                                                if ( $atts['thumbnails'] ) :
                                    				if ( function_exists( 'has_post_thumbnail' ) && has_post_thumbnail( get_the_ID() ) ) :
                                                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'large');
                                                        ?>
                                                        <div class="product-image">
                                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                                <img src="<?php echo $featured_img_url; ?>" alt="" class="img-responsive"/>
                                                            </a>
                                                        </div>
                                                        <?php
                                                    endif;
                                    				do_action( 'edd_download_after_thumbnail' );
                                    			endif;
                                            ?>
                                            <div class="product-info text-left">
                                                <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="name"' : ''; ?>
                                                <h3 class="name"><a itemprop="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                <?php 
                                                    if ( 'yes' === $atts['excerpt'] && 'yes' !== $atts['full_content'] ) :
                                        				?>
                                                        <?php $excerpt_length = apply_filters( 'excerpt_length', 30 ); ?>
                                                        <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="description"' : ''; ?>
                                                        <?php if ( has_excerpt() ) : ?>
                                                        	<div<?php echo $item_prop; ?> class="edd_download_excerpt">
                                                        		<?php echo apply_filters( 'edd_downloads_excerpt', wp_trim_words( get_post_field( 'post_excerpt', get_the_ID() ), $excerpt_length ) ); ?>
                                                        	</div>
                                                        <?php elseif ( get_the_content() ) : ?>
                                                        	<div<?php echo $item_prop; ?> class="edd_download_excerpt">
                                                        		<?php echo apply_filters( 'edd_downloads_excerpt', wp_trim_words( get_post_field( 'post_content', get_the_ID() ), $excerpt_length ) ); ?>
                                                        	</div>
                                                        <?php endif; ?>
                                                        <?php
                                        				do_action( 'edd_download_after_content' );
                                        			elseif ( 'yes' === $atts['full_content'] ) :
                                        				?>
                                                        <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="description"' : ''; ?>
                                                        <div<?php echo $item_prop; ?> class="edd_download_full_content">
                                                        	<?php echo apply_filters( 'edd_downloads_content', get_post_field( 'post_content', get_the_ID() ) ); ?>
                                                        </div>
                                                        <?php
                                        				do_action( 'edd_download_after_content' );
                                        			endif;
                                                    
                                                    if ( 'yes' === $atts['price'] ) :
                                                        edd_get_template_part( 'shortcode', 'content-price' );
                                                        do_action( 'edd_download_after_price' );
                                        			endif;
                                                    
                                                    if ( 'yes' === $atts['buy_button'] ) :
                                                        ?>
                                                        <div class="edd_download_buy_button">
                                                        	<?php echo edd_get_purchase_link( array( 'download_id' => get_the_ID() ) ); ?>
                                                        </div>
                                                        <?php
                                                    endif;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php do_action( 'edd_download_after' ); ?>
                                <?php $i++; endwhile; ?>
                
                    			<?php wp_reset_postdata(); ?>
                    
                    			<?php do_action( 'edd_downloads_list_bottom', $atts ); ?>
                                 
                            </div>
                            <?php 
                                //Pagination
                                if( $atts['pagination'] && function_exists( 'yog_wp_paginate' ) ):
                                    yog_wp_paginate( array( 'query' => $downloads, 'before' => '<div class="clearfix filters-container"><div class="text-right"><div class="pagination-container">', 'after' => '</div></div></div>', 'class' => 'list-inline list-unstyled', 'title' => false, 'nextpage' => '<i class="fa fa-angle-right"></i>', 'previouspage' => '<i class="fa fa-angle-left"></i>' ) );
                                endif;
                            ?>
                        </div>
                        <?php
                        
                    elseif( $atts['layout'] == 'grid' ): //Gird Style
                        
                        ?>
                        <div class="search-result-container" data-animation="<?php echo $animation; ?>">
                          <div id="myTabContent" class="tab-content category-list">
                            <div class="tab-pane active " id="grid-container">
                              <div class="category-product">
                                <div class="row">
                                <?php do_action( 'edd_downloads_list_top', $atts, $downloads ); ?>
        
                    			<?php
                                    $i; 
                                    while ( $downloads->have_posts() ) : $downloads->the_post(); 
                                        global $edd_download_shortcode_item_i;
                                        $schema  = edd_add_schema_microdata() ? 'itemscope itemtype="http://schema.org/Product" ' : '';
                                ?>
                                <?php do_action( 'edd_download_before' ); ?>
                                <div class="col-sm-6 <?php echo esc_attr( $class[$atts['columns']] ); ?>" id="edd_download_<?php the_ID(); ?>" <?php echo $schema; ?>>
                                    <div class="products">
                                        <div class="product">
                                            <?php 
                                                if ( $atts['thumbnails'] ) :
                                    				if ( function_exists( 'has_post_thumbnail' ) && has_post_thumbnail( get_the_ID() ) ) :
                                                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'large');
                                                        ?>
                                                        <div class="product-image">
                                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                                <img src="<?php echo $featured_img_url; ?>" alt="" class="img-responsive"/>
                                                            </a>
                                                        </div>
                                                        <?php
                                                    endif;
                                    				do_action( 'edd_download_after_thumbnail' );
                                    			endif;
                                            ?>
                                            <div class="product-info text-left">
                                                <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="name"' : ''; ?>
                                                <h3 class="name"><a itemprop="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                <?php 
                                                    if ( 'yes' === $atts['excerpt'] && 'yes' !== $atts['full_content'] ) :
                                        				?>
                                                        <?php $excerpt_length = apply_filters( 'excerpt_length', 30 ); ?>
                                                        <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="description"' : ''; ?>
                                                        <?php if ( has_excerpt() ) : ?>
                                                        	<div<?php echo $item_prop; ?> class="edd_download_excerpt">
                                                        		<?php echo apply_filters( 'edd_downloads_excerpt', wp_trim_words( get_post_field( 'post_excerpt', get_the_ID() ), $excerpt_length ) ); ?>
                                                        	</div>
                                                        <?php elseif ( get_the_content() ) : ?>
                                                        	<div<?php echo $item_prop; ?> class="edd_download_excerpt">
                                                        		<?php echo apply_filters( 'edd_downloads_excerpt', wp_trim_words( get_post_field( 'post_content', get_the_ID() ), $excerpt_length ) ); ?>
                                                        	</div>
                                                        <?php endif; ?>
                                                        <?php
                                        				do_action( 'edd_download_after_content' );
                                        			elseif ( 'yes' === $atts['full_content'] ) :
                                        				?>
                                                        <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="description"' : ''; ?>
                                                        <div<?php echo $item_prop; ?> class="edd_download_full_content">
                                                        	<?php echo apply_filters( 'edd_downloads_content', get_post_field( 'post_content', get_the_ID() ) ); ?>
                                                        </div>
                                                        <?php
                                        				do_action( 'edd_download_after_content' );
                                        			endif;
                                                    
                                                    if ( 'yes' === $atts['price'] ) :
                                                        edd_get_template_part( 'shortcode', 'content-price' );
                                                        do_action( 'edd_download_after_price' );
                                        			endif;
                                                    
                                                    if ( 'yes' === $atts['buy_button'] ) :
                                                        ?>
                                                        <div class="edd_download_buy_button">
                                                        	<?php echo edd_get_purchase_link( array( 'download_id' => get_the_ID() ) ); ?>
                                                        </div>
                                                        <?php
                                                    endif;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php do_action( 'edd_download_after' ); ?>
                                <?php $i++; endwhile; ?>
                
                    			<?php wp_reset_postdata(); ?>
                    
                    			<?php do_action( 'edd_downloads_list_bottom', $atts ); ?>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                            <?php 
                                //Pagination
                                if( $atts['pagination'] && function_exists( 'yog_wp_paginate' ) ):
                                    yog_wp_paginate( array( 'query' => $downloads, 'before' => '<div class="clearfix"><div class="text-right"><div class="pagination-container">', 'after' => '</div></div></div>', 'class' => 'list-inline list-unstyled', 'title' => false, 'nextpage' => '<i class="fa fa-angle-right"></i>', 'previouspage' => '<i class="fa fa-angle-left"></i>' ) );
                                endif;
                            ?>
                          </div>
                        </div>
                        <?php
                    
                    elseif( $atts['layout'] == 'list' ): //List Style
                        
                        ?>
                        <div class="search-result-container" data-animation="<?php echo $animation; ?>">
                          <div id="myTabContent" class="tab-content category-list">
                            <div class="tab-pane active " id="grid-container">
                              <div class="category-product">
                                <div class="row">
                                <?php do_action( 'edd_downloads_list_top', $atts, $downloads ); ?>
        
                    			<?php
                                    $i; 
                                    while ( $downloads->have_posts() ) : $downloads->the_post(); 
                                        global $edd_download_shortcode_item_i;
                                        $schema  = edd_add_schema_microdata() ? 'itemscope itemtype="http://schema.org/Product" ' : '';
                                ?>
                                <?php do_action( 'edd_download_before' ); ?>
                                <div class="products" id="edd_download_<?php the_ID(); ?>" <?php echo $schema; ?>>
                                    <div class="product-list product">
                                        <div class="row product-list-row">
                                            <div class="col col-sm-4 col-lg-4">
                                                <?php 
                                                    if ( $atts['thumbnails'] ) :
                                        				if ( function_exists( 'has_post_thumbnail' ) && has_post_thumbnail( get_the_ID() ) ) :
                                                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'large');
                                                            ?>
                                                            <div class="product-image">
                                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                                    <img src="<?php echo $featured_img_url; ?>" alt="" class="img-responsive"/>
                                                                </a>
                                                            </div>
                                                            <?php
                                                        endif;
                                        				do_action( 'edd_download_after_thumbnail' );
                                        			endif;
                                                ?>
                                            </div>
                                            <div class="col col-sm-8 col-lg-8">
                                                <div class="product-info">
                                                    <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="name"' : ''; ?>
                                                    <h3 class="name"><a itemprop="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                    <?php 
                                                        if ( 'yes' === $atts['excerpt'] && 'yes' !== $atts['full_content'] ) :
                                            				?>
                                                            <?php $excerpt_length = apply_filters( 'excerpt_length', 30 ); ?>
                                                            <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="description"' : ''; ?>
                                                            <?php if ( has_excerpt() ) : ?>
                                                            	<div<?php echo $item_prop; ?> class="edd_download_excerpt">
                                                            		<?php echo apply_filters( 'edd_downloads_excerpt', wp_trim_words( get_post_field( 'post_excerpt', get_the_ID() ), $excerpt_length ) ); ?>
                                                            	</div>
                                                            <?php elseif ( get_the_content() ) : ?>
                                                            	<div<?php echo $item_prop; ?> class="edd_download_excerpt">
                                                            		<?php echo apply_filters( 'edd_downloads_excerpt', wp_trim_words( get_post_field( 'post_content', get_the_ID() ), $excerpt_length ) ); ?>
                                                            	</div>
                                                            <?php endif; ?>
                                                            <?php
                                            				do_action( 'edd_download_after_content' );
                                            			elseif ( 'yes' === $atts['full_content'] ) :
                                            				?>
                                                            <?php $item_prop = edd_add_schema_microdata() ? ' itemprop="description"' : ''; ?>
                                                            <div<?php echo $item_prop; ?> class="edd_download_full_content">
                                                            	<?php echo apply_filters( 'edd_downloads_content', get_post_field( 'post_content', get_the_ID() ) ); ?>
                                                            </div>
                                                            <?php
                                            				do_action( 'edd_download_after_content' );
                                            			endif;
                                                        
                                                        if ( 'yes' === $atts['price'] ) :
                                                            edd_get_template_part( 'shortcode', 'content-price' );
                                                            do_action( 'edd_download_after_price' );
                                            			endif;
                                                        
                                                        if ( 'yes' === $atts['buy_button'] ) :
                                                            ?>
                                                            <div class="edd_download_buy_button">
                                                            	<?php echo edd_get_purchase_link( array( 'download_id' => get_the_ID() ) ); ?>
                                                            </div>
                                                            <?php
                                                        endif;
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php do_action( 'edd_download_after' ); ?>
                                <?php $i++; endwhile; ?>
                
                    			<?php wp_reset_postdata(); ?>
                    
                    			<?php do_action( 'edd_downloads_list_bottom', $atts ); ?>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                            <?php 
                                //Pagination
                                if( $atts['pagination'] && function_exists( 'yog_wp_paginate' ) ):
                                    yog_wp_paginate( array( 'query' => $downloads, 'before' => '<div class="clearfix"><div class="text-right"><div class="pagination-container">', 'after' => '</div></div></div>', 'class' => 'list-inline list-unstyled', 'title' => false, 'nextpage' => '<i class="fa fa-angle-right"></i>', 'previouspage' => '<i class="fa fa-angle-left"></i>' ) );
                                endif;
                            ?>
                          </div>
                        </div>
                        <?php
                    endif;
                    
                endif;
                
        	else:
        		printf( _x( 'No %s found', 'download post type name', 'easy-digital-downloads' ), edd_get_label_plural() );
        	endif;
        
        	do_action( 'edd_downloads_list_after', $atts, $downloads, $query );
        
        	$display = ob_get_clean();
        
        	return apply_filters( 'downloads_shortcode', $display, $atts, $atts['buy_button'], $atts['columns'], '', $downloads, $atts['excerpt'], $atts['full_content'], $atts['price'], $atts['thumbnails'], $query );
        }
        add_shortcode( 'flipmart_downloads', 'flipmart_downloads_query' );

    }

    /**
     * This is a shortcode parameter defining if the user should be redirected after login.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function redirectParam() {
        return array(
            'param_name' => 'redirect',
            'heading' => __( 'Redirect', self::TEXT_DOMAIN ),
            'description' => __( 'Redirect user after successful login.', self::TEXT_DOMAIN ),
            'type' => 'textfield',
            'admin_label' => true,
            'group' => 'Function',
        );
    }
    
    /**
     * This is a shortcode parameter insert heading.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function headingParam() {
        return array(
            'heading'     => esc_html__( 'Heading',self::TEXT_DOMAIN),
            'type'        => 'textfield',
            'admin_label' => true,
            'value'       => '',
            'param_name'  => 'heading',
            'dependency'  => array(
				'element' => 'layout',
                'value'   => array( 'slider' )
		    ),
            'group' => 'Layout',
        );
    }
    
    /**
     * This is a shortcode parameter allowing to choose style.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function layoutsParam() {
        return array(
            'param_name'  => 'layout',
            'heading'     => __( 'Layout', self::TEXT_DOMAIN ),
            'description' => __('Display downloads in different layouts.', self::TEXT_DOMAIN ),
            'type'        => 'dropdown',
            'value'       => array( 
                __( 'Gird', self::TEXT_DOMAIN ) => 'grid', 
                __( 'List', self::TEXT_DOMAIN ) => 'list',
                 __('Slider', self::TEXT_DOMAIN ) => 'slider' 
            ),
            'type'        => 'dropdown',
            'admin_label' => true,
            'group'       => 'Data',
        );
    }

    /**
     * This is a shortcode parameter allowing to choose multiple download categories.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function categoryParam() {
        return array(
            'param_name' => 'category',
            'heading' => __( 'Categories', self::TEXT_DOMAIN ),
            'description' => __('Show downloads of particular download categories.', self::TEXT_DOMAIN ),
            'type' => 'autocomplete',
            'settings' => array(
                'multiple' => 'true',
                'sortable' => true,
                'min_length' => 1,
                'no_hide' => true,
                'unique_values' => true,
                'display_inline' => true,
                'values' => self::downloadCategoryNames(),
            ),
            'admin_label' => true,
            'group' => 'Data',
        );
    }

    /**
     * This is a shortcode parameter allowing to choose multiple download tags.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function tagParam() {
        return array(
            'param_name' => 'tag',
            'heading' => __( 'Tags', self::TEXT_DOMAIN ),
            'description' => __( 'Show downloads of particular download tags.', self::TEXT_DOMAIN ),
            'type' => 'autocomplete',
            'settings' => array(
                'multiple' => 'true',
                'sortable' => true,
                'min_length' => 1,
                'no_hide' => true,
                'unique_values' => true,
                'display_inline' => true,
                'values' => self::downloadTagNames(),
            ),
            'admin_label' => true,
            'group' => 'Data',
        );
    }

    /**
     * This is a shortcode parameter allowing to exclude multiple download categories.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function excludeCategoryParam() {
        // simply modify the categoryParam
        $param = self::categoryParam();
        $param['param_name'] = 'exclude_category';
        $param['heading'] = __( 'Exclude Categories', self::TEXT_DOMAIN );
        $param['description'] = __( 'Exclude downloads of particular download categories.', self::TEXT_DOMAIN );

        return $param;
    }

    /**
     * This is a shortcode parameter allowing to exclude multiple download tags.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function excludeTagParam() {
        // simply modify the tagParam
        $param = self::tagParam();
        $param['param_name'] = 'exclude_tag';
        $param['heading'] = __( 'Exclude Tags', self::TEXT_DOMAIN );
        $param['description'] = __( 'Exclude downloads of particular download tags.', self::TEXT_DOMAIN );

        return $param;
    }

    /**
     * This is a shortcode parameter allowing to define the relation between the category and tag selections.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function relationParam() {
        return array(
            'param_name' => 'relation',
            'heading' => __( 'Category and Tag relation', self::TEXT_DOMAIN ),
            'description' => __( 'Specify whether the downloads displayed have to be in ALL the categories/tags provided ("AND"), or just in at least one ("OR").', self::TEXT_DOMAIN ),
            'value' => array( __('OR', self::TEXT_DOMAIN ) => 'OR', __( 'AND', self::TEXT_DOMAIN ) => 'AND',),
            'type' => 'dropdown',
            'admin_label' => true,
            'group' => 'Data',
        );
    }

    /**
     * This is a shortcode parameter to specify the number of downloads to display.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function numberParam() {
        return array(
            'param_name' => 'number',
            'heading' => __( 'Number of downloads', self::TEXT_DOMAIN ),
            'description' => __( 'Specify the maximum number of downloads you want to output.', self::TEXT_DOMAIN ),
            'type' => 'textfield',
            'admin_label' => true,
            'group' => 'Layout',
        );
    }

    /**
     * This is a shortcode parameter selecting if the price should be displayed.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function priceParam() {
        return array(
            'param_name' => 'price',
            'heading' => __( 'Show price', self::TEXT_DOMAIN ),
            'description' => __( 'Display the price of the downloads.', self::TEXT_DOMAIN ),
            'type' => 'checkbox',
            'value' => array( __( 'Yes', self::TEXT_DOMAIN ) => 'yes' ),
            'save_always' => true,
            'admin_label' => true,
            'group' => 'Layout',
        );
    }
    
    /**
     * This is a shortcode parameter selecting if the pagination should be displayed.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function paginationParam() {
        return array(
            'param_name' => 'pagination',
            'heading' => __( 'Show pagination', self::TEXT_DOMAIN ),
            'description' => __( 'Display the pagination of the downloads.', self::TEXT_DOMAIN ),
            'type' => 'checkbox',
            'value' => array( __( 'Yes', self::TEXT_DOMAIN ) => 'yes' ),
            'save_always' => true,
            'admin_label' => true,
            'group' => 'Layout',
        );
    }

    /**
     * This is a shortcode parameter allowing to select showing the full download post content instead of just the excerpt.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function fullContentParam() {
        return array(
            'param_name' => 'full_content',
            'heading' => __( 'Full content', self::TEXT_DOMAIN ),
            'description' => __( 'Display the full content of the download or just the excerpt.', self::TEXT_DOMAIN ),
            'type' => 'checkbox',
            'value' => array( __( 'Yes', self::TEXT_DOMAIN ) => 'yes' ),
            'save_always' => true,
            'admin_label' => true,
            'group' => 'Layout',
        );
    }

    /**
     * This is a shortcode parameter allowing to select showing the excerpt of a download post instead of the full content.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function excerptParam() {
        return array(
            'param_name' => 'excerpt',
            'heading' => __( 'Excerpt', self::TEXT_DOMAIN ),
            'description' => __( 'Display just the excerpt.', self::TEXT_DOMAIN ),
            'type' => 'checkbox',
            'value' => array( __( 'Yes', self::TEXT_DOMAIN ) => 'yes' ),
            'save_always' => true,
            'admin_label' => true,
            'group' => 'Layout',
        );
    }

    /**
     * This is a shortcode parameter allowing to display/hdie the buy button with the download.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function buyButtonParam() {
        return array(
            'param_name' => 'buy_button',
            'heading' => __( 'Buy button', self::TEXT_DOMAIN ),
            'description' => __( 'Display the buy button for each download.', self::TEXT_DOMAIN ),
            'value' => array( __( 'Yes', self::TEXT_DOMAIN ) => 'yes', __( 'No', self::TEXT_DOMAIN ) => 'no' ),
            'save_always' => true,
            'type' => 'dropdown',
            'admin_label' => true,
            'group' => 'Layout',
        );
    }

    /**
     * This is a shortcode parameter to select the number of columns in which download previews are displayed.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */    
    protected static function columnsParam() {
        return array(
            'param_name' => 'columns',
            'heading' => __( 'Columns', self::TEXT_DOMAIN ),
            'description' => __( 'Display the downloads in that many columns.', self::TEXT_DOMAIN ),
            'value' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4'),
            'type' => 'dropdown',
            'admin_label' => true,
            'dependency'  => array(
				'element' => 'layout',
                'value'   => array( 'grid' )
		    ),
            'group' => 'Layout',
        );
    }

    /**
     * This is a shortcode parameter to enable the display of download thumbnails.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function thumbnailsParam() {
        return array(
            'param_name' => 'thumbnails',
            'heading' => __( 'Show Thumbnails', self::TEXT_DOMAIN ),
            'description' => __( 'Display thumbnails of the downloads.', self::TEXT_DOMAIN ),
            'type' => 'checkbox',
            'value' => array( __( 'Yes', self::TEXT_DOMAIN ) => 'true' ),
            'save_always' => true,
            'admin_label' => true,
            'group' => 'Layout',
        );
    }

    /**
     * This is a shortcode parameter to select the download attribute to order by.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function orderbyParam() {
        return array(
            'param_name' => 'orderby',
            'heading' => __( 'Order by download attribute', self::TEXT_DOMAIN ),
            'description' => __( 'Order the downloads by the selected attribute.', self::TEXT_DOMAIN ),
            'value' => array( 'id', 'price', 'post_date', 'random', 'title'),
            'type' => 'dropdown',
            'admin_label' => true,
            'group' => 'Layout',
        );
    }

    /**
     * This is a shortcode parameter to define the direction of the orderby param.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function orderParam() {
        return array(
            'param_name' => 'order',
            'heading' => __( 'Order direction', self::TEXT_DOMAIN ),
            'description' => __( 'Order the downloads by the selected attribute in that direction.', self::TEXT_DOMAIN ),
            'value' => array( __( 'ascending', self::TEXT_DOMAIN ) => 'ASC', __( 'descending', self::TEXT_DOMAIN ) => 'DESC'),
            'type' => 'dropdown',
            'admin_label' => true,
            'group' => 'Layout',
        );
    }

    /**
     * This is a shortcode parameter to define a list of downloads by their ids.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function idsParam() {
        return array(
            'param_name' => 'ids',
            'heading' => __( 'Specific Downloads', self::TEXT_DOMAIN ),
            'description' => __( 'You can specify multiple downloads.', self::TEXT_DOMAIN ),
            'type' => 'autocomplete',
            'settings' => array(
                'multiple' => true,
                'sortable' => true,
                'min_length' => 1,
                'no_hide' => true,
                'unique_values' => true,
                'display_inline' => true,
                'values' => self::downloads(),
            ),
            'admin_label' => true,
            'group' => 'Data',
        );
    }

    /*
     * params related to the purchase_link shortcode
     */

    /**
     * This is a shortcode parameter to select a download by its id.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function idParam() {
        return array(
            'param_name' => 'id',
            'heading' => __( 'Download', self::TEXT_DOMAIN ),
            'description' => __( 'Select a download.', self::TEXT_DOMAIN ),
            'type' => 'autocomplete',
            'settings' => array(
                'sortable' => true,
                'min_length' => 1,
                'display_inline' => true,
                'values' => self::downloads(),
            ),
            'admin_label' => true,
            'group' => 'Data',
        );
    }

    /**
     * This is a shortcode parameter to select a download by its sku.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function skuParam() {
        return array(
            'param_name' => 'sku',
            'heading' => __( 'Download by SKU', self::TEXT_DOMAIN ),
            'description' => __( 'SKU of the download - use this instead of selecting a download.', self::TEXT_DOMAIN ),
            'type' => 'textfield',
            'admin_label' => true,
            'group' => 'Data',
        );
    }

    /**
     * This is a shortcode parameter to define the text for a purchase link.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function textParam() {
        return array(
            'param_name' => 'text',
            'heading' => __( 'Text on Button', self::TEXT_DOMAIN ),
            'description' => __( 'Specify the text that is diplayed on the button.', self::TEXT_DOMAIN ),
            'type' => 'textfield',
            'admin_label' => true,
            'group' => 'Layout',
        );
    }

     /**
     * This is a shortcode parameter to define the style for a purchase link (text or button).
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function styleParam() {
        return array(
            'param_name' => 'style',
            'heading' => __( 'Style', self::TEXT_DOMAIN ),
            'description' => __( 'Select the style of the purchase link.', self::TEXT_DOMAIN ),
            'type' => 'dropdown',
            'value' => array( 'Default' => edd_get_option( 'button_style', 'button' ), 'Button' => 'button', 'Text' => 'text',),
            'admin_label' => true,
            'group' => 'Layout',
        );
    }

    /**
     * This is a shortcode parameter to define the color for a purchase button.
     * http://docs.easydigitaldownloads.com/article/867-style-settings
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function colorParam() {
        return array(
            'param_name' => 'color',
            'heading' => __( 'Color', self::TEXT_DOMAIN ),
            'description' => __( 'Select the color of the button.', self::TEXT_DOMAIN ),
            'type' => 'dropdown',
            'value' => array(
                'default' => edd_get_option( 'checkout_color', 'blue' ),
                __( 'Inherit', self::TEXT_DOMAIN ) => 'inherit',
                __( 'Gray', self::TEXT_DOMAIN ) => 'gray',
                __( 'Blue', self::TEXT_DOMAIN ) => 'blue',
                __( 'Green', self::TEXT_DOMAIN ) => 'green',
                __( 'Dark gray', self::TEXT_DOMAIN ) => 'dark gray',
                __( 'Yellow', self::TEXT_DOMAIN ) => 'yellow',
            ),
            'dependency' => array(
                'element' => 'style',
                'value' => 'button',
            ),
            'admin_label' => true,
            'group' => 'Layout',
        );
    }

    /**
     * This is a shortcode parameter to define additional classes for a purchase link.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function classParam() {
        return array(
            'param_name' => 'class',
            'heading' => __( 'Class', self::TEXT_DOMAIN ),
            'description' => __( 'Add an html classes to the link.', self::TEXT_DOMAIN ),
            'type' => 'textfield',
            'admin_label' => true,
            'group' => 'Layout',
        );
    }

    /**
     * This is a shortcode parameter to define the variable price id for a purchase link.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function priceIdParam() {
        return array(
            'param_name' => 'price_id',
            'heading' => __( 'Variable Price Id', self::TEXT_DOMAIN ),
            'description' => __( 'The variable price id to use - first one is default.', self::TEXT_DOMAIN ),
            'type' => 'textfield',
            'admin_label' => true,
            'group' => 'Data',
        );
    }

    /**
     * This is a shortcode parameter to define if the purchse links should lead to the checkout.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function directParam() {
        return array(
            'param_name' => 'direct',
            'heading' => __( 'Direct checkout', self::TEXT_DOMAIN ),
            'description' => __( 'Send the user directly to the checkout.', self::TEXT_DOMAIN ),
            'type' => 'checkbox',
            'value' => array( __( 'Yes', self::TEXT_DOMAIN ) => 'yes' ),
            'save_always' => true,
            'admin_label' => true,
            'group' => 'Function',
        );
    }
    
    /**
     * This is a shortcode parameter to choose animation.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected static function animationParam() {
        return array(
            'heading'     => esc_html__('Animation', self::TEXT_DOMAIN),
			'type'        => 'dropdown',
			'param_name'  => 'animation',
			'value'       => self::get_animations(),
			'description' => esc_html__('Choose Animation from the drop down list.', self::TEXT_DOMAIN),
            'group'       => 'Layout',
        );
    }
    
    /**
     * Create animation icons.
     *
     * @access       protected
     * @since        1.0.0
     * @return       array describing a shortcode parameter
     */
    protected function get_animations() {
        return array( 
    		esc_html__('No Animation',self::TEXT_DOMAIN) => '',
            esc_html__('Bounce',self::TEXT_DOMAIN) => 'bounce',
            esc_html__('Bounce In',self::TEXT_DOMAIN) => 'bounceIn',
            esc_html__('Bounce In Up',self::TEXT_DOMAIN) => 'bounceInUp',
            esc_html__('Bounce In Down',self::TEXT_DOMAIN) => 'bounceInDown',
            esc_html__('Bounce In Left',self::TEXT_DOMAIN) => 'bounceInLeft',
            esc_html__('Bounce In Right',self::TEXT_DOMAIN) => 'bounceInRight',
            esc_html__('Fade In',self::TEXT_DOMAIN) => 'fadeIn',
            esc_html__('Fade In Up',self::TEXT_DOMAIN) => 'fadeInUp',
            esc_html__('Fade In Down',self::TEXT_DOMAIN) => 'fadeInDown',
            esc_html__('Fade In Left',self::TEXT_DOMAIN) => 'fadeInLeft',
            esc_html__('Fade In Right',self::TEXT_DOMAIN) => 'fadeInRight',
            esc_html__('Fade In Up Big',self::TEXT_DOMAIN) => 'fadeInUpBig',
            esc_html__('Fade In Down Big',self::TEXT_DOMAIN) => 'fadeInDownBig',
            esc_html__('Fade In Left Big',self::TEXT_DOMAIN) => 'fadeInLeftBig',
            esc_html__('Fade In Right Big',self::TEXT_DOMAIN) => 'fadeInRightBig',
    		esc_html__('Flash',self::TEXT_DOMAIN) => 'flash',
            esc_html__('Flip In X',self::TEXT_DOMAIN) => 'flipInX',
            esc_html__('Flip In Y',self::TEXT_DOMAIN) => 'flipInY',
            esc_html__('Jello',self::TEXT_DOMAIN) => 'jello',
            esc_html__('Pulse',self::TEXT_DOMAIN) => 'pulse',
    		esc_html__('Shake',self::TEXT_DOMAIN) => 'shake',
    		esc_html__('Swing',self::TEXT_DOMAIN) => 'swing',
    		esc_html__('Tada',self::TEXT_DOMAIN) => 'tada',
    		esc_html__('Rotate In',self::TEXT_DOMAIN) => 'rotateIn',
            esc_html__('Rotate In Up Left',self::TEXT_DOMAIN) => 'rotateInUpLeft',
            esc_html__('Rotate In Down Left',self::TEXT_DOMAIN) => 'rotateInDownLeft',
            esc_html__('Rotate In Up Right',self::TEXT_DOMAIN) => 'rotateInUpRight',
            esc_html__('Rotate In Down Right',self::TEXT_DOMAIN) => 'rotateInDownRight',
            esc_html__('Rubber Band',self::TEXT_DOMAIN) => 'rubberBand',
    		esc_html__('Wobble',self::TEXT_DOMAIN) => 'wobble',
    		esc_html__('Wiggle',self::TEXT_DOMAIN) => 'wiggle',
            esc_html__('Zoom In',self::TEXT_DOMAIN) => 'zoomIn',
            esc_html__('Zoom In Up',self::TEXT_DOMAIN) => 'zoomInUp',
            esc_html__('Zoom In Down',self::TEXT_DOMAIN) => 'zoomInDown',
            esc_html__('Zoom In Left',self::TEXT_DOMAIN) => 'zoomInLeft',
            esc_html__('Zoom In Right',self::TEXT_DOMAIN) => 'zoomInRight',
            esc_html__('Zoom Out',self::TEXT_DOMAIN) => 'zoomOut',
            esc_html__('Zoom Out Up',self::TEXT_DOMAIN) => 'zoomOutUp',
            esc_html__('Zoom Out Down',self::TEXT_DOMAIN) => 'zoomOutDown',
            esc_html__('Zoom Out Left',self::TEXT_DOMAIN) => 'zoomOutLeft',
            esc_html__('Zoom Out Right',self::TEXT_DOMAIN) => 'zoomOutRight',
        );
    }

    /*
     * other helper functions
     */

    /**
     * This collects all download_category names.
     * Helper for the categoryParam().
     *
     * @access       protected
     * @since        1.0.0
     * @return       string[] names of all download_category terms
     */
    protected static function downloadCategoryNames() {
        $term_names = get_terms( array(
            'taxonomy' => 'download_category',
            'fields' => 'names',
        ));

        $values = array();
        foreach( $term_names as $term) {
            $values[] = array( 'label' => $term, 'value' => $term);
        }

        return $values;
    }

    /**
     * This collects all download_tag names.
     * Helper for the tagParam().
     *
     * @access       protected
     * @since        1.0.0
     * @return       string[] names of all download_tag terms
     */
    protected static function downloadTagNames() {
        $term_names = get_terms( array(
            'taxonomy' => 'download_tag',
            'fields' => 'names',
        ));

        $values = array();
        foreach( $term_names as $term) {
            $values[] = array( 'label' => $term, 'value' => $term);
        }

        return $values;
    }

    protected static function downloads() {
        $posts_array = get_posts(array(
            'post_type' => 'download',
            'numberposts' => -1,
            'orderby' => 'post_title',
            'order' => 'ASC',
            'fields' => array('ID','post_title')
        ));

        $downloads = array();
        foreach($posts_array as $post) {
            $downloads[] = array( 'label' => $post->post_title, 'value' => $post->ID);            
        }

        return $downloads;
    }

}

} // End if class_exists check

/**
 * The main function responsible for returning the one true FLIPMART_VC_Integration
 * instance to functions everywhere
 *
 * @since       1.0.0
 * @return      \FLIPMART_VC_Integration The one true FLIPMART_VC_Integration
 */
function flipmart_vc_integration_load() {
    if( ! class_exists( 'Easy_Digital_Downloads' ) ) {
        if( ! class_exists( 'FLIPMART_Extension_Activation' ) ) {
            require_once 'includes/class.extension-activation.php';
        }
        $activation = new FLIPMART_Extension_Activation( plugin_dir_path( __FILE__ ), basename( __FILE__ ) );
        $activation = $activation->run();
    } else {
        return FLIPMART_VC_Integration::instance();
    }
}
add_action( 'plugins_loaded', 'flipmart_vc_integration_load' );

/**
 * The activation hook is called outside of the singleton because WordPress doesn't
 * register the call from within the class, since we are preferring the plugins_loaded
 * hook for compatibility, we also can't reference a function inside the plugin class
 * for the activation function. If you need an activation function, put it here.
 *
 * @since       1.0.0
 * @return      void
 */
function flipmart_vc_integration_activation() {
    /* Activation functions here */
}
register_activation_hook( __FILE__, 'flipmart_vc_integration_activation' );

/**
 * A nice function name to retrieve the instance that's created on plugins loaded
 *
 * @since 1.0.0
 * @return \FLIPMART_VC_Integration
 */
function flipmart_vc_integration() {
    return flipmart_vc_integration_load();
}

remove_action( 'edd_downloads_list_after', 'edd_downloads_pagination', 10, 3 );