@extends('layouts.master', ['title' => 'Tambah Data Pembimbing Siswa'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
            <h4>Tambah Data Pembimbing Siswa</h4>
                  <div class="card-header-action">
                   <a href={{ route('admin.pembimbing.index') }} class="btn btn-danger">Back</a>
                  </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.pembimbing.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nip">NIP</label>
                            <input type="text" name="nip" class="form-control" placeholder="NIP">
                            @error('nip')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="photo">Photo</label>
                            <input id="photo" type="file" name="photo" class="form-control">
                            @error('photo')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contoh1">Nama</label>
                            <input type="text" name="nama_pembimbing" class="form-control" placeholder="Nama">
                            @error('nama_pembimbing')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="d-block">Jenis Kelamin</label><br>
                            <div class="form-check form-check-inline">
                                <input name="jenis_kelamin" class="form-check-input" type="radio" id="inlineradio1" value="L">
                                <label class="form-check-label" for="inlineradio1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="jenis_kelamin" class="form-check-input" type="radio" id="inlineradio2" value="P">
                                <label class="form-check-label" for="inlineradio2">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Rayon</label>
                            <select name="rayon_id" class="form-control">
                                <option selected disabled="disabled">Pilih Rayon</option>
                                 @foreach ($rayons as $item)
                                     <option value="{{ $item->id }}">{{ $item->nama_rayon }}</option>
                                 @endforeach
                             </select>
                             @error('rayon_id')
                                 <div class="invalid">
                                     {{ $message }}
                                 </div>
                             @enderror
                        </div>
                        <div class="form-group col-md-6" style="padding-top:29px">
                            <button class="btn btn-primary" type="submit">submit</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection