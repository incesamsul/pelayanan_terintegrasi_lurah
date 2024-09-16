<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Pelayanan terintegrasi lurah</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('landing-page/main/') }}/assets/images/favicon.png" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing-page/main/') }}/assets/css/animate.css">

    <!--====== lineicons CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing-page/main/') }}/assets/css/lineicons.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing-page/main/') }}/assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing-page/main/') }}/assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing-page/main/') }}/assets/css/style.css">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <!-- <img src="{{ asset('landing-page/main/') }}/assets/images/logo.png" alt="Logo"> -->
                                 <strong>Pelayanan terintegrasi lurah</strong>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#">Cara kerja</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#download">Download</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="header-hero bg_cover d-lg-flex align-items-center">

            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
            <div class="shape shape-5"></div>
            <div class="shape shape-6"></div>

            <div class="container">
                <div class="row align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-10">
                        <div class="header-hero-content">
                            <h3 class="header-title wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.2s"><span>Pelayanan</span> Terintegrasi</h3>
                            <p class="text wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.6s">Pelayanan terintegrasi lurah adalah suatu sistem yang membantu masyarakat dalam mengurus berbagai kebutuhan sehari-hari dengan lebih mudah dan efisien.</p>
                            <ul class="d-flex">
                                <li><a href="{{ URL::to('/login') }}" rel="nofollow" class="main-btn wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.8s">Login</a></li>
                            </ul>
                        </div> <!-- header hero content -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-10">
                        <div class="header-image">
                            <img src="{{ asset('img/hero1.svg') }}" alt="app" class="image wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                            <div class="image-shape wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
                                <!-- <img src="{{ asset('landing-page/main/') }}/assets/images/image-shape.svg" alt="shape"> -->
                            </div>
                        </div> <!-- header image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-shape-1"></div> <!-- header shape -->
            <div class="header-shape-2">
                <!-- <img src="{{ asset('landing-page/main/') }}/assets/images/header-shape-2" alt="shape"> -->
            </div> <!-- header shape -->
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="about" class="services-area pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center pb-25">
                        <h3 class="title">Cara Kerja </h3>
                        <p class="text">Cara kerja pelayanan terintegrasi lurah.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services services-color-1 text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <i class="lni lni-upload"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Upload Berkas</a></h4>
                            <p class="text">Upload berkas yang sesuai dengan syarat dan ketentuan.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services services-color-2 text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.4s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <i class="lni lni-timer"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Menunggu Konfirmasi</a></h4>
                            <p class="text">Menunggu konfirmasi dari petugas.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services services-color-3 text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.6s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <i class="lni lni-checkmark-circle"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Terkonfirmasi</a></h4>
                            <p class="text">Berkas telah dikonfirmasi oleh petugas.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services services-color-4 text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <i class="lni lni-checkmark"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Selesai</a></h4>
                            <p class="text">Berkas telah selesai di proses.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>



    <!--====== SERVICES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-70 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mt-50 wow fadeInLeftBig " data-wow-duration="1.3s" data-wow-delay="0.5s">
                        {{-- <div class="about-shape"></div> --}}
                        <img class="app" src="{{ asset('img/hero2.svg') }}" alt="app">
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <h3 class="title">Tentang</h3>
                            <p class="text">Aplikasi Pelayanan Terintegrasi Lurah ini dibuat untuk memudahkan masyarakat dalam mengurus berbagai macam keperluan administratif di wilayah Kecamatan Selayar, Kabupaten Lingga. Dengan menggunakan teknologi informasi, maka diharapkan proses pengurusan administratif dapat berjalan lebih cepat dan efisien.</p>
                        </div> <!-- section title -->
                        <a href="{{ URL::to('/login') }}" rel="nofollow" class="main-btn">Lebih lanjut</a>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->


    <!--====== DOWNLOAD PART START ======-->

    {{-- <section id="download" class="download-area pt-70 pb-40">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-9">
                    <div class="download-image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <img class="image" src="{{ asset('landing-page/main/') }}/assets/images/list.png" alt="download">

                        <div class="download-shape-1"></div>
                        <div class="download-shape-2">
                            <img class="svg" src="{{ asset('landing-page/main/') }}/assets/images/download-shape.svg" alt="shape">
                        </div>
                    </div> <!-- download image -->
                </div>
                <div class="col-lg-6">
                    <div class="download-content mt-45 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <h3 class="download-title">Download and mulai gunakan!</h3>
                        <p class="text">Kami juga menyediakan mobile app yang dapat anda download melalui tombol dibawah ini. Dengan menggunakan mobile app, anda dapat dengan mudah mengakses platform kami dan mengatur titipan anda dari mana saja dan kapan saja.</p>
                        <ul>
                            <li><a class="app-store" href="#"><img src="{{ asset('landing-page/main/') }}/assets/images/app-store.png" alt="store"></a></li>
                            <li><a class="play-store" href="#"><img src="{{ asset('landing-page/main/') }}/assets/images/play-store.png" alt="store"></a></li>
                        </ul>
                    </div> <!-- download image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section> --}}

    <!--====== DOWNLOAD PART ENDS ======-->

    <!--====== PART START ======-->

    <footer id="footer" class="footer-area">

        <div class="footer-shape shape-1"></div>
        <div class="footer-shape shape-2"></div>
        <div class="footer-shape shape-3"></div>
        <div class="footer-shape shape-4"></div>
        <div class="footer-shape shape-5"></div>
        <div class="footer-shape shape-6"></div>
        <div class="footer-shape shape-7"></div>
        <div class="footer-shape shape-8">
            <img class="svg" src="{{ asset('landing-page/main/') }}/assets/images/footer-shape.svg" alt="Shape">
        </div>

        <div class="footer-widget pt-30 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                            <a class="logo" href="#" >
                                <!-- <img src="{{ asset('landing-page/main/') }}/assets/images/logo.png" alt="Logo"> -->
                                 <strong>Pelayanan terintegrasi lurah</strong>
                            </a>
                            <p class="text">-.</p>
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="footer-link d-flex flex-wrap">
                            <div class="footer-link-wrapper mt-45 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="title">Quick Links</h4>
                                </div>
                                <ul class="link">
                                    <li><a class="" href="#">beranda</a></li>
                                    <li><a class="" href="#">tentang</a></li>
                                    <li><a class="" href="#">Fitur unggulan</a></li>
                                    <li><a class="" href="#">harga</a></li>
                                    <li><a class="" href="#">kontak</a></li>
                                </ul>
                            </div> <!-- footer link wrapper -->

                            <div class="footer-link-wrapper mt-45 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title">Support</h4>
                                </div>
                                <ul class="link">
                                    <li><a class="" href="#">FAQ</a></li>
                                    <li><a class="" href="#">Privacy Policy</a></li>
                                    <li><a class="" href="#">Terms Of Use</a></li>
                                    <li><a class="" href="#">Legal</a></li>
                                    <li><a class="" href="#">Site Map</a></li>
                                </ul>
                            </div> <!-- footer link wrapper -->
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact mt-45 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Quick Link</h4>
                            </div>
                            <ul class="contact-list">
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><i class="lni lni-phone"></i> +809272561823</p>
                                        </div>
                                    </div> <!-- contact info -->
                                </li>
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><a href="#"><i class="lni lni-envelope"></i> info@admin.com</a></p>
                                        </div>
                                    </div> <!-- contact info -->
                                </li>
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><a href="#"><i class="lni lni-world"></i> www.Pelayanan terintegrasi lurah.com</a></p>
                                        </div>
                                    </div> <!-- contact info -->
                                </li>
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><i class="lni lni-map"></i> Jl. di makassar indonesia.</p>
                                        </div>
                                    </div> <!-- contact info -->
                                </li>
                            </ul> <!-- contact list -->
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->

        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-text text-center">
                                <p class="text">Made with <i class="lni lni-heart-filled"></i> by somebody</p>
                            </div> <!-- copyright text -->

                            <div class="copyright-privacy text-center">
                                <a href="#">Report Issues</a>
                            </div> <!-- copyright privacy -->
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->





    <!--====== Jquery js ======-->
    <script src="{{ asset('landing-page/main/') }}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('landing-page/main/') }}/assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('landing-page/main/') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('landing-page/main/') }}/assets/js/bootstrap.min.js"></script>


    <!--====== WOW js ======-->
    <script src="{{ asset('landing-page/main/') }}/assets/js/wow.min.js"></script>


    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('landing-page/main/') }}/assets/js/jquery.easing.min.js"></script>
    <script src="{{ asset('landing-page/main/') }}/assets/js/scrolling-nav.js"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('landing-page/main/') }}/assets/js/main.js"></script>

</body>

</html>
