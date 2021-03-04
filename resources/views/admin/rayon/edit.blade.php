@extends('layouts.master', ['title' => 'Edit Data Rayon'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Rayon</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.rayon.update', $rayon->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contoh2">Nama</label>
                            <input type="text" name="nama_rayon" value="{{ $rayon->nama_rayon }}" class="form-control" placeholder="Nama Rayon">
                            @error('nama_rayon')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                     <div class="form-group col-md-4">
                        <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Update</button>
                        <a href="{{ URL::previous() }}" class="btn btn-danger" type="reset">Kembali</a>
                         </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection