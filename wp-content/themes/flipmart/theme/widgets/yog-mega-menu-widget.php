<?php
/**
 * Theme Widget ( Mega Menu )
 *
 * @package WordPress
 * @subpackage Flipmart
 * @since Flipmart 2.7
 */
class Yog_Mega_Menu_Widget extends WP_Widget {

    function __construct() {

        $yog_widget_ops  = array( 'classname' => 'mega-menu', 'description' => esc_html__('Add mega menu.', 'flipmart' ) );

        $yog_control_ops = array( 'id_base' => 'mega-menu-widget' );

        parent::__construct( 'mega-menu-widget', esc_html__( 'Flipmart: Mega Menu', 'flipmart' ), $yog_widget_ops, $yog_control_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        
        $yog_title   = apply_filters('widget_title', $instance['yog_title']);
        $yog_menu_id = $instance['yog_menu_id'];
        
        if( yog_helper()->yog_check_layout( 'furniture' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ):
            
            echo '<div class="furniture-category">';
        
                //Title
                if ( $yog_title ) {
                    echo '<h3>'. esc_html( $yog_title ) .'</h3>';
                }
                
                //Mega Menu
                if( !empty( $yog_menu_id ) ){
                    //Menu Arguments    
                    wp_nav_menu( array(
                        'container'       => false,
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'menu'            => $yog_menu_id,
                        'walker'          => new Yog_Walker_Nav_Menu_Horizontal
                    ) );   
                }
            
            echo '</div>';
        
        else:
            
            echo '<div class="side-menu outer-bottom-xs">';
        
                //Title
                if ( $yog_title ) {
                    echo '<div class="head"><i class="icon fa fa-align-justify fa-fw"></i> '. esc_html( $yog_title ) .'</div>';
                }
                
                //Mega Menu
                if( !empty( $yog_menu_id ) ){
                    //Menu Arguments    
                    wp_nav_menu( array(
                        'container'       => 'nav',
                        'container_class' => 'yamm megamenu-horizontal',
                        'menu_class'      => 'nav',
                        'menu_id'         => '',
                        'menu'            => $yog_menu_id,
                        'walker'          => new Yog_Walker_Nav_Menu_Horizontal
                    ) );   
                }
            
            echo '</div>';
        
        endif;
        
        
        
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['yog_title']      = strip_tags( $new_instance['yog_title'] );
        $instance['yog_menu_id']    = $new_instance['yog_menu_id'];

        return $instance;
    }

    function form($instance) {
        
        //Menu
        $yog_locations = get_registered_nav_menus();
        $yog_menus     = wp_get_nav_menus();
                        
        ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('yog_title') ); ?>">
                <strong><?php echo esc_html__('Title', 'flipmart') ?>:</strong>
                <input type="editor" class="widefat" id="<?php echo esc_attr( $this->get_field_id('yog_title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_title') ); ?>" value="<?php if ( isset( $instance['yog_title'] ) ) echo esc_attr( $instance['yog_title'] ); ?>" />
            </label>
        </p>
        
        <?php if ( isset( $yog_locations ) && count( $yog_locations ) > 0 && isset( $yog_menus ) && count( $yog_menus ) > 0 ) { ?>
        
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('yog_menu_id') ); ?>">
                    <strong><?php echo esc_html__('Category', 'flipmart') ?>:</strong>
                    <select id="<?php echo esc_attr( $this->get_field_id('yog_menu_id') ); ?>" name="<?php echo esc_attr( $this->get_field_name('yog_menu_id') ); ?>" class="widefat" >
                        <?php 
                            foreach ( $yog_menus as $yog_menu ) {
                                printf(
                					'<option value="%s"%s>%s</option>',
                					esc_attr( $yog_menu->term_id ),
                					selected( $yog_menu->term_id, $instance['yog_menu_id'], false ),
                					$yog_menu->name
                				);
                            }
                        ?>
                    </select>
                </label>
            </p>
        
    <?php  }
    }
}

add_action('widgets_init', 'yog_mega_menu_load_widget');

function yog_mega_menu_load_widget() {
    register_widget('Yog_Mega_Menu_Widget');
}
?>