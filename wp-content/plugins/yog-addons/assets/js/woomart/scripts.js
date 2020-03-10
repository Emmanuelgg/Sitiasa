/**
* @package Flipmart WordPress
*
* Template Scripts
* Created by CKThemes
Init Theme JS

0. Menu
1. Lazy Load
2. Rating Star
3. Single Product Gallery
4. Tooltip
5. Google Map
6. Animation
7. Menu
8. Shop Grid
9. Countdown
10. Zoom
11. Ajax cart
*/
;
(function ($) {

	var Core = {

		initialize: function () {

			//Slider
			this.yog_slider();

			//Cart
			this.yog_cart();

			//Counter
			this.yog_countdown();

			//Shop Grid
			this.yog_shop_grid_icon();
            
            //Product Quntity Buttons
            this.yog_product_quantity();
            
            //Animation
            this.yog_animation();

		},
		yog_slider: function () {

			/*  Best Seller Slider */
			$("#top-deals .slider-items").owlCarousel({
				items: 1,
				itemsDesktop: [1024, 1],
				itemsDesktopSmall: [900, 1],
				itemsTablet: [600, 1],
				itemsMobile: [320, 1],
				navigation: !0,
				navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
				slideSpeed: 500,
				pagination: !1
			});

			/*  Featured Product Slider */
			$("#best-seller .slider-items").owlCarousel({
				items: 4,
				itemsDesktop: [1024, 4],
				itemsDesktopSmall: [900, 3],
				itemsTablet: [600, 1],
				itemsMobile: [320, 1],
				navigation: !0,
				navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
				slideSpeed: 500,
				pagination: !1
			});

			$("#brand-slider .slider-items").owlCarousel({
				autoplay: true,
				items: 6, //10 items above 1000px browser width
				itemsDesktop: [1024, 3], //5 items between 1024px and 901px
				itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
				itemsTablet: [600, 2], //2 items between 600 and 0;
				itemsMobile: [320, 1],
				navigation: true,
				navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
				slideSpeed: 500,
				pagination: false
			});

			/*  More Views Slider */
			$("#more-views-slider .slider-items").owlCarousel({
				autoplay: !0,
				items: 4,
				itemsDesktop: [1024, 4],
				itemsDesktopSmall: [900, 3],
				itemsTablet: [600, 2],
				itemsMobile: [320, 1],
				navigation: !0,
				navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
				slideSpeed: 500,
				pagination: !1
			});

			/*  Related Product Slider */
			$("#related-slider .slider-items").owlCarousel({
				items: 4,
				itemsDesktop: [1024, 4],
				itemsDesktopSmall: [900, 3],
				itemsTablet: [600, 1],
				itemsMobile: [320, 1],
				navigation: !0,
				navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
				slideSpeed: 500,
				pagination: !1
			});

			/*  More Views Slider */
			$("#more-views-slider .slider-items").owlCarousel({
				autoplay: !0,
				items: 3,
				itemsDesktop: [1024, 4],
				itemsDesktopSmall: [900, 3],
				itemsTablet: [600, 2],
				itemsMobile: [320, 1],
				navigation: !0,
				navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
				slideSpeed: 500,
				pagination: !1
			});

			/* Mobile Menu */
			$("#mobile-menu").mobileMenu({
				MenuWidth: 250,
				SlideSpeed: 300,
				WindowsMaxWidth: 767,
				PagePush: !0,
				FromLeft: !0,
				Overlay: !0,
				CollapseMenu: !0,
				ClassName: "mobile-menu"
			})

			/* Top Offer slider */
			$("#slideshow > p:gt(0)").hide();

			setInterval(function () {
				$('#slideshow > p:first')
					.fadeOut(1000)
					.next()
					.fadeIn(1000)
					.end()
					.appendTo('#slideshow');
			}, 3000);
            
            $(".sidebar-carousel").each( function(){
                var $this = $(this);
                $this.owlCarousel({
                    items : 1,
                    itemsTablet:[768,2],
                    itemsDesktopSmall :[979,2],
                    itemsDesktop : [1199,1],
                    navigation : true,
                    slideSpeed : 300,
                    pagination: false,
                    paginationSpeed : 400,
                    navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
                });
            });

		},
		yog_cart: function () {
			slideEffectAjax();
			
			/*  Top Cart */
			function slideEffectAjax() {
				$(".fl-cart-contain").mouseenter(function () {
					$(this).find(".fl-mini-cart-content").stop(true, true).slideDown()
				}), $(".fl-cart-contain").mouseleave(function () {
					$(this).find(".fl-mini-cart-content").stop(true, true).slideUp()
				})
			}

			function deleteCartInSidebar() {
				return is_checkout_page > 0 ? !1 : void $("#cart-sidebar a.btn-remove, #mini_cart_block a.btn-remove").each(function () {})
			}

		},
		yog_countdown: function () {

			if ($(".countbox_1").length) {
				$(".countbox_1").each(function () {
					var $this = $(this);
					$this.countdown({
						date: $this.data('date'), // add your date here.
						format: "on"
					});
				});
			}

		},
		yog_shop_grid_icon: function () {

			$('.button-grid').click(function (e) {
				e.preventDefault();
				var $this = $(this);
				$this.toggleClass('active');

				//set cookie time 20 sec.
				var date = new Date();
				date.setTime(date.getTime() + (20 * 1000));

				//set gridcookie with expires time.
				$.cookie('gridcookie', 'grid', {
					expires: date
				});

				//reload page.
				location.reload();

			});

			$('.button-list').click(function (e) {
				e.preventDefault();
				var $this = $(this);
				$this.toggleClass('active');

				//set cookie time 20 sec.
				var date = new Date();
				date.setTime(date.getTime() + (20 * 1000));

				//set gridcookie with expires time.
				$.cookie('gridcookie', 'list', {
					expires: date
				});

				//reload page.
				location.reload();
			});

		},yog_product_quantity: function () {
		  
    		   $('form.cart').on( 'click', 'button.increase, button.reduced', function() {
     
                // Get current quantity values
                var qty = $( this ).closest( 'form.cart' ).find( '.qty' );
                var val  = parseFloat(qty.val());
                var max = parseFloat(qty.attr( 'max' ));
                var min = parseFloat(qty.attr( 'min' ));
                var step = parseFloat(qty.attr( 'step' ));
     
                // Change the value if plus or minus
                if ( $( this ).is( '.increase' ) ) {
                   if ( max && ( max <= val ) ) {
                      qty.val( max );
                   } else {
                      qty.val( val + step );
                   }
                } else {
                   if ( min && ( min >= val ) ) {
                      qty.val( min );
                   } else if ( val > 1 ) {
                      qty.val( val - step );
                   }
                }
                 
             });
		}, yog_animation: function(){
            
            var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
            if (isMobile == false) {
                $("[data-animation]").each(function() {
                    var $this = $(this);
                    $this.addClass("animation");
                    if(!$("html").hasClass("no-csstransitions") && $(window).width() > 767) {
                        $this.appear(function() {
                            var delay = ($this.attr("data-animation-delay") ? $this.attr("data-animation-delay") : 1);
                            if(delay > 1) $this.css("animation-delay", delay + "ms");
                                $this.addClass($this.attr("data-animation"));
                                setTimeout(function() {
                                    $this.addClass("animation-visible");
                                }, delay);
                        }, {accX: 0, accY: -50});
            
                    } else {
                        $this.addClass("animation-visible");
                    }
                });  
            }
            
        }
	}

	$(document).ready(function () {

		Core.initialize();

	});
    
})(jQuery);