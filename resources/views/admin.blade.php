@extends('layout/layout_admin')

@section('title', 'Adminstrator')

@section('content')

<main id="main">
    <!-- ======= Whu Us Section ======= -->
    <section id="menu" class="why-us mt-5">
        <div class="container">
            <br><br>
            <a href="{{route('form_tambah')}}" class="btn btn-lg btn-warning">Tambah data</a>

            @if (session('pesan'))
            <div class="alert alert-success">
                {{session('pesan')}}
            </div>
            @endif

            <div class="section-title">
                <h2>Kelola <span>Menu Makanan</span></h2>
            </div>
            <div class="row">
                @foreach($makanan as $menu)
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box">
                        <span>{{$menu->nama_makanan}}</span>
                        <h4>Rp {{number_format($menu->harga, 2, ',', '.')}}</h4>
                        <p>{{$menu->keterangan}}</p><br>
                        <p>
                            <a href="makanan/{{$menu->id}}/edit" class="btn btn-sm btn-info">Edit</a>

                        <form action="/makanan/{{$menu->id}}" method="POST" class="my-2">
                            @method('delete')
                            @csrf
                            <button onclick="confirm('Apakah anda yakin ingin menghapus menu ini?')" type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>

                        </p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Whu Us Section -->
</main>

@endsection