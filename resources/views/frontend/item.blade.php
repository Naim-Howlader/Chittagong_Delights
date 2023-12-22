<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants</title>
    <link rel="shortcut icon" href="{{asset('frontend/asset/images/Logo Img/faicon_icon.png')}}" type="image/x-icon">
    <!-- AOS Animate -->
    <link rel="stylesheet" href="{{asset('frontend/asset/vendor/css/aos.css')}}">
    <!-- Swiper slider cdn -->
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- SLICK -->
    <link rel="stylesheet" href="{{asset('frontend/asset/vendor/css/slick.min.css')}}">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{asset('frontend/asset/vendor/css/bootstrap.min.css')}}">
    <!-- BOOTSTRAP ICON CND -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- FONTS AWSOME -->
    <link rel="stylesheet" href="{{asset('frontend/asset/vendor/css/fonts.all.min.css')}}">
    <!-- COMMON CSS -->
    <link rel="stylesheet" href="{{asset('frontend/asset/css/common.css')}}">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{asset('frontend/asset/css/style.css')}}">
    <!-- RESPONSIVE -->
    <link rel="stylesheet" href="{{asset('frontend/asset/css/responsive.css')}}">


</head>
<body style="background-color:var(--FourColor);">

    <!-- Header Section Starts -->
    <header id="Header">
        <div class="container">
            <div class="row">
                <div class="headerCnt col-9 col-lg-6">
                  <div class="row">
                    <div class="hours col-6 col-lg-3">
                      <span><i class="bi bi-stopwatch-fill"></i>7.30 AM - 9.30 PM </span>
                  </div>
                  <div class="headerCnt1 col-6 col-lg-3">
                      <span><i class="bi bi-telephone-fill"></i><a href="tel:+880 1630 225 015">+880 1630 225 015</a></span>
                  </div>
                  </div>
                </div>
                <div class="headerCnt2 col-3 col-lg-6">
                    <a href="./register.html"><button>REGISTER</button></a>
                </div>
            </div>
        </div>
    </header>
<!-- Header Section Ends -->
<!-- NavBar Section Starts -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="./items.html"><img src="{{asset('frontend/asset/images/Logo Img/logo.png')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span><img src="{{asset('frontend/asset/images/Nav Menu/more.png')}}" alt=""></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.html">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./about_us.html">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">ITEMS</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">PAGES</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./Contract.html">CONTACT</a>
        </li>

      </ul>
      <div class="DeliveryIcon"><a href="./wishlist.html"><i class="bi bi-cart3"></i><span>2</span></a></div>
      <div class="DeliveryCnt">
          <h1>Delivery Order</h1>
          <span class="NumberCnt"><p><a href="tel:+880 1630 225 015">+880 1630 225 015</a></p></span>
      </div>
      <div class="DeliveryImg">
          <img src="./asset/images/Logo Img/Delivery.png" alt="">
      </div>
      <a href="./login.html" class="Btn"><button>LOGIN</button></a>

    </div>
  </div>
</nav>
<!-- NavBar Section Ends -->

<!-- items Banner Section Starts -->
<section id="ItemsBanner">
  <div class="container">
     <h1>ITEMS</h1>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna.</p>
  </div>
</section>
<!-- items Banner Section Ends -->

<!-- Items Product Section Starts -->
<section id="ItemsProduct">
  <div class="container">
      <h1>It’s the food and groceries you Love, delivered</h1>
      <!-- SEARCH BAR -->
     <div class="searchBar">
      <form class="FORM" >
        <input class="form_control" placeholder="Search your Items">
        <button class="Btn" type="submit">Go</button>
      </form>
     </div>
      <!-- SEARCH BAR ENDS -->
  <div class="row">
    <!-- left Card -->
    <div class="productCnt1 col-lg-6">
         <!-- card1 -->
      @foreach ($foods5 as $item)
      <div class="productcard" data-aos="fade-up" data-aos-duration="1500" >
        <div class="row">
          <div class="cardCnt1 col-7 col-lg-8">
            <a href="{{asset('frontend/items_details1.html')}}">
              <h2>{{$item->name}}</h2>
            <p>{{$item->short_description}}</p>
            <h4>From TK {{$item->price}}</h4>
            </a>
          </div>
          <div class="cardCnt2 col-5 col-lg-4 ">
            <a href="./items_details1.html"><img src="{{asset($item->image1)}}" alt=""></a>
          </div>
        </div>
      </div>
      @endforeach


    </div>

    <!-- right card -->
    <div class="productCnt2 col-lg-6">
      <img src="{{asset('frontend/asset/images/Items_images/image_itemsList_ooffer.jpg')}}" alt=""  data-aos="fade-up" data-aos-duration="1500">

      @foreach ($foods2 as $item)
      <div class="productcard" data-aos="fade-up" data-aos-duration="1500" >
        <div class="row">
          <div class="cardCnt1 col-7 col-lg-8">
            <a href="{{asset('frontend/items_details1.html')}}">
              <h2>{{$item->name}}</h2>
            <p>{{$item->short_description}}</p>
            <h4>From TK {{$item->price}}</h4>
            </a>
          </div>
          <div class="cardCnt2 col-5 col-lg-4 ">
            <a href="./items_details1.html"><img src="{{asset($item->image1)}}" alt=""></a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>

     <!-- itemsList_ooffer -->
     <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="{{asset('frontend/asset/images/Items_images/image_itemsList_ooffer_2.jpg')}}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{asset('frontend/asset/images/Items_images/image_itemsList_ooffer_3.jpg')}}" alt="">
      </div>
      <div class="swiper-slide">
        <img src="{{asset('frontend/asset/images/Items_images/image_itemsList_ooffer_4.jpg')}}" alt="">
      </div>
    </div>
    <!-- <div class="swiper-button-next"></div> -->
    <!-- <div class="swiper-button-prev"></div> -->
    <div class="swiper-pagination"></div>
  </div>

      <!-- itemsList_ooffer -->
   <!-- card section two -->
   <div class="row">
    <!-- left card  -->
    <div class="productCnt1 col-lg-6">
        @foreach ($foods as $item)
      <div class="productcard" data-aos="fade-up" data-aos-duration="1500" >
        <div class="row">
          <div class="cardCnt1 col-7 col-lg-8">
            <a href="{{asset('frontend/items_details1.html')}}">
              <h2>{{$item->name}}</h2>
            <p>{{$item->short_description}}</p>
            <h4>From TK {{$item->price}}</h4>
            </a>
          </div>
          <div class="cardCnt2 col-5 col-lg-4 ">
            <a href="./items_details1.html"><img src="{{asset($item->image1)}}" alt=""></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>

</div>
</section>
<!-- Items product Section Ends -->


<!-- footer section starts -->
<footer id="contactus">
  <h2>Our Branch</h2>
  <div class="footer_cnt">
    <div class="container">
      <div class="row">
        <!-- Branch 1 -->
        <div class="contactinfo col-4 col-lg-4">
             <h1>Robert Food</h1>
             <h4>1986 Hilltop DriveBorger, TX 79007</h4>
            <div class="contactCnt">
              <div class="row">
                <div class="hours_text col-12 col-lg-5">
                  <span><i class="bi bi-stopwatch-fill"></i> 7.30 AM - 9.30 PM </span>
                </div>
                <div class="contact_text col-12 col-lg-5">
                  <span><i class="bi bi-telephone-fill"></i><a href="tel:+880 1630 225 015"> +880 1630 225 015</a></span>
                </div>
               </div>
            </div>
            <div class="maps_cnt">
              <a href="./Contract.html">Click to View Google Map</a>
            </div>
        </div>

         <!-- Branch 2 -->
        <div class="contactinfo col-4 col-lg-4">
          <h1>Mark A. Reed Food</h1>
          <h4>4877 Rose AvenueNew Orleans, LA 70112</h4>
         <div class="contactCnt">
           <div class="row">
             <div class="hours_text col-12 col-lg-5">
               <span><i class="bi bi-stopwatch-fill"></i> 7.30 AM - 9.30 PM </span>
             </div>
             <div class="contact_text col-12 col-lg-5">
               <span><i class="bi bi-telephone-fill"></i><a href="tel:+880 1630 225 015"> +880 1630 225 015</a></span>
             </div>
            </div>
         </div>
         <div class="maps_cnt">
           <a href="./Contract.html">Click to View Google Map</a>
         </div>
     </div>
     <!-- Branch 3 -->
     <div class="contactinfo col-4 col-lg-4">
      <h1>Karie K. Hill Food</h1>
      <h4>1509 Peaceful LaneCleveland, OH 44115</h4>
     <div class="contactCnt">
       <div class="row">
         <div class="hours_text col-12 col-lg-5">
           <span><i class="bi bi-stopwatch-fill"></i> 7.30 AM - 9.30 PM </span>
         </div>
         <div class="contact_text col-12 col-lg-5">
           <span><i class="bi bi-telephone-fill"></i><a href="tel:+880 1630 225 015"> +880 1630 225 015</a></span>
         </div>
        </div>
     </div>
     <div class="maps_cnt">
       <a href="./Contract.html">Click to View Google Map</a>
     </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer section ends -->

<!-- UnderFooter section starts -->
<section id="underFooter">
  <h5>Copyright © | 2023</h5>
</section>
<!-- UnderFooter section Ends  -->




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
      // var swiper = new Swiper(".mySwiper", {
      //   slidesPreView:"auto",
      //   autoplay:{
      //     delay:2000,
      //     disableOnInteraction:"false",
      //   },
      //   pagination: {
      //     el: ".swiper-pagination",
      //     // type: "progressbar",
      //     clickable:"false",
      //   },
      //   navigation: {
      //     nextEl: ".swiper-button-next",
      //     prevEl: ".swiper-button-prev",
      //   },
      // });
    </script>
</body>

</html>
