/***
 * Written by: Xenia Tay
 * Resizes hero unit to fill viewport
 */

var resizeHeroUnit = (function() {

    var MIN_HEIGHT = 500,
        MOBILE = 720;

    var heroUnit = $('#herounit');

    var init = function() {

        calcHeight();
        initEvents();
    },

    initEvents = function() {

        $(window).resize( _.debounce( calcHeight, 300 ) );

    },

    /***
     * Gets height of elements that should be visible with the herounit
     */
    getOffsetHeight = function() {
        var elems = {
                header: '#header'
                //, content: '#main-content',
                //footer: '#footer'
            },
            offsetHeight = 0;

        _.each(elems, function(elem) {
            if ($(elem).css('display') !== 'none') {
                offsetHeight += $(elem).outerHeight();
            }
        });

        return offsetHeight;

    },

    calcHeight = function() {

        if ($(window).width() < MOBILE) {
            $(heroUnit).css( 'height', 'auto');
            $(heroUnit).css( 'backgroundPosition', 'left top');
        } else {
            var docHeight = $(document).height(),
                winHeight = $(window).height(),
                offsetHeight = getOffsetHeight(),
                huHeight = $(heroUnit).outerHeight();

            if ( (huHeight + offsetHeight) <= winHeight) {
                setHeight(winHeight, huHeight, offsetHeight);
            }

        }

    },

    setHeight = function(winHeight, huHeight, offsetHeight) {

        huHeight = winHeight - (offsetHeight);
        $(heroUnit).css( 'height', (MIN_HEIGHT < huHeight) ? huHeight : MIN_HEIGHT );

    };

    return {
        init: init
    }

})();

