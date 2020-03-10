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
        
        echo $before_widget;
        
        //Widget Title.
        if ($yog_title) {
            echo $before_title . $yog_title . $after_title;
        }

        if ($yog_posts->have_posts()) :
                
                if( 'engineer' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
                    
                    //Post Loop.
                    while ($yog_posts->have_posts()) {
                        $yog_posts->the_post();
                    ?>
                    <a class="item">
                        <div class="blog-info">
                           <ul>
                              <li class="date"><?php echo get_the_date( 'd F, Y' ); ?></li>
                              <li class="icon-comments"><span class="fa fa-commenting"></span> <?php echo get_comments_number(); ?></li>
                           </ul>
                        </div>
                        <h6><?php the_title(); ?></h6>
                     </a>
                    <?php
                    }
                    
                elseif( 'kidswear' == yog_helper()->yog_get_layout( 'modify' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):  
                    
                    echo '<ul>';
                    
                        //Post Loop.
                        while ($yog_posts->have_posts()) {
                            $yog_posts->the_post();
                        ?>
                        <li>
                          <p><?php the_title(); ?></p>
                          <a href="<?php the_permalink(); ?>">
                            <i class="fa fa-calendar"></i> <?php echo get_the_date( 'd F, Y' ); ?> <span>i</span> 
                            <?php
                                //Comments
                                $yog_num_comments = get_comments_number(); 
                                if( $yog_num_comments != 1 ){
                                    printf( '<i class="fa fa-comments"></i> %s %s',  number_format_i18n( $yog_num_comments ), esc_html( yog_get_translation( 'tr-blog-comments' ) ) );
                                }else{
                                    printf( '<i class="fa fa-comments"></i> %s %s',  number_format_i18n( $yog_num_comments ), esc_html( yog_get_translation( 'tr-blog-comment' ) ) );
                                }
                            ?>
                          </a>
                       </li>
                        <?php
                        }
                      
                    echo '</ul>';
                
                else:
                ?>
                <ul class="book-shoping-guide book-popular">
                   <?php 
                        //Post Loop.
                        while ($yog_posts->have_posts()) {
                            $yog_posts->the_post();
                            ?>
                            <li>
                                <div class="book-footer-left">
                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-responsive' ) ); ?></a>
                                </div>
                                <div class="book-footer-right">
                                	<?php 
                                        //Title
                                        the_title( '<a href="'. get_permalink() .'">', '</a>' );
                                        
                                        //Comments
                                        $yog_num_comments = get_comments_number(); 
                                        if( $yog_num_comments != 1 ){
                                            printf( '<p>%s %s</p>',  number_format_i18n( $yog_num_comments ), esc_html( yog_get_translation( 'tr-blog-comments' ) ) );
                                        }else{
                                            printf( '<p>%s %s</p>',  number_format_i18n( $yog_num_comments ), esc_html( yog_get_translation( 'tr-blog-comment' ) ) );
                                        }
                                    ?>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <?php
                        }
                   ?>    
                </ul>
                <?php
                endif;
                
            //Reset Query
            wp_reset_postdata();
        
        endif;
        
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog-title']   = strip_tags( $new_instance['yog-title'] );
        $instance['yog-number']  = $new_instance['yog-number'];
        $instance['yog-cat']     = $new_instance['yog-cat'];

        return $instance;
    }

    function form($instance) {
        $defaults = array('yog-style' => 'style-1', 'yog-number' => 3,  'yog-cat' => '');
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