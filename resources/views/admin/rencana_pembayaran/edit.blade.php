@extends('layouts.master', ['title' => 'Edit Data Rencana Pembayaran'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Rencana Pembayaran</h4>
                <div class="card-header-action">
                   <a href={{ route('admin.rencanapembayaran.index') }} class="btn btn-danger">Back</a>
            </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.rencanapembayaran.update', $rencanapembayaran->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contoh2">Jenis Pembayaran</label>
                            <input type="text" name="jenis_pembayaran_id" value="{{ $rencanapembayaran->jenis_pembayaran_id }}" class="form-control" placeholder="Jenis Pembayaran">
                            @error('jenis_pembayaran_id')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="contoh2">Nominal</label>
                            <input type="text" name="nominal" value="{{ $rencanapembayaran->nominal }}" class="form-control" placeholder="Nominal">
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
                            <input type="text" name="banyaknya" value="{{ $rencanapembayaran->banyaknya }}" class="form-control" placeholder="Banyaknya">
                            @error('banyaknya')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="contoh2">Total Nominal</label>
                            <input type="text" name="total_nominal" value="{{ $rencanapembayaran->total_nominal }}" class="form-control" placeholder="Total Nominal">
                            @error('total_nominal')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contoh2">Tahun</label>
                            <input type="text" name="tahun" value="{{ $rencanapembayaran->tahun }}" class="form-control" placeholder="Tahun">
                            @error('tahun')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                     <div class="form-group col-md-6" style="padding-top: 29px">
                        <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection