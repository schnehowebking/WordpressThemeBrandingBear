/**
 *
 * -----------------------------------------------------------------------------
 *
 * Template : Branding Bear
 * Author : SoftFounder
 * Author URI : http://SoftFounder.net/
 *
 * -----------------------------------------------------------------------------
 *
 **/


(function($, window, document) {
    "use strict";

    $(document).on('ready', function() {

       
        /*----------------------------------------------------*/
        /*  MOBILE MENU
        /*---------------------------------------------------*/
        //Submenu Dropdown Toggle
        if ($('.bb-main-header li.dropdown ul').length) {
            $('.bb-main-header li.dropdown').append('<div class="dropdown-btn"><i class="icofont-simple-down"></i></div>');

            //Dropdown Button
            $('.bb-main-header li.dropdown .dropdown-btn').on('click', function() {
                $(this).prev('ul').slideToggle(500);
            });
        }

        /*----------------------------------------------------*/
        /*  Mobile Nav Hide Show
        /*---------------------------------------------------*/
        if ($('.bb-mobile-menu').length) {

            $('.bb-mobile-menu .menu-box').mCustomScrollbar();

            var mobileMenuContent = $('.bb-main-header .nav-outer .bb-main-menu').html();
            $('.bb-mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
            $('.bb-sticky-header .bb-main-menu').append(mobileMenuContent);


            //Menu Toggle Btn
            $('.bb-mobile-menu .menu-backdrop,.bb-mobile-menu .close-btn').on('click', function() {
                $('body').removeClass('bb-mobile-menu-visible');

            });
            //Dropdown Button
            $('.bb-mobile-menu li.dropdown .dropdown-btn').on('click', function() {
                $(this).toggleClass('open');
                $(this).prev('ul').slideToggle(500);
            });
            //Menu Toggle Btn
            $('.mobile-nav-toggler').on('click', function() {
                $('body').addClass('bb-mobile-menu-visible');

            });
        }


 


        /*----------------------------------------------------*/
        /*  Search Header
        /*---------------------------------------------------*/
        if ($('.bb-search-box-outer').length) {
            $('.bb-search-box-outer').on('click', function() {
                $('body').addClass('search-active');
            });
            $('.close-search').on('click', function() {
                $('body').removeClass('search-active');
            });
        }

        /*----------------------------------------------------*/
        /*  Header Style
        /*---------------------------------------------------*/
        function headerStyle() {
            if ($('.bb-main-header').length) {
                var windowpos = $(window).scrollTop();
                var siteHeader = $('.bb-main-header');
                var scrollLink = $('.scroll-to-top');
                var sticky_header = $('.bb-main-header .bb-sticky-header');
                if (windowpos > 100) {
                    siteHeader.addClass('fixed-header');
                    sticky_header.addClass("animated slideInDown");
                    scrollLink.fadeIn(300);
                } else {
                    siteHeader.removeClass('fixed-header');
                    sticky_header.removeClass("animated slideInDown");
                    scrollLink.fadeOut(300);
                }
            }
        }

        /*----------------------------------------------------*/
        /*  OWL-CAROUSEL SLIDER FUNCTIONS
        /*---------------------------------------------------*/
        if ($.fn.owlCarousel) {
            //Owl-Carousel Slider Activation Functions
            var heroSlider = $('.bb-banner');
            var brandCarousel = $('.brand-carousel');
            var tsCarousel = $('.ts-slider');
            heroSlider.owlCarousel({
                items: 1,
                loop: true,
                margin: 0,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                smartSpeed: 500,
                autoplay: 6000,
                autoplayTimeout: 700000,
                autoplayHoverPause: true,
                mouseDrag: true,
                touchDrag: false,
                autoplay: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    480: {
                        items: 1,
                    },
                    768: {
                        items: 1,
                    }
                }
            });
            
            heroSlider.on('translate.owl.carousel', function() {
                var layer = $("[data-animation]");
                layer.each(function() {
                    var animation_name = $(this).data('animation');
                    $(this).removeClass('animated ' + animation_name).css('opacity', '0');
                });
            });
            $("[data-delay]").each(function() {
                var animation_delay = $(this).data('delay');
                $(this).css('animation-delay', animation_delay);
            });
            $("[data-duration]").each(function() {
                var animation_duration = $(this).data('duration');
                $(this).css('animation-duration', animation_duration);
            });
            heroSlider.on('translated.owl.carousel', function() {
                var layer = heroSlider.find('.owl-item.active').find("[data-animation]");
                layer.each(function() {
                    var animation_name = $(this).data('animation');
                    $(this).addClass('animated ' + animation_name).css('opacity', '1');
                });
            });

            tsCarousel.owlCarousel({
                items: 1,
                loop: true,
                margin: 0,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                smartSpeed: 500,
                autoplay: 6000,
                autoplayTimeout: 700000,
                autoplayHoverPause: true,
                mouseDrag: true,
                touchDrag: false,
                autoplay: true,
                nav: true,
                navText:['<i class="icofont-long-arrow-left"></i>', '<i class="icofont-long-arrow-right"></i>']
            });

        };

        /*-----------------*/
        /*  Google Map Js
        /*-----------------*/
        let mapId = $("#map");
        if(mapId.length){
            google.maps.event.addDomListener(window, 'load', init);

        function init() {

            var mapOptions = {

                zoom: 16,

                scrollwheel: false,

                center: new google.maps.LatLng(38.906417, -77.040128), // New York

         
            };

            var mapElement = document.getElementById('map');

            var map = new google.maps.Map(mapElement, mapOptions);

            var marker = new google.maps.Marker({

                position: new google.maps.LatLng(38.906417, -77.040128),

                map: map,

                title: 'Snazzy!'

            });

        }
        }
        
        /*---------------------*/
        /*  PopUp js
        /*---------------------*/
        function magnificPopupJs(item, type) {
            $(item).magnificPopup({
                type: type
            });
        }

     
        /*----------------------------------------------------*/
        /*  Function Call
        /*---------------------------------------------------*/
        headerStyle();
        $(window).scroll(headerStyle);
        magnificPopupJs('.popup-link', 'image');


    });


})(jQuery, window, document);