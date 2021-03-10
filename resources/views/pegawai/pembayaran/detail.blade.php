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
                                <div class="invoice p-3 mb-3">
                                    <!-- title row -->
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                <i class="fas fa-globe"></i> Bond
                                                <small class="float-right">{{ $detail['created_at'] }}</small>
                                            </h4>
                                        </div>
                                    <!-- /.col -->
                                    </div>
                                    <!-- info row -->
                                    <div class="row invoice-info">
                                        <div class="col-sm-8 invoice-col text-center">
                                            <address>
                                                <strong>Posko Pengumpulan Sampah Desa </strong><br>
                                                Jl. Cikopo Selatan Kp. Sukabirus RT 04/05 Desa Kec. Megamendung
                                                <p style="font-size: 18px;">TLP.(0857)10560686 Kab. Bogor</p>
                                            </address>
                                        </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col mb-2">
                                        <b>Invoice # <br>
                                        <b>Pegawai : </b> {{ $detail['user']['name'] }}<br>
                                        <b>Siswa : </b> {{ $detail['siswa']['nama_siswa'] }}<br>
                                        <b>Waktu : </b> {{ $detail->date }}<br>
                                    </div>
                                    <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
            
                                    <!-- Table row -->
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Via Transfer</th>
                                                        <th>Jenis Pembayaran</th>
                                                        <th>Tanggal Transfer</th>
                                                        <th>Nominal</th>
                                                        <th>Bayar</th>
                                                        <th>Sisa Pembayaran</th>
                                                        <th>Sub Bayar</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($detail->detailPembayaran as $index=>$item)
                                                    <tr>
                                                        <th>{{ $index+1 }}</th>
                                                        <td>{{ $item->viaTransfer->nama_bank }}</td>
                                                        <td>{{ $item->jenisPembayaran['jenis_pembayaran'] }}</td>
                                                        <td>{{ $item->date }}</td>
                                                        <td>Rp {{ number_format($item->nominal) }}</td>
                                                        <td>Rp {{ number_format($item->bayar) }}</td>
                                                        <td>Rp {{ number_format($item->sisa_pembayaran) }}</td>
                                                        <td>Rp {{ number_format($item->sub_bayar) }}</td>
                                                        <td>{{ $item->status }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
            
                                    <div class="row">
                                    <!-- accepted payments column -->
                                    <div class="col-6">
                                        <p class="lead">Note :</p>
                                        <p style="font-size: 18px;">
                                            Jangan bosan ya! <i> untuk tidak membuang sampah sembarangan </i> lagi, Kecuali jika membuang sampahnya itu ke tempatnya, yaitu tempat sampah :)
                                        </p>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-6">
                                        <p class="lead">Transaksi : {{ $detail->date }}</p>
                                        
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th style="width:50%">Total Nominal</th>
                                                    <td>Rp {{ number_format( $detail->total_nominal) }},00</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
            
                                    <!-- this row will not appear when printing -->
                                    <div class="row no-print">
                                        <div class="col-12">
                                            <a href="" onclick="window.print()" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
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
