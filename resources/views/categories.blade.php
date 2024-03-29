<!---===============================================================-->
<!--                                                                -->
<!--HALAMAN CATEGORY INI BERFUNGSI UNTUK MENAMPILKAN SEMUA CATEGORY--->
<!--                                                               --->
<!---===============================================================-->
@extends('layout.main')
<!--memanghubungkan halaman di layout-->
@section('container')
    <!--memanghubungkan halaman main.blade atau folder utama-->
    <section id="hero-slider" class="hero-slider">
        <div class="container">
            <h1>posts categories</h1><br>

            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4">
                        <a href="/posts?category={{ $category->slug }}">
                            <div class="card text-bg-dark">
                                <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                                    alt="{{ $category->name }}">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center flex-fill p-4 fs-3"
                                        style="background-color: rgba(0,0,0,0.7)">
                                        {{ $category->name }}
                                    </h5>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <br><br><br>
@endsection
