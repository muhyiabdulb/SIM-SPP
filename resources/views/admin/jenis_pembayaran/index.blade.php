@extends('layouts.master', ['title' => 'Data Jenis Pembayaran'])

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Data Jenis Pembayaran</h1>
    </div>
</section>
<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-action">
                    <a href="{{ url('jenis_pembayaran/create') }}" class="btn btn-primary"
                        style="border-radius: 5px"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>JENIS PEMBAYARAN</th>
                                <th>NOMINAL</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>BNI</td>
                                <td>10.000</td>
                                <td>
                                    <a href="{{ ('jenis_pembayaran/edit') }}" class="btn btn-primary btn-action mr-1"><i class="fa fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                        data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection