<?php
/**
 * Theme Widget ( Product Hot Deals )
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
class Yog_Product_Hot_Deals_Widget extends WP_Widget {

    function __construct() {

        $yog_widget_ops  = array( 'classname' => 'product-hot-deals', 'description' => esc_html__('Add product which on hot deals.', 'flipmart' ) );

        $yog_control_ops = array( 'id_base' => 'product-hot-deals-widget' );

        parent::__construct( 'product-hot-deals-widget', esc_html__( 'Flipmart: Product Hot Deals', 'flipmart' ), $yog_widget_ops, $yog_control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $yog_title   = apply_filters('widget_title', $instance['yog_title']);
        
        echo $before_widget;
            
            //Title
            if ( $yog_title ) {
                echo $before_title . esc_html( $yog_title ) . $after_title;
            }
            
            //Default Post Arguments
            $yog_args = array(
                'post_type'      => 'product',
                'posts_per_page' => 1,
                'meta_key'       => 'product-hot-flash',
                'meta_value'     => true
            );
            
            //Query.
            $yog_posts = new WP_Query($yog_args);
    
            if ($yog_posts->have_posts()) :
            
            //Enqueue JS Script
            wp_enqueue_script( 'count-min' );
            
            //Content
            if( yog_helper()->yog_check_layout( 'book' ) ):
                //Post Loop.
                while ($yog_posts->have_posts()) {
                    $yog_posts->the_post();
                ?>
                <div class="book-best-deal">
                    <div class="sale-off best-deal-tab">
                        <div class="best-deal-img">
                        	<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?></a>
                        </div>
                        <div class="sale-product">
                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
                            <?php woocommerce_template_loop_price(); ?>
                        </div>
                    </div>
                </div>
                <?php
                }
                        
                //Reset Query
                wp_reset_postdata();
            else:
                ?>
                <div class="hot-deals">
                    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
                     <?php
                        $counter_close = false;
                        //Post Loop.
                        while ($yog_posts->have_posts()) {
                            $yog_posts->the_post();
                            
                            ?>
                            <div class="item">
                              <div class="products-">
                                <div class="hot-deal-wrapper">
                                  <div class="image"> <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?> </div>
                                  <?php 
                                    if( $yog_product_discount = yog_helper()->get_option( 'product-hot-discount', 'raw', false, 'post', get_the_ID() ) ){
                                        printf( '<div class="sale-offer-tag"><span>%s<br />%s</span></div>', $yog_product_discount .'%', esc_html__( 'off', 'flipmart' ) );
                                    }
                                    
                                    //Date
                                    $yog_product_date = yog_helper()->get_option( 'product-hot-time', 'raw', false, 'post', get_the_ID() );
                                    if( !empty( $yog_product_date ) && time() <= strtotime( $yog_product_date ) ):
                                  ?>
                                      <div class="timing-wrapper" data-date="<?php echo esc_attr( $yog_product_date ); ?>">
                                        <div class="box-wrapper milestone-counter">
                                          <div class="box"> 
                                            <span class="key days highlight">120</span> <span class="value"><?php echo esc_html__( 'DAYS', 'flipmart' ); ?></span> 
                                          </div>
                                        </div>
                                        <div class="box-wrapper milestone-counter">
                                          <div class="box"> 
                                            <span class="key hours highlight">20</span> <span class="value"><?php echo esc_html__( 'HRS', 'flipmart' ); ?></span> 
                                          </div>
                                        </div>
                                        <div class="box-wrapper milestone-counter">
                                          <div class="box"> 
                                            <span class="key minutes highlight">36</span> <span class="value"><?php echo esc_html__( 'MINS', 'flipmart' ); ?></span> 
                                          </div>
                                        </div>
                                        <div class="box-wrapper hidden-md milestone-counter">
                                          <div class="box"> 
                                            <span class="key seconds highlight">60</span> <span class="value"><?php echo esc_html__( 'SEC', 'flipmart' ); ?></span> 
                                          </div>
                                        </div>
                                      </div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="product-info text-left m-t-20">
                                  <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                  <?php woocommerce_template_loop_rating()?>
                                  <?php woocommerce_template_loop_price(); ?>
                                </div>
                                
                                <div class="cart clearfix animate-effect">
                                  <div class="action">
                                    <div class="add-cart-button btn-group">
                                      <?php 
                                        global $product;
                                        echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                        	sprintf( '<button class="btn btn-primary icon" data-toggle="dropdown" type="button"><a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s"><i class="fa fa-shopping-cart"></i> </a></button>',
                                        		esc_url( $product->add_to_cart_url() ),
                                        		esc_attr( isset( $quantity ) ? $quantity : 1 ),
                                        		esc_attr( $product->get_id() ),
                                        		esc_attr( $product->get_sku() ),
                                        		esc_attr( isset( $class ) ? $class : 'button' )
                                        	),  
                                        $product );
                                        echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                        	sprintf( '<button class="btn btn-primary cart-btn"><a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a></button>',
                                        		esc_url( $product->add_to_cart_url() ),
                                        		esc_attr( isset( $quantity ) ? $quantity : 1 ),
                                        		esc_attr( $product->get_id() ),
                                        		esc_attr( $product->get_sku() ),
                                        		esc_attr( isset( $class ) ? $class : 'button' ),
                                                esc_html__( 'Add to cart', 'flipmart' )
                                        	),  
                                        $product );
                                      ?>  
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php
                        }
                        
                        //Reset Query
                        wp_reset_postdata();
                        
                        // close last unclosed row
                        if ( $counter_close ) {
                            echo '</div></div>';
                        }
                   ?> 
                   </div>
                </div>
            <?php
                endif;
            endif;
            
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog_title']      = strip_tags( $new_instance['yog_title'] );
        
        return $instance;
    }

    function form($instance) {
        $defaults = array( );
        $instance = wp_parse_args((array) $instance, $defaults); ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_title') ); ?>">
                <strong><?php echo esc_html__('Title', 'flipmart') ?>:</strong>
                <input type="editor" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_title') ); ?>" value="<?php if ( isset( $instance['yog_title'] ) ) echo esc_attr( $instance['yog_title'] ); ?>" />
            </label>
        </p>
        
    <?php
    }
}

add_action('widgets_init', 'yog_product_hot_deals_load_widget');

function yog_product_hot_deals_load_widget() {
    register_widget('Yog_Product_Hot_Deals_Widget');
}
?>