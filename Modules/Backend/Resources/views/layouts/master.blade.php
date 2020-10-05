<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Starter Page | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ Module::asset('backend:images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ Module::asset('backend:libs/select2/css/select2.min.css') }}">

    <!-- Bootstrap Css -->
    <link href="{{ Module::asset('backend:css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ Module::asset('backend:css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ Module::asset('backend:libs/summernote/summernote-bs4.min.css') }}" rel="stylesheet" type="text/css">
@yield('styles')

<!-- App Css-->
    <link href="{{ Module::asset('backend:css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">

</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

@include('backend::layouts.header')

<!-- ========== Left Sidebar Start ========== -->
    <!-- Left Sidebar End -->
@include('backend::layouts.sidebar')
<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            @yield('content')

        </div>
        <!-- End Page-content -->

        @include('backend::layouts.footer')

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right bar overlay-->


<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{ Module::asset('backend:libs/jquery/jquery.min.js') }}"></script>
<script src="{{ Module::asset('backend:js/jquery.pjax.js') }}"></script>

<script src="{{ Module::asset('backend:libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ Module::asset('backend:libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ Module::asset('backend:libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ Module::asset('backend:libs/node-waves/waves.min.js') }}"></script>

<script src="{{ Module::asset('backend:libs/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ Module::asset('backend:js/pages/form-editor.init.js') }}"></script>
<script src="{{ Module::asset('backend:libs/select2/js/select2.min.js') }}"></script>
<script src="{{ Module::asset('backend:libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ Module::asset('backend:libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ Module::asset('backend:libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ Module::asset('backend:libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ Module::asset('backend:libs/@chenfengyuan/datepicker/datepicker.min.js') }}"></script>

<script src="{{ Module::asset('backend:js/pages/form-advanced.init.js') }}"></script>

<script src="{{ Module::asset('backend:js/app.js') }}"></script>
{{--<script src="{{ Module::asset('assets/Backend/js/app.js') }}"></script>--}}
<script>
    $(document).ready(function(){
        // does current browser support PJAX
        if ($.support.pjax) {
            $.pjax.defaults.timeout = 1000; // time in milliseconds
        }

    });
</script>
@yield('scripts')
</body>
</html>
