<?php if( yog_helper()->get_option( 'header-cosmetic-add-cart' ) && class_exists('Woocommerce') ){  ?>
    <?php do_action( 'woocommerce_before_mini_cart' ); ?>
    
       <li class="dropdown">
       
          <a href="javascript:void(0)" class="cosmetic-cart dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-shopping-cart"></i> <span><?php echo WC()->cart->get_cart_contents_count(); ?></span>
          </a>
          
          <ul class="dropdown-menu">
          
             <?php if ( ! WC()->cart->is_empty() ) : ?>
             
                 <?php do_action( 'woocommerce_before_mini_cart_contents' ); ?>
                 <?php
                    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                    	$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                    	$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
                    
                    	if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                    		$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
                    		$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(array( '36', '36' )), $cart_item, $cart_item_key );
                    		$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                    		$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                    		?>
                             <li class="<?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">
                                <div class="cart-item product-summary">
                                   <div class="row">
                                      <div class="col-xs-4">
                                         <div class="image">
                                             <?php if ( empty( $product_permalink ) ) : ?>
                    							<?php echo $thumbnail; ?>
                    						 <?php else : ?>
                    							<a href="<?php echo esc_url( $product_permalink ); ?>">
                    								<?php echo $thumbnail; ?>
                    							</a>
                    						 <?php endif; ?> 
                                         </div>
                                      </div>
                                      <div class="col-xs-8">
                                         <h3 class="name"><a href="<?php echo esc_url( $product_permalink ); ?>"><?php echo esc_html( $product_name ); ?></a></h3>
                                         <div class="price"><?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?></div>
                                         <div class="trash">
                                            <?php
                                               echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
                                               	'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fa fa-trash"></i></a>',
                                               	esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                               	__( 'Remove this item', 'flipmart' ),
                                               	esc_attr( $product_id ),
                                               	esc_attr( $_product->get_sku() )
                                               ), $cart_item_key );
                                                 ?>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="clearfix"></div>
                                <hr />
                             </li>
                        <?php
                        }
                    }
                ?>
                <?php do_action( 'woocommerce_mini_cart_contents' ); ?>
                
             <?php else : ?>
                <li class="empty"><?php _e( 'No products in the cart.', 'flipmart' ); ?></li>
             <?php endif; ?>
             
          
          
              <?php if ( ! WC()->cart->is_empty() ) : ?>
                  <li class="clearfix cart-total">
                     <div class="pull-right"> <span class="text"><?php _e( 'Subtotal', 'flipmart' ); ?> :</span><span class='price'><?php echo WC()->cart->get_cart_subtotal(); ?></span> </div>
                     <div class="clearfix"></div>
                     <?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>
                     <a href="<?php echo esc_url( wc_get_cart_url() );?>"  class="btn btn-upper btn-primary btn-block m-t-20"><?php echo esc_html__( 'Cart', 'flipmart' ); ?></a> 
                     <a href="<?php echo esc_url( wc_get_checkout_url() );?>" class="btn btn-upper btn-primary btn-block m-t-20"><?php echo esc_html__( 'Checkout', 'flipmart' ); ?></a> 
                  </li>
              <?php endif; ?>
          </ul>
          
       </li>
    
    <?php do_action( 'woocommerce_after_mini_cart' ); ?>
<?php }