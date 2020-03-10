<?php
/*
 * Header Section
*/
$this->sections[] = array(
	'title'  =>   esc_html__('Header', 'flipmart'),
	'icon'   => 'el-icon-photo'
);

if( yog_helper()->yog_check_layout( 'fashion' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            array(
                'id'       => 'opt-top-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Top Bar Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please choose header top bar settings using options ( Top Bar Enable / Disable etc.. ).', 'flipmart' )
            ),   
                     
            array(
                'id'       => 'header-fashion-top',
                'type'     => 'switch',
                'title'    => esc_html__('Show Top Bar', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),  
            
            array(
                'id'       => 'header-fashion-top-currency',
                'type'     => 'switch',
                'title'    => esc_html__('Show Currency Switcher', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-fashion-top','equals',true)
            ),
            
            array(
                'id'       => 'header-fashion-top-sec-menu',
                'type'     => 'switch',
                'title'    => esc_html__('Show Menu', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide top bar menu', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-fashion-top','equals',true)
            ),
            
            array(
                'id'       => 'opt-fashion-search-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Search Area Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please choose header search area settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-fashion-search-area',
                'type'     => 'switch',
                'title'    => esc_html__('Show Search Area', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide search area which contain search form and category selector', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),
            
            array(
                'id'       => 'header-fashion-category-filter',
                'type'     => 'switch',
                'title'    => esc_html__('Show Category Filter', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide search form category filter', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-fashion-search-area','equals',true)
            ),
            
            array(
                'id'       => 'opt-fashion-button-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Button Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header logo bar button settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-fashion-add-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Show Add to Cart Button', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),
            
            array(
                'id'       => 'header-fashion-login',
                'type'     => 'switch',
                'title'    => esc_html__('Show Login / Logout Button', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),
            
            array(
                'id'       => 'opt-fashion-phone-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Menu Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header menu content settings.', 'flipmart' ),
            ),
        
            array(
                'id'       => 'header-fashion-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart')
            )
        )
    );
    
}elseif( yog_helper()->yog_check_layout( 'book' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            array(
                'id'       => 'opt-book-top-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Top Bar Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please choose header top bar settings using options ( Top Bar Enable / Disable etc.. ).', 'flipmart' ),
            ),   
                     
            array(
                'id'       => 'header-book-top',
                'type'     => 'switch',
                'title'    => esc_html__('Show Top Bar', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),  
            
            array(
                'id'       => 'header-book-top-currency',
                'type'     => 'switch',
                'title'    => esc_html__('Show Currency Switcher', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-book-top','equals',true),
            ),
            
            array(
                'id'       => 'opt-book-contact-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Contact Information', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar contact information ( Phone number,  Email ) content settings.', 'flipmart' ),
                'required' => array('header-top','equals',true),
            ),
        
            array(
                'id'       => 'header-book-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart'),
                'required' => array('header-book-top','equals',true),
            ),
            
            array(
                'id'       => 'header-book-email',
                'type'     => 'text',
                'title'    => esc_html__('Email Address', 'flipmart'),
                'required' => array('header-book-top','equals',true),
            ),
            
            array(
                'id'       => 'opt-book-cart-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Add to Cart Button Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header add to cart button settings.', 'flipmart' ),
                'required' => array('header-book-top','equals',true),
            ),
            
            array(
                'id'       => 'header-book-add-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Show Add to Cart Button', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-book-top','equals',true),
            )
        )
    );

}elseif( yog_helper()->yog_check_layout( 'cosmetic' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
 
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            
            array(
                'id'       => 'header-cosmetic-sec-menu',
                'type'     => 'switch',
                'title'    => esc_html__('Show Menu', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide secondary menu', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),
            
            array(
                'id'       => 'opt-cosmetic-contact-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Contact Information', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar contact information ( Phone number ) content settings.', 'flipmart' ),
            ),
        
            array(
                'id'       => 'header-cosmetic-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart')
            ),
            
            array(
                'id'       => 'opt-cosmetic-cart-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Add to Cart Button Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header add to cart button settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-cosmetic-add-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Show Add to Cart Button', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            )
                  
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'drink' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
 
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            
            array(
                'id'       => 'header-drink-sec-menu',
                'type'     => 'switch',
                'title'    => esc_html__('Show Menu', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide secondary menu', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),
            
            array(
                'id'       => 'header-drink-currency',
                'type'     => 'switch',
                'title'    => esc_html__('Show Currency Switcher', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),
            
            array(
                'id'       => 'opt-drink-contact-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Contact Information', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar contact information ( Phone number ) content settings.', 'flipmart' ),
            ),
        
            array(
                'id'       => 'header-drink-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart')
            ),
            
            array(
                'id'       => 'opt-drink-cart-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Add to Cart Button Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header add to cart button settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-drink-add-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Show Add to Cart Button', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            )
                  
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'electro' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            array(
                'id'       => 'opt-electro-top-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Top Bar Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please choose header top bar settings using options ( Top Bar Enable / Disable etc.. ).', 'flipmart' ),
            ),   
                     
            array(
                'id'       => 'header-electro-top',
                'type'     => 'switch',
                'title'    => esc_html__('Show Top Bar', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),  
            
            array(
                'id'       => 'header-electro-currency',
                'type'     => 'switch',
                'title'    => esc_html__('Show Currency Switcher', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-electro-top','equals',true),
            ),
            
            array(
                'id'       => 'header-electro-link',
                'type'     => 'switch',
                'title'    => esc_html__('Show Sign In / Sign out Link', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-electro-top','equals',true),
            ),
            
            array(
                'id'       => 'opt-electro-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Contact Information', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar contact information ( Phone number ) content settings.', 'flipmart' ),
                'required' => array('header-top','equals',true),
            ),
        
            array(
                'id'       => 'header-electro-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart'),
                'required' => array('header-electro-top','equals',true),
            ),
            
            array(
                'id'       => 'opt-electro-cart-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Add to Cart Button Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header add to cart button settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-electro-add-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Show Add to Cart Button', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),
            
            array(
                'id'       => 'header-electro-search-area',
                'type'     => 'switch',
                'title'    => esc_html__('Show Search Area', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide search area which contain search form and category selector', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),
            
            array(
                'id'       => 'header-electro-category-filter',
                'type'     => 'switch',
                'title'    => esc_html__('Show Category Filter', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide search form category filter', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-electro-search-area','equals',true),
            ),
            
            array(
                'id'       => 'header-electro-sec-menu',
                'type'     => 'switch',
                'title'    => esc_html__('Show Category Menu', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide top bar menu', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),
        )
    );

}elseif( yog_helper()->yog_check_layout( 'engineer' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            array(
                'id'       => 'opt-engineer-top-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Top Bar Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please choose header top bar settings using options ( Top Bar Enable / Disable etc.. ).', 'flipmart' ),
            ),   
                     
            array(
                'id'       => 'header-engineer-top',
                'type'     => 'switch',
                'title'    => esc_html__('Show Top Bar', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),  
            
            array(
                'id'       => 'header-engineer-currency',
                'type'     => 'switch',
                'title'    => esc_html__('Show Currency Switcher', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-engineer-top','equals',true),
            ),
            
            array(
                'id'       => 'header-engineer-link',
                'type'     => 'switch',
                'title'    => esc_html__('Show Sign In / Sign out Link', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-engineer-top','equals',true),
            ),
            
            array(
                'id'       => 'opt-engineer-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Contact Information', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar contact information ( Phone number ) content settings.', 'flipmart' ),
                'required' => array('header-top','equals',true),
            ),
        
            array(
                'id'       => 'header-engineer-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart'),
                'required' => array('header-engineer-top','equals',true),
            ),
            
            array(
                'id'       => 'opt-engineer-search-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Search Area Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please choose header search area settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-engineer-search-area',
                'type'     => 'switch',
                'title'    => esc_html__('Show Search Area', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide search area which contain search form and category selector', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            )
        )
    );

}elseif( yog_helper()->yog_check_layout( 'finances' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            array(
                'id'       => 'opt-finances-top-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Top Bar Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please choose header top bar settings using options ( Top Bar Enable / Disable etc.. ).', 'flipmart' ),
            ),   
                     
            array(
                'id'       => 'header-finances-top',
                'type'     => 'switch',
                'title'    => esc_html__('Show Top Bar', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),  
            
            array(
                'id'       => 'header-finances-currency',
                'type'     => 'switch',
                'title'    => esc_html__('Show Currency Switcher', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-finances-top','equals',true),
            ),
            
            array(
                'id'       => 'header-finances-link',
                'type'     => 'switch',
                'title'    => esc_html__('Show Sign In / Sign out Link', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-electro-top','equals',true),
            ),
            
            array(
                'id'       => 'opt-finances-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Contact Information', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar contact information ( Phone number ) content settings.', 'flipmart' ),
                'required' => array('header-top','equals',true),
            ),
        
            array(
                'id'       => 'header-finances-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart'),
                'required' => array('header-finances-top','equals',true),
            ),
            
            array(
                'id'       => 'header-finances-email',
                'type'     => 'text',
                'title'    => esc_html__('Email', 'flipmart'),
                'required' => array('header-finances-top','equals',true),
            ),
            
            array(
                'id'       => 'opt-finances-cart-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Add to Cart Button Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header add to cart button settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-finances-add-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Show Add to Cart Button', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            )
            
        )
    );

}elseif( yog_helper()->yog_check_layout( 'furniture' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            
            array(
                'id'       => 'opt-furniture-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Contact Information', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar contact information ( Phone number ) content settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-furniture-phone-title',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number Title', 'flipmart')
            ),
        
            array(
                'id'       => 'header-furniture-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart')
            ),
            
            array(
                'id'       => 'opt-furniture-cart-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Add to Cart Button Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header add to cart button settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-furniture-add-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Show Add to Cart Button', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),
            
            array(
                'id'       => 'opt-furniture-search-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Search Area Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please choose header search area settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-furniture-search-area',
                'type'     => 'switch',
                'title'    => esc_html__('Show Search Area', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide search area which contain search form', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            )
            
        )
    );

}elseif( yog_helper()->yog_check_layout( 'glasses' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            
            array(
                'id'       => 'opt-glasses-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Top Bar', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar content settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-glasses-top',
                'type'     => 'switch',
                'title'    => esc_html__('Show Top Bar', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),  
            
            array(
                'id'       => 'header-glasses-top-currency',
                'type'     => 'switch',
                'title'    => esc_html__('Show Currency Switcher', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-glasses-top','equals',true)
            ),
            
            array(
                'id'       => 'header-glasses-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart'),
                'required' => array('header-glasses-top','equals',true),
            ),
            
            array(
                'id'       => 'header-glasses-link',
                'type'     => 'switch',
                'title'    => esc_html__('Show Sign In / Sign out Link', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-glasses-top','equals',true),
            ),
            
            array(
                'id'       => 'opt-glasses-cart-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Add to Cart Button Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header add to cart button settings.', 'flipmart' ),
                'required' => array('header-glasses-top','equals',true),
            ),
            
            array(
                'id'       => 'header-glasses-add-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Show Add to Cart Button', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-glasses-top','equals',true),
            ),
            
            array(
                'id'       => 'opt-glasses-search-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Search Area Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please choose header search area settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-glasses-search-area',
                'type'     => 'switch',
                'title'    => esc_html__('Show Search Area', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide search area which contain search form', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            )
            
        )
    );

}elseif( yog_helper()->yog_check_layout( 'gym' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            
            array(
                'id'       => 'opt-gym-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Top Bar', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar content settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-gym-top',
                'type'     => 'switch',
                'title'    => esc_html__('Show Top Bar', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),  
            
            array(
                'id'       => 'header-gym-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart'),
                'required' => array('header-gym-top','equals',true),
            ),
            
            array(
                'id'       => 'opt-gym-cart-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Add to Cart Button Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header add to cart button settings.', 'flipmart' ),
                'required' => array('header-gym-top','equals',true),
            ),
            
            array(
                'id'       => 'header-gym-add-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Show Add to Cart Button', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-gym-top','equals',true),
            )
        )
    );

}elseif( yog_helper()->yog_check_layout( 'hosting' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            
            array(
                'id'       => 'opt-hosting-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Top Bar', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar content settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-hosting-top',
                'type'     => 'switch',
                'title'    => esc_html__('Show Top Bar', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ), 
            
            array(
                'id'       => 'header-hosting-link',
                'type'     => 'switch',
                'title'    => esc_html__('Links', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-hosting-top','equals',true)
            ),  
            
            array(
                'id'       => 'header-hosting-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart'),
                'required' => array('header-hosting-top','equals',true)
            ),
            
            array(
                'id'       => 'header-hosting-email',
                'type'     => 'text',
                'title'    => esc_html__('Email', 'flipmart'),
                'required' => array('header-hosting-top','equals',true)
            )
        )
    );

}elseif( yog_helper()->yog_check_layout( 'jewellery' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            
            array(
                'id'       => 'header-jewellery-currency',
                'type'     => 'switch',
                'title'    => esc_html__('Currency', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),
            
            array(
                'id'       => 'header-jewellery-link',
                'type'     => 'switch',
                'title'    => esc_html__('Links', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),
            
            array(
                'id'       => 'header-jewellery-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Shopping Cart', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),
            
            array(
                'id'       => 'header-jewellery-search',
                'type'     => 'switch',
                'title'    => esc_html__('Search Form', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),   
            
            array(
                'id'       => 'header-jewellery-link',
                'type'     => 'switch',
                'title'    => esc_html__('Links', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            ),    
            
            array(
                'id'       => 'header-jewellery-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart')
            ),
            
            array(
                'id'       => 'header-jewellery-email',
                'type'     => 'text',
                'title'    => esc_html__('Email', 'flipmart')
            )
        )
    );

}elseif( yog_helper()->yog_check_layout( 'kidswear' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            
            array(
                'id'       => 'opt-kidswear-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Top Bar', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar content settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-kidswear-top',
                'type'     => 'switch',
                'title'    => esc_html__('Show Top Bar', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'       => 'header-kidswear-currency',
                'type'     => 'switch',
                'title'    => esc_html__('Currency', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-kidswear-top','equals',true)
            ),
            
            array(
                'id'       => 'header-kidswear-link',
                'type'     => 'switch',
                'title'    => esc_html__('Links', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-kidswear-top','equals',true)
            ),
            
            array(
                'id'       => 'header-kidswear-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Shopping Cart', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-kidswear-top','equals',true)
            ),
            
            array(
                'id'       => 'header-kidswear-search',
                'type'     => 'switch',
                'title'    => esc_html__('Search Form', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-kidswear-top','equals',true)
            )
        )
    );

}elseif( yog_helper()->yog_check_layout( 'lawyer' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            
            array(
                'id'       => 'opt-lawyer-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Top Bar', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar content settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-lawyer-top',
                'type'     => 'switch',
                'title'    => esc_html__('Show Top Bar', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'       => 'header-lawyer-currency',
                'type'     => 'switch',
                'title'    => esc_html__('Currency', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-lawyer-top','equals',true)
            ),
            
            array(
                'id'       => 'header-lawyer-link',
                'type'     => 'switch',
                'title'    => esc_html__('Links', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-lawyer-top','equals',true)
            ),
            
            array(
                'id'       => 'header-lawyer-tag',
                'type'     => 'textarea',
                'title'    => esc_html__('Tag Line', 'flipmart'),
                'required' => array('header-lawyer-top','equals',true)
            ),
            
            array(
                'id'       => 'header-lawyer-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart')
            ),
            
            array(
                'id'       => 'header-lawyer-email',
                'type'     => 'text',
                'title'    => esc_html__('Email', 'flipmart')
            ),
            
            array(
                'id'       => 'header-lawyer-cons',
                'type'     => 'text',
                'title'    => esc_html__('Menu Button', 'flipmart')
            )
            
        )
    );

}elseif( yog_helper()->yog_check_layout( 'lingerie' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            
            array(
                'id'       => 'opt-lingerie-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Top Bar', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar content settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-lingerie-top',
                'type'     => 'switch',
                'title'    => esc_html__('Show Top Bar', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'       => 'header-lingerie-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart'),
                'required' => array('header-lingerie-top','equals',true)
            ),
            
            array(
                'id'       => 'header-lingerie-email',
                'type'     => 'text',
                'title'    => esc_html__('Email', 'flipmart'),
                'required' => array('header-lingerie-top','equals',true)
            ),
            
            array(
                'id'       => 'header-lingerie-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Shopping Cart', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'       => 'header-lingerie-search',
                'type'     => 'switch',
                'title'    => esc_html__('Show Search Form', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            )
        )
    );

}elseif( yog_helper()->yog_check_layout( 'mobile' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            
            array(
                'id'       => 'header-mobile-link',
                'type'     => 'text',
                'title'    => esc_html__('App Link', 'flipmart')
            )
        )
    );

}elseif( yog_helper()->yog_check_layout( 'restaurant' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            
            array(
                'id'       => 'opt-restaurant-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Top Bar', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar content settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-restaurant-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Shopping Cart', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'       => 'header-restaurant-link',
                'type'     => 'switch',
                'title'    => esc_html__('Links', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart')
            )
        )
    );

}elseif( yog_helper()->yog_check_layout( 'seo' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            
            array(
                'id'       => 'opt-seo-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Top Bar', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar content settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-seo-top',
                'type'     => 'switch',
                'title'    => esc_html__('Show Top Bar', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'       => 'header-seo-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart'),
                'required' => array('header-seo-top','equals',true)
            ),
            
            array(
                'id'       => 'header-seo-email',
                'type'     => 'text',
                'title'    => esc_html__('Email', 'flipmart'),
                'required' => array('header-seo-top','equals',true)
            ),
            
            array(
                'id'       => 'header-seo-link',
                'type'     => 'switch',
                'title'    => esc_html__('Links', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-seo-top','equals',true)
            )
        )
    );

}elseif( yog_helper()->yog_check_layout( 'shoes' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header Menu', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
            
            array(
                'id'       => 'opt-shoes-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Top Bar', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header top bar content settings.', 'flipmart' )
            ),
            
            array(
                'id'       => 'header-shoes-top',
                'type'     => 'switch',
                'title'    => esc_html__('Show Top Bar', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'       => 'header-shoes-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart'),
                'required' => array('header-shoes-top','equals',true)
            ),
            
            array(
                'id'       => 'header-shoes-email',
                'type'     => 'text',
                'title'    => esc_html__('Email', 'flipmart'),
                'required' => array('header-shoes-top','equals',true),
            ),
            
            array(
                'id'       => 'header-shoes-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Shopping Cart', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            )
        )
    );

}elseif( 'woomart' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
               
            array(
                'id'      => 'header-top-currency',
                'type'    => 'switch',
                'title'   => esc_html__('Show Currency Switcher', 'flipmart'),
                'default' => true,
                'on'      => esc_html__('Yes', 'flipmart'),
                'off'     => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'       => 'header-top-sec-menu',
                'type'     => 'switch',
                'title'    => esc_html__('Show Menu', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide top bar menu', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'       => 'opt-search-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Search Area Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please choose header search area settings.', 'flipmart' ),
            ),
            
            array(
                'id'       => 'header-search-area',
                'type'     => 'switch',
                'title'    => esc_html__('Show Search Area', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide search area which contain search form and category selector', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'       => 'opt-cart-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Add to Cart Button Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header add to cart button settings.', 'flipmart' ),
            ),
            
            array(
                'id'       => 'header-add-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Show Add to Cart Button', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            )    
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'bw' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    return;
    
}elseif( yog_helper()->yog_check_layout( 'ray' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    return;
    
}else{
    
    $this->sections[] = array(
    	'title'  =>   esc_html__('Header', 'flipmart'),
    	'subsection' => true,
    	'fields' => array(
                
            array(
                'id'       => 'opt-top-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Top Bar Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please choose header top bar settings using options ( Top Bar Enable / Disable etc.. ).', 'flipmart' ),
            ),   
                     
            array(
                'id'       => 'header-top',
                'type'     => 'switch',
                'title'    => esc_html__('Show Top Bar', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),  
            
            array(
                'id'       => 'header-top-currency',
                'type'     => 'switch',
                'title'    => esc_html__('Show Currency Switcher', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-top','equals',true),
            ),
            
            array(
                'id'       => 'header-top-sec-menu',
                'type'     => 'switch',
                'title'    => esc_html__('Show Menu', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide top bar menu', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-top','equals',true),
            ),
            
            array(
                'id'       => 'opt-search-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Search Area Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please choose header search area settings.', 'flipmart' ),
                'required' => array('header-top','equals',true),
            ),
            
            array(
                'id'       => 'header-search-area',
                'type'     => 'switch',
                'title'    => esc_html__('Show Search Area', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide search area which contain search form and category selector', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-top','equals',true),
            ),
            
            array(
                'id'       => 'header-category-filter',
                'type'     => 'switch',
                'title'    => esc_html__('Show Category Filter', 'flipmart'),
                'subtitle' => esc_html__( 'Show or hide search form category filter', 'flipmart' ),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-top','equals',true),
            ),
            
            array(
                'id'       => 'opt-cart-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Add to Cart Button Setting', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert header add to cart button settings.', 'flipmart' ),
                'required' => array('header-top','equals',true),
            ),
            
            array(
                'id'       => 'header-add-cart',
                'type'     => 'switch',
                'title'    => esc_html__('Show Add to Cart Button', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
                'required' => array('header-top','equals',true),
            )
                  
    	)
    );
}