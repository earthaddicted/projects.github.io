 /* ___ header menu  ________________________________________________  */

/* Scroll HEADER */
/*  ___ HEADER CHANGE CLASS ACCORDING TO SECTION COLOR ________________________________________________  */
(function() {
    var sections = document.querySelectorAll('section.section');
    var sectionsParameters = [];
    var c;
    var headerClass = null;
    var logoClass = null;
    var availableCns = ['dark', 'light'];

    for (var i = 0, l = sections.length; i < l; i++) {
        c =  null;
        if($(sections[i]).hasClass('dark')){
            c = 'dark';
        }else if($(sections[i]).hasClass('light')){
            c = 'light';
        }
        sectionsParameters.push({
            'container': sections[i],
            'offset': sections[i].offsetTop,
            'cn': c
        });
    }

    var setHeaderBgClass = function(n) {
        if (headerClass !== null) {
            $('header').removeClass(headerClass + '-bg');
            $('header').removeClass('bg-cover-'+ headerClass);
        }
        headerClass = n;
        if(n !== null){
            $('header').addClass(headerClass + '-bg');
            if( window.scrollY){
                $('header').addClass('bg-cover-'+ headerClass);
            }
        }
    };
     var setLogoClass = function(n) {
        if (logoClass !== null) {
            $('.fixed-logo').removeClass(logoClass + '-fixed-logo');
        }
        logoClass = n;
        if(n !== null){
            $('.fixed-logo').addClass(logoClass + '-fixed-logo');
        }
    };
    var getCurrentSection = function(extra_offset) {
        var p = window.scrollY;
        if(typeof extra_offset == 'undefined'){
            extra_offset = 0;
        }
        //console.log('offset: '+extra_offset, 'scroll: '+p);

        var current = null;
        var a;
        if(sectionsParameters.length && sectionsParameters[0].container.offsetTop==0){
            current = sectionsParameters[0];
        }
        for (var i = 0, l = sectionsParameters.length; i < l; i++) {
            a = sectionsParameters[i].container.offsetTop + extra_offset;
            
            if (p <= a) {
                return current;
            }
            current = sectionsParameters[i];
        }
        return current;
    }
    var updateBg = function(){
        var c = getCurrentSection();
        if (c) {
            setHeaderBgClass(c.cn);
        }else{
            setHeaderBgClass(null);
        }        
    }
    var updateLogo = function(extra_offset){
        var c = getCurrentSection(extra_offset);
        if (c) {
            setLogoClass(c.cn);
        }else{
            setLogoClass(null);
        }        
    }
    $(document).scroll(function() {
        updateBg();
        //updateLogo((-1)*window.innerHeight/2);
    });
    updateBg();
    //updateLogo((-1)*window.innerHeight/2);
})();
/*  ___ HEADER CHANGE CLASS ACCORDING TO SECTION COLOR END ________________________________________________  */


/*  ___ LOGO CHANGE CLASS ACCORDING TO SECTION COLOR ________________________________________________  */
 var logo = document.querySelectorAll('section.section');


/*  ___ LOGO CHANGE CLASS ACCORDING TO SECTION COLOR END ________________________________________________  */



/* Scroll HEADER */
/* open menu */
$(document).ready(function() {
    $('.mobile-menu-icon').on('click', function(e){
      // e.preventDefault();
      $('.nav-wrapper').toggleClass('open');
      $('header').toggleClass('full-hight');
      $('body').toggleClass('no-scroll');
    })
});
/* open menu END */

/* hide menu on outside click */
$(document).click(function(e) {
    if (!$(e.target).hasClass("mobile-menu-icon") &&
        $(e.target).parents("header").length === 0 &&
        $('.nav-wrapper').length > 0) {
        $(".nav-wrapper").removeClass('open');
        $('header').removeClass('full-hight');
        $('body').removeClass('no-scroll');
    }
});
/* hide menu on outside click END */


/*  ___ header menu END ________________________________________________  */



/*  ___ footer ________________________________________________  */
(function() {
        if ($('footer .lang-wrapper').length) {
            $('footer  .lang-wrapper').click(function() {
            $('footer .lang a').toggleClass('visible');
        });
    }

        if ($('header .lang-wrapper').length) {
            $('header  .lang-wrapper').click(function() {
            $('header .lang a').toggleClass('visible');
        });
    }

    $(document).click(function(e) {
        if (!$(e.target).hasClass("lang") &&
            $(e.target).parents(".lang-wrapper").length === 0 &&
            $('footer').length > 0) {
            $(".lang a").removeClass('visible');
        }
    });
})();

/*  ___ footer END ________________________________________________  */



/*  ___ SVG GANGE COLOR ON HOVER ________________________________________________  */
/* ===== for svg change color on hover =====  */
$(function() {
    jQuery('img.svg').each(function() {
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if (typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if (typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass + ' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Check if the viewport is set, else we gonna set it if we can.
            if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
            }

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');
    });
});
/*  ___ SVG GANGE COLOR ON HOVER END ________________________________________________  */



/*  ___ CON CLICK CHANGE ITEMS BLOCK CONTENT  ________________________________________________  */
    // $(".page-structure .small-block__top").click(function() {
    //     $(this).toggleClass("clicked");
    // });

    /* hide menu on outside click */
// $(document).click(function(e) {
//     if (!$(e.target).hasClass("small-block__top") &&
//         $(e.target).parents(".page-structure .small-block__item").length === 0 &&
//         $('.small-block__top').length > 0) {
//         $(".small-block__top").removeClass('clicked');
//     }
// });
/* hide menu on outside click END */

/*  ___ CON CLICK CHANGE ITEMS BLOCK CONTENT END ________________________________________________  */


/*  ___ ACCORDION ________________________________________________  */

(function() {
    function setClass(els, className, fnName) {
        for (var i = 0; i < els.length; i++) {
            els[i].classList[fnName](className);
        }
    }

    var acc = document.getElementsByClassName("topic-item");

    for (var i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
            var setClasses = !this.classList.contains('active');
            setClass(acc, 'active', 'remove')

            if (setClasses) {
                this.classList.toggle("active");
            }
        }
    }
})();
/*  ___ ACCORDION  END ________________________________________________  */



/*  ___ 404 PAGE ________________________________________________  */
(function() {
    if ($('.page-404').length > 0 ) {
        $('.fixed-logo').hide();
    }

})();
/*  ___ 404 PAGE  END ________________________________________________  */



/*  ___ COOKIES ________________________________________________  */

(function() {
    if ($('.notice').length > 0 ) {
        $('.notice .decor-btn__dark .decor-border').on('click', function(e){
            $('.notice').slideToggle();
        })
    }

})();

/*  ___ COOKIES  END ________________________________________________  */