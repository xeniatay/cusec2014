/***
 * Written by: Xenia Tay
 * Resizes hero unit to fill viewport
 */

var resizeHeroUnit = (function() {

    var MIN_HEIGHT = 500;

    var heroUnit = $('#herounit'),
        huHeight = $(heroUnit).outerHeight();

    var init = function() {

        var docHeight = $(document).height(),
            winHeight = $(window).height(),
            offsetHeight = getOffsetHeight();

        if ( (huHeight + offsetHeight) <= winHeight) {
            setHeight(offsetHeight);
        }

        initEvents();

    },

    initEvents = function() {

        $(window).resize( _.debounce( onResize, 300 ) );

    },

    onResize = function() {

        var docHeight = $(document).height(),
            winHeight = $(window).height(),
            offsetHeight = getOffsetHeight();

        if ( (huHeight) != winHeight) {
            setHeight(offsetHeight);
        }
    },

    /***
     * Gets height of elements that should be visible with the herounit
     */
    getOffsetHeight = function() {
        var elems = {
                header: '#header',
                content: '#main-content',
                footer: '#footer'
            },
            offsetHeight = 0;

        _.each(elems, function(elem) {
            if ($(elem).css('display') !== 'none') {
                offsetHeight += $(elem).outerHeight();
            }
        });

        return offsetHeight;

    },

    setHeight = function(offsetHeight) {

        var winHeight = $(window).height();

        huHeight = winHeight - (offsetHeight);
        $(heroUnit).css( 'height', (MIN_HEIGHT < huHeight) ? huHeight : MIN_HEIGHT );

    };

    return {
        init: init
    }
})();

