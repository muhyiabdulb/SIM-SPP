@extends('../layouts.master', ['title' => 'Data Siswa'])

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
                    <button href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        style="border-radius: 5px"><i class="fa fa-plus"></i> Tambah Data</button>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>NAMA</th>
                                <th>ROMBEL</th>
                                <th>RAYON</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>11806738</td>
                                <td>Bayu Ganteng</td>
                                <td>RPL XII-1</td>
                                <td>Tajur 1</td>
                                <td>
                                    <button href="#" class="btn btn-success btn-action mr-1" data-toggle="modal"
                                        data-target="#exampleModal2"><i class="fa fa-eye"></i></button>
                                    <button href="#" class="btn btn-primary btn-action mr-1" data-toggle="modal"
                                        data-target="#exampleModal3"><i class="fa fa-pencil-alt"></i></button>
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