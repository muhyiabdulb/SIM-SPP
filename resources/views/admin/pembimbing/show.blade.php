@extends('layouts.master', ['title' => 'Data Pembimbing Siswa'])

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Data Pembimbing Siswa</h1>
    </div>
</section>
<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-action">
                    <a href="{{ route('admin.pembimbing.index') }}" class="btn btn-primary"
                        style="border-radius: 5px"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $pembimbing->takeImage }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $pembimbing->nip }}</h5>
                      <h5 class="card-text">{{ $pembimbing->nama_pembimbing }}</h5>
                      <h5 class="card-text">{{ $pembimbing->jenis_kelamin }}</h5>
                      <h5 class="card-text">{{ $pembimbing->rayon->nama_rayon }}</h5>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection