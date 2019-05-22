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
        dots: false,
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
            slidesToShow: 1,
            arrows: false,
          }
        }
        ]
      });
    });

    
    
    function openNav() {
      if (matchMedia) {
        const mq = window.matchMedia("(min-width: 700px)");
        
        mq.addListener(WidthChange);
        WidthChange(mq);
        }
        
        
        function WidthChange(mq) {
        if (mq.matches) {
          document.getElementById("mySidenav").style.width = "250px";
        } else {
          document.getElementById("mySidenav").style.width = "100%";
        }
        
        }
      
    }
    
    /* Set the width of the side navigation to 0 */
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }