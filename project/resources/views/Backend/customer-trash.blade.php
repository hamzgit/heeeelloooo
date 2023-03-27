@extends('Backend.layouts.main')
@section('main-container')

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Customers Table</h2>
                            {{-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> --}}
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Exisso</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Customer Data</li>
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
             <!-- basic table  -->
             <!-- ============================================================== -->
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header" style="font-size: 20px">
                                Customers Information</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr class="bold">
                                                <th style="vertical-align: middle">
                                                    First Name</th>
                                                <th style="vertical-align: middle" >
                                                    Last Name</th>
                                                <th style="vertical-align: middle">
                                                    Email Address</th>
                                                <th style="vertical-align: middle">
                                                    Gender
                                                </th>
                                                <th style="vertical-align: middle">
                                                    State
                                                </th>
                                                <th style="vertical-align: middle">
                                                    Country
                                                </th>
                                                <th style="vertical-align:   middle">Date-Of-Birth
                                                </th>
                                                <th style="vertical-align: middle">
                                                    Status
                                                </th>
                                                <th style="vertical-align: middle">
                                                    Restore
                                                </th>
                                                <th style="vertical-align: middle">
                                                    Permanent Delete
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{$customer->first_name}}</td>
                                                <td>{{$customer->last_name}}</td>
                                                <td>{{$customer->email}}</td>
                                                <td>{{$customer->gender}}</td>
                                                <td>{{$customer->state}}</td>
                                                <td>{{$customer->country}}</td>
                                                <td>{{$customer->dob}}</td>
                                                <td>
                                                    @if ($customer->status == "1")
                                                    Active

                                                    @else
                                                    Inactive

                                                    @endif
                                                </td>
                                            <td>
                                                <a href="{{route('restore',
                                                ['id' => $customer->customer_id])}}">
                                                    <button class="btn btn-primary">Restore</button>
                                            </td>
                                                </a>

                                            <td>
                                                <a href="{{route('forceDelete',['id'=> $customer->customer_id])}}">
                                                    <button class="btn btn-danger">Delete</button>
                                                </a>
                                            </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="bold">
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email Address</th>
                                                <th>Gender</th>
                                                <th>State</th>
                                                <th>Country</th>
                                                <th>Date-Of-Birth</th>
                                                <th>Status</th>
                                                <th>Restore</th>
                                                <th>Permanent Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->


            <!-- ============================================================== -->
           @endsection
