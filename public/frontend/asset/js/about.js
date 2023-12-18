 
//* SLICK SLIDER
  $(function(){
    $('.slider').slick({
        slidesToShow: 2,
        Infinity: true,
        arrows: false,
        dots: true,
        dotsClass: "AboucustomDots",
        autoplay: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
    });

    //! AOS ANIMTION
    AOS.init();

    //*Typing ANimation
    new TypeIt(".aboutHeading", {
      speed: 30,
    }).go();
   
    new TypeIt(".teamHeading", {
      speed: 20,
    }).go();
  })