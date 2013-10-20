/***
 * Written by: Xenia Tay
 * Parallax for hero unit
 */

var parallaxScroll = ( function() {

    var MOBILE = 720;

    var paraObjs,
        isMobile;

    var init = function() {

        isMobile = ( $(window).width() < MOBILE );

        if ( !isMobile ) {
            $('#herounit').addClass('parallax-scroll');
            paraObjs = $('.parallax-scroll');
        }

        initEvents();

    },

    initEvents = function() {

        $(window).scroll( onScroll );
        $(window).resize( _.debounce( onResize, 100 ) );

    },

    onResize = function() {

        if ( $(window).width() < MOBILE ) {
            isMobile = true;
            $('#herounit').removeClass('parallax-scroll');
            paraObjs = null;
        } else {
            isMobile = false;
            $('#herounit').addClass('parallax-scroll');
            paraObjs = $('.parallax-scroll');
        }

    },

    onScroll = function() {

        if (!isMobile) {

            _.each( paraObjs, function(paraObj) {
                var yPos = -( $(window).scrollTop() / $(paraObj).data('speed') ),
                    coords = '50% ' + yPos + 'px';

                $(paraObj).css({ backgroundPosition: coords });
            });

        }

    };

    return {
        init: init
    }

})();

