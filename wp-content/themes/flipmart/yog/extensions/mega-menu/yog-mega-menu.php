<?php
/**
* Theme Framework
* The Yog_Theme_Options initiate the theme option machine.
*/

if ( ! defined( 'ABSPATH' ) ){
  exit;  
} 

// Load front-end menu walker
require_once( get_template_directory().'/yog/extensions/mega-menu/yog-mega-menu-walker.php' );


/** --------------------------------------------------------------------------
 * Custom Mega Menu - Fields & Edit Function
 * --------------------------------------------------------------------------- */
class Yog_Mega_Menu {

    /* ---------------------------------------------------------------------------
	 * Custom Fields - Add
	 * --------------------------------------------------------------------------- */
    function setup_nav_menu_item( $menu_item ) {
        
        $menu_item->isMega = get_post_meta( $menu_item->ID, '_menu_item_isMega', true );
        $menu_item->is_mega_column = get_post_meta( $menu_item->ID, '_menu_item_is_mega_column', true );
        $menu_item->mega_columns = get_post_meta( $menu_item->ID, '_menu_item_mega_columns', true );
        $menu_item->icon = get_post_meta( $menu_item->ID, '_menu_item_icon', true );
        $menu_item->mega_type = get_post_meta( $menu_item->ID, '_menu_item_mega_type', true );
        $menu_item->banner = get_post_meta( $menu_item->ID, '_menu_item_banner', true );
        $menu_item->banner_appear = get_post_meta( $menu_item->ID, '_menu_item_banner_appear', true );
        $menu_item->banner_hover = get_post_meta( $menu_item->ID, '_menu_item_banner_hover', true );
        $menu_item->label_type = get_post_meta( $menu_item->ID, '_menu_item_label_type', true );
        
        return $menu_item;
    }
    
    /* ---------------------------------------------------------------------------
	 * Custom Fields - Save
	 * --------------------------------------------------------------------------- */
	function update_nav_menu_item( $menu_id, $menu_item_db_id, $menu_item_data ) {
		
		// mega menu
		if ( ! isset( $_REQUEST['menu-item-isMega'][$menu_item_db_id]) ) {
			$_REQUEST['menu-item-isMega'][$menu_item_db_id] = '';
		}
		$megamenu = $_REQUEST['menu-item-isMega'][$menu_item_db_id] ? 1 : 0;
		update_post_meta( $menu_item_db_id, '_menu_item_isMega', $megamenu );
        

        // Check if element is properly sent
        if ( isset( $_REQUEST['menu-item-mega-columns'] ) && is_array( $_REQUEST['menu-item-mega-columns'] ) ) {
            $columns = isset( $_REQUEST['menu-item-mega-columns'][$menu_item_db_id] ) ? $_REQUEST['menu-item-mega-columns'][$menu_item_db_id] : 0;
            update_post_meta( $menu_item_db_id, '_menu_item_mega_columns', $columns );
        }else {
            delete_post_meta( $menu_item_db_id, '_menu_item_mega_columns' );
        }
        
        // is mega menu
		if ( ! isset( $_REQUEST['menu-item-is-mega-column'][$menu_item_db_id]) ) {
			$_REQUEST['menu-item-is-mega-column'][$menu_item_db_id] = '';
		}
		$megamenu = $_REQUEST['menu-item-is-mega-column'][$menu_item_db_id] ? 1 : 0;
		update_post_meta( $menu_item_db_id, '_menu_item_is_mega_column', $megamenu );
        
        // Check if element is properly sent
        if ( isset( $_REQUEST['menu-item-icon'] ) && is_array( $_REQUEST['menu-item-icon'] ) ) {
            $icon = isset( $_REQUEST['menu-item-icon'][$menu_item_db_id] ) ? $_REQUEST['menu-item-icon'][$menu_item_db_id] : 0;
            update_post_meta( $menu_item_db_id, '_menu_item_icon', $icon );
        }else {
            delete_post_meta( $menu_item_db_id, '_menu_item_icon' );
        }
        
        // banner
		if ( isset( $_REQUEST['menu-item-banner'][$menu_item_db_id]) ) {
			update_post_meta( $menu_item_db_id, '_menu_item_banner', $_REQUEST['menu-item-banner'][$menu_item_db_id] );
		}
        
        // banner
		if ( isset( $_REQUEST['menu-item-banner-appear'][$menu_item_db_id]) ) {
			update_post_meta( $menu_item_db_id, '_menu_item_banner_appear', $_REQUEST['menu-item-banner-appear'][$menu_item_db_id] );
		}
        
        // banner
		if ( isset( $_REQUEST['menu-item-banner-hover'][$menu_item_db_id]) ) {
			update_post_meta( $menu_item_db_id, '_menu_item_banner_hover', $_REQUEST['menu-item-banner-hover'][$menu_item_db_id] );
		}
        
        // Check if element is properly sent
        if ( isset( $_REQUEST['menu-item-label-type'] ) && is_array( $_REQUEST['menu-item-label-type'] ) ) {
            $label_type = isset( $_REQUEST['menu-item-label-type'][$menu_item_db_id] ) ? $_REQUEST['menu-item-label-type'][$menu_item_db_id] : 0;
            update_post_meta( $menu_item_db_id, '_menu_item_label_type', $label_type );
        }else {
            delete_post_meta( $menu_item_db_id, '_menu_item_label_type' );
        }
        
	}
    
