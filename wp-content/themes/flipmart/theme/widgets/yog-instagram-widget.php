<?php
/**
 * Theme Widget ( Instagram Feeds )
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
 
class Yog_Instagram_Feeds_Widget extends WP_Widget {

    function __construct() {

        $yog_widget_ops = array( 'classname' => 'ins-posts', 'description' => esc_html__('Your site most instagram feeds..', 'flipmart' ) );

        $yog_control_ops = array( 'id_base' => 'instagram-feeds-widget' );

        parent::__construct( 'instagram-feeds-widget', esc_html__( 'Flipmart : Instagram Feeds', 'flipmart' ), $yog_widget_ops, $yog_control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        
        $yog_title   = apply_filters('widget_title', $instance['yog-title']);
        $yog_username    = $instance['yog-user-name'];
        $yog_limit       = $instance['yog-number'];
        
        echo $args['before_widget'];

		if ( ! empty( $yog_title ) ) { echo $args['before_title'] . wp_kses_post( $yog_title ) . $args['after_title']; };

		do_action( 'wpiw_before_widget', $instance );

		if ( '' !== $yog_username ) {

			$media_array = $this->yog_scrape_instagram( $yog_username );

			if ( is_wp_error( $media_array ) ) {

				echo wp_kses_post( $media_array->get_error_message() );

			} else {
			 
				// slice list down to required limit.
				$media_array = array_slice( $media_array, 0, $yog_limit );

				echo '<ul class="instagram-lite">';
                
    				foreach( $media_array as $item ) {
    					echo '<li><a href="' . esc_url( $item['link'] ) . '"><img src="' . esc_url( $item['small'] ) . '"  alt="' . esc_attr( $item['description'] ) . '" class="img-responsive"/></a></li> ';
    				}
                
				echo '</ul>'; 
			}
		}

		do_action( 'wpiw_after_widget', $instance );

		echo $args['after_widget'];
    }
    
    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog-title']      = strip_tags( $new_instance['yog-title'] );
        $instance['yog-user-name']  = $new_instance['yog-user-name'];
        $instance['yog-number']     = $new_instance['yog-number'];
        
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
            <label for="<?php echo esc_attr( $this->get_field_id('yog-user-name') ); ?>">
                <strong><?php echo esc_html__('User Name', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog-user-name') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog-user-name') ); ?>" value="<?php if (isset($instance['yog-user-name'])) echo esc_attr( $instance['yog-user-name'] ); ?>" />
            </label>
        </p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog-number') ); ?>">
                <strong><?php echo esc_html__('Number of images to show', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog-number') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog-number') ); ?>" value="<?php if (isset($instance['yog-number'])) echo esc_attr( $instance['yog-number'] ); ?>" />
            </label>
        </p>
        
    <?php
    }
    
    function yog_scrape_instagram( $yog_username ) {

		$yog_username = trim( strtolower( $yog_username ) );

		switch ( substr( $yog_username, 0, 1 ) ) {
			case '#':
				$url              = 'https://instagram.com/explore/tags/' . str_replace( '#', '', $yog_username );
				$transient_prefix = 'h';
				break;

			default:
				$url              = 'https://instagram.com/' . str_replace( '@', '', $yog_username );
				$transient_prefix = 'u';
				break;
		}

		if ( false === ( $instagram = get_transient( 'insta-a10-' . $transient_prefix . '-' . sanitize_title_with_dashes( $yog_username ) ) ) ) {

			$remote = wp_remote_get( $url );

			if ( is_wp_error( $remote ) ) {
				return new WP_Error( 'site_down', esc_html__( 'Unable to communicate with Instagram.', 'flipmart' ) );
			}

			if ( 200 !== wp_remote_retrieve_response_code( $remote ) ) {
				return new WP_Error( 'invalid_response', esc_html__( 'Instagram did not return a 200.', 'flipmart' ) );
			}

			$shards      = explode( 'window._sharedData = ', $remote['body'] );
			$insta_json  = explode( ';</script>', $shards[1] );
			$insta_array = json_decode( $insta_json[0], true );

			if ( ! $insta_array ) {
				return new WP_Error( 'bad_json', esc_html__( 'Instagram has returned invalid data.', 'flipmart' ) );
			}

			if ( isset( $insta_array['entry_data']['ProfilePage'][0]['graphql']['user']['edge_owner_to_timeline_media']['edges'] ) ) {
				$images = $insta_array['entry_data']['ProfilePage'][0]['graphql']['user']['edge_owner_to_timeline_media']['edges'];
			} elseif ( isset( $insta_array['entry_data']['TagPage'][0]['graphql']['hashtag']['edge_hashtag_to_media']['edges'] ) ) {
				$images = $insta_array['entry_data']['TagPage'][0]['graphql']['hashtag']['edge_hashtag_to_media']['edges'];
			} else {
				return new WP_Error( 'bad_json_2', esc_html__( 'Instagram has returned invalid data.', 'flipmart' ) );
			}

			if ( ! is_array( $images ) ) {
				return new WP_Error( 'bad_array', esc_html__( 'Instagram has returned invalid data.', 'flipmart' ) );
			}

			$instagram = array();

			foreach ( $images as $image ) {
				if ( true === $image['node']['is_video'] ) {
					$type = 'video';
				} else {
					$type = 'image';
				}

				$caption = __( 'Instagram Image', 'flipmart' );
				if ( ! empty( $image['node']['edge_media_to_caption']['edges'][0]['node']['text'] ) ) {
					$caption = wp_kses( $image['node']['edge_media_to_caption']['edges'][0]['node']['text'], array() );
				}

				$instagram[] = array(
					'description' => $caption,
					'link'        => trailingslashit( '//instagram.com/p/' . $image['node']['shortcode'] ),
					'time'        => $image['node']['taken_at_timestamp'],
					'comments'    => $image['node']['edge_media_to_comment']['count'],
					'likes'       => $image['node']['edge_liked_by']['count'],
					'thumbnail'   => preg_replace( '/^https?\:/i', '', $image['node']['thumbnail_resources'][0]['src'] ),
					'small'       => preg_replace( '/^https?\:/i', '', $image['node']['thumbnail_resources'][2]['src'] ),
					'large'       => preg_replace( '/^https?\:/i', '', $image['node']['thumbnail_resources'][4]['src'] ),
					'original'    => preg_replace( '/^https?\:/i', '', $image['node']['display_url'] ),
					'type'        => $type,
				);
			} // End foreach().

			// do not set an empty transient - should help catch private or empty accounts.
			if ( ! empty( $instagram ) ) {
				$instagram = base64_encode( serialize( $instagram ) );
				set_transient( 'insta-a10-' . $transient_prefix . '-' . sanitize_title_with_dashes( $yog_username ), $instagram, apply_filters( 'null_instagram_cache_time', HOUR_IN_SECONDS * 2 ) );
			}
		}

		if ( ! empty( $instagram ) ) {

			return unserialize( base64_decode( $instagram ) );

		} else {

			return new WP_Error( 'no_images', esc_html__( 'Instagram did not return any images.', 'flipmart' ) );

		}
	}
}

add_action('widgets_init', 'yog_instagram_feeds_load_widgets');

function yog_instagram_feeds_load_widgets() {
    register_widget('Yog_Instagram_Feeds_Widget');
}
?>