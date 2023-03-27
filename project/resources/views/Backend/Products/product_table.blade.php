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
                        <h2 class="pageheader-title">Products List</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Category
                                    </li>
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
                        <h3 class="card-header">. Products</h3>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead>
                                        <tr class="bold">
                                            <th style="vertical-align: middle">
                                                S.NO</th>
                                            <th style="vertical-align: middle">
                                                Product Name</th>
                                            <th style="vertical-align: middle">
                                                Category Name</th>
                                            <th style="vertical-align: middle">
                                                Price</th>
                                            <th style="vertical-align: middle">
                                                Image</th>
                                                <th >Extra Details</th>
                                            <th style="padding-left: 35px">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $key => $product)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>
                                                    @if ($product->category_id)
                                                        {{ $product->category->name }}
                                                    @endif
                                                </td>
                                                <td>{{ $product->price }}</td>
                                                <td><img style="height: 100px; width: 100px;"
                                                        src="{{ asset('uploads/' . $product->image) }}">
                                                </td>

                                                <td>
                                                    <button class="btn btn-light">
                                                        <a href="{{ route('product.extra.details', $product->id) }}">Add Details</a>
                                                    </button>
                                                </td>

                                            </td>
                                                <td>
                                                    <a href="{{ route('edit.product', $product->id) }}">
                                                        <button class="btn btn-primary">Edit
                                                        </button>
                                                    </a>
                                                    &nbsp;

                                                    <a href="{{ route('product.trash', $product->id) }}">
                                                        <button class="btn btn-danger">Trash
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                    </tbody>
                                    @endforeach
                                    <tfoot>
                                        <tr class="bold">
                                            <th>S.NO</th>
                                            <th>Product Name</th>
                                            <th>Category Name</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Extra Details</th>
                                            <th style="padding-left: 35px">
                                                Action</th>
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
