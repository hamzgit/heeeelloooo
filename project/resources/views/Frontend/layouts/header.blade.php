<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}


  <title>EXISSO</title>

  <!-- slider stylesheet -->

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('Frontend/css/bootstrap.css ')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&     display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{url('Frontend/css/style.css ')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{url('Frontend/css/responsive.css ')}}" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



  {{-- // add to cart---------------- --}}
  <link rel="stylesheet" href="{{ url('Frontend/cart/vendor/glightbox/css/glightbox.min.css')}}">
    <!-- Range slider-->
    <link rel="stylesheet" href="{{ url('Frontend/cart/vendor/nouislider/nouislider.min.css')}}">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="{{ url('Frontend/cart/vendor/choices.js/public/assets/styles/choices.min.css')}}">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="{{ url('Frontend/cart/vendor/swiper/swiper-bundle.min.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ url('Frontend/cart/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ url('Frontend/cart/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">

  {{-- // -------------------------------}}
</head>

<body>

  {{-- <div class="hero_area" style="background: "> --}}
    <!-- header section strats -->
    <header class="header_section" style="background-color: #363636" >
      <div class="container-fluid" >
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="{{ route('home') }}" >
            <img src="{{url('Frontend/images/logo.png ')}}" alt="">
            <span style="color: white">
                Exisso
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/about') }}"> About</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="{{ url('/jewellery') }}">Jewellery </a>
                </li> --}}
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('contactus') }}">Contact us</a>
                </li>
                <li class="nav-item">

                    @if (Auth::user())
                    <a class="nav-link" href="{{ route('user.logout') }}">Logout</a>
                    @else
                    <a class="nav-link" href="{{ route('user.login') }}">Login</a>
                    @endif

                </li>
              </ul>

            </div>
            <a href="{{ route('product.add.to.cart') }}">
            <div class="quote_btn-container ">
                <img src="{{url('Frontend/images/cart.png ')}}" alt="">
                <div class="cart_number">
                  0
                </div>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->


