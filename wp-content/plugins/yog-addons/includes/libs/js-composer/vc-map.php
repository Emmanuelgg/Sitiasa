<?php
/**
 * Visual Composer Default Modules Mapping
 *
 * @category VC extend
 * @author CKthemes
 * @since  2.4
 * @package yog-addons
 * @subpackage yog-addons/includes/libs/js_composer
 *
 */
 
$yog_skin = array(
    esc_html__( 'Default', 'yog' )            => '',
    esc_html__( 'Faq Page', 'yog' )           => 'checkout-box faq-page',
    esc_html__( 'Space Top', 'yog' )          => 'outer-top-xs',
    esc_html__( 'Space Bottom', 'yog' )       => 'outer-bottom-xs',
    esc_html__( 'Section Space', 'yog' )      => 'add-section', 
    esc_html__( 'Background Section', 'yog' ) => 'dark-summer'
);

$yog_woo = array(
    esc_html__('Style Slider', 'yog')      => 'one', 
    esc_html__('Style Mini Slider', 'yog') => 'two',
    esc_html__('Style Grid', 'yog')        => 'three',
    esc_html__('Style List', 'yog')        => 'four'
);

$yog_cat = array(
    esc_html__('Style One', 'yog')   => 'one', 
    esc_html__('Style Two', 'yog')   => 'two',
    esc_html__('Style Three', 'yog') => 'three'
);

$yog_theme_options = get_option( 'flipmart' );
if( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'book' ) ){
    
    //Row Skin Style.
    $yog_skin['Book Top Section Space']     =  'top-section';
    $yog_skin['Book Middle Section Space']  =  'middle-section';
    
    //WooCommerce Style
    $yog_woo['Book Slider']      =  'book-slider';
    $yog_woo['Book Mini Slider'] =  'book-mini-slider';
    
    //Include File
    include_once 'layouts/vc-book.php'; 
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'fashion' ) ){
    
    //WooCommerce Style
    $yog_woo['Fashion Slider']  =  'fashion-slider';
    
    //Include File
    include_once 'layouts/vc-fashion.php'; 
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'cosmetic' ) ){
    
    //WooCommerce Style
    $yog_woo['Cosmetic Slider']  =  'cosmetic-slider';
    
    //Include File
    include_once 'layouts/vc-cosmetic.php';  
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'drink' ) ){
    
    //WooCommerce Style
    $yog_woo['Drink Slider']  =  'drink-slider';
    
    //Include File
    include_once 'layouts/vc-drink.php'; 
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'electro' ) ){
    
    //WooCommerce Style
    $yog_woo['Electro Slider']  = 'electro-slider';
    $yog_skin['Electro Section Space'] =  'firsttab';
    $yog_cat['Style Electro'] = 'four';
    
    //Include File
    include_once 'layouts/vc-electro.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'engineer' ) ){
    
    //WooCommerce Style
    $yog_woo['Engineer Grid']    = 'engineer-grid';
    $yog_woo['Engineer Slider']  = 'engineer-slider';
    
    //Include File
    include_once 'layouts/vc-engineer.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'finances' ) ){
    
    //WooCommerce Style
    $yog_woo['Finances Grid']    = 'finances-grid';
    
    //Skin Class
    $yog_skin['Finances About Section'] =  'about-container-space';
    $yog_skin['Finances Blog Section'] =  'blog-space';
    $yog_skin['Finances Newsletter Section'] =  'newsletter-space';
    $yog_skin['Finances Price Section'] =  'price-plan-space';
    $yog_skin['Finances Services Section'] =  'f-services-space';
    $yog_skin['Finances Video Section'] =  'video-section';
    $yog_skin['Finances Testimonial Section'] =  'testimonial-space';
    
    //Include File
    include_once 'layouts/vc-finances.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'furniture' ) ){
    
    //WooCommerce Style
    $yog_woo['Furniture Grid']   = 'furniture-grid';
    $yog_woo['Furniture Slider'] = 'furniture-slider';
    $yog_cat['Style Furniture']  = 'five';
    
    $yog_skin['Furniture Space Top']    =  'space-top';
    
    //Include File
    include_once 'layouts/vc-furniture.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'glasses' ) ){
    
    //WooCommerce Style
    $yog_woo['Glasses Slider'] = 'glasses-slider';
    $yog_woo['Glasses List']   = 'glasses-list-main';
    $yog_woo['Glasses List Mini'] = 'glasses-list';
    
    //Include File
    include_once 'layouts/vc-glasses.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'gym' ) ){
    
    //WooCommerce Style
    $yog_woo['Gym Slider'] = 'gym-grid';
    
    //Include File
    include_once 'layouts/vc-gym.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'hosting' ) ){
    
    //WooCommerce Style
    $yog_woo['Hosting Slider'] = 'gym-grid';
    
    //Skin
    $yog_skin['Hosting List Space'] =  'included-space';
    
    //Include File
    include_once 'layouts/vc-hosting.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'jewellery' ) ){
    
    //WooCommerce Style
    $yog_woo['Jewellery Slider']      = 'jewellery-slider';
    $yog_woo['Jewellery Slider Dual'] = 'jewellery-slider-dual';
    
    //Include File
    include_once 'layouts/vc-jewellery.php';

}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'kidswear' ) ){
     
    //WooCommerce Categories
    $yog_cat['Style Kidswear'] = 'six';
    
    //WooCommerce Style
    $yog_woo['Kidswear Grid']  = 'kidswear-grid';
    
    //Skin
    $yog_skin['Kidswear Banner Bg']   =  'kids-banner-bg';
    
    //Include File
    include_once 'layouts/vc-kidswear.php';

}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'lawyer' ) ){
    
    //Skin
    $yog_skin['Lawyer Services Space'] =  'services-section-space';
    
    //Include File
    include_once 'layouts/vc-lawyer.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'lingerie' ) ){
    
    //WooCommerce Categories
    $yog_cat['Style Lingerie'] = 'seven';
    
    //WooCommerce Style
    $yog_woo['Lingerie Slider']  = 'lingerie-slider';
    
    //Skin
    $yog_skin['Lingerie Products Space'] =  'lingerie-product-space';
    
    //Include File
    include_once 'layouts/vc-lingerie.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'mobile' ) ){
    
    //WooCommerce Style
    $yog_woo['Mobile Slider']  = 'mobile-slider';
    
    //Include File
    include_once 'layouts/vc-mobile.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'restaurant' ) ){
    
    //WooCommerce Style
    $yog_woo['Restaurant Slider'] = 'restaurant-slider';
    
    //WooCommerce Categories
    $yog_cat['Restaurant Filter'] = 'eight';
    
    //Include File
    include_once 'layouts/vc-restaurant.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'seo' ) ){
    
    //Include File
    include_once 'layouts/vc-seo.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'shoes' ) ){
    
    //WooCommerce Style
    $yog_woo['Shoes Slider']  = 'shoes-slider';
    
    //WooCommerce Categories
    $yog_cat['Style Shoes'] = 'nine';
    
    //Include File
    include_once 'layouts/vc-shoes.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'bw' ) ){
    
    //Skin
    $yog_skin['BW Top left']     =  'top-left-separator hidden-xs';
    $yog_skin['BW Top Right']    =  'top-right-separator hidden-xs';
    $yog_skin['BW Bottom left']  =  'bottom-left-separator hidden-xs';
    $yog_skin['BW Bottom Right'] =  'bottom-right-separator hidden-xs';
    
    //Skin
    $yog_skin['BW Contact'] =  'pop-wrap';
    $yog_skin['BW Parallax'] =  'parallax-block';
    $yog_skin['BW Testimonials Parallax'] =  'parallax-block testimonials-block';
    
    //Include File
    include_once 'layouts/vc-bw.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'flower' ) ){
    
    //WooCommerce Style
    $yog_woo['Flower Slider'] = 'flower-grid';
    
    //Include File
    include_once 'layouts/vc-flower.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'autoparts' ) ){
    
    //WooCommerce Categories
    $yog_cat['Style Autoparts'] = 'ten';
    
    //WooCommerce Style
    $yog_woo['Autoparts Grid']      = 'autoparts-grid';
    $yog_woo['Autoparts Grid Alt']  = 'autoparts-grid-two';
    
    //Skin
    $yog_skin['Autoparts Section'] =  'py-80';
    
    //Include File
    include_once 'layouts/vc-autoparts.php';
    
}elseif( ( isset( $yog_theme_options['site-version'] ) && $yog_theme_options['site-version'] == 'modify' ) && ( isset( $yog_theme_options['site-version-modify'] ) && $yog_theme_options['site-version-modify'] == 'ray' ) ){
    
    //Include File
    include_once 'layouts/vc-ray.php';
}

if( $yog_theme_options['site-version-modify'] != 'bw' && $yog_theme_options['site-version-modify'] != 'ray' ){

/*-------------------------------------------------------------------------------
|				Flipmart:  Row Setting / Element Map				            |						
--------------------------------------------------------------------------------*/
    
    vc_map( array(
        'name'         =>  esc_html__( 'Row', 'yog' ),
        'base'         => 'vc_row',
        'is_container' => true,
        'icon'         => 'icon-wpb-row',
        'show_settings_on_create' => false,
        'category'     =>  esc_html__( 'Content', 'yog' ),
        'description'  =>  esc_html__( 'Place content elements inside the row', 'yog' ),
        'params'       => array(
        
            array(
            	'type'       => 'dropdown',
            	'heading'    =>  esc_html__( 'Row', 'yog' ),
            	'param_name' => 'full_width',
            	'value'      => array(
            		esc_html__( 'Default', 'yog' )       => '',
                    esc_html__( 'Fullwidth Row', 'yog' ) => 'stretch_row',
            		esc_html__( 'Fluid Row', 'yog' )     => 'stretch_row_fluid',
                    esc_html__( 'Stretch Row', 'yog' )   => 'stretch_row_sp',
                    esc_html__( 'Row Special', 'yog' )   => 'stretch_row_special',
                    esc_html__( 'Row Overlay', 'yog' )   => 'stretch_row_over',
            	)
            ),
            
            array(
                'heading'     =>  esc_html__( 'Row Skin', 'yog' ),
            	'type'        => 'dropdown',
            	'param_name'  => 'yog_skin',
            	'value'       => $yog_skin,
            	'description' =>  esc_html__( 'Select Row Container Class.', 'yog' )
            ),
            
            array(
                'heading'     => __( 'Background Image', 'yog' ),
    			'type'        => 'attach_image',
    			'param_name'  => 'yog_parallax_image',
    			'value'       => '',
    			'description' => __( 'Select image from media library.', 'yog' ),
    		),
            
            array(
        		'type'       => 'colorpicker',
        		'heading'    => __( 'Background Color', 'js_composer' ),
        		'param_name' => 'yog_bg_color',
        	),
            
            array(
            	'type'       => 'dropdown',
            	'heading'    =>  esc_html__( 'Columns gap', 'yog' ),
            	'param_name' => 'gap',
            	'value' => array(
            		'0px'  => '0',
            		'1px'  => '1',
            		'2px'  => '2',
            		'3px'  => '3',
            		'4px'  => '4',
            		'5px'  => '5',
            		'10px' => '10',
            		'15px' => '15',
            		'20px' => '20',
            		'25px' => '25',
            		'30px' => '30',
            		'35px' => '35',
            	),
            	'std'         => '0',
            	'description' =>  esc_html__( 'Select gap between columns in row.', 'yog' ),
            ),
            
            array(
            	'type'        => 'el_id',
            	'heading'     =>  esc_html__( 'Row ID', 'yog' ),
            	'param_name'  => 'el_id',
            	'description' => sprintf(  esc_html__( 'Enter row ID (Note: make sure it is unique and valid according to <a href="%s" target="_blank">w3c specification</a>).', 'yog' ), 'http://www.w3schools.com/tags/att_global_id.asp' ),
            ),
            
            array(
            	'type'        => 'checkbox',
            	'heading'     =>  esc_html__( 'Disable row', 'yog' ),
            	'param_name'  => 'disable_element', // Inner param name.
            	'description' =>  esc_html__( 'If checked the row won\'t be visible on the public side of your website. You can switch it back any time.', 'yog' ),
            	'value'       => array(  esc_html__( 'Yes', 'yog' ) => 'yes' ),
            ),
            
            array(
            	'type'        => 'textfield',
            	'heading'     =>  esc_html__( 'Extra class name', 'yog' ),
            	'param_name'  => 'el_class',
            	'description' =>  esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'yog' ),
            ),
            
            array(
            	'type'        => 'css_editor',
            	'heading'     =>  esc_html__( 'CSS box', 'yog' ),
            	'param_name'  => 'css',
            	'group'       =>  esc_html__( 'Design Options', 'yog' ),
            )
        ),
        'js_view' => 'VcRowView',
        )
    );

}
/*-------------------------------------------------------------------------------
|				Flipmart:  Heading Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('Flipmart Heading', 'yog'),
	  'base'        => 'yog_heading',
	  'class'       => 'icon_yog_heading',
	  'icon'	    => 'icon-wpb-ui-custom_heading',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart Modules', 'yog'),
	  'description' => esc_html__( 'Insert Heading', 'yog' ),
	  'params'      => array(
            array(
                'heading'     => esc_html__('Style', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_heading_style',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('One', 'yog') => 'one',
    				esc_html__('Two', 'yog') => 'two'
    			),
    			'description' => esc_html__('Select heading style', 'yog'),
    	    ),
            
			array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'admin_label' => true,
                'value'       => '',
                'param_name'  => 'yog_heading',
            ),
             
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
                'dependency'  => array(
    				'element' => 'yog_heading_style',
                    'value'   => array( 'one' )
   			    )
            )
         )
       )
    );
    
/*-------------------------------------------------------------------------------
|				Flipmart: Blog Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('Flipmart Blog Posts', 'yog'),
	  'base'        => 'yog_blog_posts',
	  'class'       => 'icon_yog_blog_posts',
	  'icon'	    => 'icon-wpb-ui-separator',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart Modules', 'yog'),
	  'description' => esc_html__( 'Insert Blog Posts', 'yog' ),
	  'params'      => array(

            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading'
            ),
            
            array(
                'heading'    => esc_html__( 'Number Of Posts','yog'),
                'type'       => 'textfield',
                'value'      => '',
                'param_name' => 'yog_limit',
            ),
            
            array(
        		'type'       => 'autocomplete',
        		'heading'    => esc_html__( 'Choose Categories', 'yog' ),
        		'param_name' => 'taxonomie',
        		'settings'   => array(
        			'multiple'       => true,
        			'min_length'     => 1,
        			'groups'         => true,
        			'unique_values'  => true,
        			'display_inline' => true,
        			'delay'          => 500,
        			'auto_focus'     => true,
        		),
        		'param_holder_class' => 'vc_not-for-custom',
        		'description'        => esc_html__( 'Enter categories of blog posts.', 'yog' ),
        	),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
         )
       )
    );
        
/*-------------------------------------------------------------------------------
|				Flipmart:  Accordion Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('Flipmart FAQ Accordion', 'yog'),
	  'base'        => 'yog_accordions',
	  'class'       => 'icon_yog_accordions',
	  'icon'	    => 'icon-wpb-ui-accordion',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart Modules', 'yog'),
	  'description' => esc_html__( 'Insert Accordion', 'yog' ),
	  'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_accordion',
                'params'     => array(
                
                     array(
            			'type'        => 'checkbox',
            			'heading'     => esc_html__( 'Active', 'yog' ),
            			'param_name'  => 'enable_active', // Inner param name.
            			'description' => esc_html__( 'If checked active content', 'yog' ),
            			'value'       => array( esc_html__( 'Yes', 'yog' ) => 'yes' ),
            		 ),
                     
                     array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                     ),
                     
                     array(
                        'type'        => 'textarea_raw_html',
            			'holder'      => 'div',
            			'heading'     => esc_html__( 'Content', 'yog' ),
            			'param_name'  => 'yog_content',
            			'value'       => base64_encode( '<p>I am raw html block.<br/>Click edit button to change this html</p>' ),
            			'description' => esc_html__( 'Enter your HTML content.', 'yog' ),
                    )
                )
             )
          )
       )
    );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Lists Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('Flipmart Lists', 'yog'),
	  'base'        => 'yog_lists',
	  'class'       => 'icon_yog_lists',
	  'icon'	    => 'icon-wpb-ui-lists',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart Modules', 'yog'),
	  'description' => esc_html__( 'Insert Lists', 'yog' ),
	  'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_list',
                'params'     => array(
                    
                     array(
                        'heading'     => esc_html__( 'List','yog'),
                        'type'        => 'textarea',
                        'value'       => '',
                        'param_name'  => 'yog_list_item',
                     )
                )
             )
          )
       )
    );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Google Map Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('Flipmart Google Map', 'yog'),
	  'base'        => 'yog_google_maps',
	  'class'       => 'icon_yog_google_maps',
	  'icon'	    => 'icon-wpb-ui-separator',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart Modules', 'yog'),
	  'description' => esc_html__( 'Insert Google Map', 'yog' ),
	  'params'      => array(
      
            array(
                'heading'    => esc_html__( 'Latitude','yog'),
                'type'       => 'textfield',
                'value'      => '',
                'param_name' => 'yog_lat',
            ),
            
            array(
                'heading'    => esc_html__( 'Longitude','yog'),
                'type'       => 'textfield',
                'value'      => '',
                'param_name' => 'yog_long',
            ),
            
            array(
                'heading'    => esc_html__( 'Maker Image','yog'),
                'type'       => 'attach_image',
                'value'      => '',
                'param_name' => 'yog_marker_image',
            )
         )
       )
    );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Contact Info Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('Flipmart Contact Info', 'yog'),
	  'base'        => 'yog_contact_info',
	  'class'       => 'icon_yog_contact_info',
	  'icon'	    => 'icon-wpb-ui-separator',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart Modules', 'yog'),
	  'description' => esc_html__( 'Insert Contact Info', 'yog' ),
	  'params'      => array(
      
            array(
                'heading'    => esc_html__( 'Heading','yog'),
                'type'       => 'textfield',
                'value'      => '',
                'admin_label' => true,
                'param_name' => 'yog_heading',
            ),
            
            array(
                'heading'    => esc_html__( 'Address','yog'),
                'type'       => 'textarea',
                'value'      => '',
                'param_name' => 'yog_address',
            ),
            
            array(
                'heading'    => esc_html__( 'Phone Number','yog'),
                'type'       => 'textfield',
                'value'      => '',
                'param_name' => 'yog_phone_number',
            ),
            
            array(
                'heading'    => esc_html__( 'Email','yog'),
                'type'       => 'textfield',
                'value'      => '',
                'param_name' => 'yog_email',
            )
         )
       )
    );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Client Logs Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('Flipmart Client Logs', 'yog'),
	  'base'        => 'yog_client_logos',
	  'class'       => 'icon_yog_client_logos',
	  'icon'	    => 'icon-wpb-ui-accordion',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart Modules', 'yog'),
	  'description' => esc_html__( 'Insert Client Logs', 'yog' ),
	  'params'      => array(
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'    => esc_html__( 'Delay','yog'),
                'type'       => 'textfield',
                'param_name' => 'yog_delay',
            ),
             
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_client_logo',
                'params'     => array(
                
                    array(
                        'heading'    => esc_html__( 'Logo','yog'),
                        'type'       => 'attach_image',
                        'value'      => '',
                        'param_name' => 'yog_logo',
                    ),
                    
                    array(
                        'heading'    => esc_html__( 'Link','yog'),
                        'type'       => 'vc_link',
                        'value'      => '',
                        'param_name' => 'yog_link',
                    )
                )
             )
          )
       )
    );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Slider Section Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('Flipmart Hero Section', 'yog'),
	  'base'        => 'yog_hero_sections',
	  'class'       => 'icon_yog_hero_section',
	  'icon'	    => 'icon-wpb-ui-accordion',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart Modules', 'yog'),
	  'description' => esc_html__( 'Insert Slider', 'yog' ),
	  'params'      => array(
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_hero_section',
                'params'     => array(
                    
                     array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                        'description' => yog_pattren_description()
                    ),
                     
                    array(
                        'heading'     => esc_html__( 'Sub Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_sub_heading',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Content','yog'),
                        'type'        => 'textarea',
                        'value'       => '',
                        'param_name'  => 'yog_content',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Background Image','yog'),
                        'type'        => 'attach_image',
                        'value'       => '',
                        'param_name'  => 'yog_bg',
                    ),
                    
                    array(
                        'heading'     => esc_html__( 'Link','yog'),
                        'type'        => 'vc_link',
                        'value'       => '',
                        'param_name'  => 'yog_link',
                    )
                )
             )
          )
       )
    );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Info Box Module / Element Map				            |						
--------------------------------------------------------------------------------*/
    vc_map( array(
      'name'        => esc_html__('Flipmart Info Box', 'yog'),
      'base'        => 'yog_info_boxes',
      'class'       => 'icon_yog_info_boxes',
      'icon'	    => 'icon-wpb-ui-accordion',
      'weight'      => 101,
      'category'    => esc_html__('Flipmart Modules', 'yog'),
      'description' => esc_html__( 'Insert Info Box', 'yog' ),
      'params'      => array(
      
            array(
                'heading'     => esc_html__('Columns', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_column',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('Default Column', 'yog') => '',
    				esc_html__('Two Column', 'yog')     => '2',
    				esc_html__('Three Column', 'yog')   => '3',
                    esc_html__('Four Column', 'yog')    => '4',
    			),
    			'description' => esc_html__('Select Number Of Column', 'yog'),
    	    ),
            
            array(
                'type'       => 'param_group',
                'value'      => '',
                'param_name' => 'yog_info_boxe',
                'params'     => array(
                    
                     array(
                        'heading'     => esc_html__( 'Heading','yog'),
                        'type'        => 'textfield',
                        'admin_label' => true,
                        'value'       => '',
                        'param_name'  => 'yog_heading',
                    ),
                     
                    array(
                        'heading'     => esc_html__( 'Sub Heading','yog'),
                        'type'        => 'textfield',
                        'value'       => '',
                        'param_name'  => 'yog_sub_heading',
                    ),
                    
                    array(
            			'type' => 'iconpicker',
            			'heading' => __( 'Icon', 'yog' ),
            			'param_name' => 'yog_icon',
            			'value' => 'fa fa-info-circle',
                        'settings' => array(
            				'emptyIcon' => false, // default true, display an "EMPTY" icon?
            				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
            			),
            			'description' => __( 'Select icon from library.', 'yog' ),
            		)
                )
             ),
             
             array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		 ),
             
             array(
                'heading'    => esc_html__( 'Delay','yog'),
                'type'       => 'textfield',
                'param_name' => 'yog_delay',
             )
          )
       )
    );
    
