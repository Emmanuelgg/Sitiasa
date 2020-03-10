<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ){
  return;  
} 

//Animation
$yog_animation = ( yog_helper()->get_option( 'blog-single-animation', 'raw', false, 'options' ) )? yog_helper()->get_option( 'blog-single-animation', 'raw', false, 'options' ) : '';
$yog_delay     = ( yog_helper()->get_option( 'blog-single-delay', 'raw', false, 'options' ) )? yog_helper()->get_option( 'blog-single-delay', 'raw', false, 'options' ) : '';

?>
<div <?php yog_helper()->attr( false, array( 'class' => 'blog-review', 'data-animation' => $yog_animation, 'data-animation-delay' => $yog_delay ) ); ?>>
    <div class="row">
        <?php 
            // If comments are closed and there are comments, let's leave a little note, shall we?
            if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ){ 
                echo '<div class="col-md-12"><h3 class="title-review-comments">' . esc_html( yog_get_translation( 'tr-blog-comment-off' ) ) . '</h3></div>'; 
            }else{
                //Get Number of Comments.
                $yog_num_comments = get_comments_number( get_queried_object_id() );
                if( $yog_num_comments != 1 ){
                    printf( '<div class="col-md-12"><h3 class="title-review-comments">%2$s %1$s</h3></div>', esc_html( yog_get_translation( 'tr-blog-comments' ) ), number_format_i18n( $yog_num_comments ) );
                }else{
                    printf( '<div class="col-md-12"><h3 class="title-review-comments">%2$s %1$s</h3></div>', esc_html( yog_get_translation( 'tr-blog-comment' ) ), number_format_i18n( $yog_num_comments ) );
                }    
            }
            
            if ( have_comments() ) {
                
             ?>		
                <ul class="comment-list">
        			<?php
        				wp_list_comments( array(
        					'format'      => 'html5',
        					'short_ping'  => true,
                            'callback' => 'yog_comments_callback'
        				) );
        			?>
          		</ul><!-- .comment-list -->
    		<?php
    			// Are there comments to navigate through?
    			get_template_part( 'templates/comment/nav' );
            }
        ?>
    </div>
</div>

<?php
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    
    //Form Fields Arguments.
    $yog_fields = array();
    $yog_fields['author'] = '<div class="row"><div class="col-md-4"><div class="form-group"><label class="info-title" for="author">'. esc_html__( 'Your Name', 'flipmart' ) .' <span>*</span></label><input id="author" name="author" type="text" class="form-control unicase-form-control" placeholder="'. esc_attr__( 'Name', 'flipmart' ) .'" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></div></div>';
    $yog_fields['email']  = '<div class="col-md-4"><div class="form-group"><label class="info-title" for="email">'. esc_html__( 'Email Address', 'flipmart' ) .' <span>*</span></label><input id="email" name="email" type="text" class="form-control unicase-form-control" placeholder="'. esc_attr__( 'Email', 'flipmart' ) .'" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"' . $aria_req . ' /></div></div>';
    $yog_fields['url']    = '<div class="col-md-4"><div class="form-group"><label class="info-title" for="url">'. esc_html__( 'Website', 'flipmart' ) .' <span>*</span></label><input id="url" name="url" type="text" class="form-control unicase-form-control" placeholder="'. esc_attr__( 'Website', 'flipmart' ) .'" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></div></div></div>';

    $yog_args = array(
        'fields' => $yog_fields,
        'comment_field' => '<div class="row"><div class="col-md-12"><div class="form-group"><label class="info-title" for="comment">'. esc_html__( 'Comment', 'flipmart' ) .' <span>*</span></label><textarea id="comment" name="comment" class="form-control unicase-form-control" placeholder="'. esc_attr__( 'Comment', 'flipmart' ) .'"></textarea></div></div></div>',
        'format' => 'html5',
        'label_submit' =>   esc_html__('Submit Comment', 'flipmart'),
        'comment_notes_before' => '',
        'comment_notes_after' => ''
    );

    ob_start();
    comment_form( $yog_args );
    $yog_comment_form = ob_get_clean();
    
    //Form class replacement.
    $yog_comment_form = str_replace( 'class="submit"', 'class="btn-upper btn btn-primary checkout-page-button"', $yog_comment_form );
    
    //Print Form.
    print( $yog_comment_form );
?>