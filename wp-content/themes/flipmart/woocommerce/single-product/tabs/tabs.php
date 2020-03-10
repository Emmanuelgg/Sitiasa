<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) :

//Animation
$yog_animation = yog_helper()->get_option( 'product-tab-animation', 'raw', false, 'options' );
$yog_delay     = yog_helper()->get_option( 'product-tab-delay', 'raw', false, 'options' );
?>

	<div id="reviews-content" <?php yog_helper()->attr( 'post', array( 'class' => 'product-tabs inner-bottom-xs', 'data-animation' => $yog_animation, 'data-animation-delay' => $yog_delay, 'id' => false ) ); ?>>
        <div class="row">
            <div class="col-sm-3">
                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
        			<?php 
                        //Loop Counter
                        $loop = 1;
                        foreach ( $tabs as $key => $tab ) : 
                            
                            //Active Class
                            $active = ( $loop == 1 )? 'active' : $key;
                            echo '<li class="'. $active .'"><a href="#tab-'. esc_attr( $key ) .'" data-toggle="tab" >'. apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ) .'</a></li>';
                            $loop++;
                            
                        endforeach;
                    ?>
        		</ul>
            </div>
            
            <div class="col-sm-9">
                <div class="tab-content">
                    <?php 
                        //Loop Counter
                        $loop = 1;
                        foreach ( $tabs as $key => $tab ) : 
                            
                            //Active Class
                            $active = ( $loop == 1 )? ' active in' : '';
                            $loop++;
                    ?>
            			<div class="tab-pane<?php echo esc_attr( $active ); ?>" id="tab-<?php echo esc_attr( $key ); ?>">
            				<?php call_user_func( $tab['callback'], $key, $tab ); ?>
            			</div>
            		<?php endforeach; ?>
                </div>
            </div>
        </div>
	</div>

<?php endif; ?>
