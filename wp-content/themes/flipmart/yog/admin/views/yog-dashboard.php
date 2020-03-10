<?php
$demos = get_theme_support( 'yog-demos' )[0];
?>
<div class="yog-wrap">

	<div class="yog-dashboard">
        
		<?php require_once( get_template_directory().'/yog/admin/views/yog-header.php' ); ?>

		<div class="tab-content">
            <?php yog_action( 'before_admin_panel' ); ?>
			<div id="yog-general" role="tabpanel" class="yog-tab-pane yog-tab-is-active">

				<ul class="yog-cards-container clearfix">
                  
                  <li class="yog-card on-half">
                     <div class="yog-card-inner">
                        <p><?php echo esc_html__( 'We are a creative web design that specialized in WordPress and create awesome WordPress Theme to meet anyone needs. We are smart, intelligent, talented and best of all, we are super passionate about our work.', 'flipmart' )?></p>
                        <p><?php echo esc_html__( 'With our lots of talent and experience, we combine beautiful, modern designs with clean, functional code to produce stunning websites. A product that we offer help and guidance in using to each of our customers.', 'flipmart' ); ?></p>
                        <p><?php echo esc_html__( 'Follow us to stay up to date with our latest and greatest. We are working hard to bring you some perfect themes!', 'flipmart' ); ?></p>
                        <h2><?php echo esc_html__( 'Dedicated Support System', 'flipmart' ); ?></h2>
                        <p><?php echo esc_html__( 'We are always happy to help and we value our customers. All our files come with User Manual prepared specifically for each product, these help files are located inside your download packages.', 'flipmart' )?></p>
                        <div class="yog-card-footer clearfix">
                           <a class="yog-button" href="https://themeforest.net/user/ckthemes" target="_blank"><img src="<?php echo esc_url( yog()->load_assets( 'img/envato.png' ) ); ?>" alt="" /></a> 
                        </div>
                     </div>
                  </li>
                  
                  <li class="yog-card">
                     <div class="yog-card-inner">
                        <div class="yog-icon-container">
                           <i class="text-gradient fa fa-life-ring"></i>
                        </div>
                        <h3><?php echo esc_html__( 'Support Forums', 'flipmart' ) ?></h3>
                        <div class="yog-status yog-status-is-active">
                           <span><?php echo esc_html__( 'Community', 'flipmart' ) ?></span>
                        </div>
                        <div class="yog-card-footer clearfix">
                           <a class="yog-button" href="<?php echo esc_url( yog_helper()->yog_support_fourm_url() ); ?>" target="_blank"><span><?php echo esc_html__( 'Go to forums', 'flipmart' ) ?></span> <i class="fa fa-angle-right"></i></a>
                        </div>
                     </div>
                  </li>

                  <li class="yog-card">
                     <div class="yog-card-inner">
                        <div class="yog-icon-container">
                           <i class="text-gradient fa fa-file-text-o"></i>
                        </div>
                        <h3><?php echo esc_html__( 'Documentation', 'flipmart' ) ?></h3>
                        <div class="yog-status yog-status-is-active">
                           <span><?php echo esc_html__( 'Knowledge Base', 'flipmart' ) ?></span>
                        </div>
                        <div class="yog-card-footer clearfix">
                           <a class="yog-button" href="<?php echo esc_url( yog_helper()->yog_online_documentation_url() ); ?>" target="_blank"><span><?php echo esc_html__( 'Read Documentation', 'flipmart' ) ?></span> <i class="fa fa-angle-right"></i></a>
                        </div>
                     </div>
                  </li>

               </ul>
               <?php yog_action( 'after_admin_panel' ); ?>
			</div>
            
            <div id="yog-changelog" role="tabpanel" class="yog-tab-pane">
                <h3>2.7</h3>
                <p><strong>Released: 19th December 2019</strong></p>
                <p><strong>Update</strong></p>
                <ul>
                    <li>WooCommerce plugin overriding templates are updated in theme</li>
                    <li>Demo files updated</li>
                </ul>
                <h3>2.6</h3>
                <p><strong>Released: 28th September 2019</strong></p>
                <p><strong>New Features</strong></p>
                <ul>
                    <li>Easy Digital Downloads Plugin Support Add Layout <a href="http://www.ckthemes.com/flipmart-dd/">Flipmart Easy Digital Downloads</a> added</li>
                </ul>
                <p><strong>Update</strong></p>
                <ul>
                    <li>WooCommerce plugin overriding templates are updated in theme</li>
                    <li>Demo files updated</li>
                </ul>
                <h3>2.5</h3>
                <p><strong>Released: 28th June 2019</strong></p>
                <p><strong>New Features</strong></p>
                <ul>
                    <li>Dokan Multi Vendor Plugin Support Add Layout <a href="http://www.ckthemes.com/flipmart-mv/">Flipmart Multi Vendor</a> added</li>
                </ul>
                <p><strong>Bug Fixed</strong></p>
                <ul>
                    <li>Single product quntity label fixed</li>
                    <li>Favicon site front display issue fixed</li>
                </ul>
                <h3>2.4</h3>
                <p><strong>Released: 4th June 2019</strong></p>
                <p><strong>New Demo Added</strong></p>
                <ul>
                    <li>New Demo Layout <a href="http://www.ckthemes.com/flipmart/autoparts/">Autoparts</a> added</li>
                    <li>New Demo Layout <a href="http://www.ckthemes.com/flipmart/bw/">Black & White</a> added</li>
                    <li>New Demo Layout <a href="http://www.ckthemes.com/flipmart/flower/">Flower</a> added</li>
                    <li>New Demo Layout <a href="http://www.ckthemes.com/flipmart/ray/">Ray</a> added</li>
                </ul>
                <p><strong>New Features</strong></p>
                <ul>
                    <li>New Flipmart Importer Plugin added use for theme setup wizard / demo setup</li>
                </ul>
                <p><strong>Update</strong></p>
                <ul>
                    <li>WooCommerce plugin overriding templates are updated in theme</li>
                    <li>Demo files updated</li>
                    <li>Theme Size Reduce From 12MB TO 5.5MB</li>
                </ul>
                <h3>2.3</h3>
                <p><strong>Released: 28th April 2019</strong></p>
                <p><strong>New Features</strong></p>
                <ul>
                    <li>Product QR Code</li>
                    <li>Jewellery demo import files</li>
                    <li>All demo layout color skins generator</li>
                </ul>
                <p><strong>Update</strong></p>
                <ul>
                    <li>WooCommerce plugin overriding templates are updated in theme</li>
                    <li>Demo files updated</li>
                </ul>
                <p><strong>Bug Fixed</strong></p>
                <ul>
                    <li>Variation products price display issue fixed</li>
                    <li>Customizing product images resize issue fixed</li>
                </ul>
                <h3>2.2</h3>
                <p><strong>Released: 28th March 2019</strong></p>
                <p><strong>New Features</strong></p>
                <ul>
                    <li>New Demo Layout <a href="http://www.ckthemes.com/flipmart/woomart/">Woomart</a> added</li>
                    <li>Default Version copy right theme option added</li>
                    <li>WooCommerce Sale Flash tag for ( Sale, New, Hot ) Enable / Disbale theme options added</li>
                    <li>WooCommerce Sale Flash tag for ( Sale, New, Hot ) Text Modification theme options added</li>
                    <li>WooCommerce Out Of Stock tag added</li>
                </ul>
                <p><strong>Update</strong></p>
                <ul>
                    <li>WooCommerce plugin overriding templates are updated in theme</li>
                    <li>Demo files updated</li>
                </ul>
                <p><strong>Bug Fixed</strong></p>
                <ul>
                    <li>Electron demo layout Visual Compoer element product categories display issue fixed</li>
                </ul>
                <h3>2.1</h3>
                <p><strong>Released: 12th March 2019</strong></p>
                <p><strong>New Features</strong></p>
                <ul>
                    <li>New Visual Composer elements added ( Accordion, Alert, Button, Call Of Action, Icon Teaser, Pricing Table, Tab etc..)</li>
                    <li>New Bucket custom post type added</li>
                </ul>
                <p><strong>Update</strong></p>
                <ul>
                    <li>WooCommerce plugin overriding templates are updated in theme</li>
                    <li>Demo files updated</li>
                </ul>
                <p><strong>Bug Fixed</strong></p>
                <ul>
                    <li>WooCommerce single product images display durring variation issue fixed</li>
                </ul>
                <h3>2.0</h3>
                <p><strong>Released: 16th January 2019</strong></p>
                <p><strong>New Features</strong></p>
                <ul>
                    <li>New Theme Setup Wizard</li>
                    <li>20+ New Demo Layouts</li>
                </ul>
                <p><strong>Update</strong></p>
                <ul>
                    <li>Header search form keyword suggestion display improve</li>
                    <li>Color style switcher improve</li>
                    <li>WooCommerce plugin overriding templates are updated in theme</li>
                    <li>Demo files updated</li>
                </ul>
                
                <h3>1.9</h3>
                <p><strong>Released: 18th October 2018</strong></p>
                <p><strong>Update</strong></p>
                <ul>
                    <li>WooCommerce plugin overriding templates are updated in theme</li>
                    <li>Demo files updated</li>
                </ul>
                <p><strong>Bug Fixed</strong></p>
                <ul>
                    <li>Title link on Shop Category Page </li>
                    <li>Shop rating display issue</li>
                    <li>Theme dashboard demo version import display issue</li>
                </ul>
                
                <h3>1.8</h3>
                <p><strong>Released: 6th August 2018</strong></p>
                <p><strong>Update</strong></p>
                <ul>
                    <li>WooCommerce plugin overriding templates are updated in theme</li>
                    <li>Demo files updated</li>
                </ul>
                <p><strong>Bug Fixed</strong></p>
                <ul>
                    <li>Single Product Sell Tag overlapping to image zoom icon </li>
                    <li>Checkout page  terms and conditions link issue</li>
                </ul>
                <p><strong>New Features</strong></p>
                <ul>
                    <li>Product Quick View feature added</li>
                    <li>Search Prdouct by category selection option added in header search form</li>
                    <li>View Cart button added in header mini cart</li>
                    <li>First & Last name field added in user registeration form</li>
                </ul>
                <h3>1.7</h3>
                <p><strong>Released: 3th March 2018</strong></p>
                <p><strong>Update</strong></p>
                <ul>
                    <li>WooCommerce plugin overriding templates are updated in theme</li>
                    <li>Demo files updated</li>
                </ul>
                <p><strong>Bug Fixed</strong></p>
                <ul>
                    <li>Product carousel slider divide by zero error fixed</li>
                    <li>Product visual composer elements category selection issue fixed</li>
                </ul>
                <p><strong>New Features</strong></p>
                <ul>
                    <li>Product New Badge settings added in WooCommerce Product setting</li>
                    <li>Products Autocomplete Search feature added in search form</li>
                    <li>Number of products display limit field added in theme option for the search result page</li>
                    <li>Visual Composer element ( Product categoy & Product categories ) modify </li>
                    <li>Visual Composer element ( Flipmart Image Banner ) modify make it complately clickable </li>
                </ul>
                <h3>1.6</h3>
                <p><strong>Released: 31th January 2018</strong></p>
                <p><strong>Update</strong></p>
                <ul>
                    <li>WooCommerce plugin overriding templates are updated in theme</li>
                </ul>
                <h3>1.5</h3>
                <p><strong>Released: 24th January 2018</strong></p>
                <p><strong>Bug Fixed</strong></p>
                <ul>
                    <li>Single variation product image selection on variation</li>
                    <li>Feature Product visual composer element display issue</li>
                    <li>Header mini cart ajax update issue fixed</li>
                    <li>Theme responsive issues</li>
                </ul>
                <p><strong>New Features</strong></p>
                <ul>
                    <li>New demo layout ( Fashion ) added</li>
                </ul>
                <p><strong>Update</strong></p>
                <ul>
                    <li>Visual Composer Plugin updated to latest one</li>
                    <li>Demo Data Content XML file updated</li>
                </ul>
                <h3>1.4</h3>
                <p><strong>Released: 18th December 2017</strong></p>
                <p><strong>Bug Fixed</strong></p>
                <ul>
                    <li>Single product thumbnail image zoom out issue</li>
                    <li>Flipmart: Category Accordion widget display issue</li>
                    <li>Flipmart: Product Hot Deals widget product limit field remove</li>
                    <li>Product search result page display issue</li>
                    <li>Multi level menu display issue</li>
                    <li>WooCommerce variation product select box style issue</li>
                </ul>
                <p><strong>Update</strong></p>
                <ul>
                    <li>WooCommerce Currency Switcher pro version is updated to latest one</li>
                    <li>WooCommerce Plugin theme template files updated to latest one</li>
                    <li>Visual Composer Plugin updated to latest one</li>
                    <li>Demo Data Content XML file updated</li>
                </ul>
                <h3>1.3</h3>
                <p><strong>Released: 21nd October 2017</strong></p>
                <p><strong>Bug Fixed</strong></p>
                <ul>
                    <li>Single product thumbnail image size issue</li>
                    <li>Visual composer element ( Flipmart Image Banner ) responsive device font size</li>
                    <li>Hot product date picker rtl issue</li>
                    <li>Top Bar menu login and logout link issue</li>
                    <li>Product Search Widget Style</li>
                    <li>Theme Options custom css addition issue</li>
                    <li>Style Switcher front end js console error</li>
                </ul>
                <p><strong>New Features</strong></p>
                <ul>
                    <li>New demo layout ( Jewellery ) added</li>
                    <li>Envato Toolkit Master plugin is include in recommended plugin for theme update</li>
                    <li>Few new videos added in <a href="https://www.youtube.com/watch?v=uO91k9s6vM0&index=1&list=PLYp76EP6RhnwOkp-TsZD8yFML1O1GPCIn" target="_blank">Youtub video tutorial series</a> </li>
                </ul>
                <p><strong>Update Plugins</strong></p>
                <ul>
                    <li>WooCommerce Currency Switcher pro version is updated to latest one</li>
                    <li>WooCommerce Plugin theme template files updated to latest one</li>
                    <li>Visual Composer Plugin updated to latest one</li>
                </ul>    
                <h3>1.2</h3>
                <p><strong>Released: 26th September 2017</strong></p>
                <p><strong>Bug Fixed</strong></p>
                <ul>
                    <li>Product grid columns extra space</li>
                    <li>Top bar menu login link redirect issue</li>
                    <li>Shop categories display issue</li>
                    <li>Theme options logo display issue</li>
                    <li>editor-style-rtl.css file admin area notification issue</li>
                    <li>Product Hot Deals widget date counter issue</li>
                    <li>One click demo importer improve</li>
                    <li>Unused images remove from demo data</li>
                    <li>Contact Form Seven summation email fields data issue</li>
                </ul>
                <p><strong>New Features</strong></p>
                <ul>
                    <li>Front end color style switcher</li>
                    <li>Theme options multi color skins generator</li>
                    <li>Boxed and Wide layout support</li>
                    <li>New RTL demo added</li>
                    <li>Single product slider images zoom out affect</li>
                    <li>Ajax based dropdown menu mini cart</li>
                    <li>WooCommerce Currency Switcher pro version included</li>
                    <li>Popup Plugin For WordPress - ConvertPlus pro version included</li>
                    <li>Visual Composer latest version included</li>
                    <li>New changelog tab added in theme dashboard</li>
                    <li><a href="https://www.youtube.com/watch?v=uO91k9s6vM0&index=1&list=PLYp76EP6RhnwOkp-TsZD8yFML1O1GPCIn" target="_blank">Youtub video tutorial series</a> released and its link added in theme dashboard</li>
                    <li>All demo content updated</li>
                </ul>
                <h3>1.1</h3>
                <p><strong>Released: 21th September 2017</strong></p>
                <ul>
                    <li>Currency switcher dropdown css issues fixed</li>
                    <li>Demo content updated</li>
                </ul>
                <h3>1.0</h3>
                <p><strong>Released: 12th September 2017</strong></p>
                <ul>
                    <li>Initial Flipmart WordPress Theme release</li>
                </ul>
            </div>

		</div>

	</div>

</div>
