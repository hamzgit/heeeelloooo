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
                        <h2 class="pageheader-title">Users List</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Users
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
                        <h3 class="card-header">. Users</h3>
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
                                                Email Address</th>
                                            <th style="vertical-align: middle">
                                                Created Date</th>
                                            <th>
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key => $user)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    <a href="javascript:void(0)" style="font-size: 17px; padding: 5px;" data-id="{{ $user->id }}" class="delete">
                                                        <button class="btn btn-danger">Delete
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                    </tbody>
                                    @endforeach
                                    <tfoot>
                                        <tr class="bold">
                                            <th>S.NO</th>
                                            <th>Name</th>
                                            <th>Email Address</th>
                                            <th>Created Date</th>
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

    @push('footer-script')

    <script>

     $('.delete').on('click', function () {

         if(confirm('Are You Remove This User.')) {

             let id = $(this).data('id');
             $.ajax({

                 url:'{{ route("admin.user.delete") }}',
                 method = 'post' ,
                 data: {

                     _token: "{{ csrf_token() }}",
                     'id':id
                 },
                 success: function(data) {

                     location.reload();
                 }

             });
         }

     });

    </script>

    @endpush
