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
                                                Product Name</th>
                                            <th style="vertical-align: middle">
                                                User Name</th>
                                            <th style="vertical-align: middle">
                                                Quantity</th>
                                            <th style="vertical-align: middle">
                                                Total Amount</th>
                                            <th style="vertical-align: middle">
                                                Payment Status</th>
                                            <th style="vertical-align: middle">
                                                Booking Status</th>
                                            <th>
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($booking_product as $key=> $booking_product)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $booking_product->product->name }}</td>
                                                <td>{{ $booking_product->user->name }}</td>
                                                <td>{{ $booking_product->qty }}</td>
                                                <td>{{ $booking_product->qty *  $booking_product->product->price  }}</td>
                                                <td>{{ $booking_product->paymet_status }}</td>
                                                <td>
                                                    @php $book_status = $booking_product->booking_status; @endphp
                                                    <select class="book_status" data-id="{{  $booking_product->id }}">
                                                        <option value="0" @if ($book_status = '0') selected @endif >In Process</option>
                                                        <option value="1" @if ($book_status = '1') selected @endif >Order Cancel</option>
                                                        <option value="2" @if ($book_status = '2') selected @endif >Delivered</option>
                                                </td>
                                                <td>
                                                    <a href="javascript::void(0)" data-id="{{ $booking_product->id }}" class="delete">
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
                                            <th>Product Name</th>
                                            <th>User Name</th>
                                            <th>Quantity</th>
                                            <th>Total Amount</th>
                                            <th>Payment Status</th>
                                            <th>Booking Status</th>
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

         if(confirm('Are You Remove This Order.')) {

             let id = $(this).data('id');
             $.ajax({

                 url:'{{ route("booking.products.delete") }}',
                 method: 'post' ,
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


     $('.book_status').on('change',function() {

        var booking_status = $(this).val();
        var id = $(this).data('id');
        $.ajax({

            url:'{{ route("booking.products.status") }}',
            data:{

                'booking_status':booking_status,
                'id':id,
            }

        });
     });

    </script>

    @endpush
