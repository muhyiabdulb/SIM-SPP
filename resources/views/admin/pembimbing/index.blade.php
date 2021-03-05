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
                    <a href="{{ route('admin.pembimbing.create') }}" class="btn btn-primary"
                        style="border-radius: 5px"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>PHOTO</th>
                                <th>NAMA</th>
                                <th>JENIS KELAMIN</th>
                                <th>RAYON</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembimbings as $pembimbing)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pembimbing->nip }}</td>
                                <td>
                                    <img style="height:40px; object-fit:cover; object-position:center;" class="card-img-top" src="{{ $pembimbing->takeImage }}">    
                                </td>
                                <td>{{ $pembimbing->nama_pembimbing }}</td>
                                <td>{{ $pembimbing->jenis_kelamin }}</td>
                                <td>{{ $pembimbing->rayon->nama_rayon }}</td>
                                <td>
                                    <a href="{{ ('pembimbing/show') }}" class="btn btn-success btn-action mr-1"><i class="fa fa-eye"></i></a>
                                    <a href="{{ ('pembimbing/edit') }}" class="btn btn-primary btn-action mr-1"><i class="fa fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                        data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection