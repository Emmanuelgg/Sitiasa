<?php
//Skin Create
add_action( 'wp_ajax_yog_skin_generator', 'yog_skin_generator' );
add_action('wp_ajax_nopriv_yog_skin_generator', 'yog_skin_generator');
function yog_skin_generator() {
    
    $name           = $_POST['skin_name'];
    $color          = $_POST['skin_color'];
    $skin_sec_color = $_POST['skin_sec_color'];

    if( empty( $name ) || empty( $color ) ) die();

    // generate filename
    $filename = yog_helper()->yog_uglify( $name );
    $skin     = get_template_directory() . '/assets/less/skin.less';
    $css      = get_template_directory() . '/assets/css/skins/' . $filename . '.css';

    // Delte previous file
    if( file_exists( $css ) ) unlink( $css );


    // LESS
    require_once( get_template_directory().'/yog/libs/class-lessc.php' );
    
    $less = new lessc;
    $less->setFormatter( 'compressed' );
    $less->setVariables( array(
        'skinColor' => $color,
        'skinSecColor' => $skin_sec_color,
        'skinLayout'   => 'shoes'         
    ) );

   $result = $less->compileFile( $skin, $css );

    if( $result ) {
        
        $skins = get_option( '_yog_skins' );
        $skins = $skins ? $skins : array();
        $skins[$filename] = array(
            'name' => $name,
            'color' => $color,
            'skinSecColor' => $skin_sec_color,
            'skinLayout'   => 'shoes'             
        );

        update_option( '_yog_skins', $skins );
    }

    // Refresh page
    echo 'window.location = "' . $_SERVER['HTTP_REFERER'] . '";';

    // Exit
    die();
}

//Skin Remove
add_action( 'wp_ajax_yog_skin_remove', 'yog_skin_remove' );
add_action('wp_ajax_nopriv_yog_skin_remove', 'yog_skin_remove');
function yog_skin_remove( ) {
  
    //File Name
    $filename = $_POST['skin_name'];
    
    //Check
    if( empty( $filename ) ) die();

    // generate filename
    $css = get_template_directory() . '/assets/css/skins/' . $filename . '.css';

    // Delte previous file
    unlink( $css );

    $skins = get_option( '_yog_skins' );
    unset( $skins[$filename] );
    update_option( '_yog_skins', $skins );

    // Refresh page
    echo 'window.location = "' . $_SERVER['HTTP_REFERER'] . '";';

    // Exit
    die();
}

add_action('wp_head','flipmart_woo_ajaxurl');
function flipmart_woo_ajaxurl() {
	// Enqueue variation scripts
	wp_enqueue_script( 'wc-add-to-cart-variation' );
	wp_localize_script('wc-add-to-cart-variation','ajaxurl',esc_url(admin_url('admin-ajax.php')));
}

//  Product Search Form Result
add_action('wp_ajax_product_search_form_result' , 'product_search_form_result');
add_action('wp_ajax_nopriv_product_search_form_result','product_search_form_result');
function product_search_form_result(){
    
    if( !isset( $_POST['keyword'] ) && empty( $_POST['keyword'] ) )return;
    
    //Query Search Product
    $the_query = new WP_Query( 
        array( 
            'posts_per_page' => -1, 
            's' => esc_attr( $_POST['keyword'] ), 
            'post_type' => 'product' 
    ) );
    
    //Check Product
    echo '<div class="product-search-result">';
    
        if( $the_query->have_posts() ) :
            
            while( $the_query->have_posts() ): $the_query->the_post(); 
                
                $product = wc_get_product( get_the_ID() );
            ?>
    
                <div class="row">
                    <div class="col col-xs-3">
                      <div class="product-image">
                        <div class="image"> <a href="<?php echo esc_url( $product->get_permalink() ); ?>"> <?php echo $product->get_image( array( 82, 82 ) ); ?> </a> </div>
                      </div>
                    </div>
                    <div class="col col-xs-9">
                      <div class="product-info">
                        <h3 class="name"><a href="<?php echo esc_url( $product->get_permalink() ); ?>"><?php echo $product->get_name(); ?></a></h3>
                        <?php echo wc_get_rating_html( $product->get_average_rating() ); ?>
                    	<div class="product-price"> <span class="price"> <?php echo $product->get_price_html(); ?> </span> </div>
                      </div>
                    </div>
                  </div>
    
            <?php endwhile;
            wp_reset_postdata();  
            
            
        else:
        
            _e( 'No Product Match your search keyword', 'flipmart' );
        
        endif;
        
    echo '</div>';

    die();
}

