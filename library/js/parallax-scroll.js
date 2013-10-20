/***
 * Written by: Xenia Tay
 * Parallax for hero unit
 */

var parallaxScroll = ( function() {

    var MOBILE = 720;

    var paraObjs;

    var init = function() {

        if ( !($(window).width() < MOBILE) ) {
            $('#herounit').addClass('parallax-scroll');
            paraObjs = $('.parallax-scroll');
        }

        initEvents();

    },

    initEvents = function() {

        $(window).scroll( onScroll );
        $(window).resize( _.debounce( onResize, 300 ) );

    },

    onResize = function() {

        if ($(window).width() < MOBILE) {
            $('#herounit').removeClass('parallax-scroll');
            paraObjs = null;
        } else {
            $('#herounit').addClass('parallax-scroll');
            paraObjs = $('.parallax-scroll');
        }

    },

    onScroll = function() {

        _.each( paraObjs, function(paraObj) {
            var yPos = -( $(window).scrollTop() / $(paraObj).data('speed') ),
                coords = '50% ' + yPos + 'px';

            $(paraObj).css({ backgroundPosition: coords });
        });

    };

    return {
        init: init
    }

})();

