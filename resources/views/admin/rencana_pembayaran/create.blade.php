@extends('layouts.master', ['title' => 'Tambah Data Rencana Pembayaran'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data Rencana Pembayaran</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.rencanapembayaran.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="contoh2">Jenis Pembayaran</label>
                            <select name="jenis_pembayaran_id" class="form-control">
                                <option selected disabled="disabled">Pilih Jenis Pembayaran</option>
                                 @foreach ($jenisPembayarans as $item)
                                     <option value="{{ $item->id }}">{{ $item->jenis_pembayaran }}</option>
                                 @endforeach
                             </select>
                             @error('jenis_pembayaran_id')
                                 <div class="invalid">
                                     {{ $message }}
                                 </div>
                             @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label for="contoh2">Nominal</label>
                            <input type="text" name="nominal" class="form-control" placeholder="Nominal">
                            @error('nominal')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label for="contoh2">Banyaknya</label>
                            <input type="text" name="banyaknya" class="form-control" placeholder="Banyaknya">
                            @error('banyaknya')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label for="contoh2">Total Nominal</label>
                            <input type="text" name="total_nominal" class="form-control" placeholder="Total Nominal">
                            @error('total_nominal')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label for="contoh2">Tahun</label>
                            <input type="text" name="tahun" class="form-control" placeholder="Tahun">
                            @error('tahun')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                     <div class="form-group col-md-12">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <a href="{{ route('admin.rencanapembayaran.index') }}" class="btn btn-danger" type="reset">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection