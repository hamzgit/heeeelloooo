@extends('Frontend.layouts.main')
@section('main-container')
    <style>
        body {

            background-color: ;
        }


        .card {

            width: 400px;
            border: none;

        }




        .btr {

            border-top-right-radius: 5px !important;
        }


        .btl {

            border-top-left-radius: 5px !important;
        }

        .btn-dark {
            color: #fff;
            background-color: orange;
            border-color: orange;
        }


        .btn-dark:hover {
            color: #fff;
            background-color: orange;
            border-color: orange;
        }


        .nav-pills {

            display: table !important;
            width: 100%;
        }

        .nav-pills .nav-link {
            border-radius: 0px;
            border-bottom: 1px solid;

        }

        .nav-item {
            display: table-cell;
            background: ;
        }


        .form {

            padding: 10px;
            height: 300px;
        }

        .form input {

            margin-bottom: 12px;
            border-radius: 3px;
        }


        .form input:focus {

            box-shadow: none;
        }


        .form button {

            margin-top: 20px;
        }
    </style>

    <div class="d-flex justify-content-center align-items-center mt-5">

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('user.login.check') }}">
            @csrf
            <div class="card">
                <h2 style="text-align: center;margin-top: 20px"> Login Form</h2>
                <br>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="form px-4 pt-5">


                            <input type="text" name="email" class="form-control" placeholder="Email or Phone">

                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <button class="btn btn-dark btn-block">Login</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

    {{-- Singup ? --}}

    <div class="d-flex justify-content-center align-items-center mt-5">

        <form method="POST" action="{{ route('user.store') }}">
            @csrf
            <div class="card">
                <h2 style="text-align: center;margin-top: 20px"> SingUp Form?</h2>
                <br>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="form px-4 pt-5">


                            <input type="text" name="fname" class="form-control" placeholder="first name" required>

                            <input type="text" name="lname" class="form-control" placeholder="last name"required>

                            <input type="email" name="email" class="form-control" placeholder="Email"required>

                            <input type="password" name="password" class="form-control" placeholder="password"required>

                            {{-- <input type="text" name="email" class="form-control" placeholder="Email or Phone"> --}}

                            <button class="btn btn-dark btn-block">Singup</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <br><br>

@endsection
