@extends('layouts.master', ['title' => 'Data Pembimbing Siswa'])

@section('content')


<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Pembimbing Siswa</h4>
                <div class="card-header-action">
                    <a href={{ route('admin.pembimbing.index') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <p style="text-align:justify;">
                                        @if($pembimbing->photo)
                                            <img style="height:300px; width:300px; object-fit:cover; object-position:center;" class="card-img-top rounded-circle mr-1" src="{{ $pembimbing->takeImage }}"> <br>
                                        @else
                                            <img alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}" style="height:300px; width:300px; object-fit:cover; object-position:center;"  class="card-img-top rounded-circle mr-1">
                                        @endif
                                    </p>
                                </div>
                                <table>
                                    <tr>
                                        <th>NIS</th>
                                        <th>:</th>
                                        <th>{{ $pembimbing->nip }}</th>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <th>:</th>
                                        <th>{{ $pembimbing->nama_pembimbing }}</th>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <th>:</th>
                                        <th>{{ $pembimbing->jenis_kelamin }}</th>
                                    </tr>
                                    <tr>
                                        <th>Rayon</th>
                                        <th>:</th>
                                        <th>{{ $pembimbing->rayon->nama_rayon }}</th>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection