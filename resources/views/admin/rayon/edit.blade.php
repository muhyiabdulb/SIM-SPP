@extends('layouts.master', ['title' => 'Edit Data Rayon'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
            <h4>Edit Data Rayon</h4>
                  <div class="card-header-action">
                   <a href={{ route('admin.rayon.index') }} class="btn btn-danger">Back</a>
                  </div>
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
                     <div class="form-group col-md-6" style="padding-top: 29px;" >
                        <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection