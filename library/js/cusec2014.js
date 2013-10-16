/***
 * Written by: Xenia Tay
 * JS calls for CUSEC2014 site
 */

jQuery(document).ready(function($) {

    resizeHeroUnit.init();
    parallaxScroll.init();
    svg.checkCompatibility();

});

/***
 * check if browser is svg compatible
 */
var svg = (function() {

    var checkCompatibility = function() {
        if (!Modernizr.svg) {
            swapLogo();
        }
    },

    swapLogo = function() {
        $(".cusec-logo.svg").attr("src", root_dir + "/library/images/cusec-logo-wide.png");
    };

    return {
        checkCompatibility: checkCompatibility
    }

})();
