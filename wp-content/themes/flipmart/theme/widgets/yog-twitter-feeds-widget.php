<?php
/**
 * Theme Widget ( Twitter Feeds )
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
 
class Yog_Twitter_Feeds_Widget extends WP_Widget {

    function __construct() {

        $yog_widget_ops = array( 'classname' => 'twitter-feeds', 'description' => esc_html__('Your site most twitter feeds..', 'flipmart' ) );

        $yog_control_ops = array( 'id_base' => 'twitter-feeds-widget' );

        parent::__construct( 'twitter-feeds-widget', esc_html__( 'Flipmart: Twitter Feeds', 'flipmart' ), $yog_widget_ops, $yog_control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $yog_title     = apply_filters('widget_title', $instance['yog-title']);
        $yog_username  = $instance['yog-username'];
        $yog_number    = $instance['yog-number'];
        
        echo $before_widget;
        
            //Widget Title.
            if ($yog_title) {
                echo $before_title . $yog_title . $after_title;
            }
            
            //Enqueue Js File
            wp_enqueue_script( 'tweecool-min' );
            
            //Twitter
            echo '<div id="tweecool" class="tweecool f-footer-links twitter-links" data-username="'. esc_attr( $yog_username ) .'" data-limit="'. esc_attr( $yog_number ) .'"></div>';
        
        echo $after_widget;
    }
    
    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog-title']     = strip_tags( $new_instance['yog-title'] );
        $instance['yog-username']  = $new_instance['yog-username'];
        $instance['yog-number']    = $new_instance['yog-number'];
        
        return $instance;
    }

    function form($instance) {
        ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog-title') ); ?>">
                <strong><?php echo esc_html__('Title', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog-title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog-title') ); ?>" value="<?php if (isset($instance['yog-title'])) echo esc_attr( $instance['yog-title'] ); ?>" />
            </label>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog-username') ); ?>">
                <strong><?php echo esc_html__('Twitter Username', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog-username') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog-username') ); ?>" value="<?php if (isset($instance['yog-username'])) echo esc_attr( $instance['yog-username'] ); ?>" />
            </label>
        </p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog-number') ); ?>">
                <strong><?php echo esc_html__('Number of tweets to show', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog-number') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog-number') ); ?>" value="<?php if (isset($instance['yog-number'])) echo esc_attr( $instance['yog-number'] ); ?>" />
            </label>
        </p>
        
    <?php
    }
}

add_action('widgets_init', 'yog_twitter_feeds_load_widgets');

function yog_twitter_feeds_load_widgets() {
    register_widget('Yog_Twitter_Feeds_Widget');
}
?>