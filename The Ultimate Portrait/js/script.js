//
// $(window).on('load', function() {
//   $('.flexslider').flexslider({
//     animation: "slide"
//   });
// });

$(document).ready(function(){
  $(function () {

      $("#contact-button").click(function() {
      $(this).toggleClass("on");
      $("#contact-popup").toggleClass("active");
      });

    });

      $('.testimonials-container').slick({
        slidesToShow: 1,
        arrows: false,
        autoplay: true,
        dots: false,
        autoplaySpeed: 3000,
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
          document.getElementById("mySidenav").style.width = "17em";
          document.getElementById("responsiveMenuIconBars").style.display = "none";
        } else {
          document.getElementById("mySidenav").style.width = "100%";
          document.getElementById("responsiveMenuIconBars").style.display = "none";
          // document.getElementById("body").style.position = "fixed";
        }

        }

    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("responsiveMenuIconBars").style.display = "initial";
      // document.getElementById("body").style.position = "initial";
    }

    $(function () {

  $("#close").click(function() {
    $(this).toggleClass("on");
    $("#contact-popup").toggleClass("active");
  });

});


function goBack() {
  window.history.back();
}