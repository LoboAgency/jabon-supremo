(function ($, window, document, undefined) {
    'use strict';

    function initReady() { }

    function initLoad() {


        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:1,
                    nav:true
                },
                1000:{
                    items:1,
                    nav:true
                }
            }
        })

        $('.ico-nav').click(function() {
            TweenMax.to('#main-menu', 0.15, { css: { right: '0' }, ease: Linear.easeInOut });
        });


        window.sr = ScrollReveal({ reset: true, mobile: false });
        window.sr = new scrollReveal({ mobile: false })
        var config = { mobile: false }
        sr.reveal('.right', {origin: 'right', distance: '300px', duration: 2500});
        sr.reveal('.left', {origin: 'left', distance: '300px', duration: 2500});

        sr.reveal('.down', {origin: 'bottom', distance: '300px', duration: 2500});
    
        $('.ico-close').click(function() {
            TweenMax.to('#main-menu', 0.15, { css: { right: '-100%' }, ease: Linear.easeInOut });
        });

        $('.opn').click(function() {
            TweenMax.to('#main-menu', 0.15, { css: { right: '-100%' }, ease: Linear.easeInOut });
        });

        skrollr.init({          
            mobileCheck: function() {
                //hack - forces mobile version to be off
                return false;
            }
        });

        $.browser.device = (/android|webos|iphone|ipod|blackberry|iemobile|opera mini/i.test( navigator.userAgent.toLowerCase() ));


        if ( $.browser.device ) {

            $('.close-ico').click(function() {
                TweenMax.to('#main-menu', 0.15, { css: { right: '-100%' }, ease: Linear.easeInOut });
            });
        }
    }

    function initScroll() {

        if ( $(window).scrollTop() >= 170) {
            TweenMax.to('.bar', 0.15, { css: { height: '97px' }, ease: Linear.easeInOut });

        } else {
            TweenMax.to('.bar', 0.15, { css: { height: '0' }, ease: Linear.easeOut });
        }

    }

    $(document).on('ready', initReady);
    $(window).on('scroll', initScroll);
    $(window).on('load', initLoad);
})(jQuery, window, document);