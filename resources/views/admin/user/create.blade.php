@extends('layouts.master', ['title' => 'Tambah Data User'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data User</h4>
                <div class="card-header-action">
                   <a href={{ route('admin.user.index') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                            <input type="text" name="name" class="form-control" placeholder="Nama Orang Tua">
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
                            <input type="text" name="email" class="form-control" placeholder="Email">
                            @error('email')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Siswa</label>
                            <select name="siswa_id" class="form-control">
                                <option selected disabled="disabled">Pilih Siswa</option>
                                    @foreach ($siswas as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_siswa }}</option>
                                    @endforeach
                            </select>
                            @error('siswa_id')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                            @error('username')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            @error('password')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="password">Ketik Ulang Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
                            @error('password_confirmation')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Role</label>
                            <select name="role" class="form-control">
                                <option selected disabled="disabled">Pilih Role</option>
                                <option value="admin">Admin</option>
                                <option value="pegawai">Pegawai</option>
                                <option value="ortu">Ortu</option>
                                <option value="kepsek">Kepsek</option>
                                <option value="pembimbing">Pembimbing</option>
                            </select>
                            @error('role')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection