@extends('layout/layout_admin')

@section('title', 'Adminstrator')

@section('content')

<main id="main">
    <br><br>
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table mt-5">
        <div class="container">

            <div class="section-title">
                <h2>Tambah <span>Menu</span></h2>
            </div>

            <form action="{{route('tambah')}}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" name="nama_makanan" class="form-control @error('nama_makanan') is-invalid @enderror" id="nama_makanan" placeholder="Nama Makanan" autofocus autocomplete="off" value="{{old('nama_makanan')}}">
                        <span class="text-danger">@error('nama_makanan') {{$message}} @enderror</span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="number" class="form-control  @error('harga') is-invalid @enderror" name="harga" id="harga" placeholder="Harga.." autocomplete="off" value="{{old('harga')}}">
                        <span class="text-danger">@error('harga') {{$message}} @enderror</span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="file" class="form-control" name="gambar" id="gambar" placeholder="Your Phone">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-lg-6 col-md-6 form-group">
                        <textarea class="form-control  @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" rows="5" placeholder="Keterangan">{{old('keterangan')}}</textarea>
                        <span class="text-danger">@error('keterangan') {{$message}} @enderror</span>
                    </div>
                </div>
                <div class="text-left"><button type="submit" class="btn btn-lg btn-warning">Simpan data</button></div>
            </form>

        </div>
    </section><!-- End Book A Table Section -->
</main>

@endsection