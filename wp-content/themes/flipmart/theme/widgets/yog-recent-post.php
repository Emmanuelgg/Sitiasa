<?php
/**
 * Theme Widget ( Recent Posts )
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
 
class Yog_Recent_Post_Widget extends WP_Widget {

    function __construct() {

        $yog_widget_ops = array( 'classname' => 'recent-post', 'description' => esc_html__('Your site most recent Posts..', 'flipmart' ) );

        $yog_control_ops = array( 'id_base' => 'recent-posts-widget' );

        parent::__construct( 'recent-posts-widget', esc_html__( 'Flipmart: Recent Post', 'flipmart' ), $yog_widget_ops, $yog_control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $yog_title   = apply_filters('widget_title', $instance['yog-title']);
        $yog_number  = $instance['yog-number'];
        $yog_cat     = $instance['yog-cat'];
        
        //Default Post Arguments
        $yog_args = array(
            'post_type'      => 'post',
            'posts_per_page' => $yog_number
        );
        
        //Category Filter.
        if ( ! empty( $yog_cat ) ) {

            $yog_args['tax_query']['relation'] = 'OR';
            $yog_args['tax_query'][] = array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $yog_cat,
            );
        }
        //Query.
        $yog_posts = new WP_Query($yog_args);

        if ($yog_posts->have_posts()) :

            echo $before_widget;
            
        ?>
            <div class="popular-posts widget widget__sidebar">
                <?php 
                    //Widget Title.
                    if ($yog_title) {
                        echo $before_title . $yog_title . $after_title;
                    }
                ?>
                <div class="widget-content">
                    <ul class="posts-list unstyled clearfix">
                       <?php 
                            //Post Loop.
                            while ($yog_posts->have_posts()) {
                                $yog_posts->the_post();
                                ?>
                                <li>
                                    <figure class="featured-thumb"> 
                                        <a href="<?php the_permalink(); ?>"> 
                                            <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?> 
                                        </a> 
                                    </figure>
                                    <div class="content-info">
                                        <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                                        <p class="post-meta"><i class="icon-calendar"></i>
                                          <time class="entry-date"><?php echo get_the_date( 'M d, Y' ); ?></time>
                                        .</p>
                                    </div>
                                </li>
                                <?php
                            }
                       ?>    
                    </ul>
                </div>
            </div>
        <?php
            echo $after_widget;
        
        endif;
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog-title']   = strip_tags( $new_instance['yog-title'] );
        $instance['yog-number']  = $new_instance['yog-number'];
        $instance['yog-cat']     = $new_instance['yog-cat'];

        return $instance;
    }

    function form($instance) {
        $defaults = array('yog-title' => esc_html__('Recent Posts', 'flipmart'), 'yog-number' => 3,  'yog-cat' => '');
        $instance = wp_parse_args((array) $instance, $defaults); 
        $taxonomies = get_terms( 'category' );
        ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog-title') ); ?>">
                <strong><?php echo esc_html__('Title', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog-title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog-title') ); ?>" value="<?php if (isset($instance['yog-title'])) echo esc_attr( $instance['yog-title'] ); ?>" />
            </label>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog-number') ); ?>">
                <strong><?php echo esc_html__('Number of posts to show', 'flipmart') ?>:</strong>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog-number') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog-number') ); ?>" value="<?php if (isset($instance['yog-number'])) echo esc_attr( $instance['yog-number'] ); ?>" />
            </label>
        </p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog-cat') ); ?>">
                <strong><?php echo esc_html__('Category', 'flipmart') ?>:</strong>
                <select id="<?php echo esc_attr( $this->get_field_id('yog-cat') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog-cat') ); ?>" class="widefat" >
                    <option value="0"><?php _e( '&mdash; Select &mdash;', 'flipmart' ); ?></option>
                    <?php 
                        foreach ( $taxonomies as $taxonomy ) {
            				printf(
            					'<option value="%s"%s>%s</option>',
            					esc_attr( $taxonomy->slug ),
            					selected( $taxonomy->slug, $instance['yog-cat'], false ),
            					$taxonomy->name
            				);
            			}
                    ?>
                </select>
            </label>
        </p>
        
    <?php
    }
}

add_action('widgets_init', 'yog_recent_post_load_widgets');

function yog_recent_post_load_widgets() {
    register_widget('Yog_Recent_Post_Widget');
}
?>