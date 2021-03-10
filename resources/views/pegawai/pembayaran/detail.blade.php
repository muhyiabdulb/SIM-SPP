@extends('layouts.master', ['title' => 'Detail Pembayaran'])

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Detail Pembayaran</h1>
    </div>
</section>
<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-action">
                    <a href={{ route('pegawai.pembayaran.history') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
                 </div>
            </div>
            <div class="card-body ">
                <!-- /.content-header -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <!-- Main content -->
                                    <!-- info row -->
                                    <div class="row invoice-info">
                                        <div class="col-sm-12 invoice-col text-center">
                                            <address>
                                                <strong>BUKTI PEMBAYARAN SPP</strong><br>
                                               Rp. 350.000,-
                                                <p style="font-size: 18px;">(Tiga ratus lima puluh ribu rupiah)</p>
                                            </address>
                                        </div>
                                    <!-- /.col -->
                                    <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
            
                                    <!-- Table row -->
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>BULAN</th>
                                                        <th>TANGGAL BAYAR</th>
                                                        <th>PENERIMA</th>
                                                        <th>PARAF</th>
                                                        <th>DIKETAHUI ORANG TUA/WALI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($detail->detailPembayaran as $index=>$item)
                                                    <tr>
                                                    <td>Januari</td>
                                                    <td>14/07/2020</td>
                                                    <td>Lia M</td>
                                                    <td></td>
                                                    <td></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
            
                                    <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
            
                                    <!-- this row will not appear when printing -->
                                    <div class="row no-print">
                                        <div class="col-12">
                                            <a href="" onclick="window.print()" class="btn btn-danger" style="margin-right: 20px;"><i class="fas fa-print"></i> Print</a>
                                            <a href="" class="btn btn-primary float-right" 
                                            style="margin-right: 5px;"><i class="fas fa-download"></i> Generate PDF
                                            </a>                
                                        </div>
                                    </div>
                                </div>
                                <!-- /.invoice -->
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
        </div>
    </div>
@endsection
