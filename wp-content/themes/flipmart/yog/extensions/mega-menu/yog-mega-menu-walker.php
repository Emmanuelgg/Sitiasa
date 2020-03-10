<?php
/**
 * Menu Walker class
 */

class Yog_Walker_Nav_Menu extends Walker_Nav_Menu {

	private $has_megamenu = false;
    private $columns = 0;
    private $is_column = false;
    private $caret = ' <i class="fa fa-caret-down"></i>';
   
     /**
     * @see Walker::start_el()
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		// Check for Mega Menu
		if( 0 === $depth ) {
            $this->has_megamenu = $item->isMega;
        }
        if( 1 === $depth ) {
            $this->is_column = $item->is_mega_column;
            $this->columns = $item->mega_columns;
        }
        
        // Generate classes for <li>
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes = apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth );

        // MegaMenu
		if( $this->has_children && $depth == 0 ) {
        	if( $this->has_megamenu ) {
        	    $classes[] = 'dropdown mega-menu';  
        	}
        	else {
        		$classes[] = 'dropdown';
        	}
        }
        
        if( $item->attr_title == '[offer]' ){
            if( yog_helper()->yog_check_layout( 'finances' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
                $classes[] = 'free-consult';
            }else{
                $classes[] = 'navbar-right special-menu';
            }
        }
        
        if( $item->attr_title == '[logo]' ){
            $classes[] = 'b-logo';
        }
        
        $class_names = implode( ' ',  $classes );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		// Generate <a> attribute
		$atts = array();
		$atts['target'] = ! empty( $item->target )     ? esc_attr( $item->target )     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? esc_attr( $item->xfn )        : '';
		$atts['href']   = ! empty( $item->url )        ? esc_url( $item->url )        : '';
        
        if( $item->attr_title == '[login]' ){
            if (is_user_logged_in()) {
                $atts['href']  =  wp_logout_url( $item->url );
                $item->title   = esc_html__( 'Logout', 'flipmart' );
            } 
        }
        
        // If has dropdown or mega menu
		if(  $this->has_children ) {
            $atts['class'] = 'dropdown-toggle';
            $atts['data-toggle'] = 'dropdown';
            $atts['data-hover'] = 'dropdown';
        }
        
        // if is scroll.to = smooth scrolling
        if( yog_helper()->is_str_contain( "#HOME_URL#", $item->url ) ) {
            $atts['class'] .= ' scroll-menu';
        }
        
        // Icon
        $yog_icon = '';
        if( $item->icon && $depth == 0 ) {
        	$yog_icon = '<i class="fa '. esc_attr( $item->icon ) .'"></i> ';
        }

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
        $attributes = yog_helper()->html_attributes( $atts );        
        
        // html <a>
		$item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            
                 //Banner
                if( isset( $item->banner ) && !empty( $item->banner ) ){
                    
                    $item_output .= '<img class="img-responsive" src="'. esc_url( $item->banner ) .'" alt="'. esc_attr( $item->title ) .'">';
                    
                }elseif( $item->attr_title == '[logo]' ){
                    
                    $yog_logo = yog_helper()->get_option( 'opt-logo' );
                    $item_output .= '<img src="'. esc_url( $yog_logo['url'] ) .'" alt="'. esc_attr( $item->title ) .'">';
                    
                }else{
                    
                    if( $item->attr_title == '[login]' && is_user_logged_in() ){
                        $item_output .= $args->link_before . $yog_icon . esc_html__( 'Logout', 'flipmart' ) . $args->link_after;
                    }else{
                        $item_output .= $args->link_before . $yog_icon . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
                    }
                
    				// Output Span
    				if( $item->description ) {
    				    $class = ( isset( $item->label_type ) && !empty( $item->label_type ) )? $item->label_type : 'hot-menu';
    					$item_output .= ' <span class="menu-label '. esc_attr( $class ) .' hidden-xs">' . $item->description . '</span>';
    				}
                    
                }
                
                if( $this->has_children && 0 === $depth ){
                    $item_output .= $this->caret;
                }

            $item_output .= '</a>';
        $item_output .= $args->after;
        
		// Header of MegaMenu Column
		if( $depth === 1 && $this->has_megamenu && $this->is_column ) {
			$yog_class   = array();
            $yog_class[] = $this->columns;
            $yog_class[] = ( isset( $item->attr_title ) && !empty( $item->attr_title ) )? $item->attr_title : '';
            
			// Output <li> or <div>
			$output .= '<div class="' . esc_attr( join( ' ', $yog_class ) ). '"><div class="menu-widget">' . "\n";
			
            if( isset( $item->title ) && !empty( $item->title ) ){
                
                // Output header
                $output .= $indent . '<h2 class="title">' . apply_filters( 'the_title', $item->title, $item->ID );
                
                // Output Span
    			if( $item->description ) {
    				$output .= ' <span>' . $item->description . '</span>';
    			}
    			
    			$output .= '</h2>';
            }
            
		}else{
			// Output <li>
			$output .= $indent . '<li' . $class_names .'>';
		
			// Output <a>
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
   	}

 	/**
	 * @see Walker::end_el()
	 */
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
    	
    	if( $depth === 1 && $this->has_megamenu && $this->is_column ) {
    		$output .= "</div></div>\n";
   		}else {
   			$output .= "</li>\n";
   		}
   	}

   	/**
	 * @see Walker::start_lvl()
	 */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
    	$indent = str_repeat("\t", $depth);
    	
    	// Dropdown <ul> classes
        if( 0 == $depth && $this->has_megamenu ){
            $classes = 'dropdown-menu container';
        }elseif( 1 == $depth && $this->has_megamenu ){
            $classes = 'links';
        }else{
            $classes = 'dropdown-menu pages';
        }
        
        $output .= "\n$indent<ul class=\"$classes depth-$depth\" role='menu'>\n";    
        
		// Start of Mega Menu Container
		if( 0 === $depth &&  $this->has_megamenu ) {
			$output .= '<!-- mega-menu-container --><li><div class="yamm-content clearfix"><div class="row">' . "\n";
		}
        
        if( 0 === $depth && empty( $this->has_megamenu ) ) {
			$output .= '<li><div class="yamm-content clearfix"><div class="row"><div class="col-xs-12 col-menu"><ul class="links">' . "\n";
		}
   	}

   	/**
	 * @see Walker::end_lvl()
	 */
    function end_lvl( &$output, $depth = 0, $args = array() ) {
    	$indent = str_repeat("\t", $depth);
    	
    	// End of Mega Menu Container
    	if( 0 === $depth &&  $this->has_megamenu ) {
			$output .= '</div></div></li><!-- /mega-menu-container -->' . "\n";
		}
        
        if( 0 === $depth && empty( $this->has_megamenu ) ){
            $output .= '</ul></div></div></div>' . "\n";
        }
        
        $output .= "$indent</ul>\n";
   	}
}

/**
 * Menu Walker class
 */
class Primary_Walker_Nav_Menu extends Walker_Nav_Menu {
    
    private $caret = ' <span class="ico-bottom4"></span>';
    
    /**
     * @see Walker::start_el()
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        
        // Generate classes for <li>
        $classes = array();
        
        // Generate classes for <li>
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes = apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth );

        // Dropdown Class
		if( $this->has_children && $depth == 0 ) {
		  $classes[] = 'dropdown';
        }
        
        if( $this->has_children && $depth == 1 ) {
        	$classes[] = 'dropdown';
        }
        
        $class_names = implode( ' ',  $classes );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        
        $attributes = array();
		// Generate <a> attribute
		$attributes[]   = 'title="'. $item->attr_title .'"';
        $attributes[]   = 'rel="'. $item->xfn .'"';
		$attributes[]   = 'href="'. $item->url .'"';
        
        $args->link_after = '';
        $classes = array();
        // If has dropdown 
		if(  $this->has_children ) {
		    $classes[]   = 'dropdown-toggle';
            $attributes[]   = 'data-toggle="dropdown"';
            $attributes[]   = 'role="button"';
            $attributes[]   = 'aria-haspopup="true"';
            $attributes[]   = 'aria-expanded="false"';
        }
        
        $attributes[]   = 'class="'. join( ' ', $classes ) .'"';
        
        // html <a>
		$item_output = $args->before;
            $item_output .= '<a ' . join( ' ', $attributes ) . '>';
                
                $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				
				// Output Span
				if( $item->description ) {
					$item_output .= ' <span>' . $item->description . '</span>';
				}
                
                if( $this->has_children && yog_helper()->yog_check_layout( 'bw' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
                    $item_output .= $this->caret;
                }
                

            $item_output .= '</a>';
        $item_output .= $args->after;	
       
		
		// Output <li>
		$output .= $indent . '<li' . $class_names .'>';
	
		// Output <a>
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		
		
   	}

 	/**
	 * @see Walker::end_el()
	 */
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
    	
   			$output .= "</li>\n";
   	}

   	/**
	 * @see Walker::start_lvl()
	 */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
    	$indent = str_repeat("\t", $depth);
    	
    	// Dropdown <ul> classes
        if( 0 == $depth ){
            $classes = 'dropdown-menu';
        }else{
            $classes = 'dropdown-menu';
        }
		$output .= "\n$indent<ul class=". $classes ." role='menu'>\n";

   	}

   	/**
	 * @see Walker::end_lvl()
	 */
    function end_lvl( &$output, $depth = 0, $args = array() ) {
    	$indent = str_repeat("\t", $depth);
		
		$output .= "$indent</ul>\n";
   	}
}

/**
 * Menu Walker class
 */

class Yog_Walker_Nav_Menu_Horizontal extends Walker_Nav_Menu {

	private $has_megamenu = false;
    private $columns = 0;
    private $is_column = false;
   
     /**
     * @see Walker::start_el()
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		// Check for Mega Menu
		if( 0 === $depth ) {
            $this->has_megamenu = $item->isMega;
        }
        if( 1 === $depth ) {
            $this->is_column = $item->is_mega_column;
            $this->columns = $item->mega_columns;
        }
        
        // Generate classes for <li>
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes = apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth );

        // MegaMenu
		if( $this->has_children && $depth == 0 ) {
        	$classes[] = 'dropdown menu-item';
        }
        
        $class_names = implode( ' ',  $classes );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		// Generate <a> attribute
		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? esc_attr( $item->attr_title ) : '';
		$atts['target'] = ! empty( $item->target )     ? esc_attr( $item->target )     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? esc_attr( $item->xfn )        : '';
		$atts['href']   = ! empty( $item->url )        ? esc_url( $item->url )        : '';
        
        // If has dropdown or mega menu
		if(  $this->has_children ) {
            $atts['class'] = 'dropdown-toggle';
            $atts['data-toggle'] = 'dropdown';
            $atts['data-hover'] = 'dropdown';
        }
        
        // Icon
        $args->link_before = '';
        if( $item->icon && $depth == 0 ) {
        	$args->link_before .= '<i class="icon fa '. esc_attr( $item->icon ) .'"></i> ';
        }
        
        // Icon Appear
        $yog_appear = '';
        if( $item->banner_appear && $depth == 0 ) {
        	$args->link_before .= ' <span class="furniture-appear"><img src="'. esc_url( $item->banner_appear ) .'" alt="'. esc_attr( $item->title ) .'"></span> ';
        }
        
        // Icon Hover
        $yog_hover = '';
        if( $item->banner_hover && $depth == 0 ) {
        	$args->link_before .= ' <span class="furniture-hidden"><img src="'. esc_url( $item->banner_hover ) .'" alt="'. esc_attr( $item->title ) .'"></span> ';
        }
        

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
        $attributes = yog_helper()->html_attributes( $atts );        
        if( isset( $item->banner ) && !empty( $item->banner ) ){
            
            // html <a>
            $item_output = $args->before;
    		
                $item_output .= '<a' . $attributes . '>';
                
                     //Banner
                    if( isset( $item->banner ) && !empty( $item->banner ) ){
                        
                        $item_output .= '<div class="dropdown-banner-holder"><img class="img-responsive" src="'. esc_url( $item->banner ) .'" alt="'. esc_attr( $item->title ) .'"></div>';
                        
                    }
    
                $item_output .= '</a>';
                
            $item_output .= $args->after;
            
        }else{
            
            // html <a>
    		$item_output = $args->before;
                $item_output .= '<a' . $attributes . '>';
                
                    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
                
    				// Output Span
    				if( $item->description ) {
    				    $class = ( isset( $item->label_type ) && !empty( $item->label_type ) )? $item->label_type : 'hot-menu';
    					$item_output .= ' <span class="menu-label '. esc_attr( $class ) .' hidden-xs">' . $item->description . '</span>';
    				}
                    
                $item_output .= '</a>';
            $item_output .= $args->after;
        }    
        
        
        
		// Header of MegaMenu Column
		if( $depth === 1 && $this->has_megamenu && $this->is_column ) {
			
			// Output <li> or <div>
			$output .= '<div class="' . esc_attr( $this->columns ). '"><div class="menu-widget">' . "\n";
			
            if( isset( $item->title ) && !empty( $item->title ) ){
                
                // Output header
                $output .= $indent . '<h2 class="title">' . apply_filters( 'the_title', $item->title, $item->ID );
                
                // Output Span
    			if( $item->description ) {
    				$output .= ' <span>' . $item->description . '</span>';
    			}
    			
    			$output .= '</h2>';
			 
            }
			
		}else{
			// Output <li>
			$output .= $indent . '<li' . $class_names .'>';
		
			// Output <a>
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
   	}

 	/**
	 * @see Walker::end_el()
	 */
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
    	
    	if( $depth === 1 && $this->has_megamenu && $this->is_column ) {
    		$output .= "</div></div>\n";
   		}else {
   			$output .= "</li>\n";
   		}
   	}

   	/**
	 * @see Walker::start_lvl()
	 */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
    	$indent = str_repeat("\t", $depth);
    	
    	// Dropdown <ul> classes
        if( 0 == $depth && $this->has_megamenu ){
            $classes = 'dropdown-menu mega-menu';
        }elseif( 1 == $depth && $this->has_megamenu ){
            $classes = 'links';
        }else{
            $classes = 'dropdown-menu mega-menu';
        }
        
        $output .= "\n$indent<ul class=\"$classes depth-$depth\" role='menu'>\n";    
        
		// Start of Mega Menu Container
		if( 0 === $depth &&  $this->has_megamenu ) {
			$output .= '<!-- mega-menu-container --><li><div class="yamm-content clearfix"><div class="row">' . "\n";
		}
        
        if( 0 === $depth && empty( $this->has_megamenu ) ) {
			$output .= '<li><div class="yamm-content clearfix"><div class="row"><div class="col-xs-12 col-menu"><ul class="links">' . "\n";
		}
   	}

   	/**
	 * @see Walker::end_lvl()
	 */
    function end_lvl( &$output, $depth = 0, $args = array() ) {
    	$indent = str_repeat("\t", $depth);
    	
    	// End of Mega Menu Container
    	if( 0 === $depth &&  $this->has_megamenu ) {
			$output .= '</div></div></li><!-- /mega-menu-container -->' . "\n";
		}
        
        if( 0 === $depth && empty( $this->has_megamenu ) ){
            $output .= '</ul></div></div></div></li>' . "\n";
        }
        
        $output .= "$indent</ul>\n";
   	}
}

class yog_Category_Walker extends Walker_Category {

	public function start_el( &$output, $category, $depth = 0, $args = array(), $id = 0 ) {
		/** This filter is documented in wp-includes/category-template.php */
		$cat_name = apply_filters(
			'list_cats',
			esc_attr( $category->name ),
			$category
		);

		// Don't generate an element if the category name is empty.
		if ( ! $cat_name ) {
			return;
		}
        
        if( $depth == 0 && isset( $args['has_children'] ) && !empty( $args['has_children'] ) ){
            $link = '<div class="accordion-heading"><a href="#' . $category->slug . '" ';
    		if ( $args['use_desc_for_title'] && ! empty( $category->description ) ) {
    			$link .= 'title="' . esc_attr( strip_tags( apply_filters( 'category_description', $category->description, $category ) ) ) . '"';
    		}
    
    		$link .= ' data-toggle="collapse" class="accordion-toggle collapsed child">';
    		$link .= $cat_name . '</a></div><div class="accordion-body collapse" id="' . $category->slug . '" style="height: 0px;">
	                <div class="accordion-inner">';
        
        }elseif( $depth == 0 ){
            $link = '<div class="accordion-heading"><a href="' . esc_url( get_term_link( $category ) ) . '" ';
    		if ( $args['use_desc_for_title'] && ! empty( $category->description ) ) {
    			$link .= 'title="' . esc_attr( strip_tags( apply_filters( 'category_description', $category->description, $category ) ) ) . '"';
    		}
    
    		$link .= ' data-toggle="collapse" class="accordion-toggle collapsed">';
    		$link .= $cat_name . '</a></div>';
        }else{
            $link = '<a href="' . esc_url( get_term_link( $category ) ) . '" ';
    		if ( $args['use_desc_for_title'] && ! empty( $category->description ) ) {
    			$link .= 'title="' . esc_attr( strip_tags( apply_filters( 'category_description', $category->description, $category ) ) ) . '"';
    		}
    
    		$link .= '>';
    		$link .= $cat_name . '</a>';
        
        }


        if( $depth == 0 ){
            $output .= "\t$link\n";
        }elseif ( 'list' == $args['style'] ) {
			$output .= "\t<li";
			$css_classes = array(
				'cat-item',
				'cat-item-' . $category->term_id,
			);

			$termchildren = get_term_children( $category->term_id, $category->taxonomy );

            if( count($termchildren)>0 ){
                $css_classes[] =  'cat-item-have-child';
            }

			if ( ! empty( $args['current_category'] ) ) {
				$_current_category = get_term( $args['current_category'], $category->taxonomy );
				if ( $category->term_id == $args['current_category'] ) {
					$css_classes[] = 'current-cat';
				} elseif ( $category->term_id == $_current_category->parent ) {
					$css_classes[] = 'wpb-wmca-current-cat-parent';
				}
			}

			$css_classes = implode( ' ', apply_filters( 'category_css_class', $css_classes, $category, $depth, $args ) );

			$output .=  ' class="' . $css_classes . '"';
			$output .= ">$link\n";
		} 
	}
    
