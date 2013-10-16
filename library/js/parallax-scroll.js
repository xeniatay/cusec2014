/***
 * Written by: Xenia Tay
 * Parallax for hero unit
 */

var parallaxScroll = ( function() {

    var paraObjs = $('.parallax-scroll');

    var init = function() {

        initEvents();

    },

    initEvents = function() {

        $(window).scroll( onScroll );

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