    /* ---------------------------------------------------------------------------
	 * Custom Backend Walker - Edit
	 * --------------------------------------------------------------------------- */
	function edit_nav_menu_walker($walker,$menu_id) {
		return 'Yog_Walker_Nav_Menu_Edit';
	}
    
    function __construct() {
        
        // Custom Fields - Add
		add_filter( 'wp_setup_nav_menu_item',  array( $this, 'setup_nav_menu_item' ) );
	
		// Custom Fields - Save
		add_action( 'wp_update_nav_menu_item', array( $this, 'update_nav_menu_item'), 100, 3 );
	
		// Custom Walker - Edit
		add_filter( 'wp_edit_nav_menu_walker', array( $this, 'edit_nav_menu_walker'), 100, 2 );

    } // end constructor

}

new Yog_Mega_Menu();

/**
 * Create HTML list of nav menu input items.
 * Based on Walker_Nav_Menu_Edit class.
 */
class Yog_Walker_Nav_Menu_Edit extends Walker_Nav_Menu  {
    /**
	 * Starts the list before the elements are added.
	 *
	 * @see Walker_Nav_Menu::start_lvl()
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ) {}

	/**
	 * Ends the list of after the elements are added.
	 *
	 * @see Walker_Nav_Menu::end_lvl()
	 */
	function end_lvl( &$output, $depth = 0, $args = array() ) {}

	/**
	 * Start the element output.
	 *
	 * @see Walker_Nav_Menu::start_el()
	 */
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $_wp_nav_menu_max_depth;
		$_wp_nav_menu_max_depth = $depth > $_wp_nav_menu_max_depth ? $depth : $_wp_nav_menu_max_depth;
        
        ob_start();
		$item_id = esc_attr( $item->ID );
		$removed_args = array(
			'action',
			'customlink-tab',
			'edit-menu-item',
			'menu-item',
			'page-tab',
			'_wpnonce',
		);
        
        $original_title = '';
		if ( 'taxonomy' == $item->type ) {
			$original_title = get_term_field( 'name', $item->object_id, $item->object, 'raw' );
			if ( is_wp_error( $original_title ) )
				$original_title = false;
		} elseif ( 'post_type' == $item->type ) {
			$original_object = get_post( $item->object_id );
			$original_title = get_the_title( $original_object->ID );
		}

		$classes = array(
			'menu-item menu-item-depth-' . $depth,
			'menu-item-' . esc_attr( $item->object ),
			'menu-item-edit-' . ( ( isset( $_GET['edit-menu-item'] ) && $item_id == $_GET['edit-menu-item'] ) ? 'active' : 'inactive'),
		);
        
        $title = $item->title;

    	if ( ! empty( $item->_invalid ) ) {
    		$classes[] = 'menu-item-invalid';
    		/* translators: %s: title of menu item which is invalid */
    		$title = sprintf( __( '%s (Invalid)', 'flipmart' ), $item->title );
    	} elseif ( isset( $item->post_status ) && 'draft' == $item->post_status ) {
    		$classes[] = 'pending';
    		/* translators: %s: title of menu item in draft status */
    		$title = sprintf( __('%s (Pending)', 'flipmart'), $item->title );
    	}
    
    	$title = ( ! isset( $item->label ) || '' == $item->label ) ? $title : $item->label;
    
    	$submenu_text = '';
    	if ( 0 == $depth )
    		$submenu_text = 'style="display: none;"';
	    ?>
	    <li id="menu-item-<?php echo esc_attr( $item_id ); ?>" class="<?php echo implode(' ', $classes ); ?>">
	        <dl class="menu-item-bar">
	            <dt class="menu-item-handle">
                    <span class="item-title"><span class="menu-item-title"><?php echo esc_html( $title ); ?></span> <span class="is-submenu" <?php echo $submenu_text; ?>><?php  echo esc_html__( 'sub item', 'flipmart' ); ?></span></span>
	                <span class="item-controls">
	                    <span class="item-type"><?php echo esc_html( $item->type_label ); ?></span>
	                    <span class="item-order hide-if-js">
	                        <a href="<?php
	                            echo wp_nonce_url(
	                                add_query_arg(
	                                    array(
	                                        'action' => 'move-up-menu-item',
	                                        'menu-item' => $item_id,
	                                    ),
	                                    remove_query_arg($removed_args, admin_url( 'nav-menus.php' ) )
	                                ),
	                                'move-menu_item'
	                            );
	                        ?>" class="item-move-up"><abbr title="<?php esc_attr_e('Move up', 'flipmart'); ?>">&#8593;</abbr></a>
	                        |
	                        <a href="<?php
	                            echo wp_nonce_url(
	                                add_query_arg(
	                                    array(
	                                        'action' => 'move-down-menu-item',
	                                        'menu-item' => $item_id,
	                                    ),
	                                    remove_query_arg($removed_args, admin_url( 'nav-menus.php' ) )
	                                ),
	                                'move-menu_item'
	                            );
	                        ?>" class="item-move-down"><abbr title="<?php esc_attr_e('Move down', 'flipmart'); ?>">&#8595;</abbr></a>
	                    </span>
	                    <a class="item-edit" id="edit-<?php echo $item_id; ?>" title="<?php esc_attr_e('Edit Menu Item', 'flipmart'); ?>" href="<?php
	                        echo ( isset( $_GET['edit-menu-item'] ) && $item_id == $_GET['edit-menu-item'] ) ? admin_url( 'nav-menus.php' ) : add_query_arg( 'edit-menu-item', $item_id, remove_query_arg( $removed_args, admin_url( 'nav-menus.php#menu-item-settings-' . $item_id ) ) );
	                    ?>"><?php  echo esc_html__( 'Edit Menu Item', 'flipmart' ); ?></a>
	                </span>
	            </dt>
	        </dl>

	        <div class="menu-item-settings" id="menu-item-settings-<?php echo esc_attr( $item_id ); ?>">
	            <?php if( 'custom' == $item->type ) : ?>
    				<p class="field-url description description-wide">
    					<label for="edit-menu-item-url-<?php echo esc_attr( $item_id ); ?>">
    						<?php  echo esc_html__( 'URL', 'flipmart' ); ?><br />
    						<input type="text" id="edit-menu-item-url-<?php echo esc_attr( $item_id ); ?>" class="widefat code edit-menu-item-url" name="menu-item-url[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->url ); ?>" />
    					</label>
    				</p>
    			<?php endif; ?>
	            <p class="description description-thin">
    				<label for="edit-menu-item-title-<?php echo esc_attr( $item_id ); ?>">
    					<?php  echo esc_html__( 'Navigation Label', 'flipmart' ); ?><br />
    					<input type="text" id="edit-menu-item-title-<?php echo esc_attr( $item_id ); ?>" class="widefat edit-menu-item-title" name="menu-item-title[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->title ); ?>" />
    				</label>
    			</p>
    			<p class="description description-thin">
    				<label for="edit-menu-item-attr-title-<?php echo esc_attr( $item_id ); ?>">
    					<?php  echo esc_html__( 'Title Attribute', 'flipmart' ); ?><br />
    					<input type="text" id="edit-menu-item-attr-title-<?php echo esc_attr( $item_id ); ?>" class="widefat edit-menu-item-attr-title" name="menu-item-attr-title[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->post_excerpt ); ?>" />
    				</label>
    			</p>
                <p class="field-link-target description">
    				<label for="edit-menu-item-target-<?php echo esc_attr( $item_id ); ?>">
    					<input type="checkbox" id="edit-menu-item-target-<?php echo esc_attr( $item_id ); ?>" value="_blank" name="menu-item-target[<?php echo $item_id; ?>]"<?php checked( $item->target, '_blank' ); ?> />
    					<?php  echo esc_html__( 'Open link in a new window/tab', 'flipmart' ); ?>
    				</label>
    			</p>
	            <p class="field-css-classes description description-thin">
	                <label for="edit-menu-item-classes-<?php echo esc_attr( $item_id ); ?>">
	                    <?php  echo esc_html__( 'CSS Classes (optional)', 'flipmart' ); ?><br />
	                    <input type="text" id="edit-menu-item-classes-<?php echo esc_attr( $item_id ); ?>" class="widefat code edit-menu-item-classes" name="menu-item-classes[<?php echo $item_id; ?>]" value="<?php echo esc_attr( implode(' ', $item->classes ) ); ?>" />
	                </label>
	            </p>
	            <p class="field-xfn description description-thin">
	                <label for="edit-menu-item-xfn-<?php echo esc_attr( $item_id ); ?>">
	                    <?php  echo esc_html__( 'Link Relationship (XFN)', 'flipmart' ); ?><br />
	                    <input type="text" id="edit-menu-item-xfn-<?php echo esc_attr( $item_id ); ?>" class="widefat code edit-menu-item-xfn" name="menu-item-xfn[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->xfn ); ?>" />
	                </label>
	            </p>
	            <p class="field-description description description-wide">
	                <label for="edit-menu-item-description-<?php echo esc_attr( $item_id ); ?>">
	                    <?php  echo esc_html__( 'Description', 'flipmart' ); ?><br />
	                    <textarea id="edit-menu-item-description-<?php echo esc_attr( $item_id ); ?>" class="widefat edit-menu-item-description" rows="3" cols="20" name="menu-item-description[<?php echo $item_id; ?>]"><?php echo esc_html( $item->description ); // textarea_escaped ?></textarea>
	                    <span class="description"><?php  echo esc_html__('The description will be displayed in the menu if the current theme supports it.', 'flipmart'); ?></span>
	                </label>
	            </p>
	            
                <?php
	            /* New fields insertion starts here */
                if ( 0 == $depth ):
                $value = get_post_meta( $item_id, '_menu_item_isMega', true);
                if( $value != 0 ) $value = "checked='checked'";
	            ?>
                <p class="field-custom description-thin">
    				<label for="edit-menu-item-isMega-<?php echo esc_attr( $item_id ); ?>">
    					<?php  echo esc_html__( 'Mega Menu', 'flipmart' ); ?><br />
                        <input type="checkbox" id="edit-menu-item-isMega-<?php echo esc_attr( $item_id ); ?>" value="1" name="menu-item-isMega[<?php echo $item_id; ?>]" <?php echo $value; ?> />
    					<?php  echo esc_html__( 'Activate Mega Menu', 'flipmart' ); ?>
    				</label>
    			</p>
                <p class="description description-thin">
    				<label for="edit-menu-item-label-type-<?php echo esc_attr( $item_id ); ?>">
                        <?php  echo esc_html__( 'Label Type', 'flipmart' );  ?>
                        <select id="edit-menu-item-label-type-<?php echo esc_attr( $item_id ); ?>" name="menu-item-label-type[<?php echo $item_id; ?>]">
                            <option value=""><?php  echo esc_html__( 'Select Label Type', 'flipmart' );  ?></option>
                            <option value="hot-menu" <?php selected( $item->label_type, 'hot-menu' ); ?>><?php echo esc_html__( 'Hot Menu', 'flipmart' ); ?></option>
                            <option value="new-menu" <?php selected( $item->label_type, 'new-menu' ); ?>><?php echo esc_html__( 'New Menu', 'flipmart' ); ?></option>
                        </select>
    				</label>
    			</p>
	            <?php
                endif;
                
