@extends('layouts.master', ['title' => 'Laporan Detail SPP'])

@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Laporan Bayaran SPP</h4>
                    <div class="card-header-action">
                        <a href={{ route('kepsek.laporan.spp') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i>
                            Back</a>
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
                                                <strong>
                                                    <h4>BUKTI PEMBAYARAN SPP</h4>
                                                </strong><br>
                                                Rp. 450.000,-
                                                <p style="font-size: 18px;">(Empat Ratus Lima Puluh Ribu Rupiah)</p>
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                    <h5>Nama Siswa : {{ $siswa->nama_siswa }}</h5>
                                    <!-- Table row -->
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped" id="tblData">
                                                <thead>
                                                    <tr>
                                                        <th>BULAN</th>
                                                        <th>TANGGAL BAYAR</th>
                                                        <th>PENERIMA</th>
                                                        <th>PARAF</th>
                                                        <th>DIKETAHUI ORANG TUA/WALI</th>
                                                        <th>STATUS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($detail as $item)
                                                        <tr>
                                                            <th>{{ $item->bulan }}</th>
                                                            <td>{{ $item->tanggal_transfer }}</td>
                                                            <td>{{ $item->user['name'] }}</td>
                                                            <td>Paraf</td>
                                                            <td>Paraf</td>
                                                            <td>
                                                                @if ($item->status === 'Sudah DiVerifikasi')
                                                                    <span
                                                                        class="badge rounded-pill bg-primary text-white">{{ $item->status }}</span>
                                                                @else
                                                                    <span
                                                                        class="badge rounded-pill bg-warning text-white">{{ $item->status }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="6" class="text-center">
                                                                <h3>{{ $siswa->nama_siswa }} Belum Bayar</h3>
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
                                        <a href="" onclick="window.print()" class="btn btn-danger"
                                            style="margin-right: 10px;margin-left:12px"><i class="fas fa-print"></i>
                                            Print</a>
                                        <a href="" class="btn btn-primary float-right"
                                            style="margin-right: 5px;margin-left:10px"><i class="fas fa-download"></i>
                                            Generate PDF</a>
                                       <button onclick="tableHtmlToExcel('tblData')" class="btn btn-default float-right" style="background:green;color:white;"><i class="fas fa-download"></i> Generate Excel</button>                
                                            <script src="https://unpkg.com/xlsx@0.17.0/dist/xlsx.js"></script>
                                            <script>

                                                function tableHtmlToExcel(tableID, filename = ''){
                                                var downloadLink;
                                                var dataType = 'application/vnd.ms-excel';
                                                var tableSelect = document.getElementById(tableID);
                                                var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
                                            
                                                filename = filename?filename+'.xls':'excel_data.xls';
                                            
                                                downloadLink = document.createElement("a");
                                                
                                                document.body.appendChild(downloadLink);
                                                
                                                if(navigator.msSaveOrOpenBlob){
                                                    var blob = new Blob(['\ufeff', tableHTML], {
                                                        type: dataType
                                                    });
                                                    navigator.msSaveOrOpenBlob( blob, filename);
                                                }else{
                                                    downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
                                            
                                                    downloadLink.download = filename;
                                                
                                                    downloadLink.click();
                                                }
                                            }
                                            </script>

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
