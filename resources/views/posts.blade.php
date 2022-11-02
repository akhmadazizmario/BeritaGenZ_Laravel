@extends('layout.main')
<!--memanghubungkan halaman di layout-->
@section('container')
    <section id="hero-slider" class="hero-slider">
        <div class="container">
            <!--memanghubungkan halaman main.blade atau folder utama-->
            <img src="/img/Untitled.png" alt="aziz" width="200" style="display: block;margin:auto;"><br>
            <h1 class="text-center mb-3">{{ $title }}</h1><br>

            <!-- MENU PENCARIAN & TITLE--->
            <div class="row justify-content-center mb-3">
                <div class="col-md-6">
                    <form action="/posts">
                        <!-- Fungsi judul di title --->
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('author'))
                            <input type="hidden" name="category" value="{{ request('author') }}">
                        @endif
                        <!-- end --->
                        <!---- Search ------->
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search" name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                        <!---- End ---->
                    </form>
                </div>
            </div>
            <!--- END MENU PENCARIAN--->


            @if ($posts->count())
                <div class="card mb-3">
                    @if ($posts[0]->image)
                        <div style="max-height: 400px; overflow:hidden;">
                            <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                                class="img-fluid">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                            alt="{{ $posts[0]->category->name }}">
                    @endif

                    <div class="card-body text-center">
                        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                                class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                        <p>
                            <small>
                                By. <a href="/posts?author={{ $posts[0]->author->username }}"
                                    class="text-decoration-none text-danger"><strong>{{ $posts[0]->author->name }}</strong></a>
                                in
                                <a href="/posts?category={{ $posts[0]->category->slug }}"
                                    class="text-decoration-none text-success"><strong>{{ $posts[0]->category->name }}</strong></a>
                                {{ $posts[0]->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $posts[0]->excerpt }}</p>


                        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read
                            More</a>

                    </div>
                </div>
        </div>


    </section>



    <section id="hero-slider" class="hero-slider">
        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7)"><a
                                    href="/posts?category={{ $post->category->slug }}"
                                    class="text-white text-decoration-none">
                                    {{ $post->category->name }}</a></div>

                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                    class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif

                            <div class=" card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>
                                    <small>
                                        By. <a href="/posts?author={{ $post->author->username }}"
                                            class="text-decoration-none text-danger"><strong>{{ $post->author->name }}</strong></a>
                                        in
                                        <a href="/posts?category={{ $post->category->slug }}"
                                            class="text-decoration-none text-success"><strong>{{ $post->category->name }}</strong></a>
                                        {{ $posts[0]->created_at->diffForHumans() }}
                                    </small>

                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@else
    <p class="text-center fs-4">No Post Found.</p>
    @endif
    <!--- PAGINATION ---->
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
    <!---- END ------>

@endsection
