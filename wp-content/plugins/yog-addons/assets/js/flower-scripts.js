/**
  * @package Flipmart WordPress
  * 
  * Version Flower Scripts
  * Created by CKThemes
    Init Theme JS
    
    0. Search Scrolling
    1. Slider
    
*/

;(function($) {
	"use strict";

    var Core = {
        
        initialize: function() {

			// Search Scrolling
			this.yog_search();
            
            // Slider
			this.yog_slider();
            
        },yog_search : function(){
            
            $('a[href="#search"]').on('click', function(event) {
                $('#search').addClass('open');
                $('#search > form > input[type="search"]').focus();
            });
            
            $('#search, #search button.close').on('click keyup', function(event) {
                if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
                    $(this).removeClass('open');
                }
            });
            
        },yog_slider : function(){
            
            // Hero Slider
            $('.hero-slider').owlCarousel({
                animateOut: 'bounceInLeft',
                animateIn: 'bounceInLeft',
                items:1,
                margin:0,
                stagePadding:0,
                smartSpeed:450,
                autoplay:true,
                // autoplayTimeout:1000,
                autoplayHoverPause:false,
                nav:false,
                dots:true
            });
        
            // Testimonial Slider
            $('.testimonial-slider').owlCarousel({
                animateOut: 'bounceInLeft',
                animateIn: 'bounceInLeft',
                items:1,
                margin:0,
                stagePadding:0,
                smartSpeed:450,
                autoplay:true,
                // autoplayTimeout:1000,
                autoplayHoverPause:false,
                navigation:false,
                rewindNav:true,
                pagination:true
            });
        
            // Latest Blog Slider
            $('.latest-blog-slider').owlCarousel({
                animateOut: 'bounceInLeft',
                animateIn: 'bounceInLeft',
                items:3,
                margin:30,
                stagePadding:0,
                smartSpeed:450,
                autoplay:true,
                // autoplayTimeout:1000,
                autoplayHoverPause:false,
                navigation:false,
                pagination:true,
                rewindNav:true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1
                    },
                    768:{
                        items:2
                    },
                    992:{
                        items:3
                    }
                }
            }); 
            
        }
    }
  
    $(document).ready(function() {
        
        Core.initialize();
        
        // Header Shrink on scroll
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 1) {
                $(".header").addClass("light_header");
            } else {
                $(".header").removeClass("light_header");
            }
        });
    });
    
})(jQuery);