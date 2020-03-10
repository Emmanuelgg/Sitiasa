<?php
/**
 * Theme Widget ( Bucket CPT )
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
class Yog_Bucket_CPT_Widget extends WP_Widget {

    function __construct() {

        $widget_ops = array( 'classname' => 'downloads', 'description' => esc_html__('Add bucket cpt to your sidebar.', 'flipmart' ) );

        $control_ops = array( 'id_base' => 'bucket-cpt-widget' );

        parent::__construct( 'bucket-cpt-widget', esc_html__( 'Flipmart: Bucket CPT', 'flipmart' ), $widget_ops, $control_ops );
    }

    function widget( $args, $instance ) {
        
        // Get menu
		$yog_bucket = ! empty( $instance['yog-bucket'] ) ? $instance['yog-bucket'] : false;

		if ( ! $yog_bucket ) {
			return;
		}

		$yog_title = ! empty( $instance['yog-title'] ) ? $instance['yog-title'] : '';

		$yog_title = apply_filters( 'widget_title', $yog_title, $instance, $this->id_base );

		if ( $yog_title ) {
			echo '<h2 class="widget-title">' . $yog_title . '</h2>';
		}

		//Post Arguments
        $yog_args = array(
            'post_type' => 'bucket',
            'p'         => $yog_bucket
        );
        
        //Custom Query
        $yog_query = new WP_Query( $yog_args );
        
        //Loop Start
        while( $yog_query->have_posts() ) {
            $yog_query->the_post();
            
            the_content( __( 'Continue reading', 'flipmart' ) );
        }
        
        //Reset Post
        wp_reset_postdata();
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog-title']   = strip_tags( $new_instance['yog-title'] );
        $instance['yog-bucket'] = $new_instance['yog-bucket'];

        return $instance;
    }

    function form($instance) {
        
        $yog_bucket = isset( $instance['yog-bucket'] ) ? $instance['yog-bucket'] : '';
        
		// Bucket Posts Arguments
        $yog_args = array(
            'post_type'      => 'bucket',
            'posts_per_page' => -1,
            'orderby'        => 'title',
            'order'          => 'asc'
        );
        
        //Get Bucket Posts
        $yog_buckets = array();
        $yog_posts   = get_posts( $yog_args );
        ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog-title') ); ?>">
                <strong><?php echo esc_html__('Title', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog-title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog-title') ); ?>" value="<?php if (isset($instance['yog-title'])) echo esc_attr( $instance['yog-title'] ); ?>" />
            </label>
        </p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'yog-bucket' ); ?>"><?php _e( 'Select Bucket:', 'flipmart' ); ?></label>
			<select id="<?php echo $this->get_field_id( 'yog-bucket' ); ?>" name="<?php echo $this->get_field_name( 'yog-bucket' ); ?>">
				<option value="0"><?php _e( '&mdash; Select &mdash;', 'flipmart' ); ?></option>
				<?php 
                    if ( !empty( $yog_posts ) ) { 
				        foreach ( $yog_posts as $yog_item ) {
                ?>
					<option value="<?php echo esc_attr( $yog_item->ID ); ?>" <?php selected( $yog_bucket, $yog_item->ID ); ?>>
						<?php echo esc_html( $yog_item->post_title ); ?>
					</option>
				<?php
                        }
                    } 
                ?>
			</select>
		</p>
        
    <?php
    }
}

add_action('widgets_init', 'yog_bucket_cpt_load_widget');

function yog_bucket_cpt_load_widget() {
    register_widget('Yog_Bucket_CPT_Widget');
}