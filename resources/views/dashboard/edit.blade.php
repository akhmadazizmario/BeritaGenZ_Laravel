@extends('dashboard.layouts.main')

@section('container')
    <section>
        <div class="container col-md-6">
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header h5 arial text-center">
                        Ubah Profil
                    </div>
                    <div class="card-body">
                        <br>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-8">
                                    <div class="card-body">


                                        <form method="post" action="/profil/edit" class="mb-5"
                                            enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="name" class="form-label"><strong>Name</strong>
                                                    <font color="red"></font>
                                                </label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    @error('name') is-invalid @enderror required autofocus
                                                    value="{{ old('name', $user->name) }}">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="username" class="form-label"><strong>User Name</strong>
                                                    <font color="red"></font>
                                                </label>
                                                <input type="text" class="form-control"
                                                    @error('username') is-invalid @enderror id="username" name="username"
                                                    required value="{{ old('username', $user->username) }}">
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label"><strong>eMail</strong>
                                                    <font color="red"></font>
                                                </label>
                                                <input type="text" class="form-control"
                                                    @error('email') is-invalid @enderror id="email" name="email"
                                                    required value="{{ old('email', $user->email) }}">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="password" class="form-label"><strong>Password</strong>
                                                    <font color="red"></font>
                                                </label>
                                                <input type="password" class="form-control" id="password" name="password"
                                                    @error('password') is-invalid @enderror required autofocus
                                                    value="{{ old('password', $user->password) }}">
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="image" class="form-label">Edit gambar</label>
                                                <input type="hidden" name="oldImage" value="{{ $user->image }}">
                                                @if ($user->image)
                                                    <img src="{{ asset('storage/' . $user->image) }}"
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


                                            <button type="submit" class="btn btn-primary text-white">Update
                                                Profile</button>
                                            <a href="/dashboard/edit" class="btn btn-danger">Kembali</a>
                                        </form>
                                    </div>
                                </div>






                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
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
