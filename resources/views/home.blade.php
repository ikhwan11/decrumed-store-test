@extends('layout/main')

@section('title', 'Home')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="{{url('')}}/img/slide/slide-1.jpg" alt="">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown"><span>Ikhwan</span> Kitchen Batam</h2>
                            <p class="animate__animated animate__fadeInUp">restoran berkualitas dengan rasa international kini hadir di sekitarmu</p>
                            <div>
                                <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Menu Kami</a>
                                <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="carousel-background"><img src="{{url('')}}/img/slide/slide-2.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Bisa order secara online</h2>
                            <p class="animate__animated animate__fadeInUp">ikhwan kitchen kini bisa di pesan secara online tidak perlu repot-repot datang ke tempat </p>
                            <div>
                                <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Menu Kami</a>
                                <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">

            <div class="row">

                <div class="content">
                    <h3>Sekilas tentang <strong>Ikhwan Kitchen Batam</strong></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    </p>
                    <p class="font-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>



            </div>

        </div>
    </section><!-- End About Section -->


    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container">

            <div class="section-title">
                <h2>Check our tasty <span>Menu</span></h2>
            </div>

            <div class="row menu-container">
                @foreach($makanan as $menu)
                <div class="col-lg-6 menu-item">
                    <div class="menu-content">
                        <a href="/makanan/{{$menu->id}}" title="klik untuk detail">{{$menu->nama_makanan}}</a><span>Rp {{number_format($menu->harga, 2, ',', '.')}}</span>
                    </div>
                    <p>
                        <a href="" class="badge bg-warning text-white">Pesan makanan</a>
                    </p>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Menu Section -->



    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container-fluid">

            <div class="section-title">
                <h2>Some photos from <span>Our Restaurant</span></h2>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
            </div>

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{url('')}}/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                            <img src="{{url('')}}/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{url('')}}/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                            <img src="{{url('')}}/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{url('')}}/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                            <img src="{{url('')}}/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{url('')}}/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                            <img src="{{url('')}}/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{url('')}}/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                            <img src="{{url('')}}/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{url('')}}/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                            <img src="{{url('')}}/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{url('')}}/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                            <img src="{{url('')}}/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{url('')}}/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                            <img src="{{url('')}}/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Gallery Section -->
</main><!-- End #main -->

@endsection