@extends('frontend.layouts.app')
@section('main')


<!-- items Banner Section Starts -->
<section id="ItemsBanner">
  <div class="container">
     <h1>{{$food->name}}</h1>
  </div>
</section>
<!-- items Banner Section Ends -->

<!-- items details section starts -->
<section id="Items_details">
  <div class="container">
    <div class="row">
      <!-- left side of the page -->
      <div class="detailsCnt1 col-6 col-lg-6">
        <img src="{{asset($food->image3)}}" alt="">
        <div class="row">
          <div class="details_Img img1 col-6 col-lg-6">
            <img src="{{asset($food->image2)}}" alt="">
          </div>
          <div class="details_Img img2 col-6 col-lg-6">
            <img src="{{asset($food->image1)}}" alt="">
          </div>
        </div>
      </div>
      <div class="detailsCnt2 col-6 col-lg-6">
        <p>{{$food->long_description}}</p>
        <a href="#" class="Btn BtnContent"><button>Order Now</button></a>
      </div>
    </div>
    <span><a href="#" class="SeeMore">See more items</a></span>
  </div>
</section>
<!-- items details section ends -->

<!-- Items Product Section Starts -->
<section id="ItemsProduct">
  <div class="container">
  <div class="row">
    <!-- left Card -->
    @foreach ($items as $item)
    <div class="productCnt1 col-lg-6">
        <div class="productcard"  data-aos="fade-up" data-aos-duration="1500">
         <div class="row">
           <div class="cardCnt1 col-7 col-lg-8">
            <a href="{{route('item.details', $item->id)}}">
             <h2>{{$item->name}}</h2>
             <p>{{$item->short_description}}</p>
             <h4>From TK {{$item->price}}</h4>
            </a>
           </div>
           <div class="cardCnt2 col-5 col-lg-4">
             <a href="{{route('item.details', $item->id)}}"><img src="{{asset($item->image1)}}" alt=""></a>
           </div>
         </div>
       </div>
   </div>
    @endforeach
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
        <!-- card1 -->
        <div class="productcard"  data-aos="fade-up" data-aos-duration="1500">
          <div class="row">
            <div class="cardCnt1 col-7 col-lg-8">
              <a href="./items_details8.html">
                <h2>Fresh cola drink with green lime</h2>
              <p>Topped with chicken, onion, capsicum, black olive & Green chilli</p>
              <h4>From $150</h4>
              </a>
            </div>
            <div class="cardCnt2 col-5 col-lg-4">
              <a href="./items_details8.html"><img src="./asset/images/Items_images/image_itemsList_8.png" alt=""></a>
            </div>
          </div>
        </div>
           <!-- card2 -->
           <div class="productcard"  data-aos="fade-up" data-aos-duration="1500">
            <div class="row">
              <div class="cardCnt1 col-7 col-lg-8">
                <a href="./items_details9.html">
                  <h2>Chocolate ice cream</h2>
                <p>Topped with chicken, onion, capsicum, black olive & Green chilli</p>
                <h4>From $150</h4>
                </a>
              </div>
              <div class="cardCnt2 col-5 col-lg-4">
                <a href="./items_details9.html"><img src="./asset/images/Items_images/image_itemsList_10.jpg" alt=""></a>
              </div>
            </div>
          </div>
           <!-- card3 -->
        <div class="productcard"  data-aos="fade-up" data-aos-duration="1500">
          <div class="row">
            <div class="cardCnt1 col-7 col-lg-8">
             <a href="./items_details10.html">
              <h2>Healthy breakfast</h2>
              <p>Topped with chicken, onion, capsicum, black olive & Green chilli</p>
              <h4>From $150</h4>
             </a>
            </div>
            <div class="cardCnt2 col-5 col-lg-4">
              <a href="./items_details10.html"><img src="./asset/images/Items_images/image_itemsList_12.jpg" alt=""></a>
            </div>
          </div>
        </div>

          <!-- card4 -->
          <div class="productcard"  data-aos="fade-up" data-aos-duration="1500">
            <div class="row">
              <div class="cardCnt1 col-7 col-lg-8">
                <a href="./items_details11.html">
                  <h2>Ried eggs, sausages, zucchini</h2>
                <p>Topped with chicken, onion, capsicum, black olive & Green chilli</p>
                <h4>From $150</h4>
                </a>
              </div>
              <div class="cardCnt2 col-5 col-lg-4">
                <a href="./items_details11.html"><img src="./asset/images/Items_images/image_itemsList_14.jpg" alt=""></a>
              </div>
            </div>
          </div>
    </div>
    <!-- right card -->
    <div class="productCnt1 col-lg-6">
      <!-- card1 -->
      <div class="productcard"  data-aos="fade-up" data-aos-duration="1500">
        <div class="row">
          <div class="cardCnt1 col-7 col-lg-8">
            <a href="./items_details12.html">
              <h2>Ice cream cone</h2>
            <p>Topped with chicken, onion, capsicum, black olive & Green chilli</p>
            <h4>From $150</h4>
            </a>
          </div>
          <div class="cardCnt2 col-5 col-lg-4">
            <a href="./items_details12.html"><img src="./asset/images/Items_images/image_itemsList_9.png" alt=""></a>
          </div>
        </div>
      </div>
         <!-- card2 -->
         <div class="productcard"  data-aos="fade-up" data-aos-duration="1500">
          <div class="row">
            <div class="cardCnt1 col-7 col-lg-8">
              <a href="./items_details13.html">
                <h2>Chocolate topping for ice cream cups</h2>
              <p>Topped with chicken, onion, capsicum, black olive & Green chilli</p>
              <h4>From $150</h4>
              </a>
            </div>
            <div class="cardCnt2 col-5 col-lg-4">
              <a href="./items_details13.html"><img src="./asset/images/Items_images/image_itemsList_11.jpg" alt=""></a>
            </div>
          </div>
        </div>
         <!-- card3 -->
      <div class="productcard"  data-aos="fade-up" data-aos-duration="1500">
        <div class="row">
          <div class="cardCnt1 col-7 col-lg-8">
            <a href="./items_details14.html">
              <h2>Breakfast with coffee and fresh croissants</h2>
            <p>Topped with chicken, onion, capsicum, black olive & Green chilli</p>
            <h4>From $150</h4>
            </a>
          </div>
          <div class="cardCnt2 col-5 col-lg-4">
            <a href="./items_details14.html"><img src="./asset/images/Items_images/image_itemsList_13.jpg" alt=""></a>
          </div>
        </div>
      </div>

        <!-- card4 -->
        <div class="productcard"  data-aos="fade-up" data-aos-duration="1500">
          <div class="row">
            <div class="cardCnt1 col-7 col-lg-8">
              <a href="./items_details15.html">
                <h2>Salad, fried eggs and pastry</h2>
              <p>Topped with chicken, onion, capsicum, black olive & Green chilli</p>
              <h4>From $150</h4>
              </a>
            </div>
            <div class="cardCnt2 col-5 col-lg-4">
              <a href="./items_details15.html"><img src="./asset/images/Items_images/image_itemsList_15.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
   </div>
</div>
</section>
<!-- Items product Section Ends -->

<!-- Items product Section Ends -->



@endsection
