<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product, $post;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

if( ( isset( $style ) && $style == 'fashion' ) || ( yog_helper()->yog_check_layout( 'fashion' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ) ): ?>

    <div <?php wc_product_class( $classes, $product ); ?>>
        <div class="item-product">
            <div class="product-img">
                <?php 
                    woocommerce_show_product_loop_sale_flash();
                    echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) );
                ?>
            </div>
            <div class="product-content">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php
                    //Price
                    woocommerce_template_loop_price(); 
                    
                    //Cart
                    echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                    	sprintf( '<div class="cart-btn"><a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">'. esc_html__( 'Add to cart', 'flipmart' ) .'</a></div>',
                    		esc_url( $product->add_to_cart_url() ),
                    		esc_attr( isset( $quantity ) ? $quantity : 1 ),
                    		esc_attr( $product->get_id() ),
                    		esc_attr( $product->get_sku() ),
                    		esc_attr( isset( $class ) ? $class : 'button' )
                    	),
                    $product );
                ?>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    
<?php elseif( ( isset( $style ) && $style == 'engineer' ) ): ?>
    
    <li <?php wc_product_class( '', $product ); ?>>
        <div class="product-image">
           <?php 
                woocommerce_show_product_loop_sale_flash();
                echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) );
           ?>
        </div>
        <div class="product-info text-left">
           <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
           <?php 
                //Rating
                woocommerce_template_loop_rating();
                
                //Price
                woocommerce_template_loop_price(); 
           ?>
        </div>
     </li>
     
<?php elseif( yog_helper()->yog_check_layout( 'engineer' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ): ?>
    
    <div <?php wc_product_class( $classes, $product ); ?>>
        <div class="product-image">
           <?php 
                woocommerce_show_product_loop_sale_flash();
                echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) );
           ?>
        </div>
        <div class="product-info text-left">
           <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
           <?php 
                //Rating
                woocommerce_template_loop_rating();
                
                //Price
                woocommerce_template_loop_price(); 
           ?>
        </div>
     </div>
     
<?php elseif( yog_helper()->yog_check_layout( 'engineer' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ): ?>
    
    <div <?php wc_product_class( $classes, $product ); ?>>
        <div class="product-image">
           <?php 
                woocommerce_show_product_loop_sale_flash();
                echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) ); 
           ?>
        </div>
        <div class="product-info text-left">
           <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
           <?php 
                //Rating
                woocommerce_template_loop_rating();
                
                //Price
                woocommerce_template_loop_price(); 
           ?>
        </div>
     </div>
     
<?php elseif( isset( $style ) && $style == 'lingerie' ): ?>
    
    <li <?php wc_product_class( $classes, $product ); ?>>
      <div class="products">
       <div class="product">
          <div class="product-image">
             <div class="image">
                <a href="<?php the_permalink(); ?>">    
                  <?php 
                     woocommerce_show_product_loop_sale_flash();
                     echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) );
                  ?> 
                </a> 
                <div class="lingerie-cart">
                   <?php 
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
                   <a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Details', 'flipmart' ); ?></a>
                </div>
             </div>
          </div>
          <div class="product-info text-left">
             <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
             <div class="product-price">
                <?php woocommerce_template_loop_price(); ?>
             </div>
          </div>
       </div>
      </div>
    </li>

<?php elseif( yog_helper()->yog_check_layout( 'lingerie' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ): ?>
    
    <div <?php wc_product_class( $classes, $product ); ?>>
      <div class="products">
       <div class="product">
          <div class="product-image">
             <div class="image">
                <a href="<?php the_permalink(); ?>">    
                  <?php 
                     woocommerce_show_product_loop_sale_flash();
                     echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) );
                  ?> 
                </a> 
                <div class="lingerie-cart">
                   <?php 
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
                   <a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Details', 'flipmart' ); ?></a>
                </div>
             </div>
          </div>
          <div class="product-info text-left">
             <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
             <div class="product-price">
                <?php woocommerce_template_loop_price(); ?>
             </div>
          </div>
       </div>
      </div>
    </div>
    
<?php elseif( ( isset( $style ) && $style == 'kidswear' ) ): ?>
    
    <div <?php wc_product_class( $classes, $product ); ?>>
     <div class="products-content">
        <a href="<?php the_permalink(); ?>">
            <?php 
                woocommerce_show_product_loop_sale_flash();
                echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) );
            ?>
        </a>
        <div class="cat-price">
           <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
           <h4><?php woocommerce_template_loop_price(); ?></h4>
        </div>
     </div>
     <?php 
        //Cart
        echo apply_filters( 'woocommerce_loop_add_to_cart_link',
        	sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="addcart-btn %s">'. esc_html__( 'Add to cart', 'flipmart' ) .'</a>',
        		esc_url( $product->add_to_cart_url() ),
        		esc_attr( isset( $quantity ) ? $quantity : 1 ),
        		esc_attr( $product->get_id() ),
        		esc_attr( $product->get_sku() ),
        		esc_attr( isset( $class ) ? $class : 'button' )
        	),
        $product );
     ?>
    </div>

<?php elseif( yog_helper()->yog_check_layout( 'cosmetic' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ): ?>
    
    <div <?php wc_product_class( $classes, $product ); ?>>
       <div class="products">
          <div class="product">
             <div class="product-image">
                <div class="image"> 
                    <a href="<?php the_permalink(); ?>">
                        <?php 
                            echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) ); 
                        ?>
                    </a>
                </div>
                <?php woocommerce_show_product_loop_sale_flash(); ?>
             </div>
             <div class="product-info text-left">
                <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                <div class="product-price">
                   <div class="cos-price">
                      <?php if ( $price_html = $product->get_price_html() ) : ?>
                    	<span class="price"><?php echo $price_html; ?></span>
                      <?php endif; ?>
                      <?php
                        //Rating
                        woocommerce_template_loop_rating();
                      ?>
                   </div>
                   <div class="price-cart">
                       <?php  
                           echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                            	sprintf( '<a href="%s" data-quantity="%s" class="%s" %s><i class="fa fa-shopping-cart"></i></a>',
                            		esc_url( $product->add_to_cart_url() ),
                            		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
                            		esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
                            		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : ''
                            	),
                            $product, $args );
                       ?>
                   </div>
                </div>
             </div> 
          </div>
       </div> 
    </div>
             
<?php elseif( isset( $style ) && $style == 'book' || ( yog_helper()->yog_check_layout( 'book' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ) ): ?>

    <div <?php wc_product_class( $classes, $product ); ?>>
        <div class="products">
            <div class="product book-best-deal">
                <div class="product-image">
                    <div class="image"> 
                        <a href="<?php the_permalink(); ?>">
                            <?php 
                                woocommerce_show_product_loop_sale_flash();
                                echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) );
                            ?>
                        </a>
                    </div>
                </div>
                <div class="sale-product">
                    <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
                    <?php
                	    //Price
                        woocommerce_template_loop_price(); 
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
                                <button type="button" data-product="<?php echo get_the_ID(); ?>" class="btn btn-info btn-lg quick-view" data-toggle="modal" data-target="#myModal<?php echo get_the_ID(); ?>"><i class="icon fa fa-search"></i></button>
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
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    
<?php elseif( isset( $style ) && $style == 'furniture-grid' ): ?>
    
    <li>
        <div class="furniture-products">
           <div class="product-image">
              <div class="image">
                  <a href="<?php the_permalink(); ?>">    
                      <?php 
                         echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) );
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
     
<?php elseif( yog_helper()->yog_check_layout( 'furniture' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ): ?>
    
    <div <?php wc_product_class( $classes, $product ); ?>>
        <div class="furniture-products">
           <div class="product-image">
              <div class="image">
                  <a href="<?php the_permalink(); ?>">    
                      <?php 
                         echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) ); 
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
     </div>

<?php elseif( yog_helper()->yog_check_layout( 'glasses' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ): ?>
    
    <div <?php wc_product_class( $classes, $product ); ?>>
        <div class="products">
           <div class="product">
              <div class="product-image">
                 <div class="image">
                    <a href="<?php the_permalink(); ?>">    
                      <?php 
                         echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) );
                      ?> 
                    </a> 
                    <?php woocommerce_show_product_loop_sale_flash(); ?>
                    <div class="glasses-cart">
                       <ul> 
                           <?php 
                               //Wishlist Shortcode
                                if ( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) ) {
                                    echo do_shortcode( '[yith_wcwl_add_to_wishlist]' );
                                }
                                
                                //Compare Button
                                if ( shortcode_exists( 'yith_compare_button' ) ) {
                                    echo '<li>'. do_shortcode( '[yith_compare_button container="no"]' ) .'</li>';
                                }  
                           ?> 
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="product-info text-left">
                 <?php woocommerce_template_loop_rating(); ?>
                 <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                 <?php 
                    //Price
                    woocommerce_template_loop_price();  
                    
                    //Cart
                    echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                    	sprintf( '<div class="add-cart"><a href="%s" data-quantity="%s" class="%s" %s>%s</a></div>',
                    		esc_url( $product->add_to_cart_url() ),
                    		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
                    		esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
                    		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
                            esc_html__( 'Add To Cart', 'flipmart' )
                    	),
                    $product, $args );
                 ?>
              </div>
           </div>
        </div>
    </div>
    
<?php elseif( isset( $style ) && $style == 'gym' ): ?>
        
    <div <?php wc_product_class( $classes, $product ); ?>>
         <a href="<?php the_permalink(); ?>">    
            <?php 
                echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) );
            ?> 
         </a>
         <div class="discription">
            <a href="<?php the_permalink(); ?>" class="name"><?php the_title(); ?></a>
            <?php woocommerce_template_loop_price(); ?>
         </div>
         <div class="p-button">
            <?php 
                //Cart
                echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                	sprintf( '<a href="%s" data-quantity="%s" class="%s" %s><button>%s</button></a>',
                		esc_url( $product->add_to_cart_url() ),
                		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
                		esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
                		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
                        esc_html__( 'ADD TO CART', 'flipmart' )
                	),
                $product, $args );
            ?>
         </div>
     </div>

