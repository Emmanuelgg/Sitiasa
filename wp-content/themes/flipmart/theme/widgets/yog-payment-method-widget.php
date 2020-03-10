<?php
/**
 * Theme Widget ( Payment Method )
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
class Yog_Payment_Method_Widget extends WP_Widget {

    function __construct() {

        $yog_widget_ops  = array( 'classname' => 'accept_block', 'description' => esc_html__('Add payment method.', 'flipmart' ) );

        $yog_control_ops = array( 'id_base' => 'payment-method-widget' );

        parent::__construct( 'payment-method-widget', esc_html__( 'Flipmart: Payment Method', 'flipmart' ), $yog_widget_ops, $yog_control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $yog_title   = apply_filters('widget_title', $instance['yog_title']);
        
        echo $before_widget;
            
            //Title
            if ( $yog_title ) {
                echo $before_title . esc_html( $yog_title ) . $after_title;
            }
            
            //Get Payment Mathod
            $yog_payments_methods = yog_helper()->get_option( 'autoparts-payments-method' );
            
            //Check & Print
            if( isset( $yog_payments_methods ) && !empty( $yog_payments_methods ) ):
               
                echo '<ul class="list-inline m-0 payment_list">';
                    
                    //Link
                    $yog_payment_link = array();
                    foreach( $yog_payments_methods['autoparts-payment-method-link'] as $yog_payments_method ){
                        
                        $yog_payment_link[] = $yog_payments_method;
                        
                    }
                    
                    $yog_counter = 0;
                    foreach( $yog_payments_methods['autoparts-payment-method-logo'] as $yog_payments_logo ){
                        
                        if( isset( $yog_payments_logo['url'] ) && !empty( $yog_payments_logo['url'] ) ){
                            echo '<li class="list-inline-item"><a href="'. esc_url( $yog_payment_link[$yog_counter] ) .'"><img src="'. esc_url( $yog_payments_logo['url'] ) .'" alt="'. esc_attr( get_post_meta( $yog_payments_logo['id'], '_wp_attachment_image_alt', true) ) .'"></a></li>';    
                        }
                        
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

add_action('widgets_init', 'yog_payment_method_load_widget');

function yog_payment_method_load_widget() {
    register_widget('Yog_Payment_Method_Widget');
}
?>
