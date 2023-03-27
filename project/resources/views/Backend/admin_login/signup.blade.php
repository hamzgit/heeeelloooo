<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('Backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ url('Backend/assets/vendor/fonts/circular-std/style.css" rel="stylesheet') }}">
    <link rel="stylesheet" href="{{ url('Backend/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('Backend/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ url('Backend/assets/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ url('Backend/assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet"
        href="{{ url('Backend/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('Backend/assets/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ url('Backend/assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    <title>forgot password</title>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <br><br><br>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container">
        <div class="card" >
            <div class="card-header">
                <h3 class="mb-1" style="font-size: 30px"><b>SignUP Your Account<b></h3>
                     <p>Enter a admin Information here</p>
            </div>
            <div class="card-body" >
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nick" required="" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" type="password" required="" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required="" placeholder="Confirm">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-muted" style="font-size: 19px">forgot</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>
                </div>
                <div class="form-group">

                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Already member?
                    <a href="#" class="text-secondary">
                        Login Here.</a>
                </p>
            </div>
        </div>
    </form>
</body>


</html>
