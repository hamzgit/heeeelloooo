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
                        <h2 class="pageheader-title">Category Manager </h2>
                        <p class="pageheader-text">
                        </p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Exisso</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
                        <h5 class="card-header"><b style="font-size: 25px; font-family: Arial, Helvetica, sans-serif;">. Edit Your Categories</b></h5>
                        <div class="card-body">
                            <form action="{{ route('update.category',$category->id ) }}" method="POST" class="needs-validation" novalidate>
                                @csrf

                                {{--Category box --}}

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="font-size: 15px;">Category Name <span class="required" >*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input style="font-size: 16px" type="text" id="first-name"
                                      value="{{ $category->name }}" name="name" required="required" class="form-control col-md-14 col-xs-12">
                                    </div>
                                  </div>

                                    {{-- Select Category box --}}

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="font-size: 15px" >Sub Category OF <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <select  style="font-size: 16px" name="category_id" class="form-control col-md-14 col-xs-12">
                                            <option value="" @if ($category->category_id == null)
                                             selected @endif>No Subcategory</option>

                                            @foreach ($categories as $categories )
                                              <option value="{{ $categories->id }}"
                                                @if ($category->category_id !== null &&
                                                $category->category_id  == $categories->id) selected @endif> {{ $categories->name }} </option>
                                                {{-- {{ $categories->name }}</option> --}}

                                            @endforeach
                                          </select>
                                          <br>
                                        </div>
                                      {{-- </div> --}}
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