/*-------------------------------------------------------------------------------
|				Flipmart:  Image Banner Module / Element Map				            |						
--------------------------------------------------------------------------------*/

	vc_map( array(
	  'name'        => esc_html__('Flipmart Image Banner', 'yog'),
	  'base'        => 'yog_image_banner',
	  'class'       => 'icon_yog_image_banner',
	  'icon'	    => 'icon-wpb-ui-separator',
	  'weight'      => 101,
	  'category'    => esc_html__('Flipmart Modules', 'yog'),
	  'description' => esc_html__( 'Insert Image Banner', 'yog' ),
	  'params'      => array(
            
            array(
                'heading'     => esc_html__('Style', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_style',
    			'admin_label' => true,
    			'value' => array(
                    esc_html__('Image', 'yog')                   => '',
    				esc_html__('Image With Text One', 'yog')     => 'image-text',
                    esc_html__('Image With Text Two', 'yog')     => 'image-text-two',
                    esc_html__('Image With Button One', 'yog')   => 'image-text-three',
                    esc_html__('Image With Button Two', 'yog')   => 'image-text-four'
    			),
    			'description' => esc_html__('Select banner style', 'yog'),
    	    ),
            
            array(
                'heading'     => esc_html__( 'Banner Image','yog'),
                'type'        => 'attach_image',
                'value'       => '',
                'param_name'  => 'yog_banner',
            ),
            
            array(
                'heading'     => esc_html__( 'Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'admin_label' => true,
                'param_name'  => 'yog_heading',
                'dependency'  => array(
    				'element' => 'yog_style',
                    'value'   => array( 'image-text', 'image-text-two', 'image-text-three', 'image-text-four' )
   			    )
            ),
            
            array(
                'heading'     => esc_html__( 'Sub Heading','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_sub_heading',
                'dependency'  => array(
    				'element' => 'yog_style',
                    'value'   => array( 'image-text', 'image-text-two', 'image-text-four' )
   			    )
            ),
            
            array(
                'heading'     => esc_html__( 'Content','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_content',
                'dependency'  => array(
    				'element' => 'yog_style',
                    'value'   => array( 'image-text-two' )
   			    )
            ),
            
            array(
                'heading'     => esc_html__( 'Label','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_label',
                'dependency'  => array(
    				'element' => 'yog_style',
                    'value'   => array( 'image-text' )
   			    )
            ),
            
            array(
                'heading'     => esc_html__( 'Button Text','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_btn_text',
                'dependency'  => array(
    				'element' => 'yog_style',
                    'value'   => array( 'image-text-three', 'image-text-four' )
   			    )
            ),
            
            array(
                'heading'     => esc_html__( 'Link','yog'),
                'type'        => 'textfield',
                'value'       => '',
                'param_name'  => 'yog_btn_link'
            ),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		 ),
             
             array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
             )
         )
       )
    );
 
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce Shortcode / Element Shortcode			|						
--------------------------------------------------------------------------------*/    
/**
 * Check if WooCommerce is active
 **/
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( ( is_plugin_active( 'woocommerce/woocommerce.php') || is_plugin_active_for_network( 'woocommerce/woocommerce.php') ) && $yog_theme_options['site-version'] != 'woomart' && class_exists('Woocommerce') ) {
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce product / Element Shortcode			|						
--------------------------------------------------------------------------------*/        
  vc_map( array(
		'name'        => esc_html__( 'Product', 'yog' ),
		'base'        => 'yog_product',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'Show a single product by ID or SKU', 'yog' ),
		'params'      => array(
        
            array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Style', 'yog' ),
				'param_name'  => 'style',
				'value'       => $yog_woo,
				'save_always' => true,
				'description' =>  esc_html__( 'Select how to show product', 'yog' ),
			),
            
			array(
				'type'        => 'autocomplete',
				'heading'     => esc_html__( 'Select identificator', 'yog' ),
				'param_name'  => 'id',
				'description' => esc_html__( 'Input product ID or product SKU or product title to see suggestions', 'yog' ),
			),
            
			array(
				'type'       => 'hidden',
				'param_name' => 'sku',
			)
		)
	));
    
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce products / Element Shortcode			|						
--------------------------------------------------------------------------------*/        
  vc_map( array(
		'name'        => esc_html__( 'Products', 'yog' ),
		'base'        => 'yog_products',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'Show multiple products by ID or SKU.', 'yog' ),
		'params'      => array(
        
            array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Style', 'yog' ),
				'param_name'    => 'style',
				'value'         => $yog_woo,
				'save_always'   => true,
				'description'   =>  esc_html__( 'Select how to show product', 'yog' ),
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'one', 'two', 'book-slider', 'book-mini-slider', 'fashion-slider', 'drink-slider', 'electro-slider', 'furniture-slider', 'furniture-grid', 'glasses-list', 'gym-grid','jewellery-slider', 'jewellery-slider-dual', 'shoes-slider', 'kidswear-grid', 'lingerie-slider', 'glasses-list-main', 'glasses-slider', 'restaurant-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid' )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Sub Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'sub_heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'gym-grid', 'jewellery-slider', 'jewellery-slider-dual', 'kidswear-grid', 'lingerie-slider', 'glasses-list-main', 'glasses-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid'  )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Columns', 'yog' ),
				'value'         => 4,
				'save_always'   => true,
				'param_name'    => 'columns',
				'description'   => esc_html__( 'How much columns grid', 'yog' ),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'three', 'book-slider', 'book-mini-slider', 'gym-grid', 'kidswear-grid', 'lingerie-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid' )
   			     ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Per page', 'yog' ),
				'value'         => 12,
				'save_always'   => true,
				'param_name'    => 'per_page',
				'description'   => esc_html__( 'The "per_page" shortcode determines how many products to show on the page', 'yog' ),
			),
            
			array(
				'type'         => 'dropdown',
				'heading'      => esc_html__( 'Order by', 'yog' ),
				'param_name'   => 'orderby',
				'value'        => $yog_order_by_values,
				'std'          => 'title',
				'save_always'  => true,
				'description'  => sprintf( __( 'Select how to sort retrieved products. More at %s. Default by Title', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'         => 'dropdown',
				'heading'      => esc_html__( 'Sort order', 'yog' ),
				'param_name'   => 'order',
				'value'        => $yog_order_way_values,
				'save_always'  => true,
				'description'  => sprintf( __( 'Designates the ascending or descending order. More at %s. Default by ASC', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'         => 'autocomplete',
				'heading'      => esc_html__( 'Products', 'yog' ),
				'param_name'   => 'ids',
				'settings'     => array(
					'multiple' => true,
					'sortable' => true,
					'unique_values' => true,
				),
				'save_always'  => true,
				'description'  => esc_html__( 'Enter List of Products', 'yog' ),
			),
            
			array(
				'type'         => 'hidden',
				'param_name'   => 'skus',
			),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
		)
	));
            
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce Recent products / Element Shortcode			|						
--------------------------------------------------------------------------------*/    
    
    vc_map( array(
        'name'        => esc_html__( 'Recent products', 'yog' ),
		'base'        => 'yog_recent_products',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'Lists recent products', 'yog' ),
		'params'      => array(
        
            array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Style', 'yog' ),
				'param_name'    => 'style',
				'value'         => $yog_woo,
				'save_always'   => true,
				'description'   =>  esc_html__( 'Select how to show product', 'yog' ),
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'one', 'two', 'book-slider', 'book-mini-slider', 'fashion-slider', 'drink-slider', 'electro-slider', 'furniture-slider', 'furniture-grid', 'glasses-list', 'gym-grid', 'jewellery-slider', 'jewellery-slider-dual', 'shoes-slider', 'kidswear-grid', 'lingerie-slider', 'glasses-list-main', 'glasses-slider', 'restaurant-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid'  )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Sub Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'sub_heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'gym-grid', 'jewellery-slider', 'jewellery-slider-dual', 'kidswear-grid', 'lingerie-slider', 'glasses-list-main', 'glasses-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid'  )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Columns', 'yog' ),
				'value'         => 4,
				'save_always'   => true,
				'param_name'    => 'columns',
				'description'   => esc_html__( 'How much columns grid', 'yog' ),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'three', 'book-slider', 'book-mini-slider', 'gym-grid', 'kidswear-grid', 'lingerie-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid' )
   			     ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Per page', 'yog' ),
				'value'         => 12,
				'save_always'   => true,
				'param_name'    => 'per_page',
				'description'   => esc_html__( 'The "per_page" shortcode determines how many products to show on the page', 'yog' ),
			),
            
			array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Order by', 'yog' ),
				'param_name'    => 'orderby',
				'value'         => $yog_order_by_values,
				'save_always'   => true,
				'description'   => sprintf( __( 'Select how to sort retrieved products. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Sort order', 'yog' ),
				'param_name'    => 'order',
				'value'         => $yog_order_way_values,
				'save_always'   => true,
				'description'   => sprintf( __( 'Designates the ascending or descending order. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
            array(
                'heading'       => esc_html__('Pagination', 'yog'),
    			'type'          => 'checkbox',
    			'param_name'    => 'paginate',
    			'description'   => esc_html__('Make checked to Enable Pagination.', 'yog'),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'three', 'four' )
   			    )
            ),
           
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
		)
	));
    
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce Featured products / Element Shortcode			|						
--------------------------------------------------------------------------------*/    
    
    vc_map( array(
        'name'        => esc_html__( 'Featured products', 'yog' ),
		'base'        => 'yog_featured_products',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'Display products set as featured', 'yog' ),
		'params'      => array(
            
            array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Style', 'yog' ),
				'param_name'    => 'style',
				'value'         => $yog_woo,
				'save_always'   => true,
				'description'   =>  esc_html__( 'Select how to show product', 'yog' ),
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'one', 'two', 'book-slider', 'book-mini-slider', 'fashion-slider', 'drink-slider', 'electro-slider', 'furniture-slider', 'furniture-grid', 'glasses-list', 'gym-grid','jewellery-slider', 'jewellery-slider-dual', 'shoes-slider', 'kidswear-grid', 'lingerie-slider', 'glasses-list-main', 'glasses-slider', 'restaurant-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid'  )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Sub Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'sub_heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'gym-grid', 'jewellery-slider', 'jewellery-slider-dual', 'kidswear-grid', 'lingerie-slider', 'glasses-list-main', 'glasses-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid'  )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Columns', 'yog' ),
				'value'         => 4,
				'save_always'   => true,
				'param_name'    => 'columns',
				'description'   => esc_html__( 'How much columns grid', 'yog' ),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'three', 'book-slider', 'book-mini-slider', 'gym-grid', 'kidswear-grid', 'lingerie-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid' )
   			     ) 
			),
			
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Per page', 'yog' ),
				'value'         => 12,
				'save_always'   => true,
				'param_name'    => 'per_page',
				'description'   => esc_html__( 'The "per_page" shortcode determines how many products to show on the page', 'yog' ),
			),
            
			array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Order by', 'yog' ),
				'param_name'    => 'orderby',
				'value'         => $yog_order_by_values,
				'save_always'   => true,
				'description'   => sprintf( __( 'Select how to sort retrieved products. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Sort order', 'yog' ),
				'param_name'    => 'order',
				'value'         => $yog_order_way_values,
				'save_always'   => true,
				'description'   => sprintf( __( 'Designates the ascending or descending order. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
            array(
                'heading'       => esc_html__('Pagination', 'yog'),
    			'type'          => 'checkbox',
    			'param_name'    => 'paginate',
    			'description'   => esc_html__('Make checked to Enable Pagination.', 'yog'),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'three', 'four' )
   			    ) 
            ),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
		)
	));
    
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce Sale products / Element Shortcode			|						
--------------------------------------------------------------------------------*/    
    
    vc_map( array(
        'name'        => esc_html__( 'Sale products', 'yog' ),
		'base'        => 'yog_sale_products',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'List all products on sale', 'yog' ),
		'params'      => array(
            array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Style', 'yog' ),
				'param_name'    => 'style',
				'value'         => $yog_woo,
				'save_always'   => true,
				'description'   =>  esc_html__( 'Select how to show product', 'yog' ),
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'one', 'two', 'book-slider', 'book-mini-slider', 'fashion-slider', 'drink-slider', 'electro-slider', 'furniture-slider', 'furniture-grid', 'glasses-list', 'gym-grid', 'jewellery-slider', 'jewellery-slider-dual', 'shoes-slider', 'kidswear-grid', 'lingerie-slider', 'glasses-list-main', 'glasses-slider', 'restaurant-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid'  )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Sub Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'sub_heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'gym-grid', 'jewellery-slider', 'jewellery-slider-dual', 'kidswear-grid', 'lingerie-slider', 'glasses-list-main', 'glasses-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid'  )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Columns', 'yog' ),
				'value'         => 4,
				'save_always'   => true,
				'param_name'    => 'columns',
				'description'   => esc_html__( 'How much columns grid', 'yog' ),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'three', 'book-slider', 'book-mini-slider', 'gym-grid', 'kidswear-grid', 'lingerie-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid' )
   			     ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Per page', 'yog' ),
				'value'         => 12,
				'save_always'   => true,
				'param_name'    => 'per_page',
				'description'   => esc_html__( 'The "per_page" shortcode determines how many products to show on the page', 'yog' ),
			),
            
			array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Order by', 'yog' ),
				'param_name'    => 'orderby',
				'value'         => $yog_order_by_values,
				'save_always'   => true,
				'description'   => sprintf( __( 'Select how to sort retrieved products. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Sort order', 'yog' ),
				'param_name'    => 'order',
				'value'         => $yog_order_way_values,
				'save_always'   => true,
				'description'   => sprintf( __( 'Designates the ascending or descending order. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
            array(
                'heading'       => esc_html__('Pagination', 'yog'),
    			'type'          => 'checkbox',
    			'param_name'    => 'paginate',
    			'description'   => esc_html__('Make checked to Enable Pagination.', 'yog'),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'three', 'four' )
   			     ) 
            ),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
		)
	));
    
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce Best Selling products / Element Shortcode			|						
--------------------------------------------------------------------------------*/    
    
    vc_map( array(
        'name'        => esc_html__( 'Best Selling Products', 'yog' ),
		'base'        => 'yog_best_selling_products',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'List best selling products on sale', 'yog' ),
		'params'      => array(
            array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Style', 'yog' ),
				'param_name'    => 'style',
				'value'         => $yog_woo,
				'save_always'   => true,
				'description'   =>  esc_html__( 'Select how to show product', 'yog' ),
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'one', 'two', 'book-slider', 'book-mini-slider', 'fashion-slider', 'drink-slider', 'electro-slider', 'furniture-slider', 'furniture-grid', 'glasses-list', 'gym-grid', 'jewellery-slider', 'jewellery-slider-dual', 'shoes-slider', 'kidswear-grid', 'lingerie-slider', 'glasses-list-main', 'glasses-slider', 'restaurant-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid'  )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Sub Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'sub_heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'gym-grid', 'jewellery-slider', 'jewellery-slider-dual', 'kidswear-grid', 'lingerie-slider', 'glasses-list-main', 'glasses-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid' )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Columns', 'yog' ),
				'value'         => 4,
				'save_always'   => true,
				'param_name'    => 'columns',
				'description'   => esc_html__( 'How much columns grid', 'yog' ),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'three', 'book-slider', 'book-mini-slider', 'gym-grid', 'kidswear-grid', 'lingerie-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid' )
   			     ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Per page', 'yog' ),
				'value'         => 12,
				'param_name'    => 'per_page',
				'save_always'   => true,
				'description'   => esc_html__( 'How much items per page to show', 'yog' ),
			),
			
            array(
                'heading'       => esc_html__('Pagination', 'yog'),
    			'type'          => 'checkbox',
    			'param_name'    => 'paginate',
    			'description'   => esc_html__('Make checked to Enable Pagination.', 'yog'),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'three', 'four' )
   			     ) 
            ),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
		)
	));
    
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce Sale products / Element Shortcode			|						
--------------------------------------------------------------------------------*/    
    
    vc_map( array(
        'name'        => esc_html__( 'Top Rated Products', 'yog' ),
		'base'        => 'yog_top_rated_products',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'List all products on sale', 'yog' ),
		'params'      => array(
            array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Style', 'yog' ),
				'param_name'    => 'style',
				'value'         => $yog_woo,
				'save_always'   => true,
				'description'   =>  esc_html__( 'Select how to show product', 'yog' ),
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'one', 'two', 'book-slider', 'book-mini-slider', 'fashion-slider', 'drink-slider', 'electro-slider', 'furniture-slider', 'furniture-grid', 'glasses-list', 'gym-grid', 'jewellery-slider', 'jewellery-slider-dual', 'shoes-slider', 'kidswear-grid', 'lingerie-slider', 'glasses-list-main', 'glasses-slider', 'restaurant-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid'  )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Sub Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'sub_heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'gym-grid', 'jewellery-slider', 'jewellery-slider-dual', 'kidswear-grid', 'lingerie-slider', 'glasses-list-main', 'glasses-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid'  )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Columns', 'yog' ),
				'value'         => 4,
				'save_always'   => true,
				'param_name'    => 'columns',
				'description'   => esc_html__( 'How much columns grid', 'yog' ),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'three', 'book-slider', 'book-mini-slider', 'gym-grid', 'kidswear-grid', 'lingerie-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two', 'autoparts-grid' )
   			     ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Per page', 'yog' ),
				'value'         => 12,
				'save_always'   => true,
				'param_name'    => 'per_page',
				'description'   => esc_html__( 'The "per_page" shortcode determines how many products to show on the page', 'yog' ),
			),

			array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Order by', 'yog' ),
				'param_name'    => 'orderby',
				'value'         => $yog_order_by_values,
				'save_always'   => true,
				'description'   => sprintf( __( 'Select how to sort retrieved products. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Sort order', 'yog' ),
				'param_name'    => 'order',
				'value'         => $yog_order_way_values,
				'save_always'   => true,
				'description'   => sprintf( __( 'Designates the ascending or descending order. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
            array(
                'heading'       => esc_html__('Pagination', 'yog'),
    			'type'          => 'checkbox',
    			'param_name'    => 'paginate',
    			'description'   => esc_html__('Make checked to Enable Pagination.', 'yog'),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'three', 'four' )
   			     ) 
            ),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
		)
	));
    
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce Category / Element Shortcode			|						
--------------------------------------------------------------------------------*/   
    vc_map( array(
        'name'        => esc_html__( 'Product category', 'yog' ),
		'base'        => 'yog_product_category',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'Show multiple products in a category', 'yog' ),
		'params'      => array( 
            
            array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Style', 'yog' ),
				'param_name'    => 'style',
				'value'         => $yog_woo,
				'save_always'   => true,
				'description'   =>  esc_html__( 'Select how to show product', 'yog' ),
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'one', 'two', 'book-slider', 'book-mini-slider', 'fashion-slider', 'drink-slider', 'electro-slider', 'furniture-slider', 'furniture-grid', 'glasses-list', 'gym-grid', 'jewellery-slider', 'jewellery-slider-dual', 'shoes-slider', 'kidswear-grid', 'lingerie-slider', 'glasses-list-main', 'glasses-slider', 'restaurant-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two'  )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Sub Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'sub_heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'gym-grid', 'jewellery-slider', 'jewellery-slider-dual', 'kidswear-grid', 'lingerie-slider', 'glasses-list-main', 'glasses-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two'  )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Columns', 'yog' ),
				'value'         => 4,
				'save_always'   => true,
				'param_name'    => 'columns',
				'description'   => esc_html__( 'How much columns grid', 'yog' ),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'three', 'book-slider', 'book-mini-slider', 'gym-grid', 'kidswear-grid', 'lingerie-slider', 'flower-grid', 'autoparts-grid', 'autoparts-grid-two' )
   			     ) 
			),
            
            array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Per page', 'yog' ),
				'value'       => 12,
				'save_always' => true,
				'param_name'  => 'per_page',
				'description' => esc_html__( 'How much items per page to show', 'yog' ),
			),
            
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Order by', 'yog' ),
				'param_name'  => 'orderby',
				'value'       => $yog_order_by_values,
				'save_always' => true,
				'description' => sprintf( __( 'Select how to sort retrieved products. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Sort order', 'yog' ),
				'param_name'  => 'order',
				'value'       => $yog_order_way_values,
				'save_always' => true,
				'description' => sprintf( __( 'Designates the ascending or descending order. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Category', 'yog' ),
				'value'       => yog_get_taxonomy_dropdown('product_cat'),
				'param_name'  => 'category',
				'save_always' => true,
				'description' => esc_html__( 'Product category list', 'yog' ),
			),
            
            array(
                'heading'       => esc_html__('Pagination', 'yog'),
    			'type'          => 'checkbox',
    			'param_name'    => 'paginate',
    			'description'   => esc_html__('Make checked to Enable Pagination.', 'yog'),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'three', 'four' )
   			     ) 
            ),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
        )
	));
    
