@extends('layouts.master', ['title' => 'Tambah Data Rombel'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data Rombel</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.rombel.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contoh2">ID Jurusan</label>
                            {{-- <input type="text" name="jurusan_id" class="form-control" placeholder="ID Jurusan"> --}}
                            <select name="jurusan_id" class="form-control">
                               <option selected disabled="disabled">Pilih Jurusan</option>
                                @foreach ($jurusans as $item)
                                    <option value="{{ $item->id }}">{{ $item->jurusan }}</option>
                                @endforeach
                            </select>
                            @error('jurusan_id')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contoh2">Nama Rombel</label>
                            <input type="text" name="nama_rombel" class="form-control" placeholder="Nama rombel">
                            @error('nama_rombel')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <a href="{{ route('admin.rombel.index') }}" class="btn btn-danger" type="reset">Kembali</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection