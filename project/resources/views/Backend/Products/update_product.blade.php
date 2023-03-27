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
                    <h5 class="card-header"><b style="font-size: 25px; font-family: Arial, Helvetica,  sans-serif;">. Update Your Products</b></h5>
                     <div class="card-body">
                        <form action="{{ route('update.product', $product->id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                               @csrf

                               {{-- Select Category box --}}

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="font-size: 15px" >Category Name<span class="required">*</span>
                      </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                       <select style="font-size: 16px" name="category_id" class="form-control col-md-14 col-xs-12">
                         <option value="">Category Name</option>
                           @foreach ($categories as $categories)
                          <option value="{{$categories->id}}" @if($product->category_id == $categories->id)
                            selected
                          @endif>
                            {{ $categories->name }}</option>
                           @endforeach
                        </select>
                           <br>
                         </div>
                               {{-- Product Name --}}

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"  style="font-size: 15px;">Product Name <span class="required">*</span>
                        </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                       <input style="font-size: 16px" type="text" id="first-name" name="name" value="{{ $product->name }}" required="required" class="form-control col-md-14 col-xs-12">
                      </div>
                       </div>
                                {{-- Product Price --}}

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"  style="font-size: 15px;">Product Price<span class="required">*</span>
                        </label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input style="font-size: 16px" type="number" id="first-name" name="price" value="{{ $product->price }}" required="required" class="form-control col-md-14 col-xs-12">
                       </div>
                         </div>
                                {{-- Image --}}

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"  style="font-size: 15px;">Image<span class="required">*</span>
                       </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input style="font-size: 16px" type="file" id="first-name" name="image" required="required" class="form-control col-md-14 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="control-label col-md-3 col-sm-3 col-xs-12"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img style="width: 100px; height: 100px;" src="{{ asset('uploads/' .$product->image) }}">
                    </div>
                    </div>
                          {{-- <br> --}}
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
    </div>
@endsection
