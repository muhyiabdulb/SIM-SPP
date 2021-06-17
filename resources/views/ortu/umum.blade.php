@extends('layouts.master', ['title' => 'Laporan Detail SPP'])

@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
         <div class="card">
            <div class="card-header">
                <h4>Laporan Bayaran Umum</h4>
                <div class="card-header-action">
                    <a href={{ route('ortu.pembayaran.umum') }} class="btn btn-danger"><i
                        class="fa fa-arrow-left"></i> Back</a>
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
                                                <strong>BUKTI PEMBAYARAN UMUM</strong><br>
                                            </address>
                                        </div>
                                    <!-- /.col -->
                                    <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                    <b>Nama : </b>
                                    <!-- Table row -->
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>JENIS PEMBAYARAN</th>
                                                        <th>TANGGAL BAYAR</th>
                                                        <th>NOMINAL</th>
                                                        <th>BAYAR</th>
                                                        <th>SISA PEMBAYARAN</th>
                                                        <th>STATUS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($umum as $item)
                                                    <tr>
                                                        <th>{{ $item->jenisPembayaran['jenis_pembayaran'] }}</th>
                                                        <td>{{ $item->date }}</td>
                                                        <td>Rp {{ number_format($item->nominal) }}</td>
                                                        <td>Rp {{ number_format($item->bayar) }}</td>
                                                        <td>Rp {{ number_forma ($item->sisa_pembayaran) }}</td>
                                                        <td>{{ $item->status }}</td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="6" class="text-center">
                                                            <h3>Belum Bayar</h3>
                                                        </td>
                                                    </tr>
                                                    @endforelse
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
                                    <div class="row no-print" style="margin-top: 10px">
                                        <div class="col-12">
                                            <a href="" onclick="window.print()" class="btn btn-danger" style="margin-right: 10px;margin-left:12px"><i class="fas fa-print"></i> Print</a>
                                            <a href="" class="btn btn-primary float-right" style="margin-right: 5px;margin-left:10px"><i class="fas fa-download"></i> Generate PDF</a>                
                                            <a href="" class="btn btn-default float-right" style="background:green;color:white;"><i class="fas fa-download"></i> Generate Excel</a>                
                                       
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
</div>
@endsection
