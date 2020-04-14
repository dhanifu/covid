<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="Covid-19">
	<meta name="author" content="Covid-19">
    <meta name="keyword" content="Covid-19">
    
    <title>Admin</title>
    {{-- <link href="{{ asset('admin/img/brand/shopedia_logo_light.png') }}" rel="icon"/> --}}

  <!-- UNTUK ME-LOAD ASSET DARI PUBLIC, KITA GUNAKAN HELPER ASSET() -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
	<link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/simple-line-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  
    
    @include('admin.partials.header')
  
    <div class="app-body" id="dw">
        <div class="sidebar">
          
            @include('admin.partials.sidebar')
          
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
      
      	<!-- BAGIAN INI AKAN DI-REPLACE SESUAI ISI YANG DIAPIT DARI @SECTION('CONTENT') -->
        @yield('content')
      
    </div>

    <footer class="app-footer">
        <div>
            <span>
                &copy; <script>document.write(new Date().getFullYear());</script>
                <a href="{{ route('admin') }}">COVID-19</a>
            </span>
        </div>
        <div class="ml-auto">
            <span>Powered by</span>
            Muhammad Ramdhani
        </div>
    </footer>
    
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/pace.min.js') }}"></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/js/coreui.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom-tooltips.min.js') }}"></script>
    @yield('js')
</body>
</html>