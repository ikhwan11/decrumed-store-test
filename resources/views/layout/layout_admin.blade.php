<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{url('')}}/img/favicon.png" rel="icon">
    <link href="{{url('')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('')}}/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{url('')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{url('')}}/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{url('')}}/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{url('')}}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('')}}/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Delicious - v2.2.1
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="/"><span>Ikhwan Kitchen</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="{{route('admin')}}">Kelola Menu Makanan</a></li>
                    <li><a href="#">Kelola Pesanan</a></li>

                    <li class="book-a-table text-center"><a onclick="confirm('Apakah anda ingin Logout?')" href="{{route('logout')}}">{{$LoggedUserInfo->nama}} || Logout</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    @yield('content')


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{url('')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{url('')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{url('')}}/vendor/php-email-form/validate.js"></script>
    <script src="{{url('')}}/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="{{url('')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{url('')}}/vendor/venobox/venobox.min.js"></script>
    <script src="{{url('')}}/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{url('')}}/js/main.js"></script>

</body>

</html>