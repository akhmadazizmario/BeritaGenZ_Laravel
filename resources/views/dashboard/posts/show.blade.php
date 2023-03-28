@extends('dashboard.layouts.main')

@section('container')
    <section id="hero-slider" class="hero-slider" style="background-color: #ffffff">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <h1 class="mb-3">{{ $post->title }}</h1>
                    <br>

                    <a href="/dash/posts" class="btn btn-success"><i class="bi bi-box-arrow-left"></i>
                        Back to all my
                        Posts</a>
                    <a href="/dash/posts/{{ $post->slug }}/edit" class="btn btn-warning">
                        <i class="bi bi-pen-fill"></i> Edit</a>
                    <form action="/dash/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger border-0"
                            onclick="return confirm('apakah kamu serius untuk menghapus?')">
                            <i class="bi bi-trash"></i> Hapus</button>
                    </form>

                    <br>

                    @if ($post->image)
                        <div style="max-height: 350px; overflow:hidden;">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                class="img-fluid mt-3">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}" class="img-fluid mt-3">
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

    <br><br>
@endsection
