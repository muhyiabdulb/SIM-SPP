@extends('layouts.master', ['title' => 'Data User'])

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Data User</h1>
    </div>
</section>
<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-action">
                    <a href="{{ route('admin.user.create') }}" class="btn btn-primary"
                        style="border-radius: 5px"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NAMA SISWA</th>
                                <th>PHOTO</th>
                                <th>NAMA ORANG TUA</th>
                                <th>EMAIL</th>
                                <th>USERNAME</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->siswa['nama_siswa'] }} </td>
                                <td>
                                    @if($user->photo)
                                        <img style="height:100px; width:100px; object-fit:cover; object-position:center;" class="card-img-top" src="{{ $user->takeImage }}"> 
                                    @else
                                        {{ "Tidak Ada Photo" }}
                                    @endif
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->username }}</td>
                                <td>
                                    <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.user.show', $user->id) }}" class="btn btn-success btn-action mr-1"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-primary btn-action mr-1"><i class="fa fa-pencil-alt"></i></a>
                                        <button type="submit" class="btn btn-danger btn-action" onclick="return confirm('Anda Yakin ?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center"><h3>Data Kosong</h3></td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection