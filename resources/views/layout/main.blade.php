<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BeritaGenZ- Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/img/Untitled.png" rel="icon">
    <link href="/img/Untitled.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="/assets/css/variables.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: ZenBlog - v1.2.1
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @include('partials.navbar')
    <!---memanggil navbar yang ada di folder partials-->
    <main id="main">
        @yield('container')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">

                <div class="row g-5">
                    <div class="col-lg-4">
                        <h3 class="footer-heading">Tentang BeritaGenZ</h3>
                        <p>Platform aplikasi web BeritaGenZ adalah platform berita untuk semua orang agar bisa
                            mengeksplor
                            berita-berita yang benar dan menarik, dan platform BeritaGenZ ini bisa digunakan untuk semua
                            orang bisa upload
                            di platform ini.
                        </p>
                    </div>
                    <div class="col-6 col-lg-2">
                        <h3 class="footer-heading">Navigation</h3>
                        <ul class="footer-links list-unstyled">
                            <li><a href="/posts"><i class="bi bi-chevron-right"></i> Home</a></li>
                            <li><a href="/posts"><i class="bi bi-chevron-right"></i> Blog</a></li>
                            <li><a href="/categories"><i class="bi bi-chevron-right"></i> Category</a></li>
                            <li><a href="/about"><i class="bi bi-chevron-right"></i> Tentang Kami</a></li>
                        </ul>
                    </div>


                    <div class="col-lg-4">
                        <h3 class="footer-heading">Logo</h3>

                        <ul class="footer-links footer-blog-entry list-unstyled">
                            <img src="/img/Untitled.png" alt="">
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div class="footer-legal">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <div class="copyright">
                            <strong><span>copyrig@
                                    <script type="text/javascript">
                                        var creditsyear = new Date();
                                        document.write(creditsyear.getFullYear());
                                    </script>
                                </span></strong>. All Rights Reserved</span></strong>
                        </div>

                    </div>


                </div>

            </div>
        </div>

    </footer>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>


</body>

</html>
