$(function(){
     var navMain = $(".navbar-collapse");

     navMain.on("click", "a", null, function () {
        navMain.collapse('hide');
    });
 });

$(document).on('click', 'header .menu-wrapper ul a', function(event) {
    // event.preventDefault();
    $("header .mobile-menu-icon").click();
});

$(document).ready(function() {
    var menuIcon = $('.menu-hamburger');
    var header = $('header');
    var headerMenu = $('.menu-wrapper');
    var burger = $('.mobile-menu-icon');
    var menuAncor = $('.header__nav a');

    burger.click(function() {
        menuIcon.toggleClass('open');
        headerMenu.toggleClass('open');
        header.toggleClass('fixed');
    });

});