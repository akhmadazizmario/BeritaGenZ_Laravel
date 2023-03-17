@extends('dashboard.layouts.main')

@section('container')
    <!------ content pertama --------->
    <section id="hero-slider" class="hero-slider" style="background-color: #fff">
        <div class="banner">
            <div class="container">
                <h1 class="font-weight-semibold">Welcome Back <strong
                        class="text-primary">{{ auth()->user()->name }}</strong><br>
                    To My Dashboard</h1>
                <h6 class="font-weight-normal text-muted pb-3">
                    website portal berita terkini, yang menyajikan berita menarik dan terupdate mengenai programming,
                    komputer, pendidikan, dll.</h6>
                <div>
                    <a href="/dashboard/posts/create" class="btn btn-info text-white mb-3" style="background-color: blue"><i
                            class="bi bi-plus-square-dotted"></i> Buat Postingan sekarang</a>
                </div>
                <img src="/img/Group171.svg" alt="aziz" class="img-fluid"></a>

            </div>
        </div>
    </section>
    <!--------------------->

    <!------ Jam --------->
    <section id="hero-slider" class="hero-slider" style="background-color: #fff">
        <div class="container">
            <div class="content-header" style="text-align: center;">
                <h2><?php
                date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
                echo date('G:i') . ' WIB - '; // menampilkan jam sekarang
                ?>
                    <script>
                        var h = (new Date()).getHours();
                        var m = (new Date()).getMinutes();
                        var s = (new Date()).getSeconds();
                        if (h >= 4 && h < 10) document.writeln("Selamat pagi 👋");
                        if (h >= 10 && h < 15) document.writeln("Selamat siang 👋");
                        if (h >= 15 && h < 18) document.writeln("Selamat sore 👋");
                        if (h >= 18 || h < 4) document.writeln("Selamat malam 👋");
                    </script>
                </h2>
                <h6 class="section-subtitle text-muted">Buatlah artikel anda semenarik mungkin dan harus sesuai dengan fakta
                    yang ada.</h6>
            </div><br>
        </div>
    </section>
    <!------------------>
@endsection
