<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AdminLogin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('Backend/libs/../assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ url('Backend/libs/../assets/vendor/fonts/circular-std/style.css" rel="stylesheet') }}">
    <link rel="stylesheet" href="{{ url('Backend/libs/../assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('Backend/libs/../assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center" style="font-size: 40px; font-weight: bold">
                <a href="#">Exisso</a>
                <span class="splash-description">Admin Login Form
                </span>
            </div>
            <div class="card-body">
                <div class="error-box">

                    @if ($errors->any())
                        <span class="text-danger" style="font-size: 20px">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                    @endif
                    </span>
                </div>
                <br>

                <form action="{{ route('admin.makelogin') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="email" type="email" placeholder="Email"
                            required>
                        {{-- <span class="text-danger">
                        </span> --}}
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" type="password"
                            placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ url('Backend/libs/../assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('Backend/libs/../assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
