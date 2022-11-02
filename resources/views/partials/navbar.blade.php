<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>BeritaGenZ</h1>
        </a>


        <nav id="navbar" class="navbar">
            <ul>

                <li> <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Blog</a></li>
                <li><a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Category</a>
                </li>
                <li><a class="nav-link {{ $active === 'about' ? 'active' : '' }} " href="/about">Tentang Kami</a></li>
                @auth
                    <li><a href="/dashboard" class="nav-link"><strong>MyDashboard</strong>
                    </li>
                @else
                    <li>
                        <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }}"><strong>
                                Login</strong> <i class="bi bi-box-arrow-in-right"></i></a>

                    </li>
                @endauth

            </ul>
        </nav><!-- .navbar -->


        <div class="position-relative">


            <i class="bi bi-list mobile-nav-toggle"></i>


        </div>




    </div>


</header><!-- End Header -->
