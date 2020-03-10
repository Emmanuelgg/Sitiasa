<?php
/**
 * Available filters for extending Merlin WP.
 *
 * @package   Merlin WP
 * @version   @@pkg.version
 * @link      https://merlinwp.com/
 * @author    Rich Tabor, from ThemeBeans.com & the team at ProteusThemes.com
 * @copyright Copyright (c) 2018, Merlin WP of Inventionn LLC
 * @license   Licensed GPLv3 for Open Source Use
 */

/**
 * Filter the home page title from your demo content.
 * If your demo's home page title is "Home", you don't need this.
 *
 * @param string $output Home page title.
 */
function flipmart_importer_content_home_page_title( $output ) {
	return 'Home';
}
add_filter( 'merlin_content_home_page_title', 'flipmart_importer_content_home_page_title' );

/**
 * Filter the blog page title from your demo content.
 * If your demo's blog page title is "Blog", you don't need this.
 *
 * @param string $output Index blogroll page title.
 */
function flipmart_importer_content_blog_page_title( $output ) {
	return 'Blog';
}
add_filter( 'merlin_content_blog_page_title', 'flipmart_importer_content_blog_page_title' );

/**
 * Add your widget area to unset the default widgets from.
 * If your theme's first widget area is "sidebar-1", you don't need this.
 *
 * @see https://stackoverflow.com/questions/11757461/how-to-populate-widgets-on-sidebar-on-theme-activation
 *
 * @param  array $widget_areas Arguments for the sidebars_widgets widget areas.
 * @return array of arguments to update the sidebars_widgets option.
 */
function flipmart_importer_unset_default_widgets_args( $widget_areas ) {

	$widget_areas = array(
		'home-page-sidebar' => array(),
        'shop-single-sidebar' => array(),
	);

	return $widget_areas;
}
add_filter( 'merlin_unset_default_widgets_args', 'flipmart_importer_unset_default_widgets_args' );

/**
 * Custom content for the generated child theme's functions.php file.
 *
 * @param string $output Generated content.
 * @param string $slug Parent theme slug.
 */
function flipmart_importer_generate_child_functions_php( $output, $slug ) {

	$slug_no_hyphens = strtolower( preg_replace( '#[^a-zA-Z]#', '', $slug ) );

	$output = "
		<?php
		/**
		 * Theme functions and definitions.
		 */
		function {$slug_no_hyphens}_child_enqueue_styles() {

		    if ( SCRIPT_DEBUG ) {
		        wp_enqueue_style( '{$slug}-style' , get_template_directory_uri() . '/style.css' );
		    } else {
		        wp_enqueue_style( '{$slug}-minified-style' , get_template_directory_uri() . '/style.min.css' );
		    }

		    wp_enqueue_style( '{$slug}-child-style',
		        get_stylesheet_directory_uri() . '/style.css',
		        array( '{$slug}-style' ),
		        wp_get_theme()->get('Version')
		    );
		}

		add_action(  'wp_enqueue_scripts', '{$slug_no_hyphens}_child_enqueue_styles' );\n
	";

	// Let's remove the tabs so that it displays nicely.
	$output = trim( preg_replace( '/\t+/', '', $output ) );

	// Filterable return.
	return $output;
}
add_filter( 'merlin_generate_child_functions_php', 'flipmart_importer_generate_child_functions_php', 10, 2 );

/**
 * Define the demo import files (remote files).
 *
 * To define imports, you just have to add the following code structure,
 * with your own values to your theme (using the 'merlin_import_files' filter).
 */
