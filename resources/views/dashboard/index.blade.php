@extends('dashboard.layouts.main')

@section('container')
    <!-------- content pertama --------->
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

                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="/img/Group171.svg" alt="aziz" class="img-fluid"></a>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-bold">
                                        <?php
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
                                    </p>
                                    <h1 class="font-weight-semibold">Hello <strong
                                            class="text-primary">{{ auth()->user()->name }}</strong><br>
                                        Selamat Datang di MyDashboard</h1>
                                    <h6 class="font-weight-normal text-muted pb-3">
                                        website portal berita terkini, yang menyajikan berita menarik dan terupdate mengenai
                                        programming,
                                        komputer, pendidikan, dll.</h6>
                                    <div>
                                        <a href="/dash/posts/create" class="btn btn-info text-white mb-3"
                                            style="background-color: blue"><i class="bi bi-plus-square-dotted"></i> Buat
                                            Postingan
                                            sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--------------------->


                    <!------ statistik dan tanggal --------->
                    <section id="hero-slider" class="hero-slider" style="background-color: #fff">

                        <div class="container">
                            <div class="row justify-content-center mb-5">
                                <div class="col-md-6 mt-3">

                                    <div class="">

                                        <div class="mt-5 mb-3">
                                            <center>
                                                <canvas id="myChart" style="background-color: #f7f8fa"></canvas>
                                            </center>
                                        </div>
                                    </div>


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
                                <h6 class="section-subtitle text-muted">Buatlah artikel anda semenarik mungkin dan harus
                                    sesuai dengan fakta
                                    yang ada.</h6>
                            </div><br>
                        </div>
                    </section>
                    <!------------------>

                    <!------------>

                    <!------ Javascript chart  --------->
                    <script>
                        var ctx = document.getElementById("myChart").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ["januari", "februari", "maret", "april", "mei", "juni", "juli", "agustus", "september",
                                    "oktober", "november", "desember"
                                ],
                                datasets: [{
                                    label: 'Statistik Postingan Anda',
                                    backgroundColor: '#ADD8E6',
                                    borderColor: '#93C3D2',
                                    data: <?php echo json_encode($jumlah_posts); ?>,

                                }]
                            },
                            options: {
                                animation: {
                                    onProgress: function(animation) {
                                        progress.value = animation.animationObject.currentStep / animation.animationObject
                                            .numSteps;
                                    }
                                }
                            }
                        });
                    </script>
                @endsection
