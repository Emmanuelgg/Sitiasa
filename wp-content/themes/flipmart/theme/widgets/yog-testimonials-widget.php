<?php
/**
 * Theme Widget ( User Testimonial )
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
class Yog_User_Testimonial_Widget extends WP_Widget {

    function __construct() {

        $yog_widget_ops  = array( 'classname' => 'user-testimonial', 'description' => esc_html__('Add user testimonials slider.', 'flipmart' ) );

        $yog_control_ops = array( 'id_base' => 'user-testimonial-widget' );

        parent::__construct( 'user-testimonial-widget', esc_html__( 'Flipmart: User Testimonials', 'flipmart' ), $yog_widget_ops, $yog_control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $yog_title   = apply_filters('widget_title', $instance['yog_title']);
        $yog_limit = $instance['yog_limit'];
        
        echo $before_widget;
            
            //Title
            if ( $yog_title ) {
                echo $before_title . esc_html( $yog_title ) . $after_title;
            }
            
            //Default Post Arguments
            $yog_args = array(
                'post_type'      => 'testimonial',
                'posts_per_page' => $yog_limit
            );
            
            //Query.
            $yog_posts = new WP_Query($yog_args);
    
            if ($yog_posts->have_posts()) :

                //Content
                ?>
                <div id="advertisement" class="advertisement">
                     <?php 
                        //Post Loop.
                        while ($yog_posts->have_posts()) {
                            $yog_posts->the_post();
                            ?>
                            <div class="item">
                                <div class="avatar"><?php echo get_the_post_thumbnail( get_the_ID(), array( 110, 110) ) ?></div>
                                <?php 
                                     //Testimonial
                                     if( $yog_testimonial = get_post_meta( get_the_ID(), 'testimonial-content', true ) ){
                                        echo '<div class="testimonials"><em>"</em>'. $yog_testimonial .'</div>';
                                     }
                                     
                                     //Author Info
                                     printf( '<div class="clients_author">%s <span>%s</span></div>', get_the_title(), get_post_meta( get_the_ID(), 'testimonial-company', true ) );
                                ?>
                            </div>
                            <?php
                         }
                      ?> 
                </div>
                <?php
                
                //Reset Query
                wp_reset_postdata();
            
            endif;
            
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog_title'] = strip_tags( $new_instance['yog_title'] );
        $instance['yog_limit'] = $new_instance['yog_limit'];

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
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_limit') ); ?>">
                <strong><?php echo esc_html__('Number Of Testimonail', 'flipmart') ?>:</strong>
                <input type="editor" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_limit') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_limit') ); ?>" value="<?php if ( isset( $instance['yog_limit'] ) ) echo esc_attr( $instance['yog_limit'] ); ?>" />
            </label>
        </p>
        
    <?php
    }
}

add_action('widgets_init', 'yog_user_testimonial_load_widget');

function yog_user_testimonial_load_widget() {
    register_widget('Yog_User_Testimonial_Widget');
}
?>