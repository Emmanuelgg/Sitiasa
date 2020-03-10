<?php
/**
 * Theme Widget ( Contact Info Information )
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
class Yog_Contact_Info_Widget extends WP_Widget {

    function __construct() {

        $widget_ops = array( 'classname' => 'footersec contact-footer', 'description' => esc_html__('Add contact information.', 'flipmart' ) );

        $control_ops = array( 'id_base' => 'contact-info-widget' );

        parent::__construct( 'contact-info-widget', esc_html__( 'Flipmart: Contact Info', 'flipmart' ), $widget_ops, $control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $yog_title   = apply_filters('widget_title', $instance['yog-title']);
        $yog_address = $instance['yog-address'];
        $yog_email   = $instance['yog-email'];
        $yog_phone   = $instance['yog-phone'];

        echo $before_widget;
        ?>
        <div class="co-info">
            <?php 
                if ( $yog_title ) {
                    echo $before_title . esc_html( $yog_title ) . $after_title;
                }
            ?>
            <address>
                <?php if ( $yog_address ) : ?>
    			     <div><em><span class="fa fa-location-arrow"></span></em> <span><?php echo wp_kses( $yog_address, array( 'br' => array(), 'strong' => array() ) ); ?></span></div>
                <?php  
                    endif; 
                    if ( $yog_phone ) :   
                ?>
    			     <div><em><span class="fa fa-mobile-phone"></span></em> <span><?php echo esc_html( $yog_phone ); ?></span></div>
                <?php  
                    endif; 
                    if ( $yog_email ) :    
                ?>
    			     <div><em><span class="fa fa-envelope"></span></em> <span><a href="mailto:<?php echo $yog_email; ?>"><?php echo esc_html( $yog_email ); ?></a></span></div>
                <?php  
                    endif;     
                ?>   
             </address>
         
            <?php
                //Get Social Icons
                $yog_social_enable = yog_helper()->get_option( 'yog-social-icon', 'raw', false, 'options' );
                
                //Social Links
                $yog_social_links = yog_helper()->get_option( 'social-identities', 'raw', false, 'options' );
                
                //Check & Print
                if( $yog_social_links && $yog_social_enable ):
                
                    $yog_link = array(); $yog_counter = 0;
                    
                    foreach( $yog_social_links['url'] as $yog_social_link ){
                        $yog_link[] = $yog_social_link;
                    }
                    
                    echo '<div class="social"><ul class="link">';
                    
                        foreach( $yog_social_links['network'] as $yog_social_icon ){
                            echo '<li class="'. esc_attr( $yog_social_icon ) .' pull-left"><a href="'. esc_url( $yog_link[$yog_counter] ) .'"><span class="fa fa-'. esc_attr( $yog_social_icon ) .'"></span></a></li> ';
                            $yog_counter++;
                        }
                    
                    echo '</ul></div>';
                    
                endif; 
            
        echo '</div>';
                
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog-title']   = strip_tags( $new_instance['yog-title'] );
        $instance['yog-address'] = $new_instance['yog-address'];
        $instance['yog-email']   = $new_instance['yog-email'];
        $instance['yog-phone']   = $new_instance['yog-phone'];

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
            <label for="<?php echo esc_attr( $this->get_field_id('yog-address') ); ?>">
                <strong><?php echo esc_html__('Address', 'flipmart') ?>:</strong>
                <textarea class="widefat" rows="3" cols="3" id="<?php echo esc_attr( $this->get_field_id('yog-address') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog-address') ); ?>"><?php echo $instance['yog-address']; ?></textarea>
            </label>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog-email') ); ?>">
                <strong><?php echo esc_html__('Email', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog-email') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog-email') ); ?>" value="<?php if (isset($instance['yog-email'])) echo esc_attr( $instance['yog-email'] ); ?>" />
            </label>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog-phone') ); ?>">
                <strong><?php echo esc_html__('Phone', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog-phone') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog-phone') ); ?>" value="<?php if (isset($instance['yog-phone'])) echo esc_attr( $instance['yog-phone'] ); ?>" />
            </label>
        </p>
        
    <?php
    }
}

add_action('widgets_init', 'yog_contact_info_load_widget');

function yog_contact_info_load_widget() {
    register_widget('Yog_Contact_Info_Widget');
}