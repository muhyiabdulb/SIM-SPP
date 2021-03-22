@extends('layouts.master', ['title' => 'Laporan Bayaran SPP'])

@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endsection

@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Laporan Bayaran SPP</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-striped" id="myTable">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>PHOTO</th>
                                    <th>NIS</th>
                                    <th>NAMA</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>ROMBEL</th>
                                    <th>RAYON</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($siswas as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if ($item->photo)
                                                <img style="height:100px; width:100px; object-fit:cover; object-position:center;"
                                                    class="card-img-top" src="{{ $item->takeImage }}">
                                            @else
                                                {{ 'Tidak Ada Photo' }}
                                            @endif
                                        </td>
                                        <td>{{ $item->nis }}</td>
                                        <td>{{ $item->nama_siswa }}</td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>{{ $item->rombel->nama_rombel }}</td>
                                        <td>{{ $item->rayon->nama_rayon }}</td>
                                        <td>
                                            <a href="{{ route('kepsek.laporan.detailSPP', $item->id) }}"
                                                class="btn btn-primary btn-action mr-1"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            <h3>Data Kosong</h3>
                                        </td>
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
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

    </script>
@endsection
