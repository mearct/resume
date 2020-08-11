<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('frontend_assets/img/core-img/favicon.ico') }}">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/style.css') }}">

    @stack('css')

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <div class="vcard-main-wrapper">
        <div class="vcard-content-wrapper bg-img" @yield('background_img')>

            <!-- Contact Button -->
            <div class="horizontal-contact-btn">
                <a href="#" class="btn vcard-btn contact-btn"><i class="fa fa-envelope-o"></i><span>Available for freelance work</span></a>
            </div>

            <!-- Header Area -->
            <header class="header_area">
                @include('layouts.frontend_layouts.header')
            </header>

            <!-- Vcard Page Content -->
            <div class="vcard-page-content-wrapper d-flex align-items-end">
                <div class="page-content">

                    @yield('content')

                </div>
            </div>

        </div>
    </div>

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('frontend_assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('frontend_assets/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('frontend_assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('frontend_assets/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('frontend_assets/js/active.js') }}"></script>

    @stack('js')

</body>

</html>
