@extends('../admin.master')
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
    <!-- Button trigger modal -->


    <!-- Modal untuk input -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Rombel</label>
                        <select class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Rayon</label>
                        <select class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal untuk show --}}
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Show Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <strong>NIS :</strong>
                        11806738
                    </div>
                    <div class="form-group">
                        <strong>Nama :</strong>
                        Bayu
                    </div>
                    <div class="form-group">
                        <strong>Rombel :</strong>
                        RPL XII-1
                    </div>
                    <div class="form-group">
                        <strong>Rayon :</strong>
                        Tajur 1
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal untuk edit -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Rombel</label>
                        <select class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Rayon</label>
                        <select class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    @endsection