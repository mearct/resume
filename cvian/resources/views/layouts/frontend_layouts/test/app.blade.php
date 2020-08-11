<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Vcard - Resume CV &amp; Vcard Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('frontend_assets/img/core-img/favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/style.css') }}">
</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        @include('backend.layouts.frontend_layouts.header')
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area bg-img clearfix" style="background-image: url(img/bg-img/bg1.jpg);" id="about">
        @include('frontend.hero')
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Me Area Start ##### -->
    <section class="about-me-area section-padding-100 clearfix" id="skills">
        @include('frontend.about')
    </section>
    <!-- ##### About Me Area End ##### -->

    <!-- ##### Skilss Area Start ##### -->
    <section class="skills-area clearfix">
        @include('frontend.skill')
    </section>
    <!-- ##### Skilss Area End ##### -->

    <!-- ##### Services Area Start ##### -->
    <section class="services-area section-padding-100-0 clearfix" id="services">
        @include('frontend.service')
    </section>
    <!-- ##### Services Area End ##### -->

    <!-- ##### Portfolio Area Start ##### -->
    <section class="portfolio-area section-padding-100 clearfix" id="portfolio">
        @include('frontend.portfolio')
    </section>
    <!-- ##### Portfolio Area End ##### -->

    <!-- ##### Cool Facts Area Start ##### -->
    <section class="cool-facts-area section-padding-100-0 clearfix wow fadeInUp" data-wow-delay="500ms">
        @include('frontend.coolfacts')
    </section>
    <!-- ##### Cool Facts Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <section class="testimonials-area section-padding-100">
        @include('frontend.testimonial')
    </section>
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <div class="contact-area" id="contact">
        @include('frontend.contact')
    </div>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Contact Information Area Start ##### -->
    <div class="contact-information wow fadeInUp" data-wow-delay="500ms">
        @include('frontend.contactinfo')
    </div>
    <!-- ##### Contact Information Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Copywrite -->
                <div class="col-12 text-center">
                    <p><a href="#">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

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
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="{{ asset('frontend_assets/js/google-map/map-active.js') }}"></script>
<link rel="stylesheet" href="{{ asset('frontend_assets/style.css') }}">
</body>

</html>
