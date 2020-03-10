<?php
/**
 * Theme Framework
 */

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * [yog_custom_sidebars description]
 * @method yog_custom_sidebars
 * @return [type]                [description]
 */
add_action( 'widgets_init', 'yog_custom_sidebars' );
function yog_custom_sidebars() {

	//adding custom sidebars defined in theme options
	$custom_sidebars = yog_helper()->get_theme_option( 'custom-sidebars' );
	$custom_sidebars = array_filter( (array)$custom_sidebars );

	if ( !empty( $custom_sidebars ) ) {
        
		foreach ( $custom_sidebars as $sidebar ) {
            
            
            if( 'woomart' == yog_helper()->yog_get_layout( 'version' ) ){
                register_sidebar ( array (
    				'name'          => $sidebar,
    				'id'            => sanitize_title( $sidebar ),
    				'before_widget' => '<div id="%1$s" class="sidebar-widget outer-bottom-small clearfix %2$s">',
            		'after_widget'  => '</div></div>',
            		'before_title'  => '<h2 class="widget-title">',
            		'after_title'   => '</h2><div class="content">',
    			) );
            }else{
                register_sidebar ( array (
    				'name'          => $sidebar,
    				'id'            => sanitize_title( $sidebar ),
    				'before_widget' => '<div id="%1$s" class="clearfix sidebar-widget outer-bottom-small %2$s">',
    				'after_widget'  => '</div><div class="clearfix"></div>',
    				'before_title'  => '<h3 class="section-title">',
    				'after_title'   => '</h3>',
    			) );
            }
		}
	}
}

/**
 * Remove ver variable from enqueued scripts and css files
 * E.g. http://yourdomain/style.css?ver=1.3
 *
 * @method yog_clear_files_query_string
 * @param  [type]                         $src [description]
 * @return [type]                              [description]
 */

add_action( 'init', function(){
	if ( yog_helper()->get_theme_option( 'clear-static-files' ) ) {
		add_filter( 'script_loader_src', 'yog_clear_files_query_string', 9999 );
		add_filter( 'style_loader_src', 'yog_clear_files_query_string', 9999 );
	}
});
function yog_clear_files_query_string( $src ) {

	$src = remove_query_arg( 'ver', $src );

	return $src;
}

/**
 * Remove type and id attribute from stylesheet
 * @method yog_html5_stylesheet
 * @param  [type]                 $html   [description]
 * @param  [type]                 $handle [description]
 * @return [type]                         [description]
 */

if( current_theme_supports( 'html5', 'yog-assets' ) ) {
	add_filter( 'style_loader_tag', 'yog_html5_stylesheet', 10, 2 );
	add_filter( 'script_loader_tag', 'yog_html5_stylesheet', 10, 2 );
}
function yog_html5_stylesheet( $html, $handle ) {

	$html = str_replace(" type='text/css'", '', $html );
	$html = str_replace(" type='text/javascript'", '', $html );
    return str_replace( " id='$handle-css' ", '', $html );
}

/**
 * Remove Defualt Excerpt filters 
 */
remove_all_filters( 'get_the_excerpt' );
remove_all_filters( 'the_excerpt' );

/**
 * New Contact Methods in User profile
 */
function yog_contactmethods( $contactmethods ) {

    // this will remove existing contact fields
    unset( $contactmethods['aim'] );
    unset( $contactmethods['yim'] );
    unset( $contactmethods['jabber'] );

    $contactmethods['twitter']  = esc_html__( 'Twitter', 'flipmart' );
    $contactmethods['facebook'] = esc_html__( 'Facebook', 'flipmart' );
    $contactmethods['linkedin'] = esc_html__( 'LinkedIn', 'flipmart' );

    return $contactmethods;
}
add_filter( 'user_contactmethods', 'yog_contactmethods', 10, 1 );

/**
 * Add Site Layout Class in Body
 */
