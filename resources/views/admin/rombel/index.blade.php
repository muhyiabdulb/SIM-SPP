@extends('layouts.master', ['title' => 'Data Rombel'])

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Data Rombel</h1>
    </div>
</section>
<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-action">
                    <a href="{{ route('admin.rombel.create') }}" class="btn btn-primary"
                        style="border-radius: 5px"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Jurusan</th>
                                <th>Nama Rombel</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($rombels as $rombel)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $rombel->jurusan_id }}</td>
                                <td>{{ $rombel->nama_rombel }}</td>
                                <td>
                                    <form action="{{ route('admin.rombel.destroy', $rombel->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.rombel.edit', $rombel->id) }}" class="btn btn-primary btn-action mr-1"><i class="fa fa-pencil-alt"></i></a>
                                        <button type="submit" onclick="return confirm('Anda Yakin ?')" class="btn btn-danger btn-action"><i class="fa fa-trash"></i></button> 
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center"><h3>Data Kosong</h3></td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
