/**
  * @package Flipmart WordPress
  * 
  * Version Ray Scripts
  * Created by CKThemes
    Init Theme JS
    
    0. Scrolling
    1. Full Heigh
    2. Slider
    3. Popup
    
*/

;(function($) {
	"use strict";

    var Core = {
        
        initialize: function() {

			// Scrolling
			this.yog_scrolling();
            
            // Full Heigh
			this.yog_fullheight();
            
            // Slider
			this.yog_slider();
            
            // Popup
			this.yog_popup();
            
        },yog_scrolling : function(){
            
            $('.nav').onePageNav({
        		currentClass: 'active',
        		filter: ':not(.external)',
        		scrollOffset: 40
        	});
            
        },yog_fullheight : function(){
            
            $("#minimal-intro").css("min-height",$( window ).height());
        	$( window ).resize(function() {
        		$("#minimal-intro").css("min-height",$( window ).height());
        	});
            
        },yog_slider : function(){
            
            $("#slides").superslides({
        		play: 8000, //Milliseconds before progressing to next slide automatically. Use a falsey value to disable.
        		animation: "fade", //slide or fade. This matches animations defined by fx engine.
        		pagination: false,
        		inherit_height_from:".intro-block",
        		inherit_width_from:".intro-block"
        	});
            
            var owl = $("#screenshots-slider");
            owl.owlCarousel({
                items : 5, 
                itemsDesktop : [1400,4], 
                itemsDesktopSmall : [1200,3], 
                itemsTablet: [900,2], 
                itemsMobile : [600,1],
        		stopOnHover:true
            });
            
            var owl = $("#testimonials-slider");
            owl.owlCarousel({
                singleItem:true,
        		autoPlay:5000,
        		stopOnHover:true
            });
            
        },yog_popup: function(){
            
            $('#screenshots-slider').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
            
        }
    }
    
    $(document).ready(function() {
        
        Core.initialize();
    });

    $(window).load(function() { // makes sure the whole site is loaded


        //------------------------------------------------------------------------
        //						PRELOADER SCRIPT
        //------------------------------------------------------------------------   
        $('#preloader').delay(400).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('#preloader .inner').fadeOut(); // will first fade out the loading animation

        //------------------------------------------------------------------------
        //						STELLAR (PARALLAX) SETTINGS
        //------------------------------------------------------------------------ 	
        if(!(navigator.userAgent.match(/iPhone|iPad|iPod|Android|BlackBerry|IEMobile/i))) {
        	$.stellar({
        		horizontalScrolling: false,
        		positionProperty: 'transform'
        	});
        }

        //------------------------------------------------------------------------
        //						NAVBAR SLIDE SCRIPT
        //------------------------------------------------------------------------ 		
    	$(window).scroll(function () {
            if ($(window).scrollTop() > $("nav").height()) {
                $("nav.navbar-slide").addClass("show-menu");
            } else {
                $("nav.navbar-slide").removeClass("show-menu");
    			$(".navbar-slide .navMenuCollapse").collapse({toggle: false});
    			$(".navbar-slide .navMenuCollapse").collapse("hide");
    			$(".navbar-slide .navbar-toggle").addClass("collapsed");
            }
        });
	
    })

})(jQuery);