add_filter('body_class', 'multisite_body_classes');
function multisite_body_classes($classes) {
        
        //Demo Version Class
        if( 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
            $classes[] = yog_helper()->yog_get_layout( 'modify' ) ;
        endif;
        
        //Layout Class
        $classes[] = yog_helper()->get_option( 'site-layout', 'raw', 'wide' );
        
        return $classes;
}

/**
 * Disable compare icon 
 */
function yog_wcwl_positions() {
    return 0;
}
add_filter( 'yith_wcwl_positions','yog_wcwl_positions');

/**
 * Add compare icon 
 */
function yog_translate_single_string( $button_text, $var ){
    
    if( $var == 'Plugins' ){
        return '<i class="fa fa-signal" aria-hidden="true"></i>';    
    }else{
        return $button_text;
    }
    
}
add_filter( 'wpml_translate_single_string','yog_translate_single_string', 10, 2 );

/**
 * Cart Update Filter 
 */
function yog_cart_update(){
   
   if( class_exists('Woocommerce') ){
   
       global $product;
       
       ob_start(); 
       
       ?> 
       <span class="cart-msg" style="display: none;"><?php echo esc_html__( 'Cart Updated', 'flipmart' ); ?></span> 
       <div class="dropdown dropdown-cart cart-contents"> 
            <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                <div class="items-cart-inner">
                  <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                  <div class="basket-item-count"><span class="count"><?php echo WC()->cart->get_cart_contents_count(); ?></span></div>
                  <div class="total-price-basket"><?php echo sprintf ( '<span class="total-price"><span class="value">%s</span> </span>',WC()->cart->get_cart_total() ); ?></div>
                </div>
            </a>
            <div class="dropdown-menu">
                <ul>
                    <?php if ( ! WC()->cart->is_empty() ) : ?>
        
            		<?php do_action( 'woocommerce_before_mini_cart_contents' ); ?>
            
            		<?php
            			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            				$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
            				$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
            
            				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
            					$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
            					$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
            					$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
            					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
            					?>
            					<li class="<?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">
            						<div class="cart-item product-summary">
                                      <div class="row">
                                        <div class="col-xs-4">
                                          <div class="image">  
                                             <?php if ( ! $_product->is_visible() ) : ?>
                    							<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ); ?>
                    						<?php else : ?>
                    							<a href="<?php echo esc_url( $product_permalink ); ?>">
                    								<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ); ?>
                    							</a>
                    						<?php endif; ?>
                                          </div>
                                        </div>
                                        <div class="col-xs-7">
                                          <h3 class="name"><a href="<?php echo esc_url( $product_permalink ); ?>"><?php echo esc_html( $product_name ); ?></a></h3>
                                          <div class="price"><?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?></div>
                                        </div>
                                        <div class="col-xs-1 action"> 
                                            <?php
                    						echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
                    							'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fa fa-trash"></i></a>',
                    							esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
                    							__( 'Remove this item', 'flipmart' ),
                    							esc_attr( $product_id ),
                    							esc_attr( $_product->get_sku() )
                    						), $cart_item_key );
                    						?>
                                         </div>
                                      </div>
                                    </div>
                                    <div class="clearfix"></div><hr />
            					</li>
            					<?php
            				}
            			}
            		?>
            
            		<?php do_action( 'woocommerce_mini_cart_contents' ); ?>
            
            	<?php else : ?>
            
            		<li class="empty"><?php _e( 'No products in the cart.', 'flipmart' ); ?></li>
            
            	<?php endif; ?>
            </ul> 
                
            <?php if ( ! WC()->cart->is_empty() ) : ?>
                <div class="clearfix cart-total">
                
                    <div class="pull-right"> <span class="text"><?php _e( 'Subtotal', 'flipmart' ); ?> :</span><span class='price'><?php echo WC()->cart->get_cart_subtotal(); ?></span> </div>
                    <div class="clearfix"></div>
            	    <?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>
                    <a href="<?php echo esc_url( wc_get_cart_url() );?>" class="btn btn-upper btn-primary btn-block m-t-20"><?php echo esc_html__( 'Cart', 'flipmart' ); ?></a> 
                    <a href="<?php echo esc_url( wc_get_checkout_url() );?>" class="btn btn-upper btn-primary btn-block m-t-20"><?php echo esc_html__( 'Checkout', 'flipmart' ); ?></a> 
                
                </div>
            <?php endif; ?>
            </div>
        </div>
        <?php
    }
    
    $fragments['div.cart-contents'] = ob_get_clean();

    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'yog_cart_update' );

