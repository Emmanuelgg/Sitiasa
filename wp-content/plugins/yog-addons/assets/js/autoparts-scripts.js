/**
  * @package Flipmart WordPress
  * 
  * Version Autoparts Scripts
  * Created by CKThemes
    Init Theme JS
    
    0. Slider
    1. Countdown
*/

;(function($) {
	"use strict";

    var Core = {
        
        initialize: function() {

			// Slider
			this.yog_slider();
            
            // Countdown
            this.yog_countdown();
        
        },yog_slider : function (){
            
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
                nav:false,
                dots:true,
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
        
        },yog_countdown : function (){
            
            if ($(".countbox_1").length) {
    			$(".countbox_1").each(function () {
    				var $this = $(this);
                    const second = 1000,
                    minute = second * 60,
                    hour = minute * 60,
                    day = hour * 24;
                
                    let countDown = new Date($this.data('date')).getTime(),
                        x = setInterval(function() {
                
                            let now = new Date().getTime(),
                                distance = countDown - now;
                
                            document.getElementById('days').innerText = Math.floor(distance / (day)),
                                document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                                document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                                document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
                
                        }, second)
    			});
    		}
            
        }
    }
    
    $(document).ready(function() {
    
        Core.initialize();
        
    });

    // Menu Responsive
    $(function(){
        var responsiveWidth = 990;
        var _widthResize;
    
        $(window).resize(function() {
            _widthResize = $(this).width() > responsiveWidth;
        }).resize();
    
        $('.navBox >ul >li').hover(function(){
          if(_widthResize){
            var _this = $(this);
            _this.addClass('active').children('.dropNav').stop(true, true).slideDown(300);        
          }  
        } , function(){
          if(_widthResize){
            $(this).removeClass('active').children('.dropNav').stop(true, true).hide();
          }   
        });
    
        $('.dropNav').parent('li').click(function(e) {
          if(!_widthResize){
            $(this).children('.dropNav').stop(true, true).slideToggle(300);
            e.preventDefault();
          }    
        });
    
    
    }); 

    // div's Equalheight
    var equalheight = function(container) {
        var currentTallest = 0,
            currentRowStart = 0,
            rowDivs = new Array(),
            $el,
            topPosition = 0;
        $(container).each(function() {
    
            $el = $(this);
            $($el).height('auto')
            topPostion = $el.position().top;
    
            if (currentRowStart != topPostion) {
                for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                    rowDivs[currentDiv].height(currentTallest);
                }
                rowDivs.length = 0; // empty the array
                currentRowStart = topPostion;
                currentTallest = $el.height();
                rowDivs.push($el);
            } else {
                rowDivs.push($el);
                currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
            }
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
        });
    }
    
    $(window).on('load', function() {
        equalheight('.top_collection_card');
        equalheight('.eq-height');
        equalheight('.categorie-media');
    });
    
    $(window).resize(function() {
        equalheight('.top_collection_card');
        equalheight('.eq-height');
        equalheight('.categorie-media');
    });

})(jQuery);