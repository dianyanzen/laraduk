<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="DianYanzen" />
    <meta name="description" content="Disduk Capil Kota Bandung">
    <title>@yield('title')</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/responsive.css') }}" rel="stylesheet"> </head>
    <link href="{{ URL::asset('assets/css/box-animation.css') }}" rel="stylesheet"> </head>
<style>
  
</style>
<body>
    <div id="wrapper">
        @include('_layout.header')

        @yield('content')
        @include('_layout.footer')
    </div>


    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>

    <script src="{{ URL::asset('assets/cdn-cgi/scripts/0e574bed/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery.js')}}"></script>
    <script src="{{ URL::asset('assets/js/plugins.js')}}"></script>

    <script src="{{ URL::asset('assets/js/functions.js')}}"></script>
    <!-- Js For Scroll To Content  -->
    <script>
    function gotocontent() {
        $('html, body').animate({
            scrollTop: $("#page-content").offset().top
        }, 1500);
    }
    function gotolink() {
        $('html, body').animate({
            scrollTop: $("#link_terkait").offset().top
        }, 1500);
    }
    </script>
</body>

</html>