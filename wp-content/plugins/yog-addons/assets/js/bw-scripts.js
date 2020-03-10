/**
  * @package Flipmart WordPress
  * 
  * Version Black & White Scripts
  * Created by CKThemes
    Init Theme JS
    
    0. Add Parallax
    1. Section scrolling
    2. First Screen
    3. Slider
    4. Smooth Scrolling
    5. Main Menu
    6. Countdown
    7. Blog
    8. Footer
    9. Button
    10. Menu Scrolling
*/

;(function($) {
	"use strict";

    var Core = {
        
        initialize: function() {

			// Add Parallax
			this.yog_parallax();
            
            // Section scrolling
            this.yog_section_scrolling();
            
            // First Screen
            this.yog_first_screen();
            
            // Slider
            this.yog_slider();
            
            // Smooth Scrolling
            this.yog_smooth_scrolling();
            
            // Main Menu
            this.yog_main_menu();
            
            // Countdown
            this.yog_countdown();
            
            // Blog
            //this.yog_blog();
            
            // Footer
            this.yog_footer();
            
            // Button
            this.yog_mailForm();
            
            // Menu Scrolling
            this.yog_Menu();
                    
        },yog_parallax : function(){
            
            var deviceAgent = navigator.userAgent.toLowerCase();
            var isTouchDevice = Modernizr.touchevents || (deviceAgent.match(/(iphone|ipod|ipad)/) || deviceAgent.match(/(android)/)  || deviceAgent.match(/(iemobile)/) || deviceAgent.match(/iphone/i) || deviceAgent.match(/ipad/i) || deviceAgent.match(/ipod/i) || deviceAgent.match(/blackberry/i) || deviceAgent.match(/bada/i));
            
            if(!isTouchDevice){
            	$(document).ready(function() {   
            		$('.parallax-block').css({'background-attachment':'fixed'});	
            	});
            }
            
        },yog_page_loader: function(){
            
            jQuery("#page-preloader").delay(1200).fadeOut('slow');
            jQuery('body').css('overflowY','auto');
            
        },yog_section_scrolling: function(){
            
            var sections = $('section');
            var nav = $('nav ul li');
            var nav_height = $('header').outerHeight();
            $(window).on('scroll', function() {
                var cur_pos = $(this).scrollTop();
                sections.each(function() {
                    var top = $(this).offset().top - nav_height,
                        bottom = top + $(this).outerHeight();
                    if (cur_pos >= top && cur_pos <= bottom) {
                        nav.find('a').removeClass('current');
                        sections.removeClass('current');
                        $(this).addClass('current');
                        nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('current');
                    }
                });
            });
            
        },yog_sticky_header: function(){
            
            $(window).scroll(function(){
              var sticky = $('header'),
                  scroll = $(window).scrollTop(),
            	  windowWidth = jQuery(window).width();
            if(windowWidth > 768){
              if (scroll > 0){
            	sticky.addClass('fixed');
            
              }
              else sticky.removeClass('fixed');
             }
            });
            
        },yog_first_screen: function(){
            
            function setHeiHeight() {
                var h = $(window).height();
        		$('#top').css('min-height', h); /*Mozilla fix*/
                $('.top-outer').css('height', h);
        		$('.slides li').css('min-height', h);
            }
            setHeiHeight();
            $(window).resize(setHeiHeight);
           /*==========================*/
        	function setMarg() {
        		var popMargTop2 = $('header').outerHeight();
        		var popMargTop3 = $('.top-left-separator').outerHeight();
        		var windowWidth = jQuery(window).width();
        		$('.top-outer').css('padding-top', popMargTop2);
        		if(windowWidth > 768){
        			$('.top-outer').css('padding-bottom', popMargTop2 + popMargTop3);
        		}
        		else{
        			$('.top-outer').css('padding-bottom', popMargTop2);
        		}
            }
            setMarg();
        	$(window).resize(setMarg);
    
        },yog_slider: function(){
            
            $('.slides').bxSlider({
                mode: 'fade',
                slideMargin: 0,
                auto: true,
                pause: 7000,
                autoControls: false,
                controls: true,
                pager: false
            });
            
            /****Carousel testimonials ***/
            $("#testi").owlCarousel({
                navigation : false,
                pagination : true,
                autoPlay : 7000,
            	singleItem : true
             });
             
             $("#brands").owlCarousel({
                navigation : false,
                pagination : false,
                autoPlay : 4000,
            	items : 5,
                itemsDesktop : [1200,4],
                itemsDesktopSmall : [980,3],
                itemsTablet: [768,2],
                itemsMobile : [480,1]
              });
            
        },yog_smooth_scrolling: function(){
            
            $(".scroll-down, .menu-item, #promo a").click(function() {
            	var offsetSize = $("header").innerHeight();
            	$("html, body").animate({
            		scrollTop: $($(this).attr("href")).offset().top - offsetSize + "px"
            	}, {
            		duration: 800
            	});
            	return false;
            });
            
        },yog_main_menu: function(){
            
            $(".ham").click(function(){
    			$("header").toggleClass("sb-active");
    		});
    		$('.menu-item').each(function () {
    			$(this).click(function() {
    				$("header").removeClass("sb-active");
    			});
    		});
            $(".scroll-menu").click(function(e) {
            	e.preventDefault();
            	$(this).next(".scroll-menu").slideToggle("fast");
            });
            
        },yog_countdown: function(){
            
            $('.count-box').each(function () {
                $(this).appear(function() {
                    $('.counter').countTo();
                }); 
            });
    
        },yog_blog: function(){
            
            $('#blog .news-item').equalHeights();
            $('#content .news-item').equalHeights();
            
            $(window).resize(function(){
            	$('#blog .news-item').equalHeights();
            	$('#content .news-item').equalHeights();
            });
            
        },yog_footer: function(){
            
            function fixFooter() {
        		var h_1 = $('footer').outerHeight();
        		var h_2 = $('header').outerHeight();
        		var elem = $('.sticky-footer');
        		var elem2 = $(window).height();
        		var elem3 = elem2 - h_1 - h_2;
        		elem.css({
        			'min-height' : elem3,
        			'margin-top' : h_2
        		});
            }
            fixFooter();
            $(window).resize(fixFooter);
            
        },yog_mailForm: function(){
            
            $(".btn-show").click(function(){
            	$(this).toggleClass("open");
                var $active = $(this).data('active');
                var $hidden = $(this).data('hidden');
            	$(".pop-wrap").stop('true','true').slideToggle("fast");
            });
            
        },yog_Menu: function(){
            
            $('.menu-mainmenu-container a[href*=#]').bind('click', function(e) {
    			e.preventDefault(); // prevent hard jump, the default behavior
    
    			var target = $(this).attr("href"); // Set the target as variable
                
    			// perform animated scrolling by getting top-position of target-element and set it as scroll target
    			$('html, body').stop().animate({
    					scrollTop: $(target).offset().top
    			}, 600, function() {
    					location.hash = target; //attach the hash (#jumptarget) to the pageurl
    			});
    
    			return false;
    		});
        }
   }
   
   $(document).ready(function() {
        
        Core.initialize();
   
   });
   
   $(window).on('load', function () {
        
        Core.yog_page_loader();	
   
   });
    
   //Sticky Header
   Core.yog_sticky_header();
   
   if( $( '.gmap' ).length ){
        $( '.gmap' ).each( function(){
            var $this = $(this);
            var lat = $this.data('lat');
            var lng = $this.data('lng');
            var heading = $this.data('heading');
            var content = $this.data('content');
            var image = $this.data('marker');
            
            function init() {
            	var myStyledMap = [{"stylers":[{"saturation":-100},{"gamma":0.8},{"lightness":4},{"visibility":"on"}]},{"featureType":"landscape.natural","stylers":[{"visibility":"on"},{"color":"#000"},{"gamma":4.97},{"lightness":-5},{"saturation":100}]}],
            		mapOptions = {
            		zoom: 16,
            		center: new google.maps.LatLng(lat, lng), 
            		mapTypeId: google.maps.MapTypeId.ROADMAP,
            		mapTypeControl: false,
                    scrollwheel: false,
            	};
            
            	var mapElement = document.getElementById('map');
            	
            	var map = new google.maps.Map(mapElement, mapOptions);
            		map.mapTypes.set('styledmap', new google.maps.StyledMapType(myStyledMap));
            		map.setMapTypeId('styledmap');
            
            	var marker = new google.maps.Marker({
                	icon: image,
            		position: new google.maps.LatLng(lat, lng),
            		map: map,
            		title: heading
            	});
            	var contentString = '<div class="marker-wrap"><h4>'+ heading +'</h4>'+ content +'</div>';
            	var infowindow = new google.maps.InfoWindow({
            		content: contentString
            	});
            	google.maps.event.addListener(marker, 'click', function() {
            		infowindow.open(map,marker);
            	});
            }google.maps.event.addDomListener(window, 'load', init);
            
            
            function initialize() {
            	var myLatlng = new google.maps.LatLng(lat, lng);
            	var mapOptions = {
            	zoom: 14,
            	disableDefaultUI: true,
            	scrollwheel:false,
            	center: myLatlng
            	}
            	var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            
            	var myLatLng = new google.maps.LatLng(lat, lng);
            	var beachMarker = new google.maps.Marker({
            	  position: myLatLng,
            	  map: map,
            	  icon: image
            	});
        	}
        	google.maps.event.addDomListener(window, 'load', initialize);
        });
   }
   
   jQuery(function() {
        var sections = $('section');
        var nav = $('nav ul li');
        var nav_height = $('header').outerHeight();
        $(window).on('scroll', function() {
            var cur_pos = $(this).scrollTop();
            sections.each(function() {
                var top = $(this).offset().top - nav_height,
                    bottom = top + $(this).outerHeight();
                if (cur_pos >= top && cur_pos <= bottom) {
                    nav.find('a').removeClass('current');
                    sections.removeClass('current');
                    $(this).addClass('current');
                    nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('current');
                }
            });
        });
    });
    
    
    $(window).scroll(function() {
		var scrollDistance = $(window).scrollTop();

		// Assign active class to nav links while scolling
		$('.scroll-menu').each(function(i) {
			if ($(this).position().top <= scrollDistance) {
				$('.menu-mainmenu-container a.current').removeClass('current');
				$('.menu-mainmenu-container a').eq(i).addClass('current');
			}
		});
    }).scroll();
   
})(jQuery);

