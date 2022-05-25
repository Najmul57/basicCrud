<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Site Title Here</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/meanmenu.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animated-title.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/default.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header start -->
    <header>
        <div class="header-area header-absulate header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                        <div class="logo">
                            <a href="#">
                                <h2>kerri</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="main-menu ">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="active"><a href="index.html">home</a></li>
                                    <li><a href="#about">about</a></li>
                                    <li><a href="#service">service</a></li>
                                    <li><a href="#client">client</a></li>
                                    <li><a href="#portfolio">portfolio</a></li>
                                    <li><a href="#blog">blog</a></li>
                                    <li><a href="#contact">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->


    <!-- .banner start -->
    @include('components.banner')
    <!-- banner end -->

    <!-- about start -->
    @include('components.about')
    <!-- about end -->

    <!-- service start -->
    {{-- @include('components.service') --}}
    <x-service />
    <!-- service end -->

    <!-- cta start -->
    @include('components.cta')
    <!-- cta end -->

    <!-- client start -->
    @include('components.client')
    <!-- client end -->

    <!-- work start -->
    @include('components.work')
    <!-- work end -->

    <!-- blog start -->
    @include('components.blog')
    <!-- blog end -->

    <!-- contact start -->
    @include('components.contact')
    <!-- contact end -->
    <footer>
        <div class="footer-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="about-icon footer-icon text-center">
                            <a href="#"> <i class="fab fa-facebook-f"></i></a>
                            <a href="#"> <i class="fab fa-dribbble"></i></a>
                            <a href="#"> <i class="fab fa-linkedin"></i></a>
                            <a href="#"> <i class="fab fa-skype"></i></a>
                        </div>
                        <div class="copyright text-center pt-20">
                            &copy; Copyright | Kerri 2019 All Right Reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS here -->
    <script src="{{ asset('frontend') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/js/one-page-nav-min.js"></script>
    <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.meanmenu.min.js"></script>
    <script src="{{ asset('frontend') }}/js/ajax-form.js"></script>
    <script src="{{ asset('frontend') }}/js/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('frontend') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/animated-main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/typer.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins.js"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>
</body>

</html>
