@extends('layouts.master', ['title' => 'Edit Data rombel'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data rombel</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.rombel.update', $rombel->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contoh2">ID Jurusan</label>
                            <input type="text" name="jurusan_id" value="{{ $rombel->jurusan_id }}" class="form-control" placeholder="ID Jurusan">
                            @error('jurusan_id')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="contoh2">Nama Rombel</label>
                            <input type="text" name="nama_rombel" value="{{ $rombel->nama_rombel }}" class="form-control" placeholder="Nama Rombel">
                            @error('nama_rombel')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                     <div class="form-group col-md-4">
                        <button class="btn btn-primary" type="submit">Update</button>
                        <a href="{{ route('admin.rombel.index') }}" class="btn btn-danger" type="reset">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection