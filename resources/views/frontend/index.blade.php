<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FOOD</title>
  <link rel="shortcut icon" href="./images/home/faicon_icon.png" type="image/x-icon">
  <!-- fontawesome -->
  <link rel="stylesheet" href="{{asset('frontend/asset/vendor/css/all.min.css')}}">
  <!-- slikslider -->
  <link rel="stylesheet" href="{{asset('frontend/asset/vendor/css/slick.css')}}">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- bootsrap icon cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <!-- bootsrap -->
  <link rel="stylesheet" href="{{asset('frontend/asset/vendor/css/bootstrap.min.css')}}">
  <!-- aoc -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- <link rel="stylesheet" href="./assets/vendor/css/aos.css"> -->
  <!-- venobox -->
  <link rel="stylesheet" href="{{asset('frontend/asset/vendor/css/venobox.min.css')}}">
  <!-- common CSS -->
  <link rel="stylesheet" href="{{asset('frontend/asset/css/common/common.css')}}">
  <!-- my style  CSS-->
  <link rel="stylesheet" href="{{asset('frontend/asset/css/style/style.css')}}">
  <!-- responsive CSS -->
  <link rel="stylesheet" href="{{asset('frontend/asset/css/responsive/responsive.css')}}">

</head>
<body>


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
<nav class="navbar navbar-expand-lg" style="background-color: var(--FourColor);">
<div class="container">
  <a class="navbar-brand" href="./index.html"><img src="{{asset('frontend/asset/images/Logo Img/logo.png')}}" alt=""></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span><img src="./asset/images/Nav Menu/more.png" alt=""></span>
  </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./about_us.html">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./items.html">ITEMS</a>
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
        <img src="{{asset('frontend/asset/images/Logo Img/Delivery.png')}}" alt="">
  </div>
    <a href="./login.html" class="Btn"><button>LOGIN</button></a>

</div>
</div>
</nav>
<!-- NavBar Section Ends -->
<!-- main -->
<main>
  <!-- banner secton starts -->
