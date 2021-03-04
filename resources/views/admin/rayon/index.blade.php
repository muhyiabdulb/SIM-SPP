@extends('../admin.master')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Data Rayon</h1>
    </div>
</section>
<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-action">
                    <button href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        style="border-radius: 5px"><i class="fa fa-plus"></i> Tambah Data</button>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NAMA RAYON</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        @foreach ($rayons as $r)
                        <tbody>
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $r->nama_rayon }}</td>
                                <td>
                                    <form action="{{ route('admin.rayon.destroy',$r->id) }}" method="post">
                                        <button href="{{ route('admin.rayon.edit',$r->id) }}" class="btn btn-primary btn-action mr-1" data-toggle="modal"
                                            data-target="#exampleModal3"><i class="fa fa-pencil-alt"></i></button>
                                            @csrf
                                            @method('DELETE')
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                            data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                            data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
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
                    <h5 class="modal-title" id="exampleModalLabel">Input Rayon</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>NAMA RAYON</label>
                        <input type="text" class="form-control" name="nama_rayon">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk edit -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Rayon</h5>
                    <button href="{{ route('admin.rayon.index')}}" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.rayon.update',$rayon->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Rayon</label>
                            <input type="text" class="form-control" name="nama_rayon" value="{{ $rayon->nama_rayon }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @endsection