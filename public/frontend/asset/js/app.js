
// offer_items_Banner_slider

$(function(){
  var swiper = new Swiper(".mySwiper", {
    slidesPreView:"auto",
    autoplay:{
      delay:2000,
      disableOnInteraction:"false",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable:"false",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  AOS.init();



})