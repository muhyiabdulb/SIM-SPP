@extends('layouts.master', ['title' => 'Profile User'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Profil User</h4>
                <div class="card-header-action">
                   {{-- <a href={{ route('admin.user.index') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a> --}}
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="photo">Photo</label> <br>
                            @if(auth()->user()->photo)
                                <img style="height:300px; width:300px; object-fit:cover; object-position:center;" class="card-img-top rounded-circle mr-1" src="{{ auth()->user()->takeImage }}"> <br>
                            @else
                                <img alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}" style="height:300px; width:300px; object-fit:cover; object-position:center;"  class="card-img-top rounded-circle mr-1">
                            @endif
                            <br>
                            <label for="photo">Ganti Photo</label> <br>
                            <input id="photo" type="file" name="photo" class="form-control">
                            @error('photo')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="contoh1">Nama Orang Tua</label>
                            <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control" placeholder="Nama Orang Tua">
                            @error('name')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="{{ auth()->user()->email }}"  class="form-control" placeholder="Email">
                            @error('email')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="username">Username</label>
                            <input type="text" name="username" value="{{ auth()->user()->username }}"  class="form-control" placeholder="Username">
                            @error('username')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection