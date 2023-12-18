$(function(){
  $(".slider").slick({
    slidesToShow:1,
    slidesToScroll:1,
    dots:true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    dotsClass: "customDots",
  });



  $('.testimonialSlider').slick({
    centerMode: true,
    centerPadding: '0',
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots:true,
    arrows: false,
    autoplay: false,
    dotsClass: "customDot",
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          // centerPadding: '40px',
          slidesToShow: 1,
        }
      },
      {
        breakpoint: 320,
        settings: {
          arrows: false,
          centerMode: true,
          // centerPadding: '40px',
          slidesToShow: 1,
        }
      }
    ]
  });


// biggoffer slider




// acos
  AOS.init();
  // venobox
  new VenoBox({
    selector: '.gellary',
    numeration: true,
    infinigall: true,
    share: true,
    spinner: 'plane'
});
//   new VenoBox({
//     selector: '.gel',
//     numeration: true,
//     infinigall: true,
//     share: true,
//     spinner: 'rotating-plane',
//     autoplay:true,
// });
})