<?php elseif( ( isset( $style ) && $style == 'flower' ) || ( yog_helper()->yog_check_layout( 'flower' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ) ): ?>
      
     <div <?php wc_product_class( $classes, $product ); ?>>
        <div class="product-card">
          <div class="product-image-card">
            <figure class="sale m-auto">
              <a href="<?php the_permalink(); ?>">
                <?php 
                    echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) );
                ?>
              </a>
              <?php woocommerce_show_product_loop_sale_flash(); ?>
            </figure>
            <ul class="product-icon-card">
              <?php 
                //Wishlist Shortcode
                if ( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) ) {
                    echo do_shortcode( '[yith_wcwl_add_to_wishlist]' );
                }
              ?>  
            </ul>
          </div>
          <div class="product-title-card">
            <div class="product-title-card-inner">
                <?php
                    //Title
                    the_title( '<h5><a href="'. get_permalink() .'">', '</a></h5>' );
                    
                    //Price
                    woocommerce_template_loop_price();
                    
                    //Rating
                    echo '<div class="star">';
                    woocommerce_template_loop_rating();
                    echo '</div>';
                  
                    //Cart
                    echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                    	sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
                    		esc_url( $product->add_to_cart_url() ),
                    		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
                    		esc_attr( isset( $args['class'] ) ? $args['class'] : 'btn btn-dark rounded-pill add_to_cart_btn' ),
                    		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
                            esc_html__( 'ADD TO CART', 'flipmart' )
                    	),
                    $product, $args );
                ?>
            </div>
          </div>
        </div>
     </div> 

<?php elseif( ( isset( $style ) && $style == 'autoparts-two' ) ): ?>
     
     <div <?php wc_product_class( $classes, $product ); ?>>
        <div class="product-card b-product-card">
          <div class="product-image-card">
            <figure class="m-auto">
              <a href="<?php the_permalink(); ?>">
                <?php 
                    echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) );
                ?>
              </a>
              <?php woocommerce_show_product_loop_sale_flash(); ?>
            </figure>
          </div>
          <div class="product-title-card">
            <div class="product-title-card-inner">
                <?php
                    //Title 
                    the_title( '<h6 class="font-weight-medium"><a href="'. get_permalink() .'">', '</a></h6>' );
                    
                    //Rating
                    echo '<div class="star-ratings">';
                    woocommerce_template_loop_rating();
                    echo '</div>';
                    
                    echo '<div class="price_and_btn_block">';
                    
                        //Price
                        woocommerce_template_loop_price();
                      
                        //Cart
                        echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                        	sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
                        		esc_url( $product->add_to_cart_url() ),
                        		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
                        		esc_attr( isset( $args['class'] ) ? $args['class'] : 'btn btn-primary add_to_cart_btn' ),
                        		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
                                esc_html__( 'ADD TO CART', 'flipmart' )
                        	),
                        $product, $args );
                    
                    echo '</div>';
                ?>
            </div>
          </div>
        </div>
     </div> 
          
<?php elseif( ( isset( $style ) && $style == 'autoparts' ) || ( yog_helper()->yog_check_layout( 'autoparts' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ) ): ?>
     
     <div <?php wc_product_class( $classes, $product ); ?>>
        <div class="product-card">
          <div class="product-image-card">
            <figure class="m-auto">
              <a href="<?php the_permalink(); ?>">
                <?php 
                    echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', array( 'class' => 'img-responsive' ) );
                ?>
              </a>
              <?php woocommerce_show_product_loop_sale_flash(); ?>
            </figure>
          </div>
          <div class="product-title-card">
            <div class="product-title-card-inner">
                <?php
                    //Title 
                    the_title( '<h6 class="font-weight-medium"><a href="'. get_permalink() .'">', '</a></h6>' );
                    
                    //Rating
                    echo '<div class="star-ratings">';
                    woocommerce_template_loop_rating();
                    echo '</div>';
                    
                    //Price
                    woocommerce_template_loop_price();
                  
                    //Cart
                    echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                    	sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
                    		esc_url( $product->add_to_cart_url() ),
                    		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
                    		esc_attr( isset( $args['class'] ) ? $args['class'] : 'btn btn-primary add_to_cart_btn' ),
                    		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
                            esc_html__( 'ADD TO CART', 'flipmart' )
                    	),
                    $product, $args );
                ?>
            </div>
          </div>
        </div>
     </div> 
       
<?php else: ?>

    <div <?php wc_product_class( $classes, $product ); ?>>
        <?php
    	/**
    	 * Hook: woocommerce_before_shop_loop_item.
    	 *
    	 * @hooked woocommerce_template_loop_product_link_open - 10
    	 */
    	do_action( 'woocommerce_before_shop_loop_item' );
        ?>
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
        <?php 
            /**
        	 * Hook: woocommerce_after_shop_loop_item.
        	 *
        	 * @hooked woocommerce_template_loop_product_link_close - 5
        	 * @hooked woocommerce_template_loop_add_to_cart - 10
        	 */
        	do_action( 'woocommerce_after_shop_loop_item' );
        ?>
    </div>
    
<?php endif;