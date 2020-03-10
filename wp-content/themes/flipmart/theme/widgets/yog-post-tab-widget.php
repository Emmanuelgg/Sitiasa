<?php
/**
 * Theme Widget ( Post Tab )
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
class Yog_Post_Tab_Widget extends WP_Widget {

    function __construct() {

        $yog_widget_ops  = array( 'classname' => 'post-tab', 'description' => esc_html__('Display popular posts and recent posts in tab.', 'flipmart' ) );

        $yog_control_ops = array( 'id_base' => 'post-tab-widget' );

        parent::__construct( 'post-tab-widget', esc_html__( 'Flipmart: Tab Posts', 'flipmart' ), $yog_widget_ops, $yog_control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $yog_title         = apply_filters('widget_title', $instance['yog_title']);
        $yog_popular_title = $instance['yog_popular_title'];
        $yog_popular       = $instance['yog_popular'];
        $yog_recent_title  = $instance['yog_recent_title'];
        $yog_recent        = $instance['yog_recent'];

        echo $before_widget;
        
        
            //Title
            if ( $yog_title ) {
                echo $before_title . esc_html( $yog_title ) . $after_title;
            }
        ?>
            <ul class="nav nav-tabs">
        	  <li class="active"><a href="#popular" data-toggle="tab"><?php echo esc_html( $yog_popular_title ); ?></a></li>
        	  <li><a href="#recent" data-toggle="tab"><?php echo esc_html( $yog_recent_title ); ?></a></li>
        	</ul>
            
            <div class="tab-content" style="padding-left:0">
            
                <div class="tab-pane active m-t-20" id="popular">
                    <?php $this->tabs_popular_posts( $yog_popular ); ?>
            	</div>
                
                <div class="tab-pane m-t-20" id="recent">
                    <?php $this->tabs_latest_posts( $yog_recent ); ?>
            	</div>
                
            </div>
            
        <?php
        
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog_title']         = strip_tags( $new_instance['yog_title'] );
        $instance['yog_popular_title'] = $new_instance['yog_popular_title'];
        $instance['yog_popular']       = $new_instance['yog_popular'];
        $instance['yog_recent_title']  = $new_instance['yog_recent_title'];
        $instance['yog_recent']        = $new_instance['yog_recent'];

        return $instance;
    }

    function form($instance) {
        $defaults = array('yog_popular_title' =>   esc_html__('Popular', 'flipmart'), 'yog_recent_title' => 'Recent' );
        $instance = wp_parse_args((array) $instance, $defaults); ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_title') ); ?>">
                <strong><?php echo esc_html__('Title', 'flipmart') ?>:</strong>
                <input type="editor" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_title') ); ?>" value="<?php if (isset($instance['yog_title'])) echo esc_attr( $instance['yog_title'] ); ?>" />
            </label>
        </p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_popular_title') ); ?>">
                <strong><?php echo esc_html__('Popular posts tab title', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_popular_title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_popular_title') ); ?>" value="<?php if (isset($instance['yog_popular_title'])) echo esc_attr( $instance['yog_popular_title'] ); ?>" />
            </label>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_popular') ); ?>">
                <strong><?php echo esc_html__('Number of popular posts to show:', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_popular') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_popular') ); ?>" value="<?php if (isset($instance['yog_popular'])) echo esc_attr( $instance['yog_popular'] ); ?>" />
            </label>
        </p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_recent_title') ); ?>">
                <strong><?php echo esc_html__('Latest posts tab title', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_recent_title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_recent_title') ); ?>" value="<?php if (isset($instance['yog_recent_title'])) echo esc_attr( $instance['yog_recent_title'] ); ?>" />
            </label>
        </p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_recent') ); ?>">
                <strong><?php echo esc_html__('Number of latest posts to show:', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_recent') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_recent') ); ?>" value="<?php if (isset($instance['yog_recent'])) echo esc_attr( $instance['yog_recent'] ); ?>" />
            </label>
        </p>
        
    <?php
    }
    
    /*Method to load popular posts*/
    function tabs_popular_posts( $posts = 5 ) {
    	$popular = new WP_Query('orderby=comment_count&posts_per_page='.$posts);
    	$popular_post_num = 1;
    	while ($popular->have_posts()) : $popular->the_post();
    	?>
        <div class="blog-post inner-bottom-30 " >
        
			<?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?>
			<div class="post-content">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    			<span class="review">
                    <?php 
                        //Comments
                        $yog_num_comments = get_comments_number(); 
                        if( $yog_num_comments != 1 ){
                            printf( '%1$s %2$s', yog_helper()->get_option( 'tr-blog-comments', 'html', 'Comments', 'options' ), number_format_i18n( $yog_num_comments ) );
                        }else{
                            printf( '%1$s %2$s', yog_helper()->get_option( 'tr-blog-comment', 'html', 'Comment', 'options' ), number_format_i18n( $yog_num_comments ) );
                        }
                    ?>
                </span>
    			<span class="date-time"><?php echo get_the_time( 'Y/m/d' ); ?></span>
                <?php echo yog_get_excerpt( array( 'yog_link_to_post' => false, 'yog_length' => '10' ) ); ?>
            </div>
		</div>
    	<?php
    	endwhile; 
    }
    
  
    function tabs_latest_posts( $posts = 5 ) {
    	$the_query = new WP_Query('showposts='. $posts .'&orderby=post_date&order=desc');
    	$recent_post_num = 1;		
    	while ($the_query->have_posts()) : $the_query->the_post(); 
    	?>
    	<div class="blog-post inner-bottom-30" >
        
			<?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?>
			<div class="post-content">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    			<span class="review">
                    <?php 
                        //Comments
                        $yog_num_comments = get_comments_number(); 
                        if( $yog_num_comments != 1 ){
                            printf( '%1$s %2$s', yog_helper()->get_option( 'tr-blog-comments', 'html', 'Comments', 'options' ), number_format_i18n( $yog_num_comments ) );
                        }else{
                            printf( '%1$s %2$s', yog_helper()->get_option( 'tr-blog-comment', 'html', 'Comment', 'options' ), number_format_i18n( $yog_num_comments ) );
                        }
                    ?>
                </span>
    			<span class="date-time"><?php echo get_the_time( 'Y/m/d' ); ?></span>
                <?php echo yog_get_excerpt( array( 'yog_link_to_post' => false, 'yog_length' => '10' ) ); ?>
            </div>
		</div>
    	<?php
    	endwhile; 
    }
}

add_action('widgets_init', 'yog_post_tab_load_widget');

function yog_post_tab_load_widget() {
    register_widget('Yog_Post_Tab_Widget');
}
?>