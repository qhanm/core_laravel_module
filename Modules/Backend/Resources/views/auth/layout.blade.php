<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login | QHN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">

    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
{{--    <link rel="shortcut icon" href="{{ Module::asset('backend::images/favicon.ico') }}">--}}
    <!-- Bootstrap Css -->
    <link href="{{ Module::asset('backend:css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ Module::asset('backend:css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ Module::asset('backend:css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">

    @yield('head-script')
</head>

<body>
<div class="home-btn d-none d-sm-block">
    <div class="d-flex">
        <div class="dropdown d-inline-block">

        </div>

    </div>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    @yield('content')
                </div>
                <div class="mt-5 text-center">
                    <div>
                        <p>Don't have an account ? <a href="auth-register.html" class="font-weight-medium text-primary"> Signup now </a> </p>
                        <p>© 2020 Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->

<script src="{{ Module::asset('backend:libs/jquery/jquery.min.js') }}"></script>
<script src="{{ Module::asset('backend:js/jquery.pjax.js') }}"></script>
<script src="{{ Module::asset('backend:libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ Module::asset('backend:libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ Module::asset('backend:libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ Module::asset('backend:libs/node-waves/waves.min.js') }}"></script>


<!-- App js -->
<script>
    $(document).ready(function(){
        // does current browser support PJAX
        if ($.support.pjax) {
            $.pjax.defaults.timeout = 1200; // time in milliseconds
        }

    })
</script>

@yield('scripts')
</body>
</html>
