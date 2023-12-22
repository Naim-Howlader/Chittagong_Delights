<!-- jQuery -->
<script src="{{asset('frontend/asset/vendor/js/jquery-3.7.1.min.js')}}"></script>
<!-- bootsrap -->
<script src="{{asset('frontend/asset/vendor/js/bootstrap.bundle.min.js')}}"></script>
<!-- iconify -->
<script src="{{asset('frontend/asset/vendor/js/iconify-icon.min.js')}}"></script>
<!-- slickslider -->
<script src="{{asset('frontend/asset/vendor/js/slick.min.js')}}"></script>
 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- aoc -->
<script src="{{asset('frontend/asset/vendor/js/aos.js')}}"></script>
<!-- venobox -->
<script src="{{asset('frontend/asset/vendor/js/venobox.min.js')}}"></script>
<!-- java script -->
<script src="{{asset('frontend/asset/js/index.js')}}"></script>

<!-- Jquery  -->
<script src="{{asset('frontend/asset/vendor/js/jquery-3.7.1.min.js')}}"></script>
<!-- AOS Amimate -->
<script src="{{asset('frontend/asset/vendor/js/aos.js')}}"></script>
<!-- BOOTSTRAP -->
<script src="{{asset('frontend/asset/vendor/js/bootstrap.bundle.min.js')}}"></script>
<!-- SLIK JS -->
<script src="{{asset('frontend/asset/vendor/js/slick.min.js')}}"></script>
<!-- Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- ICONIFY -->
<script src="{{asset('frontend/asset/vendor/js/iconify.min.js')}}"></script>
<!-- MAIN JS -->
<script src="{{asset('frontend/asset/js/app.js')}}"></script>
<!-- <script src="./asset/js/items.js')}}"></script> -->

<script>
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
</script>
</body>
</html>
