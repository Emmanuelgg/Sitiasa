<?php
/*
 * Footer Section
*/

$this->sections[] = array(
	'title'  =>   esc_html__('Footer', 'flipmart'),
	'icon'   => 'el-icon-photo'
);

if( yog_helper()->yog_check_layout( 'fashion' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
        
            array(
    			'id'           => 'fashion-payments-method',
    			'type'         => 'repeater',
                'group_values' => true,
    			'title'        => esc_html__('Payment Method Logos', 'flipmart'),
    			'fields'       => array(
    
    				array(
            			'id'       => 'fashion-payment-method-logo',
            			'type'     => 'media',
            			'url'      => true,
            			'title'    => esc_html__('Payment Method Logo', 'flipmart'),
            			'subtitle' => esc_html__('Select an image file for your payment method logo.', 'flipmart'),
            		),
                    
                    array(
                        'id'       => 'fashion-payment-method-link',
                        'type'     => 'text',
                        'title'    => esc_html__('Payment Method Link', 'flipmart')
                    )
    			)
    		),
            
            array(
                'id'      => 'fashion-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => '© 2019 Fashion. All rights reserved'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'book' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
        
            array(
                'id'       => 'book-footer-menu',
                'type'     => 'switch',
                'title'    => esc_html__('Quick Menu Links', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'      => 'book-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => '© 2019. All Rights Reserved. Bookshop.com'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'cosmetic' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
                'id'       => 'opt-cosmetic-social-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header Social Icons', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert social icons heading.', 'flipmart' ),
            ),
            
            array(
                'id'       => 'cosmetic-social-heading',
                'type'     => 'text',
                'title'    => esc_html__('Social Icons Heading', 'flipmart')
            ),
            
            array(
                'id'       => 'opt-cosmetic-newsletter-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Header News Letter', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert News Letter Content.', 'flipmart' )
            ),
            
            array(
                'id'       => 'cosmetic-newsletter',
                'type'     => 'switch',
                'title'    => esc_html__('News Letter', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'       => 'cosmetic-newsletter-heading',
                'type'     => 'text',
                'title'    => esc_html__('News Letter Heading', 'flipmart'),
                'required' => array('cosmetic-newsletter','equals',true),
            ),
            
            array(
                'id'       => 'cosmetic-newsletter-content',
                'type'     => 'textarea',
                'title'    => esc_html__('News Letter Description', 'flipmart'),
                'required' => array('cosmetic-newsletter','equals',true),
            ),
            
            array(
    			'id'           => 'cosmetic-payments-method',
    			'type'         => 'repeater',
                'group_values' => true,
    			'title'        => esc_html__('Payment Method Logos', 'flipmart'),
    			'fields'       => array(
    
    				array(
            			'id'       => 'cosmetic-payment-method-logo',
            			'type'     => 'media',
            			'url'      => true,
            			'title'    => esc_html__('Payment Method Logo', 'flipmart'),
            			'subtitle' => esc_html__('Select an image file for your payment method logo.', 'flipmart'),
            		),
                    
                    array(
                        'id'       => 'cosmetic-payment-method-link',
                        'type'     => 'text',
                        'title'    => esc_html__('Payment Method Link', 'flipmart')
                    ),
            
    			)
    		),
            
            array(
                'id'      => 'cosmetic-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright © 2019 Cosmetic Itemes. All Rights Reserved'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'drink' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
                'id'       => 'drink-footer-menu',
                'type'     => 'switch',
                'title'    => esc_html__('Quick Menu Links', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),
            
            array(
    			'id'           => 'drink-payments-method',
    			'type'         => 'repeater',
                'group_values' => true,
    			'title'        => esc_html__('Payment Method Logos', 'flipmart'),
    			'fields'       => array(
    
    				array(
            			'id'       => 'drink-payment-method-logo',
            			'type'     => 'media',
            			'url'      => true,
            			'title'    => esc_html__('Payment Method Logo', 'flipmart'),
            			'subtitle' => esc_html__('Select an image file for your payment method logo.', 'flipmart'),
            		),
                    
                    array(
                        'id'       => 'drink-payment-method-link',
                        'type'     => 'text',
                        'title'    => esc_html__('Payment Method Link', 'flipmart')
                    )
            
    			)
    		),
            
            array(
                'id'      => 'drink-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => '<p>Copyright © 2019 <span>Drink</span>. All Rights Reserved</p>'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'electro' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
        
            array(
    			'id'           => 'electro-payments-method',
    			'type'         => 'repeater',
                'group_values' => true,
    			'title'        => esc_html__('Payment Method Logos', 'flipmart'),
    			'fields'       => array(
    
    				array(
            			'id'       => 'electro-payment-method-logo',
            			'type'     => 'media',
            			'url'      => true,
            			'title'    => esc_html__('Payment Method Logo', 'flipmart'),
            			'subtitle' => esc_html__('Select an image file for your payment method logo.', 'flipmart'),
            		),
                    
                    array(
                        'id'       => 'electro-payment-method-link',
                        'type'     => 'text',
                        'title'    => esc_html__('Payment Method Link', 'flipmart')
                    )
    			)
    		),
            
            array(
                'id'      => 'electro-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => '© 2019 Electro. All rights reserved'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'engineer' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
        
            array(
                'id'       => 'engineer-footer-contact',
                'type'     => 'switch',
                'title'    => esc_html__('Contact Section', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),
            
            array(
    			'id'        => 'engineer-foter-img',
    			'type'      => 'media',
    			'url'       => true,
    			'title'     => esc_html__('Contact Image', 'flipmart'),
    			'subtitle'  => esc_html__('Select an image file for your site media.', 'flipmart'),
                'required'  => array('engineer-footer-contact','equals',true),
    		),
        
            array(
                'id'       => 'engineer-footer-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart'),
                'required' => array('engineer-footer-contact','equals',true),
            ),
            
            array(
                'id'      => 'engineer-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright © 2019 Engineer. All Rights Reserved'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'finances' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
        
            
            array(
                'id'      => 'finances-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright @ Finances 2019. All rights reserved.'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'furniture' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
        
            
            array(
                'id'      => 'furniture-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright @ Furniture. All rights reserved.'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'glasses' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
        
            array(
    			'id'       => 'glasses-payment-method-logo',
    			'type'     => 'media',
    			'url'      => true,
    			'title'    => esc_html__('Payment Method Logo', 'flipmart'),
    			'subtitle' => esc_html__('Select an image file for your payment method logo.', 'flipmart'),
    		),
            
            array(
                'id'      => 'glasses-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright @ Furniture. All rights reserved.'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'gym' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
                'id'       => 'opt-gym-newsletter-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Footer News Letter', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert News Letter Content.', 'flipmart' )
            ),
            
            array(
                'id'       => 'gym-newsletter',
                'type'     => 'switch',
                'title'    => esc_html__('News Letter', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'       => 'gym-newsletter-content',
                'type'     => 'textarea',
                'title'    => esc_html__('News Letter Description', 'flipmart'),
                'required' => array('gym-newsletter','equals',true),
            ),
            
            array(
                'id'       => 'opt-gym-logo-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Footer Logo', 'flipmart' ),
                'desc'     => esc_html__( 'Please upload image for the footer logo.', 'flipmart' )
            ),
        
            array(
    			'id'       => 'gym-footer-logo',
    			'type'     => 'media',
    			'url'      => true,
    			'title'    => esc_html__('Footer Logo', 'flipmart'),
    			'subtitle' => esc_html__('Select an image file for your footer logo.', 'flipmart'),
    		),
            
            array(
                'id'       => 'opt-gym-desc-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Footer Description', 'flipmart' ),
                'desc'     => esc_html__( 'Please Heading and Description in footer.', 'flipmart' )
            ),
            
            array(
                'id'       => 'gym-heading',
                'type'     => 'text',
                'title'    => esc_html__('Description Heading', 'flipmart')
            ),
            
            array(
                'id'       => 'gym-content',
                'type'     => 'textarea',
                'title'    => esc_html__('Description Content', 'flipmart')
            ),
            
            array(
                'id'      => 'gym-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright @ Furniture. All rights reserved.'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'hosting' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
        
            array(
    			'id'           => 'hosting-payments-method',
    			'type'         => 'repeater',
                'group_values' => true,
    			'title'        => esc_html__('Payment Method Logos', 'flipmart'),
    			'fields'       => array(
    
    				array(
            			'id'       => 'hosting-payment-method-logo',
            			'type'     => 'media',
            			'url'      => true,
            			'title'    => esc_html__('Payment Method Logo', 'flipmart'),
            			'subtitle' => esc_html__('Select an image file for your payment method logo.', 'flipmart'),
            		),
                    
                    array(
                        'id'       => 'hosting-payment-method-link',
                        'type'     => 'text',
                        'title'    => esc_html__('Payment Method Link', 'flipmart')
                    )
    			)
    		),
            
            array(
                'id'      => 'hosting-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright © 2019 <span>Web Hosting Services.</span>All Rights Reserved'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'jewellery' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
                'id'       => 'opt-jewellery-newsletter-info',
                'type'     => 'info',
                'style'    => 'info',
                'title'    => esc_html__( 'Footer News Letter', 'flipmart' ),
                'desc'     => esc_html__( 'Please insert News Letter Content.', 'flipmart' )
            ),
            
            array(
                'id'       => 'jewellery-newsletter',
                'type'     => 'switch',
                'title'    => esc_html__('News Letter', 'flipmart'),
                'default'  => true,
                'on'       => esc_html__('Yes', 'flipmart'),
                'off'      => esc_html__('No', 'flipmart'),
            ),
            
            array(
                'id'       => 'jewellery-newsletter-content',
                'type'     => 'editor',
                'title'    => esc_html__('News Letter Description', 'flipmart'),
                'required' => array('jewellery-newsletter','equals',true),
            ),
            
            array(
                'id'      => 'jewellery-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright © 2019, <span>jewellery</span> All Rights Reseved.'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'kidswear' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
    			'id'       => 'kidswear-footer-logo',
    			'type'     => 'media',
    			'url'      => true,
    			'title'    => esc_html__('Footer Logo', 'flipmart'),
    			'subtitle' => esc_html__('Select an image file for your footer logo.', 'flipmart'),
    		),
            
            array(
    			'id'           => 'kidswear-socials',
    			'type'         => 'repeater',
                'group_values' => true,
    			'title'        => esc_html__('Social Icons', 'flipmart'),
    			'fields'       => array(
    
    				array(
            			'id'       => 'kidswear-social',
            			'type'     => 'media',
            			'url'      => true,
            			'title'    => esc_html__('Social Icon', 'flipmart'),
            			'subtitle' => esc_html__('Select an image file for your social icon.', 'flipmart'),
            		),
                    
                    array(
                        'id'       => 'kidswear-social-link',
                        'type'     => 'text',
                        'title'    => esc_html__('Social Link', 'flipmart')
                    )
    			)
    		),
            
            array(
                'id'      => 'kidswear-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => '© 2019 kids Wear. All Right Reserved.'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'lawyer' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
    			'id'       => 'lawyer-footer-logo',
    			'type'     => 'media',
    			'url'      => true,
    			'title'    => esc_html__('Footer Logo', 'flipmart'),
    			'subtitle' => esc_html__('Select an image file for your footer logo.', 'flipmart'),
    		),
            
            array(
                'id'       => 'lawyer-footer-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart')
            ),
            
            array(
                'id'       => 'lawyer-footer-email',
                'type'     => 'text',
                'title'    => esc_html__('Email', 'flipmart')
            ),
            
            array(
                'id'      => 'lawyer-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright © 2019 Lawyer , All Right Reserved.'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'lingerie' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
                'id'      => 'lawyer-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright © 2019 Lingerie. All Rights Reserved'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'mobile' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
                'id'      => 'mobile-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright @ 2019 Mobile Apps. All Rights Reserved'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'restaurant' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
    			'id'       => 'restaurant-footer-logo',
    			'type'     => 'media',
    			'url'      => true,
    			'title'    => esc_html__('Footer Logo', 'flipmart'),
    			'subtitle' => esc_html__('Select an image file for your footer logo.', 'flipmart'),
    		),
            
            array(
                'id'       => 'restaurant-footer-address',
                'type'     => 'textarea',
                'title'    => esc_html__('Address', 'flipmart')
            ),
            
            array(
                'id'       => 'restaurant-footer-phone',
                'type'     => 'text',
                'title'    => esc_html__('Phone Number', 'flipmart')
            ),
            
            array(
                'id'       => 'restaurant-footer-email',
                'type'     => 'text',
                'title'    => esc_html__('Email', 'flipmart')
            ),
            
            array(
                'id'      => 'restaurant-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => '© 2019 <span>Restaurant Flipmart</span> All Right Reserved.'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'seo' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
                'id'      => 'seo-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright © 2019 SEO Services. All Rights Reserved.'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'shoes' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
                'id'      => 'shoes-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright © 2019. Shoes & Style All Rights Reserved'
            )
    	)
    );
    
}elseif( 'woomart' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
    			'id'       => 'yog-news-letter',
    			'type'     => 'editor',
    			'url'      => true,
    			'title'    => esc_html__('News Letter Shortcode', 'flipmart')
    		),
                    
            array(
    			'id'           => 'yog-payments-method',
    			'type'         => 'repeater',
                'group_values' => true,
    			'title'        => esc_html__('Payment Method Logos', 'flipmart'),
    			'fields'       => array(
    
    				array(
            			'id'       => 'yog-payment-method-logo',
            			'type'     => 'media',
            			'url'      => true,
            			'title'    => esc_html__('Payment Method Logo', 'flipmart'),
            			'subtitle' => esc_html__('Select an image file for your payment method logo.', 'flipmart'),
            		)
    			)
    		),
            
            array(
    			'id'           => 'yog-features',
    			'type'         => 'repeater',
                'group_values' => true,
    			'title'        => esc_html__('Features Lists', 'flipmart'),
    			'fields'       => array(
    
    				array(
            			'id'       => 'yog-feature-heading',
            			'type'     => 'text',
            			'title'    => esc_html__('Feature List Heading', 'flipmart')
            		),
                    
                    array(
            			'id'       => 'yog-feature-icon',
            			'type'     => 'select',
            			'title'    => esc_html__('Feature List Icon', 'flipmart'),
                        'options'  => yog_get_options_fontawesome_icons()
            		)
    			)
    		)
    	)
    );

    
}elseif( yog_helper()->yog_check_layout( 'bw' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
        
            array(
    			'id'       => 'bw-footer-logo',
    			'type'     => 'media',
    			'url'      => true,
    			'title'    => esc_html__('Footer Logo', 'flipmart'),
    			'subtitle' => esc_html__('Select an image file for your footer logo.', 'flipmart'),
    		),
            
            array(
                'id'      => 'bw-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright © 2019. Flipmart All Rights Reserved'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'flower' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
    			'id'            => 'info-footer',
    			'type'          => 'info',
    			'desc'          =>  esc_html__('Footer Animation', 'flipmart')
    		),
        
            array(
                'title'         => esc_html__('Animation', 'flipmart'),
    			'type'          => 'select',
    			'id'            => 'footer-animation',
                'options'       => array_flip( yog_get_theme_animations() ),
    			'description'   => esc_html__('Choose Animation from the drop down list.', 'flipmart')
    		), 
             
            array(
                'title'         => esc_html__( 'Delay','flipmart'),
                'type'          => 'text',
                'id'            => 'footer-delay'
            ),
            
            array(
    			'id'            => 'info-sidebar',
    			'type'          => 'info',
    			'desc'          =>  esc_html__('Footer Sidebar Animation', 'flipmart')
    		),
            
            array(
                'title'         => esc_html__('Animation', 'flipmart'),
    			'type'          => 'select',
    			'id'            => 'footer-sidebar-animation',
                'options'       => array_flip( yog_get_theme_animations() ),
    			'description'   => esc_html__('Choose Animation from the drop down list.', 'flipmart')
    		), 
             
            array(
                'title'         => esc_html__( 'Delay','flipmart'),
                'type'          => 'text',
                'id'            => 'footer-sidebar-delay'
            ),
            
            array(
    			'id'           => 'flower-payments-method',
    			'type'         => 'repeater',
                'group_values' => true,
    			'title'        => esc_html__('Payment Method Logos', 'flipmart'),
    			'fields'       => array(
    
    				array(
            			'id'       => 'flower-payment-method-logo',
            			'type'     => 'media',
            			'url'      => true,
            			'title'    => esc_html__('Payment Method Logo', 'flipmart'),
            			'subtitle' => esc_html__('Select an image file for your payment method logo.', 'flipmart'),
            		),
                    
                    array(
                        'id'       => 'flower-payment-method-link',
                        'type'     => 'text',
                        'title'    => esc_html__('Payment Method Link', 'flipmart')
                    )
    			)
    		),
            
            array(
    			'id'            => 'info-payment',
    			'type'          => 'info',
    			'desc'          =>  esc_html__('Footer Payment Animation', 'flipmart')
    		),
            
            array(
                'title'         => esc_html__('Animation', 'flipmart'),
    			'type'          => 'select',
    			'id'            => 'footer-payment-animation',
                'options'       => array_flip( yog_get_theme_animations() ),
    			'description'   => esc_html__('Choose Animation from the drop down list.', 'flipmart')
    		), 
             
            array(
                'title'         => esc_html__( 'Delay','flipmart'),
                'type'          => 'text',
                'id'            => 'footer-payment-delay'
            ),
            
            array(
                'id'      => 'flower-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright © 2019. Flipmart All Rights Reserved'
            ),
            
            array(
    			'id'            => 'info-copyright',
    			'type'          => 'info',
    			'desc'          =>  esc_html__('Footer Copyright Animation', 'flipmart')
    		),
            
            array(
                'title'         => esc_html__('Animation', 'flipmart'),
    			'type'          => 'select',
    			'id'            => 'footer-copyright-animation',
                'options'       => array_flip( yog_get_theme_animations() ),
    			'description'   => esc_html__('Choose Animation from the drop down list.', 'flipmart')
    		), 
             
            array(
                'title'         => esc_html__( 'Delay','flipmart'),
                'type'          => 'text',
                'id'            => 'footer-copyright-delay'
            ),
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'autoparts' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
    			'id'           => 'autoparts-payments-method',
    			'type'         => 'repeater',
                'group_values' => true,
    			'title'        => esc_html__('Payment Method Logos', 'flipmart'),
    			'fields'       => array(
    
    				array(
            			'id'       => 'autoparts-payment-method-logo',
            			'type'     => 'media',
            			'url'      => true,
            			'title'    => esc_html__('Payment Method Logo', 'flipmart'),
            			'subtitle' => esc_html__('Select an image file for your payment method logo.', 'flipmart'),
            		),
                    
                    array(
                        'id'       => 'autoparts-payment-method-link',
                        'type'     => 'text',
                        'title'    => esc_html__('Payment Method Link', 'flipmart')
                    )
    			)
    		),
            
            array(
                'id'      => 'autoparts-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright © 2019. Flipmart All Rights Reserved'
            ),
            
            array(
    			'id'            => 'info-autoparts-footer',
    			'type'          => 'info',
    			'desc'          =>  esc_html__('Footer Animation', 'flipmart')
    		),
        
            array(
                'title'         => esc_html__('Animation', 'flipmart'),
    			'type'          => 'select',
    			'id'            => 'autoparts-footer-animation',
                'options'       => array_flip( yog_get_theme_animations() ),
    			'description'   => esc_html__('Choose Animation from the drop down list.', 'flipmart')
    		), 
             
            array(
                'title'         => esc_html__( 'Delay','flipmart'),
                'type'          => 'text',
                'id'            => 'autoparts-footer-delay'
            )
    	)
    );
    
}elseif( yog_helper()->yog_check_layout( 'ray' ) && 'modify' == yog_helper()->yog_get_layout( 'version' ) ){
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
            
            array(
    			'id'       => 'ray-footer-logo',
    			'type'     => 'media',
    			'url'      => true,
    			'title'    => esc_html__('Footer Logo', 'flipmart'),
    			'subtitle' => esc_html__('Select an image file for your footer logo.', 'flipmart'),
    		),
            
            array(
                'id'      => 'ray-footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright © 2019. Flipmart All Rights Reserved'
            )
            
        )
     );
    
}else{
    
    $this->sections[] = array(
    	'title'      =>   esc_html__('Footer', 'flipmart'),
    	'subsection' => true,
    	'fields'     => array(
        
            array(
    			'id'           => 'payments-method',
    			'type'         => 'repeater',
                'group_values' => true,
    			'title'        => esc_html__('Payment Method Logos', 'flipmart'),
    			'fields'       => array(
    
    				array(
            			'id'       => 'payment-method-logo',
            			'type'     => 'media',
            			'url'      => true,
            			'title'    => esc_html__('Payment Method Logo', 'flipmart'),
            			'subtitle' => esc_html__('Select an image file for your payment method logo.', 'flipmart'),
            		),
                    
                    array(
                        'id'       => 'payment-method-link',
                        'type'     => 'text',
                        'title'    => esc_html__('Payment Method Link', 'flipmart')
                    )
    			)
    		),
            
            array(
                'id'      => 'footer-copyright',
                'type'    => 'editor',
                'title'   => esc_html__('Copyright', 'flipmart'),
                'default' => 'Copyright © 2019. Flipmart All Rights Reserved'
            )
    	)
    );
    
}
