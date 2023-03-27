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
                        <h2 class="pageheader-title">Customers </h2>
                        <p class="pageheader-text">
                        </p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Exisso</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">customers </li>
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
                        <h5 class="card-header"><b style="font-size: 25px">Update</b></h5>
                        <div class="card-body">
                            <form action="{{ route('admin.update', $admin->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <label for=""><b>First Name</b></label>
                                        <input type="text" class="form-control" name="first_name"
                                            value="{{ $admin->first_name }}" placeholder="Enter Your First Name" required>
                                        <span class="text-danger">
                                            @error('first_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <br>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <label for=""><b>Last Name</b></label>
                                        <input type="text" class="form-control" id="validationCustom02" name="last_name"
                                            placeholder="Enter Your Last Name" value="{{ $admin->last_name }}" required>
                                        <span class="text-danger">
                                            @error('last_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <br>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <label for=""><b>Email Address</b></label>
                                        <input type="text" class="form-control" id="validationCustom03" name="email"
                                            placeholder="Enter Your Email Address" value="{{ $admin->email }}" required>
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <br>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <label for=""><b>Password</b></label>
                                        <input type="password" class="form-control" id="validationCustom04" name="password"
                                            placeholder="Enter Your Passsword" value="{{ $admin->password }}" required>
                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <br>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <label for=""><b>Confirm Password</b></label>
                                        <input type="password" class="form-control" id="validationCustom05"
                                            name="password_confirmation" value="{{ $admin->password }}"
                                            placeholder="Enter Your Confirm password" required>
                                        <span class="text-danger">
                                            @error('password_confirmation')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <br>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <label for=""><b>Image</b></label>
                                        <input type="file" class="form-control" id="validationCustom06" name="image"
                                            value="{{ $admin->image }}" required>
                                        <span class="text-danger">
                                            @error('image')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label for=""><b>Gender</b></label>
                                        <input type="gender" class="form-control" name="gender"
                                            value="{{ $admin->gender }}" id="validationCustom07"
                                            placeholder="Enter Your Gender" required>
                                        <span class="text-danger">
                                            @error('gender')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <br>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label for=""><b>State</b>
                                        </label>
                                        <input type="text" class="form-control" id="validationCustom08" name="state"
                                            value="{{ $admin->state }}" placeholder="State Name" required>
                                        <span class="text-danger">
                                            @error('state')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label for=""><b>Country</b></label>
                                        <input type="text" class="form-control" id="validationCustom09"
                                            name="country" value="{{ $admin->country }}" placeholder="Country Name"
                                            required>
                                        <span class="text-danger">
                                            @error('country')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label for=""><b>Date Of Birth</b></label>
                                        <input type="date" class="form-control" name="dob"
                                            id="validationCustom10" value="{{ $admin->dob }}">
                                        <span class="text-danger">
                                            @error('dob')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <br>
                                    </div>

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
