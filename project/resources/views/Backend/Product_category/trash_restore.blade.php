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
                            <h2 class="pageheader-title">Category Manager</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Category</li>
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
                            <h3 class="card-header">. Categories Table</h3>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr class="bold">
                                            <th style="vertical-align: middle">
                                            S.NO</th>
                                            <th style="vertical-align: middle">
                                             Name</th>
                                            <th style="vertical-align: middle">
                                             Parent Category Name</th>
                                            <th style="vertical-align: middle">
                                            Created Date</th>
                                            <th style="vertical-align: middle; padding-left: 35px">
                                            Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $key=> $categories)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $categories->name  }}</td>
                                                <td>
                                                    @if ($categories->category_id)
                                                    {{ $categories->parentID->name }}
                                                    @else

                                                    No Parent Category

                                                    @endif
                                                </td>
                                                <td>{{ $categories->created_at }}</td>
                                                <td>
                                                <a href="{{ route('restore.category', $categories->id) }}">
                                                    <button class="btn btn-primary">Restore

                                                    </button>
                                                </a>

                                                    &nbsp;

                                                <a href="{{ route('category.force.delete',    $categories->id) }}">
                                                    <button class="btn btn-danger">Delete
                                                    </button>
                                                </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                        <tfoot>
                                            <tr class="bold">
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Parent ID</th>
                                                <th> Created Date</th>
                                                <th style="padding-left: 35px"> Action</th>
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

