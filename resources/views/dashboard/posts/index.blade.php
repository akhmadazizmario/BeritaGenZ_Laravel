@extends('dashboard.layouts.main')

@section('container')
    <section id="hero-slider" class="hero-slider" style="background-color: #B6E3CE">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-5 border-bottom">
                        <h1 class="h2">Postingan Saya :</h1>
                        <hr>
                    </div>

                    @if (session()->has('success'))
                        <div class="alert alert-primary col-lg-8">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session()->has('destroy'))
                        <div class="alert alert-success col-lg-8">
                            {{ session('destroy') }}
                        </div>
                    @endif

                    <div class=" table-responsive col-lg-10 col-md-3">
                        <!--Memanggil create yang ada di web routes-->
                        <a href="/dashboard/posts/create" class="btn btn-primary text-white mb-3"><i
                                class="bi bi-plus-square-dotted"></i> Create New Post</a>
                        <!-- end --->


                        <!-- MENU PENCARIAN & TITLE--->
                        <div class="row justify-content-center ">
                            <div class="col-md-6">
                                <form action="/dashboard/posts">
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
                                        <button class="btn btn-primary" type="submit"><i class="bi bi-search-heart"></i>
                                            Search</button>
                                    </div>
                                    <!---- End ---->
                                </form>
                            </div>
                        </div>
                        <!--- END MENU PENCARIAN--->



                        <table class=" table table-striped table-sm table-bordered bg-white">
                            <thead class="bg-dark">
                                <tr>
                                    <th scope="col" class="text-white text-center">#</th>
                                    <th scope="col" class="text-white text-center">Judul</th>
                                    <th scope="col" class="text-white text-center">kategori</th>
                                    <th scope="col" class="text-white text-center">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="text-center"><strong>{{ $loop->iteration }}</strong></td>
                                        <td>{{ $post->title }}</td>
                                        <td class="text-center">{{ $post->category->name }}</td>
                                        <td>
                                            <center>
                                                <a href="/dashboard/posts/{{ $post->slug }}"
                                                    class="badge bg-info text-decoration-none">
                                                    <i class="bi bi-eyeglasses"></i> lihat</a>
                                                <a href="/dashboard/posts/{{ $post->slug }}/edit"
                                                    class="badge bg-warning text-decoration-none">
                                                    <i class="bi bi-pencil-square"></i> edit</a>

                                                <form action="/dashboard/posts/{{ $post->slug }}" method="post"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="badge bg-danger border-0"
                                                        onclick="return confirm('apakah kamu serius untuk menghapus?')">
                                                        <i class="bi bi-trash3"></i>
                                                        Hapus</button>
                                                </form>
                                            </center>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!--- PAGINATION ---->
                        <div class="d-flex justify-content-center">
                            {{ $posts->links() }}
                        </div>
                        <!---- END ------>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <style>
        .table,
        th,
        td {
            border: 1px solid;
        }
    </style>
@endsection
