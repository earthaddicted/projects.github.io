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
        // $('header').removeClass('full-hight');
    }
});
/* hide menu on outside click END */


/*  ___ header menu END ________________________________________________  */