<section id="banner">
  <div class="container">

    <div class="slider">

      <div class="slide">
          <div class="row">
            <div class="bannerCont col-6">
                <h4>Best In Town</h4>
                <h1>ENJOY OUR CHICKEN <span>PIZZA</span> FAST FOOD</h1>
                <button class="bTn">Order Now</button>
                <span class="bannerPricees">Price : $10.50</span>
                <ul>
                 <li><a href="#"><iconify-icon icon="mdi:twitter"></iconify-icon></a></li>
                 <li><a href="#"><iconify-icon icon="uil:facebook"></iconify-icon></li>
                 <li><a href="#"><iconify-icon icon="ri:instagram-line"></iconify-icon></a></li>
                 <li><a href="#"><iconify-icon icon="ri:linkedin-fill"></iconify-icon></a></li>
                </ul>
            </div>
            <div class="bannerImg col-6">
            <div class="bannerImges justify-content-start ">
                <img src="{{asset('frontend/asset/images/banner/banner_1.png')}}" alt="">
            </div>
          </div>
          </div>
      </div>

      <div class="slide">
        <div class="row">
          <div class="bannerCont col-6 ">
              <h4>Best In Town</h4>
              <h1>ENJOY OUR CHICKEN <span>PIZZA</span> FAST FOOD</h1>
              <button class="bTn">Order Now</button>
              <span class="bannerPricees">Price : $10.50</span>
              <ul>
               <li><a href="#"><iconify-icon icon="mdi:twitter"></iconify-icon></a></li>
               <li><a href="#"><iconify-icon icon="uil:facebook"></iconify-icon></li>
               <li><a href="#"><iconify-icon icon="ri:instagram-line"></iconify-icon></a></li>
               <li><a href="#"><iconify-icon icon="ri:linkedin-fill"></iconify-icon></a></li>
              </ul>
          </div>
          <div class="bannerImg col-6 ">
          <div class="bannerImges justify-content-start ">
              <img src="{{asset('frontend/asset/images/banner/banner_1.png')}}" alt="">
          </div>
        </div>
        </div>
    </div>

    <div class="slide">
      <div class="row">
        <div class="bannerCont col-6 ">
            <h4>Best In Town</h4>
            <h1>ENJOY OUR CHICKEN <span>PIZZA</span> FAST FOOD</h1>
            <button class="bTn">Order Now</button>
            <span class="bannerPricees">Price : $10.50</span>
            <ul>
             <li><a href="#"><iconify-icon icon="mdi:twitter"></iconify-icon></a></li>
             <li><a href="#"><iconify-icon icon="uil:facebook"></iconify-icon></li>
             <li><a href="#"><iconify-icon icon="ri:instagram-line"></iconify-icon></a></li>
             <li><a href="#"><iconify-icon icon="ri:linkedin-fill"></iconify-icon></a></li>
            </ul>
        </div>
        <div class="bannerImg col-6 ">
        <div class="bannerImges justify-content-start ">
            <img src="{{asset('frontend/asset/images/banner/banner_1.png')}}" alt="">
        </div>
      </div>
      </div>
  </div>

  <div class="slide">
    <div class="row">
      <div class="bannerCont col-6 ">
          <h4>Best In Town</h4>
          <h1>ENJOY OUR CHICKEN <span>BURGER</span> FAST FOOD</h1>
          <button class="bTn">Order Now</button>
          <span class="bannerPricees">Price : $10.50</span>
          <ul>
           <li><a href="#"><iconify-icon icon="mdi:twitter"></iconify-icon></a></li>
           <li><a href="#"><iconify-icon icon="uil:facebook"></iconify-icon></li>
           <li><a href="#"><iconify-icon icon="ri:instagram-line"></iconify-icon></a></li>
           <li><a href="#"><iconify-icon icon="ri:linkedin-fill"></iconify-icon></a></li>
          </ul>
      </div>
      <div class="bannerImg col-6 ">
      <div class="bannerImges justify-content-start ">
          <img src="{{asset('frontend/asset/images/banner/banner_1.png')}}" alt="">
      </div>
    </div>
    </div>
</div>
    </div
  </div>
  </section>
  <!-- banner secton ends -->

  <!-- popular ssecton starts -->
<section id="popular"  data-aos="fade-down"
data-aos-easing="linear"
data-aos-duration="1500">
  <div class="container">
      <h5>Food Items</h5>
      <h2>Popular Dishes</h2>
    <div class="row mx-0">
      <div class="popularCont col-lg-2 col-5 col-md-4"  data-aos="fade-right" data-aos-duration="1000">
        <div class="popularContImg">
            <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="popular" href="./asset/images/popular/image_Dishes_1.png"><img class="img-fluid " src="{{asset('frontend/asset/images/popular/image_Dishes_1.png')}}" width="100%" alt=""></a>
        </div>
      </div>
      <div class="popularCont col-lg-2 col-5 col-md-4" data-aos="fade-up-right" data-aos-duration="1000">
        <div class="popularContImg">
            <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="popular" href="./asset/images/popular/image_Dishes_2.png"><img class="img-fluid " src="{{asset('frontend/asset/images/popular/image_Dishes_2.png')}}" width="100%" alt=""></a>
        </div>
      </div>
      <div class="popularCont col-lg-2 col-5 col-md-4" data-aos="fade-up-left" data-aos-duration="1000">
        <div class="popularContImg">
            <a class="gel" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="popular" href="./asset/images/popular/image_Dishes_3.png"><img class="img-fluid " src="{{asset('frontend/asset/images/popular/image_Dishes_3.png')}}" width="100%" alt=""></a>
        </div>
      </div>
      <div class="popularCont col-lg-2 col-5" data-aos="fade-right" data-aos-duration="1000">
        <div class="popularContImg">
            <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="popular" href="./asset/images/popular/image_Dishes_4.png"><img class="img-fluid " src="{{asset('frontend/asset/images/popular/image_Dishes_4.png')}}" width="100%" alt=""></a>
        </div>
      </div>
      <div class="popularCont col-lg-2 col-6" data-aos="fade-down-left" data-aos-duration="1000">
        <div class="popularContImg">
            <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="popular" href="./asset/images/popular/image_Dishes_5.png"><img class="img-fluid justify-content-between " src="{{asset('frontend/asset/images/popular/image_Dishes_5.png')}}" width="100%" alt=""></a>
        </div>
      </div>


  </div>
  </section>
  <!-- popular ssecton ends -->

<!-- rechhelth section starts -->
<section id="rech_helth" data-aos="fade-up"
 data-aos-anchor-placement="top-bottom" >
<div class="container">
    <h6>RICH & HEALTHY</h6>
  <div class="row">
        <div class="rich_img col-lg-4" data-aos="fade-right" data-aos-duration="1500">

           <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="richhelth" href="{{asset('frontend/asset/images/richhelth/image_richHealthy_1.png')}}"><img   class="img-fluid"  src="{{asset('frontend/asset/images/richhelth/image_richHealthy_1.png')}}"  alt=""> </a>

      </div>

      <div class="rech_cont col-lg-8">


          <h4>Highest quality artisangrains, proteins & seasonal ingredients</h4>
          <p>Righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desires, that they cannot foresee.</p>

        <div class="row">

          <div class="rech_cont-cont col-6" data-aos="fade-left">

              <p><span><iconify-icon icon="maki:star"></iconify-icon></span> Simple and easy to distinguish</p>
              <p><span><iconify-icon icon="maki:star"></iconify-icon></span> Pleasure of the momentblinded desire</p>
              <p><span><iconify-icon icon="maki:star"></iconify-icon></span> Able to do what we like best</p>
              <button class="bTn justify-content-center" > Read More</button>

          </div>

            <div class="rech_cont-img col-6" data-aos="zoom-in-left">
               <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="richhelth" href="{{asset('frontend/asset/images/richhelth/image_richHealthy_2.png')}}"><img class="img-fluid" src="{{asset('frontend/asset/images/richhelth/image_richHealthy_2.png')}}" alt=""></a>
          </div>


        </div>
      </div>
  </div>
</div>
</section>
<!-- rechhelth section ends-->

<!-- BIGG OFFER SECTION STARTS -->
  <section id="bigg_offer" data-aos="fade-up"
 data-aos-anchor-placement="top-bottom">
<div class="container">
    <h2>Bigg Offer</h2>
    <p>Demoralized by the charms of pleasure of the moment so blinded except to some advantage.</p>
</div>

<!-- Swiper -->
<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><a  href=""><img src="{{asset('frontend/asset/images/bigg_offer/image_bigOffer_1.png.jpg')}}" alt=""></a></div>
    <div class="swiper-slide"><img src="{{asset('frontend/asset/images/bigg_offer/image_itemsList_ooffer_3.jpg')}}" alt=""></div>
    <div class="swiper-slide"><img src="{{asset('frontend/asset/images/bigg_offer/image_itemsList_ooffer_4.jpg')}}" alt=""></div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>


</section>
<!-- BIGG OFFER SECTION ENDS -->

<!-- CHECK OUT MENU SECTION STARTS -->
<section id="checkOut" data-aos="fade-up"
data-aos-anchor-placement="top-bottom">
<div class="container">
    <h5 class="checkOutHeadig">SPECIALS</h5>
    <h2>Check out our menu</h2>
    <p>Demoralized by the charms of pleasure of the moment so blinded except to some advantage.</p>
  <div class="row">


      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#breakfast" type="button" role="tab" aria-controls="pills-home" aria-selected="true">BREAKFAST</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#dinner" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">LUNCH</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#lunch" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">DINNER</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#starters" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">STARTERS</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#beverages" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">BEVERAGES</button>
        </li>
      </ul>



    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade show active" id="breakfast" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="row">
          <div class="checkOutImg col-lg-6" data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1500">
              <img src="./asset/images/checkOut/checkOutImg-1.png" alt="">
              <button class="bTn">VIEW ALL MENU <a href=""><span><img src="./asset/images/checkOut/Vector.svg" alt=""></span></a></button>
          </div>
          <div class="checkOutCont col-lg-6" data-aos="fade-up-left">

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Gazpacho Garlic</h3>
                  <h5>Chilled tomato, cucumber, garlic, red pepper soup.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$55</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Pan Con Berenjina Frita</h3>
                  <h5>Marinated seabass with sour sauce, dill & coriander on bread.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$40</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>New Lubina Marinada</h3>
                  <h5>Fried aubergine with almond on bread (2 pieces).</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$45</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Gazpacho</h3>
                  <h5>Atlantic cod fillet, chips, salad, tartare, lemon.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$35</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Coconut Chia Bowl</h3>
                  <h5>Marinated seabass with sour saucel & coriander on bread.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$95</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>New Lubina Marinada</h3>
                  <h5>Atlantic cod fillet, chips, salad, tartare, lemon.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$120</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Gazpacho Garlic</h3>
                  <h5>Chilled tomato, cucumber, garlic, red pepper soup.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$29</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="row">
          <div class="checkOutImg col-lg-6" >
              <img src="./asset/images/checkOut/checkOutImg-1.png" alt="">
              <button class="bTn">VIEW ALL MENU <a href=""><span><img src="./asset/images/checkOut/Vector.svg" alt=""></span></a></button>
          </div>
          <div class="checkOutCont col-lg-6" data-aos="fade-up-left">

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Gazpacho Garlic</h3>
                  <h5>Chilled tomato, cucumber, garlic, red pepper soup.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$55</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Pan Con Berenjina Frita</h3>
                  <h5>Marinated seabass with sour sauce, dill & coriander on bread.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$40</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>New Lubina Marinada</h3>
                  <h5>Fried aubergine with almond on bread (2 pieces).</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$45</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Gazpacho</h3>
                  <h5>Atlantic cod fillet, chips, salad, tartare, lemon.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$35</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Coconut Chia Bowl</h3>
                  <h5>Marinated seabass with sour saucel & coriander on bread.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$95</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>New Lubina Marinada</h3>
                  <h5>Atlantic cod fillet, chips, salad, tartare, lemon.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$120</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Gazpacho Garlic</h3>
                  <h5>Chilled tomato, cucumber, garlic, red pepper soup.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$29</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="row">
          <div class="checkOutImg col-lg-6">
              <img src="./asset/images/checkOut/checkOutImg-1.png" alt="">
              <button class="bTn">VIEW ALL MENU <a href=""><span><img src="./asset/images/checkOut/Vector.svg" alt=""></span></a></button>
          </div>
          <div class="checkOutCont col-lg-6">

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Gazpacho Garlic</h3>
                  <h5>Chilled tomato, cucumber, garlic, red pepper soup.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$55</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Pan Con Berenjina Frita</h3>
                  <h5>Marinated seabass with sour sauce, dill & coriander on bread.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$40</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>New Lubina Marinada</h3>
                  <h5>Fried aubergine with almond on bread (2 pieces).</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$45</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Gazpacho</h3>
                  <h5>Atlantic cod fillet, chips, salad, tartare, lemon.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$35</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Coconut Chia Bowl</h3>
                  <h5>Marinated seabass with sour saucel & coriander on bread.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$95</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>New Lubina Marinada</h3>
                  <h5>Atlantic cod fillet, chips, salad, tartare, lemon.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$120</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Gazpacho Garlic</h3>
                  <h5>Chilled tomato, cucumber, garlic, red pepper soup.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$29</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="starters" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="row">
          <div class="checkOutImg col-lg-6">
              <img src="./asset/asset/images/checkOut/checkOutImg-1.png" alt="">
              <button class="bTn">VIEW ALL MENU <a href=""><span><img src="./asset/asset/images/checkOut/Vector.svg" alt=""></span></a></button>
          </div>
          <div class="checkOutCont col-lg-6">

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Gazpacho Garlic</h3>
                  <h5>Chilled tomato, cucumber, garlic, red pepper soup.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$55</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Pan Con Berenjina Frita</h3>
                  <h5>Marinated seabass with sour sauce, dill & coriander on bread.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$40</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>New Lubina Marinada</h3>
                  <h5>Fried aubergine with almond on bread (2 pieces).</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$45</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Gazpacho</h3>
                  <h5>Atlantic cod fillet, chips, salad, tartare, lemon.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$35</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Coconut Chia Bowl</h3>
                  <h5>Marinated seabass with sour saucel & coriander on bread.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$95</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>New Lubina Marinada</h3>
                  <h5>Atlantic cod fillet, chips, salad, tartare, lemon.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$120</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Gazpacho Garlic</h3>
                  <h5>Chilled tomato, cucumber, garlic, red pepper soup.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$29</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="beverages" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="row">
          <div class="checkOutImg col-lg-6">
              <img src="./asset/images/checkOut/checkOutImg-1.png" alt="">
              <button class="bTn">VIEW ALL MENU <a href=""><span><img src="./asset/images/checkOut/Vector.svg" alt=""></span></a></button>
          </div>
          <div class="checkOutCont col-lg-6">

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Gazpacho Garlic</h3>
                  <h5>Chilled tomato, cucumber, garlic, red pepper soup.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$55</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Pan Con Berenjina Frita</h3>
                  <h5>Marinated seabass with sour sauce, dill & coriander on bread.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$40</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>New Lubina Marinada</h3>
                  <h5>Fried aubergine with almond on bread (2 pieces).</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$45</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Gazpacho</h3>
                  <h5>Atlantic cod fillet, chips, salad, tartare, lemon.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$35</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Coconut Chia Bowl</h3>
                  <h5>Marinated seabass with sour saucel & coriander on bread.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$95</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>New Lubina Marinada</h3>
                  <h5>Atlantic cod fillet, chips, salad, tartare, lemon.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$120</span>
              </div>
            </div>

            <div class="row">
              <div class="checkOutContDetails col-10">
                  <h3>Gazpacho Garlic</h3>
                  <h5>Chilled tomato, cucumber, garlic, red pepper soup.</h5>
              </div>
              <div class="checkOutContPrices  col-2">
                  <span>$29</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


  </div>
</div>
</section>
<!-- CHECK OUT MENU SECTION ENDS -->

<!-- speacial menu section starts -->
<section id="speacial_menu" data-aos="fade-up"
data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
<div class="container">
    <h2>SPECIALS MANU FOR ALL TIME</h2>
  <div class="row justify-content-center align-items-center ">

      <div class="speacial_menu_img col-lg-2 col-md-4 col-sm-6 col-6" data-aos="fade-down-right">
      <div class="speacial_menu_img_cont">
          <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="speacila_menu"  href="./asset/images/speacila_menu/image_1.png"><img src="./asset/images/speacila_menu/image_1.png" alt=""></a>
          <p>Burger</p>
      </div>
      </div>
      <div class="speacial_menu_img col-lg-2 col-md-4 col-sm-6 col-6" data-aos="fade-left">
      <div class="speacial_menu_img_cont">
          <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="speacila_menu"  href="./asset/images/speacila_menu/image_2.png"><img src="./asset/images/speacila_menu/image_2.png" alt=""></a>
          <p>Fried chicken</p>
      </div>
      </div>
      <div class="speacial_menu_img col-lg-2 col-md-4 col-sm-6 col-6" data-aos="fade-down-right">
      <div class="speacial_menu_img_cont">
          <a class="gellary"data-overlay="rgba(0, 0, 0, 0.46)" data-gall="speacila_menu"  href="./asset/images/speacila_menu/image_3.png"><img src="./asset/images/speacila_menu/image_3.png" alt=""></a>
          <p>Doner with
            Grilled Chicken</p>
      </div>
      </div>
      <div class="speacial_menu_img col-lg-2 col-md-4 col-sm-6 col-6" data-aos="fade-left">
      <div class="speacial_menu_img_cont">
          <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="speacila_menu"  href="./asset/images/speacila_menu/image_4.png"><img src="./asset/images/speacila_menu/image_4.png" alt=""></a>
          <p>Pizza</p>
      </div>
      </div>
      <div class="speacial_menu_img col-lg-2 col-md-4 col-sm-6 col-6" data-aos="fade-up">
      <div class="speacial_menu_img_cont">
          <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="speacila_menu"  href="./asset/images/speacila_menu/image_5.png"><img src="./asset/images/speacila_menu/image_5.png" alt=""></a>
          <p>Hot Dogs</p>
      </div>
      </div>
      <div class="speacial_menu_img col-lg-2 col-md-4 col-sm-6 col-6" data-aos="fade-down-left">
      <div class="speacial_menu_img_cont">
          <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="speacila_menu"  href="./asset/images/speacila_menu/image_6.png"><img src="./asset/images/speacila_menu/image_6.png" alt=""></a>
          <p>Chicken
            Skewers</p>
      </div>
      </div>
      <div class="speacial_menu_img col-lg-2 col-md-4 col-sm-6 col-6" data-aos="fade-up">
      <div class="speacial_menu_img_cont">
          <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="speacila_menu"  href="./asset/images/speacila_menu/image_7.png"><img src="./asset/images/speacila_menu/image_7.png" alt=""></a>
          <p>Greek Salad</p>
      </div>
      </div>
      <div class="speacial_menu_img col-lg-2 col-md-4 col-sm-6 col-6" data-aos="fade-down-left">
      <div class="speacial_menu_img_cont">
          <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="speacila_menu"  href="./asset/images/speacila_menu/image_8.png"><img src="./asset/images/speacila_menu/image_8.png" alt=""></a>
          <p>Dahi Puri</p>
      </div>
      </div>
      <div class="speacial_menu_img col-lg-2 col-md-4 col-sm-6 col-6" data-aos="fade-down-right">
      <div class="speacial_menu_img_cont">
          <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="speacila_menu"  href="./asset/images/speacila_menu/image_9.png"><img src="./asset/images/speacila_menu/image_9.png" alt=""></a>
          <p>Ice cream with
            Chocolate</p>
      </div>
      </div>
      <div class="speacial_menu_img col-lg-2 col-md-4 col-sm-6 col-6" data-aos="fade-left">
      <div class="speacial_menu_img_cont">
          <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="speacila_menu"  href="./asset/images/speacila_menu/image_10.png"><img src="./asset/images/speacila_menu/image_10.png" alt=""></a>
          <p>Cocktail
            Glasses</p>
      </div>
      </div>
  </div>
</div>
</section>
<!-- speacial menu section ends -->

<!-- Our Restaurant section starts -->
<section id="restaurant" data-aos="fade-up"
data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
<div class="container">
  <div class="row">
    <div class="restaurantImgCont col-lg-6" data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="1500">
      <div class="row">
        <div class="restaurantImgContSmallOne col-6" data-aos="fade-down-right" data-aos-duration="2500">
            <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="restaurant"  href="./asset/images/restaurant/image_ourResturant_1.png"><img src="./asset/images/restaurant/image_ourResturant_1.png" width="100%" alt=""></a>
        </div>
        <div class="restaurantImgContSmallTwo col-6" data-aos="fade-down-left"  data-aos-duration="2500">
            <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="restaurant" href="./asset/images/restaurant/image_ourResturant_2.png"><img src="./asset/images/restaurant/image_ourResturant_2.png" width="100%" alt=""></a>
        </div>
      <div><a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="restaurant" href="./asset/images/restaurant/image_ourResturant_3.png"><img class="restaurantImgContBigg" src="./asset/images/restaurant/image_ourResturant_3.png" width="100%" alt=""></a></div>
      </div>
    </div>
    <div class="restaurantCont col-lg-6" data-aos="fade-left" data-aos-duration="1500">
        <h4 class="restaurantHEeading">OUR RESTAURANT</h4>
        <h3>For every specialoccasion there’s heritaste</h3>
        <p>Indignation and dislike men who are so beguiled demoralized by the charms of pleasure of the moment. Success Story.</p>
      <div class="row" data-aos="fade-up"
        data-aos-anchor-placement="center-bottom">

        <div class="restaurantContDetailsImg col-3">
            <span class="restaurantContDetailsIcon" > <img src="./asset/images/restaurant/growth 1.png" alt=""></span>
        </div>
        <div class="restaurantContDetails col-9">
            <h3>Success Story</h3>
            <p>Certain circumstances and owing to the claims of duty obligations of business it will frequently.</p>
            <button class="bTn">Read More <span><iconify-icon icon="ei:arrow-right"></iconify-icon></span></button>
        </div>

      </div>
      <div class="row" data-aos="fade-up"
        data-aos-anchor-placement="center-bottom" data-aos-duration="2500">

        <div class="restaurantContDetailsImg col-3" data-aos="fade-right" >
            <span class="restaurantContDetailsIcon" > <img src="./asset/images/restaurant/growth 1.png" alt=""></span>
        </div>
        <div class="restaurantContDetails col-9" data-aos="fade-left">
            <h3>Success Story</h3>
            <p>Certain circumstances and owing to the claims of duty obligations of business it will frequently.</p>
            <button class="bTn">Read More <span><iconify-icon icon="ei:arrow-right"></iconify-icon></span></button>
        </div>

      </div>
    </div>
  </div>
</div>
</section>
<!-- Our Restaurant section ends -->

<!-- DELIVERY SECTION STARTS -->
<section id="delivery" data-aos="fade-up"
 data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
<div class="container">
  <div class="row">
    <div class="delivery_cont col-lg-6 col-8" data-aos="fade-right" data-aos-duration="1500">
        <h5 >Delivery</h5>
        <h2>A Moments Of <br> <span>Delivered On Right Time & Place</span></h2>
        <p>Food Khan is a restaurant, bar and coffee roastery located on a busy corner site in Farringdon's Exmouth Market. With glazed frontage on two sides of the building, overlooking the market and a bustling London inteon.</p>
        <div class="row ">
          <div class="deliveryOrder col-lg-6">
            <div class="row ">
              <div class="deliveryOrderCont col-lg-7 col-7">
                  <h6>Delivery Order</h6>
                  <p>+880 1630 225 015</p>
              </div>
              <div class="deliveryOrderImg col-lg-2 col-3">
                  <a class="gellary" data-gall="delivey"  href="./images/delivery/food_delivery1.png"><img class="align-items-center" src="./images/delivery/food_delivery1.png" alt=""></a>
              </div>
            </div>
          </div>
          <div class="deliveryOrderNow col-lg-6">
              <button class="bTn">Order Now</button>
          </div>
        </div>
    </div>
    <div class="delivery_img col-lg-6 col-4 "  data-aos="flip-up" data-aos-duration="2500">
        <a class="gellary" data-overlay="rgba(0, 0, 0, 0.46)" data-gall="delivery"  href="./asset/images/delivery/image_delivery.png"><img src="./asset/images/delivery/image_delivery.png" alt=""></a>
    </div>
  </div>
</div>
</section>
<!-- DELIVARY SECTION ENDS -->

<!-- BEST SECTION STARTS -->
<section id="best" data-aos="fade-up"
  data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
  <div class="container">
      <h4 class="bestHeading">Why We are the best</h4>
    <div class="row">
      <div class="col-lg-4" data-aos="fade-right" data-aos-duration="2000">

        <div class="bestCont">
            <div class="bestImage">
              <a class="gellary" data-gall="best"  href="./asset/images/best/cooking 1.png"><img src="./asset/images/best/cooking 1.png" alt=""></a>
              <span>1</span>
            </div>

            <div class="bestContent">
                <h3>Passionate Chefs</h3>
                <p>Beguiled and demoralized by all get charms pleasure the moments ever so blinded by desire.</p>
              <button class="bTn">Read More</button>
            </div>

        </div>
      </div>
      <div class="col-lg-4" data-aos="flip-down" data-aos-duration="1000">

        <div class="bestCont">
            <div class="bestImage">
              <a class="gellary" data-gall="best" href="./asset/images/best/diet 1.png"><img src="./asset/images/best/diet 1.png" alt=""></a>
              <span>1</span>
            </div>

            <div class="bestContent">
                <h3>Passionate Chefs</h3>
                <p>Beguiled and demoralized by all get charms pleasure the moments ever so blinded by desire.</p>
                <button class="bTn">Read More</button>
            </div>

        </div>
      </div>

      <div class="col-lg-4" data-aos="fade-left" data-aos-duration="2000">

        <div class="bestCont">
            <div class="bestImage">
              <a class="gellary" data-gall="best" href="./asset/images/best/candle 1.png"><img src="./asset/images/best/candle 1.png" alt=""></a>
              <span>1</span>
            </div>

            <div class="bestContent">
                <h3>Passionate Chefs</h3>
                <p>Beguiled and demoralized by all get charms pleasure the moments ever so blinded by desire.</p>
                <button class="bTn">Read More</button>
            </div>

        </div>
      </div>

    </div>
  </div>


  </section>
<!-- BEST SECTION ENDS -->

<!-- Testimonial section starts -->
<section id="testimonial" data-aos="fade-up"
data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
<div class="container justify-content-center">
    <h4 class="testimonialHeading">Testimonial</h4>
    <h2>Review <span>form our guests</span></h2>
  <div class="testimonialSlider ">
    <div class="testimonialSliderCont">
      <div class="testimonialSliderContImg m-auto">
          <img src="./asset/images/testimonial/image_guests_1.png" alt="">
      </div>
        <h4>Bernadette R. Martin</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum minus sit facilis quae non amet? Minima recusandae....</p>
        <ul>
          <li><span class="testimonialIcon_1 justify-content-end"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_2 justify-content-end"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_3 justify-content-end"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_4 justify-content-end"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_5 justify-content-end"><iconify-icon icon="material-symbols:star-outline"></iconify-icon></li>
        </ul>

    </div>
    <div class="testimonialSliderCont m-auto">
        <img src="./asset/images/testimonial/image_guests_1.png" alt="">
        <h4>Bernadette R. Martin</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum minus sit facilis quae non amet? Minima recusandae....</p>
        <ul>
          <li><span class="testimonialIcon_1"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_2"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_3"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_4"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_5"><iconify-icon icon="material-symbols:star-outline"></iconify-icon></li>
        </ul>

    </div>
    <div class="testimonialSliderCont m-auto">
        <img src="./asset/images/testimonial/image_guests_1.png" alt="">
        <h4>Bernadette R. Martin</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum minus sit facilis quae non amet? Minima recusandae....</p>
        <ul>
          <li><span class="testimonialIcon_1"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_2"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_3"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_4"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_5"><iconify-icon icon="material-symbols:star-outline"></iconify-icon></li>
        </ul>

    </div>
    <div class="testimonialSliderCont m-auto">
        <img src="./asset/images/testimonial/image_guests_1.png" alt="">
        <h4>Bernadette R. Martin</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum minus sit facilis quae non amet? Minima recusandae....</p>
        <ul>
          <li><span class="testimonialIcon_1"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_2"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_3"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_4"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_5"><iconify-icon icon="material-symbols:star-outline"></iconify-icon></li>
        </ul>

    </div>
    <div class="testimonialSliderCont m-auto">
        <img src="./asset/images/testimonial/image_guests_1.png" alt="">
        <h4>Bernadette R. Martin</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum minus sit facilis quae non amet? Minima recusandae....</p>
        <ul>
          <li><span class="testimonialIcon_1"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_2"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_3"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_4"><iconify-icon icon="material-symbols:star"></iconify-icon></span></li>
          <li><span class="testimonialIcon_5"><iconify-icon icon="material-symbols:star-outline"></iconify-icon></li>
        </ul>

    </div>

  </div>
</div>
</section>
<!-- Testimonial section ends -->

</main>

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




