<?php
/**
 * Theme Widget ( Social Icons )
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
class Yog_Social_Icons_Widget extends WP_Widget {

    function __construct() {

        $yog_widget_ops  = array( 'classname' => 'social-icons', 'description' => esc_html__('Add social network icons.', 'flipmart' ) );

        $yog_control_ops = array( 'id_base' => 'social-icons-widget' );

        parent::__construct( 'social-icons-widget', esc_html__( 'Flipmart: Social Icons', 'flipmart' ), $yog_widget_ops, $yog_control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $yog_title   = apply_filters('widget_title', $instance['yog_title']);
        
        echo $before_widget;
            
            //Title
            if ( $yog_title ) {
                echo $before_title . esc_html( $yog_title ) . $after_title;
            }
            
            //Get Social Icons
            $yog_social_links = yog_helper()->get_option( 'social-identities' );
            
            //Check & Print
            if( yog_helper()->get_option( 'social-icon-enable' ) && $yog_social_links ):
                
                $yog_link = $yog_title = array(); $yog_counter = 0;
                
                //Link
                foreach( $yog_social_links['url'] as $yog_social_link ){
                    $yog_link[] = $yog_social_link;
                }
                
                //Title                            
                foreach( $yog_social_links['title'] as $yog_social_title ){
                    $yog_title[] = $yog_social_link;
                }                                                        
                
                //Content                            
                echo '<ul class="list-inline m-0 footer_social_links">';
                
                    foreach( $yog_social_links['network'] as $yog_social_icon ){
                        echo '<li class="list-inline-item"><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                        $yog_counter++;
                    }
                
                echo '</ul>';
                
            endif;
            
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog_title'] = strip_tags( $new_instance['yog_title'] );

        return $instance;
    }

    function form($instance) {
        $defaults = array( );
        $instance = wp_parse_args((array) $instance, $defaults); ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_title') ); ?>">
                <strong><?php echo esc_html__('Title', 'flipmart') ?>:</strong>
                <input type="editor" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_title') ); ?>" value="<?php if ( isset( $instance['yog_title'] ) ) echo esc_attr( $instance['yog_title'] ); ?>" />
            </label>
        </p>
        
    <?php
    }
}

add_action('widgets_init', 'yog_social_icons_load_widget');

function yog_social_icons_load_widget() {
    register_widget('Yog_Social_Icons_Widget');
}
?>