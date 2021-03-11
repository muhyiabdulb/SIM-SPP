@extends('layouts.master', ['title' => 'Detail Pembayaran'])

@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Detail Pembayaran</h4>
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
                                    <div class="col-sm-12 invoice-col text-center">
                                     <img src="{{ asset('assets/img/logo-wk.png') }}" alt="" width="80px" height="80px">
                                    </div>
                                    <!-- info row -->
                                    <div class="row invoice-info">
                                        <div class="col-sm-12 invoice-col text-center">
                                            <address>
                                                <strong>SEKOLAH MENENGAH KEJURAN WIKRAMA</strong><br>
                                                Jl. Raya Wangun, Kel. Sindangsari Kota Bogor 161416<br>
                                                Telp./Fax. : (0251) 8242411 <br>
                                                e-mail : prohumasi@smkwikrama.sch.id <br>
                                                website : www.smkwikrama.sch.id
                                            </address>
                                        </div>
                                    <!-- /.col -->
                                    <div class="col-sm-8 invoice-col mb-2" style="margin-top: 25px">
                                        <b>Hari/Tanggal :</b> {{ $detail->date }}<br>
                                        <b>NIS : </b> {{ $detail['siswa']['nis'] }}<br>
                                        <b>Nama : </b> {{ $detail['siswa']['nama_siswa'] }}<br>
                                        
                                    </div>
                                        <div class="col-sm-4 invoice-col mb-2" style="margin-top: 25px">
                                        <b>Rombel : </b> {{ $detail['siswa']['rombel']['nama_rombel'] }}<br>
                                        <b>Rayon : </b> {{ $detail['siswa']['rayon']['nama_rayon'] }}<br>
                                        <b>Pegawai : </b> {{ $detail['user']['name'] }}<br>
                                        
                                    </div>
                                    <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
            
                                    <!-- Table row -->
                                    <div class="row" style="margin-top: 25px">
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
                                    </div><br>
                                    <!-- /.row -->
                                    
                                    <!-- this row will not appear when printing -->
                                    <div class="row no-print" style="margin-top: 25px">
                                        <div class="col-12">
                                            <h4 class="float-right">Total : Rp {{ number_format($detail->total_nominal) }}</h4>              
                                        </div>
                                    </div>

                                    <!-- this row will not appear when printing -->
                                    <div class="row no-print" style="margin-top: 25px">
                                        <div class="col-12">
                                            <a href="" onclick="window.print()" class="btn btn-danger"><i class="fas fa-print"></i> Print</a>
                                            <a href="" class="btn btn-primary" 
                                            style="margin-left: 10px;"><i class="fas fa-download"></i> Generate PDF
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
