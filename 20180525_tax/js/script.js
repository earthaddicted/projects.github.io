/* open menu */
$(document).ready(function() {
    $('.mobile-menu-icon').on('click', function(e){
      // e.preventDefault();
      $('.nav-wrapper').toggleClass('open');
      $('header').toggleClass('full-hight');
    })
});
/* open menu END */

/* hide menu on outside click */
$(document).click(function(e) {
    if (!$(e.target).hasClass('mobile-menu-icon') &&
        $(e.target).parents('header').length === 0 &&
        $('.nav-wrapper').length > 0) {
        $('.nav-wrapper').removeClass('open');
    }
});
/* hide menu on outside click END */


/*  ___ header menu END ________________________________________________  */



/*  ___ style horizontal scroll in all browsers ________________________________________________  */
$(document).ready(function() {
    var mx = 0;

    $(".drag").on({
        mousemove: function(e) {
            var mx2 = e.pageX - this.offsetLeft;
            if (mx) this.scrollLeft = this.sx + mx - mx2;
        },
        mousedown: function(e) {
            this.sx = this.scrollLeft;
            mx = e.pageX - this.offsetLeft;
        }
    });

    $(document).on("mouseup", function() {
        mx = 0;
    })
});
/*  ___ style horizontal scroll in all browsers END ________________________________________________  */



/*  ___ FAQ GSAP  ___________________________________ */
(function() {
    $(window).on('load', function() {
        var clickableItem = $('.topic-item-q');
        var hiddenContent = $('.topic-item-a');

        clickableItem.click(function() {
            $(this).parent().toggleClass("active");
            $(this).parent().toggleClass("visible");
        });
    });
})();


(function($) {

  var tabs =  $(".categories-block__item a");
  
  tabs.click(function() {
    var content = this.hash.replace('/','');
    tabs.removeClass("active");
    $(this).addClass("active");
    $(".section-wrapper__accordion").find('.faq-block__wrapper').hide();
    $(content).fadeIn(200);
  });

})(jQuery);
/*  ___ FAQ GSAP END ___________________________________ */