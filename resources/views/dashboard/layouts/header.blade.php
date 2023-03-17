<header id="header" class="header d-flex align-items-center fixed-top bg-white">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>BeritaGenZ</h1>
        </a>

        <nav id="navbar" class="navbar">
            @auth
                <ul>
                    <li class="nav-item" align="center">
                        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }} " href="/dashboard">
                            <span class="menu-title ">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item" align="center">
                        <a class=" nav-link {{ Request::is('dash/posts') ? 'active' : '' }}" href="/dash/posts">
                            <span class="menu-title ">My Post</span>
                        </a>
                    </li>

                    <li class="nav-item" align="center">
                        <a class="nav-link" href="/posts">
                            <span class="menu-title">Blog</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if ($user->image)
                                <img src="{{ asset('storage/' . $user->image) }}" alt="profil" class="img-fluid"
                                    height="20px" width="30px" style="border-radius:60%;">
                            @else
                                <img src="https://source.unsplash.com/500x400?user" class="img-fluid " alt="profil"
                                    height="20px" width="30px" style="border-radius:60%;">
                            @endif
                        </a>
                        <ul class="dropdown-menu position-right">
                            <li> <a class="nav-link {{ Request::is('dashboard/profil') ? 'active' : '' }} " href="/profil">
                                    <span class="menu-title ">Profil</span>
                                </a> </li>
                            <li> <a class="nav-link"href="/ubahpassword/edit">Ubah Password</a> </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="nav-link">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <strong>Logout</strong></button>
                                    </form>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- .navbar -->


            <div class="position-relative">

                <i class="bi bi-list mobile-nav-toggle"></i>

            </div>
        @else
            <!-- Kalau belom login -->
            <li class="nav-item">
                <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }}"><i
                        class="bi bi-box-arrow-in-right"></i> Login</a>

            </li>

            </ul>
            <!--end-->
        @endauth

    </div>

</header><!-- End Header -->