//  Product Product Quick View
add_action('wp_ajax_product_quick_view' , 'product_quick_view');
add_action('wp_ajax_nopriv_product_quick_view','product_quick_view');
function product_quick_view(){
    
    //Get Product ID
    $productId = $_POST['product'];
    $product = wc_get_product( $productId );
    
    $params = array(
     'p' => $productId, 
     'post_type' => 'product'
    );
    $wc_query = new WP_Query($params); 
    
    if ($wc_query->have_posts()) :
        
        while ($wc_query->have_posts()) : $wc_query->the_post(); 
    ?>
    <div id="myModal<?php echo get_the_ID(); ?>" class="modal fade" role="dialog">
       <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><img src="<?php echo yog()->load_assets( 'img/close_icon.png' ); ?>" alt="Close Image" /></button>
             </div>
             <div class="modal-body">
                <div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'single-product' ); ?>>
                   <div class="detail-block row">
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                            <?php 
                                $attachment_ids = $product->get_gallery_image_ids();
                                if( isset( $attachment_ids ) && !empty( $attachment_ids ) ):
                            ?>
                            <div class="product-item-holder size-big single-product-gallery small-gallery">
                                <div id="owl-single-product" class="owl-single-product">
                                    <?php
                            		    if ( $attachment_ids && has_post_thumbnail() ) {
                            		       $counter = 1;
                                        	foreach ( $attachment_ids as $attachment_id ) {
                                       		   echo '<div class="single-product-gallery-item woocommerce-product-gallery__image--placeholder prettyPhoto" id="slide'. $counter . get_the_ID() .'"><a href="'. wp_get_attachment_url( $attachment_id ) .'" data-lightbox="image-1" ><img src="'. wp_get_attachment_url( $attachment_id ) .'" alt="" data-echo="'. wp_get_attachment_url( $attachment_id ) .'" class="img-responsive"></a></div>';
                                        	   $counter++;
                                            }
                                        }
                            		?>
                                </div>
                                <div class="single-product-gallery-thumbs gallery-thumbs">
                                    <div id="owl-single-product-thumbnails" class="owl-single-product-thumbnails">
                                        <?php
                                		    if ( $attachment_ids && has_post_thumbnail() ) {
                                		       $counter = 1;
                                            	foreach ( $attachment_ids as $attachment_id ) {
                                           		   echo '<div class="item"><a href="#slide'. $counter . get_the_ID() .'" class="horizontal-thumb" data-target="#owl-single-product" data-slide="'. $counter .'"><img src="'. wp_get_attachment_url( $attachment_id ) .'" alt="" data-echo="'. wp_get_attachment_url( $attachment_id ) .'" class="img-responsive"></a></div>';
                                            	   $counter++;
                                                }
                                            }
                                		?>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                elseif( has_post_thumbnail ): 
                                  echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) );
                                endif;  
                            ?>
                        </div>
                        <div class="summary entry-summary col-sm-6 col-md-7 product-info-block">
                           <div class="product-info">
                              <?php
                                 /**
                                  * woocommerce_single_product_summary hook.
                                  *
                                  * @hooked woocommerce_template_single_title - 5
                                  * @hooked woocommerce_template_single_rating - 10
                                  * @hooked woocommerce_template_single_price - 10
                                  * @hooked woocommerce_template_single_excerpt - 20
                                  * @hooked woocommerce_template_single_add_to_cart - 30
                                  * @hooked woocommerce_template_single_meta - 40
                                  * @hooked woocommerce_template_single_sharing - 50
                                  * @hooked WC_Structured_Data::generate_product_data() - 60
                                  */
                                 do_action( 'woocommerce_single_product_summary' );
                                 ?>
                           </div>
                        </div>
                        <!-- .summary -->
                      </div>
                   </div>
                </div><!-- #product-<?php the_ID(); ?> -->
             </div>
          </div>
       </div>
    </div>
    <?php
        endwhile;
        wp_reset_postdata();
    endif;
    
    die();
}