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
                            @forelse ($pembimbings as $pembimbing)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pembimbing->nip }}</td>
                                <td>
                                    <img style="height:100px; width:100px; object-fit:cover; object-position:center;" class="card-img-top" src="{{ $pembimbing->takeImage }}">    
                                </td>
                                <td>{{ $pembimbing->nama_pembimbing }}</td>
                                <td>{{ $pembimbing->jenis_kelamin }}</td>
                                <td>{{ $pembimbing->rayon->nama_rayon }}</td>
                                <td>
                                    <form action="{{ route('admin.pembimbing.destroy', $pembimbing->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="" class="btn btn-success btn-action mr-1"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('admin.pembimbing.edit', $pembimbing->id) }}" class="btn btn-primary btn-action mr-1"><i class="fa fa-pencil-alt"></i></a>
                                        <button type="submit" class="btn btn-danger btn-action" onclick="return confirm('Anda Yakin ?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center"><h3>Data Kosong</h3></td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection