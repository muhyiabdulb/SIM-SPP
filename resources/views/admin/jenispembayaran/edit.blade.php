@extends('layouts.master', ['title' => 'Edit Data Jenis Pembayaran'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
             <div class="card-header">
                <h4>Edit Data Jenis Pembayaran</h4>
                <div class="card-header-action">
                   <a href={{ route('admin.jenispembayaran.index') }} class="btn btn-danger">Back</a>
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
                            <input type="text" name="nominal" value="{{ $jenispembayaran->nominal }}" class="form-control" placeholder="Nominaln">
                            @error('nominal')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                     <div class="form-group col-md-4">
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