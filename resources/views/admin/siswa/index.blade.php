@extends('layouts.master', ['title' => 'Data Siswa'])

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
                    <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary"
                        style="border-radius: 5px"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="card-body ">
                <div class="table">
                    <table class="table table-striped" id="users-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Photo</th>
                                <th>NIS</th>
                                <th>NAMA</th>
                                <th>JENIS KELAMIN</th>
                                <th>ROMBEL</th>
                                <th>RAYON</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($siswas as $siswa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img style="height:100px; width:100px; object-fit:cover; object-position:center;" class="card-img-top" src="{{ $siswa->takeImage }}">    
                                </td>
                                <td>{{ $siswa->nis }}</td>
                                <td>{{ $siswa->nama_siswa }}</td>
                                <td>{{ $siswa->jenis_kelamin }}</td>
                                <td>{{ $siswa->rombel->nama_rombel }}</td>
                                <td>{{ $siswa->rayon->nama_rayon }}</td>
                                <td>
                                    <form action="{{ route('admin.siswa.destroy', $siswa->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.siswa.show', $siswa->id) }}" class="btn btn-success btn-action mr-1"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('admin.siswa.edit', $siswa->id) }}" class="btn btn-primary btn-action mr-1"><i class="fa fa-pencil-alt"></i></a>
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

@section('script')
    <script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'user/json',
        columns: [
            { data: 'photo', name: 'photo' },
            { data: 'nis', name: 'nis' },
            { data: 'nama_siswa', name: 'nama_siswa' },
            { data: 'jenis_kelamin', name: 'jenis_kelamin' },
            { data: 'rombel_id', name: 'rombel_id' },
            { data: 'rayon_id', name: 'rayon_id' }
        ]
    });
});
</script>
@endsection