function flipmart_importer_merlin_import_files() {
	return array(
		array(
			'import_file_name'           => 'Layout 1',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/default-v1/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/default-v1/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/default-v1/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/default-v1/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/',
		),
		array(
			'import_file_name'           => 'Layout 2',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/default-v2/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/default-v2/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/default-v2/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/default-v2/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/v2/',
		),
        array(
			'import_file_name'           => 'Layout 3',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/default-v3/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/default-v3/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/default-v3/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/default-v3/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/v3/',
		),
        array(
			'import_file_name'           => 'Layout 4',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/default-v4/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/default-v4/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/default-v4/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/default-v4/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/v4/',
		),
        array(
			'import_file_name'           => 'Layout 5',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/default-v5/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/default-v5/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/default-v5/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/default-v5/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/v5/',
		),
        array(
			'import_file_name'           => 'Layout 6',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/default-v6/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/default-v6/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/default-v6/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/default-v6/screenshot.png',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/v6/',
		),
        array(
			'import_file_name'           => 'App',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/app/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/app/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/app/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/app/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/app/',
		),
        array(
			'import_file_name'           => 'Autoparts',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/autoparts/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/autoparts/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/autoparts/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/autoparts/screenshot.png',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/autoparts/',
		),
        array(
			'import_file_name'           => 'Book',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/book/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/book/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/book/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/book/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/book/',
		),
        array(
			'import_file_name'           => 'Black & White',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/bw/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/bw/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/bw/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/bw/screenshot.png',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/bw/',
		),
        array(
			'import_file_name'           => 'Cosmetic',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/cosmetic/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/cosmetic/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/cosmetic/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/cosmetic/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/cosmetic/',
		),
        array(
			'import_file_name'           => 'Drink',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/drink/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/drink/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/drink/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/drink/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/drink/',
		),
        array(
			'import_file_name'           => 'Electro',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/electro/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/electro/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/electro/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/electro/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/electro/',
		),
        array(
			'import_file_name'           => 'Engineer',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/engineer/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/engineer/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/engineer/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/engineer/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/engineer/',
		),
        array(
			'import_file_name'           => 'Fashion',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/fashion/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/fashion/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/fashion/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/fashion/screenshot.png',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/fashion/',
		),
        array(
			'import_file_name'           => 'Finances',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/finances/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/finances/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/finances/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/finances/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/finances/',
		),
        array(
			'import_file_name'           => 'Flower',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/flower/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/flower/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/flower/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/flower/screenshot.png',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/flower/',
		),
        array(
			'import_file_name'           => 'Furniture',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/furniture/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/furniture/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/furniture/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/furniture/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/furniture/',
		),
        array(
			'import_file_name'           => 'Glasses',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/glasses/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/glasses/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/glasses/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/glasses/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/glasses/',
		),
        array(
			'import_file_name'           => 'Gym',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/gym/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/gym/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/gym/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/gym/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/gym/',
		),
        array(
			'import_file_name'           => 'Hosting',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/hosting/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/hosting/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/hosting/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/hosting/screenshot.png',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/hosting/',
		),
        array(
			'import_file_name'           => 'Jewelleries',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/jewelleries/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/jewelleries/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/jewelleries/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/jewelleries/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/jewelleries/',
		),
        array(
			'import_file_name'           => 'Kidswear',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/kidswear/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/kidswear/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/kidswear/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/kidswear/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/kidswear/',
		),
        array(
			'import_file_name'           => 'Lawyer',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/lawyer/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/lawyer/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/lawyer/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/lawyer/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/lawyer/',
		),
        array(
			'import_file_name'           => 'Lingerie',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/lingerie/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/lingerie/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/lingerie/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/lingerie/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/lingerie/',
		),
        array(
			'import_file_name'           => 'Ray',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/ray/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/ray/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/ray/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/ray/screenshot.png',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/ray/',
		),
        array(
			'import_file_name'           => 'Restaurant',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/restaurant/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/restaurant/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/restaurant/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/restaurant/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/restaurant/',
		),
        array(
			'import_file_name'           => 'Seo',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/seo/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/seo/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/seo/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/seo/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/seo/',
		),
        array(
			'import_file_name'           => 'Shoes',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/shoes/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/shoes/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/shoes/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/shoes/screenshot.jpg',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/shoes/',
		),
        array(
			'import_file_name'           => 'WooMart',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/woomart/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/woomart/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/woomart/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/woomart/screenshot.png',
			'preview_url'                => 'http://www.ckthemes.com/flipmart/woomart/',
		),
        array(
			'import_file_name'           => 'Flipmart Dokan',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/mv/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/mv/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/mv/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/mv/screenshot.png',
			'preview_url'                => 'http://www.ckthemes.com/flipmart-mv/',
		),
        array(
			'import_file_name'           => 'Flipmart EDD',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://yogthemes.com/demo/dd/theme-options.json',
					'option_name' => 'flipmart',
				),
			),
            'import_file_url'            => 'http://yogthemes.com/demo/dd/content.xml',
			'import_widget_file_url'     => 'http://yogthemes.com/demo/dd/widgets.wie',
			'import_preview_image_url'   => 'http://yogthemes.com/demo/dd/screenshot.png',
			'preview_url'                => 'http://www.ckthemes.com/flipmart-dd/',
		)
	);
}
add_filter( 'merlin_import_files', 'flipmart_importer_merlin_import_files' );

/**
 * Execute custom code after the whole import has finished.
 */
function flipmart_importer_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'MainMenu', 'nav_menu' );
    $top_menu = get_term_by( 'name', 'Top Bar Menu', 'nav_menu' );

	set_theme_mod(
		'nav_menu_locations', array(
			'primary' => $main_menu->term_id,
            'top-bar' => $top_menu->term_id,
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );
    update_option( 'posts_per_page', 3 );

}
add_action( 'merlin_after_all_import', 'flipmart_importer_after_import_setup' );