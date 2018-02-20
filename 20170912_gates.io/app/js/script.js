$(document).ready(function() { 


	$('.article-wrapper__slider').slick({
		infinite: true,
		dots: false,
		arrows: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
  		autoplaySpeed: 2000,
		responsive: [
	    	{
	      		breakpoint: 1000,
	      		
		      	settings: {
		        autoplaySpeed: 2000,
		        arrows: true
		      	}
		    },
		    {
		  		breakpoint: 490,
		      	settings: {
		      		arrows: false
		    	} 
			}
		] 
	});



/* slick-slider END */
});



$(document).ready(function() {
	var menuIcon = $('.menu-hamburger');
	var header = $('header');
	var burger = $('.mobile-menu-icon');
	var menuAncor = $('.header__nav a');

		burger.click(function() {
		    menuIcon.toggleClass('open');
		    header.toggleClass('open');
		});

		menuAncor.click(function() {
		    header.toggleClass('open');
		    menuIcon.toggleClass('open');
		});


});

$(".scroll_btn").mPageScroll2id();