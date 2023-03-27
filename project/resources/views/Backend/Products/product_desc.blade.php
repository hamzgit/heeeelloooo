@extends('Backend.layouts.main')
@section('main-container')
    <div class="dashboard-wrapper">
        {{-- <div class="dashboard-ecommerce"> --}}
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Product Manager </h2>
                        <p class="pageheader-text">
                        </p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Exisso</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->

            <div class="row">
                <!-- ============================================================== -->
                <!-- validation form -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <h5 class="card-header"><b style="font-size: 25px; font-family: Arial, Helvetica,  sans-serif;">. Manage Your Products Description</b></h5>
                     <div class="card-body">
                        <form action="{{ route('product.store.extra.details', $id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                               @csrf

                               {{-- Product Title --}}

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"  style="font-size: 15px;">Product Title <span class="required">*</span>
                        </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                       <input style="font-size: 16px" type="text" value="{{ @$product->ProductDetail->title }}" name="title" required="required" class="form-control col-md-14 col-xs-12">
                      </div>
                     </div>
                                {{-- Total Items --}}

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"  style="font-size: 15px;">Total Items<span class="required">*</span>
                        </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input style="font-size: 16px" type="number" value="{{ @$product->ProductDetail->total_items }}" name="total_items" required="required" class="form-control col-md-14 col-xs-12">
                       </div>
                         </div>
                                {{-- text-area --}}

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" style="font-size: 16px;">Product Description<span class="required">*</span>
                       </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="description" class="form-control col-md-14 col-xs-12" rows="5">{{ @$product->ProductDetail->description }}</textarea>
                      </div>
                        </div>
                          <br>
                                {{-- Button --}}
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                      <button class="btn btn-primary" type="submit">Submit</button>
                     </div>
                      </div>

                     </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end validation form -->
        <!-- ============================================================== -->
    </div>
    {{-- </div> --}}
@endsection
