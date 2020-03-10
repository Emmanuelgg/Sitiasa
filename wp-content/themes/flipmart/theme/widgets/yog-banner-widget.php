<?php
/**
 * Theme Widget ( Banner )
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
class Yog_Banner_Widget extends WP_Widget {

    function __construct() {

        $yog_widget_ops  = array( 'classname' => 'banner', 'description' => esc_html__('Show your banner image.', 'flipmart' ) );

        $yog_control_ops = array( 'id_base' => 'banner-widget' );

        parent::__construct( 'banner-widget', esc_html__( 'Flipmart: Banner', 'flipmart' ), $yog_widget_ops, $yog_control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        
        $yog_title   = apply_filters('widget_title', $instance['yog_title']);
        $yog_banner  = $instance['yog_banner'];
        
        //Widget Title.after
        if ($yog_title) {
            echo $before_title . esc_html( $yog_title ) . $after_title;
        }
        
        if( !empty( $yog_banner ) ):
        ?>
            <div class="home-banner outer-top-n outer-bottom-xs">
                <img src="<?php echo esc_url( $yog_banner ); ?>" alt="Image" />
            </div>
        <?php
        endif;
        
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog_title']   = strip_tags( $new_instance['yog_title'] );
        $instance['yog_banner']  = $new_instance['yog_banner'];
        

        return $instance;
    }

    function form($instance) {
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_title') ); ?>">
                <strong><?php echo esc_html__('Title', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_title') ); ?>" value="<?php if (isset($instance['yog_title'])) echo esc_attr( $instance['yog_title'] ); ?>" />
            </label>
        </p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_banner') ); ?>">
                <strong><?php echo esc_html__('Banner Image Url', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_banner') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_banner') ); ?>" value="<?php if (isset($instance['yog_banner'])) echo esc_attr( $instance['yog_banner'] ); ?>" />
            </label>
        </p>
        
    <?php
    }
}

add_action('widgets_init', 'yog_banner_load_widget');

function yog_banner_load_widget() {
    register_widget('Yog_Banner_Widget');
}
?>