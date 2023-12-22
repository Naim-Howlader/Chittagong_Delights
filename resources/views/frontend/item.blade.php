@extends('frontend.layouts.app')
@section('main')


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
        <a href="{{route('item.details',$item->id)}}">
          <h2>{{$item->name}}</h2>
        <p>{{$item->short_description}}</p>
        <h4>From TK {{$item->price}}</h4>
        </a>
      </div>
      <div class="cardCnt2 col-5 col-lg-4 ">
        <a href="{{route('item.details',$item->id)}}"><img src="{{asset($item->image1)}}" alt=""></a>
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





@endsection
