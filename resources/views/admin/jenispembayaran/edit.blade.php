@extends('layouts.master', ['title' => 'Edit Data Jenis Pembayaran'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
             <div class="card-header">
                <h4>Edit Data Jenis Pembayaran</h4>
                <div class="card-header-action">
                   <a href={{ route('admin.jenispembayaran.index') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.jenispembayaran.update', $jenispembayaran->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contoh2">Jenis Pembayaran</label>
                            <input type="text" name="jenis_pembayaran" value="{{ $jenispembayaran->jenis_pembayaran }}" class="form-control" placeholder="Jenis Pembayaran">
                            @error('jenis_pembayaran')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="contoh2">Nominal</label>
                            <input type="number" id="nominal" onkeyup="totalNominal();"  name="nominal" value="{{ $jenispembayaran->nominal }}" class="form-control" placeholder="Nominaln">
                            @error('nominal')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contoh2">Banyaknya</label>
                            <input type="number" id="banyaknya" onkeyup="totalNominal();"  name="banyaknya" value="{{ $jenispembayaran->banyaknya }}"  class="form-control" placeholder="Banyaknya">
                            @error('banyaknya')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="contoh2">Total Nominal</label>
                            <input type="number" id="total_nominal" onkeyup="totalNominal();"  name="total_nominal" value="{{ $jenispembayaran->total_nominal }}"  class="form-control" placeholder="Total Nominal" readonly>
                            @error('total_nominal')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    function totalNominal()
    {
      var nominal = parseInt(document.getElementById("nominal").value);
      var banyaknya = parseInt(document.getElementById("banyaknya").value);
      document.getElementById("total_nominal").value = nominal * banyaknya;     
    }
</script> 
@endsection