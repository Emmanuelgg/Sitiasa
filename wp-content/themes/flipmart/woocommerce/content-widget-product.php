<?php
/**
 * The template for displaying product widget entries.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! is_a( $product, 'WC_Product' ) ) {
	return;
}

do_action( 'woocommerce_widget_product_item_start', $args );

if( 'book' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
?>
    
    <div class="products">
        <div class="product book-best-deal">
            <div class="product-image">
              <div class="image"> 
              	<a href="<?php echo esc_url( $product->get_permalink() ); ?>"><?php echo $product->get_image( array( 118, 118 ) ); ?></a>
               </div>
            </div>
            <div class="sale-product book-shop-price">
                <h4> <a href="<?php echo esc_url( $product->get_permalink() ); ?>"><?php echo $product->get_name(); ?> </a></h4>
                <?php if ( ! empty( $show_rating ) ) : ?>
            		<?php echo wc_get_rating_html( $product->get_average_rating() ); // PHPCS:Ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            	<?php endif; ?>
                <p><?php echo $product->get_price_html(); // PHPCS:Ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
            </div>
        </div>
    </div>
    
<?php else: ?>
    
    <div class="product">
        <div class="product-micro">
          <div class="row product-micro-row">
            <div class="col col-xs-5">
              <div class="product-image">
                <div class="image"> <a href="<?php echo esc_url( $product->get_permalink() ); ?>"> <?php echo $product->get_image( array( 82, 82 ) ); ?> </a> </div>
              </div>
            </div>
            <div class="col col-xs-7">
              <div class="product-info">
                <h3 class="name"><a href="<?php echo esc_url( $product->get_permalink() ); ?>"><?php echo $product->get_name(); ?></a></h3>
                <?php if ( ! empty( $show_rating ) ) : ?>
            		<?php echo wc_get_rating_html( $product->get_average_rating() ); // PHPCS:Ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            	<?php endif; ?>
                <div class="product-price"> <span class="price"> <?php echo $product->get_price_html(); // PHPCS:Ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span> </div>
              </div>
            </div>
          </div>
        </div> 
    </div><div class="clearfix"></div>
    
<?php endif; ?>

<?php do_action( 'woocommerce_widget_product_item_end', $args ); ?>