    /**
	 * Ends the element output, if needed.
	 *
	 * @since 2.3
	 *
	 * @see Walker::end_el()
	 *
	 * @param string $output Used to append additional content (passed by reference).
	 * @param object $page   Not used.
	 * @param int    $depth  Optional. Depth of category. Not used.
	 * @param array  $args   Optional. An array of arguments. Only uses 'list' for whether should append
	 *                       to output. See wp_list_categories(). Default empty array.
	 */
	public function end_el( &$output, $page, $depth = 0, $args = array() ) {
		if ( 'list' != $args['style'] )
			return;
        
        if( $depth == 0 && isset( $args['has_children'] ) && !empty( $args['has_children'] ) ){
            $output .= "</div></div>\n";
        }    
		$output .= "</li>\n";
	}
} 

/**
 * Menu Walker class
 */

class Yog_Top_Walker_Nav_Menu extends Walker_Nav_Menu {

     /**
     * @see Walker::start_el()
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        // Generate classes for <li>
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes = apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth );

        // MegaMenu
		if( $this->has_children && $depth == 0 ) {
        	$classes[] = 'dropdown';
        }
        
        $class_names = implode( ' ',  $classes );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		// Generate <a> attribute
		$atts = array();
		$atts['target'] = ! empty( $item->target )     ? esc_attr( $item->target )     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? esc_attr( $item->xfn )        : '';
		$atts['href']   = ! empty( $item->url )        ? esc_url( $item->url )        : '';
        
        // If has dropdown or mega menu
		if(  $this->has_children ) {
            $atts['class'] = 'dropdown-toggle';
            $atts['data-toggle'] = 'dropdown';
            $atts['data-hover'] = 'dropdown';
        }
        
        // Icon
        $yog_icon = '';
        if( $item->icon ) {
        	$yog_icon = '<i class="fa '. esc_attr( $item->icon ) .'"></i> ';
        }

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
        $attributes = yog_helper()->html_attributes( $atts );        
        
        $args->link_before = $args->link_after = '';
        if( $this->has_children && $depth == 0 ) {
            $args->link_before = '<span class="value">';
            $args->link_after = '</span> <b class="caret"></b>';
        }
        
        // html <a>
		$item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            
                $item_output .= $args->link_before . $yog_icon . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
               
                // Output Span
				if( $item->description ) {
				    $class = ( isset( $item->label_type ) && !empty( $item->label_type ) )? $item->label_type : 'hot-menu';
					$item_output .= ' <span class="menu-label '. esc_attr( $class ) .' hidden-xs">' . $item->description . '</span>';
				}

            $item_output .= '</a>';
        $item_output .= $args->after;
		
		// Output <li>
		$output .= $indent . '<li' . $class_names .'>';
	
		// Output <a>
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		
   	}
    
    /**
	 * @see Walker::start_lvl()
	 */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
    	$indent = str_repeat("\t", $depth);
    	
    	// Dropdown <ul> classes
        $output .= "\n$indent<ul class=\"dropdown-menu depth-$depth\" role='menu'>\n";    
   	}
}

class Yog_Woo_Walker_Nav_Menu extends Walker_Nav_Menu {
    
    private $caret = ' <span class="fa fa-angle-down"></span>';
    
