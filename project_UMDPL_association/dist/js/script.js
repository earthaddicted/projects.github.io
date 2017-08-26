
$(document).ready(function() { 

	/* main page lectors slider */
	$('.lectors-slider').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
	    	{
	      		breakpoint: 968,
		      	settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1
		      	}
		    },
			{
		  		breakpoint: 730,
		      	settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		    	} 
			},

			{
		  		breakpoint: 460,
		      	settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		    	} 
			}

		]
	});
	/* main page lectors slider END */


	/* smooth scroll */
	$(".scroll_btn").mPageScroll2id();


	/* single lection page slider */
	$('.lection-slider').slick({
		centerMode: true,
		centerPadding: '100px',
		slidesToShow: 1,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 1
				}
			},

			{
				breakpoint: 480,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 1
				}
			}
		]
	});

	/* single lection page slider END */

});


/* mobile menu settings */
$(document).ready(function() {
	var menuIcon = $('.menu-hamburger');
	var header = $('.header-navigation');
	var burger = $('.mobile-menu-icon');
	var menuAncor = $('.header-navigation a');

		burger.click(function() {
		    menuIcon.toggleClass('open');
		    header.toggleClass('open');
		});

		menuAncor.click(function() {
		    header.toggleClass('open');
		    menuIcon.toggleClass('open');
		});
});