/*-------------------------------------------------------------------------------
|				Flipmart: Woocommerce Category / Element Shortcode			|						
--------------------------------------------------------------------------------*/   
    vc_map( array(
        'name'        => esc_html__( 'Product categories', 'yog' ),
		'base'        => 'yog_product_categories',
		'icon'        => 'icon-wpb-woocommerce',
		'category'    => esc_html__( 'WooCommerce', 'yog' ),
		'description' => esc_html__( 'Display product categories loop', 'yog' ),
		'params'      => array( 
            
            array(
				'type'          => 'dropdown',
				'heading'       => esc_html__( 'Style', 'yog' ),
				'param_name'    => 'style',
				'value'         => $yog_cat,
				'save_always'   => true,
				'description'   =>  esc_html__( 'Select how to show categories', 'yog' ),
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Heading', 'yog' ),
				'save_always'   => true,
				'param_name'    => 'heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'one', 'two', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten' )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Sub Heading', 'yog' ),
				'param_name'    => 'sub_heading',
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'six', 'seven', 'ten'  )
   			    ) 
			),
            
            array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Columns', 'yog' ),
				'value'         => 4,
				'save_always'   => true,
				'param_name'    => 'columns',
				'description'   => esc_html__( 'How much columns grid', 'yog' ),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'three', 'seven', 'nine', 'four', 'ten' )
   			     ) 
			),
            
            array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Per page', 'yog' ),
				'value'       => 12,
				'save_always' => true,
				'param_name'  => 'per_page',
				'description' => esc_html__( 'How much items per page to show', 'yog' ),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'four', 'five', 'seven', 'eight', 'nine'  )
   			    ) 
			),
            
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Order by', 'yog' ),
				'param_name'  => 'orderby',
				'value'       => $yog_order_by_values,
				'save_always' => true,
				'description' => sprintf( __( 'Select how to sort retrieved products. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Sort order', 'yog' ),
				'param_name'  => 'order',
				'value'       => $yog_order_way_values,
				'save_always' => true,
				'description' => sprintf( __( 'Designates the ascending or descending order. More at %s.', 'yog' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
			),
            
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Number', 'yog' ),
				'param_name'  => 'hide_empty',
				'description' => esc_html__( 'Hide empty', 'yog' ),
			),
            
			array(
				'type'        => 'autocomplete',
				'heading'     => esc_html__( 'Categories', 'yog' ),
				'param_name'  => 'ids',
				'settings'    => array(
					'multiple' => true,
					'sortable' => true,
				),
				'save_always' => true,
				'description' => esc_html__( 'List of product categories', 'yog' ),
			),
            
            array(
                'heading'     => __( 'Banner Image', 'yog' ),
    			'type'        => 'attach_image',
    			'param_name'  => 'yog_banner',
    			'value'       => '',
    			'description' => __( 'Select image from media library.', 'yog' ),
                'dependency'    => array(
    				'element'   => 'style',
                    'value'     => array( 'nine' )
   			    ) 
    		),
            
            array(
                'heading'     => esc_html__('Animation', 'yog'),
    			'type'        => 'dropdown',
    			'param_name'  => 'yog_animation',
    			'value'       => yog_get_animations(),
    			'description' => esc_html__('Choose Animation from the drop down list.', 'yog'),
    		),
             
            array(
                'heading'     => esc_html__( 'Delay','yog'),
                'type'        => 'textfield',
                'param_name'  => 'yog_delay',
            )
        )
	));
 
}