<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <link href="{{ asset('public/admin/css/coreui-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/simple-line-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/pace.min.css') }}" rel="stylesheet">
</head>
<body class="app flex-row align-items-center">
    

    <div class="container" id="ui-view">
        @yield('content')
    </div>

    <script src="{{ asset('public/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/pace.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/coreui.min.js') }}"></script>
    <script>
        $('#ui-view').ajaxLoad();
        $(document).ajaxComplete(function() {
            Pace.restart()
        });
    </script>
</body>
</html>
