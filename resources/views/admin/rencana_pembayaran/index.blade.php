@extends('layouts.master', ['title' => 'Data Rencana Pembayaran'])

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Data Rencana Pembayaran</h1>
    </div>
</section>
<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-action">
                    <a href="{{ route('admin.rencanapembayaran.create') }}" class="btn btn-primary"
                        style="border-radius: 5px"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>JENIS PEMBAYARAN</th>
                                <th>NOMINAL</th>
                                <th>BANYAKNYA</th>
                                <th>TOTAL NOMINAL</th>
                                <th>TAHUN</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($rencanapembayarans as $rencanapembayaran)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $rencanapembayaran->jenis_pembayaran_id }}</td>
                                <td>{{ $rencanapembayaran->nominal }}</td>
                                <td>{{ $rencanapembayaran->banyaknya }}</td>
                                <td>{{ $rencanapembayaran->total_nominal }}</td>
                                <td>{{ $rencanapembayaran->tahun }}</td>
                                <td>
                                    <form action="{{ route('admin.rencanapembayaran.destroy', $rencanapembayaran->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.rencanapembayaran.edit', $rencanapembayaran->id) }}" class="btn btn-primary btn-action mr-1"><i class="fa fa-pencil-alt"></i></a>
                                        <button type="submit" onclick="return confirm('Anda Yakin ?')" class="btn btn-danger btn-action"><i class="fa fa-trash"></i></button> 
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