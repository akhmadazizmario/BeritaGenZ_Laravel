@extends('layout.main')

@section('container')
    <section id="hero-slider" class="hero-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <!----------------->
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <main class="form-signin w-100 m-auto">

                        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

                        <form action="/login" method="post">
                            @csrf
                            <div class="form-floating">
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                                <label for="email">Email address</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="password" required>
                                <label for="password">Password</label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                        </form><br>
                        <hr>
                        <h5 class="d-block text-center mt-3">Not registered ? <a href="/register"
                                class="text-white btn btn-success">Register Sekarang!</a></h5>
                    </main>
                </div>
            </div>
        </div>
    </section>
@endsection
