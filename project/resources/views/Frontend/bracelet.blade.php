@extends('Frontend.layouts.main')
@section('main-container')

{{-- <div class="item_section layout_padding2">
  <h2 class="h5 text-uppercase mb-4">Related products</h2>
            <div class="row">
                <!-- PRODUCT-->
                    @foreach ($related_products as $related_product)
                    <div class="col-lg-3 col-sm-6">
                    <div class="product text-center skel-loader">
                        <div class="d-block mb-3 position-relative"><a class="d-block" href="detail.html"><img
                                    class="img-fluid w-100" src="{{ asset('uploads/' . $related_product->image) }}" alt="..."></a>
                            <div class="product-overlay">
                                <ul class="mb-0 list-inline">
                                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark"
                                            href="#!"><i class="far fa-heart"></i></a></li>
                                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark"
                                            href="{{ route('product.single', $product->id) }}">Add to cart</a></li>
                                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark"
                                            href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h6> <a class="reset-anchor" href="#">{{ $related_product->name }}</a></h6>
                        <p class="small text-muted">RS. {{ $related_product->price }}</p>
                    </div>
                    </div>
                    @endforeach
                </div>
        </div> --}}

@endsection