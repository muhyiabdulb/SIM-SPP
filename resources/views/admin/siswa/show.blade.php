
@extends('layouts.master', ['title' => 'Data Siswa'])
@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Siswa</h4>
                <div class="card-header-action">
                    <a href={{ route('admin.siswa.index') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <p style="text-align:justify;"><img src="{{ $siswa->takeImage }}"
                                            class="img-fluid" alt="" style="width: 250px;height:300px;float:left;">
                                    </p>
                                </div>
                                <table>
                                    <tr>
                                        <th>NIS</th>
                                        <th>:</th>
                                        <th>{{ $siswa->nis }}</th>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <th>:</th>
                                        <th>{{ $siswa->nama_siswa }}</th>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <th>:</th>
                                        <th>{{ $siswa->jenis_kelamin }}</th>
                                    </tr>
                                    <tr>
                                        <th>Rayon</th>
                                        <th>:</th>
                                        <th>{{ $siswa->rayon->nama_rayon }}</th>
                                    </tr>
                                        <tr>
                                        <th>Rombel</th>
                                        <th>:</th>
                                        <th>{{ $siswa->rombel->nama_rombel }}</th>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection