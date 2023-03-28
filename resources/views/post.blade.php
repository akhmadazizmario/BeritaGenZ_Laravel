@extends('layout.main')
@section('container')
    <section id="hero-slider" class="hero-slider">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <h1 class="mb-3">{{ $post->title }}</h1>
                    <!----->
                    <p>By.<strong><a href="/posts?author={{ $post->author->username }}"
                                class="text-decoration-none text-danger">{{ $post->author->name }}</a></strong> in <strong><a
                                href="/posts?category={{ $post->category->slug }}"
                                class="text-decoration-none text-success">{{ $post->category->name }}</a></strong></p>

                    @if ($post->image)
                        <div style="max-height: 350px; overflow:hidden;">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                class="img-fluid">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}" class="img-fluid">
                    @endif
                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>

                    <br><br><br>
                    <hr>






                </div>
            </div>
        </div>
    </section>
@endsection
