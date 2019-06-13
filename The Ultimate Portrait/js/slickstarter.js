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