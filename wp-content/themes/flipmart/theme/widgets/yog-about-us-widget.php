<?php
/**
 * Theme Widget ( About Us )
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
class Yog_About_Us_Widget extends WP_Widget {

    function __construct() {

        $yog_widget_ops  = array( 'classname' => 'about-us', 'description' => esc_html__('Add information about us.', 'flipmart' ) );

        $yog_control_ops = array( 'id_base' => 'about-us-widget' );

        parent::__construct( 'about-us-widget', esc_html__( 'Flipmart: About Us', 'flipmart' ), $yog_widget_ops, $yog_control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $yog_title   = apply_filters('widget_title', $instance['yog_title']);
        $yog_description = $instance['yog_description'];
        echo $before_widget;
            
            //Title
            if ( $yog_title ) {
                echo $before_title . esc_html( $yog_title ) . $after_title;
            }
            
            
            //Content
            echo '<p>'. $yog_description .'</p>';
            
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
                
                if( 'lingerie' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
                    echo '<ul class="lingerie-social">';
                }elseif( 'seo' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
                    echo '<ul class="seo-social">';
                }else{
                    echo '<ul class="social-links"><li><h5>'. esc_html__( 'Follow us:', 'flipmart' ) .'</h5></li>';
                }
                
                    foreach( $yog_social_links['network'] as $yog_social_icon ){
                        echo '<li><a href="'. esc_url( $yog_link[$yog_counter] ) .'" target="_blank" rel="nofollow" title="'. esc_attr( ucfirst( $yog_title[$yog_counter] ) ) .'"><i class="fa '. esc_attr( $yog_social_icon ) .'" ></i></a></li>';
                        $yog_counter++;
                    }
                    
                echo '</ul>';
            
             endif;
            
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog_title']       = strip_tags( $new_instance['yog_title'] );
        $instance['yog_description'] = $new_instance['yog_description'];

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
            <label for="<?php echo esc_attr( $this->get_field_id('yog_description') ); ?>">
                <strong><?php echo esc_html__('Description', 'flipmart') ?>:</strong>
                <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_description') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_description') ); ?>" ><?php if ( isset( $instance['yog_description'] ) ) echo esc_attr( $instance['yog_description'] ); ?></textarea>
            </label>
        </p>
        
    <?php
    }
}

add_action('widgets_init', 'yog_about_us_load_widget');

function yog_about_us_load_widget() {
    register_widget('Yog_About_Us_Widget');
}
?>