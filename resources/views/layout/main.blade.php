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

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
        <div class="container text-right">
            <i class="icofont-phone"></i> 087676536677
            <i class="icofont-clock-time icofont-rotate-180"></i> Buka setiap hari: 11:00 AM - 23:00 PM
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="/"><span>Ikhwan Kitchen</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#about">Tentang kami</a></li>
                    <li><a href="#menu">Menu</a></li>

                    <li class="book-a-table text-center"><a href="#" data-toggle="modal" data-target="#myModal">Admin</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- Modal login-->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login Admin</h4>
                </div>
                <form method="post" action="{{route('auth.check')}}">
                    @csrf

                    <div class="results">
                        @if(Session::get('gagal'))
                        <div class="alert alert-danger">
                            {{Session::get('gagal')}}
                        </div>
                        @endif
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="text here.." name="username" autocomplete="off">
                            <span class="text-danger">@error('username') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="text here.." name="password">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default btn-warning">Login</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Delicious</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
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