                if( 1 == $depth ):
                ?>
                <p class="description description-thin">
    				<label for="edit-menu-item-mega-columns-<?php echo esc_attr( $item_id ); ?>">
                        <?php  echo esc_html__( 'Mega Column', 'flipmart' );  ?>
                        <select id="edit-menu-item-mega-columns-<?php echo esc_attr( $item_id ); ?>" name="menu-item-mega-columns[<?php echo $item_id; ?>]">
                            <option value=""><?php  echo esc_html__( 'Select Column', 'flipmart' );  ?></option>
                            <?php 
                                $columns = yog_get_menu_columns();
                                foreach( $columns as $key => $value ){
                                    echo '<option value="'. $key .'" '. selected( $item->mega_columns, $key ) .'>'. $value .'</option> ';
                                }
                            ?>
                        </select>
    				</label>
    			</p>
                <?php
                $is_column = get_post_meta( $item_id, '_menu_item_is_mega_column', true);
                if( $is_column != 0 ) $is_column = "checked='checked'";
                ?>
                <p class="field-custom description-thin">
    				<label for="edit-menu-item-is-mega-column-<?php echo esc_attr( $item_id ); ?>">
                        <input type="checkbox" id="edit-menu-item-is-mega-column-<?php echo esc_attr( $item_id ); ?>" value="1" name="menu-item-is-mega-column[<?php echo $item_id; ?>]" <?php echo $is_column; ?> />
    					<?php  echo esc_html__( 'Is Mega Column', 'flipmart' ); ?>
    				</label>
    			</p>
                <?php
                endif;
                ?>
                <p class="field-custom description-thin">
    				<label for="edit-menu-item-icon-<?php echo esc_attr( $item_id ); ?>">
    					<?php  echo esc_html__( 'Select Menu Icon', 'flipmart' );  ?>
                        <select id="edit-menu-item-icon-<?php echo esc_attr( $item_id ); ?>" name="menu-item-icon[<?php echo $item_id; ?>]">
                            <option value=""><?php  echo esc_html__( 'Select Icon', 'flipmart' );  ?></option>
                            <?php 
                                $icons = yog_get_options_fontawesome_icons();
                                foreach( $icons as $key => $value ){
                                    echo '<option value="'. $key .'" '. selected( $item->icon, $key ) .'>'. $value .'</option> ';
                                }
                            ?>
                        </select>
    				</label>
    			</p>
                <?php if( 0 == $depth && yog_helper()->yog_check_layout( 'furniture' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ): ?>
                    <p class="field-custom description-thin">
        				<label for="edit-menu-item-banner-appear-<?php echo esc_attr( $item_id ); ?>">
        					<?php  echo esc_html__( 'Icon Appear Url', 'flipmart' ); ?><br />
                            <input type="text" id="edit-menu-item-banner-appear-<?php echo esc_attr( $item_id ); ?>" value="<?php echo esc_attr( $item->banner_appear ); ?>" name="menu-item-banner-appear[<?php echo $item_id; ?>]" class="widefat code edit-menu-item-url"/>
        				</label>
        			</p>
                    <p class="field-custom description-thin">
        				<label for="edit-menu-item-banner-hover-<?php echo esc_attr( $item_id ); ?>">
        					<?php  echo esc_html__( 'Icon Hover Url', 'flipmart' ); ?><br />
                            <input type="text" id="edit-menu-item-banner-hover-<?php echo esc_attr( $item_id ); ?>" value="<?php echo esc_attr( $item->banner_hover ); ?>" name="menu-item-banner-hover[<?php echo $item_id; ?>]" class="widefat code edit-menu-item-url"/>
        				</label>
        			</p>
                <?php
                endif;
                if( 2 == $depth ):
                ?>
                <p class="field-custom description-thin">
    				<label for="edit-menu-item-banner-<?php echo esc_attr( $item_id ); ?>">
    					<?php  echo esc_html__( 'Banner Image Url', 'flipmart' ); ?><br />
                        <input type="text" id="edit-menu-item-banner-<?php echo esc_attr( $item_id ); ?>" value="<?php echo esc_attr( $item->banner ); ?>" name="menu-item-banner[<?php echo $item_id; ?>]" class="widefat code edit-menu-item-url"/>
    				</label>
    			</p>
                <?php endif; ?>
	            <p class="field-move hide-if-no-js description description-wide">
    				<label>
    					<span><?php  echo esc_html__( 'Move', 'flipmart' ); ?></span>
    					<a href="#" class="menus-move-up"><?php  echo esc_html__( 'Up one', 'flipmart' ); ?></a>
    					<a href="#" class="menus-move-down"><?php  echo esc_html__( 'Down one', 'flipmart' ); ?></a>
    					<a href="#" class="menus-move-left"></a>
    					<a href="#" class="menus-move-right"></a>
    					<a href="#" class="menus-move-top"><?php  echo esc_html__( 'To the top', 'flipmart' ); ?></a>
    				</label>
    			</p>
                <div class="menu-item-actions description-wide submitbox">
	                <?php if( 'custom' != $item->type && $original_title !== false ) : ?>
	                    <p class="link-to-original">
	                        <?php printf( __('Original: %s', 'flipmart'), '<a href="' . esc_attr( $item->url ) . '">' . esc_html( $original_title ) . '</a>' ); ?>
	                    </p>
	                <?php endif; ?>
	                <a class="item-delete submitdelete deletion" id="delete-<?php echo esc_attr( $item_id ); ?>" href="<?php
	                echo wp_nonce_url(
	                    add_query_arg(
	                        array(
	                            'action' => 'delete-menu-item',
	                            'menu-item' => $item_id,
	                        ),
	                        remove_query_arg($removed_args, admin_url( 'nav-menus.php' ) )
	                    ),
	                    'delete-menu_item_' . $item_id    
	                ); ?>"><?php  echo esc_html__( 'Remove', 'flipmart' ); ?></a> <span class="meta-sep hide-if-no-js"> | </span> <a class="item-cancel submitcancel hide-if-no-js" id="cancel-<?php echo esc_attr( $item_id ); ?>" href="<?php echo esc_url( add_query_arg( array( 'edit-menu-item' => $item_id, 'cancel' => time() ), admin_url( 'nav-menus.php' ) ) );?>#menu-item-settings-<?php echo $item_id; ?>"><?php  echo esc_html__('Cancel', 'flipmart'); ?></a>
	            </div>

	            <input class="menu-item-data-db-id" type="hidden" name="menu-item-db-id[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item_id ); ?>" />
	            <input class="menu-item-data-object-id" type="hidden" name="menu-item-object-id[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->object_id ); ?>" />
	            <input class="menu-item-data-object" type="hidden" name="menu-item-object[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->object ); ?>" />
	            <input class="menu-item-data-parent-id" type="hidden" name="menu-item-parent-id[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->menu_item_parent ); ?>" />
	            <input class="menu-item-data-position" type="hidden" name="menu-item-position[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->menu_order ); ?>" />
	            <input class="menu-item-data-type" type="hidden" name="menu-item-type[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->type ); ?>" />
	        </div><!-- .menu-item-settings-->
	        <ul class="menu-item-transport"></ul>
	    <?php

	    $output .= ob_get_clean();
    }
}