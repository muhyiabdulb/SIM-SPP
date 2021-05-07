@extends('layouts.master', ['title' => 'History Pembayaran'])

@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endsection

@section('content')

    <section class="section">
        <div class="section-header">
            <h1>History Pembayaran</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-action">
                        <a href="{{ route('ortu.pembayaran.bayar') }}" class="btn btn-primary"
                            style="border-radius: 5px"><i class="fa fa-plus"></i> Bayar</a>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-striped" id="myTable">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>USER</th>
                                    <th>SISWA</th>
                                    <th>TANGGAL PEMBAYARAN</th>
                                    <th>TOTAL NOMINAL</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($history as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user['name'] }}</td>
                                        <td>{{ $item->siswa['nama_siswa'] }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>Rp {{ number_format($item->total_nominal) }}</td>
                                        <td>
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('ortu.pembayaran.detail', $item->id) }}"
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
