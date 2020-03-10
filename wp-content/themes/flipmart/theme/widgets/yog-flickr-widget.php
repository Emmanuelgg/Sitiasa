<?php
/**
 * Theme Widget ( Filckr Information )
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.7
 */
class Yog_Filckr_Widget extends WP_Widget {

    function __construct() {

        $yog_widget_ops = array( 'classname' => 'flickr', 'description' => esc_html__('Show your flickr images.', 'flipmart' ) );

        $yog_control_ops = array( 'id_base' => 'recent-flickr-widget' );

        parent::__construct( 'recent-flickr-widget', esc_html__( 'Flipmart: Flickr Feeds', 'flipmart' ), $yog_widget_ops, $yog_control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $yog_title   = apply_filters('widget_title', $instance['yog_title']);
        $yog_user    = $instance['yog_user'];
        $yog_number  = $instance['yog_number'];
      
        echo $before_widget;
        
            //Widget Title
            if ($yog_title) {
                echo $before_title . esc_html( $yog_title ) . $after_title;
            }
            
            //Content
            ?><div class="flicker-photos lightbox"><div class="row flickr-feeds"  data-user= "<?php echo esc_attr( $yog_user ); ?>" data-limit= "<?php echo esc_attr( $yog_number ); ?>" ></div></div><?php
        
        echo $after_widget;
        
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog_title']   = strip_tags( $new_instance['yog_title'] );
        $instance['yog_user']    = $new_instance['yog_user'];
        $instance['yog_number']  = $new_instance['yog_number'];
        

        return $instance;
    }

    function form($instance) {
        $defaults = array('yog_title' =>   esc_html__('Flickr Feed', 'flipmart'), 'yog_user' => '51035555243@N01',  'yog_number' => 9 );
        $instance = wp_parse_args((array) $instance, $defaults); 
        ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_title') ); ?>">
                <strong><?php echo esc_html__('Title', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_title') ); ?>" value="<?php if (isset($instance['yog_title'])) echo esc_attr( $instance['yog_title'] ); ?>" />
            </label>
        </p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_user') ); ?>">
                <strong><?php echo esc_html__('User Name', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_user') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_user') ); ?>" value="<?php if (isset($instance['yog_user'])) echo esc_attr( $instance['yog_user'] ); ?>" />
            </label>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_number') ); ?>">
                <strong><?php echo esc_html__('Number of Images', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_number') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_number') ); ?>" value="<?php if (isset($instance['yog_number'])) echo esc_attr( $instance['yog_number'] ); ?>" />
            </label>
        </p>
        
    <?php
    }
}

add_action('widgets_init', 'yog_filckr_load_widget');

function yog_filckr_load_widget() {
    register_widget('Yog_Filckr_Widget');
}
?>