<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Diskominfo Ogan Ilir</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/img/logooi.png') }}" rel="icon">
    <link href="{{ asset('frontend/img/apple-touch-icon.png" rel="apple-touch-icon') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Mobile Menu ======= -->
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <!-- ======= Header ======= -->
    @include('layouts.frontend.header')

    <!-- ======= Hero Section ======= -->
    @yield('hero')
    <!-- End Hero -->

    <main id="main">
        @yield('main')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h3>{{ $sejarah->judul }}</h3>
                    <p>
                        <p class="mb-4">{!! Str::limit($sejarah->konten, 500, '...') !!}</p>
                    </p>
                    <p class="social">
                        <a href="#"><span class="icofont-twitter"></span></a>
                        <a href="#"><span class="icofont-facebook"></span></a>
                        <a href="#"><span class="icofont-dribbble"></span></a>
                        <a href="#"><span class="icofont-behance"></span></a>
                    </p>
                </div>
                <div class="col-md-7 ml-auto">
                    <div class="row site-section pt-0">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Navigation</h3>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('agenda') }}">Agenda</a></li>
                                <li><a href="{{ route('galeri') }}">Galeri</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('kontakfront.index') }}">Kontak</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Profil</h3>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
                                <li><a href="{{ route('visimisi') }}">Visi dan Misi</a></li>
                                <li><a href="{{ route('sambutan') }}">Sambutan kepala Dinas</a></li>
                                <li><a href="{{ route('struktur') }}">Struktur</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Agenda</h3>
                            <ul class="list-unstyled">
                                @foreach ($agenda as $a)
                                <li><a href="#">{{ $a->nama_kegiatan }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col-md-7">
                    <p class="copyright">&copy; Copyright SoftLand. All Rights Reserved</p>
                    <div class="credits">
                        Developer by <a href="https://github.com/ronaldi-putra">Ronaldi Putra</a>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/jquery-sticky/jquery.sticky.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>