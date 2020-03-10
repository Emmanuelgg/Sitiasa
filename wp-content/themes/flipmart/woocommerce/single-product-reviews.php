<?php
/**
 * Display single product reviews (comments)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product-reviews.php.
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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $product;

if ( ! comments_open() ) {
	return;
}

if( yog_helper()->yog_get_layout( 'version' ) == 'woomart' ){
    ?>
    <div id="customer-reviews" class="box-collateral box-reviews woocommerce-Reviews">
        <div id="comments" class="box-reviews1">
    		<div class="form-add">
                <h3>
                    <?php
        			$count = $product->get_review_count();
        			if ( $count && wc_review_ratings_enabled() ) {
        				/* translators: 1: reviews count 2: product name */
        				$reviews_title = sprintf( esc_html( _n( '%1$s review for %2$s', '%1$s reviews for %2$s', $count, 'flipmart' ) ), esc_html( $count ), '<span>' . get_the_title() . '</span>' );
        				echo apply_filters( 'woocommerce_reviews_title', $reviews_title, $count, $product ); // WPCS: XSS ok.
        			} else {
        				esc_html_e( 'Reviews', 'flipmart' );
        			}
        			?>
                </h3>
        		<?php if ( have_comments() ) : ?>
                    <div class="box-reviews2">
                        <div class="box visible">
                			<ul>
                				<?php wp_list_comments( apply_filters( 'woocommerce_product_review_list_args', array( 'callback' => 'woocommerce_comments' ) ) ); ?>
                			</ul>
                        </div>
                    </div>
        
        			<?php 
                    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        				echo '<nav class="woocommerce-pagination">';
        				paginate_comments_links(
        					apply_filters(
        						'woocommerce_comment_pagination_args',
        						array(
        							'prev_text' => '&larr;',
        							'next_text' => '&rarr;',
        							'type'      => 'list',
        						)
        					)
        				);
        				echo '</nav>';
        			endif;
                    ?>
        
        		<?php else : ?>
        
        			<p class="woocommerce-noreviews"><?php _e( 'There are no reviews yet.', 'flipmart' ); ?></p>
        
        		<?php endif; ?>
            </div>
    	</div>
    
        <?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->get_id() ) ) : ?>
            
            <div id="review_form_wrapper">
			    <div id="review_form">
                
                <?php
    				$commenter = wp_get_current_commenter();
    
    				$comment_form = array(
    					/* translators: %s is product title */
    					'title_reply'         => have_comments() ? __( 'Add a review', 'flipmart' ) : sprintf( __( 'Be the first to review &ldquo;%s&rdquo;', 'flipmart' ), get_the_title() ),
    					/* translators: %s is product title */
    					'title_reply_to'      => __( 'Leave a Reply to %s', 'flipmart' ),
    					'title_reply_before'  => '<h3 id="reply-title" class="comment-reply-title title-review-comments">',
    					'title_reply_after'   => '</h3>',
    					'comment_notes_after' => '',
    					'fields'               => array(
            				'author' => '<div class="review1"><ul class="form-list"><li><label class="info-title" for="author">' . esc_html__( 'Name', 'flipmart' ) . ' <span class="required">*</span></label> ' .
            							'<div class="input-box"><input id="author" name="author" class="input-text" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" aria-required="true" required /></div></li>',
            				'email'  => '<li><label class="info-title" for="email">' . esc_html__( 'Email', 'flipmart' ) . ' <span class="required">*</span></label> ' .
            							'<div class="input-box"><input id="email" name="email" class="input-text" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" aria-required="true" required /></div></li></ul></div>',
            			),
    					'label_submit'        => __( 'Submit', 'flipmart' ),
    					'logged_in_as'        => '',
    					'comment_field'       => '',
    				);
    
    				$account_page_url = wc_get_page_permalink( 'myaccount' );
    				if ( $account_page_url ) {
    					/* translators: %s opening and closing link tags respectively */
    					$comment_form['must_log_in'] = '<p class="must-log-in">' . sprintf( esc_html__( 'You must be %slogged in%S to post a review.', 'flipmart' ), '<a href="' . esc_url( $account_page_url ) . '">', '</a>' ) . '</p>';
    				}
    
    				if ( wc_review_ratings_enabled() ) {
    					$comment_form['comment_field'] = '<div class="comment-form-rating"><label for="rating">' . esc_html__( 'Your rating', 'flipmart' ) . '</label><select name="rating" id="rating" required>
    						<option value="">' . esc_html__( 'Rate&hellip;', 'flipmart' ) . '</option>
    						<option value="5">' . esc_html__( 'Perfect', 'flipmart' ) . '</option>
    						<option value="4">' . esc_html__( 'Good', 'flipmart' ) . '</option>
    						<option value="3">' . esc_html__( 'Average', 'flipmart' ) . '</option>
    						<option value="2">' . esc_html__( 'Not that bad', 'flipmart' ) . '</option>
    						<option value="1">' . esc_html__( 'Very poor', 'flipmart' ) . '</option>
    					</select></div>';
    				}
    
    				$comment_form['comment_field'] .= '<div class="review2"><ul><li><label class="info-title" for="comment">' . esc_html__( 'Your review', 'flipmart' ) . ' <span class="required">*</span></label><div class="input-box"><textarea rows="3" cols="5" id="review_field" name="comment" cols="45" rows="8" required></textarea></div></li></ul></div>';
    
    				ob_start();
            		comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
                    $yog_comment_form = ob_get_clean();
                
                    //Form class replacement.
                    $yog_comment_form = str_replace( 'form-submit', 'buttons-set', $yog_comment_form );
                    $yog_comment_form = str_replace( 'class="submit"', 'class="button submit"', $yog_comment_form );
                    
                    //Print Form.
                    print( $yog_comment_form );
                ?>
                
                </div>
            </div>
            
        <?php else : ?>
        
        	<p class="woocommerce-verification-required"><?php esc_html_e( 'Only logged in customers who have purchased this product may leave a review.', 'flipmart' ); ?></p>
        
        <?php endif; ?>
        
        <div class="clearfix"></div>
            
    </div>
    <?php
}else{
    ?>
    <div id="reviews" class="woocommerce-Reviews">
    	<div id="comments" class="row">
    		<div class="col-md-12">
                <h3 class="title-review-comments">
                    <?php
        			$count = $product->get_review_count();
        			if ( $count && wc_review_ratings_enabled() ) {
        				/* translators: 1: reviews count 2: product name */
        				$reviews_title = sprintf( esc_html( _n( '%1$s review for %2$s', '%1$s reviews for %2$s', $count, 'flipmart' ) ), esc_html( $count ), '<span>' . get_the_title() . '</span>' );
        				echo apply_filters( 'woocommerce_reviews_title', $reviews_title, $count, $product ); // WPCS: XSS ok.
        			} else {
        				esc_html_e( 'Reviews', 'flipmart' );
        			}
        			?>
                </h3>
    
        		<?php if ( have_comments() ) : ?>
        			<ul class="comment-list">
        				<?php wp_list_comments( apply_filters( 'woocommerce_product_review_list_args', array( 'callback' => 'woocommerce_comments' ) ) ); ?>
        			</ul>
        
        			<?php
        			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        				echo '<nav class="woocommerce-pagination">';
        				paginate_comments_links(
        					apply_filters(
        						'woocommerce_comment_pagination_args',
        						array(
        							'prev_text' => '&larr;',
        							'next_text' => '&rarr;',
        							'type'      => 'list',
        						)
        					)
        				);
        				echo '</nav>';
        			endif;
        			?>
        		<?php else : ?>
        			<p class="woocommerce-noreviews"><?php esc_html_e( 'There are no reviews yet.', 'flipmart' ); ?></p>
        		<?php endif; ?>
            </div>
    	</div>
    </div>
    
    <?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->get_id() ) ) : ?>
    
    	<div id="review_form_wrapper">
    		<div id="review_form" class="register-form">
    			<?php
				$commenter = wp_get_current_commenter();

				$comment_form = array(
					/* translators: %s is product title */
					'title_reply'         => have_comments() ? __( 'Add a review', 'flipmart' ) : sprintf( __( 'Be the first to review &ldquo;%s&rdquo;', 'flipmart' ), get_the_title() ),
					/* translators: %s is product title */
					'title_reply_to'      => __( 'Leave a Reply to %s', 'flipmart' ),
					'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title title-review-comments">',
					'title_reply_after'    => '</h3>',
					'comment_notes_after'  => '',
					'fields'               => array(
						'author' => '<p class="comment-form-author form-group">' . '<label for="author">' . esc_html__( 'Name', 'flipmart' ) . '&nbsp;<span class="required">*</span></label> ' .
									'<input class="form-control unicase-form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" aria-required="true" required /></p>',
						'email'  => '<p class="comment-form-email form-group"><label for="email">' . esc_html__( 'Email', 'flipmart' ) . '&nbsp;<span class="required">*</span></label> ' .
									'<input class="form-control unicase-form-control" id="email" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" aria-required="true" required /></p>',
					),
					'label_submit'        => __( 'Submit', 'flipmart' ),
					'logged_in_as'        => '',
					'comment_field'       => '',
				);

				$account_page_url = wc_get_page_permalink( 'myaccount' );
				if ( $account_page_url ) {
					/* translators: %s opening and closing link tags respectively */
					$comment_form['must_log_in'] = '<p class="must-log-in">' . sprintf( esc_html__( 'You must be %slogged in%S to post a review.', 'flipmart' ), '<a href="' . esc_url( $account_page_url ) . '">', '</a>' ) . '</p>';
				}

				if ( wc_review_ratings_enabled() ) {
					$comment_form['comment_field'] = '<div class="comment-form-rating"><label for="rating">' . esc_html__( 'Your rating', 'flipmart' ) . '</label><select name="rating" id="rating" required>
						<option value="">' . esc_html__( 'Rate&hellip;', 'flipmart' ) . '</option>
						<option value="5">' . esc_html__( 'Perfect', 'flipmart' ) . '</option>
						<option value="4">' . esc_html__( 'Good', 'flipmart' ) . '</option>
						<option value="3">' . esc_html__( 'Average', 'flipmart' ) . '</option>
						<option value="2">' . esc_html__( 'Not that bad', 'flipmart' ) . '</option>
						<option value="1">' . esc_html__( 'Very poor', 'flipmart' ) . '</option>
					</select></div>';
				}

				$comment_form['comment_field'] .= '<div class="row"><div class="col-md-12"><div class="form-group"><label class="info-title" for="comment">' . esc_html__( 'Your review', 'flipmart' ) . ' <span class="required">*</span></label><textarea id="comment" class="form-control unicase-form-control" name="comment" cols="45" rows="8" required></textarea></div></div></div>';
                
                ob_start();
                
				comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
                
                $yog_comment_form = ob_get_clean();
            
                //Form class replacement.
                $yog_comment_form = str_replace( 'class="submit"', 'class="btn-upper btn btn-primary checkout-page-button"', $yog_comment_form );
                
                //Print Form.
                print( $yog_comment_form );
				?>
    		</div>
    	</div>
    
    <?php else : ?>
    
    	<p class="woocommerce-verification-required"><?php _e( 'Only logged in customers who have purchased this product may leave a review.', 'flipmart' ); ?></p>
    
    <?php endif; 
}