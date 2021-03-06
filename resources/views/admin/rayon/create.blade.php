@extends('layouts.master', ['title' => 'Tambah Data Rayon'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
         <div class="card-header">
            <h4>Tambah Data Rayon</h4>
                  <div class="card-header-action">
                   <a href={{ route('admin.rayon.index') }} class="btn btn-danger">Back</a>
                  </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.rayon.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contoh2">Nama</label>
                            <input type="text" name="nama_rayon" class="form-control" placeholder="Nama Rayon">
                            @error('nama_rayon')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6" style="padding-top: 29px;">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection