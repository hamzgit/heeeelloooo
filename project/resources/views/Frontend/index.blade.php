@extends('Frontend.layouts.main')
@section('main-container')
    <!-- slider section -->
    <section class=" slider_section position-relative">
        {{-- style="background-color: white" --}}
        <div class="design-box">
            <img src="{{ url('Frontend/images/design-1.png') }}" alt="">
        </div>
        <div class="slider_number-container d-none d-md-block">
            <div class="number-box">
                <span>
                    01
                </span>
                <hr>
                <span class="jwel">
                    J <br>
                    e <br>
                    w <br>
                    e <br>
                    l <br>
                    l <br>
                    e <br>
                    r <br>
                    y
                </span>
                <hr>
                <span>
                    02
                </span>
            </div>
        </div>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail_box">
                                    <h2>
                                        <span> New Collection</span>
                                        <hr>
                                    </h2>
                                    <h1>
                                        Jewellery
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                                        aptent taciti sociosqu ad litora torquent per conubia nostra
                                    </p>
                                    <div>
                                        {{-- <a href="">Shop Now</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{ url('Frontend/images/slider-img.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail_box">
                                    <h2>
                                        <span> New Collection</span>
                                        <hr>
                                    </h2>
                                    <h1>
                                        Jewellery
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                                        aptent taciti sociosqu ad litora torquent per conubia nostra
                                    </p>
                                    <div>
                                        {{-- <a href="">Shop Now</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{ url('Frontend/images/slider-img.png ') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail_box">
                                    <h2>
                                        <span> New Collection</span>
                                        <hr>
                                    </h2>
                                    <h1>
                                        Jewellery
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                                        aptent taciti sociosqu ad litora torquent per conubia nostra
                                    </p>
                                    <div>
                                        {{-- <a href="">Shop Now</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{ url('Frontend/images/slider-img.png ') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->
    </div>
    <br><br>
    <section class="py-5 bg-muted">
        <div class="container">
            <div class="row text-center gy-3">
                <div class="col-lg-4">
                    <div class="d-inline-block">
                        <div class="d-flex align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                                <use xlink:href="#delivery-time-1"> </use>
                            </svg>
                            <div class="text-start ms-3">
                                <h6 class="text-uppercase mb-1">We love our customers</h6>
                                <p class="text-sm mb-0 text-muted">We are known to provide best possible service ever.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-inline-block">
                        <div class="d-flex align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                                <use xlink:href="#helpline-24h-1"> </use>
                            </svg>
                            <div class="text-start ms-3">
                                <h6 class="text-uppercase mb-1">100 % Customer Satisfaction</h6>
                                <p class="text-sm mb-0 text-muted">Free returns on everything for 3 months.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-inline-block">
                        <div class="d-flex align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                                <use xlink:href="#label-tag-1"> </use>
                            </svg>
                            <div class="text-start ms-3">
                                <h6 class="text-uppercase mb-1">Best prices</h6>
                                <p class="text-sm mb-0 text-muted">You can check that the height of the boxes adjust when
                                    longer text like this one is used in one of them.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- Products --}}
    <!-- item section -->
    <div class="item_section layout_padding2">
        <div class="container">
            <div class="item_container">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="product text-center">
                                <div class="position-relative mb-3">
                                    <div class="badge text-white bg-primary">Sale
                                    </div>
                                    <a class="d-block" href="{{ route('product.single', $product->id) }}">
                                        <img class="img-fluid w-100" src="{{ asset('uploads/' . $product->image) }}"
                                            alt="...">
                                    </a>
                                    <div class="product-overlay">
                                        <ul class="mb-0 list-inline">
                                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark"
                                                    href="#!">
                                                    <i class="far fa-heart">
                                                    </i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item m-0 p-0">
                                                <a class="btn btn-sm btn-dark"
                                                    href="{{ route('product.single', $product->id) }}"> Add To Cart
                                                </a>
                                            </li>
                                            <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark"
                                                    href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h6> <a class="reset-anchor"
                                        href="{{ route('product.single', $product->id) }}">{{ $product->name }}</a></h6>
                                <p class="small text-muted">RS.{{ $product->price }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    {{-- end --}}


    {{-- @foreach ($products as $product)
                    <div class="box">
                        <a href="{{ route('product.single', $product->id) }}">
                            <div class="row">

                            </div>
                            <div class="img-box">
                                <img src="{{ asset('uploads/' . $product->image) }}" alt="">
                            </div>
                            <div class="name" style="text-align: center">
                                <div class="name">
                                    {{ $product->name }}
                                </div>
                                <hr>
                                <div class="price">
                                    RS. {{ $product->price }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach --}}
    <!-- item section -->

    {{-- latest Products --}}

    <div class="page-holder">
        <div class="container px-lg-3">
            <section class="py-5">
                <header>
                    <p class="small text-muted small text-uppercase mb-1"></p>
                    <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
                </header>
                <div class="row">
                    @foreach ($new_products as $new_products)
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="product text-center">
                                <div class="position-relative mb-3">
                                    <div class="badge text-white bg-primary">Sale</div>
                                    <a class="d-block" href="{{ route('product.single', $new_products->id) }}">
                                        <img class="img-fluid w-100" src="{{ asset('uploads/' . $new_products->image) }}"
                                            alt="...">
                                    </a>
                                    <div class="product-overlay">
                                        <ul class="mb-0 list-inline">
                                            <li class="list-inline-item m-0 p-0">
                                                <a class="btn btn-sm btn-outline-dark" href="#!">
                                                    <i class="far fa-heart">
                                                    </i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item m-0 p-0">
                                                <a class="btn btn-sm btn-dark"
                                                    href="{{ route('product.single', $new_products->id) }}"> Add To Cart
                                                </a>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <a class="btn btn-sm btn-outline-dark" href="#productView"
                                                    data-bs-toggle="modal">
                                                    <i class="fas fa-expand">
                                                    </i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h6> <a class="reset-anchor"> {{ $new_products->name }}</a></h6>
                                <p class="small text-muted">RS.{{ $new_products->price }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
    {{-- // --}}

    <!-- client section -->
    <br>
    <section class="client_section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Happy Customers
                </h2>
            </div>
            <h4 class="secondary_heading">
                Customers Reviews
            </h4>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="client_container">
                            <div class="client-id">
                                <div class="img-box">
                                    <img src="{{ url('Frontend/images/client.png') }}" alt="">
                                </div>
                                <div class="name">
                                    <h5>
                                        Aliqua
                                    </h5>
                                    <h6>
                                        Consectetur adipiscing
                                    </h6>
                                </div>
                            </div>
                            <div class="detail-box">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container">
                            <div class="client-id">
                                <div class="img-box">
                                    <img src="{{ url('Frontend/images/client.png') }}" alt="">
                                </div>
                                <div class="name">
                                    <h5>
                                        Aliqua
                                    </h5>
                                    <h6>
                                        Consectetur adipiscing
                                    </h6>
                                </div>
                            </div>
                            <div class="detail-box">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container">
                            <div class="client-id">
                                <div class="img-box">
                                    <img src="{{ url('Frontend/images/client.png') }}" alt="">
                                </div>
                                <div class="name">
                                    <h5>
                                        Aliqua
                                    </h5>
                                    <h6>
                                        Consectetur adipiscing
                                    </h6>
                                </div>
                            </div>
                            <div class="detail-box">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center gy-3">
                <div class="col-lg-4">
                    <div class="d-inline-block">
                        <div class="d-flex align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                                <use xlink:href="#delivery-time-1"> </use>
                            </svg>
                            <div class="text-start ms-3">
                                <h6 class="text-uppercase mb-1">Free shipping</h6>
                                <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-inline-block">
                        <div class="d-flex align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                                <use xlink:href="#helpline-24h-1"> </use>
                            </svg>
                            <div class="text-start ms-3">
                                <h6 class="text-uppercase mb-1">24 x 7 service</h6>
                                <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-inline-block">
                        <div class="d-flex align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                                <use xlink:href="#label-tag-1"> </use>
                            </svg>
                            <div class="text-start ms-3">
                                <h6 class="text-uppercase mb-1">Festivaloffers</h6>
                                <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
@endsection


