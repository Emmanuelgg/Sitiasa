<?php if( yog_helper()->get_option( 'header-add-cart', 'raw', false, 'options' ) && class_exists('Woocommerce') ){  ?>
        
        <?php do_action( 'woocommerce_before_mini_cart' ); ?>
         
        <div class="fl-cart-contain">
           <div class="mini-cart"> 
                <div class="basket"> <a href="<?php echo esc_url( wc_get_cart_url() ); ?>"> </a> </div>
                
                <?php if ( ! WC()->cart->is_empty() ) : ?>
                    
                    <div class="fl-mini-cart-content">
                    
                        <div class="block-subtitle">
                            <div class="top-subtotal text-left"><?php echo sprintf ( '%s %s',WC()->cart->get_cart_contents_count(), esc_html__( 'items', 'flipmart' ) ); ?>, <span class="price"><?php echo WC()->cart->get_cart_total(); ?></span> </div>
                        </div>
                    
                    
                        <ul class="mini-products-list" id="cart-sidebar">
                            
                    		<?php do_action( 'woocommerce_before_mini_cart_contents' ); ?>
                    
                    		<?php
                    			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                    				$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                    				$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
                    
                    				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                    					$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
                    					$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(array( '60', '60' )), $cart_item, $cart_item_key );
                    					$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                    					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                    					?>
                    					<li class="item <?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">
                    						<div class="item-inner">
                                                <?php if ( empty( $product_permalink ) ) : ?>
                        							<?php echo $thumbnail; ?>
                        						 <?php else : ?>
                        							<a href="<?php echo esc_url( $product_permalink ); ?>" class="product-image">
                        								<?php echo $thumbnail; ?>
                        							</a>
                        						 <?php endif; ?> 
                                                
                                                <div class="product-details">
                                                    <div class="access">
                                                        <?php
                                						echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
                                							'<a href="%s" class="btn-remove1 remove_from_cart_button" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s">%s</a>',
                                							esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                							__( 'Remove this item', 'flipmart' ),
                                							esc_attr( $product_id ),
                                							esc_attr( $cart_item_key ),
                                							esc_attr( $_product->get_sku() ),
                                                            __( 'Remove this item', 'flipmart' )
                                						), $cart_item_key );
                                						?>
                                                        <a class="btn-edit" title="Edit item" href="<?php echo esc_url( wc_get_cart_url() ); ?>"><i class="fa fa-pencil"></i><span class="hidden"><?php _e( 'Edit item', 'flipmart' ); ?></span></a>
                                                    </div>
                                                    <?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', sprintf( '<strong>%s</strong> &times; <span class="price">%s</span>', $cart_item['quantity'], $product_price ) , $cart_item, $cart_item_key ); ?>
                                                    <p class="product-name"><a href="<?php echo esc_url( $product_permalink ); ?>"><?php echo esc_html( $product_name ); ?></a></p>
                                                </div>
                                            </div>
                    					</li>
                    					<?php
                    				}
                    			}
                    		?>
                    
                    		<?php do_action( 'woocommerce_mini_cart_contents' ); ?>
                    
                        </ul> 
                    
                        <?php if ( ! WC()->cart->is_empty() ) : ?>
                            <div class="actions">
                            
                        	    <?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>
                                <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="btn-checkout"><span><?php echo esc_html__( 'Checkout', 'flipmart' ); ?></span></a> 
                                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="view-cart wc-forward"><span><?php echo esc_html__( 'View Cart', 'flipmart' ); ?></span></a> 
                                
                            </div>
                        <?php endif; ?>
                        
                    </div>
                
                <?php else: ?>
                    
                    <div class="fl-mini-cart-content">
                        <div class="block-subtitle">
                            <div class="top-subtotal text-center"><?php _e( 'cart empty.', 'flipmart' ); ?></div>
                        </div> 
                        <ul class="mini-products-list" id="cart-sidebar">
                            <li class="item"><div class="item-inner"><?php _e( 'No products in the cart.', 'flipmart' ); ?></div></li>
                        </ul>
                    </div>  
                    
                <?php endif; ?>
                
            </div>
        </div>
        
        <?php do_action( 'woocommerce_after_mini_cart' ); ?>

<?php }    