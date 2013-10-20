/***
 * Written by: Xenia Tay
 * JS calls for CUSEC2014 site
 */

jQuery(document).ready(function($) {
    var MOBILE = 720;

    resizeHeroUnit.init();
    parallaxScroll.init();

    svg.checkCompatibility();
    smoothScroll();

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


var smoothScroll = (function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        || location.hostname == this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});