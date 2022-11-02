@extends('dashboard.layouts.main')

@section('container')
    <section id="hero-slider" class="hero-slider">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-5 border-bottom">
                        <h1 class="h2">Edit postingan :</h1>
                    </div>

                    <div class="col-lg-8">
                        <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label"><strong>title</strong>
                                    <font color="red">* judul harus agak beda sedikit</font>
                                </label>
                                <input type="text" class="form-control" id="title" name="title"
                                    @error('title') is-invalid @enderror required autofocus
                                    value="{{ old('title', $post->title) }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label"><strong>Slug</strong>
                                    <font color="red">* slug/kata-kunci juga harus agak beda</font>
                                </label>
                                <input type="text" class="form-control" @error('slug') is-invalid @enderror
                                    id="slug" name="slug" required value="{{ old('title', $post->slug) }}">
                                @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select" name="category_id">
                                    @foreach ($categories as $category)
                                        @if (old('category_id', $post->category_id) == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Edit gambar</label>
                                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}"
                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                @endif
                                <input class="form-control" type="file" id="image" name="image"
                                    @error('image') is-invalid @enderror onchange="previewImage()">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label">Body</label>
                                @error('body')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                                <trix-editor input="body"></trix-editor>
                            </div>

                            <button type="submit" class="btn btn-primary text-white">Update Posts</button>
                            <a href="/dashboard/posts" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        document: addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
