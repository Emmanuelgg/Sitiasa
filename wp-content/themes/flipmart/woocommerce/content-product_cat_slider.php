<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if( isset( $style ) && $style == 'full' ):
?>

    <div <?php wc_product_cat_class( 'item item-carousel', $category ); ?>>
        <div class="products">
            <div class="product">
                <div class="product-image">
                    <?php
                	/**
                	 * woocommerce_before_subcategory hook.
                	 *
                	 * @hooked woocommerce_template_loop_category_link_open - 10
                	 */
                	do_action( 'woocommerce_before_subcategory', $category );
                
                	/**
                	 * woocommerce_before_subcategory_title hook.
                	 *
                	 * @hooked woocommerce_subcategory_thumbnail - 10
                	 */
                	do_action( 'woocommerce_before_subcategory_title', $category );
                    ?>
                </div>
                <div class="product-info text-left">
                    <h3 class="name"><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php printf( '%s ( %s )', $category->name, $category->count ); ?></a></h3>
                    <?php
                    /**
                	 * woocommerce_after_subcategory_title hook.
                	 */
                	do_action( 'woocommerce_after_subcategory_title', $category );
                
                	/**
                	 * woocommerce_after_subcategory hook.
                	 *
                	 * @hooked woocommerce_template_loop_category_link_close - 10
                	 */
                	do_action( 'woocommerce_after_subcategory', $category ); ?>
                </div>
            </div>
        </div>
    </div>
    
<?php else: ?>

    <div <?php wc_product_cat_class( 'product', $category ); ?>>
        <div class="product-micro">
            <div class="row product-micro-row">
                <div class="col col-xs-5">
                    <div class="product-image">
                        <?php
                    	/**
                    	 * woocommerce_before_subcategory hook.
                    	 *
                    	 * @hooked woocommerce_template_loop_category_link_open - 10
                    	 */
                    	do_action( 'woocommerce_before_subcategory', $category );
                    
                    	/**
                    	 * woocommerce_before_subcategory_title hook.
                    	 *
                    	 * @hooked woocommerce_subcategory_thumbnail - 10
                    	 */
                    	do_action( 'woocommerce_before_subcategory_title', $category );
                        ?>
                    </div>
                </div>
                <div class="col2 col-xs-7">
                    <div class="product-info">
                        <h3 class="name"><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php printf( '%s ( %s )', $category->name, $category->count ); ?></a></h3>
                        <?php
                        /**
                    	 * woocommerce_after_subcategory_title hook.
                    	 */
                    	do_action( 'woocommerce_after_subcategory_title', $category );
                    
                    	/**
                    	 * woocommerce_after_subcategory hook.
                    	 *
                    	 * @hooked woocommerce_template_loop_category_link_close - 10
                    	 */
                    	do_action( 'woocommerce_after_subcategory', $category ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php endif; ?>