@extends('layouts.master', ['title' => 'Data Siswa'])

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Data Siswa</h1>
    </div>
</section>
<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-action">
                    <a href="{{ route('admin.siswa.index') }}" class="btn btn-primary"
                        style="border-radius: 5px"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $siswa->takeImage }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $siswa->nis }}</h5>
                      <h5 class="card-text">{{ $siswa->nama_siswa }}</h5>
                      <h5 class="card-text">{{ $siswa->jenis_kelamin }}</h5>
                      <h5 class="card-text">{{ $siswa->rayon->nama_rayon }}</h5>
                      <h5 class="card-text">{{ $siswa->rombel->nama_rombel }}</h5>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection