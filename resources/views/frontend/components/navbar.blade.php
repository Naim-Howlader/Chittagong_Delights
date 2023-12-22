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
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./about_us.html">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('items')}}">ITEMS</a>
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
