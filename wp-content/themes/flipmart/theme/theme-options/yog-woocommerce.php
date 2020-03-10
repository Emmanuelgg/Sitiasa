<?php
/*
 * WooCommerce Section
*/
$this->sections[] = array(
	'title' => esc_html__( 'Woocommerce', 'flipmart' ),
	'icon'  => 'el-icon-shopping-cart'
);

if( 'woomart' == yog_helper()->yog_get_layout( 'version' ) ){

    //Shop Page
    $this->sections[] = array(
    	'title'      => esc_html__( 'Shop Settings', 'flipmart' ),
    	'subsection' => true,
    	'fields'     => array(
        
    		array(
                'title'         => esc_html__('Shop Layout', 'flipmart'),
    			'type'          => 'select',
    			'id'            => 'shop-layout',
    			'options'       => array(
                    'grid' =>  esc_html__( 'Grid Layout', 'flipmart' ),
                    'list' =>  esc_html__( 'List Layout', 'flipmart' ),
                ),
    			'description'   => esc_html__('Choose shop page layout from the drop down list.', 'flipmart'),
                'default'       => 'grid'
    		), 
             
            array(
                'id'            => 'shop-column',
                'type'          => 'slider',
                'title'         => esc_html__('Shop column', 'flipmart'),
                'subtitle'      => esc_html__('Choose Shop Gird Column.', 'flipmart'),
                'desc'          => esc_html__('Slider description. Min: 1, max: 4, step: 1, default value: 4', 'flipmart'),
                'default'       => 4,
                'min'           => 1,
                'step'          => 1,
                'max'           => 4,
                'display_value' => 'label',
                'required'      =>  array( 'shop-layout', 'equals', 'grid' ),
            ),
            
            array(
                'id'            => 'shop-limit',
                'type'          => 'slider',
                'title'         => esc_html__('Shop Products', 'flipmart'),
                'subtitle'      => esc_html__('Choose Shop Products.', 'flipmart'),
                'desc'          => esc_html__('Slider description. Min: 1, max: 40, step: 4, default value: 16', 'flipmart'),
                'default'       => 6,
                'min'           => 1,
                'step'          => 1,
                'max'           => 40,
                'display_value' => 'label'
            ),
            
            array(
                'id'            => 'shop-info',
                'type'          => 'info',
                'style'         => 'info',
                'title'         => esc_html__( 'Shop Top Bar', 'flipmart' ),
                'desc'          => esc_html__( 'Please choose shop top bar setting', 'flipmart' ),
            ),
            
            array(
                'id'            => 'shop-filter',
                'type'          => 'switch',
                'title'         => esc_html__('Show Catalog Ordering', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'            => 'result-count',
                'type'          => 'switch',
                'title'         => esc_html__('Show Catalog Ordering Result Count', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'            => 'top-pagination',
                'type'          => 'switch',
                'title'         => esc_html__('Show Top Pagination', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'            => 'shop-pagination',
                'type'          => 'switch',
                'title'         => esc_html__('Show Bottom Pagination', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'            => 'tag-info',
                'type'          => 'info',
                'style'         => 'info',
                'title'         => esc_html__( 'Shop Flash', 'flipmart' ),
                'desc'          => esc_html__( 'Please choose shop flash tag setting', 'flipmart' ),
            ),
            
            array(
                'id'            => 'sale-tag',
                'type'          => 'switch',
                'title'         => esc_html__('Show Sale Flash', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'title'         => esc_html__( 'Sale Flash','flipmart'),
                'type'          => 'text',
                'id'            => 'sale-tag-text',
                'required'      =>  array( 'sale-tag', 'equals', true ),
            ),
            
            array(
                'id'            => 'hot-tag',
                'type'          => 'switch',
                'title'         => esc_html__('Show Hot Flash', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'title'         => esc_html__( 'Hot Flash','flipmart'),
                'type'          => 'text',
                'id'            => 'hot-tag-text',
                'required'      =>  array( 'hot-tag', 'equals', true ),
            ),
            
            array(
                'id'            => 'stock-tag',
                'type'          => 'switch',
                'title'         => esc_html__('Show Stock Flash', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'title'         => esc_html__( 'Stock Flash','flipmart'),
                'type'          => 'text',
                'id'            => 'stock-tag-text',
                'required'      =>  array( 'stock-tag', 'equals', true ),
            )
    	) 
    );

    
}else{

    //Shop Page
    $this->sections[] = array(
    	'title'      => esc_html__( 'Shop Settings', 'flipmart' ),
    	'subsection' => true,
    	'fields'     => array(
        
    		array(
                'title'         => esc_html__('Shop Layout', 'flipmart'),
    			'type'          => 'select',
    			'id'            => 'shop-layout',
    			'options'       => array(
                    'grid' =>  esc_html__( 'Grid Layout', 'flipmart' ),
                    'list' =>  esc_html__( 'List Layout', 'flipmart' ),
                ),
    			'description'   => esc_html__('Choose shop page layout from the drop down list.', 'flipmart'),
                'default'       => 'grid'
    		), 
             
            array(
                'id'            => 'shop-column',
                'type'          => 'slider',
                'title'         => esc_html__('Shop column', 'flipmart'),
                'subtitle'      => esc_html__('Choose Shop Gird Column.', 'flipmart'),
                'desc'          => esc_html__('Slider description. Min: 1, max: 4, step: 1, default value: 4', 'flipmart'),
                'default'       => 4,
                'min'           => 1,
                'step'          => 1,
                'max'           => 4,
                'display_value' => 'label',
                'required'      =>  array( 'shop-layout', 'equals', 'grid' ),
            ),
            
            array(
                'id'            => 'shop-limit',
                'type'          => 'slider',
                'title'         => esc_html__('Shop Products', 'flipmart'),
                'subtitle'      => esc_html__('Choose Shop Products.', 'flipmart'),
                'desc'          => esc_html__('Slider description. Min: 1, max: 40, step: 4, default value: 16', 'flipmart'),
                'default'       => 6,
                'min'           => 1,
                'step'          => 1,
                'max'           => 40,
                'display_value' => 'label'
            ),
            
            array(
                'id'            => 'shop-info',
                'type'          => 'info',
                'style'         => 'info',
                'title'         => esc_html__( 'Shop Top Bar', 'flipmart' ),
                'desc'          => esc_html__( 'Please choose shop top bar setting', 'flipmart' ),
            ),
            
            array(
                'id'            => 'top-bar',
                'type'          => 'switch',
                'title'         => esc_html__('Show Top Bar', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'            => 'shop-filter',
                'type'          => 'switch',
                'title'         => esc_html__('Show Catalog Ordering', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'            => 'shop-pagination',
                'type'          => 'switch',
                'title'         => esc_html__('Show Pagination', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
    			'id'            => 'info-content',
    			'type'          => 'info',
    			'desc'          =>  esc_html__('Product Sale Banner', 'flipmart')
    		), 
            
            array(
                'id'            => 'shop-sale-banner',
                'type'          => 'switch',
                'title'         => esc_html__('Show Banner', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
    			'id'            => 'shop-banner',
    			'type'          => 'media',
    			'url'           => true,
    			'title'         => esc_html__('Banner Background Image', 'flipmart'),
    			'subtitle'      => esc_html__('Select an image file for your banner background.', 'flipmart'),
                'required'      =>  array( 'shop-sale-banner', 'equals', true ),
    		),
            
            array(
                'title'         => esc_html__( 'Heading','flipmart'),
                'type'          => 'text',
                'id'            => 'shop-banner-heading',
                'required'      =>  array( 'shop-sale-banner', 'equals', true ),
            ),
            
            array(
                'title'         => esc_html__( 'Sub Heading','flipmart'),
                'type'          => 'text',
                'id'            => 'shop-banner-sub-heading',
                'required'      =>  array( 'shop-sale-banner', 'equals', true ),
            ),
            
            array(
                'title'         => esc_html__( 'Content','flipmart'),
                'type'          => 'textarea',
                'id'            => 'shop-banner-content',
                'required'      =>  array( 'shop-sale-banner', 'equals', true ),
            ),
            
            array(
    			'id'            => 'shop-view',
    			'type'          => 'info',
    			'title'         => esc_html__('Quick View Icon', 'flipmart'),
    			'subtitle'      => esc_html__('Choose No if do not want to show Quick View icon with produts.', 'flipmart')
    		),
            
            array(
                'id'            => 'shop-quick-view',
                'type'          => 'switch',
                'title'         => esc_html__('Show Quick View Icon', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'            => 'tag-info',
                'type'          => 'info',
                'style'         => 'info',
                'title'         => esc_html__( 'Shop Flash', 'flipmart' ),
                'desc'          => esc_html__( 'Please choose shop flash tag setting', 'flipmart' ),
            ),
            
            array(
                'id'            => 'sale-tag',
                'type'          => 'switch',
                'title'         => esc_html__('Show Sale Flash', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'title'         => esc_html__( 'Sale Flash','flipmart'),
                'type'          => 'text',
                'id'            => 'sale-tag-text',
                'required'      =>  array( 'sale-tag', 'equals', true ),
            ),
            
            array(
                'id'            => 'new-tag',
                'type'          => 'switch',
                'title'         => esc_html__('Show New Flash', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'title'         => esc_html__( 'New Flash','flipmart'),
                'type'          => 'text',
                'id'            => 'new-tag-text',
                'required'      =>  array( 'new-tag', 'equals', true ),
            ),
            
            array(
                'id'            => 'hot-tag',
                'type'          => 'switch',
                'title'         => esc_html__('Show Hot Flash', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'title'         => esc_html__( 'Hot Flash','flipmart'),
                'type'          => 'text',
                'id'            => 'hot-tag-text',
                'required'      =>  array( 'hot-tag', 'equals', true ),
            ),
            
            array(
                'id'            => 'stock-tag',
                'type'          => 'switch',
                'title'         => esc_html__('Show Stock Flash', 'flipmart'),
                'default'       => true,
                'on'            => esc_html__('Yes', 'flipmart'),
                'off'           => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'title'         => esc_html__( 'Stock Flash','flipmart'),
                'type'          => 'text',
                'id'            => 'stock-tag-text',
                'required'      =>  array( 'stock-tag', 'equals', true ),
            )
    	) 
    );
    
}

//Product Single Page
$this->sections[] = array(
	'title'      => esc_html__( 'Single Product', 'flipmart' ),
	'subsection' => true,
	'fields'     => array(
		
        array(
			'id'            => 'info-content',
			'type'          => 'info',
			'desc'          =>  esc_html__('Product single contents', 'flipmart')
		), 
        
        array(
            'title'         => esc_html__('Animation', 'flipmart'),
			'type'          => 'select',
			'id'            => 'product-content-animation',
			'options'       => array_flip( yog_get_theme_animations() ),
			'description'   => esc_html__('Choose Animation from the drop down list.', 'flipmart'),
		), 
         
        array(
            'title'         => esc_html__( 'Delay','flipmart'),
            'type'          => 'text',
            'id'            => 'product-content-delay',
        ),
        
        array(
			'id'            => 'info-content',
			'type'          => 'info',
			'desc'          =>  esc_html__('Product single tab', 'flipmart')
		), 
        
        array(
            'id'            => 'product-tab',
            'type'          => 'switch',
            'title'         => esc_html__('Product Tab', 'flipmart'),
            'default'       => true,
            'on'            => esc_html__('Yes', 'flipmart'),
            'off'           => esc_html__('No', 'flipmart'),
        ),
        
        array(
            'title'         => esc_html__('Animation', 'flipmart'),
			'type'          => 'select',
			'id'            => 'product-tab-animation',
            'options'       => array_flip( yog_get_theme_animations() ),
			'description'   => esc_html__('Choose Animation from the drop down list.', 'flipmart'),
            'required'      =>  array( 'product-tab', 'equals', true ),
		), 
         
        array(
            'title'         => esc_html__( 'Delay','flipmart'),
            'type'          => 'text',
            'id'            => 'product-tab-delay',
            'required'      =>  array( 'product-tab', 'equals', true ),
        ),
        
        array(
            'id'            => 'shop-info-one',
            'type'          => 'info',
            'style'         => 'info',
            'title'         => esc_html__( 'Related Products', 'flipmart' ),
            'desc'          => esc_html__( 'Please choose related products setting', 'flipmart' ),
        ),
        
        array(
            'id'            => 'product-related',
            'type'          => 'switch',
            'title'         => esc_html__('Related Products', 'flipmart'),
            'default'       => true,
            'on'            => esc_html__('Yes', 'flipmart'),
            'off'           => esc_html__('No', 'flipmart'),
        ),
        
        array(
            'id'            => 'product-rel-limit',
            'type'          => 'slider',
            'title'         => esc_html__('Related Products', 'flipmart'),
            'subtitle'      => esc_html__('Choose Related Products.', 'flipmart'),
            'desc'          => esc_html__('Slider description. Min: 1, max: 40, step: 4, default value: 16', 'flipmart'),
            'default'       => 8,
            'min'           => 1,
            'step'          => 1,
            'max'           => 40,
            'display_value' => 'label',
            'required'      =>  array( 'product-related', 'equals', true ),
        ),
        
        array(
            'title'         => esc_html__('Animation', 'flipmart'),
			'type'          => 'select',
			'id'            => 'product-related-animation',
			'options'       => array_flip( yog_get_theme_animations() ),
			'description'   => esc_html__('Choose Animation from the drop down list.', 'flipmart'),
            'required'      =>  array( 'product-related', 'equals', true ),
		), 
         
        array(
            'title'         => esc_html__( 'Delay','flipmart'),
            'type'          => 'text',
            'id'            => 'product-related-delay',
            'required'      =>  array( 'product-related', 'equals', true ),
        ),
        
        array(
            'id'            => 'shop-info-two',
            'type'          => 'info',
            'style'         => 'info',
            'title'         => esc_html__( 'Up Sell Products', 'flipmart' ),
            'desc'          => esc_html__( 'Please choose up sell products setting', 'flipmart' ),
            'required'      =>  array( 'product-related', 'equals', true ),
        ),
        
        array(
            'id'            =>  'product-sell',
            'type'          => 'switch',
            'title'         => esc_html__('Up Sell Products', 'flipmart'),
            'default'       => true,
            'on'            => esc_html__('Yes', 'flipmart'),
            'off'           => esc_html__('No', 'flipmart'),
        ),
        
        array(
            'id'            => 'product-sell-limit',
            'type'          => 'slider',
            'title'         => esc_html__('Up Sell Products', 'flipmart'),
            'subtitle'      => esc_html__('Choose Up Sell Products.', 'flipmart'),
            'desc'          => esc_html__('Slider description. Min: 1, max: 40, step: 4, default value: 16', 'flipmart'),
            'default'       => 8,
            'min'           => 1,
            'step'          => 1,
            'max'           => 40,
            'display_value' => 'label',
            'required'      =>  array( 'product-sell', 'equals', true ),
        ),
        
        array(
            'title'         => esc_html__('Animation', 'flipmart'),
			'type'          => 'select',
			'id'            => 'product-sell-animation',
            'required'      =>  array( 'product-sell', 'equals', true ),
			'options'       => array_flip( yog_get_theme_animations() ),
			'description'   => esc_html__('Choose Animation from the drop down list.', 'flipmart'),
		), 
         
        array(
            'title'         => esc_html__( 'Delay','flipmart'),
            'type'          => 'text',
            'required'      =>  array( 'product-sell', 'equals', true ),
            'id'            => 'product-sell-delay',
        ),
        
        array(
            'id'            => 'shop-info-three',
            'type'          => 'info',
            'style'         => 'info',
            'title'         => esc_html__( 'Cross Sell Products', 'flipmart' ),
            'desc'          => esc_html__( 'Please choose cross sell products setting', 'flipmart' ),
        ),
        
        array(
            'id'            => 'product-cross',
            'type'          => 'switch',
            'title'         => esc_html__('Cross Sell Products', 'flipmart'),
            'default'       => true,
            'on'            => esc_html__('Yes', 'flipmart'),
            'off'           => esc_html__('No', 'flipmart'),
        ),
        
        array(
            'id'            => 'product-cross-limit',
            'type'          => 'slider',
            'title'         => esc_html__('Cross Sell Products', 'flipmart'),
            'subtitle'      => esc_html__('Choose Cross Sell Products.', 'flipmart'),
            'desc'          => esc_html__('Slider description. Min: 1, max: 40, step: 4, default value: 16', 'flipmart'),
            'default'       => 8,
            'min'           => 1,
            'step'          => 1,
            'max'           => 40,
            'display_value' => 'label',
            'required'      =>  array( 'product-cross', 'equals', true ),
        ),
        
        array(
            'id'            => 'shop-qr-code-info',
            'type'          => 'info',
            'style'         => 'info',
            'title'         => esc_html__( 'Product QR Code', 'flipmart' ),
            'desc'          => esc_html__( 'Please choose product url display in QR Code', 'flipmart' )
        ),
        
        array(
            'id'            =>  'product-qr-code',
            'type'          => 'switch',
            'title'         => esc_html__('Product QR Code', 'flipmart'),
            'default'       => true,
            'on'            => esc_html__('Yes', 'flipmart'),
            'off'           => esc_html__('No', 'flipmart'),
        ),
	)
);