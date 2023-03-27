@extends('Backend.layouts.main')
@section('main-container')

        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Data Tables</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
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
                    <div class="col-xl-15 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="input-group rounded">
                                <input style="text-align: center; font-size: 20px;"  type="search" class="form-control rounded" placeholder="Search name OR email Only !" aria-label="Search" aria-describedby="search-addon"/>
                                {{-- <br> <Br> --}}
                                <span style="font-size: 25px" class="input-group-text border-3" id="search-addon">
                                  <i  class="fas fa-search" ></i>
                                </span>
                              </div>
                            <h5 class="card-header">Basic Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr class="bold">
                                                <th style="vertical-align: middle">
                                                    First Name</th>
                                                <th style="vertical-align: middle">
                                                    Last Name</th>
                                                <th style="vertical-align: middle">
                                                    Email Address</th>
                                                <th style="vertical-align: middle">
                                                    Gender</th>
                                                <th style="vertical-align: middle">
                                                    State</th>
                                                <th style="vertical-align: middle">
                                                    Country</th>
                                                <th style="vertical-align: middle">
                                                    Date OF Birth</th>
                                                <th style="vertical-align: middle">
                                                    Status</th>
                                                <th style="vertical-align: middle">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($admin as $admin)
                                            <tr>
                                                <td>{{ $admin->first_name }}</td>
                                                <td>{{ $admin->last_name }}</td>
                                                <td>{{ $admin->email}}</td>
                                                <td>{{ $admin->gender }}</td>
                                                <td>{{ $admin->state}}</td>
                                                <td>{{ $admin->country}}</td>
                                                <td>{{ $admin->dob}}</td>
                                                <td>
                                                   @if ($admin->status == "1")
                                                   Active
                                                   @else
                                                    Inactive
                                                    @endif
                                                </td>
                                                <td>
                                                <a href="{{ route('admin.update', $admin->id) }}">
                                                    <button class="btn btn-primary">Restore</button>
                                                </a>
                                                <a href="">
                                                    <button class="btn btn-danger">Delete</button>
                                                </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                        <tfoot>
                                            <tr class="bold">
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email Address</th>
                                                <th>Gender</th>
                                                <th>State</th>
                                                <th>Country</th>
                                                <th>Date OF Birth</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
            </div>

          @endsection
