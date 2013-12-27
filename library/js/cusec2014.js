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

    /* Resume Upload Form */
    $('#res-upload-checkall input').checkAll('#res-upload-companies input');
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

/**
 * From: https://coderwall.com/p/zvmpcq
 * Un/Select multiple checkboxes using one checkbox
 * <a href="/param">@param</a>  {jQuery selector} $list List of checkboxes
 * @return {object}
 */
$.fn.checkAll = function(list) {

    return this.on('click', function() {
        $(list).prop('checked', $(this).prop('checked'));
    });

}
