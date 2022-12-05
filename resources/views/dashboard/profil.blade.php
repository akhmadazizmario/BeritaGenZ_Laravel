@extends('dashboard.layouts.main')

@section('container')
    <section>
        <div class="container col-md-5">
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header h5 arial text-center">
                        MY Profile
                    </div>
                    <div class="card-body">
                        <br>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4 mb-3">

                                    @if ($user->image)
                                        <img src="{{ asset('storage/' . $user->image) }}" alt="profil" class="img-fluid"
                                            height="100%">
                                    @else
                                        <img src="https://source.unsplash.com/500x400?user" class="card-img-top"
                                            alt="profil" height="100%">
                                    @endif

                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">name : <?= $user['username'] ?></h5>
                                        <p class="card-text">email : <?= $user['email'] ?></p>
                                        <p class="card-text">register pada : <?= $user['created_at'] ?></p>
                                        <div class="btn btn-info ml-3 my-3">
                                            <a href="/profil/edit" class="text text-white"><i class="fas fa-user-edit"></i>
                                                UbahProfil</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
