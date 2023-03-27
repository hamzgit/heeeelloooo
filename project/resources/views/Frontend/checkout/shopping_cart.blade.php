@extends('Frontend.layouts.main')
@section('main-container')
    <br>
    <style>
        .center {
            width: 150px;
            margin: 40px auto;

        }
    </style>
    <!--  Modal -->
    <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="h2 text-uppercase mb-0">Cart</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                                <li class="breadcrumb-item"><a class="text-dark" href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <h2 class="h5 text-uppercase mb-4">Shopping cart</h2>
            <div class="row">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <!-- CART TABLE-->
                    <div class="table-responsive mb-4">
                        <table class="table text-nowrap">
                            <thead class="bg-light">
                                <tr>
                                    <th class="border-0 p-3" scope="col"> <strong
                                            class="text-sm text-uppercase">Product</strong></th>
                                    <th class="border-0 p-3" scope="col"> <strong
                                            class="text-sm text-uppercase">Name</strong></th>
                                    <th class="border-0 p-3" scope="col"> <strong
                                            class="text-sm text-uppercase">Price</strong></th>
                                    <th class="border-0 p-3" scope="col"> <strong
                                            class="text-sm text-uppercase">Quantity</strong>
                                    </th>
                                    <th class="border-0 p-3" scope="col"> <strong
                                            class="text-sm text-uppercase">Total</strong></th>
                                    <th class="border-0 p-3" scope="col"> <strong
                                            class="text-sm text-uppercase"></strong></th>
                                    <th class="border-0 p-3" scope="col"> <strong
                                            class="text-sm text-uppercase"></strong></th>
                                </tr>
                            </thead>
                            <tbody class="border-0">

                                @php
                                    $sum = 0;
                                    @endphp
                                @foreach ($carts as $cart)
                                    @php
                                    $sum = $sum + $cart->product->price*$cart->qty;
                                    $lol = 55;
                                    @endphp

                                    <tr>
                                        <th class="ps-0 py-3 border-light" scope="row">
                                            <div class="d-flex align-items-center"><a
                                                    class="reset-anchor d-block animsition-link" href="detail.html"><img
                                                        src="{{ asset('uploads/' . $cart->product->image) }} "
                                                        alt="..." width="90" /></a>
                                                <div class="ms-3"><strong class="h6"><a
                                                            class="reset-anchor animsition-link"
                                                            href="detail.html"></a></strong></div>
                                            </div>
                                        </th>
                                        <td class="p-3 align-middle border-light">
                                            <p class="mb-0 small">{{ $cart->product->name }}</p>
                                        </td>
                                        <td class="p-3 align-middle border-light">
                                            <div class=" d-flex align-items-center justify-content-between px-3">
                                                <span class="small text-uppercase text-gray headings-font-family">RS.
                                                    {{ $cart->product->price }}</span>
                                            </div>
                                        </td>

                                        <td class="p-3 align-middle border-light">
                                            <div class="quantity">
                                                <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                                <input id="rr" class="form-control border-0 shadow-0 p-0" type="text" readonly
                                                    style="background-color: white" value="{{ $cart->qty }}" >
                                                <button onclick="vv()" class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                            </div>

                                        </td>
                                        <td class="p-3 align-middle border-light">
                                            <p class="mb-0 small">RS. {{$cart->product->price }}</p>
                                        </td>

                                        @php
                                            $quanty = $cart->qty;
                                            $price = $cart->product->price;
                                        @endphp

                                        @push('footer-script')
                                        <script>
                                        var jsPrice = {!! json_encode($price) !!};
                                        var jsquan = {!! json_encode($quanty) !!};
                                        var zz = document.getElementById("rr").value;

                                        var final;

                                        if(zz == 2){
                                            function check(){
                                            abc = jsPrice * 2;
                                            final = abc;
                                        }
                                    }
                                        else if (zz == 3){
                                            function check(){
                                            abc = jsPrice * 3;
                                            final = abc;
                                        }

                                        }


                                        check()
                                        function vv(){
                                            alert(final);
                                        }
                                        </script>
                                        @endpush

                                        <td class="p-3 align-middle border-light">
                                            <input type="checkbox" name="select_product[]" cart-id="{{ $cart->id }}">
                                        </td>
                                        <td class="p-3 align-middle border-light">
                                            <a href="{{ route('cart.delete', $cart->id) }}"><i
                                                    class="fas fa-trash-alt small text-muted"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- CART NAV-->
                    <div class="bg-light px-4 py-3">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 mb-3 mb-md-0 text-md-start"><a class="btn btn-link p-0 text-dark btn-sm"
                                    href="{{ route('home') }}"><i class="fas fa-long-arrow-alt-left me-2"> </i>Continue
                                    shopping</a></div>
                            <div class="col-md-6 text-md-end">
                                <td>Pay with Eway : <input type="checkbox" name="eway">&nbsp;&nbsp;</td>
                                <button class="btn btn-outline-dark btn-sm buy_product">Buy
                                    <i class="fas fa-long-arrow-alt-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ORDER TOTAL-->
                <div class="col-lg-4">
                    <div class="card border-0 rounded-0 p-lg-4 bg-light">
                        <div class="card-body">
                            <h5 class="text-uppercase mb-4" style="font-weight: bold">CART TOTAL</h5>
                            <br>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="text-uppercase small font-weight-bold">Subtotal</strong><span
                                        class="text-muted small">RS. {{ $sum }}</span></li>
                                <li class="border-bottom my-2"></li>
                                <li class="d-flex align-items-center justify-content-between mb-4"><strong
                                        class="text-uppercase small font-weight-bold">Total Price</strong><span>RS.
                                        {{ $sum }}</span></li>
                                <li>
                                    <form action="#">
                                        <div class="input-group mb-0">
                                            <input class="form-control" type="text" placeholder="Enter your coupon">
                                            <button class="btn btn-dark btn-sm w-100 "> <i
                                                    class="fas fa-gift me-2"></i>Apply coupon</button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('footer-script')
    <script>
        $('.buy_product').on('click', function() {

            var cart_id = [];
            var payment_type = '';
            if ($('input[name="eway"]').is(':checked')) {

                payment_type = 'eway';
            } else {

                payment_type = 'pay_person';
            }
            jQuery('input[name="select_product[]"]:checkbox:checked').each(function(i) {

                cart_id[i] = $(this).attr('cart-id');
            });
            if (cart_id.length == 0) {

                alert('Please Select Atleast One Product');
            } else {

                $.ajax({

                    url: '{{ route('product.booking') }}',
                    type: 'post',
                    data: {

                        cart_id: cart_id,
                        payment_type: payment_type,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {

                        if (data.type == 'eway') {

                            window.location = data.url;
                        } else {

                            location.reload();

                        }
                    }
                });
            }
        });
    </script>
@endpush
