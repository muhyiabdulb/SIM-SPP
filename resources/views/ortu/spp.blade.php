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
                            <tr>
                                <td></td>
                                <td> 
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-action mr-1"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7" class="text-center"><h3>Data Kosong</h3></td>
                            </tr>
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
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script> 
@endsection