/**
 * Search Result Product Limit 
 */
function yog_wp_search_size($queryVars) {
	if ( isset($_REQUEST['s']) ) // Make sure it is a search page
	$queryVars['posts_per_page'] = yog_helper()->get_option( 'search-result-limit', 'raw', 12 ); // Change 10 to the number of posts you would like to show
	return $queryVars; // Return our modified query variables
}
add_filter('request', 'yog_wp_search_size'); // Hook our custom function onto the


/**
 * Add new First Name & Last Name Field
 * in WooCommerce Forms 
 */
add_action( 'woocommerce_register_form_start', 'yog_add_name_woo_account_registration' );
function yog_add_name_woo_account_registration() {
    ?>
    <div class="row">
        <div class="form-row form-row-first form-group col-md-6">
            <label for="reg_billing_first_name"><?php _e( 'First name', 'flipmart' ); ?> <span class="required">*</span></label>
            <input type="text" class="input-text input-text form-control unicase-form-control" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) echo esc_attr( $_POST['billing_first_name'] ); ?>" />
        </div>
     
        <div class="form-row form-row-last form-group col-md-6">
            <label for="reg_billing_last_name"><?php _e( 'Last name', 'flipmart' ); ?> <span class="required">*</span></label>
            <input type="text" class="input-text input-text form-control unicase-form-control" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) echo esc_attr( $_POST['billing_last_name'] ); ?>" />
        </div>
    </div>
    <div class="clearfix"></div>
 
    <?php
}
 
/**
 * VALIDATE FIELDS
 */
add_filter( 'woocommerce_registration_errors', 'yog_validate_name_fields', 10, 3 );
 
function yog_validate_name_fields( $errors, $username, $email ) {
    if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
        $errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'flipmart' ) );
    }
    if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {
        $errors->add( 'billing_last_name_error', __( '<strong>Error</strong>: Last name is required!.', 'flipmart' ) );
    }
    return $errors;
}

/**
 * SAVE FIELDS
 */
add_action( 'woocommerce_created_customer', 'yog_save_name_fields' );
 
function yog_save_name_fields( $customer_id ) {
    if ( isset( $_POST['billing_first_name'] ) ) {
        update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
        update_user_meta( $customer_id, 'first_name', sanitize_text_field($_POST['billing_first_name']) );
    }
    if ( isset( $_POST['billing_last_name'] ) ) {
        update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
        update_user_meta( $customer_id, 'last_name', sanitize_text_field($_POST['billing_last_name']) );
    }
 
}

/**
 * Advanced Category Search Functionality
 */
function yog_advanced_search_query($query) {

    if($query->is_search()) {
        // category terms search.
        if (isset($_GET['category']) && !empty($_GET['category'])) {
            $query->set('tax_query', array(array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => array($_GET['category']) )
            ));
        }    
    }
    return $query;
}
add_action('pre_get_posts', 'yog_advanced_search_query', 1000);    


/**
 * Dokan Plugin Store Wrapper Div Start
 */
function yog_dokan_after_seller_listing_serach_form(){
    echo '<div class="store-lists faq-page">';
}
add_action( 'dokan_after_seller_listing_serach_form', 'yog_dokan_after_seller_listing_serach_form' );


/**
 * Dokan Plugin Store Wrapper Div Colse
 */
function yog_dokan_after_seller_listing_loop(){
    echo '<div class="store-lists">';
}
add_action( 'dokan_after_seller_listing_loop', 'yog_dokan_after_seller_listing_loop' );

/**
 * Multi Vendor Dokan Sidebar.
 *
 * @access public
 */
function yog_dokan_store_widget_args( $args ){
    return array(
        'name'          => __( 'Dokan Store Sidebar', 'flipmart' ),
        'id'            => 'sidebar-store',
        'before_widget' => '<aside id="%1$s" class="sidebar-widget outer-bottom-small clearfix widget dokan-store-widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="section-title">',
        'after_title'   => '</h3>',
    );
}
add_filter( 'dokan_store_widget_args', 'yog_dokan_store_widget_args', 1 );