    /**
     * @see Walker::start_el()
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        
        // Generate classes for <li>
        $classes = array();
        
        // Dropdown Class
		if( $this->has_children && $depth == 0 ) {
		  $classes[] = 'parent drop-menu hasmenu';
        }
        
        if( $this->has_children && $depth == 1 ) {
        	$classes[] = 'parent drop-menu-submenu';
        }
        
        $class_names = implode( ' ',  $classes );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		// Generate <a> attribute
		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? esc_attr( $item->attr_title ) : '';
		$atts['target'] = ! empty( $item->target )     ? esc_attr( $item->target )     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? esc_attr( $item->xfn )        : '';
		$atts['href']   = ! empty( $item->url )        ? esc_url( $item->url )        : '';
        
        $args->link_after = '';
        // If has dropdown or mega menu
		if(  $this->has_children && $depth == 0 ) {
            $atts['class'] = 'dropdown-toggle';
            $atts['data-toggle'] = 'dropdown';
            $atts['aria-haspopup'] = 'true';
            $atts['aria-expanded'] = 'false';
        }

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
        $attributes = yog_helper()->html_attributes( $atts );        

        // html <a>
		$item_output = $args->before;
            $item_output .= '<a' . $attributes . '><span>';

                $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				
				// Output Span
				if( $item->description ) {
					$item_output .= ' <span>' . $item->description . '</span>';
				}
                
                // Output Dropdown Caret
				if( $this->has_children && $depth == 0 ) {
					$item_output .= $this->caret;
				}

            $item_output .= '</span></a>';
        $item_output .= $args->after;	
       
		
		// Output <li>
		$output .= $indent . '<li' . $class_names .'>';
	
		// Output <a>
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		
		
   	}

 	/**
	 * @see Walker::end_el()
	 */
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
    	
   			$output .= "</li>\n";
   	}

   	/**
	 * @see Walker::start_lvl()
	 */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
    	$indent = str_repeat("\t", $depth);
        $classes = '';
    	if( 1 == $depth ){
            $classes = 'right-sub';
        }
		$output .= "\n$indent<ul class=\"$classes depth-$depth\" role='menu'>\n";

   	}

   	/**
	 * @see Walker::end_lvl()
	 */
    function end_lvl( &$output, $depth = 0, $args = array() ) {
    	$indent = str_repeat("\t", $depth);
		
		$output .= "$indent</ul>\n";
   	}
}

class Yog_Woo_Mobile_Walker_Nav_Menu extends Walker_Nav_Menu {
    
    private $caret = ' <span class="expand fa fa-plus"></span>';
    
    /**
     * @see Walker::start_el()
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        
        // Generate classes for <li>
        $classes = array();
        
        // Dropdown Class
		if( $this->has_children && $depth == 0 ) {
		  $classes[] = 'parent drop-menu hasmenu';
        }
        
        if( $this->has_children && $depth == 1 ) {
        	$classes[] = 'parent drop-menu-submenu';
        }
        
        $class_names = implode( ' ',  $classes );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		// Generate <a> attribute
		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? esc_attr( $item->attr_title ) : '';
		$atts['target'] = ! empty( $item->target )     ? esc_attr( $item->target )     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? esc_attr( $item->xfn )        : '';
		$atts['href']   = ! empty( $item->url )        ? esc_url( $item->url )        : '';
        
        $args->link_after = '';
        // If has dropdown or mega menu
		if(  $this->has_children && $depth == 0 ) {
            $atts['class'] = 'dropdown-toggle';
            $atts['data-toggle'] = 'dropdown';
            $atts['aria-haspopup'] = 'true';
            $atts['aria-expanded'] = 'false';
        }

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
        $attributes = yog_helper()->html_attributes( $atts );        
                
        // html <a>
		$item_output = $args->before;
            
            // Output Dropdown Caret
    		if( $this->has_children && $depth == 0 ) {
    			$item_output .= $this->caret;
    		}
        
            $item_output .= '<a' . $attributes . '>';

                $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				
				// Output Span
				if( $item->description ) {
					$item_output .= ' <span>' . $item->description . '</span>';
				}

            $item_output .= '</a>';
        $item_output .= $args->after;	
       
		
		// Output <li>
		$output .= $indent . '<li' . $class_names .'>';
	
		// Output <a>
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		
		
   	}

 	/**
	 * @see Walker::end_el()
	 */
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
    	
   			$output .= "</li>\n";
   	}

   	/**
	 * @see Walker::start_lvl()
	 */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
    	$indent = str_repeat("\t", $depth);
        $classes = '';
    	if( 1 == $depth ){
            $classes = 'right-sub';
        }
		$output .= "\n$indent<ul class=\"$classes depth-$depth\" role='menu'>\n";

   	}

   	/**
	 * @see Walker::end_lvl()
	 */
    function end_lvl( &$output, $depth = 0, $args = array() ) {
    	$indent = str_repeat("\t", $depth);
		
		$output .= "$indent</ul>\n";
   	}
}