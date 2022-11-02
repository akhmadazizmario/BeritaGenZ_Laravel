@extends('layout.main')
<!--memanghubungkan halaman di layout-->
@section('container')
    <!--memanghubungkan halaman main.blade atau folder utama-->
    <section id="hero-slider" class="hero-slider">
        <div class="container">
            <h1>Halaman Tentang Kami</h1>
            <hr>
            <h3>{{ $name }}</h3><br>
            <img src="/img/Untitled.png" alt="aziz" width="200"><br>
            <p> Aplikasi Web BeritaGenZ dibuat bertujuan memudahkan
                semua orang untuk bereksplor dan membuat <br>
                berita yang menarik minat buat pembaca. dan saya membuat website ini bersifat formal atau semuanya bisa <br>
                membuat akun dan membuat postingan di website BeritaGenZ ini.<br>
                <br>
                <br>
                <strong>Kata Motivasi :</strong>
            <p> Carilah ilmu sebanyak mungkin dan harus tetap semangat,<br>
                Karena kesuksesan itu pasti berawal dari kata semangat.<br>
                <strong>By.AzizMario</strong>
            </p>
            <strong>Take care dan selalu jaga kesehatan <i class="bi bi-emoji-wink"></i>.</strong>

            </p>
        </div>
    </section>
@endsection
