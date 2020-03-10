<?php
/**
 * Theme Init class.
 *
 * @package WordPress
 * @subpackage flipmart
 * @since Flipmart 2.3
 */

if ( ! defined( 'ABSPATH' ) ){
  exit;  
}  // Exit if accessed directly

if (!class_exists('Yog_Paginate')) {
    
	class Yog_Paginate {
		/**
		 * @var array $options Stores the options for this plugin
		 */
		var $options = array();

		var $type = 'posts';

		/**
		 * Constructor
		 */
		function __construct() {

			//Initialize the options
			$this->get_options();
		}

		/**
		 * Pagination based on options/args
		 */
		function paginate($args = false) {
			if ($this->type === 'comments' && !get_option('page_comments'))
				return;

			$r = wp_parse_args($args, $this->options);
			extract($r, EXTR_SKIP);

			if (!isset($page) && !isset($pages)) {
				global $wp_query;

				if ($this->type === 'posts') {
    				$page = $query->get( 'paged' );//get_query_var('paged');
    				$posts_per_page = intval( $query->get( 'posts_per_page' ) );//intval(get_query_var('posts_per_page'));
    				$pages = intval( ceil( $query->found_posts / $posts_per_page ) );
    			}
    			else {
    				$page = get_query_var('cpage');
    				$comments_per_page = get_option('comments_per_page');
    				$pages = get_comment_pages_count();
    			}
    			$page = !empty($page) ? intval($page) : 1;
			}

			$prevlink = ($this->type === 'posts')
				? esc_url(get_pagenum_link($page - 1))
				: get_comments_pagenum_link($page - 1);
			$nextlink = ($this->type === 'posts')
				? esc_url(get_pagenum_link($page + 1))
				: get_comments_pagenum_link($page + 1);

			$output = stripslashes($before);
			if ($pages > 1) {
				$output .= sprintf('<ul class="%s">', ($this->type === 'posts') ? $class : ' wp-paginate-comments');
				if (strlen(stripslashes($title)) > 0) {
					$output .= sprintf('<li><span class="title">%s</span></li>', stripslashes($title));
				}
				$ellipsis = "<li><span class='gap'>...</span></li>";

				if ($page > 1 && !empty($previouspage)) {
					$output .= sprintf('<li class="prev"><a href="%s">%s</a></li>', $prevlink, stripslashes($previouspage));
				}

				$min_links = $range * 2 + 1;
				$block_min = min($page - $range, $pages - $min_links);
				$block_high = max($page + $range, $min_links);
				$left_gap = (($block_min - $anchor - $gap) > 0) ? true : false;
				$right_gap = (($block_high + $anchor + $gap) < $pages) ? true : false;

				if ($left_gap && !$right_gap) {
					$output .= sprintf('%s%s%s',
						$this->paginate_loop(1, $anchor),
						$ellipsis,
						$this->paginate_loop($block_min, $pages, $page)
					);
				}
				else if ($left_gap && $right_gap) {
					$output .= sprintf('%s%s%s%s%s',
						$this->paginate_loop(1, $anchor),
						$ellipsis,
						$this->paginate_loop($block_min, $block_high, $page),
						$ellipsis,
						$this->paginate_loop(($pages - $anchor + 1), $pages)
					);
				}
				else if ($right_gap && !$left_gap) {
					$output .= sprintf('%s%s%s',
						$this->paginate_loop(1, $block_high, $page),
						$ellipsis,
						$this->paginate_loop(($pages - $anchor + 1), $pages)
					);
				}
				else {
					$output .= $this->paginate_loop(1, $pages, $page);
				}

				if ($page < $pages && !empty($nextpage)) {
					$output .= sprintf('<li class="next"><a href="%s">%s</a></li>', $nextlink, stripslashes($nextpage));
				}
				$output .= "</ul>";
			}
			$output .= stripslashes($after);

			if ($pages > 1 || $empty) {
				print( $output );
			}
		}

		/**
		 * Helper function for pagination which builds the page links.
		 */
		function paginate_loop($start, $max, $page = 0) {
			$output = "";
			for ($i = $start; $i <= $max; $i++) {
				$p = ($this->type === 'posts') ? esc_url(get_pagenum_link($i)) : get_comments_pagenum_link($i);
				$output .= ($page == intval($i))
					? "<li><span class='page current'>$i</span></li>"
					: "<li><a href='$p' title='$i' class='page'>$i</a></li>";
			}
			return $output;
		}

		/**
		 * Retrieves the plugin options from the database.
		 * @return array
		 */
		function get_options() {
			$this->options = array(
				'title'        => yog_helper()->get_option('pagination_pages_text', 'html', 'Pages:', 'options' ),
				'nextpage'     => yog_helper()->get_option('pagination_next_text', 'html','&raquo;', 'options'),
				'previouspage' => yog_helper()->get_option('pagination_prev_text', 'html','&laquo;', 'options'),
				'css'          => false,
                'class'        => 'pagenav-style',
				'before'       => '<nav class="nav-pagination">',
				'after'        => '</nav>',
				'empty'        => yog_helper()->get_option('pagination_empty', 'html', true, 'options'),
				'range'        => yog_helper()->get_option('pagination_range', 'html', 3, 'options'),
				'anchor'       => yog_helper()->get_option('pagination_anchor', 'html', 1, 'options'),
				'gap'          => yog_helper()->get_option('pagination_gap', 'html', 3, 'options'),
                'query'         => $GLOBALS['wp_query'],
			);		
		}
	}
}

//instantiate the class
if (class_exists('Yog_Paginate')) {
	$GLOBALS['yog_paginate'] = new Yog_Paginate();
}

/**
 * Pagination function to use for posts
 */
function yog_wp_paginate($args = false) {
	global $yog_paginate;
	$yog_paginate->type = 'posts';
	return $yog_paginate->paginate($args);
}