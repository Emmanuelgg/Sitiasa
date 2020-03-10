<?php 
/**
 * The template for displaying author bio
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
 
 //Check
 if( yog_helper()->get_option( 'blog-author-box', 'raw', false, 'options' ) ):

    //Animation
    $yog_animation = ( yog_helper()->get_option( 'blog-single-animation', 'raw', false, 'options' ) )? yog_helper()->get_option( 'blog-single-animation', 'raw', false, 'options' ) : '';
    $yog_delay     = ( yog_helper()->get_option( 'blog-single-delay', 'raw', false, 'options' ) )? yog_helper()->get_option( 'blog-single-delay', 'raw', false, 'options' ) : '';
?>
<div <?php yog_helper()->attr( false, array( 'class' => 'blog-post-author-details', 'data-animation' => $yog_animation, 'data-animation-delay' => $yog_delay ) ); ?>> 
	<div class="row">
		<div class="col-md-2">
            <?php 
                //Author Avatar
                $yog_avatar = get_avatar( get_the_author_meta('ID'), 110 ); 
                echo str_replace( 'photo', 'img-circle img-responsive', $yog_avatar );
            ?>
		</div>
		<div class="col-md-10">
			<h4><?php the_author(); ?></h4>
			<div class="btn-group author-social-network pull-right">
                <span><?php echo esc_html__( 'Follow me on', 'flipmart' ); ?></span>
                <button type="button" class="dropdown-toggle" data-toggle="dropdown">
			    	<i class="twitter-icon fa fa-twitter"></i>
			    	<span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu" role="menu">
                    <?php if( get_the_author_meta( 'twitter' ) ): ?>
			    	    <li><a href="<?php the_author_meta( 'twitter' ); ?>"><i class="icon fa fa-facebook"></i><?php echo esc_html__( 'Facebook', 'flipmart' ); ?></a></li>
			    	<?php endif; if( get_the_author_meta( 'facebook' ) ): ?>
                        <li><a href="<?php the_author_meta( 'facebook' ); ?>"><i class="icon fa fa-twitter"></i><?php echo esc_html__( 'Twitter', 'flipmart' ); ?></a></li>
			    	<?php endif; if( get_the_author_meta( 'linkedin' ) ): ?>
                        <li><a href="<?php the_author_meta( 'linkedin' ); ?>"><i class="icon fa fa-linkedin"></i><?php echo esc_html__( 'Linkedin', 'flipmart' ); ?></a></li>
			        <?php endif; ?> 
                </ul>
			</div>
			<span class="author-job"><a href="<?php echo get_the_author_meta('user_url') ?>"><?php echo get_the_author_meta('user_url') ?></a></span>
			<?php if( get_the_author_meta( 'description' ) ): ?>
                <p><?php echo esc_html( get_the_author_meta( 'description' ) ); ?></p>
            <?php endif; ?> 
		</div>
	</div>
</div>
<?php endif; 