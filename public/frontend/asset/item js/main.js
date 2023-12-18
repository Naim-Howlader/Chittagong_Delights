
// offer_items_Banner_slider

$(function(){
    $(".slider").slick({
        arrows: false,
        dots:true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dotsClass: 'customDots',
        
        responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                dots:false,
                slidesToShow: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                dots:false,
                slidesToShow: 1
              }
            }
          ]
    });

    AOS.init();

    $(window).ready( function(){
      $('.preloader').fadeOut(3000)
  })
  
})