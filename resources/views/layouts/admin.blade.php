<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <title>Admin</title>
    {{-- <link href="{{ asset('public/admin/img/brand/shopedia_logo_light.png') }}" rel="icon"/> --}}

  <!-- UNTUK ME-LOAD ASSET DARI PUBLIC, KITA GUNAKAN HELPER ASSET() -->
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
	<link href="{{ asset('public/admin/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/admin/css/simple-line-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('public/admin/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
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
    
    <script src="{{ asset('public/admin/js/jquery.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
    <script src="{{ asset('public/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/pace.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/coreui.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/custom-tooltips.min.js') }}"></script>
    @yield('js')
</body>
</html>