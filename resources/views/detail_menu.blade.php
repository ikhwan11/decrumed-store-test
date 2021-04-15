@extends('layout/main')

@section('title', 'Menu')

@section('content')

<main id="main">
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container">

            <div class="section-title">
                <br><br>
            </div>

            <div class="owl-carousel events-carousel">

                <div class="row event-item">
                    <div class="col-lg-6">
                        <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>{{$makanan->nama_makanan}}</h3>
                        <div class="price">
                            <p><span>Rp {{number_format($makanan->harga, 2, ',', '.')}}</span></p>
                        </div>
                        <!-- <p class="font-italic">
                            varian {{$makanan->nama_makanan}}
                        </p>
                        <ul>
                            <li><i class="icofont-check-circled"></i>{{$makanan->nama_makanan}} Ayam</li>
                            <li><i class="icofont-check-circled"></i>{{$makanan->nama_makanan}} Kambing</li>
                            <li><i class="icofont-check-circled"></i>{{$makanan->nama_makanan}} Sapi</li>
                            <li><i class="icofont-check-circled"></i>{{$makanan->nama_makanan}} Mawud</li>
                            <li><i class="icofont-check-circled"></i>{{$makanan->nama_makanan}} Korea</li> -->

                        </ul>
                        <p>
                            {{$makanan->keterangan}}
                        </p>
                        <p>
                            <a href="" class="btn btn-default btn-warning">Pesan</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Events Section -->
</main>

@endsection