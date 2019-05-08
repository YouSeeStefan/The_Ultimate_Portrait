//
// $(window).on('load', function() {
//   $('.flexslider').flexslider({
//     animation: "slide"
//   });
// });

$(document).ready(function(){
      $('.testimonials-container').slick({
        slidesToShow: 1,
        arrows: false,
        autoplay: true,
        dots: true,
        autoplaySpeed: 4000,
        responsive: [
        {
          breakpoint: 1250,
          settings: {
            slidesToShow: 1,
            arrows: false,

          }
        },
        {
          breakpoint: 700,
          settings: {
            dots: true,
            slidesToShow: 1,
            arrows: false,
          }
        }
        ]
      });
    });
