/**
  * @package Flipmart WordPress
  * 
  * Template Scripts
  * Created by CKThemes
    Init Theme JS
    
    0. Add Slider Items
    1. Lazy Load
    2. Single Product Gallery
    3. Tooltip
    4. Google Map
    5. Animation
    6. Shop Grid
    7. Countdown
    8. Zoom
    9. Ajax cart
    10. Twitter
*/

;(function($) {
	"use strict";

    var Core = {
        
        initialize: function() {

			// Add Slider Items
			this.yog_carousel_slider();
            
            //Lazy Load
            this.yog_lazy_load();
            
            //Single Product Gallery
            this.yog_product_gallery();
            
            //Tooltip
            this.yog_tooltip();
            
            //Google Map
            this.yog_google_map();
            
            //Animation
            this.yog_animation();
            
            //Shop Grid
            this.yog_shop_grid_icon();
            
            //Countdown
            this.yog_countdown();
            
            //Ajax cart
            this.yog_ajaxCart();
            
            //Twitter
            this.yog_twitter();
                    
        },yog_carousel_slider : function(){
            
            var dragging = true;
            var owlElementID = "#owl-main";
        
            function fadeInReset() {
                if (!dragging) {
                    $(owlElementID + " .caption .fadeIn-1, " + owlElementID + " .caption .fadeIn-2, " + owlElementID + " .caption .fadeIn-3").stop().delay(800).animate({ opacity: 0 }, { duration: 400, easing: "easeInCubic" });
                }
                else {
                    $(owlElementID + " .caption .fadeIn-1, " + owlElementID + " .caption .fadeIn-2, " + owlElementID + " .caption .fadeIn-3").css({ opacity: 0 });
                }
            }
        
            function fadeInDownReset() {
                if (!dragging) {
                    $(owlElementID + " .caption .fadeInDown-1, " + owlElementID + " .caption .fadeInDown-2, " + owlElementID + " .caption .fadeInDown-3").stop().delay(800).animate({ opacity: 0, top: "-15px" }, { duration: 400, easing: "easeInCubic" });
                }
                else {
                    $(owlElementID + " .caption .fadeInDown-1, " + owlElementID + " .caption .fadeInDown-2, " + owlElementID + " .caption .fadeInDown-3").css({ opacity: 0, top: "-15px" });
                }
            }
        
            function fadeInUpReset() {
                if (!dragging) {
                    $(owlElementID + " .caption .fadeInUp-1, " + owlElementID + " .caption .fadeInUp-2, " + owlElementID + " .caption .fadeInUp-3").stop().delay(800).animate({ opacity: 0, top: "15px" }, { duration: 400, easing: "easeInCubic" });
                }
                else {
                    $(owlElementID + " .caption .fadeInUp-1, " + owlElementID + " .caption .fadeInUp-2, " + owlElementID + " .caption .fadeInUp-3").css({ opacity: 0, top: "15px" });
                }
            }
        
            function fadeInLeftReset() {
                if (!dragging) {
                    $(owlElementID + " .caption .fadeInLeft-1, " + owlElementID + " .caption .fadeInLeft-2, " + owlElementID + " .caption .fadeInLeft-3").stop().delay(800).animate({ opacity: 0, left: "15px" }, { duration: 400, easing: "easeInCubic" });
                }
                else {
                    $(owlElementID + " .caption .fadeInLeft-1, " + owlElementID + " .caption .fadeInLeft-2, " + owlElementID + " .caption .fadeInLeft-3").css({ opacity: 0, left: "15px" });
                }
            }
        
            function fadeInRightReset() {
                if (!dragging) {
                    $(owlElementID + " .caption .fadeInRight-1, " + owlElementID + " .caption .fadeInRight-2, " + owlElementID + " .caption .fadeInRight-3").stop().delay(800).animate({ opacity: 0, left: "-15px" }, { duration: 400, easing: "easeInCubic" });
                }
                else {
                    $(owlElementID + " .caption .fadeInRight-1, " + owlElementID + " .caption .fadeInRight-2, " + owlElementID + " .caption .fadeInRight-3").css({ opacity: 0, left: "-15px" });
                }
            }
        
            function fadeIn() {
                $(owlElementID + " .active .caption .fadeIn-1").stop().delay(500).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
                $(owlElementID + " .active .caption .fadeIn-2").stop().delay(700).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
                $(owlElementID + " .active .caption .fadeIn-3").stop().delay(1000).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
            }
        
            function fadeInDown() {
                $(owlElementID + " .active .caption .fadeInDown-1").stop().delay(500).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
                $(owlElementID + " .active .caption .fadeInDown-2").stop().delay(700).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
                $(owlElementID + " .active .caption .fadeInDown-3").stop().delay(1000).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
            }
        
            function fadeInUp() {
                $(owlElementID + " .active .caption .fadeInUp-1").stop().delay(500).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
                $(owlElementID + " .active .caption .fadeInUp-2").stop().delay(700).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
                $(owlElementID + " .active .caption .fadeInUp-3").stop().delay(1000).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
            }
        
            function fadeInLeft() {
                $(owlElementID + " .active .caption .fadeInLeft-1").stop().delay(500).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
                $(owlElementID + " .active .caption .fadeInLeft-2").stop().delay(700).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
                $(owlElementID + " .active .caption .fadeInLeft-3").stop().delay(1000).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
            }
        
            function fadeInRight() {
                $(owlElementID + " .active .caption .fadeInRight-1").stop().delay(500).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
                $(owlElementID + " .active .caption .fadeInRight-2").stop().delay(700).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
                $(owlElementID + " .active .caption .fadeInRight-3").stop().delay(1000).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
            }
        
            $(owlElementID).each(function(){
            
                var owl = $(this);
                owl.owlCarousel({
        
                    autoPlay: 5000,
                    stopOnHover: true,
                    navigation: true,
                    pagination: true,
                    singleItem: true,
                    addClassActive: true,
                    transitionStyle: "fade",
                    navigationText: ["<i class='icon fa fa-angle-left'></i>", "<i class='icon fa fa-angle-right'></i>"],
            
                    afterInit: function() {
                        fadeIn();
                        fadeInDown();
                        fadeInUp();
                        fadeInLeft();
                        fadeInRight();
                    },
            
                    afterMove: function() {
                        fadeIn();
                        fadeInDown();
                        fadeInUp();
                        fadeInLeft();
                        fadeInRight();
                    },
            
                    afterUpdate: function() {
                        fadeIn();
                        fadeInDown();
                        fadeInUp();
                        fadeInLeft();
                        fadeInRight();
                    },
            
                    startDragging: function() {
                        dragging = true;
                    },
            
                    afterAction: function() {
                        fadeInReset();
                        fadeInDownReset();
                        fadeInUpReset();
                        fadeInLeftReset();
                        fadeInRightReset();
                        dragging = false;
                    }
            
                });
            });
        
            if ($(owlElementID).hasClass("owl-one-item")) {
                $(owlElementID + ".owl-one-item").data('owlCarousel').destroy();
            }
        
            $(owlElementID + ".owl-one-item").each(function(){
            
                var owl = $(this);
                owl.owlCarousel({
                    singleItem: true,
                    navigation: false,
                    pagination: false
                });
            });
        
            $('.home-owl-carousel, .homepage-owl-carousel').each(function(){
            
                var owl = $(this);
                var  itemPerLine = owl.data('item');
                if(!itemPerLine){
                    itemPerLine = 4;
                }
                owl.owlCarousel({
                    items : itemPerLine,
                    itemsTablet:[768,2],
                    navigation : true,
                    pagination : false,
            
                    navigationText: ["", ""]
                });
            });
        
            $(".blog-slider").each( function(){
                var $this = $(this);
                $this.owlCarousel({
                    items : 2,
                    itemsDesktopSmall :[979,2],
                    itemsDesktop : [1199,2],
                    navigation : true,
                    slideSpeed : 300,
                    pagination: false,
                    navigationText: ["", ""]
                });
            });
            
            $(".best-seller, .upsell-product").each( function(){
                var $this = $(this);
                $this.owlCarousel({
                    items : 3,
                    navigation : true,
                    itemsDesktopSmall :[979,2],
                    itemsDesktop : [1199,2],
                    slideSpeed : 300,
                    pagination: false,
                    paginationSpeed : 400,
                    navigationText: ["", ""]
                });
            });
            
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
                    navigationText: ["", ""]
                });
            });
            
            $(".brand-slider").each( function(){
                var $this = $(this);
                $this.owlCarousel({
                    items : 6,
                    navigation : true,
                    slideSpeed : 300,
                    pagination: false,
                    paginationSpeed : 400,
                    navigationText: ["", ""]
                }); 
            });
               
            $("#advertisement").each( function(){
                var $this = $(this);
                $this.owlCarousel({
                    items : 1,
                    itemsDesktopSmall :[979,2],
                    itemsDesktop : [1199,1],
                    navigation : true,
                    slideSpeed : 300,
                    pagination: true,
                    paginationSpeed : 400,
                    navigationText: ["", ""]
                });
            });  
            
            $( '.gallery-holder' ).each( function(){  
                var $this = $(this);
                var image = $this.find( '.owl-single-product' );
                var thumbnails = $this.find( '.owl-single-product-thumbnails' );
                image.owlCarousel({
                    items:1,
                    itemsTablet:[768,2],
                    itemsDesktop : [1199,1]
            
                });
                thumbnails.owlCarousel({
                    items: 4,
                    pagination: true,
                    rewindNav: true,
                    itemsTablet : [768, 4],
                    itemsDesktop : [1199,3]
                });
                
            });
            
    
        }, yog_lazy_load: function(){
            
            echo.init({
                offset: 100,
                throttle: 250,
                unload: false
            });
            
        }, yog_product_gallery: function(){
            
            $('#owl-single-product').owlCarousel({
                items:1,
                itemsTablet:[768,2],
                itemsDesktop : [1199,1]
        
            });
        
            $('#owl-single-product-thumbnails').owlCarousel({
                items: 4,
                pagination: true,
                rewindNav: true,
                itemsTablet : [768, 4],
                itemsDesktop : [1199,3]
            });
        
            $('#owl-single-product2-thumbnails').owlCarousel({
                items: 6,
                pagination: true,
                rewindNav: true,
                itemsTablet : [768, 4],
                itemsDesktop : [1199,3]
            });
        
            $('.single-product-slider').owlCarousel({
                stopOnHover: true,
                rewindNav: true,
                singleItem: true,
                pagination: true
            });
            
        }, yog_tooltip: function(){
            
            $("[data-toggle='tooltip']").tooltip(); 
            
            $( '.favorite-button .compare' ).attr({ 
                'data-toggle' : 'tooltip',
                'data-placement' : 'right',
                'title' : '',
                'data-original-title' : 'Add to Compare' 
            
            });
            
            $( '.favorite-button .add-to-cart' ).attr({ 
                'data-toggle' : 'tooltip',
                'data-placement' : 'right',
                'title' : '',
                'data-original-title' : 'Wishlist' 
            
            });
        
        }, yog_google_map: function(){
            
            if( $( '.map-canvas' ).length ){
                $( '.map-canvas' ).each( function(){
                    var $this = $(this);
                    var lat = $this.data('lat');
                    var lng = $this.data('lng');
                    var image = $this.data('marker');
                    
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
            
        },setCookie: function (cname,cvalue,exdays) {
            
          var d = new Date();
          d.setTime(d.getTime() + (exdays*24*60*60*1000));
          var expires = "expires=" + d.toGMTString();
          document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
          
        }, getCookie: function (cname) {
            
          var name = cname + "=";
          var decodedCookie = decodeURIComponent(document.cookie);
          var ca = decodedCookie.split(';');
          for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
              c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
            }
          }
          return "";
          
        },yog_shop_grid_icon: function(){
            
            $('.grid-item').click(function(e) {
              e.preventDefault(); 
              var $this = $(this);
              $this.toggleClass('active'); 
              
              //set cookie time 20 sec.
              var date = new Date();
              date.setTime(date.getTime() + (20 * 1000));
              
              //set gridcookie with expires time.
              Core.setCookie('gridcookie','grid' , date );
              
              //reload page.
              location.reload();          
                                  
           });
           
           $('.list-item').click(function(e) {
              e.preventDefault();
              var $this = $(this);
              $this.toggleClass('active'); 
               
              //set cookie time 20 sec.
              var date = new Date();
              date.setTime(date.getTime() + (20 * 1000));
              
              //set gridcookie with expires time.
              Core.setCookie('gridcookie','list' , date );
              
              //reload page.
              location.reload(); 
           });
            
        }, yog_countdown: function(){
            
            if( $( ".timing-wrapper" ).length > 0 ){
                $(".timing-wrapper").each( function(){
                   var $this = $(this); 
                   $this.countdown({
                        date: $this.data('date'), // add your date here.
                        format: "on"
                   });
                });    
            }
            
        },yog_ajaxCart : function(){
            
            $( document.body ).on( 'added_to_cart', function(){
                
                $( '.cart-msg' ).css( 'display', 'block' );
                $( '.cart-msg' ).fadeOut( 4000 );
            });

        },yog_twitter : function(){
            
            //Twitter Feeds
            $('.tweecool').each(function(){
               var username = $(this).data('username'); 
               var limit    = $(this).data('limit'); 
               
               $(this).tweecool({
                   username : username, 
            	   profile_image: false,
                   limit : limit	
                });
            });
        
        }
   }
   
   $(document).ready(function() {
        
        Core.initialize();
        
        //Menu Banner
        $(".dropdown-banner-holder").parents('.menu-widget').find( '.title' ).css("display", "none");
        $(".menu-widget img").parents('.menu-widget').find( '.title' ).css("display", "none");
        
        // ===== Scroll to Top ==== 
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(200);    // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(200);   // Else fade out the arrow
            }
        });
        $('#return-to-top').click(function() {      // When arrow is clicked
            $('body,html').animate({
                scrollTop : 0                       // Scroll to top of body
            }, 500);
        });
        
        // Counter
        if( $('#counter').length ){ 
            
         var a = 0;
         $(window).scroll(function() {
         
           var oTop = $('#counter').offset().top - window.innerHeight;
           if (a == 0 && $(window).scrollTop() > oTop) {
             $('.counter-value').each(function() {
               var $this = $(this),
                 countTo = $this.attr('data-count');
               $({
                 countNum: $this.text()
               }).animate({
                   countNum: countTo
                 },
         
                 {
         
                   duration: 2000,
                   easing: 'swing',
                   step: function() {
                     $this.text(Math.floor(this.countNum));
                   },
                   complete: function() {
                     $this.text(this.countNum);
                   }
         
                 });
             });
             a = 1;
           }
         
         });
                
        }
        
        $( '.woocommerce-review-link' ).click(function(e) {
            
            $( '.tab-content .tab-pane' ).each( function(){
                   var $this = $(this);
                   $this.removeClass('active');
            });
            $( '#product-tabs li' ).each( function(){
                   var $this = $(this);
                   $this.removeClass('active');
            });
            
            $( '.reviews, #tab-reviews' ).addClass('active');
        });
        
        $(window).load(function() {
         	  setInterval(function () {
                 moveRight();
             }, 3000);
         });
           
     	var slideCount = $('#slider ul li').length;
     	var slideWidth = $('#slider ul li').width();
     	var slideHeight = $('#slider ul li').height();
     	var sliderUlWidth = slideCount * slideWidth;
     	
     	$('#slider').css({ width: slideWidth, height: slideHeight });
     	
     	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
     	
         $('#slider ul li:last-child').prependTo('#slider ul');
     
         function moveLeft() {
             $('#slider ul').animate({
                 left: + slideWidth
             }, 200, function () {
                 $('#slider ul li:last-child').prependTo('#slider ul');
                 $('#slider ul').css('left', '');
             });
         };
     
         function moveRight() {
             $('#slider ul').animate({
                 left: - slideWidth
             }, 200, function () {
                 $('#slider ul li:first-child').appendTo('#slider ul');
                 $('#slider ul').css('left', '');
             });
         };
     
         $('a.control_prev').click(function () {
             moveLeft();
         });
     
         $('a.control_next').click(function () {
             moveRight();
         });
     
         // Product Search Form Suggestion   
         $("#product-keyword").on("input", function(e) {
            var value = $( this ).val();
            
            //Display Result Container
            $( '#product-search-result' ).css( 'display', 'block' );
            
            //Ajax Request
            if( value ){
                
                $.ajax({
                    url: yogTheme.assets.ajax,
                    type: 'post',
                    data: { 
                        action: 'product_search_form_result', 
                        keyword: value 
                    },
                    beforeSend: function() {
                      $("#loader").show();
                    },
                    success: function(data) {
                        $('#product-search-result').html( data );
                    }
                });
                
            }else{
                
                $( '#product-search-result' ).css( 'display', 'none' );
            
            }
        });
        
        // Product Quick View
         $(".quick-view").on("click", function(e) {
            var product = $( this ).data( 'product' );
            $( '.modal' ).remove();
            
            //Ajax Request
            if( product ){
                
                $.ajax({
                    url: yogTheme.assets.ajax,
                    type: 'post',
                    data: { 
                        action : 'product_quick_view', 
                        product: product 
                    },
                    beforeSend: function() {
                      $("#loader-wrapper").show();
                    },
                    success: function(data) {
                        $("#loader-wrapper").hide();
                        $( 'footer' ).after( data );
                        var change =  jQuery( '.variations_form' ).wc_variation_form();
				        jQuery( '.variations_form .variations select' ).change();
                               
                        
                        console.log(change);
                        $( '#myModal'+product ).modal('show');
                        $( '.gallery-holder' ).each( function(){  
                            var $this = $(this);
                            var image = $this.find( '.owl-single-product' );
                            var thumbnails = $this.find( '.owl-single-product-thumbnails' );
                            image.owlCarousel({
                                items:1,
                                itemsTablet:[768,2],
                                itemsDesktop : [1199,1]
                        
                            });
                            thumbnails.owlCarousel({
                                items: 4,
                                pagination: true,
                                rewindNav: true,
                                itemsTablet : [768, 4],
                                itemsDesktop : [1199,3],
                            });
                            
                        });

                    }
                });
                
            }
        });
   });
   
})(jQuery);