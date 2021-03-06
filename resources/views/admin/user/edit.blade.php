@extends('layouts.master', ['title' => 'Edit Data User'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data User</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="photo">Photo</label>
                            <input id="photo" type="file" name="photo" class="form-control">
                            @error('photo')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="contoh1">Nama Orang Tua</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Nama Orang Tua">
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
                            <input type="text" name="email" value="{{ $user->email }}"  class="form-control" placeholder="Email">
                            @error('email')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Siswa</label>
                            @if($user->siswa_id === 1)
                                <input type="text" name="email" class="form-control" placeholder="User ini bukan Ortu, jadi tidak bisa memilih Siswa" readonly> 
                            @else
                                <select name="siswa_id" class="form-control">
                                    <option value="{{ $user->siswa_id }}">{{ $user->siswa->nama_siswa }}</option>
                                        @foreach ($siswas as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_siswa }}</option>
                                        @endforeach
                                </select>
                                @error('siswa_id')
                                    <div class="invalid">
                                        {{ $message }}
                                    </div>
                                @enderror      
                            @endif
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="username">Username</label>
                            <input type="text" name="username" value="{{ $user->username }}"  class="form-control" placeholder="Username">
                            @error('username')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                    <a href={{ route('admin.user.index') }} class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection