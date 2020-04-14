<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{ asset('assets/img/fav-icon.png') }}" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Covid Test</title>

        <!-- Icon css link -->
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/icofont.css') }}" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="{{ asset('assets/vendors/revolution/css/settings.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/revolution/css/layers.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/revolution/css/navigation.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/animate-css/animate.css') }}" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="{{ asset('assets/vendors/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/owl-carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="120">
       
       
       
       <!--================Header Area =================-->
        @include('partials.header')
        <!--================End Header Area =================-->
        
        @yield('content')
        
        <!--================Footer Area =================-->
        @include('partials.footer')
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('assets/js/jquery-2.2.4.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- Rev slider js -->
        <script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <!-- Extra Plugin -->
        <script src="{{ asset('assets/vendors/parallax/jquery.parallax-scroll.js') }}"></script>
        <script src="{{ asset('assets/vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/counterup/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/flexslider/flex-slider.js') }}"></script>
        <script src="{{ asset('assets/vendors/flexslider/mixitup.js') }}"></script>
        <script src="{{ asset('assets/vendors/swiper/js/swiper.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/flipster-slider/jquery.flipster.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/nice-selector/jquery.nice-select.min.js') }}"></script>
        
        <script src="{{ asset('assets/js/theme.js') }}"></script>
        @yield('js')
    </body>
</html>