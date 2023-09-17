 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  // fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});


if (window.innerWidth > 1300) {
 $(window).scroll(function(e){
    var header1 = $('#mainNav');
    var header2 = $('#mainNav2');
    var scroll = $(window).scrollTop();

    if (scroll >= 1){
        header1.fadeOut();
        header2.fadeIn();
        header2.addClass('navbar-shrink');

    } 
    else{
        header2.removeClass('navbar-shrink');
        header1.fadeIn();
        header2.fadeOut();
    }

    if (scroll < 2){
        if ($(".closee").hasClass("d-none")) {

        }else{
            $(".content_items").animate({width:"0%"},200);
            $(".menu_left").animate({width:"0%"},200);  
            $(".ulitemsleft").animate({opacity:"0"}, 200); 
            $(".closee").toggleClass("d-none");
        }
    }
});

}else{
    var header1 = $('#mainNav');
    var header2 = $('#mainNav2');
    header1.fadeOut();
    header2.fadeIn();
}

$(".openmenu").click(function(){
    $(".ulitemsleft").animate({opacity:"1"}, 200); 
    $(".menu_left").animate({width:"450px"}, 200).find(".content_items").animate({width:"100%"}, 200);   
    $(".closee").removeClass("d-none");

});

$(".closee").click(function(){
    $(".closee").toggleClass("d-none");
    $(".ulitemsleft").animate({opacity:"0"}, 200); 
    $(".content_items").animate({width:"0%"},200);
    $(".menu_left").animate({width:"0%"},200);      
});


// window.addEventListener('DOMContentLoaded', event => {

//     // Navbar shrink function
//     var navbarShrink = function () {
//         const navbarCollapsibleuno = document.body.querySelector('#mainNav');
//         const navbarCollapsibledos = document.body.querySelector('#mainNav2');

//         if (!navbarCollapsibleuno) {
//             return;
//         }
//         if (window.scrollY === 0) {
//             navbarCollapsibledos.classList.remove('navbar-shrink');
//             navbarCollapsibledos.classList.add('fadeout');
//             navbarCollapsibleuno.classList.remove('fadeout');


//         } else {
//             navbarCollapsibledos.classList.add('navbar-shrink');
//             navbarCollapsibledos.classList.remove('fadeout');
//             navbarCollapsibleuno.classList.add('fadeout');

//         }

//     };

//     // Shrink the navbar 
//     navbarShrink();

//     // Shrink the navbar when page is scrolled
//     document.addEventListener('scroll', navbarShrink);

//     // Activate Bootstrap scrollspy on the main nav element
//     const mainNav = document.body.querySelector('#mainNav');
//     if (mainNav) {
//         new bootstrap.ScrollSpy(document.body, {
//             target: '#mainNav',
//             rootMargin: '0px 0px -40%',
//         });
//     };

//     // Collapse responsive navbar when toggler is visible
//     const navbarToggler = document.body.querySelector('.navbar-toggler');
//     const responsiveNavItems = [].slice.call(
//         document.querySelectorAll('#navbarResponsive .nav-link')
//     );
//     responsiveNavItems.map(function (responsiveNavItem) {
//         responsiveNavItem.addEventListener('click', () => {
//             if (window.getComputedStyle(navbarToggler).display !== 'none') {
//                 navbarToggler.click();
//             }
//         });
//     });

// });
