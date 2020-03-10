<?php
/**
 * Theme Widget ( Cagetory Accordion )
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
class Yog_Category_Accordion_Widget extends WP_Widget {

    function __construct() {

        $yog_widget_ops  = array( 'classname' => 'category-accordion', 'description' => esc_html__('Display categry in accordion.', 'flipmart' ) );

        $yog_control_ops = array( 'id_base' => 'category-accordion-widget' );

        parent::__construct( 'category-accordion-widget', esc_html__( 'Flipmart: Category Accordion', 'flipmart' ), $yog_widget_ops, $yog_control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        
        $yog_title   = apply_filters('widget_title', $instance['yog_title']);
        $yog_cat     = $instance['yog_cat'];
        
        echo $before_widget;
        
            //Widget Title.
            if ($yog_title) {
                echo $before_title . $yog_title . $after_title;
            }
        ?>
            <div class="sidebar-widget-body m-t-10">
        		<div class="accordion">
        	    	<div class="accordion-group">
                        <?php 
        				    $args = array(
        						'show_option_all'    => '',
        						'orderby'            => 'name',
        						'order'              => 'ASC',
        						'style'              => 'list',
        						'show_count'         => 0,
        						'hide_empty'         => 1,
        						'exclude'            => '',
        						'exclude_tree'       => '',
        						'include'            => '',
        						'hierarchical'       => 1,
        						'title_li'           => '',
        						'show_option_none'   => '',
        						'number'             => null,
        						'echo'               => 1,
        						'depth'              => 0,
        						'current_category'   => 0,
        						'pad_counts'         => 0,
        						'taxonomy'           => $yog_cat,
        						'walker'             => new yog_Category_Walker,
        				    );
                            
                            ob_start();
				            
                                wp_list_categories( $args ); 
            				    $yog_output = ob_get_contents();
                    		
                            ob_end_clean();
		                    
                            echo $yog_output;
                        ?>
                    </div>
                </div>
            </div>
        <?php
        
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog_title']   = strip_tags( $new_instance['yog_title'] );
        $instance['yog_cat']     = $new_instance['yog_cat'];

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
            <label for="<?php echo esc_attr( $this->get_field_id('yog_cat') ); ?>">
                <strong><?php echo esc_html__('Category', 'flipmart') ?>:</strong>
                <select id="<?php echo esc_attr( $this->get_field_id('yog_cat') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_cat') ); ?>" class="widefat" >
                    <option value="category" <?php echo selected( 'category', $instance['yog_cat'], false ); ?>><?php echo esc_html__( 'Post Category', 'flipmart' ); ?></option>
                    <option value="product_cat" <?php echo selected( 'product_cat', $instance['yog_cat'], false ); ?>><?php echo esc_html__( 'Product Category', 'flipmart' ); ?></option>
                </select>
            </label>
        </p>
        
    <?php
    }
}

add_action('widgets_init', 'yog_category_accordion_widget');

function yog_category_accordion_widget() {
    register_widget('Yog_Category_Accordion_Widget');
}
?>